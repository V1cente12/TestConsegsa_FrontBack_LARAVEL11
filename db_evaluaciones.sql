-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-01-2025 a las 20:56:22
-- Versión del servidor: 8.0.40
-- Versión de PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_evaluacion`
--
CREATE DATABASE IF NOT EXISTS `db_evaluacion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_evaluacion`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` bigint NOT NULL AUTO_INCREMENT,
  `codigo_cliente` bigint NOT NULL,
  `razon_social` varchar(200) NOT NULL,
  `fecha_nac` date NOT NULL,
  `nit_ci` varchar(12) NOT NULL,
  `estado` char(1) NOT NULL COMMENT '0=Inactivo,1=activo',
  `fecha_cre` datetime NOT NULL,
  `fecha_mod` datetime NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=18895 DEFAULT CHARSET=utf8mb3 COMMENT='Registro de Clientes del sistema';

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `codigo_cliente`, `razon_social`, `fecha_nac`, `nit_ci`, `estado`, `fecha_cre`, `fecha_mod`) VALUES
(13337, 924850, 'JERONIMO SEOANE', '1965-12-13', '1076719', '1', '2018-03-27 17:34:27', '2024-04-05 16:45:12'),
(14310, 925823, 'TEODORA AGUIRRE', '1990-02-08', '7833117', '1', '2019-04-16 15:31:58', '2022-06-23 15:40:45'),
(16553, 928066, 'MONTSERRAT PAEZ', '1971-04-23', '10156074', '1', '2021-04-13 10:26:29', '2024-05-20 15:25:34'),
(18686, 930199, 'TEODORO CALERO', '1990-08-04', '8159352', '1', '2024-02-28 10:19:26', '0000-00-00 00:00:00'),
(18729, 930242, 'ALBERT REVUELTA', '1973-01-18', '3326935', '1', '2024-03-08 09:31:40', '2024-03-21 16:22:09'),
(18775, 930288, 'NICOLAS RUZ', '1975-12-17', '6817223', '1', '2024-04-12 09:41:13', '0000-00-00 00:00:00'),
(18799, 930312, 'GEMMA ROJAS', '1991-09-17', '8401762', '1', '2024-04-25 13:38:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `memos`
--

DROP TABLE IF EXISTS `memos`;
CREATE TABLE IF NOT EXISTS `memos` (
  `id_memo` int NOT NULL AUTO_INCREMENT,
  `nro_memo` bigint NOT NULL,
  `poliza` varchar(250) NOT NULL,
  `id_cliente` int NOT NULL,
  `prima_total` decimal(10,2) NOT NULL,
  `vigencia_desde` date NOT NULL,
  `vigencia_hasta` date NOT NULL,
  PRIMARY KEY (`id_memo`),
  KEY `INDEX_CLIENTE` (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=915079 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `memos`
--

INSERT INTO `memos` (`id_memo`, `nro_memo`, `poliza`, `id_cliente`, `prima_total`, `vigencia_desde`, `vigencia_hasta`) VALUES
(840831, 871496, '53135252', 16553, 2688.00, '2024-02-10', '2025-02-10'),
(841523, 176887, 'P2000104418', 18686, 472.52, '2024-02-27', '2025-02-27'),
(858866, 888948, 'P1000052403', 18729, 550.01, '2024-02-27', '2025-02-27'),
(859038, 161072, '18312', 13337, 355.00, '2024-03-19', '2025-03-19'),
(878365, 906705, 'AUTI-LPZ0003069', 18775, 831.04, '2024-03-28', '2025-03-28'),
(878706, 177200, 'POL-ONS-SC-500027-2024-00', 14310, 2628.00, '2024-04-20', '2025-04-20'),
(879158, 907119, 'P1000057831', 18799, 1069.08, '2024-04-05', '2025-04-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

DROP TABLE IF EXISTS `pagos`;
CREATE TABLE IF NOT EXISTS `pagos` (
  `id_pago` int NOT NULL AUTO_INCREMENT,
  `id_memo` int NOT NULL,
  `cod_pago` int NOT NULL,
  `fecha_pago` date NOT NULL,
  `monto_us` float(10,2) NOT NULL,
  PRIMARY KEY (`id_pago`)
) ENGINE=MyISAM AUTO_INCREMENT=1182961 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id_pago`, `id_memo`, `cod_pago`, `fecha_pago`, `monto_us`) VALUES
(1120609, 840831, 1082702, '2024-03-14', 2688.00),
(1121475, 841523, 227834, '2024-03-09', 141.72),
(1121542, 858866, 1083120, '2024-03-25', 275.01),
(1142273, 859038, 167260, '2024-04-15', 355.00),
(1142414, 841523, 228506, '2024-04-18', 82.70),
(1142882, 858866, 1101759, '2024-04-25', 275.00),
(1143502, 879158, 1101988, '2024-04-16', 1069.08),
(1160360, 878706, 229235, '2024-05-01', 219.00),
(1161375, 878706, 229650, '2024-05-20', 219.00),
(1161503, 878365, 1118995, '2024-05-27', 251.04),
(1161906, 878365, 1119172, '2024-05-31', 145.00),
(1162095, 841523, 229927, '2024-05-31', 82.70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3uTQDutZ1HQMzFCTyU728OYAE2ppo8rij0VvTh9r', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXB3WU5DZjB5aHp0S2dmN1RjQlVIUDg0Q1l5R1J6eWNVZGhEMWkzbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1737056461),
('oCjqVv6kHRTebwKzAK97rYDROWUzxTQb88KVzN4Q', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTGZSUlBLVkFVZlNoQUxCM25GS0IxeUd4NkNBRGl3eHlMZTdISFBFdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MzcwNTY1NDI7fX0=', 1737060550);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siniestros`
--

DROP TABLE IF EXISTS `siniestros`;
CREATE TABLE IF NOT EXISTS `siniestros` (
  `id_siniestro` int NOT NULL AUTO_INCREMENT,
  `nro_siniestro` bigint NOT NULL COMMENT 'numero de siniestro en el distrito',
  `id_memo` int NOT NULL,
  `fecha_sin` date NOT NULL,
  `descripcion` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id_siniestro`)
) ENGINE=MyISAM AUTO_INCREMENT=5338342 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `siniestros`
--

INSERT INTO `siniestros` (`id_siniestro`, `nro_siniestro`, `id_memo`, `fecha_sin`, `descripcion`) VALUES
(5336412, 242352, 858866, '2024-02-14', 'DAÑOS EN PARTE TRASERA'),
(5337050, 242957, 841523, '2024-04-29', 'DAÑOS EN RETROVISOR CUANDO ES IMPACTADO POR OTRO MOTORIZADO, LLEGANDO A DAÑAR EL RETROVISOR DERECHO Y PUERTA'),
(5337442, 243315, 878706, '2024-05-13', 'INFLUENZA'),
(5337607, 243471, 859038, '2024-05-21', 'CLIZADURA DE PARABRISAS'),
(5337752, 243596, 840831, '2024-05-09', 'COXIGODINIA'),
(5337939, 243771, 878365, '2024-05-30', 'DAÑOS INFERIORES'),
(5338341, 244154, 879158, '2024-06-16', 'COLISIÓN CON PEATÓN POR LA ZONA NORTE, EL CUAL SE ENCONTRABA EN ESTADO DE EBRIEDAD, LUEGO AMBOS FUERON TRASLADADOS A LA CLÍNICA LA BÉLGICA, EL CONDUCTOR Y PEATÓN FUERON CUBIERTOS POR EL SOAT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@admin.com', NULL, '$2y$12$GG6HxA7WLxznDiw1qfWmnepEeLSK7odXd6S37vH1ihtSmhcn.INzG', NULL, '2025-01-16 23:20:17', '2025-01-16 23:20:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
