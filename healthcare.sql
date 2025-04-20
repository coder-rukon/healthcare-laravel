-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2025 at 11:36 AM
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
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `home_sections`
--

CREATE TABLE `home_sections` (
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `section_content` longtext NOT NULL,
  `section_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sections`
--

INSERT INTO `home_sections` (`section_id`, `section_name`, `section_content`, `section_order`, `created_at`, `updated_at`) VALUES
(3, 'Home Slider', '<section class=\"slider\">\r\n    <div id=\"carouselExampleAutoplaying\" class=\"carousel slide\" data-bs-ride=\"carousel\">\r\n        <div class=\"carousel-inner\">\r\n            <div class=\"carousel-item active\">\r\n                <img src=\"assets/images/banner-1.jpg\" class=\"d-block w-100\" alt=\"...\">\r\n            </div>\r\n            <div class=\"carousel-item\">\r\n                <img src=\"assets/images/banner-2.jpg\" class=\"d-block w-100\" alt=\"...\">\r\n            </div>\r\n        </div>\r\n        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\"\r\n            data-bs-slide=\"prev\">\r\n            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\r\n            <span class=\"visually-hidden\">Previous</span>\r\n        </button>\r\n        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\"\r\n            data-bs-slide=\"next\">\r\n            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\r\n            <span class=\"visually-hidden\">Next</span>\r\n        </button>\r\n    </div>\r\n</section>', 1, '2025-04-20 02:24:03', '2025-04-20 02:24:03'),
(4, 'Home box section', '<div class=\"box_links_section\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"colx-xs-12 col-sm-6\">\r\n                <div class=\"row\">\r\n                    <div class=\"col-xs-12 col-sm-6\">\r\n                        <a href=\"#\" class=\"box_link_item\">\r\n                            <div class=\"box_link_text\">\r\n                                <h2>Book an <br/>Appointment</h2>\r\n                                <p>With country\'s leading experts</p>\r\n                            </div>\r\n                            <div class=\"box_link_image\">\r\n                                <img src=\"assets/images/book-appoinment-icon.jpg\" alt=\"Link 1\">\r\n                            </div>\r\n                        </a>\r\n                    </div>\r\n                    <div class=\"col-xs-12 col-sm-6\">\r\n                        <a href=\"#\" class=\"box_link_item green\">\r\n                            <div class=\"box_link_text\">\r\n                                <h2>Hospitals</h2>\r\n                                <p>Health needs under one roof</p>\r\n                            </div>\r\n                            <div class=\"box_link_image\">\r\n                                <img src=\"assets/images/hospital-icon.jpg\" alt=\"Link 1\">\r\n                            </div>\r\n                        </a>\r\n                    </div>\r\n                    <div class=\"col-xs-12 col-sm-6\">\r\n                        <a href=\"#\" class=\"box_link_item purple\">\r\n                            <div class=\"box_link_text\">\r\n                                <h2>Specialities</h2>\r\n                                <p>Our expertise in Healthcare</p>\r\n                            </div>\r\n                            <div class=\"box_link_image\">\r\n                                <img src=\"assets/images/special-icon.jpg\" alt=\"Link 1\">\r\n                            </div>\r\n                        </a>\r\n                    </div>\r\n                    <div class=\"col-xs-12 col-sm-6\">\r\n                        <a href=\"#\" class=\"box_link_item pink\">\r\n                            <div class=\"box_link_text\">\r\n                                <h2>Doctors</h2>\r\n                                <p>Top exports for your health</p>\r\n                            </div>\r\n                            <div class=\"box_link_image\">\r\n                                <img src=\"assets/images/doctors-icon.jpg\" alt=\"Link 1\">\r\n                            </div>\r\n                        </a>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"colx-xs-12 col-sm-6\">\r\n                <h2 class=\"section_title\">We can help you book</h2>\r\n                <div class=\"row\">\r\n                    <div class=\"col-xs-12 col-sm-6\">\r\n                        <a href=\"#\" class=\"box_item_2\">\r\n                            <img src=\"assets/images/doctor-2.jpg\" alt=\"Health Checkups\">\r\n                            <h2>Health Checkups</h2>\r\n                        </a>\r\n                    </div>\r\n                    <div class=\"col-xs-12 col-sm-6\">\r\n                        <a href=\"#\" class=\"box_item_2\">\r\n                            <img src=\"assets/images/hospital-2.jpg\" alt=\"Health Checkups\">\r\n                            <h2>Tests & Services</h2>\r\n                        </a>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        \r\n\r\n    </div>\r\n</div>', 2, '2025-04-20 02:24:35', '2025-04-20 02:24:35'),
(5, 'OUR SERVICES', '<div class=\"our_servies\">\r\n    <div class=\"container\">\r\n        <h2 class=\"section_title\">OUR SERVICES</h2>\r\n        <div class=\"row\">\r\n            <div class=\"col-xs-12 col-sm-4\">\r\n                <div class=\"service_item\">\r\n                    <img src=\"assets/images/service-3.jpg\" alt=\"Service 1\">\r\n                    <h2>Diagnostics</h2>\r\n                    <ul>\r\n                        <li>Lab Tests</li>\r\n                        <li>Radiology</li>\r\n                    </ul>\r\n                </div>\r\n            </div>\r\n            <div class=\"col-xs-12 col-sm-4\">\r\n                <div class=\"service_item\">\r\n                    <img src=\"assets/images/service-2.jpg\" alt=\"Service 1\">\r\n                    <h2>Outpatient Services</h2>\r\n                    <ul>\r\n                        <li>Consultation</li>\r\n                        <li>Lab Test</li>\r\n                        <li>Diagnosis</li>\r\n                        <li>Radiology</li>\r\n                    </ul>\r\n                </div>\r\n            </div>\r\n            <div class=\"col-xs-12 col-sm-4\">\r\n                <div class=\"service_item\">\r\n                    <img src=\"assets/images/service-1.jpg\" alt=\"Service 1\">\r\n                    <h2>Day Care Services</h2>\r\n                    <ul>\r\n                        <li>Endoscopy</li>\r\n                        <li>Colonoscopy</li>\r\n                    </ul>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>', 3, '2025-04-20 02:25:23', '2025-04-20 02:25:23'),
(6, 'Video and Testimonials', '<div class=\"expert_video_testimoinal\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-xs-12 col-sm-6\">\r\n                <h2 class=\"section_title\">Expert Videos</h2>\r\n                <a href=\"#\" class=\"video_item\">\r\n                    <img src=\"assets/images/xpert-video-thumbnail.jpg\" alt=\"Video 1\">\r\n                </a>\r\n            </div>\r\n            <div class=\"col-xs-12 col-sm-6\">\r\n                <h2 class=\"section_title\">Patient Testimonials</h2>\r\n                <a href=\"#\" class=\"patient_item\">\r\n                    <img src=\"assets/images/testimonial-thumbnail.jpg\" alt=\"Video 1\">\r\n                </a>\r\n            </div>\r\n        </div>\r\n        \r\n    </div>\r\n</div>', 4, '2025-04-20 02:25:49', '2025-04-20 02:25:49'),
(7, 'Blogs', '<div class=\"blog_section\">\r\n    <div class=\"container\">\r\n        <h2 class=\"section_title\">Our Blogs</h2>\r\n        <div class=\"row\">\r\n            <div class=\"col-xs-12 col-sm-3\">\r\n                <a href=\"#\" class=\"blog_item\">\r\n                    <img src=\"assets/images/blog-1.jpg\" alt=\"Blog 1\">\r\n                    <h2>CBS and Its prevention</h2>\r\n                </a>\r\n            </div>\r\n            <div class=\"col-xs-12 col-sm-3\">\r\n                <a href=\"#\" class=\"blog_item\">\r\n                    <img src=\"assets/images/blog-2.jpg\" alt=\"Blog 1\">\r\n                    <h2>Deal with brain stroke</h2>\r\n                </a>\r\n            </div>\r\n            <div class=\"col-xs-12 col-sm-3\">\r\n                <a href=\"#\" class=\"blog_item\">\r\n                    <img src=\"assets/images/blog-3.jpg\" alt=\"Blog 1\">\r\n                    <h2>Live a healthy life</h2>\r\n                </a>\r\n            </div>\r\n            <div class=\"col-xs-12 col-sm-3\">\r\n                <a href=\"#\" class=\"blog_item\">\r\n                    <img src=\"assets/images/blog-4.jpg\" alt=\"Blog 1\">\r\n                    <h2>Prevent Heart Attact</h2>\r\n                </a>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>', 5, '2025-04-20 02:26:10', '2025-04-20 02:26:10'),
(8, 'Partner section', '<section class=\"partner_center_section\">\r\n    <div class=\"container\">\r\n        <h2 class=\"section_title\">Partner center</h2>\r\n        <div class=\"row\">\r\n            <div class=\"col-xs-12 col-sm-3\">\r\n                <a href=\"#\" class=\"partner_item\">\r\n                   <img class=\"p_logo\" src=\"assets/images/partner-1.jpg\" alt=\"Partner 1\">\r\n                   <h2>Dedicated Neuro Care Center</h2>\r\n                   <p><img src=\"assets/images/location-icon.jpg\" alt=\"AGC Bose RD\"> AGC Bose RD</p>\r\n                </a>\r\n            </div>\r\n            <div class=\"col-xs-12 col-sm-3\">\r\n                <a href=\"#\" class=\"partner_item\">\r\n                   <img class=\"p_logo\" src=\"assets/images/partner-2.jpg\" alt=\"Partner 1\">\r\n                   <h2>Dedicated Neuro Care Center</h2>\r\n                   <p><img src=\"assets/images/location-icon.jpg\" alt=\"AGC Bose RD\">AGC Bose RD</p>\r\n                </a>\r\n            </div>\r\n            <div class=\"col-xs-12 col-sm-3\">\r\n                <a href=\"#\" class=\"partner_item\">\r\n                   <img class=\"p_logo\" src=\"assets/images/partnert-3.jpg\" alt=\"Partner 1\">\r\n                   <h2>Dedicated Neuro Care Center</h2>\r\n                   <p><img src=\"assets/images/location-icon.jpg\" alt=\"AGC Bose RD\">AGC Bose RD</p>\r\n                </a>\r\n            </div>\r\n            <div class=\"col-xs-12 col-sm-3\">\r\n                <a href=\"#\" class=\"partner_item\">\r\n                   <img class=\"p_logo\" src=\"assets/images/partner-4.jpg\" alt=\"Partner 1\">\r\n                   <h2>Dedicated Neuro Care Center</h2>\r\n                   <p><img src=\"assets/images/location-icon.jpg\" alt=\"AGC Bose RD\">AGC Bose RD</p>\r\n                </a>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>', 6, '2025-04-20 02:26:35', '2025-04-20 02:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `home_settings`
--

CREATE TABLE `home_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_link` varchar(255) NOT NULL,
  `menu_link_target` varchar(255) NOT NULL DEFAULT '_self',
  `menu_order` int(255) NOT NULL DEFAULT 0,
  `menu_parent` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location` varchar(100) NOT NULL DEFAULT 'main_menu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_link`, `menu_link_target`, `menu_order`, `menu_parent`, `created_at`, `updated_at`, `location`) VALUES
(3, 'Home', '#', '_self', 0, '0', '2025-04-19 12:52:28', '2025-04-19 12:52:28', 'Main Menu'),
(4, 'Specialities', '#', '_self', 1, '0', '2025-04-19 12:52:50', '2025-04-19 12:52:50', 'Main Menu'),
(5, 'Doctors', '#', '_self', 2, '0', '2025-04-19 12:53:04', '2025-04-19 12:53:04', 'Main Menu'),
(6, 'Services', '#', '_self', 3, '0', '2025-04-19 12:53:21', '2025-04-19 12:53:21', 'Main Menu'),
(8, 'Blogs', '#', '_self', 5, '0', '2025-04-19 12:53:57', '2025-04-19 12:53:57', 'Main Menu'),
(9, 'News', '#', '_self', 6, '0', '2025-04-19 12:54:14', '2025-04-19 12:54:14', 'Main Menu'),
(10, 'Offers', '#', '_self', 7, '0', '2025-04-19 12:54:25', '2025-04-19 12:54:25', 'Main Menu'),
(11, 'Health Check-ups', '#', '_self', 4, '0', '2025-04-19 12:54:36', '2025-04-19 12:54:36', 'Main Menu'),
(19, 'About Us', '#', '_blank', 1, '0', '2025-04-19 14:56:24', '2025-04-19 14:56:24', 'Header Top Menu'),
(20, 'Contact Us', '#', '_self', 1, '0', '2025-04-19 15:05:29', '2025-04-19 15:05:29', 'Main Menu right'),
(21, 'Careers', '#', '_self', 2, '0', '2025-04-19 15:05:57', '2025-04-19 15:05:57', 'Header Top Menu'),
(22, 'Home', '#', '_self', 1, '0', '2025-04-19 15:10:09', '2025-04-19 15:10:09', 'Footer Quick Links'),
(23, 'Providers', '#', '_self', 2, '0', '2025-04-19 15:10:27', '2025-04-19 15:10:27', 'Footer Quick Links'),
(24, 'Locations', '#', '_self', 3, '0', '2025-04-19 15:10:40', '2025-04-19 15:10:40', 'Footer Quick Links'),
(25, 'Health Blog', '#', '_self', 4, '0', '2025-04-19 15:10:59', '2025-04-19 15:10:59', 'Footer Quick Links'),
(26, 'Testimonials', '#', '_self', 5, '0', '2025-04-19 15:11:37', '2025-04-19 15:11:37', 'Footer Quick Links'),
(27, 'About Us', '#', '_self', 6, '0', '2025-04-19 15:11:46', '2025-04-19 15:11:46', 'Footer Quick Links'),
(28, 'Contact Us', '#', '_self', 7, '0', '2025-04-19 15:11:55', '2025-04-19 15:11:55', 'Footer Quick Links'),
(29, 'Departments', '#', '_self', 8, '0', '2025-04-19 15:12:05', '2025-04-19 15:12:05', 'Footer Quick Links'),
(30, 'Delete Account', '#', '_self', 9, '0', '2025-04-19 15:12:23', '2025-04-19 15:12:23', 'Footer Quick Links'),
(31, 'Video Consultation', '#', '_self', 1, '0', '2025-04-19 15:12:34', '2025-04-19 15:12:34', 'Footer Services'),
(32, 'In-Person Consultation', '#', '_self', 2, '0', '2025-04-19 15:12:43', '2025-04-19 15:12:43', 'Footer Services');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_04_19_173900_create_home_settings_table', 2),
(5, '2025_04_19_175919_create_menu_table', 2),
(6, '2025_04_19_194336_create_home_sections_table', 3),
(7, '2025_04_20_090746_create_settings_table', 4);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('PxQCiAj6PYNtlmlCU4y5NHLGHUp8akKUqyth2629', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:137.0) Gecko/20100101 Firefox/137.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibkZ3Q2g4QzVUYUtnQ2lFakdEMDZoSFBqUXNlY1lHYjFsZVA4bEJsYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1745141770);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `settings_name` varchar(255) NOT NULL,
  `settings_value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `settings_name`, `settings_value`, `created_at`, `updated_at`) VALUES
(1, '_token', 'nFwCh8C5TaKgCiEjGD06hHPjQsecYGb1leP8lBlc', '2025-04-20 03:14:06', '2025-04-20 03:14:06'),
(2, 'header_whatsapp', '+91 06600 12345', '2025-04-20 03:14:06', '2025-04-20 03:14:06'),
(3, 'book_appointment_link', '#', '2025-04-20 03:23:37', '2025-04-20 03:30:14'),
(4, 'contact_us_info', '<h4>Healthcare Scan Diagnostics</h4>                     <p><a href=\"tel:+917890015555\">+91 7890015555</a></p>                     <p><a href=\"mailto:contact@healthcarescan.in\">contact@healthcarescan.in</a></p>', '2025-04-20 03:30:14', '2025-04-20 03:30:14'),
(5, 'app_links_tilte', 'You can also stay connected with<br> Providers using free  <br> Healthcare scan Diagnostics App', '2025-04-20 03:30:14', '2025-04-20 03:32:03'),
(6, 'app_playstore_link', '#', '2025-04-20 03:30:14', '2025-04-20 03:30:14'),
(7, 'app_appstore_link', '#', '2025-04-20 03:30:14', '2025-04-20 03:30:14'),
(8, 'facebook_link', '#', '2025-04-20 03:30:14', '2025-04-20 03:30:14'),
(9, 'twitter_link', '#', '2025-04-20 03:30:14', '2025-04-20 03:30:14'),
(10, 'instagram_link', '#', '2025-04-20 03:30:14', '2025-04-20 03:30:14'),
(11, 'linkedin_link', '#', '2025-04-20 03:30:14', '2025-04-20 03:30:14'),
(12, 'youtube_link', '#', '2025-04-20 03:30:14', '2025-04-20 03:30:14'),
(13, 'whatsapp_link', '#', '2025-04-20 03:30:14', '2025-04-20 03:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(250) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Rukon', 'rukon.info@gmail.com', NULL, '$2y$12$OVr.hlLPH7Z6qm/x7aZ/ReE4V6W9csSwxTlgCDwloALS3M1/e9zV2', NULL, '2025-04-19 11:57:01', '2025-04-19 11:57:01', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_sections`
--
ALTER TABLE `home_sections`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `home_settings`
--
ALTER TABLE `home_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_settings_name_unique` (`settings_name`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_sections`
--
ALTER TABLE `home_sections`
  MODIFY `section_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home_settings`
--
ALTER TABLE `home_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
