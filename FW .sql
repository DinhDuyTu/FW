-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2020 at 03:45 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FW`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 0, 'Man', 'Category Man', '2020-03-07 00:20:19', '2020-03-07 00:20:19'),
(2, 0, 'Women', 'Category Women', '2020-03-07 00:20:32', '2020-03-07 00:20:32'),
(3, 0, 'Kids', 'Category Kids', '2020-03-07 00:20:39', '2020-03-07 00:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Red', 'color_red', '2020-03-07 00:21:25', '2020-03-07 00:21:25'),
(2, 'Yellow', 'color_yellow', '2020-03-07 00:21:37', '2020-03-07 00:21:37'),
(3, 'Green', 'color_green', '2020-03-07 00:21:49', '2020-03-07 00:21:49'),
(4, 'Blue', 'color_blue', '2020-03-07 00:22:01', '2020-03-07 00:22:01'),
(5, 'White', 'color_white', '2020-03-07 00:22:16', '2020-03-07 00:22:16'),
(6, 'Black', 'color_black', '2020-03-07 00:22:31', '2020-03-07 00:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `color_product`
--

CREATE TABLE `color_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `color_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_product`
--

INSERT INTO `color_product` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 4, NULL, NULL),
(4, 1, 6, NULL, NULL),
(5, 2, 1, NULL, NULL),
(6, 2, 2, NULL, NULL),
(7, 2, 4, NULL, NULL),
(8, 2, 6, NULL, NULL),
(9, 3, 1, NULL, NULL),
(10, 3, 2, NULL, NULL),
(11, 3, 4, NULL, NULL),
(12, 3, 6, NULL, NULL),
(13, 4, 1, NULL, NULL),
(14, 4, 2, NULL, NULL),
(15, 4, 4, NULL, NULL),
(16, 4, 6, NULL, NULL),
(17, 5, 1, NULL, NULL),
(18, 5, 2, NULL, NULL),
(19, 5, 4, NULL, NULL),
(20, 5, 6, NULL, NULL),
(21, 6, 1, NULL, NULL),
(22, 6, 2, NULL, NULL),
(23, 6, 4, NULL, NULL),
(24, 6, 6, NULL, NULL),
(25, 7, 1, NULL, NULL),
(26, 7, 2, NULL, NULL),
(27, 7, 4, NULL, NULL),
(28, 7, 6, NULL, NULL),
(29, 8, 1, NULL, NULL),
(30, 8, 2, NULL, NULL),
(31, 8, 4, NULL, NULL),
(32, 8, 6, NULL, NULL),
(33, 9, 1, NULL, NULL),
(34, 9, 2, NULL, NULL),
(35, 9, 4, NULL, NULL),
(36, 9, 6, NULL, NULL),
(37, 10, 1, NULL, NULL),
(38, 10, 2, NULL, NULL),
(39, 10, 4, NULL, NULL),
(40, 10, 6, NULL, NULL),
(41, 11, 1, NULL, NULL),
(42, 11, 2, NULL, NULL),
(43, 11, 4, NULL, NULL),
(44, 11, 6, NULL, NULL),
(45, 12, 1, NULL, NULL),
(46, 12, 2, NULL, NULL),
(47, 12, 4, NULL, NULL),
(48, 12, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `parent_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 'Test Comment', '2020-03-07 00:30:30', '2020-03-07 00:30:30'),
(2, 1, 1, 1, 'oke chu', '2020-03-07 00:30:41', '2020-03-07 00:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_default` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image`, `image_default`, `created_at`, `updated_at`) VALUES
(1, 1, '/images/product/product5e634bfec6cec.jpeg', 1, '2020-03-07 00:23:42', '2020-03-07 00:23:42'),
(2, 1, '/images/product/product5e634bfec772d.jpeg', 0, '2020-03-07 00:23:42', '2020-03-07 00:23:42'),
(3, 1, '/images/product/product5e634bfec7ebd.jpeg', 0, '2020-03-07 00:23:42', '2020-03-07 00:23:42'),
(4, 1, '/images/product/product5e634bfec8488.jpeg', 0, '2020-03-07 00:23:42', '2020-03-07 00:23:42'),
(5, 2, '/images/product/product5e634c198d7a7.jpeg', 1, '2020-03-07 00:24:09', '2020-03-07 00:24:09'),
(6, 2, '/images/product/product5e634c198e091.jpeg', 0, '2020-03-07 00:24:09', '2020-03-07 00:24:09'),
(7, 2, '/images/product/product5e634c198e9cc.jpeg', 0, '2020-03-07 00:24:09', '2020-03-07 00:24:09'),
(8, 2, '/images/product/product5e634c198ef46.jpeg', 0, '2020-03-07 00:24:09', '2020-03-07 00:24:09'),
(9, 3, '/images/product/product5e634c30c5c49.jpeg', 1, '2020-03-07 00:24:32', '2020-03-07 00:24:32'),
(10, 3, '/images/product/product5e634c30c689e.jpeg', 0, '2020-03-07 00:24:32', '2020-03-07 00:24:32'),
(11, 3, '/images/product/product5e634c30c6f58.jpeg', 0, '2020-03-07 00:24:32', '2020-03-07 00:24:32'),
(12, 3, '/images/product/product5e634c30c79f0.jpeg', 0, '2020-03-07 00:24:32', '2020-03-07 00:24:32'),
(13, 4, '/images/product/product5e634c381e489.jpeg', 1, '2020-03-07 00:24:40', '2020-03-07 00:24:40'),
(14, 4, '/images/product/product5e634c381ec17.jpeg', 0, '2020-03-07 00:24:40', '2020-03-07 00:24:40'),
(15, 4, '/images/product/product5e634c381f315.jpeg', 0, '2020-03-07 00:24:40', '2020-03-07 00:24:40'),
(16, 4, '/images/product/product5e634c381f95e.jpeg', 0, '2020-03-07 00:24:40', '2020-03-07 00:24:40'),
(17, 5, '/images/product/product5e634c3e8b467.jpeg', 1, '2020-03-07 00:24:46', '2020-03-07 00:24:46'),
(18, 5, '/images/product/product5e634c3e8be8c.jpeg', 0, '2020-03-07 00:24:46', '2020-03-07 00:24:46'),
(19, 5, '/images/product/product5e634c3e8c4dc.jpeg', 0, '2020-03-07 00:24:46', '2020-03-07 00:24:46'),
(20, 5, '/images/product/product5e634c3e8ccda.jpeg', 0, '2020-03-07 00:24:46', '2020-03-07 00:24:46'),
(21, 6, '/images/product/product5e634c547ac95.jpeg', 1, '2020-03-07 00:25:08', '2020-03-07 00:25:08'),
(22, 6, '/images/product/product5e634c547b516.jpeg', 0, '2020-03-07 00:25:08', '2020-03-07 00:25:08'),
(23, 6, '/images/product/product5e634c547b98b.jpeg', 0, '2020-03-07 00:25:08', '2020-03-07 00:25:08'),
(24, 6, '/images/product/product5e634c547c183.jpeg', 0, '2020-03-07 00:25:08', '2020-03-07 00:25:08'),
(25, 7, '/images/product/product5e634c6b33b3e.jpeg', 1, '2020-03-07 00:25:31', '2020-03-07 00:25:31'),
(26, 7, '/images/product/product5e634c6b344bf.jpeg', 0, '2020-03-07 00:25:31', '2020-03-07 00:25:31'),
(27, 7, '/images/product/product5e634c6b34c6a.jpeg', 0, '2020-03-07 00:25:31', '2020-03-07 00:25:31'),
(28, 7, '/images/product/product5e634c6b351e2.jpeg', 0, '2020-03-07 00:25:31', '2020-03-07 00:25:31'),
(29, 8, '/images/product/product5e634c723aea2.jpeg', 1, '2020-03-07 00:25:38', '2020-03-07 00:25:38'),
(30, 8, '/images/product/product5e634c723b469.jpeg', 0, '2020-03-07 00:25:38', '2020-03-07 00:25:38'),
(31, 8, '/images/product/product5e634c723bc3a.jpeg', 0, '2020-03-07 00:25:38', '2020-03-07 00:25:38'),
(32, 8, '/images/product/product5e634c723c335.jpeg', 0, '2020-03-07 00:25:38', '2020-03-07 00:25:38'),
(33, 9, '/images/product/product5e634c745ef1b.jpeg', 1, '2020-03-07 00:25:40', '2020-03-07 00:25:40'),
(34, 9, '/images/product/product5e634c745f545.jpeg', 0, '2020-03-07 00:25:40', '2020-03-07 00:25:40'),
(35, 9, '/images/product/product5e634c745fb64.jpeg', 0, '2020-03-07 00:25:40', '2020-03-07 00:25:40'),
(36, 9, '/images/product/product5e634c746000f.jpeg', 0, '2020-03-07 00:25:40', '2020-03-07 00:25:40'),
(37, 10, '/images/product/product5e634c8990d8a.jpeg', 1, '2020-03-07 00:26:01', '2020-03-07 00:26:01'),
(38, 10, '/images/product/product5e634c89916e2.jpeg', 0, '2020-03-07 00:26:01', '2020-03-07 00:26:01'),
(39, 10, '/images/product/product5e634c8991bc1.jpeg', 0, '2020-03-07 00:26:01', '2020-03-07 00:26:01'),
(40, 10, '/images/product/product5e634c8992128.jpeg', 0, '2020-03-07 00:26:01', '2020-03-07 00:26:01'),
(41, 11, '/images/product/product5e634c8d589d1.jpeg', 1, '2020-03-07 00:26:05', '2020-03-07 00:26:05'),
(42, 11, '/images/product/product5e634c8d59426.jpeg', 0, '2020-03-07 00:26:05', '2020-03-07 00:26:05'),
(43, 11, '/images/product/product5e634c8d59bd9.jpeg', 0, '2020-03-07 00:26:05', '2020-03-07 00:26:05'),
(44, 11, '/images/product/product5e634c8d5a201.jpeg', 0, '2020-03-07 00:26:05', '2020-03-07 00:26:05'),
(45, 12, '/images/product/product5e634c904f861.jpeg', 1, '2020-03-07 00:26:08', '2020-03-07 00:26:08'),
(46, 12, '/images/product/product5e634c905016c.jpeg', 0, '2020-03-07 00:26:08', '2020-03-07 00:26:08'),
(47, 12, '/images/product/product5e634c90505ca.jpeg', 0, '2020-03-07 00:26:08', '2020-03-07 00:26:08'),
(48, 12, '/images/product/product5e634c9050b28.jpeg', 0, '2020-03-07 00:26:08', '2020-03-07 00:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_19_154118_create_categories_table', 1),
(5, '2020_02_20_024455_create_products_table', 1),
(6, '2020_02_20_031542_create_images_table', 1),
(7, '2020_02_20_031555_create_orders_table', 1),
(8, '2020_02_20_031602_create_roles_table', 1),
(9, '2020_02_20_032507_create_order_detail_table', 1),
(10, '2020_03_03_153720_create_sizes_table', 1),
(11, '2020_03_03_163824_create_product_size_table', 1),
(12, '2020_03_04_145802_create_colors_table', 1),
(13, '2020_03_05_021656_create_color_product_table', 1),
(14, '2020_03_05_143108_create_comments_table', 1),
(15, '2020_03_06_022039_create_withlists_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` int(10) UNSIGNED DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `phone`, `address`, `email`, `total_price`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Duy Tự', '0963636837', 'Hà Nội', 'admin@mail.com', 1798000, NULL, 2, '2020-03-07 00:39:46', '2020-03-07 05:04:54'),
(2, 1, 'Duy Tự', '0963636837', 'Hà Nội', 'admin@mail.com', 4495000, 'Send Me On Sunday', 0, '2020-03-07 05:14:29', '2020-03-07 05:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `quantity` int(10) UNSIGNED DEFAULT NULL,
  `price` int(10) UNSIGNED DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `product_id`, `order_id`, `quantity`, `price`, `size`, `color`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 899000, 'S', 'Blue', '2020-03-07 00:39:46', '2020-03-07 00:39:46'),
(2, 7, 2, 3, 899000, 'S', 'Yellow', '2020-03-07 05:14:29', '2020-03-07 05:14:29'),
(3, 4, 2, 2, 899000, 'S', 'Black', '2020-03-07 05:14:29', '2020-03-07 05:14:29');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(10) UNSIGNED DEFAULT NULL,
  `price_sale` int(10) UNSIGNED DEFAULT NULL,
  `quantity` int(10) UNSIGNED DEFAULT NULL,
  `is_highlight` tinyint(1) DEFAULT '0',
  `detail` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `product_code`, `price`, `price_sale`, `quantity`, `is_highlight`, `detail`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'LOREM IPSUM IS SIMPLY', 'PRD001', 999000, 899000, 100, 1, 'Nothing', 'Nothing', '2020-03-07 00:23:42', '2020-03-07 00:23:42'),
(2, 2, 'LOREM IPSUM IS SIMPLY', 'PRD002', 999000, 899000, 100, 1, 'Nothing', 'Nothing', '2020-03-07 00:24:09', '2020-03-07 00:24:09'),
(3, 3, 'LOREM IPSUM IS SIMPLY', 'PRD003', 999000, 899000, 100, 1, 'Nothing', 'Nothing', '2020-03-07 00:24:32', '2020-03-07 00:24:32'),
(4, 3, 'LOREM IPSUM IS SIMPLY', 'PRD004', 999000, 899000, 100, 1, 'Nothing', 'Nothing', '2020-03-07 00:24:40', '2020-03-07 00:24:40'),
(5, 3, 'LOREM IPSUM IS SIMPLY', 'PRD005', 999000, 899000, 100, 1, 'Nothing', 'Nothing', '2020-03-07 00:24:46', '2020-03-07 00:24:46'),
(6, 3, 'LOREM IPSUM IS SIMPLY', 'PRD006', 999000, 899000, 100, 1, 'Nothing', 'Nothing', '2020-03-07 00:25:08', '2020-03-07 00:25:08'),
(7, 1, 'LOREM IPSUM IS SIMPLY', 'PRD006', 999000, 899000, 100, 1, 'Nothing', 'Nothing', '2020-03-07 00:25:31', '2020-03-07 00:25:31'),
(8, 1, 'LOREM IPSUM IS SIMPLY', 'PRD006', 999000, 899000, 100, 1, 'Nothing', 'Nothing', '2020-03-07 00:25:38', '2020-03-07 00:25:38'),
(9, 1, 'LOREM IPSUM IS SIMPLY', 'PRD006', 999000, 899000, 100, 1, 'Nothing', 'Nothing', '2020-03-07 00:25:40', '2020-03-07 00:25:40'),
(10, 2, 'LOREM IPSUM IS SIMPLY', 'PRD006', 999000, 899000, 100, 1, 'Nothing', 'Nothing', '2020-03-07 00:26:01', '2020-03-07 00:26:01'),
(11, 2, 'LOREM IPSUM IS SIMPLY', 'PRD006', 999000, 899000, 100, 1, 'Nothing', 'Nothing', '2020-03-07 00:26:05', '2020-03-07 00:26:05'),
(12, 2, 'LOREM IPSUM IS SIMPLY', 'PRD006', 999000, 899000, 100, 1, 'Nothing', 'Nothing', '2020-03-07 00:26:08', '2020-03-07 00:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `size_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-03-07 00:23:42', '2020-03-07 00:23:42'),
(2, 1, 2, '2020-03-07 00:23:42', '2020-03-07 00:23:42'),
(3, 1, 3, '2020-03-07 00:23:42', '2020-03-07 00:23:42'),
(4, 1, 4, '2020-03-07 00:23:42', '2020-03-07 00:23:42'),
(5, 2, 1, '2020-03-07 00:24:09', '2020-03-07 00:24:09'),
(6, 2, 2, '2020-03-07 00:24:09', '2020-03-07 00:24:09'),
(7, 2, 3, '2020-03-07 00:24:09', '2020-03-07 00:24:09'),
(8, 2, 4, '2020-03-07 00:24:09', '2020-03-07 00:24:09'),
(9, 3, 1, '2020-03-07 00:24:32', '2020-03-07 00:24:32'),
(10, 3, 2, '2020-03-07 00:24:32', '2020-03-07 00:24:32'),
(11, 3, 3, '2020-03-07 00:24:32', '2020-03-07 00:24:32'),
(12, 3, 4, '2020-03-07 00:24:32', '2020-03-07 00:24:32'),
(13, 4, 1, '2020-03-07 00:24:40', '2020-03-07 00:24:40'),
(14, 4, 2, '2020-03-07 00:24:40', '2020-03-07 00:24:40'),
(15, 4, 3, '2020-03-07 00:24:40', '2020-03-07 00:24:40'),
(16, 4, 4, '2020-03-07 00:24:40', '2020-03-07 00:24:40'),
(17, 5, 1, '2020-03-07 00:24:46', '2020-03-07 00:24:46'),
(18, 5, 2, '2020-03-07 00:24:46', '2020-03-07 00:24:46'),
(19, 5, 3, '2020-03-07 00:24:46', '2020-03-07 00:24:46'),
(20, 5, 4, '2020-03-07 00:24:46', '2020-03-07 00:24:46'),
(21, 6, 1, '2020-03-07 00:25:08', '2020-03-07 00:25:08'),
(22, 6, 2, '2020-03-07 00:25:08', '2020-03-07 00:25:08'),
(23, 6, 3, '2020-03-07 00:25:08', '2020-03-07 00:25:08'),
(24, 6, 4, '2020-03-07 00:25:08', '2020-03-07 00:25:08'),
(25, 7, 1, '2020-03-07 00:25:31', '2020-03-07 00:25:31'),
(26, 7, 2, '2020-03-07 00:25:31', '2020-03-07 00:25:31'),
(27, 7, 3, '2020-03-07 00:25:31', '2020-03-07 00:25:31'),
(28, 7, 4, '2020-03-07 00:25:31', '2020-03-07 00:25:31'),
(29, 8, 1, '2020-03-07 00:25:38', '2020-03-07 00:25:38'),
(30, 8, 2, '2020-03-07 00:25:38', '2020-03-07 00:25:38'),
(31, 8, 3, '2020-03-07 00:25:38', '2020-03-07 00:25:38'),
(32, 8, 4, '2020-03-07 00:25:38', '2020-03-07 00:25:38'),
(33, 9, 1, '2020-03-07 00:25:40', '2020-03-07 00:25:40'),
(34, 9, 2, '2020-03-07 00:25:40', '2020-03-07 00:25:40'),
(35, 9, 3, '2020-03-07 00:25:40', '2020-03-07 00:25:40'),
(36, 9, 4, '2020-03-07 00:25:40', '2020-03-07 00:25:40'),
(37, 10, 1, '2020-03-07 00:26:01', '2020-03-07 00:26:01'),
(38, 10, 2, '2020-03-07 00:26:01', '2020-03-07 00:26:01'),
(39, 10, 3, '2020-03-07 00:26:01', '2020-03-07 00:26:01'),
(40, 10, 4, '2020-03-07 00:26:01', '2020-03-07 00:26:01'),
(41, 11, 1, '2020-03-07 00:26:05', '2020-03-07 00:26:05'),
(42, 11, 2, '2020-03-07 00:26:05', '2020-03-07 00:26:05'),
(43, 11, 3, '2020-03-07 00:26:05', '2020-03-07 00:26:05'),
(44, 11, 4, '2020-03-07 00:26:05', '2020-03-07 00:26:05'),
(45, 12, 1, '2020-03-07 00:26:08', '2020-03-07 00:26:08'),
(46, 12, 2, '2020-03-07 00:26:08', '2020-03-07 00:26:08'),
(47, 12, 3, '2020-03-07 00:26:08', '2020-03-07 00:26:08'),
(48, 12, 4, '2020-03-07 00:26:08', '2020-03-07 00:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, 'S', '2020-03-07 00:20:46', '2020-03-07 00:20:46'),
(2, 'M', '2020-03-07 00:20:51', '2020-03-07 00:20:51'),
(3, 'L', '2020-03-07 00:20:55', '2020-03-07 00:20:55'),
(4, 'XL', '2020-03-07 00:20:59', '2020-03-07 00:20:59'),
(5, 'XXL', '2020-03-07 00:21:02', '2020-03-07 00:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` tinyint(4) DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `password`, `phone`, `address`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Duy Tự', '/images/avatar/avatar5e634954043b5.jpeg', 'admin@mail.com', NULL, '$2y$10$q5Pfnr8Gkl2KCDsqjqfdHuk8bajZ9Wyo4G8YMGnlNSXDAMUgeivcK', '0963636837', 'Hà Nội', 0, NULL, '2020-03-07 00:12:20', '2020-03-07 00:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `withlists`
--

CREATE TABLE `withlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_product`
--
ALTER TABLE `color_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `withlists`
--
ALTER TABLE `withlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `color_product`
--
ALTER TABLE `color_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `withlists`
--
ALTER TABLE `withlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
