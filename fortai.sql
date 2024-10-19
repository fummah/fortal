-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2024 at 01:51 PM
-- Server version: 8.3.0
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fortai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_followups`
--

DROP TABLE IF EXISTS `admin_followups`;
CREATE TABLE IF NOT EXISTS `admin_followups` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(5) NOT NULL,
  `description` text NOT NULL,
  `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entered_by` varchar(50) NOT NULL,
  `related_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4:timer', 'i:1728423675;', 1728423675),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'i:1;', 1728423675),
('c1dfd96eea8cc2b62785275bca38ac261256e278:timer', 'i:1728423675;', 1728423675),
('c1dfd96eea8cc2b62785275bca38ac261256e278', 'i:1;', 1728423675),
('fortunematenda@gmail.com|127.0.0.1:timer', 'i:1728476290;', 1728476290),
('fortunematenda@gmail.com|127.0.0.1', 'i:4;', 1728476290),
('eliane.cole@example.com|127.0.0.1:timer', 'i:1728434070;', 1728434070),
('eliane.cole@example.com|127.0.0.1', 'i:4;', 1728434070);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacted_lead`
--

DROP TABLE IF EXISTS `contacted_lead`;
CREATE TABLE IF NOT EXISTS `contacted_lead` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `lead_id` int NOT NULL,
  `status` enum('Pending','Hired','Lost','Cancelled') NOT NULL DEFAULT 'Pending',
  `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entered_by` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lead_id` (`lead_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacted_lead`
--

INSERT INTO `contacted_lead` (`id`, `user_id`, `lead_id`, `status`, `date_entered`, `entered_by`) VALUES
(1, 23, 5, 'Pending', '2024-10-09 06:44:23', 0),
(2, 23, 6, 'Pending', '2024-10-09 06:44:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `credits_trail`
--

DROP TABLE IF EXISTS `credits_trail`;
CREATE TABLE IF NOT EXISTS `credits_trail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `credits` int NOT NULL,
  `lead_id` int NOT NULL,
  `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entered_by` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `lead_id` (`lead_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credits_trail`
--

INSERT INTO `credits_trail` (`id`, `user_id`, `credits`, `lead_id`, `date_entered`, `entered_by`) VALUES
(1, 26, 4, 7, '2024-10-13 21:56:14', 26),
(2, 26, 4, 7, '2024-10-13 21:59:45', 26),
(3, 26, 4, 7, '2024-10-13 22:01:09', 26),
(4, 26, 4, 7, '2024-10-13 22:10:09', 26),
(5, 26, 4, 7, '2024-10-13 22:38:18', 26),
(6, 26, 4, 7, '2024-10-13 22:38:20', 26),
(7, 26, 4, 7, '2024-10-13 22:40:33', 26),
(8, 26, 12, 6, '2024-10-13 22:41:16', 26),
(9, 26, 4, 7, '2024-10-13 22:42:00', 26),
(10, 26, 10, 3, '2024-10-13 22:51:06', 26),
(11, 26, 4, 7, '2024-10-13 23:00:32', 26),
(12, 26, 4, 7, '2024-10-14 00:27:08', 26),
(13, 26, 4, 7, '2024-10-14 01:28:48', 26),
(14, 26, 4, 7, '2024-10-14 11:11:39', 26),
(15, 26, 4, 7, '2024-10-14 12:38:33', 26),
(16, 28, 12, 6, '2024-10-14 14:21:39', 28),
(17, 26, 12, 4, '2024-10-14 18:19:21', 26),
(18, 26, 4, 7, '2024-10-14 18:57:56', 26),
(19, 26, 4, 7, '2024-10-14 20:25:42', 26),
(20, 26, 12, 6, '2024-10-14 20:26:15', 26),
(21, 26, 4, 7, '2024-10-14 20:27:06', 26),
(22, 26, 4, 7, '2024-10-14 20:31:56', 26),
(23, 26, 4, 7, '2024-10-14 20:32:07', 26),
(24, 26, 4, 7, '2024-10-16 11:18:09', 26),
(25, 26, 4, 7, '2024-10-16 22:48:02', 26),
(26, 26, 4, 7, '2024-10-16 22:48:04', 26),
(27, 26, 4, 7, '2024-10-16 22:48:05', 26),
(28, 26, 4, 7, '2024-10-16 22:48:06', 26),
(29, 26, 4, 9, '2024-10-18 10:41:23', 26),
(30, 26, 4, 7, '2024-10-18 11:48:55', 26),
(31, 26, 4, 9, '2024-10-18 11:49:34', 26),
(32, 26, 12, 6, '2024-10-18 11:49:48', 26),
(33, 26, 4, 9, '2024-10-18 13:37:25', 26);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_name` text NOT NULL,
  `category` enum('Profile','Lead') NOT NULL,
  `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entered_by` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

DROP TABLE IF EXISTS `leads`;
CREATE TABLE IF NOT EXISTS `leads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `service_id` int NOT NULL,
  `credits` int NOT NULL,
  `status` enum('Unavailable','Bought','Open') NOT NULL DEFAULT 'Open',
  `date_entered` datetime NOT NULL,
  `entered_by` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `estimate_quote` decimal(13,2) NOT NULL DEFAULT '0.00',
  `urgent` tinyint(1) NOT NULL DEFAULT '0',
  `hiring_decision` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `user_id`, `service_id`, `credits`, `status`, `date_entered`, `entered_by`, `description`, `estimate_quote`, `urgent`, `hiring_decision`) VALUES
(1, 1, 2, 10, 'Open', '2024-10-09 01:06:28', '', 'NDODA SADZA', 0.00, 0, 0),
(2, 2, 2, 13, 'Open', '2024-10-09 01:06:28', '', 'NDANGA NDAPORONGA', 0.00, 0, 0),
(3, 25, 2, 10, 'Open', '2024-10-09 03:41:45', '', 'Need work to be done', 5000.00, 1, 1),
(4, 23, 3, 12, 'Open', '2024-10-09 04:18:45', '', 'Gadzirisa zvinhu', 0.00, 1, 1),
(5, 27, 4, 13, 'Open', '2024-10-09 04:18:45', '', 'Chaporonga', 0.00, 0, 0),
(6, 23, 5, 12, 'Open', '2024-10-09 04:21:00', '', 'Kuwuraya chete ma1', 0.00, 1, 1),
(7, 27, 6, 4, 'Open', '2024-10-09 04:21:00', '', 'Kubatabata', 0.00, 1, 1),
(8, 27, 6, 50, 'Open', '2024-10-18 08:23:59', '', 'YEDZZAAAAAAA', 50000.00, 1, 1),
(9, 25, 5, 4, 'Open', '2024-10-18 08:28:02', '', 'NDODA HUKU', 4000.00, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `leads_read`
--

DROP TABLE IF EXISTS `leads_read`;
CREATE TABLE IF NOT EXISTS `leads_read` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lead_id` int NOT NULL,
  `user_id` int NOT NULL,
  `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entered_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lead_id` (`lead_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `leads_read`
--

INSERT INTO `leads_read` (`id`, `lead_id`, `user_id`, `date_entered`, `entered_by`) VALUES
(1, 1, 23, '2024-10-09 05:18:02', ''),
(2, 2, 24, '2024-10-09 05:18:02', '');

-- --------------------------------------------------------

--
-- Table structure for table `lead_notes`
--

DROP TABLE IF EXISTS `lead_notes`;
CREATE TABLE IF NOT EXISTS `lead_notes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lead_id` int NOT NULL,
  `description` text NOT NULL,
  `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entered_by` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `entered_by` (`entered_by`),
  KEY `lead_id` (`lead_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lead_service`
--

DROP TABLE IF EXISTS `lead_service`;
CREATE TABLE IF NOT EXISTS `lead_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lead_id` int NOT NULL,
  `service_details` text NOT NULL,
  `entered_by` int DEFAULT NULL,
  `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `lead_id` (`lead_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lead_service`
--

INSERT INTO `lead_service` (`id`, `lead_id`, `service_details`, `entered_by`, `date_entered`) VALUES
(1, 1, '{\"questions\": {\"1\": [1, 2, 3], \"2\": [2, 3]}}', NULL, '2024-10-09 03:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `master_services`
--

DROP TABLE IF EXISTS `master_services`;
CREATE TABLE IF NOT EXISTS `master_services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `service_name` varchar(255) NOT NULL,
  `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entered_by` varchar(50) NOT NULL DEFAULT 'System',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_services`
--

INSERT INTO `master_services` (`id`, `service_name`, `date_entered`, `entered_by`) VALUES
(1, 'Carpenters and Decking Specialists', '2024-10-09 03:40:49', 'System'),
(2, 'Network, Database, and IT Support', '2024-10-09 03:40:49', 'System'),
(3, 'Solar Panel Installation', '2024-10-09 03:41:10', 'System'),
(4, ' Electricians', '2024-10-09 03:41:10', 'System'),
(5, 'Home Repair and Installation Services', '2024-10-09 03:41:26', 'System'),
(6, 'CCTV Installation', '2024-10-09 03:41:26', 'System'),
(7, 'TV Installation & Mounting', '2024-10-09 03:42:04', 'System'),
(8, 'General Builders', '2024-10-09 03:42:04', 'System'),
(9, 'Plumbing Services', '2024-10-09 03:42:36', 'System'),
(10, 'Handyman Services', '2024-10-09 03:42:36', 'System'),
(11, 'Painter Services', '2024-10-09 03:43:11', 'System'),
(12, 'Flooring and Interior Services', '2024-10-09 03:43:11', 'System');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_04_150220_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('fortunematenda@gmail.com', '$2y$12$CIxo9q8moUvNlrQ195lVS.HCADhAXwj5uYWOGARrYNuLs1LUmWV72', '2024-10-08 21:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `amount` decimal(13,2) NOT NULL,
  `credits` int NOT NULL,
  `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entered_by` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `description` text NOT NULL,
  `rating` int NOT NULL,
  `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entered_by` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_possible_answers`
--

DROP TABLE IF EXISTS `service_possible_answers`;
CREATE TABLE IF NOT EXISTS `service_possible_answers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `service_answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `service_questions_id` int NOT NULL,
  `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entered_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `service_question_id` (`service_questions_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service_possible_answers`
--

INSERT INTO `service_possible_answers` (`id`, `service_answer`, `service_questions_id`, `date_entered`, `entered_by`) VALUES
(1, 'Cabinet installation required\r\n', 1, '2024-10-09 04:06:54', '0'),
(2, 'General Carpentry', 1, '2024-10-09 04:06:54', '0'),
(3, 'Wi-Fi setup needed', 13, '2024-10-09 04:10:33', '0'),
(4, 'Weak signal troubleshooting', 14, '2024-10-09 04:10:33', '0'),
(5, 'Mount TV on wall', 3, '2024-10-09 04:10:53', '0'),
(6, 'Cable management required', 4, '2024-10-09 04:10:53', '0'),
(7, 'New installation required', 5, '2024-10-09 04:16:08', '0'),
(8, 'Monitoring systems needed', 6, '2024-10-09 04:16:08', '0'),
(9, 'Extensions for property', 7, '2024-10-09 04:16:50', '0'),
(10, 'Renovation and refurbishment\r\n', 8, '2024-10-09 04:16:50', '0'),
(11, 'Outlet installation required', 9, '2024-10-09 04:17:29', '0'),
(12, 'Rewiring of property', 10, '2024-10-09 04:17:29', '0'),
(13, 'Network troubleshooting required', 11, '2024-10-09 04:18:08', '0'),
(14, 'Server maintenance needed', 12, '2024-10-09 04:18:08', '0'),
(15, 'Cameras for security', 15, '2024-10-09 04:23:43', '0'),
(16, 'Remote monitoring option', 16, '2024-10-09 04:23:43', '0'),
(17, 'Leak fixing needed', 17, '2024-10-09 04:24:14', '0'),
(18, 'Maintenance for plumbing', 18, '2024-10-09 04:24:14', '0'),
(19, 'Furniture assembly required', 19, '2024-10-09 04:24:45', '0'),
(20, 'Minor repairs needed', 20, '2024-10-09 04:24:45', '0'),
(21, 'Interior walls painting', 21, '2024-10-09 04:25:40', '0'),
(22, 'Exterior siding needs', 22, '2024-10-09 04:25:40', '0'),
(23, 'Existing flooring removal needed', 23, '2024-10-09 04:27:21', '0'),
(24, 'Floor Tiling', 24, '2024-10-09 04:27:21', '0');

-- --------------------------------------------------------

--
-- Table structure for table `service_questions`
--

DROP TABLE IF EXISTS `service_questions`;
CREATE TABLE IF NOT EXISTS `service_questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `service_id` int NOT NULL,
  `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entered_by` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `service_id` (`service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service_questions`
--

INSERT INTO `service_questions` (`id`, `question`, `service_id`, `date_entered`, `entered_by`, `status`) VALUES
(1, 'Describe the Carpentry Service Needed?', 1, '2024-10-09 03:25:09', 0, 0),
(2, 'Specify Key Requirements or Issues?', 1, '2024-10-09 03:26:08', 0, 0),
(3, 'Describe the TV Mounting Service Needed?\r\n', 7, '2024-10-09 03:26:38', 0, 0),
(4, 'Specify Key Requirements or Issues?', 7, '2024-10-09 03:26:55', 0, 0),
(5, 'Describe the Solar Installation Service Needed?', 3, '2024-10-09 03:27:05', 0, 0),
(6, 'Mention Additional Requirements?', 3, '2024-10-09 03:27:25', 0, 0),
(7, 'Describe the Building Service Needed?', 8, '2024-10-09 03:27:38', 0, 0),
(8, 'Detail Any Specific Building Concerns?', 8, '2024-10-09 03:51:32', 0, 0),
(9, 'Describe the Electrical Service Needed?', 4, '2024-10-09 03:53:05', 0, 0),
(10, 'Mention Additional Requirements?', 4, '2024-10-09 03:53:05', 0, 0),
(11, ' Describe the IT Support Service Needed?', 2, '2024-10-09 03:54:15', 0, 0),
(12, 'Detail Your Primary Concerns?', 2, '2024-10-09 03:54:15', 0, 0),
(13, 'Describe the Home Repair and Installation Service Needed?', 5, '2024-10-09 03:57:27', 0, 0),
(14, 'Specify Key Requirements or Issues', 5, '2024-10-09 03:57:27', 0, 0),
(15, 'Describe the CCTV Installation Service Needed?', 6, '2024-10-09 03:58:08', 0, 0),
(16, 'Mention Additional Features', 6, '2024-10-09 03:58:08', 0, 0),
(17, 'Describe the Plumbing Service Neede?', 9, '2024-10-09 04:00:37', 0, 0),
(18, 'Mention Additional Requirements', 9, '2024-10-09 04:00:37', 0, 0),
(19, 'Describe the Handyman Service Needed?', 10, '2024-10-09 04:01:15', 0, 0),
(20, 'List All Tasks and Priorities?', 10, '2024-10-09 04:01:15', 0, 0),
(21, 'Describe the Painting Service Needed?', 11, '2024-10-09 04:01:52', 0, 0),
(22, 'Outline Specific Requirements and Preferences?', 11, '2024-10-09 04:01:52', 0, 0),
(23, 'Describe the Flooring and Interior Services Service Needed?', 12, '2024-10-09 04:02:39', 0, 0),
(24, 'Outline Specific Requirements and Preferences?', 12, '2024-10-09 04:02:39', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('He1Kbi4caCZPerKZl7UvsiKpM5WsF4cRJ6vVf18e', 26, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiR1NpSHhudDhHdEFpUDhXR3dhYmQyQzhHYVNEaGRDTHp4NzFtWFlmZiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcHJvZmlsZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI2O30=', 1729342545);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_company_social_media` tinyint(1) DEFAULT NULL,
  `contact_number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Admin','Expert','Customer') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `category` enum('Normal','Pro User','Pro Expert') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Normal',
  `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entered_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` enum('Pending','Active','Blocked','Condemned') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Pending',
  `credits_balance` int NOT NULL DEFAULT '0',
  `is_phone_verified` tinyint NOT NULL DEFAULT '0',
  `is_email_verified` tinyint NOT NULL DEFAULT '0',
  `logo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'logo.png',
  `badge` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `date_phone_verified` datetime DEFAULT NULL,
  `date_email_verified` datetime DEFAULT NULL,
  `is_company_website` tinyint(1) DEFAULT '0',
  `company_size` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `is_company_sales_team` tinyint(1) DEFAULT '0',
  `company_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_company_social_media`, `contact_number`, `created_at`, `updated_at`, `location`, `role`, `category`, `date_entered`, `entered_by`, `status`, `credits_balance`, `is_phone_verified`, `is_email_verified`, `logo`, `badge`, `date_phone_verified`, `date_email_verified`, `is_company_website`, `company_size`, `is_company_sales_team`, `company_name`, `login_at`) VALUES
(1, 'Fortune', 'Matenda', 'fortunematenda@gmail.com', NULL, '$2y$12$ykmyd6rmDgvf2.dXVhyooeEkyJh1RDFrZOy66hzRt.Z2lT479Cvp2', NULL, NULL, '0612685933', '2024-10-09 00:35:00', '2024-10-09 00:35:00', 'Capetown', NULL, 'Normal', '2024-10-09 04:35:00', 'fortunematenda@gmail.com', 'Pending', 0, 0, 0, 'logo.png', NULL, NULL, NULL, NULL, NULL, NULL, '', '2024-10-09 05:28:28'),
(2, 'Fortune', 'Matenda', 'admin@bretunetechnologies.co.za', NULL, '$2y$12$a85AdNBnd5nGNWwV8S4H7eo5CEEg8u6XxZ.QbYm6A5/msO98SmX56', NULL, NULL, '0612685933', '2024-10-08 22:59:52', '2024-10-08 22:59:52', 'Capetown', NULL, 'Normal', '2024-10-09 02:59:52', 'admin@bretunetechnologies.co.za', 'Pending', 0, 0, 0, 'logo.png', NULL, NULL, NULL, NULL, NULL, NULL, '', '2024-10-09 05:28:28'),
(24, 'Tendai', 'Fuma', 'fummah3@outlook.com', NULL, '$2y$12$1g8rq3jzv/LGL8aFeUykNeUXLagxDn.aY9EJ48ZkGrT/9Dki88BEO', NULL, 1, '+27612685933', '2024-10-09 01:14:40', '2024-10-09 01:14:40', '134 Kommitjie road Fishhoek', 'Expert', 'Normal', '2024-10-09 05:14:40', 'fummah3@outlook.com', 'Pending', 0, 0, 0, 'logo.png', NULL, NULL, NULL, 1, '11-50', 1, NULL, '2024-10-09 05:28:28'),
(23, 'Fortune', 'Matenda', 'admin@bretunetechoonologies.co.za', NULL, '$2y$12$g42N6L/kd1HLmrP00xRVtOCB42lN.dFngU9a1rBoOeaFEpob9TJcO', NULL, 1, '+27612685933', '2024-10-09 01:08:41', '2024-10-09 01:08:41', '134 Kommitjie road Fishhoek', 'Expert', 'Normal', '2024-10-09 05:08:41', 'admin@bretunetechoonologies.co.za', 'Pending', 0, 0, 0, 'logo.png', NULL, NULL, NULL, 1, '2-10', 1, NULL, '2024-10-09 05:28:28'),
(25, 'Brenda', 'Gwari', 'brenda@gmail.com', NULL, '$2y$12$7o.rabwW5spHX7wjwPoHf.fD6UNvCWV3ysZO1n/JCI/37uxf7KTfu', NULL, 1, '+276126985966', '2024-10-09 02:49:02', '2024-10-09 02:49:02', '34 Mukuvisi Masiphumelele', 'Expert', 'Normal', '2024-10-09 06:49:02', 'brenda@gmail.com', 'Pending', 0, 0, 0, 'logo.png', NULL, NULL, NULL, 1, 'Self-employed', 1, NULL, '2024-10-09 06:49:02'),
(26, 'Fortune', 'Matenda', 'admin5@bretunetechnologies.co.za', NULL, '$2y$12$xJPFw1raWvyKVtbfyp6bDuR5zNL2KchNE2Yz8qusB1bpXtQ4r2RGG', 'CrCGWp5HpDmLMYjGV3GBmolTGlOffbf1OrCBI4sXyVGyn4W8ARtGwAtF6D9O', 1, '+27612685933', '2024-10-09 06:14:12', '2024-10-18 16:08:02', 'Farie Knowe', 'Expert', 'Normal', '2024-10-09 10:14:12', 'admin5@bretunetechnologies.co.za', 'Pending', 2, 0, 0, 'logo.png', NULL, NULL, NULL, 1, 'Self-employed', 1, NULL, '2024-10-09 10:14:12'),
(27, 'Advance', 'Matenda', 'advance@gmail.com', NULL, '$2y$12$.jw01RTdufVlhntzFMV3WOhm9E4wyp84KhouQCcIrmOv.U/NYOVUK', NULL, 1, '+27612685933', '2024-10-09 17:35:36', '2024-10-09 17:35:36', '145 Genoa Avenue Fish Hoek', 'Expert', 'Normal', '2024-10-09 21:35:36', 'advance@gmail.com', 'Pending', 10, 0, 0, 'logo.png', NULL, NULL, NULL, 1, 'Self-employed', 1, NULL, '2024-10-09 21:35:36'),
(28, 'Mina', 'Moyo', 'qdeenda5@gmail.com', NULL, '$2y$12$KfhXKbV5EH4601wz9ouGQefjttM8yAMG4LmyqiRjpgGNxRu79QkzS', NULL, 1, '+277612685933', '2024-10-14 10:19:50', '2024-10-14 10:21:39', '12 kuwait', 'Expert', 'Normal', '2024-10-14 14:19:50', 'qdeenda5@gmail.com', 'Pending', 38, 0, 0, 'logo.png', NULL, NULL, NULL, 1, '11-50', 1, NULL, '2024-10-14 14:19:50'),
(29, 'Rachfort', 'Solutions', 'rachfortsolutions@poster9mywall.com', NULL, '$2y$12$5AfXakmspluQFASD55K7YukhYCj.uEDrwlGakSIUgI4ydci8fGblC', NULL, 1, '+27612685933', '2024-10-14 16:36:01', '2024-10-14 16:36:01', '45 Myeza road masi', 'Expert', 'Normal', '2024-10-14 20:36:01', 'rachfortsolutions@poster9mywall.com', 'Pending', 0, 0, 0, 'logo.png', NULL, NULL, NULL, 1, '2-10', 0, NULL, '2024-10-14 20:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_services`
--

DROP TABLE IF EXISTS `user_services`;
CREATE TABLE IF NOT EXISTS `user_services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `service_id` int NOT NULL,
  `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entered_by` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `service_id` (`service_id`),
  KEY `user_id` (`user_id`),
  KEY `entered_by` (`entered_by`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_services`
--

INSERT INTO `user_services` (`id`, `user_id`, `service_id`, `date_entered`, `entered_by`) VALUES
(1, 20, 0, '2024-10-09 02:59:52', 20),
(2, 21, 0, '2024-10-09 04:35:00', 21),
(8, 23, 1, '2024-10-09 05:11:40', 23),
(9, 23, 2, '2024-10-09 05:11:40', 23),
(10, 23, 3, '2024-10-09 05:11:40', 23),
(11, 23, 0, '2024-10-09 05:11:40', 23),
(12, 23, 5, '2024-10-09 05:11:40', 23),
(13, 23, 6, '2024-10-09 05:11:40', 23),
(14, 23, 7, '2024-10-09 05:11:40', 23),
(15, 23, 8, '2024-10-09 05:11:40', 23),
(16, 23, 9, '2024-10-09 05:11:40', 23),
(17, 23, 10, '2024-10-09 05:11:40', 23),
(18, 23, 11, '2024-10-09 05:11:40', 23),
(19, 23, 12, '2024-10-09 05:11:40', 23),
(27, 24, 2, '2024-10-09 06:20:21', 24),
(28, 24, 3, '2024-10-09 06:20:21', 24),
(29, 24, 5, '2024-10-09 06:20:21', 24),
(30, 24, 7, '2024-10-09 06:20:21', 24),
(31, 24, 11, '2024-10-09 06:20:21', 24),
(33, 25, 1, '2024-10-09 06:50:58', 25),
(34, 25, 5, '2024-10-09 06:50:58', 25),
(35, 25, 10, '2024-10-09 06:50:58', 25),
(36, 25, 11, '2024-10-09 06:50:58', 25),
(37, 25, 12, '2024-10-09 06:50:58', 25),
(50, 27, 1, '2024-10-09 21:38:06', 27),
(51, 27, 2, '2024-10-09 21:38:06', 27),
(52, 27, 3, '2024-10-09 21:38:06', 27),
(53, 27, 0, '2024-10-09 21:38:06', 27),
(54, 27, 5, '2024-10-09 21:38:06', 27),
(55, 27, 6, '2024-10-09 21:38:06', 27),
(56, 27, 7, '2024-10-09 21:38:06', 27),
(57, 27, 8, '2024-10-09 21:38:06', 27),
(58, 27, 9, '2024-10-09 21:38:06', 27),
(59, 27, 10, '2024-10-09 21:38:06', 27),
(60, 27, 11, '2024-10-09 21:38:06', 27),
(61, 27, 12, '2024-10-09 21:38:06', 27),
(75, 28, 1, '2024-10-14 14:20:48', 28),
(76, 28, 5, '2024-10-14 14:20:48', 28),
(77, 28, 7, '2024-10-14 14:20:48', 28),
(79, 29, 3, '2024-10-14 21:48:38', 29),
(80, 29, 5, '2024-10-14 21:48:38', 29),
(81, 29, 6, '2024-10-14 21:48:38', 29),
(82, 29, 10, '2024-10-14 21:48:38', 29),
(121, 26, 1, '2024-10-18 19:07:37', 26),
(122, 26, 2, '2024-10-18 19:07:37', 26),
(123, 26, 3, '2024-10-18 19:07:37', 26),
(124, 26, 0, '2024-10-18 19:07:37', 26),
(125, 26, 5, '2024-10-18 19:07:37', 26),
(126, 26, 7, '2024-10-18 19:07:37', 26),
(127, 26, 8, '2024-10-18 19:07:37', 26),
(128, 26, 9, '2024-10-18 19:07:37', 26),
(129, 26, 10, '2024-10-18 19:07:37', 26),
(130, 26, 12, '2024-10-18 19:07:37', 26);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
