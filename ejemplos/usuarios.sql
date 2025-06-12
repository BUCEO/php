
-- Crear base de datos
CREATE DATABASE IF NOT EXISTS usuarios_ta1 CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- Usar la base de datos
USE usuarios_ta1;

-- Crear tabla de usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    email  VARCHAR(50),
    activo  BOOLEAN  NOT NULL,
    tipo_usuario ENUM('admin', 'normal') NOT NULL
);

-- Insertar usuarios de ejemplo
INSERT INTO usuarios (usuario, contrasena, activo, tipo_usuario) VALUES
('admin', MD5('admin123'), 1,'admin'),
('usuario1', MD5('user123'), 1,'normal');


-- Crear el usuario ta1 con permisos en la base de datos
CREATE USER 'ta1'@'localhost' idenified by 'ta12025';
-- Asignar  permisos al usurio de la base de datos
GRANT ALL PRIVILEGES ON `usuarios_ta1`.* TO `ta1`@`localhost` ;
