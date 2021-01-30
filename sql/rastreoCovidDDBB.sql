-- phpMyAdmin SQL Dump
-- version 4.9.2 sabado noche
-- https://www.phpmyadmin.net/ 
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2021 a las 20:49:50
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
('86953730E', 'Samuel Encinas Rojo', '656656563', 'jiji@hotmail.com', '2021-01-30', '2021-02-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `Id` varchar(40) NOT NULL,
  `Descripcion` char(230) NOT NULL,
  `FechaNotificacion` date NOT NULL,
  `FechaEfectoEvento` date DEFAULT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`Id`, `Descripcion`, `FechaNotificacion`, `FechaEfectoEvento`, `Estado`) VALUES
('hdhshdhsdhdhdhdhdhdhdhdhd', 'Primer evento de prueba.', '2021-01-28', '2021-01-06', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
