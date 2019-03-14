-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2019 a las 03:23:35
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `imagen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_emp`
--

CREATE TABLE `img_emp` (
  `id` int(50) NOT NULL,
  `nombre_emp` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_img` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `url_img` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `img_emp`
--

INSERT INTO `img_emp` (`id`, `nombre_emp`, `id_img`, `correo`, `url_img`) VALUES
(1, 'Rio frio', 'A322', 'rio_frio@gmail.com', 'rio.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_personas`
--

CREATE TABLE `img_personas` (
  `id` int(50) NOT NULL,
  `nom_p` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_p` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `url_img` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_img` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `img_personas`
--

INSERT INTO `img_personas` (`id`, `nom_p`, `apellido_p`, `url_img`, `id_img`, `correo`) VALUES
(1, 'alejandro', 'alonso', 'arbol1.jpg', 'A322', 'ale_a.q@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(50) NOT NULL,
  `user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `img_emp`
--
ALTER TABLE `img_emp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `img_personas`
--
ALTER TABLE `img_personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `img_emp`
--
ALTER TABLE `img_emp`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `img_personas`
--
ALTER TABLE `img_personas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
