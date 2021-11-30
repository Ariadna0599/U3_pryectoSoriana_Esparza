-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2021 a las 08:54:38
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
-- Base de datos: `soriana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `IDarticulo` int(11) NOT NULL,
  `nombreA` varchar(40) NOT NULL,
  `numeroA` int(5) NOT NULL,
  `precioA` int(10) NOT NULL,
  `noLoteA` int(25) NOT NULL,
  `tipoA` varchar(25) NOT NULL,
  `fechaCaducidadA` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`IDarticulo`, `nombreA`, `numeroA`, `precioA`, `noLoteA`, `tipoA`, `fechaCaducidadA`) VALUES
(1, 'Pepperoni100g', 1, 38, 122510, 'comestible', 22122021),
(2, '1kg quesoOxaca', 2, 55, 125124, 'comestible', 18122021),
(3, 'jeans', 1, 280, 12502, 'Vestimenta', 0),
(8, 'gelAntibacteria', 2, 60, 10505, 'higiene', 0),
(9, 'cubrebocas', 20, 10207, 20, 'higiene', 0),
(11, 'jabon', 34234, 12, 5464, 'higiene', 2012022);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articuloslista`
--

CREATE TABLE `articuloslista` (
  `IDlista_articulos` int(11) NOT NULL,
  `articulo1` varchar(20) NOT NULL,
  `articulo2` varchar(20) NOT NULL,
  `articulo3` varchar(20) NOT NULL,
  `articulo4` varchar(20) NOT NULL,
  `articulo5` varchar(20) NOT NULL,
  `articulo6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articuloslista`
--

INSERT INTO `articuloslista` (`IDlista_articulos`, `articulo1`, `articulo2`, `articulo3`, `articulo4`, `articulo5`, `articulo6`) VALUES
(1, 'pepperoni', 'queso', 'jeans', 'gelAntibacterial', 'cubrebocas', 'jabon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clienteregular`
--

CREATE TABLE `clienteregular` (
  `IDcliente` int(11) NOT NULL,
  `nombreC` varchar(15) NOT NULL,
  `noIdentificadorC` int(6) NOT NULL,
  `noTicketsC` int(100) NOT NULL,
  `comprasTotalesC` int(7) NOT NULL,
  `PuntosAcumC` int(60) NOT NULL,
  `fechadeIngresoC` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clienteregular`
--

INSERT INTO `clienteregular` (`IDcliente`, `nombreC`, `noIdentificadorC`, `noTicketsC`, `comprasTotalesC`, `PuntosAcumC`, `fechadeIngresoC`) VALUES
(1, 'Adolfo Huerta', 542545, 1, 6, 200, 29112021),
(2, 'Logan Paul', 515454, 2, 6, 200, 20112021);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inf_ticket`
--

CREATE TABLE `inf_ticket` (
  `IDticket` int(11) NOT NULL,
  `numeroT` int(15) NOT NULL,
  `fechaT` int(8) NOT NULL,
  `numeroSeguridad` int(5) NOT NULL,
  `montoTicket` int(10) NOT NULL,
  `sorianaUbi` varchar(20) NOT NULL,
  `nombreCajer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inf_ticket`
--

INSERT INTO `inf_ticket` (`IDticket`, `numeroT`, `fechaT`, `numeroSeguridad`, `montoTicket`, `sorianaUbi`, `nombreCajer`) VALUES
(1, 541214, 19112021, 64816498, 654, 'centro', 'Manuel'),
(2, 351254, 7112021, 6523518, 950, 'Henequen', 'Daniela');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`IDarticulo`);

--
-- Indices de la tabla `articuloslista`
--
ALTER TABLE `articuloslista`
  ADD PRIMARY KEY (`IDlista_articulos`);

--
-- Indices de la tabla `clienteregular`
--
ALTER TABLE `clienteregular`
  ADD PRIMARY KEY (`IDcliente`);

--
-- Indices de la tabla `inf_ticket`
--
ALTER TABLE `inf_ticket`
  ADD PRIMARY KEY (`IDticket`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `IDarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `articuloslista`
--
ALTER TABLE `articuloslista`
  MODIFY `IDlista_articulos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `clienteregular`
--
ALTER TABLE `clienteregular`
  MODIFY `IDcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `inf_ticket`
--
ALTER TABLE `inf_ticket`
  MODIFY `IDticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
