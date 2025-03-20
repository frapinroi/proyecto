CREATE DATABASE IF NOT EXISTS mydb;
USE mydb;

CREATE TABLE IF NOT EXISTS pinturas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    rgb VARCHAR(7) NOT NULL,
    comprar BOOLEAN NOT NULL DEFAULT FALSE,
    tengo BOOLEAN NOT NULL DEFAULT FALSE
);

INSERT INTO pinturas (nombre, rgb, comprar, tengo) VALUES
('Rojo Arcilla', '#A52A2A', TRUE, FALSE),
('Rojo Costra', '#DC143C', TRUE, TRUE),
('Rojo Sangre', '#8A0707', FALSE, TRUE),
('Naranja Fuego', '#FF4500', FALSE, TRUE),
('Mostaza Oscuro', '#D4A017', FALSE, TRUE),
('Amarillo Imperial', '#FFD700', TRUE, FALSE),
('Dorado Brillante', '#FFD700', TRUE, FALSE),
('Verde Orco', '#228B22', TRUE, FALSE),
('Verde Moho', '#556B2F', FALSE, FALSE),
('Verde Esmeralda', '#50C878', FALSE, TRUE),
('Verde Botella', '#006400', FALSE, TRUE),
('Verde Militar', '#4B5320', FALSE, TRUE),
('Azul Ultramar', '#1F3A93', FALSE, TRUE),
('Azul Acero', '#4682B4', TRUE, FALSE),
('Azul Profundo', '#00008B', FALSE, FALSE),
('Azul Medianoche', '#191970', FALSE, TRUE),
('Morado Real', '#800080', TRUE, FALSE),
('Morado Oscuro', '#301934', TRUE, FALSE),
('Amatista Brillante', '#9966CC', FALSE, TRUE),
('Negro Caos', '#000000', FALSE, TRUE),
('Gris Pizarra', '#708090', TRUE, FALSE),
('Gris Neutro', '#B0B0B0', FALSE, FALSE),
('Gris Cemento', '#A9A9A9', TRUE, TRUE),
('Cuero Tierra', '#8B4513', TRUE, FALSE),
('Madera Nogal', '#8B5A2B', TRUE, FALSE),
('Cobre Oxidado', '#B87333', FALSE, FALSE),
('Blanco Hueso', '#FAE7C8', FALSE, FALSE),
('Plata Mithril', '#C0C0C0', FALSE, TRUE),
('Turquesa Marino', '#40E0D0', TRUE, FALSE),
('Rosa Pastel', '#FFC0CB', FALSE, TRUE);
