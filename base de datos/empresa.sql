-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-10-2013 a las 23:08:40
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `marketBD`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--
CREATE DATABASE marketBD;
USE marketBD;
CREATE TABLE IF NOT EXISTS `empresa` (
  `codigoEmpresa` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `razonSocial` varchar(100) NOT NULL,
  `direccionFiscal` varchar(200) NOT NULL,
  `telefono` bigint(12) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `flagContactoCorreo` bit(1) NOT NULL,
  `ruc` int(11) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  PRIMARY KEY (`codigoEmpresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`codigoEmpresa`, `razonSocial`, `direccionFiscal`, `telefono`, `correo`, `flagContactoCorreo`, `ruc`, `contrasenia`) VALUES
(1, 'Transportes San Valentin S.A.C.', 'Urb. Los Sauces calle sta Ines Mz L lote 10 B', 3260901, 'tsvsac@tsvsac.com.pe', b'1', 2147483647, 'tengohambre');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
