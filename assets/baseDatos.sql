-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2018 a las 05:23:46
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `servicionegocios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contrato`
--

CREATE TABLE `tbl_contrato` (
  `id` int(11) NOT NULL,
  `id_oferente` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_plan` decimal(10,0) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `estado` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_horario_setup`
--

CREATE TABLE `tbl_horario_setup` (
  `id` int(11) NOT NULL,
  `id_oferente` int(11) NOT NULL,
  `duracion` int(11) NOT NULL,
  `lunes` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `martes` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `miercoles` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `jueves` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `viernes` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `sabado` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `domingo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `break1` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `break2` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `break3` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_oferente`
--

CREATE TABLE `tbl_oferente` (
  `id` int(11) NOT NULL,
  `rut` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nombres` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `ap_paterno` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `ap_materno` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `user` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_ingreso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_oferente`
--

INSERT INTO `tbl_oferente` (`id`, `rut`, `nombres`, `ap_paterno`, `ap_materno`, `mail`, `user`, `pass`, `fecha_ingreso`) VALUES
(1, '14207015-4', 'Mario', 'Fuentealba', 'Otarola', 'mario.fuentealba.otarola@gmail.com', 'wotan', 'asdqwe123', '0000-00-00'),
(2, 'd', 'd', 'd', 'd', 'd', 'd', 'd', '0000-00-00'),
(3, 'd', 'd', 'd', 'd', 'dsd', 'dssd', 'd', '0000-00-00'),
(4, 'dy', 'y', 'y', 'y', 'y', 'y', 'y', '0000-00-00'),
(5, 'e', 'e', 'e', 'e', 'e', 'e', 'e', '0000-00-00'),
(6, 'gh', 'gh', 'gh', 'gh', 'gh', 'gh', 'gh', '0000-00-00'),
(7, 't', 't', 't', 't', 't', 't', 't', '0000-00-00'),
(8, 'c', 'c', 'c', 'c', 'c', 'c', 'c', '0000-00-00'),
(9, 'm', 'm', 'm', 'm', 'm', 'm', 'm', '0000-00-00'),
(10, 'j', 'j', 'j', 'j', 'j', 'j', 'j', '0000-00-00'),
(11, 'h', 'h', 'h', 'h', 'h', 'h', 'h', '0000-00-00'),
(12, 'k', 'k', 'k', 'k', 'k', 'k', 'k', '0000-00-00'),
(13, 'rr', 'rr', 'rr', 'rr', 'rr', 'rr', 'rr', '0000-00-00'),
(14, 'n', 'n', 'n', 'n', 'n', 'n', 'n', '0000-00-00'),
(15, 'x', 'x', 'x', 'x', 'x', 'x', 'x', '0000-00-00'),
(16, 'p', 'p', 'p', 'p', 'p', 'p', 'p', '0000-00-00'),
(17, 'ol', 'ol', 'ol', 'ol', 'ol', 'ol', 'ol', '0000-00-00'),
(18, 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', '2018-01-18'),
(19, 'ww', 'ww', 'ww', 'ww', 'ww', 'ww', 'ww', '2018-01-18'),
(20, '222', '222', '222', '222', '222', '222', '2222', '2018-01-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_plan`
--

CREATE TABLE `tbl_plan` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `comision` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_servicio`
--

CREATE TABLE `tbl_servicio` (
  `id` int(11) NOT NULL,
  `glosa` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_horario_setup`
--
ALTER TABLE `tbl_horario_setup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tbl_oferente` (`id_oferente`);

--
-- Indices de la tabla `tbl_oferente`
--
ALTER TABLE `tbl_oferente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indices de la tabla `tbl_servicio`
--
ALTER TABLE `tbl_servicio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_horario_setup`
--
ALTER TABLE `tbl_horario_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_oferente`
--
ALTER TABLE `tbl_oferente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tbl_servicio`
--
ALTER TABLE `tbl_servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_horario_setup`
--
ALTER TABLE `tbl_horario_setup`
  ADD CONSTRAINT `FK_tbl_oferente` FOREIGN KEY (`id_oferente`) REFERENCES `tbl_oferente` (`id`);
COMMIT;
