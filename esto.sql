CREATE DATABASE IF NOT EXISTS mi_base_de_datos;
USE mi_base_de_datos;

CREATE TABLE IF NOT EXISTS socios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    apellido VARCHAR(255),
    email VARCHAR(255),
    telefono VARCHAR(15)
);