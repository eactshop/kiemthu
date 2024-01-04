-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2024 lúc 10:58 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `save`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_14_162510_add_timestamps_to_products', 2),
(6, '2023_10_14_163343_add_updated_at_to_products', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `news_date` varchar(10) NOT NULL,
  `news_title` mediumtext NOT NULL,
  `news_img` varchar(1000) NOT NULL,
  `news_content` mediumtext NOT NULL,
  `updated_at` varchar(1000) NOT NULL,
  `created_at` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `news_date`, `news_title`, `news_img`, `news_content`, `updated_at`, `created_at`) VALUES
(11, '15/10/2023', 'Đây là test', '375758952_1027889698344359_7350756868395310983_n.png', 'ághjgfdsgdshjgfdshjgdsfg', '2023-10-14 17:29:03', '2023-10-14 17:29:03'),
(12, '15/10/2023', 'Đây là test', '375758952_1027889698344359_7350756868395310983_n.png', 'ághjgfdsgdshjgfdshjgdsfg', '2023-10-14 17:32:45', '2023-10-14 17:32:45'),
(13, '15/10/2023', 'Đây là test', '375758952_1027889698344359_7350756868395310983_n.png', 'ághjgfdsgdshjgfdshjgdsfg', '2023-10-14 17:33:32', '2023-10-14 17:33:32'),
(14, '15/1', 'NHỰA DUY TÂN ĐỒNG HÀNH CÙNG SINH VIÊN CAO ĐẲNG KỸ THUẬT CAO THẮNG', 'hoc-bong-nhua-duy-tan---truong-cao-thang-(4).jpg', 'Ngày 06/10/2023, Duy Tân phối hợp với Khoa Cơ Khí của Trường Cao Đẳng Kỹ Thuật Cao Thắng tổ chức hội thảo “Khuôn mẫu trong ngành nhựa”. Chương trình có sự tham gia của đại diện Duy Tân và đông đảo các giảng viên, sinh viên Khoa Cơ Khí.', '2023-10-14 17:34:05', '2023-10-14 17:34:05'),
(15, '15/10/2023', 'NHỰA DUY TÂN ĐỒNG HÀNH CÙNG SINH VIÊN CAO ĐẲNG KỸ THUẬT CAO THẮNG', 'hoc-bong-nhua-duy-tan---truong-cao-thang-(4).jpg', 'Ngày 06/10/2023, Duy Tân phối hợp với Khoa Cơ Khí của Trường Cao Đẳng Kỹ Thuật Cao Thắng tổ chức hội thảo “Khuôn mẫu trong ngành nhựa”. Chương trình có sự tham gia của đại diện Duy Tân và đông đảo các giảng viên, sinh viên Khoa Cơ Khí.', '2023-10-14 17:36:10', '2023-10-14 17:36:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `don_vi` varchar(100) NOT NULL,
  `kich_thuoc` varchar(100) NOT NULL,
  `mau_sac` varchar(100) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `created_at` varchar(1000) NOT NULL,
  `updated_at` varchar(1000) NOT NULL,
  `ghichu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `don_vi`, `kich_thuoc`, `mau_sac`, `img`, `price`, `created_at`, `updated_at`, `ghichu`) VALUES
(15, 'test', 'Sản phẩm công nghệ', 'Cái', '100x100', 'Đỏ', '375650723_866275888174186_2647437610475061189_n.png', '120000', '2023-10-14 16:52:04', '2023-10-14 16:52:04', ''),
(16, 'test', 'Sản phẩm công nghệ', 'Cái', '100x100', 'Đỏ', '373044460_6591555897626288_6721028661047308501_n.jpg', '120.000', '2023-10-14 16:54:39', '2023-10-14 16:54:39', ''),
(17, 'Trần Tuấn Anh', 'Sản phẩm công nghệ', 'Cái', '169cm', '7 màu', '297636607_487509923375743_8499451041866169460_n.jpg', '120000', '2023-10-14 17:03:38', '2023-10-14 17:03:38', ''),
(18, 'Trần Tuấn Anh', 'Sản phẩm công nghệ', 'Cái', '169cm', '7 màu', '297636607_487509923375743_8499451041866169460_n.jpg', '120000', '2023-10-14 17:06:11', '2023-10-14 17:06:11', ''),
(19, 'adfadf', 'dfadfa', 'dfafadf', 'dfafadfadfad', 'adfd', 'product1.jpg', '120.000', '2023-10-14 17:06:24', '2023-10-14 17:06:24', ''),
(20, 'adfadf', 'dfadfa', 'dfafadf', 'dfafadfadfad', 'adfd', 'product1.jpg', '120.000', '2023-10-14 17:07:32', '2023-10-14 17:07:32', ''),
(21, 'test', 'ầdfadf', 'fadfad', 'fdafadfd', 'adfadf', 'product1.jpg', '120000', '2023-10-14 17:07:43', '2023-10-14 17:07:43', ''),
(22, 'test', 'ầdfadf', 'fadfad', 'fdafadfd', 'adfadf', 'product1.jpg', '120000', '2023-10-14 17:08:29', '2023-10-14 17:08:29', ''),
(23, 'test', 'ầdfadf', 'fadfad', 'fdafadfd', 'adfadf', 'product1.jpg', '120000', '2023-10-14 17:08:41', '2023-10-14 17:08:41', ''),
(24, 'test', 'Sản phẩm công nghệ', 'Cái', '100x100', '7 màu', 'product1.jpg', '120000', '2023-10-14 17:09:05', '2023-10-14 17:09:05', ''),
(25, 'test', 'Sản phẩm công nghệ', 'Cái', '100x100', '7 màu', 'product1.jpg', '120000', '2023-10-14 17:09:45', '2023-10-14 17:09:45', ''),
(26, 'test', 'Sản phẩm công nghệ', 'Cái', '100x100', '7 màu', 'product1.jpg', '120000', '2023-10-14 17:10:02', '2023-10-14 17:10:02', ''),
(27, 'test', 'Sản phẩm công nghệ', 'Cái', '100x100', '7 màu', 'product1.jpg', '120000', '2023-10-14 17:10:09', '2023-10-14 17:10:09', ''),
(28, 'test', 'Sản phẩm công nghệ', 'Cái', '100x100', '7 màu', 'product1.jpg', '120000', '2023-10-14 17:12:07', '2023-10-14 17:12:07', ''),
(29, 'test', 'adf', 'adfd', 'adf', 'àd', '297636607_487509923375743_8499451041866169460_n.jpg', '120000', '2023-10-14 17:14:26', '2023-10-14 17:14:26', ''),
(30, 'test', 'adf', 'adfd', 'adf', 'àd', '297636607_487509923375743_8499451041866169460_n.jpg', '120000', '2023-10-14 17:15:17', '2023-10-14 17:15:17', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test`
--

CREATE TABLE `test` (
  `test` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `test`
--

INSERT INTO `test` (`test`, `created_at`, `updated_at`, `id`) VALUES
('dfds', '2024-01-03 06:13:00', '2024-01-03 06:13:00', 2),
('test', '2024-01-03 06:13:13', '2024-01-03 06:13:13', 3),
('Test data', '2024-01-03 06:13:57', '2024-01-03 06:13:57', 4),
('Test data', '2024-01-03 06:14:46', '2024-01-03 06:14:46', 5),
('Test data', '2024-01-03 06:15:02', '2024-01-03 06:15:02', 6),
('Test data', '2024-01-03 14:17:59', '2024-01-03 14:17:59', 7),
('Test data', '2024-01-03 14:18:09', '2024-01-03 14:18:09', 8),
('Test data 1', '2024-01-03 14:20:11', '2024-01-03 14:20:11', 9),
('dfghjk', '2024-01-03 14:33:24', '2024-01-03 14:33:24', 10),
('Test data 1', '2024-01-04 08:40:35', '2024-01-04 08:40:35', 11),
('Test data 1', '2024-01-04 08:42:59', '2024-01-04 08:42:59', 13),
('Test data 1', '2024-01-04 08:44:18', '2024-01-04 08:44:18', 14),
('Test data 1', '2024-01-04 08:44:41', '2024-01-04 08:44:41', 16),
('Valid test data', '2024-01-04 08:44:41', '2024-01-04 08:44:41', 17),
('Test data 1', '2024-01-04 08:45:00', '2024-01-04 08:45:00', 18),
('Valid test data', '2024-01-04 08:45:00', '2024-01-04 08:45:00', 19),
('Test data 1', '2024-01-04 08:45:13', '2024-01-04 08:45:13', 20),
('Valid test data', '2024-01-04 08:45:13', '2024-01-04 08:45:13', 21),
('Test data 1', '2024-01-04 08:50:06', '2024-01-04 08:50:06', 22),
('Ta', '2024-01-04 08:57:29', '2024-01-04 08:57:29', 23),
('Ta', '2024-01-04 08:58:07', '2024-01-04 08:58:07', 24),
('xxx', '2024-01-04 09:00:13', '2024-01-04 09:00:13', 25),
('xxx', '2024-01-04 09:01:39', '2024-01-04 09:01:39', 26),
('aaa', '2024-01-04 09:06:35', '2024-01-04 09:06:35', 28),
('aaa', '2024-01-04 09:07:09', '2024-01-04 09:07:09', 29),
('aaa', '2024-01-04 09:10:00', '2024-01-04 09:10:00', 30),
('aaa', '2024-01-04 09:12:24', '2024-01-04 09:12:24', 31),
('aaa', '2024-01-04 09:12:28', '2024-01-04 09:12:28', 32),
('aaa', '2024-01-04 09:12:41', '2024-01-04 09:12:41', 33),
('Test data 1', '2024-01-04 09:27:25', '2024-01-04 09:27:25', 36),
('Test data 1', '2024-01-04 09:30:31', '2024-01-04 09:30:31', 37),
('Test data 1', '2024-01-04 09:33:22', '2024-01-04 09:33:22', 38),
('Test data 1', '2024-01-04 09:35:06', '2024-01-04 09:35:06', 39),
('Test data 1', '2024-01-04 09:35:50', '2024-01-04 09:35:50', 41),
('Test data 1', '2024-01-04 09:37:34', '2024-01-04 09:37:34', 43),
('Test data 1', '2024-01-04 09:44:23', '2024-01-04 09:44:23', 44),
('Test data 1', '2024-01-04 09:45:12', '2024-01-04 09:45:12', 45),
('Test data 1', '2024-01-04 09:46:11', '2024-01-04 09:46:11', 46),
('Test data 1', '2024-01-04 09:46:36', '2024-01-04 09:46:36', 48),
('Test data 1', '2024-01-04 09:47:34', '2024-01-04 09:47:34', 50),
('Test data 1', '2024-01-04 09:48:31', '2024-01-04 09:48:31', 52);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `pass`) VALUES
('admin', 'admin'),
('admin', '$2y$10$oeNVCk8ZDC/a3goqASyh8uEQ57a.4faJTnjwWsrILd7Q8k9u/k2pm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `test`
--
ALTER TABLE `test`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
