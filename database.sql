CREATE DATABASE IF NOT EXISTS servicio_bd;
USE servicio_bd;

CREATE TABLE IF NOT EXISTS usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

INSERT INTO usuarios(nombre,email) VALUES
('Diego','diego@email.com'),
('Admin','admin@email.com');
