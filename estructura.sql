
-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-07-2014 a las 16:28:23
-- Versión del servidor: 5.5.33
-- Versión de PHP: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `nitsnets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_en` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_de` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_en` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_de` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_en` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_de` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_en` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_de` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `fk_categorias` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categorias` (`fk_categorias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_colores`
--

CREATE TABLE `productos_colores` (
  `fk_productos` int(11) NOT NULL,
  `fk_colores` int(11) NOT NULL,
  PRIMARY KEY (`fk_productos`,`fk_colores`),
  KEY `productos_colores_ibfk_2` (`fk_colores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`fk_categorias`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `productos_colores`
--
ALTER TABLE `productos_colores`
  ADD CONSTRAINT `productos_colores_ibfk_1` FOREIGN KEY (`fk_productos`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_colores_ibfk_2` FOREIGN KEY (`fk_colores`) REFERENCES `colores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
