-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2024 a las 00:29:10
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
-- Base de datos: `php_intermedio_utn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `usuario`, `clave`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes_onepiece`
--

CREATE TABLE `personajes_onepiece` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personajes_onepiece`
--

INSERT INTO `personajes_onepiece` (`id`, `nombre`, `apellido`, `imagen`, `descripcion`) VALUES
(1, 'Luffy D.', 'Monkey', 'luffy.jpg', 'Es apodado por los demás como \"Sombrero de Paja\", debido a su característico sombrero de paja que lleva desde niño. Su cuerpo está hecho de goma, debido a haberse comido la Fruta Goma Goma.​​'),
(2, 'Zoro', 'Ronoroa', 'zoro.jpg', 'Conocido como El Cazador de Piratas, es el primer pirata que se unió a Monkey D. Luffy, y el principal combatiente de los Piratas de Sombrero de Paja.'),
(3, 'Nami', 'Gata Ladrona', 'nami.jpg', 'Nami , apodada Gata Ladrona, es una pirata y la navegante de los Piratas del Sombrero de Paja , así como una de los oficiales principales de la Gran Flota de Sombrero de Paja.'),
(4, 'Usopp', '', 'usopp.jpg', 'Suele mostrarse cobarde y es un mentiroso compulsivo. Sueña con convertirse en un valiente guerrero, y le gustaría visitar Elbaf, hogar de los más bravos guerreros.'),
(5, 'Sanji', '', 'sanji.jpg', 'Cocinero de la tripulación. También es un gran luchador. Es muy enamoradizo, y trata de forma especial a las chicas de la tripulación, aunque es así con todas las mujeres bellas que se encuentra. '),
(6, 'Tony Tony', 'Chopper', 'chopper.jpg', 'Médico de la tripulación. Un reno capaz de caminar y hablar como los humanos gracias a los poderes adquiridos tras ingerir una Fruta del Diablo. Sueña con ser un médico capaz de curar cualquier enfermedad.'),
(7, 'Nico', 'Robin', 'nico.jpg', 'Arqueóloga de la tripulación. La única persona en el mundo capaz de leer los Poneglyph, y sueña con descubrir la historia del Siglo Vacío al leerlos. '),
(8, 'Franky', '', 'franky.jpg', 'Carpintero de la tripulación. Es un cíborg con grandes conocimientos en tecnología. Sueña con construir un barco capaz de navegar por todo el océano.'),
(10, 'Brook', '', 'brook.jpg', 'Músico de la tripulación. Un esqueleto viviente al que le gusta bromear. Revivió gracias a los poderes de una Fruta del Diablo que ingirió cuando aun estaba con vida.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes_onepiece2`
--

CREATE TABLE `personajes_onepiece2` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `imagen` longblob NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personajes_onepiece2`
--

INSERT INTO `personajes_onepiece2` (`id`, `nombre`, `apellido`, `tipo`, `imagen`, `descripcion`) VALUES
(1, 'Luffy D.', 'Monkey', '<strong>Chequeado</strong>', 0x6c756666792e6a7067, 'Es apodado por los demás como \"Sombrero de Paja\", debido a su característico sombrero de paja que lleva desde niño. Su cuerpo está hecho de goma, debido a haberse comido la Fruta Goma Goma.​​'),
(2, 'Zoro', 'Ronoroa', '<strong>Chequeado</strong>', 0x7a6f726f2e6a7067, 'Conocido como El Cazador de Piratas, es el primer pirata que se unió a Monkey D. Luffy, y el principal combatiente de los Piratas de Sombrero de Paja.'),
(3, 'Nami', 'Gata Ladrona', '<strong>Chequeado</strong>', 0x6e616d692e6a7067, 'Nami , apodada Gata Ladrona, es una pirata y la navegante de los Piratas del Sombrero de Paja , así como una de los oficiales principales de la Gran Flota de Sombrero de Paja.'),
(4, 'Usopp', '', '<strong>Chequeado</strong>', 0x75736f70702e6a7067, 'Suele mostrarse cobarde y es un mentiroso compulsivo. Sueña con convertirse en un valiente guerrero, y le gustaría visitar Elbaf, hogar de los más bravos guerreros.'),
(5, 'Sanji', '', '<strong>Chequeado</strong>', 0x73616e6a692e6a7067, 'Cocinero de la tripulación. También es un gran luchador. Es muy enamoradizo, y trata de forma especial a las chicas de la tripulación, aunque es así con todas las mujeres bellas que se encuentra. '),
(6, 'Tony Tony', 'Chopper', '<strong>Chequeado</strong>', 0x63686f707065722e6a7067, 'Médico de la tripulación. Un reno capaz de caminar y hablar como los humanos gracias a los poderes adquiridos tras ingerir una Fruta del Diablo. Sueña con ser un médico capaz de curar cualquier enfermedad.'),
(7, 'Nico', 'Robin', '<strong>Chequeado</strong>', 0x6e69636f2e6a7067, 'Arqueóloga de la tripulación. La única persona en el mundo capaz de leer los Poneglyph, y sueña con descubrir la historia del Siglo Vacío al leerlos. '),
(8, 'Franky', '', '<strong>Chequeado</strong>', 0x6672616e6b792e6a7067, 'Carpintero de la tripulación. Es un cíborg con grandes conocimientos en tecnología. Sueña con construir un barco capaz de navegar por todo el océano.'),
(10, 'Brook', '', '<strong>Chequeado</strong>', 0x62726f6f6b2e6a7067, 'Músico de la tripulación. Un esqueleto viviente al que le gusta bromear. Revivió gracias a los poderes de una Fruta del Diablo que ingirió cuando aun estaba con vida.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personajes_onepiece`
--
ALTER TABLE `personajes_onepiece`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personajes_onepiece2`
--
ALTER TABLE `personajes_onepiece2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personajes_onepiece`
--
ALTER TABLE `personajes_onepiece`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personajes_onepiece2`
--
ALTER TABLE `personajes_onepiece2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
