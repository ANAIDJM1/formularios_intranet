-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2021 a las 14:35:49
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fbc_reviewer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personalcampo`
--

CREATE TABLE `personalcampo` (
  `RUC` varchar(11) NOT NULL,
  `DireccionCasa` varchar(250) NOT NULL,
  `NombreBanco` varchar(100) NOT NULL,
  `CtaAhorros` varchar(30) NOT NULL,
  `CtaCorriente` varchar(30) NOT NULL,
  `CCI` varchar(30) NOT NULL,
  `CtaDetra` varchar(30) NOT NULL,
  `CEnombre` varchar(100) NOT NULL,
  `CEcelular` varchar(9) NOT NULL,
  `PoliPago` tinytext NOT NULL,
  `obs` text NOT NULL,
  `mail` varchar(200) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `nomape` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personalcampo`
--

INSERT INTO `personalcampo` (`RUC`, `DireccionCasa`, `NombreBanco`, `CtaAhorros`, `CtaCorriente`, `CCI`, `CtaDetra`, `CEnombre`, `CEcelular`, `PoliPago`, `obs`, `mail`, `celular`, `nomape`) VALUES
('1046969741', 'MI CASA', 'interbank', '23423', '2342', '2342', '234', 'MAMA', '32423424', 'sdf', 'sdfsdf', 'aa@gmial.com', '930225376', 'ANASA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `RUC` varchar(11) NOT NULL,
  `Razon Social` varchar(200) NOT NULL,
  `Nombre Comercial` varchar(200) NOT NULL,
  `Direccion Fiscal` varchar(200) NOT NULL,
  `Direccion_Local` varchar(200) NOT NULL,
  `AC_Nombre` varchar(200) NOT NULL,
  `AC_email` varchar(200) NOT NULL,
  `AC_telefono` varchar(9) NOT NULL,
  `AC_celular` varchar(9) NOT NULL,
  `Nombre Banco` varchar(100) NOT NULL,
  `N° Cuenta de Ahorros` varchar(25) NOT NULL,
  `N° Cuenta Corriente` varchar(25) NOT NULL,
  `N° CCI` varchar(25) NOT NULL,
  `N° Cuenta de Detracciones` varchar(25) NOT NULL,
  `AR_Nombre` varchar(200) NOT NULL,
  `AR_email` varchar(200) NOT NULL,
  `AR_telf` varchar(9) NOT NULL,
  `AR_celular` varchar(9) NOT NULL,
  `AR_e_Nombre` varchar(200) NOT NULL,
  `AR_e_email` varchar(200) NOT NULL,
  `AR_e_telf` varchar(9) NOT NULL,
  `AR_e_celular` varchar(9) NOT NULL,
  `AO_Nombre` varchar(200) NOT NULL,
  `AO_email` varchar(200) NOT NULL,
  `AO_telf` varchar(9) NOT NULL,
  `AO_celular` varchar(9) NOT NULL,
  `AO_e_Nombre` varchar(200) NOT NULL,
  `AO_e_email` varchar(200) NOT NULL,
  `AO_e_telf` varchar(9) NOT NULL,
  `AO_e_celular` varchar(9) NOT NULL,
  `Reservaciones Individuales` tinytext NOT NULL,
  `Reservaciones Grupos` tinytext NOT NULL,
  `Politicas de Niños` tinytext NOT NULL,
  `Politicas Generales` tinytext NOT NULL,
  `ChIn_ChOut_Day_Use` tinytext NOT NULL,
  `Politicas de Liberados` tinytext NOT NULL,
  `Anulaciones_no_Shows` tinytext NOT NULL,
  `Politica de Pagos` tinytext NOT NULL,
  `web` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `usertype_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(120) NOT NULL,
  `user_type` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `usertype_id`, `fname`, `mname`, `lname`, `username`, `password`, `user_type`) VALUES
(1, 1, 'Proveedor', '', '', 'prove', 'prove', 'Proveedor'),
(2, 2, 'Administrador', '', '', 'admin', 'laalpaca', 'Admin'),
(3, 3, 'Personal de campo', '', '', 'guia', 'guia', 'Personal de campo/Guia'),
(4, 3, 'Ratatui', 'El chefsito', 'Chefsito', 'coci', 'coci', 'Personal de campo/Guia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personalcampo`
--
ALTER TABLE `personalcampo`
  ADD PRIMARY KEY (`RUC`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`RUC`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
