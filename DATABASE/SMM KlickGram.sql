-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 27, 2017 at 05:17 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klikgram_panel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `id` int(11) NOT NULL,
  `apikey` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `api`
--

INSERT INTO `api` (`id`, `apikey`, `nama`, `username`) VALUES
(1, 'SM-7dedf43519b7cde701eb5d89d0aaf33b', '', '123123'),
(2, 'KG-ba89aaef81032b26a9dce3cfd0d5eed7', '', 'salim.sa'),
(3, 'KG-adaa8e679cc308237794cf67f3a8dfcf', '', 'dimasfebriyanto09'),
(4, 'KG-221e72f51cf2eb4e896cceb805c5621c', '', 'indomedia'),
(5, 'KG-7971ef4b34054c6e88ba4ffcf2c3ea3f', '', 'demo'),
(6, 'KG-d1ed0f7a1ee2a0593b577f2055f07fe2', '', 'Muhvicky1'),
(7, 'KG-b2f1a65418cdc04f48e9b10990cf3e07', '', 'Anakbabi');

-- --------------------------------------------------------

--
-- Table structure for table `dataimage`
--

CREATE TABLE `dataimage` (
  `id` int(11) NOT NULL,
  `transfer` char(20) DEFAULT NULL,
  `bank` char(20) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `konfirm_balance`
--

CREATE TABLE `konfirm_balance` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `kode_request` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `id` int(10) NOT NULL,
  `order_id` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `provider` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `buyer` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `service` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `quantity` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `price` int(10) NOT NULL,
  `status` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `time` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `refund` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`id`, `order_id`, `provider`, `buyer`, `service`, `link`, `quantity`, `price`, `status`, `date`, `time`, `refund`) VALUES
(29, '4260', 'SMP', 'wah_ibnu', 'Instagram Likes Real Indonesia Aktif', 'https://www.instagram.com/p/BVqkSxrlmdr/', '200', 600, 'Completed', '2017-06-23', '11:02:31', 0),
(28, '3000321', 'SMP', 'Anugrah Agung', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'anugrah_agung88', '200', 2000, 'Completed', '2017-06-23', '10:44:20', 0),
(27, '7862', 'SMP', 'dimasmukti', 'Instagram Likes Real Indonesia Aktif', 'https://www.instagram.com/p/BU1c0gEDRov/', '300', 900, 'Completed', '2017-06-23', '10:17:20', 0),
(26, '2990076', 'SMP', 'Mohammad Alfahrizi', 'â™› Instagram Followers Server 3', 'Alfahrizi_711', '227', 4994, 'Completed', '2017-06-22', '11:30:01', 0),
(25, '2989624', 'SMP', 'dimasmukti', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVpZNSyjrfW/', '300', 450, 'Completed', '2017-06-22', '11:10:36', 0),
(24, '551', 'SMP', 'dimasmukti', 'Instagram Likes Real Indonesia Aktif', 'https://www.instagram.com/p/BVjuOlMjQlv/', '200', 600, 'Completed', '2017-06-22', '11:09:49', 0),
(23, '2989588', 'SMP', 'dimasmukti', 'Instagram Views Server 1', 'https://www.instagram.com/p/BU1c0gEDRov/', '200', 600, 'Completed', '2017-06-22', '11:08:29', 0),
(22, '2989557', 'SMP', 'dimasmukti', 'Instagram Views Server 1', 'https://www.instagram.com/p/BU0oWydjUN_/', '300', 900, 'Completed', '2017-06-22', '11:06:49', 0),
(21, '2987245', 'SMP', 'jonathan', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'J.caseid', '200', 2000, 'Completed', '2017-06-22', '09:20:23', 0),
(20, '2985708', 'SMP', 'adis2201', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'raflymahendra28', '900', 9000, 'Completed', '2017-06-22', '08:12:45', 0),
(19, '2985252', 'SMP', 'adis2201', 'â™› Instagram Followers Server 7', 'ariefshndr', '150', 6000, 'Cancelled', '2017-06-22', '07:51:28', 1),
(16, '2982462', 'SMP', 'salim.sa', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BQ0GNYlDvgQ/?taken-by=limsea_', '100', 150, 'Completed', '2017-06-22', '05:25:42', 0),
(17, '2982635', 'SMP', 'jonathan', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'j.caseid', '200', 2000, 'Cancelled', '2017-06-22', '05:35:01', 1),
(18, '2985195', 'SMP', 'adis2201', 'â™› Instagram Followers Server 7', 'iamfdlh', '150', 6000, 'Cancelled', '2017-06-22', '07:48:50', 1),
(15, '2980889', 'SMP', 'salim.sa', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVjBH0xBV1_/?taken-by=fidiaway', '100', 150, 'Completed', '2017-06-22', '04:00:30', 0),
(30, '6162', 'SMP', 'Muhvicky1', 'Instagram Followers Indonesia Aktif Free Bonus++', 'Muhvick', '100', 5000, 'Pending', '2017-06-23', '11:18:13', 0),
(31, '3001985', 'SMP', 'adis2201', 'â™› Instagram Followers Server 7', 'iamfdlh', '150', 6000, 'Cancelled', '2017-06-23', '12:49:14', 1),
(32, '3001991', 'SMP', 'adis2201', 'â™› Instagram Followers Server 7', 'ariefshndr', '150', 6000, 'Cancelled', '2017-06-23', '12:49:52', 1),
(42, '3007914', 'SMP', 'rafipwg', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVrdizvgEI6/', '100', 150, 'Completed', '2017-06-23', '06:21:00', 0),
(33, '3002330', 'SMP', 'Muhvicky1', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'v.vitaa', '200', 2000, 'Completed', '2017-06-23', '01:14:57', 0),
(35, '', 'SMP', 'Mohammad Alfahrizi', 'â™› Instagram Followers Server 10', 'Kopiwezel', '700', 39200, 'Pending', '2017-06-23', '04:08:19', 1),
(34, '2475', 'SMP', 'Mariposah', 'Instagram Likes Real Indonesia Aktif', 'https://instagram.com/p/BVguYWOH3kN/', '200', 600, 'Pending', '2017-06-23', '02:16:46', 0),
(36, '3005671', 'SMP', 'oliver', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'anto.coklat', '500', 5000, 'Completed', '2017-06-23', '04:22:54', 0),
(37, '', 'SMP', 'Mohammad Alfahrizi', 'â™› Instagram Followers Server 6', 'Alfahrizi_711', '415', 10790, 'Pending', '2017-06-23', '04:25:48', 1),
(38, '3006276', 'SMP', 'Mohammad Alfahrizi', 'â™› Instagram Followers Server 10', 'Kopiwezel', '700', 39200, 'Completed', '2017-06-23', '04:56:20', 0),
(39, '3006286', 'SMP', 'Mohammad Alfahrizi', 'â™› Instagram Followers Server 10', 'Kopiwezel', '700', 39200, 'Completed', '2017-06-23', '04:56:49', 0),
(40, '3006619', 'SMP', 'adis2201', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'denaakostaman', '1000', 10000, 'Cancelled', '2017-06-23', '05:11:20', 1),
(41, '3007024', 'SMP', 'Mohammad Alfahrizi', 'â™› Instagram Followers Server 3', 'Alfahrizi_711', '960', 21120, 'Completed', '2017-06-23', '05:34:06', 0),
(67, '3028089', 'SMP', 'Mohammad Alfahrizi', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BTbEmA0Fdwl/', '234', 351, 'Completed', '2017-06-24', '03:13:15', 0),
(43, '3008431', 'SMP', 'adis2201', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'rianrinaldii', '400', 4000, 'Completed', '2017-06-23', '06:50:01', 0),
(44, '3008864', 'SMP', 'Mariposah', 'Instagram Likes Server 1', 'https://instagram.com/p/BVO8oWWHIoR/', '200', 300, 'Completed', '2017-06-23', '07:14:49', 0),
(45, '3010212', 'SMP', 'adis2201', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'luranov23', '500', 5000, 'Completed', '2017-06-23', '08:11:32', 0),
(46, '3010267', 'SMP', 'Mariposah', 'Instagram Likes Server 1', 'https://instagram.com/p/BVrr1NwnfRJ/', '200', 300, 'Completed', '2017-06-23', '08:12:39', 0),
(47, '', 'SMP', 'indomedia', 'â™› Instagram Followers Server 8', 'dewifss_', '100', 1500, 'Pending', '2017-06-23', '09:23:10', 1),
(48, '', 'SMP', 'indomedia', 'â™› Instagram Followers Server 8', 'dewifss_', '100', 1500, 'Pending', '2017-06-23', '09:23:10', 1),
(49, '3015035', 'SMP', 'Mariposah', 'Instagram Likes Server 1', 'https://instagram.com/p/BVrr1NwnfRJ/', '200', 300, 'Completed', '2017-06-24', '12:07:14', 0),
(50, '3015044', 'SMP', 'Mohammad Alfahrizi', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BTbacTaldeR/', '180', 270, 'Completed', '2017-06-24', '12:07:36', 0),
(51, '3015847', 'SMP', 'Mohammad Alfahrizi', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BTbaYEElX71/', '120', 180, 'Completed', '2017-06-24', '12:43:09', 0),
(52, '3017342', 'SMP', 'Mohammad Alfahrizi', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BTaYZUtFVAO/', '150', 225, 'Completed', '2017-06-24', '01:57:25', 0),
(53, '3017990', 'SMP', 'Mohammad Alfahrizi', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BTaYYNcFVBO/', '150', 225, 'Completed', '2017-06-24', '02:34:18', 0),
(54, '3020055', 'SMP', 'rafipwg', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BToddnaAOCz/', '100', 150, 'Completed', '2017-06-24', '04:20:12', 0),
(55, '3020125', 'SMP', 'rafipwg', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BTdIpzrg3Tm/', '100', 150, 'Completed', '2017-06-24', '04:23:21', 0),
(56, '', 'SMP', 'rafipwg', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BTOwwKvg631/', '100', 150, 'Pending', '2017-06-24', '04:25:37', 0),
(57, '', 'SMP', 'rafipwg', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BRlRPhrgzyr/', '100', 150, 'Pending', '2017-06-24', '04:27:21', 0),
(58, '', 'SMP', 'ardimansyah', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'Ardimansyah05', '1000', 10000, 'Pending', '2017-06-24', '04:27:32', 0),
(59, '', 'SMP', 'Mohammad Alfahrizi', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'Kaumakhirzaman_', '250', 2500, 'Pending', '2017-06-24', '04:30:37', 0),
(60, '', 'SMP', 'Mohammad Alfahrizi', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'Kaumakhirzaman_', '250', 2500, 'Pending', '2017-06-24', '04:33:15', 0),
(61, '', 'SMP', 'Mohammad Alfahrizi', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'Kaumakhirzaman_', '250', 2500, 'Pending', '2017-06-24', '04:37:38', 0),
(62, '3023662', 'SMP', 'adis2201', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'egysyamsiyah', '200', 2000, 'Completed', '2017-06-24', '09:40:59', 0),
(63, '3025018', 'SMP', 'Mariposah', 'Instagram Likes Server 1', 'https://instagram.com/p/BVtVOFKHntc/', '200', 300, 'Completed', '2017-06-24', '11:53:52', 0),
(64, '3025740', 'SMP', 'Mohammad Alfahrizi', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BTaUznCFIea/', '150', 225, 'Completed', '2017-06-24', '12:50:43', 0),
(65, '3026510', 'SMP', 'indomedia', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'Agianggaaa', '200', 2000, 'Completed', '2017-06-24', '01:39:03', 0),
(66, '3027556', 'SMP', 'Mariposah', 'Instagram Likes Server 1', 'https://instagram.com/p/BVtVOFKHntc/', '300', 450, 'Completed', '2017-06-24', '02:51:30', 0),
(68, '3029188', 'SMP', 'Mohammad Alfahrizi', 'â™› Instagram Followers Server 6', 'Alfahrizi_711', '300', 7800, 'Completed', '2017-06-24', '04:14:54', 0),
(69, '3029954', 'SMP', 'adis2201', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'msultonaanbia', '200', 2000, 'Completed', '2017-06-24', '04:52:35', 0),
(70, '3030082', 'SMP', 'Muhvicky1', 'â™› Instagram Followers Server 5', 'v.vitaa', '200', 3600, 'Completed', '2017-06-24', '04:59:42', 0),
(71, '3030852', 'SMP', 'febby', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'praity_febby14', '300', 3000, 'Completed', '2017-06-24', '05:43:13', 0),
(72, '3031383', 'SMP', 'febby', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVt2r-kjCRC/', '100', 150, 'Completed', '2017-06-24', '06:13:31', 0),
(73, '3031495', 'SMP', 'Mariposah', 'Instagram Likes Server 1', 'https://instagram.com/p/BVt9vyDH_5E/', '100', 150, 'Completed', '2017-06-24', '06:22:36', 0),
(74, '3031985', 'SMP', 'febby', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVt2wKADoFd/', '100', 150, 'Completed', '2017-06-24', '06:50:09', 0),
(75, '3032324', 'SMP', 'Mariposah', 'Instagram Likes Server 1', 'https://instagram.com/p/BVt9vyDH_5E/', '150', 225, 'Completed', '2017-06-24', '07:08:00', 0),
(76, '3032395', 'SMP', 'febby', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVt2x5XDA2g/', '100', 150, 'Completed', '2017-06-24', '07:12:36', 0),
(77, '', 'SMP', 'Mariposah', 'Instagram Likes Server 1', 'https://instagram.com/p/BVuZHVmn6Yi/', '100', 150, 'Pending', '2017-06-24', '09:26:38', 0),
(78, '', 'SMP', 'Mariposah', 'Instagram Likes Server 1', 'https://instagram.com/p/BVuZHVmn6Yi/', '100', 150, 'Pending', '2017-06-24', '09:36:30', 0),
(79, '', 'SMP', 'Mariposah', 'Instagram Likes Server 1', 'https://instagram.com/p/BVuZHVmn6Yi/', '100', 150, 'Pending', '2017-06-24', '10:41:24', 0),
(80, '3044578', 'SMP', 'Mariposah', 'Instagram Likes Server 1', 'https://instagram.com/p/BVt9vyDH_5E/', '100', 150, 'Completed', '2017-06-25', '08:45:11', 0),
(81, '3045095', 'SMP', 'amel', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVOMhVzgdmoV2XMTXfxcOx0ZzAu751NbOxZcHA0/', '100', 150, 'Completed', '2017-06-25', '09:29:49', 0),
(82, '3045314', 'SMP', 'ardimansyah', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'Ardimansyah05', '1000', 10000, 'Completed', '2017-06-25', '09:51:03', 0),
(83, '6814', 'SMP', 'dimasmukti', 'Instagram Likes Real Indonesia Aktif', 'https://www.instagram.com/p/BVpZNSyjrfW/', '200', 600, 'Pending', '2017-06-25', '10:13:05', 0),
(84, '9334', 'SMP', 'dimasmukti', 'Instagram Likes Real Indonesia Aktif', 'https://www.instagram.com/p/BVvzoj0joCE/', '300', 900, 'Pending', '2017-06-25', '10:13:43', 0),
(85, '3050393', 'SMP', 'adis2201', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'coba_carii', '1000', 10000, 'Completed', '2017-06-25', '04:04:45', 0),
(86, '3051538', 'SMP', 'Mariposah', 'Instagram Likes Server 1', 'https://instagram.com/p/BVt9vyDH_5E/', '300', 450, 'Completed', '2017-06-25', '05:11:47', 0),
(87, '3052056', 'SMP', 'indomedia', 'Instagram Likes Server 1', 'https://instagram.com/p/BVt-PkynfD7/', '300', 450, 'Completed', '2017-06-25', '05:45:12', 0),
(88, '3052082', 'SMP', 'indomedia', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'ghaitsanabillaa', '200', 2000, 'Completed', '2017-06-25', '05:46:26', 0),
(89, '3068193', 'SMP', 'adis2201', 'Instagram Likes Server 2', 'https://www.instagram.com/p/BVrlHghj3f6/', '100', 400, 'Completed', '2017-06-26', '11:23:57', 0),
(90, '3078252', 'SMP', 'adis2201', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'heyyfaa_', '200', 2000, 'Completed', '2017-06-26', '09:02:29', 0),
(91, '3078517', 'SMP', 'demo', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'klikgram.id', '200', 2000, 'Completed', '2017-06-26', '09:16:39', 0),
(92, '3089607', 'SMP', 'amel', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVYf1aSl8BD/', '200', 300, 'Completed', '2017-06-27', '10:19:27', 0),
(93, '', 'SMP', 'febby', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'praity_febby', '200', 2000, 'Pending', '2017-06-27', '11:54:58', 1),
(94, '', 'SMP', 'adis2201', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'andis_andriawan', '400', 4000, 'Pending', '2017-06-27', '01:35:47', 1),
(95, '', 'SMP', 'mariotpw12', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVvtgZjDgVD/', '200', 300, 'Pending', '2017-06-27', '02:13:24', 1),
(96, '', 'SMP', 'mariotpw12', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVvpq0uDlxL/', '200', 300, 'Pending', '2017-06-27', '02:14:20', 1),
(97, '', 'SMP', 'indomedia', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'Monica_bgz', '400', 4000, 'Pending', '2017-06-27', '09:26:12', 0),
(98, '', 'SMP', 'indomedia', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'dewysartiikaa', '750', 7500, 'Pending', '2017-06-27', '09:27:40', 0),
(99, '', 'SMP', 'melli123', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'melli_squarepants', '200', 2000, 'Pending', '2017-06-27', '11:24:42', 0),
(100, '', 'SMP', 'melli123', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'melli_squarepants', '200', 2000, 'Pending', '2017-06-27', '11:24:48', 0),
(101, '', 'SMP', 'melli123', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'melli_squarepants', '200', 2000, 'Pending', '2017-06-27', '11:24:54', 0),
(102, '', 'SMP', 'Anugrah Agung', 'Instagram Likes Server 2', 'https://www.instagram.com/p/BV3duRTFbvz/', '100', 400, 'Pending', '2017-06-28', '11:43:13', 0),
(103, '', 'SMP', 'Anugrah Agung', 'Instagram Likes Server 2', 'https://www.instagram.com/p/BVwt_C9l9xB/', '100', 400, 'Pending', '2017-06-28', '11:45:00', 0),
(104, '', 'SMP', 'Anugrah Agung', 'Instagram Likes Server 2', 'https://www.instagram.com/p/BVeqetPF-nA/', '100', 400, 'Pending', '2017-06-28', '11:46:14', 0),
(105, '', 'SMP', 'Anugrah Agung', 'Instagram Likes Server 2', 'https://www.instagram.com/p/BU4PRdrlVsB/', '100', 400, 'Pending', '2017-06-28', '11:47:32', 0),
(106, '', 'SMP', 'Anugrah Agung', 'â™› Instagram Followers Server 4', 'pitasari_', '210', 5460, 'Pending', '2017-06-28', '11:54:27', 0),
(107, '3190401', 'SMP', 'rafipwg', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV-lLLFgFmf/', '100', 150, 'Completed', '2017-07-01', '07:52:49', 0),
(108, '', 'SMP', 'jonathan', 'â™› Instagram Followers Server 2 ã€Very Fastã€‘', 'j.caseid', '500', 4500, 'Pending', '2017-07-01', '10:08:26', 0),
(109, '3192048', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVjYDZeAi06/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:10:52', 0),
(110, '3192051', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVjYIndA0O7/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:11:20', 0),
(111, '3192052', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVjYIndA0O7/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:11:26', 0),
(112, '3192053', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVjYK7FAdod/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:11:48', 0),
(113, '3192060', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVjYMOaAg1C/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:12:16', 0),
(114, '3192063', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVjYRWwgcBS/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:12:40', 0),
(115, '3192069', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVjYVHSgw0M/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:13:04', 0),
(116, '3192075', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVjeYWFAQTn/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:13:32', 0),
(117, '3192080', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVjemfvgLIp/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:13:56', 0),
(118, '3192081', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVjewrMA27P/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:14:20', 0),
(119, '3192085', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVje9emA3db/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:14:45', 0),
(120, '3192099', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVjfEvSAZ-c/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:15:14', 0),
(121, '3192104', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVkHpOYAk2m/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:15:35', 0),
(122, '3192218', 'SMP', 'adis2201', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BP1tsE-gnPA/', '100', 150, 'Completed', '2017-07-01', '10:29:25', 0),
(123, '3192282', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVuR84sAUPT/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:34:15', 0),
(124, '3192283', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVuR84sAUPT/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:34:21', 0),
(125, '3192284', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVuR84sAUPT/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:34:26', 0),
(126, '3192292', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVuSZMcAh1z/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:34:47', 0),
(127, '3192310', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVuSpK2AYDY/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:35:30', 0),
(128, '3192327', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVuTBYcg8aR/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:37:07', 0),
(129, '3192336', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVuTai5A0Ty/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:37:59', 0),
(130, '3192343', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVuXhr1ADGw/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:39:03', 0),
(131, '3192346', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVuX41xARU2/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:39:22', 0),
(132, '3192351', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVxFYEcA1A0/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '10:39:47', 0),
(133, '3192706', 'SMP', 'melli123', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'melliagr', '200', 2400, 'Completed', '2017-07-01', '11:04:02', 0),
(167, '3194580', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV_OTocAuZf/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '01:28:20', 0),
(134, '3193073', 'SMP', 'melli123', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'novita5345', '200', 2400, 'Completed', '2017-07-01', '11:32:54', 0),
(135, '3193093', 'SMP', 'melli123', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'muhamddoni', '300', 3600, 'Completed', '2017-07-01', '11:34:31', 0),
(136, '3193626', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVuTEF1gQU9/', '100', 150, 'Completed', '2017-07-01', '12:07:45', 0),
(137, '3193627', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVuTEF1gQU9/', '100', 150, 'Completed', '2017-07-01', '12:07:54', 0),
(138, '3193636', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVxFi6ngqUu/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:08:19', 0),
(139, '3193648', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVxFnmAA5jo/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:08:39', 0),
(140, '3193650', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVxFqt3A9iZ/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:09:00', 0),
(141, '3193653', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVxFxNVAO8N/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:09:21', 0),
(142, '3193656', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVxF0AegaV2/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:09:44', 0),
(143, '3193660', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVxF3BMAXGC/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:10:23', 0),
(144, '3193668', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVyJaoLA-_X/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:10:54', 0),
(145, '3193674', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVyJdEhA8bY/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:11:17', 0),
(146, '3193680', 'SMP', 'amel', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV_eDqUgOmY/', '150', 225, 'Completed', '2017-07-01', '12:11:44', 0),
(147, '3193686', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVyJfZhA_Ia/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:12:16', 0),
(148, '3193690', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4HuYYA7F6/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:12:49', 0),
(149, '3193696', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4dWkLgwPD/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:13:10', 0),
(150, '3193701', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4daelgjIy/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:13:38', 0),
(151, '3193706', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4dhZYgR7C/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:14:09', 0),
(152, '3193709', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4dldTgYbH/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:14:25', 0),
(153, '3193714', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4dou7gEWV/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:14:48', 0),
(154, '3193729', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4eCIfgIAD/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:15:20', 0),
(155, '3193732', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4eFZZgKvA/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:15:46', 0),
(156, '3193738', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4eIOCgw1i/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:16:13', 0),
(157, '3193740', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4eOUKgQjz/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:16:39', 0),
(158, '3193744', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4eRIKgbbh/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:16:59', 0),
(159, '3193749', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4eUBcAaIk/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:17:43', 0),
(160, '3193758', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4ehzyganO/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:18:10', 0),
(161, '3193764', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4esIzAdvI/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:18:32', 0),
(162, '3193768', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4ez2JgAaU/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:18:51', 0),
(163, '3193774', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4j_5fgleE/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:19:15', 0),
(164, '3193780', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4kCyMg6D2/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:19:39', 0),
(165, '3193792', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV4kGV_gxir/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '12:20:11', 0),
(166, '3193954', 'SMP', 'adis2201', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BUjiiP3A6Ni/', '100', 150, 'Completed', '2017-07-01', '12:33:20', 0),
(168, '3194584', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV_OVRaA6BT/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '01:28:52', 0),
(169, '3194590', 'SMP', 'jonathan', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV_OW2Pg1nd/?taken-by=j.caseid', '100', 150, 'Completed', '2017-07-01', '01:29:08', 0),
(170, '', 'SMP', 'jonathan', 'â™› Instagram Followers Server 2 ã€Very Fastã€‘', 'j.caseid', '200', 1800, 'Pending', '2017-07-01', '01:32:50', 0),
(171, '', 'SMP', 'indomedia', 'â™› Instagram Followers Server 2 ã€Very Fastã€‘', 'Monica_bgz', '400', 3600, 'Pending', '2017-07-01', '07:09:08', 0),
(172, '', 'SMP', 'indomedia', 'â™› Instagram Followers Server 2 ã€Very Fastã€‘', 'dewysartiikaa', '800', 7200, 'Pending', '2017-07-01', '07:09:30', 0),
(173, '3201941', 'SMP', 'Mohammad Alfahrizi', 'â™› Instagram Followers Server 6', 'Alfahrizi_711', '619', 16094, 'Completed', '2017-07-01', '07:54:41', 0),
(174, '', 'SMP', 'Anugrah Agung', 'â™› Instagram Followers Server 3', 'pitasari_', '200', 4400, 'Pending', '2017-07-02', '08:49:22', 0),
(175, '3215192', 'SMP', 'Muhvicky1', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', '01vitaa', '200', 2400, 'Completed', '2017-07-02', '09:03:52', 0),
(176, '3216875', 'SMP', 'Anugrah Agung', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BU4PRdrlVsB/', '100', 150, 'Completed', '2017-07-02', '11:32:40', 0),
(177, '3216895', 'SMP', 'Anugrah Agung', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BV3_iiTl7lb/', '100', 150, 'Completed', '2017-07-02', '11:34:17', 0),
(178, '', 'SMP', 'adis2201', 'â™› Instagram Followers Server 2 ã€Very Fastã€‘', '_raniirp', '200', 1800, 'Pending', '2017-07-02', '12:48:35', 0),
(179, '', 'SMP', 'ardimansyah', 'â™› Instagram Followers Server 2 ã€Very Fastã€‘', 'Lalacantik1k', '500', 4500, 'Pending', '2017-07-02', '04:57:50', 0),
(180, '3222827', 'SMP', 'adis2201', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BWCi-y2FdR8/', '100', 150, 'Completed', '2017-07-02', '05:01:42', 0),
(181, '3223863', 'SMP', 'indomedia', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'asterstore_', '200', 2400, 'Refunded', '2017-07-02', '05:30:14', 0),
(184, '3230696', 'SMP', 'naufal11', 'Instagram Likes Server 2', 'https://www.instagram.com/p/BWDIIIFHnSu/', '100', 400, 'Completed', '2017-07-02', '10:21:35', 0),
(182, '3225690', 'SMP', 'naufal11', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BWBx0idgVlC/', '150', 225, 'Completed', '2017-07-02', '06:49:15', 0),
(183, '3226841', 'SMP', 'naufal11', 'Instagram Likes Server 2', 'https://www.instagram.com/p/BVCyKoThppM/', '150', 600, 'Completed', '2017-07-02', '07:38:31', 0),
(185, '3238499', 'SMP', 'naufal11', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BWDTzmMhESF/', '150', 225, 'Completed', '2017-07-03', '05:56:25', 0),
(186, '3238696', 'SMP', 'naufal11', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BWDTzmMhESF/', '150', 225, 'Completed', '2017-07-03', '06:08:36', 0),
(187, '', 'SMP', 'naufal11', 'Instagram Likes Real Indonesia Aktif', 'https://www.instagram.com/p/BWDIIIFHnSuNXRT5H9AlVT7y5ZjlH9BeYFeGbY0/', '100', 300, 'Pending', '2017-07-03', '06:10:31', 0),
(188, '3242016', 'SMP', 'adis2201', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BWCj5Kdl9pn/', '100', 150, 'Completed', '2017-07-03', '10:30:42', 0),
(189, '3242044', 'SMP', 'adis2201', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BSu9Gh6BZF2/', '100', 150, 'Completed', '2017-07-03', '10:32:14', 0),
(190, '', 'SMP', 'indomedia', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'Monica_bgz', '350', 4200, 'Pending', '2017-07-03', '06:40:08', 0),
(191, '', 'SMP', 'melli123', 'â™› Instagram Followers Server 8', 'Melliagr', '100', 1500, 'Pending', '2017-07-03', '09:42:27', 0),
(192, '', 'SMP', 'rafipwg', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BUwL5BBgFbb/', '100', 150, 'Pending', '2017-07-03', '11:09:18', 0),
(193, '', 'SMP', 'Anugrah Agung', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BUkONtVlBfX/', '100', 150, 'Pending', '2017-07-04', '03:05:24', 0),
(194, '', 'SMP', 'melli123', 'â™› Instagram Followers Server 8', 'm_akbar872', '100', 1500, 'Pending', '2017-07-04', '07:06:49', 0),
(195, '', 'SMP', 'Anugrah Agung', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BUkONtVlBfX/', '100', 150, 'Pending', '2017-07-04', '07:28:21', 0),
(196, '', 'SMP', 'ptrwlndr10', 'â™› Instagram Followers Server 2 ã€Very Fastã€‘', 'nana.shoppes', '1000', 9000, 'Pending', '2017-07-04', '07:45:20', 0),
(197, '', 'SMP', 'adis2201', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BWFhIUlFFu2/', '200', 300, 'Pending', '2017-07-04', '10:50:55', 0),
(198, '', 'SMP', 'mariotpw12', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVvtgZjDgVD/', '200', 300, 'Pending', '2017-07-04', '01:41:48', 0),
(199, '', 'SMP', 'mariotpw12', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVvtgZjDgVD/', '200', 300, 'Pending', '2017-07-04', '01:41:54', 0),
(200, '', 'SMP', 'mariotpw12', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVvtgZjDgVD/', '200', 300, 'Pending', '2017-07-04', '01:42:00', 0),
(201, '', 'SMP', 'mariotpw12', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVvtgZjDgVD/', '200', 300, 'Pending', '2017-07-04', '01:43:00', 0),
(202, '', 'SMP', 'mariotpw12', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVvpq0uDlxL/', '200', 300, 'Pending', '2017-07-04', '01:43:51', 0),
(203, '', 'SMP', 'mariotpw12', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BVvpq0uDlxL/', '200', 300, 'Pending', '2017-07-04', '01:44:28', 0),
(204, '', 'SMP', 'febby', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'praity_febby', '500', 6000, 'Pending', '2017-07-04', '03:31:53', 0),
(205, '', 'SMP', 'indomedia', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'Monica_bgz', '300', 3600, 'Pending', '2017-07-04', '10:28:21', 0),
(206, '3303296', 'SMP', 'amel', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BWKWXbNA8TtB5imf-NgkoO8Nu6bAK51y5_kXXs0/', '150', 225, 'Completed', '2017-07-05', '05:43:56', 0),
(207, '', 'SMP', 'amel', 'Instagram Likes Real Indonesia Aktif', 'https://www.instagram.com/p/BWKYJDHAsHs/', '100', 300, 'Pending', '2017-07-05', '05:52:48', 0),
(208, '', 'SMP', 'ardimansyah', 'â™› Instagram Followers Server 5', 'Anglnia_', '250', 4500, 'Pending', '2017-07-05', '05:53:47', 0),
(209, '', 'SMP', 'Muhvicky1', 'â™› Instagram Followers Server 4', 'V.vitaa', '200', 2200, 'Pending', '2017-07-05', '08:31:31', 0),
(210, '', 'SMP', 'amel', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BWMnIGqA8Sg/', '100', 150, 'Pending', '2017-07-06', '04:18:48', 0),
(211, '', 'SMP', 'oliver', 'â™› Instagram Followers Server 2 ã€Very Fastã€‘', 'Anissaaaf', '200', 1800, 'Pending', '2017-07-07', '11:54:07', 0),
(212, '', 'SMP', 'febby', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BWP6Hs7jjjZ26ARixayMmQvl2SCeIqEs-mKx680/', '200', 300, 'Pending', '2017-07-07', '10:44:12', 0),
(213, '', 'SMP', 'demo', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'hmc_id', '1000', 12000, 'Pending', '2017-07-10', '03:23:04', 0),
(214, '', 'SMP', 'demo', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'hmc_id', '2000', 24000, 'Pending', '2017-07-10', '03:24:42', 0),
(215, '', 'SMP', 'demo', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'mthisar.a', '4997', 59964, 'Pending', '2017-07-10', '03:25:21', 0),
(216, '', 'SMP', 'demo', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'hmc_id', '5000', 60000, 'Pending', '2017-07-10', '03:25:46', 0),
(217, '', 'SMP', 'demo', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'hmc_id', '5000', 60000, 'Pending', '2017-07-10', '04:00:06', 0),
(218, '', 'SMP', 'adis2201', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'hmc_id', '1000', 12000, 'Pending', '2017-07-10', '04:19:24', 0),
(219, '', 'SMP', 'Muhvicky1', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'hmc_id', '200', 2400, 'Pending', '2017-07-10', '04:22:45', 0),
(220, '', 'SMP', 'demo', 'Instagram Followers Indonesia Aktif Free Bonus++', 'hmc_id', '5000', 250000, 'Pending', '2017-07-10', '04:29:18', 0),
(227, '', 'SMP', 'Mariposah', 'Instagram Likes Server 1', 'https://instagram.com/p/BVO8oWWHIoR/', '200', 300, 'Pending', '2017-07-11', '09:21:10', 0),
(221, '', 'SMP', 'demo', 'Auto Likes Indonesia 30 Hari', 'https://www.instagram.com/p/BWVaR9CF6Kw/', '1000', 515000, 'Pending', '2017-07-10', '04:40:06', 1),
(222, '', 'SMP', 'Babiganas', 'Instagram Likes Real Indonesia Aktif', 'https://www.instagram.com/p/BWVaR9CF6Kw/', '5000', 15000, 'Pending', '2017-07-10', '04:45:22', 0),
(223, '', 'SMP', 'Babijinak', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'hmc_id', '5000', 60000, 'Pending', '2017-07-10', '05:35:57', 0),
(224, '', 'SMP', 'Anakbabi', 'Instagram Followers Indonesia Aktif Free Bonus++', 'hmc_id', '50000', 2500000, 'Pending', '2017-07-10', '05:50:33', 0),
(225, '', 'SMP', 'Mariposah', 'â™› Instagram Followers Server 10', 'hmc_id', '1000', 56000, 'Pending', '2017-07-10', '06:06:48', 0),
(226, '', 'SMP', 'mariotpw12', 'Instagram Likes Server 1', 'https://www.instagram.com/p/BWWaXg8F9X9/', '1000', 1500, 'Pending', '2017-07-10', '09:16:07', 0),
(228, '', 'SMP', 'Anakbabi', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'hmc_id', '1000', 12000, 'Pending', '2017-07-12', '06:10:51', 0),
(229, '', 'SMP', 'Anakbabi', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'warasedikit_', '5000', 60000, 'Pending', '2017-07-12', '06:11:50', 0),
(230, '', 'SMP', 'Anakbabi', 'Youtube Subscribers', 'afdhal fauzan', '1000', 225000, 'Pending', '2017-07-12', '06:13:18', 0),
(231, '', 'SMP', 'Anakbabi', 'Instagram Followers Indonesia Aktif Free Bonus++', 'afdhalfauzan', '10000', 500000, 'Pending', '2017-07-12', '06:16:44', 0),
(232, '', 'SMP', 'Anakbabi', 'Instagram Followers Indonesia Aktif Free Bonus++', 'warasedikit_', '10000', 500000, 'Pending', '2017-07-12', '06:17:08', 0),
(233, '', 'SMP', 'Anakbabi', 'Instagram Likes Server 1', 'hmc_id', '100', 150, 'Pending', '2017-07-12', '06:28:21', 0),
(234, '', 'SMP', 'Anakbabi', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'warasesikit_', '2000', 24000, 'Pending', '2017-07-13', '07:28:25', 0),
(235, '', 'SMP', 'demo', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', 'rizky_fareza', '1000', 12000, 'Pending', '2017-07-14', '10:02:47', 0),
(236, '', 'SMP', 'demo', 'â™› Instagram Followers Server 2 ã€Very Fastã€‘', 'rizky_fareza', '1000', 9000, 'Pending', '2017-07-14', '10:04:04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `request_balance`
--

CREATE TABLE `request_balance` (
  `id` int(10) NOT NULL,
  `kode` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `quantity` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `method` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `status` enum('Pending','Success') COLLATE utf8_swedish_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `time` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `request_balance`
--

INSERT INTO `request_balance` (`id`, `kode`, `username`, `quantity`, `method`, `status`, `date`, `time`) VALUES
(4, '83958565', 'salim.sa', '10000', 'PULSA', 'Success', '2017-06-22', '07:40:56'),
(3, '4725381', 'salim.sa', '10000', 'PULSA', 'Success', '2017-06-22', '07:37:43'),
(5, '83814552', 'salim.sa', '10000', 'BANK', 'Success', '2017-06-22', '07:41:10'),
(6, '50123249', 'salim.sa', '10000', 'PULSA', 'Success', '2017-06-22', '07:42:35'),
(7, '57518975', 'salim.sa', '10000', 'PULSA', 'Success', '2017-06-22', '07:43:32'),
(8, '82886277', 'adis2201', '30000', 'PULSA', 'Success', '2017-06-22', '07:43:40'),
(9, '5945080', 'salim.sa', '10000', 'PULSA', 'Success', '2017-06-22', '07:43:57'),
(10, '76785406', 'salim.sa', '10000', 'PULSA', 'Success', '2017-06-22', '07:44:38'),
(11, '70185034', 'jonathan', '10000', 'PULSA', 'Success', '2017-06-22', '09:23:39'),
(12, '38903870', 'Mohammad Alfahrizi', '50000', 'PULSA', 'Success', '2017-06-23', '01:01:16'),
(13, '91617672', '', '50000', 'PULSA', 'Success', '2017-06-23', '01:19:56'),
(14, '28258960', 'Mohammad Alfahrizi', '50000', 'PULSA', 'Success', '2017-06-23', '01:23:12'),
(15, '24366893', 'salim.sa', '10000', 'PULSA', 'Success', '2017-06-23', '02:00:23'),
(16, '71628653', 'salim.sa', '10000', 'PULSA', 'Success', '2017-06-23', '02:01:13'),
(17, '98816092', 'salim.sa', '10000', 'PULSA', 'Success', '2017-06-23', '02:01:57'),
(18, '85782694', 'salim.sa', '10000', 'PULSA', 'Success', '2017-06-23', '02:02:01'),
(19, '7253569', 'demo', '10000', 'PULSA', 'Success', '2017-06-23', '04:35:47'),
(20, '43787891', 'Mohammad Alfahrizi', '10000', 'PULSA', 'Success', '2017-06-23', '08:55:58'),
(21, '735451', 'Mohammad Alfahrizi', '10000', 'PULSA', 'Success', '2017-06-23', '08:57:32'),
(22, '15379343', 'febby', '10000', 'PULSA', 'Success', '2017-06-24', '06:27:55'),
(23, '14374291', 'Mohammad Alfahrizi', '10000', 'PULSA', 'Success', '2017-06-24', '09:01:49'),
(24, '25467496', 'adis2201', '5000', 'PULSA', 'Success', '2017-06-27', '11:19:11'),
(25, '6811962', 'jonathan', '10000', 'PULSA', 'Success', '2017-07-01', '09:57:13'),
(26, '52486312', 'jonathan', '10000', 'PULSA', 'Success', '2017-07-01', '10:16:37'),
(27, '61772375', 'jonathan', '10000', 'PULSA', 'Success', '2017-07-01', '10:20:14'),
(28, '60548022', 'Mohammad Alfahrizi', '15000', 'PULSA', 'Success', '2017-07-01', '06:20:21'),
(29, '118317', 'dimasfebriyanto09', '5000', 'PULSA', 'Success', '2017-07-04', '10:00:47'),
(30, '95717366', 'demo', '199999999', 'PULSA', 'Success', '2017-07-06', '12:36:08'),
(31, '75493676', 'demo', '1000000', 'PULSA', 'Success', '2017-07-06', '04:37:32'),
(32, '1148100', 'salim.sa', '50000', 'PULSA', 'Success', '2017-07-08', '10:41:31'),
(33, '87906010', 'demo', '6000', 'PULSA', 'Success', '2017-07-10', '04:15:07'),
(34, '40179658', 'Anakbabi', '10000000000000000', 'PULSA', 'Success', '2017-07-10', '05:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `no` int(10) NOT NULL,
  `category` enum('IG','TW','FB','YT','GP','SC','WEB','VINE','IGV','IGL','IGF','MLY','SPC','OTH','ISAT','TSEL','TRI','XL','AXIS','SMART','CERIA','BOLT','GRN','GS','LYTO','MX','STEAM','AD','BD','ID','IDX','IF','SD','SDU','SDV','TD','TDR','XDH') COLLATE utf8_swedish_ci NOT NULL,
  `service` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `rate` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `min` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `max` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `ket` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `provider` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `provider_id` int(10) NOT NULL,
  `status` enum('Tersedia','Tidak tersedia') COLLATE utf8_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`no`, `category`, `service`, `rate`, `min`, `max`, `ket`, `provider`, `provider_id`, `status`) VALUES
(12, 'IGL', 'Instagram Likes Real Indonesia Aktif', '3', '100', '10000', '[SUPER FAST] [MAX 10K] [INSTANT]', 'SMP', 12, 'Tersedia'),
(13, 'IGL', 'Instagram Likes Server 1', '1.5', '100', '4000', '[HQ & REAL] [SUPER FAST] [INSTANT]', 'SMP', 13, 'Tersedia'),
(14, 'IGL', 'Instagram Likes Server 2', '4', '100', '45000', '[HQ & REAL] [SUPER FAST] [INSTANT]', 'SMP', 14, 'Tersedia'),
(15, 'IGL', 'Instagram Likes Server 3', '6', '20', '100000000000', '	[REAL WORLDWIDE] [SUPER FAST] [INSTANT]', 'SMP', 15, 'Tersedia'),
(16, 'IGL', 'Auto Likes Indonesia 30 Hari', '515', '250', '20000', '[USERNAME ONLY] [FAST] [UNLIMITED POST]', 'SMP', 16, 'Tersedia'),
(11, 'IGF', 'â™› Instagram Followers Server 10', '56', '20', '20000', '[REAL USA] [SUPER FAST] [NON DROP]', 'SMP', 11, 'Tersedia'),
(9, 'IGF', 'â™› Instagram Followers Server 8', '15', '20', '3000', '[REAL ACTIVE]  [SUPER FAST] [INSTANT]', 'SMP', 9, 'Tersedia'),
(10, 'IGF', 'â™› Instagram Followers Server 9 ', '52', '200', '6000', '[HIGH QUALITY]  [LASNGSUNG MASUK] [DROP]', 'SMP', 10, 'Tersedia'),
(6, 'IGF', 'â™› Instagram Followers Server 5', '18', '200', '6000', '[HIGH QUALITY] [FAST] [NON DROP ALL]', 'SMP', 6, 'Tersedia'),
(5, 'IGF', 'â™› Instagram Followers Server 4', '11', '100', '20000', '[HQ & REAL] [FAST] [INSTANT]', 'SMP', 5, 'Tersedia'),
(3, 'IGF', 'â™› Instagram Followers Server 2 ã€Very Fastã€‘', '9', '200', '6000', '[HIGH QUALITY] [1 - 5 MENIT MASUK] [DROP]', 'SMP', 3, 'Tersedia'),
(2, 'IGF', 'â™› Instagram Followers Server 1 ã€Super Fastã€‘', '12', '200', '16000', '[REAL WORLDWIDE] [SUPER FAST] [INSTANT]', 'SMP', 2, 'Tersedia'),
(4, 'IGF', 'â™› Instagram Followers Server 3', '22', '100', '5000', '[HQ & REAL] [FAST] [INSTANT]', 'SMP', 4, 'Tersedia'),
(1, 'IGF', 'Instagram Followers Indonesia Aktif Free Bonus++', '50', '100', '500000', '[START 24 JAM] [MANUAL] [NO REFILL]', 'SMP', 1, 'Tersedia'),
(17, 'IGV', 'Instagram Views Server 1', '3', '20', '999000', '[ HQ & SUPER FAST] [INSTANT]', 'SMP', 17, 'Tersedia'),
(18, 'IGV', 'Instagram Views Server 2', '4', '20', '999000', ' [HQ - REAL - SUPER FAST] [MAX 100K]', 'SMP', 18, 'Tersedia'),
(19, 'IGV', 'Instagram Video Live Likes', '12', '200', '10000', '[HQ - REAL - SLOW] [MAX 10K]', 'SMP', 19, 'Tersedia'),
(20, 'IGV', 'Instagram Views Story', '15', '1000', '10000', '(USERNAME ONLY) [MIN/MAX = 1K/10K] [INSTANT]', 'SMP', 20, 'Tersedia'),
(21, 'TW', 'Twitter Followers Server 1', '8', '100', '5000', '[BEST SERVER - FAST] [MAX 5K] [INSTANT]', 'SMP', 21, 'Tersedia'),
(22, 'TW', 'Twitter Followers Server 2', '16', '100', '300000', '[HQ WORLDWIDE] [FAST] [INSTANT]', 'SMP', 22, 'Tersedia'),
(23, 'TW', 'Twitter Retweets Server 1', '9', '20', '15000', '[BEST SERVER - FAST] [MAX 15K] [INSTANT]', 'SMP', 23, 'Tersedia'),
(24, 'TW', 'Twitter Poll Votes', '55', '100', '50000', '[PLACE \"www....com?vote=ButtonNumber\"]', 'SMP', 24, 'Tersedia'),
(25, 'TW', 'Twitter Favourites Server 1', '8', '100', '100000', '[BEST SERVER - HQ] [MAX 100K] [INSTANT]', 'SMP', 25, 'Tersedia'),
(26, 'TW', 'Twitter Favourites Server 2', '50', '100', '500000', '[HQ & FULL LINK] [FAST] [INSTANT]', 'SMP', 26, 'Tersedia'),
(7, 'IGF', 'â™› Instagram Followers Server 6', '26', '250', '20000', '[HIGH QUALITY] [FAST] [NON DROP ALL]', 'SMP', 7, 'Tersedia'),
(27, 'YT', 'Youtube Real Views Server 1', '11', '1000', '500000', '[REAL PEOPLE] [60 DAYS WARRANTY]', 'SMP', 27, 'Tersedia'),
(28, 'YT', 'Youtube Real Views Server 2', '16', '1000', '1000000', '[MONETIZED] [REAL PEOPLE] [NO DROPS]', 'SMP', 28, 'Tersedia'),
(29, 'YT', 'Youtube Video Likes', '84', '20', '20000', '[HIGH QUALITY] [SUPER FAST] [FULL LINK]', 'SMP', 29, 'Tersedia'),
(30, 'YT', 'Youtube Video Dislikes', '84', '20', '20000', '[HIGH QUALITY] [SUPER FAST] [FULL LINK]', 'SMP', 30, 'Tersedia'),
(31, 'YT', 'Youtube Subscribers', '225', '100', '10000', '[HIGH QUALITY] [SUPER FAST] [120 DAYS GUARANTEE]', 'SMP', 31, 'Tersedia'),
(32, 'YT', 'Youtube Shares', '84', '100', '10000', '[HIGH QUALITY] [SUPER FAST] [FULL LINK]', 'SMP', 32, 'Tersedia'),
(33, 'FB', 'Facebook Profile Followers', '55', '50', '5000', '[HIGH QUALITY] [SUPER FAST] [60 DAYS REFILL]', 'SMP', 33, 'Tersedia'),
(34, 'FB', 'Facebook Profile & Page Post Likes', '5', '50', '1000', '[HQ WORLDWIDE] [FAST] [PLACE FULL LINK POST]', 'SMP', 34, 'Tersedia'),
(35, 'FB', 'Facebook Fanspage Likes', '28', '100', '10000', '[HIGH QUALITY] [START 1X24 JAM] [FULL LINK]', 'SMP', 35, 'Tersedia'),
(36, 'FB', 'Facebook Video Views', '3', '1000', '1000000', '[HQ WORLDWIDE] [FAST] [PLACE FULL LINK VIDEO]', 'SMP', 36, 'Tersedia'),
(37, 'FB', 'Facebook Website Likes', '85', '100', '10000', '[REAL USA] [1-6 HOURS START] [INSTANT]', 'SMP', 37, 'Tersedia'),
(38, 'FB', 'Facebook EMOTICONS Post Likes [LOVE]', '16', '10', '10000', '[HIGH QUALITY] [VERY FAST] [INSTANT]	', 'SMP', 38, 'Tersedia'),
(39, 'FB', 'Facebook EMOTICONS Post Likes [WOW]', '16', '10', '10000', '[HIGH QUALITY] [VERY FAST] [INSTANT]	', 'SMP', 39, 'Tersedia'),
(40, 'FB', '	Facebook EMOTICONS Post Likes [ANGRY]', '16', '10', '10000', '[HIGH QUALITY] [VERY FAST] [INSTANT]	', 'SMP', 40, 'Tersedia'),
(43, 'FB', 'Facebook Random Comments	', '78', '10', '500', '[REAL WORLDWIDE] [0-24 HOURS START] [INSTANT]', 'SMP', 43, 'Tersedia'),
(44, 'SC', 'SoundCloud Followers	', '58', '100', '50000', '[HIGH QUALITY] [VERY FAST] [INSTANT]', 'SMP', 44, 'Tersedia'),
(45, 'SC', 'SoundCloud Likes', '58', '50', '50000', '[HIGH QUALITY] [VERY FAST] [INSTANT]', 'SMP', 45, 'Tersedia'),
(46, 'SC', 'SoundCloud Likes', '4', '20', '1000000', '[HIGH QUALITY] [VERY FAST] [INSTANT]', 'SMP', 46, 'Tersedia'),
(47, 'VINE', 'Pinterest Followers', '75', '20', '100000', '	[HIGH QUALITY] [VERY FAST] [INSTANT]', 'SMP', 47, 'Tersedia'),
(48, 'VINE', 'Pinterest Board Followers', '75', '20', '100000', '	[HIGH QUALITY] [VERY FAST] [INSTANT]', 'SMP', 48, 'Tersedia'),
(8, 'IGF', 'â™› Instagram Followers Server 7', '40', '100', '10000', '[HIGH QUALITY]  [SLOW] [30 DAYS AUTO REFILL]', 'SMP', 8, 'Tersedia'),
(54, 'WEB', 'Real Website Traffic [Indonesia]	', '16', '100', '100000', '[REAL INDONESIA] [FAST] [INSTANT]', 'SMP', 54, 'Tersedia'),
(53, 'WEB', 'Real Website Traffic [Worldwide]	', '9', '100', '100000', '[REAL WORLDWIDE] [FAST] [INSTANT]', 'SMP', 53, 'Tersedia'),
(52, 'SPC', 'Spotify Followers Server 2	', '105', '20', '1000', '[HIGH QUALITY] [VERY FAST] [INSTANT]', 'SMP', 52, 'Tersedia'),
(51, 'SPC', 'Spotify Followers Server 1	', '93', '20', '1000', '[HIGH QUALITY] [FAST] [INSTANT]', 'SMP', 51, 'Tersedia'),
(50, 'VINE', 'Pinterest RePins	', '55', '20', '100000', '[HIGH QUALITY] [VERY FAST] [INSTANT]', 'SMP', 50, 'Tersedia'),
(49, 'VINE', 'Pinterest Pin Likes', '55', '20', '1000000', '[HIGH QUALITY] [VERY FAST] [INSTANT]', 'SMP', 49, 'Tersedia'),
(42, 'FB', 'Facebook EMOTICONS Post Likes [HAHA]', '16', '10', '10000', '[HIGH QUALITY] [VERY FAST] [INSTANT]', 'SMP', 42, 'Tersedia'),
(41, 'FB', 'Facebook EMOTICONS Post Likes [SAD]', '16', '10', '10000', '[HIGH QUALITY] [VERY FAST] [INSTANT]', 'SMP', 41, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `transfersaldo`
--

CREATE TABLE `transfersaldo` (
  `username` varchar(1000) NOT NULL,
  `penerima` varchar(1000) NOT NULL,
  `jumlah` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `balance` int(10) NOT NULL,
  `level` enum('Member','Reseller','Agen','Developers','Admin') COLLATE utf8_swedish_ci NOT NULL,
  `register` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `balance_used` int(10) NOT NULL,
  `Status` varchar(100) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `balance`, `level`, `register`, `balance_used`, `Status`) VALUES
(1, 'salim.sa', '123123', 4813999, 'Developers', 'Root', 11285800, 'aktif'),
(3, 'demo', 'klikgram', 200529035, 'Member', 'salim.sa', 1003964, 'Aktif'),
(4, 'adis2201', 'Durian6789', 10550, 'Member', 'salim.sa', 87250, 'Aktif'),
(5, 'ptrwlndr10', '101000', 1000, 'Member', 'salim.sa', 9000, 'Aktif'),
(6, 'jonathan', 'jonathan', 35250, 'Member', 'salim.sa', 18550, 'Aktif'),
(7, 'dimasfebriyanto09', 'automenu', 10000, 'Member', 'salim.sa', 0, 'Aktif'),
(8, 'Mohammad Alfahrizi', 'Malghifar', 70106, 'Member', 'salim.sa', 187374, 'Aktif'),
(9, 'dimasmukti', 'Dimasmukti', 50, 'Member', 'salim.sa', 4950, 'Aktif'),
(10, 'ardimansyah', 'eskrim2000', 500, 'Member', 'salim.sa', 29000, 'Aktif'),
(11, 'rafipwg', 'rafipwg11', 4400, 'Member', 'salim.sa', 1050, 'Aktif'),
(12, 'Anugrah Agung', 'anugrahkim', 22550, 'Member', 'salim.sa', 14060, 'Aktif'),
(13, 'Muhvicky', 'sasasasa', 0, 'Member', 'salim.sa', 0, 'Aktif'),
(14, 'Muhvicky1', 'Muhvicky', 2400, 'Reseller', 'salim.sa', 17600, 'Aktif'),
(15, 'wah_ibnu', 'doodle1998', 4400, 'Member', 'salim.sa', 600, 'Aktif'),
(16, 'amel', 'amel0711', 3650, 'Member', 'salim.sa', 1350, 'Aktif'),
(313121, 'yoga_apri', 'yoga123456', 18000, 'Reseller', 'salim.sa', 0, 'aktif'),
(313122, 'Mariposah', 'pelakor12', 4945325, 'Member', 'yoga_apri', 59975, 'Aktif'),
(313123, 'oliver', 'queen', 23200, 'Member', 'salim.sa', 6800, 'Aktif'),
(313124, 'irhamridwan', 'gowa21', 0, 'Member', 'salim.sa', 0, 'Aktif'),
(313125, 'indomedia', 'indomedia', 47550, 'Member', 'salim.sa', 39950, 'Aktif'),
(313126, 'febby', 'valentine', 9250, 'Member', 'salim.sa', 11750, 'Aktif'),
(313127, 'mariotpw12', 'mario124', 7900, 'Member', 'salim.sa', 3900, 'Aktif'),
(313128, 'melli123', 'punyaku', 11600, 'Reseller', 'salim.sa', 17400, 'Aktif'),
(313129, 'naufal11', 'pesantren', 8325, 'Member', 'salim.sa', 1975, 'Aktif'),
(313130, 'Babiganas', 'Babiganas', 5990000, 'Member', 'salim.sa', 15000, 'Aktif'),
(313131, 'Babijinak', 'Babijinak', 2147483647, 'Admin', 'salim.sa', 60000, 'Aktif'),
(313132, 'Anakbabi', 'Anakbabi', 2143662497, 'Agen', 'salim.sa', 3821150, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `jenis` varchar(30) NOT NULL,
  `code` varchar(100) NOT NULL,
  `serial` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataimage`
--
ALTER TABLE `dataimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirm_balance`
--
ALTER TABLE `konfirm_balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `request_balance`
--
ALTER TABLE `request_balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dataimage`
--
ALTER TABLE `dataimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `konfirm_balance`
--
ALTER TABLE `konfirm_balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
--
-- AUTO_INCREMENT for table `request_balance`
--
ALTER TABLE `request_balance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=417;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313133;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
