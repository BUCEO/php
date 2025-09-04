<?php
declare(strict_types=1);

namespace ONDA\Core;

use PDO;
use PDOException;

final class Database {
    private static ?PDO $instance = null;

    private function __construct() {
        // Evitar instanciación directa
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
