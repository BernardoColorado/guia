-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-10-2019 a las 17:07:56
-- Versión del servidor: 5.7.27-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `admision_unam`
--
CREATE DATABASE IF NOT EXISTS `admision_unam` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `admision_unam`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

DROP TABLE IF EXISTS `tema`;
CREATE TABLE `tema` (
  `tema` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `idMateria` int(11) NOT NULL,
  `indice` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `tema`
--

TRUNCATE TABLE `tema`;
--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`tema`, `id`, `idMateria`, `indice`) VALUES
('Célula', 1, 1, '1'),
('Metabolismo Celular', 2, 1, '2'),
('Reproducción', 3, 1, '3'),
('Mecanismos de herencia', 4, 1, '4'),
('Evolución', 5, 1, '5'),
('Los seres vivos y su ambiente', 6, 1, '6'),
('Fundamentos de Química', 7, 2, '1'),
('Agua', 8, 2, '2'),
('Aire', 9, 2, '3'),
('La energia de las reacciones cineticas', 10, 2, '4'),
('Quimica del Carbono', 11, 2, '5'),
('Alimentos', 12, 2, '6'),
('Cinemática', 13, 3, '1'),
('Fuerzas, Leyes de Newton y la Ley de la Gravitación Universal', 14, 3, '2'),
('Trabajo y leyes de la conservación', 15, 3, '3'),
('La energía y la cinética de las reacciones químicas', 16, 2, '4'),
('Termodinámica', 17, 3, '4'),
('Ondas', 18, 3, '5'),
('Electromagnetismo', 19, 3, '6'),
('Fluidos', 20, 3, '7'),
('Optica', 21, 3, '8'),
('Fisica Contemporanea', 22, 3, '9'),
('Operaciones con números reales, complejos y expresiones algebraicas', 23, 4, '1'),
('Productos notables y factorización', 24, 4, '2'),
('Ecuaciones', 25, 4, '3'),
('Desigualdades', 26, 4, '4'),
('Sistemas de Ecuaciones', 27, 4, '5'),
('Funciones algebraicas', 28, 4, '6'),
('Trigonometría', 29, 4, '7'),
('Recta', 30, 4, '8'),
('Circunferencia', 31, 4, '9'),
('Parabola', 32, 4, '10'),
('Elipse', 33, 4, '11'),
('Hiperbola', 34, 4, '12'),
('Ecuacion general de segundo grado', 35, 4, '13'),
('Limites', 36, 4, '14'),
('La derivada', 37, 4, '15'),
('La Tierra Base del desarrollo del hombre', 38, 5, '1'),
('Geografía Humana', 39, 5, '2'),
('La Historia', 40, 6, '1'),
('Las Revoluciones Burgesas', 41, 6, '2'),
('Pensamiento y los movimientos sociales del siglo XIX', 42, 6, '3'),
('El imperialismo', 43, 6, '4'),
('La Primera Guerra Mundial', 44, 6, '5'),
('El mundo entre guerras', 45, 6, '6'),
('La segunda guerra mundial', 46, 6, '7'),
('El conflicto entre el capitalismo y el socialismo', 47, 6, '8'),
('El mundo actual', 48, 6, '9'),
('La Nueva España siglo XVI-XIX ', 49, 7, '1'),
('El movimiento de Independencia de la Nueva España', 50, 7, '2'),
('México Independiente', 51, 7, '3'),
('La reforma liberal y la resistencia de la República', 52, 7, '4'),
('El Porfiriato', 53, 7, '5'),
('La Revolución Mexicana', 54, 7, '6'),
('La reconstrucción nacional', 55, 7, '7'),
('México Contemporáneo', 56, 7, '8'),
('El Texto', 57, 8, '1'),
('Géneros y corrientes literarias', 58, 8, '2'),
('Redacción y técnicas de investigación documental', 59, 8, '3'),
('Funciones de la Lengua', 60, 9, '1'),
('Formas del discurso', 61, 9, '2'),
('Comprensión de lectura', 62, 9, '3'),
('Gramática', 63, 9, '4'),
('Redacción', 64, 9, '5'),
('Vocabulario', 65, 9, '6'),
('Generalidades de la ortografía', 66, 9, '7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

DROP TABLE IF EXISTS `materia`;
CREATE TABLE `materia` (
  `materia` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `img` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `materia`
--

TRUNCATE TABLE `materia`;
--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`materia`, `id`, `img`) VALUES
('Biología', 1, 'biologia.jpg'),
('Química', 2, 'chemistry.jpg'),
('Física', 3, 'fisica.jpg'),
('Matemáticas', 4, 'matematicas.jpg'),
('Geografía', 5, 'geografia.jpg'),
('Historia Universal', 6, 'historia_universal.jpg'),
('Historia de México', 7, 'historia_mexico.jpg'),
('Literatura', 8, 'literatura.jpg'),
('Español', 9, 'español.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulo`
--

DROP TABLE IF EXISTS `capitulo`;
CREATE TABLE `capitulo` (
  `id` int(11) NOT NULL,
  `capitulo` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `indice` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `idTema` int(11) NOT NULL,
  `idMateria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `capitulo`
--

TRUNCATE TABLE `capitulo`;
--
-- Volcado de datos para la tabla `capitulo`
--

INSERT INTO `capitulo` (`id`, `capitulo`, `indice`, `idTema`, `idMateria`) VALUES
(1, 'Teoría Celular', '1', 1, 1),
(2, 'Estructura Celular', '2', 1, 1),
(3, 'Anabolismo y catabolismo', '1', 2, 1),
(4, 'Fotosíntesis', '2', 2, 1),
(5, 'Respiración Anaerobia', '3', 2, 1),
(6, 'Respiración Aerobia', '4', 2, 1),
(7, 'Ciclo Celular', '1', 3, 1),
(8, 'Reproducción Celular', '2', 3, 1),
(9, 'Reproducción a Nivel Organismo', '3', 3, 1),
(10, 'Teorías para explicar el origen de la vida', '1', 5, 1),
(11, 'Teorías para explicar el proceso evolutivo', '2', 5, 1),
(12, 'Evidencias de la evolución: paleontologia', '3', 5, 1),
(13, 'Consecuencias de la evolución: adaptación ', '4', 5, 1),
(14, 'Adaptación y evolución orgánica', '5', 5, 1),

(15, 'Estructura del ecosistema', '1', 6, 1),
(16, 'Dinámica del Ecosistema', '2', 6, 1),
(17, 'Deterioro Ambiental', '3', 6, 1),

(18, 'Materia', '1', 7, 2),
(19, 'Estructura de la Materia', '2', 7, 2),
(20, 'Tabla Periódica', '3', 7, 2),
(21, 'Concepto de Molécula', '4', 7, 2),
(22, 'Reacción Química', '5', 7, 2),
(23, 'Cantidad de sustancia y su unidad el mol', '6', 7, 2),

(24, 'Generalidades', '1', 8, 2),
(25, 'Ácidos y Bases', '2', 8, 2),
(26, 'Disuoluciones', '3', 8, 2),
(27, 'Contaminación del agua', '4', 8, 2),

(28, 'Importancia y aplicaciones del agua para la humanidad', '5', 8, 2),
(29, 'Generalidades', '1', 9, 2),
(30, 'Reacciones del Oxigeno', '2', 9, 2),
(31, 'Reacciones de óxido-reducción', '3', 9, 2),
(32, 'Ciclos de oxigeno, nitrógeno y carbono', '4', 9, 2),
(33, 'Contaminación del Aire', '5', 9, 2),

(34, 'El concepto de cambio de entalpia', '1', 10, 2),
(35, 'Reacciones químicas endotermicas y exotermicas', '2', 10, 2),
(36, 'Equilibrio químico y el principio de Le Chatelier', '3', 10, 2),

(37, 'Velocidad de reacción y los factores que influyen en ella', '4', 10, 2),
(43, 'Características del Carbono', '1', 11, 2),
(44, 'Alcanos, Alquenos, Alquinos e hidrocarburos cíclicos', '2', 11, 2),
(45, 'Grupos funcionales: alcohol, éter, aldehído, cetona ácido', '3', 11, 2),
(46, 'Reacciones Orgánicas', '4', 11, 2),

(47, 'Carbohidratos', '1', 12, 2),
(48, 'Lipidos', '2', 12, 2),
(49, 'Proteínas', '3', 12, 2),
(50, 'Vitaminas y minerales: fuentes de importancia', '4', 12, 2),

(51, 'Caracteristicas de los fenómenos mecanicos','1',13,3),
(52, 'Caracteristicas de los fenómenos mecanicos','2',13,3),
(53, 'Caracteristicas de los fenómenos mecanicos','3',13,3),

(54, 'Factores que cambian la estructura o el estado de movimiento', '1', 13, 3),
(55, 'El concepto de fuerza', '2', 13, 3),
(56, 'Carácter Vectorial de la fuerza', '3', 13, 3),
(57, 'Superposición de fuerzas', '4', 13, 3),
(58, 'Primera Ley de Newton', '5', 13, 3),
(59, 'Segunda Ley de Newton', '6', 13, 3),
(60, 'Tercera ley de Newton', '7', 13, 3),
(61, 'Equilibrio rotacional y traslacional. Fuerza y torca', '8', 13, 3),
(62, 'Ley de la fuerza en un un resorte (Ley de Hooke)', '9', 13, 3),
(63, 'Ley de la Gravitación Universal. Movimiento Planetario', '10', 13, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tema` (`tema`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `idMateria` (`idMateria`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `materia` (`materia`);

--
-- Indices de la tabla `capitulo`
--
ALTER TABLE `capitulo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idTema` (`idTema`),
  ADD KEY `idMateria` (`idMateria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT de la tabla `capitulo`
--
ALTER TABLE `capitulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tema`
--
ALTER TABLE `tema`
  ADD CONSTRAINT `capitulo_ibfk_1` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `capitulo`
--
ALTER TABLE `capitulo`
  ADD CONSTRAINT `parte_ibfk_1` FOREIGN KEY (`idTema`) REFERENCES `tema` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parte_ibfk_2` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;