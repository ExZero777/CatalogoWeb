-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2020 a las 05:32:22
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
  `nombre_categoria` varchar(50) DEFAULT NULL,
  `activo_categoria` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `activo_categoria`) VALUES
(1, 'Alfajores', 1),
(2, 'Muffins', 1),
(3, 'juaz', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(8) NOT NULL,
  `producto_comentario` int(8) DEFAULT NULL,
  `fecha_comentario` date DEFAULT NULL,
  `comentario_comentario` varchar(200) DEFAULT NULL,
  `ranqueo_comentario` int(1) DEFAULT NULL,
  `activo_comentario` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `producto_comentario`, `fecha_comentario`, `comentario_comentario`, `ranqueo_comentario`, `activo_comentario`) VALUES
(1, 1, '2020-12-02', 'el mejor alfajor', NULL, 1),
(11, 4, '2020-12-08', 'grgwg', 1, 1),
(34, 4, '2020-12-08', 'afgva', 4, 1),
(35, 4, '2020-12-08', 'juacitouu', 2, 1),
(40, 1, '2020-12-08', 'esta bueno', 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(8) NOT NULL,
  `nombre_marca` varchar(50) DEFAULT NULL,
  `activo_marca` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre_marca`, `activo_marca`) VALUES
(1, 'arcor', 1),
(2, 'jojo', 1),
(7, 'solo', 0),
(13, 'Nestle', 1),
(14, 'adidas', 1);

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
(2, 'Usuario'),
(5, 'prueba');

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
  `foto_producto` varchar(100) DEFAULT NULL,
  `ranqueo_producto` int(1) DEFAULT NULL,
  `usuario_producto` int(8) DEFAULT NULL,
  `categoria_producto` int(1) DEFAULT NULL,
  `subcategoria_producto` int(1) DEFAULT NULL,
  `destacado_producto` int(1) DEFAULT NULL,
  `activo_producto` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `descripcion_producto`, `marca_producto`, `modelo_producto`, `foto_producto`, `ranqueo_producto`, `usuario_producto`, `categoria_producto`, `subcategoria_producto`, `destacado_producto`, `activo_producto`) VALUES
(1, 'jorgitou', 'alto alfajor', 1, 'chocolate', '../CatalogoWeb/img/marcas.jpg', 1, 1, 1, 3, 1, 1),
(2, 'mach3', 'hojojo', 1, 'chocolate', '../CatalogoWeb/img/gmb.jpg', 5, 23, 2, 5, 1, 1),
(3, 'march1', 'jejej', 1, 'chocolate', '../CatalogoWeb/img/ingreso.jpg', 5, 23, 2, 4, 1, 1),
(4, 'alfajor', 'riquisimo', 1, 'jorgelin', '../CatalogoWeb/img/productos.jpg', 1, 1, 1, 3, 1, 1),
(9, 'jaja', 'ajaja', 1, 'jorgito', '../CatalogoWeb/img/nuevou.jpg', 1, 1, 1, 3, 1, 1),
(10, 'jajadf', 'ajajasdgg', 13, 'jorgito', '../CatalogoWeb/img/listados.jpg', 3, 23, 2, 5, 1, 1),
(11, 'juazz', 'ajajasdgg', 1, 'jorgito', '../CatalogoWeb/img/erd.jpg', 1, 1, 1, 3, 1, 1),
(37, 'jajadf', 'ajaja', 13, 'jorgito', '../img/subs/erd.jpg', 5, 24, 3, 5, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `id_subcategoria` int(8) NOT NULL,
  `nombre_subcategoria` varchar(50) DEFAULT NULL,
  `categoria_subcategoria` int(1) DEFAULT NULL,
  `activo_subcategoria` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`id_subcategoria`, `nombre_subcategoria`, `categoria_subcategoria`, `activo_subcategoria`) VALUES
(3, 'chocolate', 1, 1),
(4, 'vainilla', 2, 1),
(5, 'azucar', 1, 1);

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
(1, 'juan01', 'juan man', 'sarasa', '33123456', 'juan de los palotes 5534 dpto 1', 'jojo@hotmail.com', 'sasa', 1),
(2, 'juancito08', 'jorgito', 'sarasa', '43456789', 'en san palotes 5422', 'jorgito@hotmail.com', 'sasa', 2),
(3, 'juaquito111', 'joaco', 'sarasa', '54225968', 'en el traste del mundo 456', 'joako@gmail.com', 'sasa', 2),
(23, 'Leon777', 'Leonardo', 'Mark', '123456789', 'de por ahi 5432', 'leon@hotmail.com', 'garfio1234', 1),
(24, 'juan0132', 'denise', 'Mark', '54312367', 'juan de los palotes 5534 dpto 1', 'juaz@gmail.com', 'sasa', 2),
(25, 'juan01', 'juan man', 'sarasa', '33123456', 'juan de los palotes 5534 dpto 1', 'jojo@hotmail.com', 'sasa', 2),
(28, 'juampa33', 'juaz', 'Mark', '54312367', 'del camino 5432', 'leo1n@hotmail.com', 'sasa', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `IXFK_Producto_Comentario` (`producto_comentario`);

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
  ADD KEY `IXFK_Marca_Producto` (`marca_producto`),
  ADD KEY `IXFK_Usuario_Producto` (`usuario_producto`),
  ADD KEY `IXFK_Categoria_Producto` (`categoria_producto`),
  ADD KEY `IXFK_Subcategoria_Producto` (`subcategoria_producto`) USING BTREE;

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`id_subcategoria`),
  ADD KEY `IXFK_Categoria_Subcategoria` (`categoria_subcategoria`);

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
  MODIFY `id_categoria` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `id_subcategoria` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`producto_comentario`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`marca_producto`) REFERENCES `marcas` (`id_marca`),
  ADD CONSTRAINT `productos_ibfk_4` FOREIGN KEY (`usuario_producto`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `productos_ibfk_5` FOREIGN KEY (`categoria_producto`) REFERENCES `categorias` (`id_categoria`),
  ADD CONSTRAINT `productos_ibfk_6` FOREIGN KEY (`subcategoria_producto`) REFERENCES `subcategorias` (`id_subcategoria`);

--
-- Filtros para la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `subcategorias_ibfk_1` FOREIGN KEY (`categoria_subcategoria`) REFERENCES `categorias` (`id_categoria`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`permiso_usuario`) REFERENCES `permisos` (`id_permiso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
