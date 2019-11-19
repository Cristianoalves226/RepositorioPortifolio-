-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Nov-2019 às 20:30
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dicionario_libras`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `libras`
--

CREATE TABLE `libras` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `libras`
--

INSERT INTO `libras` (`id`, `titulo`, `descricao`, `video`, `created_at`, `updated_at`) VALUES
(8, 'carro ', 'carro ', 'video/dicionario/video_7494.mp4', '2019-03-11 19:59:52', '2019-04-15 18:17:18'),
(9, 'taxi ', 'taxi', 'video/dicionario/video_3557.mp4', '2019-03-16 17:32:46', '2019-04-15 18:17:09'),
(10, 'oi', 'sinal de oi ', 'video/dicionario/video_8832.mp4', '2019-05-29 20:12:39', '2019-05-29 20:12:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_04_165629_dicionario_table_create', 2),
(4, '2019_03_04_172116_imagens-table_create', 2),
(5, '2019_05_24_012034_create_usuario_table', 3),
(6, '2019_05_27_194833_create_usuarios_table', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(22, 'olamudno', 'olamund@gmail.com', '$2y$10$qozz7ulcaIVOo2LuPqwGFunUXb3CJyBEF8.nT4yZoPQeO7Z7InMPG', 'Wtj7IsqjWchcTev2eXSy8ounuHbpVTzSAeBpmKVjyBVNDPQ8S9MCHQUcfKLi', '2019-05-28 16:44:09', '2019-05-28 19:19:51'),
(25, 'usuario', 'admin@site.com', '$2y$10$1JugQNtKyjka/lY0vdMO8u4eVlDL0vCipz60t1UYPjLz/3Plmj4a.', 'EedLbRJPAQcGu1Wdj1r1cFDOmgAf1ju04ZIaQZslR3BCu96XRq9wVASeafqx', NULL, '2019-05-28 20:40:37'),
(26, 'usuario', 'admin2@site.com', '1111', NULL, NULL, NULL),
(27, 'Cristiano ', 'crisalves@gmail.com', '$2y$10$OTzT3KQgUyzaLgu3.Upfk.HQEPdXVJtqdRp2vN3CY24pEmS7D9uNm', 'IMoLgWKD5zT6TRQAbqllbsTeL7bHr0XVet9tHJdQEO0V7QscH7dCziZ5xRBr', '2019-05-28 21:58:04', '2019-05-28 22:00:57'),
(28, 'cristiano alves ', 'c.alvesdecampos@gmail.com', '$2y$10$xx6WQyns3M2SPRWmfFi6SOLalO4vwZ.rOFBw6ygXvs2B1N1ze8uKC', NULL, '2019-05-28 23:21:27', '2019-05-28 23:21:27'),
(29, 'ccccc', 'ccccc@gmail.com', '$2y$10$4XmNn9vPnOoeZTpQvMnIU./tgdMi4aIej9I5Z3O5APkyKk0wVnCcS', NULL, '2019-07-11 01:54:25', '2019-07-11 01:54:25'),
(31, 'cristiano', 'c.alvesdecampos123e3@', '$2y$10$kCZ6paBqMk4kDpMhdbqFFeYw6hT14w22pHW1yOKbJl8AwS1we4Sda', NULL, '2019-11-07 03:28:49', '2019-11-07 03:28:49'),
(33, 'fulanodetal@gmail.com', 'fulanodetal@gmail.com', '$2y$10$pnZifO93lJuEOHSOjg2NVe5l23XKsI9WcoEYD9Tmad4pQZOlZ48hm', NULL, '2019-11-18 21:44:20', '2019-11-18 21:44:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuarioID` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`UsuarioID`, `Nome`, `Login`, `Senha`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'olamundo', 'olamundo@gmail.com', '123hhhhhhhhhhhhh', NULL, '2019-05-28 00:10:40', '2019-05-28 00:10:40'),
(2, 'jose', 'olamund@gmail.com', '123hhhhhhhhhhhhh', NULL, '2019-05-28 17:58:20', '2019-05-28 17:58:20'),
(3, 'usuario', 'admin@site.com', '$2y$10$GjrzGseYhvFBMs9UWxWze.WzCRx5mbo0qbuuom2QZ7TlgZVR6DZJS', NULL, NULL, NULL),
(5, 'usuario', 'admin2@site.com', '1111', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `libras`
--
ALTER TABLE `libras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuarioID`),
  ADD UNIQUE KEY `usuarios_login_unique` (`Login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `libras`
--
ALTER TABLE `libras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UsuarioID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
