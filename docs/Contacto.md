# 💬 Clase: Creación de un Formulario de Contacto en PHP

## 🎯 Objetivo
Aprender a construir un formulario de contacto funcional utilizando HTML y PHP, que permita al usuario enviar un mensaje al servidor (o simular su envío), validando los campos y mostrando una respuesta.

---

## 🧩 ¿Qué es un formulario de contacto?

Un **formulario de contacto** permite a los visitantes de una página web comunicarse con el administrador del sitio. Generalmente incluye campos como nombre, correo electrónico y mensaje. En esta clase, crearemos un ejemplo básico que simule el envío de datos.

---

## 🏗️ Estructura del Proyecto

/formulario-contacto ├── contacto.html # Formulario de contacto ├── procesar.php # Script que procesa el formulario

php-template


---

## 📝 Paso 1: Crear el formulario (contacto.html)

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
</head>
<body>
    <h2>Formulario de Contacto</h2>
    <form action="procesar.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="email">Correo electrónico:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea name="mensaje" id="mensaje" rows="5" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

```
📝 Paso 2: Procesar el formulario (procesar.php)

```php

<?php
// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Validación simple
if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
    echo "<h2>Gracias por contactarte, $nombre.</h2>";
    echo "<p>Hemos recibido tu mensaje:</p>";
    echo "<blockquote>$mensaje</blockquote>";
    echo "<p>Te responderemos a la brevedad al correo: <strong>$email</strong></p>";
} else {
    echo "<h2>Todos los campos son obligatorios. Por favor, completa el formulario.</h2>";
    echo '<a href="contacto.html">Volver al formulario</a>';
}
?>

```
📚 Conceptos trabajados
Formularios en HTML (input, textarea, required)

Método POST

Uso de $_POST en PHP

Validación básica de campos

Presentación dinámica de respuestas

🧪 Evaluación
Preguntas de opción múltiple
¿Qué etiqueta se utiliza para crear un área de texto más grande?

a) <input type="textarea">

b) <textarea> 

c) <input multiline>

d) <textblock>

¿Cuál es el propósito del atributo required?

a) Evita que se envíe el formulario si el campo está vacío 

b) Cambia el color del campo

c) Resalta los errores en PHP

d) Hace el campo solo lectura

¿Qué función cumple $_POST en PHP?

a) Envía datos a la base de datos

b) Recibe datos enviados desde un formulario por método POST 

c) Guarda archivos en el servidor

d) Detecta errores de sintaxis

¿Qué pasa si un campo no está required y no se valida en PHP?

a) PHP lo ignora

b) Puede procesarse vacío 

c) Genera error 404

d) Se reinicia el formulario

✍️ Actividad práctica
Modificar el código para:

Validar que el correo contenga un @ (usando filter_var).

Agregar un campo “Asunto” en el formulario.

Mostrar un resumen de todos los campos en una tabla HTML.

Opcional: Guardar los mensajes en un archivo mensajes.txt usando file_put_contents().

📌 Conclusión
Este ejemplo muestra cómo recibir y validar datos enviados por usuarios a través de un formulario. En un proyecto real, podríamos además:

Enviar correos electrónicos con mail()

Guardar mensajes en una base de datos

Aplicar validaciones más complejas (regex, filtros, captchas)

✅ Propuesta de trabajo para casa
Explorar cómo usar mail() para enviar el mensaje por correo. Verificar si el servidor local lo permite o usar herramientas como Mailtrap.


```yaml


---

```







