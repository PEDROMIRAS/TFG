-- Crear base de datos
CREATE DATABASE IF NOT EXISTS delivery_app;
USE delivery_app;

-- Tabla de usuarios (con rol)
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(120) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    telefono VARCHAR(20),
    direccion VARCHAR(255),
    rol ENUM('cliente','restaurante','repartidor','admin') DEFAULT 'cliente',
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de restaurantes
CREATE TABLE restaurantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    nombre VARCHAR(120) NOT NULL,
    descripcion TEXT,
    direccion VARCHAR(255),
    telefono VARCHAR(20),
    horario VARCHAR(100),
    activo TINYINT(1) DEFAULT 1,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

-- Tabla de productos
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    restaurante_id INT NOT NULL,
    nombre VARCHAR(120) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    disponible TINYINT(1) DEFAULT 1,
    FOREIGN KEY (restaurante_id) REFERENCES restaurantes(id)
    ON DELETE CASCADE
);

-- Tabla de pedidos
CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    restaurante_id INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    estado ENUM('pendiente', 'preparando', 'en_camino', 'entregado', 'cancelado') DEFAULT 'pendiente',
    total DECIMAL(10,2) NOT NULL DEFAULT 0,
    direccion_entrega VARCHAR(255),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (restaurante_id) REFERENCES restaurantes(id)
);

-- Tabla de items por pedido
CREATE TABLE pedidos_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pedido_id INT NOT NULL,
    producto_id INT NOT NULL,
    cantidad INT NOT NULL DEFAULT 1,
    precio_unitario DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (pedido_id) REFERENCES pedidos(id) ON DELETE CASCADE,
    FOREIGN KEY (producto_id) REFERENCES productos(id)
);

-- Tabla de repartidores (vinculada al usuario)
CREATE TABLE repartidores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    vehiculo VARCHAR(50),
    activo TINYINT(1) DEFAULT 1,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

-- Tabla de asignación de pedidos a repartidores
CREATE TABLE pedidos_reparto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pedido_id INT NOT NULL,
    repartidor_id INT NOT NULL,
    fecha_asignacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (pedido_id) REFERENCES pedidos(id),
    FOREIGN KEY (repartidor_id) REFERENCES repartidores(id)
);


-- INSERTS DE PRUEBA (Usuarios, restaurantes, productos)

-- Usuarios de prueba
INSERT INTO usuarios (nombre, email, password, telefono, direccion, rol) VALUES
('Carlos García', 'carlos@cliente.com', '1234', '600111222', 'Calle Sol 10', 'cliente'),
('Ana López', 'ana@pizzeria.com', '1234', '600333444', 'Calle Luna 21', 'restaurante'),
('Marta Ruiz', 'marta@reparto.com', '1234', '600555666', 'Calle Estrella 7', 'repartidor'),
('Admin Master', 'admin@system.com', 'admin1234', NULL, NULL, 'admin');

-- Repartidor vinculado al usuario de rol repartidor
INSERT INTO repartidores (usuario_id, vehiculo) VALUES
((SELECT id FROM usuarios WHERE email='marta@reparto.com'), 'Moto 125cc');

-- Restaurante asociado al usuario Ana (rol restaurante)
INSERT INTO restaurantes (usuario_id, nombre, descripcion, direccion, telefono, horario) VALUES
((SELECT id FROM usuarios WHERE email='ana@pizzeria.com'),
    'Pizzería Don Marco', 
    'Pizzas artesanales al horno de leña',
    'Calle Luna 21',
    '600333444',
    '12:00 - 23:00'
);

-- Productos del restaurante
INSERT INTO productos (restaurante_id, nombre, descripcion, precio) VALUES
((SELECT id FROM restaurantes WHERE nombre='Pizzería Don Marco'),
'Pizza Margarita', 'Clásica con tomate y mozzarella', 8.50),
((SELECT id FROM restaurantes WHERE nombre='Pizzería Don Marco'),
'Pizza Cuatro Quesos', 'Mozzarella, gorgonzola, parmesano, emmental', 10.00),
((SELECT id FROM restaurantes WHERE nombre='Pizzería Don Marco'),
'Pizza Barbacoa', 'Carne, cebolla, salsa BBQ', 11.50);