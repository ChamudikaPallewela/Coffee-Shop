-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 05:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `adtodcarts`
--

CREATE TABLE `adtodcarts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `food_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `foodtitle` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `total_price` int(255) NOT NULL,
  `branch_id` int(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kandy', NULL, NULL),
(2, 'Colombo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foodtitle` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `foodtitle`, `image`, `description`, `category`, `created_at`, `updated_at`) VALUES
(17, 'Affogato', '1695800129.jpg', 'Coffee, ice cream, espresso, dessert.', 'Beverages', '2023-09-27 02:05:29', '2023-09-27 02:05:29'),
(18, 'Ristretto', '1695800235.jpeg', 'Short, strong, concentrated espresso shot.', 'Beverages', '2023-09-27 02:07:15', '2023-09-27 02:07:15'),
(19, 'Piccolo Latte', '1695800655.png', 'Small, creamy, espresso-based coffee drink.', 'Beverages', '2023-09-27 02:14:15', '2023-09-27 02:14:15'),
(20, 'latte', '1695800740.jpg', 'Mild, creamy, espresso and steamed milk.', 'Beverages', '2023-09-27 02:15:40', '2023-09-27 02:15:40'),
(22, 'mocha latte', '1695826232.jpg', 'Mocha-flavored, espresso, steamed milk blend.', 'Beverages', '2023-09-27 09:20:32', '2023-09-27 09:20:32'),
(23, 'Espresso', '1695826369.jpg', 'Intense, concentrated, Italian coffee shot.', 'Beverages', '2023-09-27 09:22:49', '2023-09-27 09:22:49'),
(24, 'Americano', '1695826440.jpg', 'Diluted, black, espresso-based coffee drink.', 'Beverages', '2023-09-27 09:24:00', '2023-09-27 09:24:00'),
(25, 'Cappuccino', '1695826522.jpg', 'Equal parts espresso, steamed milk, foam.', 'Beverages', '2023-09-27 09:25:22', '2023-09-27 09:25:22'),
(26, 'Chicken Tamales', '1695826884.jpg', 'Steamed, masa, filling, wrapped, flavorful.', 'food', '2023-09-27 09:31:24', '2023-09-27 09:31:24'),
(27, 'Chicken Burrito', '1695826994.jpg', 'Chicken, rice, beans, tortilla, flavorful. 3 pieces per meal', 'food', '2023-09-27 09:33:14', '2023-09-27 09:33:14'),
(28, 'Bagel with Cream Cheese', '1695827311.jpg', 'Toasted, chewy, bagel, creamy, spread.', 'food', '2023-09-27 09:38:31', '2023-09-27 09:38:31'),
(29, 'Cappuccino', '1695827415.jpg', 'Equal parts espresso, steamed milk, foam.', 'food', '2023-09-27 09:40:15', '2023-09-27 09:40:15'),
(30, 'Wraps', '1695827566.jpg', 'Folded, tortilla, fillings, portable, flavorful.2 pieces per portion. vegetarian', 'food', '2023-09-27 09:42:46', '2023-09-27 09:42:46'),
(31, 'Lasagna', '1695827678.jpg', 'Layered, pasta, cheese, sauce, baked.', 'food', '2023-09-27 09:44:38', '2023-09-27 09:44:38'),
(32, 'Molten chocolate cake', '1695827965.jpg', 'Molten, chocolate, gooey, decadent, dessert.', 'Dessert', '2023-09-27 09:49:25', '2023-09-27 09:49:25'),
(33, 'fudgy brownie', '1695828057.jpg', 'Rich, chocolatey, dense, indulgent, dessert.', 'Dessert', '2023-09-27 09:50:57', '2023-09-27 09:50:57'),
(34, 'chocolates cake', '1695828125.jpg', 'Moist, cocoa-rich, layered, decadent, dessert.', 'Dessert', '2023-09-27 09:52:05', '2023-09-27 09:52:05'),
(35, 'cookies', '1695828201.jpg', 'Baked, sweet, chewy, homemade, treats.', 'Dessert', '2023-09-27 09:53:21', '2023-09-27 09:53:21'),
(36, 'cheese cake', '1695828277.jpg', 'Creamy, cheesecake, graham crust, dessert.', 'Dessert', '2023-09-27 09:54:37', '2023-09-27 09:54:37'),
(37, 'red velvet cake', '1695828352.jpg', 'Velvety, cocoa, buttermilk, dessert, crimson.', 'Dessert', '2023-09-27 09:55:52', '2023-09-27 09:55:52'),
(38, 'croissants', '1695828417.jpg', 'Flaky, buttery, pastry, crescent-shaped, delicious.', 'Dessert', '2023-09-27 09:56:57', '2023-09-27 09:56:57'),
(39, 'muffins', '1695828485.jpg', 'Bakery-fresh, moist, portable, flavors, breakfast.', 'Dessert', '2023-09-27 09:58:05', '2023-09-27 09:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `foodcategories`
--

CREATE TABLE `foodcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foodchefs`
--

CREATE TABLE `foodchefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_attributes`
--

CREATE TABLE `food_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `food_id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quty` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_attributes`
--

INSERT INTO `food_attributes` (`id`, `food_id`, `size`, `price`, `quty`, `created_at`, `updated_at`) VALUES
(30, 17, 'Small', '690', '17', '2023-09-27 02:05:29', '2023-09-27 02:05:29'),
(31, 17, 'Large', '1250', '8', '2023-09-27 02:05:29', '2023-09-27 02:05:29'),
(32, 18, 'Large', '680', '8', '2023-09-27 02:07:15', '2023-09-27 02:07:15'),
(33, 19, 'Short', '480', '20', '2023-09-27 02:14:15', '2023-09-27 02:14:15'),
(34, 19, 'Large', '950', '20', '2023-09-27 02:14:15', '2023-09-27 02:14:15'),
(35, 20, 'Large', '570', '50', '2023-09-27 02:15:40', '2023-09-27 02:15:40'),
(37, 22, 'medium', '250', '15', '2023-09-27 09:20:33', '2023-09-27 09:20:33'),
(38, 22, 'Large', '500', '15', '2023-09-27 09:20:33', '2023-09-27 09:20:33'),
(39, 23, 'small', '200', '40', '2023-09-27 09:22:49', '2023-09-27 09:22:49'),
(40, 24, 'medium', '500', '15', '2023-09-27 09:24:00', '2023-09-27 09:24:00'),
(41, 24, 'Large', '1000', '20', '2023-09-27 09:24:00', '2023-09-27 09:24:00'),
(42, 25, 'small', '15', '350', '2023-09-27 09:25:22', '2023-09-27 09:25:22'),
(43, 25, 'medium', '15', '700', '2023-09-27 09:25:22', '2023-09-27 09:25:22'),
(44, 25, 'Large', '1400', '30', '2023-09-27 09:25:22', '2023-09-27 09:25:22'),
(45, 26, 'medium', '650', '30', '2023-09-27 09:31:24', '2023-09-27 09:31:24'),
(46, 27, 'medium', '500', '40', '2023-09-27 09:33:14', '2023-09-27 09:33:14'),
(47, 28, 'medium', '350', '60', '2023-09-27 09:38:32', '2023-09-27 09:38:32'),
(48, 29, 'medium', '400', '30', '2023-09-27 09:40:15', '2023-09-27 09:40:15'),
(49, 30, 'medium', '500', '60', '2023-09-27 09:42:46', '2023-09-27 09:42:46'),
(50, 31, 'Large', '500', '10', '2023-09-27 09:44:38', '2023-09-27 09:44:38'),
(51, 32, 'small', '350', '40', '2023-09-27 09:49:25', '2023-09-27 09:49:25'),
(52, 33, 'small', '500', '30', '2023-09-27 09:50:57', '2023-09-27 09:50:57'),
(53, 34, 'medium', '300', '20', '2023-09-27 09:52:05', '2023-09-27 09:52:05'),
(54, 35, 'Large', '400', '40', '2023-09-27 09:53:21', '2023-09-27 09:53:21'),
(55, 36, 'Large', '700', '20', '2023-09-27 09:54:37', '2023-09-27 09:54:37'),
(56, 37, 'Large', '400', '40', '2023-09-27 09:55:52', '2023-09-27 09:55:52'),
(57, 38, 'medium', '500', '13', '2023-09-27 09:56:57', '2023-09-27 09:56:57'),
(58, 39, 'Large', '500', '50', '2023-09-27 09:58:05', '2023-09-27 09:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `food_branch`
--

CREATE TABLE `food_branch` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `food_id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_branch`
--

INSERT INTO `food_branch` (`id`, `food_id`, `branch_id`, `quantity`, `created_at`, `updated_at`) VALUES
(32, 17, 1, 15, '2023-09-27 02:05:29', '2023-09-27 02:05:29'),
(33, 17, 2, 10, '2023-09-27 02:05:29', '2023-09-27 02:05:29'),
(34, 18, 1, 5, '2023-09-27 02:07:15', '2023-09-27 02:07:15'),
(35, 18, 2, 3, '2023-09-27 02:07:15', '2023-09-27 02:07:15'),
(36, 19, 1, 20, '2023-09-27 02:14:15', '2023-09-27 02:14:15'),
(37, 19, 2, 20, '2023-09-27 02:14:15', '2023-09-27 02:14:15'),
(38, 20, 1, 30, '2023-09-27 02:15:40', '2023-09-27 02:15:40'),
(39, 20, 2, 20, '2023-09-27 02:15:40', '2023-09-27 02:15:40'),
(41, 22, 1, 15, '2023-09-27 09:20:33', '2023-09-27 09:20:33'),
(42, 22, 2, 15, '2023-09-27 09:20:33', '2023-09-27 09:20:33'),
(43, 23, 1, 10, '2023-09-27 09:22:49', '2023-09-27 09:22:49'),
(44, 23, 2, 30, '2023-09-27 09:22:49', '2023-09-27 09:22:49'),
(45, 24, 1, 15, '2023-09-27 09:24:00', '2023-09-27 09:24:00'),
(46, 24, 2, 20, '2023-09-27 09:24:00', '2023-09-27 09:24:00'),
(47, 25, 1, 30, '2023-09-27 09:25:22', '2023-09-27 09:25:22'),
(48, 25, 2, 30, '2023-09-27 09:25:22', '2023-09-27 09:25:22'),
(49, 26, 2, 30, '2023-09-27 09:31:24', '2023-09-27 09:31:24'),
(50, 27, 1, 20, '2023-09-27 09:33:14', '2023-09-27 09:33:14'),
(51, 27, 2, 20, '2023-09-27 09:33:14', '2023-09-27 09:33:14'),
(52, 28, 1, 30, '2023-09-27 09:38:32', '2023-09-27 09:38:32'),
(53, 28, 2, 30, '2023-09-27 09:38:32', '2023-09-27 09:38:32'),
(54, 29, 1, 15, '2023-09-27 09:40:15', '2023-09-27 09:40:15'),
(55, 29, 2, 15, '2023-09-27 09:40:15', '2023-09-27 09:40:15'),
(56, 30, 1, 30, '2023-09-27 09:42:46', '2023-09-27 09:42:46'),
(57, 30, 2, 30, '2023-09-27 09:42:46', '2023-09-27 09:42:46'),
(58, 31, 1, 5, '2023-09-27 09:44:38', '2023-09-27 09:44:38'),
(59, 31, 2, 5, '2023-09-27 09:44:38', '2023-09-27 09:44:38'),
(60, 32, 1, 20, '2023-09-27 09:49:25', '2023-09-27 09:49:25'),
(61, 32, 2, 20, '2023-09-27 09:49:25', '2023-09-27 09:49:25'),
(62, 33, 1, 15, '2023-09-27 09:50:57', '2023-09-27 09:50:57'),
(63, 33, 2, 15, '2023-09-27 09:50:57', '2023-09-27 09:50:57'),
(64, 34, 1, 10, '2023-09-27 09:52:05', '2023-09-27 09:52:05'),
(65, 34, 2, 10, '2023-09-27 09:52:05', '2023-09-27 09:52:05'),
(66, 35, 1, 20, '2023-09-27 09:53:21', '2023-09-27 09:53:21'),
(67, 35, 2, 20, '2023-09-27 09:53:21', '2023-09-27 09:53:21'),
(68, 36, 1, 10, '2023-09-27 09:54:37', '2023-09-27 09:54:37'),
(69, 36, 2, 10, '2023-09-27 09:54:37', '2023-09-27 09:54:37'),
(70, 37, 1, 20, '2023-09-27 09:55:52', '2023-09-27 09:55:52'),
(71, 37, 2, 20, '2023-09-27 09:55:52', '2023-09-27 09:55:52'),
(72, 38, 1, 7, '2023-09-27 09:56:57', '2023-09-27 09:56:57'),
(73, 38, 2, 6, '2023-09-27 09:56:57', '2023-09-27 09:56:57'),
(74, 39, 1, 20, '2023-09-27 09:58:05', '2023-09-27 09:58:05'),
(75, 39, 2, 30, '2023-09-27 09:58:05', '2023-09-27 09:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_07_100819_create_food_table', 1),
(7, '2023_08_17_190152_create_foodchefs_table', 1),
(8, '2023_08_23_175853_create_foodcategories_table', 1),
(9, '2023_08_30_071438_create_food_attributes_table', 1),
(10, '2023_09_04_093742_create_adtodcarts_table', 1),
(11, '2023_09_07_231500_create_branches_table', 1),
(12, '2023_09_07_231737_create_food_branch_table', 1),
(13, '2023_09_18_180032_create_purchase_histories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_histories`
--

CREATE TABLE `purchase_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `food_id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `usertype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '0703121778', 'peradeniya', '1', NULL, '$2y$10$Qp14QYjbSEnLfczTE2nyHOF.sEG2mkRRLSs89hY15r3/StoL6lj4e', NULL, '2023-09-27 00:00:31', '2023-09-27 00:00:31'),
(6, 'chamudika pallewela', 'lckpallewela@gmail.com', '0703121777', '230/5 ,megodakalugamuwa ,peradeniya.', '0', NULL, '$2y$10$L9oN1rKlT0yos0jZ/MHyyedNvB7hKT2JSkBoAon3DZvT1446RjoxS', NULL, '2023-09-27 00:46:52', '2023-09-27 00:46:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adtodcarts`
--
ALTER TABLE `adtodcarts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adtodcarts_food_id_foreign` (`food_id`),
  ADD KEY `adtodcarts_user_id_foreign` (`user_id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodcategories`
--
ALTER TABLE `foodcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodchefs`
--
ALTER TABLE `foodchefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_attributes`
--
ALTER TABLE `food_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_attributes_food_id_foreign` (`food_id`);

--
-- Indexes for table `food_branch`
--
ALTER TABLE `food_branch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_branch_food_id_foreign` (`food_id`),
  ADD KEY `food_branch_branch_id_foreign` (`branch_id`);

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
-- Indexes for table `purchase_histories`
--
ALTER TABLE `purchase_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_histories_user_id_foreign` (`user_id`),
  ADD KEY `purchase_histories_food_id_foreign` (`food_id`),
  ADD KEY `purchase_histories_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adtodcarts`
--
ALTER TABLE `adtodcarts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `foodcategories`
--
ALTER TABLE `foodcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foodchefs`
--
ALTER TABLE `foodchefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food_attributes`
--
ALTER TABLE `food_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `food_branch`
--
ALTER TABLE `food_branch`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_histories`
--
ALTER TABLE `purchase_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adtodcarts`
--
ALTER TABLE `adtodcarts`
  ADD CONSTRAINT `adtodcarts_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `adtodcarts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `food_attributes`
--
ALTER TABLE `food_attributes`
  ADD CONSTRAINT `food_attributes_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `food_branch`
--
ALTER TABLE `food_branch`
  ADD CONSTRAINT `food_branch_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `food_branch_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `purchase_histories`
--
ALTER TABLE `purchase_histories`
  ADD CONSTRAINT `purchase_histories_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `purchase_histories_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `purchase_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
