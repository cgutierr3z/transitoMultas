-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-12-2015 a las 12:44:31
-- Versión del servidor: 5.5.46
-- Versión de PHP: 5.4.45-2+deb.sury.org~precise+2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `transitoMultas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Agente`
--

CREATE TABLE IF NOT EXISTS `Agente` (
  `noRegistro` int(11) NOT NULL AUTO_INCREMENT,
  `NombreAgente` varchar(45) NOT NULL,
  `ApellidoAgente` varchar(45) NOT NULL,
  PRIMARY KEY (`noRegistro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Agente`
--

INSERT INTO `Agente` (`noRegistro`, `NombreAgente`, `ApellidoAgente`) VALUES
(1, 'Agente', 'Smith'),
(2, 'asus', 'x50gl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ciudad`
--

CREATE TABLE IF NOT EXISTS `Ciudad` (
  `idCiudad` int(11) NOT NULL AUTO_INCREMENT,
  `Ciudad` varchar(45) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  PRIMARY KEY (`idCiudad`),
  KEY `Departamento_Ciudad` (`idDepartamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Ciudad`
--

INSERT INTO `Ciudad` (`idCiudad`, `Ciudad`, `idDepartamento`) VALUES
(1, 'Pereira', 1),
(2, 'Armenia', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Departamento`
--

CREATE TABLE IF NOT EXISTS `Departamento` (
  `idDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `Departamento` varchar(45) NOT NULL,
  PRIMARY KEY (`idDepartamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Departamento`
--

INSERT INTO `Departamento` (`idDepartamento`, `Departamento`) VALUES
(1, 'Risaralda'),
(2, 'Quindio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Direccion`
--

CREATE TABLE IF NOT EXISTS `Direccion` (
  `idDireccion` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(45) NOT NULL,
  `numero` int(11) NOT NULL,
  `idCiudad` int(11) NOT NULL,
  PRIMARY KEY (`idDireccion`),
  KEY `Cuidad_Direccion` (`idCiudad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Direccion`
--

INSERT INTO `Direccion` (`idDireccion`, `calle`, `numero`, `idCiudad`) VALUES
(1, '24 AV INDEPENDENCIA', 12, 1),
(2, 'AV SUR # 33 80', 33, 1),
(3, 'AV 30 AGOSTO', 23, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Infraccion`
--

CREATE TABLE IF NOT EXISTS `Infraccion` (
  `numeroExpediente` int(11) NOT NULL AUTO_INCREMENT,
  `fechaInfraccion` date NOT NULL,
  `lugarInfraccion` varchar(45) NOT NULL,
  `importeInfraccion` int(11) NOT NULL,
  `articuloInfraccion` int(11) NOT NULL,
  `carreteraInfraccion` varchar(45) NOT NULL,
  `kilometroInfraccion` varchar(45) NOT NULL,
  `idVehiculo` int(11) DEFAULT NULL,
  `noRegistro` int(11) NOT NULL,
  `cedulaPersona` int(11) NOT NULL,
  `idDireccion` int(11) NOT NULL,
  PRIMARY KEY (`numeroExpediente`),
  KEY `cedulaPersona_Infraccion` (`cedulaPersona`),
  KEY `idVehiculo_Infraccion` (`idVehiculo`),
  KEY `noRegistro_Infraccion` (`noRegistro`),
  KEY `Direccion_Infraccion` (`idDireccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Infraccion`
--

INSERT INTO `Infraccion` (`numeroExpediente`, `fechaInfraccion`, `lugarInfraccion`, `importeInfraccion`, `articuloInfraccion`, `carreteraInfraccion`, `kilometroInfraccion`, `idVehiculo`, `noRegistro`, `cedulaPersona`, `idDireccion`) VALUES
(1, '2010-01-01', 'cra 25 no 23 88', 250000, 12, 'cra 25', '2', 1, 1, 1, 1),
(2, '2010-01-01', 'asdf', 123456, 12345, 'qwertgyh', 'asdfgh', 1, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Marca`
--

CREATE TABLE IF NOT EXISTS `Marca` (
  `idMarca` int(11) NOT NULL AUTO_INCREMENT,
  `codigoMarca` varchar(45) NOT NULL,
  `nombreMarca` varchar(45) NOT NULL,
  `idDireccion` int(11) NOT NULL,
  PRIMARY KEY (`idMarca`),
  KEY `Direccion_Marca` (`idDireccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Marca`
--

INSERT INTO `Marca` (`idMarca`, `codigoMarca`, `nombreMarca`, `idDireccion`) VALUES
(1, 'MDZ', 'MAZDA', 1),
(2, 'RNT', 'RENAULT', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Modelo`
--

CREATE TABLE IF NOT EXISTS `Modelo` (
  `idModelo` int(11) NOT NULL AUTO_INCREMENT,
  `nombreModelo` varchar(45) NOT NULL,
  `potenciaModelo` varchar(45) NOT NULL,
  `idMarca` int(11) NOT NULL,
  PRIMARY KEY (`idModelo`),
  KEY `idMarca_Modelo` (`idMarca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Modelo`
--

INSERT INTO `Modelo` (`idModelo`, `nombreModelo`, `potenciaModelo`, `idMarca`) VALUES
(1, 'V3', '120', 1),
(2, 'LOGAN', '145', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Persona`
--

CREATE TABLE IF NOT EXISTS `Persona` (
  `cedulaPersona` int(11) NOT NULL AUTO_INCREMENT,
  `noCedula` varchar(12) NOT NULL,
  `nombrePersona` varchar(45) NOT NULL,
  `apellidoPersona` varchar(45) NOT NULL,
  `fechaNacimientoPersona` date NOT NULL,
  `idDireccion` int(11) NOT NULL,
  PRIMARY KEY (`cedulaPersona`),
  KEY `Direccion_Persona` (`idDireccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Persona`
--

INSERT INTO `Persona` (`cedulaPersona`, `noCedula`, `nombrePersona`, `apellidoPersona`, `fechaNacimientoPersona`, `idDireccion`) VALUES
(1, '1088307029', 'Carlos', 'Gutierrez', '2010-03-23', 3),
(2, '123445', 'Pepito', 'Perez', '2010-01-01', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Vehiculo`
--

CREATE TABLE IF NOT EXISTS `Vehiculo` (
  `idVehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `fechaMatriculaVehiculo` date NOT NULL,
  `idModelo` int(11) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `cedulaPersona` int(11) NOT NULL,
  PRIMARY KEY (`idVehiculo`),
  KEY `idMarca_Vehiculo` (`idMarca`),
  KEY `idModelo_Vehiculo` (`idModelo`),
  KEY `cedulaPersona_Vehiculo` (`cedulaPersona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Vehiculo`
--

INSERT INTO `Vehiculo` (`idVehiculo`, `fechaMatriculaVehiculo`, `idModelo`, `idMarca`, `cedulaPersona`) VALUES
(1, '2010-01-01', 1, 1, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Ciudad`
--
ALTER TABLE `Ciudad`
  ADD CONSTRAINT `fk_Departamento_Ciudad` FOREIGN KEY (`idDepartamento`) REFERENCES `Departamento` (`idDepartamento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Direccion`
--
ALTER TABLE `Direccion`
  ADD CONSTRAINT `fk_Cuidad_Direccion` FOREIGN KEY (`idCiudad`) REFERENCES `Ciudad` (`idCiudad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Infraccion`
--
ALTER TABLE `Infraccion`
  ADD CONSTRAINT `fk_cedulaPersona_Infraccion` FOREIGN KEY (`cedulaPersona`) REFERENCES `Persona` (`cedulaPersona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Direccion_Infraccion` FOREIGN KEY (`idDireccion`) REFERENCES `Direccion` (`idDireccion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idVehiculo_Infraccion` FOREIGN KEY (`idVehiculo`) REFERENCES `Vehiculo` (`idVehiculo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_noRegistro_Infraccion` FOREIGN KEY (`noRegistro`) REFERENCES `Agente` (`noRegistro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Marca`
--
ALTER TABLE `Marca`
  ADD CONSTRAINT `fk_Direccion_Marca` FOREIGN KEY (`idDireccion`) REFERENCES `Direccion` (`idDireccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Modelo`
--
ALTER TABLE `Modelo`
  ADD CONSTRAINT `fk_idMarca_Modelo` FOREIGN KEY (`idMarca`) REFERENCES `Marca` (`idMarca`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Persona`
--
ALTER TABLE `Persona`
  ADD CONSTRAINT `fk_Direccion_Persona` FOREIGN KEY (`idDireccion`) REFERENCES `Direccion` (`idDireccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Vehiculo`
--
ALTER TABLE `Vehiculo`
  ADD CONSTRAINT `fk_cedulaPersona_Vehiculo` FOREIGN KEY (`cedulaPersona`) REFERENCES `Persona` (`cedulaPersona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idMarca_Vehiculo` FOREIGN KEY (`idMarca`) REFERENCES `Marca` (`idMarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idModelo_Vehiculo` FOREIGN KEY (`idModelo`) REFERENCES `Modelo` (`idModelo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
