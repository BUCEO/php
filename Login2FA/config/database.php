<?php
// config/database.php
class Database {
    private static $instance = null;
    private $connection;
    
    private function __construct() {
        $this->connection = new mysqli(
            $_ENV['DB_HOST'],
            $_ENV['DB_USER'],
            $_ENV['DB_PASS'],
            $_ENV['DB_NAME']
        );
        
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    
    public function getConnection() {
        return $this->connection;
    }
}

// models/User.php
class User {
    private $db;
    private $id;
    private $email;
    private $password_hash;
    private $two_factor_secret;
    private $is_verified;
    
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
    
    public function register($email, $password) {
        // Validar email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email format");
        }
        
        // Validar complejidad de contraseña
        if (!$this->validatePasswordComplexity($password)) {
            throw new Exception("Password does not meet complexity requirements");
        }
        
        // Verificar si el usuario ya existe
        $stmt = $this->db->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            throw new Exception("User already exists");
        }
        
        // Hash de la contraseña
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        
        // Insertar usuario
        $stmt = $this->db->prepare("INSERT INTO users (email, password_hash) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $password_hash);
        
        if ($stmt->execute()) {
            $this->id = $stmt->insert_id;
            $this->email = $email;
            
            // Guardar en historial de contraseñas
            $this->savePasswordHistory($this->id, $password_hash);
            
            // Generar y enviar email de verificación
            $this->sendVerificationEmail($email);
            
            return true;
        }
        
        return false;
    }
    
    public function login($email, $password, $two_factor_code = null) {
        // Validar credenciales
        $stmt = $this->db->prepare("SELECT id, email, password_hash, two_factor_secret, is_verified FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 0) {
            throw new Exception("Invalid credentials");
        }
        
        $user = $result->fetch_assoc();
        
        // Verificar contraseña
        if (!password_verify($password, $user['password_hash'])) {
            $this->logAuditEvent(null, "FAILED_LOGIN", "Failed login attempt for email: $email");
            throw new Exception("Invalid credentials");
        }
        
        // Verificar si el email está confirmado
        if (!$user['is_verified']) {
            throw new Exception("Email not verified");
        }
        
        // Verificar 2FA si está habilitado
        if (!empty($user['two_factor_secret'])) {
            if ($two_factor_code === null) {
                // Solicitar código 2FA
                return ['requires_2fa' => true];
            }
            
            if (!$this->verify2FACode($user['two_factor_secret'], $two_factor_code)) {
                $this->logAuditEvent($user['id'], "FAILED_2FA", "Failed 2FA attempt");
                throw new Exception("Invalid 2FA code");
            }
        }
        
        // Iniciar sesión
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        
        $this->logAuditEvent($user['id'], "LOGIN", "Successful login");
        
        return ['success' => true];
    }
    
    private function validatePasswordComplexity($password) {
        // Mínimo 8 caracteres
        if (strlen($password) < 8) {
            return false;
        }
        
        // Al menos una mayúscula, una minúscula, un número y un carácter especial
        if (!preg_match('/[A-Z]/', $password) ||
            !preg_match('/[a-z]/', $password) ||
            !preg_match('/[0-9]/', $password) ||
            !preg_match('/[^A-Za-z0-9]/', $password)) {
            return false;
        }
        
        return true;
    }
    
    private function savePasswordHistory($user_id, $password_hash) {
        $stmt = $this->db->prepare("INSERT INTO password_history (user_id, password_hash) VALUES (?, ?)");
        $stmt->bind_param("is", $user_id, $password_hash);
        $stmt->execute();
    }
    
    private function sendVerificationEmail($email) {
        // Implementar envío de email de verificación
        // Este es un ejemplo simplificado
        $token = bin2hex(random_bytes(32));
        $verification_link = "https://example.com/verify.php?email=" . urlencode($email) . "&token=" . $token;
        
        // Guardar token en base de datos (implementación no mostrada por brevedad)
        // Enviar email
        mail($email, "Verify your account", "Click here to verify: $verification_link");
    }
    
    public function verify2FACode($secret, $code) {
        // Implementar verificación de código 2FA
        // Usando Google Authenticator o similar
        require_once 'vendor/autoload.php';
        $googleAuthenticator = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();
        return $googleAuthenticator->checkCode($secret, $code);
    }
    
    private function logAuditEvent($user_id, $action, $details) {
        $ip_address = $_SERVER['REMOTE_ADDR'];
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        
        $stmt = $this->db->prepare("INSERT INTO audit_log (user_id, action, ip_address, user_agent, details) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issss", $user_id, $action, $ip_address, $user_agent, $details);
        $stmt->execute();
    }
    
    // Resto de métodos (reset password, change password, etc.)
}

// Uso del sistema
try {
    $user = new User();
    
    // Registro
    $user->register("user@example.com", "SecurePassword123!");
    
    // Login
    $result = $user->login("user@example.com", "SecurePassword123!");
    
    if (isset($result['requires_2fa'])) {
        // Solicitar código 2FA al usuario
        $two_factor_code = $_POST['2fa_code'] ?? null;
        $result = $user->login("user@example.com", "SecurePassword123!", $two_factor_code);
    }
    
    if ($result['success']) {
        // Redirigir al dashboard
        header("Location: dashboard.php");
        exit();
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>