-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2019 a las 11:47:07
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `receptes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plats`
--

CREATE TABLE `plats` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imatge` varchar(75) COLLATE utf8_spanish_ci NOT NULL,
  `ingredients` longtext COLLATE utf8_spanish_ci NOT NULL,
  `passos` longtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `plats`
--

INSERT INTO `plats` (`id`, `nom`, `imatge`, `ingredients`, `passos`) VALUES
(18, 'Amanida', 'img/sarada.jpg', '[\"Peix\",\"Mantega\",\"Mantega\"]', '[\"Mes coses\",\"Empezamos poniendo en el vaso la harina, la levadura desmenuzada, el azucar y mezclamos 10 seg/vel 5. Agregamos la leche, 100 g de huevo batido (reservamos el resto para pintar), la sal y amasamos 30 seg/vel 4.\"]'),
(22, 'Ramen', 'img/menrui.jpg', '[\"Fideus\",\"Carn\",\"Col\",\"Narutos\"]', '[\"Bullir pasta\",\"Barrejar els altres ingredients\"]'),
(23, 'Pollastre', 'img/yakimono.jpg', '[\"pollastre\",\"salsa\"]', '[\"fregir\",\"tirar salsa\",\"tallar\"]');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `plats`
--
ALTER TABLE `plats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `plats`
--
ALTER TABLE `plats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
