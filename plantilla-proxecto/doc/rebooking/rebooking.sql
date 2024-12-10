-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2024 a las 12:01:07
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
-- Base de datos: `rebooking`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE `acciones` (
  `idAccion` int(5) NOT NULL,
  `idLibro` int(5) NOT NULL,
  `idCliente` int(5) NOT NULL,
  `tipoAccion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `acciones`
--

INSERT INTO `acciones` (`idAccion`, `idLibro`, `idCliente`, `tipoAccion`) VALUES
(1, 2, 2, 'compra'),
(2, 4, 2, 'prestamo'),
(3, 1, 2, 'compra'),
(4, 1, 2, 'compra'),
(5, 3, 2, 'prestamo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(5) NOT NULL,
  `nombreCliente` varchar(100) NOT NULL,
  `direccionCliente` varchar(100) NOT NULL,
  `mailCliente` varchar(100) NOT NULL,
  `nombreSesion` varchar(50) NOT NULL,
  `passSesion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nombreCliente`, `direccionCliente`, `mailCliente`, `nombreSesion`, `passSesion`) VALUES
(1, 'Maria', 'Cambados', '', 'mari', 'nbfgnfmfhnm'),
(2, 'Julia', 'Catoira', '', 'JuliaR', 'nuevac'),
(4, 'hgffg', 'jfgjfgjfg thtfghjfj', 'hgfngfdn@gmail.com', 'bhdfhb', 'abc123'),
(5, 'sara', 'santiago de compostela', 'sarasarita@gmail.com', 'sarita07', 'abc123'),
(6, 'prueba', 'santiago', 'prueba1@gmail.com', 'prueba1', 'abc123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `librerias`
--

CREATE TABLE `librerias` (
  `idLibreria` int(5) NOT NULL,
  `nombreLibreria` varchar(100) NOT NULL,
  `logoLibreria` varchar(100) NOT NULL,
  `direccionLibreria` varchar(100) NOT NULL,
  `mailLibreria` varchar(50) NOT NULL,
  `nombreSesion` varchar(50) NOT NULL,
  `passSesion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `librerias`
--

INSERT INTO `librerias` (`idLibreria`, `nombreLibreria`, `logoLibreria`, `direccionLibreria`, `mailLibreria`, `nombreSesion`, `passSesion`) VALUES
(1, 'Hojas de Lorien', 'hojasdelorien', 'Vilagarcia', 'hojaslorien@gmail.com', 'hojitas', 'hdgnfngfnfn'),
(2, 'Casa del Libro', 'casadellibro', 'santiago', 'casadellibro@gmail.com', 'cdellibro', 'contraseña'),
(4, 'Follas Novas', 'follasnovas', 'Santiago', 'follasnovas@gmail.com', 'fnovas', 'contraseña');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libroenlibreria`
--

CREATE TABLE `libroenlibreria` (
  `idProducto` int(5) NOT NULL,
  `idLibro` int(5) NOT NULL,
  `idLibreria` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `libroenlibreria`
--

INSERT INTO `libroenlibreria` (`idProducto`, `idLibro`, `idLibreria`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idLibro` int(5) NOT NULL,
  `nombreLibro` varchar(100) NOT NULL,
  `isbnLibro` bigint(13) NOT NULL,
  `nombreAutor` varchar(100) NOT NULL,
  `imagenLibro` varchar(100) NOT NULL,
  `generoLibro` varchar(80) NOT NULL,
  `editorialLibro` varchar(100) NOT NULL,
  `estadoLibro` tinyint(1) NOT NULL,
  `precioLibro` decimal(4,0) NOT NULL,
  `idiomaLibro` varchar(50) NOT NULL,
  `anoPublicacion` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idLibro`, `nombreLibro`, `isbnLibro`, `nombreAutor`, `imagenLibro`, `generoLibro`, `editorialLibro`, `estadoLibro`, `precioLibro`, `idiomaLibro`, `anoPublicacion`) VALUES
(1, 'El señor de los anillos', 1234567891, 'Tolkien', 'elseñordelosanillos', 'Fantasía', 'Minotauro', 0, 10, 'español', '1980'),
(2, 'El Hobbit', 1234567891, 'Tolkien', 'elhobbit', 'Fantasía', 'Minotauro', 1, 10, 'español', '1980'),
(3, 'La sirenita', 1234567891, 'Hans Christian Andersen', 'lasirenita', 'clásico', 'edelvives', 1, 8, 'español', '2022'),
(4, 'El castillo ambulante', 1234567891, 'Dyana Wynne Jones', 'elcastilloambulante', 'fantasía', 'nocturna', 1, 9, 'español', '2020'),
(5, 'El imperio final', 1234567891, 'Brandon Sanderson', 'elimperiofinal', 'fantasía', 'nova', 1, 10, 'español', '2021'),
(6, 'Orgullo y prejuicio', 1234567891, 'Jane Austen', 'orgulloyprejuicio', 'romance', 'alma', 1, 6, 'español', '2017');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`idAccion`),
  ADD KEY `idLibro` (`idLibro`,`idCliente`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `librerias`
--
ALTER TABLE `librerias`
  ADD PRIMARY KEY (`idLibreria`);

--
-- Indices de la tabla `libroenlibreria`
--
ALTER TABLE `libroenlibreria`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `idLibro` (`idLibro`,`idLibreria`),
  ADD KEY `idLibreria` (`idLibreria`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idLibro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acciones`
--
ALTER TABLE `acciones`
  MODIFY `idAccion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `librerias`
--
ALTER TABLE `librerias`
  MODIFY `idLibreria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `libroenlibreria`
--
ALTER TABLE `libroenlibreria`
  MODIFY `idProducto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibro` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD CONSTRAINT `acciones_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `acciones_ibfk_2` FOREIGN KEY (`idLibro`) REFERENCES `libros` (`idLibro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libroenlibreria`
--
ALTER TABLE `libroenlibreria`
  ADD CONSTRAINT `libroenlibreria_ibfk_1` FOREIGN KEY (`idLibreria`) REFERENCES `librerias` (`idLibreria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libroenlibreria_ibfk_2` FOREIGN KEY (`idLibro`) REFERENCES `libros` (`idLibro`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
