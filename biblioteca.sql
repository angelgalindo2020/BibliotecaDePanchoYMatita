-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2020 a las 15:05:03
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `CodigoLibro` int(11) NOT NULL,
  `NombreLibro` varchar(60) NOT NULL,
  `Editorial` varchar(25) NOT NULL,
  `Autor` varchar(25) NOT NULL,
  `Genero` varchar(20) NOT NULL,
  `PaisAutor` varchar(20) NOT NULL,
  `NumPaginas` int(11) NOT NULL,
  `AnioEdicion` year(4) NOT NULL,
  `Precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`CodigoLibro`, `NombreLibro`, `Editorial`, `Autor`, `Genero`, `PaisAutor`, `NumPaginas`, `AnioEdicion`, `Precio`) VALUES
(1, 'Don Quijote De La Mancha I', 'Anaya', 'Miguel De Cervantes', 'Caballeresco', 'España', 517, 1991, 2750),
(2, 'Don Quijote De La Mancha II', 'Anaya', 'Miguel De Cervantes', 'Caballeresco', 'España', 611, 1991, 3125),
(3, 'Historias De Nueva Orleans', 'Alfaguara', 'William Faulkner', 'Novela', 'Estados Unidos', 186, 1985, 675),
(4, 'El Principito', 'Andina', 'Antoine Saint-Expuery', 'Aventura', 'Francia', 120, 1996, 750),
(5, 'El Principe', 'S.M.', 'Maquiavelo', 'Politico', 'Italia', 210, 1995, 1125),
(6, 'Diplomacia', 'S.M.', 'Henry Kissinger', 'Politico', 'Alemania', 825, 1997, 1750),
(7, 'Los Windsor', 'Plaza & Janes', 'Kitty Kelley', 'Biografias', 'Gran Bretaña', 620, 1998, 1130),
(8, 'El Ultimo Emperador', 'Caralt', 'Pu-Yi', 'Autobiografias', 'China', 353, 1989, 995),
(9, 'Fortunata Y Jacinta', 'Plaza Y Janes', 'Perez Galdos', 'Novela', 'España', 625, 1984, 725),
(14, '', '', '', '', '', 0, 0000, 0),
(15, '', '', '', '', '', 0, 0000, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `NumPedido` int(11) NOT NULL,
  `CodigoLibro` int(11) NOT NULL,
  `CodigoUsuario` int(11) NOT NULL,
  `FechaSalida` date NOT NULL,
  `FechaMax` date NOT NULL,
  `FechaDevolucion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`NumPedido`, `CodigoLibro`, `CodigoUsuario`, `FechaSalida`, `FechaMax`, `FechaDevolucion`) VALUES
(1, 1, 3, '1999-11-01', '1999-11-15', '1999-11-13'),
(2, 3, 2, '1999-11-03', '1999-11-20', '1999-11-22'),
(3, 2, 5, '1999-11-18', '1999-11-30', '1999-11-25'),
(4, 5, 6, '1999-11-21', '1999-12-03', '1999-12-05'),
(5, 9, 2, '1999-11-21', '1999-12-05', '1999-11-30'),
(6, 2, 4, '1999-11-26', '1999-12-07', '1999-12-01'),
(7, 4, 3, '1999-11-30', '1999-12-07', '1999-12-08'),
(8, 1, 1, '1999-12-01', '1999-12-09', '1999-12-11'),
(9, 3, 6, '1999-12-03', '1999-12-09', '1999-12-09'),
(10, 7, 3, '1999-12-03', '1999-12-18', '1999-12-15'),
(11, 3, 2, '1999-12-05', '1999-12-22', '1999-12-20'),
(27, 4, 4, '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `CodigoUsuario` int(11) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellidos` varchar(25) NOT NULL,
  `DNI` varchar(12) NOT NULL,
  `Domicilio` varchar(50) NOT NULL,
  `Poblacion` varchar(30) NOT NULL,
  `Provincia` varchar(20) NOT NULL,
  `FechaNacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`CodigoUsuario`, `Nombre`, `Apellidos`, `DNI`, `Domicilio`, `Poblacion`, `Provincia`, `FechaNacimiento`) VALUES
(1, 'Ines', 'Posadas Gil', '42.117.892-S', 'Av. Escaleritas 12', 'Las Palmas G.C.', 'Las Palmas', '2001-01-01'),
(2, 'Jose', 'Sanchez Pons', '31.765.348-D', 'Mesa y Lopez 51', 'Las Palmas G.C.', 'Las Palmas', '2001-01-01'),
(3, 'Miguel', 'Gomez Saez', '11.542.981-G', 'Gran Via 71', 'Madrid', 'Madrid', '2001-01-01'),
(4, 'Eva', 'Santa Paez', '78.542.450-L', 'Allende #8', 'Bilbao', 'Vizayuca', '2001-01-01'),
(5, 'Yolanda', 'Betancor Diaz', '44.312.870', 'Chapultepec #8', 'Actopan', 'Hidalgo', '2001-01-01'),
(6, 'Juan Luis', 'Blasco Pita', '47.234.471-P', 'Jaime I. 65', 'Alcira', 'Valencia', '2001-01-01'),
(7, 'Yolanda', 'Moreno Perez', '48.238.473-Y', 'Chapultepec #8', 'Actopan', 'Hidalgo', '2001-01-01'),
(21, '', '', '', '', '', '', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`CodigoLibro`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`NumPedido`),
  ADD KEY `codigolibro` (`CodigoLibro`),
  ADD KEY `codigousuario` (`CodigoUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`CodigoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `CodigoLibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `NumPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `CodigoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`codigolibro`) REFERENCES `libros` (`CodigoLibro`),
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`codigousuario`) REFERENCES `usuarios` (`CodigoUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
