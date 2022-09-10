-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-09-2022 a las 19:24:52
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

DROP TABLE IF EXISTS `datos`;
CREATE TABLE IF NOT EXISTS `datos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `paginaweb` varchar(50) NOT NULL,
  `mensaje` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `userpass` varchar(50) NOT NULL,
  `fecha_reg` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `email`, `telefono`, `paginaweb`, `mensaje`, `usuario`, `userpass`, `fecha_reg`) VALUES
(1, 'Noel', 'noelati@gmail.com', '04142039502', 'www.noel.com', 'actividad electiva4', 'Noel20', '123', '10/09/22'),
(6, 'asdf', 'zx@zx.com', '22222', 'www.noel.com', 'asdfa', 'ntejed01', '000', '10/09/22'),
(3, 'yatdimar', 'yatdimar2010@gmail.com', '04241799741', 'www.yatdimar.com', 'actividad electiva4', 'yatdimar20', '123', '10/09/22'),
(4, 'Humberto', 'humbertjdr@gmail.com', '04142541340', 'www.Humberto.com', 'actividad electiva4', 'Humberto20', '1234', '10/09/22'),
(5, 'kleber', 'klebercabezas08@gmail.com', '04128234044', 'www.kleber.com', 'actividad electiva4', 'kleber20', '123', '10/09/22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
