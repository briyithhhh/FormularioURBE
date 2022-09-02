-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220513.fb9d9feb74
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2022 a las 21:08:45
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `urbe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `nomti` varchar(100) DEFAULT NULL,
  `banco` varchar(100) DEFAULT NULL,
  `ref` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`nomti`, `banco`, `ref`) VALUES
('manuel', 'm,bnm', 54456),
('Moises David Cortez Leiva', 'Provincial', 766890),
('Jose', 'Mercantil', 5362372);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `cedula` int(10) DEFAULT NULL,
  `telefono` int(15) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`nombre`, `apellido`, `cedula`, `telefono`, `direccion`, `correo`, `id`) VALUES
('Briyith Paola', 'Portillo', 30355033, 2147483647, '4004', 'hcdoeiu@hotmail.com', 5192),
('Moises', 'Cortez', 36547895, 414677543, '4004', 'moisesc@gmail', 707),
('Jose ', 'Colombo', 36547895, 955673793, '4004', 'fyhgfvjy@gimail.com', 5225);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



