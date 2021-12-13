-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2021 a las 18:29:40
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pisos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asi`
--

CREATE TABLE `asi` (
  `asitxt` varchar(100) NOT NULL,
  `taasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asi`
--

INSERT INTO `asi` (`asitxt`, `taasi`) VALUES
('Happy Ramadan Karenmo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `cardtxt` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cards`
--

INSERT INTO `cards` (`id`, `cardtxt`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `cel` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `correo`, `cel`, `mensaje`, `date`) VALUES
(1, 'Kevin Perea', 'pereakevin001@gmail.com', '3110212121', 'Quiero cotizar', '2021-12-10 08:26:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `nombre` varchar(100) NOT NULL,
  `cel` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombre`, `cel`, `correo`, `ciudad`, `direccion`) VALUES
('Kevin Mauricio Perea Carbal', '3023806691', 'pereakevin001@gmail.com', 'Bogotá, Colombia', 'Calle 162 # 20 - 69');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotice`
--

CREATE TABLE `cotice` (
  `tithec` varchar(100) NOT NULL,
  `txtc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cotice`
--

INSERT INTO `cotice` (`tithec`, `txtc`) VALUES
('Cotice Aquí', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotoschoose`
--

CREATE TABLE `fotoschoose` (
  `idimagen` int(11) NOT NULL,
  `nameimage` varchar(100) NOT NULL,
  `txtfoton` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fotoschoose`
--

INSERT INTO `fotoschoose` (`idimagen`, `nameimage`, `txtfoton`) VALUES
(1, 'img_2c2861ac936c898d5e2256cbb4cb30fe.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboreg elit, sed do eiusmod tempor incididunt ut labar'),
(2, 'fotoc2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboreg elit, sed do eiusmod tempor incididunt ut labore'),
(3, 'fotoc3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboreg elit, sed do eiusmod tempor incididunt ut labore'),
(4, 'fotoc4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboreg elit, sed do eiusmod tempor incididunt ut labore');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotosgallery`
--

CREATE TABLE `fotosgallery` (
  `id` int(11) NOT NULL,
  `nameimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fotosgallery`
--

INSERT INTO `fotosgallery` (`id`, `nameimage`) VALUES
(4, 'img_1c79bb30292bff7531bfbaaf95cd6ead.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotoshead`
--

CREATE TABLE `fotoshead` (
  `idimagen` int(11) NOT NULL,
  `nameimage` varchar(100) NOT NULL,
  `txtfoton` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fotoshead`
--

INSERT INTO `fotoshead` (`idimagen`, `nameimage`, `txtfoton`) VALUES
(1, 'foto1.jpg', 'muestra 10'),
(2, 'foto2.jpg', 'muestra 2'),
(3, 'img_2cedfebc7727feea8c8c9db3186ec692.jpg', 'muestra 3'),
(4, 'foto4.jpg', 'muestra 4'),
(5, 'foto5.jpg', 'muestra 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `genero` int(11) NOT NULL,
  `documento` int(13) NOT NULL,
  `correo` text NOT NULL,
  `celular` varchar(13) NOT NULL,
  `clave` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `genero`, `documento`, `correo`, `celular`, `clave`) VALUES
(1, 'Kevin Mauricio', 'Perea Carbal', 1, 1000063485, 'pereakevin001@gmail.com', '3023806691', '9f85cbc4b91630dcd7c362b79f028989');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotoschoose`
--
ALTER TABLE `fotoschoose`
  ADD PRIMARY KEY (`idimagen`);

--
-- Indices de la tabla `fotosgallery`
--
ALTER TABLE `fotosgallery`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotoshead`
--
ALTER TABLE `fotoshead`
  ADD PRIMARY KEY (`idimagen`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fotoschoose`
--
ALTER TABLE `fotoschoose`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `fotosgallery`
--
ALTER TABLE `fotosgallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `fotoshead`
--
ALTER TABLE `fotoshead`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
