-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 May 2022, 20:26:58
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bulut`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `donates_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `donates`
--

CREATE TABLE `donates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `donates`
--

INSERT INTO `donates` (`id`, `name`, `price`, `category`, `description`, `gallery`, `created_at`, `updated_at`) VALUES
(3, 'Kışlık Çocuk Ayakkabısı', '200', 'giyim', 'Kışlık çocuk ayakkabısı', 'https://productimages.hepsiburada.net/s/25/600-800/10109930373170.jpg/format:webp', NULL, NULL),
(4, 'Kışlık Çocuk Mont', '150', 'giyim', 'Kışlık çocuk mont', 'https://productimages.hepsiburada.net/s/206/600-800/110000181875025.jpg/format:webp', NULL, NULL),
(5, '1 Aylık Erzak Kolisi', '300', 'yiyecek', '1 Aylık Yardım Kolisi', 'https://productimages.hepsiburada.net/s/202/550/110000175851137.jpg/format:webp', NULL, NULL),
(6, '300 TL Değerinde Fatura Desteği', '300', 'fatura', 'fatura desteği', 'https://productimages.hepsiburada.net/s/179/550/110000143593538.jpg/format:webp', NULL, NULL),
(7, '400 TL Değerinde Fatura Desteği', '400', 'fatura', 'fatura desteği', 'https://productimages.hepsiburada.net/s/179/550/110000143593538.jpg/format:webp', NULL, NULL),
(8, '500 TL Değerinde Fatura Desteği', '500', 'fatura', 'fatura desteği', 'https://productimages.hepsiburada.net/s/179/550/110000143593538.jpg/format:webp', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `grantees`
--

CREATE TABLE `grantees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `grantees`
--

INSERT INTO `grantees` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Aslı Boz', 'aboz@gmail.com', '$2y$10$7IdFU34gh1f9Hv3Tpb0rW.iWZAspfCvU2nu.lEHZaW6LkPFLblgVi', NULL, '2022-05-07 03:26:07'),
(2, 'Ali Ahmet Ak', 's@gsdf.com', '$2y$10$.XVsUW/HKvHGxHK1epLBveY5F/5Wvfl0ebUWh04qvYn.dfh9OXDWy', '2022-05-05 18:03:58', '2022-05-05 18:03:58'),
(3, 'Semra Uzun', 'suzun@gmail.com', '$2y$10$Djj2bGd1iAMLaxK4qbEciupDLJ4PK0WPSrClUPpglRs6Dy3wPSKZe', '2022-05-05 18:04:31', '2022-05-05 18:04:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `helps`
--

CREATE TABLE `helps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `helps_id` int(11) NOT NULL,
  `grantee_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `helps`
--

INSERT INTO `helps` (`id`, `helps_id`, `grantee_id`, `status`, `address`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Bu ürünlere ihtiyacım var', 'İstanbul', '2022-05-07 01:11:55', '2022-05-07 01:11:55'),
(2, 4, 1, 'Bu ürünlere ihtiyacım var', 'İstanbul', '2022-05-07 01:17:58', '2022-05-07 01:17:58'),
(3, 6, 1, 'Bu ürünlere ihtiyacım var', 'İstanbul', '2022-05-07 01:22:54', '2022-05-07 01:22:54');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_05_04_062523_create_users_table', 1),
(3, '2022_05_04_081622_create_donates_table', 1),
(4, '2022_05_04_120900_create_cart_table', 2),
(5, '2022_05_04_122128_create_cart_table', 3),
(6, '2022_05_04_203231_create_orders_table', 4),
(7, '2022_05_04_203911_create_orders_table', 5),
(8, '2022_05_05_105445_create_users2_table', 6),
(9, '2022_05_05_111343_create_grantees_table', 7),
(10, '2022_05_06_125555_create_helps_table', 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `donates_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`id`, `donates_id`, `user_id`, `status`, `payment_method`, `payment_status`, `address`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 'İhtiyaç Sahipleri İçin Hazırlanıyor', 'Peşin', 'Ödeme Onaylandı', 'İstanbul', NULL, NULL),
(2, 3, 1, 'İhtiyaç Sahipleri İçin Hazırlanıyor', 'Peşin', 'Ödeme Onaylandı', 'İstanbul', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
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
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Kenan Yıldız', 'kenan@gmail.com', '$2y$10$otiEbtC7WBKWA6jOcayQROXlbvcp2QU5X/HRIpUUS5iZjMXKsrT1S', NULL, NULL),
(2, 'Ali Ahmet', 'aa@gmail.com', '$2y$10$dY/tkgapX0Tk7gZfOTiCyu4PI/bee/MK1rN7kPP5P4Ecbm1LrObry', '2022-05-04 17:58:36', '2022-05-04 17:58:36');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `donates`
--
ALTER TABLE `donates`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `grantees`
--
ALTER TABLE `grantees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grantees_email_unique` (`email`);

--
-- Tablo için indeksler `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `donates`
--
ALTER TABLE `donates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `grantees`
--
ALTER TABLE `grantees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `helps`
--
ALTER TABLE `helps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
