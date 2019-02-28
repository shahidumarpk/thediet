-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 10:56 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thediet`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminmenus`
--

CREATE TABLE `adminmenus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menutitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentid` int(10) UNSIGNED DEFAULT NULL,
  `showinnav` tinyint(1) DEFAULT NULL,
  `setasdefault` tinyint(1) DEFAULT NULL,
  `iconclass` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urllink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `displayorder` int(11) DEFAULT NULL,
  `mselect` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminmenus`
--

INSERT INTO `adminmenus` (`id`, `menutitle`, `slug`, `parentid`, `showinnav`, `setasdefault`, `iconclass`, `urllink`, `displayorder`, `mselect`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'dashboard', NULL, 1, 1, 'fa fa-dashboard', '/dashboard', 0, 'dashboard', 1, '2018-08-09 19:00:00', '2018-08-10 11:11:19'),
(2, 'Admins', 'main-admins', NULL, 1, 1, 'fa fa-users', '#', 1, 'roles,admins, roles.edit, admins.edit, admins.create, admins.show, resetpassword, roles.create', 1, '2018-08-09 19:00:00', '2018-09-18 19:00:00'),
(3, 'Roles', 'roles-index', 2, 1, 1, NULL, '/roles', 0, 'roles, roles.edit, roles.create', 1, '2018-08-09 19:00:00', '2018-08-10 19:00:00'),
(4, 'Manage Staff/Admin', 'admins-index', 2, 1, 1, NULL, '/admins', 1, 'admins, admins.edit, admins.create, admins.show, resetpassword', 1, '2018-08-09 19:00:00', '2018-08-10 11:44:18'),
(5, 'Settings', 'settings', NULL, 1, 1, 'fa fa-gear', '#', 15, 'menu, menu.edit,, menu.create', 1, '2018-08-09 19:00:00', '2018-08-10 11:48:01'),
(6, 'Manage Menu', 'menu-index', 5, 1, 1, NULL, '/menu', 0, 'menu, menu.edit,, menu.create', 1, '2018-08-09 19:00:00', '2018-08-10 11:47:49'),
(28, 'Add Staff', 'create-staff', 2, NULL, NULL, NULL, '#', 0, NULL, 1, '2018-09-21 19:00:00', '2018-09-21 19:00:00'),
(29, 'Staff Details', 'show-staff', 2, NULL, NULL, NULL, '#', 0, NULL, 1, '2018-09-21 19:00:00', '2018-09-22 03:10:17'),
(30, 'Edit Staff', 'edit-staff', 2, NULL, NULL, NULL, '#', 0, NULL, 1, '2018-09-21 19:00:00', '2018-09-21 19:00:00'),
(31, 'Change Staff Status', 'status-staff', 2, NULL, NULL, NULL, '#', 0, NULL, 1, '2018-09-21 19:00:00', '2018-09-21 19:00:00'),
(32, 'Delete Staff', 'delete-staff', 2, NULL, NULL, NULL, '#', 0, NULL, 1, '2018-09-21 19:00:00', '2018-09-21 19:00:00'),
(33, 'Staff Reset Password', 'staff-reset-password', 2, NULL, NULL, NULL, '#', 0, NULL, 1, '2018-09-21 19:00:00', '2018-09-21 19:00:00'),
(53, 'Show Dashboard Calendar', 'show-dashboard-calendar', 1, NULL, NULL, NULL, '#', 0, NULL, 2, '2018-09-26 19:00:00', '2018-11-13 19:00:00'),
(54, 'Manage Questions', 'question-index', 67, 1, NULL, 'fa-question-circle-o', 'question', 4, 'question.index', 1, '2019-02-19 14:00:00', '2019-02-20 19:00:00'),
(55, 'Question Fetch', 'question-fetch', 67, NULL, NULL, NULL, 'question.fetch', 0, 'question.fetch', 1, '2019-02-19 14:00:00', '2019-02-20 19:00:00'),
(56, 'Question Store', 'question-store', 67, NULL, NULL, NULL, 'question.store', 0, 'question.store', 1, '2019-02-19 14:00:00', '2019-02-20 19:00:00'),
(57, 'Question Edit', 'question-edit', 67, NULL, NULL, NULL, 'question.edit', 0, 'question.edit', 1, '2019-02-19 14:00:00', '2019-02-20 19:00:00'),
(58, 'Question Show', 'question-show', 67, NULL, NULL, NULL, 'question.show', 0, 'question.show', 1, '2019-02-19 14:00:00', '2019-02-20 19:00:00'),
(59, 'Testimonial', 'testimonial-index', NULL, 1, NULL, 'fa fa-quote-left', 'testimonial', 5, 'testimonial.index', 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(60, 'Testimonial Fetch', 'testimonial-fetch', 59, NULL, NULL, NULL, 'testimonial.fetch', 0, 'testimonial.fetch', 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(61, 'Testimonial Store', 'testimonial-store', 59, NULL, NULL, NULL, 'testimonial.store', 0, 'testimonial.store', 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(62, 'Testimonial Edit', 'testimonial-edit', 59, NULL, NULL, NULL, 'testimonial.edit', 0, 'testimonial.edit', 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(63, 'Testimonial Active', 'testimonial-active', 59, NULL, NULL, NULL, 'testimonial.active', 0, 'testimonial.active', 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(64, 'Testimonial Disable', 'testimonial-disable', 59, NULL, NULL, NULL, 'testimonial.disable', 0, 'testimonial.disable', 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(65, 'Site Config Index', 'configIndex-index', 5, 1, NULL, NULL, 'configIndex', 1, 'configIndex.index', 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(66, 'Site Config Store', 'configIndex-store', 5, NULL, NULL, NULL, 'configIndex.store', 0, 'configIndex.store', 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(67, 'Question', 'Question', NULL, 1, 1, 'fa fa-question', '#', 4, NULL, 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(68, 'Categories', 'category-index', 67, 1, NULL, NULL, 'category', 1, 'category.index', 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(69, 'Category Fetch', 'category-fetch', 67, NULL, NULL, NULL, 'category.fetch', 0, 'category.fetch', 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(70, 'Category Store', 'category-store', 67, NULL, NULL, NULL, 'category.store', 0, 'category.store', 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(71, 'Category Edit', 'category-edit', 67, NULL, NULL, NULL, 'category.edit', 0, 'category.edit', 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(72, 'Category Active', 'category-active', 67, NULL, NULL, NULL, 'category.active', 0, 'category.active', 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(73, 'Category Disable', 'category-disable', 67, NULL, NULL, NULL, 'category.disable', 0, 'category.disable', 1, '2019-02-20 19:00:00', '2019-02-20 19:00:00'),
(74, 'User Information', 'userInformation-index', 67, 1, NULL, NULL, 'userInformation', 0, 'userInformation.index', 1, '2019-02-25 19:00:00', '2019-02-26 04:32:51'),
(75, 'User Information Fetch', 'userInformation-fetch', 67, NULL, NULL, NULL, 'userInformation.fetch', 0, 'userInformation.fetch', 1, '2019-02-25 19:00:00', '2019-02-25 19:00:00'),
(76, 'User Information Show', 'userInformation-show', 67, NULL, NULL, NULL, 'userInformation.show', 0, 'userInformation.show', 1, '2019-02-25 19:00:00', '2019-02-25 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `authentication_log`
--

CREATE TABLE `authentication_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authenticatable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authenticatable_id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `login_at` timestamp NULL DEFAULT NULL,
  `logout_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authentication_log`
--

INSERT INTO `authentication_log` (`id`, `authenticatable_type`, `authenticatable_id`, `ip_address`, `user_agent`, `login_at`, `logout_at`) VALUES
(1, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', NULL, '2018-09-18 08:24:17'),
(2, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', '2018-09-18 08:24:25', NULL),
(3, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0', '2018-09-18 08:26:17', '2018-09-18 10:42:02'),
(4, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', '2018-09-18 08:55:28', '2018-09-19 04:56:09'),
(5, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0', '2018-09-18 10:42:17', '2018-09-18 10:42:35'),
(6, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0', '2018-09-18 10:42:46', '2018-09-20 00:18:37'),
(7, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134', '2018-09-19 00:14:33', NULL),
(8, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', '2018-09-19 04:56:19', '2018-09-19 05:51:05'),
(9, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', '2018-09-19 05:51:16', NULL),
(10, 'App\\User', 13, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0', '2018-09-22 08:58:25', NULL),
(11, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', NULL, '2018-10-04 00:12:07'),
(12, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-04 00:12:33', '2018-10-04 09:46:01'),
(13, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-05 04:53:40', NULL),
(14, 'App\\User', 1, '192.168.5.211', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-08 00:04:02', NULL),
(15, 'App\\User', 1, '192.168.5.221', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-08 00:15:14', '2018-10-08 00:35:32'),
(16, 'App\\User', 1, '192.168.5.79', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-08 00:15:37', NULL),
(17, 'App\\User', 1, '192.168.5.213', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-08 00:15:40', '2018-10-08 00:35:16'),
(18, 'App\\User', 1, '192.168.5.175', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-08 00:15:41', NULL),
(19, 'App\\User', 1, '192.168.5.115', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-08 00:15:42', NULL),
(20, 'App\\User', 1, '192.168.5.220', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-08 00:15:44', NULL),
(21, 'App\\User', 1, '192.168.5.216', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-08 00:15:48', NULL),
(22, 'App\\User', 1, '192.168.5.158', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-08 00:16:14', NULL),
(23, 'App\\User', 1, '192.168.5.133', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-08 00:16:23', NULL),
(24, 'App\\User', 1, '192.168.5.212', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-08 00:16:26', NULL),
(25, 'App\\User', 1, '192.168.5.118', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-08 00:16:41', NULL),
(26, 'App\\User', 1, '192.168.5.216', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-08 00:17:04', NULL),
(27, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '2018-10-10 10:11:40', NULL),
(28, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36', '2018-11-02 03:50:04', NULL),
(29, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36', '2018-11-02 03:55:03', NULL),
(30, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36', '2018-11-02 03:58:32', NULL),
(31, 'App\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36', '2018-11-02 04:02:46', NULL),
(32, 'App\\User', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36', NULL, '2018-11-10 01:39:33'),
(33, 'App\\User', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36', '2018-11-10 01:39:47', '2018-11-10 01:39:51'),
(34, 'App\\User', 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', '2018-11-10 05:15:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'PERSONAL', 'Active', 1, '2018-12-31 11:45:28', '2019-02-21 07:19:29'),
(2, 'TIME', 'Active', 1, '2018-12-31 07:13:07', '2019-02-21 07:19:44'),
(3, 'WORKOUTS', 'Active', 1, '2018-12-31 07:54:22', '2019-02-21 07:19:59'),
(4, 'KETO DIET', 'Active', NULL, '2019-01-18 07:10:02', '2019-02-21 07:20:24'),
(5, 'WEIGHT', 'Active', 1, '2019-02-21 07:20:37', '2019-02-21 07:20:37'),
(6, 'CALCULATE', 'Active', 1, '2019-02-21 07:20:46', '2019-02-21 07:20:46'),
(7, 'Step 7', 'Active', 1, '2019-02-22 23:53:21', '2019-02-22 23:53:21'),
(8, 'Step 8', 'Active', 1, '2019-02-22 23:53:39', '2019-02-22 23:53:39');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(6, '2016_06_01_000004_create_oauth_clients_table', 2),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2),
(8, '2018_10_22_070156_add_phonne_avatar_to_users_table', 3),
(9, '2018_10_22_113021_create_trulies_table', 4),
(10, '2018_10_22_125310_create_trulieassets_table', 5),
(11, '2018_10_23_044701_create_trulieactions_table', 6),
(12, '2018_10_23_050815_update_trulieactions_table', 7),
(13, '2018_10_23_135102_create_truliereporteds_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('1414f90424e0c23b4a27615d032d4ca915617cd10277857a9e22650a003c650c30bc606bf7bfbd34', 1, 1, 'MyApp', '[]', 0, '2018-10-21 02:31:32', '2018-10-21 02:31:32', '2019-10-21 07:31:32'),
('197f92118b5bd7b3481f4c4afba3f577d5a78be39b73e12e49266e870f3bbe23d002c05a261fc91b', 1, 1, 'MyApp', '[]', 0, '2018-10-31 04:27:10', '2018-10-31 04:27:10', '2019-10-31 09:27:10'),
('1a4cdba07b515cc61a2f452a9bfec54eed5b62f59eb6aead77d88377206119fb718ed384fb04bbbd', 1, 1, 'MyApp', '[]', 0, '2018-10-21 02:32:22', '2018-10-21 02:32:22', '2019-10-21 07:32:22'),
('29a4b3253f34f2ff33d02cfc746970cb4a79784f40d0d33cfac1369cf7e44756e418494c8c2d79fd', 2, 1, 'MyApp', '[]', 0, '2018-10-21 02:33:52', '2018-10-21 02:33:52', '2019-10-21 07:33:52'),
('3402099bb9e73974dea3c1f7094a730f0cba74f8b6f7cd48f8a73cac00934dcbfbd431f2f419a312', 1, 1, 'MyApp', '[]', 0, '2018-10-31 04:26:39', '2018-10-31 04:26:39', '2019-10-31 09:26:39'),
('436e4227d7410c79a357d218feb5448ba4de823727646e8b6668d6bbf095a9071fbb2a872150489c', 1, 1, 'MyApp', '[]', 0, '2018-10-22 03:34:35', '2018-10-22 03:34:35', '2019-10-22 08:34:35'),
('79310315adc74405b8980e9d130bd34f79599e449e6d629bf60597aedc9ed61ad2574f87a80075ae', 1, 1, 'MyApp', '[]', 0, '2018-10-31 04:27:28', '2018-10-31 04:27:28', '2019-10-31 09:27:28'),
('7a57b48a073633d41fc18d8a3ff71df2915398479c6931c35f9a79c3d3b9d552049bc46ab25dd558', 1, 1, 'MyApp', '[]', 0, '2018-10-21 02:32:27', '2018-10-21 02:32:27', '2019-10-21 07:32:27'),
('823646ca91badcc02d55ab2cfc9fcac9384028bdfccc365dfed9179a21b0ac84334fc0d818b975a8', 1, 1, 'MyApp', '[]', 0, '2018-10-21 02:32:26', '2018-10-21 02:32:26', '2019-10-21 07:32:26'),
('ba7d8b78b679c1838b0f943513cc34afc7b56de9b076a342d3033ad73bd86a1719114e23cc1eca07', 1, 1, 'MyApp', '[]', 0, '2018-10-21 02:31:15', '2018-10-21 02:31:15', '2019-10-21 07:31:15'),
('ddf15bbcc29b220ef6198921ae183b48ab27af1a583cb25ede2fdd0294aafc47ea42fcaebc518ad3', 1, 1, 'MyApp', '[]', 0, '2018-10-31 04:29:26', '2018-10-31 04:29:26', '2019-10-31 09:29:26'),
('f8642e7209b1bfc12ab1b0e4832a0ca8cd27a5b15ed294d689331345dab2210a3699311ff0ba8e78', 2, 1, 'MyApp', '[]', 0, '2018-10-23 05:26:35', '2018-10-23 05:26:35', '2019-10-23 10:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'vBi7pUk7GS2LQpfgRvtEm0OunXRMIqxC7jNm4yzN', 'http://localhost', 1, 0, 0, '2018-10-20 05:08:14', '2018-10-20 05:08:14'),
(2, NULL, 'Laravel Password Grant Client', 'P8FlzXtKiDrPNb0oqRyrC4M0IB7ddus89NtjzNIE', 'http://localhost', 0, 1, 0, '2018-10-20 05:08:14', '2018-10-20 05:08:14'),
(3, NULL, 'Laravel Personal Access Client', 'YF2GBT3U6qpWFr2lGiZ2ZXUOwdxsRrVoGICd6nSI', 'http://localhost', 1, 0, 0, '2018-11-13 22:50:58', '2018-11-13 22:50:58'),
(4, NULL, 'Laravel Password Grant Client', 'WGfbYVxHk0DBZwR3BOSDJLf6OcEpZpZJ6eBS5mEV', 'http://localhost', 0, 1, 0, '2018-11-13 22:51:01', '2018-11-13 22:51:01'),
(5, NULL, 'Laravel Personal Access Client', 'YLggrNH8O8rF7QIRe6knh1NjSORRS2JLNZI0OfQn', 'http://localhost', 1, 0, 0, '2018-11-14 02:41:16', '2018-11-14 02:41:16'),
(6, NULL, 'Laravel Password Grant Client', 'ut5jn5SVtxBkdtg2kkiD17mcEBMj2yCSR7n21oP5', 'http://localhost', 0, 1, 0, '2018-11-14 02:41:16', '2018-11-14 02:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-10-20 05:08:14', '2018-10-20 05:08:14'),
(2, 3, '2018-11-13 22:51:01', '2018-11-13 22:51:01'),
(3, 5, '2018-11-14 02:41:16', '2018-11-14 02:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `question_type` varchar(255) DEFAULT NULL,
  `question_order` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `editedable` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `category_id`, `question`, `question_type`, `question_order`, `status`, `is_deleted`, `user_id`, `editedable`, `created_at`, `updated_at`) VALUES
(1, 1, 'Select your gender:', 'radio', '1', 'Active', NULL, 1, 0, '2019-02-22 04:09:40', '2019-02-22 04:09:40'),
(2, 2, 'How much time do you have for meal preparation each day?', 'radio', '2', 'Active', NULL, 1, 1, '2019-02-22 04:10:41', '2019-02-23 06:31:45'),
(3, 3, 'Please select which products you would like included in the plan?', 'checkbox', '0', 'Active', NULL, 1, 1, '2019-02-22 04:12:50', '2019-02-22 04:12:50'),
(4, 4, 'Please select which products you would like included in the plan?', 'checkbox', '4', 'Active', NULL, 1, 1, '2019-02-22 04:15:02', '2019-02-26 02:09:55'),
(5, 5, 'How physically active are you?', 'radio', '5', 'Active', NULL, 1, 1, '2019-02-22 04:16:34', '2019-02-22 04:16:34'),
(6, 6, 'How familiar are you with the Keto diet?', 'radio', '6', 'Active', NULL, 1, 1, '2019-02-22 04:17:25', '2019-02-26 02:13:43'),
(7, 7, 'How willing are you to lose weight?', 'radio', '7', 'Active', NULL, 1, 1, '2019-02-22 23:56:46', '2019-02-22 23:56:46'),
(8, 6, 'MEASUREMENTS', 'text', '7', 'Active', NULL, 1, 1, '2019-02-22 07:04:21', '2019-02-22 07:04:21'),
(9, 1, 'Personal Details', 'text', '9', 'Active', NULL, 1, 0, '2019-02-23 00:57:46', '2019-02-23 00:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `question_answers`
--

CREATE TABLE `question_answers` (
  `id` int(11) NOT NULL,
  `user_infomation_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_answers`
--

INSERT INTO `question_answers` (`id`, `user_infomation_id`, `question_id`, `answer_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 2, '5', NULL, '2019-02-26 01:24:28', '2019-02-26 01:24:28'),
(2, 6, 3, '9,10', NULL, '2019-02-26 01:24:28', '2019-02-26 01:24:28'),
(3, 6, 5, '27', NULL, '2019-02-26 01:24:28', '2019-02-26 01:24:28'),
(4, 6, 7, '38', NULL, '2019-02-26 01:24:28', '2019-02-26 01:24:28'),
(5, 7, 2, '5', NULL, '2019-02-26 01:52:58', '2019-02-26 01:52:58'),
(6, 7, 3, '11', NULL, '2019-02-26 01:52:58', '2019-02-26 01:52:58'),
(7, 7, 5, '26', NULL, '2019-02-26 01:52:58', '2019-02-26 01:52:58'),
(8, 7, 7, '38', NULL, '2019-02-26 01:52:58', '2019-02-26 01:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `options` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`id`, `question_id`, `options`, `status`, `is_deleted`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Female', 'Active', NULL, 1, '2019-02-22 04:09:40', '2019-02-26 04:12:43'),
(2, 1, 'Male', 'Active', NULL, NULL, '2019-02-22 04:09:40', '2019-02-22 04:09:40'),
(3, 2, 'Up to 30 minutes', 'Active', NULL, NULL, '2019-02-22 04:10:41', '2019-02-22 04:10:41'),
(4, 2, 'Up to 1 hour', 'Active', NULL, NULL, '2019-02-22 04:10:41', '2019-02-22 04:10:41'),
(5, 2, 'More than 1 hour `', 'Active', NULL, NULL, '2019-02-22 04:10:41', '2019-02-22 04:10:41'),
(6, 3, 'Chicken', 'Active', NULL, NULL, '2019-02-22 04:12:50', '2019-02-22 04:12:50'),
(7, 3, 'Pork', 'Active', NULL, NULL, '2019-02-22 04:12:50', '2019-02-22 04:12:50'),
(8, 3, 'Beef', 'Active', NULL, NULL, '2019-02-22 04:12:50', '2019-02-22 04:12:50'),
(9, 3, 'Fish', 'Active', NULL, NULL, '2019-02-22 04:12:50', '2019-02-22 04:12:50'),
(10, 3, 'Lamb', 'Active', NULL, NULL, '2019-02-22 04:12:50', '2019-02-22 04:12:50'),
(11, 3, 'Veal', 'Active', NULL, NULL, '2019-02-22 04:12:50', '2019-02-22 04:12:50'),
(12, 4, 'Onions', 'Active', NULL, NULL, '2019-02-22 04:15:02', '2019-02-22 04:15:02'),
(13, 4, 'Mushrooms', 'Active', NULL, NULL, '2019-02-22 04:15:02', '2019-02-22 04:15:02'),
(14, 4, 'Eggs', 'Active', NULL, NULL, '2019-02-22 04:15:02', '2019-02-22 04:15:02'),
(15, 4, 'Nuts', 'Active', NULL, NULL, '2019-02-22 04:15:02', '2019-02-22 04:15:02'),
(16, 4, 'Cheese', 'Active', NULL, NULL, '2019-02-22 04:15:02', '2019-02-22 04:15:02'),
(17, 4, 'Butter', 'Active', NULL, NULL, '2019-02-22 04:15:02', '2019-02-22 04:15:02'),
(18, 4, 'Milk', 'Active', NULL, NULL, '2019-02-22 04:15:02', '2019-02-22 04:15:02'),
(19, 4, 'Avocados', 'Active', NULL, NULL, '2019-02-22 04:15:02', '2019-02-22 04:15:02'),
(20, 4, 'Seafood', 'Active', NULL, NULL, '2019-02-22 04:15:02', '2019-02-22 04:15:02'),
(21, 4, 'Olives', 'Active', NULL, NULL, '2019-02-22 04:15:02', '2019-02-22 04:15:02'),
(22, 4, 'Capers', 'Active', NULL, NULL, '2019-02-22 04:15:02', '2019-02-22 04:15:02'),
(23, 4, 'Coconut', 'Active', NULL, NULL, '2019-02-22 04:15:02', '2019-02-22 04:15:02'),
(24, 4, 'Goat cheese', 'Active', NULL, NULL, '2019-02-22 04:15:02', '2019-02-22 04:15:02'),
(25, 5, 'Workout hero (3-5 workouts / week)', 'Active', NULL, NULL, '2019-02-22 04:16:34', '2019-02-22 04:16:34'),
(26, 5, 'Light-mode (1-2 workouts /week)', 'Active', NULL, NULL, '2019-02-22 04:16:34', '2019-02-22 04:16:34'),
(27, 5, 'A newbie (Just starting)', 'Active', NULL, NULL, '2019-02-22 04:16:34', '2019-02-22 04:16:34'),
(28, 6, 'Expert', 'Active', NULL, NULL, '2019-02-22 04:17:25', '2019-02-22 04:17:25'),
(29, 6, 'I\'ve heard a thing or two', 'Active', NULL, NULL, '2019-02-22 04:17:25', '2019-02-22 04:17:25'),
(30, 6, 'Beginner', 'Active', NULL, NULL, '2019-02-22 04:17:25', '2019-02-22 04:17:25'),
(33, 8, 'Age', 'Active', NULL, NULL, '2019-02-22 07:04:21', '2019-02-22 07:04:21'),
(34, 8, 'Weight', 'Active', NULL, NULL, '2019-02-22 07:04:21', '2019-02-22 07:04:21'),
(35, 8, 'Target Weight', 'Active', NULL, NULL, '2019-02-22 07:04:21', '2019-02-22 07:04:21'),
(36, 7, 'I just want to try the Keto diet', 'Active', NULL, NULL, '2019-02-22 23:56:46', '2019-02-22 23:56:46'),
(37, 7, 'I want to try it and lose some weight', 'Active', NULL, NULL, '2019-02-22 23:56:46', '2019-02-22 23:56:46'),
(38, 7, 'I want to lose the maximum amount of weight', 'Active', NULL, NULL, '2019-02-22 23:56:46', '2019-02-22 23:56:46'),
(39, 9, 'name', 'Active', NULL, NULL, '2019-02-23 00:57:46', '2019-02-23 00:57:46'),
(40, 9, 'email', 'Active', NULL, NULL, '2019-02-23 00:57:46', '2019-02-23 00:57:46'),
(41, 8, 'Height', 'Active', NULL, 1, '2019-02-23 01:44:43', '2019-02-23 01:44:43');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `permission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_modified_by` int(10) UNSIGNED NOT NULL,
  `modified_ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_title`, `permissions`, `permission`, `user_id`, `created_ip`, `last_modified_by`, `modified_ip`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '{\"dashboard\":true,\"main-admins\":true,\"roles-index\":true,\"admins-index\":true,\"settings\":true,\"menu-index\":true,\"create-staff\":true,\"show-staff\":true,\"edit-staff\":true,\"status-staff\":true,\"delete-staff\":true,\"staff-reset-password\":true,\"show-dashboard-calendar\":true,\"question-index\":true,\"question-fetch\":true,\"question-store\":true,\"question-edit\":true,\"question-show\":true,\"testimonial-index\":true,\"testimonial-fetch\":true,\"testimonial-store\":true,\"testimonial-edit\":true,\"testimonial-active\":true,\"testimonial-disable\":true,\"configIndex-index\":true,\"configIndex-store\":true,\"Question\":true,\"category-index\":true,\"category-fetch\":true,\"category-store\":true,\"category-edit\":true,\"category-active\":true,\"category-disable\":true,\"userInformation-index\":true,\"userInformation-fetch\":true,\"userInformation-show\":true}', '1,53,2,3,4,28,29,30,31,32,33,5,6,65,66,59,60,61,62,63,64,67,54,55,56,57,58,68,69,70,71,72,73,74,75,76', 1, '::1', 1, '192.168.5.218', 1, '2018-08-10 19:00:00', '2019-02-25 19:00:00'),
(2, 'User', '{\"dashboard\":true,\"customers\":true,\"customers-index\":true,\"leads-index\":true,\"trulies\":true}', '1,7,8,9,56', 1, '::1', 1, '::1', 1, '2018-08-10 19:00:00', '2018-11-11 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `siteconfigs`
--

CREATE TABLE `siteconfigs` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `title_1` varchar(255) DEFAULT NULL,
  `title_2` varchar(255) DEFAULT NULL,
  `feedback_title` varchar(255) DEFAULT NULL,
  `feedback_description` text,
  `address` varchar(255) DEFAULT NULL,
  `phone_1` varchar(255) DEFAULT NULL,
  `phone_2` varchar(255) DEFAULT NULL,
  `faq_text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `general_condition` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `protection_policy` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `contact_us` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siteconfigs`
--

INSERT INTO `siteconfigs` (`id`, `logo`, `title_1`, `title_2`, `feedback_title`, `feedback_description`, `address`, `phone_1`, `phone_2`, `faq_text`, `general_condition`, `protection_policy`, `contact_us`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1550833797logo.png', 'GET YOUR PERSONALIZED 28-DAY DIET', 'Free Diet Plan Consultation', 'Feedback from our real clients', 'It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game.', '56/8, bir uttam qazi nuruzzaman road, west panthapath, kalabagan, Dhanmondi, Dhaka - 1205', '012-6532-568-9746', '012-6532-568-97468', '<h2>FREQUENTLY ASKED QUESTIONS</h2>\r\n\r\n<p>BILLING QUESTIONS</p>\r\n\r\n<p>Why was my payment declined?</p>\r\n\r\n<p>This is a very rare error; however, if your payment was declined, please check the expiration date of your card, or if you have another card please try using it too.</p>\r\n\r\n<p>If that does not help, contact your bank or credit card company to fix the issue.</p>\r\n\r\n<p>We accept payments via Visa, MasterCard, Maestro, PayPal, Amex, Discover, JCB, UnionPay, Elo, Hiper, and Hipercard.</p>\r\n\r\n<p>How much does the Keto Cycle meal plan cost?</p>\r\n\r\n<p>Once you complete the questionnaire, you&rsquo;ll see the current available price of the plan.</p>\r\n\r\n<p>Why do we charge for our meal plan?</p>\r\n\r\n<p>We prepare personalized meal plans for our customers. The personalized meal plans are created by our best nutritionists. The meal plans are diligently prepared by taking into consideration all of the customer&rsquo;s personal preferences and requests. It takes proficiency to create personalized meal plans in a prompt manner that guarantees substantial weight loss results.</p>\r\n\r\n<p>Is it a one-time payment?</p>\r\n\r\n<p>Yes, it is a one-time payment; we are not a subscription. If you want to continue your diet after this 28-day period, you will have to purchase it once again. No additional charges will ever occur.</p>\r\n\r\n<p>How can I get a refund?</p>\r\n\r\n<p>We&rsquo;ll be really sorry to see you go, but if you want to cancel your meal plan you can apply for a refund within 14 days. You can get a refund by contacting our customer support (email address:&nbsp;hello@ketocycle.diet). Please provide detailed information on how the Keto Cycle diet plan we have supplied to you has not met the product description on our website and attach the receipt of your payment to the email.</p>\r\n\r\n<p>PLAN NAVIGATION QUESTIONS</p>\r\n\r\n<p>What does my plan include? &nbsp;&nbsp;</p>\r\n\r\n<p>Your meal plan is prepared based on your answers to the questionnaire. You will get a list of recipes to follow a keto diet for the whole 28 days (five recipes per day) and a shopping list. If you click on the recipes, you will find the instructions on how to prepare meals and all the macros information. Additionally, you will get our guide, where you can find all the necessary information on the keto diet.</p>\r\n\r\n<p>Do I get a digital or physical version of my plan?</p>\r\n\r\n<p>You will get a 28-day keto diet meal plan in a digital form. You can access your meal plan online from your computer or phone. We do not send any physical meal plans. However, you have the option to print your entire plan in a physical form. &nbsp;</p>\r\n\r\n<p>What do I do if I didn&#39;t receive my plan?</p>\r\n\r\n<p>This is a very rare error; however, if you don&rsquo;t receive your plan within two hours, please check your SPAM box. Sometimes the email with the link to a plan ends up there. If you can&rsquo;t find it there, please go to this link: https://ketocycle.diet/myplan and you will be able to access your plan by entering the email you used while purchasing the plan.</p>\r\n\r\n<p>How can I print my meal plan? &nbsp;</p>\r\n\r\n<p>Please access your meal plan. Then, at the bottom of your meal plan, you can find the printing options for the day, week, and month.</p>\r\n\r\n<p>Can I see a sample before I buy the Keto Cycle meal plan?</p>\r\n\r\n<p>Yes, you can see a snippet of the meal plan before buying it. The snippet is present at the bottom of your summary page after the questionnaire is filled out.</p>\r\n\r\n<p>Are these recipes for one person?</p>\r\n\r\n<p>Each recipe is a single serving.</p>\r\n\r\n<p>GENERAL QUESTIONS</p>\r\n\r\n<p>What is a keto diet?</p>\r\n\r\n<p>A keto diet is a low-carb diet that results in ketosis. To achieve this, the diet has to be very low in carbohydrates and high in dietary fat, with a moderated amount of proteins.</p>\r\n\r\n<p>This diet involves depleting your body of carbs and forcing it to break down fat for energy.</p>\r\n\r\n<p>What is ketosis?</p>\r\n\r\n<p>Ketosis is a normal metabolic process, something your body does to keep working. When it doesn&#39;t have enough carbohydrates from food for your cells to burn for energy, it burns fat instead. As part of this process, it makes ketones.</p>\r\n\r\n<p>How long does it take to get into ketosis?</p>\r\n\r\n<p>It will take a few days or weeks to feel your absolute best on keto. It is possible that you may experience symptoms of carbohydrate withdrawal at first, but once you become fat-adapted, you&#39;ll find that you won&#39;t crave carbs as much anymore.</p>\r\n\r\n<p>Is a keto diet safe?</p>\r\n\r\n<p>A keto diet is usually very safe. However, in the following three situations you may need extra preparation or consultation with your doctor:</p>\r\n\r\n<p>- Are you on medication for diabetes (e.g., insulin)?</p>\r\n\r\n<p>- Are you on medication for high blood pressure?</p>\r\n\r\n<p>- Are you breastfeeding?</p>\r\n\r\n<p>If you&rsquo;re not in one of these situations, you&rsquo;ll likely do fine on a keto diet, without needing any special modifications.</p>\r\n\r\n<p>However, if you&#39;re aware of any physical health problems, then special consideration should be made when planning to start a keto diet.</p>\r\n\r\n<p>How fast will I be losing weight on a keto diet?</p>\r\n\r\n<p>Everyone&rsquo;s body is different, which means the weight loss rate for each person is different too. For example, someone with a slow metabolism and a lot of fat tissue who doesn&rsquo;t exercise enough will take longer to see weight loss compared to someone with a normal metabolism who&rsquo;s slightly overweight and starts exercising four to five times a week along with doing keto.</p>\r\n\r\n<p>Typically, in the first week of the keto diet people see a very quick drop in weight&mdash;anywhere from a few pounds to as much as ten! That&rsquo;s because, at first, keto makes your body release a lot of water weight (not fat) due to your lower carb intake.</p>\r\n\r\n<p>What should be the gap between each meal on my meal plan?</p>\r\n\r\n<p>The gap between each meal is three to four hours (including snacks).</p>\r\n\r\n<p>What should I drink on a keto diet?</p>\r\n\r\n<p>Water is perfect and includes zero carbs. Coffee and tea (without sugar, of course) are good options, as well. A glass of wine is also fine to drink on special occasions.</p>', '<p>&#39;</p><h2>General conditions</h2><p>&nbsp;</p><p><strong>Agreement</strong></p><p>&nbsp;</p><p><strong>1. Introduction</strong></p><p>&nbsp;</p><p>1.1. This Agreement govern the entire relationship between you the Client and the Company.</p><p>&nbsp;</p><p>1.2. Before the Distance contract is concluded, the Client will be provided with the text of this Agreement electronically or in other durable format. If this is not reasonably possible, the Company will indicate, before the Distance contract is concluded, in what way this Agreement is available for Client`s review at the Company`s premises and that they will be sent free of charge to the Client, as soon as possible, at the Client`s request.</p><p>&nbsp;</p><p>1.3. THE CLIENT IS OBLIGED TO CAREFULLY READ THIS AGREEMENT BEFORE ACCEPTING IT AND USING THE SERVICES OF THE COMPANY. THE CLIENT AGREES THAT HIS/HER USE OF THE SERVICES ACKNOWLEDGES THAT THE CLIENT HAS READ THIS AGREEMENT, UNDERSTOOD IT, AND AGREED TO BE BOUND BY IT.</p><p>&nbsp;</p><p>1.4. This Agreement contains a mandatory arbitration provision that, as further set forth in Section 17 below, requires the use of arbitration on an individual basis to resolve disputes, rather than jury trials or any other court proceedings, or class actions of any kind.</p><p>&nbsp;</p><p><strong>2. Definitions</strong></p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>2.1. Some terms are defined in the introductory part of this Agreement. Unless this Agreement provide otherwise, wherever used in this Agreement, including the introductory part, the following terms when capitalized shall have the following meanings:</p><p>&nbsp;</p><table>	<tbody>		<tr>			<td>(a)</td>			<td><strong>Agreement</strong></td>			<td>Agreement for providing individual meal plan based on Keto diet concluded online by the Company and the Client.</td>		</tr>		<tr>			<td>(b)</td>			<td><strong>Client</strong></td>			<td>user of the Company&rsquo;s Services as explained in this Agreement.</td>		</tr>		<tr>			<td>(c)</td>			<td><strong>Company</strong></td>			<td>Kilo group LTD, company code 303157579, registered address at Ramyb&Auml;s str.&nbsp;4-70, Vilnius, Lithuania, e-mail&nbsp;hello@ketocycle.diet, a company incorporated under the laws of Lithuania, data about the company is stored and kept with the Register of Legal Entities of the Republic of Lithuania.</td>		</tr>		<tr>			<td>(d)</td>			<td><strong>Offer</strong></td>			<td>the offer to enter into this Agreement of Services provided by Company to the Client.</td>		</tr>		<tr>			<td>(e)</td>			<td><strong>Privacy Policy</strong></td>			<td>the privacy policy of the Company published on the Website.</td>		</tr>		<tr>			<td>(f)</td>			<td><strong>Services</strong></td>			<td>the individual meal plan based on Keto diet provided by the Company to the Client as well as the accessibility to the Website, including information, text, images offered or provided on the Website.</td>		</tr>		<tr>			<td>(g)</td>			<td><strong>Digital content</strong></td>			<td>individual digital meal plans based on Keto diet sold online by the Company.</td>		</tr>		<tr>			<td>(h)</td>			<td><strong>Distance contract</strong></td>			<td>a contract concluded between the Company and the Client within framework of system organized for the distance sale of Digital content.</td>		</tr>		<tr>			<td>(i)</td>			<td><strong>Website</strong></td>			<td>the website of the Company available at ketocycle.diet.</td>		</tr>	</tbody></table><p>&nbsp;</p><p><strong>3. Submission of the Offer</strong></p><p>&nbsp;</p><p>3.1. The Company will provide the Client with a possibility of receiving an Offer through the Website.</p><p>&nbsp;</p><p>3.2. The Client will be asked to provide certain information through the Website before receiving the Offer by choosing provided options or typing requested details. The Client is obliged to provide current, correct and comprehensive information that is requested to be provided in the Website.</p><p>&nbsp;</p><p>3.3. Upon submission of the information established in Section 3.2 of this Agreement, the Client will be provided with the Offer. The Offer will include information on the following:</p><p>&nbsp;</p><p>3.3.1. payment amount for a single meal plan;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>3.3.2. payment options: via credit card or other allowable payment form</p><p>&nbsp;</p><p>3.3.3. other information Company finds important to include in the Offer.</p><p>&nbsp;</p><p>3.4. Accepting the Offer</p><p>3.4.1. The Client accepts the Offer once he/she ticks the box &ldquo;I agree with the Terms &amp; Conditions&rdquo;. Once the Client agrees with the Terms &amp; Conditions, the Client will be required to press the button &ldquo;Submit&rdquo;.</p><p><strong>4. Distance contract</strong></p><p>4.1. The Distance contract will be concluded at the moment when the Client accepts the Offer and as indicated in paragraph 3.3.1.</p><p>4.2. As the Client will accept the Offer electronically, the Company will confirm receipt of acceptance of the Offer electronically. The Company will send individual meal plan based on Keto diet to the Client. Such meal plan will be provided to the Client`s e-mail address provided by the Client on the Website.</p><p>4.3. AS AGREEMENT BETWEEN THE COMPANY AND THE CLIENT CONSISTS OF DIGITAL CONTENT WHICH IS NOT SUPPLIED ON A TANGIBLE MEDIUM THE CLIENT AGREES TO LOSE HIS/HER RIGHT OF WITHDRAWAL OF THE AGREEMENT.</p><p>4.4. The Company makes reasonable efforts to ensure that Services operate as intended, however such Services are dependent upon internet and other services and providers outside of the control of the Company. By using Company`s Services, the Client acknowledges that the Company cannot guarantee that Services will be uninterrupted, error free or that the information it contains will be entirely free from viruses, hackers, intrusions, unscheduled downtime or other failures. The Client expressly assumes the risk of using or downloading such Services.</p><p>4.5. From time to time and without prior notice to the Client, we may change, expand and improve the Services. We may also, at any time, cease to continue operating part or all of the Services or selectively disable certain aspects of the Services. Any modification or elimination of the Services will be done in our sole and absolute discretion and without an ongoing obligation or liability to the Client, and the Client use of the Services do not entitle the Client to the continued provision or availability of the Services.</p><p>&nbsp;</p><p>&nbsp;</p><p>4.6. The Client furthermore agrees that:</p><p>4.6.1 he/she shall not access Services if he/she is under the age of 18;</p><p>4.6.2 The Client will deny access of Services to children under the age of 18. The Client accepts full responsibility for any unauthorized use of the Services by minors.</p><p><strong>5. Payments</strong></p><p>5.1. During the period of validity indicated in the Offer, the price for the Services being offered will not increase, except for price changes in VAT-tariffs.</p><p>5.2. The Client agrees to:</p><p>5.2.1. pay all additional costs, fees, charges, applicable taxes and other charges that can be incurred by the Client;</p><p>5.2.2. purchase Services from the Website by using valid credit card or other allowed form of payment;</p><p>5.2.3. provide Company current, correct and comprehensive information as detailed in the purchase order form. If Company discovers or believes that any information provided by Client is not current, inaccurate or incomplete, Company reserves the right to suspend the Service at its sole discretion and Client forfeits any right to refund paid amount.</p><p>5.3. After the Client is transferred to the third party payment service provider, the risk of loss or damages will pass to the Client and/or third party service. The Client&rsquo;s online credit or debit card payments to the Company will be handled and processed by third party payment service provider and none of the sensitive data in relation to your payment will be stored on or used by the Website and/or for the Services. The Company shall not be liable for any payment issues or other disputes that arise due to the third party payment services. The Company may change the third party payment service provider from time to time.</p><p>5.4. All prices and costs are in US Dollars unless otherwise indicated.</p><p><strong>6. Refund Policy</strong></p><p>6.1. Client may apply for a refund within 14 days after accepting the Offer by email to Company at&nbsp;hello@ketocycle.diet&nbsp;if Client provides detailed information how the Services Company supplied to Client have not met the Services&rsquo; description on Website and attaches the receipt of Client&rsquo;s payment to the email. The right to request the refund due to Services&rsquo; non-compliance with the the Services&rsquo; description on Website will expire if is not presented by the Client to the Company within 14 days after accepting the Offer.</p><p><strong>7. Intellectual Property Rights</strong></p><p>7.1. As between Company and Client, all intellectual property rights, including but not limited to copyright, design rights, trademark rights, patent rights and any other proprietary rights in or to related to the Services and Services-related content are owned by the Company.</p><p>&nbsp;</p><p>7.2. The Client must not reproduce, disassemble, reverse engineer, decompile, distribute, publicly display or perform, or publish or otherwise make available the Services including but not limited to Digital content, in whole or in part without Company&rsquo;s prior written consent.</p><p>&nbsp;</p><p>7.3. The Client hereby grants to the Company a perpetual, irrevocable, worldwide, fully paid-up and royalty&acirc;free, non-exclusive license, including the right to sublicense (through multiple tiers) and assign to third parties, to reproduce, distribute, perform and display (publicly or otherwise), create derivative works of, adapt, modify and otherwise use, analyze and exploit in any way now known or in the future discovered, his/her User Content (except for User Trademarks) as well as all modified and derivative works thereof. To the extent permitted by applicable laws, the Client hereby waives any moral rights he/she may have in any User Content. &ldquo;User Content&rdquo; means any User Trademarks, communications, images, writings, creative works, sounds, and all the material, data, and information, that the Client uploads, transmits or submits through the Services, or that other users upload or transmit. By uploading, transmitting or submitting any User Content, the Client affirms, represents and warrants that such User Content and its uploading, transmission or submission is (a) accurate and not confidential; (b) not in violation of any applicable laws, contractual restrictions or other third&acirc;party rights, and that the Client has permission from any third party whose personal information or intellectual property is comprised or embodied in the User Content; and (c) free of viruses, adware, spyware, worms or other malicious code.</p><p>7.4. No part of this Agreement is, or should be interpreted as a transfer of intellectual property rights in relation to the Services or Services-related content, except as expressly set forth in Section 8.1 below.</p><p><strong>8. Use of Digital content</strong></p><p>8.1. All intellectual property rights specified in Article 7.1 and relating to Digital content are owned by the Company. Digital content is licensed pursuant to this Section 8, and is not sold. The Client will only be granted a limited, revocable, non-exclusive, non-transferable and non-sublicensable license, subject to the terms and conditions of this Agreement, to use (solely for the Client&rsquo;s individual use) any Digital content provided by Company to the Client.</p><p>8.2. The term of this licence shall be for a term of 5 years from the date of the Client receiving the applicable Digital content, unless earlier suspended or terminated in accordance with this Agreement.</p><p>8.3. Unless expressly otherwise provided, he Client must not use any Digital content except for personal, non-commercial purposes.</p><p>8.4. The Client must not edit, reproduce, transmit or lend the Digital content or make it available to any third parties or use it to perform any other acts which extend beyond the scope of the licence provided in this Section 8 by the Company.</p><p>8.5. The Company may impose restrictions on the scope of the licence or the number of devices or types of devices on which Digital content can be used.</p><p>&nbsp;</p><p>8.6. If the Client violates this Section 8, the Company may suspend access to the relevant Digital content, without limiting any of Company&rsquo;s rights or remedies under this Agreement or applicable law, including Company&rsquo;s right to recover from the Client the loss suffered as a result of or in connection with the infringement including any expenses incurred.</p><p>&nbsp;</p><p><strong>9. Sale of Digital Content Prohibited</strong></p><p>&nbsp;</p><p>9.1. The Client is prohibited from selling, offering for sale, sharing, renting out or lending Digital content, or copies of Digital content..</p><p>&nbsp;</p><p><strong>10. Privacy Policy</strong></p><p>&nbsp;</p><p>10.1. The processing of Client&rsquo;s personal data is governed by the Privacy Policy which can be found on the Website. It is recommended for the Client to print and keep a copy of the Privacy Policy together with this Agreement.</p><p>&nbsp;</p><p><strong>11. Indemnity</strong></p><p>&nbsp;</p><p>11.1. The Client will indemnify and hold the Company, its affiliates, officers, directors, employees, agents, legal representatives, licensors, subsidiaries, joint ventures and suppliers, harmless from any claim or demand, including reasonable attorneys` fees, made by any third party due to or arising out of Client&rsquo;s breach of this Agreement or use of the Services, or Client&rsquo;s violation of any law or the rights of a third party in conjunction with Client&rsquo;s breach of this Agreement or use of the Services.</p><p>&nbsp;</p><p><strong>12. Liability</strong></p><p>&nbsp;</p><p>12.1. INFORMATION MAY NOT BE APPROPRIATE OR SATISFACTORY FOR THE CLIENT USE, AND HE/SHE SHOULD VERIFY ALL INFORMATION BEFORE RELYING ON IT. ANY DECISIONS MADE BASED ON INFORMATION CONTAINED IN THE WEBSITE, INCLUDING INFORMATION RECEIVED THROUGH CLIENT`S USE OF THE SERVICES, ARE HIS/HER SOLE RESPONSIBILITY.</p><p>&nbsp;</p><p>12.2. THE CLIENT EXPRESSLY UNDERSTANDS AND AGREES THAT THE COMPANY SHALL NOT BE LIABLE FOR ANY DAMAGES WHATSOEVER (INCLUDING, WITHOUT LIMITATION, DIRECT, INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, EXEMPLARY DAMAGES, OR THOSE RESULTING FROM LOST PROFITS, LOST DATA OR BUSINESS INTERRUPTION, LOSS OF GOODWILL, LOSS OF USE, OR OTHER LOSSES WHETHER BASED ON WARRANTY, CONTRACT, TORT OR ANY OTHER LEGAL THEORY (EVEN IF THE COMPANY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES), ARISING OUT OF: (i) THE USE OR INABILITY TO USE SERVICES, (ii) ANY LINK PROVIDED IN CONNECTION WITH THE SERVICES, (iii) THE MATERIALS OR INFORMATION CONTAINED AT ANY OR ALL SUCH LINKED WEBSITES, (iv) CLIENT`S RELIANCE ON ANY OF THE SERVICES; (v) THE INTERRUPTION, SUSPENSION, TERMINATION OF THE SERVICES OR ANY PORTION THEREOF, (vi) THE TIMELINESS, DELETION, MISDELIVERY OR FAILURE TO POST OR STORE ANY INFORMATION, OR (vii) ANY MATTER OTHERWISE RELATED TO THE CLIENT`S USE OF THE SERVICES. IN NO EVENT SHALL THE COMPANY&rsquo;S AGGREGATE LIABILITY TO THE CLIENT RELATING TO HIS/HER USE OF THE SERVICES EXCEED ONE HUNDRED DOLLARS ($100).</p><p>&nbsp;</p><p>12.3. A party to the Agreement shall be released from responsibility for non-fulfilment if it proves that this Agreement were not fulfilled due to force majeure. In particular, the Company shall not be liable for any losses caused by force majeure, riot, war or natural events or due to other occurrences for which the Company is not responsible (e.g. strike, lock-out, traffic hold-ups, administrative acts of domestic or foreign high authorities). The Client must provide written notification of the occurrence of force majeure, which prevents the fulfilment of this Agreement, within 30 calendar days from the date of the occurrence of these circumstances. The Company shall inform the Client about the occurrence of force majeure by e-mail or on the Website if possible.</p><p>&nbsp;</p><p>12.4. THE LIABILITY OF THE COMPANY IS LIMITED TO DIRECT LOSSES, UNLESS OTHERWISE PROVIDED UNDER THE APPLICABLE LAWS.</p><p>&nbsp;</p><p>12.5. Due to the nature of Services that the Company provides and as the Company cannot control the Client&rsquo;s adherence to the provided meal plan based on Keto diet, the Company provides no warranty as to any results or outcomes coming from using Services.</p><p>&nbsp;</p><p>12.6. The Website may provide links to other websites that are not owned and/or controlled by the Company. The Client acknowledges and agrees that the Company is not responsible for the availability of such websites. Furthermore, the Company is not responsible or liable for any content, advertising, products or other materials on such websites and therefore the Client agrees that the Company shall not be responsible or liable, directly or indirectly for any damage or loss caused or alleged to be caused by or in connection with use or reliance on any such content, goods, services available on or through any such websites.</p><p>&nbsp;</p><p><strong>13. Medical disclaimer</strong></p><p>&nbsp;</p><p>13.1. BEFORE TRYING MEAL PLAN BASED ON KETO DIET BY THE COMPANY, THE CLIENT SHOULD CONSULT WITH HIS/HER HEALTHCARE SERVICE PROVIDER.</p><p>&nbsp;</p><p>13.2. THE COMPANY IS NOT A MEDICAL ORGANIZATION AND IS NOT PROVIDING ANY MEDICAL ADVICE OR ASSISTANCE. NOTHING WITHIN THE SERVICES PROVIDED BY THE COMPANY IS ASSOCIATED WITH, SHOULD BE TAKEN AS, OR UNDERSTOOD AS MEDICAL ADVICE OR ASSISTANCE, NOR SHOULD IT BE INTERPRETED IN SUBSTITUTION FOR ANY MEDICAL ADVICE OR ASSISTANCE, OR USED OR REFERRED TO INSTEAD OF SEEKING APPROPRIATE MEDICAL ADVICE OR ASSISTANCE FROM HEALTH CARE PROVIDERS. THE CLIENT IS SOLELY RESPONSIBLE FOR EVALUATING AND ASSESSING HIS OWN HEALTH, INCLUDING ANY NEED TO SEEK APPROPRIATE GUIDANCE FROM A HEALTH CARE PROVIDER.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>14. Validity and Termination</strong></p><p>&nbsp;</p><p>14.1. This Agreement is effective after the Client accepts and electronically expresses his/her consent to comply with them, and they shall remain in effect until terminated in accordance with the following section.</p><p>&nbsp;</p><p>14.2. The Company may terminate the relationship with the Client at any time in the following cases: (i) the Client does not agree with the Agreement; (2) the Client commits any breach of the Agreement; (3) the Client does not provide information requested by the Company and/or provides incorrect and/or incomprehensive information. Notwithstanding the foregoing, statutory termination rights shall not be affected.</p><p>&nbsp;</p><p><strong>15. Changes to Agreement</strong></p><p>&nbsp;</p><p>This Agreement, privacy policy and any additional terms and conditions that may apply are subject to change. All amended Agreement, privacy policy and any additional terms and conditions will be posted online on Website. Company&rsquo;s right to amend includes the right to modify, add to, or remove any terms. Company will provide Client 10 days&rsquo; notice by posting the amended terms on the Website and will notify the Client by email. Company may also ask Client to acknowledge Client&rsquo;s acceptance of the amended terms through an electronic click-through. The Client agrees that notice of modifications on the Website and by email is adequate notice.</p><p>&nbsp;</p><p><strong>16. Communication</strong></p><p>&nbsp;</p><p>16.1. In general, the Company prefers communication by e-mail. By accepting this Agreement, the Client accepts communication by e-mail. For this purpose, the Client is requested to have a valid e-mail address and provide it when filling required information as stipulated in Article 3.2. The Client should check his/her e-mail messages regularly and frequently. E-mails may contain links to further information and documents on the Website.</p><p>&nbsp;</p><p>16.2. Where applicable laws require provision of information on a durable medium, the Company will either send the Client an email with an attachment or send the Client a notification referring to the Website with download function to retain such information and documents permanently for future reference. It is the Client&rsquo;s responsibility requested to keep copies of all communications from the Company.</p><p>&nbsp;</p><p>16.3. The Client may request a copy of this Agreement or any other contractual document by contacting&nbsp;hello@ketocycle.diet.</p><p>&nbsp;</p><p>16.4. The communication with the Client will be made in English, unless the Company and the Client agree to communicate in another language.</p><p>&nbsp;</p><p>16.5. The Client may contact us at any time by sending a message to&nbsp;hello@ketocycle.diet&nbsp;.</p><p>&nbsp;</p><p><strong>17. Dispute resolution</strong></p><p>&nbsp;</p><p>17.1. Governing Law. This Agreement is governed by the laws of Texas without regard to its principles of conflicts of law, and regardless of Client&rsquo;s location.</p><p>&nbsp;</p><p>17.2. Informal Dispute Resolution. Client agrees to participate in informal dispute resolution before filing a claim against the Company. Any complaints in relation to the Company and the Services provided to the Client should be addressed to the Company by contacting&nbsp;hello@ketocycle.diet.&nbsp;Client should clearly indicate that a complaint is being submitted and specify the grounds and circumstances concerning the complaint. The Company will send a complaint acknowledgement to the e-mail address from which the complaint has been received. We will consider the complaint and respond to the Client within 14 calendar days of the day of receipt of a relevant complaint. If a dispute is not resolved within 30 calendar days of the day of receipt of a relevant complaint, Client or Company may bring a formal claim.</p><p>&nbsp;</p><p>17.3. Arbitration. Except for disputes that qualify for small claims court, all disputes arising out of or related to this Agreement or any aspect of the relationship between Client and Company, whether based in contract, tort, statute, fraud, misrepresentation or any other legal theory, will be resolved through final and binding arbitration before a neutral arbitrator instead of in a court by a judge or jury. Client and Company agrees that Client and Company are each waiving the right to trial by a jury. Such disputes include, without limitation, disputes arising out of or relating to interpretation or application of this arbitration provision, including the enforceability, revocability or validity of the arbitration provision or any portion of the arbitration provision. All such matters shall be decided by an arbitrator and not by a court or judge.</p><p>&nbsp;</p><p>17.4. Client agrees that any arbitration under this Agreement will take place on an individual basis; class arbitrations and class actions are not permitted and Client is agreeing to give up the ability to participate in a class action.</p><p>&nbsp;</p><p>17.5. Client may opt out of this agreement to arbitrate by emailing&nbsp;hello@ketocycle.diet&nbsp;with Client&rsquo;s first name, last name, and address within thirty (30) days of accepting this agreement to arbitrate, with a statement that Client declines this arbitration agreement.</p><p>&nbsp;</p><p>17.6. The arbitration will be administered by the American Arbitration Association under its Consumer Arbitration Rules, as amended by this Agreement. The Consumer Arbitration Rules are available online at https://www.adr.org/consumer. The arbitrator will conduct hearings, if any, by teleconference or videoconference, rather than by personal appearances, unless the arbitrator determines upon request by Client or Company that an in-person hearing is appropriate. Any in-person appearances will be held at a location that is reasonably convenient to both parties with due consideration of their ability to travel and other pertinent circumstances. If the parties are unable to agree on a location, such determination should be made by the AAA or by the arbitrator. The arbitrator&rsquo;s decision will follow the terms of this Agreement and will be final and binding. The arbitrator will have authority to award temporary, interim or permanent injunctive relief or relief providing for specific performance of this Agreement, but only to the extent necessary to provide relief warranted by the individual claim before the arbitrator. The award rendered by the arbitrator may be confirmed and enforced in any court having jurisdiction thereof. Notwithstanding any of the foregoing, nothing in this Agreement will preclude Client from bringing issues to the attention of federal, state or local agencies and, if the law allows, they can seek relief against us for you.</p><p>&nbsp;</p><p><strong>18. Miscellaneous</strong></p><p>&nbsp;</p><p>18.1. No person other than the Client shall have any rights under this Agreement.</p><p>&nbsp;</p><p>18.2. Client may not assign any rights under this Agreement to any third party without the prior consent of the Company. The Company at its sole discretion may assign its rights and obligations under this Agreement in full or in part to any third party.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>18.3. If any part of this Agreement is found by a court of competent jurisdiction to be invalid, unlawful or unenforceable then such part shall be severed from the remainder of the Agreement, which shall continue to be valid and enforceable to the fullest extent permitted by law.</p><p>&nbsp;</p><p>18.4. THE USE OF THE SERVICES IS SOLELY AT CLIENT`S OWN RISK. THE SERVICES ARE PROVIDED ON AN &quot;AS IS&quot; AND &quot;AS AVAILABLE&quot; BASIS. THE COMPANY EXPRESSLY DISCLAIMS ALL WARRANTIES OF ANY KIND WITH RESPECT TO THE WEBSITE AND SERVICE, WHETHER EXPRESS OR IMPLIED INCLUDING WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, NON-INFRINGEMENT OF INTELLECTUAL PROPERTY OR ARISING FROM A COURSE OF DEALING, USAGE OR TRADE PRACTICE. SOME STATES DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES, SO THE ABOVE EXCLUSIONS MAY NOT APPLY TO THE CLIENT. THE COMPANY MAKES NO WARRANTY THAT THE SITE OR SERVICE WILL MEET CLIENT`S REQUIREMENTS, OR WILL BE UNINTERRUPTED, TIMELY, SECURE, CURRENT, ACCURATE, COMPLETE OR ERROR-FREE OR THAT THE RESULTS THAT MAY BE OBTAINED BY USE OF THE SITE OR SERVICE WILL BE ACCURATE OR RELIABLE. CLIENT UNDERSTAND AND ACKNOWLEDGE THAT HIS/HER SOLE AND EXCLUSIVE REMEDY WITH RESPECT TO ANY DEFECT IN OR DISSATISFACTION WITH THE SITE OR SERVICE IS TO CEASE TO USE THE SERVICES. CLIENT MAY HAVE OTHER RIGHTS, WHICH MAY VARY FROM STATE TO STATE.</p><p>&nbsp;</p><p>18.5. BY USING THE SERVICE OR ACCESSING THE WEBSITE OR SERVICE, CLIENT HEREBY ACKNOWLEDGE THAT HE/SHE HAVE READ THIS AGREEMENT, UNDERSTOOD IT, AND AGREES TO BE BOUND BY ITS TERMS AND CONDITIONS.</p><p>&#39;</p>', '<h2>Data protection policy</h2><p><strong>KETO CYCLE COMMITMENT TO PRIVACY</strong></p><p>Kilo Group LTD, its subsidiaries and affiliates are committed to managing personal information in accordance with the Lithuanian Privacy Principles under the&nbsp;<em>Privacy Act 1988</em>&nbsp;(Cth), the General Data Protection Regulation (EU) 2016/679 (<strong>GDPR</strong>) and in accordance with other applicable privacy laws.</p><p>This document sets out our policies for managing your personal information and is referred to as our&nbsp;<strong>Privacy Policy</strong>.</p><p>In this Privacy Policy, &quot;<strong>we</strong>&quot;, &quot;<strong>us</strong>&quot; and &ldquo;<strong>our</strong>&rdquo; refers to Keto Cycle and &quot;<strong>you</strong>&quot; refers to any individual about whom we collect personal information.</p><p>This Privacy Policy applies to all personal information collected by us, or submitted to us, whether offline or online, including personal information collected or submitted through our website www.ketocycle.diet, through our official social media channel pages which we control (such as our Keto Cycle Facebook page), as well as through email messages that we send to you.</p><p><strong>ABOUT KETO CYCLE</strong></p><p>Keto Cycle is an online ness and wellness program.</p><p>Keto Cycle offers a range of services, including online workout and nutrition tutorials.</p><p><strong>WHAT INFORMATION DOES KETO CYCLE COLLECT ABOUT YOU?</strong></p><p><em><strong>Members and prospective members</strong></em></p><p>When you enquire about our services or when you subscribe or become a member of Keto Cycle , a record is made which includes your personal information.</p><p>The type of personal information that we collect will vary depending on the circumstances of collection and the kind of service that you request from us, but will typically include:</p><p><em><strong>Prospective employees/applicants</strong></em></p><p>We collect personal information when recruiting personnel, such as your name, contact details, qualifications and work history. Generally, we will collect this information directly from you.</p><p>We may also collect personal information from third parties in ways which you would expect (for example, from recruitment agencies or referees you have nominated). Before offering you a position, we may collect additional details such as your tax file number and superannuation information and other information necessary to conduct background checks to determine your suitability for certain positions.</p><p>We may also collect relevant information from third party sources such as [LinkedIn] and other professional websites.</p><p><em><strong>Other individuals</strong></em></p><p>Keto Cycle may collect personal information about other individuals who are not members of Keto Cycle . This includes customers and members of the public who participate in events we are involved with; individual service providers and contractors to Keto Cycle ; and other individuals who interact with Keto Cycle on a commercial basis. The kinds of personal information we collect will depend on the capacity in which you are dealing with Keto Cycle . Generally, it would include name, contact details, and information regarding our interactions and transactions with you.</p><p>If you are participating in an event we are managing or delivering, we may take images or audio-visual recordings which identify you.</p><p>You can always decline to give Keto Cycle any personal information we request, but that may mean we cannot provide you with some or all of the services you have requested. If you have any concerns about personal information we have requested, please let us know.</p><p><em><strong>Your sensitive information</strong></em></p><p>Keto Cycle may collect and process your sensitive information or special category data, such as your health information, generally with your express consent and only as reasonably necessary in order for us to provide our services to you. We may also collect such information about you in an emergency or otherwise with your consent or in accordance with applicable laws.</p><p><em><strong>Visitors to our websites</strong></em></p><p>The way in which we handle the personal information of visitors to our websites is discussed below.</p><p><em><strong>What happens if you don&rsquo;t provide your personal information?</strong></em></p><p>You can always decline to give Keto Cycle any personal information we request, but that may mean we cannot provide you with some or all of the services you have requested or we may not be able to do business with you effectively. If you have any concerns about personal information we have requested, please let us know.</p><p><strong>HOW AND WHY DOES KETO CYCLE COLLECT AND USE YOUR PERSONAL INFORMATION?</strong></p><p>Keto Cycle collects personal information reasonably necessary to carry out our business, to assess and manage our members&#39; needs, and provide our services to you. We may also collect information to fulfil administrative functions associated with these services, for example billing, entering into contracts with you and/or third parties and managing member relationships.</p><p>The purposes for which Keto Cycle usually collects and uses personal information depends on the nature of your interaction with us, but may include:</p><ul>	<li>	<p>third party suppliers and contractors who assist us to operate our business.</p>	</li>	<li>	<p>our affiliated and related companies;</p>	</li>	<li>	<p>to improve the relevance of marketing messages we may send you (which you can opt out of as explained below).</p>	</li>	<li>	<p>to bring to your attention (in person or by post, email or telephone) information about additional services offered by us and/or our [global affiliates], which may be of interest to you, unless you indicate at any time that you do not wish us to do so; and</p>	</li>	<li>	<p>if instructed to do so by you or where you give us your consent to the use and/or processing involved;</p>	</li>	<li>	<p>to share information with relevant third parties in the context of a sale or potential sale of a relevant part of our business, subject always to confidentiality obligations;</p>	</li>	<li>	<p>to prevent or detect abuse of our services or any of our rights (and attempts to do so), and to enforce or apply our Privacy Policy and/or any other agreement (such as your membership agreement with us) and to protect our (or others&#39;) property or rights;</p>	</li>	<li>	<p>to check your instructions to us, to analyse, assess and improve our services to members, as well as for training and quality purposes, we may monitor, record and analyse any communications between you and us, including phone calls;</p>	</li>	<li>	<p>to fulfil our obligations under any reporting agreement entered into with any tax authority or revenue service(s) from time to time;</p>	</li>	<li>	<p>to comply with any requirement of any applicable statute, regulation, rule and/or good practice, whether originating from [Lithuanian] or elsewhere;</p>	</li>	<li>	<p>to follow up with you after you request information to see if we can provide any further assistance (for example if you enquire about a membership package);</p>	</li>	<li>	<p>to confirm your identity and carry out background checks, including as part of our checks in relation to your application to become a subscriber member;</p>	</li>	<li>	<p>for our reasonable commercial purposes (including quality control and administration and assisting us to develop new and improved products and services);</p>	</li>	<li>	<p>responding to enquires and complaints.</p>	</li>	<li>	<p>recruitment processes; and</p>	</li>	<li>	<p>informing you of our activities, events, facilities and services;</p>	</li>	<li>	<p>researching, developing and expanding our facilities and services;</p>	</li>	<li>	<p>managing, planning, advertising and administering programs, events, competitions and performances;</p>	</li>	<li>	<p>responding to requests for information and other general inquiries;</p>	</li>	<li>	<p>to record statistical data for marketing analysis from members;</p>	</li>	<li>	<p>to obtain opinions or comments about products and/or services from members;</p>	</li>	<li>	<p>to provide information about products, services and/or special offers to members;</p>	</li>	<li>	<p>to fulfil obligations under a membership agreement and/or any other contract you may have with us;</p>	</li>	<li>	<p>any additional personal information you provide to us, or authorise us to collect, as part of your interaction or membership with Keto Cycle .</p>	</li>	<li>	<p>any additional information relating to you that you provide to us directly through our websites or by other means such as over the phone, via email or in person; information you provide to us via voluntary members feedback or engagement surveys;</p>	</li>	<li>	<p>your login details and passwords which you use to access your account with us as well as your online interactions with us;details of the products and services (such as membership options) you have purchased from us or which you have enquired about, together with any additional information necessary to deliver those products and services and to respond to your enquiries;</p>	</li>	<li>	<p>your ness and nutrition statistics which you provide to us;</p>	</li>	<li>	<p>your age;</p>	</li></ul><p>In addition, some of your personal information may be used for other business purposes. Examples of the types of uses are set out below:</p><p>Keto Cycle generally collects personal information directly from you. We may collect and update your personal information over the phone, by email, over the internet or social media, or in person. We may also collect personal information about you from other sources, for example:</p><p>Keto Cycle also collects and uses personal information for market research purposes and to innovate our delivery of products and services. We have a legitimate interest in using your information in the ways listed above. In some cases it will be lawful for us to collect and use your personal information, for example where it is necessary as part of our, or a third party&rsquo;s, statutory or public functions or because the law permits or requires us to.</p><p><strong>HOW DOES KETO CYCLE INTERACT WITH YOU VIA THE INTERNET?</strong></p><p>You may visit our website https://www.ketocycle.diet/ without identifying yourself.<strong>&nbsp;</strong>If you identify yourself (for example, by providing your contact details in an enquiry / logging into our online membership portal), any personal information you provide to Keto Cycle will be managed in accordance with this Privacy Policy.</p><p>Keto Cycle websites may contain links to third-party websites. Keto Cycle is not responsible for the content or privacy practices of websites that are linked to our website.</p><p><em><strong>Keto Cycle cookies policy</strong></em></p><p><strong>What is a cookie?</strong></p><p>Keto Cycle websites use cookies. A &#39;cookie&#39; is a small file stored on your computer&#39;s browser, which assists in managing customised settings of the website and delivering content. We collect certain information such as your device type, browser type, IP address, pages you have accessed on our websites and on third-party websites.</p><p>While the cookie may identify your computer, it should not identify you unless you are registered with our website (for example, because you are a member and subscribe to our website) or logged in using your social media profile. In that case, the cookie will be linked to your profile so that we can identify you and provide more relevant content.</p><p><strong>Why we use cookies</strong></p><p>We use cookies to personalise your browsing experience (for example, by remembering your preferences and recognising you as a repeat visitor to our website), and to track statistics about the usage of our website. This allows us to better understand our members and improve the layout and functionality of our websites.</p><p><strong>The types of cookies we use</strong></p><p>Specifically, we use the following cookies:<br /><strong>Strictly necessary cookies</strong>: are required for the operation of our website, such as cookies that enable you to log into secure areas of our website (for example, our membership portal).<br /><strong>Analytical/performance cookies</strong>: allow us to count the number of users and see how users move around our website when they are using it. This helps us to improve the way our website works, for example, by ensuring that users are finding what they are looking for easily.<br /><strong>Targeting cookies</strong>: these cookies record your visit to our website, the pages you have visited and the links you have followed. We will use this information, subject to your choices and preferences, to make our website and any advertising displayed on it more relevant to your interests.<br /><strong>Third party/sharing cookies</strong>: are cookies that are set by a domain other than the one being visited by you. If you visit our website and a separate company sets a cookie through that website this is a third party cookie. To try to bring you offers and advertisements that are of interest to you, we have relationships with third party companies including [Google, Adobe Analytics, Facebook, LinkedIn] (<strong>Third Party Providers</strong>) that allow them to place cookies on our websites.</p><p>These Third Party Providers may:<br />use Third Party Cookies, web beacons, and other storage technologies to collect or receive information from our Websites and elsewhere on the internet;<br />compare de-identified information from us with information collected elsewhere on the internet; and<br />use that information to provide measurement services and target ads to you.</p><p><strong>How long cookies will be stored on your device</strong></p><p>Session cookies are temporary. They allow website operators to link the actions of a user during a browser session, the time period between a user opening a browser window and closing it. Once closed, the cookies are deleted. Persistent cookies remain on a user&rsquo;s device for the period of time specified in the cookie.</p><p><strong>How you can manage your cookies</strong></p><p>If you do not wish to receive any cookies (other than those which are strictly necessary) you may set your browser (such as Firefox, Google Chrome, Internet Explorer or Safari) to either prompt or refuse cookies. Please note that rejecting cookies may mean that not all the functions on our Websites you visit will be available to you.</p><p>If you do not wish to receive any cookies (other than those that are strictly necessary) you can use the settings in your browser to control how your browser deals with cookies (e.g. to either prompt or refuse cookies). However, in doing so, you may be unable to access certain pages or content on our website.</p><p><strong>CAN YOU DEAL WITH KETO CYCLE ANONYMOUSLY?</strong></p><p>Keto Cycle will provide you with the opportunity of remaining anonymous or using a pseudonym in your dealings with us where it is lawful and practicable (for example, when making a general enquiry). Generally it is not practicable for Keto Cycle to deal with you anonymously or pseudonymously on an ongoing basis. If we do not collect personal information about you, you may be unable to utilise our services or participate in our events, programs or activities we manage or deliver.</p><p><strong>HOW DOES KETO CYCLE HOLD INFORMATION?</strong></p><p>Keto Cycle stores information in paper-based files or other electronic record keeping methods in secure databases (including trusted third party storage providers based in [Lithuanian and the United States). Personal information may be collected in paper-based documents and converted to electronic form for use or storage (with the original paper-based documents either archived or securely destroyed). We take reasonable steps to protect your personal information from misuse, interference and loss and from unauthorised access, modification or disclosure.</p><p>Keto Cycle maintains physical security over paper and electronic data stores, such as through locks and security systems at our premises. We also maintain computer and network security; for example, we use firewalls (security measures for the Internet) and other security systems such as user identifiers and passwords to control access to our computer systems.</p><p>Our websites do not necessarily use encryption or other technologies to ensure the secure transmission of information via the internet. Users of our websites are encouraged to exercise care in sending personal information via the internet.</p><p><strong>HOW LONG WILL YOUR PERSONAL INFORMATION BE KEPT BY KETO CYCLE</strong></p><p>We will only keep the personal information we collect about you for as long as is necessary for the purposes set out in this Privacy Policy or as required to comply with any legal obligations to which we are subject. The retention periods we apply take account of:<br />legal and regulatory requirements and guidance;<br />limitation periods that apply in respect of taking legal action;<br />our ability to defend ourselves against legal claims and complaints;<br />good practice; and<br />the operational requirements of our business.</p><p>We take steps to destroy or de-identify information that we no longer require or as required by an applicable law.</p><p><strong>DOES KETO CYCLE USE OR DISCLOSE YOUR PERSONAL INFORMATION FOR DIRECT MARKETING?</strong></p><p>Keto Cycle may use or disclose your personal information for the purpose of informing you about our services, upcoming promotions and events, or other opportunities that may interest you or as otherwise permitted under applicable privacy laws.</p><p>This means under certain privacy laws we do not always need your consent to send you marketing communications such as our member newsletter. However, where consent is required under applicable privacy laws, we will ask for this consent separately and clearly. If you do not want to receive direct marketing communications, you can opt-out at any time by contacting us using the contact details below or using the opt-out functionality contained in the electronic message.</p><p>If you opt-out of receiving marketing material from us, Keto Cycle may still contact you in relation to its ongoing relationship with you.</p><p><strong>HOW DOES KETO CYCLE USE AND DISCLOSE PERSONAL INFORMATION?</strong></p><p><em><strong>For members</strong></em></p><p>The purposes for which we may use and disclose your personal information will depend on the services we are providing you. For example, if you have engaged us to deliver a service, we may disclose information about you to service providers (including a personal trainer who is a contractor) where this is relevant to our services.</p><p><em><strong>For customers and participants</strong></em></p><p>If you are a customer or participant in an event, we may disclose your personal information to venues where this is reasonably necessary for, and relevant to, the delivery of the event. We may use images or audio-visual recordings which identify you for promotional purposes where you would reasonably expect this to occur.</p><p><em><strong>Disclosure to contractors and other service providers</strong></em></p><p>Keto Cycle may disclose information to third parties we engage in order to provide our services, including contractors and service providers used for data processing, data analysis, customer satisfaction surveys, information technology services and support, website maintenance/development, printing, archiving, mail-outs, and market research.</p><p>Personal information may also be shared between related and affiliated companies of Keto Cycle , located in [Lithuanian and overseas].</p><p>Third parties to whom we have disclosed your personal information may contact you directly to let you know they have collected your personal information and to give you information about their privacy policies.</p><p><em><strong>Use and disclosure for administration and management</strong></em></p><p>Keto Cycle will also use and disclose personal information for a range of administrative, management and operational purposes. This includes:<br />administering billing and payments and debt recovery;<br />planning, managing, monitoring and evaluating our services;<br />quality improvement activities;<br />statistical analysis and reporting;<br />training staff, contractors and other workers;<br />risk management and management of legal liabilities and claims (for example, liaising with insurers and legal representatives);<br />responding to enquiries and complaints regarding our services;<br />obtaining advice from consultants and other professional advisers; and<br />responding to subpoenas and other legal orders and obligations.</p><p><em><strong>Other uses and disclosures</strong></em></p><p>We may use and disclose your personal information for other purposes explained at the time of collection (such as in a specific privacy collection statement or notice) or otherwise as set out in this Privacy Policy.</p><p><strong>DOES KETO CYCLE DISCLOSE YOUR PERSONAL INFORMATION OVERSEAS?</strong></p><p>Keto Cycle is a global organisation and works with members, service providers, sponsors and commercial interests across the globe. It is likely that your personal information will be disclosed to overseas recipients including service providers who may handle, process or store your personal information on our behalf.</p><p>The recipients of such information may be located in USA or Lithuanian.</p><p>Entities, which are related entities of Keto Cycle , or are otherwise affiliated with Keto Cycle , have operations in USA and Lithuanian</p><p>We generally collect personal information about you in Lithuanian or the jurisdiction in which the Keto Cycle affiliate you are dealing with is located.</p><p>It is likely that your personal information will be transferred outside of the jurisdiction it was collected. We only ever disclose your personal information outside the jurisdiction it was collected where we are permitted to do so under applicable privacy laws. Generally this means we will take reasonable steps to ensure your personal information is treated securely and in accordance with applicable privacy laws, including, where relevant, by entering into EU standard contractual clauses (or equivalent measures) with the party outside the European Economic Area. The EU standard contractual clauses are available&nbsp;<a href=\"https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en\"><strong>here</strong></a>.</p><p>There are circumstances where we may disclose your personal information to an overseas recipient. For example, you have provided your consent or we are otherwise permitted to do so under the Lithuanian Privacy Principles or other relevant laws.</p><p><strong>RESIDENTS IN THE EUROPEAN ECONOMIC AREA</strong></p><p>We have described the purposes for which we may use your personal information. If the GDPR applies to you, we are permitted to process your personal information in this way, in compliance with the GDPR, by relying on one or more of the following lawful grounds:<br />you have explicitly agreed to us processing your information for a specific reason;<br />the processing is necessary to perform the agreement we have with you or to take steps to enter into an agreement with you;<br />the processing is necessary for compliance with a legal obligation we have; or<br />the processing is necessary for the purposes of a legitimate interest pursued by us, which might be:<br />to prevent fraud;<br />to protect our business interests;<br />to ensure that complaints are investigated; to evaluate, develop or improve our products; or<br />to keep our clients informed about relevant products and services, unless you have indicated at any time that you do not wish us to do so.</p><p>If the GDPR applies to you, you have the following additional and specific rights in relation to your personal information (where applicable):</p><p><strong>Access</strong>: you have the right to request a copy of any personal information we hold about you. Any request for access to or a copy of your personal information must in writing and we will endeavour to respond within a reasonable period and in any event within one month (in compliance with the GDPR).<br /><strong>Rectification</strong>: you have the right to the rectification of your personal data, if you consider that it is inaccurate.<br /><strong>Deletion</strong>: you have the right to request that we delete personal information that we process about you, except we are not obliged to do so if we need to retain such personal information in order to comply with a legal obligation or to establish, exercise or defend legal claims.<br /><strong>Restriction</strong>: you have the right to erasure of your personal information, if you consider that we do not have the right to hold it.<br /><strong>Portability</strong>: you have the right to ask us to transfer a copy of your personal information to you or to another service provider or third party where technically feasible.<br /><strong>Objection</strong>: you have the right to object to your personal information being processed for a particular purpose or to request that we stop using your information.<br /><strong>Complaint</strong>: If you are unhappy with our treatment of your personal information, and you have contacted us as set out below, you have the right to lodge a complaint with thelocal data protection authority.</p><p>If you have consented to our processing of your personal information, you have the right to withdraw, at any time, any consent that you have previously given to us for use of your personal information. In certain circumstances even if you withdraw your consent we may still be able to process your personal information if required or permitted by law or for the purpose of exercising or defending our legal rights or meeting our legal and regulatory obligations.</p><p>To make a request to exercise any of these rights (where applicable) in relation to your personal information, please contact us using the contact details below.</p><p><strong>HOW CAN YOU ACCESS OR SEEK CORRECTION OF YOUR PERSONAL INFORMATION?</strong></p><p>You are entitled to access your personal information held by Keto Cycle on request. To request access to your personal information please contact our Privacy Officer using the contact details set out below.</p><p>We will take reasonable steps to ensure that the personal information we collect, use or disclose is accurate, complete and up-to-date. You can help us to do this by letting us know if you notice errors or discrepancies in information we hold about you and letting us know if your personal details change.</p><p>However, if you consider any personal information we hold about you is inaccurate, out-of-date, incomplete, irrelevant or misleading you are entitled to request correction of the information. After receiving a request from you, we will take reasonable steps to correct your information.</p><p>We may decline your request to access or correct your personal information in certain circumstances in accordance with the Lithuanian Privacy Principles. If we do refuse your request, we will provide you with a reason for our decision and, in the case of a request for correction, we will include a statement with your personal information about the requested correction.</p><p><strong>WHAT SHOULD YOU DO IF YOU HAVE A COMPLAINT ABOUT THE HANDLING OF YOUR PERSONAL INFORMATION?</strong></p><p>You may contact Keto Cycle at any time if you have any questions or concerns about this Privacy Policy or about the way in which your personal information has been handled.</p><p>You may make a complaint about privacy to the Privacy Officer at the contact details set out below.</p><p>The Privacy Officer will first consider your complaint to determine whether there are simple or immediate steps, which can be taken to resolve the complaint. We will generally respond to your complaint within a week.</p><p>If your complaint requires more detailed consideration or investigation, we will acknowledge receipt of your complaint within a week and endeavour to complete our investigation into your complaint promptly. We may ask you to provide further information about your complaint and the outcome you are seeking. We will then typically gather relevant facts, locate and review relevant documents and speak with individuals involved.</p><p>In most cases, we will investigate and respond to a complaint within 30 days of receipt of the complaint. If the matter is more complex or our investigation may take longer, we will let you know.</p><p>If you are not satisfied with our response to your complaint, or you consider that Keto Cycle may have breached the Lithuanian Privacy Principles or the Privacy Act, a complaint may be made to the Office of the Lithuanian Information Commissioner.</p><p>If you are outside of Lithuanian you may wish to take your complaint up with the local data protection authority in your jurisdiction.</p><p><strong>HOW CHANGES ARE MADE TO THIS PRIVACY POLICY?</strong></p><p>Keto Cycle may amend this Privacy Policy from time to time, with or without notice to you. We recommend that you visit our website regularly to keep up to date with any changes. We also try to let you know about major changes to our Privacy Policy (for example by putting a notice up on our website).</p><p><strong>HOW CAN YOU CONTACT KETO CYCLE ?</strong></p><p>The contact details for Keto Cycle are:<br />Keto Cycle Privacy Officer<br />Antakalnio 17, Vilnius, Lithuania<br />hello@ketocycle.diet</p><p>This Privacy Policy was last updated on 1 August 2018</p>', '<h2>Contact us</h2><p><strong>Company</strong><br />Kilo Group Ltd.<br /><strong>Company code</strong><br />303157579<br /><strong>Address of registration</strong><br />Ramybės g. 4-70, Vilnius<br />Lithuania<br />European Union</p><p><strong>Address</strong><br />Antakalnio g. 17, Vilnius<br />Lithuania<br />European Union<br /><strong>Email</strong><br />hello@ketocycle.diet<br />&nbsp;</p>', 1, '2019-02-21 03:03:05', '2019-02-25 01:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Active',
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `description`, `image`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Mark Alviro Wiens', 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory', '1550748480t2.png', 'Active', 1, '2019-02-21 01:31:58', '2019-02-25 02:54:31'),
(2, 'Mark Alviro Wiens', 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory', '1550748593t3.png', 'Active', 1, '2019-02-21 06:29:53', '2019-02-21 06:29:53'),
(3, 'Mark Alviro Wiens', 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory', '1550748750user2.png', 'Active', 1, '2019-02-21 06:30:23', '2019-02-21 06:32:30'),
(4, 'Mark Alviro Wiens', 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory', '1550748759user1.png', 'Active', 1, '2019-02-21 06:30:50', '2019-02-21 06:32:39'),
(5, 'Mark Alviro Wiens', 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory', '1551081253t3.png', 'Active', 1, '2019-02-21 06:31:13', '2019-02-25 02:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isGoOnAppoints` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `gender` enum('male','female','na') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'na',
  `dob` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `longitude` double(10,6) DEFAULT NULL,
  `latitude` double(10,6) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fname`, `lname`, `phonenumber`, `isGoOnAppoints`, `mobile`, `email`, `email_verified_at`, `avatar`, `password`, `role_id`, `gender`, `dob`, `status`, `longitude`, `latitude`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shahid Umar', 'Noman', 'shah', '+923038869074', '0', '03445000084', 'shahnoman1001@gmail.com', NULL, '1551099844t3.png', '$2y$10$nR20zJtl9lrqHiguXCd82.4Lyo2ah.YbTYucpjcekWg..jocWqL.6', 1, 'male', '1980-04-15', 1, NULL, NULL, 'pgOfTRN21eY1ffB2jGlvWNaJyDxwPjKeNJOMYqbHUMttPcONsavAXPi9sChg', '2018-10-20 05:01:26', '2019-02-24 19:00:00'),
(2, 'Khalid Khan', NULL, NULL, NULL, NULL, '123456', 'khalid@khan.com', NULL, 'placeholder.png', '$2y$10$vzn38KJY5l93XUpDst9iVulcdObMPldHzcSE5SbAUFkwGHwDxuqXq\r\n', 1, 'na', NULL, 2, NULL, NULL, 'ibBogEqeazZCZ2O6okTKg8boIeVewzAZrwEZshcZzLFoaZpmfJlpEYujBdvV', '2018-10-23 05:26:34', '2018-11-14 05:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id` int(11) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `target_weight` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id`, `gender`, `name`, `email`, `age`, `weight`, `target_weight`, `height`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Male', 'sdfsdfsdf', 'shahnoman1001@gmail.com', '22', '66', '55', '5', 'Active', '2019-02-26 01:06:53', '2019-02-26 01:06:53'),
(2, 'Male', 'sdfsdfsdf', 'shahnoman1001@gmail.com', '22', '66', '55', '5', 'Active', '2019-02-26 01:12:14', '2019-02-26 01:12:14'),
(3, 'Male', 'sdfsdfsdf', 'shahnoman1001@gmail.com', '22', '66', '55', '5', 'Active', '2019-02-26 01:14:30', '2019-02-26 01:14:30'),
(7, 'Male', 'dfsdfsdfsf', 'shahnoman1001@gmail.com', '33', '33', '33', '33', 'Active', '2019-02-26 01:52:58', '2019-02-26 01:52:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminmenus`
--
ALTER TABLE `adminmenus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adminmenus_slug_unique` (`slug`),
  ADD KEY `adminmenus_parentid_foreign` (`parentid`);

--
-- Indexes for table `authentication_log`
--
ALTER TABLE `authentication_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authentication_log_authenticatable_type_authenticatable_id_index` (`authenticatable_type`,`authenticatable_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_answers`
--
ALTER TABLE `question_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_user_id_foreign` (`user_id`),
  ADD KEY `roles_last_modified_by_foreign` (`last_modified_by`);

--
-- Indexes for table `siteconfigs`
--
ALTER TABLE `siteconfigs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminmenus`
--
ALTER TABLE `adminmenus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `authentication_log`
--
ALTER TABLE `authentication_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `question_answers`
--
ALTER TABLE `question_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siteconfigs`
--
ALTER TABLE `siteconfigs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminmenus`
--
ALTER TABLE `adminmenus`
  ADD CONSTRAINT `adminmenus_parentid_foreign` FOREIGN KEY (`parentid`) REFERENCES `adminmenus` (`id`);

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_last_modified_by_foreign` FOREIGN KEY (`last_modified_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
