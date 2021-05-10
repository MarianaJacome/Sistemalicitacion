-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2021 a las 16:18:19
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `licitacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_estados`
--

CREATE TABLE `cat_estados` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `abrev` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(1) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cat_estados`
--

INSERT INTO `cat_estados` (`id`, `name`, `clave`, `abrev`, `activo`, `created`, `modified`) VALUES
('85053efb-f09d-11e7-97a7-00ffb155c11c', 'Aguascalientes', '01', 'Ags.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85054116-f09d-11e7-97a7-00ffb155c11c', 'Baja California', '02', 'BC', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85054230-f09d-11e7-97a7-00ffb155c11c', 'Baja California Sur', '03', 'BCS', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('8505434a-f09d-11e7-97a7-00ffb155c11c', 'Campeche', '04', 'Camp.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85054461-f09d-11e7-97a7-00ffb155c11c', 'Coahuila de Zaragoza', '05', 'Coah.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('8505457b-f09d-11e7-97a7-00ffb155c11c', 'Colima', '06', 'Col.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85054699-f09d-11e7-97a7-00ffb155c11c', 'Chiapas', '07', 'Chis.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('850547b0-f09d-11e7-97a7-00ffb155c11c', 'Chihuahua', '08', 'Chih.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('850548ca-f09d-11e7-97a7-00ffb155c11c', 'Distrito Federal', '09', 'DF', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('850549f1-f09d-11e7-97a7-00ffb155c11c', 'Durango', '10', 'Dgo.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85054af2-f09d-11e7-97a7-00ffb155c11c', 'Guanajuato', '11', 'Gto.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85054bf6-f09d-11e7-97a7-00ffb155c11c', 'Guerrero', '12', 'Gro.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85054cf9-f09d-11e7-97a7-00ffb155c11c', 'Hidalgo', '13', 'Hgo.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85054dfd-f09d-11e7-97a7-00ffb155c11c', 'Jalisco', '14', 'Jal.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85054f01-f09d-11e7-97a7-00ffb155c11c', 'México', '15', 'Mex.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85055005-f09d-11e7-97a7-00ffb155c11c', 'Michoacán de Ocampo', '16', 'Mich.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85055102-f09d-11e7-97a7-00ffb155c11c', 'Morelos', '17', 'Mor.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85055203-f09d-11e7-97a7-00ffb155c11c', 'Nayarit', '18', 'Nay.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('8505530a-f09d-11e7-97a7-00ffb155c11c', 'Nuevo León', '19', 'NL', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85055414-f09d-11e7-97a7-00ffb155c11c', 'Oaxaca', '20', 'Oax.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('8505551b-f09d-11e7-97a7-00ffb155c11c', 'Puebla', '21', 'Pue.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85055622-f09d-11e7-97a7-00ffb155c11c', 'Querétaro', '22', 'Qro.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85055726-f09d-11e7-97a7-00ffb155c11c', 'Quintana Roo', '23', 'Q. Roo', 1, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('8505582d-f09d-11e7-97a7-00ffb155c11c', 'San Luis Potosí', '24', 'SLP', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('8505596e-f09d-11e7-97a7-00ffb155c11c', 'Sinaloa', '25', 'Sin.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85055a4e-f09d-11e7-97a7-00ffb155c11c', 'Sonora', '26', 'Son.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85055b2b-f09d-11e7-97a7-00ffb155c11c', 'Tabasco', '27', 'Tab.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85055c0c-f09d-11e7-97a7-00ffb155c11c', 'Tamaulipas', '28', 'Tamps.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85055cec-f09d-11e7-97a7-00ffb155c11c', 'Tlaxcala', '29', 'Tlax.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85055dcd-f09d-11e7-97a7-00ffb155c11c', 'Veracruz de Ignacio de la Llave', '30', 'Ver.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85055eb4-f09d-11e7-97a7-00ffb155c11c', 'Yucatán', '31', 'Yuc.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('85055f9e-f09d-11e7-97a7-00ffb155c11c', 'Zacatecas', '32', 'Zac.', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26'),
('8505608b-f09d-11e7-97a7-00ffb155c11c', 'SIN ESTADO', '00', 'S/E', 0, '2018-01-03 13:14:26', '2018-01-03 13:14:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_licitaciones`
--

CREATE TABLE `cat_licitaciones` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `convocatoria` varchar(36) COLLATE utf8_spanish_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `numero_licitacion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `lugar` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cat_municipio_id` char(36) COLLATE utf8_spanish_ci DEFAULT NULL,
  `monto` decimal(10,3) DEFAULT NULL,
  `obra` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(1) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_municipios`
--

CREATE TABLE `cat_municipios` (
  `id` char(36) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `cat_estado_id` char(36) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_municipio_ine` int(11) DEFAULT NULL,
  `clave` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `meta` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cat_municipios`
--

INSERT INTO `cat_municipios` (`id`, `name`, `cat_estado_id`, `id_municipio_ine`, `clave`, `meta`, `activo`, `created`, `modified`) VALUES
('cae1b4a2-f09d-11e7-97a7-00ffb155c11c', 'Cozumel', '85055726-f09d-11e7-97a7-00ffb155c11c', 2, '001', 0, 1, '2018-01-03 13:29:42', '2018-01-03 13:29:42'),
('cae1b84e-f09d-11e7-97a7-00ffb155c11c', 'Felipe Carrillo Puerto', '85055726-f09d-11e7-97a7-00ffb155c11c', 3, '002', 0, 1, '2018-01-03 13:29:42', '2018-01-03 13:29:42'),
('cae1ba6c-f09d-11e7-97a7-00ffb155c11c', 'Isla Mujeres', '85055726-f09d-11e7-97a7-00ffb155c11c', 4, '003', 0, 1, '2018-01-03 13:29:42', '2018-01-03 13:29:42'),
('cae1bc50-f09d-11e7-97a7-00ffb155c11c', 'Othón P. Blanco', '85055726-f09d-11e7-97a7-00ffb155c11c', 7, '004', 0, 1, '2018-01-03 13:29:42', '2018-01-03 13:29:42'),
('cae1be1e-f09d-11e7-97a7-00ffb155c11c', 'Benito Juárez', '85055726-f09d-11e7-97a7-00ffb155c11c', 1, '005', 0, 1, '2018-01-03 13:29:42', '2018-01-03 13:29:42'),
('cae1bff2-f09d-11e7-97a7-00ffb155c11c', 'José María Morelos', '85055726-f09d-11e7-97a7-00ffb155c11c', 5, '006', 0, 1, '2018-01-03 13:29:42', '2018-01-03 13:29:42'),
('cae1c1e0-f09d-11e7-97a7-00ffb155c11c', 'Lázaro Cárdenas', '85055726-f09d-11e7-97a7-00ffb155c11c', 6, '007', 0, 1, '2018-01-03 13:29:42', '2018-01-03 13:29:42'),
('cae1c3ce-f09d-11e7-97a7-00ffb155c11c', 'Solidaridad', '85055726-f09d-11e7-97a7-00ffb155c11c', 8, '008', 0, 1, '2018-01-03 13:29:42', '2018-01-03 13:29:42'),
('cae1c5b6-f09d-11e7-97a7-00ffb155c11c', 'Tulum', '85055726-f09d-11e7-97a7-00ffb155c11c', 9, '009', 0, 1, '2018-01-03 13:29:42', '2018-01-03 13:29:42'),
('cae1c7aa-f09d-11e7-97a7-00ffb155c11c', 'Bacalar', '85055726-f09d-11e7-97a7-00ffb155c11c', 10, '010', 0, 1, '2018-01-03 13:29:42', '2018-01-03 13:29:42'),
('caf0dcca-f09d-11e7-97a7-00ffb155c11c', 'Puerto Morelos', '85055726-f09d-11e7-97a7-00ffb155c11c', 11, '011', 0, 1, '2018-01-03 13:29:42', '2018-01-03 13:29:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `co_grupos`
--

CREATE TABLE `co_grupos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripción` text COLLATE utf8_spanish_ci NOT NULL,
  `pagina_inicial` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(1) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `co_grupos`
--

INSERT INTO `co_grupos` (`id`, `name`, `descripción`, `pagina_inicial`, `activo`, `created`, `modified`) VALUES
('e6344dd3-2531-4f04-ac26-8ce3fe3d5dc9', 'Administrador', 'Administrador del Sistema.', '/Inicio', 1, '2021-05-06 12:06:24', '2021-05-06 12:06:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `co_grupos_co_menus`
--

CREATE TABLE `co_grupos_co_menus` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `co_grupo_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `co_menu_id` char(36) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `co_grupos_co_permisos`
--

CREATE TABLE `co_grupos_co_permisos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `co_grupo_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `co_permiso_id` char(36) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `co_grupos_co_permisos`
--

INSERT INTO `co_grupos_co_permisos` (`id`, `co_grupo_id`, `co_permiso_id`) VALUES
('78346f18-8ac7-43b3-b7cd-d62ad992b098', 'e6344dd3-2531-4f04-ac26-8ce3fe3d5dc9', 'bf8e1f27-ecb3-478e-bffb-f945e645db30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `co_menus`
--

CREATE TABLE `co_menus` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `co_menu_id` char(36) COLLATE utf8_spanish_ci DEFAULT NULL,
  `icon` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `name` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `posicion` tinyint(4) DEFAULT NULL,
  `destino` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(1) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `co_menus`
--

INSERT INTO `co_menus` (`id`, `co_menu_id`, `icon`, `name`, `posicion`, `destino`, `activo`, `created`, `modified`) VALUES
('0132e280-72bf-46fb-8cd4-d4338a321b41', '87b13e58-ab3e-4a94-bad4-d4402d889f54', NULL, 'Licitaciones', 2, '/cat-licitaciones', 1, '2021-05-06 12:23:42', '2021-05-06 12:23:42'),
('87b13e58-ab3e-4a94-bad4-d4402d889f54', NULL, NULL, 'Inicio', 1, '/', 1, '2021-05-06 12:19:02', '2021-05-06 12:19:02'),
('9920deb4-a6fe-4a3a-a900-6e4bbcb66c27', '87b13e58-ab3e-4a94-bad4-d4402d889f54', NULL, 'Dashboard', 1, '/tablero', 1, '2021-05-06 12:23:42', '2021-05-06 12:23:42'),
('fa0a22d1-f5d7-4329-9cae-0635c45f6fcb', NULL, NULL, 'Administrador', 2, '/', 1, '2021-05-06 12:19:02', '2021-05-06 12:19:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `co_permisos`
--

CREATE TABLE `co_permisos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `controller` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `action` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(1) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `co_permisos`
--

INSERT INTO `co_permisos` (`id`, `name`, `descripcion`, `controller`, `action`, `activo`, `created`, `modified`) VALUES
('bf8e1f27-ecb3-478e-bffb-f945e645db30', 'Todos los permisos.', 'Todos los permisos y acciones del sistema.', '*', '*', 1, '2021-05-06 12:08:23', '2021-05-06 12:08:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `co_usuarios`
--

CREATE TABLE `co_usuarios` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `co_grupo_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(120) COLLATE utf8_spanish_ci DEFAULT NULL,
  `paterno` varchar(120) COLLATE utf8_spanish_ci DEFAULT NULL,
  `materno` varchar(120) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(1) DEFAULT 1,
  `login` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ultimo_acceso` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `co_usuarios`
--

INSERT INTO `co_usuarios` (`id`, `co_grupo_id`, `nombre`, `paterno`, `materno`, `activo`, `login`, `password`, `ultimo_acceso`, `created`, `modified`) VALUES
('d966f785-00de-4df2-8575-ddb562d8db34', 'e6344dd3-2531-4f04-ac26-8ce3fe3d5dc9', 'Saul', 'Sandoval', 'May', 1, 'admin', '$2y$10$ybg1y9w.hiAYkfxD13AGIOAmyYyX1YvUmMKtXviHvScldoLz/hO7u', NULL, '2021-05-07 15:15:16', '2021-05-07 15:16:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_estados`
--
ALTER TABLE `cat_estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cat_licitaciones`
--
ALTER TABLE `cat_licitaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_municipio_id` (`cat_municipio_id`);

--
-- Indices de la tabla `cat_municipios`
--
ALTER TABLE `cat_municipios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_estado_id` (`cat_estado_id`);

--
-- Indices de la tabla `co_grupos`
--
ALTER TABLE `co_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `co_grupos_co_menus`
--
ALTER TABLE `co_grupos_co_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_grupos_id` (`co_grupo_id`),
  ADD KEY `co_menus_id` (`co_menu_id`);

--
-- Indices de la tabla `co_grupos_co_permisos`
--
ALTER TABLE `co_grupos_co_permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_grupos_id` (`co_grupo_id`),
  ADD KEY `co_permisos_id` (`co_permiso_id`);

--
-- Indices de la tabla `co_menus`
--
ALTER TABLE `co_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_menu_id` (`co_menu_id`);

--
-- Indices de la tabla `co_permisos`
--
ALTER TABLE `co_permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `co_usuarios`
--
ALTER TABLE `co_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_grupo_id` (`co_grupo_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cat_licitaciones`
--
ALTER TABLE `cat_licitaciones`
  ADD CONSTRAINT `cat_licitaciones_ibfk_1` FOREIGN KEY (`cat_municipio_id`) REFERENCES `cat_municipios` (`id`);

--
-- Filtros para la tabla `cat_municipios`
--
ALTER TABLE `cat_municipios`
  ADD CONSTRAINT `cat_municipios_ibfk_1` FOREIGN KEY (`cat_estado_id`) REFERENCES `cat_estados` (`id`);

--
-- Filtros para la tabla `co_grupos_co_menus`
--
ALTER TABLE `co_grupos_co_menus`
  ADD CONSTRAINT `co_grupos_co_menus_ibfk_1` FOREIGN KEY (`co_menu_id`) REFERENCES `co_menus` (`id`),
  ADD CONSTRAINT `co_grupos_co_menus_ibfk_2` FOREIGN KEY (`co_grupo_id`) REFERENCES `co_grupos` (`id`);

--
-- Filtros para la tabla `co_grupos_co_permisos`
--
ALTER TABLE `co_grupos_co_permisos`
  ADD CONSTRAINT `co_grupos_co_permisos_ibfk_1` FOREIGN KEY (`co_permiso_id`) REFERENCES `co_permisos` (`id`),
  ADD CONSTRAINT `co_grupos_co_permisos_ibfk_2` FOREIGN KEY (`co_grupo_id`) REFERENCES `co_grupos` (`id`);

--
-- Filtros para la tabla `co_menus`
--
ALTER TABLE `co_menus`
  ADD CONSTRAINT `co_menus_ibfk_1` FOREIGN KEY (`co_menu_id`) REFERENCES `co_menus` (`id`);

--
-- Filtros para la tabla `co_usuarios`
--
ALTER TABLE `co_usuarios`
  ADD CONSTRAINT `co_usuarios_ibfk_1` FOREIGN KEY (`co_grupo_id`) REFERENCES `co_grupos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
