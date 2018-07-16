-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2018 a las 03:02:47
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `computacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(4) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(15) NOT NULL,
  `comentario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `nombre`, `email`, `telefono`, `comentario`) VALUES
(1, 'Rodri', 'rodri@rodrig.com', 77777, 'sdadasdas'),
(2, 'Rodri', 'rodri@rodrig.com', 77777, 'sdadasdas'),
(3, 'Rodri', 'rodri@rodrig.com', 77777, 'sdadasdas'),
(4, 'Rodri', 'rodri@rodrig.com', 77777, 'sdadasdas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prod` int(4) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `precio` int(10) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `destacado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prod`, `categoria`, `descripcion`, `marca`, `precio`, `imagen`, `destacado`) VALUES
(1, 'motherboards', 'Motherboard S1150 H110', 'ASUS', 1400, 'asush110', 1),
(2, 'procesadores', 'Procesador Dual Core 3.0Ghz', 'Intel', 1900, 'dualc3.0', NULL),
(3, 'memorias', 'Memoria DDR3 2GB', 'Kingston', 500, 'ddr3k2gb', NULL),
(4, 'memorias', 'Memoria DDR4 4GB', 'Corsair', 1500, 'ddr4c4gb', NULL),
(5, 'discos rigidos', 'Disco para pc 500GB SATA', 'Western', 1500, 'dwpcs500', 1),
(6, 'discos rigidos', 'Disco para notebook 1TB SATA', 'toshiba', 1600, 'dtns1', NULL),
(7, 'notebooks', 'Notebook 15.6\" 500GB DDR3 4GB\r\nIntel core i3', 'Toshiba', 7000, 'ntoi3', NULL),
(8, 'notebooks', 'Notebook 14\" 1TB DDR3 4GB Intel Celeron', 'Lenovo', 6000, 'nlecel', 1),
(9, 'cpu', 'CPU Para oficina 2GB Disco de 320GB Procesador Intel Pentium D.C.', 'Intel', 5000, 'cpuofi', NULL),
(10, 'cpu', 'CPU Gamer. Placa de video GTX. Disco 1TB. Ram 8GB. Intel core i7', 'intel', 14900, 'cpuga', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_prod` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
