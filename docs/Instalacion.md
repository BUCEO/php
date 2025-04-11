# 🧪 Práctico: Instalar PHP, Apache y MySQL en Windows (sin Docker)

## 🎯 Objetivo
Instalar un entorno de desarrollo clásico en Windows utilizando Apache, PHP y MySQL de forma nativa, sin contenedores. Al finalizar, podrás correr aplicaciones PHP con conexión a base de datos.

---

## 🧩 Requisitos previos

- Sistema operativo: **Windows 10 o superior**.
- Tener permisos de administrador.
- Editor de texto recomendado: **VS Code** o **Notepad++**.

---

## 🛠 Opción 1: Usar XAMPP (recomendado para principiantes)

### 1. Descargar XAMPP
- Sitio oficial: [https://www.apachefriends.org/es/index.html](https://www.apachefriends.org/es/index.html)

### 2. Instalar
- Ejecutar el instalador como administrador.
- Seleccionar componentes: ✅ Apache, ✅ MySQL, ✅ PHP, ✅ phpMyAdmin.
- Instalar en `C:\xampp` (por defecto).

### 3. Iniciar servicios
- Abrir el **Panel de Control de XAMPP**.
- Hacer clic en “Start” en Apache y MySQL.
- Verificar:
  - Apache: abrir navegador en [http://localhost](http://localhost)
  - MySQL: abrir [http://localhost/phpmyadmin](http://localhost/phpmyadmin)

### 4. Crear un archivo PHP de prueba
- Ir a: `C:\xampp\htdocs\`
- Crear un archivo llamado `info.php` con:

```php
<?php
phpinfo();
?>
```
Acceder en el navegador: http://localhost/info.php

🛠 Opción 2: Instalación manual (avanzado)
1. Instalar Apache
Descargar desde: https://www.apachelounge.com/download/

Descomprimir en C:\Apache24

Agregar al PATH: C:\Apache24\bin

2. Instalar PHP
Descargar versión Thread Safe desde: https://windows.php.net/download/

Descomprimir en C:\php

Renombrar php.ini-development a php.ini y configurar:

Activar extensiones como mysqli, pdo_mysql, mbstring, etc.

Agregar C:\php al PATH.

3. Configurar Apache para PHP
Editar httpd.conf y agregar:

apache
Copy
Edit
# Al final del archivo
LoadModule php_module "C:/php/php8apache2_4.dll"
AddHandler application/x-httpd-php .php
PHPIniDir "C:/php"
También asegurarse de que el DocumentRoot apunte a una carpeta de trabajo como C:/www.

4. Instalar MySQL
Descargar desde: https://dev.mysql.com/downloads/installer/

Elegir la opción “Developer Default”.

Anotar usuario (root) y contraseña durante la instalación.

🧪 Prueba de conexión a MySQL desde PHP
Crear archivo conexion.php:

```php

<?php
$conexion = new mysqli("localhost", "root", "tu_contraseña", "mysql");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
echo "✅ Conexión exitosa a MySQL";
?>
```
Colocarlo en el htdocs o carpeta configurada y abrir en el navegador:
http://localhost/conexion.php

