-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-11-2024 a las 21:23:47
-- Versión del servidor: 8.0.36
-- Versión de PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iniciosesion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `compras` (
  `compra_id` int NOT NULL AUTO_INCREMENT,
  `fecha_compra` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `metodo_pago` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `info_com` varchar(50) NOT NULL,
  PRIMARY KEY (`compra_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`compra_id`, `fecha_compra`, `total`, `metodo_pago`, `estado`, `info_com`) VALUES
(1, '2024-11-01', '250.00', 'tarjeta', 'pendiente', 'descuento aplicado'),
(2, '2024-11-02', '150.50', 'efectivo', 'completado', 'sin observaciones'),
(3, '2024-11-03', '320.75', 'tarjeta', 'pendiente', 'envío urgente'),
(4, '2024-11-04', '100.00', 'transferencia', 'completado', 'descuento aplicado'),
(5, '2024-11-05', '560.00', 'tarjeta', 'pendiente', 'producto defectuoso'),
(6, '2024-11-06', '450.30', 'efectivo', 'completado', 'sin observaciones'),
(7, '2024-11-07', '130.99', 'tarjeta', 'pendiente', 'envío regular'),
(8, '2024-11-08', '200.00', 'transferencia', 'completado', 'descuento aplicado'),
(9, '2024-11-09', '750.25', 'tarjeta', 'pendiente', 'producto exclusivo'),
(10, '2024-11-10', '300.50', 'efectivo', 'completado', 'sin observaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallos3`
--

DROP TABLE IF EXISTS `gallos3`;
CREATE TABLE IF NOT EXISTS `gallos3` (
  `id_gallo` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `observaciones` varchar(50) NOT NULL,
  PRIMARY KEY (`id_gallo`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `gallos3`
--

INSERT INTO `gallos3` (`id_gallo`, `nombre`, `raza`, `observaciones`) VALUES
(12, 'Luchador', 'Cornish', 'Gran resistencia'),
(13, 'El Rápido', 'Australorp', 'Velocidad impresionante'),
(14, 'Fénix', 'Orpington', 'De gran tamaño'),
(15, 'Pepe', 'Rhode Island Red', 'Vocal y territorial'),
(16, 'Tormenta', ' Sussex', 'Buen temperamento'),
(18, 'Chiquitín', 'Wyandotte', 'Pequeño pero valiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `Empresa` varchar(50) NOT NULL,
  `Llegada` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `Empresa`, `Llegada`) VALUES
(1, 'Juan Martínez', 'Distribuciones JM', '2024-11-01'),
(2, 'María López', 'Proveedor Global', '2024-11-03'),
(3, 'Carlos Sánchez', 'Productos X', '2024-11-05'),
(4, 'Lucía García', 'Soluciones S.A.', '2024-11-07'),
(5, 'Pedro Hernández', 'Importadora ABC', '2024-11-10'),
(6, 'Ana Rodríguez', 'Comercial R.L.', '2024-11-12'),
(7, 'José González', 'Mercado Directo', '2024-11-15'),
(8, 'Sofía Pérez', 'Distribuciones Díaz', '2024-11-17'),
(9, 'Miguel Torres', 'Proveedora del Norte', '2024-11-20'),
(10, 'Laura Díaz', 'Productos Premium', '2024-11-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `usu_email` varchar(64) DEFAULT NULL,
  `usu_password` varchar(128) DEFAULT NULL,
  `usu_tipo` varchar(64) DEFAULT NULL,
  `usu_ap_pat` varchar(64) DEFAULT NULL,
  `usu_ap_mat` varchar(64) DEFAULT NULL,
  `usu_nom` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usu_email`, `usu_password`, `usu_tipo`, `usu_ap_pat`, `usu_ap_mat`, `usu_nom`) VALUES
(30, 'mitl@gmail.com', '123', 'gerente', 'NETZAYIN', 'MARTINEZ', 'MITL'),
(19, 'arman9@gmail.com', '123', 'admin', 'GONZALEZ ', 'OLVERA', 'JOSE ARMANDO'),
(20, 'juan.perez@example.com', 'password123', 'admin', 'Pérez', 'González', 'Juan'),
(21, 'maria@gmail.com', '123', 'cliente', 'López', 'Martínez', 'María'),
(22, 'pedro.sanchez@example.com', 'pedro2024', 'cliente', 'Sánchez', 'Fernández', 'Pedro'),
(23, 'laura@gmail.com', '123', 'gerente', 'Martínez', 'García', 'Laura');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
