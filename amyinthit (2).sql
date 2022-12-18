-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 12:00 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amyinthit`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `img`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Blog Two', 'This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  This is content  ', 'a:2:{i:0;s:27:\"593ae1608d4e4_save-icon.png\";i:1;s:32:\"593ae1608dcb4_servicepicture.jpg\";}', 'blog-two', 2, '2017-06-09 11:26:48', '2017-06-12 01:09:44'),
(3, 'Five', 'This is blog four description  This is blog four description  This is blog four description  This is blog four description  This is blog four description  This is blog four description  This is blog four description  This is blog four description  This is blog four description  This is blog four description  This is blog four description  This is blog four description  This is blog four description  ', 'a:1:{i:0;s:27:\"593e6d2c85be1_home-icon.png\";}', 'five', 1, '2017-06-11 06:47:21', '2017-06-12 04:00:04'),
(4, 'Blog Three', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at commodi, corporis cumque debitis delectus eius eligendi eos, fugiat in labore maxime minima molestias nesciunt odit, quae quisquam recusandae tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at commodi, corporis cumque debitis delectus eius eligendi eos, fugiat in labore maxime minima molestias nesciunt odit, quae quisquam recusandae tenetur.', 'a:1:{i:0;s:26:\"593f5d6204edc_couple16.jpg\";}', 'blog-three', 1, '2017-06-12 04:14:29', '2017-06-12 21:04:58'),
(5, 'Blog Four', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at commodi, corporis cumque debitis delectus eius eligendi eos, fugiat in labore maxime minima molestias nesciunt odit, quae quisquam recusandae tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at commodi, corporis cumque debitis delectus eius eligendi eos, fugiat in labore maxime minima molestias nesciunt odit, quae quisquam recusandae tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at commodi, corporis cumque debitis delectus eius eligendi eos, fugiat in labore maxime minima molestias nesciunt odit, quae quisquam recusandae tenetur.', 'a:1:{i:0;s:32:\"593fb2a9e71e5_servicepicture.jpg\";}', 'blog-four', 1, '2017-06-12 04:14:48', '2017-06-13 03:08:49'),
(6, 'Blog Five', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at commodi, corporis cumque debitis delectus eius eligendi eos, fugiat in labore maxime minima molestias nesciunt odit, quae quisquam recusandae tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at commodi, corporis cumque debitis delectus eius eligendi eos, fugiat in labore maxime minima molestias nesciunt odit, quae quisquam recusandae tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at commodi, corporis cumque debitis delectus eius eligendi eos, fugiat in labore maxime minima molestias nesciunt odit, quae quisquam recusandae tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at commodi, corporis cumque debitis delectus eius eligendi eos, fugiat in labore maxime minima molestias nesciunt odit, quae quisquam recusandae tenetur.', 'a:1:{i:0;s:27:\"593e70b52117d_counter-1.png\";}', 'blog-five', 1, '2017-06-12 04:15:09', '2017-06-12 04:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desp` text COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `salary` text COLLATE utf8_unicode_ci NOT NULL,
  `remark` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `desp`, `location`, `salary`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'Job One Edited', 'This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description ', 'Pyay', '$800', 'This is remark This is remark This is remark This is remark This is remark This is remark This is remark This is remark This is remark This is remark This is remark ', '2017-06-14 08:43:37', '2017-06-14 10:21:21'),
(3, 'Job Two', 'this is job two description  this is job two description  this is job two description  this is job two description  this is job two description  this is job two description  this is job two description  this is job two description  this is job two description  this is job two description  this is job two description  this is job two description  this is job two description  this is job two description  this is job two description  this is job two description  this is job two description  this is job two description  ', 'Yangon', '$500-$1000', 'this is job two remark  this is job two remark  this is job two remark  this is job two remark  this is job two remark  this is job two remark  this is job two remark  this is job two remark  this is job two remark  this is job two remark  this is job two remark  this is job two remark  this is job two remark  this is job two remark  this is job two remark  this is job two remark  ', '2017-06-14 10:47:18', '2017-06-14 10:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `career_apply_messages`
--

CREATE TABLE `career_apply_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` text COLLATE utf8_unicode_ci NOT NULL,
  `Ph_No` text COLLATE utf8_unicode_ci NOT NULL,
  `Job_Position` text COLLATE utf8_unicode_ci NOT NULL,
  `Gender` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `career_apply_messages`
--

INSERT INTO `career_apply_messages` (`id`, `Name`, `Email`, `Address`, `Ph_No`, `Job_Position`, `Gender`, `Description`, `Image`, `created_at`, `updated_at`) VALUES
(1, 'mgmg', 'mgmg@gmail.com', 'yangon', '09988889993', 'Contractor', 'male', 'dfsdkfjsdlkfdlskjflksdjf', '594240f6df4a9_counter-1.png', '2017-06-15 01:40:30', '2017-06-15 01:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `commendable_id` int(11) NOT NULL,
  `commendable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `commendable_id`, `commendable_type`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdfd', 1, 4, 'App\\Blog', '2017-06-12 05:33:08', '2017-06-12 05:33:08'),
(2, 'next comment', 1, 4, 'App\\Blog', '2017-06-12 05:33:31', '2017-06-12 05:33:31'),
(3, 'This is my comment', 1, 4, 'App\\Blog', '2017-06-12 05:54:22', '2017-06-12 05:54:22'),
(5, 'First Comment', 1, 6, 'App\\Blog', '2017-06-12 05:56:38', '2017-06-12 05:56:38'),
(6, 'I like blog two', 1, 1, 'App\\Blog', '2017-06-13 00:21:09', '2017-06-13 00:21:09'),
(8, 'second comment', 1, 1, 'App\\Blog', '2017-06-13 01:06:34', '2017-06-13 01:06:34'),
(10, 'second comment', 1, 6, 'App\\Blog', '2017-06-13 03:46:56', '2017-06-13 03:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `ph_no` text COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `address`, `ph_no`, `message`, `created_at`, `updated_at`) VALUES
(1, 'koko', 'koko@gmail.com', 'pyay', '09833933933', 'Now I want to contact you.I like your projects                     ', '2017-06-10 06:50:27', '2017-06-10 06:50:27'),
(3, 'mama', 'mama@gmail.com', 'pyay', '09383893993', 'Now I want to contact you.I like your projects                     Now I want to contact you.I like your projects                     Now I want to contact you.I like your projects                     \r\n                            ', '2017-06-10 06:53:33', '2017-06-10 06:53:33'),
(4, 'zin Mar Win', 'zin@gmail.com', 'aa', '0993929393', 'jjj\r\n                            ', '2017-06-11 21:20:57', '2017-06-11 21:20:57'),
(5, 'myo myo', 'myomyo@gmail.comm', 'yangon', '0939939339', 'help help help help help      help help help help help      help help help help help      help help help help help      help help help help help      help help help help help      help help help help help      help help help help help      help help help help help      help help help help help      help help help help help      help help help help help      help help help help help      help help help help help      help help help help help      help help help help help      help help help help help      help help help help help      ', '2017-06-14 23:57:41', '2017-06-14 23:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `job_requirements`
--

CREATE TABLE `job_requirements` (
  `id` int(10) UNSIGNED NOT NULL,
  `requirement` text COLLATE utf8_unicode_ci NOT NULL,
  `career_id` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `job_requirements`
--

INSERT INTO `job_requirements` (`id`, `requirement`, `career_id`, `created_at`, `updated_at`) VALUES
(3, 'req second edited', 1, '2017-06-14 10:32:49', '2017-06-14 10:32:49'),
(4, 'first requirement', 2, '2017-06-14 10:44:31', '2017-06-14 10:44:31'),
(5, 'second requirement', 2, '2017-06-14 10:44:31', '2017-06-14 10:44:31'),
(6, 'job 2 requirement', 3, '2017-06-14 10:47:18', '2017-06-14 10:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `job_responsibilities`
--

CREATE TABLE `job_responsibilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `responsibility` text COLLATE utf8_unicode_ci NOT NULL,
  `career_id` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `job_responsibilities`
--

INSERT INTO `job_responsibilities` (`id`, `responsibility`, `career_id`, `created_at`, `updated_at`) VALUES
(3, 'res second edite', 1, '2017-06-14 10:32:33', '2017-06-14 10:32:33'),
(4, 'first responsibility', 2, '2017-06-14 10:44:31', '2017-06-14 10:44:31'),
(5, 'second responsibility', 2, '2017-06-14 10:44:31', '2017-06-14 10:44:31'),
(6, 'job 2 responsbility', 3, '2017-06-14 10:47:18', '2017-06-14 10:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_09_150912_create_blogs_table', 2),
(4, '2017_06_10_044335_create_permission_tables', 3),
(6, '2017_06_10_121331_create_contacts_table', 4),
(7, '2017_06_10_151516_create_services_table', 5),
(12, '2017_06_11_152346_create_projects_table', 6),
(13, '2017_06_12_113608_create_comments_table', 7),
(18, '2017_06_14_035921_create_career_messages_table', 8),
(19, '2017_06_14_051950_create_careers_table', 8),
(20, '2017_06_14_084959_create_job_responsibilities_table', 8),
(21, '2017_06_14_085032_create_job_requirements_table', 8),
(22, '2017_06_14_180251_create_prices_table', 9),
(24, '2017_06_15_080611_create_career_apply_messages_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area` text COLLATE utf8_unicode_ci NOT NULL,
  `floor` int(11) NOT NULL,
  `elevator` text COLLATE utf8_unicode_ci NOT NULL,
  `long_time` text COLLATE utf8_unicode_ci NOT NULL,
  `corner` text COLLATE utf8_unicode_ci NOT NULL,
  `desp` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `category`, `area`, `floor`, `elevator`, `long_time`, `corner`, `desp`, `img`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 'New Project', 'current', '1000km', 10, 'unavailable', '4months', 'dining room\r\nswimming pool\r\ngym', 'This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description ', 'a:1:{i:0;s:20:\"59424e2405033_4.jpeg\";}', 'new-project', '1', '2017-06-15 02:36:44', '2017-06-15 02:36:44'),
(7, 'Next Project', 'finish', '1000km', 10, 'available', '1year', 'all room\r\nall room\r\nall room\r\nall room\r\nall room\r\n', 'This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description This is my description ', 'a:1:{i:0;s:20:\"594254b17f11f_2.jpeg\";}', 'next-project', '1', '2017-06-15 03:04:41', '2017-06-15 03:04:41'),
(8, 'First Project', 'future', '1000km', 10, 'unavailable', '1year', 'all room \r\nall room \r\nall room \r\nall room \r\nall room \r\nall room \r\n', 'This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description ', 'a:1:{i:0;s:20:\"5942581602f7a_2.jpeg\";}', 'first-project', '1', '2017-06-15 03:17:01', '2017-06-15 03:19:10'),
(9, 'Second Project', 'future', '1000km', 10, 'unavailable', '1year', 'all room \r\nall room \r\nall room \r\nall room \r\nall room \r\nall room \r\n', 'This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description ', 'a:1:{i:0;s:19:\"594257a40e50c_5.jpg\";}', 'second-project', '1', '2017-06-15 03:17:16', '2017-06-15 03:17:16'),
(10, 'Great Project', 'current', '1000km', 10, 'unavailable', '1year', 'all room \r\nall room \r\nall room \r\nall room \r\nall room \r\nall room \r\n', 'This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description ', 'a:1:{i:0;s:19:\"594257b728761_5.jpg\";}', 'great-project', '1', '2017-06-15 03:17:35', '2017-06-15 03:17:35'),
(11, 'Final Project', 'finish', '1000km', 10, 'unavailable', '1year', 'all room \r\nall room \r\nall room \r\nall room \r\nall room \r\nall room \r\n', 'This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description This is description ', 'a:1:{i:0;s:20:\"594257e196ead_4.jpeg\";}', 'final-project', '1', '2017-06-15 03:18:17', '2017-06-15 03:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'manager', '2017-06-10 00:42:45', '2017-06-10 00:42:45'),
(2, 'supervisor', '2017-06-10 00:50:35', '2017-06-10 04:34:12'),
(3, 'staff', '2017-06-10 00:50:41', '2017-06-10 00:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `ph_no` text COLLATE utf8_unicode_ci NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `email`, `address`, `ph_no`, `type`, `message`, `created_at`, `updated_at`) VALUES
(1, 'MA MA', 'mama@gmail.com', 'pyay', '093303030303', 'Hotel', 'this is my wish', '2017-06-10 09:33:52', '2017-06-10 09:33:52'),
(2, 'sf', 'staff@gmail.com', 'asf', '333', 'Condo', 'safsdf', '2017-06-10 09:35:20', '2017-06-10 09:35:20'),
(3, 'zin Mar Win', 'zin@gmail.com', 'zz', '993929392', 'House', 'cvcbvngv', '2017-06-11 21:23:12', '2017-06-11 21:23:12'),
(4, 'myo myo', 'myomyo@gmail.comm', 'yangon', '09999393939', 'Hostel', 'this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish this is my wish ', '2017-06-15 00:03:22', '2017-06-15 00:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$vuNEgLFruzAOqIJpZdKbM.FepH7ebxrw2YIIj7/xJIeRKBPq9TtqC', 'M1lheM6f4D7YNFsqkGZuwTvRESSukWEQYlMeDedG49ngpYwUI1VS2IsdOI5R', '2017-06-09 06:08:12', '2017-06-15 03:22:47'),
(2, 'staff', 'staff@gmail.com', '$2y$10$Wj4HNp/XUkMtqA6/65QETecPne8P012CtulWQqcMYui4iB70png16', 'i6pne4H5GTCjmoCxkuNELvLhYn5iRkD28CTx3fraqN0HeuNvXv0M6PW2R7i8', '2017-06-09 08:17:04', '2017-06-12 21:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_permissions`
--

CREATE TABLE `user_has_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_has_roles`
--

CREATE TABLE `user_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_has_roles`
--

INSERT INTO `user_has_roles` (`role_id`, `user_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_apply_messages`
--
ALTER TABLE `career_apply_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `job_requirements`
--
ALTER TABLE `job_requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_responsibilities`
--
ALTER TABLE `job_responsibilities`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `user_has_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `user_has_roles_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `career_apply_messages`
--
ALTER TABLE `career_apply_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `job_requirements`
--
ALTER TABLE `job_requirements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `job_responsibilities`
--
ALTER TABLE `job_responsibilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD CONSTRAINT `user_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
