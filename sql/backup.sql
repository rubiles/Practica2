-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-12-2014 a las 21:24:41
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmobiliaria`
--

CREATE TABLE IF NOT EXISTS `inmobiliaria` (
`id` int(11) NOT NULL,
  `fecha_alta` date NOT NULL,
  `nombre_vivienda` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `provincia` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` enum('alquiler','venta') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'alquiler',
  `precio` int(11) NOT NULL,
  `m2` int(11) DEFAULT NULL,
  `n_hab` smallint(1) DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inmobiliaria`
--

INSERT INTO `inmobiliaria` (`id`, `fecha_alta`, `nombre_vivienda`, `provincia`, `direccion`, `telefono`, `mail`, `tipo`, `precio`, `m2`, `n_hab`, `descripcion`) VALUES
(10, '2014-12-06', 'PRUEBA_CARPETA', 'PRUEBA_CARPETA', 'PRUEBA_CARPETA', 'PRUEBA_CARPETA', 'PRUEBA_CARPETA', 'alquiler', 12, 12, 12, '12'),
(13, '2014-12-06', '123', '123', '123', '123eeewd', '123', 'alquiler', 1234, 12, 12, '12'),
(14, '2014-12-06', '12', '12', '12', '12', '12', 'venta', 12, 12, 12, '12'),
(16, '2014-12-06', '16', '16', '16', '16', '16', 'alquiler', 16, 16, 16, '16'),
(18, '2014-12-06', '18', '18', '18', '18', '18', 'alquiler', 18, 18, 18, '18'),
(19, '2014-12-06', '18', '18', '18', '18', '18', 'alquiler', 18, 18, 18, '18'),
(21, '2014-12-06', '21', '21', '21', '122', '1221', 'alquiler', 121, 21, 12, '21'),
(22, '2014-12-07', '14', '12', '14', '14', '14', 'alquiler', 14, 14, 14, '14'),
(23, '2014-12-07', '23', '23', '23', '23', '23', 'venta', 23, 23, 23, '23'),
(24, '2014-12-08', '1', '1', '1', '1', '1', 'alquiler', 1, 1, 1, '1'),
(25, '2014-12-08', '123', '1', '12', '12', '12', 'alquiler', 12, 12, 12, '12'),
(26, '2014-12-08', 'Piso de estudiantes 3 habitaciones', 'granada', 'C/Trajano 8', '622622622', 'carlos.rubi.gt@gmail', 'alquiler', 12345, 1234, 123, '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inmobiliaria`
--
ALTER TABLE `inmobiliaria`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inmobiliaria`
--
ALTER TABLE `inmobiliaria`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
