-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2023 a las 05:54:30
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo_cosmeticos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_compras`
--

CREATE TABLE `carrito_compras` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_cosmeticos`
--

CREATE TABLE `productos_cosmeticos` (
  `producto_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha_lanzamiento` date DEFAULT NULL,
  `disponible` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos_cosmeticos`
--

INSERT INTO `productos_cosmeticos` (`producto_id`, `nombre`, `marca`, `categoria`, `precio`, `descripcion`, `fecha_lanzamiento`, `disponible`) VALUES
(1, 'Base de Maquillaje', 'Maybelline', 'Maquillaje', 15.99, 'Base de maquillaje de larga duración', '2023-01-15', 1),
(2, 'Crema Hidratante', 'Neutrogena', 'Cuidado de la piel', 9.99, 'Crema hidratante para pieles secas', '2022-11-20', 1),
(3, 'Labial de Color', 'Revlon', 'Maquillaje', 8.49, 'Labial de larga duración en varios colores', '2023-10-02', 1),
(4, 'Loción Facial', 'Olay', 'Cuidados de la piel', 12.95, 'Loción hidratante para el rostro', '2022-10-05', 1),
(5, 'Sombra de ojos', 'MAC', 'Maquillaje', 11.99, 'Paleta de sombras de ojos en tonos naturales', '2023-03-08', 1),
(6, 'Gel de Ducha', 'Dove', 'Cuidado corporal', 5.49, 'Gel de ducha hidratante con aroma a rosas', '2022-09-15', 1),
(7, 'Esmalte de uñas', 'Essie', 'Maquillaje', 6.99, 'Esmalte de uñas de larga duración en colores vibrantes', '2023-04-02', 1),
(8, 'Máscara de pestañas', 'L´Oréal', 'Maquillaje', 7.49, 'Máscara de pestañas resistente al agua', '2023-03-20', 1),
(9, 'Crema antiarrugas', 'La Roche-Posay', 'Cuidados de la piel', 19.99, 'Crema antiarrugas con ácido hialurónico', '2022-12-10', 1),
(10, 'Perfume floral', 'Chanel', 'Fragancias', 69.99, 'Fragancia Floral con notas de jazmín y rosas', '2023-05-01', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito_compras`
--
ALTER TABLE `carrito_compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_cosmeticos`
--
ALTER TABLE `productos_cosmeticos`
  ADD PRIMARY KEY (`producto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito_compras`
--
ALTER TABLE `carrito_compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos_cosmeticos`
--
ALTER TABLE `productos_cosmeticos`
  MODIFY `producto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
