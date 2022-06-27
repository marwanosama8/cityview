-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2022 at 07:03 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 8.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cityview`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories_rooms`
--

CREATE TABLE `categories_rooms` (
  `id` bigint UNSIGNED NOT NULL,
  `room_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `for`, `created_at`, `updated_at`) VALUES
(9, 'gym', '2022-06-26 11:56:14', '2022-06-26 11:56:14'),
(10, 'gym', '2022-06-26 11:58:54', '2022-06-26 11:58:54'),
(11, 'gym', '2022-06-26 11:59:34', '2022-06-26 11:59:34'),
(12, 'gym', '2022-06-26 12:01:10', '2022-06-26 12:01:10'),
(13, 'gym', '2022-06-26 12:02:09', '2022-06-26 12:02:09'),
(14, 'gym', '2022-06-26 12:02:37', '2022-06-26 12:02:37'),
(15, 'gym', '2022-06-26 12:02:58', '2022-06-26 12:02:58'),
(17, 'gym', '2022-06-26 12:04:22', '2022-06-26 12:04:22'),
(18, 'loopy', '2022-06-26 12:05:24', '2022-06-26 12:05:24'),
(19, 'loopy', '2022-06-26 12:05:56', '2022-06-26 12:05:56'),
(20, 'loopy', '2022-06-26 12:07:41', '2022-06-26 12:07:41'),
(21, 'loopy', '2022-06-26 12:08:07', '2022-06-26 12:08:07'),
(23, 'loopy', '2022-06-26 12:08:47', '2022-06-26 12:08:47'),
(24, 'loopy', '2022-06-26 12:09:07', '2022-06-26 12:09:07'),
(25, 'loopy', '2022-06-26 12:09:32', '2022-06-26 12:09:32'),
(28, 'loopy', '2022-06-26 12:10:48', '2022-06-26 12:10:48'),
(29, 'loopy', '2022-06-26 12:11:11', '2022-06-26 12:11:11'),
(30, 'restaurant', '2022-06-26 12:11:51', '2022-06-26 12:11:51'),
(31, 'restaurant', '2022-06-26 12:12:17', '2022-06-26 12:12:17'),
(32, 'restaurant', '2022-06-26 12:12:35', '2022-06-26 12:12:35'),
(33, 'restaurant', '2022-06-26 12:12:59', '2022-06-26 12:12:59'),
(34, 'restaurant', '2022-06-26 12:13:20', '2022-06-26 12:13:20'),
(35, 'room', '2022-06-26 12:13:47', '2022-06-26 12:13:47'),
(36, 'room', '2022-06-26 12:14:06', '2022-06-26 12:14:06'),
(37, 'room', '2022-06-26 12:14:25', '2022-06-26 12:14:25'),
(38, 'room', '2022-06-26 12:15:07', '2022-06-26 12:15:07'),
(40, 'room', '2022-06-26 12:15:59', '2022-06-26 12:15:59'),
(41, 'room', '2022-06-26 12:16:22', '2022-06-26 12:16:22'),
(44, 'room', '2022-06-26 12:17:41', '2022-06-26 12:17:41'),
(45, 'room', '2022-06-26 12:18:06', '2022-06-26 12:18:06'),
(46, 'swimming', '2022-06-26 12:18:30', '2022-06-26 12:18:30'),
(47, 'swimming', '2022-06-26 12:18:54', '2022-06-26 12:18:54'),
(48, 'swimming', '2022-06-26 12:19:12', '2022-06-26 12:19:12'),
(49, 'swimming', '2022-06-26 12:19:40', '2022-06-26 12:19:40'),
(50, 'swimming', '2022-06-26 12:19:59', '2022-06-26 12:19:59');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(9, 'App\\Models\\Gallery', 9, '0d1e9b81-5553-46b9-9d32-d667ff19affe', 'avatar', 'Gym-1', 'PQLvnXpMe6TR1d86AwTqoSJ93HxY3n-metaR3ltLTEucG5n-.png', 'image/png', 'public', 'public', 235749, '[]', '[]', '[]', '[]', 1, '2022-06-26 11:56:14', '2022-06-26 11:56:14'),
(10, 'App\\Models\\Gallery', 10, '33f1fded-1a71-4ae3-aa8a-011c58fc5cad', 'avatar', 'Gym-2', 'd7Jbu7WfkwRvUclFiYBaWvFoGK1qD2-metaR3ltLTIucG5n-.png', 'image/png', 'public', 'public', 285382, '[]', '[]', '[]', '[]', 1, '2022-06-26 11:58:54', '2022-06-26 11:58:54'),
(11, 'App\\Models\\Gallery', 11, '57ff241b-a157-4a5b-9f6e-d56748abac55', 'avatar', 'Gym-3', 'dVKPEPFgxDte5Ko56rMoP3CBJC9zAO-metaR3ltLTMucG5n-.png', 'image/png', 'public', 'public', 274956, '[]', '[]', '[]', '[]', 1, '2022-06-26 11:59:34', '2022-06-26 11:59:34'),
(12, 'App\\Models\\Gallery', 12, 'cb7dbaa5-251f-4697-8933-00b2e3a76f3d', 'avatar', 'Gym-4', 'cmGXZwzwi9oN5Zf89ekBXbmOEvgnK7-metaR3ltLTQucG5n-.png', 'image/png', 'public', 'public', 249477, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:01:10', '2022-06-26 12:01:10'),
(13, 'App\\Models\\Gallery', 13, 'ca27c08b-125a-4041-964c-44675109106e', 'avatar', 'Gym-5', 'Tc6Ct8y1NkTcIuTmpNT3uSGv9e5Rsf-metaR3ltLTUucG5n-.png', 'image/png', 'public', 'public', 261126, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:02:09', '2022-06-26 12:02:09'),
(14, 'App\\Models\\Gallery', 14, 'd67f5edf-69ac-4b37-bb56-2b6bca2d5c2a', 'avatar', 'Gym-6', 'OtJOPUwPlf4X8G38PgUTXzAhrAKW6h-metaR3ltLTYucG5n-.png', 'image/png', 'public', 'public', 273319, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:02:37', '2022-06-26 12:02:37'),
(15, 'App\\Models\\Gallery', 15, 'ae8c0da7-0b9a-4757-9508-991e63d503a4', 'avatar', 'Gym-7', 'pSDDRfc2hXvQ7zGcHWQaDRQrUN2wFm-metaR3ltLTcucG5n-.png', 'image/png', 'public', 'public', 261992, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:02:58', '2022-06-26 12:02:58'),
(17, 'App\\Models\\Gallery', 17, '2487b6cb-ea67-4f90-b4e6-2ff58c6134c2', 'avatar', 'Gym-8', 'c9tCe9fu2z6eG3kEBHoBpRcpaD9PTO-metaR3ltLTgucG5n-.png', 'image/png', 'public', 'public', 320381, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:04:22', '2022-06-26 12:04:22'),
(18, 'App\\Models\\Gallery', 18, '355b8bdd-96f2-4d87-9db7-353dcb8ac61f', 'avatar', 'Loopy-1', 'aoI78GlIZANTXpCVZjcgAfmd5b763M-metaTG9vcHktMS5wbmc=-.png', 'image/png', 'public', 'public', 298218, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:05:24', '2022-06-26 12:05:24'),
(19, 'App\\Models\\Gallery', 19, '580d2e37-b791-4418-871a-14b7335e974b', 'avatar', 'Loopy-2', 'TLYS4Ejdp3lgAWgJy2h6EHQOIMdIVh-metaTG9vcHktMi5wbmc=-.png', 'image/png', 'public', 'public', 300932, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:05:56', '2022-06-26 12:05:56'),
(20, 'App\\Models\\Gallery', 20, '3c753484-fdeb-4e08-9523-58af0d3d6245', 'avatar', 'Loopy-3', '6B8r3RqfY206Al5XZNeacmeYMVI3FD-metaTG9vcHktMy5wbmc=-.png', 'image/png', 'public', 'public', 308886, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:07:41', '2022-06-26 12:07:41'),
(21, 'App\\Models\\Gallery', 21, '4008ecc2-daf4-4f55-81a9-deb1933b2381', 'avatar', 'Loopy-4', 'U7IzajC20Hg7AISpyW0XlKBvbfntnK-metaTG9vcHktNC5wbmc=-.png', 'image/png', 'public', 'public', 281162, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:08:07', '2022-06-26 12:08:07'),
(22, 'App\\Models\\Gallery', 23, '8068562a-f818-4803-9285-eaa27753f74f', 'avatar', 'Loopy-5', 'uQh3WhPzaeS4NRMClpkCNXk9MpcdUP-metaTG9vcHktNS5wbmc=-.png', 'image/png', 'public', 'public', 263042, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:08:47', '2022-06-26 12:08:47'),
(23, 'App\\Models\\Gallery', 24, '2c0e56ca-b979-4bf0-b08a-b6273cfb3094', 'avatar', 'Loopy-6', 'H5kf4N0EDpTwNtSX0P3BOnAQvQaGP9-metaTG9vcHktNi5wbmc=-.png', 'image/png', 'public', 'public', 341046, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:09:07', '2022-06-26 12:09:07'),
(24, 'App\\Models\\Gallery', 25, '099be5f9-9827-443a-b549-cc5c584a37ea', 'avatar', 'Loopy-7', 'bwLcyxvRGlogX75keE2I4hOMkZo27P-metaTG9vcHktNy5wbmc=-.png', 'image/png', 'public', 'public', 254213, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:09:32', '2022-06-26 12:09:32'),
(27, 'App\\Models\\Gallery', 28, '482dfe6e-cbd5-477e-9c2a-32bdb32f3f17', 'avatar', 'Loopy-9', 'LUAu2aE6oc8ScZaZcXDKweQsUqnHVu-metaTG9vcHktOS5wbmc=-.png', 'image/png', 'public', 'public', 316192, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:10:48', '2022-06-26 12:10:48'),
(28, 'App\\Models\\Gallery', 29, 'f9d8c82b-443e-44c9-a93e-efd9cef42bd9', 'avatar', 'Loopy-10', '65kv0HKkEF7yi4laA0Q1YLatx3ifNR-metaTG9vcHktMTAucG5n-.png', 'image/png', 'public', 'public', 316870, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:11:11', '2022-06-26 12:11:11'),
(29, 'App\\Models\\Gallery', 30, '1810f881-5f53-4aab-9895-c7c3ae242543', 'avatar', 'Restaurant-1', 'VekHhCw6iM6F1zugbQoZ3ULSNTLQoP-metaUmVzdGF1cmFudC0xLnBuZw==-.png', 'image/png', 'public', 'public', 274792, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:11:51', '2022-06-26 12:11:51'),
(30, 'App\\Models\\Gallery', 31, 'e9ed610d-f318-492c-b620-133a561e034b', 'avatar', 'Restaurant-2', 'E4UB0b7R7VeVM4jCv1FsYy22yPlrAl-metaUmVzdGF1cmFudC0yLnBuZw==-.png', 'image/png', 'public', 'public', 233339, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:12:17', '2022-06-26 12:12:17'),
(31, 'App\\Models\\Gallery', 32, '28d2322f-4c4b-4308-a0b5-74e294edc5cc', 'avatar', 'Restaurant-3', 'LA1SvSvs49oVZVAz7Vn94bmXhz0K8u-metaUmVzdGF1cmFudC0zLnBuZw==-.png', 'image/png', 'public', 'public', 258770, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:12:35', '2022-06-26 12:12:35'),
(32, 'App\\Models\\Gallery', 33, 'c59529c0-14df-4217-b0fd-5e65c501c928', 'avatar', 'Restaurant-4', 'TI7Vx9qYagX1quye8yqJ5g1AnzfCZv-metaUmVzdGF1cmFudC00LnBuZw==-.png', 'image/png', 'public', 'public', 273607, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:12:59', '2022-06-26 12:12:59'),
(33, 'App\\Models\\Gallery', 34, '275fd03f-21d3-4327-97a9-55ff49fc4e21', 'avatar', 'Restaurant-5', 'v1UWg5d0vqjdWkVrFZvCcTET8rSXLB-metaUmVzdGF1cmFudC01LnBuZw==-.png', 'image/png', 'public', 'public', 220284, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:13:20', '2022-06-26 12:13:20'),
(34, 'App\\Models\\Gallery', 35, '22435974-adbc-4c65-9d12-e8f1e35ea3d4', 'avatar', 'Room-1', '4CBv6d9CwbpXRXo8gDdLbg0HG0iVr7-metaUm9vbS0xLnBuZw==-.png', 'image/png', 'public', 'public', 157323, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:13:47', '2022-06-26 12:13:47'),
(35, 'App\\Models\\Gallery', 36, '521439b7-97e8-434f-be80-b22de8ac2234', 'avatar', 'Room-2', 'POfmbGfikrDtoJPSjm0G2Zha5de8hI-metaUm9vbS0yLnBuZw==-.png', 'image/png', 'public', 'public', 196984, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:14:06', '2022-06-26 12:14:06'),
(36, 'App\\Models\\Gallery', 37, '21583ce0-9908-4bc7-83bd-1297a31778c4', 'avatar', 'Room-3', '9j9z4WnJax0azGTeXfYiSl7AsolKOf-metaUm9vbS0zLnBuZw==-.png', 'image/png', 'public', 'public', 195556, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:14:25', '2022-06-26 12:14:25'),
(37, 'App\\Models\\Gallery', 38, '2efff7fa-eeff-47c3-93c2-a9fa80780930', 'avatar', 'Room-4', 'onU8kS9hwp5YtML0QuSvf1eWoX04Uv-metaUm9vbS00LnBuZw==-.png', 'image/png', 'public', 'public', 201939, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:15:07', '2022-06-26 12:15:07'),
(39, 'App\\Models\\Gallery', 40, 'a2d1f4a3-e826-4cb1-8b7a-77819446d40b', 'avatar', 'Room-5', 'nomkIGFKHq2BhnOEqJr8XBUDd73w44-metaUm9vbS01LnBuZw==-.png', 'image/png', 'public', 'public', 154164, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:15:59', '2022-06-26 12:15:59'),
(40, 'App\\Models\\Gallery', 41, '4f87bd16-6f85-4baa-bf8e-b14c5b65307a', 'avatar', 'Room-6', 'Yj7tvOXbHYCC9BKbqY2XUBocAw8P4c-metaUm9vbS02LnBuZw==-.png', 'image/png', 'public', 'public', 154005, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:16:22', '2022-06-26 12:16:22'),
(43, 'App\\Models\\Gallery', 44, 'a979315b-f528-4e26-a4ae-da885ee83945', 'avatar', 'Room-8', 'k3G6IHx6FgBlCnaormM4evEpEilBIy-metaUm9vbS04LnBuZw==-.png', 'image/png', 'public', 'public', 212353, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:17:41', '2022-06-26 12:17:41'),
(44, 'App\\Models\\Gallery', 45, '8248e45e-6376-4f7a-8f9f-40adf91e6a36', 'avatar', 'Room-9', 'gyJ6ZFovaNXjrJtVTiVJTI1cPmJACF-metaUm9vbS05LnBuZw==-.png', 'image/png', 'public', 'public', 167411, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:18:06', '2022-06-26 12:18:06'),
(45, 'App\\Models\\Gallery', 46, '2af8414d-f15e-4116-b504-0335a59c9f9e', 'avatar', 'Swimming-1', 'Aj7bGqO4eQZgnn1l9qqk8GKGy27ewP-metaU3dpbW1pbmctMS5wbmc=-.png', 'image/png', 'public', 'public', 245953, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:18:30', '2022-06-26 12:18:30'),
(46, 'App\\Models\\Gallery', 47, '39e4dcbe-4f5f-4714-a255-bee2ee96e2d9', 'avatar', 'Swimming-2', 'kvU9gocUmjzwyP3lqbLKv38t7b2Mti-metaU3dpbW1pbmctMi5wbmc=-.png', 'image/png', 'public', 'public', 245203, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:18:54', '2022-06-26 12:18:54'),
(47, 'App\\Models\\Gallery', 48, '4152d40b-238e-44f7-8684-f128616250b3', 'avatar', 'Swimming-3', 'eUJIcj0v8bW1SY6Iq88nrxV73Crqz3-metaU3dpbW1pbmctMy5wbmc=-.png', 'image/png', 'public', 'public', 282420, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:19:12', '2022-06-26 12:19:12'),
(48, 'App\\Models\\Gallery', 49, '880f5a35-7fe6-454e-a9ac-46de77ab9286', 'avatar', 'Swimming-4', '2gz4q7CweXanOXGTNEAUUbUnEpPGwT-metaU3dpbW1pbmctNC5wbmc=-.png', 'image/png', 'public', 'public', 304673, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:19:40', '2022-06-26 12:19:40'),
(49, 'App\\Models\\Gallery', 50, 'c2d1d18c-99e1-474a-9b56-902ab45edf41', 'avatar', 'Swimming-5', '0fdQ0sV5bltEJJIPUvwOUhxiMPdV5v-metaU3dpbW1pbmctNS5wbmc=-.png', 'image/png', 'public', 'public', 316628, '[]', '[]', '[]', '[]', 1, '2022-06-26 12:19:59', '2022-06-26 12:19:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2022_06_25_060242_create_media_table', 1),
(18, '2022_06_25_060554_create_rooms_table', 1),
(19, '2022_06_25_071705_create_categories_table', 1),
(20, '2022_06_25_071842_categories_rooms', 1),
(21, '2022_06_26_071541_create_galleries_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint UNSIGNED NOT NULL,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_adults` int NOT NULL,
  `max_children` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cityview', 'cityview@admin.com', NULL, '$2y$10$0UDYpymws4B/zLpwPI8seuRtng2a717.eDYuxK/7S5Ra7MS1WDwVm', '8qkS2ys5FwBxY5f5Pknd42uMk8qVTch6cottMZ7CthPk0LRPHvToOSBs4EyV', '2022-06-26 05:22:10', '2022-06-26 05:22:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_rooms`
--
ALTER TABLE `categories_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories_rooms`
--
ALTER TABLE `categories_rooms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
