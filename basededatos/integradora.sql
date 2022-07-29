-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2022 a las 09:04:48
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integradora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `Nombre` varchar(33) NOT NULL,
  `Contraseña` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductores`
--

CREATE TABLE `conductores` (
  `Nombre` varchar(11) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Permiso_condu` int(11) NOT NULL,
  `Numero_cam` int(11) NOT NULL,
  `Numero_tel` int(11) NOT NULL,
  `Ruta` varchar(33) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conductores`
--

INSERT INTO `conductores` (`Nombre`, `Edad`, `Permiso_condu`, `Numero_cam`, `Numero_tel`, `Ruta`, `ID`) VALUES
('chrsitian', 19, 16513212, 21, 3132122, 'TOLUCA', 18),
('esaus', 25, 151819, 24, 2147483647, 'TOLUCA', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integradora_1`
--

CREATE TABLE `integradora_1` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `integradora_1`
--

INSERT INTO `integradora_1` (`ID`, `Nombre`, `Email`, `Contraseña`) VALUES
(7, 'chrsitian', 'chgthalo@gmail.com', '123456'),
(8, 'esau', 'chgthalo@gmail.com1', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE `reservaciones` (
  `Email` text NOT NULL,
  `Ruta` text NOT NULL,
  `Conductor` text NOT NULL,
  `Fecha` date NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`Email`, `Ruta`, `Conductor`, `Fecha`, `ID`) VALUES
('zzzzzxcz@gmail.com', 'TOLUCA', 'PEPE', '2022-07-14', 1),
('chgthalo@gmail.comss', 'TOLUCA', 'Manuel', '2022-07-29', 3),
('chgthal3@sdfgmail.com', 'TOLUCA', 'sdfsdfsdf', '2022-07-30', 5),
('cd@cd', 'TOLUCA', 'pepe', '2022-08-01', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `Nombre_rut` varchar(33) NOT NULL,
  `Base_salida` varchar(33) NOT NULL,
  `Base_lleg` varchar(33) NOT NULL,
  `Paradas_rut` varchar(33) NOT NULL,
  `Numero_cam` int(33) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`Nombre_rut`, `Base_salida`, `Base_lleg`, `Paradas_rut`, `Numero_cam`, `ID`) VALUES
('CDMX', 'Toluca base 113', 'CDMX Toreo', '1: Xona centro ', 11, 1),
('TOLUCA', 'CDMX Toreo', 'Toluca base 113', '1:Xona centro', 25, 2),
('PUEBLA', 'CDMX', 'PUEBLA', 'PACHUCA', 24, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conductores`
--
ALTER TABLE `conductores`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Permiso_condu` (`Permiso_condu`);

--
-- Indices de la tabla `integradora_1`
--
ALTER TABLE `integradora_1`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indices de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conductores`
--
ALTER TABLE `conductores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `integradora_1`
--
ALTER TABLE `integradora_1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
