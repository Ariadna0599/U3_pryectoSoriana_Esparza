-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2021 a las 14:57:59
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_coppel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `ID_empleado` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_paterno` varchar(20) NOT NULL,
  `apellido_materno` varchar(20) NOT NULL,
  `correo_electronico` varchar(20) NOT NULL,
  `telefono` int(14) NOT NULL,
  `direccion` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID_empleado`, `nombre`, `apellido_paterno`, `apellido_materno`, `correo_electronico`, `telefono`, `direccion`) VALUES
(1, 'Emmanuel', 'Casas', 'Medina', 'chemacc@gmail.com', 656241253, 'ORIENTAL NO. 6 , LA PAZ , PUEBLA , PUE , C.P. 72160'),
(2, 'Rodrigo', 'Vasquez', 'Morales', 'rodrigovzm@gmail.com', 656245358, 'LUIS DONALDO COLOSIO 2300 , UNIDAD DE PORTIVA , NOGALES , SON , C.P. 84065\r\n'),
(3, 'Pablo', 'Lopez', 'Jauregi', 'plopezj@gmail.com', 65624489, 'CALLE ABETO 833 , VILLAS DEL NOGALAR , RAMOS ARIZPE , COAH , C.P. 25904'),
(4, 'Arturo', 'Sanchez', 'Vega', 'r2d2sv@gmail.com', 654646922, '10 90 A , LOS LOBOS , TIJUANA , BC , C.P. 22207'),
(5, 'Eduardo', 'Salas', 'Perez', 'edusalp@gmail.com', 656299645, 'CALLE PIPILA 65 , CENTRO , XALAPA , VER , C.P. 91000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `ID_empleado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
