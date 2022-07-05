-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2022 a las 08:02:58
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
  `Ruta` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integradora_1`
--

CREATE TABLE `integradora_1` (
  `Nombre` varchar(55) CHARACTER SET utf8mb4 NOT NULL,
  `Email` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `Contraseña` varchar(55) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `integradora_1`
--

INSERT INTO `integradora_1` (`Nombre`, `Email`, `Contraseña`) VALUES
('chrsitian', 'chgthalo@gmail.com', '516161');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `Nombre_rut` varchar(33) NOT NULL,
  `Base_salida` varchar(33) NOT NULL,
  `Base_lleg` varchar(33) NOT NULL,
  `Paradas_rut` varchar(33) NOT NULL,
  `Numero_cam` int(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `integradora_1`
--
ALTER TABLE `integradora_1`
  ADD PRIMARY KEY (`Nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
