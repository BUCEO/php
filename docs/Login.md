# 💻 Clase: Creación de una Página Web de Login Simple con Formulario

## 🎯 Objetivo
Diseñar una página web simple en PHP con HTML que permita a un usuario ingresar su nombre de usuario y contraseña y verificar si son válidos, utilizando estructuras básicas de control y formularios.

---

## 🧩 ¿Qué es un login?

Un **login** es un formulario de autenticación que solicita **credenciales** (usuario y contraseña) para verificar el acceso de un usuario a un sistema. Es el primer paso en casi cualquier aplicación web.

---


## 🏗️ Estructura del Proyecto
```plaintext
/login-simple 
├── index.html # Formulario de login 
├── validar.php # Script que valida el login

php-template

---
```
## 📝 Paso 1: Crear el formulario (index.html)

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Simple</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="validar.php" method="POST">
        <label>Usuario:</label>
        <input type="text" name="usuario" required><br><br>

        <label>Contraseña:</label>
        <input type="password" name="clave" required><br><br>

        <input type="submit" value="Ingresar">
    </form>
</body>
</html>
```
📝 Paso 2: Validar las credenciales (validar.php)
```php

<?php
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

// Usuario y contraseña fijos (esto en proyectos reales se guarda en una base de datos)
$usuario_valido = "admin";
$clave_valida = "1234";

// Validación
if ($usuario == $usuario_valido && $clave == $clave_valida) {
    echo "<h2>Bienvenido, $usuario</h2>";
} else {
    echo "<h2>Usuario o contraseña incorrectos</h2>";
}
?>
```
📚 Conceptos trabajados
HTML: estructura básica y formularios

Método POST

Uso de $_POST en PHP

Comparación de strings

Operadores lógicos (&&)

Sentencias condicionales (if, else)

🧪 Evaluación
Preguntas de opción múltiple
¿Qué atributo HTML indica a qué archivo se envían los datos del formulario?

a) method

b) action 

c) name

d) value

¿Cuál es la superglobal en PHP que recibe los datos enviados por método POST?

a) $_GET

b) $_DATA

c) $_POST 

d) $POST

¿Cuál de estos comparadores se usa para verificar igualdad en PHP?

a) == 

b) =

c) ===

d) =>

¿Qué hace el siguiente código si se cumple la condición?

php
Copy
Edit
if ($usuario == "admin" && $clave == "1234") {
    echo "Bienvenido";
}
a) Envía los datos al servidor

b) Muestra "Bienvenido" 

c) Repite el formulario

d) Guarda el usuario en una base de datos

✍️ Actividad de desarrollo
Modificar el script para:

Agregar un segundo usuario válido (por ejemplo: user2 con clave abcd).

Mostrar el mensaje: "Acceso denegado. Intente nuevamente." si falla el login.

Agregar un botón para volver al formulario (<a href="index.html">Volver</a>).

📌 Conclusión
Este ejercicio introduce un flujo común en aplicaciones web: formularios + lógica de validación. Aunque el ejemplo es básico, sienta las bases para validar usuarios con bases de datos, sesiones y control de acceso en proyectos más avanzados.

