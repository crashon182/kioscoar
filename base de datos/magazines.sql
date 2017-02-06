-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2016 a las 01:51:36
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `patoruzu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `magazines`
--

CREATE TABLE IF NOT EXISTS `magazines` (
`id` int(10) unsigned NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `tapa` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `embebed` text NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `magazines`
--

INSERT INTO `magazines` (`id`, `titulo`, `tapa`, `numero`, `fecha`, `embebed`, `updated_at`, `created_at`) VALUES
(2, 'patoruzito', '', 2, '1991-01-01', 'asdasdasd', '2016-12-13', '2016-12-13'),
(3, 'Lupin Contra los espias', '', 1, '1956-06-01', '<p  style=" margin: 12px auto 6px auto; font-family: Helvetica,Arial,Sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-size: 14px; line-height: normal; font-size-adjust: none; font-stretch: normal; -x-system-font: none; display: block;">   <a title="View 001 on Scribd" href="https://www.scribd.com/document/150272339/Lupin-1#from_embed"  style="text-decoration: underline;" >001</a> by <a title="View Alexis Jeansalle''s profile on Scribd" href="https://www.scribd.com/user/50699153/Alexis-Jeansalle#from_embed"  style="text-decoration: underline;" >Alexis Jeansalle</a> on Scribd</p><iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/334037287/content?start_page=1&view_mode=scroll&access_key=key-VJu3K0bG4r8cZHtfRyEq&show_recommendations=true" data-auto-height="false" data-aspect-ratio="1.508361204013378" scrolling="no" id="doc_64915" width="100%" height="600" frameborder="0"></iframe>', '2016-12-13', '2016-12-13'),
(4, 'lupin 1', '', 1, '1981-02-04', 'C:\\xampp\\tmp\\php7608.tmp', '2016-12-14', '2016-12-14'),
(5, 'una ', '', 1, '1981-03-05', 'C:\\xampp\\tmp\\phpC192.tmp', '2016-12-14', '2016-12-14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `magazines`
--
ALTER TABLE `magazines`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `magazines`
--
ALTER TABLE `magazines`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
