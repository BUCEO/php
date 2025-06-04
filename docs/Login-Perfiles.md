CONTENIDO
formulario.html: Formulario HTML básico con campos para usuario y contraseña.

login.php: Script PHP que realiza la autenticación usando PDO.

Instrucciones, SQL para crear la base de datos y guía para ejecución.

Características
Dos tipos de usuario: admin y normal.

Conexión a la base de datos utilizando PDO con try-catch para manejo de errores.

Mensajes de error simples en caso de fallo de conexión o credenciales incorrectas.

Cuando quieras, también puedo generar una versión Dockerizada para usar con php-apache y mysql, ideal para prácticas en entornos aislados.

¿Querés eso como siguiente paso?


El archivo SQL para crear la base de datos, la tabla de usuarios y algunos registros de ejemplo:
usuarios.sql

Incluye:

Creación de la base de datos usuarios_db.

Tabla usuarios con campos id, nombre_usuario, contrasena, y tipo_usuario.

Inserción de un usuario administrador y uno normal con contraseñas encriptadas con MD5 (puede ser actualizado a un método más seguro como password_hash() para producción).
