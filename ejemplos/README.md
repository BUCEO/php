# Ejemplo: Formulario de Login con PHP y Base de Datos

Este proyecto demuestra un formulario básico de login que se conecta a una base de datos MySQL usando PDO.

## Estructura de la base de datos

```sql
CREATE DATABASE usuarios_db;

USE usuarios_db;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'normal') NOT NULL DEFAULT 'normal'
);

INSERT INTO usuarios (username, password, role) VALUES
('admin', 'admin123', 'admin'),
('usuario', 'user123', 'normal');
```

## Archivos incluidos

- `formulario.html`: Formulario de login.
- `login.php`: Lógica de conexión y autenticación.
- `README.md`: Instrucciones y SQL de ejemplo.

## Requisitos

- Servidor con PHP y MySQL.
- Configurar credenciales de base de datos en `login.php`.
