-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-07-2013 a las 01:27:17
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mariano`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblacion`
--

CREATE TABLE IF NOT EXISTS `poblacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provincia` varchar(50) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `superficie` int(11) DEFAULT NULL,
  `densidad` float NOT NULL,
  `alfabetos` int(11) NOT NULL,
  `analfabetos` int(11) NOT NULL,
  `viviendas` int(11) NOT NULL,
  `cobertura` int(11) NOT NULL,
  `nocobertura` int(11) NOT NULL,
  `total10mas` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `viviendas` (`viviendas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `poblacion`
--

INSERT INTO `poblacion` (`id`, `provincia`, `cantidad`, `superficie`, `densidad`, `alfabetos`, `analfabetos`, `viviendas`, `cobertura`, `nocobertura`, `total10mas`) VALUES
(1, 'Capital Federal', 2890151, 200, 14450.8, 2555738, 12403, 1425840, 533910, 2296906, 2568141),
(2, 'Buenos Aires', 15625084, 307571, 50.8, 12865686, 179008, 5383536, 2344998, 13137753, 13044694),
(3, 'Catamarca', 367828, 102602, 3.6, 293153, 6036, 114019, 51987, 310320, 299189),
(4, 'Chaco', 1055259, 99633, 10.6, 806020, 46732, 312972, 157149, 890887, 852752),
(5, 'Chubut', 509108, 224686, 2.3, 411823, 8314, 178845, 56473, 441670, 420137),
(6, 'Cordoba', 3308876, 165321, 20, 2739946, 40785, 1235956, 520559, 2735962, 2780731),
(7, 'Corrientes', 992595, 88199, 11.3, 771948, 34492, 293237, 148113, 837017, 806440),
(8, 'Entre Rios', 1235994, 78781, 15.7, 1005361, 21904, 426366, 204716, 1018915, 1027265),
(9, 'Formosa', 530162, 72066, 7.4, 407948, 17396, 154694, 81851, 445172, 425344),
(10, 'Jujuy', 673307, 53219, 12.7, 531384, 17188, 196286, 84558, 582294, 548572),
(11, 'La Pampa', 318951, 143440, 2.2, 261887, 5032, 133529, 52126, 262984, 266919),
(12, 'La Rioja', 333642, 89680, 3.7, 268449, 4997, 109182, 43538, 288136, 273446),
(13, 'Mendoza', 1738929, 148827, 11.7, 1411960, 31530, 539271, 251964, 1469321, 1443490),
(14, 'Misiones', 1101593, 29801, 37, 835783, 35772, 330631, 144841, 946477, 871555),
(15, 'Neuquen', 551266, 94078, 5.9, 444609, 10459, 194613, 59390, 482426, 455068),
(16, 'Rio Negro', 638645, 203013, 3.1, 518307, 13080, 237387, 80156, 546610, 531387),
(17, 'Salta', 1214441, 155488, 7.8, 938009, 30367, 315941, 157168, 1045586, 968376),
(18, 'San Juan', 681055, 89651, 7.6, 538225, 11493, 188946, 97885, 575412, 549718),
(19, 'San luis', 432310, 76748, 5.6, 347388, 6512, 142361, 56969, 371437, 353900),
(20, 'Santa Cruz', 273964, 243943, 1.1, 219320, 2504, 94434, 24532, 237461, 221824),
(21, 'Santa Fe', 3194537, 133007, 24, 2656886, 48095, 1145270, 527684, 2636354, 2704981),
(22, 'Santiago del Estero', 874006, 136351, 6.4, 668946, 27870, 242427, 129743, 738036, 696816),
(23, 'Tucuman', 1448188, 22524, 64.3, 1154200, 29154, 396429, 211285, 1229283, 1183354),
(24, 'Tierra del Fuego - Antartida e islas del atlantico', 127205, 987168, 0.1, 103421, 705, 43579, 9126, 113991, 104126);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
