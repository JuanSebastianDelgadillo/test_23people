-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-08-2020 a las 05:13:26
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test_23people`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peoples`
--

CREATE TABLE IF NOT EXISTS `peoples` (
  `nationalId` varchar(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `originPlanet` varchar(50) NOT NULL,
  `picture_url` varchar(100) NOT NULL,
  PRIMARY KEY (`nationalId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peoples`
--

INSERT INTO `peoples` (`nationalId`, `name`, `lastName`, `age`, `originPlanet`, `picture_url`) VALUES
('11653419-3', 'Juanito', 'Delgadillo', 40, 'Helicon', 'https://your.picture.com/hari-seldom'),
('14502218-2', 'Juan ', 'Delgadillo', 40, 'Helicon', 'https://your.picture.com/hari-seldom'),
('22575775-5', 'Joel ', 'terrazas', 23, 'Helicon', 'https://your.picture.com/hari-seldom'),
('22752726-9', 'Alejandro ', 'Fernandez', 25, 'Helicon', 'https://your.picture.com/hari-seldom'),
('5117585-9', 'Fernando', 'Martinez', 67, 'Helicon', 'https://your.picture.com/hari-seldom'),
('5273546-7', 'Jhon ', 'Bastias', 73, 'Helicon', 'https://your.picture.com/hari-seldom'),
('6538831-6', 'Jorge', 'Stuardo', 56, 'Helicon', 'https://your.picture.com/hari-seldom');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
