-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2019 a las 18:26:37
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `actas2.1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actas`
--

CREATE TABLE `actas` (
  `ID` int(11) NOT NULL,
  `USUARIO_ID` int(11) NOT NULL,
  `DE` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `ASUNTO` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `CREADO_POR` int(11) NOT NULL,
  `FECHA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `actas`:
--   `CREADO_POR`
--       `log2` -> `ID`
--   `USUARIO_ID`
--       `usuarios` -> `CEDULA`
--

--
-- Volcado de datos para la tabla `actas`
--

INSERT INTO `actas` (`ID`, `USUARIO_ID`, `DE`, `ASUNTO`, `CREADO_POR`, `FECHA`) VALUES
(1, 0, 'TECNOLOGIAS DE LA INFORMACION', 'ACEPTACION DE ENTREGA DE EQUIPO', 1, '0000-00-00 00:00:00'),
(2, 0, 'TECNOLOGIAS DE LA INFORMACION', 'g', 1, '0000-00-00 00:00:00'),
(3, 94070494, 'TECNOLOGIAS DE LA INFORMACION', 'ACEPTACION DE ENTREGA DE EQUIPO', 1, '0000-00-00 00:00:00'),
(4, 94070494, 'TECNOLOGIAS DE LA INFORMACION', 'ACEPTACION DE ENTREGA DE EQUIPO', 1, '0000-00-00 00:00:00'),
(5, 1234532323, 'TECNOLOGIA DE LA INFORMACION', 'ENTREGA DE PORTATIL NUEVO', 2, '2019-01-08 14:38:34'),
(6, 114490242, 'TECNOLOGIA DE LA INFORMACION', 'ENTREGA DE EQUIPO PARA KIOSCO ECOMMERCE SANTA ELENA', 2, '2019-01-24 16:03:32'),
(7, 16791356, 'TECNOLOGIA DE LA INFORMACION', 'Salida de PortÃ¡til', 2, '2019-03-07 14:49:35'),
(8, 16791356, 'TECNOLOGIA DE LA INFORMACION', 'Retirar portatil de la empresa  ', 2, '2019-03-07 15:33:12'),
(9, 0, 'TECNOLOGIA DE LA INFORMACION', 'Retirar portatil de la empresa  ', 2, '2019-03-07 15:35:38'),
(10, 94528398, 'TECNOLOGIA DE LA INFORMACION', 'Retirar portatil de la empresa  ', 2, '2019-03-07 15:36:21'),
(11, 94528398, 'TECNOLOGIA DE LA INFORMACION', 'Retirar portatil de la empresa  ', 2, '2019-03-07 15:38:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celulares`
--

CREATE TABLE `celulares` (
  `IMEI` int(11) NOT NULL,
  `ACCESORIOS` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `#CELULAR` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `PERSONA_ID` int(11) NOT NULL,
  `MODELO__CEL_ID` int(11) NOT NULL,
  `ACTA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `celulares`:
--   `MODELO__CEL_ID`
--       `modelos_cel` -> `ID`
--   `ACTA_ID`
--       `actas` -> `ID`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadores`
--

CREATE TABLE `computadores` (
  `SERIAL` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ACTIVO_FIJO` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `PROCESADOR` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `MEMORIA_RAM` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `SERIAL_CARGADOR` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `MARCA_ID` int(8) NOT NULL,
  `ACTA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `computadores`:
--   `MARCA_ID`
--       `marcas_pc` -> `ID`
--   `ACTA_ID`
--       `actas` -> `ID`
--

--
-- Volcado de datos para la tabla `computadores`
--

INSERT INTO `computadores` (`SERIAL`, `ACTIVO_FIJO`, `PROCESADOR`, `MEMORIA_RAM`, `SERIAL_CARGADOR`, `MARCA_ID`, `ACTA_ID`) VALUES
('6B095022Q', 'N/A', 'CORE I3', '5GB', '11S36200398ZZ00033SBJP', 1, 1),
('E480', 'PF-18B7QU', 'CORE I5', '8 GB', 'SG867039D', 2, 7),
('PC011HSL72', 'LC0517', 'CELERON', '4', 'NO APLICA', 3, 6),
('PF-15JELY', 'SN', 'I7', '8 GB', 'SA10M13947', 2, 5),
('PF-183ZMX', 'EJP02', 'CORE I5', '4GB', '8SA10E75840D1SG86703XB', 2, 4),
('PF-18B7QU', 'E480', 'CORE I5', '8 GB', 'SG867039D', 2, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `departamentos`:
--

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`ID`, `NOMBRE`) VALUES
(1, 'TECNOLOGIA DE LA INFORMACION'),
(2, 'COORDINADOR DE VENTAS'),
(3, 'ADMINISTRADORES'),
(4, 'E-COMERCE'),
(5, 'CAJEROS(A)'),
(6, 'BRILLA'),
(7, 'CREDITOS'),
(8, 'CARTERA'),
(9, 'CALL CENTER'),
(10, 'B2B'),
(11, 'RECEPCION'),
(12, 'GESTION HUMANA'),
(13, 'MAYOREO'),
(14, 'ARCHIVO'),
(15, 'CONTABILIDAD'),
(16, 'AUDITORIA'),
(17, 'TESORERIA'),
(18, 'COMERCIAL'),
(19, 'SECRETARIA DE GERENCIA'),
(20, 'GERENCIA GENERAL '),
(21, 'GERENCIA FINANCIERA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discos_duros`
--

CREATE TABLE `discos_duros` (
  `ID` int(11) NOT NULL,
  `SERIAL` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `MODELO_DISC_DUR` int(11) NOT NULL,
  `ACTA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `discos_duros`:
--   `MODELO_DISC_DUR`
--       `modelos_disc_duro` -> `ID`
--   `ACTA_ID`
--       `actas` -> `ID`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log2`
--

CREATE TABLE `log2` (
  `ID` int(11) NOT NULL,
  `USUARIO` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CONTRASENA` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ROL_ID` int(11) DEFAULT NULL,
  `DEPARTAMENTO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `log2`:
--   `ROL_ID`
--       `roles` -> `ID`
--   `DEPARTAMENTO_ID`
--       `departamentos` -> `ID`
--

--
-- Volcado de datos para la tabla `log2`
--

INSERT INTO `log2` (`ID`, `USUARIO`, `NOMBRE`, `CONTRASENA`, `ROL_ID`, `DEPARTAMENTO_ID`) VALUES
(1, 'a.grijalba', 'JEINER ANDREY GRIJALBA', '123456', 1, 1),
(2, 'clopez', 'CRISTIAN LOPEZ CASTILLO', '123456', 1, 1),
(3, 'agomez', 'ANDREY GOMEZ CARDONA', '123456', 1, 1),
(4, 'hquintero', 'HARRY QUINTERO RESTREPO', '123456', 1, 1),
(5, 'ccalderon', 'CESAR CALDERON', '123456', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas_pc`
--

CREATE TABLE `marcas_pc` (
  `ID` int(11) NOT NULL,
  `MARCA` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `marcas_pc`:
--

--
-- Volcado de datos para la tabla `marcas_pc`
--

INSERT INTO `marcas_pc` (`ID`, `MARCA`) VALUES
(1, 'TOSHIBA'),
(2, 'LENOVO'),
(3, 'CLON');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos_cel`
--

CREATE TABLE `modelos_cel` (
  `ID` int(11) NOT NULL,
  `MARCA` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `MODELO` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `modelos_cel`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos_disc_duro`
--

CREATE TABLE `modelos_disc_duro` (
  `ID` int(11) NOT NULL,
  `MARCA` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `MDOELO` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `modelos_disc_duro`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos_pant`
--

CREATE TABLE `modelos_pant` (
  `ID` int(11) NOT NULL,
  `MARCA` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `MODELO` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `modelos_pant`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pantallas`
--

CREATE TABLE `pantallas` (
  `ID` int(11) NOT NULL,
  `SERIAL` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MODELO_PANT` int(11) NOT NULL,
  `ACTA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `pantallas`:
--   `MODELO_PANT`
--       `modelos_pant` -> `ID`
--   `ACTA_ID`
--       `actas` -> `ID`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID` int(10) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `roles`:
--

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID`, `NOMBRE`) VALUES
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `ID` int(11) NOT NULL,
  `NUMERO` varchar(10) NOT NULL,
  `STATUS` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `ticket`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `CEDULA` int(11) NOT NULL,
  `NOMBRES` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDOS` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `DEPARTAMENTO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `usuarios`:
--   `DEPARTAMENTO_ID`
--       `departamentos` -> `ID`
--

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`CEDULA`, `NOMBRES`, `APELLIDOS`, `DEPARTAMENTO_ID`) VALUES
(0, 'ANA LORENA ', 'AGUIRRE ARIAS ', 3),
(16791356, 'Julio Cesar', 'Cardenas', 13),
(94070494, 'FABIAN ALEJANDRO', 'GARCIA HERRERA', 4),
(94528398, 'JULIO CESAR', 'CARDENAS', 13),
(114490242, 'JUAN SEBASTIAN', 'CASTILLO SOLANO', 18),
(1144090242, 'JUAN SEBASTIAN', 'CASTILLO SOLANO', 18),
(1234532323, 'Jorge Alberto', 'Cardona', 21);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actas`
--
ALTER TABLE `actas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USUARIO_ID` (`USUARIO_ID`),
  ADD KEY `CREADO_POR` (`CREADO_POR`);

--
-- Indices de la tabla `celulares`
--
ALTER TABLE `celulares`
  ADD KEY `PERSONA_ID` (`PERSONA_ID`),
  ADD KEY `MODELO__CEL_ID` (`MODELO__CEL_ID`),
  ADD KEY `ACTA_ID` (`ACTA_ID`);

--
-- Indices de la tabla `computadores`
--
ALTER TABLE `computadores`
  ADD PRIMARY KEY (`SERIAL`),
  ADD KEY `MODELO_ID` (`MARCA_ID`),
  ADD KEY `ACTA_ID` (`ACTA_ID`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `discos_duros`
--
ALTER TABLE `discos_duros`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MODELO_DISC_DUR` (`MODELO_DISC_DUR`),
  ADD KEY `ACTA_ID` (`ACTA_ID`);

--
-- Indices de la tabla `log2`
--
ALTER TABLE `log2`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ROL_ID` (`ROL_ID`),
  ADD KEY `DEPARTAMENTO_ID` (`DEPARTAMENTO_ID`);

--
-- Indices de la tabla `marcas_pc`
--
ALTER TABLE `marcas_pc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `modelos_cel`
--
ALTER TABLE `modelos_cel`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `modelos_disc_duro`
--
ALTER TABLE `modelos_disc_duro`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `modelos_pant`
--
ALTER TABLE `modelos_pant`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pantallas`
--
ALTER TABLE `pantallas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MODELO_PANT` (`MODELO_PANT`),
  ADD KEY `ACTA_ID` (`ACTA_ID`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`CEDULA`),
  ADD KEY `DEPARTAMENTO_ID` (`DEPARTAMENTO_ID`),
  ADD KEY `DEPARTAMENTO_ID_2` (`DEPARTAMENTO_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actas`
--
ALTER TABLE `actas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `discos_duros`
--
ALTER TABLE `discos_duros`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `log2`
--
ALTER TABLE `log2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `marcas_pc`
--
ALTER TABLE `marcas_pc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `modelos_cel`
--
ALTER TABLE `modelos_cel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modelos_disc_duro`
--
ALTER TABLE `modelos_disc_duro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modelos_pant`
--
ALTER TABLE `modelos_pant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pantallas`
--
ALTER TABLE `pantallas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actas`
--
ALTER TABLE `actas`
  ADD CONSTRAINT `actas_ibfk_1` FOREIGN KEY (`CREADO_POR`) REFERENCES `log2` (`ID`),
  ADD CONSTRAINT `actas_ibfk_2` FOREIGN KEY (`USUARIO_ID`) REFERENCES `usuarios` (`CEDULA`);

--
-- Filtros para la tabla `celulares`
--
ALTER TABLE `celulares`
  ADD CONSTRAINT `celulares_ibfk_1` FOREIGN KEY (`MODELO__CEL_ID`) REFERENCES `modelos_cel` (`ID`),
  ADD CONSTRAINT `celulares_ibfk_2` FOREIGN KEY (`ACTA_ID`) REFERENCES `actas` (`ID`);

--
-- Filtros para la tabla `computadores`
--
ALTER TABLE `computadores`
  ADD CONSTRAINT `computadores_ibfk_1` FOREIGN KEY (`MARCA_ID`) REFERENCES `marcas_pc` (`ID`),
  ADD CONSTRAINT `computadores_ibfk_2` FOREIGN KEY (`ACTA_ID`) REFERENCES `actas` (`ID`);

--
-- Filtros para la tabla `discos_duros`
--
ALTER TABLE `discos_duros`
  ADD CONSTRAINT `discos_duros_ibfk_1` FOREIGN KEY (`MODELO_DISC_DUR`) REFERENCES `modelos_disc_duro` (`ID`),
  ADD CONSTRAINT `discos_duros_ibfk_2` FOREIGN KEY (`ACTA_ID`) REFERENCES `actas` (`ID`);

--
-- Filtros para la tabla `log2`
--
ALTER TABLE `log2`
  ADD CONSTRAINT `log2_ibfk_1` FOREIGN KEY (`ROL_ID`) REFERENCES `roles` (`ID`),
  ADD CONSTRAINT `log2_ibfk_2` FOREIGN KEY (`DEPARTAMENTO_ID`) REFERENCES `departamentos` (`ID`);

--
-- Filtros para la tabla `pantallas`
--
ALTER TABLE `pantallas`
  ADD CONSTRAINT `pantallas_ibfk_1` FOREIGN KEY (`MODELO_PANT`) REFERENCES `modelos_pant` (`ID`),
  ADD CONSTRAINT `pantallas_ibfk_2` FOREIGN KEY (`ACTA_ID`) REFERENCES `actas` (`ID`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`DEPARTAMENTO_ID`) REFERENCES `departamentos` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
