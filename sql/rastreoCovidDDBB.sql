-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2021 a las 11:26:14
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rastreocovidddbb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Dni` char(9) NOT NULL,
  `Pass` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Dni`, `Pass`) VALUES
('12422961V', 'contrasena'),
('25408819Y', 'contrasena'),
('12530226X', 'contrasena'),
('96787579Z', 'contrasena'),
('72273735F', 'contrasena'),
('09002826M', 'contrasena'),
('48222890D', 'contrasena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caso`
--

CREATE TABLE `caso` (
  `Dni` char(9) NOT NULL,
  `Nombre` char(40) NOT NULL,
  `Movil` char(12) NOT NULL,
  `Email` char(40) NOT NULL,
  `FechaApertura` date NOT NULL,
  `FechaCierre` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `caso`
--

INSERT INTO `caso` (`Dni`, `Nombre`, `Movil`, `Email`, `FechaApertura`, `FechaCierre`) VALUES
('48002548F', 'Guillermo Rojas', '888555444', 'ejjj@hotmail.com', '2021-01-30', '2021-02-04'),
('86953730E', 'Irene Tyno', '656656563', 'ejemel@hotmail.com', '2021-01-30', '0000-00-00'),
('86986730M', 'Orson Grman', '656656563', 'ggt@hotmail.com', '2021-01-30', '2021-02-02'),
('57753730A', 'Ninoska Monserrat', '656656563', 'ninmmo@hotmail.com', '2021-01-26', '0000-00-00'),
('71153730X', 'Samuel Encinas Rojo', '656656563', 'tema@hotmail.com', '2021-01-01', '2021-01-26'),
('71190229P', 'Keiino', '671556147', 'keiino@mgp.no', '2020-12-29', '2021-02-06'),
('82201340Q', 'Raylee Hero', '688888147', 'rayleepr@gmail.com', '2021-01-23', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `Id` int(11) NOT NULL,
  `Descripcion` char(230) NOT NULL,
  `FechaNotificacion` date NOT NULL,
  `FechaEfectoEvento` date DEFAULT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`Id`, `Descripcion`, `FechaNotificacion`, `FechaEfectoEvento`, `Estado`) VALUES
(1, 'Botellón en el parque de la Paz.', '2021-01-28', '2021-01-06', 1),
(2, 'Reunión familiar en la calle Embajadores.','2021-01-31', '2021-02-02', 4),
(3, 'Fiesta de trabajo con 2 contagios.', '2021-02-02', '0000-00-00', 5),
(4, 'Botellón en la cueva del castillo.', '2021-02-02', '0000-00-00', 5),
(5, 'Agruación de ancianos rebeldes.', '2021-01-31', '2021-02-02', 3),
(6, 'Guardería llena de contagios', '2021-01-30', '2021-02-03', 4),
(7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2021-01-29', '2021-02-04', 4),
(8, 'Amet lorem ipsum dolor sit , consectetur.', '2021-01-28', '2021-02-05', 1),
(9, 'Dolor sit amet, consectetur adipiscing elit.', '2021-01-25', '2021-02-09', 1),
(10, 'Fiesta en casa de la abuela, a las 20.00.', '2021-01-30', '2021-02-02', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
