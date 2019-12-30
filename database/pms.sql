-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2019 at 07:05 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tablet', 'klajsdflsdj', '2019-11-30 18:59:49', '2019-12-09 16:15:57'),
(8, 'Syrup', 'sdafsd', '2019-12-08 18:57:52', '2019-12-09 16:16:18'),
(9, 'Antibiotic', 'sdf', '2019-12-08 18:57:56', '2019-12-09 16:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `name`, `amount`, `created_at`, `updated_at`) VALUES
(2, 'Salary', 9000, '2019-12-26', '2019-12-26'),
(3, 'Tissue', 80, '2019-12-26', '2019-12-26'),
(4, 'Utility', 500, '2019-12-26', '2019-12-26'),
(5, 'Current Bill', 700, '2019-12-26', '2019-12-26');

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
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `purchase_price` double(8,2) NOT NULL,
  `selling_price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `generic_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `effects` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `category_id`, `purchase_price`, `selling_price`, `quantity`, `generic_name`, `company`, `effects`, `expiry_date`, `created_at`, `updated_at`) VALUES
(2, 'Alatrol', 1, 3.00, 5.00, 0, 'ghj', 'ACI', 'Alaargy & Cold', '2025-12-29', '2019-12-02 19:57:29', '2019-12-29 05:19:42'),
(5, 'Paracitamol', 1, 1.00, 2.00, 721, 'ghfhj', 'aci', 'fever', '2025-12-26', '2019-12-19 02:14:49', '2019-12-29 05:48:00'),
(7, 'Adderall', 8, 4.00, 5.00, 615, 'rt', 'sd', 'ds', '2025-12-22', '2019-12-24 19:18:28', '2019-12-29 05:20:39'),
(8, 'Amoxicillin', 1, 5.00, 10.00, 5000, 'Amoxil', 'Amoxil', 'Amoxil', '2027-12-29', '2019-12-29 05:11:42', '2019-12-29 05:19:12'),
(9, 'Naproxen', 1, 7.00, 10.00, 10000, 'vxg', 'ACI', 'dfgdfg', '2026-11-03', '2019-12-29 05:14:14', '2019-12-29 05:14:14'),
(10, 'Xanax', 1, 9.00, 12.00, 50000, 'Amoxil', 'ACI', 'Pain', '2025-01-02', '2019-12-29 05:15:58', '2019-12-29 05:15:58'),
(11, 'Naproxen', 9, 6.00, 10.00, 29945, 'dfg', 'ACI', 'Pain', '2025-03-03', '2019-12-29 05:17:27', '2019-12-29 05:32:28'),
(12, 'Doxycycline', 9, 15.00, 18.00, 49967, 'vxg', 'ACI', 'Pain', '2025-04-01', '2019-12-29 05:18:35', '2019-12-29 05:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_11_19_075234_role', 1),
(4, '2019_11_19_080409_users', 1),
(5, '2019_11_19_083425_role_user', 1),
(6, '2019_11_29_205556_create_categories_table', 1),
(7, '2019_11_30_235332_medicines', 1),
(8, '2019_12_23_201829_create_profiles_table', 2),
(9, '2019_12_24_120349_create_staffs_table', 3),
(10, '2019_12_25_020713_create_expenses_table', 4),
(13, '2019_12_25_162459_create_expenses_table', 5),
(14, '2019_12_25_171811_create_sales_table', 5),
(16, '2019_12_25_172128_create_sales_details_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `Phone_number` bigint(20) NOT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parmanent_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `Phone_number`, `present_address`, `parmanent_address`, `education`, `gender`, `blood_group`) VALUES
(1, 2, 1722600900, 'Uttara Kamarpara, sector 10, Road 18, House 04', 'Katlahat,Birampur, Dinajpur', 'BSc', 'Male', 'O+'),
(3, 3, 1521119252, 'uttara sector 10, house 18, dhaka 1230', 'gf', 'BSc', 'Male', 'B-'),
(5, 6, 1722500600, 'uttara sector 10, house 18, dhaka 1230', 'uttara sector 10, house 18, dhaka 1230', 'HSC', 'Male', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Pharmacist', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL),
(2, 3, NULL, NULL),
(2, 4, NULL, NULL),
(2, 1, NULL, NULL),
(1, 5, NULL, NULL),
(2, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `age` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `customer_name`, `phone`, `age`, `sub_total`, `created_at`, `updated_at`) VALUES
(1, 's', 3, 33, 0, NULL, '2019-12-01'),
(2, 'sgf', 3, 33, 25, NULL, '2019-12-03'),
(3, 'sgf', 3, 33, 25, NULL, '2019-12-25'),
(4, 's', 2, 22, 8, NULL, '2019-12-26'),
(5, 'Rimu', 1712383089977, 16, 29, NULL, '2019-12-26'),
(6, 'Rimu', 1653756337, 22, 12, NULL, '2019-12-26'),
(7, 'Nakib', 1722600900, 22, 66, NULL, '2019-12-26'),
(8, 'Abir', 1711118888, 26, 9, NULL, '2019-12-26'),
(9, 'Rashed', 1722600900, 22, 1144, NULL, '2019-12-29'),
(10, 'Rimu', 172837654, 22, 24, NULL, '2019-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_id` bigint(20) UNSIGNED NOT NULL,
  `medicine_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`id`, `sale_id`, `medicine_id`, `quantity`, `total`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 5, 25, '0000-00-00', '0000-00-00 00:00:00'),
(2, 3, 2, 4, 20, '0000-00-00', '0000-00-00 00:00:00'),
(3, 3, 2, 1, 5, '0000-00-00', '0000-00-00 00:00:00'),
(4, 4, 5, 4, 8, '0000-00-00', '0000-00-00 00:00:00'),
(5, 1, 7, 10, 0, '0000-00-00', '2019-12-25 18:00:00'),
(6, 5, 5, 12, 24, NULL, '0000-00-00 00:00:00'),
(7, 5, 7, 1, 5, NULL, '2019-12-26 12:34:12'),
(8, 6, 2, 1, 5, NULL, '2019-12-26 12:34:12'),
(9, 6, 5, 1, 2, NULL, '2019-12-26 12:34:12'),
(10, 6, 7, 1, 5, NULL, '2019-12-26 12:34:12'),
(11, 7, 5, 33, 66, NULL, '0000-00-00 00:00:00'),
(12, 5, 5, 2, 0, NULL, '2019-12-26 12:34:44'),
(13, 8, 5, 2, 4, NULL, '2019-12-26 12:46:58'),
(14, 8, 7, 1, 5, NULL, '2019-12-26 12:47:05'),
(15, 9, 11, 22, 220, NULL, '2019-12-29 05:32:17'),
(16, 9, 11, 33, 330, NULL, '2019-12-29 05:32:28'),
(17, 9, 12, 33, 594, NULL, '2019-12-29 05:32:37'),
(18, 10, 5, 12, 24, NULL, '2019-12-29 05:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `phone`, `position`, `salary`, `gender`, `address`, `created_at`, `updated_at`) VALUES
(3, 'Nobin', 1772345323, 'Cleaner', 5500, 'Male', 'awsedd', '2019-12-24 09:41:55', '2019-12-29 05:26:55'),
(4, 'Almas', 1712383082, 'Driver', 10000, 'Male', 'Uttara', '2019-12-24 18:31:12', '2019-12-24 18:31:12'),
(5, 'Nakib', 1712383092, 'Gateman', 7000, 'Male', 'Uttara sector 10', '2019-12-24 18:39:32', '2019-12-24 18:39:32'),
(6, 'Abir', 1733999777, 'Driver', 8000, 'Male', 'Uttara', '2019-12-29 05:24:09', '2019-12-29 05:24:09'),
(7, 'Kamal', 1722333553, 'swipper', 5000, 'Male', 'uTTara', '2019-12-29 05:25:46', '2019-12-29 05:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'df', 'admin@gmail.com', NULL, '$2y$10$U.3ldsAfh2RpdW1JKA0EIeKBVQXP3xF6YXVcp33vqC9sg2dV5t7Ra', NULL, '2019-11-30 18:57:50', '2019-11-30 18:57:50'),
(2, 'A', 'aa@gmail.com', NULL, '$2y$10$DMRKtMzN2iV.XFWKL6AJte4ZvkA0260u2nZSiIngfUAJuEuSunIxO', NULL, '2019-12-02 12:59:04', '2019-12-02 12:59:04'),
(3, 'P', 'pp@gmail.com', NULL, '$2y$10$0H5fvbuFypwGC5cjrK3rLO/pGujf/IQOyJl1pYBSjT.A9t/nU2IwS', NULL, '2019-12-02 20:10:35', '2019-12-02 20:10:35'),
(4, 'Nahid', 'nahid@gmail.com', NULL, '$2y$10$DRmIE6jaq/xgKQINy7TvgOhdgtzmhqe25cJJJSgMgfB.B01J.U68u', NULL, '2019-12-29 03:41:27', '2019-12-29 03:41:27'),
(5, 'Almas', 'almas@gmail.com', NULL, '$2y$10$atdxBZsj9J.Wo2qyGUxo9unLWmj9W7ZG4k9257lSNCUDjwk4kLy4G', NULL, '2019-12-29 05:03:16', '2019-12-29 05:03:16'),
(6, 'Nakib', 'nakib@gmail.com', NULL, '$2y$10$L7tqo5LDMs694hekNgZeTOXwZMmAadkccDQoMzpR3/f6fEMkPuh4K', NULL, '2019-12-29 05:04:00', '2019-12-29 05:04:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicines_category_id_foreign` (`category_id`);

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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profiles_phone_number_unique` (`Phone_number`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_details_sale_id_foreign` (`sale_id`),
  ADD KEY `sales_details_medicine_id_foreign` (`medicine_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medicines`
--
ALTER TABLE `medicines`
  ADD CONSTRAINT `medicines_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD CONSTRAINT `sales_details_medicine_id_foreign` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`id`),
  ADD CONSTRAINT `sales_details_sale_id_foreign` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
