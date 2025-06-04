# Formularios en PHP

## Introducción

Los formularios HTML permiten a los usuarios enviar datos a un servidor web. En PHP, estos datos se procesan mediante variables especiales (`$_GET`, `$_POST` y `$_REQUEST`). Comprender cómo funcionan los formularios es fundamental para interactuar con usuarios: desde iniciar sesión, cargar archivos o completar encuestas, hasta crear comentarios o enviar mensajes.

## ¿Qué es un formulario HTML?

Un formulario HTML se crea con la etiqueta `<form>`. En general, incluye campos como entradas de texto, botones de opción, listas desplegables y botones de envío.

```html
<form action="procesar.php" method="post">
  <label>Nombre:</label>
  <input type="text" name="nombre">
  <input type="submit" value="Enviar">
</form>
action: archivo PHP que procesará los datos.

method: método de envío (GET o POST).

Métodos de Envío: GET vs POST
Método GET
Los datos se envían en la URL.

Máximo de caracteres (depende del navegador).

No es seguro para contraseñas o datos sensibles.

Ideal para búsquedas, filtros y navegación.

Ejemplo:

```html

<form action="buscar.php" method="get">
  <label>Buscar:</label>
  <input type="text" name="q">
  <input type="submit" value="Buscar">
</form>
```
```php
// buscar.php
echo "Buscaste: " . $_GET["q"];
```
Resultado en URL: buscar.php?q=php

Método POST
Los datos se envían en el cuerpo del mensaje HTTP.

Sin límite práctico de tamaño.

Más seguro, no se muestran en la URL.

Ideal para formularios de login, registro, carga de archivos.

Ejemplo:

```html

<form action="procesar.php" method="post">
  <label>Email:</label>
  <input type="email" name="email">
  <input type="submit" value="Enviar">
</form>
```
```php
// procesar.php
echo "Tu email es: " . $_POST["email"];
```
Acceso a datos del formulario
$_GET: datos enviados con el método GET.

$_POST: datos enviados con el método POST.

$_REQUEST: combina ambos (aunque no se recomienda su uso general).

Validación básica
Es fundamental verificar los datos antes de usarlos:

```php
if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
  echo "Tu nombre es " . htmlspecialchars($_POST["nombre"]);
} else {
  echo "Por favor, ingresá tu nombre.";
}
```
Buenas prácticas
Usar htmlspecialchars() para evitar inyecciones XSS.

Validar y sanitizar todos los datos del usuario.

Diferenciar bien cuándo usar GET y cuándo POST.

No confiar nunca en los datos del cliente sin validarlos en el servidor.

Ejercicio práctico para clase
HTML (formulario.html)
```html
<form action="saludo.php" method="post">
  <label>Nombre:</label>
  <input type="text" name="nombre"><br>
  <label>Edad:</label>
  <input type="number" name="edad"><br>
  <input type="submit" value="Saludar">
</form>
```
PHP (saludo.php)
```php
if (isset($_POST["nombre"]) && isset($_POST["edad"])) {
  $nombre = htmlspecialchars($_POST["nombre"]);
  $edad = (int) $_POST["edad"];

  echo "Hola $nombre, tenés $edad años.";
} else {
  echo "Faltan datos.";
}
```
Conclusión
Los formularios son la base de cualquier aplicación web interactiva. Comprender cómo PHP procesa los datos enviados por el usuario permite construir sitios dinámicos, seguros y funcionales. Recordá validar siempre los datos y elegir el método correcto según el caso.
