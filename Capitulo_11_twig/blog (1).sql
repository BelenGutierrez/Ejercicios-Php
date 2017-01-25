-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-01-2017 a las 23:48:35
-- Versión del servidor: 5.7.17-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(3) NOT NULL,
  `titulo` varchar(30) COLLATE utf8_bin NOT NULL,
  `imagen` varchar(20) COLLATE utf8_bin NOT NULL,
  `contenido` varchar(250) COLLATE utf8_bin NOT NULL,
  `fecha_publicacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `titulo`, `imagen`, `contenido`, `fecha_publicacion`) VALUES
(5, 'Choripán', 'choripan.jpg', 'El choripán es otro de los platos estrella de la cocina de Argentina y destaca sobre todo por la sencillez de su preparación, además de su sabor. El término choripán es, en realidad, un acrónimo de chorizo, que se suele abreviar como chori y pan.', '2017-01-12 09:57:33'),
(6, 'Empanadas', 'empanadas.jpg', 'Las empanadas son, junto al asado y el choripán, otro de los platos argentinos por excelencia. En realidad, las empanadas son populares en muchos otros países de América Latina, así como entre las tapas españolas.', '2017-01-12 10:02:30'),
(8, 'Vitel-Toné', 'vitel.jpg', 'El vitel toné es un plato original de Italia, concretamente de la región de Piamonte, donde se conoce como vitel tonné en dialecto piamontés o como vitello tonnato en italiano.           ', '2017-01-12 10:15:42'),
(9, 'Zapallitos Rellenos', 'zapallitos.jpg', 'Los zapallos, cuando aún están por madurar y su cáscara es blanda, reciben el nombre de zapallito. Consiste en rellenarlos de huevo, jamón cocido, migas de pan, queso rallado, cebolla, manteca y aceite de oliva. Se cocinan al horno.            ', '2017-01-12 10:17:26'),
(10, 'Asado', 'asado.jpg', 'Cuando se habla de cocina argentina, indudablemente el primer plato que se debe mencionar es el famoso asado argentino. Se trata de una parrillada en la que se cocinan distintas partes de carne de res a la brasa o al calor del fuego. ', '2017-01-13 11:07:01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
