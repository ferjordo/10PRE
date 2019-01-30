-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2019 a las 02:15:09
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unsolotoque`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id` int(2) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `nombre`) VALUES
(1, 'Alfredo Baquerizo Moreno '),
(2, 'Balao'),
(3, 'Balzar'),
(4, 'Colimes'),
(5, 'Daule'),
(6, 'Duran'),
(7, 'El Triunfo'),
(8, 'Empalme'),
(9, 'Gnral. Antonio Elizalde'),
(10, 'Guayaquil'),
(11, 'Isidro Ayora'),
(12, 'Lomas De Sargentillo'),
(13, 'Marcelino Mariduena'),
(14, 'Milagro'),
(15, 'Naranjal'),
(16, 'Naranjito'),
(17, 'Nobol'),
(18, 'Palestina'),
(19, 'Pedro Carbo'),
(20, 'Playas'),
(21, 'Salitre'),
(22, 'Samborondon'),
(23, 'San Jacinto de Yaguachi'),
(24, ' Santa Lucia'),
(25, ' Simon Bolivar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocivil`
--

CREATE TABLE `estadocivil` (
  `id` int(2) NOT NULL,
  `estado` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estadocivil`
--

INSERT INTO `estadocivil` (`id`, `estado`) VALUES
(1, 'Soltero(a)'),
(2, 'Casado(a)'),
(3, 'Divorciado(a)'),
(4, 'Viudo(a)'),
(5, 'Union Libre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instruccion`
--

CREATE TABLE `instruccion` (
  `id` int(2) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `instruccion`
--

INSERT INTO `instruccion` (`id`, `nombre`) VALUES
(1, 'Ninguno'),
(2, 'Centro de alfabetización (CEBA)'),
(3, 'Primaria'),
(4, 'Educación General Básica'),
(5, 'Secundaria'),
(6, 'Bachillerato'),
(7, 'Ciclo postbachillerato'),
(8, 'Superior Universitaria'),
(9, 'Post Grado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquia`
--

CREATE TABLE `parroquia` (
  `id` int(2) NOT NULL,
  `idciudad` int(2) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `parroquia`
--

INSERT INTO `parroquia` (`id`, `idciudad`, `nombre`) VALUES
(1, 1, 'Alfredo Baquerizo Moreno (Jujan)'),
(2, 2, 'Balao'),
(3, 3, 'Balzar'),
(4, 4, 'Colimes'),
(5, 4, 'San Jacinto'),
(6, 5, 'Banife'),
(7, 5, 'Daule '),
(8, 5, 'Daule Cabecera Cantonal'),
(9, 5, 'Emiliano Caicedo Marcos'),
(10, 5, 'Juan Bautista Aguirre (Los Tintos)'),
(11, 5, 'La Aurora'),
(12, 5, 'Laurel'),
(13, 5, 'Limonal'),
(14, 5, 'Los Lojas (Enrique Baquerizo Moreno)'),
(15, 5, 'Magro'),
(16, 5, 'Padre Juan Bautista Aguirre'),
(17, 5, 'Santa Clara'),
(18, 5, 'Vicente Piedrehita'),
(19, 6, 'El Recreo'),
(20, 6, 'Eloy Alfaro'),
(21, 7, 'El Triunfo'),
(22, 8, 'El Rosario'),
(23, 8, 'Guayas (Pueblo Nuevo)'),
(24, 8, 'Velasco Ibarra (El Empalme)'),
(25, 9, 'General Antonio Elizalde (Bucay)'),
(26, 10, 'Ayacucho'),
(27, 10, 'Bolivar (Sagrario)'),
(28, 10, 'Carbo (Concepcion)'),
(29, 10, 'Febres Cordero'),
(30, 10, 'Garcia Moreno'),
(31, 10, 'Juan Gómez Rendón (Progreso)'),
(32, 10, 'Letamendi'),
(33, 10, 'Morro'),
(34, 10, 'Nueve De Octubre'),
(35, 10, 'Olmedo (San Alejo)'),
(36, 10, 'Pascuales'),
(37, 10, ' Posorja'),
(38, 10, ' Puna'),
(39, 10, 'Roca'),
(40, 10, 'Rocafuerte'),
(41, 10, 'Sucre'),
(42, 10, 'Tarqui'),
(43, 10, ' Tenguel'),
(44, 10, 'Urdaneta'),
(45, 10, 'Ximena'),
(46, 11, 'Isidro Ayora'),
(47, 12, 'Lomas De Sargentillo'),
(48, 13, 'Coronel Marcelino Mariduena'),
(49, 14, 'Chobo'),
(50, 14, 'Mariscal Sucre (Huaques)'),
(51, 14, 'Milagro'),
(52, 14, 'Roberto Astudillo'),
(53, 15, 'Jesus Maria'),
(54, 15, 'Naranjal'),
(55, 15, 'San Carlos'),
(56, 15, 'Santa Rosa De Flandes'),
(57, 15, 'Taura'),
(58, 16, 'Naranjito'),
(59, 17, 'Narcisa De Jesus'),
(60, 18, 'Palestina'),
(61, 19, 'Pedro Carbo'),
(62, 19, 'Sabanilla'),
(63, 19, 'Valle De La Virgen'),
(64, 20, 'General Villamil (Playas)'),
(65, 21, 'Bocana'),
(66, 21, 'Candilejos'),
(67, 21, 'Central'),
(68, 21, 'El Salitre (Las Ramas)'),
(69, 21, 'General Vernaza (Dos Esteros)'),
(70, 21, 'Junquilal'),
(71, 21, 'La Victoría (ñauza)'),
(72, 21, 'Paraiso'),
(73, 21, 'San Mateo'),
(74, 22, 'La Puntilla (Satelite)'),
(75, 22, 'Samborondon'),
(76, 22, 'Samborondon Cabecera Cantonal'),
(77, 22, 'Tarifa'),
(78, 23, 'Gnral. Pedro J. Montero (Boliche)'),
(79, 23, 'San Jacinto De Yaguachi'),
(80, 23, 'Virgen De Fatima'),
(81, 23, 'Yaguachi Viejo'),
(82, 24, 'Santa Lucia'),
(83, 25, 'Crnel. Lorenzo De Garaicoa (Pedregal)'),
(84, 25, 'Simon Bolivar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

CREATE TABLE `postulante` (
  `cedula` int(10) NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_bin NOT NULL,
  `nombres` int(80) NOT NULL,
  `fecha_nac` date NOT NULL,
  `id_estadocivil` int(2) NOT NULL,
  `iess` tinyint(1) NOT NULL,
  `discapacidad` tinyint(1) NOT NULL,
  `id_instruccion` int(2) NOT NULL,
  `id_profesion` int(2) NOT NULL,
  `id_ciudad` int(2) NOT NULL,
  `id_parroquia` int(2) NOT NULL,
  `direccion` varchar(150) COLLATE utf8_bin NOT NULL,
  `telefonof` int(7) DEFAULT NULL,
  `telefonoc` int(10) NOT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesion`
--

CREATE TABLE `profesion` (
  `id` int(2) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `profesion`
--

INSERT INTO `profesion` (`id`, `nombre`) VALUES
(1, 'Ninguna'),
(2, 'Artesano'),
(3, 'Técnico'),
(4, 'Profesional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(2) NOT NULL,
  `user` varchar(20) COLLATE utf8_bin NOT NULL,
  `pass` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `pass`) VALUES
(1, 'KanrishaPRE10', 'E56eL20B');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadocivil`
--
ALTER TABLE `estadocivil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instruccion`
--
ALTER TABLE `instruccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parroquia`
--
ALTER TABLE `parroquia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `postulante`
--
ALTER TABLE `postulante`
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `profesion`
--
ALTER TABLE `profesion`
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
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `estadocivil`
--
ALTER TABLE `estadocivil`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `instruccion`
--
ALTER TABLE `instruccion`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `parroquia`
--
ALTER TABLE `parroquia`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `profesion`
--
ALTER TABLE `profesion`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
