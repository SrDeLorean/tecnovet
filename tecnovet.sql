-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2019 a las 00:38:17
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnovet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteres`
--

CREATE TABLE `caracteres` (
  `caracter_id` int(10) UNSIGNED NOT NULL,
  `caracter_nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caracter_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `consulta_id` int(10) UNSIGNED NOT NULL,
  `consulta_nombre` varchar(50) DEFAULT NULL,
  `consulta_descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especies`
--

CREATE TABLE `especies` (
  `especie_id` int(10) UNSIGNED NOT NULL,
  `especie_nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especie_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `estado_id` int(10) UNSIGNED NOT NULL,
  `estado_nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `ficha_id` int(10) UNSIGNED NOT NULL,
  `ficha_mascota` int(10) UNSIGNED NOT NULL,
  `ficha_control` datetime NOT NULL,
  `ficha_confirmacion` int(11) NOT NULL,
  `ficha_creacion` timestamp NULL DEFAULT NULL,
  `ficha_actualizacion` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialhospitalizaciones`
--

CREATE TABLE `historialhospitalizaciones` (
  `hh_id` int(10) UNSIGNED NOT NULL,
  `hh_hospitalizacion` int(10) UNSIGNED NOT NULL,
  `hh_visita` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialtratamientos`
--

CREATE TABLE `historialtratamientos` (
  `ht_id` int(10) UNSIGNED NOT NULL,
  `ht_tratamiento` int(10) UNSIGNED NOT NULL,
  `ht_visita` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialvacunas`
--

CREATE TABLE `historialvacunas` (
  `hv_id` int(10) UNSIGNED NOT NULL,
  `hv_vacuna` int(10) UNSIGNED NOT NULL,
  `hv_visita` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospitalizaciones`
--

CREATE TABLE `hospitalizaciones` (
  `hostipalizacion_id` int(10) UNSIGNED NOT NULL,
  `hospitalizacion_nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospitalizacion_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `mascota_id` int(10) UNSIGNED NOT NULL,
  `mascota_usuario` int(10) UNSIGNED NOT NULL,
  `mascota_nombre` varchar(50) CHARACTER SET armscii8 NOT NULL,
  `mascota_especie` int(10) UNSIGNED NOT NULL,
  `mascota_raza` int(10) UNSIGNED NOT NULL,
  `mascota_sexo` int(10) UNSIGNED NOT NULL,
  `mascota_fechaNacimiento` date NOT NULL,
  `mascota_color` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mascota_microchip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mascota_foto` blob NOT NULL,
  `mascota_caracter` int(10) UNSIGNED NOT NULL,
  `mascota_estado` int(10) UNSIGNED NOT NULL,
  `mascota_esterilizacion` int(11) NOT NULL,
  `mascota_creacion` timestamp NULL DEFAULT NULL,
  `mascota_actualizacion` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `perfil_id` int(10) UNSIGNED NOT NULL,
  `perfil_nombre` varchar(20) NOT NULL,
  `perfil_descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`perfil_id`, `perfil_nombre`, `perfil_descripcion`) VALUES
(1, 'Administrador', 'Perfil encargado de la administracion del del la aplicacion'),
(2, 'Veterinario', 'Este perfil permite administrar las funciones de la aplicacion.'),
(3, 'Usuario', 'Este perfil es el mas basico, perimite a las personas externas que se encuentren en el sistema acceder a la informacion de su mascota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razas`
--

CREATE TABLE `razas` (
  `raza_id` int(10) UNSIGNED NOT NULL,
  `raza_nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raza_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `raza_especie` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexos`
--

CREATE TABLE `sexos` (
  `sexo_id` int(10) UNSIGNED NOT NULL,
  `sexo_nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `tratamiento_id` int(10) UNSIGNED NOT NULL,
  `tratamiento_nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tratamiento_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `usuario_rut` varchar(20) NOT NULL,
  `usuario_nombre` varchar(50) DEFAULT NULL,
  `usuario_apellido` varchar(50) DEFAULT NULL,
  `usuario_direccion` varchar(50) DEFAULT NULL,
  `usuario_email` varchar(50) DEFAULT NULL,
  `usuario_telefono` varchar(20) DEFAULT NULL,
  `usuario_perfil` int(10) UNSIGNED NOT NULL DEFAULT 3 COMMENT 'perfil por defecto : 3 -> usuario\n\n',
  `usuario_estado` int(11) NOT NULL DEFAULT 1 COMMENT 'estado por defecto : 1 -> activo',
  `usuario_password` varchar(50) DEFAULT NULL,
  `usuario_foto` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_rut`, `usuario_nombre`, `usuario_apellido`, `usuario_direccion`, `usuario_email`, `usuario_telefono`, `usuario_perfil`, `usuario_estado`, `usuario_password`, `usuario_foto`) VALUES
(1, '17981062-k', 'Javier', 'Ibarra', 'Villa La Higuerilla N12 Sagrada Familia', 'jibarra@proyectomapache.cl', '994988986', 1, 1, '19d401a80fc1cc54a7bef733afb3da29', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunas`
--

CREATE TABLE `vacunas` (
  `vacuna_id` int(10) UNSIGNED NOT NULL,
  `vacuna_nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacuna_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacuna_especie` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `visita_id` int(10) UNSIGNED NOT NULL,
  `visita_usuario` int(10) UNSIGNED NOT NULL,
  `visita_ficha` int(10) UNSIGNED NOT NULL,
  `visita_consulta` int(10) UNSIGNED NOT NULL,
  `visita_fr` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visita_fc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visita_precion` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visita_mucosa` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visita_temperatura` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visita_fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `visita_documento` blob NOT NULL,
  `visita_observacion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caracteres`
--
ALTER TABLE `caracteres`
  ADD PRIMARY KEY (`caracter_id`),
  ADD UNIQUE KEY `Caracter_id_UNIQUE` (`caracter_id`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`consulta_id`),
  ADD UNIQUE KEY `consulta_id_UNIQUE` (`consulta_id`);

--
-- Indices de la tabla `especies`
--
ALTER TABLE `especies`
  ADD PRIMARY KEY (`especie_id`),
  ADD UNIQUE KEY `especie_id_UNIQUE` (`especie_id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`estado_id`),
  ADD UNIQUE KEY `estado_id_UNIQUE` (`estado_id`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`ficha_id`),
  ADD KEY `ficha_mascota_idx` (`ficha_mascota`);

--
-- Indices de la tabla `historialhospitalizaciones`
--
ALTER TABLE `historialhospitalizaciones`
  ADD PRIMARY KEY (`hh_id`),
  ADD UNIQUE KEY `hv_id_UNIQUE` (`hh_id`),
  ADD KEY `hh_hospitalizacion_idx` (`hh_hospitalizacion`),
  ADD KEY `hh_visita_idx` (`hh_visita`);

--
-- Indices de la tabla `historialtratamientos`
--
ALTER TABLE `historialtratamientos`
  ADD PRIMARY KEY (`ht_id`),
  ADD UNIQUE KEY `hv_id_UNIQUE` (`ht_id`),
  ADD KEY `ht_tratamiento_idx` (`ht_tratamiento`),
  ADD KEY `ht_visita_idx` (`ht_visita`);

--
-- Indices de la tabla `historialvacunas`
--
ALTER TABLE `historialvacunas`
  ADD PRIMARY KEY (`hv_id`),
  ADD UNIQUE KEY `hv_id_UNIQUE` (`hv_id`),
  ADD KEY `hv_vacuna_idx` (`hv_vacuna`),
  ADD KEY `hv_visita_idx` (`hv_visita`);

--
-- Indices de la tabla `hospitalizaciones`
--
ALTER TABLE `hospitalizaciones`
  ADD PRIMARY KEY (`hostipalizacion_id`),
  ADD UNIQUE KEY `hostipalizacion_id_UNIQUE` (`hostipalizacion_id`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`mascota_id`),
  ADD UNIQUE KEY `mascota_id_UNIQUE` (`mascota_id`),
  ADD KEY `mascota_raza_idx` (`mascota_raza`),
  ADD KEY `mascota_especie_idx` (`mascota_especie`),
  ADD KEY `mascota_sexo_idx` (`mascota_sexo`),
  ADD KEY `mascota_caracter_idx` (`mascota_caracter`),
  ADD KEY `mascota_estado_idx` (`mascota_estado`),
  ADD KEY `mascota_usuario` (`mascota_usuario`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`perfil_id`),
  ADD UNIQUE KEY `perfil_id_UNIQUE` (`perfil_id`);

--
-- Indices de la tabla `razas`
--
ALTER TABLE `razas`
  ADD PRIMARY KEY (`raza_id`),
  ADD UNIQUE KEY `raza_id_UNIQUE` (`raza_id`),
  ADD KEY `razas_especie_id_foreign_idx` (`raza_especie`);

--
-- Indices de la tabla `sexos`
--
ALTER TABLE `sexos`
  ADD PRIMARY KEY (`sexo_id`),
  ADD UNIQUE KEY `sexo_id_UNIQUE` (`sexo_id`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD PRIMARY KEY (`tratamiento_id`),
  ADD UNIQUE KEY `tratamiento_id_UNIQUE` (`tratamiento_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `email_UNIQUE` (`usuario_email`),
  ADD KEY `perfil` (`usuario_perfil`);

--
-- Indices de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  ADD PRIMARY KEY (`vacuna_id`),
  ADD UNIQUE KEY `vacuna_id_UNIQUE` (`vacuna_id`),
  ADD KEY `vacunas_especie_id_foreign` (`vacuna_especie`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`visita_id`),
  ADD UNIQUE KEY `visita_id_UNIQUE` (`visita_id`),
  ADD KEY `visita_usuario_idx` (`visita_usuario`),
  ADD KEY `visita_consulta_idx` (`visita_consulta`),
  ADD KEY `visita_ficha_idx` (`visita_ficha`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caracteres`
--
ALTER TABLE `caracteres`
  MODIFY `caracter_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `consulta_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especies`
--
ALTER TABLE `especies`
  MODIFY `especie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `estado_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historialhospitalizaciones`
--
ALTER TABLE `historialhospitalizaciones`
  MODIFY `hh_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historialtratamientos`
--
ALTER TABLE `historialtratamientos`
  MODIFY `ht_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hospitalizaciones`
--
ALTER TABLE `hospitalizaciones`
  MODIFY `hostipalizacion_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `perfil_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `razas`
--
ALTER TABLE `razas`
  MODIFY `raza_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sexos`
--
ALTER TABLE `sexos`
  MODIFY `sexo_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  MODIFY `tratamiento_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  MODIFY `vacuna_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD CONSTRAINT `ficha_mascota` FOREIGN KEY (`ficha_mascota`) REFERENCES `mascotas` (`mascota_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historialhospitalizaciones`
--
ALTER TABLE `historialhospitalizaciones`
  ADD CONSTRAINT `hh_hospitalizacion` FOREIGN KEY (`hh_hospitalizacion`) REFERENCES `hospitalizaciones` (`hostipalizacion_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `hh_visita` FOREIGN KEY (`hh_visita`) REFERENCES `visitas` (`visita_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historialtratamientos`
--
ALTER TABLE `historialtratamientos`
  ADD CONSTRAINT `ht_tratamiento` FOREIGN KEY (`ht_tratamiento`) REFERENCES `tratamientos` (`tratamiento_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ht_visita` FOREIGN KEY (`ht_visita`) REFERENCES `visitas` (`visita_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historialvacunas`
--
ALTER TABLE `historialvacunas`
  ADD CONSTRAINT `hv_vacuna` FOREIGN KEY (`hv_vacuna`) REFERENCES `vacunas` (`vacuna_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `hv_visita` FOREIGN KEY (`hv_visita`) REFERENCES `visitas` (`visita_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `mascota_caracter` FOREIGN KEY (`mascota_caracter`) REFERENCES `caracteres` (`caracter_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `mascota_especie` FOREIGN KEY (`mascota_especie`) REFERENCES `especies` (`especie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `mascota_estado` FOREIGN KEY (`mascota_estado`) REFERENCES `estado` (`estado_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `mascota_raza` FOREIGN KEY (`mascota_raza`) REFERENCES `razas` (`raza_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `mascota_sexo` FOREIGN KEY (`mascota_sexo`) REFERENCES `sexos` (`sexo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `mascota_usuario` FOREIGN KEY (`mascota_usuario`) REFERENCES `usuarios` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `razas`
--
ALTER TABLE `razas`
  ADD CONSTRAINT `razas_especie_id_foreign` FOREIGN KEY (`raza_especie`) REFERENCES `especies` (`especie_id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `perfil` FOREIGN KEY (`usuario_perfil`) REFERENCES `perfiles` (`perfil_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD CONSTRAINT `visita_consulta` FOREIGN KEY (`visita_consulta`) REFERENCES `consultas` (`consulta_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `visita_ficha` FOREIGN KEY (`visita_ficha`) REFERENCES `fichas` (`ficha_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `visita_usuario` FOREIGN KEY (`visita_usuario`) REFERENCES `usuarios` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
