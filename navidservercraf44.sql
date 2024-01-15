-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2024 at 09:09 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `navidservercraf`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_name`, `blog_text`, `blog_img`, `created_at`, `updated_at`) VALUES
(3, 'titale', 'this is title 2', 'upload/brand/1788062725247928.jpg', NULL, '2024-01-14 04:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `brand_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_slug`, `brand_img`, `created_at`, `updated_at`) VALUES
(1, 'Colorful Animal Themed', 'colorful-animal-themed', 'upload/brand/1779018499866021.png', NULL, '2023-10-06 08:57:31'),
(3, 'Colorful Mugs Mixed Theme', 'colorful-mugs-mixed-theme', 'upload/brand/1779018808634683.png', NULL, NULL),
(4, 'Colorful Sea', 'colorful-sea', 'upload/brand/1779018829871719.png', NULL, NULL),
(5, 'Matte Black Animal', 'matte-black-animal', 'upload/brand/1779018859182166.png', NULL, NULL),
(6, 'Matte Black Royal', 'matte-black-royal', 'upload/brand/1779018897569916.png', NULL, NULL),
(12, 'test hello img test', 'test-hello-img-test', 'upload/brand/1788096062106767.png', NULL, '2024-01-14 13:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint UNSIGNED NOT NULL,
  `cate_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `cate_name`, `category_img`, `created_at`, `updated_at`) VALUES
(14, '3D Ceramic Mugs', 'upload/product/product_img/1786098239217225.png', NULL, '2023-12-23 12:26:57'),
(15, 'Rickshaw Painting', 'upload/product/product_img/1786098249443371.png', NULL, '2023-12-23 12:27:07'),
(16, 'Jute World', 'upload/product/product_img/1786098262575737.jpg', NULL, '2023-12-23 12:27:19'),
(17, 'Miniatures', 'upload/product/product_img/1786098273963184.png', NULL, '2023-12-23 12:27:30'),
(18, 'Clay World', 'upload/product/product_img/1786098287494757.jpg', NULL, '2023-12-23 12:27:43'),
(19, 'Lamps', 'upload/product/product_img/1786098302141415.jpg', NULL, '2023-12-23 12:27:57'),
(20, 'Paintings', 'upload/product/product_img/1786098314397966.jpg', NULL, '2023-12-23 12:28:09'),
(21, 'Hand Painted Sunglasses', 'upload/product/product_img/1786098326455064.jpg', NULL, '2023-12-23 12:28:20'),
(22, 'Wire Sculptures', 'upload/product/product_img/1786098339135558.jpg', NULL, '2023-12-23 12:28:32'),
(23, 'Resin Artworks', 'upload/product/product_img/1786098351312977.jpg', NULL, '2023-12-23 12:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_03_130934_create_brands_table', 2),
(20, '2023_10_04_162628_create_catagories_table', 3),
(38, '2023_10_04_162636_create_products_table', 4),
(39, '2023_10_06_040636_create_multi_imgs_table', 4),
(40, '2023_10_13_181730_create_orders_table', 4),
(41, '2023_10_13_182812_create_order_items_table', 4),
(42, '2023_11_15_013112_create_sub_categories_table', 4),
(43, '2024_01_14_082032_create_blogs_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE `multi_imgs` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int NOT NULL,
  `photo_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(8,2) NOT NULL,
  `order_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_month` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_year` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picked_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `number`, `area`, `adress`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `order_number`, `invoice_no`, `order_date`, `order_month`, `order_year`, `confirmed_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `return_reason`, `status`, `created_at`, `updated_at`) VALUES
(4, 16, 'Navid Al Azim', 'navidalazim95@gmail.com', '01765249638', 'ID', 'House#6, Block#C, Road#9(Beside Eidgah Field), Chandrima Model Town,Dhaka Uddyan, Mohammadpur-1207', 'Cash On Delivery', 'Cash On Delivery', NULL, 'tk', 700.00, 'ORN50675727', 'EOS70446431', '27 November 2023', 'November', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'confirm', '2023-11-27 21:22:46', '2023-11-27 21:23:06'),
(5, 19, 'noman', 'giftshipht@gmail.com', '01677726358', 'ID', '216, block c, khilhaon, dhaka', 'Cash On Delivery', 'Cash On Delivery', NULL, 'tk', 610.00, 'ORN10413670', 'EOS42907640', '05 December 2023', 'December', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-12-05 18:45:38', NULL),
(6, 20, 'zubair bin ferdous', 'user1@gmail.com', '01924495997', 'ID', 'this is fake data for testing...', 'Cash On Delivery', 'Cash On Delivery', NULL, 'tk', 1300.00, 'ORN75412436', 'EOS69574499', '09 December 2023', 'December', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-12-09 15:24:28', NULL),
(7, 19, 'noman', 'giftshipht@gmail.com', '01677726358', 'ID', '219 road 5 block c, dhaka', 'Cash On Delivery', 'Cash On Delivery', NULL, 'tk', 720.00, 'ORN49523288', 'EOS18705752', '11 December 2023', 'December', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-12-11 09:50:38', NULL),
(8, 21, 'zubair bin ferdous', 'user3@gmail.com', '01924495997', 'ID', 'test', 'Cash On Delivery', 'Cash On Delivery', NULL, 'tk', 1850.00, 'ORN44606275', 'EOS94884190', '11 December 2023', 'December', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'confirm', '2023-12-11 14:36:24', '2023-12-11 14:38:57'),
(9, 16, 'Navid Al Azim', 'navidalazim95@gmail.com', '01765249638', 'ID', 'Mohammadpur', 'Cash On Delivery', 'Cash On Delivery', NULL, 'tk', 550.00, 'ORN52281098', 'EOS64408894', '11 December 2023', 'December', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-12-11 14:52:52', NULL),
(10, 19, 'noman', 'giftshipht@gmail.com', '01677726358', 'ID', 'ghj', 'Cash On Delivery', 'Cash On Delivery', NULL, 'tk', 1420.00, 'ORN34321196', 'EOS98928110', '11 December 2023', 'December', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-12-12 00:54:54', NULL),
(11, 19, 'noman', 'giftshipht@gmail.com', '01677726358', 'ID', 'khilgaon 216', 'Cash On Delivery', 'Cash On Delivery', NULL, 'tk', 720.00, 'ORN11715261', 'EOS14439676', '12 December 2023', 'December', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-12-12 15:16:12', NULL),
(12, 22, 'john roy', 'userroy@gmail.com', '01924495997', 'OD', 'test', 'Cash On Delivery', 'Cash On Delivery', NULL, 'tk', 950.00, 'ORN85852717', 'EOS64197360', '16 December 2023', 'December', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-12-16 15:58:54', NULL),
(13, 24, 'md reaz', 'mdreaz.craftimation@gmail.com', '01966327703', 'ID', 'KHILLGAON DHAKA', 'Cash On Delivery', 'Cash On Delivery', NULL, 'tk', 500.00, 'ORN41331975', 'EOS83095547', '17 December 2023', 'December', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-12-17 22:03:53', NULL),
(14, 19, 'noman', 'giftshipht@gmail.com', '01677726358', 'ID', '216, road 5 , block c, khilgaon, dhaka', 'Cash On Delivery', 'Cash On Delivery', NULL, 'tk', 630.00, 'ORN13193159', 'EOS14980502', '18 December 2023', 'December', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-12-18 12:31:40', NULL),
(15, 19, 'noman', 'giftshipht@gmail.com', '01966327703', 'ID', 'Khilgaon', 'Cash On Delivery', 'Cash On Delivery', NULL, 'tk', 500.00, 'ORN42691130', 'EOS35920163', '18 December 2023', 'December', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-12-18 16:37:29', NULL),
(16, 23, 'john roy', 'johnroy@gmail.com', '01924495997', 'OD', 'test order', 'Cash On Delivery', 'Cash On Delivery', NULL, 'tk', 1350.00, 'ORN19377378', 'EOS97770538', '23 December 2023', 'December', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-12-23 14:52:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `vendor_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `vendor_id`, `color`, `size`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(4, 4, 12, NULL, NULL, NULL, '1', 650.00, '2023-11-27 21:22:46', NULL),
(5, 5, 37, NULL, NULL, NULL, '1', 560.00, '2023-12-05 18:45:38', NULL),
(6, 6, 19, NULL, NULL, NULL, '1', 1250.00, '2023-12-09 15:24:28', NULL),
(7, 7, 13, NULL, NULL, NULL, '1', 670.00, '2023-12-11 09:50:38', NULL),
(8, 8, 14, NULL, NULL, NULL, '3', 450.00, '2023-12-11 14:36:24', NULL),
(9, 8, 16, NULL, NULL, NULL, '1', 450.00, '2023-12-11 14:36:24', NULL),
(10, 9, 75, NULL, NULL, NULL, '1', 500.00, '2023-12-11 14:52:52', NULL),
(11, 10, 13, NULL, NULL, NULL, '1', 670.00, '2023-12-12 00:54:54', NULL),
(12, 10, 24, NULL, NULL, NULL, '1', 700.00, '2023-12-12 00:54:54', NULL),
(13, 11, 13, NULL, NULL, NULL, '1', 670.00, '2023-12-12 15:16:12', NULL),
(14, 12, 92, NULL, NULL, NULL, '1', 400.00, '2023-12-16 15:58:54', NULL),
(15, 12, 91, NULL, NULL, NULL, '1', 450.00, '2023-12-16 15:58:54', NULL),
(16, 13, 14, NULL, NULL, NULL, '1', 450.00, '2023-12-17 22:03:53', NULL),
(17, 14, 86, NULL, NULL, NULL, '1', 580.00, '2023-12-18 12:31:40', NULL),
(18, 15, 14, NULL, NULL, NULL, '1', 450.00, '2023-12-18 16:37:29', NULL),
(19, 16, 13, NULL, NULL, NULL, '1', 670.00, '2023-12-23 14:52:22', NULL),
(20, 16, 33, NULL, NULL, NULL, '1', 580.00, '2023-12-23 14:52:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `sub_id` int DEFAULT NULL,
  `site_id` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_id`, `site_id`, `status`, `product_name`, `product_qty`, `product_price`, `product_img`, `product_img2`, `product_message`, `created_at`, `updated_at`) VALUES
(13, 17, 3, NULL, 1, 'Baby Taxi', '50', '670', 'upload/product/product_img/1785553531623868.jpg', 'upload/product/product_img/1785553531869804.jpg', 'Measurements: Length: 19cm Width: 9.5 cm (medium size)\r\nMaterial: Iron and Tin', '2023-12-17 23:09:04', '2023-12-17 23:09:04'),
(14, 17, 3, NULL, 1, 'Rickshaw', '50', '450', 'upload/product/product_img/1785553626598442.jpg', 'upload/product/product_img/1785553626845489.jpg', 'Measurements: Length: 16cm Width: 8cm (medium size)\r\nMaterial: Iron and Tin', '2023-12-17 23:10:34', '2023-12-17 23:10:34'),
(16, 17, 3, NULL, 1, 'Van', '50', '450', 'upload/product/product_img/1785553665635906.jpg', 'upload/product/product_img/1785553665876021.jpg', 'Measurements: Length: 17.5 cm Width: 8.5 cm (medium size)\r\nMaterial: Iron and Tin', '2023-12-17 23:11:11', '2023-12-17 23:11:11'),
(17, 22, 3, NULL, 1, 'Bonsai', '50', '3500', 'upload/product/product_img/1785553705940289.jpg', 'upload/product/product_img/1785553706229891.jpg', 'Product\'s detail: Height: 19 inch\r\nBase: 5 inch by 5 inch\r\n Wire color: Silver', '2023-12-17 23:11:50', '2023-12-17 23:11:50'),
(18, 22, 3, NULL, 1, 'Bonsai in a Box', '50', '850', 'upload/product/product_img/1785553740159644.jpg', 'upload/product/product_img/1785553740436966.jpg', 'Product\'s detail: Height: 6.5 inch\r\nBreadth: 5 inch\r\nWire color: Copper', '2023-12-17 23:12:23', '2023-12-17 23:12:23'),
(19, 19, 3, NULL, 1, 'Cane Hanging lamp', '100', '1250', 'upload/product/product_img/1785553781197740.jpg', 'upload/product/product_img/1785553781462704.jpg', 'Measurement: Globe Size 8 inch', '2023-12-17 23:13:02', '2023-12-17 23:13:02'),
(21, 14, 7, NULL, 1, 'Aim High Fly Higher', '50', '650', 'upload/product/product_img/1785553361631692.jpg', 'upload/product/product_img/1785553361869927.jpg', 'Product\'s detail: Height: 7 cm\r\nDiameter: 10 cm\r\nProduct\'s color: Pale Blue', '2023-12-17 23:06:22', '2023-12-17 23:06:22'),
(22, 14, 7, NULL, 1, 'Anchor', '50', '450', 'upload/product/product_img/1785553314807815.jpg', 'upload/product/product_img/1785553315098287.jpg', 'Product\'s detail: Height: 6 cm\r\nDiameter: 8 cm\r\nProduct\'s color: Off White', '2023-12-17 23:05:37', '2023-12-17 23:05:37'),
(23, 14, 7, NULL, 1, 'Astronaut', '50', '580', 'upload/product/product_img/1785553189732511.jpg', 'upload/product/product_img/1785553189987515.jpg', 'Product\'s detail: Height: 8 cm\r\nDiameter: 7.5 cm\r\nProduct\'s color: Black', '2023-12-17 23:03:38', '2023-12-17 23:03:38'),
(24, 14, 7, NULL, 1, 'Baby boy', '50', '700', 'upload/product/product_img/1785553234239157.jpg', 'upload/product/product_img/1785553234476333.jpg', 'Product\'s detail: Height: 11 cm\r\nDiameter: 9 cm\r\n Product\'s color: Off White color', '2023-12-17 23:04:20', '2023-12-17 23:04:20'),
(25, 14, 7, NULL, 1, 'Baby Girl', '50', '700', 'upload/product/product_img/1785553130893467.jpg', 'upload/product/product_img/1785553131134823.jpg', 'Product\'s detail: Height: 11 cm\r\nDiameter: 9 cm\r\n Product\'s color: Off White color', '2023-12-17 23:02:42', '2023-12-17 23:02:42'),
(26, 14, 7, NULL, 1, 'Berry Cherry', '50', '500', 'upload/product/product_img/1785553063324539.jpg', 'upload/product/product_img/1785553063572455.jpg', 'Product\'s detail : Height: 8 cm\r\nDiameter: 7.5 cm\r\nProduct\'s color: Yellow', '2023-12-17 23:01:37', '2023-12-17 23:01:37'),
(27, 14, 7, NULL, 1, 'Bow', '50', '450', 'upload/product/product_img/1785553038661795.jpg', 'upload/product/product_img/1785553038889633.jpg', 'Product\'s detail: Height: 6 cm\r\nDiameter: 8 cm\r\nProduct\'s color: Red', '2023-12-17 23:01:14', '2023-12-17 23:01:14'),
(28, 14, 7, NULL, 1, 'Bunny', '50', '580', 'upload/product/product_img/1785553011363065.jpg', 'upload/product/product_img/1785553011638665.jpg', 'Product\'s detail: Height: 6 cm\r\nDiameter: 10 cm\r\nProduct\'s color: Lilac', '2023-12-17 23:00:48', '2023-12-17 23:00:48'),
(29, 14, 7, NULL, 1, 'Cactus mug', '50', '580', 'upload/product/product_img/1785552982688658.jpg', 'upload/product/product_img/1785552982928716.jpg', 'Product\'s detail: Height: 5.5 cm\r\nDiameter: 7.5 cm\r\nProduct\'s color: Light Pastel Green', '2023-12-17 23:00:20', '2023-12-17 23:00:20'),
(30, 14, 7, NULL, 1, 'Camel Mug', '50', '700', 'upload/product/product_img/1785552952386658.jpg', 'upload/product/product_img/1785552952731878.jpg', 'Product\'s detail: Height: 7 cm\r\nDiameter: 10 cm\r\nProduct\'s color: Light Brown', '2023-12-17 22:59:51', '2023-12-17 22:59:51'),
(31, 14, 7, NULL, 1, 'Cha chai', '50', '580', 'upload/product/product_img/1785552499516363.jpg', 'upload/product/product_img/1785552499767003.jpg', 'Product\'s detail: Height: 6 cm\r\nDiameter: 10 cm\r\n📌 Product\'s color: Baby Pink', '2023-12-17 22:52:39', '2023-12-17 22:52:39'),
(33, 14, 3, 1, 1, 'Cha Chai', '50', '580', 'upload/product/product_img/1786073479759298.jpg', 'upload/product/product_img/1786073479832187.jpg', 'Product\'s detail: Height: 5.5 cm\r\nDiameter: 7.5 cm\r\nProduct\'s color: Pastel Pink', '2023-12-23 05:53:25', '2023-12-23 05:53:25'),
(34, 14, 7, NULL, 1, 'Christmassy', '50', '400', 'upload/product/product_img/1785552896115465.jpg', 'upload/product/product_img/1785552896350011.jpg', 'Product\'s detail: Height: 6 cm\r\nDiameter: 8 cm\r\nProduct\'s color: Deep Green', '2023-12-17 22:58:58', '2023-12-17 22:58:58'),
(35, 14, 7, NULL, 1, 'Clouds and Color', '50', '650', 'upload/product/product_img/1785552859111362.jpg', 'upload/product/product_img/1785552859382469.jpg', 'Product\'s detail: Height: 7 cm\r\nDiameter: 10 cm\r\n Product\'s color: Light Blue', '2023-12-17 22:58:22', '2023-12-17 22:58:22'),
(36, 14, 7, NULL, 1, 'Coffee', '50', '500', 'upload/product/product_img/1785552808859989.jpg', 'upload/product/product_img/1785552809089050.jpg', 'Product\'s detail: Height: 6 cm\r\nDiameter: 8 cm\r\nProduct\'s color: Coffee Brown', '2023-12-17 22:57:34', '2023-12-17 22:57:34'),
(37, 14, 7, NULL, 1, 'Cookie Cupcake', '50', '560', 'upload/product/product_img/1785552785116127.jpg', 'upload/product/product_img/1785552785399143.jpg', 'Product\'s detail: Height: 6 cm\r\nDiameter: 10 cm\r\nProduct\'s color: Baby Pink', '2023-12-17 22:57:12', '2023-12-17 22:57:12'),
(38, 14, 7, NULL, 1, 'Dear Deer', '50', '650', 'upload/product/product_img/1785553444783796.jpg', 'upload/product/product_img/1785553445071840.jpg', 'Product\'s detail: Height: 9 cm\r\nDiameter: 10 cm\r\nProduct\'s color: Matte Black color', '2023-12-17 23:07:41', '2023-12-17 23:07:41'),
(39, 14, 7, NULL, 1, 'Dhele Dei?', '50', '560', 'upload/product/product_img/1785552835216691.jpg', 'upload/product/product_img/1785552835457026.jpg', 'Product\'s detail: Height: 6 cm\r\nDiameter: 10 cm\r\nProduct\'s color: Yellow', '2023-12-17 22:58:00', '2023-12-17 22:58:00'),
(40, 14, 7, NULL, 1, 'Dream Catcher', '50', '650', 'upload/product/product_img/1785552738972549.jpg', 'upload/product/product_img/1785552739259652.jpg', 'Product\'s detail: Height: 11 cm\r\nDiameter: 9 cm\r\nProduct\'s color: Baby Pink', '2023-12-17 22:56:28', '2023-12-17 22:56:28'),
(41, 14, 7, NULL, 1, 'Fashion Designer', '50', '650', 'upload/product/product_img/1785552692302588.jpg', 'upload/product/product_img/1785552692566989.jpg', 'Product\'s detail: Height: 11 cm\r\nDiameter: 9 cm\r\nProduct\'s color: Glossy Orange', '2023-12-17 22:55:43', '2023-12-17 22:55:43'),
(42, 14, 7, NULL, 1, 'Flamingo', '50', '650', 'upload/product/product_img/1785552644361524.jpg', 'upload/product/product_img/1785552644597071.jpg', 'Product\'s detail: Height: 11 cm\r\nDiameter: 9 cm\r\nProduct\'s color: Off White', '2023-12-17 22:54:58', '2023-12-17 22:54:58'),
(43, 14, 7, NULL, 1, 'FRIENDS', '50', '580', 'upload/product/product_img/1785552592272838.jpg', 'upload/product/product_img/1785552592563325.jpg', 'Product\'s detail: Height: 6 cm\r\nDiameter: 10 cm\r\nProduct\'s color: Lilac', '2023-12-17 22:54:08', '2023-12-17 22:54:08'),
(44, 14, 7, NULL, 1, 'Golden Fern', '50', '500', 'upload/product/product_img/1785551430233935.jpg', 'upload/product/product_img/1785551430490383.jpg', 'Product\'s detail: Height: 8 cm\r\nDiameter: 7.5 cm\r\nProduct\'s color: Lemon green', '2023-12-17 22:35:40', '2023-12-17 22:35:40'),
(45, 14, 7, NULL, 1, 'Golden Window', '50', '650', 'upload/product/product_img/1785551523426839.jpg', 'upload/product/product_img/1785551523662727.jpg', 'Product\'s detail: Height: 11 cm\r\nDiameter: 9 cm\r\nProduct\'s color: Off white', '2023-12-17 22:37:09', '2023-12-17 22:37:09'),
(46, 14, 7, NULL, 1, 'Goldfish', '50', '650', 'upload/product/product_img/1785551554951529.jpg', 'upload/product/product_img/1785551555184663.jpg', 'Product\'s detail: Height: 9 cm\r\nDiameter: 8 cm\r\nProduct\'s color: Sky Blue', '2023-12-17 22:37:39', '2023-12-17 22:37:39'),
(47, 14, 7, NULL, 1, 'Horse', '50', '650', 'upload/product/product_img/1785551606907161.jpg', 'upload/product/product_img/1785551607142119.jpg', 'Product\'s detail: Height: 7 cm\r\nDiameter: 10 cm\r\nProduct\'s color: Ash', '2023-12-17 22:38:28', '2023-12-17 22:38:28'),
(48, 14, 7, NULL, 1, 'Howl of the wolf', '50', '600', 'upload/product/product_img/1785551648836133.jpg', 'upload/product/product_img/1785551649106314.jpg', 'Product\'s detail: Height: 10.5 cm\r\nDiameter: 8 cm\r\nProduct\'s color: Seaside Blue', '2023-12-17 22:39:08', '2023-12-17 22:39:08'),
(49, 14, 7, NULL, 1, 'In Love', '50', '650', 'upload/product/product_img/1785551697757063.jpg', 'upload/product/product_img/1785551698041444.jpg', 'Product\'s detail: Height: 11 cm\r\nDiameter: 9 cm\r\nProduct\'s color: Off White color🤍', '2023-12-17 22:39:55', '2023-12-17 22:39:55'),
(50, 14, 7, NULL, 1, 'Jobaa', '50', '580', 'upload/product/product_img/1785551748648216.jpg', 'upload/product/product_img/1785551748897746.jpg', 'Product\'s detail: Height: 8 cm\r\nDiameter: 7.5 cm\r\n Product\'s color: Deep green', '2023-12-17 22:40:43', '2023-12-17 22:40:43'),
(51, 14, 7, NULL, 1, 'Kath Golap', '50', '650', 'upload/product/product_img/1785551779461871.jpg', 'upload/product/product_img/1785551779697737.jpg', 'Product\'s detail: Height: 11 cm\r\nDiameter: 9 cm\r\nProduct\'s color: Yellow', '2023-12-17 22:41:13', '2023-12-17 22:41:13'),
(52, 14, 7, NULL, 1, 'Lion King', '50', '700', 'upload/product/product_img/1785551812517876.png', 'upload/product/product_img/1785551812983527.jpg', 'Product\'s detail: Height: 9 cm\r\nDiameter: 10 cm\r\n Product\'s color: Matte Black color', '2023-12-17 22:41:44', '2023-12-17 22:41:44'),
(53, 14, 7, NULL, 1, 'Lotus (pink) Mug', '50', '700', 'upload/product/product_img/1785551846087747.jpg', 'upload/product/product_img/1785551846323910.jpg', 'Product\'s detail: Height: 9 cm\r\nDiameter: 10 cm\r\n Product\'s color: Peach Pink', '2023-12-17 22:42:16', '2023-12-17 22:42:16'),
(54, 14, 7, NULL, 1, 'Makeover', '50', '650', 'upload/product/product_img/1785551875670553.jpg', 'upload/product/product_img/1785551875926397.jpg', 'Product\'s detail: Height: 11 cm\r\nDiameter: 9 cm\r\nProduct\'s color: Baby Pink', '2023-12-17 22:42:44', '2023-12-17 22:42:44'),
(55, 14, 7, NULL, 1, 'Mugs For Baba', '50', '550', 'upload/product/product_img/1785551900728619.jpg', 'upload/product/product_img/1785551900966331.jpg', 'Product\'s detail : Height: 7 cm\r\nDiameter: 7.5 cm\r\n Product\'s color: Black', '2023-12-17 22:43:08', '2023-12-17 22:43:08'),
(56, 14, 7, NULL, 1, 'Mugs For Maa', '50', '550', 'upload/product/product_img/1785551956855399.jpg', 'upload/product/product_img/1785551957155668.jpg', 'Product\'s detail : Height: 7 cm\r\nDiameter: 7.5 cm\r\n Product\'s color:  Pink', '2023-12-17 22:44:02', '2023-12-17 22:44:02'),
(57, 14, 7, NULL, 1, 'Orchid Mug', '50', '580', 'upload/product/product_img/1785551984453270.jpg', 'upload/product/product_img/1785551984715854.jpg', 'Product\'s detail : Height: 8 cm\r\nDiameter: 7.5 cm\r\n Product\'s color: Yellow 💛', '2023-12-17 22:44:28', '2023-12-17 22:44:28'),
(58, 14, 7, NULL, 1, 'owl', '50', '400', 'upload/product/product_img/1785552009694810.jpg', 'upload/product/product_img/1785552009928678.jpg', 'Product\'s detail: Height: 6 cm\r\nDiameter: 8 cm\r\nProduct\'s color: Red', '2023-12-17 22:44:52', '2023-12-17 22:44:52'),
(59, 14, 7, NULL, 1, 'Panda', '50', '900', 'upload/product/product_img/1785552038162911.jpg', 'upload/product/product_img/1785552038408399.jpg', 'Product\'s detail: Height: 11 cm\r\nDiameter: 9 cm\r\nProduct\'s color: Tiffany blue', '2023-12-17 22:45:19', '2023-12-17 22:45:19'),
(60, 14, 7, NULL, 1, 'Peacock Feather', '50', '650', 'upload/product/product_img/1785552441627597.jpg', 'upload/product/product_img/1785552441886036.jpg', 'Product\'s detail: Height: 11 cm\r\nDiameter: 9 cm\r\nProduct\'s color: Matte Navy Blue', '2023-12-17 22:51:44', '2023-12-17 22:51:44'),
(61, 14, 7, NULL, 1, 'Pegasus', '50', '600', 'upload/product/product_img/1785552100985552.jpg', 'upload/product/product_img/1785552101235930.jpg', 'Product\'s detail: Height: 9 cm\r\nDiameter: 10 cm\r\nProduct\'s color: Matte Black color', '2023-12-17 22:46:19', '2023-12-17 22:46:19'),
(62, 14, 7, NULL, 1, 'Pera Nai Chill Mug', '50', '700', 'upload/product/product_img/1785552137147557.jpg', 'upload/product/product_img/1785552137458292.jpg', 'Product\'s detail: Height: 7 cm\r\nDiameter: 10 cm\r\nProduct\'s color: Peach Pink', '2023-12-17 22:46:54', '2023-12-17 22:46:54'),
(63, 14, 7, NULL, 1, 'Promise', '50', '650', 'upload/product/product_img/1785552178710138.jpg', 'upload/product/product_img/1785552178963861.jpg', 'Product\'s detail : Height: 9 cm\r\nDiameter: 8 cm\r\nProduct\'s color: Black See less', '2023-12-17 22:47:33', '2023-12-17 22:47:33'),
(64, 14, 7, NULL, 1, 'Red Rose', '50', '650', 'upload/product/product_img/1785552213994967.jpg', 'upload/product/product_img/1785552214234074.jpg', 'Product\'s detail: Height: 9.5 cm\r\nDiameter: 8 cm\r\n Product\'s color: Matte Baby Pink', '2023-12-17 22:48:07', '2023-12-17 22:48:07'),
(65, 14, 7, NULL, 1, 'Royal Frame Mug', '50', '600', 'upload/product/product_img/1785552242413815.jpg', 'upload/product/product_img/1785552242647090.jpg', 'Product\'s detail: Height: 9 cm\r\nDiameter: 10 cm\r\n Product\'s color: Maroon Red', '2023-12-17 22:48:34', '2023-12-17 22:48:34'),
(66, 14, 7, NULL, 1, 'Sea Shells', '50', '500', 'upload/product/product_img/1785552271050411.jpg', 'upload/product/product_img/1785552271302344.jpg', 'Product\'s detail: Height: 6 cm\r\nDiameter: 8 cm\r\nProduct\'s color: Pale Blue', '2023-12-17 22:49:02', '2023-12-17 22:49:02'),
(67, 14, 7, NULL, 1, 'Santa', '50', '450', 'upload/product/product_img/1785552308402554.jpg', 'upload/product/product_img/1785552308654125.jpg', 'Product\'s detail : Height: 8 cm\r\nDiameter: 7.5 cm\r\nProduct\'s color: Red❤', '2023-12-17 22:49:37', '2023-12-17 22:49:37'),
(68, 14, 7, NULL, 1, 'Stuck On You Mug', '50', '650', 'upload/product/product_img/1785553284189815.jpg', 'upload/product/product_img/1785553284425616.jpg', 'Product\'s detail: Height: 11 cm\r\nDiameter: 9 cm\r\nProduct\'s color: Ash', '2023-12-17 23:05:08', '2023-12-17 23:05:08'),
(69, 14, 7, NULL, 1, 'Sunflower Mug', '50', '650', 'upload/product/product_img/1785552335812296.jpg', 'upload/product/product_img/1785552336072039.jpg', 'Product\'s detail: Height: 11 cm\r\nDiameter: 9 cm\r\nProduct\'s color: Black', '2023-12-17 22:50:03', '2023-12-17 22:50:03'),
(70, 14, 7, NULL, 1, 'Sweet Tea Mug', '50', '650', 'upload/product/product_img/1785552359795624.jpg', 'upload/product/product_img/1785552360035916.jpg', 'Product\'s detail: Height: 7 cm\r\nDiameter: 10 cm\r\nProduct\'s color: Baby Pink', '2023-12-17 22:50:26', '2023-12-17 22:50:26'),
(71, 14, 7, NULL, 1, 'Swords and Shield', '50', '650', 'upload/product/product_img/1785552408243272.jpg', 'upload/product/product_img/1785552408520464.jpg', 'Product\'s detail: Height: 9 cm\r\nDiameter: 10 cm\r\nProduct\'s color: Matte Black color🖤', '2023-12-17 22:51:12', '2023-12-17 22:51:12'),
(72, 14, 7, NULL, 1, 'Teddy mug', '50', '900', 'upload/product/product_img/1785552471367671.jpg', 'upload/product/product_img/1785552471601761.jpg', 'Product\'s detail: Height: 10.5 cm\r\nDiameter: 8 cm\r\nProduct\'s color: Baby Pink', '2023-12-17 22:52:13', '2023-12-17 22:52:13'),
(73, 14, 7, NULL, 1, 'Vase and Flowers', '50', '500', 'upload/product/product_img/1785552522539003.jpg', 'upload/product/product_img/1785552522833099.jpg', 'Product\'s detail : Height: 8 cm\r\nDiameter: 7.5 cm\r\nProduct\'s color: Antique Brass', '2023-12-17 22:53:01', '2023-12-17 22:53:01'),
(74, 14, 7, NULL, 1, 'Water lily (white)', '50', '700', 'upload/product/product_img/1785553157920289.jpg', 'upload/product/product_img/1785553158154408.jpg', 'Product\'s detail: Height: 9 cm\r\nDiameter: 10 cm\r\nProduct\'s color: Peach Pink', '2023-12-17 23:03:07', '2023-12-17 23:03:07'),
(75, 14, 7, NULL, 1, 'Love', '50', '500', 'upload/product/product_img/1785552548123529.jpg', 'upload/product/product_img/1785552548428043.jpg', 'Product\'s detail : Height: 8 cm\r\nDiameter: 7.5 cm\r\nProduct\'s color: Red', '2023-12-17 22:53:26', '2023-12-17 22:53:26'),
(77, 19, 3, NULL, 1, 'Cane Hanging Lamp', '50', '1250', 'upload/product/product_img/1785553813841470.jpg', 'upload/product/product_img/1785553814171720.jpg', 'Ball Size: 8 inch', '2023-12-17 23:13:33', '2023-12-17 23:13:33'),
(78, 17, 3, NULL, 1, 'Baby Taxi Green', '50', '670', 'upload/product/product_img/1785553595835302.jpg', 'upload/product/product_img/1785553596139122.jpg', 'Measurements: Length: 19cm Width: 9.5 cm (medium size)\r\nMaterial: Iron and Tin', '2023-12-17 23:10:05', '2023-12-17 23:10:05'),
(79, 17, 3, NULL, 1, 'Rickshaw Green', '50', '450', 'upload/product/product_img/1785553552301159.jpg', 'upload/product/product_img/1785553552602043.jpg', 'Measurements: Length: 16cm Width: 8cm (medium size)\r\nMaterial: Iron and Tin', '2023-12-17 23:09:23', '2023-12-17 23:09:23'),
(80, 16, 3, NULL, 1, 'পাটের ল্যাম্প (Jute Rope Hanging Lamp with Leaf)', '50', '550', 'upload/product/product_img/1785553881439353.jpg', 'upload/product/product_img/1785553881716260.jpg', 'Material: Jute', '2023-12-17 23:14:37', '2023-12-17 23:14:37'),
(81, 17, 3, NULL, 1, 'Combo of 3 (Rikshaw, Van and Baby Taxi) - Medium Size', '50', '1500', 'upload/product/product_img/1784267286687757.jpg', 'upload/product/product_img/1784267286999826.jpg', 'Item\'s details:\r\n1. Rickshaw\r\nLength: 16cm\r\nWidth: 8cm\r\n\r\n2. Van\r\nLength: 17.5 cm\r\nWidth: 8.5 cm\r\n\r\n3. Baby Taxi\r\nLength: 19cm\r\nWidth: 9.5 cm', '2023-12-03 18:24:45', NULL),
(82, 17, 3, NULL, 1, 'Combo of 4 (Rikshaw, Van Baby Taxi and Dak Baksho) - Medium Size', '50', '2000', 'upload/product/product_img/1784267437788800.jpg', 'upload/product/product_img/1784267438024194.jpg', 'Item\'s details:\r\n1. Rickshaw\r\nLength: 16cm\r\nWidth: 8cm\r\n\r\n2. Van\r\nLength: 17.5 cm\r\nWidth: 8.5 cm\r\n\r\n3. Baby Taxi\r\nLength: 19cm\r\nWidth: 9.5 cm\r\n\r\n4. Dak Baksho: 499 Tk\r\nLength: 14cm\r\nWidth: 7cm\r\nMaterial: Iron and Tin', '2023-12-03 18:27:09', NULL),
(83, 17, 3, NULL, 1, 'Miniatures Combo of 5 (Rikshaw, Van, Baby Taxi, Thela Gari and Gorur Gari) - Medium Size', '50', '2900', 'upload/product/product_img/1784267628487456.jpg', 'upload/product/product_img/1784267628711535.jpg', 'Item\'s details:\r\n1. Rickshaw\r\nLength: 16cm\r\nWidth: 8cm\r\n\r\n2. Van\r\nLength: 17.5 cm\r\nWidth: 8.5 cm\r\n\r\n3. Baby Taxi\r\nLength: 19cm\r\nWidth: 9.5 cm\r\n\r\n4. Gorur Gari\r\nLength: 24 cm\r\n\r\n5. Thela Gari\r\nLength: 17.5 cm\r\nWidth: 8 cm\r\n\r\nMaterial: Iron', '2023-12-03 18:30:11', NULL),
(84, 17, 3, NULL, 1, 'ডাক বাক্স ( Letter Box)', '50', '499/pcs', 'upload/product/product_img/1784267815746442.jpg', 'upload/product/product_img/1784267815955781.jpg', 'Product\'s detail: Height: 6 cm\r\nDiameter: 8 cm\r\n Product\'s color: Red, Blue and Yellow\r\nMaterial: Meta', '2023-12-03 18:33:09', NULL),
(85, 17, 3, NULL, 1, 'Rickshaw 3 pc combo', '100', '1300 (3 pcs)', 'upload/product/product_img/1784267932350630.jpg', 'upload/product/product_img/1784267932563758.jpg', 'Measurements: Length: 16cm Width: 8cm\r\nMaterial: Iron and Tin', '2023-12-03 18:35:01', NULL),
(86, 14, 7, NULL, 1, 'Coffee Chai', '50', '580', 'upload/product/product_img/1785553411217107.jpg', 'upload/product/product_img/1785553411508714.jpg', 'Product\'s detail: Height: 6 cm\r\nDiameter: 10 cm\r\n  Product\'s color: Light Pastel Green', '2023-12-17 23:07:09', '2023-12-17 23:07:09'),
(100, 18, 4, NULL, 1, 'Dove planter(Green)', '100', '850', 'upload/product/product_img/1785555158998554.jpg', 'upload/product/product_img/1785555159254155.jpg', 'name: Dove Planter \r\nSize: 8.5*5*6\r\nMaterial: Clay', '2023-12-17 23:34:56', NULL),
(101, 18, 4, NULL, 1, 'Dove planter(pink)', '100', '850', 'upload/product/product_img/1785555241807619.jpg', 'upload/product/product_img/1785555242045853.jpg', 'name: Dove Planter \r\nSize: 8.5*5*6\r\nMaterial: Clay', '2023-12-17 23:36:15', NULL),
(102, 18, 4, NULL, 1, 'Hand painted Plant Pot (Green)', '100', '850', 'upload/product/product_img/1785555361346056.jpg', 'upload/product/product_img/1785555361608166.jpg', 'name: Owl Planter \r\nSize : 5.5*6*4 (Big Size) \r\nMaterial : Clay', '2023-12-17 23:38:09', NULL),
(103, 18, 4, NULL, 1, 'Hand painted Plant Pot (pink)', '100', '850', 'upload/product/product_img/1785555445821670.jpg', 'upload/product/product_img/1785555446077262.jpg', 'name: Owl Planter \r\nSize :5.5*6*4 (Big Size) \r\nMaterial: Clay', '2023-12-17 23:39:29', NULL),
(104, 18, 4, NULL, 1, 'Hand painted Plant Pot (yellow)', '100', '650', 'upload/product/product_img/1785555575471818.jpg', 'upload/product/product_img/1785555575810094.jpg', 'name: Owl Planter \r\nSize :4*4.4*4  (Middle size) \r\nMaterial : Clay', '2023-12-17 23:41:33', NULL),
(105, 18, 4, NULL, 1, 'horse  green', '100', '850', 'upload/product/product_img/1785555736400146.jpg', 'upload/product/product_img/1785555736648372.jpg', 'name: Horse Planter \r\nSize: 8.5*5*6\r\nMaterial: Clay', '2023-12-17 23:44:06', NULL),
(106, 18, 4, NULL, 1, 'horse planter', '100', '850', 'upload/product/product_img/1785555814867604.jpg', 'upload/product/product_img/1785555815126773.jpg', 'name: Horse Planter \r\nSize: 8.5*5*6\r\nMaterial: Clay', '2023-12-17 23:45:21', NULL),
(107, 18, 4, NULL, 1, 'Love of mother pottery', '100', '200', 'upload/product/product_img/1785555891583613.jpg', 'upload/product/product_img/1785555891834183.jpg', 'name: Couple Doll With Baby \r\nSize:6.7*2.5 \r\nMaterial: Clay', '2023-12-17 23:46:34', NULL),
(108, 18, 4, NULL, 1, 'Couple Doll', '100', '300', 'upload/product/product_img/1785555969581300.jpg', 'upload/product/product_img/1785555969827552.jpg', 'name: couple Doll \r\nSize:6.7*2.5 \r\nMaterial: Clay', '2023-12-17 23:47:49', NULL),
(109, 18, 4, NULL, 1, 'Sea shell', '100', '850', 'upload/product/product_img/1785556041093528.jpg', 'upload/product/product_img/1785556041405545.jpg', 'name: sea shell \r\nSize:5.1*5*2 \r\nMaterial: Clay', '2023-12-17 23:48:57', NULL),
(110, 18, 4, NULL, 1, 'Tortoise planter', '100', '250', 'upload/product/product_img/1785556109540072.jpg', 'upload/product/product_img/1785556109795384.jpg', 'name: turtle Planter \r\nSize: 4.5*3*2.5\r\nMaterial: Clay', '2023-12-17 23:50:02', NULL),
(111, 23, 0, NULL, 1, 'Ilamd Round', '50', '1150', 'upload/product/product_img/1785892582043911.jpg', 'upload/product/product_img/1785892582315167.jpg', 'Size: Round 10 Inch', '2023-12-21 16:58:07', NULL),
(112, 23, 0, NULL, 1, 'Sea Beach Tray Blue (2 Mugs)', '50', '3999', 'upload/product/product_img/1785894646991021.jpg', 'upload/product/product_img/1785894647245537.jpg', 'Tray length 12 \r\nWidth 16', '2023-12-21 17:30:57', NULL),
(113, 23, 0, NULL, 1, 'sea Beach Tray', '50', '2650', 'upload/product/product_img/1785894776741700.jpg', 'upload/product/product_img/1785894776998651.jpg', 'Length 12\r\nWidth 16', '2023-12-21 17:33:00', NULL),
(114, 23, 0, NULL, 1, 'Sea Beach Canvas (Oval)', '50', '2150', 'upload/product/product_img/1785895194633982.jpg', 'upload/product/product_img/1785895194959460.jpg', 'Size: 12 inch * 10 inch', '2023-12-21 17:39:39', NULL),
(115, 20, 0, NULL, 1, 'A Royal Canvas (3d Painting on Canvas with Wooden Stand)', '50', '800', 'upload/product/product_img/1785895366208112.jpg', 'upload/product/product_img/1785895366455351.jpg', 'Product\'s detail: 4 inch by 6 inch', '2023-12-21 17:42:23', NULL),
(116, 20, 0, NULL, 1, 'Swan in Love (3d Painting on Canvas with Wooden Stand)', '50', '750', 'upload/product/product_img/1785895456247102.jpg', 'upload/product/product_img/1785895456515094.jpg', 'Product\'s detail: 6 inch round Canvas', '2023-12-21 17:43:48', NULL),
(117, 21, 3, NULL, 1, 'Alpona', '100', '450', 'upload/product/product_img/1785897032093540.jpg', 'upload/product/product_img/1785897032396171.jpg', 'Size: Regular', '2023-12-21 18:08:51', '2023-12-21 18:08:51'),
(118, 21, 0, NULL, 1, 'Banglar Janbahon', '100', '500', 'upload/product/product_img/1785896280105163.jpg', 'upload/product/product_img/1785896280407123.jpg', 'Size: Regular', '2023-12-21 17:56:54', NULL),
(119, 21, 0, NULL, 1, 'Boishakh', '100', '500', 'upload/product/product_img/1785896345844583.jpg', 'upload/product/product_img/1785896346154492.jpg', 'Size: Regular', '2023-12-21 17:57:57', NULL),
(120, 21, 0, NULL, 1, 'Khelbe Tiger', '100', '450', 'upload/product/product_img/1785896441484816.jpg', 'upload/product/product_img/1785896441723159.jpg', 'Size: Regular', '2023-12-21 17:59:28', NULL),
(121, 21, 3, NULL, 1, 'Lotus', '100', '450', 'upload/product/product_img/1785896995838905.jpg', 'upload/product/product_img/1785896996103506.jpg', 'Size: Regular', '2023-12-21 18:08:17', '2023-12-21 18:08:17'),
(122, 21, 0, NULL, 1, 'Lotus for kids', '100', '450', 'upload/product/product_img/1785896883204221.jpg', 'upload/product/product_img/1785896883451241.jpg', 'Size: Regular', '2023-12-21 18:06:29', NULL),
(123, 21, 0, NULL, 1, 'Moyuri', '100', '600', 'upload/product/product_img/1785896955044950.jpg', 'upload/product/product_img/1785896955326894.jpg', 'Size: Regular', '2023-12-21 18:07:38', NULL),
(124, 21, 0, NULL, 1, 'Musical', '100', '600', 'upload/product/product_img/1785897162109925.jpg', 'upload/product/product_img/1785897162396514.jpg', 'Size: Regular', '2023-12-21 18:10:55', NULL),
(125, 21, 0, NULL, 1, 'New York Vibes', '100', '650', 'upload/product/product_img/1785897226312562.jpg', 'upload/product/product_img/1785897226558911.jpg', 'Size:Regular', '2023-12-21 18:11:56', NULL),
(126, 21, 0, NULL, 1, 'Sea Beach', '100', '650', 'upload/product/product_img/1785897292311247.jpg', 'upload/product/product_img/1785897292581449.jpg', 'Size :Regular', '2023-12-21 18:12:59', NULL),
(127, 22, 0, NULL, 1, 'Seeking Freedom', '100', '1050', 'upload/product/product_img/1785897378727767.jpg', 'upload/product/product_img/1785897379043481.jpg', 'Product\'s detail: Height: 5.2 inch\r\nBreadth: 5.2 inch\r\n  Wire color: Silver', '2023-12-21 18:14:22', NULL),
(128, 14, 3, 0, 1, 'Bonsai On Rock', '100', '650', 'upload/product/product_img/1786097803964658.jpg', 'upload/product/product_img/1786097804058245.jpg', 'Size : Hight  6.3 Inch', '2024-01-14 14:20:13', '2024-01-14 14:20:13'),
(132, 14, 3, 0, 1, 'test', '100', '10099', 'upload/product/product_img/1788099717085344.jpg', 'upload/product/product_img/1788099717234423.jpg', 'zubair bin', '2024-01-14 14:39:59', '2024-01-14 14:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `Sub_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `Sub_category`, `status`, `created_at`, `updated_at`) VALUES
(3, 12, 'Miniatures', 0, NULL, NULL),
(4, 12, 'Pottery', 0, NULL, NULL),
(6, 14, 'Matte Black', 0, NULL, NULL),
(7, 14, 'Colorful Mugs', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `role` enum('admin','vendor','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `photo`, `phone`, `address`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin user', 'admin', 'admin@gmail.com', NULL, '$2y$10$HcpFTlAOZEGj.4BOSbe6TuW3gQF3Jpvz7vVTcA7N/z2NzJjvI8hnS', NULL, NULL, NULL, 'admin', 'active', NULL, NULL, NULL),
(2, 'vendor user', 'vendor', 'vendor@gamil.com', NULL, '$2y$10$zFJBPtOVvn2RPl0R9dM45uIyH64y5BdKa/AayDiBPVTjPE6tTem.K', NULL, NULL, NULL, 'vendor', 'active', NULL, NULL, NULL),
(3, 'user', 'user', 'user@gamil.com', NULL, '$2y$10$0U0yP28GgQmtIXRuJOjmhO/fYjiEIAgCSagukuVVtpMXdRgkTcb0G', NULL, NULL, NULL, 'user', 'active', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
