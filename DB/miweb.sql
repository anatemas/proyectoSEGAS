-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2026 a las 02:14:50
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
-- Base de datos: `miweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `aPaterno` varchar(25) NOT NULL,
  `aMaterno` varchar(25) NOT NULL,
  `correoElectronico` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telefono` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `aPaterno`, `aMaterno`, `correoElectronico`, `password`, `telefono`) VALUES
(7, 'admin', 'admin', 'admin', 'admin@123', '$2y$10$CS1.n12DgWUiR7KcfU', '0000000000'),
(9, 'qqqq', 'aaa', 'ccc', 'qwer@qwer', '$2y$10$RkZNdLPAgCPakdopasqeOul5p9PcHTKkH72u2Z1hFzq6UpJcU3od.', '1234567890'),
(10, 'juan', 'perez', 'perez', 'asd@asd', '$2y$10$fHOk.kx.cEEJ7oob1WvmIu6UV1FN4hf7i9aVJzg8.Gg.LwghW3xp6', '1234567890'),
(11, 'juan', 'perez', 'perez', 'juan@123', '$2y$10$yqa/YfJKpkE5zxeS9ONCj.04u5F3Tt.4LVm47cJr4DzRvDdDJGA0O', '1234567890');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
