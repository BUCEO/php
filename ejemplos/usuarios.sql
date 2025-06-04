
-- Crear base de datos
CREATE DATABASE IF NOT EXISTS usuarios_db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- Usar la base de datos
USE usuarios_db;

-- Crear tabla de usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(50) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    tipo_usuario ENUM('admin', 'normal') NOT NULL
);

-- Insertar usuarios de ejemplo
INSERT INTO usuarios (nombre_usuario, contrasena, tipo_usuario) VALUES
('admin', MD5('admin123'), 'admin'),
('usuario1', MD5('user123'), 'normal');
