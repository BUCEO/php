# 👤 Clase: Gestión de Usuarios en PHP con Email, Token y Password Hasheada

## 🎯 Objetivo
Desarrollar un sistema básico de gestión de usuarios que permita registrarse y hacer login utilizando correo electrónico y contraseña. Se implementa el hash de contraseñas y el uso de un token para validaciones futuras.

---

## 🧩 Estructura del proyecto
```plaintext

/gestion-usuarios/ 
├── registro.html 
├── login.html 
├── registro.php 
├── login.php 
├── conexion.php
└── users.sql



---
```


## 🛠️ Paso 1: Base de datos

### Script `users.sql` para crear tabla

```sql
CREATE DATABASE IF NOT EXISTS gestion;
USE gestion;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    token VARCHAR(64),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
🔌 Paso 2: Conexión a la base de datos (conexion.php)
```
```php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "gestion";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
```
📄 Paso 3: Formulario de registro (registro.html)
```html

<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="registro.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre completo" required><br><br>
        <input type="email" name="email" placeholder="Correo electrónico" required><br><br>
        <input type="password" name="password" placeholder="Contraseña" required><br><br>
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
```
🧠 Paso 4: Script de registro (registro.php)
```php
<?php
require 'conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$token = bin2hex(random_bytes(16));

$sql = "INSERT INTO usuarios (nombre, email, password, token) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nombre, $email, $password, $token);

if ($stmt->execute()) {
    echo "Usuario registrado correctamente. Token: <strong>$token</strong>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?> ```
📄 Paso 5: Formulario de login (login.html)
```html
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Correo electrónico" required><br><br>
        <input type="password" name="password" placeholder="Contraseña" required><br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
```
🧠 Paso 6: Script de login (login.php)
```php
<?php
require 'conexion.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $usuario = $resultado->fetch_assoc();

    if (password_verify($password, $usuario['password'])) {
        echo "<h3>Bienvenido, " . $usuario['nombre'] . "!</h3>";
        echo "<p>Tu token es: <strong>" . $usuario['token'] . "</strong></p>";
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

$stmt->close();
$conn->close();
?>
```
📚 Conceptos clave trabajados
password_hash() y password_verify()

bin2hex(random_bytes()) para crear un token

Seguridad básica (no mostrar passwords)

Conexión segura con mysqli y prepared statements

🧪 Evaluación
Preguntas de opción múltiple
¿Qué hace password_hash() en PHP?

a) Genera un código aleatorio

b) Convierte una cadena a minúsculas

c) Cifra la contraseña de forma segura 

d) Compara dos contraseñas

¿Cuál es la función de token en este contexto?

a) Sirve como ID del usuario

b) Permite identificar al usuario sin usar contraseña 

c) Activa un correo

d) No se usa realmente

¿Por qué usamos prepared statements en las consultas SQL?

a) Son más rápidos

b) Evitan SQL Injection 

c) Permiten acceso remoto

d) Requieren menos código

¿Qué hace password_verify()?

a) Crea una contraseña

b) Valida si el password hasheado coincide con el ingresado 

c) Muestra el token

d) Inicia sesión

✍️ Actividad práctica
Agregar validación para evitar registros duplicados por email.

Crear un panel de usuario que se muestre tras el login.

Agregar campos extra como teléfono o edad al registro.

Guardar sesiones con $_SESSION para mantener el login activo.

📌 Conclusión
Este ejemplo cubre los fundamentos de una gestión de usuarios segura y práctica en PHP. El uso de password_hash, tokens y validaciones son buenas prácticas para implementar en cualquier proyecto que requiera autenticación.

📬 Propuesta para continuar
Agregar un sistema de verificación por correo usando el token o implementar el cierre de sesión con session_destroy().

```yaml


---
```
Siguiente Clase: sesiones activas, cookies, recuperación de contraseña, con un panel de administración básico?







