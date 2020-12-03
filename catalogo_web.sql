-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2020 a las 04:54:58
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(8) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL,
  `id_subcateroria` int(8) DEFAULT NULL,
  `nombre_subcategoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(8) NOT NULL,
  `fecha_comentario` date DEFAULT NULL,
  `comentario_comentario` varchar(200) DEFAULT NULL,
  `activo_comentario` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(8) NOT NULL,
  `nombre_marca` varchar(50) DEFAULT NULL,
  `activo_marca` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(2) NOT NULL,
  `nombre_permiso` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `nombre_permiso`) VALUES
(1, 'Admin'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(8) NOT NULL,
  `nombre_producto` varchar(50) DEFAULT NULL,
  `descripcion_producto` varchar(100) DEFAULT NULL,
  `marca_producto` int(8) DEFAULT NULL,
  `modelo_producto` varchar(50) DEFAULT NULL,
  `foto_producto` varchar(200) DEFAULT NULL,
  `ranqueo_producto` int(1) DEFAULT NULL,
  `usuario_producto` int(8) DEFAULT NULL,
  `categoria_producto` int(1) DEFAULT NULL,
  `comentario_producto` int(8) DEFAULT NULL,
  `destacado_producto` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(8) NOT NULL,
  `nickname_usuario` varchar(50) DEFAULT NULL,
  `nombre_usuario` varchar(30) DEFAULT NULL,
  `apellido_usuario` varchar(50) DEFAULT NULL,
  `dni_usuario` varchar(20) DEFAULT NULL,
  `domicilio_usuario` varchar(50) DEFAULT NULL,
  `email_usuario` varchar(50) DEFAULT NULL,
  `contraseña_usuario` varchar(15) DEFAULT NULL,
  `permiso_usuario` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nickname_usuario`, `nombre_usuario`, `apellido_usuario`, `dni_usuario`, `domicilio_usuario`, `email_usuario`, `contraseña_usuario`, `permiso_usuario`) VALUES
(1, 'juan01', 'juan man', 'sarasa', '33123456', 'juan de los palotes 5534 dpto 1', 'jojo@hotmail.com', 'sasa', 2),
(2, 'juancito08', 'jorgito', 'sarasa', '43456789', 'en san palotes 5422', 'jorgito@hotmail.com', 'sasa', 2),
(3, 'juaquito111', 'joaco', 'sarasa', '54225968', 'en el traste del mundo 456', 'joako@gmail.com', 'sasa', 2),
(23, 'Leon777', 'Leonardo', 'Mark', '123456789', 'de por ahi 5432', 'leon@hotmail.com', 'garfio1234', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `IXFK_Categoria_Subcategoria` (`id_subcateroria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `IXFK_Categoria_Producto` (`categoria_producto`),
  ADD KEY `IXFK_Marca_Producto` (`marca_producto`),
  ADD KEY `IXFK_Comentario_Producto` (`comentario_producto`),
  ADD KEY `IXFK_Usuario_Producto` (`usuario_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `IXFK_Permiso_Usuario` (`permiso_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_subcateroria`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_producto`) REFERENCES `categorias` (`id_categoria`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`marca_producto`) REFERENCES `marcas` (`id_marca`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`comentario_producto`) REFERENCES `comentarios` (`id_comentario`),
  ADD CONSTRAINT `productos_ibfk_4` FOREIGN KEY (`usuario_producto`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`permiso_usuario`) REFERENCES `permisos` (`id_permiso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
