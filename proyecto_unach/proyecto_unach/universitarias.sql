-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 10-04-2025 a las 19:55:37
-- Versión del servidor: 5.7.44
-- Versión de PHP: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `universitarias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnas`
--

CREATE TABLE `alumnas` (
  `correo` varchar(40) NOT NULL,
  `matricula` varchar(9) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apaterno` varchar(40) DEFAULT NULL,
  `amaterno` varchar(40) DEFAULT NULL,
  `id_usuario` varchar(25) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `id_carrera` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnas`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` varchar(5) NOT NULL,
  `nombre` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `nombre`) VALUES
('LIDTS', 'LICENCIATURA EN INGENIERÍA EN DESARROLLO DE TECNOLOGÍAS DE SOFTWARE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_citas`
--

CREATE TABLE `catalogo_citas` (
  `id_asunto` int(11) NOT NULL,
  `asunto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `matricula` varchar(9) NOT NULL,
  `id_psicologa` varchar(50) NOT NULL,
  `id_asunto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `id_usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foros`
--

CREATE TABLE `foros` (
  `id_foro` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(200) NOT NULL,
  `matricula` varchar(9) NOT NULL,
  `id_psicologa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `grado` varchar(1) NOT NULL,
  `grupo` varchar(1) NOT NULL,
  `turno` varchar(1) NOT NULL,
  `id_carrera` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `grado`, `grupo`, `turno`, `id_carrera`) VALUES
(1, '4', 'M', 'M', 'LIDTS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico_citas`
--

CREATE TABLE `historico_citas` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `matricula` varchar(9) NOT NULL,
  `id_psicologa` varchar(50) NOT NULL,
  `id_asunto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `psicologas`
--

CREATE TABLE `psicologas` (
  `id_psicologa` varchar(50) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apaterno` varchar(40) NOT NULL,
  `amaterno` varchar(40) NOT NULL,
  `id_usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` varchar(25) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `rol` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `clave`, `rol`) VALUES
('alumnaLIDTS', 'alumnaLIDTS', 'alumna');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnas`
--
ALTER TABLE `alumnas`
  ADD PRIMARY KEY (`correo`),
  ADD KEY `alumnas` UNIQUE(`matricula`);
  ADD KEY `alumnas_usuarios_FK` (`id_usuario`),
  ADD KEY `alumnas_grupos_FK` (`id_grupo`),
  ADD KEY `alumnas_carreras_FK` (`id_carrera`);


--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `catalogo_citas`
--
ALTER TABLE `catalogo_citas`
  ADD PRIMARY KEY (`id_asunto`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `citas_alumnas_FK` (`matricula`),
  ADD KEY `citas_psicologas_FK` (`id_psicologa`),
  ADD KEY `citas_catalogo_citas_FK` (`id_asunto`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eventos_usuarios_FK` (`id_usuario`);

--
-- Indices de la tabla `foros`
--
ALTER TABLE `foros`
  ADD PRIMARY KEY (`id_foro`),
  ADD KEY `foros_alumnas_FK` (`matricula`),
  ADD KEY `foros_psicologas_FK` (`id_psicologa`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `grupos_carreras_FK` (`id_carrera`);

--
-- Indices de la tabla `historico_citas`
--
ALTER TABLE `historico_citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historico_citas_alumnas_FK` (`matricula`),
  ADD KEY `historico_citas_psicologas_FK` (`id_psicologa`),
  ADD KEY `historico_citas_catalogo_citas_FK` (`id_asunto`);

--
-- Indices de la tabla `psicologas`
--
ALTER TABLE `psicologas`
  ADD PRIMARY KEY (`id_psicologa`),
  ADD KEY `psicologas_usuarios_FK` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo_citas`
--
ALTER TABLE `catalogo_citas`
  MODIFY `id_asunto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `foros`
--
ALTER TABLE `foros`
  MODIFY `id_foro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `historico_citas`
--
ALTER TABLE `historico_citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnas`
--
ALTER TABLE `alumnas`
  ADD CONSTRAINT `alumnas_carreras_FK` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id_carrera`),
  ADD CONSTRAINT `alumnas_grupos_FK` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`),
  ADD CONSTRAINT `alumnas_usuarios_FK` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_alumnas_FK` FOREIGN KEY (`matricula`) REFERENCES `alumnas` (`matricula`),
  ADD CONSTRAINT `citas_catalogo_citas_FK` FOREIGN KEY (`id_asunto`) REFERENCES `catalogo_citas` (`id_asunto`),
  ADD CONSTRAINT `citas_psicologas_FK` FOREIGN KEY (`id_psicologa`) REFERENCES `psicologas` (`id_psicologa`);

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_usuarios_FK` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `foros`
--
ALTER TABLE `foros`
  ADD CONSTRAINT `foros_alumnas_FK` FOREIGN KEY (`matricula`) REFERENCES `alumnas` (`matricula`),
  ADD CONSTRAINT `foros_psicologas_FK` FOREIGN KEY (`id_psicologa`) REFERENCES `psicologas` (`id_psicologa`);

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_carreras_FK` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id_carrera`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `historico_citas`
--
ALTER TABLE `historico_citas`
  ADD CONSTRAINT `historico_citas_alumnas_FK` FOREIGN KEY (`matricula`) REFERENCES `alumnas` (`matricula`),
  ADD CONSTRAINT `historico_citas_catalogo_citas_FK` FOREIGN KEY (`id_asunto`) REFERENCES `catalogo_citas` (`id_asunto`),
  ADD CONSTRAINT `historico_citas_psicologas_FK` FOREIGN KEY (`id_psicologa`) REFERENCES `psicologas` (`id_psicologa`);

--
-- Filtros para la tabla `psicologas`
--
ALTER TABLE `psicologas`
  ADD CONSTRAINT `psicologas_usuarios_FK` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
