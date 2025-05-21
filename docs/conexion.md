# Conexión a la Base de Datos con PHP (PDO)

En PHP, la forma recomendada de conectarse a bases de datos es utilizando PDO (PHP Data Objects). Esta extensión permite acceder a diferentes bases de datos mediante una misma interfaz.

## Sintaxis básica para conectar
```php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=pizzeria", "usuario", "contraseña");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
```
### Componentes clave:
- **host**: dirección del servidor, normalmente `localhost`.
- **dbname**: nombre de la base de datos.
- **usuario** y **contraseña**: credenciales de acceso.
- `PDO::ATTR_ERRMODE`: define cómo se manejan los errores.

---