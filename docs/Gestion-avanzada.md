
📁 Estructura del Proyecto MVC
```plaintext

/usuario-mvc
├── config/
│   └── database.php
├── controllers/
│   └── UsuarioController.php
├── models/
│   └── Usuario.php
├── views/
│   ├── usuarios/
│   │   ├── index.php
│   │   ├── create.php
│   │   ├── edit.php
│   │   └── login.php
│   └── layout/
│       └── header.php
├── public/
│   └── index.php
├── .htaccess
└── README.md
```
🧱 1. config/database.php
```php

<?php
class Database {
    public static function conectar() {
        $conexion = new mysqli("localhost", "root", "", "mvc_php");
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }
        return $conexion;
    }
}
```
🧠 2. models/Usuario.php
```php


<?php
require_once 'config/database.php';

class Usuario {
    public static function obtenerTodos() {
        $db = Database::conectar();
        return $db->query("SELECT * FROM usuarios");
    }

    public static function obtenerPorId($id) {
        $db = Database::conectar();
        return $db->query("SELECT * FROM usuarios WHERE id = $id")->fetch_assoc();
    }

    public static function crear($nombre, $email, $password) {
        $db = Database::conectar();
        $token = bin2hex(random_bytes(16));
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        return $db->query("INSERT INTO usuarios (nombre, email, password, token) VALUES ('$nombre', '$email', '$passwordHash', '$token')");
    }

    public static function actualizar($id, $nombre, $email) {
        $db = Database::conectar();
        return $db->query("UPDATE usuarios SET nombre='$nombre', email='$email' WHERE id=$id");
    }

    public static function eliminar($id) {
        $db = Database::conectar();
        return $db->query("DELETE FROM usuarios WHERE id=$id");
    }

    public static function login($email, $password) {
        $db = Database::conectar();
        $res = $db->query("SELECT * FROM usuarios WHERE email='$email'");
        $usuario = $res->fetch_assoc();
        if ($usuario && password_verify($password, $usuario['password'])) {
            return $usuario;
        }
        return false;
    }
}
```
🎮 3. controllers/UsuarioController.php
```php

<?php
require_once 'models/Usuario.php';

class UsuarioController {
    public function index() {
        $usuarios = Usuario::obtenerTodos();
        require_once 'views/usuarios/index.php';
    }

    public function create() {
        require_once 'views/usuarios/create.php';
    }

    public function store() {
        Usuario::crear($_POST['nombre'], $_POST['email'], $_POST['password']);
        header("Location: index.php?controller=usuario&action=index");
    }

    public function edit() {
        $usuario = Usuario::obtenerPorId($_GET['id']);
        require_once 'views/usuarios/edit.php';
    }

    public function update() {
        Usuario::actualizar($_POST['id'], $_POST['nombre'], $_POST['email']);
        header("Location: index.php?controller=usuario&action=index");
    }

    public function delete() {
        Usuario::eliminar($_GET['id']);
        header("Location: index.php?controller=usuario&action=index");
    }

    public function login() {
        require_once 'views/usuarios/login.php';
    }

    public function loginPost() {
        $usuario = Usuario::login($_POST['email'], $_POST['password']);
        if ($usuario) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header("Location: index.php?controller=usuario&action=index");
        } else {
            echo "Login fallido.";
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: index.php?controller=usuario&action=login");
    }
}
```
🌐 4. public/index.php
```php

<?php
session_start();

$controller = $_GET['controller'] ?? 'usuario';
$action = $_GET['action'] ?? 'login';

require_once "controllers/" . ucfirst($controller) . "Controller.php";
$controllerName = ucfirst($controller) . "Controller";
$controlador = new $controllerName();
$controlador->$action();
```
👁️ 5. views/usuarios/index.php
```php

<h2>Usuarios</h2>
<a href="index.php?controller=usuario&action=create">Crear nuevo</a>
<table>
<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Acciones</th></tr>
<?php while($u = $usuarios->fetch_assoc()): ?>
<tr>
    <td><?= $u['id'] ?></td>
    <td><?= $u['nombre'] ?></td>
    <td><?= $u['email'] ?></td>
    <td>
        <a href="index.php?controller=usuario&action=edit&id=<?= $u['id'] ?>">Editar</a> |
        <a href="index.php?controller=usuario&action=delete&id=<?= $u['id'] ?>">Eliminar</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
<a href="index.php?controller=usuario&action=logout">Cerrar sesión</a>
```
➕ 6. views/usuarios/create.php
```php

<h2>Nuevo usuario</h2>
<form action="index.php?controller=usuario&action=store" method="POST">
    <input name="nombre" placeholder="Nombre" required>
    <input name="email" type="email" placeholder="Email" required>
    <input name="password" type="password" placeholder="Password" required>
    <input type="submit" value="Guardar">
</form>
```
📝 7. views/usuarios/edit.php
```php

<h2>Editar usuario</h2>
<form action="index.php?controller=usuario&action=update" method="POST">
    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
    <input name="nombre" value="<?= $usuario['nombre'] ?>" required>
    <input name="email" value="<?= $usuario['email'] ?>" required>
    <input type="submit" value="Actualizar">
</form>
```
🔐 8. views/usuarios/login.php
```php

<h2>Iniciar sesión</h2>
<form action="index.php?controller=usuario&action=loginPost" method="POST">
    <input name="email" type="email" placeholder="Email">
    <input name="password" type="password" placeholder="Password">
    <input type="submit" value="Ingresar">
</form>
```
📌 9. .htaccess (para Apache)
```apache

RewriteEngine On
RewriteRule ^$ public/index.php [L]
RewriteRule (.*) public/$1 [L]
```
🧪 SQL (base de datos)
```sql

CREATE DATABASE mvc_php;
USE mvc_php;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password TEXT,
    token VARCHAR(255)
);```
📚 10. README.md (Resumen del proyecto)
```markdown

# CRUD de Usuarios en PHP con MVC

Este proyecto implementa un sistema de registro, login y gestión de usuarios usando arquitectura MVC sin frameworks.

## Requisitos

- PHP 7.4+
- MySQL
- Apache o similar
- Composer (opcional)

## Funcionalidades

- Registro de usuario
- Login con password hasheado
- Logout
- Listado, edición y eliminación
- Patrón MVC

## Estructura

- `models/` - Lógica de acceso a datos
- `controllers/` - Controladores para manejar la lógica
- `views/` - Archivos de vista
- `public/` - Punto de entrada

## Instalación

1. Crear base de datos y tabla (`mvc_php`)
2. Configurar credenciales en `config/database.php`
3. Acceder a `public/index.php`

---
```