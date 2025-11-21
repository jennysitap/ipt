CREATE DATABASE ostec;
USE ostec;

CREATE TABLE usuarios (
    ID_usuario INT NOT NULL AUTO_INCREMENT,
    AP_paterno CHAR(50),
    AP_materno CHAR(50),
    Correo VARCHAR(50),
    Contrasena VARCHAR(255),
    Fecha_registro DATE,
    Nombre VARCHAR(50),
    role ENUM('user', 'admin') NOT NULL DEFAULT 'user',  -- Campo para el rol
    PRIMARY KEY (ID_usuario)
);

CREATE TABLE servicios (
    ID_servicio INT PRIMARY KEY,
    Nombre CHAR(50),
    Descripcion CHAR(255),
    Precio NUMERIC(10, 2),
    Duracion VARCHAR(15),
    Categoria CHAR(50),
    Estado CHAR(10)
);

CREATE TABLE proyectos (
    ID_proyecto INT PRIMARY KEY,
    Nombre CHAR(50),
    Descripcion CHAR(255),
    Fecha_inicio DATE,
    Fecha_final DATE,
    Estado CHAR(10),
    Responsable CHAR(50),
    Categoria CHAR(50),
    ID_servicio INT,
    Precio_total NUMERIC(10, 2),
    Imagen VARCHAR(100),
    FOREIGN KEY (ID_servicio) REFERENCES servicios(ID_servicio) ON DELETE SET NULL
);

-- Agregar usuarios, uno como admin y otro como usuario normal
INSERT INTO usuarios (AP_paterno, AP_materno, Correo, Contrasena, Fecha_registro, Nombre, role) 
VALUES ('Rodriguez', 'Mendoza', 'ever.r@email.com', 'password123', '2024-01-14', 'Ever', 'admin');

INSERT INTO usuarios (AP_paterno, AP_materno, Correo, Contrasena, Fecha_registro, Nombre, role) 
VALUES ('Gomez', 'Lopez', 'juan.gomez@email.com', 'password123', '2024-01-15', 'Juan', 'user');

INSERT INTO usuarios (AP_paterno, AP_materno, Correo, Contrasena, Fecha_registro, Nombre, role) 
VALUES ('Chacon', 'Bencomo', 'cbas.ch@email.com', 'password123', '2024-09-05', 'Sebastian', 'user');

INSERT INTO usuarios (AP_paterno, AP_materno, Correo, Contrasena, Fecha_registro, Nombre, role) 
VALUES ('Castillo', 'Mendoza', 'jennycasti.mens07@gmail.com', 'password123', '2024-09-05', 'Jennifer', 'user');


CREATE TABLE restauracion (
    ID_producto integer not null auto_increment,
    Nombre CHAR(50),
    Marca CHAR(50),
    Descripcion CHAR(255),
    Cantidad INT,
    Precio NUMERIC(10, 2),
    primary key (ID_producto)
);

INSERT INTO restauracion (ID_producto, Nombre, Marca, Descripcion, Cantidad, Precio)
VALUES 
(0,'Ladrillo Cerámico', 'Cerámica S.A.', 'Ladrillo cerámico de alta resistencia.', 500, 0.35),
(0,'Cemento Portland', 'CEMEX', 'Cemento de alta calidad.', 300, 5.50),
(0,'Pintura Epóxica', 'Pinturas XYZ', 'Pintura epóxica de alta durabilidad.', 150, 12.00);


select * from usuarios;

INSERT INTO servicios (ID_servicio, Nombre, Descripcion, Precio, Duracion, Categoria, Estado)
VALUES
(1, 'Desarrollo Web', 'Creación y diseño de sitios web adaptados a las necesidades del cliente.', 500.00, '2 semanas', 'Desarrollo', 'Activo'),
(2, 'Consultoría IT', 'Asesoramiento sobre infraestructura tecnológica y soluciones IT para empresas.', 300.00, '1 mes', 'Consultoría', 'Activo'),
(3, 'Marketing Digital', 'Campañas de marketing en redes sociales, SEO y PPC para aumentar la visibilidad online.', 350.00, '1 mes', 'Marketing', 'Inactivo');

INSERT INTO proyectos (ID_proyecto, Nombre, Descripcion, Fecha_inicio, Fecha_final, Estado, Responsable, Categoria, ID_servicio, Precio_total, Imagen)
VALUES
(1, 'Sitio Web Empresa X', 'Desarrollo de un sitio web para la Empresa X, con funcionalidades de comercio electrónico.', '2024-01-10', '2024-02-10', 'En progreso', 'Juan Pérez', 'Desarrollo', 1, 1200.00,'WhatsApp Image 2024-12-07 at 10.26.13 PM.jpeg'),
(2, 'Consultoría Infraestructura', 'Estudio y mejora de la infraestructura tecnológica de la empresa Y.', '2024-02-01', '2024-03-01', 'Pendiente', 'Ana Gómez', 'Consultoría', 2, 800.00,'6.jpg'),
(3, 'Campaña SEO Empresa Z', 'Implementación de una estrategia de SEO para mejorar el posicionamiento de la empresa Z en Google.', '2024-03-01', '2024-03-31', 'Completado', 'Luis Martínez', 'Marketing', 3, 1050.00,'9.jpg');


