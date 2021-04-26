-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2021 at 05:51 PM
-- Server version: 10.3.25-MariaDB-log
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `betavoaudio_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_messages`
--

CREATE TABLE `client_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_messages`
--

INSERT INTO `client_messages` (`id`, `origin`, `email`, `name`, `message`, `phone`, `created_at`, `updated_at`) VALUES
(1, '125.161.131.225', 'bnwalandow@gmail.com', 'Ben W', 'this is a test email', '0878843210', '2021-01-20 12:03:58', '2021-01-20 12:03:58'),
(2, '125.160.225.147', 'Iwan_gombloh@yahoo.com', 'Iwan', 'Cara ilangin mute pada ampli  zx 9900 b..... buat setingan mic werlesnya', '081387349513', '2021-01-21 06:47:06', '2021-01-21 06:47:06'),
(3, '139.193.4.112', 'contact@bendt.io', 'ben', 'This is a test messages', '0817178611', '2021-02-07 07:12:07', '2021-02-07 07:12:07'),
(4, '140.213.127.214', 'neka.production@gmail.com', 'Nurul Huda', 'Selamat malam, kami dari Neka audio yg berkecimpung di dunia sound system dan penjualan online alat² sound system. Dengan ini kami ingin bergabung di dalam pemasaran merk Betavo, apa saja persyaratannya??\n\nTerimakasih', '087887999920', '2021-04-17 11:45:46', '2021-04-17 11:45:46'),
(5, '125.162.244.115', 'cholisseror37@gmail.com', 'M.cholis', 'Gimana caranya biar saya bisa jualan produk betavo', '082264296674', '2021-04-18 11:55:04', '2021-04-18 11:55:04'),
(6, '120.188.39.62', 'triogelo@gmail.com', 'Trio Budiyanto', 'Dears Betavo,\nSpeaker yg 18\" magnet 3 kisaran harga brp?', '081298371999', '2021-04-24 01:52:47', '2021-04-24 01:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'brief_company', 'Betavo Audio menyediakan berbagai keperluan pendukung sound sistem, seperti: Amplifier, Microphone, Speaker, Mixer, Accesories, dan Equaliser.', '2020-09-15 12:11:41', '2021-01-20 10:45:55'),
(2, 'address', 'Penjaringan, Jakarta Utara', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(3, 'phone', '021-55787035', '2020-09-15 12:11:41', '2021-02-17 06:55:24'),
(4, 'phone2', '021-55787098', '2020-09-15 12:11:41', '2021-02-17 06:55:24'),
(5, 'whatsapp', '081282009706', '2020-09-15 12:11:41', '2021-02-03 09:47:01'),
(6, 'fax', '021', '2020-09-15 12:11:41', '2021-02-17 06:55:46'),
(7, 'working_days', 'Senin - Sabtu', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(8, 'working_hours', '08:00 s/d 17:00', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(9, 'email', 'betavo.audio@gmail.com', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(10, 'mail_admin_subject', 'Message from Web Visitor', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(11, 'mail_admin_recipients', 'betavo.audio@gmail.com', '2020-09-15 12:11:41', '2021-02-08 08:38:14'),
(12, 'mail_visitor_subject', 'Terima Kasih sudah menghubungi Betavo Audio', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(13, 'mail_contact_text_header', 'Kami akan segera meresponse pertanyaan Anda.', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(14, 'facebook', 'https://www.facebook.com/betavoaudioofficial', '2020-09-15 12:11:41', '2021-02-03 09:50:50'),
(15, 'instagram', 'https://instagram.com/betavoaudio', '2020-09-15 12:11:41', '2021-01-30 05:10:03'),
(16, 'tokopedia', 'https://www.tokopedia.com/betavo?source=universe&st=product', '2020-09-15 12:11:41', '2021-02-24 04:51:58'),
(17, 'shopee', 'https://shopee.co.id/betavoaudio', '2020-09-15 12:11:41', '2021-01-30 05:09:00'),
(18, 'bukalapak', 'https://bukalapak.com/betavo-audio-official', '2020-09-15 12:11:41', '2021-01-30 05:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `error_log`
--

CREATE TABLE `error_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line` int(11) DEFAULT NULL,
  `class` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `function` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_perusahaan`
--

CREATE TABLE `informasi_perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telpon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_buka` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_singkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_lengkap` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_tokopedia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_bukalapak` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_shopee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link_facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`, `iso`, `created_at`, `updated_at`) VALUES
(1, 'Indonesia', 'id', '2020-09-15 12:11:41', '2020-09-15 12:11:41');

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
(17, '0000_00_00_000000_create_error_log_table', 1),
(18, '2014_10_12_000000_create_bendt_auth_table', 1),
(19, '2018_02_01_000001_cms_language', 1),
(20, '2018_02_01_000002_cms_pages', 1),
(21, '2018_02_01_000003_cms_config', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2020_06_22_091418_buat_table_kategori', 1),
(24, '2020_06_23_023900_create_sub_kategori_table', 1),
(25, '2020_06_23_024816_buat_table_informasi_perusahaan', 1),
(26, '2020_06_23_025200_buat_table_slide_item', 1),
(27, '2020_06_27_100540_update_informasi_table', 1),
(28, '2020_06_27_131621_buat_table_produk', 1),
(29, '2020_07_03_010115_create_client_message_table', 1),
(30, '2020_08_08_000000_update_module_group_table', 1),
(31, '2020_08_08_000001_update_module_table', 1),
(32, '2020_08_08_000002_update_role_group_pivot_table', 1),
(33, '2021_04_08_115152_alter_table_produk', 2);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_no` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `group_id` int(10) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_visible` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `module_attribute`
--

CREATE TABLE `module_attribute` (
  `id` int(10) UNSIGNED NOT NULL,
  `module_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `module_group`
--

CREATE TABLE `module_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_no` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `parent_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Home', 'home', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(2, NULL, 'About', 'about', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(3, NULL, 'Contact', 'contact', '2020-09-15 12:11:41', '2020-09-15 12:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_element`
--

CREATE TABLE `page_element` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `locale` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `sort_no` int(11) NOT NULL DEFAULT 0,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rules` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placeholder` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_element`
--

INSERT INTO `page_element` (`id`, `page_id`, `group_id`, `locale`, `sort_no`, `name`, `type`, `content`, `rules`, `label`, `placeholder`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'id', 1, 'meta-title', 'text', 'Betavo Audio', 'required|max:160', '', '', '', '2020-09-15 12:11:41', '2020-09-18 03:04:31'),
(2, 1, NULL, 'id', 2, 'meta-description', 'text', NULL, 'max:160', '', '', '', '2020-09-15 12:11:41', '2020-09-18 03:02:46'),
(3, 1, NULL, 'id', 3, 'meta-keys', 'text', 'Betavo Audio', 'max:160', '', '', '', '2020-09-15 12:11:41', '2020-09-18 03:04:31'),
(4, 1, NULL, 'id', 4, 'left-menu-intro-label', 'text', 'INTRO', '', '', '', '', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(5, 1, NULL, 'id', 5, 'left-menu-about-label', 'text', 'ABOUT', '', '', '', '', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(6, 1, NULL, 'id', 6, 'left-menu-product-label', 'text', 'PRODUK', '', '', '', '', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(7, 1, NULL, 'id', 7, 'left-menu-contact-label', 'text', 'KONTAK', '', '', '', '', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(8, 1, NULL, 'id', 8, 'previous', 'text', 'Previous', '', '', '', '', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(9, 1, NULL, 'id', 9, 'next', 'text', 'Next', '', '', '', '', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(10, 1, NULL, 'id', 10, 'scroll', 'text', 'SCROLL', '', '', '', '', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(11, 1, NULL, 'id', 11, 'intro-title', 'text', 'Betavo Audio', '', '', '', '', '2020-09-15 12:11:41', '2020-09-18 03:05:45'),
(12, 1, NULL, 'id', 12, 'intro-description', 'textarea', '<p>Betavo adalah leading brand untuk Market Audio di Indonesia. Betavo senantiasa berinovasi dan terus mengembangkan produk terbaik dan berkualitas tinggi.</p>', '', '', '', 'You may use html markup here </br> or <b></b> or <i></i> or <a></a>', '2020-09-15 12:11:41', '2020-09-18 03:06:06'),
(13, 1, NULL, 'id', 13, 'intro-button-text', 'text', 'PRODUK KAMI', '', '', '', '', '2020-09-15 12:11:41', '2021-02-17 04:24:20'),
(14, 1, NULL, 'id', 14, 'intro-button-url', 'text', '/amplifier', '', '', 'https://www.bendt.io', '', '2020-09-15 12:11:41', '2020-09-30 06:15:58'),
(15, 1, NULL, 'id', 15, 'intro-background', 'file', '/Amplifier-Background.jpg', 'image|max:5120', '', '', 'Recommendation picture size ( 1800 x 1200 ) px', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(16, 2, NULL, 'id', 1, 'meta-title', 'text', 'Tentang - Betavo Audio', 'required|max:160', '', '', '', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(17, 2, NULL, 'id', 2, 'meta-description', 'text', NULL, 'max:160', '', '', '', '2020-09-15 12:11:41', '2020-09-18 03:06:46'),
(18, 2, NULL, 'id', 3, 'meta-keys', 'text', 'Betavo Audio', 'max:160', '', '', '', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(19, 2, NULL, 'id', 4, 'about-title', 'text', 'Betavo Audio', '', '', '', '', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(20, 2, NULL, 'id', 5, 'about-description', 'textarea', 'Betavo Audio menyediakan berbagai keperluan pendukung sound sistem, seperti: Amplifier, Microphone, Speaker, Mixer, Accesories, dan Equaliser. Dengan pengalaman lebih dari 10 tahun, Betavo Audio kini menjadi salah satu brand yang dipercaya oleh pasar Indonesia.', '', '', '', 'You may use html markup here </br> or <b></b> or <i></i> or <a></a>', '2020-09-15 12:11:41', '2020-09-18 03:07:24'),
(21, 2, NULL, 'id', 6, 'about-button-text', 'text', 'PRODUK UNGGULAN', '', '', '', '', '2020-09-15 12:11:41', '2020-09-30 06:17:08'),
(22, 2, NULL, 'id', 7, 'about-button-url', 'text', '/amplifier', '', '', 'https://www.bendt.io', '', '2020-09-15 12:11:41', '2020-09-30 06:17:08'),
(23, 2, NULL, 'id', 8, 'about-background', 'file', '/cms/eb655efdeacdb715ff1c4e9acad587e2.jpg', 'image|max:5120', '', '', 'Recommendation picture size ( 1800 x 1200 ) px', '2020-09-15 12:11:41', '2020-09-30 06:06:43'),
(24, 3, NULL, 'id', 1, 'meta-title', 'text', 'Kontak Kami - Betavo Audio', 'required|max:160', '', '', '', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(25, 3, NULL, 'id', 2, 'meta-description', 'text', NULL, 'max:160', '', '', '', '2020-09-15 12:11:41', '2020-09-30 06:00:55'),
(26, 3, NULL, 'id', 3, 'meta-keys', 'text', 'Betavo Audio', 'max:160', '', '', '', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(27, 3, NULL, 'id', 4, 'contact-title', 'text', 'Kontak kami', '', '', '', '', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(28, 3, NULL, 'id', 5, 'contact-description', 'textarea', 'Untuk informasi dan kemitraan lebih lanjut, silakan kirim pesan kepada kami', '', '', '', 'You may use html markup here </br> or <b></b> or <i></i> or <a></a>', '2020-09-15 12:11:41', '2020-09-15 12:11:41'),
(29, 3, NULL, 'id', 6, 'contact-background', 'file', '/cms/ccbfe4e9b180652dc82cf48cba9d5f57.jpg', 'image|max:5120', '', '', 'Recommendation picture size ( 1800 x 1200 ) px', '2020-09-15 12:11:41', '2020-09-30 06:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `page_group`
--

CREATE TABLE `page_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_group`
--

INSERT INTO `page_group` (`id`, `name`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Meta', 'Meta Header', 'meta', '2020-09-15 12:11:41', '2020-09-15 12:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_list`
--

CREATE TABLE `page_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_list_detail`
--

CREATE TABLE `page_list_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_list_id` int(10) UNSIGNED NOT NULL,
  `sort_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_list_element`
--

CREATE TABLE `page_list_element` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_list_detail_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `sort_no` int(11) NOT NULL DEFAULT 0,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rules` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placeholder` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_list_preset`
--

CREATE TABLE `page_list_preset` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_list_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `rules` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placeholder` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_no` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prioritas` int(10) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_bukalapak` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_shopee` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_tokopedia` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url_5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_video_url_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `meta_title`, `meta_description`, `meta_keywords`, `prioritas`, `id_kategori`, `nama_produk`, `deskripsi`, `link_bukalapak`, `link_shopee`, `link_tokopedia`, `image_url_1`, `image_url_2`, `image_url_3`, `image_url_4`, `image_url_5`, `youtube_video_url_1`, `slug`, `created_at`, `updated_at`, `is_active`, `is_featured`) VALUES
(1, 'Amplifier BETAVO BT 688DC', NULL, NULL, 1, 2, 'Amplifier BETAVO BT-688DC', '<p style=\"text-align: left;\">Spesifikasi :</p>\r\n<h5 style=\"text-align: justify;\">- 4 Way Mic Input</h5>\r\n<h5 style=\"text-align: justify;\">- Support SD Card &amp; USB</h5>\r\n<h5 style=\"text-align: justify;\">- Karaoke Echo Effect</h5>\r\n<h5 style=\"text-align: justify;\">- AC / DC 12V</h5>\r\n<h5 style=\"text-align: justify;\">- 150 Watt</h5>\r\n<h5 style=\"text-align: justify;\">- Low Noise And Low Distortion</h5>\r\n<h5 style=\"text-align: justify;\">- Bisa untuk Speaker sampai 10 inch</h5>\r\n<h5 style=\"text-align: justify;\">- Mp3 Music Player Sysyem</h5>\r\n<h5 style=\"text-align: justify;\">- Full Function Protect System</h5>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16124972700615.jpg', '/produk/name-16040303578884.jpg', '/produk/name-16040302747126.jpg', '/produk/name-16041295862475.jpeg', NULL, NULL, 'amplifier-betavo-bt-688dc', '2020-10-30 02:47:38', '2021-02-05 03:54:30', 1, 0),
(2, 'Amplifier BETAVO BT 3950SL', NULL, NULL, 99, 2, 'Amplifier BETAVO BT-3950SL', '<h4>Spesifikasi :</h4>\r\n<h4>- Rated Power Output :120W+120W 4/8ohm<br />- Power Output 250 watt<br />- Input Voltage: AC 220V 50Hz<br />- With USB/SD Card &amp; MP3 Player<br />- Digital Echo With Delay &amp; Repeat Control</h4>\r\n<h4>- 4 Channel Speaker Output</h4>\r\n<h4>- Dual 7 Band Graphic Equalizer<br />- Music &amp; Mic Tone Control : High / Mid / Low<br />- Mic Input : Front x 4<br />- Audio Input : DVD<br />- Audio Output : Line / USB / SD</h4>', NULL, NULL, NULL, '/produk/name-16137202745542.jpg', '/produk/name-16137201408726.jpg', '/produk/name-16137201408736.jpg', '/produk/name-16137201408747.jpg', NULL, NULL, 'amplifier-bt-3950sl', '2020-10-30 03:24:13', '2021-02-23 07:38:38', 1, 0),
(3, 'Amplifier BETAVO ZX 7007B', NULL, NULL, 1, 2, 'Amplifier BETAVO ZX-7007B', '<p>Spesifikasi :</p>\r\n<p>- 100 Watt</p>\r\n<p>- Support Bluetooth, USB, SD/MMC Card</p>\r\n<p>- 2 Channel Mic</p>\r\n<p>- Equalizer 5 Bands</p>\r\n<p>- Knob Mic Volume</p>\r\n<p>- Knob Echo, Delay, Bass, Treble, Balance</p>\r\n<p>- Knob Master Music Volume (L+R)</p>\r\n<p>- 2 Channel Speaker Output</p>\r\n<p>- AC~220V-240V</p>\r\n<p>- Nett Weight 3.16 KG</p>\r\n<p>- Gross Weight 3.36 KG</p>\r\n<p>- Dimensi Produk 43*24*8 CM</p>\r\n<p>- Packing Size 50*30*15 CM</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16141396840367.jpg', '/produk/name-16040318740916.jpg', '/produk/name-16141396840405.jpg', '/produk/name-16141396840414.jpg', '/produk/name-16141396840421.jpg', NULL, 'amplifier-betavo-zx-7007b', '2020-10-30 03:35:03', '2021-02-24 04:08:04', 1, 0),
(4, 'Amplifier BETAVO FS-7007', NULL, NULL, 99, 2, 'Amplifier BETAVO FS-7007', '<h4>Spesifikasi :</h4>\r\n<h4>- Power 150 Watt</h4>\r\n<h4>- Support SD/MMC Card &amp; USB</h4>\r\n<h4>- 1 Channel Equaliser 5 Bands</h4>\r\n<h4>- 2 Master Volume Left &amp; Right</h4>\r\n<h4>- 2 Volume Mic</h4>\r\n<h4>- 2 Channel Mic</h4>\r\n<h4>- Echo, Delay, Bass, Treble, Balance</h4>\r\n<h4>- AC 220V</h4>\r\n<h4>&nbsp;</h4>', NULL, NULL, NULL, '/produk/name-16120131810833.jpg', '/produk/name-16120131810881.jpg', '/produk/name-16120131810893.jpg', '/produk/name-16120131810904.jpg', NULL, NULL, 'amplifier-betavo-fs-7007', '2020-10-30 03:55:12', '2021-02-23 07:38:55', 1, 0),
(5, 'Amplifier BETAVO BT-3000', NULL, NULL, 99, 2, 'Amplifier BETAVO BT-3000', '<h4>Spesifikasi :</h4>\r\n<h4>- 8 Mic Input</h4>\r\n<h4>- Support SD Card &amp; USB</h4>\r\n<h4>- 150 Watt X 2</h4>\r\n<h4>- 2 Master Volume</h4>\r\n<h4>- THD 2%</h4>\r\n<h4>- Ketajaman Mikrofon 25mV</h4>\r\n<h4>- Penyesuaian Mikrofon 80 Hz +- 15dB</h4>\r\n<h4>- Signal / Rasio Gangguan Suara 80dB</h4>\r\n<h4>- Volume Musik : Bass,Trebel,Middle dan Balance</h4>\r\n<h4>- Volume Mic : Bass,Trebel,Echo dan Delay</h4>\r\n<h4>- AC 220V / 50Hz</h4>', NULL, NULL, NULL, '/produk/name-16124248794546.jpg', '/produk/name-16124248795072.jpg', '/produk/name-16124248795081.jpg', NULL, NULL, NULL, 'amplifier-betavo-bt-3000', '2020-10-30 04:13:53', '2021-02-23 07:39:12', 1, 0),
(6, 'Amplifier BETAVO BT-8000', NULL, NULL, 88, 2, 'Amplifier BETAVO BT-8000', '<h4>Spesifikasi :</h4>\r\n<h4>- Memiliki 6 Channel</h4>\r\n<h4>- Support SD Card &amp; USB</h4>\r\n<h4>- Ada Equalizer 9 Band x&nbsp; 2</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Power Output 300 Watt</h4>\r\n<h4>- Volume Musik : Bass,Trebel,Middle dan Balance</h4>\r\n<h4>- Volume Mic : Bass,Trebel,Echo dan Delay</h4>\r\n<h4>- THD 2%</h4>\r\n<h4>- Ketajaman Mikrofon 25mV</h4>\r\n<h4>- Penyesuaian Mikrofon 80 Hz +- 15dB</h4>\r\n<h4>- Signal / Rasio Gangguan Suara 80dB</h4>\r\n<h4>- AC 220V / 50 Hz</h4>', NULL, NULL, NULL, '/produk/name-16119055669815.jpg', NULL, NULL, NULL, NULL, NULL, 'amplifier-betavo-bt-8000', '2020-10-30 04:23:11', '2021-02-23 07:39:25', 1, 0),
(7, 'Amplifier BETAVO ZX-2790B', NULL, NULL, 1, 2, 'Amplifier BETAVO ZX-2790B', '<p>Spesifikasi :</p>\r\n<p>- 4 Channel Mic<br />- Support USB,SD CARD &amp; BLUETOOTH<br />- Digital Display<br />- 1 Input Audio<br />- 3 Output Audio<br />- 2 Output Speaker 4-8 ohm<br />- 2 Output Speaker Suround<br />- Volume Musik : Low ,Mid , Hi dan Bal<br />- Volume Mic : Delay ,Repeat ,Hi ,Mid dan Low<br />- Bisa tambah subwoofer<br />- Power Output 200 w</p>', NULL, NULL, NULL, '/produk/name-16119057611632.jpg', '/produk/name-16041301185502.jpg', NULL, NULL, NULL, NULL, 'amplifer-betavo-zx-2790b', '2020-10-30 04:42:17', '2021-04-10 05:53:10', 1, 0),
(8, 'Amplifier BETAVO ZX-1700B', NULL, NULL, 1, 2, 'Amplifier BETAVO ZX-1700B', '<h4>Spesifikasi :</h4>\r\n<h4>- Power Output 400 watt<br />- Support USB,SD CARD, &amp; Bluetooth<br />- Equalizer 10 band 2 Channel</h4>\r\n<h4>- THD 2%</h4>\r\n<h4>- Ketajaman Mikrofon 25mV</h4>\r\n<h4>- Penyesuaian Mikrofon 80 Hz +- 15dB</h4>\r\n<h4>- Signal / Rasio Gangguan Suara 80dB<br />- Bisa Tambah Subwoofer<br />- Ada mic output: High , Bass<br />- Volume Musik: Bass, Treble ,Middle &amp; Balance.<br />- Volume Mic : Bass, Treble, Echo, &amp; Delay</h4>\r\n<h4>- AC 220V / 50 HZ</h4>', NULL, NULL, NULL, '/produk/name-16119056525629.jpg', '/produk/name-16043972616187.jpg', '/produk/name-16043972616195.jpg', NULL, NULL, NULL, 'amplifier-betavo-zx-1700', '2020-10-30 06:39:30', '2021-01-29 07:40:52', 1, 0),
(9, 'Amplifier BETAVO ZX-3970B', NULL, NULL, 1, 2, 'Amplifier BETAVO ZX-3970B', '<p>Spesifikasi :</p>\r\n<p>- 400 Watt</p>\r\n<p>- Support Bluetooth</p>\r\n<p>- 4 Channel Mic</p>\r\n<p>- Equalizer 7 Bands x 2 Channel</p>\r\n<p>- Support USB, SD/MMC Card</p>\r\n<p>- Knob Echo, Bal, Lo, Mid, High</p>\r\n<p>- Knob Master Volume</p>\r\n<p>- Knob Master Mic Volume</p>\r\n<p>- Digital Display</p>\r\n<p>- BBE</p>\r\n<p>- Cooling Fan</p>\r\n<p>- AC~200V-240V</p>\r\n<p>- 4 Channel Speaker Output</p>\r\n<p>- Nett Weight 6 KG</p>\r\n<p>- Gross Weight 6.8 KG</p>\r\n<p>- Dimensi Produk 43*31*16 CM</p>\r\n<p>- Packing Size 50*35*21 CM</p>', NULL, NULL, NULL, '/produk/name-16141392435003.jpg', '/produk/name-16141392435045.jpg', '/produk/name-16141392435071.jpg', '/produk/name-16141392435081.jpg', NULL, NULL, 'amplifier-betavo-zx-3970b', '2020-10-30 06:51:56', '2021-02-24 04:00:43', 1, 0),
(10, 'Amplifier BETAVO ZX-8 BT', NULL, NULL, 88, 2, 'Amplifier BETAVO ZX-8 BT', '<p>Spesifikasi :</p>\r\n<p>- 50Watt x 2</p>\r\n<p>- Support SD Card, USB, &amp; Bluetooth</p>\r\n<p>- Bisa colok 2 Mic</p>\r\n<p>- 1 Master Volume</p>\r\n<p>- Dimensi 20 cm x 10 cm x 18 cm</p>', NULL, NULL, NULL, '/produk/name-16119058061857.jpg', '/produk/name-16041299993083.png', '/produk/name-16041299993093.png', NULL, NULL, NULL, 'amplifier-betavo-zx-8bt', '2020-10-30 07:06:49', '2021-02-24 10:00:47', 1, 0),
(11, 'Amplifier BETAVO FS-7170', NULL, NULL, 88, 2, 'Amplifier BETAVO FS-7170', '<p>Spesifikasi :</p>\r\n<p>- 100 Watt</p>\r\n<p>- Support SD Card, USB</p>\r\n<p>- Full Function Protect System</p>\r\n<p>- Low noise and Low Distortion</p>\r\n<p>- Input 2 Mic</p>\r\n<p>- Input Impedensi 250mV/47k ohm</p>\r\n<p><span class=\"ILfuVd\"><span class=\"hgKElc\">- Microphone Input 5mv/600 ohm</span></span></p>\r\n<p><span class=\"ILfuVd\"><span class=\"hgKElc\">- Tone Control : Middle &plusmn; 14dB, Treble &plusmn; 14dB</span></span></p>\r\n<p><span class=\"ILfuVd\"><span class=\"hgKElc\">- Master Channel <span class=\"aCOpRe\">&ge;</span> 45dB</span></span></p>\r\n<p><span class=\"ILfuVd\"><span class=\"hgKElc\">- Frequency 20Hz-20kHz <span class=\"aCOpRe\">&le;</span> 2dB</span></span></p>\r\n<p><span class=\"ILfuVd\"><span class=\"hgKElc\">- Signal To Noise <span class=\"aCOpRe\">&ge;</span> 71dB</span></span></p>\r\n<p><span class=\"ILfuVd\"><span class=\"hgKElc\">- Speaker System 4-8 ohm</span></span></p>\r\n<p><span class=\"ILfuVd\"><span class=\"hgKElc\">- Input Power AC220-240V 50Hz - DC 12V</span></span></p>\r\n<p>- 4 Channel Output Speaker</p>\r\n<p>- Dimensi 37.5 x 25.5 x 10 Cm</p>', NULL, NULL, NULL, '/produk/name-16119058485903.jpg', '/produk/name-16040424809751.jpg', '/produk/name-16040424809758.jpg', NULL, NULL, NULL, 'amplifier-betavo-fs-7170', '2020-10-30 07:21:20', '2021-02-23 07:41:09', 1, 0),
(12, 'Amplifier BETAVO ZX-988B', NULL, NULL, 1, 2, 'Amplifier BETAVO ZX-988B', '<h4>Spesifikasi :</h4>\r\n<h4>- Support SD Card, USB, &amp; Bluetooth</h4>\r\n<h4>- Full Function Protect System</h4>\r\n<h4>- Bisa AC DC</h4>\r\n<h4>- 4 Way Mic Input</h4>\r\n<h4>- Low Noise and Low Distortion</h4>\r\n<h4>- Bisa Untuk Speaker 6,8,10 Inch</h4>\r\n<h4>- THD 2%</h4>\r\n<h4>- Ketajaman Mikrofon 25mV</h4>\r\n<h4>- Penyesuaian Mikrofon 80 Hz +- 15dB</h4>\r\n<h4>- Signal / Rasio Gangguan Suara 80dB</h4>\r\n<h4>- AC 220V / 50Hz</h4>', NULL, NULL, NULL, '/produk/name-16117411728107.jpg', '/produk/name-16117398156163.jpg', '/produk/name-16117398156172.jpg', '/produk/name-16117398156180.jpg', NULL, NULL, 'amplifier-betavo-zx-988b', '2020-10-30 07:33:25', '2021-04-10 05:53:22', 1, 0),
(13, 'Amplifier BETAVO ZX-788B', NULL, NULL, 1, 2, 'Amplifier BETAVO ZX-788B', '<h4>Spesifikasi :</h4>\r\n<h4>- 4 Channel Input Mic</h4>\r\n<h4>- Support USB, SD Card &amp; Bluetooth</h4>\r\n<h4>- Tone Music Volum, Balance, Low, High</h4>\r\n<h4>- Tone Mic Volum, Low, High, Delay dan Echo</h4>\r\n<h4>- Indicator Vuled Meter</h4>\r\n<h4>- THD 2%</h4>\r\n<h4>- Ketajaman Mikrofon 25mV</h4>\r\n<h4>- Penyesuaian Mikrofon 80 Hz +- 15dB</h4>\r\n<h4>- Signal / Rasio Gangguan Suara 80dB</h4>\r\n<h4>- Max Speaker Pasif 8\" x 2</h4>\r\n<h4>- Input Power AC / DC</h4>\r\n<h4>- 1 Channel Output Line RCA</h4>', NULL, NULL, NULL, '/produk/name-16117397824130.jpg', '/produk/name-16117397824172.jpg', '/produk/name-16117397824180.jpg', '/produk/name-16117397824188.jpg', NULL, NULL, 'amplifier-betavo-zx-788b', '2020-10-30 07:47:27', '2021-01-27 09:29:42', 1, 0),
(14, 'Amplifier BETAVO ZX-3950B', NULL, NULL, 1, 2, 'Amplifier BETAVO ZX-3950B', '<h4>Spesifikasi :</h4>\r\n<h4>- Power Output 250 Watt</h4>\r\n<h4>- Support USB, SD Card, &amp; Bluetooth</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Ada Equalizer Left 7 Band &amp; Right 7 Band</h4>\r\n<h4>- THD 2%</h4>\r\n<h4>- Ketajaman Mikrofon 25mV</h4>\r\n<h4>- Penyesuaian Mikrofon 80 Hz +- 15dB</h4>\r\n<h4>- Signal / Rasio Gangguan Suara 80dB</h4>\r\n<h4>- 2 Output Speaker 4-8 Ohm</h4>\r\n<h4>- 2 Output Speaker Suround</h4>\r\n<h4>- Volume Music : Low, Mid, Hi, and Balance</h4>\r\n<h4>- Volume Mic : Delay, Repeat, Hi, Mid, and Balance</h4>\r\n<h4>- Bisa Tambah Subwoofer</h4>\r\n<h4>&nbsp;</h4>', NULL, NULL, NULL, '/produk/name-16119059953705.jpg', '/produk/name-16040464795739.jpg', '/produk/name-16040464795747.jpg', NULL, NULL, NULL, 'amplifier-betavo-zx-3950b', '2020-10-30 08:02:33', '2021-01-29 07:39:55', 1, 0),
(15, 'Amplifier BETAVO ZX - 12B', NULL, NULL, 1, 2, 'Amplifier BETAVO ZX - 12B', '<p>Spesifikasi :</p>\r\n<p>- 400 Watt</p>\r\n<p>- Support Bluetooth, SD/MMC Card, USB</p>\r\n<p>- 8 Channel Mic</p>\r\n<p>- Extra Sub Woofer Out</p>\r\n<p>- BBE</p>\r\n<p>- Knob Echo, Bal, Low, Mid, High</p>\r\n<p>- Knob Master Volume</p>\r\n<p>- Knob Master Mic Volume</p>\r\n<p>- Digital Display</p>\r\n<p>- Cooling Fan</p>\r\n<p>- AC~220V-50Hz</p>\r\n<p>- 4 Channel Speaker Output</p>\r\n<p>- Nett Weight 7 KG</p>\r\n<p>- Gross Weight 7.83 KG</p>\r\n<p>- Dimensi Produk 43*32*17 CM</p>\r\n<p>- Packing Size 50*36*21 CM</p>', NULL, NULL, NULL, '/produk/name-16141371941045.jpg', '/produk/name-16141371941086.jpg', '/produk/name-16141371941095.jpg', '/produk/name-16141371941104.jpg', '/produk/name-16141371941113.jpg', NULL, 'amplifier-betavo-zx-12b', '2020-10-30 08:08:49', '2021-02-24 09:59:41', 1, 0),
(16, 'Amplifier BETAVO ZX-9900B', NULL, NULL, 1, 2, 'Amplifier BETAVO ZX-9900B', '<p>Spesifikasi :</p>\r\n<p>- Double UHF Wireless MIC</p>\r\n<p>- Support USB, SD Card, &amp; Bluetooth</p>\r\n<p>- 4 Channel MIC Input</p>\r\n<p>- 2 Knob Volume Mic</p>\r\n<p>- Equalizer Graphics 7 Bands 2 Channel</p>\r\n<p>- Selector Gain -20db ON / OFF</p>\r\n<p>- 4 Channel Output Speaker</p>\r\n<p>- Digital Display</p>\r\n<p>- Cooling Fan</p>\r\n<p>- 1 Input Line RCA</p>\r\n<p>- 3 Output Line RCA</p>', NULL, NULL, NULL, '/produk/name-16124975910790.jpg', '/produk/name-16040463424667.jpg', NULL, NULL, NULL, NULL, 'amplifier-betavo-zx-9900b', '2020-10-30 08:25:42', '2021-02-05 03:59:51', 1, 0),
(17, 'Amplifier BETAVO CX-7000', NULL, NULL, 99, 2, 'Amplifier BETAVO CX-7000', '<h4>Spesifikasi :</h4>\r\n<h4>- Power Output 400 Watt</h4>\r\n<h4>- Support SD Card , USB</h4>\r\n<h4>- 6 Channel Mic Input</h4>\r\n<h4>- 2 Channel Equalizer</h4>\r\n<h4>- Bisa Tambah Subwoofer</h4>\r\n<h4>- THD 2%</h4>\r\n<h4>- Ketajaman Mikrofon 25mV</h4>\r\n<h4>- Penyesuaian Mikrofon 80 Hz +- 15dB</h4>\r\n<h4>- Signal / Rasio Gangguan Suara 80dB</h4>\r\n<h4>- Volume Music : Bass, Trebel, Mid, dan Balance</h4>\r\n<h4>- Volume Mic : Bass, Trebel, Delay, dan Echo</h4>\r\n<h4>- AC 220V / 50Hz</h4>', NULL, NULL, NULL, '/produk/name-16119062344620.jpg', '/produk/name-16040470241348.jpg', NULL, NULL, NULL, NULL, 'amplifier-betavo-cx-7000', '2020-10-30 08:37:04', '2021-02-23 07:40:07', 1, 0),
(18, 'Amplifier BETAVO MT-2700', NULL, NULL, 99, 2, 'Amplifier BETAVO MT-2700', '<h4>Spesifikasi :</h4>\r\n<h4>- 200 Watt</h4>\r\n<h4>- 2 Channel Mic Input</h4>\r\n<h4>- Full Function Protect System</h4>\r\n<h4>- 1 Master Volume</h4>\r\n<h4>- THD 2%</h4>\r\n<h4>- Ketajaman Mikrofon 25mV</h4>\r\n<h4>- Penyesuaian Mikrofon 80 Hz +- 15dB</h4>\r\n<h4>- Signal / Rasio Gangguan Suara 80dB</h4>\r\n<h4>- Low Noise and Low Distortion</h4>\r\n<h4>- Karaoke Echo Effect</h4>\r\n<h4>- AC 220V / 50Hz</h4>\r\n<h4>&nbsp;</h4>', NULL, NULL, NULL, '/produk/name-16119062741471.jpg', '/produk/name-16040475656185.jpg', '/produk/name-16040475656192.jpg', NULL, NULL, NULL, 'amplifier-betavo-mt-2700', '2020-10-30 08:46:05', '2021-02-23 07:40:17', 1, 0),
(19, 'Amplifier BETAVO ZX-1007B', NULL, NULL, 1, 2, 'Amplifier BETAVO ZX-1007B', '<p>Spesifikasi :</p>\r\n<p>- 250 Watt</p>\r\n<p>- Support Blutooth, USB, SD/MMC Card</p>\r\n<p>- 3 Mic Channel</p>\r\n<p>- Digital Display</p>\r\n<p>- Equalizer 10 Bands x 2 Channel</p>\r\n<p>- Knob Echo, Bal, Lo, Mid</p>\r\n<p>- Knob Master Volume</p>\r\n<p>- Knob Master Mic Volume</p>\r\n<p>- Cooling Fan</p>\r\n<p>- AC~220V-240V</p>\r\n<p>- 4 Channel Speaker Output</p>\r\n<p>- Nett Weight 3,57 KG</p>\r\n<p>- Gross Weight 4,14 KG</p>\r\n<p>- Dimensi Produk 43*27*11 CM</p>\r\n<p>- Packing Size 48*30*15 CM</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16141378080130.jpg', '/produk/name-16141378080171.jpg', '/produk/name-16141378080179.jpg', '/produk/name-16141378080186.jpg', '/produk/name-16141378581181.jpg', NULL, 'amplifier-betavo-fs-1007b', '2020-10-30 09:24:28', '2021-02-24 03:37:38', 1, 0),
(20, 'Amplifier BETAVO ZX-2750B', NULL, NULL, 1, 2, 'Amplifier BETAVO ZX-2750B', '<p>Spesifikasi :</p>\r\n<p>- 350 Watt</p>\r\n<p>- Support Bluetooth</p>\r\n<p>- 3 Channel Mic</p>\r\n<p>- Knob Echo, Bal, Lo, Mid, High</p>\r\n<p>- Knob Master Volume</p>\r\n<p>- Knob Master Mic Volume</p>\r\n<p>- Equalizer 7 Bands x 2 Channel</p>\r\n<p>- Digital Display</p>\r\n<p>- Support USB, SD/MMC Card</p>\r\n<p>- Cooling Fan</p>\r\n<p>- AC~220V-240V</p>\r\n<p>- 4 Channel Speaker Output</p>\r\n<p>- Nett Weight 4.33 KG</p>\r\n<p>- Gross Weight 5.1 KG</p>\r\n<p>- Dimensi Produk 43*29*12 CM</p>\r\n<p>- Packing Size 50*33*18 CM&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16141383920984.jpg', '/produk/name-16141383921023.jpg', '/produk/name-16141383921030.jpg', '/produk/name-16141383921038.jpg', '/produk/name-16170107566051.jpeg', NULL, 'amplifier-betavo-zx-2750b', '2020-10-31 03:18:54', '2021-03-30 01:30:15', 1, 0),
(21, 'Amplifier BETAVO ZX-9500B', NULL, NULL, 1, 2, 'Amplifier BETAVO ZX-9500B', '<h4>Spesifikasi :</h4>\r\n<p>- 400 Watt</p>\r\n<p><span class=\"ILfuVd\"><span class=\"hgKElc\">- Speaker System 4-8 ohm</span></span></p>\r\n<p><span class=\"ILfuVd\"><span class=\"hgKElc\">- Input Power AC220-240V 50Hz - DC 12V</span></span></p>\r\n<p>- 5 Channel Mic Input</p>\r\n<p>- Support SD Card, USB, &amp; Bluetooth</p>\r\n<p>- Volume Mic : Echo, Lo, Mid, dan Hi</p>\r\n<p>- Volume Music : Bal, Lo, Mid, dan Hi</p>\r\n<p>- Extra Subwoofer</p>\r\n<p>- 2 Master Volume</p>\r\n<p>- Cooling Fan</p>\r\n<p>- 4 Output Line RCA</p>\r\n<p>- 4 Channel Output Speaker</p>', NULL, NULL, NULL, '/produk/name-16137225771574.jpg', '/produk/name-16137225771614.jpg', '/produk/name-16137225771622.jpg', '/produk/name-16137225771629.jpg', NULL, NULL, 'amplifier-betavo-zx-9500b', '2020-10-31 03:29:38', '2021-02-19 08:16:17', 1, 0),
(22, 'Amplifier BETAVO ZX-8800B', NULL, NULL, 1, 2, 'Amplifier BETAVO ZX-8800B', '<p>Spesifikasi :</p>\r\n<p>- Power Output 500w</p>\r\n<p>- 4 Channel Mic Input</p>\r\n<p>- Support USB, SD Card, &amp; Bluetooth</p>\r\n<p>- Equalizer Graphic 15 Band 2 Channel</p>\r\n<p>- Extra Subwoofer</p>\r\n<p>- 2 Volume Master</p>\r\n<p>- Volume Music : Bass, Trebel, Mid, dan Bal</p>\r\n<p>- Volume Mic : Bass, Trebel, Delay, dan Echo</p>', NULL, NULL, NULL, '/produk/name-16117400643119.jpg', '/produk/name-16117400643165.jpg', '/produk/name-16117400643174.jpg', '/produk/name-16117400643183.jpg', NULL, NULL, 'amplifier-betavo-zx-8800b', '2020-10-31 03:38:07', '2021-01-27 09:34:24', 1, 0),
(23, 'Amplifier BETAVO ZX-9200B', NULL, NULL, 1, 2, 'Amplifier BETAVO ZX-9200B', '<p>Spesifikasi :</p>\r\n<p>- 400 Watt</p>\r\n<p>- Support Bluetooth</p>\r\n<p>- Support USB, SD/MMC Card</p>\r\n<p>- Equalizer 7 Bands x 2 Channel</p>\r\n<p>- 4 Channel Mic Input</p>\r\n<p>- DSP Processor</p>\r\n<p>- 5 Channel Speaker Output</p>\r\n<p>- Mic Master Volume</p>\r\n<p>- Music Master Volume</p>', NULL, NULL, NULL, '/produk/name-16117401295124.jpg', '/produk/name-16117401295169.jpg', '/produk/name-16117401295179.jpg', '/produk/name-16117401295189.jpg', NULL, NULL, 'amplifier-betavo-zx-9200b', '2020-10-31 04:05:07', '2021-02-19 08:23:33', 1, 0),
(24, 'Amplifer Wallet BETAVO WL-5200T', NULL, NULL, 1, 3, 'Amplifer Wallet BETAVO WL-5200T', '<p>Spesifikasi :</p>\r\n<p>- 2 Channel Input</p>\r\n<p>- 4 Channel Speaker Output</p>\r\n<p>- 2 Kipas</p>\r\n<p>- Digital Display</p>\r\n<p>- Support USB, SD/MMC Card</p>\r\n<p>- 4 Channel Volume, Knob Treble, Mid</p>\r\n<p>- Repeat</p>\r\n<p>- AC 220V-240V</p>\r\n<p>- DC 12V/5A</p>\r\n<p>- Bisa AC / DC</p>', NULL, NULL, NULL, '/produk/name-16124282652192.jpg', '/produk/name-16124282652236.jpg', '/produk/name-16124282652245.jpg', '/produk/name-16124282652253.jpg', NULL, NULL, 'amplifer-wallet-betavo-wl-5200t', '2020-10-31 04:19:02', '2021-02-04 08:44:25', 1, 0),
(25, 'Amplifer Wallet BETAVO WL-5300T', NULL, NULL, 1, 3, 'Amplifer Wallet BETAVO WL-5300T', '<p>Spesifikasi :</p>\r\n<p>- Digital Display</p>\r\n<p>- Support USB, SD/MMC Card</p>\r\n<p>- Button Off, Enter, Start, Setup, Repeat</p>\r\n<p>- 6 Knob Channel Volume</p>\r\n<p>- 6 Channel Speaker Output</p>\r\n<p>- AC~220V-240V</p>\r\n<p>- DC 12V / 15A</p>\r\n<p>- Cooling Fan</p>\r\n<p>- Nett Weight 5.5 KG</p>\r\n<p>- Gross Weight 5.91 KG</p>\r\n<p>- Dimensi Produk 24*24*27 CM</p>\r\n<p>- Packing Size 30*30*33 CM</p>', NULL, NULL, NULL, '/produk/name-16142479365858.jpg', '/produk/name-16142479365897.jpg', '/produk/name-16142479365906.jpg', '/produk/name-16142479365915.jpg', '/produk/name-16142479365924.jpg', NULL, 'amplifer-wallet-betavo-wl-5300t', '2020-10-31 04:27:22', '2021-02-25 10:12:16', 1, 0),
(26, 'Amplifier Wallet BETAVO ZX-2206T', NULL, NULL, 1, 3, 'Amplifier Wallet BETAVO ZX-2206T', '<p>Spesifikasi :</p>\r\n<p>- Support USB, SD/MMC Card</p>\r\n<p>- Digital Display</p>\r\n<p>- Knob 4 Channel Volume</p>\r\n<p>- Knob Treble, Mid</p>\r\n<p>- Repeat</p>\r\n<p>- 4 Channel Speaker Output</p>\r\n<p>- AC~220V-240V</p>\r\n<p>- DC 12V/15A</p>\r\n<p>- Nett Weight 3.4 KG</p>\r\n<p>- Gross Weight 3.78 KG</p>\r\n<p>- Dimensi Produk 31*26*11 CM</p>\r\n<p>- Packing Size 33*34*15 CM</p>', '3.', NULL, NULL, '/produk/name-16141382347985.jpg', '/produk/name-16141382348028.jpg', '/produk/name-16141382348037.jpg', '/produk/name-16141382348046.jpg', '/produk/name-16141382348054.jpg', NULL, 'amplifier-wallet-betavo-zx-2206t', '2020-10-31 04:38:48', '2021-02-24 03:43:54', 1, 0),
(27, 'Amplifier Mini BETAVO MA-200B', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO MA-200B', '<h4>Spesifikasi :</h4>\r\n<h4>- 4 Channel Output Speaker</h4>\r\n<h4>- Support SD Card, USB dan FM Radio</h4>\r\n<h4>- Support Bluetooth</h4>\r\n<h4>- Speaker Impedance 4-16 Ohm</h4>\r\n<h4>- Input Power 12 Volts DC5A</h4>\r\n<h4>- Input Impedance=47K</h4>\r\n<h4>- Input Sensitivity 0.25mV-220mV</h4>\r\n<h4>- Frekuensi 20Hz-20Khz</h4>\r\n<h4>- SNR (Signal/Noise Ratio) -85dbn</h4>\r\n<h4>- Output Power R.M.S 40W</h4>\r\n<h4>&nbsp;</h4>', NULL, NULL, NULL, '/produk/name-16147574143956.jpg', '/produk/name-16147574144066.jpg', '/produk/name-16147574144077.jpg', '/produk/name-16147574144086.jpg', NULL, NULL, 'amplifier-mini-betavo-ma-200', '2020-10-31 04:52:59', '2021-03-03 07:43:34', 1, 0),
(28, 'Amplifier Mini BETAVO MA-400B', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO MA-400B', '<h4>Spesifikasi :</h4>\r\n<h4>- Speaker Impedance 4-16 Ohm</h4>\r\n<h4>- Input Power 12 Volts DC5A</h4>\r\n<h4>- Input Impedance=47K</h4>\r\n<h4>- Input Sensitivity 0.25mV-220mV</h4>\r\n<h4>- Frekuensi 20Hz-20Khz</h4>\r\n<h4>- SNR (Signal/Noise Ratio) -85dbn</h4>\r\n<h4>- Output Power R.M.S 40W</h4>\r\n<h4>- 2 Channel</h4>\r\n<h4>- Support SD Card, USB, FM Radio</h4>\r\n<h4>- Support Bluetooth</h4>\r\n<h4>- AUX in</h4>\r\n<h4>- Volume, Bass, Treble</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>&nbsp;</h4>\r\n<h4>&nbsp;</h4>', NULL, NULL, NULL, '/produk/name-16117384007096.jpg', '/produk/name-16117384007142.jpg', '/produk/name-16117384007152.jpg', '/produk/name-16117384007162.jpg', NULL, NULL, 'amplifier-mini-betavo-ma-400', '2020-10-31 06:31:43', '2021-01-27 09:06:40', 1, 0),
(29, 'Amplifier Mini BETAVO MV-550B', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO MV-550B', '<h4>Spesifikasi :</h4>\r\n<h4>- Speaker Impedance 4-16 Ohm</h4>\r\n<h4>- Input Power 12 Volts DC5A</h4>\r\n<h4>- Input Impedance=47K</h4>\r\n<h4>- Input Sensitivity 0.25mV-220mV</h4>\r\n<h4>- Frekuensi 20Hz-20Khz</h4>\r\n<h4>- SNR (Signal/Noise Ratio) -85dbn</h4>\r\n<h4>- Output Power R.M.S 40W</h4>\r\n<h4>- Support SD Card, USB , FM Radio &amp; Bluetooth</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- AUX In</h4>\r\n<h4>- 1 Remote</h4>', NULL, NULL, NULL, '/produk/name-16117388785073.jpg', '/produk/name-16117388785139.jpg', '/produk/name-16117388785150.jpg', '/produk/name-16117388785160.jpg', NULL, NULL, 'amplifier-mini-betavo-mv-550b', '2020-10-31 06:53:52', '2021-01-27 09:14:38', 1, 0),
(30, 'Amplifier Mini BETAVO MV-450B', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO MV-450B', '<h4>Spesifikasi :</h4>\r\n<h4>- Support SD Card, USB &amp; Bluetooth</h4>\r\n<h4>- Support FM Radio + FM Antena</h4>\r\n<h4>- 2 Channel Speaker Output</h4>\r\n<h4>- Aux In</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- DC 12V/5A</h4>', NULL, NULL, NULL, '/produk/name-16123270037734.jpg', '/produk/name-16123267602940.jpg', '/produk/name-16123267602950.jpg', '/produk/name-16123267602959.jpg', NULL, NULL, 'amplifier-mini-betavo-mv-450b', '2020-10-31 07:23:55', '2021-02-03 04:36:43', 1, 0),
(31, 'Amplifier Mini BETAVO BT-232', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO BT-232', '<h4>Spesifikasi :</h4>\r\n<h4>- Support SD Card, USB, FM radio</h4>\r\n<h4>- 2 Channel Mic Input</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Audio Input</h4>\r\n<h4>- 2 Channel Speaker Output</h4>\r\n<h4>- Aux In</h4>\r\n<h4>- AC 220V / DC 12V</h4>', NULL, NULL, NULL, '/produk/name-16119905894326.jpg', '/produk/name-16119905894856.jpg', '/produk/name-16119905894867.jpg', '/produk/name-16119905894880.jpg', '/produk/name-16119905894888.jpg', NULL, 'amplifier-mini-betavo-bt-232', '2020-10-31 08:21:53', '2021-01-30 07:09:49', 1, 0),
(32, 'Amplifier Mini BETAVO T-202', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO T-202', '<h4>Spesifikasi :</h4>\r\n<h4>- Support SD/MMC Card, USB</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- AUX In</h4>\r\n<h4>- 2 Channel Speaker Output</h4>\r\n<h4>- AC 220V &amp; DC 12C / 5A</h4>\r\n<h4>- Support FM Radio + FM Ant</h4>', NULL, NULL, NULL, '/produk/name-16119912590307.jpg', '/produk/name-16119912590861.jpg', '/produk/name-16119912590871.jpg', '/produk/name-16119912590879.jpg', NULL, NULL, 'amplifier-mini-betavo-t-202', '2020-10-31 08:32:38', '2021-01-30 07:20:59', 1, 0),
(33, 'Amplifier Mini BETAVO BT-665', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO BT-665', '<h4>Spesifikasi :</h4>\r\n<h4>- Speaker Impedance 4-16 Ohm</h4>\r\n<h4>- Input Power 12 Volts DC5A</h4>\r\n<h4>- Input Impedance=47K</h4>\r\n<h4>- Input Sensitivity 0.25mV-220mV</h4>\r\n<h4>- Frekuensi 20Hz-20Khz</h4>\r\n<h4>- SNR (Signal/Noise Ratio) -85dbn</h4>\r\n<h4>- Output Power R.M.S 40W</h4>\r\n<h4>- Support SD Card, USB, FM Radio</h4>\r\n<h4>- 2 Channel Speaker Output</h4>\r\n<h4>- AUX In</h4>\r\n<h4>- 2 Channel Mic Input</h4>\r\n<h4>- Digital Display</h4>', NULL, NULL, NULL, '/produk/name-16119051431481.jpg', NULL, NULL, NULL, NULL, NULL, 'amplifier-mini-betavo-bt-665', '2020-10-31 08:44:36', '2021-01-29 07:25:43', 1, 0),
(34, 'Amplifier Mini BETAVO BT-811B', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO BT-811B', '<h4>Spesifikasi :</h4>\r\n<h4>- Speaker Impedance 4-16 Ohm</h4>\r\n<h4>- Input Power 12 Volts DC5A</h4>\r\n<h4>- Input Impedance=47K</h4>\r\n<h4>- Input Sensitivity 0.25mV-220mV</h4>\r\n<h4>- Frekuensi 20Hz-20Khz</h4>\r\n<h4>- SNR (Signal/Noise Ratio) -85dbn</h4>\r\n<h4>- Output Power R.M.S 40W</h4>\r\n<h4>- Support SD Card, USB, FM Radio &amp; Bluetooth</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- AUX In</h4>\r\n<h4>- 2 Channel Speaker Output</h4>\r\n<h4>- 1 Channel Mic Input</h4>\r\n<h4>- Remote</h4>\r\n<h4>&nbsp;</h4>', NULL, NULL, NULL, '/produk/name-16117373463132.jpg', '/produk/name-16117373463174.jpg', '/produk/name-16117373463181.jpg', '/produk/name-16117373463189.jpg', NULL, NULL, 'amplifier-mini-betavo-bt-118b', '2020-10-31 08:56:12', '2021-01-27 08:49:06', 1, 0),
(35, 'Amplifier Mini BETAVO BT-779B', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO BT-779B', '<h4>Spesifikasi :</h4>\r\n<h4>- Speaker Impedance 4-16 Ohm</h4>\r\n<h4>- Input Power 12 Volts DC5A</h4>\r\n<h4>- Input Impedance=47K</h4>\r\n<h4>- Input Sensitivity 0.25mV-220mV</h4>\r\n<h4>- Frekuensi 20Hz-20Khz</h4>\r\n<h4>- SNR (Signal/Noise Ratio) -85dbn</h4>\r\n<h4>- Output Power R.M.S 40W</h4>\r\n<h4>- Support SD Card, USB, FM Radio &amp; Bluetooth</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- 4 Channel Output</h4>\r\n<h4>- AUX In</h4>\r\n<h4>- Remote</h4>', NULL, NULL, NULL, '/produk/name-16141465799947.jpg', '/produk/name-16117372024206.jpg', '/produk/name-16117372024218.jpg', '/produk/name-16117372024229.jpg', '/produk/name-16117372024241.jpg', NULL, 'amplifier-mini-betavo-bt-779b', '2020-10-31 09:15:36', '2021-02-24 06:02:59', 1, 0),
(36, 'Amplifier Mini BETAVO BT-630B', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO BT-630B', '<h4>Spesifikasi :</h4>\r\n<h4>- Speaker Impedance 4-16 Ohm</h4>\r\n<h4>- Input Power 12 Volts DC5A</h4>\r\n<h4>- Input Impedance=47K</h4>\r\n<h4>- Input Sensitivity 0.25mV-220mV</h4>\r\n<h4>- Frekuensi 20Hz-20Khz</h4>\r\n<h4>- SNR (Signal/Noise Ratio) -85dbn</h4>\r\n<h4>- Output Power R.M.S 40W</h4>\r\n<h4>- Support SD Card, USB, FM Radio &amp; Bluetooth</h4>\r\n<h4>- 2 Channel Speaker Output</h4>\r\n<h4>- 2 Channel Mic Input</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- AUX In</h4>\r\n<h4>- Remote</h4>', NULL, NULL, NULL, '/produk/name-16117371673114.jpg', '/produk/name-16117371673157.jpg', '/produk/name-16117371673167.jpg', '/produk/name-16117371673176.jpg', NULL, NULL, 'amplifier-mini-betavo-bt-630b', '2020-10-31 09:22:58', '2021-01-27 08:46:07', 1, 0),
(37, 'Professional Mixer BETAVO KING 120', NULL, NULL, 15, 10, 'Professional Mixer BETAVO KING 120', '<h4>Spesifikasi :</h4>\r\n<h4>- 12 Channel Mono</h4>\r\n<h4>- 3 Aux</h4>\r\n<h4>- 2 Group Out</h4>\r\n<h4>- USB + Bluetooth With Display</h4>\r\n<h4>- Beat Parametrik Tone Control Perchannel</h4>\r\n<h4>- Effect 199DSP Digital Multi Effect</h4>\r\n<h4>- Extra Aux Send, Phone, Record Out</h4>', NULL, NULL, NULL, '/produk/name-16119029907628.jpg', '/produk/name-16119029907678.jpg', '/produk/name-16119029907694.jpg', NULL, NULL, NULL, 'mixer-audio-betavo-king-120-12-channel', '2020-10-31 09:56:43', '2021-01-29 07:12:31', 1, 0),
(38, 'Professional Mixer BETAVO KING 80', NULL, NULL, 14, 10, 'Professional Mixer BETAVO KING 80', '<h4>Spesifikasi :</h4>\r\n<h4>- 8 Channel Mono</h4>\r\n<h4>- 3 Aux</h4>\r\n<h4>- USB + Bluetooth With Display</h4>\r\n<h4>- 2 Group</h4>\r\n<h4>- Effect 199DSP Digital Multi Effect</h4>\r\n<h4>- Beat Parametrik Tone Control Perchannel</h4>\r\n<h4>- Extra Aux Send, Phone, Record Out</h4>', NULL, NULL, NULL, '/produk/name-16119029561635.jpg', '/produk/name-16119029561679.jpg', '/produk/name-16119029561689.jpg', '/produk/name-16119029561698.jpg', NULL, NULL, 'professional-mixer-betavo-king-80-8-channel', '2020-11-02 01:32:55', '2021-01-29 07:11:25', 1, 0),
(39, 'Professional Power Mixer BETAVO KW-80N', NULL, NULL, 1, 11, 'Professional Power Mixer BETAVO KW-80N', '<h4>Spesifikasi :</h4>\r\n<h4>- 6 Channel Mono</h4>\r\n<h4>- 2 Channel Stereo</h4>\r\n<h4>- Support USB</h4>\r\n<h4>- Support Bluetooth</h4>\r\n<h4>- 380DSP</h4>\r\n<h4>- Display Digital</h4>\r\n<h4>- Phantom +48V</h4>', NULL, NULL, NULL, '/produk/name-16141492024118.jpg', '/produk/name-16083005108351.jpg', '/produk/name-16083019263231.jpg', '/produk/name-16083019263271.jpg', '/produk/name-16083019263279.jpg', NULL, 'professional-mixer-betavo-kw-80n', '2020-11-02 01:46:19', '2021-02-24 06:48:57', 1, 0),
(40, 'Professional Mixer BETAVO JT-122 V2', NULL, NULL, 6, 10, 'Professional Mixer BETAVO JT-122 V2', '<h4>Spesifikasi :</h4>\r\n<h4>- 12 Channel Mono</h4>\r\n<h4>- Support USB &amp; Bluetooth</h4>\r\n<h4>- Phantom +48V</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Graphic Equalizer</h4>\r\n<h4>- Extra Aux Send, Phone, Record Out</h4>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16119029042889.jpg', '/produk/name-16119029043429.jpg', '/produk/name-16119029043442.jpg', '/produk/name-16119029043452.jpg', NULL, NULL, 'professional-mixer-betavo-jt-122-v2', '2020-11-02 02:08:44', '2021-01-29 07:14:57', 1, 0),
(41, 'Professional Mixer BETAVO JT-88 V2', NULL, NULL, 5, 10, 'Professional Mixer BETAVO JT-88 V2', '<h4>Spesifikasi :</h4>\r\n<h4>- 8 Channel Mono</h4>\r\n<h4>- Support USB &amp; Bluetooth</h4>\r\n<h4>- Phantom +48V</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Equalizer Graphic</h4>\r\n<h4>- Extra Aux Send, Phone, Record Out</h4>', NULL, NULL, NULL, '/produk/name-16119028784667.jpg', '/produk/name-16119028784713.jpg', '/produk/name-16119028784725.jpg', '/produk/name-16119028784736.jpg', NULL, NULL, 'professional-mixer-betavo-jt-88-v2', '2020-11-02 02:18:34', '2021-01-29 07:14:16', 1, 0),
(42, 'Professional Mixer BETAVO JT-66 V2', NULL, NULL, 4, 10, 'Professional Mixer BETAVO JT-66 V2', '<h4>Spesifikasi :</h4>\r\n<h4>- 6 Channel Mono</h4>\r\n<h4>- Support USB &amp; Bluetooth</h4>\r\n<h4>- Phantom +48V</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Graphic Equalizer</h4>\r\n<h4>- Extra Aux Send, Phone, Record Out</h4>', NULL, NULL, NULL, '/produk/name-16119028222087.jpg', '/produk/name-16119028243812.jpg', '/produk/name-16119028243823.jpg', '/produk/name-16119028243844.jpg', NULL, NULL, 'professional-mixer-betavo-jt-66-v2', '2020-11-02 02:24:22', '2021-01-29 07:13:29', 1, 0),
(43, 'Professional Mixer BETAVO SM-6W', NULL, NULL, 11, 10, 'Professional Mixer BETAVO SM-6W', '<h4>Spesifikasi :</h4>\r\n<h4>- 4 Channel Mono</h4>\r\n<h4>- 2 Channel Stereo</h4>\r\n<h4>- 16DSP Multi Effect</h4>\r\n<h4>- Phantom +48V</h4>\r\n<h4>- Support USB &amp; Bluetooth</h4>\r\n<h4>- Antena Receiver</h4>\r\n<h4>- 2 Mic Wireless</h4>', NULL, NULL, NULL, '/produk/name-16119908849848.jpg', '/produk/name-16119908849893.jpg', '/produk/name-16119908849904.jpg', '/produk/name-16119908849913.jpg', '/produk/name-16119908849923.jpg', NULL, 'professional-mixer-betavo-sm-6w', '2020-11-02 02:53:15', '2021-01-30 07:14:44', 1, 0),
(44, 'Professional Mixer BETAVO F7 V2', NULL, NULL, 8, 10, 'Professional Mixer BETAVO F7 V2', '<h4>Spesifikasi :</h4>\r\n<h4>- 5 Channel Mono</h4>\r\n<h4>- 2 Channel Stereo</h4>\r\n<h4>- Support USB</h4>\r\n<h4>- Support Bluetooth</h4>\r\n<h4>- +48V Phantom</h4>\r\n<h4>- Mic Frequency Response +0, -1dB, &lt;20Hz to 40kHz</h4>\r\n<h4>- T.H.D 0.1% (1KHz Full Power)</h4>\r\n<h4>- S/N Ratio -80dB</h4>\r\n<h4>- Input Sensitivity Mic:30dB. Line 21dB</h4>\r\n<h4>- Output Impedance &gt;100 ohm</h4>\r\n<h4>- Max Output Level +20dBu</h4>\r\n<h4>- Power AC 110V-240V</h4>', NULL, NULL, NULL, '/produk/name-16143331531447.jpg', '/produk/name-16143331800803.jpg', '/produk/name-16143331800843.jpg', '/produk/name-16143331800852.jpg', NULL, NULL, 'professional-mixer-betavo-f7-v2', '2020-11-02 03:11:47', '2021-02-26 09:53:00', 1, 0),
(45, 'Professional Mixer BETAVO F4 V2', NULL, NULL, 7, 10, 'Professional Mixer BETAVO F4 V2', '<h4>Spesifikasi :</h4>\r\n<h4>- 4 Channel</h4>\r\n<h4>- Support USB &amp; Bluetooth</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Phantom +48V</h4>\r\n<h4>- 2 Mono &amp; 1 Stereo</h4>\r\n<h4>- Mic Frequency Response +0, -1dB, &lt;20Hz to 40kHz</h4>\r\n<h4>- Mic Frequency Response +0, -3dB, &lt;20Hz to 60kHz</h4>\r\n<h4>- T.H.D 0.1% (1KHz Full Power)</h4>\r\n<h4>- S/N Ratio -80dB</h4>\r\n<h4>- Input Sensitivity Mic:30dB. Line 21dB</h4>\r\n<h4>- Output Impedance &gt;100 ohm</h4>\r\n<h4>- Max Output Level +20dBu</h4>\r\n<h4>- Power AC 110V-240V</h4>', NULL, NULL, NULL, '/produk/name-16141432895110.jpg', '/produk/name-16123429648920.jpg', '/produk/name-16123429648930.jpg', '/produk/name-16123429648938.jpg', NULL, NULL, 'professional-mixer-betavo-f4-v2', '2020-11-02 03:20:24', '2021-02-24 05:08:09', 1, 0),
(46, 'Professional Mixer BETAVO SM 6', NULL, NULL, 10, 10, 'Professional Mixer BETAVO SM 6', '<h4>Spesifikasi :</h4>\r\n<h4>- 4 Channel Mono, 2 Channel Stereo</h4>\r\n<h4>- Support USB</h4>\r\n<h4>- Support Bluetooth</h4>\r\n<h4>- 16DSP Effect</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Stereo RCA output</h4>\r\n<h4>- TRS jack outs</h4>\r\n<h4>- Main slide control ( L+R ), phones</h4>\r\n<h4>- Individual echo</h4>\r\n<h4>- Phantom for condensor mic</h4>\r\n<h4>- 4 insert for microphone</h4>\r\n<h4>- Delay,Repeat,Effect send &amp; Aux control</h4>\r\n<h4>&nbsp;</h4>', NULL, NULL, NULL, '/produk/name-16123446103911.jpg', '/produk/name-16042895598073.jpg', NULL, NULL, NULL, NULL, 'professional-mixer-betavo-sm-6-1', '2020-11-02 03:40:35', '2021-02-03 09:30:10', 1, 0),
(47, 'Professional Mixer BETAVO SM 4', NULL, NULL, 9, 10, 'Professional Mixer BETAVO SM 4', '<p>Spesifikasi :</p>\r\n<p>- 2 Channel Mono</p>\r\n<p>- 2 Channel Stereo</p>\r\n<p>- Support USB</p>\r\n<p>- Support Bluetooth</p>\r\n<p>- Phones, FX Out, Return</p>\r\n<p>- 16DSP Effect</p>\r\n<p>- +48V Phantom</p>', NULL, NULL, NULL, '/produk/name-16123442446193.jpg', '/produk/name-16123442446769.jpg', '/produk/name-16123442446794.jpg', '/produk/name-16123442446883.jpg', '/produk/name-16083014777488.jpg', NULL, 'professional-mixer-betavo-sm-4', '2020-11-02 03:47:02', '2021-02-03 09:24:04', 1, 0),
(48, 'Professional Mixer BETAVO MX-16', NULL, NULL, 3, 10, 'Professional Mixer BETAVO MX-16', '<h4>Spesifikasi :</h4>\r\n<h4>- 16 Channel Mono</h4>\r\n<h4>- Support USB &amp; Bluetooth</h4>\r\n<h4>- 320 DSP Effect</h4>\r\n<h4>- Phantom +48v</h4>\r\n<h4>- FX Out</h4>\r\n<h4>- 1 Sub Out Stereo</h4>', NULL, NULL, NULL, '/produk/name-16119030925636.jpg', '/produk/name-16119030925680.jpg', '/produk/name-16119030925691.jpg', NULL, NULL, NULL, 'professional-mixer-betavo-mx-16', '2020-11-02 04:04:43', '2021-01-29 07:18:05', 1, 0),
(49, 'Professional Mixer BETAVO MX-12', NULL, NULL, 2, 10, 'Professional Mixer BETAVO MX-12', '<h4>Spesifikasi :</h4>\r\n<h4>- 12 Channel</h4>\r\n<h4>- Support USB &amp; Bluetooth</h4>\r\n<h4>- 320DSP Effect</h4>\r\n<h4>- Selector Phantom +48V</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Frequency Response 20Hz-20KHz -+ 1dB + 4 dBu @ 1 KHz</h4>\r\n<h4>- Total Harmonic Distortion &lt; 0.5% @ + 4dBu ( 22Hz-22KHz )</h4>\r\n<h4>- 2 x 12-segment LED Meter</h4>\r\n<h4>- Power Source AC 100-120V or AC 220-240 V ( 50-60Hz )</h4>\r\n<h4>- Output Power 2 x 150w 4<span class=\"ILfuVd\"><span class=\"hgKElc\">&Omega;</span></span></h4>\r\n<h4><span class=\"ILfuVd\"><span class=\"hgKElc\">- Power Consumption 30W</span></span></h4>\r\n<h4>&nbsp;</h4>', NULL, NULL, NULL, '/produk/name-16123438514873.jpg', '/produk/name-16123438514966.jpg', '/produk/name-16123438514980.jpg', '/produk/name-16123438515010.jpg', NULL, NULL, 'professional-mixer-betavo-mx-12', '2020-11-02 04:14:49', '2021-02-03 09:17:31', 1, 0),
(50, 'Professional Mixer BETAVO MX-8', NULL, NULL, 1, 10, 'Professional Mixer BETAVO MX-8', '<h4>Spesifikasi :</h4>\r\n<h4>- 8 Channel Mono</h4>\r\n<h4>- 320DSP Effect</h4>\r\n<h4>- Support USB &amp; Bluetooth</h4>\r\n<h4>- Phantom +48V</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- FX Out</h4>\r\n<h4>- 1 Sub Out Stereo</h4>', NULL, NULL, NULL, '/produk/name-16119030675647.jpg', '/produk/name-16119030675692.jpg', '/produk/name-16119030675702.jpg', '/produk/name-16119030675711.jpg', NULL, NULL, 'professional-mixer-betavo-mx-8', '2020-11-02 04:24:24', '2021-01-29 07:17:32', 1, 0),
(51, 'Professional Mixer BETAVO MX-6', NULL, NULL, 0, 10, 'Professional Mixer BETAVO MX-6', '<h4>Spesifikasi :</h4>\r\n<h4>- 6 Channel Mono</h4>\r\n<h4>- 320DSP Effect</h4>\r\n<h4>- Phantom +48V</h4>\r\n<h4>- Support USB</h4>\r\n<h4>- Support Bluetooth</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- FX Out</h4>', NULL, NULL, NULL, '/produk/name-16119030454647.jpg', '/produk/name-16119030454691.jpg', '/produk/name-16119030454701.jpg', '/produk/name-16119030454709.jpg', '/produk/name-16056661378850.jpg', NULL, 'professional-mixer-betavo-mx-6', '2020-11-02 04:31:17', '2021-04-19 01:59:14', 1, 0),
(52, 'Professional Mixer BETAVO LS-160', NULL, NULL, 13, 10, 'Professional Mixer BETAVO LS-160', '<h5>Spesifikasi :</h5>\r\n<p>- 16 Channel Mono</p>\r\n<p>- Support USB, MP3</p>\r\n<p>- Mix Out ( L+R )</p>\r\n<p>- Effect</p>\r\n<p>- Return</p>\r\n<p>- Aux</p>\r\n<p>- Phones</p>\r\n<p>- Send</p>\r\n<p>- Digital Display</p>', NULL, NULL, NULL, '/produk/name-16137204579834.jpg', '/produk/name-16137204579870.jpg', '/produk/name-16137204579878.jpg', NULL, NULL, NULL, 'professional-mixer-betavo-ls-160', '2020-11-02 04:39:00', '2021-02-19 07:40:57', 1, 0),
(53, 'Professional Mixer BETAVO BT-808', NULL, NULL, 17, 10, 'Professional Mixer BETAVO BT-808', '<h4>Spesifikasi :</h4>\r\n<h4>- 4 Channel Mono</h4>\r\n<h4>- 4 Channel Stereo</h4>\r\n<h4>- 16DSP Multi Effect</h4>\r\n<h4>- Support USB , USB to PC</h4>\r\n<h4>- Support Bluetooth</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Phantom +48V</h4>\r\n<h4>- Output phones</h4>\r\n<h4>- Send</h4>\r\n<h4>- Return</h4>', NULL, NULL, NULL, '/produk/name-16137197336566.jpg', '/produk/name-16137197336606.jpg', '/produk/name-16137197336616.jpg', '/produk/name-16137197336627.jpg', NULL, NULL, 'professional-mixer-betavo-bt-808', '2020-11-02 04:44:20', '2021-02-19 07:28:53', 1, 0),
(54, 'Professional Mixer BETAVO SMR 8', NULL, NULL, 19, 10, 'Professional Mixer BETAVO SMR 8', '<p>Spesifikasi :</p>\r\n<p>- 8 Channel</p>\r\n<p>- 99DSP Effect</p>\r\n<p>- Support USB</p>\r\n<p>- Phantom +48V</p>\r\n<p>- Headphones Output With Dedicated Volume Control</p>\r\n<p>- Aux And Effects Paths As Will Separate Gain Controls On All Channels</p>\r\n<p>- Aux Send Controls In The Main Section For Optimal Level Adjustment</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16137261309561.jpg', '/produk/name-16082987219844.jpg', '/produk/name-16082987219851.jpg', '/produk/name-16082987219857.jpg', NULL, NULL, 'professional-mixer-betavo-smr-8', '2020-11-02 05:06:30', '2021-02-19 09:15:30', 1, 0),
(55, 'Power Mixer BETAVO MX-402D USB', NULL, NULL, 1, 11, 'Power Mixer BETAVO MX-402D USB', '<h4>Spesifikasi :</h4>\r\n<h4>- 4 Channel</h4>\r\n<h4>- 2 x 200 Watt</h4>\r\n<h4>- Support Usb &amp; Bluetooth</h4>\r\n<h4>- Equalizer 5 band</h4>\r\n<h4>- 16DSP Efect</h4>\r\n<h4>- Cooling Fan</h4>\r\n<h4>- Phantom +48V</h4>\r\n<h4>- Mono Inputs</h4>\r\n<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; * Andwidth 10 Hz to 60 Khz, 3dB</h4>\r\n<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; * Distortion 0.01% at +4dBu, 1Khz, Bandwidth 80kHz</h4>\r\n<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; * Line Level Range -+ 10dBu to 4dBu</h4>\r\n<h4>- Equalization</h4>\r\n<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; * High 12kHz, 15dB</h4>\r\n<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; * Mid 2,5 Khz, 15dB</h4>\r\n<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; * Low 80Hz, 15dB</h4>\r\n<h4>- S/N Ratio +112dB</h4>', NULL, NULL, NULL, '/produk/name-16141491348951.jpg', '/produk/name-16043031064457.jpg', NULL, NULL, NULL, NULL, 'professional-mixer-betavo-mx-402d-usb', '2020-11-02 06:41:51', '2021-02-25 04:32:00', 1, 0),
(56, 'Professional Power Mixer BETAVO PMX-66', NULL, NULL, 17, 11, 'Professional Power Mixer BETAVO PMX-66', '<p>Spesifikasi :</p>\r\n<p>- 6 Channel</p>\r\n<p>- 300w x 2 ( 4 Ohm )</p>\r\n<p>- Support USB</p>\r\n<p>- Support Bluetooth</p>\r\n<p>- Phantom +48V</p>\r\n<p>- 320DSP Effect</p>\r\n<p>- Digital Display</p>\r\n<p>- Power Input AC 220-240V / 50-60Hz</p>', NULL, NULL, NULL, '/produk/name-16141491878955.jpg', '/produk/name-16043000535024.jpg', '/produk/name-16043028002797.jpg', NULL, NULL, NULL, 'professional-power-mixer-pmx-66', '2020-11-02 06:54:13', '2021-02-25 04:31:27', 1, 0),
(57, 'Professional Mixer BETAVO LS-80', NULL, NULL, 12, 10, 'Professional Mixer BETAVO LS-80', '<h4>Spesifikasi :</h4>\r\n<h4>- 8 Channel</h4>\r\n<h4>- Support USB</h4>\r\n<h4>- Support Bluetooth</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Sensitivitas input mic : -60dB-40dB</h4>\r\n<h4>- Efx send : -20dB</h4>\r\n<h4>- Efx return : -20dB</h4>\r\n<h4>- Output tegangan : 4V max</h4>\r\n<h4>- s/n ratio : 80dB</h4>\r\n<h4>- Respon frekuensi : 20hz-20khz</h4>\r\n<h4>- Power supply : AC 220-240V /50-60hz</h4>\r\n<h4>- Daya konsumsi : 30 watt.</h4>', NULL, NULL, NULL, '/produk/name-16141433764957.jpg', '/produk/name-16124247460097.jpg', '/produk/name-16124247460106.jpg', '/produk/name-16124247460114.jpg', NULL, NULL, 'professional-mixer-betavo-ls-80', '2020-11-02 07:04:07', '2021-02-24 05:09:36', 1, 0),
(58, 'Professional Power Mixer BETAVO PMX-44', NULL, NULL, 16, 11, 'Professional Power Mixer BETAVO PMX-44', '<h4>Spesifikasi :</h4>\r\n<h4>- 4 Channel</h4>\r\n<h4>- 250Watt x 2 ( 4 Ohm )</h4>\r\n<h4>- Support USB</h4>\r\n<h4>- Support Bluetooth</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- 320DSP Effect</h4>\r\n<h4>- Phantom +48V</h4>\r\n<h4>- Frequency Response 20Hz-20KHz -+ 1dB + 4 dBu @ 1 KHz</h4>\r\n<h4>- Total Harmonic Distortion &lt; 0.5% @ + 4dBu ( 22Hz-22KHz )</h4>\r\n<h4>- 2 x 12-segment LED Meter</h4>\r\n<h4>- Power Source AC 100-120V or AC 220-240 V ( 50-60Hz )</h4>\r\n<h4>- Output Power 2 x 150w 4<span class=\"ILfuVd\"><span class=\"hgKElc\">&Omega;</span></span></h4>\r\n<h4><span class=\"ILfuVd\"><span class=\"hgKElc\">- Power Consumption 15W</span></span></h4>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16141491781056.jpg', '/produk/name-16043009831656.jpg', NULL, NULL, NULL, NULL, 'professional-power-mixer-pmx-44', '2020-11-02 07:09:43', '2021-02-25 04:31:18', 1, 0),
(59, 'Professional Power Mixer BETAVO PMX-606', NULL, NULL, 1, 11, 'Professional Power Mixer BETAVO PMX-606', '<h4>Spesifikasi :</h4>\r\n<h4>- 6 Channel</h4>\r\n<h4>- Power 2 x 300 Watt</h4>\r\n<h4>- Support USB</h4>\r\n<h4>- Sensitivitas input mic : - 60dB</h4>\r\n<h4>- Input saluran stereo : -40dB</h4>\r\n<h4>- EFX send : -20dB</h4>\r\n<h4>- EFX return : -20dB</h4>\r\n<h4>- Output tegangan : 4v ma</h4>\r\n<h4>- Signal noise ratio : -80dB</h4>\r\n<h4>- Ketentuan daya : AC 220V / 50hz atau 120V / 60hz</h4>', NULL, NULL, NULL, '/produk/name-16141491451275.jpg', NULL, NULL, NULL, NULL, NULL, 'professional-power-mixer-pmx-606', '2020-11-02 07:17:16', '2021-02-25 04:30:58', 1, 0),
(60, 'Power Mixer BETAVO PMG 8/2 USB', NULL, NULL, 1, 11, 'Power Mixer BETAVO PMG 8/2 USB', '<p>Spesifikasi :</p>\r\n<p>- 8 Channel</p>\r\n<p>- 400 Watt</p>\r\n<p>- Support USB</p>\r\n<p>- Digital Display</p>\r\n<p>- Equalizer 9 Band 2 Channel</p>\r\n<p>- 16DSP Effect</p>', NULL, NULL, NULL, '/produk/name-16141491553159.jpg', NULL, NULL, NULL, NULL, NULL, 'professional-power-mixer-pmg-82-usb', '2020-11-02 07:26:29', '2021-02-25 04:32:18', 1, 0),
(61, 'Power Mixer BETAVO PMG 10/2 USB', NULL, NULL, 1, 11, 'Power Mixer BETAVO PMG 10/2 USB', '<p>Spesifikasi :</p>\r\n<p>- 10 Channel</p>\r\n<p>- 600 Watt</p>\r\n<p>- Support USB</p>\r\n<p>- Equalizer 9 Band 2 Channel</p>\r\n<p>- 16DSP Effect</p>\r\n<p>- Digital Display</p>', NULL, NULL, NULL, '/produk/name-16149346569562.jpg', '/produk/name-16149346569611.jpg', '/produk/name-16149346569623.jpg', '/produk/name-16149346569634.jpg', NULL, NULL, 'professional-power-mixer-pmg-102-usb', '2020-11-02 07:31:45', '2021-03-05 08:57:36', 1, 0),
(62, 'Mic Loket / Mic Counter BETAVO C-19', NULL, NULL, 1, 4, 'Mic Loket / Mic Counter BETAVO C-19', '<p>Spesifikasi :</p>\r\n<p>Mikrofon Loket, Mic Counter. Pengeras Suara antara Operator Kasir dgn Customer (Pengunjung) utk</p>\r\n<p>komunikasi lebih jelas di Loket Counter yg tersekat oleh partisi kaca sehingga dapat mencegah</p>\r\n<p>terjadinya penularan virus COVID-19</p>', NULL, NULL, NULL, '/produk/name-16117386105304.jpg', '/produk/name-16117386105349.jpg', '/produk/name-16117386105358.jpg', '/produk/name-16117386105365.jpg', NULL, NULL, 'mic-loket-mic-counter-betavo-c-19', '2020-11-02 08:22:47', '2021-01-27 09:10:10', 1, 0),
(63, 'Mic Condensor BETAVO PCM-100', NULL, NULL, 1, 4, 'Mic Condensor BETAVO PCM-100', '<p>Spesifikasi :</p>\r\n<p>- Requency Response : 30Hz-20Khz</p>\r\n<p>- Ditectivity : Heart-Saped ( 0-180@1KHz&gt;5dB)</p>\r\n<p>- The Loudrst Level : 120dB S.P.L</p>\r\n<p>- Signal To Noise Ration : 10dB</p>\r\n<p>- Words Put Function :+dB-+25dB gain is adjustable</p>\r\n<p>- Audio Output Line : 5mm x 3m</p>\r\n<p>- USB Cable : 3.5mm gold-plated plug</p>\r\n<p>- Power Supply : USB DCSV</p>', NULL, NULL, NULL, '/produk/name-16140739601651.jpg', '/produk/name-16140739601693.jpg', '/produk/name-16140739601701.jpg', '/produk/name-16140739601711.jpg', '/produk/name-16140739601719.jpg', NULL, 'mic-condensor-betavo-pcm-100', '2020-11-02 08:43:03', '2021-02-23 09:52:40', 1, 0),
(64, 'Mic Kabel BETAVO PN - 800', NULL, NULL, 1, 4, 'Mic Kabel BETAVO PN - 800', '<p>Spesifikasi :</p>\r\n<p>- Spul High Qualtity</p>\r\n<p>- Panjang Kabel 3M</p>', NULL, NULL, NULL, '/produk/name-16123195935887.jpg', '/produk/name-16123195935928.jpg', NULL, NULL, NULL, NULL, 'mic-betavo-pn-800', '2020-11-02 08:49:58', '2021-02-25 04:25:06', 1, 0),
(65, 'Mic Kabel BETAVO BT - 98X', NULL, NULL, 1, 4, 'Mic Kabel BETAVO BT - 98X', '<p>Spesifikasi :</p>\r\n<p>- Spul High Quality</p>\r\n<p>- Panjang Kabel 3.5 M</p>\r\n<p>- Mendapatkan 1 Mic Holder</p>', NULL, NULL, NULL, '/produk/name-16123180930880.jpg', '/produk/name-16123180930926.jpg', NULL, NULL, NULL, NULL, 'mic-betavo-bt-98x', '2020-11-02 08:55:04', '2021-02-25 04:25:24', 1, 0),
(66, 'Mic Kabel BETAVO BT-100X', NULL, NULL, 1, 4, 'Mic Kabel BETAVO BT-100X', '<p>Spesifikasi :</p>\r\n<p>- Menggunakan High Quality Spul</p>\r\n<p>- Kabel Panjang 3M</p>\r\n<p>- Mendapatkan 1 Accesories Stand Mic</p>\r\n<p>- Mendapatkan 1 Dompet Mic</p>', NULL, NULL, NULL, '/produk/name-16123405781873.jpg', '/produk/name-16043693160038.jpg', NULL, NULL, NULL, NULL, 'mic-betavo-bt-100x', '2020-11-03 02:08:36', '2021-02-03 08:22:58', 1, 0),
(67, 'Mic Kabel  BETAVO B - 82K', NULL, NULL, 98, 4, 'Mic Kabel  BETAVO B - 82K', '<p>Spesifikasi :</p>\r\n<p>- Spul High Quality</p>\r\n<p>- Panjang Kabel 3M</p>', NULL, NULL, NULL, '/produk/name-16123176463942.jpg', '/produk/name-16123176464034.jpg', NULL, NULL, NULL, NULL, 'mic-betavo-b-82k', '2020-11-03 02:15:24', '2021-02-25 04:27:35', 1, 0),
(68, 'Mic Jepit BETAVO PCO - 01', NULL, NULL, 1, 4, 'Mic Jepit BETAVO PCO - 01', '<h4>Spesifikasi :</h4>\r\n<h4>- Weight : 0,5oz</h4>\r\n<h4>- Mic diameter : -30dB-+2dB</h4>\r\n<h4>- Frequency Range : 20-20 KHz</h4>\r\n<h4>- Output Impedance : &lt;_6800</h4>\r\n<h4>- Voltage : 1 . 0V - 10V. DC</h4>\r\n<h4>- SNR : &gt; 58dB</h4>', NULL, NULL, NULL, '/produk/name-16123406284193.jpg', '/produk/name-16043789481423.jpg', NULL, NULL, NULL, NULL, 'mic-betavo-pco-01', '2020-11-03 02:21:08', '2021-02-25 07:11:10', 1, 0);
INSERT INTO `produk` (`id`, `meta_title`, `meta_description`, `meta_keywords`, `prioritas`, `id_kategori`, `nama_produk`, `deskripsi`, `link_bukalapak`, `link_shopee`, `link_tokopedia`, `image_url_1`, `image_url_2`, `image_url_3`, `image_url_4`, `image_url_5`, `youtube_video_url_1`, `slug`, `created_at`, `updated_at`, `is_active`, `is_featured`) VALUES
(69, 'Mic Wireless BETAVO BT-700 CO UHF', NULL, NULL, 7, 5, 'Mic Wireless BETAVO BT-700 CO UHF', '<p>Spesifikasi :</p>\r\n<p>- Sudah Menggunakan UHF</p>\r\n<p>- Digital Display</p>\r\n<p>- 2 Headset &amp; 2 Clip On</p>\r\n<p>- Jarak -+ 30m</p>\r\n<p>- Mendapatkan Koper</p>\r\n<p>- Baterai AA</p>\r\n<p>- Frekuensi Tinggi 600-800 MHz</p>\r\n<p>- Frekuensi stabilitas 0.005%</p>\r\n<p>- Modulasi Frekuensi Max -+ 40 KHz</p>\r\n<p>- S/N &gt; 80dB</p>\r\n<p>- Distorsi &lt; 0.5%</p>', NULL, NULL, NULL, '/produk/name-16140689060474.jpg', '/produk/name-16140689060515.jpg', '/produk/name-16149303756473.jpg', NULL, NULL, NULL, 'mic-wireless-betavo-bt-700-co', '2020-11-03 02:46:32', '2021-03-05 07:46:15', 1, 0),
(70, 'Mic Wireless BETAVO BT-700 HC UHF', NULL, NULL, 6, 5, 'Mic Wireless BETAVO BT-700 HC UHF', '<p>Spesifikasi :</p>\r\n<p>- Sudah Menggunakan UHF</p>\r\n<p>- 1 Mic</p>\r\n<p>- 1 Headset &amp; 1 Clip On</p>\r\n<p>- Jarak -+ 30m</p>\r\n<p>- Batrai AA</p>\r\n<p>- Digital Display</p>\r\n<p>- Mendapatkan Koper</p>\r\n<p>- Frekuensi Tinggi 600-800 MHz</p>\r\n<p>- Frekuensi stabilitas 0.005%</p>\r\n<p>- Modulasi Frekuensi Max -+ 40 KHz</p>\r\n<p>- S/N &gt; 80dB</p>\r\n<p>- Distorsi &lt; 0.5%</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16140690521399.jpg', '/produk/name-16140690521439.jpg', '/produk/name-16149296697489.jpg', NULL, NULL, NULL, 'mic-wireless-betavo-bt-700-hc-uhf', '2020-11-03 02:50:18', '2021-03-05 07:34:29', 1, 0),
(71, 'Mic Wireless BETAVO BT-700 HH UHF', NULL, NULL, 5, 5, 'Mic Wireless BETAVO BT-700 HH UHF', '<p>Spesifikasi :</p>\r\n<p>- Sudah Menggunakan UHF</p>\r\n<p>- 2 Mic</p>\r\n<p>- Mendapatkan Koper</p>\r\n<p>- Jarak -+ 30M</p>\r\n<p>- Digital Display</p>\r\n<p>- Batrai AA</p>\r\n<p>- Frekuensi Tinggi 600-800 MHz</p>\r\n<p>- Frekuensi stabilitas 0.005%</p>\r\n<p>- Modulasi Frekuensi Max -+ 40 KHz</p>\r\n<p>- S/N &gt; 80dB</p>\r\n<p>- Distorsi &lt; 0.5%</p>', NULL, NULL, NULL, '/produk/name-16140664532435.jpg', '/produk/name-16149295769644.jpg', NULL, NULL, NULL, NULL, 'mic-wireless-betavo-bt-700-hh-uhf', '2020-11-03 02:54:00', '2021-03-05 07:32:56', 1, 0),
(72, 'Mic Wireless BETAVO BT-500 CO UHF', NULL, NULL, 10, 5, 'Mic Wireless BETAVO BT-500 CO UHF', '<h4>Spesifikasi :</h4>\r\n<h4>- Sudah Menggunakan UHF</h4>\r\n<h4>- 1 Receiver</h4>\r\n<h4>- 2 Headset &amp; 2 Clip On</h4>\r\n<h4>- 1 Buah Kabel Jack Audio</h4>\r\n<h4>- Jarak -+ 30M</h4>\r\n<h4>- Batrai AA</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Frekuensi Tinggi 600-800MHz</h4>\r\n<h4>- Frekuensi Stabilitas 0.005%</h4>\r\n<h4>- Modulasi Frekuensi Max -+ 40Khz</h4>\r\n<h4>- Response Frekuensi 80-12KHz</h4>\r\n<h4>- S/N &gt;80dB</h4>\r\n<h4>- Distorsi &lt; 0.5%</h4>', NULL, NULL, NULL, '/produk/name-16140674373423.jpg', NULL, NULL, NULL, NULL, NULL, 'mic-wireless-betavo-bt-500-co-uhf', '2020-11-03 03:04:40', '2021-02-23 08:03:57', 1, 0),
(73, 'Mic Wireless BETAVO BT-500 HC UFC', NULL, NULL, 9, 5, 'Mic Wireless BETAVO BT-500 HC UFC', '<h4>Spesifikasi :</h4>\r\n<h4>- Sudah Menggunakan UHF</h4>\r\n<h4>- 1 Receiver</h4>\r\n<h4>- 1 Mic</h4>\r\n<h4>- 1 Headset &amp; 1 Clip On</h4>\r\n<h4>- Jarak -+ 30M</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Batrai AA</h4>\r\n<h4>- Frekuensi Tinggi 600-800MHz</h4>\r\n<h4>- Frekuensi Stabilitas 0.005%</h4>\r\n<h4>- Modulasi Frekuensi Max -+ 40Khz</h4>\r\n<h4>- Response Frekuensi 80-12KHz</h4>\r\n<h4>- S/N &gt;80dB</h4>\r\n<h4>- Distorsi &lt; 0.5%</h4>', NULL, NULL, NULL, '/produk/name-16140674290409.jpg', '/produk/name-16082970651801.jpg', '/produk/name-16082970651840.jpg', NULL, NULL, NULL, '1-mic-wireless-betavo-bt-500-hc-ufc', '2020-11-03 03:06:11', '2021-02-23 08:03:49', 1, 0),
(74, 'Mic Wireless BETAVO BT-500 HH UHF', NULL, NULL, 9, 5, 'Mic Wireless BETAVO BT-500 HH UHF', '<p>Spesifikasi :</p>\r\n<p>- Sudah Menggunakan UHF</p>\r\n<p>- 1 Receiver</p>\r\n<p>- 2 Mic</p>\r\n<p>- Jarak -+ 30M</p>\r\n<p>- Digital Display</p>\r\n<p>- Batrai AA</p>', NULL, NULL, NULL, '/produk/name-16140674189368.jpg', NULL, NULL, NULL, NULL, NULL, 'mic-wireless-betavo-bt-500-hh-uhf', '2020-11-03 03:08:01', '2021-02-25 08:02:38', 1, 0),
(75, 'Mic Wireless BETAVO BV-588 CO UHF', NULL, NULL, 15, 5, 'Mic Wireless BETAVO BV-588 CO UHF', '<p>Spesifikasi :</p>\r\n<p>- Sudah Menggunakan UHF</p>\r\n<p>- 1 Receiver</p>\r\n<p>- 2 Headset &amp; 2 Clip On</p>\r\n<p>- Jarak -+ 30M</p>\r\n<p>- Digital Display</p>\r\n<p>- 1 Buah Kabel Jack Audio</p>\r\n<p>- Batrai AA</p>', NULL, NULL, NULL, '/produk/name-16140678447253.jpg', NULL, NULL, NULL, NULL, NULL, 'mic-wireless-betavo-bv-588-co-uhf', '2020-11-03 03:18:12', '2021-02-25 08:05:43', 1, 0),
(76, 'Mic Wireless BETAVO BV-588 HC UHF', NULL, NULL, 14, 5, 'Mic Wireless BETAVO BV-588 HC UHF', '<p>Spesifikasi :</p>\r\n<p>- Sudah Menggunakan UHF</p>\r\n<p>- 1 Receiver</p>\r\n<p>- 1 Mic</p>\r\n<p>- 1 Headset &amp; 1 Clip On</p>\r\n<p>- Digital Display</p>\r\n<p>- Jarak -+ 30M</p>\r\n<p>- Batrai AA</p>\r\n<p>- 1 Buah Kabel Jack Audio</p>', NULL, NULL, NULL, '/produk/name-16140678354493.jpg', NULL, NULL, NULL, NULL, NULL, 'mic-wireless-betavo-bv-588-hc-uhf', '2020-11-03 03:22:18', '2021-02-25 08:05:39', 1, 0),
(77, 'Mic Wireless BETAVO  BV-588 HH UFC', NULL, NULL, 13, 5, 'Mic Wireless BETAVO  BV-588 HH UFC', '<p>Spesifikasi :</p>\r\n<p>- Sudah Menggunakan UHF</p>\r\n<p>- 1 Receiver</p>\r\n<p>- 2 Mic</p>\r\n<p>- Jarak -+ 30M</p>\r\n<p>- 1 Buah Kabel Jack Audio</p>\r\n<p>- Digital Display</p>\r\n<p>- Batrai AA</p>', NULL, NULL, NULL, '/produk/name-16124960395526.jpg', '/produk/name-16124960395618.jpg', NULL, NULL, NULL, NULL, 'mic-wireless-betavo-bv-588-hh-ufc', '2020-11-03 03:39:38', '2021-02-25 08:05:35', 1, 0),
(78, 'Mic Wireless BETAVO M 03 UHF', NULL, NULL, 99, 5, 'Mic Wireless BETAVO M 03 UHF', '<p>Spesifikasi :</p>\r\n<p>- Sudah Menggunakan UHF</p>\r\n<p>- 1 Buah Receiver</p>\r\n<p>- 1 Buah Headset &amp; 1 Buah Clip ON</p>\r\n<p>- Life Battery -+ 6 Hours</p>\r\n<p>- Jarak -+ 30M</p>', NULL, NULL, NULL, '/produk/name-16140665447856.jpg', '/produk/name-16043752717781.jpg', NULL, NULL, NULL, NULL, 'mic-wireless-betavo-m-03-uhf', '2020-11-03 03:47:51', '2021-02-25 07:59:48', 1, 0),
(79, 'Mic Wireless BETAVO BT-880 UHF', NULL, NULL, 12, 5, 'Mic Wireless BETAVO BT-880 UHF', '<p>Spesifikasi :</p>\r\n<p>- Sudah Menggunakan UHF</p>\r\n<p>- 1 Receiver</p>\r\n<p>- 2 Transmitter, 2 Headset, 2 Clip On</p>\r\n<p>- Bisa di Cas</p>\r\n<p>- Jarak -+ 30M</p>\r\n<p>- Digital Display</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16140662900433.jpg', '/produk/name-16082976402206.jpg', NULL, NULL, NULL, NULL, 'mic-wireless-betavo-bt-880-uhf', '2020-11-03 03:52:35', '2021-02-25 08:01:39', 1, 0),
(80, 'Mic Meeting BETAVO SK-130', NULL, NULL, 1, 6, 'Mic Meeting BETAVO SK-130', '<p>Spesifikasi :</p>\r\n<p>- 1 Buah Busa Mic</p>\r\n<p>- 1 Buah Kabel Jack Audio</p>\r\n<p>- Meeting Bell</p>\r\n<p>- Free Batrai</p>', NULL, NULL, NULL, '/produk/name-16043763328169.jpg', NULL, NULL, NULL, NULL, NULL, 'mic-meeting-betavo-sk-130', '2020-11-03 04:05:32', '2021-01-17 03:21:04', 0, 0),
(81, 'Stand Ring Light BETAVO SL-02', NULL, NULL, 1, 13, 'Stand Ring Light BETAVO SL-02', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 65 CM</p>\r\n<p>- Diameter Piring 11 CM</p>\r\n<p>- Material Besi</p>\r\n<p>- Dapat di gunakan untuk Lighting Rekaman, Live Streaming</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16124345517336.jpg', NULL, NULL, NULL, NULL, NULL, 'stand-mic-stand-lampu-led-betavo-sl-02', '2020-11-03 04:27:00', '2021-02-25 07:13:01', 1, 0),
(82, 'Stand Ring Light BETAVO SL-03', NULL, NULL, 1, 13, 'Stand Ring Light BETAVO SL-03', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 65 CM ( Adjustable )</p>\r\n<p>- Material Besi</p>\r\n<p>- HP Holder</p>\r\n<p>- Diameter Piring 11 CM</p>\r\n<p>- Cocok di gunakan untuk Live Streaming, etc</p>', NULL, NULL, NULL, '/produk/name-16124345665498.jpg', NULL, NULL, NULL, NULL, NULL, 'stand-mic-stand-lampu-led-betavo-sl-03', '2020-11-03 04:30:26', '2021-02-25 07:13:12', 1, 0),
(83, 'Stand Ring Light BETAVO SL-04', NULL, NULL, 1, 13, 'Stand Ring Light BETAVO SL-04', '<p>Spesifikasi :</p>\r\n<p>- Tinggi 58 CM</p>\r\n<p>- Diameter Piring 11 CM</p>\r\n<p>- Material Besi</p>\r\n<p>- Ketinggian Bisa di Atur</p>\r\n<p>- 2 HP Holder</p>\r\n<p>- Cocok Di gunakan untuk Live Streaming, etc</p>', NULL, NULL, NULL, '/produk/name-16140698987317.jpg', '/produk/name-16140698987358.jpg', NULL, NULL, NULL, NULL, 'stand-lampu-led-betavo-sl-04-hp-holder', '2020-11-03 04:32:49', '2021-04-10 05:18:09', 1, 0),
(84, 'Stand Ring Light BETAVO SL-01', NULL, NULL, 0, 13, 'Stand Ring Light BETAVO SL-01', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 37 CM</p>\r\n<p>- Lebar 31 CM</p>\r\n<p>- Diameter Piring 11 CM</p>\r\n<p>- Material Besi</p>\r\n<p>- 2 HP Holder</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16123380257914.jpg', '/produk/name-16123380257962.jpg', '/produk/name-16123380257972.jpg', NULL, NULL, NULL, 'stand-lampu-led-betavo-sl-01-hp-holder', '2020-11-03 04:39:31', '2021-04-19 01:59:25', 1, 0),
(85, 'Stand HP Ring Light BETAVO SLP-10', NULL, NULL, 1, 13, 'Stand HP Ring Light BETAVO SLP-10', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 230 CM</p>\r\n<p>- Lebar 27 CM</p>\r\n<p>- Terbuat Dari Besi</p>\r\n<p>- Ring Light LED</p>\r\n<p>- Lampu LED</p>\r\n<p>- 2 Holder HP</p>\r\n<p>- Cocok di Gunakan untuk Live, Recording, Streaming, dll</p>', NULL, NULL, NULL, '/produk/name-16137207411581.jpg', '/produk/name-16137207411624.jpg', NULL, NULL, NULL, NULL, 'stand-ring-light-hp-holder-betavo-sl-01', '2020-11-03 06:28:41', '2021-02-26 10:03:56', 1, 0),
(86, 'Stand Mic Ring Light BETAVO SLP-20', NULL, NULL, 1, 13, 'Stand Mic Ring Light BETAVO SLP-20', '<p>Spesifikasi :</p>\r\n<p>- Tinggi 1 - 2 Meter ( Adjustable )</p>\r\n<p>- HP Holder</p>\r\n<p>- Mic Holder</p>\r\n<p>- Ring Light LED</p>\r\n<p>- Terbuat dari Besi</p>\r\n<p>- Cocok di gunakan untuk Live, Recording, Streaming, dll</p>', NULL, NULL, NULL, '/produk/name-16147643244246.jpg', '/produk/name-16155383812586.jpg', '/produk/name-16155383812623.jpg', NULL, NULL, NULL, 'stand-mic-ring-light-led-betavo-slp-02-hp-holder', '2020-11-03 06:32:53', '2021-03-12 08:39:41', 1, 0),
(87, 'Stand Mic Ring Light BETAVO SLP-30', NULL, NULL, 1, 13, 'Stand Mic Ring Light BETAVO SLP-30', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 240 CM</p>\r\n<p>- Panjang Tiang Mic 68 CM</p>\r\n<p>- Mic Holder</p>\r\n<p>- HP Holder</p>\r\n<p>- Meja Kecil</p>\r\n<p>- Ring Light LED</p>\r\n<p>- Cocok digunakan Untuk Live, Recording, Streaming, dll</p>', NULL, NULL, NULL, '/produk/name-16137208873513.jpg', '/produk/name-16137208873551.jpg', '/produk/name-16123386986944.jpg', NULL, NULL, NULL, 'stand-mic-ring-light-led-betavo-slp-03-hp-holder', '2020-11-03 06:37:02', '2021-02-25 04:35:14', 1, 0),
(88, 'Stand Mic Ring Light BETAVO SLP-40', NULL, NULL, 1, 13, 'Stand Mic Ring Light BETAVO SLP-40', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 165 CM</p>\r\n<p>- Panjang Tiang Mic 75 CM</p>\r\n<p>- Material Besi</p>\r\n<p>- 1 Ring Light LED</p>\r\n<p>- 1 Mic Holder</p>\r\n<p>- Cocok di gunakan Untuk Live, Recording, Streaming, dll</p>', NULL, NULL, NULL, '/produk/name-16137211963596.jpg', '/produk/name-16137211963637.jpg', NULL, NULL, NULL, NULL, 'stand-mic-ring-light-led-betavo-slp-04-hp-holder', '2020-11-03 06:50:23', '2021-02-25 04:35:22', 1, 0),
(89, 'Stand Mic Ring Light BETAVO SLP-50', NULL, NULL, 1, 13, 'Stand Mic Ring Light BETAVO SLP-50', '<p>Spesifikasi :</p>\r\n<p>- Tinggi 1 - 2 Meter ( Adjustable )</p>\r\n<p>- Terbuat Dari Besi</p>\r\n<p>- Ring Light LED</p>\r\n<p>- Mic Holder</p>\r\n<p>- 3 HP Holder</p>\r\n<p>- 1 Board Book</p>\r\n<p>- Cocok digunakan untuk Live, Recording, Streaming, dll</p>', NULL, NULL, NULL, '/produk/name-16147638581822.jpg', NULL, NULL, NULL, NULL, NULL, 'stand-mic-ring-light-led-betavo-slp-05-hp-holder', '2020-11-03 07:05:56', '2021-03-03 09:30:58', 1, 0),
(90, 'Stand Mic BETAVO ST - 30 .', NULL, NULL, 1, 13, 'Stand Mic BETAVO ST - 30 .', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 180 CM</p>\r\n<p>- Panjang Tiang Mic 80 CM</p>\r\n<p>- Terbuat Dari Besi</p>\r\n<p>- Mic Holder</p>\r\n<p>- Nett Weight 2.9 KG</p>\r\n<p>- Gross Weight 3.2 KG</p>\r\n<p>- Packing Size 40*13*10 CM</p>', NULL, NULL, NULL, '/produk/name-16140700495364.jpg', NULL, NULL, NULL, NULL, NULL, 'stand-mic-betavo-st-30', '2020-11-03 07:16:31', '2021-02-25 04:38:34', 1, 0),
(91, 'Stand Mic BETAVO SHP-002', NULL, NULL, 1, 13, 'Stand Mic BETAVO SHP-002', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 180 CM</p>\r\n<p>- Panjang Tiang Mic 76 CM</p>\r\n<p>- 2 HP Holder</p>\r\n<p>- Mic Holder</p>\r\n<p>- Filter Mic</p>\r\n<p>- Cocok di gunakan untuk Live, Record, Streaming, dll</p>', NULL, NULL, NULL, '/produk/name-16119907864910.jpg', '/produk/name-16119907864951.jpg', NULL, NULL, NULL, NULL, 'stand-mic-betavo-shp-002', '2020-11-03 07:23:17', '2021-01-30 07:13:06', 1, 0),
(92, 'Stand Mic BETAVO SHP-001', NULL, NULL, 1, 13, 'Stand Mic BETAVO SHP-001', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 148 CM</p>\r\n<p>- Panjang Tiang Mic 111 CM</p>\r\n<p>- Material Besi</p>\r\n<p>- Mic Holder</p>\r\n<p>- Holder HP ( Jepit )</p>\r\n<p>- Filter Mic</p>\r\n<p>- Cocok digunakan Untuk Live, Streaming, Recording, dll</p>', NULL, NULL, NULL, '/produk/name-16119907040246.jpg', '/produk/name-16119907040286.jpg', NULL, NULL, NULL, NULL, 'stand-mic-betavo-shp-001-pro-hp-holder', '2020-11-03 07:35:16', '2021-01-30 07:11:44', 1, 0),
(93, 'Stand Mic BETAVO DS-28', NULL, NULL, 1, 13, 'Stand Mic BETAVO DS-28', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Tiang 30CM</p>\r\n<p>- Mic Holder</p>\r\n<p>- Tiang Mic Maju Mundur Max 30 CM</p>\r\n<p>- Piringan Besi Diameter 15 CM</p>', NULL, NULL, NULL, '/produk/name-16124349313237.jpg', NULL, NULL, NULL, NULL, NULL, 'stand-mic-betavo-ds-28', '2020-11-03 07:40:45', '2021-02-04 10:35:31', 1, 0),
(94, 'Stand Mic BETAVO ST-209', NULL, NULL, 1, 13, 'Stand Mic BETAVO ST-209', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 150 CM ( Adjustable )</p>\r\n<p>- Diameter Alas ( Besi ) 26CM</p>\r\n<p>- Panjang Tiang Mic 91 CM</p>\r\n<p>- Mic Holder</p>', NULL, NULL, NULL, '/produk/name-16137216639627.jpg', '/produk/name-16137216639671.jpg', '/produk/name-16137216639680.jpg', NULL, NULL, NULL, 'stand-mic-betavo-st-209', '2020-11-03 07:50:46', '2021-02-19 08:01:03', 1, 0),
(95, 'Stand Mic BETAVO ST-210', NULL, NULL, 1, 13, 'Stand Mic BETAVO ST-210', '<p>Spesifikasi :</p>\r\n<p>- Tinggi 84-140 CM</p>\r\n<p>- Panjang Holder Mic 70 CM</p>\r\n<p>- Diameter Piring 25 CM</p>\r\n<p>- Material Besi</p>\r\n<p>- HP Holder</p>\r\n<p>- Mic Holder</p>\r\n<p>- N.W 3.2 KG</p>\r\n<p>- G.W 3.42 KG</p>\r\n<p>- Packing Size Mic 10*10*85CM/PCS</p>\r\n<p>- Packing Size Piring 27*26*4CM/PCS</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16137218602215.jpg', '/produk/name-16137218602255.jpg', '/produk/name-16137218602263.jpg', NULL, NULL, NULL, 'stand-mic-betavo-st-210', '2020-11-03 07:56:35', '2021-02-19 08:05:23', 1, 0),
(97, 'Stand Mic BETAVO ST-204', NULL, NULL, 1, 13, 'Stand Mic BETAVO ST-204', '<p>Spesifikasi :</p>\r\n<p>- Terbuat Dari Besi</p>\r\n<p>- Tinggi 54 CM</p>\r\n<p>- Diameter piring 14 CM</p>\r\n<p>- Panjang Tiang Mic 43 CM</p>\r\n<p>- Mic Holder</p>\r\n<p>- HP Holder</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16117397154118.jpg', '/produk/name-16117397154160.jpg', '/produk/name-16117397154167.jpg', '/produk/name-16117397154175.jpg', NULL, NULL, 'stand-mic-betavo-st-204', '2020-11-03 08:07:10', '2021-01-27 09:28:35', 1, 0),
(98, 'Stand Mic BETAVO ST-201', NULL, NULL, 1, 13, 'Stand Mic BETAVO ST-201', '<p>Spesifikasi :</p>\r\n<p>- Terbuat Dari Besi</p>\r\n<p>- Tinggi 36 CM</p>\r\n<p>- Mic Holder</p>\r\n<p>- Design Elegan</p>', NULL, NULL, NULL, '/produk/name-16120125380813.jpg', NULL, NULL, NULL, NULL, NULL, 'stand-mic-betavo-st-201', '2020-11-03 08:12:37', '2021-04-23 03:19:15', 1, 0),
(99, 'Stand Mic BETAVO ST-206', NULL, NULL, 1, 13, 'Stand Mic BETAVO ST-206', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 170 CM</p>\r\n<p>- Panjang Tiang Mic 95 CM</p>\r\n<p>- Material Besi</p>\r\n<p>- Mic Holder</p>\r\n<p>- Nett Weight 1.71 KG</p>\r\n<p>- Gross Weight 1.91 KG</p>\r\n<p>- Packing Size 100*10*10 CM</p>', NULL, NULL, NULL, '/produk/name-16140740559395.jpg', NULL, NULL, NULL, NULL, NULL, 'stand-mic-betavo-st-206', '2020-11-03 08:19:57', '2021-02-23 09:54:15', 1, 0),
(100, 'Stand Mixer Amplifier BETAVO SM-208', NULL, NULL, 1, 16, 'Stand Mixer Amplifier BETAVO SM-208', '<p>Spesifikasi :</p>\r\n<p>- Terbuat Dari Besi</p>\r\n<p>- 4 Roda</p>\r\n<p>- Nett Weight 9.23 KG</p>\r\n<p>- Gross Weight 9.92 KG</p>\r\n<p>- Dimensi Produk 59*54*100 CM</p>\r\n<p>- Packing Size : 93*29*9 CM</p>', NULL, NULL, NULL, '/produk/name-16142473604268.jpg', '/produk/name-16142473397879.jpg', '/produk/name-16142473604799.jpg', NULL, NULL, NULL, 'stand-mixer-amplifier-betavo-sm-208', '2020-11-03 08:28:02', '2021-02-25 10:02:40', 1, 0),
(101, 'Stand Mixer Amplifier BETAVO SM-209', NULL, NULL, 1, 16, 'Stand Mixer Amplifier BETAVO SM-209', '<p>Spesifikasi :</p>\r\n<p>- Terbuat Dari Besi</p>\r\n<p>- Terdapat 4 Roda</p>\r\n<p>- Nett Weight 11 KG</p>\r\n<p>- Gross Weight 12 KG</p>\r\n<p>- Dimensi Produk 59*55*120 CM</p>\r\n<p>- Packing Size 110*30*10 CM</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16142428428113.jpg', '/produk/name-16142428428184.jpg', '/produk/name-16142428428191.jpg', NULL, NULL, NULL, 'stand-mixer-amplifier-betavo-sm-209', '2020-11-03 08:33:55', '2021-02-25 09:01:52', 1, 0),
(102, 'Speaker Aktif BETAVO V-150 DA', NULL, NULL, 1, 8, 'Speaker Aktif BETAVO V-150 DA', '<p>Spesifikasi :</p>\r\n<p>- 300 Watt</p>\r\n<p>- 15 Inch</p>\r\n<p>- 2 Input Mic</p>\r\n<p>- 1 Line Input</p>\r\n<p>- 1 Mic Output</p>\r\n<p>- 1 Set Channel Tone Control</p>\r\n<p>- 2 Volume Mic</p>\r\n<p>- Master Volume</p>\r\n<p>- 1 Set 2 Pcs ( L+R )</p>', NULL, NULL, NULL, '/produk/name-16125166936388.jpg', '/produk/name-16125166936433.jpg', '/produk/name-16125166936449.jpg', '/produk/name-16125166936458.jpg', NULL, NULL, 'speaker-aktif-betavo-v-150da', '2020-11-03 08:44:21', '2021-02-05 09:18:13', 1, 0),
(103, 'Speaker Aktif BETAVO V-150 DSP', NULL, NULL, 1, 8, 'Speaker Aktif BETAVO V-150 DSP', '<p>Spesifikasi :</p>\r\n<p>- 300 Watt</p>\r\n<p>- 15 Inch</p>\r\n<p>- Support Bluetooth</p>\r\n<p>- Support USB</p>\r\n<p>- Display Built In</p>\r\n<p>- 1 Set 2 Pcs ( L+R )</p>\r\n<p>- Input 1</p>\r\n<p>&nbsp; &nbsp; * 1 Line/Mic</p>\r\n<p>- Input 2</p>\r\n<p>&nbsp; &nbsp; * 1 Set RCA ( L+R )</p>\r\n<p>&nbsp; &nbsp; * 1 Aux</p>\r\n<p>- 1 Output</p>', NULL, NULL, NULL, '/produk/name-16125168076397.jpg', '/produk/name-16125168076480.jpg', '/produk/name-16125168076512.jpg', '/produk/name-16125168076539.jpg', NULL, NULL, 'speaker-aktif-betavo-v-150-dsp', '2020-11-03 08:54:51', '2021-02-05 09:20:07', 1, 0),
(104, 'Professional Power BETAVO KA-4800', NULL, NULL, 1, 21, 'Professional Power BETAVO KA-4800', '<p>Spesifikasi :</p>\r\n<p>- 4*800 Watt 8 OHM</p>\r\n<p>- 4*1600 Watt 4 OHM</p>\r\n<p>- Bridge Power 3200 Watt</p>\r\n<p>- 4 Unit Cooling Fan</p>', NULL, NULL, NULL, '/produk/name-16125069472736.jpg', '/produk/name-16043964994952.jpg', '/produk/name-16043964994960.jpg', '/produk/name-16043964994968.jpg', NULL, NULL, 'power-amplifer-betavo-ka-4800', '2020-11-03 09:41:39', '2021-02-25 07:40:24', 1, 0),
(105, 'Professional Power Amplifier BETAVO Q-5', NULL, NULL, 1, 21, 'Professional Power Amplifier BETAVO Q-5', '<p>Spesifikasi :</p>\r\n<p>- 2*300 Watt 8 OHM</p>\r\n<p>- 4*600 Watt 4 OHM</p>\r\n<p>- 1200 Watt Bridge Power</p>\r\n<p>- 2 Channel input jack canon</p>\r\n<p>- 2 Channel output jack spicon dan mur</p>\r\n<p>- Slector LIFT / GND</p>\r\n<p>- Slector 1.5v / 1.0 / 0.77v</p>\r\n<p>- Slector bridge / parallel / stereo</p>\r\n<p>- Tombol reset</p>\r\n<p>- 4 Unit fan cooling</p>\r\n<p>- Nett Weight 17.6 KG</p>\r\n<p>- Gross Weight 20 KG</p>\r\n<p>- Dimensi Produk 46*49*14 CM</p>\r\n<p>- Packing Size 55*55*20 CM</p>', NULL, NULL, NULL, '/produk/name-16125068106658.jpg', '/produk/name-16125068106703.jpg', '/produk/name-16125068106713.jpg', '/produk/name-16125068106724.jpg', NULL, NULL, 'power-amplifer-betavo-q-5', '2020-11-04 02:19:38', '2021-02-24 08:15:33', 1, 0),
(106, 'Professional Power Amplifier BETAVO LX-25', NULL, NULL, 1, 21, 'Professional Power Amplifier BETAVO LX-25', '<p>Spesifikasi :</p>\r\n<p>- 2*300 Watt 8 OHM</p>\r\n<p>- 2*600 Watt 4 OHM</p>\r\n<p>- 1200 Watt Bridge Power</p>\r\n<p>- 2 Unit Cooling Fan</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16125067725364.jpg', '/produk/name-16125067725873.jpg', '/produk/name-16125067725887.jpg', '/produk/name-16125067725896.jpg', NULL, NULL, 'power-amplifer-betavo-xl-25', '2020-11-04 02:33:47', '2021-02-24 08:18:26', 1, 0),
(107, 'Professional Power Amplifier ETAVO Q-3', NULL, NULL, 1, 21, 'Professional Power Amplifier BETAVO Q-3', '<p>Spesifikasi :</p>\r\n<p>- 2*200 Watt 8 OHM</p>\r\n<p>- 2*400 Watt 4 OHM</p>\r\n<p>- 2 Unit Cooling Fan</p>', NULL, NULL, NULL, '/produk/name-16125074128380.jpg', '/produk/name-16044581557496.jpg', NULL, NULL, NULL, NULL, 'power-amplifer-betavo-q-3', '2020-11-04 02:49:15', '2021-02-24 07:12:35', 1, 0),
(108, 'Professional Power Amplifier BETAVO Q3II', NULL, NULL, 1, 21, 'Professional Power Amplifier BETAVO Q3II', '<p>Spesifikasi :</p>\r\n<p>- 2*600 Watt 8 OHM</p>\r\n<p>- 2*1200 Watt 4 OHM</p>\r\n<p>- Bridge Power 2400 Watt</p>\r\n<p>- 2 Unit Cooling Fan</p>\r\n<p>- Nett Weight 20.52 KG</p>\r\n<p>- Gross Weight 23.4 KG</p>\r\n<p>- Dimensi Produk 51*48*10 CM</p>\r\n<p>- Packing Size 57*57.5*17 CM</p>', NULL, NULL, NULL, '/produk/name-16142264838002.jpg', '/produk/name-16142264838101.jpg', '/produk/name-16142264838111.jpg', '/produk/name-16142264838123.jpg', NULL, NULL, 'power-amplifer-betavo-q-3-ii', '2020-11-04 02:51:39', '2021-02-25 04:15:25', 1, 0),
(109, 'Portable Wireless Amplifer BETAVO JA-895', NULL, NULL, 1, 19, 'Portable Wireless Amplifer BETAVO JA-895', '<h4>Spesifikasi :</h4>\r\n<h4>- Daya Output Radio 110W</h4>\r\n<h4>- Jarak Frekuensi 180-270mhz</h4>\r\n<h4>- Noise Ration 80db</h4>\r\n<h4>- Daya AC 220V / 12V</h4>\r\n<h4>- Speaker 4 ohm, 8 Inch Full Sound Area</h4>\r\n<h4>- Mode Penerimaan VHF</h4>\r\n<h4>- Output Impedance 600 ohm</h4>\r\n<h4>- Kecepatan Tape 4,76 cm/s</h4>\r\n<h4>- Kestabilan Frekuensi 0.5 %</h4>\r\n<h4>- Distorsi 0.5 % (10db)</h4>\r\n<h4>- Frekuensi Response 150hz-1500hz</h4>\r\n<h4>- Transmitter Frekuensi Respon 150</h4>\r\n<h4>- Batrai Transmitter 9V</h4>\r\n<h4>- Daya Transmitter 10mw</h4>\r\n<h4>- Mixed Wave Power 50 dbm</h4>\r\n<h4>- Batrai Aki 12V / 7 AH</h4>', NULL, NULL, NULL, '/produk/name-16044590687644.jpg', NULL, NULL, NULL, NULL, NULL, 'portable-wireless-amplifer-betavo-ja-895', '2020-11-04 03:04:28', '2020-11-04 03:04:28', 1, 0),
(110, 'Amplifier Mini BETAVO BT-188AB', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO BT-188AB', '<p>Spesifikasi :</p>\r\n<p>- Support Bluetooth, USB, SD/MMC Card</p>\r\n<p>- Digital Dipslay</p>\r\n<p>- Aux In</p>\r\n<p>- 4 Channel Speaker Output</p>\r\n<p>- Support FM Radio + FM Ant</p>\r\n<p>- Bisa AC / DC</p>\r\n<p>- Tombol Switch Power</p>\r\n<p>- Knob Pengontrol Pengeras Suara</p>\r\n<p>- Indikator Power Supply</p>\r\n<p>- Knob Pengontrol Suara Bass</p>\r\n<p>- Knob Pengontrol Suara Treble</p>', NULL, NULL, NULL, '/produk/name-16141470275945.jpg', '/produk/name-16117370817155.jpg', '/produk/name-16117370817163.jpg', '/produk/name-16117370817170.jpg', '/produk/name-16117370817178.jpg', NULL, 'amplifier-mini-betavo-bt-188ab', '2020-11-04 03:56:16', '2021-02-24 06:10:27', 1, 0),
(112, 'Amplifier Mini BETAVO MA-500B', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO MA-500B', '<p>Spesfikasi :</p>\r\n<p>- 4 Channel Output Speaker</p>\r\n<p>- Support SD Card, USB &amp; Bluetooth</p>\r\n<p>- Speaker Impedanc 4 - 16 ohm</p>\r\n<p>- SNR (Signal/Noise Ratio) -85dbn</p>\r\n<p>- Input Power DC 12V 5A</p>\r\n<p>- Input Impedance 47K</p>\r\n<p>- Frequensy 20Hz - 20KHz</p>\r\n<p>- Input Sensitivity 0.25mV - 220mV</p>\r\n<p>- Output Power R.M.S 40W</p>', NULL, NULL, NULL, '/produk/name-16141471191211.jpg', '/produk/name-16137205917591.jpg', '/produk/name-16137205917602.jpg', '/produk/name-16137205917612.jpg', NULL, NULL, 'amplifier-mini-betavo-ma-500b', '2020-11-04 04:45:17', '2021-02-24 06:11:59', 1, 0),
(113, 'Stand Mic BETAVO ST-25', NULL, NULL, 1, 13, 'Stand Mic BETAVO ST-25', '<p>Spesifikasi :</p>\r\n<p>- Terbuat Dari Besi</p>\r\n<p>- Tinggi Max 138 CM</p>\r\n<p>- Panjang Tiang Mic 75 CM</p>\r\n<p>- 1 Mic Holder</p>\r\n<p>- 1 HP Holder</p>', NULL, NULL, NULL, '/produk/name-16137213582557.jpg', '/produk/name-16137213582599.jpg', '/produk/name-16137213582607.jpg', NULL, NULL, NULL, 'stand-mic-betavo-st-25', '2020-11-05 09:42:26', '2021-02-19 07:55:58', 1, 0),
(114, 'StandMic BETAVO SMH-01', NULL, NULL, 1, 13, 'StandMic BETAVO SMH-01', '<h4>Spesifikasi :</h4>\r\n<h4>- Terbuat Dari Besi</h4>\r\n<h4>- Tinggi Max 175 CM</h4>\r\n<h4>- Panjang Spiral Elastis 40 CM</h4>\r\n<h4>- Panjang Tiang Mic 70 CM</h4>\r\n<h4>- Tiang Mic Maju Mundur -+ 53 CM</h4>\r\n<h4>- 1 Mic Holder</h4>\r\n<h4>- 1 HP Holder</h4>', NULL, NULL, NULL, '/produk/name-16124350345337.jpg', '/produk/name-16045703755313.jpg', NULL, NULL, NULL, NULL, 'stand-mic-betavo-smh-01', '2020-11-05 09:59:35', '2021-02-25 04:40:48', 1, 0),
(115, 'Amplifier Mini BETAVO BT-118B', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO BT-118B', '<p>Spesifikasi :</p>\r\n<p>- Speaker Impedance 4-16 Ohm</p>\r\n<p>- Input Power 12 Volts DC5A</p>\r\n<p>- Input Impedance=47K</p>\r\n<p>- Input Sensitivity 0.25mV-220mV</p>\r\n<p>- Frekuensi 20Hz-20Khz</p>\r\n<p>- SNR (Signal/Noise Ratio) -85dbn</p>\r\n<p>- Output Power R.M.S 40W</p>\r\n<p>- Support SD Card, USB, FM Radio &amp; Bluetooth</p>\r\n<p>- Digital Display</p>\r\n<p>- 2 Channel Mic Input</p>\r\n<p>- Aux In</p>\r\n<p>- 2 Channel Speaker Output</p>\r\n<p>- Support FM Radio + Fm Antena</p>\r\n<p>- Volume, Bass, Treble, &amp; Mic Volume</p>\r\n<p>- Remote</p>\r\n<p>- AC 220-240V</p>\r\n<p>- DC 12V / 5A</p>', NULL, NULL, NULL, '/produk/name-16124299489086.jpg', '/produk/name-16124299489140.jpg', '/produk/name-16124299489148.jpg', '/produk/name-16124299489157.jpg', NULL, NULL, 'amplifier-mini-betavo-bt-118b-1', '2020-11-07 02:22:28', '2021-02-04 09:12:28', 1, 0),
(117, 'Amplifier Mini BETAVO BT-699D B', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO BT-699D B', '<h4>Spesifikasi :</h4>\r\n<h4>- Speaker Impedance 4-16 Ohm</h4>\r\n<h4>- Support USB, SD Card &amp; Bluetooth</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- 2 Channel Speaker Output</h4>\r\n<h4>- Aux / Audio IN</h4>\r\n<h4>- Support FM Radio + FM Antena</h4>', NULL, NULL, NULL, '/produk/name-16124246522134.jpg', '/produk/name-16124246522247.jpg', '/produk/name-16124246522258.jpg', '/produk/name-16124246522267.jpg', NULL, NULL, 'amplifier-mini-betavo-bt-699d-b-1', '2020-11-07 04:33:37', '2021-04-10 05:53:33', 1, 0),
(118, 'Subwoofer BETAVO B15-1535', NULL, NULL, 98, 14, 'Subwoofer BETAVO B15-1535', '<p>Spesifikasi :<br />- 15 Inch<br />- Nominal Diameter 390 MM<br />- Rated Impedance 8 OHM<br />- Power 350 WATT<br />- Sensitivity ( 1w/1m ) 96dB<br />- Frequency Range 40-3500Hz<br />- Voice Coil Diamter 75.5 MM<br />- Magnet Diamter 170 MM<br />- Resonance Frequency Fs 40Hz<br />- Total Factor Qts 0.4Hz<br />- Effective Moving Mass Mms 88gr<br />- Equivalent Cas Air Load Vas 180L<br />- Packing Size 40x40x18CM/PCS<br />- Nett Weight 4,8KG<br />- Growth Weight 5,8KG</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16127778889622.jpg', '/produk/name-16127778889665.jpg', '/produk/name-16127778889673.jpg', '/produk/name-16127778889682.jpg', NULL, NULL, 'subwoofer-betavo-b15-1535', '2020-11-11 03:00:43', '2021-04-19 02:17:55', 1, 0),
(119, 'Subwoofer BETAVO B18-1850', NULL, NULL, 99, 14, 'Subwoofer BETAVO B18-1850', '<h4>Spesifikasi :</h4>\r\n<h4>- Nominal Diameter 460mm</h4>\r\n<h4>- Rated Impedance 8 ohm</h4>\r\n<h4>- Power 1000 watts</h4>\r\n<h4>- Sensitivity (1w/1m) 96dB</h4>\r\n<h4>- Frequency Range 35-2000 Hz</h4>\r\n<h4>- Voice Coil Diameter 280mm</h4>\r\n<h4>- Resonance Frequency Fs 40 Hz</h4>\r\n<h4>- Total Factor : Qts 0.34</h4>\r\n<h4>- Effective Moving Mass : Mms 250gr</h4>\r\n<h4>- Equivalent Cas Air Load : Vas 117 Liters</h4>', NULL, NULL, NULL, '/produk/name-16127781231594.jpg', '/produk/name-16050638078003.jpg', NULL, NULL, NULL, NULL, 'subwoofer-betavo-b18-1850', '2020-11-11 03:03:27', '2021-04-19 02:17:16', 1, 0),
(120, 'Subwoofer BETAVO B18-P300', NULL, NULL, 99, 14, 'Subwoofer BETAVO B18-P300', '<p>Spesifikasi :</p>\r\n<p>- Nominal Diamter 460mm</p>\r\n<p>- Rated Impedance 8 ohm</p>\r\n<p>- Nominal Power Handling 600 Watts</p>\r\n<p>- Program Power 1200 Watts</p>\r\n<p>- Sensitivity ( 1w/1m ) 96dB</p>\r\n<p>- Frequency Range 38-2500 Hz</p>\r\n<p>- Voice Coil Diameter 99.5 mm</p>\r\n<p>- Magnet Diameter 220 mm</p>\r\n<p>- Resonance Frequency Fs 38 Hz</p>\r\n<p>- Total Factor Qts 0.48</p>\r\n<p>- Effective Moving MAss Mms 174 gr</p>\r\n<p>- Equivalent Cas Air Load Vas 189 Liters</p>', NULL, NULL, NULL, '/produk/name-16127781474562.jpg', '/produk/name-16050639836953.jpg', NULL, NULL, NULL, NULL, 'subwoofer-betavo-b18-p300', '2020-11-11 03:06:23', '2021-04-19 02:17:21', 1, 0),
(121, 'Subwoofer BETAVO B18-P400', NULL, NULL, 99, 14, 'Subwoofer BETAVO B18-P400', '<p>Spesifikasi :</p>\r\n<p>- Nominal Diameter 460mm</p>\r\n<p>- Rated Impedance 8 ohm</p>\r\n<p>- Nominal Power Handling 600 Watts</p>\r\n<p>- Program Power 1200 Watts</p>\r\n<p>- Sensitivity ( 1w/1m ) 96dB</p>\r\n<p>- Frequency Range 40-2000 Hz</p>\r\n<p>- Voice Coil Diameter 99.5 mm</p>\r\n<p>- Magnet Diameter 220 mm</p>\r\n<p>- Resonance Frequency Fs 40 Hz</p>\r\n<p>- Total Factor Qts 0.49</p>\r\n<p>- Effective Moving Mass Mms 192 gr</p>\r\n<p>- Equivalent Cas Air Load Vas 180 Liters</p>', NULL, NULL, NULL, '/produk/name-16127781370618.jpg', '/produk/name-16050640989949.jpg', NULL, NULL, NULL, NULL, 'subwoofer-betavo-b18-p400', '2020-11-11 03:08:18', '2021-04-19 02:17:25', 1, 0),
(122, 'Subwoofer BETAVO B18-X400', NULL, NULL, 99, 14, 'Subwoofer BETAVO B18-X400', '<h4>Spesifikasi :</h4>\r\n<h4>- Nominal Diameter 460 mm</h4>\r\n<h4>- Rated Impedance 8 ohm</h4>\r\n<h4>- Nominal Power Handling 600 Watts</h4>\r\n<h4>- Program Power 1200 Watts</h4>\r\n<h4>- Sensitivity ( 1w/1m ) 96 dB</h4>\r\n<h4>- Frequency Range : 40-2000 Hz</h4>\r\n<h4>- Voice Coil Diameter 99.5 mm</h4>\r\n<h4>- Magnet Diameter 220 mm</h4>\r\n<h4>- Resonance Frequency FS 40 Hz</h4>\r\n<h4>- Total Factor Qts 0.45</h4>\r\n<h4>- Effective Moving Mass Mms 170 gr</h4>\r\n<h4>- Equivalent Cas Air Load Vas 155 Liters</h4>', NULL, NULL, NULL, '/produk/name-16127781576749.jpg', '/produk/name-16050642983859.jpg', NULL, NULL, NULL, NULL, 'subwoofer-betavo-b18-x400', '2020-11-11 03:11:38', '2021-04-19 02:17:29', 1, 0),
(123, 'Subwoofer BETAVO B18-X801', NULL, NULL, 99, 14, 'Subwoofer BETAVO B18-X801', '<h4>Spesifikasi :</h4>\r\n<h4>- Nominal Diameter 460 mm</h4>\r\n<h4>- Rated Impedance 8 ohm</h4>\r\n<h4>- Power 1000 Watts</h4>\r\n<h4>- Sensitivity (1w/1m) 96dB</h4>\r\n<h4>- Frequency Range 35-2000 Hz</h4>\r\n<h4>- Voice Coil Diameter 280 mm</h4>\r\n<h4>- Resonance Frequency Fs 40 Hz</h4>\r\n<h4>- Total Factor Qts 0.34</h4>\r\n<h4>- Effective Moving Mass Mms 250 gr</h4>\r\n<h4>- Equivalent Cas Air Load Vas 117 Liters</h4>', NULL, NULL, NULL, '/produk/name-16127781685899.jpg', '/produk/name-16050646086364.jpg', NULL, NULL, NULL, NULL, 'subwoofer-betavo-b18-x801', '2020-11-11 03:16:48', '2021-04-19 02:17:33', 1, 0),
(124, 'Stand Mic BETAVO ST-55', NULL, NULL, 1, 13, 'Stand Mic BETAVO ST-55', '<p>Deskrispsi :</p>\r\n<p>- Terbuat Dari Besi</p>\r\n<p>- Tinggi Max 65 CM</p>\r\n<p>- Panjang Tiang Mic 47 CM</p>\r\n<p>- Mic Holder</p>\r\n<p>- Hp Holder</p>', NULL, NULL, NULL, '/produk/name-16123394933901.jpg', '/produk/name-16123394933945.jpg', '/produk/name-16117394410147.jpg', NULL, NULL, NULL, 'stand-mic-betavo-st-55-1', '2020-11-18 01:53:38', '2021-02-03 08:04:53', 1, 0),
(125, 'Mic Wireless BETAVO AK-18', NULL, NULL, 99, 5, 'Mic Wireless BETAVO AK-18', '<h4>Spesifikasi :</h4>\r\n<h4>- Respons Frekuensi 80-12KHz</h4>\r\n<h4>- S/N :&gt; 80dB</h4>\r\n<h4>- Jarak Efektif +- 30-50M</h4>\r\n<h4>- Distorsi &lt; 0.5%</h4>\r\n<h4>- Baterai 1.5V X 2 ( Tahan 8 Jam )</h4>\r\n<h4>- Sensitivitas -83 dBm</h4>\r\n<h4>- Tegangan Power DC 12V</h4>\r\n<h4>- Tegangan Listrik AC 110V-60Hz, AC 220V - 50Hz</h4>\r\n<h4>&nbsp;</h4>', NULL, NULL, NULL, '/produk/name-16124960829499.jpg', '/produk/name-16082957333033.jpg', '/produk/name-16082957333040.jpg', NULL, NULL, NULL, 'mic-wireless-betavo-ak-18', '2020-12-18 12:48:53', '2021-02-25 08:05:11', 1, 0),
(126, 'Ampli Mini BETAVO BT-310B', NULL, NULL, 1, 1, 'Ampli Mini BETAVO BT-310B', '<p>Spesifikasi :</p>\r\n<p>- Support Bluetooth</p>\r\n<p>- Support USB, SD/MMC Card</p>\r\n<p>- Digital Display</p>\r\n<p>- Knob Volume</p>\r\n<p>- Knob Treble</p>\r\n<p>- Knob Bass</p>\r\n<p>- Aux</p>\r\n<p>- Speaker Output</p>\r\n<p>- DC 12V/5A</p>', NULL, NULL, NULL, '/produk/name-16141404609057.jpg', '/produk/name-16137196469769.jpg', '/produk/name-16137196469780.jpg', NULL, NULL, NULL, 'ampli-mini-betavo-bt-310b', '2020-12-18 13:00:42', '2021-02-24 04:21:00', 1, 0),
(127, 'Amplifier Mini BETAVO BT-404', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO BT-404', '<h4>Spesifikasi :</h4>\r\n<h4>- Speaker Impedance 4-16 Ohm</h4>\r\n<h4>- Input Power 12 Volts DC5A</h4>\r\n<h4>- Input Impedance=47K</h4>\r\n<h4>- Input Sensitivity 0.25mV-220mV</h4>\r\n<h4>- Frekuensi 20Hz-20Khz</h4>\r\n<h4>- SNR (Signal/Noise Ratio) -85dbn</h4>\r\n<h4>- Output Power R.M.S 40W</h4>\r\n<h4>- Support SD Card, USB, FM radio</h4>\r\n<h4>- 2 Channel Mic Input</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Audio Input</h4>\r\n<h4>- 4 Channel Speaker Output</h4>', NULL, NULL, NULL, '/produk/name-16141405618080.jpg', '/produk/name-16140687279378.jpg', '/produk/name-16140687279415.jpg', '/produk/name-16140687279423.jpg', NULL, NULL, 'amplifier-mini-betavo-bt-404', '2020-12-18 13:06:51', '2021-02-24 04:22:41', 1, 0),
(128, 'Amplifier Mini BETAVO BT-640B', NULL, NULL, 1, 1, 'Amplifier Mini BETAVO BT-640B', '<h4>Spesifikasi :</h4>\r\n<h4>- Speaker Impedance 4-16 Ohm</h4>\r\n<h4>- Input Power 12 Volts DC5A</h4>\r\n<h4>- Input Impedance=47K</h4>\r\n<h4>- Input Sensitivity 0.25mV-220mV</h4>\r\n<h4>- Frekuensi 20Hz-20Khz</h4>\r\n<h4>- SNR (Signal/Noise Ratio) -85dbn</h4>\r\n<h4>- Output Power R.M.S 40W</h4>\r\n<h4>- Support SD Card, USB, FM radio</h4>\r\n<h4>- 2 Channel Mic Input</h4>\r\n<h4>- Digital Display</h4>\r\n<h4>- Audio Input</h4>\r\n<h4>- 2 Channel Speaker Output</h4>', NULL, NULL, NULL, '/produk/name-16120122775330.jpg', '/produk/name-16120122775374.jpg', '/produk/name-16120122775826.jpg', '/produk/name-16120122775834.jpg', NULL, NULL, 'amplifier-mini-betavo-bt-640b', '2020-12-18 13:14:45', '2021-01-30 13:11:17', 1, 0),
(129, 'Mic Jepit Wireless BETAVO BT-389', NULL, NULL, 99, 5, 'Mic Jepit Wireless BETAVO BT-389', '<h4>Spesifikasi :</h4>\r\n<h4>- Frekuensi Respon 75Hz-18KHz+-3dB</h4>\r\n<h4>- S/N &gt;98dB</h4>\r\n<h4>- Power supply Built in Lion Rechargeable Battery 500mA</h4>\r\n<h4>- T.H.D &lt;1.0%</h4>\r\n<h4>- Jarak 30M - 50M</h4>\r\n<h4>- Battery Life Up To 6 Hours</h4>\r\n<h4>- Recharging Time About 1 Hour</h4>', NULL, NULL, NULL, '/produk/name-16123410327081.jpg', '/produk/name-16082980471061.jpg', '/produk/name-16082980471069.jpg', NULL, NULL, NULL, 'mic-jepit-wireless-betavo-bt-389', '2020-12-18 13:27:27', '2021-02-25 08:02:15', 1, 0),
(130, 'Mic Wireless BETAVO BV-228HH', NULL, NULL, 1, 5, 'Mic Wireless BETAVO BV-228HH', '<p>Spesifikasi :</p>\r\n<p>- Jarak &plusmn; 50 M</p>\r\n<p>- Battery Type 2 x AA Size Up To 10 Hours</p>\r\n<p>- UHF 600 - 750 Mhz</p>\r\n<p>- Material Plastic</p>', NULL, NULL, NULL, '/produk/name-16117375619130.jpg', '/produk/name-16108506297678.jpg', '/produk/name-16108506297686.jpg', '/produk/name-16108506297693.jpg', '/produk/name-16108506297700.jpg', NULL, 'mic-wireless-betavo-bv-228', '2020-12-18 13:34:16', '2021-02-25 08:00:15', 1, 0),
(131, 'Professional Mixer BETAVO F4 USB', NULL, NULL, 6, 10, 'Professional Mixer BETAVO F4 USB', '<h4>Spesifikasi :</h4>\r\n<h4>- 2 Channel Mono</h4>\r\n<h4>- 2 Channel Stereo</h4>\r\n<h4>- Support USB</h4>\r\n<h4>- Phantom +48V</h4>\r\n<h4>- Mic Frequency Response +0, -1dB, &lt;20Hz to 40kHz</h4>\r\n<h4>- Mic Frequency Response +0, -3dB, &lt;20Hz to 60kHz</h4>\r\n<h4>- T.H.D 0.1% (1KHz Full Power)</h4>\r\n<h4>- S/N Ratio -80dB</h4>\r\n<h4>- Input Sensitivity Mic:30dB. Line 21dB</h4>\r\n<h4>- Output Impedance &gt;100 ohm</h4>\r\n<h4>- Max Output Level +20dBu</h4>\r\n<h4>- Power AC 110V-240V</h4>', NULL, NULL, NULL, '/produk/name-16149329491437.jpg', '/produk/name-16149329491480.jpg', '/produk/name-16149329491492.jpg', '/produk/name-16149329491503.jpg', NULL, NULL, 'mixer-betavo-f4-usb', '2020-12-18 13:46:08', '2021-03-05 08:29:09', 1, 0),
(132, 'Professional Mixer BETAVO F4-B USB', NULL, NULL, 6, 10, 'Professional Mixer BETAVO F4-B USB', '<h4>Spesifikasi :</h4>\r\n<h4>- 4 Channel</h4>\r\n<h4>- Support USB &amp; Bluetooth</h4>\r\n<h4>- Phantom +48V</h4>\r\n<h4>- Mic Frequency Response +0, -1dB, &lt;20Hz to 40kHz</h4>\r\n<h4>- Mic Frequency Response +0, -3dB, &lt;20Hz to 60kHz</h4>\r\n<h4>- T.H.D 0.1% (1KHz Full Power)</h4>\r\n<h4>- S/N Ratio -80dB</h4>\r\n<h4>- Input Sensitivity Mic:30dB. Line 21dB</h4>\r\n<h4>- Output Impedance &gt;100 ohm</h4>\r\n<h4>- Max Output Level +20dBu</h4>\r\n<h4>- Power AC 110V-240V</h4>', NULL, NULL, NULL, '/produk/name-16124312256296.jpg', '/produk/name-16124312256337.jpg', '/produk/name-16124312256344.jpg', '/produk/name-16124312256351.jpg', NULL, NULL, 'mixer-betavo-f4-b-usb', '2020-12-18 13:50:32', '2021-02-19 09:11:41', 1, 0),
(133, 'Professional Mixer BETAVO F7 USB', NULL, NULL, 7, 10, 'Professional Mixer BETAVO F7 USB', '<h4>Spesifikasi :</h4>\r\n<h4>- 5 Channel Mono</h4>\r\n<h4>- 2 Channel Stereo</h4>\r\n<h4>- Support USB, Bluetooth</h4>\r\n<h4>- +48V Phantom</h4>\r\n<h4>- Mic Frequency Response +0, -1dB, &lt;20Hz to 40kHz</h4>\r\n<h4>- Mic Frequency Response +0, -3dB, &lt;20Hz to 60kHz</h4>\r\n<h4>- T.H.D 0.1% (1KHz Full Power)</h4>\r\n<h4>- S/N Ratio -80dB</h4>\r\n<h4>- Input Sensitivity Mic:30dB. Line 21dB</h4>\r\n<h4>- Output Impedance &gt;100 ohm</h4>\r\n<h4>- Max Output Level +20dBu</h4>\r\n<h4>- Power AC 110V-240V</h4>', NULL, NULL, NULL, '/produk/name-16143333069662.jpg', '/produk/name-16143333069700.jpg', '/produk/name-16143333069709.jpg', '/produk/name-16143333069716.jpg', NULL, NULL, 'mixer-betavo-f7-usb', '2020-12-18 13:55:06', '2021-02-26 09:55:06', 1, 0),
(134, 'Portable Wireless Amplifier BETAVO JA-660', NULL, NULL, 1, 19, 'Portable Wireless Amplifier BETAVO JA-660', '<h4>Spesifikasi :</h4>\r\n<h4>- Frekuensi Rance 180-260MHz</h4>\r\n<h4>- Modulation FM</h4>\r\n<h4>- Stability Quartz Locked</h4>\r\n<h4>- Audio Output 35W</h4>\r\n<h4>- Frekuensi Respon 25-15000Hz</h4>\r\n<h4>- Operation Range 30-50M</h4>', NULL, NULL, NULL, '/produk/name-16083001904296.jpg', '/produk/name-16083001904335.jpg', '/produk/name-16083001904342.jpg', NULL, NULL, NULL, 'portable-wireless-amplifier-betavo-ja-660', '2020-12-18 14:03:10', '2020-12-18 14:03:10', 1, 0),
(135, 'Mic Meeting BETAVO SK-120', NULL, NULL, 1, 6, 'Mic Meeting BETAVO SK-120', '<p>Spesifikasi :</p>\r\n<p>- 1 Buah Busa Mic</p>\r\n<p>- 1 Buah Kabel Jack Audio</p>\r\n<p>- Suara Jernih , Keras</p>\r\n<p>- Free Batrai</p>', NULL, NULL, NULL, '/produk/name-16143328951680.jpg', '/produk/name-16143328306126.jpg', '/produk/name-16143328308915.jpg', NULL, NULL, NULL, 'mic-meeting-betavo-sk-120', '2020-12-18 14:14:04', '2021-02-26 09:48:15', 1, 0),
(136, 'Mic Meeting Meja BETAVO SK-110', NULL, NULL, 1, 6, 'Mic Meeting Meja BETAVO SK-110', '<p>Spesifikasi :</p>\r\n<p>- Dapat Busa Mic 1 Pcs</p>\r\n<p>- Extra Kabel</p>\r\n<p>- Suara Jernih, Keras</p>', NULL, NULL, NULL, '/produk/name-16120127662991.jpg', '/produk/name-16120127663033.jpg', '/produk/name-16120127663042.jpg', '/produk/name-16120127663050.jpg', NULL, NULL, 'mic-meeting-meja-betavo-sk-110', '2020-12-18 14:17:06', '2021-01-30 13:19:26', 1, 0),
(137, 'Mic Wireless BETAVO BV-228HC', NULL, NULL, 2, 5, 'Mic Wireless BETAVO BV-228HC', '<p>Spesifikasi :</p>\r\n<p>- Jarak&nbsp;&plusmn; 50 M</p>\r\n<p>- UHF 600 - 750Mhz</p>\r\n<p>- Material Plastic</p>\r\n<p>- Baterai AA</p>\r\n<p>- 1 Mic</p>\r\n<p>- 1 Receiver</p>\r\n<p>- 1 Clip On</p>\r\n<p>- 1 Headset</p>', NULL, NULL, NULL, '/produk/name-16117375292016.jpg', '/produk/name-16117375292058.jpg', '/produk/name-16117375292066.jpg', NULL, NULL, NULL, 'mic-wireless-bv-228hc', '2021-01-17 02:45:47', '2021-02-25 08:00:20', 1, 0),
(138, 'Mic Wireless BETAVO BV-228CO', NULL, NULL, 3, 5, 'Mic Wireless BETAVO BV-228CO', '<p>Spesifikasi :<br />- UHF 600 - 750 Mhz</p>\r\n<p>- Jarak&nbsp;&plusmn; 50 M</p>\r\n<p>- Baterai AA</p>\r\n<p>- Material Plastic</p>\r\n<p>- 2 Receiver</p>\r\n<p>- 2 Clip On</p>\r\n<p>- 2 Headset</p>', NULL, NULL, NULL, '/produk/name-16117376553013.jpg', '/produk/name-16117376553061.jpg', '/produk/name-16117376553073.jpg', NULL, NULL, NULL, 'mic-wireless-bv-228co', '2021-01-17 03:12:48', '2021-02-25 08:00:25', 1, 0),
(139, 'Mic Wireless BETAVO BW-100', NULL, NULL, 4, 5, 'Mic Wireless BETAVO BW-100', '<p>Spesifikasi :</p>\r\n<p>- Jarak&nbsp;&plusmn; 200M</p>\r\n<p>- Koper 1/2 Alumuminum</p>\r\n<p>- 2 Antena Signal</p>\r\n<p>- 2 Channel ( Setiap Channel 100 Frequency )</p>\r\n<p>- Baterai AA</p>\r\n<p>- Digital Display</p>\r\n<p>- Material Besi</p>\r\n<p>- 2 Varian Mic : Black &amp; Gray</p>', NULL, NULL, NULL, '/produk/name-16117380534070.jpg', '/produk/name-16117380534115.jpg', '/produk/name-16117378097165.jpg', '/produk/name-16117378097173.jpg', '/produk/name-16117378097180.jpg', NULL, 'mic-wireless-bw-100', '2021-01-17 03:17:41', '2021-02-25 08:04:34', 1, 0),
(140, 'Mic Meeting Wireless BETAVO Z-4', NULL, NULL, 5, 6, 'Mic Meeting Wireless BETAVO Z-4', '<p>Spesifikasi :</p>\r\n<p>4 Channel ( Each Channel 100 Frequency )</p>\r\n<p>Kinerja Integratif&nbsp;</p>\r\n<p>1. Frekuensi: Frekuensi Tinggi 600-800MHz <br />2. Frekuensi stabilitas: 0.005% (-10&deg;C) <br />3. Modus Modulation: FM <br />4. Modulasi frekuensi Max: &plusmn;40KHz <br />5. Respons frekuensi: 80-12KHz <br />6. S/N: &rsaquo;80dB <br />7. Jarak efektif: &plusmn;100M <br />8. Distorsi: &le;0.5% <br />9. Suhu Kerja: -10&deg;C ~ 50&deg;C <br /><br />Spesifikasi teknologi Receiver <br />1. Modus Menerima : Double-konversi <br />Superheterodyne <br />2. Sensitivitas: -83 dBm <br />3. Audio Output: &Phi;6.35 ketidakseimbangan <br />Output: 0-250mV <br />4. Tegangan Power: DC 12V <br />Tegangan listrik: AC 110V ~ 60Hz <br />Tegangan listrik: AC 220V ~ 50Hz <br /><br />pesifikasi teknologi mikrofon<br />1. RF output daya: &lsaquo;10 mW<br />2. Clutter Suppression<br />3. Antenna: hidden external power<br />4. Angkat kepala: cardioids dinamis<br />Directivity (MIC genggam) kondensor<br />Directivity (Pinggang MIC)<br />5. Baterai: 1.5V X 2<br />6. Hidup Baterai: hingga 8 jam</p>', NULL, NULL, NULL, '/produk/name-16117388522167.jpg', '/produk/name-16117388522211.jpg', '/produk/name-16117388522219.jpg', '/produk/name-16117388522227.jpg', '/produk/name-16117388522234.jpg', NULL, 'mic-meeting-z4', '2021-01-17 03:23:11', '2021-02-25 04:28:28', 1, 0),
(141, 'Mic Meeting Wireless BETAVO Z-2', NULL, NULL, 4, 6, 'Mic Meeting Wireless BETAVO Z-2', '<p>Spesifikasi :&nbsp;</p>\r\n<p>2 Channel ( Each Channel 2 Frequency )</p>\r\n<p>Kinerja Integratif&nbsp;<br />1. Frekuensi: Frekuensi Tinggi 600-800MHz<br />2. Frekuensi stabilitas: 0.005% (-10&deg;C)<br />3. Modus Modulation: FM<br />4. Modulasi frekuensi Max: &plusmn;40KHz<br />5. Respons frekuensi: 80-12KHz<br />6. S/N: &rsaquo;80dB<br />7. Jarak efektif: 30-100M<br />8. Distorsi: &le;0.5%<br />9. Suhu Kerja: -10&deg;C ~ 50&deg;C<br />10.Berat 6 KG</p>', NULL, NULL, NULL, '/produk/name-16117387828666.jpg', '/produk/name-16117387828796.jpg', '/produk/name-16117387828829.jpg', '/produk/name-16117387828915.jpg', NULL, NULL, 'mic-meeting-z-2', '2021-01-17 03:26:44', '2021-02-25 04:28:14', 1, 0),
(142, 'Mic Wireless BETAVO PRO 1', NULL, NULL, 8, 5, 'Mic Wireless BETAVO PRO 1', '<p>Spesifikasi :</p>\r\n<p>- 2 Channel ( Fix Channel )</p>\r\n<p>Kinerja Integratif&nbsp;<br />1. Frekuensi: Frekuensi Tinggi 600-800MHz<br />2. Frekuensi stabilitas: 0.005% (-10&deg;C)<br />3. Modus Modulation: FM<br />4. Modulasi frekuensi Max: &plusmn;40KHz<br />5. Respons frekuensi: 80-12KHz<br />6. S/N: &rsaquo;80dB<br />7. Jarak efektif: &plusmn;100M<br />8. Distorsi: &le;0.5%<br />9. Suhu Kerja: -10&deg;C ~ 50&deg;C<br /><br />Spesifikasi teknologi mikrofon<br />1. RF output daya: &lsaquo;10 mW<br />2. Clutter Suppression<br />3. Antenna: hidden external power<br />4. Angkat kepala: cardioids dinamis<br />Directivity (MIC genggam) kondensor<br />Directivity (Pinggang MIC)<br />5. Baterai: 1.5V X 2<br />6. Hidup Baterai: hingga 8 jam</p>', NULL, NULL, NULL, '/produk/name-16117390599156.jpg', '/produk/name-16117389367202.jpg', '/produk/name-16117389367210.jpg', '/produk/name-16117389367218.jpg', '/produk/name-16117389367226.jpg', NULL, 'mic-wireless-pro-1', '2021-01-17 03:35:33', '2021-02-25 08:00:59', 1, 0),
(143, 'Amplifier Wallet BETAVO ZX-2208T', NULL, NULL, 4, 3, 'Amplifier Wallet BETAVO ZX-2208T', '<p>Spesifikasi :</p>\r\n<p>Input Impedence: 250mv/ 470Q<br />Microphone Input: 5mv/600Q<br />Tone Control:<br />Middle:&plusmn;12db<br />Treble : &plusmn; 12db<br />Spaker System:<br />Speaker 1/2/3/4/5/6 Channel 4-8Q<br />power Supply:<br />Input power 1 AC 220-240V/50Hz<br />Input power 2 DC 12V<br />Seprate Master Channel &ge; 45db<br />frequency: CH 1/2/3/4/5/6 F=20Hz - 20 KHz &ge; 2db<br />Signal to Noise:&nbsp;<br />CH 1/2/3/4/5/6 Channel &ge;71 db</p>', NULL, NULL, NULL, '/produk/name-16125084873497.jpg', '/produk/name-16117398508159.jpg', '/produk/name-16117398508172.jpg', '/produk/name-16117398508182.jpg', '/produk/name-16117398508191.jpg', NULL, 'amplifier-wallet-zx-2208t', '2021-01-17 03:39:51', '2021-02-25 07:09:56', 1, 0),
(144, 'Speaker BETAVO BPS-10 MK II PRO', NULL, NULL, 20, 9, 'Speaker BETAVO BPS-10 MK II PRO', '<p>Spesifikasi :</p>\r\n<p>- 10 Inch</p>\r\n<p>- BOX MDF</p>\r\n<p>- Double Magnet</p>\r\n<p>- 1 Set 2 Pcs ( Left &amp; Right )</p>\r\n<p>- Impedance 8&nbsp;&Omega;</p>\r\n<p>- Input Max 450-550W</p>\r\n<p>- Sensitivity 98dB-3dB</p>\r\n<p>- Frequency 40Hz=18KHz</p>', NULL, NULL, NULL, '/produk/name-16117363789483.jpg', '/produk/name-16117363810196.jpg', '/produk/name-16117363810209.jpg', '/produk/name-16117363810230.jpg', '/produk/name-16117363810256.jpg', NULL, 'speaker-betavo-bps-10-mk-ii-pro', '2021-01-27 08:33:01', '2021-01-27 08:36:03', 1, 0),
(145, 'Speaker BETAVO BPS-4512', NULL, NULL, 19, 9, 'Speaker BETAVO BPS-4512', '<p>Spesifikasi :</p>\r\n<p>- 12 Inch</p>\r\n<p>- BOX MDF</p>\r\n<p>- Single Magnet</p>\r\n<p>- 1 Set 2 Pcs ( Left &amp; Right )</p>\r\n<p>- Impedance 8&Omega;</p>\r\n<p>- Input Max 500-600W</p>\r\n<p>- Sensitivity 98dB-3dB</p>\r\n<p>- Frequency 40Hz-18KHz</p>', NULL, NULL, NULL, '/produk/name-16117365243276.jpg', '/produk/name-16117365243339.jpg', '/produk/name-16117365243347.jpg', '/produk/name-16117365243355.jpg', '/produk/name-16117365243363.jpg', NULL, 'speaker-betavo-bps-4512', '2021-01-27 08:35:24', '2021-04-19 01:59:54', 1, 0),
(146, 'Speaker BETAVO BPS-4510', NULL, NULL, 18, 9, 'Speaker BETAVO BPS-4510', '<p>Spesifikasi :</p>\r\n<p>- 10 Inch</p>\r\n<p>- Single Magnet</p>\r\n<p>- BOX MDF</p>\r\n<p>- 1 Set 2 Pcs ( Left &amp; Right )</p>\r\n<p>- Impedance 8&Omega;</p>\r\n<p>- Input Max 400-450W</p>\r\n<p>- Sensitivity 98dB-3dB</p>\r\n<p>- Frequency 40Hz-18KHz</p>', NULL, NULL, NULL, '/produk/name-16117366720095.jpg', '/produk/name-16117366720140.jpg', '/produk/name-16117366720149.jpg', '/produk/name-16117366720158.jpg', '/produk/name-16117366720167.jpg', NULL, 'speaker-betavo-bps-4510', '2021-01-27 08:37:52', '2021-04-19 01:59:57', 1, 0),
(147, 'Speaker BETAVO BPS - 458', NULL, NULL, 17, 9, 'Speaker BETAVO BPS - 458', '<p>Spesifikasi :</p>\r\n<p>- 8 Inch</p>\r\n<p>- BOX MDF</p>\r\n<p>- Single Magnet</p>\r\n<p>- 1 Set 2 Pcs ( Left &amp; Right )</p>\r\n<p>- Impedance 8&Omega;</p>\r\n<p>- Input Max 300-350W</p>\r\n<p>- Sensitivity 98dB-3dB</p>\r\n<p>- Frequency 40Hz-18KHz</p>', NULL, NULL, NULL, '/produk/name-16117369577361.jpg', '/produk/name-16117369577403.jpg', '/produk/name-16117369577413.jpg', '/produk/name-16117369577421.jpg', '/produk/name-16117369577913.jpg', NULL, 'speaker-betavo-bps-458', '2021-01-27 08:42:37', '2021-04-19 01:59:50', 1, 0),
(149, 'Portable Speaker BETAVO RM-12', NULL, NULL, 1, 7, 'Portable Speaker BETAVO RM-12', '<p>Spesifikasi :</p>\r\n<p>- Power Output 25W</p>\r\n<p>- Charger Voltage 10V 350mA</p>\r\n<p>- Product Weight 335G</p>\r\n<p>- Mic Directivity Single Direction</p>\r\n<p>- Frequency Response 100Hz-10KHz&nbsp;&plusmn; 3dB</p>\r\n<p>- Power Supply Lithiium-ion Polymer 7.4V</p>\r\n<p>- Product Dimention 125x55x87mm</p>', NULL, NULL, NULL, '/produk/name-16117392403399.jpg', '/produk/name-16117392403923.jpg', '/produk/name-16117392403933.jpg', NULL, NULL, NULL, 'portable-speaker-betavo-rm-12', '2021-01-27 09:20:40', '2021-01-27 09:20:40', 1, 0),
(150, 'Stand Mic Betavo ST-202', NULL, NULL, 1, 13, 'Stand Mic Betavo ST-202', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 35 CM</p>\r\n<p>- Diameter Piring 14 CM</p>\r\n<p>- Material Besi</p>\r\n<p>- Mic Holder</p>', NULL, NULL, NULL, '/produk/name-16117395698975.jpg', '/produk/name-16117395699019.jpg', '/produk/name-16117395699028.jpg', '/produk/name-16117395699044.jpg', NULL, NULL, 'stand-mic-betavo-st-202', '2021-01-27 09:26:09', '2021-01-27 09:26:09', 1, 0);
INSERT INTO `produk` (`id`, `meta_title`, `meta_description`, `meta_keywords`, `prioritas`, `id_kategori`, `nama_produk`, `deskripsi`, `link_bukalapak`, `link_shopee`, `link_tokopedia`, `image_url_1`, `image_url_2`, `image_url_3`, `image_url_4`, `image_url_5`, `youtube_video_url_1`, `slug`, `created_at`, `updated_at`, `is_active`, `is_featured`) VALUES
(151, 'Stand Mic BETAVO ST-203', NULL, NULL, 1, 13, 'Stand Mic BETAVO ST-203', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 45 CM</p>\r\n<p>- Diameter Piring 15 CM</p>\r\n<p>- Material Besi</p>\r\n<p>- Mic Holder</p>', NULL, NULL, NULL, '/produk/name-16117396438182.jpg', '/produk/name-16117396438226.jpg', '/produk/name-16117396438234.jpg', NULL, NULL, NULL, 'stand-mic-betavo-st-203', '2021-01-27 09:27:23', '2021-01-27 09:27:23', 1, 0),
(152, 'Stand Mic BETAVO STA-2', NULL, NULL, 1, 13, 'Stand Mic BETAVO STA-2', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 83 CM</p>\r\n<p>- Material Besi</p>\r\n<p>- Mic Holder</p>\r\n<p>- Filter Mic</p>', NULL, NULL, NULL, '/produk/name-16137219882574.jpg', '/produk/name-16137219882618.jpg', '/produk/name-16137219882627.jpg', NULL, NULL, NULL, 'stand-mic-betavo-sta-2', '2021-01-30 07:19:05', '2021-02-19 08:06:28', 1, 0),
(153, 'Stand Speaker BETAVO SP-301', NULL, NULL, 1, 12, 'Stand Speaker BETAVO SP-301', '<p>Spesifikasi :</p>\r\n<p>- Panjang Max 30 CM</p>\r\n<p>- Diameter Piring 14 CM</p>\r\n<p>- Material Besi</p>\r\n<p>- Bracket Speaker L + R</p>', NULL, NULL, NULL, '/produk/name-16120123859991.jpg', '/produk/name-16120123860033.jpg', '/produk/name-16120123860042.jpg', NULL, NULL, NULL, 'stand-speaker-betavo-sp-301', '2021-01-30 13:13:06', '2021-01-30 13:13:06', 1, 0),
(154, 'Bracket Speaker BETAVO SP-302', NULL, NULL, 1, 12, 'Bracket Speaker BETAVO SP-302', '<p>Spesifikasi :</p>\r\n<p>- Panjang Max 84 CM</p>\r\n<p>- Material Besi</p>\r\n<p>- Bracket Speaker L + R&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16120125186193.jpg', '/produk/name-16120125186235.jpg', '/produk/name-16120125186243.jpg', NULL, NULL, NULL, 'bracket-speaker-betavo-sp-302', '2021-01-30 13:15:18', '2021-01-30 13:15:18', 1, 0),
(155, 'Mic Kabel BETAVO BETA-57A', NULL, NULL, 1, 4, 'Mic Kabel BETAVO BETA-57A', '<p>Spesifikasi :</p>\r\n<p>- Mic High Quality</p>\r\n<p>- Panjang Kabel 3.4M</p>\r\n<p>- Mic Holder</p>', NULL, NULL, NULL, '/produk/name-16123178511949.jpg', '/produk/name-16123178511993.jpg', NULL, NULL, NULL, NULL, 'mic-kabel-betavo-beta-57a', '2021-02-03 02:04:11', '2021-02-03 02:04:11', 1, 0),
(156, 'Mic Kabel BETAVO PRO-300', NULL, NULL, 1, 4, 'Mic Kabel BETAVO PRO-300', '<p>Spesifikasi :&nbsp;</p>\r\n<p>- High Quality</p>\r\n<p>- Panjang Kabel 187 CM</p>\r\n<p>- Busa Mic</p>', NULL, NULL, NULL, '/produk/name-16123210631875.jpg', '/produk/name-16123210631917.jpg', '/produk/name-16123210631924.jpg', NULL, NULL, NULL, 'mic-kabel-betavo-pro-300', '2021-02-03 02:57:43', '2021-02-03 02:57:43', 1, 0),
(157, 'Mic Kabel BETAVO SN-222', NULL, NULL, 99, 4, 'Mic Kabel BETAVO SN-222', '<p>Spesifikasi :</p>\r\n<p>- High Quality</p>\r\n<p>- Panjang Kabel 3 M</p>', NULL, NULL, NULL, '/produk/name-16123212508893.jpg', '/produk/name-16123212508939.jpg', NULL, NULL, NULL, NULL, 'mic-kabel-betavo-sn-222', '2021-02-03 03:00:50', '2021-02-25 04:27:24', 1, 0),
(158, 'Stand Mic BETAVO SB-101', NULL, NULL, 1, 13, 'Stand Mic BETAVO SB-101', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 130 CM</p>\r\n<p>- Panjang Tiang Mic 68 CM</p>\r\n<p>- Holder Book 49 CM x 36 CM</p>\r\n<p>- Material Besi</p>\r\n<p>- Mic Holder</p>', NULL, NULL, NULL, '/produk/name-16123214433424.jpg', '/produk/name-16123214433469.jpg', NULL, NULL, NULL, NULL, 'stand-mic-betavo-sb-101-with-book-holder', '2021-02-03 03:04:03', '2021-02-25 04:39:14', 1, 0),
(159, 'Stand Speaker BETAVO SPS-505', NULL, NULL, 1, 12, 'Stand Speaker BETAVO SPS-505', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 180 CM</p>\r\n<p>- Dudukan Speaker 17.3 CM x 11 CM</p>\r\n<p>- Ketebalan Dudukan Speaker 0.2 CM</p>\r\n<p>- Diameter Tiang 3.5 CM</p>\r\n<p>- Material Besi</p>\r\n<p>- Berat Bersih 3.23 KG</p>\r\n<p>- Berat Kotor 3.5 KG</p>', NULL, NULL, NULL, '/produk/name-16124966267504.jpg', '/produk/name-16123376161904.jpg', '/produk/name-16123376161914.jpg', NULL, NULL, NULL, 'stand-speaker-betavo-sps-505', '2021-02-03 07:33:36', '2021-02-05 03:43:46', 1, 0),
(160, 'Speaker Component BETAVO B10-750', NULL, NULL, 98, 14, 'Speaker Component BETAVO B10-750', '<p>Spesifikasi :</p>\r\n<p>- 10 Inch</p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Nominal Diameter 250MM</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Rated Impedance 8OHM</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Power 300WATT</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Sensitivity ( 1w/1m ) 96dB</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Frequency Range 80-3000Hz</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Voice Coil Diameter 75.5MM</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Magnet Diameter 190MM</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Resonance Frequency Fs 80Hz</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Total Factor Qts 0.35</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Effective Moving Mass MMS 38gr</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Equivalent Cas Air Load VAS 35L</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Packing Size 26,5 x 26,5 x1 2,5CM/PCS</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Nett Weight 6,4KG</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Gross Weight 6,7KG</span></p>', NULL, NULL, NULL, '/produk/name-16127775869670.jpg', '/produk/name-16127775869722.jpg', '/produk/name-16127775869731.jpg', '/produk/name-16127775869740.jpg', '/produk/name-16127775869749.jpg', NULL, 'speaker-component-betavo-b10-750', '2021-02-08 09:46:26', '2021-04-19 02:18:00', 1, 0),
(161, 'Stand Mic BETAVO ST-205', NULL, NULL, 1, 13, 'Stand Mic BETAVO ST-205', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 50 CM</p>\r\n<p>- Panjang Tiang Mic 45 CM</p>\r\n<p>- Diameter Piring 13 CM</p>\r\n<p>- Mic Holder</p>\r\n<p>- HP Holder Model Jepit</p>\r\n<p>- N.W 1.2 KG</p>\r\n<p>- G.W 1.32 KG</p>\r\n<p>- Packing Size 13*9*45CM/PCS</p>', NULL, NULL, NULL, '/produk/name-16137215418629.jpg', '/produk/name-16137215418687.jpg', NULL, NULL, NULL, NULL, 'stand-mic-betavo-st-205', '2021-02-19 07:59:01', '2021-02-19 07:59:01', 1, 0),
(162, 'Professional Mixer BETAVO JT122II', NULL, NULL, 66, 10, 'Professional Mixer BETAVO JT122II', '<p>Spesifikasi :</p>\r\n<p>- 10 Channel Mono</p>\r\n<p>- 2 Channel Stereo</p>\r\n<p>- 2 Channel Main Out L/R</p>\r\n<p>- Extra Aux Send, Phone, Record Out</p>\r\n<p>- USB MP3 Display</p>\r\n<p>- Effect</p>\r\n<p>- Equalizer</p>\r\n<p>- Support Bluetooth</p>', NULL, NULL, NULL, '/produk/name-16137260432899.jpg', '/produk/name-16137260433010.jpg', '/produk/name-16137260433020.jpg', NULL, NULL, NULL, 'professional-mixer-betavo-jt122ii', '2021-02-19 09:14:03', '2021-02-19 09:14:03', 1, 0),
(163, 'Professional Mixer BETAVO ECT-8USB', NULL, NULL, 99, 10, 'Professional Mixer BETAVO ECT-8USB', '<p>Spesifikasi :</p>\r\n<p>- 8 Channel Mono</p>\r\n<p>- Support MP3, USB</p>\r\n<p>- Digital Display</p>\r\n<p>- Main Out (L+R), Send, Phones, Return</p>\r\n<p>- Equalizer 5 Bands</p>\r\n<p>- DC 15V x 2</p>\r\n<p>- DC 48V</p>\r\n<p>- Dimensi Produk : 40*34*4 CM</p>', NULL, NULL, NULL, '/produk/name-16141495009683.jpg', '/produk/name-16140693749414.jpg', '/produk/name-16140693749426.jpg', '/produk/name-16140693749437.jpg', NULL, NULL, 'mixer-betavo-ect-8usb', '2021-02-23 08:36:14', '2021-02-25 04:30:10', 1, 0),
(164, 'Line Array Bracket LAB-12J Stand Speaker', NULL, NULL, 1, 22, 'Line Array Bracket LAB-12J Stand Speaker', '<p>Spesifikasi :</p>\r\n<p>- Material Besi</p>\r\n<p>- Untuk Speaker 12 Inch</p>\r\n<p>- 3 In 1</p>\r\n<p>- Nett Weight 12.31 KG</p>\r\n<p>- Gross Weight 12.58 KG</p>\r\n<p>- Packing Size : 38*20*13 CM</p>', NULL, NULL, NULL, '/produk/name-16140695622826.jpg', NULL, NULL, NULL, NULL, NULL, 'line-array-bracket-lab-12j-stand-speaker', '2021-02-23 08:39:22', '2021-03-13 03:01:37', 1, 0),
(165, 'Stand Mic BETAVO STA-1', NULL, NULL, 1, 13, 'Stand Mic BETAVO STA-1', '<p>Spesifikasi :</p>\r\n<p>- Tinggi Max 90 CM</p>\r\n<p>- Mic Holder</p>\r\n<p>- HP Holder</p>\r\n<p>- Nett Weight 0.6 KG</p>\r\n<p>- Gross Weight 0.73 KG</p>\r\n<p>- Packing Size 40*12*8 CM</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16140743657383.jpg', '/produk/name-16140743657422.jpg', NULL, NULL, NULL, NULL, 'stand-mic-betavo-sta-1', '2021-02-23 09:59:25', '2021-02-23 09:59:25', 1, 0),
(166, 'Digital Mixing Amplifier BETAVO ZX-9', NULL, NULL, 99, 2, 'Digital Mixing Amplifier BETAVO ZX-9', '<p>Spesifikasi :</p>\r\n<p>- 4 Channel Mic</p>\r\n<p>- Knob Echo, Balance, Low, Mid, High</p>\r\n<p>- Support USB, SD/MMC Card</p>\r\n<p>- Equalizer 7 Bands x 2 Channel</p>\r\n<p>- Knob Master Volume</p>\r\n<p>- AC~220V-240V</p>\r\n<p>- Cooling Fan</p>\r\n<p>- 4 Channel Speaker Output</p>', NULL, NULL, NULL, '/produk/name-16141359578128.jpg', '/produk/name-16141359578224.jpg', '/produk/name-16141359578231.jpg', NULL, NULL, NULL, 'amplifier-betavo-zx-9-4', '2021-02-24 03:05:57', '2021-02-25 04:04:01', 1, 0),
(167, 'Amplifier BETAVO ZX-6900', NULL, NULL, 99, 2, 'Amplifier BETAVO ZX-6900', '<p>Spesifikasi :</p>\r\n<p>- 400 Watt</p>\r\n<p>- 8 Channel Mic</p>\r\n<p>- Knob Bal, Echo, Lo, Mid, High</p>\r\n<p>- Gain -20dB</p>\r\n<p>- Knob Master Mic</p>\r\n<p>- Knob Master Volume</p>\r\n<p>- Digital Display</p>\r\n<p>- Equalizer 7 Bands x 2 Channel</p>\r\n<p>- Support USB, SD/MMC Card</p>\r\n<p>- Dimensi Produk 48*30*18 CM</p>', NULL, NULL, NULL, '/produk/name-16141394006945.jpg', '/produk/name-16141394006984.jpg', '/produk/name-16141394006992.jpg', '/produk/name-16141394007002.jpg', '/produk/name-16141394007011.jpg', NULL, 'amplifier-betavo-zx-6900', '2021-02-24 04:03:20', '2021-02-24 04:03:20', 1, 0),
(168, 'Line Array Bracket LAB-12N Stand Speaker', NULL, NULL, 2, 22, 'Line Array Bracket LAB-12N Stand Speaker', '<p>Spesifikasi :</p>\r\n<p>- Material Besi</p>\r\n<p>- Untuk Speaker 12 Inch</p>\r\n<p>- Nett Weight 6.88 KG</p>\r\n<p>- Gross Weight 7.40 KG</p>\r\n<p>- Packing Size : 43*15*40 CM</p>', NULL, NULL, NULL, '/produk/name-16155188472808.jpg', '/produk/name-16155188472937.jpg', NULL, NULL, NULL, NULL, 'line-array-bracket-lab-12n-stand-speaker', '2021-03-12 03:14:07', '2021-03-13 07:52:42', 1, 0),
(169, 'Line Array Bracket LAB-10N Stand Speaker', NULL, NULL, 3, 22, 'Line Array Bracket LAB-10N Stand Speaker', '<p>Spesifikasi :</p>\r\n<p>- Material Besi</p>\r\n<p>- Untuk Speaker 10 Inch</p>\r\n<p>- Nett Weight 6.62 KG</p>\r\n<p>- Gross Weight 7.12 KG</p>\r\n<p>- Packing Size : 44*15*40 CM</p>', NULL, NULL, NULL, '/produk/name-16155195258169.jpg', '/produk/name-16155195258237.jpg', NULL, NULL, NULL, NULL, 'line-array-bracket-lab-10n-stand-speaker', '2021-03-12 03:25:25', '2021-03-13 07:52:56', 1, 0),
(170, 'Portable Speaker BETAVO PS-1288 V3', NULL, NULL, 1, 7, 'Portable Speaker BETAVO PS-1288 V3', '<p>Spesifikasi :</p>\r\n<p>- Daya Output Audio 200W</p>\r\n<p>- Jarak Frekuensi UHF 700-800 MHz FM</p>\r\n<p>- Noise Ratio&nbsp;<span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">&ge;80dB</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Tegangan Sumber Daya AC~220V 50Hz/DC 12V7AH</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Output Impedance 600 OHM</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Speaker 4 OHM 12 Inch</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Baterai Aki DC 12V/7AH</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Nett Weight 11.28 KG</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Gross Weight 13.09 KG</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Dimensi Produk : 36*30*58 CM</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Packing Size : 43*34*65 CM</span></p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, '/produk/name-16155225013714.jpg', '/produk/name-16155225013761.jpg', '/produk/name-16155225013770.jpg', '/produk/name-16155225013777.jpg', NULL, NULL, 'portable-speaker-betavo-sp-1288-v3', '2021-03-12 04:15:01', '2021-04-19 02:35:34', 1, 1),
(171, 'Portable Speaker BETAVO PS-1588 V3', NULL, NULL, 1, 7, 'Portable Speaker BETAVO PS-1588 V3', '<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">Spesifikasi :</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Daya Output Audio 200W</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Jarak Frekuensi UHF 700-800 MHz FM</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Noise Ratio&nbsp; &ge;80dB</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Tegangan Sumber Daya AC~220V 50Hz/DC 12V7AH</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Output Impedance 600 OHM</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Speaker 4 OHM 15 Inch</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Baterai Aki DC 12V/7AH</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Nett Weight 14.98 KG</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Gross Weight 17.22 KG</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Dimensi Produk : 47*40*70 Cm</span></p>\r\n<p><span style=\"font-family: Source Sans Pro, Proxima Nova, Noto Sans, Segoe UI, Opensans, Roboto, Helvetica, -apple-system, system-ui, BlinkMacSystemFont, sans-serif;\">- Packing Size&nbsp; &nbsp; &nbsp; : 49*41*76 CM</span></p>', NULL, NULL, NULL, '/produk/name-16155244246594.jpg', '/produk/name-16155244246634.jpg', '/produk/name-16155244246643.jpg', NULL, NULL, NULL, 'portable-speaker-ps-1588-v3', '2021-03-12 04:47:04', '2021-04-19 04:22:08', 1, 1),
(172, 'Speaker Aktif BETAVO V-150 WB', NULL, NULL, 1, 8, 'Speaker Aktif BETAVO V-150 WB', '<p>Spesifikasi :</p>\r\n<p>- Support Bluetooth</p>\r\n<p>- Support USB, USB to PC</p>\r\n<p>- Display Built IN</p>\r\n<p>- Input 1</p>\r\n<p>* 1 Line/Mic</p>\r\n<p>- Input 2</p>\r\n<p>* 1 Set RCA ( L+R )</p>\r\n<p>* 1 Aux</p>\r\n<p>- 1 Output</p>', NULL, NULL, NULL, '/produk/name-16155311932855.jpg', '/produk/name-16155311932896.jpg', '/produk/name-16155311932906.jpg', '/produk/name-16155311932915.jpg', NULL, NULL, 'speaker-aktif-betavo-v-150-wb', '2021-03-12 06:39:53', '2021-03-12 06:39:53', 1, 0),
(173, 'Speaker Component BETAVO B18-V520II', NULL, NULL, 97, 14, 'Speaker Component BETAVO B18-V520II', '<p>Spesifikasi :</p>\r\n<p>- Power 1300W</p>\r\n<p>- Nominal Diameter 460MM</p>\r\n<p>- Rated Impedance 8 OHM</p>\r\n<p>- Sensitivity (1w/1m) 97 dB</p>\r\n<p>- Frequency Range 30-2000 Hz</p>\r\n<p>- Voice Coil Diameter 125MM</p>\r\n<p>- Magnet Diameter 280MM</p>\r\n<p>- Resonance Frequency FS 30 Hz</p>\r\n<p>- Total Factor Qts 0.28</p>\r\n<p>- Effective Moving Mass Mms 250 GR</p>\r\n<p>- Equivalent Cas Air Load Vas 120 Liters</p>\r\n<p>- Nett Weight 18.22 KG</p>\r\n<p>- Gross Weight 19.93 KG</p>\r\n<p>- Packing Size 50x50x25 CM</p>', NULL, NULL, NULL, '/produk/name-16187989887183.jpg', '/produk/name-16187989887275.jpg', '/produk/name-16187989887283.jpg', '/produk/name-16187989887290.jpg', NULL, NULL, 'speaker-component-betavo-b18-v520ii', '2021-04-19 02:23:08', '2021-04-19 02:23:08', 1, 1),
(174, 'Speaker Component BETAVO B18-V520', NULL, NULL, 96, 14, 'Speaker Component BETAVO B18-V520', '<p>Spesifikasi :</p>\r\n<p>- Power 1200W</p>\r\n<p>- Nominal Diameter 460MM</p>\r\n<p>- Rated Impedance 8 OHM</p>\r\n<p>- Sensitivity (1w/1m) 97 dB</p>\r\n<p>- Frequency Range 30-2000 Hz</p>\r\n<p>- Voice Coil Diameter 125MM</p>\r\n<p>- Magnet Diameter 280MM</p>\r\n<p>- Resonance Frequency FS 30 Hz</p>\r\n<p>- Total Factor Qts 0.28</p>\r\n<p>- Effective Moving Mass Mms 250 GR</p>\r\n<p>- Equivalent Cas Air Load Vas 120 Liters</p>\r\n<p>- Nett Weight 18.95 KG</p>\r\n<p>- Gross Weight 20.20 KG</p>\r\n<p>- Packing Size 50x50x25 CM</p>', NULL, NULL, NULL, '/produk/name-16187994355949.jpg', '/produk/name-16187994356002.jpg', '/produk/name-16187994356013.jpg', '/produk/name-16187994356023.jpg', NULL, NULL, 'speaker-component-betavo-b18-v520-1', '2021-04-19 02:30:35', '2021-04-19 02:32:48', 1, 1),
(175, 'Speaker Component BETAVO B18-C528', NULL, NULL, 95, 14, 'Speaker Component BETAVO B18-C528', '<p>Spesifikasi :</p>\r\n<p>- Power 1500W</p>\r\n<p>- Nominal Diameter 460MM</p>\r\n<p>- Rated Impedance 8 OHM</p>\r\n<p>- Sensitivity (1w/1m) 97 dB</p>\r\n<p>- Frequency Range 30-2000 Hz</p>\r\n<p>- Voice Coil Diameter 125MM</p>\r\n<p>- Magnet Diameter 280MM</p>\r\n<p>- Resonance Frequency FS 30 Hz</p>\r\n<p>- Total Factor Qts 0.28</p>\r\n<p>- Effective Moving Mass Mms 250 GR</p>\r\n<p>- Equivalent Cas Air Load Vas 120 Liters</p>\r\n<p>- Nett Weight 18.60 KG</p>\r\n<p>- Gross Weight 20.34 KG</p>\r\n<p>- Packing Size 50x50x25 CM</p>', NULL, NULL, NULL, '/produk/name-16187995579144.jpg', '/produk/name-16187995579194.jpg', '/produk/name-16187995579203.jpg', '/produk/name-16187995579213.jpg', NULL, NULL, 'speaker-component-betavo-b18-c528', '2021-04-19 02:32:37', '2021-04-19 02:32:37', 1, 1),
(176, 'Speaker Component BETAVO B12-V422', NULL, NULL, 95, 14, 'Speaker Component BETAVO B12-V422', '<p>Spesifikasi :</p>\r\n<p>- Power 600W</p>\r\n<p>- Nominal Diameter 300MM</p>\r\n<p>- Rated Impedance 8 OHM</p>\r\n<p>- Sensitivity (1w/1m) 96 dB</p>\r\n<p>- Frequency Range 45-2500 Hz</p>\r\n<p>- Voice Coil Diameter 99.5MM</p>\r\n<p>- Magnet Diameter 220MM</p>\r\n<p>- Resonance Frequency FS 45 Hz</p>\r\n<p>- Total Factor Qts 0.32</p>\r\n<p>- Effective Moving Mass Mms 88 GR</p>\r\n<p>- Equivalent Cas Air Load Vas 54Liters</p>\r\n<p>- Nett Weight 10.17 KG</p>\r\n<p>- Gross Weight 10.59 KG</p>\r\n<p>- Packing Size 33x33x17 CM</p>', NULL, NULL, NULL, '/produk/name-16187997218965.jpg', '/produk/name-16187997219024.jpg', '/produk/name-16187997219032.jpg', '/produk/name-16187997219040.jpg', NULL, NULL, 'speaker-component-betavo-b12-v422', '2021-04-19 02:35:21', '2021-04-19 02:35:21', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk_kategori`
--

CREATE TABLE `produk_kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prioritas` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_kategori`
--

INSERT INTO `produk_kategori` (`id`, `meta_title`, `meta_description`, `meta_keywords`, `prioritas`, `nama_kategori`, `deskripsi`, `slug`, `image_url`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Amplifier', NULL, NULL, 1, 'Amplifier', NULL, 'amplifier', '/produk_kategori/Amplifier_1.jpeg', 1, '2020-09-15 12:11:40', '2020-10-31 09:29:53'),
(2, 'Microphone', NULL, NULL, 2, 'Microphone', NULL, 'microphone', '/produk_kategori/Microphone_1.jpeg', 1, '2020-09-15 12:11:40', '2020-11-17 07:26:13'),
(3, 'Speaker', NULL, NULL, 3, 'Speaker', NULL, 'speaker', '', 1, '2020-09-15 12:11:40', '2020-11-17 07:26:22'),
(4, 'Mixer', NULL, NULL, 4, 'Mixer', NULL, 'mixer', '', 1, '2020-09-15 12:11:41', '2020-11-17 07:26:26'),
(5, 'Accesories', NULL, NULL, 10, 'Accesories', NULL, 'accesories', '', 1, '2020-09-15 12:11:41', '2021-02-04 09:20:16'),
(6, 'PowerMixer', NULL, NULL, 6, 'PowerMixer', NULL, 'equaliser', '/produk_kategori/name-16124304918400.jpg', 1, '2020-09-15 12:11:41', '2021-02-04 09:21:31'),
(7, 'POWER', NULL, NULL, 1, 'POWER', NULL, 'power', '/produk_kategori/name-16043962396794.jpg', 1, '2020-11-03 09:37:19', '2020-11-03 09:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `produk_sub_kategori`
--

CREATE TABLE `produk_sub_kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prioritas` int(10) UNSIGNED NOT NULL,
  `nama_sub_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kategori` bigint(20) UNSIGNED DEFAULT NULL,
  `image_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_sub_kategori`
--

INSERT INTO `produk_sub_kategori` (`id`, `meta_title`, `meta_description`, `meta_keywords`, `prioritas`, `nama_sub_kategori`, `deskripsi`, `id_kategori`, `image_url`, `slug`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'Mini Amplifier', NULL, NULL, 1, 'Mini Amplifier', NULL, 1, NULL, 'mini-amplifier', '2020-09-15 12:11:40', '2020-09-18 02:57:40', 1),
(2, 'Karaoke Amplifier', NULL, NULL, 2, 'Karaoke Amplifier', NULL, 1, NULL, 'karaoke-amplifier', '2020-09-15 12:11:40', '2020-09-18 02:57:31', 1),
(3, 'Bird Nest Amplifier', NULL, NULL, 3, 'Bird Nest Amplifier', NULL, 1, NULL, 'bird-nest-amplifier', '2020-09-15 12:11:40', '2020-09-15 12:11:40', 1),
(4, 'Wire Microphone', NULL, NULL, 4, 'Wire Microphone', NULL, 2, NULL, 'wire-microphone', '2020-09-15 12:11:40', '2020-09-15 12:11:40', 1),
(5, 'Wireless Microphone', NULL, NULL, 5, 'Wireless Microphone', NULL, 2, NULL, 'wireless-microphone', '2020-09-15 12:11:40', '2020-09-15 12:11:40', 1),
(6, 'Meeting Microphone', NULL, NULL, 6, 'Meeting Microphone', NULL, 2, NULL, 'meeting-microphone', '2020-09-15 12:11:40', '2020-09-15 12:11:40', 1),
(7, 'Portable Speaker', NULL, NULL, 7, 'Portable Speaker', NULL, 3, NULL, 'portable-speaker', '2020-09-15 12:11:40', '2020-09-15 12:11:40', 1),
(8, 'Speaker Active', NULL, NULL, 8, 'Speaker Active', NULL, 3, NULL, 'speaker-active', '2020-09-15 12:11:40', '2020-09-15 12:11:40', 1),
(9, 'Speaker Passive', NULL, NULL, 9, 'Speaker Passive', NULL, 3, NULL, 'speaker-passive', '2020-09-15 12:11:41', '2020-09-15 12:11:41', 1),
(10, 'Mixer', NULL, NULL, 10, 'Mixer', NULL, 4, NULL, 'mixer', '2020-09-15 12:11:41', '2020-09-15 12:11:41', 1),
(11, 'Power Mixer', NULL, NULL, 11, 'Power Mixer', NULL, 6, NULL, 'power-mixer', '2020-09-15 12:11:41', '2021-02-04 09:22:11', 1),
(12, 'Stand Speaker', NULL, NULL, 3, 'Stand Speaker', NULL, 5, NULL, 'stand-speaker', '2020-09-15 12:11:41', '2021-03-13 03:02:11', 1),
(13, 'Stand Microphone', NULL, NULL, 1, 'Stand Microphone', NULL, 5, NULL, 'stand-microphone', '2020-09-15 12:11:41', '2020-11-03 08:24:45', 1),
(14, 'Speaker Component', NULL, NULL, 4, 'Speaker Component', NULL, 3, '/produk_sub_kategori/name-16127765602717.jpg', 'component', '2020-09-15 12:11:41', '2021-02-08 09:29:20', 1),
(16, 'Stand Mixer', NULL, NULL, 0, 'Stand Mixer', NULL, 5, '/produk_sub_kategori/name-16043918599062.jpg', 'stand-mixer', '2020-11-03 08:24:19', '2020-11-03 08:24:19', 1),
(19, 'Portable Wireless Amplifier', NULL, NULL, 4, 'Portable Wireless Amplifier', NULL, 1, '/produk_sub_kategori/name-16044587199457.jpg', 'portable-wireless-amplifier', '2020-11-04 02:58:39', '2020-11-04 02:58:39', 1),
(21, 'POWER', NULL, NULL, 100, 'POWER', NULL, 7, '/produk_sub_kategori/name-16143191423449.jpg', 'power', '2021-02-26 05:59:02', '2021-02-26 06:04:50', 1),
(22, 'Bracket Speaker', NULL, NULL, 4, 'Bracket Speaker', NULL, 5, '/produk_sub_kategori/name-16156044598199.jpg', 'bracket-speaker', '2021-03-13 03:01:02', '2021-03-13 03:01:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_group`
--

CREATE TABLE `role_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_group_pivot`
--

CREATE TABLE `role_group_pivot` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_group_id` int(10) UNSIGNED NOT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide_item`
--

CREATE TABLE `slide_item` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten_slide` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_slide` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_group_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bookmark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `is_root` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_group_id`, `name`, `email`, `password`, `username`, `bookmark`, `settings`, `status_id`, `is_root`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', 'sa@bendt.io', '$2y$10$LdN4CZQNpIzV9wrues48OONlpR44ZB/0q9ZAVxVQj6lD7qycrkA0y', NULL, NULL, NULL, 1, 0, NULL, '2020-09-15 12:11:40', '2020-09-15 12:11:40'),
(2, NULL, 'Admin', 'admin@betavoaudio.com', '$2y$10$CvK05hzRkuwZJZWqszoiceHe8ZOCYhqgJMTX3PHS6MDNJcqV0XA4a', NULL, NULL, NULL, 1, 0, NULL, '2020-09-15 12:11:40', '2020-09-15 12:11:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_messages`
--
ALTER TABLE `client_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `error_log`
--
ALTER TABLE `error_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi_perusahaan`
--
ALTER TABLE `informasi_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `language_iso_unique` (`iso`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `module_slug_unique` (`slug`),
  ADD KEY `module_group_id_foreign` (`group_id`);

--
-- Indexes for table `module_attribute`
--
ALTER TABLE `module_attribute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_attribute_module_id_foreign` (`module_id`);

--
-- Indexes for table `module_group`
--
ALTER TABLE `module_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `module_group_slug_unique` (`slug`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_name_unique` (`name`),
  ADD UNIQUE KEY `page_slug_unique` (`slug`),
  ADD KEY `page_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `page_element`
--
ALTER TABLE `page_element`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_element_locale_name_page_id_unique` (`locale`,`name`,`page_id`),
  ADD KEY `page_element_page_id_foreign` (`page_id`);

--
-- Indexes for table `page_group`
--
ALTER TABLE `page_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_group_slug_unique` (`slug`);

--
-- Indexes for table `page_list`
--
ALTER TABLE `page_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_list_slug_page_id_unique` (`slug`,`page_id`),
  ADD KEY `page_list_page_id_foreign` (`page_id`);

--
-- Indexes for table `page_list_detail`
--
ALTER TABLE `page_list_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_list_detail_page_list_id_foreign` (`page_list_id`);

--
-- Indexes for table `page_list_element`
--
ALTER TABLE `page_list_element`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_list_element_locale_name_page_list_detail_id_unique` (`locale`,`name`,`page_list_detail_id`),
  ADD KEY `page_list_element_page_list_detail_id_foreign` (`page_list_detail_id`);

--
-- Indexes for table `page_list_preset`
--
ALTER TABLE `page_list_preset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_list_preset_page_list_id_foreign` (`page_list_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produk_slug_unique` (`slug`),
  ADD KEY `produk_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `produk_kategori`
--
ALTER TABLE `produk_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_sub_kategori`
--
ALTER TABLE `produk_sub_kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produk_sub_kategori_nama_sub_kategori_unique` (`nama_sub_kategori`),
  ADD KEY `produk_sub_kategori_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_name_unique` (`name`),
  ADD KEY `role_module_id_foreign` (`module_id`);

--
-- Indexes for table `role_group`
--
ALTER TABLE `role_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_group_name_unique` (`name`);

--
-- Indexes for table `role_group_pivot`
--
ALTER TABLE `role_group_pivot`
  ADD PRIMARY KEY (`role_id`,`role_group_id`),
  ADD KEY `role_group_pivot_role_group_id_foreign` (`role_group_id`);

--
-- Indexes for table `slide_item`
--
ALTER TABLE `slide_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_group_id_foreign` (`role_group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_messages`
--
ALTER TABLE `client_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `error_log`
--
ALTER TABLE `error_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_perusahaan`
--
ALTER TABLE `informasi_perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module_attribute`
--
ALTER TABLE `module_attribute`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module_group`
--
ALTER TABLE `module_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_element`
--
ALTER TABLE `page_element`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `page_group`
--
ALTER TABLE `page_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_list`
--
ALTER TABLE `page_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_list_detail`
--
ALTER TABLE `page_list_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_list_element`
--
ALTER TABLE `page_list_element`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_list_preset`
--
ALTER TABLE `page_list_preset`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `produk_kategori`
--
ALTER TABLE `produk_kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk_sub_kategori`
--
ALTER TABLE `produk_sub_kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_group`
--
ALTER TABLE `role_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slide_item`
--
ALTER TABLE `slide_item`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `module_group` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `module_attribute`
--
ALTER TABLE `module_attribute`
  ADD CONSTRAINT `module_attribute_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `page_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `page` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_element`
--
ALTER TABLE `page_element`
  ADD CONSTRAINT `page_element_locale_foreign` FOREIGN KEY (`locale`) REFERENCES `language` (`iso`) ON DELETE CASCADE,
  ADD CONSTRAINT `page_element_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_list`
--
ALTER TABLE `page_list`
  ADD CONSTRAINT `page_list_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_list_detail`
--
ALTER TABLE `page_list_detail`
  ADD CONSTRAINT `page_list_detail_page_list_id_foreign` FOREIGN KEY (`page_list_id`) REFERENCES `page_list` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_list_element`
--
ALTER TABLE `page_list_element`
  ADD CONSTRAINT `page_list_element_page_list_detail_id_foreign` FOREIGN KEY (`page_list_detail_id`) REFERENCES `page_list_detail` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_list_preset`
--
ALTER TABLE `page_list_preset`
  ADD CONSTRAINT `page_list_preset_page_list_id_foreign` FOREIGN KEY (`page_list_id`) REFERENCES `page_list` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `produk_sub_kategori` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `produk_sub_kategori`
--
ALTER TABLE `produk_sub_kategori`
  ADD CONSTRAINT `produk_sub_kategori_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `produk_kategori` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`);

--
-- Constraints for table `role_group_pivot`
--
ALTER TABLE `role_group_pivot`
  ADD CONSTRAINT `role_group_pivot_role_group_id_foreign` FOREIGN KEY (`role_group_id`) REFERENCES `role_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_group_pivot_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_group_id_foreign` FOREIGN KEY (`role_group_id`) REFERENCES `role_group` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
