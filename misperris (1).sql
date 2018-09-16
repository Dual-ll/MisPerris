-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-09-2018 a las 03:51:41
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `misperris`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `idciudad` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idregion` int(11) NOT NULL,
  PRIMARY KEY (`idciudad`,`idregion`),
  KEY `fk_ciudad_region1_idx` (`idregion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idciudad`, `descripcion`, `idregion`) VALUES
(1, 'Santiago', 1),
(2, 'Puente Alto', 1),
(3, 'Arica', 2),
(4, 'Camarones', 2),
(5, 'Linares', 3),
(6, 'Talca', 3),
(7, 'Temuco', 4),
(8, 'Villarrica', 4),
(9, 'Viña del Mar', 9),
(10, 'Reñaca', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perro`
--

CREATE TABLE IF NOT EXISTS `perro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `raza` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `tamano` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `perro`
--

INSERT INTO `perro` (`id`, `nombre`, `raza`, `edad`, `tamano`) VALUES
(16, 'FELIPE', 'QUILTRO', 99, '2.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perro_postulante`
--

CREATE TABLE IF NOT EXISTS `perro_postulante` (
  `perro_id` int(11) NOT NULL,
  `postulante_rut` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`perro_id`,`postulante_rut`),
  KEY `fk_perro_has_postulante_postulante1_idx` (`postulante_rut`),
  KEY `fk_perro_has_postulante_perro1_idx` (`perro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

CREATE TABLE IF NOT EXISTS `postulante` (
  `rut` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `nombrecompleto` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `fono` int(11) DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idciudad` int(11) NOT NULL,
  `idregion` int(11) NOT NULL,
  `idtipo_vivienda` int(11) NOT NULL,
  PRIMARY KEY (`rut`,`idciudad`,`idregion`,`idtipo_vivienda`),
  KEY `fk_postulante_ciudad1_idx` (`idciudad`,`idregion`),
  KEY `fk_postulante_tipo_vivienda1_idx` (`idtipo_vivienda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `postulante`
--

INSERT INTO `postulante` (`rut`, `nombrecompleto`, `fechanac`, `fono`, `correo`, `idciudad`, `idregion`, `idtipo_vivienda`) VALUES
('111111111', 'carolina', '1930-10-10', 222222222, 'simio@simio.cl', 7, 4, 4),
('193913709', 'dilan martinezzzzz', '1996-06-20', 123123123, 'jajaja@gmail.com', 8, 4, 4),
('222222222', 'dffd', '2000-09-14', 111111111, 'asd@asd.com', 3, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `idregion` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idregion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`idregion`, `descripcion`) VALUES
(1, 'Metropolitana'),
(2, 'Arica y Parinacota'),
(3, 'Maule'),
(4, 'Araucania'),
(9, 'Valparaiso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vivienda`
--

CREATE TABLE IF NOT EXISTS `tipo_vivienda` (
  `idtipo_vivienda` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idtipo_vivienda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_vivienda`
--

INSERT INTO `tipo_vivienda` (`idtipo_vivienda`, `descripcion`) VALUES
(1, 'Casa con patio grande'),
(2, 'Casa con patio pequeno'),
(3, 'Casa sin patio'),
(4, 'Departamento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`) VALUES
(1, 'dilan', '123'),
(2, 'admin', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9'),
(3, 'dal', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9'),
(4, 'felipe', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(5, 'duall', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(6, 'pepito', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_ciudad_region1` FOREIGN KEY (`idregion`) REFERENCES `region` (`idregion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `perro_postulante`
--
ALTER TABLE `perro_postulante`
  ADD CONSTRAINT `fk_perro_has_postulante_perro1` FOREIGN KEY (`perro_id`) REFERENCES `perro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_perro_has_postulante_postulante1` FOREIGN KEY (`postulante_rut`) REFERENCES `postulante` (`rut`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `postulante`
--
ALTER TABLE `postulante`
  ADD CONSTRAINT `fk_postulante_ciudad1` FOREIGN KEY (`idciudad`, `idregion`) REFERENCES `ciudad` (`idciudad`, `idregion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_postulante_tipo_vivienda1` FOREIGN KEY (`idtipo_vivienda`) REFERENCES `tipo_vivienda` (`idtipo_vivienda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
