# Clase 11 - Patrón Singleton en PHP

## 🎯 Objetivo
Comprender el uso del patrón **Singleton** para gestionar una única instancia de conexión a la base de datos en PHP.

## 🔑 Conceptos Clave
- El patrón **Singleton** asegura que solo exista **una única instancia** de una clase.
- Es útil para **recursos compartidos**, como conexiones a base de datos.
- Se evita el `new` fuera de la clase, centralizando la creación en un método estático.

## 📄 Ejemplo: `Database.php`
```php
<?php
declare(strict_types=1);

namespace ONDA\Core;

use PDO;
use PDOException;

final class Database {
    private static ?PDO $instance = null;

    private function __construct() {
        // Constructor privado para evitar instanciación
    }

    public static function getInstance(): PDO {
        if (self::$instance === null) {
            $dsn = sprintf(
                'mysql:host=%s;dbname=%s;charset=utf8',
                $_ENV['DB_HOST'],
                $_ENV['DB_NAME']
            );
            self::$instance = new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }
        return self::$instance;
    }
}
Ventajas

Evita múltiples conexiones innecesarias.

Centraliza la configuración de la base de datos.

Código más limpio y mantenible.
