-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2026 a las 03:07:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ips_alma_vida`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(150) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `numero_documento` varchar(50) NOT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `celular` varchar(20) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `edad` int(11) NOT NULL,
  `eps` varchar(100) NOT NULL,
  `contacto_adicional` varchar(150) DEFAULT NULL,
  `parentesco` varchar(50) DEFAULT NULL,
  `tipo_examen` varchar(100) NOT NULL,
  `empresa_solicita` varchar(100) NOT NULL,
  `fecha_examen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre_completo`, `tipo_documento`, `numero_documento`, `direccion`, `telefono`, `celular`, `fecha_nacimiento`, `edad`, `eps`, `contacto_adicional`, `parentesco`, `tipo_examen`, `empresa_solicita`, `fecha_examen`) VALUES
(1, 'Alejandro Cantillo', 'CC', '1070972573', 'Calle 19 # 3a 89 Este Torre 22 Apto 101 - Madrid', '3105903089', '3105903089', '1995-01-19', 31, 'IPS VS', 'Johanna Arevalo', 'Conyuge', 'Medicina Laboral', 'COPNIA', '2026-03-12'),
(2, 'Joseph Mathias Cantillo Arevalo', 'TI', '1170967125', 'Calle 19 # 3a 89 Este Torre 22 Apto 101 - Madrid', '3142698789', '3142698789', '2024-10-03', 1, 'Salud Total', 'Johanna Arevalo', 'Madre', 'Pediatria', 'IPS VS', '2026-03-25'),
(3, 'Johanna Patricia Arevalo Fandiño', 'CC', '1070970263', 'Calle 19 # 3a 89 Este Torre 22 Apto 101 - Madrid', '3142698789', '3142698789', '1994-06-01', 31, 'IPS VS', 'Alejandro Cantillo', 'Conyuge', 'Medicina General', 'WODEM', '2026-03-16'),
(4, 'Damian Santiago Cantillo Cruz', 'TI', '1070994625', 'Calle 11 # 1 - 45 Barrio Chicuaza - Facatativá', '3105903089', '3105903089', '2022-04-09', 3, 'Famisanar', 'Alejandro Cantillo', 'Padre', 'Pediatria', 'Famisanar', '2026-03-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero_documento` (`numero_documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
