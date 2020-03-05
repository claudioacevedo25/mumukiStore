-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2020 a las 16:57:07
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mumukistore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descripcion` varchar(1500) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL COMMENT '0 activo / 1 borrado',
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `id_user`, `name`, `price`, `stock`, `description`, `image`, `created_at`, `updated_at`) VALUES
(22, 9, 'Reten', '150', NULL, 'Reten de goma', 'aGpwI72KqByD2Z8QVrptGsq1WYWVVV7dO7rHKrwj.jpeg', '2020-02-19 18:51:03', '2020-02-19 18:52:13'),
(23, 9, 'Reten', '456', 20, 'Reten de pollo', 'lwjs37IGxzetCu2ZpivZ44laqTI3vYIdYYYYTXAI.jpeg', '2020-02-19 19:11:29', '2020-02-19 19:11:29'),
(25, 9, 'Pollo asado2', '4', 2, 'FFFFFFF', 'K1i0K5nFcu8yal6mcWfnXcBWA4A1uuqNIyIWrH9n.jpeg', '2020-02-19 23:46:33', '2020-02-19 23:46:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `email_verified_at`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gerardo', '', 'test@2.com', NULL, '$2y$10$zCg./T9ffwp.MDqCmyCV.e6oC3wWLiACRACN4Va/lvv59KjX38AUW', '', NULL, '2020-02-12 18:59:24', '2020-02-12 18:59:24'),
(2, '123123', '123123', '1231@dasd.com', NULL, '$2y$10$QzUSrV6HI.Vdr3/wVQ4ONO1xH0/7fhUxINpa7M2SiAc4agwl6IGqC', 'C:\\xampp\\tmp\\phpC444.tmp', NULL, '2020-02-13 00:42:16', '2020-02-13 00:42:16'),
(3, 'Gerardo', 'Reinoso', 'asd@asdasd.com', NULL, '$2y$10$66iC3V7uxFzJE/CAMSAni.a0KaJtzFDesjWi6PQVTx8GlkzIiU94.', 'C:\\xampp\\tmp\\php8F5A.tmp', NULL, '2020-02-13 01:06:04', '2020-02-13 01:06:04'),
(4, 'gerer', '3124123', '123123@sda.com', NULL, '$2y$10$YFxgH8cOnyStciiyrAxmjeIpciAV14URaSleGRm7mV0nKYhKElLV2', 'C:\\xampp\\tmp\\php1C51.tmp', NULL, '2020-02-13 01:12:08', '2020-02-13 01:12:08'),
(5, 'Gera', 'test', 'get12@as.com', NULL, '$2y$10$fdrytInq9Fk4R2/oW1oQH.0SsbSLcOZqStTcWDhNsWUufMwfnhFki', 'VDGPXecT68oUO4oJpRN7vhGLwqNzz0IgL7qq8qIV.jpeg', NULL, '2020-02-13 01:15:01', '2020-02-13 01:15:01'),
(6, 'a', '12341', '12312@asd.com', NULL, '$2y$10$UC4mRauaBnPfrTJMQACQ2OXkRbAVUIQRK8JpZvMldpysHfZN2sI1S', 'ZepH3edtHNjVIRvRGwzJA5J4RHdTuh7BbaNsdaBO.png', NULL, '2020-02-13 01:20:18', '2020-02-13 01:20:18'),
(7, 'Gera', 'Reinoso', '123@123.com', NULL, '$2y$10$jS58f0umWiNDFly.2qAa3OfDOA1W1polXBFkhw20uKEKflxWL/rse', '63p4aMiLcyzVIhqBVLmYIR6RVubfLQXa6NwnFine.png', NULL, '2020-02-13 01:40:30', '2020-02-13 01:40:30'),
(9, 'Claudio Maximiliano', 'Acevedo', 'claudioacevedo25@gmail.com', NULL, '$2y$10$WlBxE2JZR7YO4TUf4IoEc.ldeAC/MYAbuYWFycVEGRVDfNavYv8Mu', 'MQztybZhTwkVBLEHAX3buDQEoVIp4ApA0cGxHp4P.jpeg', NULL, '2020-02-16 20:28:36', '2020-02-19 18:30:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(59) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `contraseña` varchar(150) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `avatar` varchar(250) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `email`, `contraseña`, `fechaNacimiento`, `telefono`, `avatar`, `role`) VALUES
(15, 'Gerardo', 'Reinoso', 'darkmafius', 'gera_cordobes@hotmail.com', '$2y$10$mA2T4C4fTaxybFAntK42cOeDJpnoLzD8dqk/T0HXTdg7TuMBtgb3a', '1992-06-16', 2147483647, '5e2a0be5086f9.jpg', 1),
(16, 'gerardo', 'reinoso', 'darkmafius', '2342@asda.com', '$2y$10$59h5GYzT9wW96Ii8sgqPWed.zMOCK3Sr/byMaZ3ISLmUOqnaQsA42', '1992-06-16', 23432423, '5e2a0d5db055c.jpg', 1),
(17, 'gerardo', 'sdad', 'darkmafius', 'ge23@asda.com', '$2y$10$hoalUz1lQDo7jbX18Yo2j.OPZj1InVVfRhpvNl/0/pkWVNjNJjpr6', '1992-06-16', 324234, '5e2a0db0cc33e.jpg', 1),
(18, 'rodrigo', 'rodrigo', 'rodrigo', 'rodrigo@rodrigo.com', '$2y$10$eIzHcCwOwuzUMVtuUqUpA..H79e542SjrZu5XIOS8FYoZ7jYG4FXq', '1992-06-16', 32423423, '5e2a177a0060e.png', 1),
(19, 'gera', 'gera', 'gera', 'easda@asda.com', '$2y$10$BraOD98D9PYFPHpX73WOhOIp14hDEkLAPhTM5f29g1dFR31DjaqMi', '1992-06-16', 235235235, '5e2f495e9a11e.jpg', 1),
(20, 'luis', 'luis', 'luis', '3424234234234@asdasdasdasda.com', '$2y$10$q3T6oiVgiUPV0GCM5MdRne.fH8aVMVBoOEHvrzF87HRm1NTS.OcP6', '1992-06-16', 23423423, '5e2f76945031d.png', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
