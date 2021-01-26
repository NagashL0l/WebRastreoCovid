-- Tablas
CREATE TABLE ADMINISTRADOR (
    Dni CHAR(9) NOT NULL,
    Pass CHAR(20) NOT NULL
)

CREATE TABLE CASO (
    Dni CHAR(9) NOT NULL,
    Nombre CHAR(40) NOT NULL,
    Movil(12) NOT NULL, 
    Email CHAR(40) NOT NULL
)

CREATE TABLE EVENTO (
    Id INTEGER NOT NULL,
    Descripcion CHAR(700) NOT NULL,
    FechaNotificacion DATE NOT NULL, 
    FechaEfectoEvento DATE
)


-- Cargado de la base de datos
INSERT INTO ADMINISTRADOR (dni, contraseña) VALUES
    (12422961V, contrasena),
    (25408819Y, contrasena),
    (12530226X, contrasena),
    (96787579Z, contrasena),
    (72273735F, contrasena),
    (09002826M, contrasena),
    (48222890D, contrasena);