-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 08:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_missings`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ssn` int(225) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `mid_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `admin_dapartment_status` int(2) NOT NULL,
  `age` int(4) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `governorate_code` int(11) DEFAULT NULL,
  `cites_code` int(11) DEFAULT NULL,
  `department_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ssn`, `first_name`, `mid_name`, `last_name`, `admin_dapartment_status`, `age`, `status`, `email`, `phone`, `password`, `created_at`, `governorate_code`, `cites_code`, `department_code`) VALUES
(123456, 'Kiona', 'Valentine', 'Non ut dolores incid', 1, 15, 0, 'ahmed@gmail.com', '01062293101', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2022-07-16', 126, 228, 207),
(123456788, 'kenzi', 'hatem', 'ibrahim', 2, 2022, 0, 'kenzi@gmail.com', '01062293101', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2022-07-16', 129, 213, 307),
(123456789, 'Mohamed', 'samir', 'farag', 3, 2022, 0, 'samir.gamal77@yahoo.com', '01062293101', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2022-07-16', 119, 130, 305);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cities_code` int(11) NOT NULL,
  `citiese_name` varchar(50) DEFAULT NULL,
  `Governorate_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cities_code`, `citiese_name`, `Governorate_code`) VALUES
(40, 'سموحة', 109),
(41, 'محطة الرمل', 109),
(42, 'مكرم بك', 109),
(43, 'الابراهيمية', 109),
(44, 'لوران', 109),
(45, 'فيكتوريا', 109),
(46, 'سبورتنج', 109),
(47, 'سيدي جابر', 109),
(48, 'مصطفي كامل', 109),
(49, 'المنشية', 109),
(50, 'ميامي', 109),
(51, 'رشدي', 109),
(52, 'سيدي بشر قبلي', 109),
(53, 'العصافرة قبلي', 109),
(54, 'بولكلي', 109),
(55, 'البيطاش', 109),
(56, 'العجمي', 109),
(57, 'العطارية', 109),
(58, 'الحضرة الجديدة', 109),
(59, 'برج العرب الجديد', 109),
(60, 'غيط العنب', 109),
(61, 'ابو قير', 109),
(62, 'الجمرك', 109),
(63, 'العصافرة', 109),
(64, 'اللبان', 109),
(65, 'الإسماعيلية', 110),
(66, 'التل الكبير', 110),
(67, 'فايد', 110),
(68, 'القنطرة شرق', 110),
(69, 'القنطرة غرب', 110),
(70, 'ابو صوبر', 110),
(71, 'القصاصين', 110),
(72, 'أسوان', 111),
(73, 'إدفو', 111),
(74, 'كوم رمبو', 111),
(75, 'دراو', 111),
(76, 'نصر النوبة', 111),
(77, 'أسيوط', 112),
(78, 'ديروط', 112),
(79, 'القوصية', 112),
(80, 'أنبوب', 112),
(81, 'منفلوط', 112),
(82, 'أبو تيح', 112),
(83, 'الغنايم', 112),
(84, 'ساحل سليم', 112),
(85, 'البداري', 112),
(86, 'صدفا', 112),
(87, 'الفتح', 112),
(88, 'الأقصر', 113),
(89, 'الزينية ', 113),
(90, 'القرنة', 113),
(91, 'الباضية', 113),
(92, 'الطود', 113),
(93, 'ارمنت', 113),
(95, 'إسنا', 113),
(96, 'رأس غارب', 114),
(97, 'الغردقة', 114),
(98, 'سفاجا', 114),
(99, 'القيصر', 114),
(100, 'مرسي علم', 114),
(101, 'الشلاتين', 114),
(102, 'حلايب', 114),
(103, 'رشيد', 115),
(104, 'شبراخيت', 115),
(105, 'إيتاي البارود', 115),
(106, 'أبو حمص', 115),
(107, 'كفر الدوار', 115),
(108, 'كوم حمادة', 115),
(109, 'دمنهور', 115),
(110, 'المحمودية', 115),
(111, 'إدكو', 115),
(112, 'أبوالمطامير', 115),
(114, 'الرحمانية', 115),
(115, 'وادي النطرون', 115),
(116, 'النوبارية الجديدة', 115),
(117, 'الواسطي', 116),
(118, 'بني سويف', 116),
(119, 'سمساط', 116),
(120, 'بني سويف الجديدة', 116),
(121, 'المفتش', 116),
(122, 'ببا', 116),
(123, 'ابورديس', 118),
(124, 'طابا', 118),
(125, 'رأس صدر', 118),
(126, 'دهب', 118),
(127, 'شرم الشيخ', 118),
(128, 'سانت كاترين', 118),
(129, 'الطور', 118),
(130, 'مدينة الجيزة', 119),
(131, 'مركز منشأ القناطر', 119),
(132, 'أوسيم', 119),
(133, 'كرداسة', 119),
(134, 'أبوالنمرس', 119),
(135, 'العوامدية', 119),
(136, 'العياط', 119),
(138, 'الصف', 119),
(139, 'الواحات البحرية', 135),
(140, 'أجا', 120),
(141, 'الجمالية', 120),
(142, 'السناموني', 120),
(143, 'الكردي', 120),
(144, 'المنصورة', 120),
(145, 'بلقاس', 120),
(146, 'بني عبيد', 120),
(147, 'طلخا', 120),
(148, 'ميت سلسبيل', 120),
(149, 'ميت غمر', 120),
(150, 'المطرية', 120),
(151, 'المنزلة', 120),
(152, 'محلة دمنة', 120),
(153, 'منية النصر', 120),
(154, 'دمياط', 121),
(155, 'الزرقا', 121),
(156, 'دمياط الجديدة', 121),
(157, 'كفر البطيخ', 121),
(158, 'كفرسعد', 121),
(159, 'سوهاج', 122),
(160, 'دار الاسلام', 122),
(161, 'طهطا', 122),
(162, 'جرجا', 122),
(163, 'البلينا', 122),
(164, 'طما', 122),
(165, 'ساقلته', 122),
(166, 'المراغة', 122),
(167, 'اخميم', 122),
(168, 'حي السويس', 123),
(169, 'حي عناقة', 123),
(170, 'حي فيصل', 123),
(171, 'حي الاربعين', 123),
(173, 'دفع', 125),
(174, 'الشيخ زويد', 125),
(175, 'العريش', 125),
(176, 'بئر العبد', 125),
(177, 'نخل', 125),
(178, 'الاحسنة', 125),
(179, 'الخارجة', 135),
(180, 'الداخلة', 135),
(181, 'بلاط', 135),
(182, 'باريس', 135),
(183, 'الفرافرة', 135),
(184, 'بني مرار', 134),
(185, 'مطاي', 134),
(186, 'سمالوط', 134),
(187, 'المنيا', 134),
(188, 'ابوقرقاص', 134),
(189, 'ديرمواس', 134),
(190, 'العدوة', 134),
(191, 'ملوي', 134),
(192, 'بني مزار', 134),
(193, 'الحمام', 132),
(194, 'العلمين', 132),
(195, 'الضبعة', 132),
(196, 'مرسي مطروح', 132),
(197, 'البخيلة', 132),
(198, 'السلوم', 132),
(199, 'سيوة', 132),
(200, 'كفرالشيخ', 131),
(201, 'سيدي غازي', 131),
(202, 'فوه', 131),
(203, 'مطوبس', 131),
(204, 'بلطيم', 131),
(205, 'سالم', 131),
(206, 'الرياض', 131),
(207, 'مسير', 131),
(208, 'برج البرلس', 131),
(209, 'الحامول', 131),
(210, 'مصيف بلطيم', 131),
(211, 'بيلا', 131),
(212, 'بنها', 129),
(213, 'قليوب', 129),
(214, 'شبرا الخيمة', 129),
(215, 'القناطر الخيرية', 129),
(216, 'كفر شكر', 129),
(217, 'شبين القناطر', 129),
(218, 'العبور', 129),
(219, 'قها', 129),
(220, 'الخصوص', 129),
(221, 'طوخ', 129),
(222, 'الفيوم', 127),
(223, 'سنورس', 127),
(224, 'إطسا', 127),
(225, 'طامية', 127),
(226, 'أبشواي', 127),
(227, 'يوسف الصديق', 127),
(228, 'كفر الزيات', 126),
(229, 'السنطة', 126),
(230, 'المحلة الكبري', 126),
(231, 'حي اول', 126),
(232, 'حي ثاني', 126),
(233, 'طنطا', 126),
(234, 'بسيون', 126),
(235, 'زفتي', 126),
(236, 'سمنود', 126),
(237, 'قطور', 126),
(238, 'حي السيدة زينب', 128),
(239, 'حي مصر القديمة', 128),
(240, 'حي المقطم', 128),
(241, 'حي الخليفة', 128),
(242, 'حي 15مايو', 128),
(243, 'حي المعصرة', 128),
(244, 'حي دار السلام', 128),
(245, 'حي المعادي', 128),
(246, 'حي طرة', 128),
(247, 'حي حلوان', 128),
(248, 'حي السبتية', 128),
(249, 'حي الزيتون', 128),
(250, 'حي حدائق القبة', 128),
(251, 'حي الساحل', 128),
(252, 'حي شبرا', 128),
(253, 'حي روض الفرج', 128),
(254, 'حي الزاوية الحمراء', 128),
(255, 'حي الشرابية', 128),
(256, 'الامبرية', 128),
(257, 'حي الوايلي', 128),
(258, 'حي باب الشعرية', 128),
(259, 'حي وسط', 128),
(260, 'حي موسكو', 128),
(261, 'حي الازبكية', 128),
(262, 'حي عابدين', 128),
(263, 'حي بولاق', 128),
(264, 'حي عرب', 128),
(265, 'حي منشات ناصر', 128),
(266, 'حي المرج', 128),
(267, 'حي المطرية', 128),
(268, 'حي عين شمس', 128),
(269, 'حي السلام اول', 128),
(270, 'حي السلام تاني', 128),
(271, 'حي النزهة', 128),
(272, 'حي مصر الجديدة', 128),
(273, 'حي مدينة نصر', 128),
(274, 'حي غرب مدينة نصر', 128),
(276, 'شبين الكوم', 133),
(277, 'منوف', 133),
(278, 'مدينة السادات', 133),
(279, 'سوس اللبان', 133),
(280, 'اشموم', 133),
(281, 'الباجور', 133),
(282, 'قويسنا', 133),
(283, 'بركة السبح', 133),
(284, 'تلا', 129),
(285, 'الشهداء', 133),
(286, 'الزقازيق', 124),
(287, 'الحسينية', 124),
(288, 'فاقوس', 124),
(290, 'بلبيس', 124),
(291, 'مينا القمح', 124),
(292, 'أبو حماد', 124),
(293, 'كفر صقر', 124),
(294, 'العاشر من رمضان', 124),
(295, 'مدينة الصالحية الجديدة', 124),
(296, 'اولاد صقر', 124),
(297, 'مشتول السوق', 124),
(298, 'ديرب نجم', 124),
(299, 'العزيزية', 124),
(300, 'صان الحجر', 124),
(301, 'النوبة', 111),
(302, 'طيبة', 113),
(304, '6 اكتوبر', 119),
(305, 'الاهرام', 119),
(306, 'دوقي', 119),
(307, 'شيخ ذايد', 119),
(308, 'عجوزة', 119),
(309, 'العمرانية', 119),
(310, 'الوراق', 119),
(311, 'امبابة', 119),
(312, 'بولاق الدكور', 119),
(313, 'اطفيح', 119),
(314, 'الوقف', 130),
(315, 'أبو تشت', 130),
(316, 'نجح حمادي', 130),
(317, 'قوص', 130),
(318, 'نقادة', 130);

-- --------------------------------------------------------

--
-- Table structure for table `citizines`
--

CREATE TABLE `citizines` (
  `ssn` int(250) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `mid_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) NOT NULL,
  `age` int(5) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `first_phone` int(15) NOT NULL,
  `second_phone` int(15) NOT NULL,
  `status` int(10) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(60) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `governorate_code` int(50) DEFAULT NULL,
  `city_code` int(50) DEFAULT NULL,
  `department_code` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `citizines`
--

INSERT INTO `citizines` (`ssn`, `First_name`, `mid_name`, `last_name`, `age`, `image`, `first_phone`, `second_phone`, `status`, `email`, `password`, `created_at`, `governorate_code`, `city_code`, `department_code`) VALUES
(574, 'Georgia', 'Sacha Franco', 'Velit pariatur Dolo', 39, '2403331_', 1, 1, 0, 'hemopex@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '2022-07-15', 120, 150, 165),
(12345, 'كنزي1', 'حاتم1', 'محمد1', 20, '5228270_download.jpg', 1062293101, 1062293101, 1, 'kenzi1@gmail.com', '$2y$10$d9bf8GeaUThs09Xv9HhVjOkFIHhZ4Jg4R8fq0z76ciXWeyB.WBH4e', '2022-06-04', 129, 212, 224),
(40005, 'عبدالله', 'محمد', 'محروث', 20, '1981179_download5.jpg', 1262293101, 0, 1, 'abdallah@gmail.com', '$2y$10$Uc6FHXiW8B1KNdu49GrX7.30VOaCNlrqTUcca/tbBuFXpA1pVxlEu', '2022-06-05', 134, 187, 261),
(40009, 'عبد حميد', 'محمد', 'شرقاوي', 2, '7144934_download.jpg', 1062293101, 1062293101, 1, 'abdelhamedelsharkawy705@gmail.com', '$2y$10$b6xG0l1lloFZJtX/rboKseza3JLJ5VlYA20TxLbd/.Uoj/X0q6v..', '2022-06-05', 124, 295, 187),
(45454, 'ahmed', NULL, 'essam', NULL, NULL, 0, 0, 0, 'kenzi45454@gmail.com', '$2y$10$f24mrpufSrpKpZ6J59UzeettARTUxzG4RqwAzbN1ugWzTkK6l4J/6', '2022-07-08', NULL, NULL, NULL),
(67676, 'احمد', 'عصام', 'ذايد', 20, '5435350_download2.jpg', 1062293101, 1006631236, 1, 'ae676430@gmail.com', '$2y$10$gw3HrITNwQtBFMuq.ZHL.eMWceaF57sEpBRsOiCwRSPtqppCWnB5q', '2022-06-04', 115, 109, 121),
(98765, 'aya', NULL, 'ibrahim', NULL, NULL, 0, 0, 0, 'aya@gmail.com', '$2y$10$ardbEgBztSyzObUejSW7muXPdaigG/rZ3JRhdTADvf6qz5X0.yJiu', '2022-07-08', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `color_code` int(11) NOT NULL,
  `color` varchar(10) DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`color_code`, `color`, `status`) VALUES
(31, 'اسود', 0),
(32, 'بني', 0),
(33, 'اشقر', 0),
(34, 'ابيض', 0),
(35, 'اسود', 2),
(36, 'بني', 2),
(37, 'عسلي', 2),
(38, 'اخضر', 2),
(39, 'ازرق', 2),
(40, 'ابيض', 1),
(41, 'اسمر', 1),
(42, 'قمحي', 1),
(43, 'خمري', 1),
(44, 'زوحلقي', 2);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_code` int(225) NOT NULL,
  `report_code` int(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `content` text NOT NULL,
  `citizine_id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_code`, `report_code`, `created_at`, `content`, `citizine_id`) VALUES
(56, 71, '2022-07-05 00:00:45', 'ربنا يرجعه بالسلامة يارب', 12345),
(60, 71, '2022-07-05 00:00:48', 'ربنا يرجعه بالسلامة يارب', 30007),
(61, 71, '2022-07-05 00:00:50', 'ربنا يرجعه بالسلامة يارب', 12345),
(62, 71, '2022-07-05 00:00:52', 'ربنا يرجعه بالسلامة يارب', 67676),
(63, 71, '2022-07-05 00:00:54', 'ربنا يرجعه بالسلامة يارب', 56565),
(64, 71, '2022-07-05 00:00:57', 'ربنا يرجعه بالسلامة يارب', 30007),
(65, 65, '2022-07-05 00:00:58', 'ربنا يرجعه بالسلامة يارب', 30007),
(66, 63, '2022-07-05 00:01:01', 'ربنا يرجعه بالسلامة يارب', 30007),
(67, 112, '2022-07-05 00:00:58', 'ربنا يرجعه بالسلامة يارب', 12345),
(68, 109, '2022-07-05 00:00:58', 'ربنا يرجعه بالسلامة يارب', 12345),
(69, 106, '2022-07-05 00:00:58', 'والله ما حصل ده مش ابنييييييييييييييي', 12345),
(70, 113, '2022-07-05 00:00:58', 'ربنا يرجعه بالسلامة يارب', 12345),
(71, 113, '2022-07-05 00:00:58', 'ربنا يرده لاهله يارب', 12345),
(72, 110, '0000-00-00 00:00:00', 'ربنا يرجعه بالسلامة يارب', 12345),
(73, 112, '0000-00-00 00:00:00', 'ربنا يرجعه بالسلامة يارب', 12345),
(74, 73, '0000-00-00 00:00:00', 'ربنا يرجعه بالسلامة يارب', 1),
(75, 65, '0000-00-00 00:00:00', 'ربنا يرجعه بالسلامة يارب', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(225) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `phone` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `title`, `phone`, `email`, `message`) VALUES
(1, 'Damon', 'Ipsam similique occa', 1, 'xezynegob@mailinator.com', 'Est consequuntur ex'),
(2, 'ahmed', 'essam', 1233, 'hokomukoc@mailinator.com', 'Qui sint elit est '),
(3, 'محمد', 'احمد', 1062293101, 'ahmed@gmail.com', 'بلباررعغغ'),
(4, 'Jermaine', 'Nihil in eum consect', 1, 'loxoxuxok@mailinator.com', 'Vel velit dolor aspe'),
(5, 'Kermit', 'Voluptas excepturi e', 1, 'witexebo@mailinator.com', 'Cillum aut irure id'),
(6, 'kenzi', 'hatem', 1062293101, 'kenzi@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_code` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `department_name` varchar(255) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `department_phone` int(11) DEFAULT NULL,
  `governorate_code` int(11) DEFAULT NULL,
  `cites_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_code`, `status`, `department_name`, `location`, `department_phone`, `governorate_code`, `cites_code`) VALUES
(82, 1, 'قسم شرطة اول الاسماعيلية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3434.488116540858!2d32.281916485027985!3d30.591992581686398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f8595b69d2f991%3A0x89e06abc3d5144a1!2z2YLYs9mFINi02LHYt9ipINin2YjZhCDYp9mE2KXYs9mF2KfYudmK2YTZitip!5e0!3m2!1sar!2seg!4v1654297048847!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1234, 110, 65),
(83, 1, 'قسم شرطة الاسماعيلية تاني', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3433.818413489543!2d32.266583885027615!3d30.61088468167983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f85bd8918572b5%3A0xbc485684ea0a928c!2z2YLYs9mFINi02LHYt9ipINin2YTYp9iz2YXYp9i52YrZhNmK2Kkg2KvYp9mG2Yk!5e0!3m2!1sar!2seg!4v1654297185237!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 565656, 110, 65),
(84, 1, 'قسم شرطة الاسماعيلية تالث', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3433.7576002424853!2d32.280863185027606!3d30.61259968167907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f8597059ae99e7%3A0xa8255b3d66a9fb1b!2z2YLYs9mFINi02LHYt9ipINin2YTYp9iz2YXYp9i52YrZhNmK2Kkg2KvYp9mE2Ks!5e0!3m2!1sar!2seg!4v1654297240811!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 8365034, 110, 65),
(85, 1, 'قسم شرطة القنطرة شرق', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.68550324146!2d32.332487585021006!3d30.867478981590327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f8f40000000001%3A0x35351cdf2ab3deab!2z2YLYs9mFINi02LHYt9ipINin2YTZgtmG2LfYsdipINi02LHZgg!5e0!3m2!1sar!2seg!4v1654297350120!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 8392610, 110, 69),
(86, 1, 'قسم شرطة التل الكبير', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d439946.3941224817!2d32.18471453220618!3d30.518742829969153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f819f2d49b26b5%3A0x6b54ea92b65816a5!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNiq2YQg2KfZhNmD2KjZitix!5e0!3m2!1sar!2seg!4v1654297484360!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 8315231, 110, 66),
(87, 1, 'مركز شرطة القنطرة غرب', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d439946.3941224817!2d32.18471453220618!3d30.518742829969153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f819f2d49b26b5%3A0x6b54ea92b65816a5!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNiq2YQg2KfZhNmD2KjZitix!5e0!3m2!1sar!2seg!4v1654297550395!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 8315231, 110, 69),
(88, 1, 'مركز شرطة فايد', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d439946.3941224817!2d32.18471453220618!3d30.518742829969153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f819f2d49b26b5%3A0x6b54ea92b65816a5!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNiq2YQg2KfZhNmD2KjZitix!5e0!3m2!1sar!2seg!4v1654297595091!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 8315231, 110, 67),
(89, 1, 'قسم شرطة اسوان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58275.109506632194!2d32.98723204179687!3d24.09466009999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14367b3a3eebeeb7%3A0x68012bbdf6fb0c6f!2z2YLYs9mFINi02LHYt9mHINir2KfZhiDYo9iz2YjYp9mG!5e0!3m2!1sar!2seg!4v1654297891584!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1247202, 111, 72),
(90, 1, 'قسم شرطة تان اسوان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58275.109506632194!2d32.98723204179687!3d24.09466009999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14367b3a3eebeeb7%3A0x68012bbdf6fb0c6f!2z2YLYs9mFINi02LHYt9mHINir2KfZhiDYo9iz2YjYp9mG!5e0!3m2!1sar!2seg!4v1654297908314!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1247202, 111, 72),
(91, 1, 'قسم شرطة ادفو', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.6098594131827!2d32.8820824851592!3d24.97938508399794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1449ed6bbdb134b1%3A0xee5d07f4455daa7e!2sEdfu%20Police%20Station!5e0!3m2!1sar!2seg!4v1654298024679!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1293376, 111, 73),
(92, 1, 'قسم شرطة دراو', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d465264.73987378756!2d33.18968528862096!3d24.35064523933107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14360e755b770b07%3A0x8b9f6abcac42727e!2z2YXYsdmD2LIg2LTYsdi32Kkg2K_Ysdin2Yg!5e0!3m2!1sar!2seg!4v1654298099094!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 111, 75),
(93, 1, 'مركز شرطة كوم امبو', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.1326454068844!2d32.95063508516969!3d24.480860484234366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14360f7e635da69b%3A0x609efb7c856e54d3!2z2YXYsdmD2LIg2LTYsdi32Kkg2YPZiNmFINin2YXYqNmI!5e0!3m2!1sar!2seg!4v1654298151761!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1284810, 111, 74),
(94, 1, 'مركز شرطة نصر النوبة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.2763092519335!2d33.041393685168444!3d24.54511198420362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x143600d4abe5642d%3A0xf44e5444bd31a7d0!2z2YXYsdmD2LIg2LTYsdi32Kkg2YbYtdixINin2YTZhtmI2KjYqQ!5e0!3m2!1sar!2seg!4v1654298232537!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1274644, 111, 301),
(95, 1, 'مركز شرطة ابنوب', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3546.632320607657!2d31.14977068510893!3d27.26205858297831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14450e14f6f9c94d%3A0x3c1ac7eaeaa32989!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfYqNmG2YjYqA!5e0!3m2!1sar!2seg!4v1654298799944!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 2251221, 112, 80),
(96, 1, 'مركز شرطة البداري', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3555.203051253356!2d31.417435385115063!3d26.992125883093394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14459cec5e3a7acf%3A0xcadd64bbe77f46f8!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNio2K_Yp9ix2Yk!5e0!3m2!1sar!2seg!4v1654298849808!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 2215321, 112, 85),
(97, 1, 'مركز شرطة الفتح', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3548.3917551051177!2d31.199937385110097!3d27.206847583001867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14450c6ce92b37b9%3A0x4258825010c03d37!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNmB2KrYrQ!5e0!3m2!1sar!2seg!4v1654298973191!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 67677, 112, 87),
(98, 1, 'مركز شرطة القلوصية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3548.3917551051177!2d31.199937385110097!3d27.206847583001867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14450c6ce92b37b9%3A0x4258825010c03d37!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNmB2KrYrQ!5e0!3m2!1sar!2seg!4v1654299111031!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 457123, 112, 79),
(99, 1, 'مركز شرطة القوصية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.9336298460744!2d30.822892185104767!3d27.44017908290326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1444e3e8ba27cca9%3A0xfc347cee7f02caa9!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNmC2YjYtdmK2Kk!5e0!3m2!1sar!2seg!4v1654299188544!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 2135652, 112, 79),
(100, 1, 'مركز شرطة ديروط', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56598.32908623873!2d30.84278307344552!3d27.550231411300338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1444de089d8898ad%3A0xa55d1f58047f9b4c!2z2YXYsdmD2LIg2LTYsdi32Kkg2K_Zitix2YjYtw!5e0!3m2!1sar!2seg!4v1654299294543!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 2151772, 112, 78),
(101, 1, 'مركز شرطة ساحل سليم', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56598.32908623873!2d30.84278307344552!3d27.550231411300338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14459e6eaaaaaaab%3A0x457ce0fd267c0178!2z2YXYsdmD2LIg2LTYsdi32Kkg2LPYp9it2YQg2LPZhNmK2YU!5e0!3m2!1sar!2seg!4v1654299331199!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 2220011, 112, 84),
(102, 1, 'مركز شرطة صدفا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.075990517799!2d31.38037818511561!3d26.96449278310534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14459b92e28be15b%3A0x998f8fb44f0f06af!2z2YXYsdmD2LIg2LTYsdi32Kkg2LXYr9mB2Kc!5e0!3m2!1sar!2seg!4v1654299419271!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 2032401, 112, 86),
(103, 1, 'مركز شرطة منفلوط', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3545.05091187142!2d30.973469685107812!3d27.311595182957518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x144503423176f227%3A0x523b297ab60ab0d8!2z2YXYsdmD2LIg2LTYsdi32Kkg2YXZhtmB2YTZiNi3!5e0!3m2!1sar!2seg!4v1654299481400!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 2125243, 112, 81),
(104, 1, 'مديرية امن الاقصر', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.5020546253204!2d32.63711698514407!3d25.687796283670348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1449150b18e4c071%3A0x79a4cb71e79424a1!2z2YXYr9mK2LHZitmHINin2YXZhiDYp9mE2KfZgti12LE!5e0!3m2!1sar!2seg!4v1654299566334!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 56565, 113, 88),
(105, 1, 'قسم شرطة ارمنت', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57568.69866412057!2d32.573303441796874!3d25.60346519999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14491071d2615201%3A0xb55a6eb20da0ff91!2z2YbZgti32Kkg2LTYsdi32Kkg2KPYsdmF2YbYqiDYp9mE2K3Ziti3!5e0!3m2!1sar!2seg!4v1654299682222!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1102122974, 113, 93),
(106, 1, 'قسم شرطة اسنا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230854.1639844288!2d32.83506466718749!3d25.30096800000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1449a5995b573dd7%3A0xb53227726f05c002!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfYs9mG2Kcg2KfZhNix2KbZitiz2Yo!5e0!3m2!1sar!2seg!4v1654299734735!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 91315588, 113, 95),
(107, 1, 'مركز شرطة طيبة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237582.4394249111!2d39.337343061896135!3d21.498881004779143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3cfa075ed2639%3A0x3abc469d3afab39e!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNio2YTYrw!5e0!3m2!1sar!2seg!4v1654299883354!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 2147483647, 113, 302),
(108, 1, 'قسم اول الغردقة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56774.256332162455!2d33.85938747550355!3d27.206870648308502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14528713d883d725%3A0x401b883e467602bd!2z2YLYs9mFINij2YjZhCDYp9mE2LrYsdiv2YLYqdiMINin2YTYqNit2LEg2KfZhNij2K3Zhdix!5e0!3m2!1sar!2seg!4v1654300016814!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 114, 97),
(109, 1, 'قسم ثان الغردقة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113433.76625721146!2d33.80594226084115!3d27.319284643833118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1452630e65a698b9%3A0x9662c8dd5512db6!2z2YLYs9mFINir2KfZhiDYp9mE2LrYsdiv2YLYqdiMINin2YTYqNit2LEg2KfZhNij2K3Zhdix!5e0!3m2!1sar!2seg!4v1654300067154!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 114, 97),
(110, 1, 'قسم شرطة مرسي علم', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.0806188507477!2d34.89282387585149!3d25.065256532646266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15b4e9001f506a5d%3A0x5fdf063f50a68455!2z2YLYs9mFINi02LHYt9ipINmF2LHYs9mKINi52YTZhQ!5e0!3m2!1sar!2seg!4v1654300115543!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 114, 100),
(111, 1, 'قسم شرطة القصير', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.0806188507477!2d34.89282387585149!3d25.065256532646266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15b4e9001f506a5d%3A0x5fdf063f50a68455!2z2YLYs9mFINi02LHYt9ipINmF2LHYs9mKINi52YTZhQ!5e0!3m2!1sar!2seg!4v1654300115543!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 114, 99),
(112, 1, 'قسم شرطة راس غارب', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.0806188507477!2d34.89282387585149!3d25.065256532646266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15b4e9001f506a5d%3A0x5fdf063f50a68455!2z2YLYs9mFINi02LHYt9ipINmF2LHYs9mKINi52YTZhQ!5e0!3m2!1sar!2seg!4v1654300115543!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 213213, 114, 96),
(113, 1, 'قسم شرطة سفاجا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3562.4550193717578!2d33.94403368512026!3d26.7617619831928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x144d72ef86bba8f3%3A0x9f45d304337e966e!2z2YLYs9mFINi02LHYt9ipINiz2YHYp9is2Kc!5e0!3m2!1sar!2seg!4v1654300306581!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 114, 98),
(114, 1, 'قسم شرطة الشلاتين', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29354.333613586186!2d35.59389987960962!3d23.12301063372998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15cbc72294b35b21%3A0x89df48815a22e82c!2z2YLYs9mFINi02LHYt9ipINi02YTYp9iq2YrZhg!5e0!3m2!1sar!2seg!4v1654300354492!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 114, 101),
(115, 1, 'مركز شرطة  سمساط', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55860.65995410024!2d30.93141634179687!3d28.949084800000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145bcb6fffffffff%3A0x8d7bf3efb705681d!2z2YXYsdmD2LIg2LTYsdi32Kkg2LPZhdiz2LfYpw!5e0!3m2!1sar!2seg!4v1654300489931!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 12232, 116, 119),
(116, 1, 'مديرية امن بني سويف', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d446260.38141379174!2d31.664355734374997!3d29.093597500000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145a2647120511ef%3A0xf91dda7c438293a5!2z2YXYr9mK2LHZitipINin2YXZhiDYqNmG2Yog2LPZiNmK2YE!5e0!3m2!1sar!2seg!4v1654300612732!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 2147483647, 116, 118),
(117, 1, 'قسم شرطة ناصر', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55768.54323147288!2d31.155560513740006!3d29.11943740027083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145989d9e37ddeb9%3A0x664a02d8faeac308!2z2YXYsdmD2LIg2LTYsdi32Kkg2YbYp9i12LE!5e0!3m2!1sar!2seg!4v1654300660891!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 2745554, 116, 121),
(118, 1, 'مباحث شرق بني سويف', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15161726.313398043!2d51.12125265060011!3d21.911730111436682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e9542856bb7fd%3A0xc108459222d00e21!2z2YLYs9mFINmF2KjYp9it2Ksg2LTYsdmCINin2YTZhtmK2YQ!5e0!3m2!1sar!2seg!4v1654300745510!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 34343, 116, 120),
(119, 1, 'قسم شرطة اهناسيا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223280.14463775014!2d31.09714521058675!3d29.0243233961948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145a2c8a16df2caf%3A0x8c93ee985bef2db0!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZh9mG2KfYs9mK2Kc!5e0!3m2!1sar!2seg!4v1654300830771!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 2147483647, 116, 120),
(120, 1, 'مركز شرطة الواسطي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111291.04271455166!2d31.238578509940027!3d29.34553551205481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145993f5bf928a55%3A0xbe3f79e535f3a1a6!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNmI2KfYs9i32Yo!5e0!3m2!1sar!2seg!4v1654300912355!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1212121, 116, 117),
(121, 1, 'قسم شرطة دمنهور', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6837.405632596143!2d30.474290324955096!3d31.034528526131783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f66ba5f1ef12a3%3A0xf23656828a45086b!2sDamanhour%20police%20station!5e0!3m2!1sar!2seg!4v1654301080222!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 453234096, 115, 109),
(122, 1, 'كفر الدوار', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3415.1448237750947!2d30.13604067461865!3d31.133492522324445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5df3e0c659d2f%3A0xe2eb2b2ec61f92f9!2z2YLYs9mFINi02LHYt9ipINmD2YHYsSDYp9mE2K_ZiNin2LE!5e0!3m2!1sar!2seg!4v1654301102409!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 454643, 115, 107),
(123, 1, 'قسم شرطة ابو المطامير', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3423.061138193847!2d30.178767485019872!3d30.912915181574647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f6083de2eed1cf%3A0x3ff9569f524f7836!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfYqNmIINin2YTZhdi32KfZhdmK2LE!5e0!3m2!1sar!2seg!4v1654301206778!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 115, 112),
(124, 1, 'قسم شرطة ابو حمص', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3416.3991231471814!2d30.312803085015126!3d31.09863708151114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f673dc993cabf5%3A0x9d7a7b34e434ede5!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfYqNmI2K3Zhdi1!5e0!3m2!1sar!2seg!4v1654301274618!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 115, 106),
(125, 1, 'قسم شرطة ايكو', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d425258.5635594986!2d44.91794279324085!3d33.62261900859768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15564ca6ec977189%3A0xcc4802e05733ba0a!2z2YXYsdmD2LIg2LTYsdi32Kkg2KjYudmC2YjYqNipINin2YTYrNiv2YrYr9ip!5e0!3m2!1sar!2seg!4v1654301348113!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 115, 111),
(126, 1, 'مركز شرطة الدلنحات', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54817.97986003551!2d30.569953152624546!3d30.827198690546606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f63d648a805ad5%3A0x16039ddb9c8ec687!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNiv2YTZhtis2KfYqg!5e0!3m2!1sar!2seg!4v1654301425369!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1126452786, 115, 104),
(127, 1, 'مركز شرطة الرحمانية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218633.82034920334!2d30.922498167187502!3d31.10546700000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f65b4a7d26cb75%3A0x942bd7fcaf67c87b!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNix2K3Zhdin2YbZitip!5e0!3m2!1sar!2seg!4v1654301472546!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 5862532, 115, 114),
(128, 1, 'مركز شرطة المحمودية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3413.2709644189!2d30.529664785012784!3d31.18549948148169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f66762a14625b5%3A0x5f218751ddd2f4ba!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNmF2K3ZhdmI2K_Zitip!5e0!3m2!1sar!2seg!4v1654301543354!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 115, 108),
(129, 1, 'قسم ايتاي البارود', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.040876299411!2d30.667236685020605!3d30.885517481584117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f63900a2763e29%3A0x1f6657c8cbe78b1a!2z2YXYsdmD2LIg2LTYsdi32Kkg2KXZitiq2KfZiSDYp9mE2KjYp9ix2YjYrw!5e0!3m2!1sar!2seg!4v1654301576689!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 115, 105),
(130, 1, 'قسم شرطة بدر', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6900.969810128259!2d31.721806525046645!3d30.137549577393806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1457f749cbebfd55%3A0x43e871f36a00b5f1!2z2YLYs9mFINi02LHYt9ipINmF2K_ZitmG2Kkg2KjYr9ix!5e0!3m2!1sar!2seg!4v1654301668882!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 115, 103),
(131, 1, 'قسم شرطة حوش عيش', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d878930.7624429873!2d31.239923145504083!3d30.6248451613173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f60efbc16281d7%3A0xdd4a8ab5d280!2z2YXYsdmD2LIg2LTYsdi32Kkg2K3ZiNi0INi52YrYs9mJ!5e0!3m2!1sar!2seg!4v1654301725577!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 115, 107),
(132, 1, 'قسم رشيد', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109031.2666306505!2d30.43766655629036!3d31.352712278261684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f6894231df3f25%3A0x2294aa051e4c03c0!2z2YXYsdmD2LIg2LTYsdi32Kkg2LHYtNmK2K8!5e0!3m2!1sar!2seg!4v1654301774801!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 452921714, 115, 103),
(133, 1, 'قسم شبراخيت', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3418.9464926748688!2d30.713408285016822!3d31.02774038153537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f645ebf95e865d%3A0xf633ea7789e38b79!2z2YXYsdmD2LIg2LTYsdi32Kkg2LTYqNix2KfYrtmK2Ko!5e0!3m2!1sar!2seg!4v1654301810424!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 115, 104),
(135, 1, 'قسم كوم حمادة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3428.4049885456757!2d30.697014385023774!3d30.763210981626514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f63b19b3ff405f%3A0xa7ea945401976f13!2z2YXYsdmD2LIg2LTYsdi32Kkg2YPZiNmFINit2YXYp9iv2Yc!5e0!3m2!1sar!2seg!4v1654301854712!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 115, 108),
(136, 1, 'قسم شرطة راس صدر', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3469.3879234413057!2d32.71981678505325!3d29.59240738204902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145642800448e08d%3A0x2edc3fd3313962a3!2z2YLYs9mFINi02LHYt9ipINix2KPYsyDYs9iv2LE!5e0!3m2!1sar!2seg!4v1654302043247!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 118, 125),
(137, 1, 'شرم الشيخ اول', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3527.3282367102743!2d34.30720147531383!3d27.861185727485214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14533a3b5c666929%3A0x58ff9c448dbc31d5!2z2YLYs9mFINi02LHYt9ipINi02LHZhSDYp9mE2LTZitiu!5e0!3m2!1sar!2seg!4v1654302076496!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 118, 127),
(138, 1, 'شرم الشيخ تان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3409.011159638418!2d30.062485785009816!3d31.30343668144189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5d12e7bf69661%3A0x9ad4f5d432912b97!2z2YLYs9mFINi02LHYt9ipINir2KfZhiDYp9mE2YXZhtiq2LLYqQ!5e0!3m2!1sar!2seg!4v1654302142920!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 5528274, 118, 127),
(139, 1, 'قسم سانت كاترين', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.431790586944!2d33.947465585078554!3d28.55679398244771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14548f8ef151f9b5%3A0xe2d48dad4505f3dd!2z2YLYs9mFINi02LHYt9ipINiz2KfZhtiqINmD2KfYqtix2YrZhg!5e0!3m2!1sar!2seg!4v1654302202208!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 118, 128),
(140, 1, 'قسم شرطة دهب', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.4831647491897!2d34.51936088507989!3d28.495107582472244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15ab4b30defee157%3A0xeb533125b2df25cb!2z2YLYs9mFINi02LHYt9ipINiv2YfYqA!5e0!3m2!1sar!2seg!4v1654302241959!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 118, 126),
(141, 1, 'قسم شرطة طور', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3515.098713118831!2d33.63044858508611!3d28.234683382576367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14539a0536d4be53%3A0x5f596c6c15dc40ab!2z2YLYs9mFINi02LHYt9ipINin2YTYt9mI2LE!5e0!3m2!1sar!2seg!4v1654302298111!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 118, 129),
(142, 1, 'قسم شرطة ابورديس', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111777.60188320348!2d33.33268578359373!3d28.8968605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1454190dcc4c4343%3A0xcb92e1568a651c67!2z2YLYs9mFINi02LHYt9ipINij2KjZiNix2K_Zitiz!5e0!3m2!1sar!2seg!4v1654302363056!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 118, 123),
(143, 1, 'مباحث طابا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1778049.9604814223!2d37.133766937500006!3d29.494379000000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1500749b9cd05707%3A0x2fd6e5c9d2521428!2z2YLYs9mFINi02LHYt9ipINi32KfYqNin!5e0!3m2!1sar!2seg!4v1654302457887!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 118, 124),
(144, 1, 'قسم شرطة كرداسة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55264.988257792764!2d31.187078441796874!3d30.035085800000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145844f0f0cb5183%3A0xdf4a8b268b6b932!2z2KfZhNmC2LPZhSDYp9mE2YLYr9mK2YU!5e0!3m2!1sar!2seg!4v1654303501693!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 133),
(145, 1, 'قسم شرطة اوسيم', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55212.296986413356!2d31.221202241796874!3d30.129435400000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145843adf5c4cabd%3A0x61035dc333d46e03!2z2YLYs9mFINij2YjYs9mK2YU!5e0!3m2!1sar!2seg!4v1654303554156!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 132),
(146, 1, 'قسم اطفيح', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111231.39390227382!2d31.328898808523448!3d29.400110140898974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14599520f54efa01%3A0x2496b0182618edcd!2z2YXYsdmD2LIg2LTYsdi32Kkg2KPYt9mB2YrYrQ!5e0!3m2!1sar!2seg!4v1654303591247!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 313),
(147, 1, 'قسم شرطة بولاق الدكور', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27634.187201498928!2d31.20088286962665!3d30.029013340808774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584746d148db35%3A0x765004166468a9b5!2z2YLYs9mFINi02LHYt9ipINio2YjZhNin2YIg2KfZhNiv2YPYsdmI2LE!5e0!3m2!1sar!2seg!4v1654303633257!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1228023307, 119, 312),
(148, 1, 'قسم امبابة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27621.34945605025!2d31.256605020898434!3d30.075030100000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840fec69d39e9%3A0xf92028c157d8c60e!2z2YLYs9mFINi02LHYt9ipINin2YXYqNin2KjYqQ!5e0!3m2!1sar!2seg!4v1654303713213!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 233140894, 119, 311),
(149, 1, 'قسم شرطة الوراق', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55224.50228506619!2d31.287280781689827!3d30.1076042993106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458402c51e2e945%3A0xc37636103b851bee!2z2YLYs9mFINin2YTZiNix2KfZgtiMINin2YTYrNmK2LLYqQ!5e0!3m2!1sar!2seg!4v1654303754478!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 310),
(150, 1, 'قسم العياط', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3468.41998931663!2d31.258491285052596!3d29.620542782038545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1459b7fb11c6ad15%3A0x93febdf04dc60a2f!2z2YLYs9mFINi02LHYt9ipINin2YTYudmK2KfYtw!5e0!3m2!1sar!2seg!4v1654303787699!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 238600200, 119, 136),
(151, 1, 'قسم العمرانية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.52058124778!2d31.192778585043172!3d29.993205081900935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145846688287f8a5%3A0x82ea7685c9c8915c!2z2YLYs9mFINi02LHYt9ipINin2YTYudmF2LHYp9mG2YrYqQ!5e0!3m2!1sar!2seg!4v1654303825484!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1026774332, 119, 309),
(152, 1, 'قسم عجوزة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.6545368102757!2d31.219303885041924!3d30.04676738188151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584129cae26d11%3A0x2e9c9594a2802c17!2z2YLYs9mFINi02LHYt9ipINin2YTYudis2YjYstip!5e0!3m2!1sar!2seg!4v1654303871973!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 53753520, 119, 308),
(153, 1, 'قسم شيخ ذايد', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13816.116204274696!2d31.029868260449202!3d30.036024400000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14585b2f765417a5%3A0xcdf0ff823ba60f8!2z2YLYs9mFINin2YjZhCDYtNix2LfZhyDYp9mE2LTZitiuINiy2KfZitivKNin2YTYrNiv2YrYryk!5e0!3m2!1sar!2seg!4v1654303933583!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 307),
(154, 1, 'قسم دوقي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13815.687069544632!2d31.236456360449207!3d30.0391022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840d517fcaa77%3A0x2133e804807b6ebe!2z2YLYs9mFINi02LHYt9ipINin2YTYr9mC2Yk!5e0!3m2!1sar!2seg!4v1654303972676!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 306),
(155, 1, 'قسم جيزة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55285.8703480166!2d31.248650758095458!3d29.997619666079895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145837fef7982ee7%3A0xf2f2a3778fac5385!2z2YLYs9mFINin2YTYrNmK2LLYqdiMINin2YTYrNmK2LLYqQ!5e0!3m2!1sar!2seg!4v1654304001299!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 130),
(156, 1, 'قسم الاهرام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.854490130026!2d31.137862374870902!3d29.983611524025818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145845844c83f3b9%3A0x85e1206a4dd6a9db!2z2YLYs9mFINi02LHYt9ipINin2YTYp9mH2LHYp9mF!5e0!3m2!1sar!2seg!4v1654304034180!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 233850400, 119, 305),
(157, 1, 'قسم اكتوبر اول', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.030735575277!2d30.943933185043615!3d29.978546681906266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145855e8db059799%3A0xf708be4c9f60f067!2z2YLYs9mFINi02LHYt9ipINij2YjZhCA2INin2YPYqtmI2KjYsQ!5e0!3m2!1sar!2seg!4v1654304123692!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 304),
(158, 1, 'قسم اكتوبر تان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.3935047668597!2d30.90061388504382!3d29.968119181910094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458561dab80102d%3A0x8302f74593f8269e!2z2YLYs9mFINi02LHYt9ipINir2KfZhiA2INij2YPYqtmI2KjYsQ!5e0!3m2!1sar!2seg!4v1654304172946!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1117776047, 119, 304),
(159, 1, 'قسم شرطة المنزلة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3414.295344601684!2d31.939235335013482!3d31.157078581491298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9c6d00ea5f933%3A0xd84277a20b21e2f5!2z2YLYs9mFINi02LHYt9ipINin2YTZhdmG2LLZhNmH2Iwg2KfZhNmF2YbYstmE2YfYjCDZhdix2YPYsiDYp9mE2YXZhtiy2YTYqdiMINin2YTYr9mC2YfZhNmK2KkgNzg3NTEwMg!5e0!3m2!1sar!2seg!4v1654333637237!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 151),
(160, 1, 'قسم شرطة المنصورة اول', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3418.258992694697!2d31.38181768501632!3d31.04688878152865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79dbf28d3194f%3A0x78307504d0df959a!2z2YLYs9mFINij2YjZhCDYtNix2LfYqSDYp9mE2YXZhti12YjYsdip!5e0!3m2!1sar!2seg!4v1654333671016!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 144),
(161, 1, 'قسم شرطة المنصورة تان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3418.388713556253!2d31.39512248501648!3d31.043276581530005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79da3f2091161%3A0x3f84340214e4df2d!2z2YLYs9mFINi02LHYt9ipINin2YTZhdmG2LXZiNix2Kkg2KvYp9mG2Yk!5e0!3m2!1sar!2seg!4v1654333696693!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 144),
(162, 1, 'قسم شرطة ميت غمر', '', 0, 120, 149),
(163, 1, 'قسم شرطة اجا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3422.1322939393553!2d31.2941024350192!3d30.938869481565828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f798248fa20db9%3A0xd04744a840825804!2z2YLYs9mFINi02LHYt9ipINin2KzYp9iMINio2YjYsSDYs9i52YrYr9iMINmF2K_ZitmG2Kkg2KPYrNin2Iwg2YXYsdmD2LIg2KPYrNin2Iwg2KfZhNiv2YLZh9mE2YrYqSA3NTMxOTgx!5e0!3m2!1sar!2seg!4v1654333725880!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 140),
(164, 1, 'قسم شرطة الجمالية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.430038122358!2d31.272800985041567!3d30.05320548187907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f64f174423f%3A0xe584b86480960618!2z2YLYs9mFINi02LHYt9ipINin2YTYrNmF2KfZhNmK2Kk!5e0!3m2!1sar!2seg!4v1654333758928!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 141),
(165, 1, 'قسم شرطة المطرية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.305039892423!2d31.300439385040207!3d30.114083681857085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581571c0d10c07%3A0xd261b12ba8726f42!2z2YLYs9mFINi02LHYt9ipINin2YTZhdi32LHZitip!5e0!3m2!1sar!2seg!4v1654333788608!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 150),
(166, 1, 'قسم شرطة بلقاس', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218113.35582973922!2d31.586893157884074!3d31.3307880375416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f77220abe75469%3A0x68d86efdf42ebfc9!2z2YXYsdmD2LIg2LTYsdi32Kkg2KjZhNmC2KfYsw!5e0!3m2!1sar!2seg!4v1654333857336!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1090508888, 120, 145),
(167, 1, 'قسم شرطة بني عبيد', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d872465.4140496795!2d32.007273214353894!3d31.329494443134948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9d56e294dfe0d%3A0xc6d3cd0744e98322!2z2YXYsdmD2LIg2LTYsdi32Kkg2KjZhtmKINi52KjZitiv!5e0!3m2!1sar!2seg!4v1654333880608!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 146),
(168, 1, 'قسم شرطة ميت سلسبيل', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3490630.173265605!2d33.690714970108836!3d31.308760439069843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9db2739f07277%3A0xd9300927296880d3!2z2LHYptin2LPYqSDZhdix2YPYsiDZiNmF2K_ZitmG2Kkg2YXZitiqINiz2YTYs9mK2YQ!5e0!3m2!1sar!2seg!4v1654333918343!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 148),
(169, 1, 'قسم شرطة طلخا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6836.086390590564!2d31.391647374953198!3d31.05289702610669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79dbe377152e5%3A0x8ec4bcd0238ff71d!2z2YXYsdmD2LIg2LTYsdi32Ycg2LfZhNiu2Kc!5e0!3m2!1sar!2seg!4v1654333963647!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 147),
(170, 1, 'مركز شرطة دمياط اول', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.6068236756746!2d31.8218002850065!3d31.42495708140131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9ef85f9a79343%3A0x6de9ec745a947908!2z2YLYs9mFINi02LHYt9ipINiv2YXZitin2Lcg2KfZiNmE!5e0!3m2!1sar!2seg!4v1654334323833!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 121, 154),
(171, 1, 'مركز كفر سعد', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3407.234134911221!2d31.69143777456965!3d31.35251762201448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9e18ef70775d5%3A0x568858ca5a9ffd3!2z2YLYs9mFINi02LHYt9ipINmD2YHYsSDYs9i52K8!5e0!3m2!1sar!2seg!4v1654334449249!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 121, 158),
(172, 1, 'مركز كفر البطيخ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.0842170642713!2d31.73937728500697!3d31.411805681405692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9e5805be0a5f9%3A0x16077d58ba976b75!2z2YXYsdmD2LIg2LTYsdi32Kkg2YPZgdixINin2YTYqNi32YrYrg!5e0!3m2!1sar!2seg!4v1654334497086!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 121, 157),
(173, 1, 'قسم شرطة دمياط الجديد', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54478.02965769661!2d31.886203256588704!3d31.417518809567106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9ef8892d5fb83%3A0x941f12443028b6fd!2z2YLYs9mFINi02LHYt9ipINiv2YXZitin2Lcg2KfZhNis2K_Zitiv2Kk!5e0!3m2!1sar!2seg!4v1654334523582!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 121, 154),
(174, 1, 'قسم شرطة الزرقا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.429228784778!2d31.637973585012194!3d31.20883558147383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9d8877536c72f%3A0xe467e123337ce27c!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNiy2LHZgtin!5e0!3m2!1sar!2seg!4v1654334569117!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 121, 155),
(175, 1, 'قسم شرطة سوهاج اول', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3569.1892947944743!2d31.7025671851252!3d26.546186083286752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x144f594671fe65c7%3A0xe356a1bf4b08e5b1!2z2YLYs9mFINi02LHYt9ipINiz2YjZh9in2Kwg2KfZiNmE!5e0!3m2!1sar!2seg!4v1654335163876!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 932333039, 122, 159),
(176, 1, 'قسم شرطة سوهاج ثان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14274.892416906034!2d31.706774360449213!3d26.56116189999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x144f59333e8248b7%3A0xa82d2a308044ee6a!2z2YLYs9mFINir2KfZhiDYs9mI2YfYp9is!5e0!3m2!1sar!2seg!4v1654335196748!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1096100720, 122, 159),
(177, 1, 'قسم شرطة طهطها', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228398.41569970734!2d31.838105852391877!3d26.56109313820841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14458dfa97d17415%3A0x7677f1df9ec2918e!2z2YLYs9mFINi02LHYt9ipINi32YfYt9in!5e0!3m2!1sar!2seg!4v1654335233827!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 122, 161),
(178, 1, 'قسم شرطة اخميم', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57110.983805171185!2d31.821784479442854!3d26.538242122163727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x144f5d06b0a2d4a9%3A0x984b3bbb39854861!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfYrtmF2YrZhQ!5e0!3m2!1sar!2seg!4v1654335259276!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 122, 167),
(179, 1, 'قسم شرطة المرغا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57032.48315906816!2d31.67539554179688!3d26.695503900000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14458aeccc9ab055%3A0x4b59f7d7c1f21523!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNmF2LHYp9i62Kk!5e0!3m2!1sar!2seg!4v1654335312425!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 932530330, 122, 166),
(180, 1, 'قسم شرطة ساقلته', '', 0, 122, 165),
(181, 1, 'قسم شرطة دار السلام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.2075857233976!2d31.248464585043784!3d29.973463681908306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584791584776d3%3A0x329bc1e196977095!2z2YLYs9mFINi02LHYt9ipINiv2KfYsSDYp9mE2LPZhNin2YU!5e0!3m2!1sar!2seg!4v1654335358052!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 122, 160),
(182, 1, 'قسم شرطة البلينا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229048.61170578352!2d32.282322067187515!3d26.23294030000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x144f3552c2f78bcd%3A0x4dd5c279f599bbcd!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNio2YTZitmG2Kc!5e0!3m2!1sar!2seg!4v1654335383524!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 122, 163);
INSERT INTO `departments` (`department_code`, `status`, `department_name`, `location`, `department_phone`, `governorate_code`, `cites_code`) VALUES
(183, 1, 'قسم شرطة الزقازيق ثان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3434.4696952284967!2d31.50714958502802!3d30.592512381686266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7f11b426b87e3%3A0x6b53a698068ad918!2z2YLYs9mFINi02LHYt9ipINin2YTYstmC2KfYstmK2YIg2KvYp9mG2Yk!5e0!3m2!1sar!2seg!4v1654336087466!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 286),
(184, 1, 'قسم شرطة العاشر من رمضان اول', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3445.291207213582!2d31.74513027480547!3d30.285770423566664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1457fdc70c3fdd0d%3A0xb0a342acc19cf2d4!2z2YLYs9mFINi02LHYt9ipINij2YjZhCDYp9mE2LnYp9i02LEg2YXZhiDYsdmF2LbYp9mGINin2YTZhtis2K_YqQ!5e0!3m2!1sar!2seg!4v1654336129138!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 554364287, 124, 294),
(185, 1, 'قسم شرطة العاشر من رمضان ثان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27562.3299901599!2d31.76045120905235!3d30.285769240233112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1457fdf0392d1571%3A0x6d5a7afc7ed0fc62!2z2YLYs9mFINi02LHYt9ipINir2KfZhiDYp9mE2LnYp9i02LEg2YXZhiDYsdmF2LbYp9mG!5e0!3m2!1sar!2seg!4v1654336158129!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 294),
(186, 1, 'قسم شرطة فاقوس', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3429.5764652120965!2d31.796832874708105!3d30.730305022907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f824bedd2f414d%3A0x50589d2e930d299e!2z2YXYsdmD2LIg2LTYsdi32Kkg2YHYp9mC2YjYsw!5e0!3m2!1sar!2seg!4v1654336202810!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 288),
(187, 1, 'قسم شرطة الصالحية الجديدة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3433.1514692041833!2d31.9347249651123!3d30.629688500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f83e594ce6fa9d%3A0xba4b777e63ce9ea0!2z2YLYs9mFINi02LHYt9ipINin2YTYtdin2YTYrdmK2Kkg2KfZhNis2K_Zitiv2Kk!5e0!3m2!1sar!2seg!4v1654336246498!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 295),
(188, 1, 'قسم شرطة بلبيس', '', 0, 124, 290),
(189, 1, 'مركز شرطة ديرب نجم', '', 0, 124, 300),
(190, 1, 'قسم شرطة الاربعين', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13828.566414621417!2d32.507890460449225!3d29.946605299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14562e2ae11844b1%3A0x1faad9f4bdd71de1!2z2YLYs9mFINi02LHYt9ipINi52KrYp9mC2Kk!5e0!3m2!1sar!2seg!4v1654336766016!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 123, 171),
(191, 1, 'قسم شرطة فيصل', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13822.276685277677!2d32.5191332200251!3d29.99180921042185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14562f0b8f11bd15%3A0xe368893c6a7ef98d!2z2YLYs9mFINmB2YrYtdmE!5e0!3m2!1sar!2seg!4v1654336813216!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1202186603, 123, 170),
(192, 1, 'قسم شرطة السويس', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13825.426390154254!2d32.572289860449224!3d29.969180200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1456250439a6e583%3A0xa5214d3e33b275f8!2z2YLYs9mFINi02LHYt9ipINin2YTYs9mI2YrYsw!5e0!3m2!1sar!2seg!4v1654336845152!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 123, 168),
(193, 1, 'قسم شرطة عناقة', '', 0, 123, 169),
(194, 1, 'قسم شرطة الحسنة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3438.997610403839!2d33.78769208503144!3d30.464505781731415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14feff558ad59603%3A0xaab1c1e3e7aaecf0!2z2YLYs9mFINi02LHYt9ipINin2YTYrdiz2YbZhw!5e0!3m2!1sar!2seg!4v1654337233104!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 125, 178),
(195, 1, 'قسم شرطة الزويد', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219144.57769318917!2d34.204227708292635!3d30.88291146153153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fe715555555555%3A0xdb8f005fba6d9854!2z2YLYs9mFINi02LHYt9ipINin2YTYtNmK2K4g2LLZiNmK2K8!5e0!3m2!1sar!2seg!4v1654337297215!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 125, 174),
(196, 1, 'قسم العريش اول', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109286.26857882127!2d33.87331656234274!3d31.13207405441861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fdd351e7b28f99%3A0x830f1bf739c3a4be!2z2YLYs9mFINi02LHYt9ipINin2YTYudix2YrYtCDYp9mI2YQ!5e0!3m2!1sar!2seg!4v1654337323791!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 125, 175),
(197, 1, 'قسم العريش ثان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3415.4916999417323!2d33.71914682462086!3d31.123856772338296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fc2bdc7060a207%3A0x50343b26e2fbf63e!2z2YLYs9mFINir2KfZhiDYp9mE2LnYsdmK2LTYjCDYtNmF2KfZhCDYs9mK2YbYp9ih!5e0!3m2!1sar!2seg!4v1654337348256!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 125, 175),
(198, 1, 'قسم العريش ثالت', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6830.6377085648055!2d33.81133782494509!3d31.128658526003463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fdd351e7b28f99%3A0xbcf2b4dce3709c40!2z2YLYs9mFINi02LHYt9ipINin2YTYudix2YrYtCDYq9in2YTYqw!5e0!3m2!1sar!2seg!4v1654337374670!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 125, 175),
(199, 1, 'قسم شرطة النخل', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3458.409152323215!2d33.751520365112306!3d29.910121000000018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ff79d23103039d%3A0xf1c14d92cec59e03!2z2YLYs9mFINi02LHYt9ipINmG2K7ZhCAsINi02YXYp9mEINiz2YrZhtin2KE!5e0!3m2!1sar!2seg!4v1654337551086!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 125, 177),
(200, 1, 'قسم شرطة بئر العبد', '', 0, 125, 176),
(201, 1, 'قسم شرطة طنطا اول', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3427.60756145039!2d30.999591782556152!3d30.78559200000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7c9666c6cd745%3A0xa184770b7f25dd0a!2z2YLYs9mFINij2YjZhCDYt9mG2LfYpw!5e0!3m2!1sar!2seg!4v1654338318013!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 233),
(202, 1, 'قسم شرطة طنطا ثان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3427.619008568928!2d31.00900587469583!3d30.78527082282654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7c96ea8a8659d%3A0xf87eca3e3d5abf2f!2z2YLYs9mFINir2KfZhiDYt9mG2LfYpw!5e0!3m2!1sar!2seg!4v1654338348908!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 233),
(203, 1, 'قسم شرطة زفتي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109755.266648488!2d31.288728973475344!3d30.722558498744878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7c1eb9094f157%3A0xd800c0893ccfb926!2z2YLYs9mFINi02LHYt9ipINir2KfZhtmKINiy2YHYqtmK!5e0!3m2!1sar!2seg!4v1654338389222!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 235),
(204, 1, 'قسم شرطة المحلي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13683.730961319221!2d31.184070719624724!3d30.97235910486637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7a4a63b9a7601%3A0x139e1c58b4b043c0!2z2YLYs9mFINi02LHYt9ipINin2YjZhCDYp9mE2YXYrdmE2Kk!5e0!3m2!1sar!2seg!4v1654338420292!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 230),
(205, 1, 'مركز شرطة السنطة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218939.86936576467!2d31.315401750210174!3d30.972283245272394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7c6f4a2199499%3A0x72f3fe91653ada5d!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNiz2YbYt9ip!5e0!3m2!1sar!2seg!4v1654338447412!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 229),
(206, 1, 'قسم شرطة سمور', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d178048.968167819!2d19.297193060073905!3d45.79092465899121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f6355e62fb0501%3A0x48dfd051a581ce0e!2z2YXYsdmD2LIg2LTYsdi32Kkg2YPZgdixINin2YTYstmK2KfYqg!5e0!3m2!1sar!2seg!4v1654338499636!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 236),
(207, 1, 'مباحث المحلي الكبري', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13683.308006023712!2d31.210627760449206!3d30.975309599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7a340566b2bef%3A0xec36ebaecc76a6c8!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNmF2K3ZhNipINin2YTZg9io2LHZiQ!5e0!3m2!1sar!2seg!4v1654338535084!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 228),
(208, 1, 'قسم ثان المحلة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3421.15128299837!2d31.16774547465581!3d30.966260172564276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7a4ace820ecfb%3A0x705d7a7694e49992!2z2YLYs9mFINi02LHYt9ipINir2KfZhiDYp9mE2YXYrdmE2KnYjCDYtNin2LHYuSDYp9mE2KjYrdix2Iwg2KfZhNmF2K3ZhNipINin2YTZg9io2LHZiSAo2YLYs9mFIDIp2Iwg2YXYsdmD2LIg2KfZhNmF2K3ZhNmHINin2YTZg9io2LHZidiMINin2YTYutix2KjZitipIDY3NDMwMzE!5e0!3m2!1sar!2seg!4v1654338554140!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 230),
(209, 1, 'قسم الخارجة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115295.27383499777!2d30.628644805085962!3d25.439022193866748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x144769b0ef1dd153%3A0x900f5c5b2199c3c3!2z2YLYs9mFINi02LHYt9ipINin2YTYrtin2LHYrNip!5e0!3m2!1sar!2seg!4v1654338987474!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 135, 179),
(210, 1, 'قسم الفرافرة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644460.12255256!2d30.135563073582283!3d26.870372078727943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x146a2dfa2d58bb5d%3A0x5a4ac3845d2ba187!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNmB2LHYp9mB2LHYqQ!5e0!3m2!1sar!2seg!4v1654339034139!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 135, 183),
(211, 1, 'قسم بلاط', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.4677557365203!2d29.27251388514688!3d25.556100283730512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14407949b457cb97%3A0xf380035716f73a69!2z2YLYs9mFINi02LHYt9ipINio2YTYp9i3!5e0!3m2!1sar!2seg!4v1654339058331!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 135, 181),
(212, 1, 'قسم الداخلة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615677.889281394!2d32.39052239466521!3d27.750137261411346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x143ff46c6ead0ba9%3A0xe91edbc7c1276b13!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNiv2KfYrtmE2Kk!5e0!3m2!1sar!2seg!4v1654339090875!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 922821300, 135, 180),
(213, 1, 'مركز شرطة باريس', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.16505690484!2d30.603517075920248!3d24.686852133395245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1438e73ab791a795%3A0x7180bcf29d6008c0!2z2YLYs9mFINi02LHYt9ipINio2KfYsdmK2LM!5e0!3m2!1sar!2seg!4v1654339147020!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 135, 182),
(214, 1, 'مباحث طامية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3473.318203015609!2d30.955822285056083!3d29.477913182091957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14599ee32f331581%3A0xd61e884a2497a145!2z2YXYsdmD2LIg2LTYsdi32Kkg2LfYp9mF2YrYqQ!5e0!3m2!1sar!2seg!4v1654339734026!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 842610122, 127, 225),
(215, 1, 'مباحث الفيوم الجديدة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55664.67959813909!2d30.916945941796875!3d29.31042970000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14597927cb2a4b13%3A0x8e4e74731b22f3e1!2z2YLYs9mFINi02LHYt9ipINin2YTZgdmK2YjZhQ!5e0!3m2!1sar!2seg!4v1654339767353!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 127, 222),
(216, 1, 'قسم اول الفيوم', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55664.684581632166!2d30.916945977311368!3d29.310420563197905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14597927cb2a4b13%3A0x8e4e74731b22f3e1!2z2YLYs9mFINi02LHYt9ipINin2YTZgdmK2YjZhQ!5e0!3m2!1sar!2seg!4v1654339799098!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 127, 222),
(217, 1, 'قسم إطسا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55702.49764341286!2d30.86484354179686!3d29.241018700000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14597de5175f5e9d%3A0xd09133d2e6fc0e23!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfYt9iz2Kc!5e0!3m2!1sar!2seg!4v1654339826033!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 127, 224),
(218, 1, 'مباحث سنورس', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55637.17860575353!2d30.890757012203707!3d29.360810926701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145977ba48b4d9f3%3A0x8daf244e35ceb23b!2z2YXYsdmD2LIg2LTYsdi32Kkg2LPZhtmI2LHYsw!5e0!3m2!1sar!2seg!4v1654339862697!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 127, 223),
(219, 1, 'مباحث الفيوم ثان', '', 0, 127, 222),
(220, 1, 'مباحث ابشواي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3479.0216807432157!2d30.84827478506019!3d29.311039682155084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1459792647ef9dcf%3A0x3be36341fa10f31c!2z2YXYr9mK2LHZitipINij2YXZhiDYp9mE2YHZitmI2YU!5e0!3m2!1sar!2seg!4v1654339921730!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 127, 226),
(221, 1, 'قسم يوسف الصديق', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3477.2700574028413!2d30.44936167500367!3d29.362380924996078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14595ed7191e7545%3A0x2e6f35bb191a9d0b!2z2YXYsdmD2LIg2LTYsdi32Kkg2YrZiNiz2YEg2KfZhNi12K_ZitmC!5e0!3m2!1sar!2seg!4v1654339637122!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 127, 227),
(222, 1, 'قسم الشواوشة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.8498104614314!2d30.61211588505864!3d29.374686482130855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145966a49ff66cd5%3A0x98dc13b2b18750b4!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNi02YjYp9i02YbYqQ!5e0!3m2!1sar!2seg!4v1654339673378!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 127, 226),
(223, 1, 'قسم شرطة الخصوص', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.7640154808705!2d31.31957998503914!3d30.158162181841117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145814679bfb010f%3A0x641a855657bc5516!2z2YLYs9mFINi02LHYt9ipINin2YTYrti12YjYtQ!5e0!3m2!1sar!2seg!4v1654340217256!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 129, 220),
(224, 1, 'قسم شرطة اول بنها', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110010.00097510577!2d31.275863379522555!3d30.498055529499208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145875f8e9bbf445%3A0x55dc2aa6604b379e!2z2YLYs9mFINi02LHYt9ipINij2YjZhCDZhdiv2YrZhtipINio2YbZh9in!5e0!3m2!1sar!2seg!4v1654340258319!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 129, 212),
(225, 1, 'قسم شرطة بنها ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110010.00097510577!2d31.275863379522555!3d30.498055529499208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7df4f54d52751%3A0x16a4846795e0964b!2z2YLYs9mFINi02LHYt9ipINio2YbZh9inINir2KfZhg!5e0!3m2!1sar!2seg!4v1654340289631!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 129, 212),
(226, 1, 'قسم شرطة مدينة العبور', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.034111873363!2d31.478042574816225!3d30.236103723641623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458053ebb3f40f3%3A0x34236afe935d2e62!2z2YLYs9mFINi02LHYt9ipINmF2K_ZitmG2Kkg2KfZhNi52KjZiNix!5e0!3m2!1sar!2seg!4v1654340350216!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 244781012, 129, 218),
(227, 1, 'قسم شرطة أول شبرا الخيمة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.0899013016597!2d31.245771685040072!3d30.120240881854794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14586aa3db385cd3%3A0xa8368a4ee7c51a77!2z2YLYs9mFINi02LHYt9ipINij2YjZhCDYtNio2LHYpyDYp9mE2K7ZitmF2Kk!5e0!3m2!1sar!2seg!4v1654340457093!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 129, 218),
(228, 1, 'قسم شرطة ثان شبرا الخيمة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3450.688494169989!2d31.272638885039733!3d30.131725981850714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14586ab319984fb9%3A0x6ead7f2b002a0a69!2z2YLYs9mFINi02LHYt9ipINi02KjYsdinINin2YTYrtmK2YXYqSDYq9in2YY!5e0!3m2!1sar!2seg!4v1654340507056!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 129, 214),
(229, 1, 'قسم شرطة طوخ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.738666556838!2d31.199446585034018!3d30.358376181769195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458739450ae3523%3A0xa5782643de7fc4c8!2z2YXYsdmD2LIg2LTYsdi32Kkg2LfZiNiu!5e0!3m2!1sar!2seg!4v1654340581767!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1201148599, 129, 221),
(230, 1, 'قسم شرطة قليوب', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.1455169014694!2d31.2194975748293!3d30.175836923732735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14586ba7bb31dcbb%3A0x835b25f3aea54eec!2z2YLYs9mFINi02LHYt9ipINmC2YTZitmI2Kg!5e0!3m2!1sar!2seg!4v1654340602415!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 129, 213),
(231, 1, 'قسم قها', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3445.2736705787634!2d31.206627285035765!3d30.286269781794957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14586dc1858570d5%3A0x5219dbb25c8a681e!2z2YLYs9mFINi02LHYt9ipINmC2YfYpw!5e0!3m2!1sar!2seg!4v1654340647359!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 129, 219),
(232, 1, 'قسم الخانكة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.510488603532!2d31.125297285038208!3d30.193974281828204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145868fdc8a201ab%3A0x153b641e76cd9ade!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNmC2YbYp9i32LEg2KfZhNiu2YrYsdmK2Kk!5e0!3m2!1sar!2seg!4v1654340727567!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 227926071, 129, 215),
(233, 1, 'قسم شبين القناطر', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220478.09406359008!2d31.453154723498365!3d30.29490940871809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14580c5a014dae0b%3A0xecb077fc562c3f3c!2z2YXYsdmD2LIg2LTYsdi32Ycg2LTYqNmK2YYg2KfZhNmC2YbYp9i32LE!5e0!3m2!1sar!2seg!4v1654340788727!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 32277617, 129, 217),
(234, 1, 'قسم شرطة الوقف', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d917312.0656581337!2d33.542426568749995!3d26.090748300000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14492b0c848fc8e3%3A0x88b423624202c093!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNmI2YLZgQ!5e0!3m2!1sar!2seg!4v1654341114950!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 130, 314),
(235, 1, 'قسم ابو تشت', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57324.66946795079!2d32.104496631942936!3d26.105712821183847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1448cea5f4e94f99%3A0x7f252a63623a4234!2z2YXYsdmD2LIg2LTYsdi32Kkg2KPYqNmIINiq2LTYqg!5e0!3m2!1sar!2seg!4v1654341160893!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 130, 315),
(236, 1, 'قسم نجح حمادي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57324.66946795079!2d32.104496631942936!3d26.105712821183847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1448d12075a994f5%3A0x8782da20e3672a58!2z2YXYsdmD2LIg2LTYsdi32Kkg2YbYrNi5INit2YXYp9iv2Yo!5e0!3m2!1sar!2seg!4v1654341207974!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 130, 316),
(237, 1, 'قسم شرطة نقاذة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114837.07057003267!2d32.83471594419319!3d25.91359607242361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14494980a9896eaf%3A0xd30bddfe7f335193!2z2YXYsdmD2LIg2LTYsdi32Kkg2YbZgtin2K_YqQ!5e0!3m2!1sar!2seg!4v1654341257205!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 130, 318),
(238, 1, 'قسم شرطة الدسوق', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3415.173198116138!2d30.649308074618872!3d31.13270442232563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f65b128557085f%3A0xa12460620cb7072b!2z2YLYs9mFINi02LHYt9ipINiv2LPZiNmC!5e0!3m2!1sar!2seg!4v1654341672334!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 131, 200),
(239, 1, 'قسم شرطة قوه', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218318.7681128008!2d30.72405041792403!3d31.24203485972181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f65def4d7b351f%3A0xe9090ea447075f7!2z2YXYsdmD2LIg2LTYsdi32Kkg2YHZiNip!5e0!3m2!1sar!2seg!4v1654341727964!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 131, 202),
(240, 1, 'قسم شرطة مطويس', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54536.024846333894!2d30.552017299328025!3d31.317518947755723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f66008f1ade683%3A0x74908fde5c32f2e0!2z2YXYsdmD2LIg2LTYsdi32Kkg2YXYt9mI2KjYsw!5e0!3m2!1sar!2seg!4v1654341763496!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 131, 203),
(241, 1, 'قسم شرطة بندر بك', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6832.084983890426!2d30.95601843022461!3d31.108550999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7ab872b5f223b%3A0xfebec38531b61bdc!2z2YLYs9mFINi02LHYt9ipINmD2YHYsSDYp9mE2LTZitiu!5e0!3m2!1sar!2seg!4v1654341893909!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 131, 200),
(242, 1, 'قسم اول كفر الشيخ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6832.084983890426!2d30.95601843022461!3d31.108550999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7ab872b5f223b%3A0xfebec38531b61bdc!2z2YLYs9mFINi02LHYt9ipINmD2YHYsSDYp9mE2LTZitiu!5e0!3m2!1sar!2seg!4v1654341893909!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 131, 200),
(243, 1, 'قسم ثان كفر الشيخ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6831.676356096019!2d30.939152230224618!3d31.114229399999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7ab7cad72862f%3A0x3616853da66a0fb1!2z2YLYs9mFINir2KfZhtmJINmD2YHYsdin2YTYtNmK2K4!5e0!3m2!1sar!2seg!4v1654341944995!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 131, 200),
(244, 1, 'قسم سيدي غازي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.3878183207066!2d31.052859085012205!3d31.209983231473366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7064f2cad5113%3A0x8b92bf57feddb1b5!2z2YbZgti32Kkg2LTYsdi32Kkg2LPZitiv2Yog2LrYp9iy2YrYjCDYtNin2LHYuSDYudio2K_Yp9mE2YTZhyDYqNmGINi52YXYsdiMINiz2YrYr9mKINi62KfYstmK2Iwg2YPZgdixINin2YTYtNmK2K7YjCA2ODc4NTYz!5e0!3m2!1sar!2seg!4v1654341981468!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 131, 201),
(245, 1, 'قسم شرطة الحمام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.1227973194964!2d31.30264808504011!3d30.11929948185514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458157324be2585%3A0x1786565092696411!2z2YLYs9mFINi02LHYt9ipINin2YTYrdmF2KfZhQ!5e0!3m2!1sar!2seg!4v1654342446763!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 132, 196),
(246, 1, 'قسم شرطة مارينا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3426.387598072131!2d29.023270085022123!3d30.81980378160682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145fed15ddaaa831%3A0xc19dd4787b63f068!2z2YLYs9mFINi02LHYt9ipINmF2KfYsdmK2YbYpw!5e0!3m2!1sar!2seg!4v1654342485004!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 132, 196),
(247, 1, 'قسم شرطة الضبعة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3418.8369097247096!2d28.44951347464147!3d31.030793222471317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14601b015d773ee1%3A0x476669cd765a087!2z2YLYs9mFINi02LHYt9ipINin2YTYttio2LnYqQ!5e0!3m2!1sar!2seg!4v1654342536930!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 132, 195),
(248, 1, 'قسم شرطة قويسنا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27483.508622934678!2d31.193755489708046!3d30.565162281263973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7dbefb4931e87%3A0x95741ae9da005b87!2z2YXYsdmD2LIg2LTYsdi32Kkg2YLZiNmK2LPZhtin!5e0!3m2!1sar!2seg!4v1654342763570!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 133, 282),
(249, 1, 'قسم الباجور', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3440.31190033173!2d31.039103785032268!3d30.427258981744785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145879832248c673%3A0x800ed89c7e79513c!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfZhNio2KfYrNmI2LE!5e0!3m2!1sar!2seg!4v1654342818562!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 133, 281),
(251, 1, 'قسم اشمون', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3445.0183466641706!2d30.986556474803738!3d30.29353932355502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14586389356dece5%3A0xd2dd9b90859c95f1!2z2YXYsdmD2LIg2LTYsdi32Kkg2KfYtNmF2YjZhg!5e0!3m2!1sar!2seg!4v1654342857514!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 133, 280),
(252, 1, 'قسم شرطة منوف', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6878.339057695446!2d30.93524377501397!3d30.45963597693242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14587e7ab680f82b%3A0x45e02d950f798d4e!2z2YXYsdmD2LIg2LTYsdi32Kkg2YXZhtmI2YEgKCDYp9mE2KPYsdmK2KfZgSAp!5e0!3m2!1sar!2seg!4v1654343233785!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 133, 277),
(253, 1, 'قسم شرطة سوس الليان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3439.7283070091426!2d30.96278057477092!3d30.44380302333007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14587e9c0631ea79%3A0x546e0c32d0a0fb7f!2z2YLYs9mFINi02LHYt9ipINiz2LHYsyDYp9mE2YTZitin2YY!5e0!3m2!1sar!2seg!4v1654343302465!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 133, 276),
(254, 1, 'مركز شرطة مخاعة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7002.4136547798935!2d30.849502825192836!3d28.65352517963789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145bada00d7a4c41%3A0x56b3adfa78aa23fc!2z2YXYsdmD2LIg2LTYsdi32Kkg2YXYutin2LrYqQ!5e0!3m2!1sar!2seg!4v1654343424432!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 134, 184),
(255, 1, 'قسم شرطة دير هواس', 'https://goo.gl/maps/sPEdrmE4bJSaYZ5e9', 1145880204, 134, 189),
(256, 1, 'قسم شرطة العدوة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.115233755821!2d36.32221768495!3d33.52438948075294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1518e6e920a60189%3A0x2d2c6a8fd585b94!2z2YLYs9mFINi02LHYt9ipINin2YTYudio2KfYs9mK2YrZhtiMINiv2YXYtNmC2Iwg2LPZiNix2YrYpw!5e0!3m2!1sar!2seg!4v1654343927855!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 134, 190),
(257, 1, 'قسم شرطة بني مزاز', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56102.438587953104!2d30.874696341796867!3d28.497538199999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b0151076a2f35%3A0x76abdce7d926db1b!2z2YXYsdmD2LIg2LTYsdi32Kkg2KjZhtmKINmF2LLYp9ix!5e0!3m2!1sar!2seg!4v1654343984975!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 134, 184),
(258, 1, 'قسم شرطة مطاي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.0247106990487!2d30.793434875200365!3d28.41851122653748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b0562ae56e7eb%3A0x920f450904808ccd!2z2YLYs9mFINi02LHYt9ipINmF2LfYp9mK!5e0!3m2!1sar!2seg!4v1654344044607!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 134, 185),
(259, 1, 'قسم شرطة شرق السمالوط', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112288.80976319144!2d30.861286623832836!3d28.418493290537956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b17ce0b9086dd%3A0x68e1e0bd1bd607ac!2z2YLYs9mFINi02LHYt9ipINiz2YXYp9mE2YjYtyDYtNix2YI!5e0!3m2!1sar!2seg!4v1654344110903!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 134, 186),
(260, 1, 'قسم شرطة غرب السمالوط', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112416.51649530412!2d30.85687618359376!3d28.297835200000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b19de913d6c69%3A0xcb72ff1c1095bced!2z2YXYsdmD2LIg2LTYsdi32Ycg2LPZhdin2YTZiNi3INi62LHYqA!5e0!3m2!1sar!2seg!4v1654344150302!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 134, 186),
(261, 1, 'قسم المنيا الجديد', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56316.52782251855!2d30.82222502014923!3d28.092161654174788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b25a8ae995895%3A0x2724fa43f6a57b23!2z2YLYs9mFINi02LHYt9ipINio2YbYr9ixINin2YTZhdmG2YrZgNin!5e0!3m2!1sar!2seg!4v1654344224830!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 134, 187),
(262, 1, 'قسم  شرطة شرق المنيا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56316.52782251855!2d30.82222502014923!3d28.092161654174788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b257dfd8f1e05%3A0x936ce97a2698b959!2z2YLYs9mFINi02LHYt9ipINin2YTZhdmG2YrYpyDYq9in2YY!5e0!3m2!1sar!2seg!4v1654344282822!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 134, 187),
(263, 1, 'قسم شرطة ابوقرقاص', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56409.66318600045!2d30.80146677123861!3d27.914124672767414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b2b49bd1202b1%3A0x57cc4e31aa712251!2z2YXYsdmD2LIg2LTYsdi32Kkg2KPYqNmIINmC2LHZgtin2LU!5e0!3m2!1sar!2seg!4v1654344329894!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 134, 188),
(264, 1, 'قسم شرطة 15 مايو', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3461.1400951536575!2d31.37830497490362!3d29.83137772426024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458315f772cb0bd%3A0x9ac2279adedb097d!2z2YbZgti32Kkg2LTYsdi32KkgMTUg2YXYp9mK2Yg!5e0!3m2!1sar!2seg!4v1654350596216!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 242),
(265, 1, 'قسم الازبكية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55253.18328190325!2d31.278417457713243!3d30.056247260613475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458415784ac9351%3A0x117594665bffe5db!2z2YLYs9mFINi02LHYt9ipINin2YTYo9iy2KjZg9mK2Kk!5e0!3m2!1sar!2seg!4v1654350792880!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 261),
(266, 1, 'قسم السيدة زينب', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.1896259870805!2d31.248052474860554!3d30.031417223952467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840b4ce2994db%3A0x97f5e0778f3b0352!2z2YLYs9mFINi02LHYt9ipINin2YTYs9mK2K_YqSDYstmK2YbYqA!5e0!3m2!1sar!2seg!4v1654350846424!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 238),
(268, 1, 'قسم شرطة مصر الجديدة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.893626502415!2d31.330139185040608!3d30.097232681863122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458158c7e5a1ee3%3A0x293fd4ca8e742a41!2z2YLYs9mFINi02LHYt9ipINmF2LXYsSDYp9mE2KzYr9mK2K_YqQ!5e0!3m2!1sar!2seg!4v1654350913464!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1280000399, 128, 239),
(269, 1, 'قسم شرطة المقطم،', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.895427935023!2d31.335119174864904!3d30.011158923983636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583eca6349ec0d%3A0xc38d66f5ba9b81f5!2sMokattam%20Police%20Department!5e0!3m2!1sar!2seg!4v1654350993374!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 240),
(270, 1, 'قسم شرطة الخلفية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.1983679995624!2d31.25774278504231!3d30.031166381887203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840ac6241d8c1%3A0x7cde839b4f552425!2z2YLYs9mFINi02LHYt9ipINin2YTYrtmE2YrZgdip!5e0!3m2!1sar!2seg!4v1654351082946!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 241),
(272, 1, 'قسم شرطة المعصرة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3459.0986359525405!2d31.305698185045745!3d29.8902583819388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583654b19070c1%3A0x1291f676dcafd052!2z2YLYs9mFINi02LHYt9ipINin2YTZhdi52LXYsdip!5e0!3m2!1sar!2seg!4v1654351220926!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1095874414, 128, 243),
(273, 1, 'قسم شرطة المعادي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.675065528216!2d31.264509485044055!3d29.960023681913096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145847f58ca978fb%3A0xc260c9c527b6197a!2z2YLYs9mFINi02LHYt9ipINin2YTZhdi52KfYr9mK!5e0!3m2!1sar!2seg!4v1654351407326!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1000978884, 128, 245),
(274, 1, 'قسم شرطة زهراء المعادي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.6651787689407!2d31.314002785044107!3d29.960307981913033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145839b2660b0f39%3A0xa1fb4a5d8629c740!2z2YbZgti32Kkg2LTYsdi32Kkg2LLZh9ix2KfYoSDYp9mE2YXYudin2K_Zig!5e0!3m2!1sar!2seg!4v1654351444520!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 245),
(275, 1, 'قسم طرة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110644.22113717455!2d31.4626005272677!3d29.932497409548443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583793ae77a5f9%3A0xf5cd7d30e2aad640!2z2YLYs9mFINi32LHYqdiMINmF2K3Yp9mB2LjYqSDYp9mE2YLYp9mH2LHYqeKArA!5e0!3m2!1sar!2seg!4v1654351512782!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 246),
(276, 1, 'قسم شرطة حي حلوان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110644.26230374034!2d31.46260066846184!3d29.93246038567582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458369ddc373f1b%3A0x55f525a85ca51fb8!2z2YLYs9mFINi02LHYt9ipINit2YTZiNin2YY!5e0!3m2!1sar!2seg!4v1654351594517!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 247),
(277, 1, 'الشرطة الدورية - حلوان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d110644.26228781354!2d31.4626007!3d29.9324604!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145836a37e5a0447%3A0x912cf8d3bd714a52!2z2KfZhNi02LHYt9ipINin2YTYr9mI2LHZitipIC0g2K3ZhNmI2KfZhg!5e0!3m2!1sar!2seg!4v1654351695951!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1221222276, 128, 247),
(278, 1, 'قسم شرطةحي الزيتون', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55228.68860590947!2d31.382222941796858!3d30.100113099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458158113215c81%3A0x3fbe28fe272edb35!2z2YLYs9mFINi02LHYt9ipINin2YTYstmK2KrZiNmG!5e0!3m2!1sar!2seg!4v1654351783046!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 249),
(279, 1, 'قسم شرطة حدائق القبة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.013073302526!2d31.28844267484705!3d30.093811923857338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fe7ddc871c9%3A0xe67f346586c1ebc6!2z2YLYs9mFINi02LHYt9ipINit2K_Yp9im2YIg2KfZhNmC2KjYqQ!5e0!3m2!1sar!2seg!4v1654351861159!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1098345343, 128, 250),
(280, 1, 'قسم شرطة حي الساحل', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.3211852523727!2d31.247847385040984!3d30.084986481867656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458406f2b80819b%3A0x6e0106ee030f0d18!2z2YLYs9mFINi02LHYt9ipINin2YTYs9in2K3ZhA!5e0!3m2!1sar!2seg!4v1654351918089!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 251),
(281, 1, 'قسم حدائق الشرطة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55238.048355990235!2d31.278802257536263!3d30.083358208092225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458406bd92df629%3A0xe3fdce63861631cd!2z2YbZgti32Kkg2LTYsdi32Kkg2K3Yr9in2KbZgiDYtNio2LHYpw!5e0!3m2!1sar!2seg!4v1654351970213!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 252),
(282, 1, 'قسم اول شبرا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55238.048355990235!2d31.278802257536263!3d30.083358208092225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14586aa3db385cd3%3A0xa8368a4ee7c51a77!2z2YLYs9mFINi02LHYt9ipINij2YjZhCDYtNio2LHYpyDYp9mE2K7ZitmF2Kk!5e0!3m2!1sar!2seg!4v1654352021195!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 252),
(283, 1, 'قسم روض الفرج', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13810.74478157272!2d31.253591206009453!3d30.07452823215309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584058ec49f1fb%3A0xad8f52e308c9a3ac!2z2YLYs9mFINix2YjYtiDYp9mE2YHYsdis2Iwg2YXYrdin2YHYuNipINin2YTZgtin2YfYsdip4oCs!5e0!3m2!1sar!2seg!4v1654352120336!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 253),
(284, 1, 'قسم الزاويا الحمراء', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27615.066448333488!2d31.30459854627533!3d30.097528226183144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583ff73336f243%3A0x2e4f5e860bfcee17!2z2YLYs9mFINin2YTYstin2YjZitipINin2YTYrdmF2LHYp9ih2Iwg2YXYrdin2YHYuNipINin2YTZgtin2YfYsdip4oCs!5e0!3m2!1sar!2seg!4v1654352165805!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 254),
(285, 1, 'اقسام شرطة الشرابيا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13810.992165222675!2d31.28319886044921!3d30.072755900000022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583ff9082583eb%3A0x4328b2f0c97320df!2z2YLYs9mFINi02LHYt9ipINin2YTYtNix2KfYqNmK2Kk!5e0!3m2!1sar!2seg!4v1654352240939!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 255),
(286, 1, 'اقسام شرطة الامبرية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.380185048933!2d31.297012585040182!3d30.111932781857835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458156f8ff70b89%3A0x564a9f1ae9e68684!2z2YLYs9mFINi02LHYt9ipINin2YTYo9mF2YrYsdmK2Kk!5e0!3m2!1sar!2seg!4v1654352279882!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 256),
(287, 1, 'قسم شرطة الوايلي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.878631661902!2d31.285628785041347!3d30.06901323187339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f9eaa410b45%3A0x4232f670635eaa59!2z2YLYs9mFINi02LHYt9ipINin2YTZiNin2YrZhNmJ!5e0!3m2!1sar!2seg!4v1654352346489!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1028351660, 128, 257),
(288, 1, 'قسم باب الشعرية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27623.02938217134!2d31.300949719635202!3d30.069012053624405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f4d934684d1%3A0x9cb4791409749152!2z2YLYs9mFINi02LHYt9ipINio2KfYqCDYp9mE2LTYudix2YrYqQ!5e0!3m2!1sar!2seg!4v1654352523292!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 258);
INSERT INTO `departments` (`department_code`, `status`, `department_name`, `location`, `department_phone`, `governorate_code`, `cites_code`) VALUES
(289, 1, 'قسم شرطة الموسكو', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27623.02938217134!2d31.300949719635202!3d30.069012053624405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840bd42f097e7%3A0xe61601f76eefb95d!2z2YLYs9mFINi02LHYt9ipINin2YTZhdmI2LPZg9mK!5e0!3m2!1sar!2seg!4v1654352581505!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1013016361, 128, 260),
(290, 1, 'قسم شرطة عابدين', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27623.02938217134!2d31.300949719635202!3d30.069012053624405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840bb1116d0b5%3A0x4c20c4217621e59b!2z2YLYs9mFINi02LHYt9ipINi52KfYqNiv2YrZhg!5e0!3m2!1sar!2seg!4v1654352622234!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1116079359, 128, 262),
(291, 1, 'قسم شرطة بولاق', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110492.13954933552!2d31.353480499339838!3d30.06899233053176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840efa752f117%3A0x9da9d8e760fc1dc6!2z2YLYs9mFINi02LHYt9ipINio2YjZhNin2YI!5e0!3m2!1sar!2seg!4v1654352684690!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 263),
(292, 1, 'قسم بولاق ابو العلا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110492.13954933552!2d31.353480499339838!3d30.06899233053176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584746d148db35%3A0x765004166468a9b5!2z2YLYs9mFINi02LHYt9ipINio2YjZhNin2YIg2KfZhNiv2YPYsdmI2LE!5e0!3m2!1sar!2seg!4v1654352714412!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 263),
(293, 1, 'قسم منشات ناصر', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110492.26390099821!2d31.35348092234015!3d30.06888095306584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa2fe0d6479%3A0xcafa3d92acb5d156!2z2YLYs9mFINi02LHYt9mHINmF2YbYtNij2Ycg2YbYp9i12LE!5e0!3m2!1sar!2seg!4v1654352802684!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 265),
(294, 1, 'قسم المرج', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110401.466109708!2d31.48099618359375!3d30.150106100000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145815f6e05d8469%3A0x3ad6f321acb93e5a!2z2YLYs9mFINin2YTZhdix2Kw!5e0!3m2!1sar!2seg!4v1654352834147!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1141157869, 128, 266),
(295, 1, 'نقطة شرطة المرج', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110401.466109708!2d31.48099618359375!3d30.150106100000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581415d3080099%3A0x4b4072efea0d5747!2z2YbZgti32Kkg2LTYsdi32Kkg2KfZhNmF2LHYrA!5e0!3m2!1sar!2seg!4v1654352885939!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 266),
(296, 1, 'قسم شرطه المطرية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110401.50772903486!2d31.48099632447807!3d30.150068913948466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458156299700a4d%3A0x9e1534d7d6c2b5fe!2z2YLYs9mFINi02LHYt9mHINin2YTZhdi32LHZitip!5e0!3m2!1sar!2seg!4v1654352924474!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 267),
(297, 1, 'قسم عين شمس', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27608.08000509936!2d31.372881895926554!3d30.122527323748866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145815963961a195%3A0x7cdcd1f2d3971c77!2z2YLYs9mFINi52YrZhiDYtNmF2LPYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1654352969426!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 268),
(298, 1, 'قسم شرطه السلام اول', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.7489932233807!2d31.41510888503911!3d30.158591581840938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145810c330e05d5d%3A0xd1ad3148a63aa55d!2z2YLYs9mFINi02LHYt9mHINin2YTYs9mE2KfZhSDYp9mI2YQ!5e0!3m2!1sar!2seg!4v1654353063677!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1159580589, 128, 269),
(299, 1, 'قسم شرطة السلام تاني', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.5210642473835!2d31.443109385038955!3d30.16510608183858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458115c2b479b31%3A0x84c14049d3d6639b!2z2YLYs9mFINi02LHYt9ipINin2YTYs9mE2KfZhSDYq9in2YY!5e0!3m2!1sar!2seg!4v1654353092978!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 270),
(300, 1, 'نقطة شرطة النزهة الجديدة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27607.189697009995!2d31.398761820898432!3d30.125711700000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581687bc2d2eef%3A0x78cb745bdd21616b!2z2YbZgti32Kkg2LTYsdi32Kkg2KfZhNmG2LLZh9ipINin2YTYrNiv2YrYr9ip!5e0!3m2!1sar!2seg!4v1654353133483!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 271),
(301, 1, 'اقسام شرطة مصر الجديدة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.893626502415!2d31.330139185040597!3d30.09723268186312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458158c7e5a1ee3%3A0x293fd4ca8e742a41!2z2YLYs9mFINi02LHYt9ipINmF2LXYsSDYp9mE2KzYr9mK2K_YqQ!5e0!3m2!1sar!2seg!4v1654353395535!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1280000399, 128, 272),
(302, 1, 'قسم شرطة أول مدينة نصر', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27625.018842990034!2d31.34965526957345!3d30.061883740043427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e12c0aa814b%3A0x578bc53a5c0670ad!2z2YLYs9mFINi02LHYt9ipINij2YjZhCDZhdiv2YrZhtipINmG2LXYsQ!5e0!3m2!1sar!2seg!4v1654353490353!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 273),
(303, 1, 'قسم شرطة مدينة نصر ثان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27625.019490391!2d31.349655278385647!3d30.06188142013142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f544192b53f%3A0x9794a69b9da32643!2z2YLYs9mFINi02LHYt9ipINmF2K_ZitmG2Kkg2YbYtdixINir2KfZhg!5e0!3m2!1sar!2seg!4v1654353528864!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 273),
(304, 1, 'قسم ملوي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225951.70150397345!2d30.959243559053995!3d27.76370780873154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1444cd7dd4410f59%3A0x876025b6a5a046e2!2z2YXYsdmD2LIg2YXZhNmI2YnYjCDYp9mE2YXZhtmK2Kc!5e0!3m2!1sar!2seg!4v1654367776764!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 134, 191),
(305, 3, 'دار ايتام الجيزة', ' ', 12343, 119, 130),
(307, 2, 'مستشفي قليوب التخصي', '  <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.062853193722!2d31.22528928503858!3d30.178198481833782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14586b0c6babc127%3A0xa1315c69c4f031da!2z2YXYs9iq2LTZgdmJINmC2YTZitmI2Kgg2KfZhNiq2K7Ytdi12Yo!5e0!3m2!1sar!2seg!4v1656957848918!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 21234, 129, 213),
(308, 2, 'مستشفى الجامعة ببنها', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13755.998840648082!2d31.192462669833564!3d30.464446307701284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7df513e7515b7%3A0xef5521392a7972eb!2z2YXYs9iq2LTZgdmJINin2YTYrNin2YXYudipINio2KjZhtmH2Kc!5e0!3m2!1sar!2seg!4v1657841848358!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 133231011, 129, 212),
(309, 3, 'دار اهالينا للايتام و المسنين باسوان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220787.60794067502!2d31.351908765768766!3d30.15695136332284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145846882730d0c9%3A0xf0f0a9b6e6722eda!2z2K_Yp9ixINin2YfYp9mE2YrZhtinINmE2YTYp9mK2KrYp9mFINmI2KfZhNmF2LPZhtmK2YY!5e0!3m2!1sar!2seg!4v1657981660381!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1208517824, 111, 72),
(310, 3, 'دار ينبوع النور للايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220787.60794067502!2d31.351908765768766!3d30.15695136332284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458386a292d9a95%3A0x8071e8690f12531e!2z2K_Yp9ixINmK2YbYqNmI2Lkg2KfZhNmG2YjYsSDZhNmE2KfZitiq2KfZhQ!5e0!3m2!1sar!2seg!4v1657981730117!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 227546136, 111, 72),
(311, 3, 'جمعية الحياة للعلوم والخدمات الصحية اسوان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116511.71503531547!2d32.95312978401075!3d24.136950874651095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x143663575153ce69%3A0x67cf9b95b45d6d70!2z2KzZhdi52YrYqSDYp9mE2K3Zitin2Kkg2YTZhNi52YTZiNmFINmI2KfZhNiu2K_Zhdin2Kog2KfZhNi12K3ZitipINin2LPZiNin2YY!5e0!3m2!1sar!2seg!4v1657981883889!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1010767353, 111, 301),
(312, 3, 'لجنة زكاة أبوالريش بحري بالخطارة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116511.71503531547!2d32.95312978401075!3d24.136950874651095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14366fa2d49aa417%3A0x655c734e8c5d1a58!2z2YTYrNmG2Kkg2LLZg9in2Kkg2KPYqNmI2KfZhNix2YrYtCDYqNit2LHZiiDYqNin2YTYrti32KfYsdip!5e0!3m2!1sar!2seg!4v1657981931158!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 111, 301),
(313, 3, 'دار البشارة للرعاية المتكامل لكبار السن(مؤسسة محمد النادي الخيرية)الغنيمية ـ إدفو قبلي ـ أسوان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d926119.8714044028!2d33.95248576875002!3d24.9437948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1449ed356054e11b%3A0xfb753e30296f51ac!2z2K_Yp9ixINin2YTYqNi02KfYsdipINmE2YTYsdi52KfZitipINin2YTZhdiq2YPYp9mF2YQg2YTZg9io2KfYsSDYp9mE2LPZhijZhdik2LPYs9ipINmF2K3ZhdivINin2YTZhtin2K_ZiiDYp9mE2K7Zitix2YrYqSnYp9mE2LrZhtmK2YXZitipINmAINil2K_ZgdmIINmC2KjZhNmKINmAINij2LPZiNin2YY!5e0!3m2!1sar!2seg!4v1657981990632!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 111, 73),
(314, 3, 'جمعية رعاية الأيتام والمحتاجين بالمملحة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d926119.8714044028!2d33.95248576875002!3d24.9437948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1449931c8b0e07a5%3A0x1573795e5e3cdbf3!2z2KzZhdi52YrYqSDYsdi52KfZitipINin2YTYo9mK2KrYp9mFINmI2KfZhNmF2K3Yqtin2KzZitmGINio2KfZhNmF2YXZhNit2Kk!5e0!3m2!1sar!2seg!4v1657982042326!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 111, 73),
(315, 3, 'مؤسسة محمد النادي الخيرية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d926119.8714044028!2d33.95248576875002!3d24.9437948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1449eddd09b4688f%3A0x6f822827aff66b5c!2z2YXYpNiz2LPYqSDZhdit2YXYryDYp9mE2YbYp9iv2Yog2KfZhNiu2YrYsdmK2Kk!5e0!3m2!1sar!2seg!4v1657982101394!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1113302510, 111, 73),
(316, 3, 'دار الحنان لرعاية البنين', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14194.050256863693!2d31.2145493604492!3d27.203052800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14450d4eb6f447e5%3A0x506e331620237e2b!2z2K_Yp9ixINin2YTYrdmG2KfZhiDZhNix2LnYp9mK2Kkg2KfZhNio2YbZitmG!5e0!3m2!1sar!2seg!4v1657982235065!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 112, 87),
(317, 3, 'دار الصفا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14197.075398084113!2d31.202092160449208!3d27.179285699999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14450b20b5aaa393%3A0xdf765a8a03f78588!2z2K_Yp9ixINin2YTYtdmB2Kc!5e0!3m2!1sar!2seg!4v1657982504535!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 112, 77),
(318, 3, 'دار الايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14195.56316740799!2d31.199566071103952!3d27.19116897813364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14450b607465387d%3A0x4206e38ed1d2789b!2z2K_Yp9ixINin2YTYp9mK2KrYp9mF!5e0!3m2!1sar!2seg!4v1657982827240!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 112, 77),
(319, 3, 'مؤسسة الشمس المشرقة بجزيرة العواميه', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7192.026503355987!2d32.630043925466346!3d25.670855434712085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x144916af67e570f3%3A0xd11b601a898a5dd8!2z2YXYpNiz2LPYqSDYp9mE2LTZhdizINin2YTZhdi02LHZgtipINio2KzYstmK2LHYqSDYp9mE2LnZiNin2YXZitmH!5e0!3m2!1sar!2seg!4v1657982895045!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 113, 88),
(320, 3, 'جمعية أصدقاء الكتاب المقدس القبطية الارثوذكسية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7188.981284908556!2d32.672901330224605!3d25.721283400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1449158b663e5921%3A0x8b36380cdce9ee88!2z2KzZhdi52YrYqSDYo9i12K_Zgtin2KEg2KfZhNmD2KrYp9ioINin2YTZhdmC2K_YsyDYp9mE2YLYqNi32YrYqSDYp9mE2KfYsdir2YjYsNmD2LPZitip!5e0!3m2!1sar!2seg!4v1657982971554!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 113, 88),
(321, 3, 'جمعية الاورمان للأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54584.12477057463!2d29.996126149890394!3d31.23436315491516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c52ea3ee5f91%3A0x7d55d6d9498a8f18!2z2KzZhdi52YrYqSDYp9mE2KfZiNix2YXYp9mGINmE2YTYo9mK2KrYp9mF!5e0!3m2!1sar!2seg!4v1657983207586!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 35849702, 109, 43),
(322, 3, 'النهضة لتنميت ورعاية الايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54584.12477057463!2d29.996126149890394!3d31.23436315491516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c48d72af026b%3A0x6fa472409acb5445!2z2KfZhNmG2YfYttipINmE2KrZhtmF2YrYqiDZiNix2LnYp9mK2Kkg2KfZhNin2YrYqtin2YU!5e0!3m2!1sar!2seg!4v1657983272072!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 109, 47),
(323, 3, 'دار العفاف لرعاية الأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54584.12477057463!2d29.996126149890394!3d31.23436315491516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c39dcb2d2c5f%3A0x9d3ea291204951d3!2z2K_Yp9ixINin2YTYudmB2KfZgSDZhNix2LnYp9mK2Kkg2KfZhNij2YrYqtin2YU!5e0!3m2!1sar!2seg!4v1657983324107!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 109, 42),
(324, 3, 'دار ندى للأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54584.12477057463!2d29.996126149890394!3d31.23436315491516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c399ef955451%3A0x1c464f4fa898c5b6!2z2K_Yp9ixINmG2K_ZiSDZhNmE2KPZitiq2KfZhQ!5e0!3m2!1sar!2seg!4v1657983373084!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1229489317, 109, 42),
(325, 3, 'جمعية المودة والرحمة لرعاية الأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54566.93418111871!2d30.062333041796865!3d31.264105300000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5daa39057c6bb%3A0x800f1f0273d3fac0!2z2KzZhdi52YrYqSDYp9mE2YXZiNiv2Kkg2YjYp9mE2LHYrdmF2Kkg2YTYsdi52KfZitipINin2YTYo9mK2KrYp9mF!5e0!3m2!1sar!2seg!4v1657983419889!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 35536173, 109, 50),
(326, 3, 'جمعية فرحة مجتمع', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54566.93418111871!2d30.062333041796865!3d31.264105300000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c4dad7a9ad15%3A0xf37ff324b0af93ae!2z2KzZhdi52YrYqSDZgdix2K3YqSDZhdis2KrZhdi5!5e0!3m2!1sar!2seg!4v1657983516735!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1099924999, 109, 61),
(327, 3, 'قرية بلال بن رباح للأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54602.51439505728!2d30.05003934179687!3d31.202518299999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5db4e060cd585%3A0x8ff63d5ea83da8bd!2z2YLYsdmK2Kkg2KjZhNin2YQg2KjZhiDYsdio2KfYrSDZhNmE2KPZitiq2KfZhQ!5e0!3m2!1sar!2seg!4v1657983899621!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 35430681, 109, 48),
(328, 3, 'دار التيسير', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54558.84594261369!2d30.078755841796873!3d31.278090299999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5d06ff7d725af%3A0x89dd595d35b885c8!2z2K_Yp9ixINin2YTYqtmK2LPZitix!5e0!3m2!1sar!2seg!4v1657983974412!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 35505600, 109, 50),
(329, 3, 'جمعية اصدقاء اليتيم الخيرية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54593.30934875097!2d30.05753344179686!3d31.218462100000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c485d357cbf1%3A0x73b6c34df19eef96!2z2KzZhdi52YrYqSDYo9i12K_Zgtin2KEg2KfZhNmK2KrZitmFINin2YTYrtmK2LHZitip!5e0!3m2!1sar!2seg!4v1657984078134!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 34273247, 109, 52),
(330, 3, 'ملجأ سان فرنسيسكو-جمعية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54606.12896647098!2d29.986850141796896!3d31.196255600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c39aafa350ad%3A0xbe7b953ebe53453b!2z2YXZhNis2KMg2LPYp9mGINmB2LHZhtiz2YrYs9mD2Ygt2KzZhdi52YrYqQ!5e0!3m2!1sar!2seg!4v1657984104325!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 109, 42),
(331, 3, 'دار الاحباب لرعاية الايتام ذوى الاحتياجات الخاصة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54570.12433838964!2d30.065419641796865!3d31.258587800000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5dabd15f9f1f3%3A0xe60bac92448daf93!2z2K_Yp9ixINin2YTYp9it2KjYp9ioINmE2LHYudin2YrYqSDYp9mE2KfZitiq2KfZhSDYsNmI2Ykg2KfZhNin2K3YqtmK2KfYrNin2Kog2KfZhNiu2KfYtdip!5e0!3m2!1sar!2seg!4v1657984171892!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 35566324, 109, 47),
(332, 3, 'الملجأ اليونانى', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54600.2722676933!2d29.983533041796885!3d31.206402500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c389d2d3b11d%3A0xcc961e5e3fe5c6c1!2z2KfZhNmF2YTYrNijINin2YTZitmI2YbYp9mG2Yk!5e0!3m2!1sar!2seg!4v1657984213836!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 35918789, 109, 57),
(333, 3, 'جمعية دار الملائكة لرعاية وإيواء الأيتام ذوى الاحتياجات الخاصة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54579.42289005862!2d30.05556754179687!3d31.242500600000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5dacff5e08bcd%3A0x7956a09eeabe1e40!2z2KzZhdi52YrYqSDYr9in2LEg2KfZhNmF2YTYp9im2YPYqSDZhNix2LnYp9mK2Kkg2YjYpdmK2YjYp9ihINin2YTYo9mK2KrYp9mFINiw2YjZiSDYp9mE2KfYrdiq2YrYp9is2KfYqiDYp9mE2K7Yp9i12Kk!5e0!3m2!1sar!2seg!4v1657984266485!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1223034878, 109, 55),
(334, 3, 'معية صحابة اليتيم الخيرية الإسلامية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54579.42289005862!2d30.05556754179687!3d31.242500600000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c481114c09e7%3A0x32e8e17d58fde75c!2z2KzZhdi52YrYqSDYtdit2KfYqNipINin2YTZitiq2YrZhSDYp9mE2K7Zitix2YrYqSDYp9mE2KXYs9mE2KfZhdmK2Kk!5e0!3m2!1sar!2seg!4v1657984333269!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 34211693, 109, 61),
(335, 3, 'جمعية صديقات الكتاب المقدس القبطية الأرثوزكسية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54579.42289005862!2d30.05556754179687!3d31.242500600000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5d073fc0c8ae5%3A0x5d55eab4a1ad3d48!2z2KzZhdi52YrYqSDYtdiv2YrZgtin2Kog2KfZhNmD2KrYp9ioINin2YTZhdmC2K_YsyDYp9mE2YLYqNi32YrYqSDYp9mE2KPYsdir2YjYstmD2LPZitip!5e0!3m2!1sar!2seg!4v1657984413811!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 109, 40),
(336, 3, 'دار الرحمة لرعاية الايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219638.64661252615!2d32.416484747797064!3d30.666243632876267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f8598952cd10df%3A0x9e8ce9a449277299!2z2K_Yp9ixINin2YTYsdit2YXYqSDZhNix2LnYp9mK2Kkg2KfZhNin2YrYqtin2YU!5e0!3m2!1sar!2seg!4v1657984540117!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 110, 65),
(337, 3, 'دار ابناء مصر', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219638.64661252615!2d32.416484747797064!3d30.666243632876267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f85fa8db22f1ef%3A0x389adf1beab9426a!2z2K_Yp9ixINin2KjZhtin2KEg2YXYtdix!5e0!3m2!1sar!2seg!4v1657984580838!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 110, 66),
(338, 3, 'دار مناسبات المعازه', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219638.64661252615!2d32.416484747797064!3d30.666243632876267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f85f56299f05e3%3A0xf8f9feafe5ef4c5b!2z2K_Yp9ixINmF2YbYp9iz2KjYp9iqINin2YTZhdi52KfYstmH!5e0!3m2!1sar!2seg!4v1657984612902!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 110, 65),
(339, 3, 'دار رعاية أيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219638.64661252615!2d32.416484747797064!3d30.666243632876267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f857d31297c8bd%3A0xfd27a6ed067ad5fc!2z2K_Yp9ixINix2LnYp9mK2Kkg2KPZitiq2KfZhQ!5e0!3m2!1sar!2seg!4v1657984651333!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 110, 67),
(340, 3, 'مؤسسة المدرك لرعاية الايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219638.64661252615!2d32.416484747797064!3d30.666243632876267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f85fc4d254831f%3A0x1d21c9f451e86123!2z2YXYpNiz2LPYqSDYp9mE2YXYr9ix2YMg2YTYsdi52KfZitipINin2YTYp9mK2KrYp9mF!5e0!3m2!1sar!2seg!4v1657984705620!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 110, 68),
(341, 3, 'دار مناسبات ابوعرفيه', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219638.64661252615!2d32.416484747797064!3d30.666243632876267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f861303a394883%3A0x265d3aaf4228467c!2z2K_Yp9ixINmF2YbYp9iz2KjYp9iqINin2KjZiNi52LHZgdmK2Yc!5e0!3m2!1sar!2seg!4v1657984746177!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 110, 69),
(342, 3, 'جمعية البدور', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219638.64661252615!2d32.416484747797064!3d30.666243632876267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f85910f5b29ae7%3A0x60f600d287bcecbc!2z2KzZhdi52YrYqSDYp9mE2KjYr9mI2LE!5e0!3m2!1sar!2seg!4v1657984771213!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 110, 70),
(343, 3, 'دار مناسبات اهالي الكيلو 17', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219638.64661252615!2d32.416484747797064!3d30.666243632876267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f856b78fbf4169%3A0x27eba6f5eafb95fa!2z2K_Yp9ixINmF2YbYp9iz2KjYp9iqINin2YfYp9mE2Ykg2KfZhNmD2YrZhNmIMTc!5e0!3m2!1sar!2seg!4v1657984826405!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 110, 71),
(344, 3, 'الجمعية الخيرية لرعاية الأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219638.64661252615!2d32.416484747797064!3d30.666243632876267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f85912e40dec93%3A0xf653c879fe9e8228!2z2KfZhNis2YXYudmK2Kkg2KfZhNiu2YrYsdmK2Kkg2YTYsdi52KfZitipINin2YTYo9mK2KrYp9mF!5e0!3m2!1sar!2seg!4v1657984860781!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 110, 65),
(345, 3, 'جمعية رسالة فرع الإسماعيلية - Resale Ismailia Charity Organization', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219638.64661252615!2d32.416484747797064!3d30.666243632876267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f8599eeb5fb961%3A0x18da6b2abe24f180!2z2KzZhdi52YrYqSDYsdiz2KfZhNipINmB2LHYuSDYp9mE2KXYs9mF2KfYudmK2YTZitipIC0gUmVzYWxlIElzbWFpbGlhIENoYXJpdHkgT3JnYW5pemF0aW9u!5e0!3m2!1sar!2seg!4v1657984904222!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1210820400, 110, 65),
(346, 3, 'جمعية رعاية الايتام والاعمال الخيرية بالمعنى', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.625165827017!2d32.70902058513332!3d26.176334283450146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x144ec9cdf87f1d87%3A0x14cbe9ed9423d35f!2z2KzZhdi52YrYqSDYsdi52KfZitipINin2YTYp9mK2KrYp9mFINmI2KfZhNin2LnZhdin2YQg2KfZhNiu2YrYsdmK2Kkg2KjYp9mE2YXYudmG2Yk!5e0!3m2!1sar!2seg!4v1657984965957!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 114, 96),
(347, 3, 'دار ايتام للمعوقين', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d873812.1458803123!2d31.17804016874998!3d31.183898400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5dbd1f57e3809%3A0x9672001167835fdb!2z2K_Yp9ixINin2YrYqtin2YUg2YTZhNmF2LnZiNmC2YrZhg!5e0!3m2!1sar!2seg!4v1657985062361!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1222641255, 115, 103),
(348, 3, 'دار المروة للايتام المعاقين', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d873812.1458803123!2d31.17804016874998!3d31.183898400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5dbbb93b13ebd%3A0x52e8158b17bce7a1!2z2K_Yp9ixINin2YTZhdix2YjYqSDZhNmE2KfZitiq2KfZhSDYp9mE2YXYudin2YLZitmG!5e0!3m2!1sar!2seg!4v1657985097004!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 115, 104),
(349, 3, 'جمعية تنمية المجتمع بأرض العمدة دار الحنان للبنات', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d873812.1458803123!2d31.17804016874998!3d31.183898400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5df034c9cefb1%3A0xb6342c150182fd52!2z2KzZhdi52YrYqSDYqtmG2YXZitipINin2YTZhdis2KrZhdi5INio2KPYsdi2INin2YTYudmF2K_YqSDYr9in2LEg2KfZhNit2YbYp9mGINmE2YTYqNmG2KfYqg!5e0!3m2!1sar!2seg!4v1657985255694!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 115, 109),
(350, 3, 'ملجأ ايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d873812.1458803123!2d31.17804016874998!3d31.183898400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5f16cfa08561d%3A0xc98e83d6ea01bb4a!2z2YXZhNis2KMg2KfZitiq2KfZhQ!5e0!3m2!1sar!2seg!4v1657985294437!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 115, 111),
(351, 3, 'دار الرضوان-جمعية خيرية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d873812.1458803123!2d31.17804016874998!3d31.183898400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c4d1b4aad763%3A0xda5ab0d5d31529c0!2z2K_Yp9ixINin2YTYsdi22YjYp9mGLdis2YXYudmK2Kkg2K7Zitix2YrYqQ!5e0!3m2!1sar!2seg!4v1657985312198!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 115, 115),
(352, 3, 'دار ملائكة الأورمان', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442852.7963502559!2d31.38813111123109!3d29.870402464485316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458413be80d13b1%3A0xd4e830dac63cbdc1!2z2K_Yp9ixINmF2YTYp9im2YPYqSDYp9mE2KPZiNix2YXYp9mG!5e0!3m2!1sar!2seg!4v1657985535077!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 130),
(353, 3, 'دار اهالينا للايتام والمسنين', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442852.7963502559!2d31.38813111123109!3d29.870402464485316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145846882730d0c9%3A0xf0f0a9b6e6722eda!2z2K_Yp9ixINin2YfYp9mE2YrZhtinINmE2YTYp9mK2KrYp9mFINmI2KfZhNmF2LPZhtmK2YY!5e0!3m2!1sar!2seg!4v1657985566970!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 131),
(354, 3, 'دار الصحوة للايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442852.7963502559!2d31.38813111123109!3d29.870402464485316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584114b9ba2e3f%3A0xa94d0120f48dbe6b!2z2K_Yp9ixINin2YTYtdit2YjYqSDZhNmE2KfZitiq2KfZhQ!5e0!3m2!1sar!2seg!4v1657985602020!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 132),
(355, 3, 'Dar El Fostat For Orphans Care', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442852.7963502559!2d31.38813111123109!3d29.870402464485316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145846f0af87715d%3A0x3f628214b355f504!2sDar%20El%20Fostat%20For%20Orphans%20Care!5e0!3m2!1sar!2seg!4v1657985628167!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 134),
(356, 3, 'ار الفسطاط لرعاية الايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442852.7963502559!2d31.38813111123109!3d29.870402464485316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145846b4ac8afe83%3A0xce8b35a6aaab8a2b!2z2K_Yp9ixINin2YTZgdiz2LfYp9i3INmE2LHYudin2YrYqSDYp9mE2KfZitiq2KfZhQ!5e0!3m2!1sar!2seg!4v1657985691933!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 235727247, 119, 136),
(357, 3, 'دار الصحوة لرعايه الأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442852.7963502559!2d31.38813111123109!3d29.870402464485316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145845e8269a32c3%3A0xae1f6c2f15f12dd5!2z2K_Yp9ixINin2YTYtdit2YjYqSDZhNix2LnYp9mK2Ycg2KfZhNij2YrYqtin2YU!5e0!3m2!1sar!2seg!4v1657985736869!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1097777102, 119, 306),
(358, 3, 'دار الرعاية والحنان للايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442852.7963502559!2d31.38813111123109!3d29.870402464485316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145845e8269a32c3%3A0xae1f6c2f15f12dd5!2z2K_Yp9ixINin2YTYtdit2YjYqSDZhNix2LnYp9mK2Ycg2KfZhNij2YrYqtin2YU!5e0!3m2!1sar!2seg!4v1657985736869!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 237143351, 119, 136),
(359, 3, 'دار السابقون للخيرات لرعاية الأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442852.7963502559!2d31.38813111123109!3d29.870402464485316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584532736ce1cb%3A0x39f427be6832b46c!2z2K_Yp9ixINin2YTYs9in2KjZgtmI2YYg2YTZhNiu2YrYsdin2Kog2YTYsdi52KfZitipINin2YTYo9mK2KrYp9mF!5e0!3m2!1sar!2seg!4v1657985788631!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 307),
(360, 3, 'جمعية جوامع الخير الإسلامية لرعاية الأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442852.7963502559!2d31.38813111123109!3d29.870402464485316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145845dc4eb0f531%3A0x55e5a6c18f814b39!2z2KzZhdi52YrYqSDYrNmI2KfZhdi5INin2YTYrtmK2LEg2KfZhNil2LPZhNin2YXZitipINmE2LHYudin2YrYqSDYp9mE2KPZitiq2KfZhQ!5e0!3m2!1sar!2seg!4v1657985839101!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 233844480, 119, 312),
(361, 3, 'جمعية احباب الرحمن لرعاية الايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442852.7963502559!2d31.38813111123109!3d29.870402464485316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145845b80b0347e7%3A0x680f5d485fbde83d!2z2KzZhdi52YrYqSDYp9it2KjYp9ioINin2YTYsdit2YXZhiDZhNix2LnYp9mK2Kkg2KfZhNin2YrYqtin2YU!5e0!3m2!1sar!2seg!4v1657985868061!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 311),
(362, 3, 'دار ايتام الصحوة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442852.7963502559!2d31.38813111123109!3d29.870402464485316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458565f8d9c302b%3A0x19dbfd3bec5ee50!2z2K_Yp9ixINin2YrYqtin2YUg2KfZhNi12K3ZiNip!5e0!3m2!1sar!2seg!4v1657985903013!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1097777102, 119, 138),
(363, 3, 'مسجد العمدة لرعاية الايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442852.7963502559!2d31.38813111123109!3d29.870402464485316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145846cc7f512213%3A0x485c71205a0daa81!2z2YXYs9is2K8g2KfZhNi52YXYr9ipINmE2LHYudin2YrYqSDYp9mE2KfZitiq2KfZhQ!5e0!3m2!1sar!2seg!4v1657985934957!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 308),
(364, 3, 'دار أيتام أمهات المؤمنين', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442852.7963502559!2d31.38813111123109!3d29.870402464485316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1459b74186014d87%3A0x232a3a9f684a4e5b!2z2K_Yp9ixINij2YrYqtin2YUg2KPZhdmH2KfYqiDYp9mE2YXYpNmF2YbZitmG!5e0!3m2!1sar!2seg!4v1657985972037!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 119, 305),
(365, 3, 'جمعية المساعى الخيرية الاسلامية بالمنصورة لرعاية الايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1771511.0774335861!2d32.22922051027265!3d29.864776416534834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79da49e3a395f%3A0x38ff49e383db9199!2z2KzZhdi52YrYqSDYp9mE2YXYs9in2LnZiSDYp9mE2K7Zitix2YrYqSDYp9mE2KfYs9mE2KfZhdmK2Kkg2KjYp9mE2YXZhti12YjYsdipINmE2LHYudin2YrYqSDYp9mE2KfZitiq2KfZhQ!5e0!3m2!1sar!2seg!4v1657986072318!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 502314386, 120, 140),
(366, 3, 'مؤسسة تربية البنات بالمنصورة (دار الأيتام)', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1771511.0774335861!2d32.22922051027265!3d29.864776416534834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79d4f33596e29%3A0x637ba68d0208a0ea!2z2YXYpNiz2LPYqSDYqtix2KjZitipINin2YTYqNmG2KfYqiDYqNin2YTZhdmG2LXZiNix2KkgKNiv2KfYsSDYp9mE2KPZitiq2KfZhSk!5e0!3m2!1sar!2seg!4v1657986103453!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 141),
(367, 3, 'مجمع الفضل - للأيتام مجمع الصفا الاسلامي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1771511.0774335861!2d32.22922051027265!3d29.864776416534834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79d8302329877%3A0x32fbcfa7e6c80178!2z2YXYrNmF2Lkg2KfZhNi12YHYpyDYp9mE2KfYs9mE2KfZhdmK!5e0!3m2!1sar!2seg!4v1657986182263!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 153),
(368, 3, 'دار حكمت للايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1771511.0774335861!2d32.22922051027265!3d29.864776416534834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7c1c43c746d59%3A0xbd2767b797aa55ad!2z2K_Yp9ixINit2YPZhdiqINmE2YTYp9mK2KrYp9mF!5e0!3m2!1sar!2seg!4v1657986202765!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 144),
(369, 3, 'جمعية فجر الاسلام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1771511.0774335861!2d32.22922051027265!3d29.864776416534834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7718c16f7eb21%3A0x25c980dc7d57a5fa!2z2KzZhdi52YrYqSDZgdis2LEg2KfZhNin2LPZhNin2YU!5e0!3m2!1sar!2seg!4v1657986234094!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 149),
(370, 3, 'المعهد العالى لرعاية الخدمة الاجتماعية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1771511.0774335861!2d32.22922051027265!3d29.864776416534834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f70ba104185793%3A0x39626b61324ce4fc!2z2KfZhNmF2LnZh9ivINin2YTYudin2YTZiSDZhNix2LnYp9mK2Kkg2KfZhNiu2K_ZhdipINin2YTYp9is2KrZhdin2LnZitip!5e0!3m2!1sar!2seg!4v1657986342893!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 150),
(371, 3, 'ملجأ أيتام المحلة الكبرى بنين', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1771511.0774335861!2d32.22922051027265!3d29.864776416534834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7a4a6d0a4b391%3A0xe4744aa0a153affe!2z2YXZhNis2KMg2KPZitiq2KfZhSDYp9mE2YXYrdmE2Kkg2KfZhNmD2KjYsdmJINio2YbZitmG!5e0!3m2!1sar!2seg!4v1657986369270!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 151),
(372, 3, 'مؤسسة الإخلاص الخيرية لرعاية الأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1771511.0774335861!2d32.22922051027265!3d29.864776416534834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7a69d8d183ed3%3A0x303d0a14b3fb1ad3!2z2YXYpNiz2LPYqSDYp9mE2KXYrtmE2KfYtSDYp9mE2K7Zitix2YrYqSDZhNix2LnYp9mK2Kkg2KfZhNij2YrYqtin2YU!5e0!3m2!1sar!2seg!4v1657986487413!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 146),
(373, 3, 'جمعية كفالة اليتيم', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1771511.0774335861!2d32.22922051027265!3d29.864776416534834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f77b50368c99d5%3A0xb9150839338dbe2!2z2KzZhdi52YrYqSDZg9mB2KfZhNipINin2YTZitiq2YrZhQ!5e0!3m2!1sar!2seg!4v1657986554229!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 120, 147),
(374, 3, 'دار الحنان للأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442428.6121950165!2d33.10321763437499!3d29.96581840000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1456257c0009d589%3A0x43ffa6b301f7bb9e!2z2K_Yp9ixINin2YTYrdmG2KfZhiDZhNmE2KPZitiq2KfZhQ!5e0!3m2!1sar!2seg!4v1657986613063!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1202499062, 123, 168),
(375, 3, 'دار أيتام نواة الخير', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d441660.00646101154!2d31.920870034375003!3d30.138010199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458169b78218a7f%3A0xdb9553245c495fe2!2z2K_Yp9ixINij2YrYqtin2YUg2YbZiNin2Kkg2KfZhNiu2YrYsQ!5e0!3m2!1sar!2seg!4v1657986659638!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1097920713, 123, 169),
(376, 3, 'دار الرحمة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d441660.00646101154!2d31.920870034375003!3d30.138010199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145815c1476e0a13%3A0xe1943ec1fd5023f5!2z2K_Yp9ixINin2YTYsdit2YXYqQ!5e0!3m2!1sar!2seg!4v1657986693958!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1158454166, 123, 170),
(377, 3, 'جمعية رسالة للاعمال الخيرية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442428.61308542936!2d33.109348334375014!3d29.965818199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145625774246056d%3A0x4a4069a69cd9eb6!2z2KzZhdi52YrYqSDYsdiz2KfZhNipINmE2YTYp9i52YXYp9mEINin2YTYrtmK2LHZitip!5e0!3m2!1sar!2seg!4v1657986715213!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 123, 171),
(378, 3, 'جمعية السويس بلدي الخيرية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442419.9344212182!2d33.096569334375!3d29.967767500000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14562f3e7a321da5%3A0xcfec66671cbf8bbc!2z2KzZhdi52YrYqSDYp9mE2LPZiNmK2LMg2KjZhNiv2Yog2KfZhNiu2YrYsdmK2Kk!5e0!3m2!1sar!2seg!4v1657986763077!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 123, 168),
(379, 3, 'دار مناسبات كفر عجيبه', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1769769.5662020727!2d33.937655553734004!3d29.962723206107597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7f596cd264d71%3A0xee0a311a3c7c14f8!2z2K_Yp9ixINmF2YbYp9iz2KjYp9iqINmD2YHYsSDYudis2YrYqNmH!5e0!3m2!1sar!2seg!4v1657986853294!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 286),
(380, 3, 'مؤسسة تربية البنين', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1769769.5662020727!2d33.937655553734004!3d29.962723206107597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7f1394c189a27%3A0x8095912fb991a223!2z2YXYpNiz2LPYqSDYqtix2KjZitipINin2YTYqNmG2YrZhg!5e0!3m2!1sar!2seg!4v1657986887749!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 287),
(381, 3, 'مؤسسة المدينة المنورة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1769769.5662020727!2d33.937655553734004!3d29.962723206107597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1457fd7556fcff63%3A0xdef207228a401a21!2z2YXYpNiz2LPYqSDYp9mE2YXYr9mK2YbYqSDYp9mE2YXZhtmI2LHYqQ!5e0!3m2!1sar!2seg!4v1657986910229!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 288),
(382, 3, 'دار أيتام السلام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1769769.5662020727!2d33.937655553734004!3d29.962723206107597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458112fa62025a9%3A0xa0be22d58edbe67d!2z2K_Yp9ixINij2YrYqtin2YUg2KfZhNiz2YTYp9mF!5e0!3m2!1sar!2seg!4v1657986948437!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 290),
(383, 3, 'دار الرعاية المتكاملة لرعاية الايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1769769.5662020727!2d33.937655553734004!3d29.962723206107597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458109e1e4003e9%3A0x81995354f1bdecc3!2z2K_Yp9ixINin2YTYsdi52KfZitipINin2YTZhdiq2YPYp9mF2YTYqSDZhNix2LnYp9mK2Kkg2KfZhNin2YrYqtin2YU!5e0!3m2!1sar!2seg!4v1657986972061!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 291);
INSERT INTO `departments` (`department_code`, `status`, `department_name`, `location`, `department_phone`, `governorate_code`, `cites_code`) VALUES
(384, 3, 'Face Organization For Orphans.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1769769.5662020727!2d33.937655553734004!3d29.962723206107597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581ab1a7a13ac7%3A0x8bfec01b7a05298a!2sFace%20Organization%20For%20Orphans.!5e0!3m2!1sar!2seg!4v1657987017653!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 292),
(385, 3, 'دار الحمد للأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1769769.5662020727!2d33.937655553734004!3d29.962723206107597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581583d36f2f0d%3A0x816429433761fb05!2z2K_Yp9ixINin2YTYrdmF2K8g2YTZhNij2YrYqtin2YU!5e0!3m2!1sar!2seg!4v1657987039814!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 293),
(386, 3, 'جمعية الأمال الغالية لرعاية و كفالة أطفال بلا مأوى', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1769769.5662020727!2d33.937655553734004!3d29.962723206107597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145815a73f8c2b17%3A0xf722ebd70211406b!2z2KzZhdi52YrYqSDYp9mE2KPZhdin2YQg2KfZhNi62KfZhNmK2Kkg2YTYsdi52KfZitipINmIINmD2YHYp9mE2Kkg2KPYt9mB2KfZhCDYqNmE2Kcg2YXYo9mI2Yk!5e0!3m2!1sar!2seg!4v1657987144669!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 296),
(387, 3, 'دار زمان الخير للأيتام المعاقين', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1769769.5662020727!2d33.937655553734004!3d29.962723206107597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583db82ea72f81%3A0xf1db684ef150863f!2z2K_Yp9ixINiy2YXYp9mGINin2YTYrtmK2LEg2YTZhNij2YrYqtin2YUg2KfZhNmF2LnYp9mC2YrZhg!5e0!3m2!1sar!2seg!4v1657987175719!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 297),
(388, 3, 'دار أيتام صلاح الدين', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1769769.5662020727!2d33.937655553734004!3d29.962723206107597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145833d08d0f160b%3A0xfbd6086313d88090!2z2K_Yp9ixINij2YrYqtin2YUg2LXZhNin2K0g2KfZhNiv2YrZhg!5e0!3m2!1sar!2seg!4v1657987205174!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 298),
(389, 3, 'مؤسسة دار رشدى لرعاية الايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1769769.5662020727!2d33.937655553734004!3d29.962723206107597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145836a60dc10823%3A0x3c40808e29e76771!2z2YXYpNiz2LPYqSDYr9in2LEg2LHYtNiv2Ykg2YTYsdi52KfZitipINin2YTYp9mK2KrYp9mF!5e0!3m2!1sar!2seg!4v1657987228502!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 124, 300),
(390, 3, 'مؤسسة التقى والنور لرعاية الأيتام.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d438211.74575677066!2d31.49893318089993!3d30.89982710508129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7a47dbed014e3%3A0x1e0dadf58d378620!2z2YXYpNiz2LPYqSDYp9mE2KrZgtmJINmI2KfZhNmG2YjYsSDZhNix2LnYp9mK2Kkg2KfZhNij2YrYqtin2YUu!5e0!3m2!1sar!2seg!4v1657987342974!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 229),
(391, 3, 'الجمعية النسائية لتحسين الصحة بطنطا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d438211.74575677066!2d31.49893318089993!3d30.89982710508129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7c99c325127eb%3A0x6433a3fab012de7c!2z2KfZhNis2YXYudmK2Kkg2KfZhNmG2LPYp9im2YrYqSDZhNiq2K3Ys9mK2YYg2KfZhNi12K3YqSDYqNi32YbYt9in!5e0!3m2!1sar!2seg!4v1657987364094!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 231),
(392, 3, 'مؤسسة ثروت لرعاية الطفل', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d438211.74575677066!2d31.49893318089993!3d30.89982710508129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7c90980d600b3%3A0x46ca8740c591e3c!2z2YXYpNiz2LPYqSDYq9ix2YjYqiDZhNix2LnYp9mK2Kkg2KfZhNi32YHZhA!5e0!3m2!1sar!2seg!4v1657987440639!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 232),
(393, 3, 'دار الطفل اليتيم بهورين', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d438211.74575677066!2d31.49893318089993!3d30.89982710508129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7c5f2173ef855%3A0x31c46c09ac61f6e2!2z2K_Yp9ixINin2YTYt9mB2YQg2KfZhNmK2KrZitmFINio2YfZiNix2YrZhg!5e0!3m2!1sar!2seg!4v1657987468423!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 235),
(394, 3, 'جمعية المزدلفة للأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d436952.98657344125!2d31.78676873437499!3d31.17373190000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f70b2877cb2281%3A0xc857742a25d0a4fa!2z2KzZhdi52YrYqSDYp9mE2YXYstiv2YTZgdipINmE2YTYo9mK2KrYp9mF!5e0!3m2!1sar!2seg!4v1657987623998!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 236),
(395, 3, 'جمعية بيت الفرح الخيرية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d439461.26994489436!2d32.06874333437501!3d30.625750600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7f3e327072359%3A0xd21f5e8d99689afc!2z2KzZhdi52YrYqSDYqNmK2Kog2KfZhNmB2LHYrSDYp9mE2K7Zitix2YrYqQ!5e0!3m2!1sar!2seg!4v1657987712222!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 230),
(396, 3, 'مجمع الصفا الاسلامي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d437479.69649930747!2d31.95715213437501!3d31.059384899999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79d8302329877%3A0x32fbcfa7e6c80178!2z2YXYrNmF2Lkg2KfZhNi12YHYpyDYp9mE2KfYs9mE2KfZhdmK!5e0!3m2!1sar!2seg!4v1657987761209!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 228),
(397, 3, 'دار ملك الملوك للأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d440349.5873070139!2d31.59260203437501!3d30.429548599999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458798251c3693b%3A0x4b0312652e1719c3!2z2K_Yp9ixINmF2YTZgyDYp9mE2YXZhNmI2YMg2YTZhNij2YrYqtin2YU!5e0!3m2!1sar!2seg!4v1657987849528!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 126, 233),
(398, 3, 'جمعية رسالة الفيوم', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d445300.56755847594!2d31.414814134375007!3d29.314295500000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145978de91501521%3A0x3b6e8a245658c90e!2z2KzZhdi52YrYqSDYsdiz2KfZhNipINin2YTZgdmK2YjZhQ!5e0!3m2!1sar!2seg!4v1657987901535!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 127, 227),
(399, 3, 'دار فيلومينا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d443073.8645249358!2d31.921429934374984!3d29.82056560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145815635f055fd7%3A0x17cec366d52706c6!2z2K_Yp9ixINmB2YrZhNmI2YXZitmG2Kc!5e0!3m2!1sar!2seg!4v1657987978830!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 127, 224),
(400, 3, 'دار السندس للأيتام المعاقين (التجمع الخامس)', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d443073.8645249358!2d31.921429934374984!3d29.82056560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583d332024df27%3A0x56f6db1dd9f0982f!2z2K_Yp9ixINin2YTYs9mG2K_YsyDZhNmE2KPZitiq2KfZhSDYp9mE2YXYudin2YLZitmGICjYp9mE2KrYrNmF2Lkg2KfZhNiu2KfZhdizKQ!5e0!3m2!1sar!2seg!4v1657988099301!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 127, 225),
(401, 3, 'دار عماد راغب لرعاية الايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d443073.8645249358!2d31.921429934374984!3d29.82056560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145856651aab4a87%3A0x6c76ca94aff7e7b1!2z2K_Yp9ixINi52YXYp9ivINix2KfYutioINmE2LHYudin2YrYqSDYp9mE2KfZitiq2KfZhQ!5e0!3m2!1sar!2seg!4v1657988532094!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 127, 222),
(402, 3, 'دار أيتام مسرة', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220842.14058017734!2d31.493042456359394!3d30.132585547276086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458412866bccb83%3A0xf4bfb5757a379bda!2z2K_Yp9ixINij2YrYqtin2YUg2YXYs9ix2Kk!5e0!3m2!1sar!2seg!4v1657990029015!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 238),
(403, 3, 'دار الجنان لرعاية الأيتام وتنمية المجتمع', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221027.28817373008!2d31.748675467187514!3d30.0497259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145823184e4a8e55%3A0xfa3606dddc507545!2z2K_Yp9ixINin2YTYrNmG2KfZhiDZhNix2LnYp9mK2Kkg2KfZhNij2YrYqtin2YUg2YjYqtmG2YXZitipINin2YTZhdis2KrZhdi5!5e0!3m2!1sar!2seg!4v1657990124911!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 239),
(404, 3, 'دار الرضا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221027.28817373008!2d31.748675467187514!3d30.0497259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458157955555555%3A0x7dc0001426b71826!2z2K_Yp9ixINin2YTYsdi22Kc!5e0!3m2!1sar!2seg!4v1657990189406!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 240),
(405, 3, 'دار الضحى الخيريه', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221027.28817373008!2d31.748675467187514!3d30.0497259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583de24a19a117%3A0xf1aaaefba5416076!2z2K_Yp9ixINin2YTYttit2Ykg2KfZhNiu2YrYsdmK2Yc!5e0!3m2!1sar!2seg!4v1657990223878!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 240),
(406, 3, 'دار السويدي', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221027.28817373008!2d31.748675467187514!3d30.0497259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583ca7bc1de113%3A0xec8f50c18854075a!2z2K_Yp9ixINin2YTYs9mI2YrYr9mK!5e0!3m2!1sar!2seg!4v1657990263703!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 241),
(407, 3, 'دار الرحاب للأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221027.28817373008!2d31.748675467187514!3d30.0497259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583dd7da6bb643%3A0x13e41f3da835f5e8!2z2K_Yp9ixINin2YTYsdit2KfYqCDZhNmE2KPZitiq2KfZhQ!5e0!3m2!1sar!2seg!4v1657990287439!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 242),
(408, 3, 'دار الإمام محمد زكي إبراهيم لرعاية الأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221027.28817373008!2d31.748675467187514!3d30.0497259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f68c4f3aad9%3A0x5180b469003a9f9!2z2K_Yp9ixINin2YTYpdmF2KfZhSDZhdit2YXYryDYstmD2Yog2KXYqNix2KfZh9mK2YUg2YTYsdi52KfZitipINin2YTYo9mK2KrYp9mF!5e0!3m2!1sar!2seg!4v1657990333999!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 243),
(409, 3, 'دار أيتام نور الهدى', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220929.23205344318!2d31.58221736718751!3d30.09363500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458406fb8463de3%3A0xb27392803e0f0896!2z2K_Yp9ixINij2YrYqtin2YUg2YbZiNixINin2YTZh9iv2Yk!5e0!3m2!1sar!2seg!4v1657990506943!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 247),
(410, 3, 'دار المصطفى لرعاية الايتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220929.23205344318!2d31.58221736718751!3d30.09363500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fd6ae63e5ad%3A0x8bda05d792c806c0!2z2K_Yp9ixINin2YTZhdi12LfZgdmJINmE2LHYudin2YrYqSDYp9mE2KfZitiq2KfZhQ!5e0!3m2!1sar!2seg!4v1657990522334!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 273),
(411, 3, 'دار ايتام ابو بكر الصديق', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220929.23205344318!2d31.58221736718751!3d30.09363500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584088b752f9c5%3A0xc4c9232a257f6497!2z2K_Yp9ixINin2YrYqtin2YUg2KfYqNmIINio2YPYsSDYp9mE2LXYr9mK2YI!5e0!3m2!1sar!2seg!4v1657990560782!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 268),
(412, 3, 'دار الأيتام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220929.23205344318!2d31.58221736718751!3d30.09363500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840f30f7b8945%3A0xeb17c4909e29adfb!2z2K_Yp9ixINin2YTYo9mK2KrYp9mF!5e0!3m2!1sar!2seg!4v1657990601230!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 128, 250),
(413, 3, 'دار ايتام ال صادق', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220929.89612702618!2d31.582218495080856!3d30.09333782608244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458151c087e1b21%3A0xe309d677e12e95ed!2z2K_Yp9ixINin2YrYqtin2YUg2KfZhCDYtdin2K_Zgg!5e0!3m2!1sar!2seg!4v1657990994062!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 129, 215),
(414, 3, 'دار فيلومينا بافقليوبية', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220929.89612702618!2d31.582218495080856!3d30.09333782608244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145815635f055fd7%3A0x17cec366d52706c6!2z2K_Yp9ixINmB2YrZhNmI2YXZitmG2Kc!5e0!3m2!1sar!2seg!4v1657991104751!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 129, 218),
(415, 3, 'دار أيتام البلسم', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220929.89612702618!2d31.582218495080856!3d30.09333782608244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458169adda5de01%3A0x39819a21b14b7f49!2z2K_Yp9ixINij2YrYqtin2YUg2KfZhNio2YTYs9mF!5e0!3m2!1sar!2seg!4v1657991124999!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 129, 219),
(416, 3, 'جمعية رعاية الايتام والاعمال الخيرية بالمعنى قنا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14323.594688615538!2d32.72200077147401!3d26.167429285265662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x144ec9cdf87f1d87%3A0x14cbe9ed9423d35f!2z2KzZhdi52YrYqSDYsdi52KfZitipINin2YTYp9mK2KrYp9mFINmI2KfZhNin2LnZhdin2YQg2KfZhNiu2YrYsdmK2Kkg2KjYp9mE2YXYudmG2Yk!5e0!3m2!1sar!2seg!4v1657991206638!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 130, 314),
(417, 3, 'الجمعية الشرعية فرع قنا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14324.688304939487!2d32.7371695604492!3d26.1585248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x144eb620423b5fcf%3A0x87ce1d1a3d200449!2z2KfZhNis2YXYudmK2Kkg2KfZhNi02LHYudmK2Kkg2YHYsdi5INmC2YbYpw!5e0!3m2!1sar!2seg!4v1657991300735!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 130, 315),
(418, 3, 'جمعية دار السلام', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1802611.6507987299!2d33.0571450375!3d28.06339330000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b26128694571d%3A0x587c56624d579d0!2z2KzZhdi52YrYqSDYr9in2LEg2KfZhNiz2YTYp9mF!5e0!3m2!1sar!2seg!4v1657991397830!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 134, 185),
(419, 3, 'جمعية كفالة اليتيم  بدمياط', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54478.020812587965!2d31.849462948649883!3d31.417534039197843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9ef8892d5fb83%3A0xe38dd3c217b71003!2z2KzZhdi52YrYqSDZg9mB2KfZhNipINin2YTZitiq2YrZhQ!5e0!3m2!1sar!2seg!4v1657991522024!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 121, 154),
(420, 3, 'مجمع الرضوان الخيري بالزرقا', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54460.92370578247!2d31.771387141796886!3d31.446959699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9e3cdb4c7e2a5%3A0x397008af388adf9!2z2YXYrNmF2Lkg2KfZhNix2LbZiNin2YYg2KfZhNiu2YrYsdmK!5e0!3m2!1sar!2seg!4v1657991548719!5m2!1sar!2seg\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, 121, 155);

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `diseases_code` int(11) NOT NULL,
  `disease_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`diseases_code`, `disease_name`) VALUES
(19, 'الربو'),
(20, 'السكري'),
(21, 'التهاب المفاصل'),
(22, 'الفشل القلبي'),
(23, 'السرطان'),
(24, 'سرطان الكبد'),
(25, 'سرطان الرئة'),
(26, 'سرطان القولون والمستقيم'),
(27, 'سرطان الدم'),
(28, 'سرطان المعدة'),
(29, 'سرطان الثدي'),
(30, 'ارتجاع المريء.'),
(31, 'مرض سيولة الدم'),
(32, 'هشاشة العظام.'),
(34, 'ضعف البصر'),
(35, 'صمم'),
(36, 'سمنة'),
(37, 'غير مصاب بامراض'),
(38, 'اضطراب نفسي'),
(39, 'توحد');

-- --------------------------------------------------------

--
-- Table structure for table `governorate`
--

CREATE TABLE `governorate` (
  `Governorate_code` int(11) NOT NULL,
  `Governorate_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `governorate`
--

INSERT INTO `governorate` (`Governorate_code`, `Governorate_name`) VALUES
(111, 'أسوان'),
(112, 'أسيوط'),
(113, 'الأقصر'),
(109, 'الإسكندرية'),
(110, 'الإسماعيلية'),
(114, 'البحر الأحمر'),
(115, 'البحيرة'),
(119, 'الجيزة'),
(120, 'الدقهلية'),
(123, 'السويس'),
(124, 'الشرقية'),
(126, 'الغربية'),
(127, 'الفيوم'),
(128, 'القاهرة'),
(129, 'القليوبية'),
(133, 'المنوفية'),
(134, 'المنيا'),
(135, 'الوادي الجديد'),
(116, 'بني سويف'),
(117, 'بورسعيد'),
(118, 'جنوب سينا'),
(121, 'دمياط'),
(122, 'سوهاج'),
(125, 'شمال سيناء'),
(130, 'قنا'),
(131, 'كفر الشيخ'),
(132, 'مطروح');

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

CREATE TABLE `missing` (
  `id` int(225) NOT NULL,
  `SSN` int(225) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` int(50) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Mid_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `relationWithMisssing` int(255) NOT NULL,
  `gender` int(50) NOT NULL,
  `nationality_code` int(11) NOT NULL,
  `missing_date` date NOT NULL,
  `governorate_code` int(50) NOT NULL,
  `city_code` int(50) NOT NULL,
  `department_code` int(50) NOT NULL,
  `notes` text NOT NULL,
  `hair_color` int(11) NOT NULL,
  `skin_color` int(50) NOT NULL,
  `eye_color` int(50) NOT NULL,
  `disease_code` int(50) NOT NULL,
  `height` int(255) NOT NULL,
  `weight` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(225) NOT NULL,
  `added_by_admin` int(50) DEFAULT NULL,
  `missingType` int(4) NOT NULL,
  `added_by_citizines` int(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `missing`
--

INSERT INTO `missing` (`id`, `SSN`, `age`, `phone`, `First_Name`, `Mid_Name`, `Last_Name`, `relationWithMisssing`, `gender`, `nationality_code`, `missing_date`, `governorate_code`, `city_code`, `department_code`, `notes`, `hair_color`, `skin_color`, `eye_color`, `disease_code`, `height`, `weight`, `created_at`, `image`, `added_by_admin`, `missingType`, `added_by_citizines`) VALUES
(63, NULL, 13, 0, 'مازن', 'طارق', 'حسن', 3, 1, 15, '2021-01-04', 134, 186, 230, 'اح مع والده صلوا الجمعه في جامع بقريتهم و رجعوا البيت...نزل مازن يشترى حاجات ومن وقتها ماظهرش. اهل القريه كلهم يعرفوا بعض ولكن يوم الجمعه البلده بتبقى مليانه نساء كتير متسولات.\r\nاتعمل محضر فى قسم الشرطه وكان فيه اهتمام في الاول و بعدها قامت ثورة يناير و انتهي البحث. اهله لفوا محافظات مصر كلها و لم يجدوه. مازن كان وقتها بالصف الثانى الابتدائى و شاطر جدا وذكى جدا وكان حافظ 10 اجزاء من القران وكان من المتفوقين فى حياته العلميه\r\n(الصوره اللي عالشمال فوق هي صوره تخيليه لشكله التقريبي الحالي)\r\nبرجاء ممن لديه اي معلومه الاتصال ب\r\n\r\n01112522546', 31, 40, 35, 37, 140, 45, '2022-07-11 23:22:23', '5229017_23550350_1811492142481738_3515596674812191630_o.jpg', NULL, 1, 12345),
(64, NULL, 15, 0, 'سهيلة ', 'جمال ', 'مصطفي', 2, 2, 15, '2022-06-02', 134, 190, 207, 'تغيبت يوم 16 اكتوبر 2010 من كفر مهدى -مركز العدوه- محافظه المنيا و كان عمرها 9 سنوات\r\nنزلت تشتري حاجات و دخلتها البيت و خرجت تاني و مارجعتش\r\nبرجاء ممن لديه معلومه الاتصال ب\r\n01121412966', 31, 40, 35, 37, 140, 40, '2022-07-16 18:16:30', '8408490_13700170_1601766650120956_2318525618308608277_n.jpg', NULL, 1, 12345),
(65, NULL, 14, 0, 'محمد', 'جمعة', 'عراقي عزب', 3, 1, 15, '2022-06-02', 123, 168, 207, 'تغيب عام 2004 لما كان عمره 13 سنه من التعاونيات #السويس\r\nاهل محمد حصلهم حادثه واخوه وقتها توفي وجتله حاله نفسيه وساب البيت \r\nبرجاء ممن لديه معلومه الاتصال ب\r\n01066679526', 31, 42, 35, 37, 160, 60, '2022-07-16 18:16:29', '2969848_20248131_1765374553760164_4280197735252200420_o.jpg', NULL, 1, 12345),
(66, NULL, 14, 0, 'محمد', 'فريد', 'عبد المنصور', 1, 1, 15, '2022-06-06', 126, 235, 207, 'تغيب يوم 2 يونيو 2022 من قرية كفر شبرا مركز زفتى محافظه #الغربيه\r\nبرجاء ممن يراه الاتصال ب\r\n01018417088', 31, 42, 35, 37, 150, 50, '2022-07-16 18:16:25', '8756496_286166551_2998402440457363_3365566346517588381_n.jpg', NULL, 1, 12345),
(67, NULL, 20, 0, 'قمر ', 'عزت ', 'علي محمود', 3, 1, 15, '2022-06-04', 119, 312, 147, 'مواليد حوالي 1997 او 1998 عمرها الان حوالي 20 سنه\r\nتغيبت بين 2000 و 2002 من #فيصل و كان عمرها وقتها 5 سنوات\r\nقمر و اهلها اصلا من الحوامديه و كانوا في فيصل و تاهت منهم. اهلها بلغوا الاقسام و نشروا صورها في الجرائد و للاسف ماوصلولهاش\r\nبرجاء ممن لديه معلومه الاتصال ب\r\n01009036481', 31, 42, 35, 37, 145, 45, '2022-06-05 06:35:53', '2375095_19990375_1761860434111576_2916372110092191303_n.jpg', NULL, 1, 12345),
(69, NULL, 17, 0, 'الاء', 'عبد اللطيف', 'عنان', 2, 2, 15, '2007-04-10', 131, 200, 242, 'تغيبت يوم 16 ابريل 2007 من منطقه دسوق #كفر_الشيخ و كان وقتها عمرها سنتين \r\nكانت بتلعب ادام البيت واختفت\r\nوبعدها بشهر اختفت جارتهم الطفله ايه جمال حسان مواليد 2003 و كان عمرها وقتها 4 سنوات ( الصوره الابيض و اسود ) و تغيبت بنفس الطريقه\r\nبرجاء ممن لديه معلومه الاتصال ب\r\n01060437541', 31, 40, 35, 37, 120, 80, '2022-06-04 18:53:59', '677376_58737420_2124111044553178_1118565416961048576_n.jpg', NULL, 0, 12345),
(70, NULL, 10, 0, 'جمانه', 'صلاح ', 'مهدي العلياوي', 1, 2, 22, '2022-06-07', 128, 273, 302, 'تغيبت يوم 12 مايو 2016 وكان عمرها 4 سنوات من منطقه قاهرة مدينة نصر\r\nبرجاء ممن لديه اي معلومه التواصل على رسايل الصفحه او الاتصال ب \r\n 07801581997\r\n 07803125074', 32, 40, 35, 37, 130, 40, '2022-06-04 19:10:39', '1555931_81495438_2326155214348759_3494166138240106496_n.jpg', NULL, 0, 12345),
(71, NULL, 32, 0, 'طاهر ', 'احمد ', 'يوسف احمد', 3, 1, 15, '2022-06-10', 122, 160, 181, 'تغيب في مايو 2017 \r\nطاهر اصلا من جرجا محافظه #سوهاج و كان رايح القاهره و اختفي و بعدها فتره شخص جابلهم شنطه فيها اوراقه قالهم انها وقعت من قطار\r\nبرجاء ممن يراه الاتصال ب\r\n01151728366', 31, 41, 35, 37, 160, 60, '2022-06-04 19:18:09', '6541363_20994251_1778942909069995_7858209105064747027_n.jpg', NULL, 0, 12345),
(72, NULL, 25, 0, '', '', '', 2, 1, 15, '2013-01-04', 129, 213, 230, 'تغيب في ديسمبر 2013 من عزبه ابو السعود بجوار بهتيم شبرا الخيمه #القليوبيه و كان عمره 18 سنه\r\nبرجاء ممن يراه الاتصال ب\r\n01012121055', 31, 41, 35, 37, 160, 60, '2022-07-05 16:04:14', '6464021_68477551_2195577720739843_6035929721043156992_n.jpg', NULL, 0, 12345),
(73, NULL, 6, 0, 'كريمة', 'قناوي', 'عبد الرسول', 1, 2, 15, '2022-06-07', 130, 119, 236, 'تغيبت يوم 17 يناير 2018 من قريه نجع عزوز مركز دشنا  #قنا \r\nكانت مع والدها دخل يصلي في جامع الشيخ جوده و خرج ملقهاش\r\nبرجاء ممن لديه معلومه الاتصال ب\r\n01016848373\r\n01021492133', 31, 42, 35, 37, 130, 40, '2022-07-15 01:10:59', '4542915_26951809_1841035996194019_6005704098132425856_o.jpg', NULL, 0, 67676),
(74, NULL, 20, 0, 'حسام', 'شعراوي', 'عبد المعز', 2, 1, 15, '2022-06-02', 119, 311, 148, 'تغيب في 25 مايو 2000 من المنيب #الجيزه و كان عمره 4 سنوات\r\nاخت حسام كانت عيانه و والدته كانت بتهتم بيها فخرج حسام في غفله من والدته من البيت و اختفي و محدش شافه و اهله من يومها بيدوروا عليه في كل مكان و نشروا اعلان في الجرنال للبحث عنه\r\nحسام وقت اختفاؤه كان يعاني من ثقل في النطق و لما حد يسأل عن اسمه كان بيقول بير (يقصد اسم والدته عبير و اخته هدير) عنده اثر حرق في مقعدته\r\nبرجاء ممن لديه معلومه الاتصال ب\r\n01125080492\r\n01112264819\r\n01288230571', 31, 40, 35, 37, 130, 30, '2022-06-04 20:01:12', '2679230_28618926_1857713897859562_3744823714662213155_o.jpg', NULL, 0, 67676),
(75, NULL, 9, 0, 'شهد', 'تامر', 'ماهر', 3, 2, 15, '2013-04-15', 129, 214, 228, 'مواليد ابريل 2009 . عمرها الان 9 سنوات\r\nتغيبت يوم 15 ابريل 2013 من ارض ام بيومي  #شبرا_الخيمه و كان عمرها 4 سنوات\r\nخرجت مع مامتها و لما رجعوا قالت لمامتها انها رايحه تشتري حاجه و علي ما مامتها راحت وراها ملقتهاش و البقال  قالها انها اشترت الحاجات و مشيت\r\nبرجاء ممن لديه معلومه الاتصال ب\r\n01205026546\r\n01220807554', 33, 40, 37, 32, 140, 40, '2022-07-05 15:00:31', '5923396_30742292_1880814005549551_3044174035156992_n.jpg', NULL, 0, 67676),
(76, NULL, 6, 0, 'سيف', 'طلعت', 'سعد', 2, 1, 15, '2018-02-04', 112, 81, 218, 'تغيب في سبتمبر 2016 من العتامنه منفلوط #اسيوط\r\nكان بيلعب بره البيت واختفي\r\nبرجاء ممن لديه معلومه الاتصال ب\r\n01115734804\r\n01001310480', 31, 40, 35, 37, 130, 30, '2022-07-15 19:04:32', '1640828_27332052_1844126475884971_1288438815993767183_n.jpg', NULL, 0, 67676),
(77, NULL, 12, 0, 'رقية', 'السيد', 'حسن', 2, 2, 15, '2022-05-31', 133, 276, 253, 'تغيبت بتاريخ 24 ابريل 2018 من البتانون شبين الكوم #المنوفيه وكان عمرها 7 سنوات\r\nكانت بتلعب قدام البيت و اختفت\r\nبرجاء ممن لديه معلومه الاتصال ب\r\n01009409737\r\n01091765620\r\n01060921044', 32, 40, 35, 34, 140, 40, '2022-07-05 15:00:23', '7047303_71254721_2237033333260948_3649063029963751424_n.jpg', NULL, 0, 67676),
(78, NULL, 10, 0, 'محمد ', 'عمر', 'عبد الغني', 2, 1, 15, '0000-00-00', 119, 309, 151, 'مواليد يناير 2008 . عمره حوالي 10 سنوات\r\nتغيب يوم 24 ديسمبر 2009 لما كان عمره سنتين الا اسبوعين من اطلس #حلوان\r\nكان بيلعب قدام بيت جده و خالته دخلت تجبله اكل و اختفي\r\nبرجاء ممن لديه معلومه الاتصال \r\n01151974437\r\n01223001174', 31, 42, 35, 37, 110, 30, '2022-07-05 15:00:46', '1112222_33532216_1896582397306045_7480337006623457280_n.jpg', NULL, 0, 67676),
(79, NULL, 10, 0, 'محمد ', 'عمر', 'عبد الغني', 2, 1, 15, '0000-00-00', 119, 309, 151, 'مواليد يناير 2008 . عمره حوالي 10 سنوات\r\nتغيب يوم 24 ديسمبر 2009 لما كان عمره سنتين الا اسبوعين من اطلس #حلوان\r\nكان بيلعب قدام بيت جده و خالته دخلت تجبله اكل و اختفي\r\nبرجاء ممن لديه معلومه الاتصال \r\n01151974437\r\n01223001174', 31, 42, 35, 37, 110, 30, '2022-07-05 15:00:48', '881779_33532216_1896582397306045_7480337006623457280_n.jpg', NULL, 0, 67676),
(85, NULL, 0, 0, 'سماح', 'محمد', 'البنا', 3, 2, 15, '2022-06-08', 115, 106, 124, 'مواليد اوائل 2014\r\nاختفت يوم 17 يوليو 2015 و كان عمرها سنه و نص\r\nكانت قدام بيتها في عزبه الجرن مركز ابو حمص محافظه البحيره مع مامتها و مامتها دخلت تدخل حاجه البيت و خرجت بعد دقيقتين ملقتهاش. والد سماح بيقول انهم شكوا انها وقعت في ترعه امام البيت لكن بحثوا فيها كتير لكن دون جدوي. اي حد يعرف اي معلومه برجاء الاتصال \r\n 01225667272\r\n01229011592', 32, 40, 35, 37, 80, 50, '2022-07-05 15:00:25', '59307_11014882_1501788210118801_8609156303038009845_n.jpg', NULL, 0, 40009),
(86, NULL, 4, 0, 'عمر', 'عبدالرحمن', 'مكاوي', 2, 1, 15, '2022-06-27', 112, 79, 218, 'مواليد 2012. عمره الان 4 سنوات و نص\r\nاختفي في مايو 2014 من كرداسه المريوطيه و كان عمره سنتين و نص\r\nعمر كان مع والدته في زياره لبيت اهلها و كان قدام البيت و مامته دخلت و خرجت ملاقتوش\r\nيا ريت اللي عنده معلومه يتصل ب\r\n01013934139', 32, 40, 35, 37, 70, 30, '2022-07-15 19:04:37', '2866947_13522840_1594005574230397_6203037132226648232_o.jpg', NULL, 0, 40009),
(95, NULL, 15, 0, 'محمد', 'جمال', 'عواد', 2, 1, 15, '2020-01-05', 123, 168, 192, 'مواليد فبراير 2011\r\nاختفي يوم 23 اغسطس 2014 من #الاسماعيليه و كان عمره وقتها 3 سنوات\r\nكان بيلعب علي الشاطئ بنادى الدنفاه مع والدته واخته الصغيره. بكت اخته بشده فوالدته التفتت لها و انشغلت بها اقل من 5 دقايق و فجأه اختفي عبد الرحمن من امامها\r\nدوروا عليه في كل مكان، في المياه و داخل وخارج النادي وعلقوا صوره وللاسف مفيش اي اثر له\r\nلو حد عنده اي معلومه يتصل ب\r\n01008766073\r\n01002323640', 31, 40, 35, 36, 140, 40, '2022-07-05 15:00:52', '7834086_12250002_1517804415183847_3508745895629561542_n.jpg', NULL, 0, 40005),
(96, NULL, 20, 0, 'محمد', 'جمال', 'عواد', 2, 1, 15, '2022-06-01', 129, 212, 224, 'مواليد فبراير 2011\r\nاختفي يوم 23 اغسطس 2014 من #الاسماعيليه و كان عمره وقتها 3 سنوات\r\nكان بيلعب علي الشاطئ بنادى الدنفاه مع والدته واخته الصغيره. بكت اخته بشده فوالدته التفتت لها و انشغلت بها اقل من 5 دقايق و فجأه اختفي عبد الرحمن من امامها\r\nدوروا عليه في كل مكان، في المياه و داخل وخارج النادي وعلقوا صوره وللاسف مفيش اي اثر له\r\nلو حد عنده اي معلومه يتصل ب\r\n01008766073\r\n01002323640', 33, 40, 39, 36, 140, 40, '2022-07-05 15:00:56', '3162906_12250002_1517804415183847_3508745895629561542_n.jpg', NULL, 0, 40005),
(106, 2147483647, 0, 0, '', '', '', 2, 1, 21, '2022-07-15', 112, 78, 100, 'ناصر سيد عبد اللاه قناوي\r\nيعاني من اضطراب نفسي\r\nمواليد 1976 . عمره الان 44 سنه\r\nتغيب يوم 15 اكتوبر 2017 من محطه القطار #اسيوط\r\nبرجاء ممن يراه الاتصال ب', 32, 40, 35, 37, 180, 80, '2022-07-05 15:40:42', '', NULL, 0, 12345),
(109, 0, 0, 0, '', '', '', 2, 1, 15, '2022-07-09', 128, 251, 251, 'تغيب يوم 20 اغسطس 2019 في الطريق من #القاهره الي #سوهاج\r\nعمرو اصلا من طهطا و كان في القاهره و راجع بلده و ماوصلش\r\nبرجاء ممن يراه الاتصال ب\r\n\r\n01018302143', 34, 41, 35, 37, 180, 80, '2022-07-15 19:05:42', '1123136_69506890_2208668499430765_5249037677432406016_n.jpg', NULL, 0, 12345),
(110, 2147483647, 8, 0, 'جنا', 'احمد', 'محمد', 1, 2, 15, '2022-07-08', 116, 119, 251, 'تغيبت يوم 29 اكتوبر 2021 من جزيره ابو صالح مركز ناصر #بني_سويف\r\nكانت بتلعب قدام البيت و اختفت\r\nبرجاء ممن يراها الاتصال ب\r\n01283309768\r\n01227290121\r\n01382216104\r\n01226320586', 32, 40, 35, 37, 140, 40, '2022-07-15 19:05:44', '713282_250160284_2846702812293994_1455439846051453512_n.jpg', NULL, 0, 12345),
(111, 2147483647, 8, 0, 'جنا', 'احمد', 'محمد', 1, 2, 15, '2022-07-08', 116, 119, 115, 'متغيب يوم 18 ابريل 2020 من قريه الميمون الواسطي #بني_سويف\r\nبرجاء ممن يراه الاتصال ب\r\n01113555865', 31, 40, 35, 38, 180, 80, '2022-07-05 15:30:31', '2756372_118805871_2535022210128724_6125911647516477993_n.jpg', NULL, 0, 12345),
(112, 0, 0, 0, '', '', '', 2, 1, 15, '2022-07-28', 128, 271, 300, 'صصصصصصصصصصصصصصصصصصص', 31, 41, 36, 35, 180, 80, '2022-07-05 15:34:26', '1959727_281349707_147578307791262_6215280039372615612_n.jpg', NULL, 0, 12345),
(113, 40014, 12, 10234, 'Joy Shaw', 'Burton Lester', 'Quemby Mcgee', 1, 1, 19, '2022-07-06', 129, 212, 225, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 33, 40, 35, 32, 190, 90, '2022-07-05 15:50:23', '', NULL, 0, 12345),
(115, 0, 0, 0, '', '', '', 2, 1, 15, '2022-07-15', 124, 288, 186, 'يعاني من اضطراب نفسي\r\nتغيب يوم 13 سبتمبر 2019 من السماعنه فاقوس #الشرقيه\r\nبرجاء ممن لديه اي معلومات عنه الاتصال ب\r\n01008777724\r\nكود النشر 2080301', 31, 40, 37, 38, 170, 70, '2022-07-05 18:51:11', '8186914_120385153_2552468898384055_3420813684576900857_n.jpg', NULL, 0, 12345),
(116, 30001848, 20, 1062293101, 'ahmed', 'essam', 'zaied', 2, 1, 15, '2022-07-05', 124, 286, 183, 'شوهد امام المسجد', 32, 40, 36, 39, 170, 70, '2022-07-08 11:20:30', '1204509_69506890_2208668499430765_5249037677432406016_n.jpg', NULL, 0, 12345);

-- --------------------------------------------------------

--
-- Stand-in structure for view `missing_info`
-- (See below for the actual view)
--
CREATE TABLE `missing_info` (
`id` int(225)
,`SSN` int(225)
,`age` int(11)
,`phone` int(50)
,`name` text
,`relationWithMisssing` int(255)
,`gender` int(50)
,`nationality_code` int(11)
,`missing_date` date
,`governorate_code` int(50)
,`city_code` int(50)
,`department_code` int(50)
,`notes` text
,`hair_color` int(11)
,`skin_color` int(50)
,`eye_color` int(50)
,`disease_code` int(50)
,`height` int(255)
,`weight` int(255)
,`created_at` timestamp
,`image` varchar(225)
,`added_by_admin` int(50)
,`missingType` int(4)
,`added_by_citizines` int(225)
,`cityName` varchar(50)
,`governateName` varchar(255)
,`diseaseName` varchar(50)
,`nationalityName` varchar(225)
,`departmentName` varchar(255)
,`hairColName` varchar(10)
,`skinColName` varchar(10)
,`eyeColName` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `missing_location`
--

CREATE TABLE `missing_location` (
  `id` int(225) NOT NULL,
  `from_governorate` int(225) NOT NULL,
  `from_city` int(225) NOT NULL,
  `from_department` int(225) NOT NULL,
  `missing_code` int(225) NOT NULL,
  `to_governorate` int(225) NOT NULL,
  `to_city` int(225) NOT NULL,
  `to_department` int(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `missing_location`
--

INSERT INTO `missing_location` (`id`, `from_governorate`, `from_city`, `from_department`, `missing_code`, `to_governorate`, `to_city`, `to_department`, `created_at`) VALUES
(13, 130, 316, 236, 73, 130, 318, 298, '2022-07-11 23:59:11'),
(14, 130, 316, 236, 73, 130, 318, 305, '2022-07-05 00:18:31'),
(15, 130, 316, 236, 73, 130, 318, 305, '2022-07-05 00:18:32'),
(16, 130, 316, 236, 73, 130, 318, 305, '2022-07-05 00:18:32'),
(17, 130, 316, 236, 73, 130, 318, 305, '2022-07-05 00:18:32'),
(72, 129, 213, 230, 72, 129, 213, 307, '2022-07-15 01:00:14'),
(73, 129, 213, 230, 72, 129, 212, 308, '2022-07-15 01:01:05'),
(74, 129, 213, 230, 72, 129, 213, 307, '2022-07-15 01:06:11'),
(75, 119, 311, 148, 74, 119, 130, 305, '2022-07-15 01:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

CREATE TABLE `nationalities` (
  `nationality_code` int(225) NOT NULL,
  `nationality_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nationalities`
--

INSERT INTO `nationalities` (`nationality_code`, `nationality_name`) VALUES
(26, 'اردني'),
(33, 'بحرين'),
(18, 'تونسي'),
(20, 'جزائري'),
(32, 'جيبوتي'),
(23, 'سعودي'),
(16, 'سوداني'),
(17, 'سوري'),
(19, 'صومالي'),
(22, 'عراقي'),
(30, 'عماني'),
(36, 'غير ذلك'),
(35, 'فلسطيني'),
(31, 'قطري'),
(34, 'قمر'),
(29, 'كويتي'),
(27, 'لبناني'),
(25, 'ليبي'),
(15, 'مصري'),
(21, 'مغربي'),
(28, 'موروتاني'),
(24, 'يمني');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `reply_code` int(225) NOT NULL,
  `content` text NOT NULL,
  `comment_code` int(225) NOT NULL,
  `user_code` int(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`reply_code`, `content`, `comment_code`, `user_code`, `created_at`) VALUES
(1, 'انا ابنه', 70, 12345, '2022-07-06 15:35:41'),
(2, 'ربنا يرده لاهله يارب', 71, 40005, '2022-07-06 15:35:46'),
(7, 'ربنا  يرده لالهل يارب', 71, 40005, '2022-07-06 15:35:47');

-- --------------------------------------------------------

--
-- Structure for view `missing_info`
--
DROP TABLE IF EXISTS `missing_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `missing_info`  AS SELECT `missing`.`id` AS `id`, `missing`.`SSN` AS `SSN`, `missing`.`age` AS `age`, `missing`.`phone` AS `phone`, concat(`missing`.`First_Name`,' ',`missing`.`Mid_Name`,' ',`missing`.`Last_Name`) AS `name`, `missing`.`relationWithMisssing` AS `relationWithMisssing`, `missing`.`gender` AS `gender`, `missing`.`nationality_code` AS `nationality_code`, `missing`.`missing_date` AS `missing_date`, `missing`.`governorate_code` AS `governorate_code`, `missing`.`city_code` AS `city_code`, `missing`.`department_code` AS `department_code`, `missing`.`notes` AS `notes`, `missing`.`hair_color` AS `hair_color`, `missing`.`skin_color` AS `skin_color`, `missing`.`eye_color` AS `eye_color`, `missing`.`disease_code` AS `disease_code`, `missing`.`height` AS `height`, `missing`.`weight` AS `weight`, `missing`.`created_at` AS `created_at`, `missing`.`image` AS `image`, `missing`.`added_by_admin` AS `added_by_admin`, `missing`.`missingType` AS `missingType`, `missing`.`added_by_citizines` AS `added_by_citizines`, `cities`.`citiese_name` AS `cityName`, `governorate`.`Governorate_name` AS `governateName`, `diseases`.`disease_name` AS `diseaseName`, `nationalities`.`nationality_name` AS `nationalityName`, `departments`.`department_name` AS `departmentName`, `colors`.`color` AS `hairColName`, `colors1`.`color` AS `skinColName`, `colors2`.`color` AS `eyeColName` FROM ((((((((`missing` join `cities` on(`missing`.`city_code` = `cities`.`cities_code`)) join `governorate` on(`missing`.`governorate_code` = `governorate`.`Governorate_code`)) join `diseases` on(`missing`.`disease_code` = `diseases`.`diseases_code`)) join `nationalities` on(`missing`.`nationality_code` = `nationalities`.`nationality_code`)) join `departments` on(`missing`.`department_code` = `departments`.`department_code`)) join `colors` on(`missing`.`skin_color` = `colors`.`color_code`)) join `colors` `colors1` on(`missing`.`eye_color` = `colors1`.`color_code`)) join `colors` `colors2` on(`missing`.`hair_color` = `colors2`.`color_code`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ssn`),
  ADD KEY `governorate_code` (`governorate_code`),
  ADD KEY `cites_code` (`cites_code`),
  ADD KEY `department_code` (`department_code`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cities_code`),
  ADD KEY `Governorate_code` (`Governorate_code`);

--
-- Indexes for table `citizines`
--
ALTER TABLE `citizines`
  ADD PRIMARY KEY (`ssn`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `governorate_code` (`governorate_code`),
  ADD KEY `city_code` (`city_code`),
  ADD KEY `department_code` (`department_code`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_code`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_code`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_code`),
  ADD KEY `governorate_code` (`governorate_code`),
  ADD KEY `cites_code` (`cites_code`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`diseases_code`);

--
-- Indexes for table `governorate`
--
ALTER TABLE `governorate`
  ADD PRIMARY KEY (`Governorate_code`),
  ADD UNIQUE KEY `Governorate_name` (`Governorate_name`);

--
-- Indexes for table `missing`
--
ALTER TABLE `missing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_by_admin` (`added_by_admin`),
  ADD KEY `added_by_citizines` (`added_by_citizines`),
  ADD KEY `skin_color` (`skin_color`),
  ADD KEY `hair_color` (`hair_color`),
  ADD KEY `eye_color` (`eye_color`),
  ADD KEY `disease_code` (`disease_code`),
  ADD KEY `governorate_code` (`governorate_code`),
  ADD KEY `city_code` (`city_code`),
  ADD KEY `department_code` (`department_code`),
  ADD KEY `nationality_code` (`nationality_code`);

--
-- Indexes for table `missing_location`
--
ALTER TABLE `missing_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_city` (`from_city`),
  ADD KEY `from_department` (`from_department`),
  ADD KEY `from_governorate` (`from_governorate`),
  ADD KEY `missing_code` (`missing_code`),
  ADD KEY `to_city` (`to_city`),
  ADD KEY `to_department` (`to_department`),
  ADD KEY `to_governorate` (`to_governorate`);

--
-- Indexes for table `nationalities`
--
ALTER TABLE `nationalities`
  ADD PRIMARY KEY (`nationality_code`),
  ADD UNIQUE KEY `nationality_name` (`nationality_name`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`reply_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `cities_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `color_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_code` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `diseases_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `governorate`
--
ALTER TABLE `governorate`
  MODIFY `Governorate_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `missing`
--
ALTER TABLE `missing`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `missing_location`
--
ALTER TABLE `missing_location`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `nationalities`
--
ALTER TABLE `nationalities`
  MODIFY `nationality_code` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `reply_code` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`governorate_code`) REFERENCES `governorate` (`Governorate_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admins_ibfk_2` FOREIGN KEY (`cites_code`) REFERENCES `cities` (`cities_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admins_ibfk_3` FOREIGN KEY (`department_code`) REFERENCES `departments` (`department_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`Governorate_code`) REFERENCES `governorate` (`Governorate_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `citizines`
--
ALTER TABLE `citizines`
  ADD CONSTRAINT `citizines_ibfk_1` FOREIGN KEY (`department_code`) REFERENCES `departments` (`department_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citizines_ibfk_2` FOREIGN KEY (`governorate_code`) REFERENCES `governorate` (`Governorate_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citizines_ibfk_3` FOREIGN KEY (`city_code`) REFERENCES `cities` (`cities_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`governorate_code`) REFERENCES `governorate` (`Governorate_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `departments_ibfk_2` FOREIGN KEY (`cites_code`) REFERENCES `cities` (`cities_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `missing`
--
ALTER TABLE `missing`
  ADD CONSTRAINT `missing_ibfk_1` FOREIGN KEY (`added_by_admin`) REFERENCES `admins` (`ssn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_ibfk_2` FOREIGN KEY (`added_by_citizines`) REFERENCES `citizines` (`ssn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_ibfk_3` FOREIGN KEY (`eye_color`) REFERENCES `colors` (`color_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_ibfk_4` FOREIGN KEY (`hair_color`) REFERENCES `colors` (`color_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_ibfk_5` FOREIGN KEY (`skin_color`) REFERENCES `colors` (`color_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_ibfk_6` FOREIGN KEY (`disease_code`) REFERENCES `diseases` (`diseases_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_ibfk_7` FOREIGN KEY (`governorate_code`) REFERENCES `governorate` (`Governorate_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_ibfk_8` FOREIGN KEY (`city_code`) REFERENCES `cities` (`cities_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_ibfk_9` FOREIGN KEY (`nationality_code`) REFERENCES `nationalities` (`nationality_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `missing_location`
--
ALTER TABLE `missing_location`
  ADD CONSTRAINT `missing_location_ibfk_1` FOREIGN KEY (`to_department`) REFERENCES `departments` (`department_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_location_ibfk_2` FOREIGN KEY (`missing_code`) REFERENCES `missing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_location_ibfk_3` FOREIGN KEY (`from_department`) REFERENCES `departments` (`department_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_location_ibfk_4` FOREIGN KEY (`from_governorate`) REFERENCES `governorate` (`Governorate_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_location_ibfk_5` FOREIGN KEY (`to_governorate`) REFERENCES `governorate` (`Governorate_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_location_ibfk_6` FOREIGN KEY (`from_city`) REFERENCES `cities` (`cities_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_location_ibfk_7` FOREIGN KEY (`to_city`) REFERENCES `cities` (`cities_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
