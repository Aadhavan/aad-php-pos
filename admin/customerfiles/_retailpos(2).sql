-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 10:48 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `retailpos`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `intId` int(10) NOT NULL,
  `varBrandName` varchar(240) NOT NULL,
  `varBrandDesc` mediumtext NOT NULL,
  `intStatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`intId`, `varBrandName`, `varBrandDesc`, `intStatus`) VALUES
(1, 'APPLE', '', 1),
(2, 'SAMSUNG', '', 1),
(3, 'GOOGLE ', '', 1),
(4, 'OPPO', 'OPPO', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brandmodel`
--

CREATE TABLE `brandmodel` (
  `bmodel_id` int(11) NOT NULL,
  `bmodel_brandid` int(11) DEFAULT NULL,
  `bmodel_name` varchar(255) NOT NULL,
  `bmodel_desc` varchar(255) NOT NULL,
  `bmodel_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brandmodel`
--

INSERT INTO `brandmodel` (`bmodel_id`, `bmodel_brandid`, `bmodel_name`, `bmodel_desc`, `bmodel_status`) VALUES
(1, 1, 'IPHONE X ', '', 1),
(2, 1, 'IPHONE 8 PLUS ', 'iPhone 8 plus ', 1),
(3, 1, 'IPHONE 8 ', '', 1),
(4, 2, 'GALAXY S8 PLUS ', '', 1),
(5, 2, 'GALAXY S8 ', '', 1),
(6, 3, 'PIXEL 2 ', '', 1),
(7, 3, 'PIXEL 2 XL', '', 1),
(8, 1, 'IPAD PRO 10.5\'\' 4G', 'IPAD PRO 10.5\'\' 4G', 1),
(9, 1, 'IPHONE 8 PLUS ', 'IPHONE 8 PLUS ', 1),
(10, 1, 'IPHONE 8 ', 'IPHONE 8 ', 1),
(11, 1, 'IPHONE 8', 'IPHONE 8 ', 1),
(12, 1, 'IPHONE 8 PLUS ', 'IPHONE 8 PLUS ', 1),
(13, 1, 'IPAD PRO 10.5\'\' 4G', 'IPAD PRO 10.5\'\' 4G', 1),
(14, 1, 'iphone 6 ', 'iphone 6 ', 1),
(15, 1, 'IPAD PRO 12.9\'\' 4G ', 'IPAD PRO 12.9\'\' 4G ', 1),
(16, 1, 'IPAD PRO 12.9\'\' WIFI ONLY ', 'IPAD PRO 12.9\'\' WIFI ONLY ', 1),
(17, 2, 'GALAXY NOTE 8', 'GALAXY NOTE 8', 1),
(18, 2, 'SAMSUNG GALAXY S8 PLUS ', 'SAMSUNG GALAXY S8 PLUS ', 1),
(19, 1, 'IPHONE 7 ', 'IPHONE 7', 1),
(20, 1, 'IPHONE SE ', 'IPHONE SE', 1),
(21, 2, 'S9 ', 'S9 ', 1),
(22, 0, 'S9 PLUS', 'S9  PLUS', 1),
(23, 2, 'S9 PLUS', 'S9 PLUS', 1),
(24, 2, 'GALAXY J5 PRO ', 'GALAXY J5 PRO ', 1),
(25, 4, 'A57', 'OPPO \r\nA57', 1),
(26, 1, 'IPOD TOUCH ', 'IPOD TOUCH ', 1),
(27, 3, 'PIXEL 2 ', 'PIXEL 2 ', 1),
(28, 3, 'PIXEL 2 XL ', 'PIXEL 2 XL ', 1),
(29, 1, 'IPAD PRO 10.5â€ WIFI', 'IPAD PRO 10.5â€ WIFI', 1),
(30, 2, 'Galaxy J2 pro ', 'Galaxy J2 pro ', 1),
(31, 2, 'Galaxy s7 ', 'Galaxy s7 ', 1),
(33, 1, 'Macbook pro 13\'\' ', 'Macbook pro 13\'\' ', 1),
(34, 1, 'IPAD MINI 4 ', 'IPAD MINI 4 ', 1),
(35, 1, 'MACBOOK AIR 13â€™â€™', 'MACBOOK AIR 13â€™â€™', 1),
(36, 1, 'iPad 5th gen 4G', 'iPad 5th gen 4G', 1),
(37, 1, 'iPad 5th wifi only ', 'iPad 5th wifi only ', 1),
(38, 1, 'ipad 6th gen wifi', 'ipad 6th gen wifi', 1),
(39, 1, 'ipad 6th gen 4G', 'ipad 6th gen 4G', 1),
(40, 1, 'Samsung Galaxy s8', 'Samsung Galaxy s8', 1),
(41, 1, 'MACBOOK PRO 15\'\'', 'MACBOOK PRO 15\'\'', 1);

-- --------------------------------------------------------

--
-- Table structure for table `capacity`
--

CREATE TABLE `capacity` (
  `capacity_id` int(11) NOT NULL,
  `capacity_name` varchar(255) DEFAULT NULL,
  `capacity_desc` varchar(255) DEFAULT NULL,
  `capacity_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capacity`
--

INSERT INTO `capacity` (`capacity_id`, `capacity_name`, `capacity_desc`, `capacity_status`) VALUES
(1, '16GB', '', 1),
(2, '32GB', '', 1),
(3, '64GB', '', 1),
(4, '128GB', '', 1),
(5, '256GB', '', 1),
(6, '512GB', '', 1),
(7, '1TB', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE `cash` (
  `cash_id` int(11) NOT NULL,
  `cash_name` varchar(255) DEFAULT NULL,
  `cash_desc` varchar(255) DEFAULT NULL,
  `cash_satus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`cash_id`, `cash_name`, `cash_desc`, `cash_satus`) VALUES
(2, 'CASH ', '', 1),
(3, 'BANK TRANSFER ', '', 1),
(4, 'CARD ', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE `colour` (
  `colour_id` int(11) NOT NULL,
  `colour_name` varchar(255) DEFAULT NULL,
  `colour_desc` varchar(255) DEFAULT NULL,
  `colour_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`colour_id`, `colour_name`, `colour_desc`, `colour_status`) VALUES
(1, 'BLACK ', '', 1),
(2, 'WHITE', '', 1),
(3, 'SILVER', '', 1),
(4, 'SPACE GREY ', '', 1),
(5, 'BLUE', '', 1),
(6, 'ROSEGOLD', '', 1),
(7, 'GOLD ', '', 1),
(8, 'JET BLACK', '', 1),
(9, 'MATT BLACK', '', 1),
(10, 'RED', '', 1),
(11, 'Purple', 'Purple', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `com_id` int(11) NOT NULL,
  `com_name` varchar(255) DEFAULT NULL,
  `com_contact_name` varchar(255) DEFAULT NULL,
  `com_phone` varchar(255) DEFAULT NULL,
  `com_mob` varchar(255) DEFAULT NULL,
  `com_email` varchar(255) DEFAULT NULL,
  `com_address` varchar(255) DEFAULT NULL,
  `com_state` varchar(255) DEFAULT NULL,
  `com_postcode` varchar(255) DEFAULT NULL,
  `com_country` varchar(255) DEFAULT NULL,
  `com_abn` varchar(255) DEFAULT NULL,
  `com_acn` varchar(255) DEFAULT NULL,
  `com_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`com_id`, `com_name`, `com_contact_name`, `com_phone`, `com_mob`, `com_email`, `com_address`, `com_state`, `com_postcode`, `com_country`, `com_abn`, `com_acn`, `com_status`) VALUES
(4, 'Pacific Force Pty Ltd ', 'RIYAZ', '0449906786', '0449906786', 'pacificforce.pty.ltd@gmail.com', '1048 Beaudesert road \r\ncoopers plains QLD 4108', 'Queensland', '4110', 'Australia', '32 606 717 471 ', '606 717 47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_contact_name` varchar(255) DEFAULT NULL,
  `cus_phone` varchar(255) DEFAULT NULL,
  `cus_mobileno` varchar(255) DEFAULT NULL,
  `cus_email` varchar(255) DEFAULT NULL,
  `cus_adress` varchar(255) DEFAULT NULL,
  `cus_state` varchar(255) DEFAULT NULL,
  `cus_postcode` varchar(255) DEFAULT NULL,
  `cus_country` varchar(255) DEFAULT NULL,
  `cus_license_no` varchar(255) DEFAULT NULL,
  `cus_license_imge` varchar(255) DEFAULT NULL,
  `cus_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_contact_name`, `cus_phone`, `cus_mobileno`, `cus_email`, `cus_adress`, `cus_state`, `cus_postcode`, `cus_country`, `cus_license_no`, `cus_license_imge`, `cus_status`) VALUES
(1, 'Mobileciti Australia Pty Ltd ', '0404049889', '0404049889', 'vas@idya.com.au', '      7b/118 Church St, Parramatta', 'New South Wales ', '2150', 'Australia', '43 117 746 424 ', NULL, 1),
(10, 'Ausluck', '0418994986', '0418994986', 'riyaz_australian@yahoo.com.au', ' 5 RESERVOIR  CRESCENT \r\nROWVILLE', 'VICTORIA', '3178', 'AUSTRALIA', '96614466634', NULL, 1),
(11, 'MYMOBILE', '0413555060', '0413555060', 'riyaz_australian@yahoo.com.au', ' 103 Adelaide St, Brisbane City ', 'Queensland', '4000', 'Australia', '118114929574', NULL, 1),
(12, 'Peter McCallum', NULL, '61889567358', 'p.mccallum@bom.gov.au', 'Giles Weather Station\r\nPrivate Mail Bag 11\r\nAlice Springs\r\nNorthern Territory 0872\r\nAUSTRALIA', NULL, NULL, NULL, '', NULL, 1),
(13, 'Nathan Hamad ', NULL, '0477111171', 'u2sadam@hotmail.com', '171 Davies Rd \r\nadtsow NSW 2211\r\nAUSTRALIA', NULL, NULL, NULL, '', NULL, 1),
(14, 'Riyaz', NULL, '0456555444', 'Riyaz_gem@yahoo.com', '13 the ave heathwood', NULL, NULL, NULL, '', NULL, 1),
(15, 'Riyaz', NULL, '04494494949', 'Pacificforce.pty.ltd@gmail.com', '', NULL, NULL, NULL, '', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `DistCode` int(11) NOT NULL,
  `StCode` int(11) DEFAULT NULL,
  `DistrictName` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DistCode`, `StCode`, `DistrictName`) VALUES
(1, 1, 'North and Middle Andama'),
(2, 1, 'South Andama'),
(3, 1, 'Nicobar'),
(4, 2, 'Anantapur'),
(5, 2, 'Chittoor'),
(6, 2, 'East Godavari'),
(7, 2, 'Guntur'),
(8, 2, 'Krishna'),
(9, 2, 'Kurnool'),
(10, 2, 'Prakasam'),
(11, 2, 'Srikakulam'),
(12, 2, 'Sri Potti Sri Ramulu Nellore'),
(13, 2, 'Vishakhapatnam'),
(14, 2, 'Vizianagaram'),
(15, 2, 'West Godavari'),
(16, 2, 'Cudappah'),
(17, 3, 'Anjaw'),
(18, 3, 'Changlang'),
(19, 3, 'East Siang'),
(20, 3, 'East Kameng'),
(21, 3, 'Kurung Kumey'),
(22, 3, 'Lohit'),
(23, 3, 'Lower Dibang Valley'),
(24, 3, 'Lower Subansiri'),
(25, 3, 'Papum Pare'),
(26, 3, 'Tawang'),
(27, 3, 'Tirap'),
(28, 3, 'Dibang Valley'),
(29, 3, 'Upper Siang'),
(30, 3, 'Upper Subansiri'),
(31, 3, 'West Kameng'),
(32, 3, 'West Siang'),
(33, 4, 'Baksa'),
(34, 4, 'Barpeta'),
(35, 4, 'Bongaigao'),
(36, 4, 'Cachar'),
(37, 4, 'Chirang'),
(38, 4, 'Darrang'),
(39, 4, 'Dhemaji'),
(40, 4, 'Dima Hasao'),
(41, 4, 'Dhubri'),
(42, 4, 'Dibrugarh'),
(43, 4, 'Goalpara'),
(44, 4, 'Golaghat'),
(45, 4, 'Hailakandi'),
(46, 4, 'Jorhat'),
(47, 4, 'Kamrup'),
(48, 4, 'Kamrup Metropolita'),
(49, 4, 'Karbi Anglong'),
(50, 4, 'Karimganj'),
(51, 4, 'Kokrajhar'),
(52, 4, 'Lakhimpur'),
(53, 4, 'Morigao'),
(54, 4, 'Nagao'),
(55, 4, 'Nalbari'),
(56, 4, 'Sivasagar'),
(57, 4, 'Sonitpur'),
(58, 4, 'Tinsukia'),
(59, 4, 'Udalguri'),
(60, 5, 'Araria'),
(61, 5, 'Arwal'),
(62, 5, 'Aurangabad'),
(63, 5, 'Banka'),
(64, 5, 'Begusarai'),
(65, 5, 'Bhagalpur'),
(66, 5, 'Bhojpur'),
(67, 5, 'Buxar'),
(68, 5, 'Darbhanga'),
(69, 5, 'East Champara'),
(70, 5, 'Gaya'),
(71, 5, 'Gopalganj'),
(72, 5, 'Jamui'),
(73, 5, 'Jehanabad'),
(74, 5, 'Kaimur'),
(75, 5, 'Katihar'),
(76, 5, 'Khagaria'),
(77, 5, 'Kishanganj'),
(78, 5, 'Lakhisarai'),
(79, 5, 'Madhepura'),
(80, 5, 'Madhubani'),
(81, 5, 'Munger'),
(82, 5, 'Muzaffarpur'),
(83, 5, 'Nalanda'),
(84, 5, 'Nawada'),
(85, 5, 'Patna'),
(86, 5, 'Purnia'),
(87, 5, 'Rohtas'),
(88, 5, 'Saharsa'),
(89, 5, 'Samastipur'),
(90, 5, 'Sara'),
(91, 5, 'Sheikhpura'),
(92, 5, 'Sheohar'),
(93, 5, 'Sitamarhi'),
(94, 5, 'Siwa'),
(95, 5, 'Supaul'),
(96, 5, 'Vaishali'),
(97, 5, 'West Champara'),
(98, 6, 'Chandigarh'),
(99, 7, 'Bastar'),
(100, 7, 'Bijapur'),
(101, 7, 'Bilaspur'),
(102, 7, 'Dantewada'),
(103, 7, 'Dhamtari'),
(104, 7, 'Durg'),
(105, 7, 'Jashpur'),
(106, 7, 'Janjgir-Champa'),
(107, 7, 'Korba'),
(108, 7, 'Koriya'),
(109, 7, 'Kanker'),
(110, 7, 'Kabirdham (formerly Kawardha);'),
(111, 7, 'Mahasamund'),
(112, 7, 'Narayanpur'),
(113, 7, 'Raigarh'),
(114, 7, 'Rajnandgao'),
(115, 7, 'Raipur'),
(116, 7, 'Surajpur'),
(117, 8, 'Dadra and Nagar Haveli'),
(118, 9, 'Dama'),
(119, 9, 'Diu'),
(120, 10, 'Central Delhi'),
(121, 10, 'East Delhi'),
(122, 10, 'New Delhi'),
(123, 10, 'North Delhi'),
(124, 10, 'North East Delhi'),
(125, 10, 'North West Delhi'),
(126, 10, 'South Delhi'),
(127, 10, 'South West Delhi'),
(128, 10, 'West Delhi'),
(129, 11, 'North Goa'),
(130, 11, 'South Goa'),
(131, 12, 'Ahmedabad'),
(132, 12, 'Amreli'),
(133, 12, 'Anand'),
(134, 12, 'Aravalli'),
(135, 12, 'Banaskantha'),
(136, 12, 'Bharuch'),
(137, 12, 'Bhavnagar'),
(138, 12, 'Dahod'),
(139, 12, 'Dang'),
(140, 12, 'Gandhinagar'),
(141, 12, 'Jamnagar'),
(142, 12, 'Junagadh'),
(143, 12, 'Kutch'),
(144, 12, 'Kheda'),
(145, 12, 'Mehsana'),
(146, 12, 'Narmada'),
(147, 12, 'Navsari'),
(148, 12, 'Pata'),
(149, 12, 'Panchmahal'),
(150, 12, 'Porbandar'),
(151, 12, 'Rajkot'),
(152, 12, 'Sabarkantha'),
(153, 12, 'Surendranagar'),
(154, 12, 'Surat'),
(155, 12, 'Tapi'),
(156, 12, 'Vadodara'),
(157, 12, 'Valsad'),
(158, 13, 'Ambala'),
(159, 13, 'Bhiwani'),
(160, 13, 'Faridabad'),
(161, 13, 'Fatehabad'),
(162, 13, 'Gurgao'),
(163, 13, 'Hissar'),
(164, 13, 'Jhajjar'),
(165, 13, 'Jind'),
(166, 13, 'Karnal'),
(167, 13, 'Kaithal'),
(168, 13, 'Kurukshetra'),
(169, 13, 'Mahendragarh'),
(170, 13, 'Mewat'),
(171, 13, 'Palwal'),
(172, 13, 'Panchkula'),
(173, 13, 'Panipat'),
(174, 13, 'Rewari'),
(175, 13, 'Rohtak'),
(176, 13, 'Sirsa'),
(177, 13, 'Sonipat'),
(178, 13, 'Yamuna Nagar'),
(179, 14, 'Bilaspur'),
(180, 14, 'Chamba'),
(181, 14, 'Hamirpur'),
(182, 14, 'Kangra'),
(183, 14, 'Kinnaur'),
(184, 14, 'Kullu'),
(185, 14, 'Lahaul and Spiti'),
(186, 14, 'Mandi'),
(187, 14, 'Shimla'),
(188, 14, 'Sirmaur'),
(189, 14, 'Sola'),
(190, 14, 'Una'),
(191, 15, 'Anantnag'),
(192, 15, 'Badgam'),
(193, 15, 'Bandipora'),
(194, 15, 'Baramulla'),
(195, 15, 'Doda'),
(196, 15, 'Ganderbal'),
(197, 15, 'Jammu'),
(198, 15, 'Kargil'),
(199, 15, 'Kathua'),
(200, 15, 'Kishtwar'),
(202, 15, 'Kupwara'),
(203, 15, 'Kulgam'),
(204, 15, 'Leh'),
(205, 15, 'Poonch'),
(206, 15, 'Pulwama'),
(207, 15, 'Rajouri'),
(208, 15, 'Ramba'),
(209, 15, 'Reasi'),
(210, 15, 'Samba'),
(211, 15, 'Shopia'),
(212, 15, 'Srinagar'),
(213, 15, 'Udhampur'),
(214, 16, 'Bokaro'),
(215, 16, 'Chatra'),
(216, 16, 'Deoghar'),
(217, 16, 'Dhanbad'),
(218, 16, 'Dumka'),
(219, 16, 'East Singhbhum'),
(220, 16, 'Garhwa'),
(221, 16, 'Giridih'),
(222, 16, 'Godda'),
(223, 16, 'Gumla'),
(224, 16, 'Hazaribag'),
(225, 16, 'Jamtara'),
(226, 16, 'Khunti'),
(227, 16, 'Koderma'),
(228, 16, 'Latehar'),
(229, 16, 'Lohardaga'),
(230, 16, 'Pakur'),
(231, 16, 'Palamu'),
(232, 16, 'Ramgarh'),
(233, 16, 'Ranchi'),
(234, 16, 'Sahibganj'),
(235, 16, 'Seraikela Kharsawa'),
(236, 16, 'Simdega'),
(237, 16, 'West Singhbhum'),
(238, 17, 'Bagalkot'),
(239, 17, 'Bangalore Rural'),
(240, 17, 'Bangalore Urba'),
(241, 17, 'Belgaum'),
(242, 17, 'Bellary'),
(243, 17, 'Bidar'),
(244, 17, 'Bijapur'),
(245, 17, 'Chamarajnagar'),
(246, 17, 'Chikkamagaluru'),
(247, 17, 'Chikkaballapur'),
(248, 17, 'Chitradurga'),
(249, 17, 'Davanagere'),
(250, 17, 'Dharwad'),
(251, 17, 'Dakshina Kannada'),
(252, 17, 'Gadag'),
(253, 17, 'Gulbarga'),
(254, 17, 'Hassa'),
(255, 17, 'Haveri'),
(256, 17, 'Kodagu'),
(257, 17, 'Kolar'),
(258, 17, 'Koppal'),
(259, 17, 'Mandya'),
(260, 17, 'Mysore'),
(261, 17, 'Raichur'),
(262, 17, 'Shimoga'),
(263, 17, 'Tumkur'),
(264, 17, 'Udupi'),
(265, 17, 'Uttara Kannada'),
(266, 17, 'Ramanagara'),
(267, 17, 'Yadgir'),
(268, 18, 'Alappuzha'),
(269, 18, 'Ernakulam'),
(270, 18, 'Idukki'),
(271, 18, 'Kannur'),
(272, 18, 'Kasaragod'),
(273, 18, 'Kollam'),
(274, 18, 'Kottayam'),
(275, 18, 'Kozhikode'),
(276, 18, 'Malappuram'),
(277, 18, 'Palakkad'),
(278, 18, 'Pathanamthitta'),
(279, 18, 'Thrissur'),
(280, 18, 'Thiruvananthapuram'),
(281, 18, 'Wayanad'),
(282, 19, 'Lakshadweep'),
(283, 20, 'Agar'),
(284, 20, 'Alirajpur'),
(285, 20, 'Anuppur'),
(286, 20, 'Ashok Nagar'),
(287, 20, 'Balaghat'),
(288, 20, 'Barwani'),
(289, 20, 'Betul'),
(290, 20, 'Bhind'),
(291, 20, 'Bhopal'),
(292, 20, 'Burhanpur'),
(293, 20, 'Chhatarpur'),
(294, 20, 'Chhindwara'),
(295, 20, 'Damoh'),
(296, 20, 'Datia'),
(297, 20, 'Dewas'),
(298, 20, 'Dhar'),
(299, 20, 'Dindori'),
(300, 20, 'Guna'),
(301, 20, 'Gwalior'),
(302, 20, 'Harda'),
(303, 20, 'Hoshangabad'),
(304, 20, 'Indore'),
(305, 20, 'Jabalpur'),
(306, 20, 'Jhabua'),
(307, 20, 'Katni'),
(308, 20, 'Khandwa (East Nimar);'),
(309, 20, 'Khargone (West Nimar);'),
(310, 20, 'Mandla'),
(311, 20, 'Mandsaur'),
(312, 20, 'Morena'),
(313, 20, 'Narsinghpur'),
(314, 20, 'Neemuch'),
(315, 20, 'Panna'),
(316, 20, 'Raise'),
(317, 20, 'Rajgarh'),
(318, 20, 'Ratlam'),
(319, 20, 'Rewa'),
(320, 20, 'Sagar'),
(321, 20, 'Satna'),
(322, 20, 'Sehore'),
(323, 20, 'Seoni'),
(324, 20, 'Shahdol'),
(325, 20, 'Shajapur'),
(326, 20, 'Sheopur'),
(327, 20, 'Shivpuri'),
(328, 20, 'Sidhi'),
(329, 20, 'Singrauli'),
(330, 20, 'Tikamgarh'),
(331, 20, 'Ujjai'),
(332, 20, 'Umaria'),
(333, 20, 'Vidisha'),
(334, 21, 'Ahmednagar'),
(335, 21, 'Akola'),
(336, 21, 'Amravati'),
(337, 21, 'Aurangabad'),
(338, 21, 'Beed'),
(339, 21, 'Bhandara'),
(340, 21, 'Buldhana'),
(341, 21, 'Chandrapur'),
(342, 21, 'Dhule'),
(343, 21, 'Gadchiroli'),
(344, 21, 'Gondia'),
(345, 21, 'Hingoli'),
(346, 21, 'Jalgao'),
(347, 21, 'Jalna'),
(348, 21, 'Kolhapur'),
(349, 21, 'Latur'),
(350, 21, 'Mumbai City'),
(351, 21, 'Mumbai suburba'),
(352, 21, 'Nanded'),
(353, 21, 'Nandurbar'),
(354, 21, 'Nagpur'),
(355, 21, 'Nashik'),
(356, 21, 'Osmanabad'),
(357, 21, 'Parbhani'),
(358, 21, 'Pune'),
(359, 21, 'Raigad'),
(360, 21, 'Ratnagiri'),
(361, 21, 'Sangli'),
(362, 21, 'Satara'),
(363, 21, 'Sindhudurg'),
(364, 21, 'Solapur'),
(365, 21, 'Thane'),
(366, 21, 'Wardha'),
(367, 21, 'Washim'),
(368, 21, 'Yavatmal'),
(369, 22, 'Bishnupur'),
(370, 22, 'Churachandpur'),
(371, 22, 'Chandel'),
(372, 22, 'Imphal East'),
(373, 22, 'Senapati'),
(374, 22, 'Tamenglong'),
(375, 22, 'Thoubal'),
(376, 22, 'Ukhrul'),
(377, 22, 'Imphal West'),
(378, 23, 'East Garo Hills'),
(379, 23, 'East Khasi Hills'),
(380, 23, 'Jaintia Hills'),
(381, 23, 'Ri Bhoi'),
(382, 23, 'South Garo Hills'),
(383, 23, 'West Garo Hills'),
(384, 23, 'West Khasi Hills'),
(385, 24, 'Aizawl'),
(386, 24, 'Champhai'),
(387, 24, 'Kolasib'),
(388, 24, 'Lawngtlai'),
(389, 24, 'Lunglei'),
(390, 24, 'Mamit'),
(391, 24, 'Saiha'),
(392, 24, 'Serchhip'),
(393, 25, 'Dimapur'),
(394, 25, 'Kiphire'),
(395, 25, 'Kohima'),
(396, 25, 'Longleng'),
(397, 25, 'Mokokchung'),
(398, 25, 'Mo'),
(399, 25, 'Pere'),
(400, 25, 'Phek'),
(401, 25, 'Tuensang'),
(402, 25, 'Wokha'),
(403, 25, 'Zunheboto'),
(404, 26, 'Angul'),
(405, 26, 'Boudh (Bauda);'),
(406, 26, 'Bhadrak'),
(407, 26, 'Balangir'),
(408, 26, 'Bargarh (Baragarh);'),
(409, 26, 'Balasore'),
(410, 26, 'Cuttack'),
(411, 26, 'Debagarh (Deogarh);'),
(412, 26, 'Dhenkanal'),
(413, 26, 'Ganjam'),
(414, 26, 'Gajapati'),
(415, 26, 'Jharsuguda'),
(416, 26, 'Jajpur'),
(417, 26, 'Jagatsinghpur'),
(418, 26, 'Khordha'),
(419, 26, 'Kendujhar (Keonjhar);'),
(420, 26, 'Kalahandi'),
(421, 26, 'Kandhamal'),
(422, 26, 'Koraput'),
(423, 26, 'Kendrapara'),
(424, 26, 'Malkangiri'),
(425, 26, 'Mayurbhanj'),
(426, 26, 'Nabarangpur'),
(427, 26, 'Nuapada'),
(428, 26, 'Nayagarh'),
(429, 26, 'Puri'),
(430, 26, 'Rayagada'),
(431, 26, 'Sambalpur'),
(432, 26, 'Subarnapur (Sonepur);'),
(433, 26, 'Sundergarh'),
(434, 27, 'Karaikal'),
(435, 27, 'Mahe'),
(436, 27, 'Pondicherry'),
(437, 27, 'Yanam'),
(438, 28, 'Amritsar'),
(439, 28, 'Barnala'),
(440, 28, 'Bathinda'),
(441, 28, 'Firozpur'),
(442, 28, 'Faridkot'),
(443, 28, 'Fatehgarh Sahib'),
(444, 28, 'Fazilka'),
(445, 28, 'Gurdaspur'),
(446, 28, 'Hoshiarpur'),
(447, 28, 'Jalandhar'),
(448, 28, 'Kapurthala'),
(449, 28, 'Ludhiana'),
(450, 28, 'Mansa'),
(451, 28, 'Moga'),
(452, 28, 'Sri Muktsar Sahib'),
(453, 28, 'Pathankot'),
(454, 28, 'Patiala'),
(455, 28, 'Rupnagar'),
(456, 28, 'Ajitgarh (Mohali);'),
(457, 28, 'Sangrur'),
(458, 28, 'Shahid Bhagat Singh Nagar'),
(459, 28, 'Tarn Tara'),
(460, 29, 'Ajmer'),
(461, 29, 'Alwar'),
(462, 29, 'Bikaner'),
(463, 29, 'Barmer'),
(464, 29, 'Banswara'),
(465, 29, 'Bharatpur'),
(466, 29, 'Bara'),
(467, 29, 'Bundi'),
(468, 29, 'Bhilwara'),
(469, 29, 'Churu'),
(470, 29, 'Chittorgarh'),
(471, 29, 'Dausa'),
(472, 29, 'Dholpur'),
(473, 29, 'Dungapur'),
(474, 29, 'Ganganagar'),
(475, 29, 'Hanumangarh'),
(476, 29, 'Jhunjhunu'),
(477, 29, 'Jalore'),
(478, 29, 'Jodhpur'),
(479, 29, 'Jaipur'),
(480, 29, 'Jaisalmer'),
(481, 29, 'Jhalawar'),
(482, 29, 'Karauli'),
(483, 29, 'Kota'),
(484, 29, 'Nagaur'),
(485, 29, 'Pali'),
(486, 29, 'Pratapgarh'),
(487, 29, 'Rajsamand'),
(488, 29, 'Sikar'),
(489, 29, 'Sawai Madhopur'),
(490, 29, 'Sirohi'),
(491, 29, 'Tonk'),
(492, 29, 'Udaipur'),
(493, 30, 'East Sikkim'),
(494, 30, 'North Sikkim'),
(495, 30, 'South Sikkim'),
(496, 30, 'West Sikkim'),
(497, 31, 'Ariyalur'),
(498, 31, 'Chennai'),
(499, 31, 'Coimbatore'),
(500, 31, 'Cuddalore'),
(501, 31, 'Dharmapuri'),
(502, 31, 'Dindigul'),
(503, 31, 'Erode'),
(504, 31, 'Kanchipuram'),
(505, 31, 'Kanyakumari'),
(506, 31, 'Karur'),
(507, 31, 'Krishnagiri'),
(508, 31, 'Madurai'),
(509, 31, 'Nagapattinam'),
(510, 31, 'Nilgiris'),
(511, 31, 'Namakkal'),
(512, 31, 'Perambalur'),
(513, 31, 'Pudukkottai'),
(514, 31, 'Ramanathapuram'),
(515, 31, 'Salem'),
(516, 31, 'Sivaganga'),
(517, 31, 'Tirupur'),
(518, 31, 'Tiruchirappalli'),
(519, 31, 'Theni'),
(520, 31, 'Tirunelveli'),
(521, 31, 'Thanjavur'),
(522, 31, 'Thoothukudi'),
(523, 31, 'Tiruvallur'),
(524, 31, 'Tiruvarur'),
(525, 31, 'Tiruvannamalai'),
(526, 31, 'Vellore'),
(527, 31, 'Viluppuram'),
(528, 31, 'Virudhunagar'),
(529, 32, 'Adilabad'),
(530, 32, 'Hyderabad'),
(531, 32, 'Karimnagar'),
(532, 32, 'Khammam'),
(533, 32, 'Mahbubnagar'),
(534, 32, 'Medak'),
(535, 32, 'Nalgonda'),
(536, 32, 'Nizamabad'),
(537, 32, 'Ranga Reddy'),
(538, 32, 'Warangal'),
(539, 33, 'Dhalai'),
(540, 33, 'North Tripura'),
(541, 33, 'South Tripura'),
(542, 33, 'Khowai'),
(543, 33, 'West Tripura'),
(544, 35, 'Agra'),
(545, 35, 'Aligarh'),
(546, 35, 'Allahabad'),
(547, 35, 'Ambedkar Nagar'),
(548, 35, 'Auraiya'),
(549, 35, 'Azamgarh'),
(550, 35, 'Bagpat'),
(551, 35, 'Bahraich'),
(552, 35, 'Ballia'),
(553, 35, 'Balrampur'),
(554, 35, 'Banda'),
(555, 35, 'Barabanki'),
(556, 35, 'Bareilly'),
(557, 35, 'Basti'),
(558, 35, 'Bijnor'),
(559, 35, 'Budau'),
(560, 35, 'Bulandshahr'),
(561, 35, 'Chandauli'),
(562, 35, 'Amethi (Chhatrapati Shahuji Maharaj Nagar)'),
(563, 35, 'Chitrakoot'),
(564, 35, 'Deoria'),
(565, 35, 'Etah'),
(566, 35, 'Etawah'),
(567, 35, 'Faizabad'),
(568, 35, 'Farrukhabad'),
(569, 35, 'Fatehpur'),
(570, 35, 'Firozabad'),
(571, 35, 'Gautam Buddh Nagar'),
(572, 35, 'Ghaziabad'),
(573, 35, 'Ghazipur'),
(574, 35, 'Gonda'),
(575, 35, 'Gorakhpur'),
(576, 35, 'Hamirpur'),
(577, 35, 'Hardoi'),
(578, 35, 'Hathras (Mahamaya Nagar);'),
(579, 35, 'Jalau'),
(580, 35, 'Jaunpur'),
(581, 35, 'Jhansi'),
(582, 35, 'Jyotiba Phule Nagar'),
(583, 35, 'Kannauj'),
(584, 35, 'Kanpur Dehat (Ramabai Nagar);'),
(585, 35, 'Kanpur Nagar'),
(586, 35, 'Kanshi Ram Nagar'),
(587, 35, 'Kaushambi'),
(588, 35, 'Kushinagar'),
(589, 35, 'Lakhimpur Kheri'),
(590, 35, 'Lalitpur'),
(591, 35, 'Lucknow'),
(592, 35, 'Maharajganj'),
(593, 35, 'Mahoba'),
(594, 35, 'Mainpuri'),
(595, 35, 'Mathura'),
(596, 35, 'Mau'),
(597, 35, 'Meerut'),
(598, 35, 'Mirzapur'),
(599, 35, 'Moradabad'),
(600, 35, 'Muzaffarnagar'),
(601, 35, 'Panchsheel Nagar (Hapur);'),
(602, 35, 'Pilibhit'),
(603, 35, 'Pratapgarh'),
(604, 35, 'Raebareli'),
(605, 35, 'Rampur'),
(606, 35, 'Saharanpur'),
(607, 35, 'Sambhal(Bheem Nagar);'),
(608, 35, 'Sant Kabir Nagar'),
(609, 35, 'Sant Ravidas Nagar'),
(610, 35, 'Shahjahanpur'),
(611, 35, 'Shamli'),
(612, 35, 'Shravasti'),
(613, 35, 'Siddharthnagar'),
(614, 35, 'Sitapur'),
(615, 35, 'Sonbhadra'),
(616, 35, 'Sultanpur'),
(617, 35, 'Unnao'),
(618, 35, 'Varanasi'),
(619, 34, 'Almora'),
(620, 34, 'Bageshwar'),
(621, 34, 'Chamoli'),
(622, 34, 'Champawat'),
(623, 34, 'Dehradu'),
(624, 34, 'Haridwar'),
(625, 34, 'Nainital'),
(626, 34, 'Pauri Garhwal'),
(627, 34, 'Pithoragarh'),
(628, 34, 'Rudraprayag'),
(629, 34, 'Tehri Garhwal'),
(630, 34, 'Udham Singh Nagar'),
(631, 34, 'Uttarkashi'),
(632, 36, 'Bankura'),
(633, 36, 'Bardhama'),
(634, 36, 'Birbhum'),
(635, 36, 'Cooch Behar'),
(636, 36, 'Dakshin Dinajpur'),
(637, 36, 'Darjeeling'),
(638, 36, 'Hooghly'),
(639, 36, 'Howrah'),
(640, 36, 'Jalpaiguri'),
(641, 36, 'Kolkata'),
(642, 36, 'Maldah'),
(643, 36, 'Murshidabad'),
(644, 36, 'Nadia'),
(645, 36, 'North 24 Parganas'),
(646, 36, 'Paschim Medinipur'),
(647, 36, 'Purba Medinipur'),
(648, 36, 'Purulia'),
(649, 36, 'South 24 Parganas'),
(650, 36, 'Uttar Dinajpur');

-- --------------------------------------------------------

--
-- Table structure for table `itemdetails`
--

CREATE TABLE `itemdetails` (
  `intId` int(11) NOT NULL,
  `itmId` varchar(50) NOT NULL,
  `purprice` int(55) DEFAULT NULL,
  `saleprice` int(55) DEFAULT NULL,
  `itmname` varchar(255) NOT NULL,
  `itmimei` varchar(200) NOT NULL,
  `itmserialkey` varchar(200) NOT NULL,
  `itmpurId` varchar(50) NOT NULL,
  `itmpurorderId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemdetails`
--

INSERT INTO `itemdetails` (`intId`, `itmId`, `purprice`, `saleprice`, `itmname`, `itmimei`, `itmserialkey`, `itmpurId`, `itmpurorderId`) VALUES
(1, '2', 1470, NULL, 'APPLE IPHONE X ', '353057094963496', ' ', '1', '50001'),
(2, '2', 1470, NULL, 'APPLE IPHONE X ', '353050095101786', ' ', '1', '50001'),
(4, '4', 1470, NULL, 'APPLE IPHONE X ', '353057091705502', ' ', '2', '50001'),
(5, '3', 1270, NULL, 'APPLE IPHONE X ', '353058094211845 U/S', ' ', '3', '50001'),
(6, '13', 1190, NULL, 'iphone8plus', '356717086640710', ' ', '4', '50001'),
(7, '19', 1000, NULL, 'iphone8', '353002093773819', ' ', '5', '50001'),
(8, '22', 826, NULL, 'ipadpro1054G', '355819081696860', ' ', '6', '50001'),
(10, '2', 1830, NULL, 'APPLE IPHONE X ', '353055095278336', ' ', '9', '50004'),
(11, '2', 1830, NULL, 'APPLE IPHONE X ', '353056094578007', ' ', '1', '50006'),
(12, '2', 1830, NULL, 'APPLE IPHONE X ', '353056094382731', ' ', '1', '50006'),
(13, '1', 1580, NULL, 'APPLE IPHONE X ', '356724088957076', ' ', '2', '50006'),
(14, '37', 1480, NULL, 'iphone8plus', '353012091275246', ' ', '3', '50006'),
(15, '34', 1080, NULL, 'IPHONE8', '353003091678364', ' ', '4', '50006'),
(16, '2', 1830, NULL, 'APPLE IPHONE X ', '556667876786086897', ' ', '6', '50008'),
(17, '1', 1580, NULL, 'APPLE IPHONE X ', '65653565609786709', ' ', '5', '50007'),
(18, '42', 320, NULL, 'iphone six ', '359482088967580', ' ', '7', '50009'),
(19, '3', 1320, NULL, 'APPLE IPHONE X ', '353054094534427', ' ', '8', '50010'),
(20, '1', 1580, NULL, 'APPLE IPHONE X ', '3726372718181', ' ', '10', '50011'),
(21, '1', 1320, NULL, 'APPLE IPHONE X ', '345667433', ' ', '10', '50011'),
(22, '4', 1480, NULL, 'APPLE IPHONE X ', '353049093496222', ' ', '11', '50012'),
(23, '4', 1480, NULL, 'APPLE IPHONE X ', '353056094224933', ' ', '11', '50012'),
(24, '4', 1480, NULL, 'APPLE IPHONE X ', '353052093693590', ' ', '11', '50012'),
(25, '2', 1480, NULL, 'APPLE IPHONE X ', '353051093344741', ' ', '12', '50012'),
(26, '34', 830, NULL, 'IPHONE8', '356699089622616', ' ', '13', '50012'),
(27, '2', 1460, NULL, 'APPLE IPHONE X ', '353050096695943', ' ', '14', '50013'),
(28, '4', 1460, NULL, 'APPLE IPHONE X ', '353051094509771', ' ', '15', '50013'),
(29, '81', 790, NULL, 'SAMSUNG GALAXY S8 PLUS ', '357673080749941', ' ', '16', '50013'),
(30, '81', 790, NULL, 'SAMSUNG GALAXY S8 PLUS ', '357673080753422', ' ', '16', '50013'),
(31, '23', 980, NULL, 'IPAD PRO 10.5\' 4G', '355816083813253', ' ', '17', '50014'),
(32, '23', 980, NULL, 'IPAD PRO 10.5\' 4G', '355820083017980', ' ', '17', '50014'),
(34, '86', 720, NULL, 'IPHONE 7 ', '352986093838716', ' ', '19', '50014'),
(35, '86', 720, NULL, 'IPHONE 7 ', '352986093159881', ' ', '19', '50014'),
(36, '3', 1320, NULL, 'APPLE IPHONE X ', '353058096199790', ' ', '20', '50014'),
(37, '3', 1320, NULL, 'APPLE IPHONE X ', '356719084140891', ' ', '20', '50014'),
(38, '2', 1480, NULL, 'APPLE IPHONE X ', '353054096180773', ' ', '21', '50014'),
(39, '4', 1480, NULL, 'APPLE IPHONE X ', '353050094784392', ' ', '22', '50014'),
(40, '2', 1480, NULL, 'APPLE IPHONE X ', '353049096588025', ' ', '23', '50015'),
(41, '2', 1480, NULL, 'APPLE IPHONE X ', '353055092635124', ' ', '23', '50015'),
(42, '4', 1480, NULL, 'APPLE IPHONE X ', '353052094368069', ' ', '24', '50015'),
(43, '32', 980, NULL, 'IPAD PRO 10.5\' 4G', '355817082917749', ' ', '25', '50015'),
(44, '1', 1320, NULL, 'APPLE IPHONE X ', '353052093418188', ' ', '26', '50016'),
(45, '1', 1320, NULL, 'APPLE IPHONE X ', '353056095582750', ' ', '26', '50016'),
(46, '3', 1320, NULL, 'APPLE IPHONE X ', '354840091766494', ' ', '27', '50016'),
(47, '3', 1320, NULL, 'APPLE IPHONE X ', '353055093897673', ' ', '27', '50016'),
(48, '2', 1590, NULL, 'APPLE IPHONE X ', '353049096528104', ' ', '28', '50016'),
(49, '2', 0, NULL, 'APPLE IPHONE X ', '353050094489133', ' ', '29', '50016'),
(50, '20', 0, NULL, 'iphone8', '356707089054399', ' ', '30', '50016'),
(51, '97', 320, NULL, 'IPHONE SE ', '356612081136881', ' ', '31', '50017'),
(52, '81', 790, NULL, 'SAMSUNG GALAXY S8 PLUS ', '', ' ', '32', '50017'),
(53, '81', 1150, NULL, 'SAMSUNG GALAXY S8 PLUS ', '359123081403849', ' ', '32', '50017'),
(54, '1', 1310, NULL, 'APPLE IPHONE X ', '356722086711081', ' ', '33', '50018'),
(58, '105', 980, NULL, 'SAMSUNG S9 ', '352802095012137', ' ', '37', '50020'),
(59, '121', 160, NULL, 'OPPO A57', '865635030048398', ' ', '38', '50021'),
(60, '118', 225, NULL, 'SAMSUNG GALAXY J5 PRO ', '358340081336735', ' ', '39', '50021'),
(62, '2', 1470, NULL, 'APPLE IPHONE X ', '353058092472654', ' ', '41', '50021'),
(63, '2', 1500, NULL, 'APPLE IPHONE X ', '353056093793250', ' ', '41', '50021'),
(64, '2', 1500, NULL, 'APPLE IPHONE X ', '353056093995418', ' ', '41', '50021'),
(65, '4', 1500, NULL, 'APPLE IPHONE X ', '353057094843722', ' ', '42', '50021'),
(66, '4', 1490, NULL, 'APPLE IPHONE X ', '353052093736852', ' ', '45', '50024'),
(67, '4', 1490, NULL, 'APPLE IPHONE X ', '353054094540176', ' ', '45', '50024'),
(68, '113', 1350, NULL, 'SAMSUNG S9 PLUS', '352402093039529', ' ', '46', '50025'),
(69, '1', 1580, NULL, 'APPLE IPHONE X ', '353050090499581', ' ', '47', '50025'),
(70, '3', 1580, NULL, 'APPLE IPHONE X ', '353053095524064', ' ', '48', '50025'),
(71, '4', 1830, NULL, 'APPLE IPHONE X ', '353055093960463', ' ', '49', '50025'),
(72, '2', 1830, NULL, 'APPLE IPHONE X ', '353055094616924', ' ', '50', '50025'),
(73, '121', 270, NULL, 'OPPO A57', '777888666', ' ', '51', '50026'),
(74, '121', 270, NULL, 'OPPO A57', '777888668', ' ', '51', '50026'),
(75, '121', 270, NULL, 'OPPO A57', '777888669', ' ', '51', '50026'),
(76, '2', 1830, NULL, 'APPLE IPHONE X ', '353054092610393', ' ', '52', '50027'),
(77, '2', 1830, NULL, 'APPLE IPHONE X ', '353053091878134', ' ', '52', '50027'),
(78, '4', 1830, NULL, 'APPLE IPHONE X ', '353050094477427', ' ', '53', '50027'),
(79, '4', 1830, NULL, 'APPLE IPHONE X ', '353056092227128', ' ', '53', '50027'),
(80, '3', 1580, NULL, 'APPLE IPHONE X ', '000', ' ', '54', '50027'),
(81, '2', 1830, NULL, 'APPLE IPHONE X ', '353053091620395', ' ', '55', '50028'),
(82, '2', 1830, NULL, 'APPLE IPHONE X ', '353055090427391', ' ', '55', '50028'),
(83, '2', 1830, NULL, 'APPLE IPHONE X ', '353056090744991', ' ', '55', '50028'),
(84, '2', 1830, NULL, 'APPLE IPHONE X ', '353056090230504', ' ', '55', '50028'),
(85, '2', 1830, NULL, 'APPLE IPHONE X ', '353057093895145', ' ', '56', '50029'),
(86, '42', 459, NULL, 'iphone six ', '359480085626449', ' ', '57', '50029'),
(87, '122', 450, NULL, 'IPOD TOUCH ', 'CCQV80B6GM18', ' ', '58', '50029'),
(88, '2', 1830, NULL, 'APPLE IPHONE X ', '353054094756194', ' ', '59', '50030'),
(89, '2', 1830, NULL, 'APPLE IPHONE X ', '353054090247263', ' ', '59', '50030'),
(90, '47', 1399, NULL, 'IPAD PRO 12.9\' 4G', '355810080032553', ' ', '60', '50030'),
(91, '2', 1830, NULL, 'APPLE IPHONE X ', '353056094592123', ' ', '61', '50031'),
(92, '2', 1830, NULL, 'APPLE IPHONE X ', '353050096583321', ' ', '61', '50031'),
(93, '2', 1830, NULL, 'APPLE IPHONE X ', '353055094427553', ' ', '61', '50031'),
(94, '1', 1580, NULL, 'APPLE IPHONE X ', '353058091421959', ' ', '62', '50031'),
(95, '1', 1580, NULL, 'APPLE IPHONE X ', '353051091454773', ' ', '62', '50031'),
(96, '1', 1580, NULL, 'APPLE IPHONE X ', '356720089763661', ' ', '62', '50031'),
(97, '1', 1580, NULL, 'APPLE IPHONE X ', '353054093935021', ' ', '62', '50031'),
(98, '1', 1580, NULL, 'APPLE IPHONE X ', '353056095027483', ' ', '62', '50031'),
(99, '1', 1580, NULL, 'APPLE IPHONE X ', '353056095288788', ' ', '62', '50031'),
(100, '1', 1580, NULL, 'APPLE IPHONE X ', '353058091272899', ' ', '62', '50031'),
(101, '2', 1830, NULL, 'APPLE IPHONE X ', '0000', ' ', '59', '50030'),
(102, '2', 1830, NULL, 'APPLE IPHONE X ', '00000', ' ', '59', '50030'),
(103, '125', 1080, NULL, 'GOOGLE PIXEL 2 ', '357538081118380', ' ', '52', '50032'),
(104, '128', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080562814', ' ', '53', '50032'),
(105, '128', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080566047', ' ', '53', '50032'),
(107, '130', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080543509', ' ', '54', '50032'),
(108, '121', 270, NULL, 'OPPO A57', '098712366321', ' ', '55', '50033'),
(109, '121', 270, NULL, 'OPPO A57', '098712366322', ' ', '55', '50033'),
(110, '121', 270, NULL, 'OPPO A57', '098712366324', ' ', '55', '50033'),
(112, '4', 1830, NULL, 'APPLE IPHONE X ', '353055094063481', ' ', '56', '50034'),
(113, '4', 1830, NULL, 'APPLE IPHONE X ', '353056090341707', ' ', '56', '50034'),
(114, '134', 1200, NULL, 'Ipad pro 10.5â€ wifi', 'DMPVVKAUHP50', ' ', '57', '50035'),
(115, '37', 1480, NULL, 'iphone8plus', '352980093535372', ' ', '58', '50035'),
(116, '3', 1580, NULL, 'APPLE IPHONE X ', '353049095421327', ' ', '59', '50036'),
(117, '1', 1580, NULL, 'APPLE IPHONE X ', '353050090069640', ' ', '60', '50037'),
(118, '1', 1580, NULL, 'APPLE IPHONE X ', '353057094751925', ' ', '61', '50038'),
(119, '4', 1830, NULL, 'APPLE IPHONE X ', '353058091549429', ' ', '62', '50039'),
(120, '4', 1830, NULL, 'APPLE IPHONE X ', '353049093339703', ' ', '62', '50039'),
(121, '4', 1830, NULL, 'APPLE IPHONE X ', '353056094202723', ' ', '62', '50039'),
(122, '4', 1830, NULL, 'APPLE IPHONE X ', '353054091493031', ' ', '62', '50039'),
(123, '4', 1830, NULL, 'APPLE IPHONE X ', '353049093615540', ' ', '62', '50039'),
(124, '4', 1830, NULL, 'APPLE IPHONE X ', '353054091494450', ' ', '62', '50039'),
(125, '4', 1830, NULL, 'APPLE IPHONE X ', '353051094588437', ' ', '62', '50039'),
(126, '4', 1830, NULL, 'APPLE IPHONE X ', '353051094605058', ' ', '62', '50039'),
(127, '2', 1830, NULL, 'APPLE IPHONE X ', '356725086959758', ' ', '63', '50039'),
(128, '2', 1830, NULL, 'APPLE IPHONE X ', '353057092361172', ' ', '64', '50040'),
(129, '1', 1580, NULL, 'APPLE IPHONE X ', '353057094995217', ' ', '65', '50041'),
(130, '1', 1580, NULL, 'APPLE IPHONE X ', '353056094252884', ' ', '65', '50041'),
(131, '1', 1580, NULL, 'APPLE IPHONE X ', '353057094728394', ' ', '65', '50041'),
(132, '1', 1580, NULL, 'APPLE IPHONE X ', '353057096056802', ' ', '65', '50041'),
(133, '3', 1580, NULL, 'APPLE IPHONE X ', '353051094918592', ' ', '66', '50041'),
(134, '3', 1580, NULL, 'APPLE IPHONE X ', '353058094057875', ' ', '66', '50041'),
(135, '2', 1830, NULL, 'APPLE IPHONE X ', '353050092440047', ' ', '67', '50041'),
(136, '2', 1830, NULL, 'APPLE IPHONE X ', '353050092774221', ' ', '67', '50041'),
(137, '2', 1830, NULL, 'APPLE IPHONE X ', '353052094175241', ' ', '67', '50041'),
(138, '2', 1830, NULL, 'APPLE IPHONE X ', '353057094590166', ' ', '67', '50041'),
(139, '4', 1830, NULL, 'APPLE IPHONE X ', '353053093746040', ' ', '68', '50041'),
(140, '47', 1399, NULL, 'IPAD PRO 12.9\' 4G', '355808081351816', ' ', '69', '50041'),
(141, '83', 1200, NULL, 'SAMSUNG GALAXY S8 PLUS ', '359123083125564', ' ', '71', '50041'),
(142, '4', 1830, NULL, 'APPLE IPHONE X ', '353056093840614', ' ', '72', '50042'),
(143, '1', 1580, NULL, 'APPLE IPHONE X ', '353049093411551', ' ', '73', '50042'),
(144, '4', 1830, NULL, 'APPLE IPHONE X ', '353051094669872', ' ', '74', '50043'),
(145, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091073626', ' ', '75', '50044'),
(146, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '355893097030430', ' ', '76', '50044'),
(147, '2', 1830, NULL, 'APPLE IPHONE X ', '353051092889894', ' ', '77', '50044'),
(148, '74', 1360, NULL, 'SAMSUNG GALAXY NOTE 8 ', '352418090046192', ' ', '78', '50044'),
(149, '2', 1830, NULL, 'APPLE IPHONE X ', '353049092719798', ' ', '82', '50046'),
(150, '2', 1830, NULL, 'APPLE IPHONE X ', '353051092569603', ' ', '82', '50046'),
(151, '2', 1830, NULL, 'APPLE IPHONE X ', '353056093717937', ' ', '82', '50046'),
(152, '2', 1830, NULL, 'APPLE IPHONE X ', '353053092644923', ' ', '82', '50046'),
(153, '2', 1830, NULL, 'APPLE IPHONE X ', '353053092637893', ' ', '82', '50046'),
(154, '2', 1830, NULL, 'APPLE IPHONE X ', '353054092436864', ' ', '82', '50046'),
(155, '35', 1380, NULL, 'IPHONE8', '356700086088171', ' ', '83', '50046'),
(156, '15', 1480, NULL, 'iphone8plus', '353012094334263', ' ', '84', '50046'),
(158, '2', 1830, NULL, 'APPLE IPHONE X ', '353051092960422', ' ', '86', '50047'),
(159, '13', 1480, NULL, 'iphone8plus', '352982098921011', ' ', '87', '50047'),
(160, '15', 1480, NULL, 'iphone8plus', '352979095755988', ' ', '88', '50047'),
(161, '115', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091215540', ' ', '93', '50048'),
(162, '146', 230, NULL, 'SAMSUNG GALAXY J2 PRO ', '354062090522873', ' ', '94', '50048'),
(163, '146', 230, NULL, 'SAMSUNG GALAXY J2 PRO ', '354062090522170', ' ', '94', '50048'),
(164, '146', 230, NULL, 'SAMSUNG GALAXY J2 PRO ', '354062090524630', ' ', '94', '50048'),
(165, '146', 230, NULL, 'SAMSUNG GALAXY J2 PRO ', '354062090524721', ' ', '94', '50048'),
(166, '2', 1830, NULL, 'APPLE IPHONE X ', '353055094666705', ' ', '89', '50048'),
(167, '4', 1830, NULL, 'APPLE IPHONE X ', '353058090657033', ' ', '90', '50048'),
(168, '42', 459, NULL, 'iphone six ', '359482086923825', ' ', '91', '50048'),
(169, '42', 459, NULL, 'iphone six ', '359482088034613', ' ', '91', '50048'),
(170, '42', 459, NULL, 'iphone six ', '359482088968810', ' ', '91', '50048'),
(171, '42', 459, NULL, 'iphone six ', '359482087576705', ' ', '91', '50048'),
(172, '20', 1080, NULL, 'iphone8', '353000091318926', ' ', '92', '50048'),
(173, '3', 1580, NULL, 'APPLE IPHONE X ', '353054095653812', ' ', '95', '50049'),
(174, '48', 1619, NULL, 'IPAD PRO 12.9\' 4G', '355811081268865', ' ', '96', '50050'),
(175, '2', 1830, NULL, 'APPLE IPHONE X ', '353049094012218', ' ', '97', '50050'),
(176, '2', 1830, NULL, 'APPLE IPHONE X ', '353058094269009', ' ', '97', '50050'),
(177, '4', 1830, NULL, 'APPLE IPHONE X ', '353052094480872', ' ', '98', '50050'),
(178, '4', 1830, NULL, 'APPLE IPHONE X ', '353056094891566', ' ', '98', '50050'),
(179, '4', 1830, NULL, 'APPLE IPHONE X ', '353056094883076', ' ', '98', '50050'),
(180, '77', 1360, NULL, 'SAMSUNG GALAXY NOTE 8 ', '354075095275073', ' ', '99', '50050'),
(181, '106', 1350, NULL, 'SAMSUNG S9 ', '355896090008477', ' ', '100', '50050'),
(182, '106', 1350, NULL, 'SAMSUNG S9 ', '355896090011331', ' ', '100', '50050'),
(183, '3', 1580, NULL, 'APPLE IPHONE X ', '353054093833689', ' ', '101', '50050'),
(184, '2', 1830, NULL, 'APPLE IPHONE X ', '353054092402528', ' ', '102', '50051'),
(185, '149', 550, NULL, 'SAMSUNG GALAXY S7 ', '356397083548321', ' ', '103', '50051'),
(186, '148', 550, NULL, 'SAMSUNG GALAXY S7 ', '356397085650810', ' ', '104', '50051'),
(187, '4', 1830, NULL, 'APPLE IPHONE X ', '353052091835185', ' ', '106', '50053'),
(188, '4', 1830, NULL, 'APPLE IPHONE X ', '353055094461529', ' ', '106', '50053'),
(189, '2', 1830, NULL, 'APPLE IPHONE X ', '353055094416572', ' ', '107', '50054'),
(190, '1', 1580, NULL, 'APPLE IPHONE X ', '353056094174146', ' ', '108', '50055'),
(191, '1', 1580, NULL, 'APPLE IPHONE X ', '353049093396513', ' ', '108', '50055'),
(192, '2', 1830, NULL, 'APPLE IPHONE X ', '353051092084991', ' ', '109', '50055'),
(193, '4', 1830, NULL, 'APPLE IPHONE X ', '353058091504507', ' ', '110', '50055'),
(194, '4', 1830, NULL, 'APPLE IPHONE X ', '353050094589627', ' ', '110', '50055'),
(195, '4', 1830, NULL, 'APPLE IPHONE X ', '353049093943926', ' ', '110', '50055'),
(196, '4', 1830, NULL, 'APPLE IPHONE X ', '353052094163270', ' ', '110', '50055'),
(197, '22', 1180, NULL, 'ipadpro1054G', '355816083702084', ' ', '112', '50057'),
(198, '4', 1830, NULL, 'APPLE IPHONE X ', '353049093408789', ' ', '113', '50058'),
(199, '3', 1580, NULL, 'APPLE IPHONE X ', '353054097759138', ' ', '114', '50058'),
(200, '2', 1830, NULL, 'APPLE IPHONE X ', '353057093833500', ' ', '115', '50059'),
(201, '1', 1580, NULL, 'APPLE IPHONE X ', '353052093740557', ' ', '116', '50060'),
(202, '1', 1580, NULL, 'APPLE IPHONE X ', '353052093635393', ' ', '116', '50060'),
(203, '4', 1830, NULL, 'APPLE IPHONE X ', '353050090217413', ' ', '117', '50060'),
(204, '2', 1830, NULL, 'APPLE IPHONE X ', '353050092524709', ' ', '118', '50060'),
(205, '4', 1830, NULL, 'APPLE IPHONE X ', '353053090492465', ' ', '119', '50061'),
(206, '4', 1830, NULL, 'APPLE IPHONE X ', '353058090451197', ' ', '119', '50061'),
(207, '4', 1830, NULL, 'APPLE IPHONE X ', '353058094826329', ' ', '120', '50062'),
(208, '4', 1830, NULL, 'APPLE IPHONE X ', '353055094603534', ' ', '120', '50062'),
(209, '4', 1830, NULL, 'APPLE IPHONE X ', '353052094582123', ' ', '120', '50062'),
(210, '4', 1830, NULL, 'APPLE IPHONE X ', '353050094803036', ' ', '120', '50062'),
(211, '2', 1830, NULL, 'APPLE IPHONE X ', '353053094686351', ' ', '121', '50062'),
(212, '2', 1830, NULL, 'APPLE IPHONE X ', '353054094346038', ' ', '121', '50062'),
(213, '2', 1830, NULL, 'APPLE IPHONE X ', '353049095577409', ' ', '121', '50062'),
(214, '2', 1830, NULL, 'APPLE IPHONE X ', '353055094463467', ' ', '121', '50062'),
(215, '2', 1830, NULL, 'APPLE IPHONE X ', '353050096518160', ' ', '121', '50062'),
(216, '19', 1330, NULL, 'iphone8', '352999094390900', ' ', '122', '50062'),
(217, '18', 1080, NULL, 'iphone8', '353000095442813', ' ', '123', '50062'),
(218, '18', 1080, NULL, 'iphone8', '353000095416650', ' ', '123', '50062'),
(219, '18', 1080, NULL, 'iphone8', '353000095426501', ' ', '123', '50062'),
(220, '15', 1480, NULL, 'iphone8plus', '352982096320752', ' ', '124', '50062'),
(221, '23', 1400, NULL, 'IPAD PRO 10.5\' 4G', '355818082700556', ' ', '125', '50062'),
(222, '20', 1080, NULL, 'iphone8', '356698085809607', ' ', '126', '50063'),
(223, '2', 1830, NULL, 'APPLE IPHONE X ', '35305609405733', ' ', '129', '50065'),
(224, '2', 1830, NULL, 'APPLE IPHONE X ', '353057094043117', ' ', '129', '50065'),
(225, '3', 1580, NULL, 'APPLE IPHONE X ', '353056093930712', ' ', '130', '50065'),
(226, '81', 1150, NULL, 'SAMSUNG GALAXY S8 PLUS ', '357673080738761', ' ', '132', '50066'),
(227, '81', 1150, NULL, 'SAMSUNG GALAXY S8 PLUS ', '357673080640058', ' ', '132', '50066'),
(228, '1', 1580, NULL, 'APPLE IPHONE X ', '353058093455294', ' ', '133', '50067'),
(229, '4', 1830, NULL, 'APPLE IPHONE X ', '353057094690354', ' ', '134', '50067'),
(230, '4', 1830, NULL, 'APPLE IPHONE X ', '353056094094518', ' ', '134', '50067'),
(231, '4', 1830, NULL, 'APPLE IPHONE X ', '353053091438327', ' ', '134', '50067'),
(232, '153', 1900, NULL, 'Macbook Book Pro 13\'', 'SFVFW92APHV22', ' ', '137', '50067'),
(233, '155', 3000, NULL, 'Macbook Book Pro 13\'', 'SC02W350ZHV2M', ' ', '138', '50067'),
(234, '74', 1360, NULL, 'SAMSUNG GALAXY NOTE 8 ', '352418090535079', ' ', '139', '50067'),
(235, '105', 1200, NULL, 'SAMSUNG S9 ', '352802093504069', ' ', '140', '50067'),
(236, '20', 1080, NULL, 'iphone8', '353003091622545', ' ', '141', '50067'),
(237, '133', 980, NULL, 'Ipad pro 10.5â€ wifi', 'SDMPW40XDJ28K', ' ', '142', '50067'),
(238, '4', 1830, NULL, 'APPLE IPHONE X ', '353055094587877', ' ', '143', '50068'),
(239, '4', 1830, NULL, 'APPLE IPHONE X ', '353058094538650', ' ', '143', '50068'),
(240, '4', 1830, NULL, 'APPLE IPHONE X ', '353053094501360', ' ', '143', '50068'),
(241, '156', 300, NULL, 'iPod touch 32gb ', 'CCQV75YMGGNL', ' ', '144', '50069'),
(242, '122', 450, NULL, 'IPOD TOUCH ', 'CCQV70FBGM1C', ' ', '145', '50069'),
(243, '3', 1580, NULL, 'APPLE IPHONE X ', '356724086595332', ' ', '146', '50069'),
(244, '3', 1580, NULL, 'APPLE IPHONE X ', '353054095027140', ' ', '146', '50069'),
(245, '2', 1830, NULL, 'APPLE IPHONE X ', '353057094075440', ' ', '147', '50069'),
(246, '2', 1830, NULL, 'APPLE IPHONE X ', '353051092141262', ' ', '147', '50069'),
(247, '4', 1830, NULL, 'APPLE IPHONE X ', '353051093400527', ' ', '148', '50069'),
(248, '4', 1830, NULL, 'APPLE IPHONE X ', '353052091635437', ' ', '148', '50069'),
(249, '1', 1580, NULL, 'APPLE IPHONE X ', '353058094797637', ' ', '149', '50070'),
(250, '105', 1200, NULL, 'SAMSUNG S9 ', '352802096339026', ' ', '150', '50071'),
(251, '106', 1350, NULL, 'SAMSUNG S9 ', '355896090099906', ' ', '151', '50071'),
(252, '1', 1580, NULL, 'APPLE IPHONE X ', '353053094404128', ' ', '152', '50072'),
(253, '4', 1830, NULL, 'APPLE IPHONE X ', '353056091650783', ' ', '153', '50072'),
(254, '4', 1830, NULL, 'APPLE IPHONE X ', '353056093910060', ' ', '153', '50072'),
(255, '4', 1830, NULL, 'APPLE IPHONE X ', '353057094127175', ' ', '153', '50072'),
(256, '4', 1830, NULL, 'APPLE IPHONE X ', '353058091731308', ' ', '153', '50072'),
(257, '105', 1200, NULL, 'SAMSUNG S9 ', '355894090229664', ' ', '154', '50072'),
(258, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '355893097051139', ' ', '155', '50073'),
(259, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '355893097035470', ' ', '155', '50073'),
(260, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '355893097036353', ' ', '155', '50073'),
(261, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '355893097045677', ' ', '155', '50073'),
(262, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '355893097042765', ' ', '155', '50073'),
(263, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '355893097046790', ' ', '155', '50073'),
(264, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091190834', ' ', '156', '50073'),
(265, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091180827', ' ', '156', '50073'),
(266, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091131895', ' ', '156', '50073'),
(267, '127', 1400, NULL, 'GOOGLE PIXEL 2 XL ', '358036080658513', ' ', '157', '50073'),
(268, '157', 580, NULL, 'IPAD MINI 4 WIFI ', 'SF9FW52MJGHKK', ' ', '158', '50074'),
(269, '49', 1919, NULL, 'IPAD PRO 12.9\' 4G', '355809081889417', ' ', '159', '50074'),
(270, '62', 1200, NULL, 'IPAD PRO 12.9\' WIFI ONLY', 'SDLXW35RGJ262', ' ', '160', '50074'),
(271, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091080944', ' ', '161', '50074'),
(272, '109', 1200, NULL, 'SAMSUNG S9 ', '352802094656140', ' ', '162', '50074'),
(273, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '352402098255591', ' ', '163', '50075'),
(274, '127', 1400, NULL, 'GOOGLE PIXEL 2 XL ', '358036080857123', ' ', '164', '50075'),
(275, '3', 1580, NULL, 'APPLE IPHONE X ', '353054097266456', ' ', '165', '50075'),
(276, '15', 1480, NULL, 'iphone8plus', '353009091841241', ' ', '166', '50076'),
(277, '4', 1830, NULL, 'APPLE IPHONE X ', '353055094626725', ' ', '167', '50076'),
(278, '4', 1830, NULL, 'APPLE IPHONE X ', '353055094505960', ' ', '167', '50076'),
(279, '3', 1580, NULL, 'APPLE IPHONE X ', '353056095980095', ' ', '168', '50076'),
(280, '118', 350, NULL, 'SAMSUNG GALAXY J5 PRO ', '358340081419648', ' ', '169', '50077'),
(281, '2', 1830, NULL, 'APPLE IPHONE X ', '353055094387443', ' ', '170', '50078'),
(282, '2', 1830, NULL, 'APPLE IPHONE X ', '353055094396253', ' ', '170', '50078'),
(283, '20', 1080, NULL, 'iphone8', '356704086556815', ' ', '171', '50078'),
(284, '109', 1200, NULL, 'SAMSUNG S9 ', '352802096235059', ' ', '172', '50079'),
(285, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '352402098209812', ' ', '173', '50079'),
(286, '2', 1830, NULL, 'APPLE IPHONE X ', '353058090170151', ' ', '174', '50080'),
(287, '2', 1830, NULL, 'APPLE IPHONE X ', '353054092812734', ' ', '174', '50080'),
(288, '2', 1830, NULL, 'APPLE IPHONE X ', '353053092059833', ' ', '174', '50080'),
(289, '4', 1830, NULL, 'APPLE IPHONE X ', '353050091443299', ' ', '175', '50080'),
(290, '4', 1830, NULL, 'APPLE IPHONE X ', '356724089746239', ' ', '175', '50080'),
(291, '4', 1830, NULL, 'APPLE IPHONE X ', '353055094492201', ' ', '175', '50080'),
(292, '105', 1200, NULL, 'SAMSUNG S9 ', '352802095547348', ' ', '176', '50080'),
(293, '2', 1830, NULL, 'APPLE IPHONE X ', '353054090467523', ' ', '177', '50081'),
(294, '2', 1830, NULL, 'APPLE IPHONE X ', '353056090629267', ' ', '177', '50081'),
(295, '2', 1830, NULL, 'APPLE IPHONE X ', '353050092577756', ' ', '177', '50081'),
(296, '2', 1830, NULL, 'APPLE IPHONE X ', '353051092862842', ' ', '177', '50081'),
(297, '2', 1830, NULL, 'APPLE IPHONE X ', '353055090704948', ' ', '177', '50081'),
(298, '2', 1830, NULL, 'APPLE IPHONE X ', '353056090652061', ' ', '177', '50081'),
(299, '2', 1830, NULL, 'APPLE IPHONE X ', '353054090791930', ' ', '177', '50081'),
(300, '2', 1830, NULL, 'APPLE IPHONE X ', '353051093037287', ' ', '177', '50081'),
(301, '4', 1830, NULL, 'APPLE IPHONE X ', '353052094064254', ' ', '178', '50081'),
(302, '4', 1830, NULL, 'APPLE IPHONE X ', '353049094277571', ' ', '178', '50081'),
(303, '4', 1830, NULL, 'APPLE IPHONE X ', '353057094770321', ' ', '178', '50081'),
(304, '4', 1830, NULL, 'APPLE IPHONE X ', '353058094940278', ' ', '178', '50081'),
(305, '4', 1830, NULL, 'APPLE IPHONE X ', '356722089809700', ' ', '178', '50081'),
(306, '4', 1830, NULL, 'APPLE IPHONE X ', '353052093894701', ' ', '178', '50081'),
(307, '4', 1830, NULL, 'APPLE IPHONE X ', '353049094167251', ' ', '178', '50081'),
(308, '4', 1830, NULL, 'APPLE IPHONE X ', '353056095269291', ' ', '178', '50081'),
(309, '4', 1830, NULL, 'APPLE IPHONE X ', '353053090283856', ' ', '178', '50081'),
(310, '4', 1830, NULL, 'APPLE IPHONE X ', '353052094246679', ' ', '178', '50081'),
(311, '4', 1830, NULL, 'APPLE IPHONE X ', '353056093804115', ' ', '178', '50081'),
(312, '4', 1830, NULL, 'APPLE IPHONE X ', '353056094873051', ' ', '181', '50083'),
(313, '4', 1830, NULL, 'APPLE IPHONE X ', '353050094803655', ' ', '181', '50083'),
(314, '4', 1830, NULL, 'APPLE IPHONE X ', '353057094559591', ' ', '181', '50083'),
(315, '4', 1830, NULL, 'APPLE IPHONE X ', '353050093581807', ' ', '181', '50083'),
(316, '4', 1830, NULL, 'APPLE IPHONE X ', '353057094380980', ' ', '181', '50083'),
(317, '4', 1830, NULL, 'APPLE IPHONE X ', '353057094307686', ' ', '181', '50083'),
(318, '2', 1830, NULL, 'APPLE IPHONE X ', '353055094771588', ' ', '182', '50083'),
(319, '2', 1830, NULL, 'APPLE IPHONE X ', '353057094383596', ' ', '182', '50083'),
(320, '2', 1830, NULL, 'APPLE IPHONE X ', '353057094636613', ' ', '182', '50083'),
(321, '2', 1830, NULL, 'APPLE IPHONE X ', '353052092489297', ' ', '182', '50083'),
(322, '2', 1830, NULL, 'APPLE IPHONE X ', '353056093911761', ' ', '182', '50083'),
(323, '2', 1830, NULL, 'APPLE IPHONE X ', '353050095855894', ' ', '182', '50083'),
(324, '2', 1830, NULL, 'APPLE IPHONE X ', '353055096649162', ' ', '182', '50083'),
(325, '2', 1830, NULL, 'APPLE IPHONE X ', '353050094304274', ' ', '183', '50084'),
(326, '4', 1830, NULL, 'APPLE IPHONE X ', '353057094499756', ' ', '184', '50084'),
(327, '3', 1580, NULL, 'APPLE IPHONE X ', '353053095569333', ' ', '185', '50084'),
(328, '2', 1830, NULL, 'APPLE IPHONE X ', '353052092877160', ' ', '186', '50085'),
(329, '2', 1830, NULL, 'APPLE IPHONE X ', '353051092602214', ' ', '186', '50085'),
(330, '2', 1830, NULL, 'APPLE IPHONE X ', '353055092183885', ' ', '186', '50085'),
(331, '4', 1830, NULL, 'APPLE IPHONE X ', '353054094617016', ' ', '187', '50085'),
(332, '4', 1830, NULL, 'APPLE IPHONE X ', '353050094681531', ' ', '187', '50085'),
(333, '4', 1830, NULL, 'APPLE IPHONE X ', '353049093407161', ' ', '187', '50085'),
(334, '4', 1830, NULL, 'APPLE IPHONE X ', '353052093850869', ' ', '187', '50085'),
(335, '4', 1830, NULL, 'APPLE IPHONE X ', '353049094282027', ' ', '187', '50085'),
(336, '4', 1830, NULL, 'APPLE IPHONE X ', '353056094378556', ' ', '187', '50085'),
(337, '1', 1580, NULL, 'APPLE IPHONE X ', '353052093391328', ' ', '188', '50085'),
(338, '113', 1350, NULL, 'SAMSUNG S9 PLUS', '352402094570787', ' ', '189', '50086'),
(339, '115', 1350, NULL, 'SAMSUNG S9 PLUS', '352402094783075', ' ', '190', '50086'),
(340, '2', 1830, NULL, 'APPLE IPHONE X ', '353050091391613', ' ', '191', '50086'),
(341, '22', 1180, NULL, 'ipadpro1054G', '355816083381913', ' ', '192', '50086'),
(342, '159', 1800, NULL, 'MacBook Air 13â€™â€™', 'SC1MW622AJ1WL', ' ', '194', '50088'),
(344, '2', 1830, NULL, 'APPLE IPHONE X ', '353054092393867', ' ', '196', '50090'),
(345, '2', 1830, NULL, 'APPLE IPHONE X ', '353056092543425', ' ', '196', '50090'),
(348, '1', 1580, NULL, 'APPLE IPHONE X ', '3530510', ' ', '197', '50091'),
(349, '1', 1580, NULL, 'APPLE IPHONE X ', '353056094115685', ' ', '197', '50091'),
(350, '3', 1580, NULL, 'APPLE IPHONE X ', '353058095394764', ' ', '198', '50091'),
(351, '15', 1480, NULL, 'iphone8plus', '352981096377564', ' ', '199', '50091'),
(352, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '355893097040488', ' ', '200', '50091'),
(353, '177', 600, NULL, 'iPad 5th gen wifi only', 'SDMQVLAS7HP9Y', ' ', '201', '50091'),
(354, '168', 670, NULL, 'iPad 5th gen 4G', 'SDMPVN1FNHLJJ', ' ', '202', '50091'),
(355, '1', 1580, NULL, 'APPLE IPHONE X ', '353056094066045', ' ', '203', '50092'),
(356, '1', 1580, NULL, 'APPLE IPHONE X ', '353051091325361', ' ', '204', '50093'),
(357, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '352402098279658', ' ', '205', '50094'),
(359, '113', 1350, NULL, 'SAMSUNG S9 PLUS', '352402093639690', ' ', '207', '50095'),
(360, '106', 1350, NULL, 'SAMSUNG S9 ', '355896090065667', ' ', '208', '50095'),
(361, '3', 1580, NULL, 'APPLE IPHONE X ', '353052096245752', ' ', '209', '50095'),
(362, '20', 1080, NULL, 'iphone 8', '353000092592339', ' ', '210', '50096'),
(363, '107', 1200, NULL, 'SAMSUNG S9 ', '352802093414277', ' ', '211', '50096'),
(364, '2', 1830, NULL, 'APPLE IPHONE X ', '353054092690312', ' ', '213', '50098'),
(365, '4', 1830, NULL, 'APPLE IPHONE X ', '353057094505230', ' ', '214', '50098'),
(366, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '352402093011536', ' ', '215', '50098'),
(367, '4', 1830, NULL, 'APPLE IPHONE X ', '353049097204796', ' ', '212', '50097'),
(368, '4', 1830, NULL, 'APPLE IPHONE X ', '353057094484535', ' ', '216', '50099'),
(369, '2', 1830, NULL, 'APPLE IPHONE X ', '353053094220748', ' ', '217', '50099'),
(371, '167', 800, NULL, 'iPad 5th gen 4G', '359453082017607', ' ', '219', '50101'),
(372, '176', 470, NULL, 'iPad 5th gen wifi only', 'SDMPVL4TMHP9X', ' ', '220', '50101'),
(373, '105', 1200, NULL, 'SAMSUNG S9 ', '352802094932145', ' ', '221', '50101'),
(374, '105', 1200, NULL, 'SAMSUNG S9 ', '352802095341155', ' ', '221', '50101'),
(375, '115', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091098151', ' ', '222', '50101'),
(376, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091211630', ' ', '223', '50101'),
(377, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '352402093094920', ' ', '223', '50101'),
(378, '106', 1350, NULL, 'SAMSUNG S9 ', '355896090134570', ' ', '224', '50101'),
(379, '2', 1830, NULL, 'APPLE IPHONE X ', '354856091804150', ' ', '225', '50102'),
(380, '4', 1830, NULL, 'APPLE IPHONE X ', '353052094645565', ' ', '226', '50102'),
(381, '13', 1480, NULL, 'iphone8plus', '352979097814940', ' ', '227', '50102'),
(382, '15', 1480, NULL, 'iphone8plus', '352981096607671', ' ', '228', '50102'),
(383, '178', 580, NULL, 'Ipad mini 4 wifi only ', 'SF9FVP0EYGHKJ', ' ', '229', '50102'),
(384, '182', 600, NULL, 'ipad 6th gen wifi', 'SDMQWFKZ5JF8M', ' ', '230', '50102'),
(385, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '352402094070952', ' ', '231', '50102'),
(386, '175', 600, NULL, 'iPad 5th gen wifi only', 'SGCTVW4CMHLFD', ' ', '232', '50103'),
(387, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '352402098217617', ' ', '233', '50103'),
(388, '74', 1360, NULL, 'SAMSUNG GALAXY NOTE 8 ', '354075094674763', ' ', '234', '50103'),
(389, '74', 1360, NULL, 'SAMSUNG GALAXY NOTE 8 ', '354075094293135', ' ', '234', '50103'),
(390, '77', 1360, NULL, 'SAMSUNG GALAXY NOTE 8 ', '352003096636996', ' ', '235', '50103'),
(391, '3', 1580, NULL, 'APPLE IPHONE X ', '353056095994682', ' ', '236', '50104'),
(392, '3', 1580, NULL, 'APPLE IPHONE X ', '353053095668499', ' ', '236', '50104'),
(393, '3', 1580, NULL, 'APPLE IPHONE X ', '354848091631360', ' ', '236', '50104'),
(394, '2', 1830, NULL, 'APPLE IPHONE X ', '353055094334213', ' ', '238', '50105'),
(395, '18', 1080, NULL, 'iphone8', '353002094822177', ' ', '239', '50106'),
(396, '3', 1580, NULL, 'APPLE IPHONE X ', '353056097466119', ' ', '240', '50107'),
(397, '1', 1580, NULL, 'APPLE IPHONE X ', '353050094781232', ' ', '241', '50107'),
(398, '4', 1830, NULL, 'APPLE IPHONE X ', '353050093951489', ' ', '242', '50107'),
(399, '74', 1360, NULL, 'SAMSUNG GALAXY NOTE 8 ', '352418090152784', ' ', '243', '50107'),
(400, '74', 1360, NULL, 'SAMSUNG GALAXY NOTE 8 ', '352418090640333', ' ', '243', '50107'),
(401, '191', 800, NULL, 'Samsung Galaxy s8 64gb ', '356808091725040', ' ', '244', '50107'),
(402, '185', 670, NULL, 'Ipad 6th gen 4G ', '353034098106687', ' ', '245', '50107'),
(403, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091302090', ' ', '246', '50107'),
(404, '18', 1080, NULL, 'iphone8', '356699089908114', ' ', '247', '50107'),
(405, '115', 1350, NULL, 'SAMSUNG S9 PLUS', '352402095245132', ' ', '248', '50108'),
(406, '105', 1200, NULL, 'SAMSUNG S9 ', '355894090452928', ' ', '249', '50108'),
(407, '1', 1580, NULL, 'APPLE IPHONE X ', '353054095400495', ' ', '250', '50108'),
(408, '3', 1580, NULL, 'APPLE IPHONE X ', '354841091751411', ' ', '251', '50109'),
(409, '106', 1350, NULL, 'SAMSUNG S9 ', ' 355896090116239 ', ' ', '252', '50110'),
(410, '168', 670, NULL, 'iPad 5th gen 4G', '359456080273593', ' ', '253', '50111'),
(411, '4', 1830, NULL, 'APPLE IPHONE X ', '353056097539261', ' ', '255', '50111'),
(412, '2', 1830, NULL, 'APPLE IPHONE X ', '353057094617274', ' ', '256', '50111'),
(413, '113', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091118728', ' ', '257', '50111'),
(414, '12', 1230, NULL, 'iphone8plus', '353010098127147', ' ', '258', '50111'),
(415, '185', 670, NULL, 'Ipad 6th gen 4G ', '353034095123792', ' ', '259', '50112'),
(416, '105', 1200, NULL, 'SAMSUNG S9 ', '352802096713964', ' ', '260', '50113'),
(417, '2', 1830, NULL, 'APPLE IPHONE X ', '353054093398154', ' ', '261', '50114'),
(418, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '355893097095110', ' ', '262', '50114'),
(419, '31', 1180, NULL, 'ipadpro1054G', '355819081917027', ' ', '263', '50114'),
(420, '2', 1830, NULL, 'APPLE IPHONE X ', '353056093501117', ' ', '264', '50115'),
(421, '2', 1830, NULL, 'APPLE IPHONE X ', '353055097787003', ' ', '264', '50115'),
(422, '2', 1830, NULL, 'APPLE IPHONE X ', '353053096050051', ' ', '264', '50115'),
(423, '2', 1830, NULL, 'APPLE IPHONE X ', '353054097411946', ' ', '264', '50115'),
(424, '2', 1830, NULL, 'APPLE IPHONE X ', '353050093868055', ' ', '264', '50115'),
(425, '2', 1830, NULL, 'APPLE IPHONE X ', '353056093954332', ' ', '264', '50115'),
(426, '2', 1830, NULL, 'APPLE IPHONE X ', '353053095982478`', ' ', '264', '50115'),
(427, '4', 1830, NULL, 'APPLE IPHONE X ', '353050096080336', ' ', '265', '50115'),
(428, '4', 1830, NULL, 'APPLE IPHONE X ', '353057096614162', ' ', '265', '50115'),
(429, '4', 1830, NULL, 'APPLE IPHONE X ', '353058096161519', ' ', '265', '50115'),
(430, '4', 1830, NULL, 'APPLE IPHONE X ', '353056094246514', ' ', '265', '50115'),
(431, '4', 1830, NULL, 'APPLE IPHONE X ', '353056094071573', ' ', '265', '50115'),
(432, '4', 1830, NULL, 'APPLE IPHONE X ', '353057093420969', ' ', '265', '50115'),
(433, '4', 1830, NULL, 'APPLE IPHONE X ', '353051097136713', ' ', '265', '50115'),
(434, '74', 1360, NULL, 'SAMSUNG GALAXY NOTE 8 ', '352418090716794', ' ', '266', '50115'),
(435, '4', 1830, NULL, 'APPLE IPHONE X ', '353058090304636', ' ', '267', '50116'),
(436, '4', 1830, NULL, 'APPLE IPHONE X ', '353051093573323', ' ', '267', '50116'),
(437, '1', 1580, NULL, 'APPLE IPHONE X ', '353050094736921', ' ', '272', '50118'),
(438, '2', 1830, NULL, 'APPLE IPHONE X ', '354847091522710', ' ', '273', '50119'),
(439, '4', 1830, NULL, 'APPLE IPHONE X ', '353058095910924', ' ', '274', '50119'),
(440, '49', 1919, NULL, 'IPAD PRO 12.9\' 4G', '355809081341971', ' ', '268', '50117'),
(441, '105', 1200, NULL, 'SAMSUNG S9 ', '352802094949867', ' ', '269', '50117'),
(442, '3', 1580, NULL, 'APPLE IPHONE X ', '353058095318524', ' ', '270', '50117'),
(443, '3', 1580, NULL, 'APPLE IPHONE X ', '353053094882422', ' ', '270', '50117'),
(444, '127', 1400, NULL, 'GOOGLE PIXEL 2 XL ', '358036080475249', ' ', '271', '50117'),
(445, '155', 3000, NULL, 'Macbook Book Pro 13\'', 'C02WC0HSHV2M', ' ', '275', '50120'),
(446, '2', 1830, NULL, 'APPLE IPHONE X ', '353056090302618', ' ', '276', '50120'),
(447, '2', 1830, NULL, 'APPLE IPHONE X ', '353050096085996', ' ', '279', '50121'),
(448, '2', 1830, NULL, 'APPLE IPHONE X ', '353049090230996', ' ', '279', '50121'),
(449, '2', 1830, NULL, 'APPLE IPHONE X ', '353055092366019', ' ', '279', '50121'),
(450, '4', 1830, NULL, 'APPLE IPHONE X ', '353058090782252', ' ', '280', '50121'),
(451, '4', 1830, NULL, 'APPLE IPHONE X ', '354854092187196', ' ', '280', '50121'),
(452, '4', 1830, NULL, 'APPLE IPHONE X ', '353056097565092', ' ', '280', '50121'),
(453, '1', 1580, NULL, 'APPLE IPHONE X ', '354851091761773', ' ', '281', '50121'),
(454, '15', 1480, NULL, 'iphone8plus', '353009096664648', ' ', '282', '50121'),
(455, '15', 1480, NULL, 'iphone8plus', '353010096987898', ' ', '282', '50121'),
(456, '15', 1480, NULL, 'iphone8plus', '353012094279518', ' ', '282', '50121'),
(457, '48', 1619, NULL, 'IPAD PRO 12.9\' 4G', '355809081323607', ' ', '283', '50121'),
(458, '44', 1400, NULL, 'IPAD PRO 12.9\' 4G', '355808081056936', ' ', '284', '50121'),
(459, '186', 800, NULL, 'Ipad 6th gen 4G ', '353037090158416', ' ', '285', '50121'),
(460, '170', 670, NULL, 'iPad 5th gen 4G', '355804089861591', ' ', '286', '50121'),
(461, '115', 1350, NULL, 'SAMSUNG S9 PLUS', '352402096115169', ' ', '287', '50122'),
(462, '2', 1830, NULL, 'APPLE IPHONE X ', '353051096744624', ' ', '288', '50122'),
(463, '4', 1830, NULL, 'APPLE IPHONE X ', '353050095626550', ' ', '289', '50122'),
(464, '4', 1830, NULL, 'APPLE IPHONE X ', '353049097223150', ' ', '289', '50122'),
(465, '105', 1200, NULL, 'SAMSUNG S9 ', '352802094796284', ' ', '290', '50123'),
(466, '105', 1200, NULL, 'SAMSUNG S9 ', '352802098215497', ' ', '290', '50123'),
(467, '106', 1350, NULL, 'SAMSUNG S9 ', '355896090025612', ' ', '291', '50123'),
(468, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '352402093081646', ' ', '292', '50123'),
(469, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '352402094436328', ' ', '292', '50123'),
(470, '113', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091120690', ' ', '293', '50123'),
(471, '113', 1350, NULL, 'SAMSUNG S9 PLUS', '352402093835108', ' ', '293', '50123'),
(472, '115', 1350, NULL, 'SAMSUNG S9 PLUS', '352402095422913', ' ', '294', '50123'),
(473, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '352402098199013', ' ', '295', '50123'),
(474, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '352402098227202', ' ', '295', '50123'),
(475, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '352402098124037', ' ', '295', '50123'),
(476, '128', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080564968', ' ', '296', '50123'),
(477, '128', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080562095', ' ', '296', '50123'),
(478, '130', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080545330', ' ', '297', '50123'),
(479, '127', 1400, NULL, 'GOOGLE PIXEL 2 XL ', '358036080802020', ' ', '298', '50123'),
(480, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '352402093065714', ' ', '299', '50124'),
(481, '115', 1350, NULL, 'SAMSUNG S9 PLUS', '352402094772623', ' ', '300', '50124'),
(482, '191', 800, NULL, 'Samsung Galaxy s8 64gb ', '356808091380457', ' ', '301', '50124'),
(483, '4', 1830, NULL, 'APPLE IPHONE X ', '354846091854370', ' ', '304', '50126'),
(484, '2', 1830, NULL, 'APPLE IPHONE X ', '354845091863514', ' ', '305', '50126'),
(485, '4', 1830, NULL, 'APPLE IPHONE X ', '353055092818191', ' ', '306', '50127'),
(486, '4', 1830, NULL, 'APPLE IPHONE X ', '353054092772532', ' ', '306', '50127'),
(487, '4', 1830, NULL, 'APPLE IPHONE X ', '353055097408774', ' ', '306', '50127'),
(488, '4', 1830, NULL, 'APPLE IPHONE X ', '353056097358621', ' ', '306', '50127'),
(489, '2', 1830, NULL, 'APPLE IPHONE X ', '353049093904100', ' ', '307', '50127'),
(490, '2', 1830, NULL, 'APPLE IPHONE X ', '353050095995583', ' ', '307', '50127'),
(491, '2', 1830, NULL, 'APPLE IPHONE X ', '353055094681084', ' ', '307', '50127'),
(492, '2', 1830, NULL, 'APPLE IPHONE X ', '353052090758677', ' ', '307', '50127'),
(493, '48', 1619, NULL, 'IPAD PRO 12.9\' 4G', '355809081174471', ' ', '308', '50127'),
(494, '48', 1619, NULL, 'IPAD PRO 12.9\' 4G', '355809082125175', ' ', '308', '50127'),
(495, '48', 1619, NULL, 'IPAD PRO 12.9\' 4G', '355809081181443', ' ', '308', '50127'),
(496, '48', 1619, NULL, 'IPAD PRO 12.9\' 4G', '355809082118683', ' ', '308', '50127'),
(497, '48', 1619, NULL, 'IPAD PRO 12.9\' 4G', '355809081174463', ' ', '308', '50127'),
(498, '195', 3500, NULL, 'MACBOOK PRO 15\' 256GB', 'SC02W93WDHTD5', ' ', '309', '50127'),
(499, '3', 1580, NULL, 'APPLE IPHONE X ', '354840091786286', ' ', '310', '50127'),
(500, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '352402094125442', ' ', '311', '50127'),
(501, '20', 1080, NULL, 'iphone 8', '354892090515695', ' ', '312', '50128'),
(502, '20', 1080, NULL, 'iphone 8', '353001094129823', ' ', '312', '50128'),
(503, '127', 1400, NULL, 'GOOGLE PIXEL 2 XL ', '358036080687587', ' ', '313', '50128'),
(504, '85', 800, NULL, 'IPHONE 7 ', '354828090348737', ' ', '314', '50128'),
(505, '2', 1830, NULL, 'APPLE IPHONE X ', '353049093996510', ' ', '316', '50129'),
(506, '2', 1830, NULL, 'APPLE IPHONE X ', '353051096562182', ' ', '316', '50129'),
(507, '2', 1830, NULL, 'APPLE IPHONE X ', '353058094526481', ' ', '316', '50129'),
(508, '4', 1830, NULL, 'APPLE IPHONE X ', '353049091769372', ' ', '317', '50129'),
(509, '13', 1480, NULL, 'iphone8plus', '352982098613980', ' ', '318', '50130'),
(510, '20', 1080, NULL, 'iphone 8', '353002092079762', ' ', '319', '50130'),
(511, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091345248', ' ', '320', '50130'),
(512, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '355893097042948', ' ', '321', '50131'),
(513, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '352402098290853', ' ', '321', '50131'),
(514, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '355893097034804', ' ', '321', '50131'),
(515, '115', 1350, NULL, 'SAMSUNG S9 PLUS', '352402094811777', ' ', '322', '50131'),
(516, '130', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080545652', ' ', '323', '50131'),
(517, '130', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080570122', ' ', '323', '50131'),
(518, '128', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080564273', ' ', '324', '50131'),
(519, '128', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080566427', ' ', '324', '50131'),
(520, '128', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080559109', ' ', '324', '50131'),
(521, '128', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080559281', ' ', '324', '50131'),
(522, '128', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080566500', ' ', '324', '50131'),
(523, '128', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080565742', ' ', '324', '50131'),
(524, '60', 1400, NULL, 'IPAD PRO 12.9\' WIFI ONLY', 'SDLXVL6W7HND6', ' ', '326', '50133'),
(525, '4', 1830, NULL, 'APPLE IPHONE X ', '353056094509192', ' ', '328', '50133'),
(526, '74', 1360, NULL, 'SAMSUNG GALAXY NOTE 8 ', '354075094928912', ' ', '329', '50133'),
(527, '198', 1180, NULL, 'IPAD PRO 10.5\' 4G', '355816083641316', ' ', '335', '50136'),
(528, '198', 1180, NULL, 'IPAD PRO 10.5\' 4G', '355816083952424', ' ', '335', '50136'),
(529, '2', 1830, NULL, 'APPLE IPHONE X ', '353051096817537', ' ', '336', '50137'),
(530, '4', 1830, NULL, 'APPLE IPHONE X ', '353058096017810', ' ', '337', '50137'),
(531, '196', 1230, NULL, 'APPLE IPHONE 8 PLUS ', '353011099168338', ' ', '325', '50132'),
(532, '196', 1230, NULL, 'APPLE IPHONE 8 PLUS ', '353011099250631', ' ', '325', '50132'),
(533, '196', 1230, NULL, 'APPLE IPHONE 8 PLUS ', '353011098945363', ' ', '325', '50132'),
(534, '196', 1230, NULL, 'APPLE IPHONE 8 PLUS ', '353013098686179', ' ', '325', '50132'),
(535, '196', 1230, NULL, 'APPLE IPHONE 8 PLUS ', '353011099196297', ' ', '325', '50132'),
(536, '49', 1919, NULL, 'IPAD PRO 12.9\' 4G', '355808081059054', ' ', '330', '50134'),
(537, '48', 1619, NULL, 'IPAD PRO 12.9\' 4G', '355809082119517', ' ', '331', '50134'),
(538, '14', 1230, NULL, 'iphone8plus', '352980095669260', ' ', '332', '50134'),
(539, '107', 1200, NULL, 'SAMSUNG S9 ', '355894090786523', ' ', '333', '50134'),
(541, '2', 1830, NULL, 'APPLE IPHONE X ', '353052092051113', ' ', '339', '50139'),
(542, '2', 1830, NULL, 'APPLE IPHONE X ', '353054090340316', ' ', '339', '50139'),
(543, '4', 1830, NULL, 'APPLE IPHONE X ', '353054094107489', ' ', '340', '50139'),
(544, '4', 1830, NULL, 'APPLE IPHONE X ', '353052091429500', ' ', '340', '50139'),
(545, '4', 1830, NULL, 'APPLE IPHONE X ', '353049094302866', ' ', '340', '50139'),
(546, '1', 1580, NULL, 'APPLE IPHONE X ', '353058096515086', ' ', '341', '50140'),
(547, '2', 1830, NULL, 'APPLE IPHONE X ', '353058095862554', ' ', '342', '50140'),
(548, '2', 1830, NULL, 'APPLE IPHONE X ', ' 353053096173077 ', ' ', '342', '50140'),
(549, '4', 1830, NULL, 'APPLE IPHONE X ', '353051094287303', ' ', '343', '50140'),
(550, '106', 1350, NULL, 'SAMSUNG S9 ', '355896090047830', ' ', '344', '50141'),
(551, '113', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091091958', ' ', '345', '50141'),
(552, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091151893', ' ', '346', '50141'),
(553, '2', 1830, NULL, 'APPLE IPHONE X ', '353050096108376', ' ', '347', '50141'),
(554, '2', 1830, NULL, 'APPLE IPHONE X ', '353055092417887', ' ', '347', '50141'),
(555, '2', 1830, NULL, 'APPLE IPHONE X ', '354845091800912', ' ', '347', '50141'),
(556, '2', 1830, NULL, 'APPLE IPHONE X ', '353051093916498', ' ', '347', '50141'),
(557, '2', 1830, NULL, 'APPLE IPHONE X ', '353054094185642', ' ', '347', '50141'),
(558, '4', 1830, NULL, 'APPLE IPHONE X ', '354842092149738', ' ', '348', '50141'),
(559, '4', 1830, NULL, 'APPLE IPHONE X ', '353050095898092', ' ', '348', '50141'),
(560, '4', 1830, NULL, 'APPLE IPHONE X ', '353055094479877', ' ', '348', '50141'),
(561, '4', 1830, NULL, 'APPLE IPHONE X ', '353058093842673', ' ', '348', '50141'),
(562, '133', 980, NULL, 'Ipad pro 10.5â€ wifi', 'SDMPW27L7J28K', ' ', '349', '50141'),
(563, '4', 1830, NULL, 'APPLE IPHONE X ', '353049093999266', ' ', '350', '50142'),
(564, '4', 1830, NULL, 'APPLE IPHONE X ', '353055094744726', ' ', '350', '50142'),
(565, '4', 1830, NULL, 'APPLE IPHONE X ', '353049095667713', ' ', '350', '50142'),
(566, '2', 1830, NULL, 'APPLE IPHONE X ', '353058090038390', ' ', '351', '50142'),
(567, '2', 1830, NULL, 'APPLE IPHONE X ', '353050094655246', ' ', '351', '50142'),
(568, '113', 1350, NULL, 'SAMSUNG S9 PLUS', '352402093092999', ' ', '352', '50142'),
(569, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '352402093748582', ' ', '353', '50142'),
(570, '3', 1580, NULL, 'APPLE IPHONE X ', '354856092199196', ' ', '354', '50142'),
(571, '2', 1830, NULL, 'APPLE IPHONE X ', '353049095787669', ' ', '351', '50142'),
(572, '4', 1830, NULL, 'APPLE IPHONE X ', '353057096118644', ' ', '355', '50143'),
(573, '130', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080545603', ' ', '356', '50144'),
(574, '130', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080570189', ' ', '356', '50144'),
(575, '128', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080560040', ' ', '357', '50144'),
(576, '128', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080561378', ' ', '357', '50144'),
(577, '128', 1550, NULL, 'GOOGLE PIXEL 2 XL ', '358036080558960', ' ', '357', '50144'),
(578, '191', 800, NULL, 'Samsung Galaxy s8 64gb ', '355257095899206', ' ', '358', '50144'),
(579, '2', 1830, NULL, 'APPLE IPHONE X ', '353051092894910', ' ', '360', '50146'),
(580, '2', 1830, NULL, 'APPLE IPHONE X ', '353054096019922', ' ', '360', '50146'),
(581, '2', 1830, NULL, 'APPLE IPHONE X ', '354842092064085', ' ', '360', '50146'),
(582, '2', 1830, NULL, 'APPLE IPHONE X ', '353054094335494', ' ', '360', '50146'),
(583, '2', 1830, NULL, 'APPLE IPHONE X ', '353049096151642', ' ', '360', '50146'),
(584, '2', 1830, NULL, 'APPLE IPHONE X ', '353057094502401', ' ', '360', '50146'),
(585, '1', 1580, NULL, 'APPLE IPHONE X ', '354853092188998', ' ', '361', '50146'),
(587, '198', 1180, NULL, 'IPAD PRO 10.5\' 4G', 'DMPVW2HBJ2D1', ' ', '362', '50146'),
(588, '106', 1350, NULL, 'SAMSUNG S9 ', '355894090286771', ' ', '363', '50147'),
(589, '112', 1500, NULL, 'SAMSUNG S9 PLUS', '355893097018906', ' ', '364', '50147'),
(590, '116', 0, NULL, 'SAMSUNG S9 PLUS', '352402098301189', ' ', '365', '50147'),
(591, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '355893091290907', ' ', '366', '50147'),
(593, '2', 1830, NULL, 'APPLE IPHONE X ', '353057094964577', ' ', '367', '50148'),
(594, '2', 1830, NULL, 'APPLE IPHONE X ', '353057094992404', ' ', '367', '50148'),
(595, '3', 1580, NULL, 'APPLE IPHONE X ', '353049095683975', ' ', '368', '50148'),
(596, '111', 1350, NULL, 'SAMSUNG S9 PLUS', '352402094282318', ' ', '369', '50148'),
(597, '34', 1080, NULL, 'IPHONE8', '354889090667955', ' ', '370', '50149'),
(598, '19', 1330, NULL, 'iphone8', '353003093815733', ' ', '371', '50149');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `intId` int(50) NOT NULL,
  `intCusId` int(50) DEFAULT NULL,
  `intSupId` int(50) DEFAULT NULL,
  `itemname` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `brandmodel` varchar(200) NOT NULL,
  `qty` int(50) DEFAULT '0',
  `price` varchar(50) DEFAULT NULL,
  `color` varchar(200) NOT NULL,
  `capacity` varchar(200) NOT NULL,
  `simtype` varchar(200) NOT NULL,
  `simsize` varchar(200) NOT NULL,
  `dimension` varchar(200) NOT NULL,
  `display` varchar(200) NOT NULL,
  `battery` varchar(200) NOT NULL,
  `nonremovable` varchar(200) NOT NULL,
  `rammemory` varchar(200) NOT NULL,
  `ostype` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `shortdescription` mediumtext NOT NULL,
  `status` int(50) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`intId`, `intCusId`, `intSupId`, `itemname`, `category`, `brand`, `brandmodel`, `qty`, `price`, `color`, `capacity`, `simtype`, `simsize`, `dimension`, `display`, `battery`, `nonremovable`, `rammemory`, `ostype`, `description`, `shortdescription`, `status`) VALUES
(1, NULL, NULL, 'APPLE IPHONE X ', 'condition_new', '1', '1', 76, '1580', '1', '3', 'single', '', '143.5x70.9x7.6', 'AMOLED', ' Li-Ion ', 'on', '512', 'apple', '<p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#666666\"><strong>Overview</strong></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#666666\">iPhone X features an all-screen design with a 5.8-inch Super Retina HD display with HDR and True Tone.<span style=\"font-size:x-small\">1</span> Designed with the most durable glass ever in a smartphone and a surgical-grade stainless steel band. Charges wirelessly.<span style=\"font-size:x-small\">2</span>Resists water and dust.<span style=\"font-size:x-small\">3</span> 12-megapixel dual cameras with dual optical image stabilisation for great low light photos. TrueDepth camera with Portrait selfies and new Portrait Lighting.<span style=\"font-size:x-small\">4</span> Face ID lets you unlock and use Apple Pay with just a glance. Powered by A11 Bionic, the smartest and most powerful chip ever in a smartphone. Supports augmented reality experiences in games and apps. With iPhone X, the next era of iPhone has begun.</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><br />\r\n<span style=\"color:#666666\"><strong>Key Features</strong></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#666666\">5.8-inch Super Retina HD display with HDR and True Tone<span style=\"font-size:x-small\">1</span><br />\r\n<br />\r\nAll-glass and stainless steel design; water and dust resistance<span style=\"font-size:x-small\">3</span><br />\r\n<br />\r\n12-megapixel dual cameras with dual OIS, Portrait mode, Portrait Lighting and 4K video up to 60 fps<span style=\"font-size:x-small\">4</span><br />\r\n<br />\r\n7-megapixel TrueDepth front camera with Portrait mode and Portrait Lighting<span style=\"font-size:x-small\">4</span><br />\r\n<br />\r\nFace ID for secure authentication and Apple Pay<br />\r\n<br />\r\nA11 Bionic, the smartest and most powerful chip in a smartphone<br />\r\n<br />\r\nWireless charging &mdash; works with Qi chargers<span style=\"font-size:x-small\">2</span></span></p>\r\n\r\n<ul style=\"margin-left:0px; margin-right:0px\">\r\n</ul>\r\n', 'Apple iPhone X 64GB (Space Grey)', 1),
(2, NULL, NULL, 'APPLE IPHONE X ', 'condition_new', '1', '1', 129, '1830', '1', '5', 'single', '', '143.5x70.9x7.6', 'AMOLED', ' Li-Ion ', 'on', '512', 'apple', '<p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#666666\"><strong>Overview</strong></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#666666\">iPhone X features an all-screen design with a 5.8-inch Super Retina HD display with HDR and True Tone.<span style=\"font-size:x-small\">1</span> Designed with the most durable glass ever in a smartphone and a surgical-grade stainless steel band. Charges wirelessly.<span style=\"font-size:x-small\">2</span>Resists water and dust.<span style=\"font-size:x-small\">3</span> 12-megapixel dual cameras with dual optical image stabilisation for great low light photos. TrueDepth camera with Portrait selfies and new Portrait Lighting.<span style=\"font-size:x-small\">4</span> Face ID lets you unlock and use Apple Pay with just a glance. Powered by A11 Bionic, the smartest and most powerful chip ever in a smartphone. Supports augmented reality experiences in games and apps. With iPhone X, the next era of iPhone has begun.</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><br />\r\n<span style=\"color:#666666\"><strong>Key Features</strong></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#666666\">5.8-inch Super Retina HD display with HDR and True Tone<span style=\"font-size:x-small\">1</span><br />\r\n<br />\r\nAll-glass and stainless steel design; water and dust resistance<span style=\"font-size:x-small\">3</span><br />\r\n<br />\r\n12-megapixel dual cameras with dual OIS, Portrait mode, Portrait Lighting and 4K video up to 60 fps<span style=\"font-size:x-small\">4</span><br />\r\n<br />\r\n7-megapixel TrueDepth front camera with Portrait mode and Portrait Lighting<span style=\"font-size:x-small\">4</span><br />\r\n<br />\r\nFace ID for secure authentication and Apple Pay<br />\r\n<br />\r\nA11 Bionic, the smartest and most powerful chip in a smartphone<br />\r\n<br />\r\nWireless charging &mdash; works with Qi chargers<span style=\"font-size:x-small\">2</span></span></p>\r\n\r\n<ul style=\"margin-left:0px; margin-right:0px\">\r\n</ul>\r\n', 'Apple iPhone X 64GB (Space Grey)', 1),
(3, NULL, NULL, 'APPLE IPHONE X ', 'condition_new', '1', '1', 40, '1580', '3', '3', 'single', '', '143.5x70.9x7.6', 'AMOLED', ' Li-Ion ', 'on', '512', 'apple', '<p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#666666\"><strong>Overview</strong></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#666666\">iPhone X features an all-screen design with a 5.8-inch Super Retina HD display with HDR and True Tone.<span style=\"font-size:x-small\">1</span> Designed with the most durable glass ever in a smartphone and a surgical-grade stainless steel band. Charges wirelessly.<span style=\"font-size:x-small\">2</span>Resists water and dust.<span style=\"font-size:x-small\">3</span> 12-megapixel dual cameras with dual optical image stabilisation for great low light photos. TrueDepth camera with Portrait selfies and new Portrait Lighting.<span style=\"font-size:x-small\">4</span> Face ID lets you unlock and use Apple Pay with just a glance. Powered by A11 Bionic, the smartest and most powerful chip ever in a smartphone. Supports augmented reality experiences in games and apps. With iPhone X, the next era of iPhone has begun.</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><br />\r\n<span style=\"color:#666666\"><strong>Key Features</strong></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#666666\">5.8-inch Super Retina HD display with HDR and True Tone<span style=\"font-size:x-small\">1</span><br />\r\n<br />\r\nAll-glass and stainless steel design; water and dust resistance<span style=\"font-size:x-small\">3</span><br />\r\n<br />\r\n12-megapixel dual cameras with dual OIS, Portrait mode, Portrait Lighting and 4K video up to 60 fps<span style=\"font-size:x-small\">4</span><br />\r\n<br />\r\n7-megapixel TrueDepth front camera with Portrait mode and Portrait Lighting<span style=\"font-size:x-small\">4</span><br />\r\n<br />\r\nFace ID for secure authentication and Apple Pay<br />\r\n<br />\r\nA11 Bionic, the smartest and most powerful chip in a smartphone<br />\r\n<br />\r\nWireless charging &mdash; works with Qi chargers<span style=\"font-size:x-small\">2</span></span></p>\r\n\r\n<ul style=\"margin-left:0px; margin-right:0px\">\r\n</ul>\r\n', 'Apple iPhone X 64GB (Space Grey)', 1),
(4, NULL, NULL, 'APPLE IPHONE X ', 'condition_new', '1', '1', 125, '1830', '3', '5', 'single', '', '143.5x70.9x7.6', 'AMOLED', ' Li-Ion ', 'on', '512', 'apple', '<p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#666666\"><strong>Overview</strong></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#666666\">iPhone X features an all-screen design with a 5.8-inch Super Retina HD display with HDR and True Tone.<span style=\"font-size:x-small\">1</span> Designed with the most durable glass ever in a smartphone and a surgical-grade stainless steel band. Charges wirelessly.<span style=\"font-size:x-small\">2</span>Resists water and dust.<span style=\"font-size:x-small\">3</span> 12-megapixel dual cameras with dual optical image stabilisation for great low light photos. TrueDepth camera with Portrait selfies and new Portrait Lighting.<span style=\"font-size:x-small\">4</span> Face ID lets you unlock and use Apple Pay with just a glance. Powered by A11 Bionic, the smartest and most powerful chip ever in a smartphone. Supports augmented reality experiences in games and apps. With iPhone X, the next era of iPhone has begun.</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><br />\r\n<span style=\"color:#666666\"><strong>Key Features</strong></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"color:#666666\">5.8-inch Super Retina HD display with HDR and True Tone<span style=\"font-size:x-small\">1</span><br />\r\n<br />\r\nAll-glass and stainless steel design; water and dust resistance<span style=\"font-size:x-small\">3</span><br />\r\n<br />\r\n12-megapixel dual cameras with dual OIS, Portrait mode, Portrait Lighting and 4K video up to 60 fps<span style=\"font-size:x-small\">4</span><br />\r\n<br />\r\n7-megapixel TrueDepth front camera with Portrait mode and Portrait Lighting<span style=\"font-size:x-small\">4</span><br />\r\n<br />\r\nFace ID for secure authentication and Apple Pay<br />\r\n<br />\r\nA11 Bionic, the smartest and most powerful chip in a smartphone<br />\r\n<br />\r\nWireless charging &mdash; works with Qi chargers<span style=\"font-size:x-small\">2</span></span></p>\r\n\r\n<ul style=\"margin-left:0px; margin-right:0px\">\r\n</ul>\r\n', 'Apple iPhone X 64GB (Space Grey)', 1),
(12, NULL, NULL, 'iphone8plus', 'condition_new', '1', '2', 1, '1230', '4', '3', 'single', '', '143.6 x 70.9 x 7.7 mm', 'retina', 'li-ion', 'on', '512', 'apple', '<p>iphone 8 plus&nbsp;</p>\r\n', 'iphone 8 plus ', 1),
(13, NULL, NULL, 'iphone8plus', 'condition_new', '1', '2', 4, '1480', '4', '5', 'single', '', '143.6 x 70.9 x 7.7 mm', 'retina', 'li-ion', 'on', '512', 'apple', '<p>iphone 8 plus&nbsp;</p>\r\n', 'iphone 8 plus ', 1),
(14, NULL, NULL, 'iphone8plus', 'condition_new', '1', '2', 1, '1230', '7', '3', 'single', '', '143.6 x 70.9 x 7.7 mm', 'retina', 'li-ion', 'on', '512', 'apple', '<p>iphone 8 plus&nbsp;</p>\r\n', 'iphone 8 plus ', 1),
(15, NULL, NULL, 'iphone8plus', 'condition_new', '1', '2', 8, '1480', '7', '5', 'single', '', '143.6 x 70.9 x 7.7 mm', 'retina', 'li-ion', 'on', '512', 'apple', '<p>iphone 8 plus&nbsp;</p>\r\n', 'iphone 8 plus ', 1),
(18, NULL, NULL, 'iphone8', 'condition_new', '1', '3', 5, '1080', '4', '3', 'single', '', '143.6 x 70.9 x 7.7 mm', 'retina', 'li-ion', 'on', '512', 'apple', '<p>iphone 8&nbsp;</p>\r\n', 'iPhone 8 ', 1),
(19, NULL, NULL, 'iphone8', 'condition_new', '1', '3', 3, '1330', '4', '5', 'single', '', '143.6 x 70.9 x 7.7 mm', 'retina', 'li-ion', 'on', '512', 'apple', '<p>iphone 8&nbsp;</p>\r\n', 'iPhone 8 ', 1),
(20, NULL, NULL, 'iphone 8', 'condition_new', '1', '3', 8, '1080', '7', '3', 'single', '', '143.6 x 70.9 x 7.7 mm', 'retina', 'li-ion', 'on', '512', 'apple', '<p>iphone 8&nbsp;</p>\r\n', 'iPhone 8 ', 1),
(21, NULL, NULL, 'iphone8', 'condition_new', '1', '3', 0, '1330', '7', '5', 'single', '', '143.6 x 70.9 x 7.7 mm', 'retina', 'li-ion', 'on', '512', 'apple', '<p>iphone 8&nbsp;</p>\r\n', 'iPhone 8 ', 1),
(23, NULL, NULL, 'IPAD PRO 10.5\'\' 4G', 'condition_new', '1', '8', 1, '1400', '4', '5', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'retina', 'li-ion', 'on', '512', 'apple', '<p>ipad pro 10.5&#39;&#39; 4G</p>\r\n', 'ipad pro 10.5\'\' 4G', 1),
(27, NULL, NULL, 'ipadpro1054G', 'condition_new', '1', '8', 0, '1620', '6', '6', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'retina', 'li-ion', 'on', '512', 'apple', '<p>ipad pro 10.5&#39;&#39; 4G</p>\r\n', 'ipad pro 10.5\'\' 4G', 1),
(29, NULL, NULL, 'ipadpro1054G', 'condition_new', '1', '8', 0, '1400', '6', '5', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'retina', 'li-ion', 'on', '512', 'apple', '<p>ipad pro 10.5&#39;&#39; 4G</p>\r\n', 'ipad pro 10.5\'\' 4G', 1),
(31, NULL, NULL, 'ipadpro1054G', 'condition_new', '1', '8', 1, '1180', '7', '3', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'retina', 'li-ion', 'on', '512', 'apple', '<p>ipad pro 10.5&#39;&#39; 4G</p>\r\n', 'ipad pro 10.5\'\' 4G', 1),
(32, NULL, NULL, 'IPAD PRO 10.5\'\' 4G', 'condition_new', '1', '8', 0, '1400', '7', '5', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'retina', 'li-ion', 'on', '512', 'apple', '<p>ipad pro 10.5&#39;&#39; 4G</p>\r\n', 'ipad pro 10.5\'\' 4G', 1),
(34, NULL, NULL, 'IPHONE8', 'condition_new', '1', '11', 2, '1080', '3', '3', 'single', '', '138.4 x 67.3 x 7.3 mm ', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPHONE 8&nbsp;</p>\r\n', 'IPHONE 8', 1),
(35, NULL, NULL, 'IPHONE8', 'condition_new', '1', '11', 0, '1380', '3', '5', 'single', '', '138.4 x 67.3 x 7.3 mm ', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPHONE 8&nbsp;</p>\r\n', 'IPHONE 8', 1),
(36, NULL, NULL, 'iphone8plus', 'condition_new', '1', '12', 0, '1230', '3', '3', 'single', '', '158.4 x 78.1 x 7.5 mm ', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPHONE&nbsp;8 PLUS&nbsp;</p>\r\n', 'IPHONE 8 PLUS ', 1),
(37, NULL, NULL, 'iphone8plus', 'condition_new', '1', '12', 2, '1480', '3', '5', 'single', '', '158.4 x 78.1 x 7.5 mm ', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPHONR 8 PLUS&nbsp;</p>\r\n', 'IPHONE 8 PLUS ', 1),
(38, NULL, NULL, 'ipadpro1054G', 'condition_new', '1', '13', 0, '1180', '3', '3', 'single', '', ' 250.6 Ã— 174.1 Ã— 6.1 mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPAD PRO 10.5&#39;&#39; 4G</p>\r\n', 'IPAD PRO 10.5\'\' 4G', 1),
(39, NULL, NULL, 'ipadpro1054G', 'condition_new', '1', '13', 0, '1400', '3', '5', 'single', '', ' 250.6 Ã— 174.1 Ã— 6.1 mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPAD PRO 10.5&#39;&#39; 4G</p>\r\n', 'IPAD PRO 10.5\'\' 4G', 1),
(40, NULL, NULL, 'Ipadpro 10.5  4G', 'condition_new', '1', '13', 0, '1620', '3', '6', 'single', '', ' 250.6 Ã— 174.1 Ã— 6.1 mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPAD PRO 10.5&#39;&#39; 4G</p>\r\n', 'IPAD PRO 10.5\'\' 4G', 1),
(41, NULL, NULL, 'iphone six ', 'condition_new', '1', '14', 0, '', '4', '2', 'single', '', '138.4 x 67.0 x 6.9 mm ', 'retina', 'li-ion', 'on', '3', 'apple', '<p>iphone 6&nbsp;</p>\r\n', 'iphone 6 ', 1),
(42, NULL, NULL, 'iphone six ', 'condition_new', '1', '14', 4, '459', '4', '2', 'single', '', '138.4 x 67.0 x 6.9 mm ', 'retina', 'li-ion', 'on', '2', 'apple', '<p>iphone 6&nbsp;</p>\r\n', 'iphone 6 ', 1),
(43, NULL, NULL, 'iphone six ', 'condition_new', '1', '14', 0, '459', '7', '2', 'single', 'option1', '138.4 x 67.0 x 6.9 mm ', 'retina', 'li-ion', 'on', '2', 'apple', '<p>iphone 6&nbsp;</p>\r\n', 'iphone 6 ', 1),
(44, NULL, NULL, 'IPAD PRO 12.9\'\' 4G', 'condition_new', '1', '15', 1, '1400', '4', '3', 'single', '', '305.7mmx220.6mmx6.9mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPAD PRO 12.9&#39;&#39; 4G</p>\r\n', 'IPAD PRO 12.9\'\' 4G', 1),
(45, NULL, NULL, 'IPAD PRO 12.9\'\' 4G', 'condition_new', '1', '15', 0, '', '4', '5', 'single', 'option1', '305.7mmx220.6mmx6.9mm', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; 4G</p>\r\n', 'IPAD PRO 12.9\'\' 4G', 1),
(46, NULL, NULL, 'IPAD PRO 12.9\'\' 4G', 'condition_new', '1', '15', 0, '', '4', '6', 'single', 'option1', '305.7mmx220.6mmx6.9mm', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; 4G</p>\r\n', 'IPAD PRO 12.9\'\' 4G', 1),
(47, NULL, NULL, 'IPAD PRO 12.9\'\' 4G', 'condition_new', '1', '15', 2, '1399', '4', '3', 'single', '', '305.7mmx220.6mmx6.9mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPAD PRO 12.9&#39;&#39; 4G</p>\r\n', 'IPAD PRO 12.9\'\' 4G', 1),
(48, NULL, NULL, 'IPAD PRO 12.9\'\' 4G', 'condition_new', '1', '15', 8, '1619', '4', '5', 'single', '', '305.7mmx220.6mmx6.9mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPAD PRO 12.9&#39;&#39; 4G</p>\r\n', 'IPAD PRO 12.9\'\' 4G', 1),
(49, NULL, NULL, 'IPAD PRO 12.9\'\' 4G', 'condition_new', '1', '15', 3, '1919', '4', '6', 'single', '', '305.7mmx220.6mmx6.9mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPAD PRO 12.9&#39;&#39; 4G</p>\r\n', 'IPAD PRO 12.9\'\' 4G', 1),
(50, NULL, NULL, 'IPAD PRO 12.9\'\' 4G', 'condition_new', '1', '15', 0, '', '7', '3', 'single', 'option1', '305.7mmx220.6mmx6.9mm', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; 4G</p>\r\n', 'IPAD PRO 12.9\'\' 4G', 1),
(51, NULL, NULL, 'IPAD PRO 12.9\'\' 4G', 'condition_new', '1', '15', 0, '', '7', '5', 'single', 'option1', '305.7mmx220.6mmx6.9mm', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; 4G</p>\r\n', 'IPAD PRO 12.9\'\' 4G', 1),
(52, NULL, NULL, 'IPAD PRO 12.9\'\' 4G', 'condition_new', '1', '15', 0, '', '7', '6', 'single', 'option1', '305.7mmx220.6mmx6.9mm', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; 4G</p>\r\n', 'IPAD PRO 12.9\'\' 4G', 1),
(53, NULL, NULL, 'IPAD PRO 12.9\'\' 4G', 'condition_new', '1', '15', 0, '', '7', '3', 'single', 'option1', '305.7mmx220.6mmx6.9mm', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; 4G</p>\r\n', 'IPAD PRO 12.9\'\' 4G', 1),
(54, NULL, NULL, 'IPAD PRO 12.9\'\' 4G', 'condition_new', '1', '15', 0, '', '7', '5', 'single', 'option1', '305.7mmx220.6mmx6.9mm', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; 4G</p>\r\n', 'IPAD PRO 12.9\'\' 4G', 1),
(55, NULL, NULL, 'IPAD PRO 12.9\'\' 4G', 'condition_new', '1', '15', 0, '', '7', '6', 'single', 'option1', '305.7mmx220.6mmx6.9mm', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; 4G</p>\r\n', 'IPAD PRO 12.9\'\' 4G', 1),
(56, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '', '4', '3', 'single', 'option1', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(57, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '', '4', '5', 'single', 'option1', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(58, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '', '4', '6', 'single', 'option1', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(60, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 1, '1400', '4', '5', 'single', '', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(61, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '', '4', '6', 'single', 'option1', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(62, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 1, '1200', '4', '3', 'single', '', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(63, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '', '4', '5', 'single', 'option1', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(64, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '', '4', '6', 'single', 'option1', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(65, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '', '6', '3', 'single', 'option1', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(66, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '', '6', '5', 'single', 'option1', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(67, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '', '6', '6', 'single', 'option1', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(68, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '', '7', '3', 'single', 'option1', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(69, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '1419', '7', '5', 'single', '', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(70, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '', '7', '6', 'single', 'option1', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(71, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '', '7', '3', 'single', 'option1', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(72, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '', '7', '5', 'single', 'option1', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(73, NULL, NULL, 'IPAD PRO 12.9\'\' WIFI ONLY', 'condition_new', '1', '16', 0, '', '7', '6', 'single', 'option1', '305.7 mm x 220.6 mm x 6.9 mm ', 'RETINA', 'LI-ION', 'on', '4', 'apple', '<p>IPAD PRO 12.9&#39;&#39; WIFI ONLY</p>\r\n', 'IPAD PRO 12.9\'\' WIFI ONLY', 1),
(74, NULL, NULL, 'SAMSUNG GALAXY NOTE 8 ', 'condition_new', '2', '17', 7, '1360', '1', '3', 'single', '', '162.5 x 74.8 x 8.6 mm', 'retina', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG GALAXY NOTE 8&nbsp;</p>\r\n', 'SAMSUNG GALAXY NOTE 8 ', 1),
(75, NULL, NULL, 'SAMSUNG GALAXY NOTE 8 ', 'condition_new', '2', '17', 0, '', '7', '3', 'single', '', '162.5 x 74.8 x 8.6 mm', 'retina', 'LI-ION', 'on', '6', 'apple', '<p>SAMSUNG GALAXY NOTE 8&nbsp;</p>\r\n', 'SAMSUNG GALAXY NOTE 8 ', 1),
(76, NULL, NULL, 'SAMSUNG GALAXY NOTE 8 ', 'condition_new', '2', '17', 0, '1360', '7', '3', 'single', '', '162.5 x 74.8 x 8.6 mm', 'retina', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG GALAXY NOTE 8&nbsp;</p>\r\n', 'SAMSUNG GALAXY NOTE 8 ', 1),
(77, NULL, NULL, 'SAMSUNG GALAXY NOTE 8 ', 'condition_new', '2', '17', 2, '1360', '7', '3', 'single', '', '162.5 x 74.8 x 8.6 mm', 'retina', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG GALAXY NOTE 8&nbsp;</p>\r\n', 'SAMSUNG GALAXY NOTE 8 ', 1),
(81, NULL, NULL, 'SAMSUNG GALAXY S8 PLUS ', 'condition_new', '2', '4', 3, '1150', '4', '3', 'single', '', '159.5 x 73.4 x 8.1 mm', 'OLED', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG GALAXY S8 PLUS&nbsp;</p>\r\n', 'SAMSUNG GALAXY S8 PLUS ', 1),
(82, NULL, NULL, 'SAMSUNG GALAXY S8 PLUS ', 'condition_new', '2', '4', 0, '', '5', '3', 'single', 'option1', '159.5 x 73.4 x 8.1 mm', 'OLED', 'LI-ION', 'on', '6', 'android', '<p>SAMSUNG GALAXY S8 PLUS&nbsp;</p>\r\n', 'SAMSUNG GALAXY S8 PLUS ', 1),
(83, NULL, NULL, 'SAMSUNG GALAXY S8 PLUS ', 'condition_new', '2', '4', 1, '1200', '7', '3', 'single', '', '159.5 x 73.4 x 8.1 mm', 'OLED', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG GALAXY S8 PLUS&nbsp;</p>\r\n', 'SAMSUNG GALAXY S8 PLUS ', 1),
(84, NULL, NULL, 'SAMSUNG GALAXY S8 PLUS ', 'condition_new', '2', '4', 0, '1200', '4', '3', 'single', '', '159.5 x 73.4 x 8.1 mm', 'OLED', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG GALAXY S8 PLUS&nbsp;</p>\r\n', 'SAMSUNG GALAXY S8 PLUS ', 1),
(85, NULL, NULL, 'IPHONE 7 ', 'condition_new', '1', '19', 1, '800', '1', '2', 'single', '', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPHONE 7&nbsp;</p>\r\n', 'IPHONE 7 ', 1),
(86, NULL, NULL, 'IPHONE 7 ', 'condition_new', '1', '19', 0, '1000', '1', '4', 'single', '', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPHONE 7&nbsp;</p>\r\n', 'IPHONE 7 ', 1),
(87, NULL, NULL, 'IPHONE 7 ', 'condition_new', '1', '19', 0, '', '1', '5', 'single', 'option1', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '3', 'apple', '<p>IPHONE 7&nbsp;</p>\r\n', 'IPHONE 7 ', 1),
(88, NULL, NULL, 'IPHONE 7 ', 'condition_new', '1', '19', 0, '', '8', '2', 'single', 'option1', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '3', 'apple', '<p>IPHONE 7&nbsp;</p>\r\n', 'IPHONE 7 ', 1),
(89, NULL, NULL, 'IPHONE 7 ', 'condition_new', '1', '19', 0, '1000', '8', '4', 'single', '', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPHONE 7&nbsp;</p>\r\n', 'IPHONE 7 ', 1),
(90, NULL, NULL, 'IPHONE 7 ', 'condition_new', '1', '19', 0, '', '8', '5', 'single', 'option1', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '3', 'apple', '<p>IPHONE 7&nbsp;</p>\r\n', 'IPHONE 7 ', 1),
(91, NULL, NULL, 'IPHONE 7 ', 'condition_new', '1', '19', 0, '', '8', '2', 'single', 'option1', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '3', 'apple', '<p>IPHONE 7&nbsp;</p>\r\n', 'IPHONE 7 ', 1),
(92, NULL, NULL, 'IPHONE 7 ', 'condition_new', '1', '19', 0, '1000', '8', '4', 'single', '', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPHONE 7&nbsp;</p>\r\n', 'IPHONE 7 ', 1),
(93, NULL, NULL, 'IPHONE 7 ', 'condition_new', '1', '19', 0, '', '8', '5', 'single', 'option1', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '3', 'apple', '<p>IPHONE 7&nbsp;</p>\r\n', 'IPHONE 7 ', 1),
(94, NULL, NULL, 'IPHONE 7 ', 'condition_new', '1', '19', 0, '', '8', '2', 'single', 'option1', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '3', 'apple', '<p>IPHONE 7&nbsp;</p>\r\n', 'IPHONE 7 ', 1),
(95, NULL, NULL, 'IPHONE 7 ', 'condition_new', '1', '19', 0, '1000', '8', '4', 'single', '', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPHONE 7&nbsp;</p>\r\n', 'IPHONE 7 ', 1),
(96, NULL, NULL, 'IPHONE 7 ', 'condition_new', '1', '19', 0, '', '8', '5', 'single', 'option1', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '3', 'apple', '<p>IPHONE 7&nbsp;</p>\r\n', 'IPHONE 7 ', 1),
(97, NULL, NULL, 'IPHONE SE ', 'condition_new', '1', '20', 0, '550', '4', '2', 'single', '', '123.8 x 58.6 x 7.6 mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPHONE SE&nbsp;</p>\r\n', 'IPHONE SE ', 1),
(98, NULL, NULL, 'IPHONE SE ', 'condition_new', '1', '20', 0, '', '4', '4', 'single', 'option1', '123.8 x 58.6 x 7.6 mm', 'RETINA', 'LI-ION', 'on', '2', 'apple', '<p>IPHONE SE&nbsp;</p>\r\n', 'IPHONE SE ', 1),
(99, NULL, NULL, 'IPHONE SE ', 'condition_new', '1', '20', 0, '550', '7', '2', 'single', '', '123.8 x 58.6 x 7.6 mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>IPHONE SE&nbsp;</p>\r\n', 'IPHONE SE ', 1),
(100, NULL, NULL, 'IPHONE SE ', 'condition_new', '1', '20', 0, '', '7', '4', 'single', 'option1', '123.8 x 58.6 x 7.6 mm', 'RETINA', 'LI-ION', 'on', '2', 'apple', '<p>IPHONE SE&nbsp;</p>\r\n', 'IPHONE SE ', 1),
(101, NULL, NULL, 'IPHONE SE ', 'condition_new', '1', '20', 0, '', '7', '2', 'single', 'option1', '123.8 x 58.6 x 7.6 mm', 'RETINA', 'LI-ION', 'on', '2', 'apple', '<p>IPHONE SE&nbsp;</p>\r\n', 'IPHONE SE ', 1),
(102, NULL, NULL, 'IPHONE SE ', 'condition_new', '1', '20', 0, '', '7', '4', 'single', 'option1', '123.8 x 58.6 x 7.6 mm', 'RETINA', 'LI-ION', 'on', '2', 'apple', '<p>IPHONE SE&nbsp;</p>\r\n', 'IPHONE SE ', 1),
(103, NULL, NULL, 'IPHONE SE ', 'condition_new', '1', '20', 0, '', '7', '2', 'single', 'option1', '123.8 x 58.6 x 7.6 mm', 'RETINA', 'LI-ION', 'on', '2', 'apple', '<p>IPHONE SE&nbsp;</p>\r\n', 'IPHONE SE ', 1),
(104, NULL, NULL, 'IPHONE SE ', 'condition_new', '1', '20', 0, '', '7', '4', 'single', 'option1', '123.8 x 58.6 x 7.6 mm', 'RETINA', 'LI-ION', 'on', '2', 'apple', '<p>IPHONE SE&nbsp;</p>\r\n', 'IPHONE SE ', 1),
(105, NULL, NULL, 'SAMSUNG S9 ', 'condition_new', '2', '21', 11, '1200', '1', '3', 'single', '', '147.7 x 68.7 x 8.5 mm', 'OLED', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG S9&nbsp;</p>\r\n', 'SAMSUNG S9 ', 1),
(106, NULL, NULL, 'SAMSUNG S9 ', 'condition_new', '2', '21', 8, '1350', '1', '5', 'single', '', '147.7 x 68.7 x 8.5 mm', 'OLED', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG S9&nbsp;</p>\r\n', 'SAMSUNG S9 ', 1),
(107, NULL, NULL, 'SAMSUNG S9 ', 'condition_new', '2', '21', 2, '1200', '5', '3', 'single', '', '147.7 x 68.7 x 8.5 mm', 'OLED', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG S9&nbsp;</p>\r\n', 'SAMSUNG S9 ', 1),
(108, NULL, NULL, 'SAMSUNG S9 ', 'condition_new', '2', '21', 0, '', '5', '5', 'single', 'option1', '147.7 x 68.7 x 8.5 mm', 'OLED', 'LI-ION', 'on', '4', 'apple', '<p>SAMSUNG S9&nbsp;</p>\r\n', 'SAMSUNG S9 ', 1),
(109, NULL, NULL, 'SAMSUNG S9 ', 'condition_new', '2', '21', 2, '1200', '11', '3', 'single', '', '147.7 x 68.7 x 8.5 mm', 'OLED', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG S9&nbsp;</p>\r\n', 'SAMSUNG S9 ', 1),
(110, NULL, NULL, 'SAMSUNG S9 ', 'condition_new', '2', '21', 0, '', '11', '5', 'single', 'option1', '147.7 x 68.7 x 8.5 mm', 'OLED', 'LI-ION', 'on', '4', 'apple', '<p>SAMSUNG S9&nbsp;</p>\r\n', 'SAMSUNG S9 ', 1),
(111, NULL, NULL, 'SAMSUNG S9 PLUS', 'condition_new', '2', '23', 19, '1350', '1', '3', 'single', '', ' 158.1 x 73.8 x 8.5 mm', 'OLED', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG S9 PLUS</p>\r\n', 'SAMSUNG S9 PLUS', 1),
(112, NULL, NULL, 'SAMSUNG S9 PLUS', 'condition_new', '2', '23', 20, '1500', '1', '5', 'single', '', ' 158.1 x 73.8 x 8.5 mm', 'OLED', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG S9 PLUS</p>\r\n', 'SAMSUNG S9 PLUS', 1),
(113, NULL, NULL, 'SAMSUNG S9 PLUS', 'condition_new', '2', '23', 6, '1350', '5', '3', 'single', '', ' 158.1 x 73.8 x 8.5 mm', 'OLED', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG S9 PLUS</p>\r\n', 'SAMSUNG S9 PLUS', 1),
(114, NULL, NULL, 'SAMSUNG S9 PLUS', 'condition_new', '2', '23', 0, '1500', '5', '5', 'single', '', ' 158.1 x 73.8 x 8.5 mm', 'OLED', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG S9 PLUS</p>\r\n', 'SAMSUNG S9 PLUS', 1),
(115, NULL, NULL, 'SAMSUNG S9 PLUS', 'condition_new', '2', '23', 8, '1350', '11', '3', 'single', '', ' 158.1 x 73.8 x 8.5 mm', 'OLED', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG S9 PLUS</p>\r\n', 'SAMSUNG S9 PLUS', 1),
(116, NULL, NULL, 'SAMSUNG S9 PLUS', 'condition_new_never_used', '2', '23', 1, '', '11', '5', 'single', 'option1', ' 158.1 x 73.8 x 8.5 mm', 'OLED', 'LI-ION', 'on', '4', 'android', '<p>SAMSUNG S9 PLUS</p>\r\n', 'SAMSUNG S9 PLUS', 1),
(118, NULL, NULL, 'SAMSUNG GALAXY J5 PRO ', 'condition_new', '2', '24', 0, '350', '1', '1', 'single', '', '146.30 x 71.30 x 7.90	', 'RETINA ', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG GALAXY J5 PRO&nbsp;</p>\r\n', 'SAMSUNG GALAXY J5 PRO ', 1),
(121, NULL, NULL, 'OPPO A57', 'condition_new', '4', '25', 3, '270', '7', '1', 'single', '', '149.1 x 72.9 x 7.7 mm', 'RETINA ', 'LI-ION ', 'on', '512', 'apple', '<p>OPPO A57</p>\r\n', 'OPPO A57', 1),
(122, NULL, NULL, 'IPOD TOUCH ', 'condition_new', '1', '26', 2, '450', '5', '4', 'single', '', '58.6x123,4x6.1mm', 'retina ', 'LI-ION ', 'on', '512', 'apple', '<p>IPOD TOUCH&nbsp;</p>\r\n', 'IPOD TOUCH ', 1),
(123, NULL, NULL, 'GOOGLE PIXEL 2 ', 'condition_new', '3', '6', 0, '', '1', '3', 'single', 'option1', ' 145.7 x 69.7 x 7.8 mm', 'OLED', 'LI-ION ', 'on', '4', 'android', '<p>GOOGLE PIXEL 2&nbsp;</p>\r\n', 'GOOGLE PIXEL 2 ', 1),
(124, NULL, NULL, 'GOOGLE PIXEL 2 ', 'condition_new', '3', '6', 0, '', '1', '4', 'single', 'option1', ' 145.7 x 69.7 x 7.8 mm', 'OLED', 'LI-ION ', 'on', '4', 'android', '<p>GOOGLE PIXEL 2&nbsp;</p>\r\n', 'GOOGLE PIXEL 2 ', 1),
(125, NULL, NULL, 'GOOGLE PIXEL 2 ', 'condition_new', '3', '6', 1, '1080', '2', '3', 'single', '', ' 145.7 x 69.7 x 7.8 mm', 'OLED', 'LI-ION ', 'on', '512', 'apple', '<p>GOOGLE PIXEL 2&nbsp;</p>\r\n', 'GOOGLE PIXEL 2 ', 1),
(126, NULL, NULL, 'GOOGLE PIXEL 2 ', 'condition_new', '3', '6', 0, '', '2', '4', 'single', 'option1', ' 145.7 x 69.7 x 7.8 mm', 'OLED', 'LI-ION ', 'on', '4', 'android', '<p>GOOGLE PIXEL 2&nbsp;</p>\r\n', 'GOOGLE PIXEL 2 ', 1),
(127, NULL, NULL, 'GOOGLE PIXEL 2 XL ', 'condition_new', '3', '7', 5, '1400', '1', '3', 'single', '', '157.9 x 76.7 x 7.9 mm', 'RETINA ', 'LI-ION ', 'on', '512', 'apple', '<p>GOOGLE PIXEL 2 XL&nbsp;</p>\r\n', 'GOOGLE PIXEL 2 XL ', 1),
(128, NULL, NULL, 'GOOGLE PIXEL 2 XL ', 'condition_new', '3', '7', 13, '1550', '1', '4', 'single', '', '157.9 x 76.7 x 7.9 mm', 'RETINA ', 'LI-ION ', 'on', '512', 'apple', '<p>GOOGLE PIXEL 2 XL&nbsp;</p>\r\n', 'GOOGLE PIXEL 2 XL ', 1),
(129, NULL, NULL, 'GOOGLE PIXEL 2 XL ', 'condition_new', '3', '7', 0, '', '2', '3', 'single', '', '157.9 x 76.7 x 7.9 mm', 'RETINA ', 'LI-ION ', 'on', '4', 'android', '<p>GOOGLE PIXEL 2 XL&nbsp;</p>\r\n', 'GOOGLE PIXEL 2 XL ', 1),
(130, NULL, NULL, 'GOOGLE PIXEL 2 XL ', 'condition_new', '3', '7', 6, '1550', '2', '4', 'single', '', '157.9 x 76.7 x 7.9 mm', 'RETINA ', 'LI-ION ', 'on', '512', 'apple', '<p>GOOGLE PIXEL 2 XL&nbsp;</p>\r\n', 'GOOGLE PIXEL 2 XL ', 1),
(131, NULL, NULL, 'GOOGLE PIXEL 2 XL ', 'condition_new', '3', '7', 0, '', '5', '3', 'single', '', '157.9 x 76.7 x 7.9 mm', 'RETINA ', 'LI-ION ', 'on', '4', 'android', '<p>GOOGLE PIXEL 2 XL&nbsp;</p>\r\n', 'GOOGLE PIXEL 2 XL ', 1),
(132, NULL, NULL, 'GOOGLE PIXEL 2 XL ', 'condition_new', '3', '7', 0, '', '5', '4', 'single', '', '157.9 x 76.7 x 7.9 mm', 'RETINA ', 'LI-ION ', 'on', '4', 'android', '<p>GOOGLE PIXEL 2 XL&nbsp;</p>\r\n', 'GOOGLE PIXEL 2 XL ', 1),
(133, NULL, NULL, 'Ipad pro 10.5â€ wifi', 'condition_new', '1', '29', 2, '980', '4', '3', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'Retina', 'Li-ion', 'on', '512', 'apple', '<p>Ipad pro 10.5&rdquo; wifi&nbsp;</p>\r\n', 'Ipad pro 10.5â€ wifi ', 1),
(134, NULL, NULL, 'Ipad pro 10.5â€ wifi', 'condition_new', '1', '29', 1, '1200', '4', '5', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'Retina', 'Li-ion', 'on', '512', 'apple', '<p>Ipad pro 10.5&rdquo; wifi&nbsp;</p>\r\n', 'Ipad pro 10.5â€ wifi ', 1),
(135, NULL, NULL, 'Ipad pro 10.5â€ wifi', 'condition_new', '1', '29', 0, '', '4', '6', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'Retina', 'Li-ion', 'on', '4', 'apple', '<p>Ipad pro 10.5&rdquo; wifi&nbsp;</p>\r\n', 'Ipad pro 10.5â€ wifi ', 1),
(136, NULL, NULL, 'Ipad pro 10.5â€ wifi', 'condition_new', '1', '29', 0, '', '7', '3', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'Retina', 'Li-ion', 'on', '4', 'apple', '<p>Ipad pro 10.5&rdquo; wifi&nbsp;</p>\r\n', 'Ipad pro 10.5â€ wifi ', 1),
(137, NULL, NULL, 'Ipad pro 10.5â€ wifi', 'condition_new', '1', '29', 0, '', '7', '5', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'Retina', 'Li-ion', 'on', '4', 'apple', '<p>Ipad pro 10.5&rdquo; wifi&nbsp;</p>\r\n', 'Ipad pro 10.5â€ wifi ', 1),
(138, NULL, NULL, 'Ipad pro 10.5â€ wifi', 'condition_new', '1', '29', 0, '', '7', '6', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'Retina', 'Li-ion', 'on', '4', 'apple', '<p>Ipad pro 10.5&rdquo; wifi&nbsp;</p>\r\n', 'Ipad pro 10.5â€ wifi ', 1),
(139, NULL, NULL, 'Ipad pro 10.5â€ wifi', 'condition_new', '1', '29', 0, '', '7', '3', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'Retina', 'Li-ion', 'on', '4', 'apple', '<p>Ipad pro 10.5&rdquo; wifi&nbsp;</p>\r\n', 'Ipad pro 10.5â€ wifi ', 1),
(140, NULL, NULL, 'Ipad pro 10.5â€ wifi', 'condition_new', '1', '29', 0, '', '7', '5', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'Retina', 'Li-ion', 'on', '4', 'apple', '<p>Ipad pro 10.5&rdquo; wifi&nbsp;</p>\r\n', 'Ipad pro 10.5â€ wifi ', 1),
(141, NULL, NULL, 'Ipad pro 10.5â€ wifi', 'condition_new', '1', '29', 0, '', '7', '6', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'Retina', 'Li-ion', 'on', '4', 'apple', '<p>Ipad pro 10.5&rdquo; wifi&nbsp;</p>\r\n', 'Ipad pro 10.5â€ wifi ', 1),
(142, NULL, NULL, 'Ipad pro 10.5â€ wifi', 'condition_new', '1', '29', 0, '', '7', '3', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'Retina', 'Li-ion', 'on', '4', 'apple', '<p>Ipad pro 10.5&rdquo; wifi&nbsp;</p>\r\n', 'Ipad pro 10.5â€ wifi ', 1),
(143, NULL, NULL, 'Ipad pro 10.5â€ wifi', 'condition_new', '1', '29', 0, '', '7', '5', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'Retina', 'Li-ion', 'on', '4', 'apple', '<p>Ipad pro 10.5&rdquo; wifi&nbsp;</p>\r\n', 'Ipad pro 10.5â€ wifi ', 1),
(144, NULL, NULL, 'Ipad pro 10.5â€ wifi', 'condition_new', '1', '29', 0, '', '7', '6', 'single', '', '250.6 Ã— 174.1 Ã— 6.1 mm', 'Retina', 'Li-ion', 'on', '4', 'apple', '<p>Ipad pro 10.5&rdquo; wifi&nbsp;</p>\r\n', 'Ipad pro 10.5â€ wifi ', 1),
(146, NULL, NULL, 'SAMSUNG GALAXY J2 PRO ', 'condition_new', '2', '30', 1, '230', '1', '1', 'single', '', '142.40 x 71.10 x 8.00	', 'retina', 'li-ion', 'on', '512', 'apple', '<p>Samsung Galaxy J2 pro&nbsp;<br />\r\n&nbsp;</p>\r\n', 'Samsung Galaxy J2 proÂ ', 1),
(147, NULL, NULL, 'SAMSUNG GALAXY J2 PRO ', 'condition_new', '2', '30', 0, '', '2', '1', 'single', '', '142.40 x 71.10 x 8.00	', 'retina', 'li-ion', 'on', '3', 'android', '<p>Samsung Galaxy J2 pro&nbsp;<br />\r\n&nbsp;</p>\r\n', 'Samsung Galaxy J2 proÂ ', 1),
(148, NULL, NULL, 'SAMSUNG GALAXY S7 ', 'condition_new', '2', '31', 1, '550', '3', '2', 'single', '', '142.4 x 69.6 x 7.9mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG S7&nbsp;</p>\r\n', 'SAMSUNG S7 ', 1),
(149, NULL, NULL, 'SAMSUNG GALAXY S7 ', 'condition_new', '2', '31', 1, '550', '1', '2', 'single', '', '142.4 x 69.6 x 7.9mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG S7&nbsp;</p>\r\n', 'SAMSUNG S7 ', 1),
(150, NULL, NULL, 'SAMSUNG GALAXY S7 ', 'condition_new', '2', '31', 0, '550', '7', '2', 'single', '', '142.4 x 69.6 x 7.9mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>SAMSUNG S7&nbsp;</p>\r\n', 'SAMSUNG S7 ', 1),
(153, NULL, NULL, 'Macbook Book Pro 13\'\'', 'condition_new', '1', '33', 1, '1900', '3', '4', 'single', '', '12.35 x 8.62 x .71 (in)', 'retina', 'li-ion', 'on', '512', 'apple', '<p>Macbook Book Pro 13&#39;&#39;</p>\r\n', 'Macbook Book Pro 13\'\'', 1),
(154, NULL, NULL, 'Macbook Book Pro 13\'\'', 'condition_new', '1', '33', 0, '2700', '3', '5', 'single', '', '12.35 x 8.62 x .71 (in)', 'retina', 'li-ion', 'on', '512', 'apple', '<p>Macbook Book Pro 13&#39;&#39;</p>\r\n', 'Macbook Book Pro 13\'\'', 1),
(155, NULL, NULL, 'Macbook Book Pro 13\'\'', 'condition_new', '1', '33', 1, '3000', '3', '6', 'single', '', '12.35 x 8.62 x .71 (in)', 'retina', 'li-ion', 'on', '512', 'apple', '<p>Macbook Book Pro 13&#39;&#39;</p>\r\n', 'Macbook Book Pro 13\'\'', 1),
(156, NULL, NULL, 'iPod touch 32gb ', 'condition_new', '1', '26', 1, '300', '4', '2', 'single', '', '138x77x43mm', 'retina', 'li-ion', 'on', '512', 'apple', '<p>iPod touch 32gb&nbsp;</p>\r\n', 'iPod touch 32gb ', 1),
(157, NULL, NULL, 'IPAD MINI 4 WIFI ', 'condition_new', '1', '34', 1, '580', '7', '4', 'single', '', '203.2 mm x 134.8 mm x 6.1 mm', 'retina ', 'li-ion ', 'on', '512', 'apple', '<p>ipad mini 4 wifi&nbsp;</p>\r\n', 'ipad mini 4 wifiÂ ', 1),
(158, NULL, NULL, 'MacBook Air 13â€™â€™', 'condition_new', '1', '35', 0, '1500', '3', '4', 'single', '', '134', 'Retina', 'Li-ion', 'on', '512', 'apple', '<p>MACBOOK AIR 13&rsquo;&rsquo;</p>\r\n', 'MACBOOK AIR 13â€™â€™', 1),
(159, NULL, NULL, 'MacBook Air 13â€™â€™', 'condition_new', '1', '35', 0, '1800', '3', '5', 'single', '', '134', 'Retina', 'Li-ion', 'on', '512', 'apple', '<p>MACBOOK AIR 13&rsquo;&rsquo;</p>\r\n', 'MACBOOK AIR 13â€™â€™', 1),
(166, NULL, NULL, 'iPad 5th gen 4G', 'condition_new', '1', '36', 0, '', '3', '2', 'single', 'option1', '116', 'Retina ', 'Li-ion', 'on', '512', 'apple', '<p>iPad 5th 4G</p>\r\n', 'Pad 5th 4G', 1),
(167, NULL, NULL, 'iPad 5th gen 4G', 'condition_new', '1', '36', 0, '800', '3', '4', 'single', '', '116', 'Retina ', 'Li-ion', 'on', '512', 'apple', '<p>iPad 5th 4G</p>\r\n', 'Pad 5th 4G', 1),
(168, NULL, NULL, 'iPad 5th gen 4G', 'condition_new', '1', '36', 2, '670', '4', '2', 'single', '', '116', 'Retina ', 'Li-ion', 'on', '512', 'apple', '<p>iPad 5th 4G</p>\r\n', 'Pad 5th 4G', 1),
(169, NULL, NULL, 'iPad 5th gen 4G', 'condition_new', '1', '36', 0, '', '4', '4', 'single', 'option1', '116', 'Retina ', 'Li-ion', 'on', '512', 'apple', '<p>iPad 5th 4G</p>\r\n', 'Pad 5th 4G', 1),
(170, NULL, NULL, 'iPad 5th gen 4G', 'condition_new', '1', '36', 1, '670', '7', '2', 'single', '', '116', 'Retina ', 'Li-ion', 'on', '512', 'apple', '<p>iPad 5th 4G</p>\r\n', 'Pad 5th 4G', 1),
(171, NULL, NULL, 'iPad 5th gen 4G', 'condition_new', '1', '36', 0, '', '7', '4', 'single', 'option1', '116', 'Retina ', 'Li-ion', 'on', '512', 'apple', '<p>iPad 5th 4G</p>\r\n', 'Pad 5th 4G', 1),
(172, NULL, NULL, 'iPad 5th gen wifi only', 'condition_new', '1', '37', 0, '', '3', '2', 'single', 'option1', '138', 'Retina', 'Li-ion', 'on', '512', 'apple', '<p>iPad 5th gen wifi only</p>\r\n', 'iPad 5th gen wifi only', 1),
(173, NULL, NULL, 'iPad 5th gen wifi only', 'condition_new', '1', '37', 0, '', '3', '4', 'single', 'option1', '138', 'Retina', 'Li-ion', 'on', '512', 'apple', '<p>iPad 5th gen wifi only</p>\r\n', 'iPad 5th gen wifi only', 1),
(174, NULL, NULL, 'iPad 5th gen wifi only', 'condition_new', '1', '37', 0, '470', '4', '2', 'single', '', '138', 'Retina', 'Li-ion', 'on', '512', 'apple', '<p>iPad 5th gen wifi only</p>\r\n', 'iPad 5th gen wifi only', 1),
(175, NULL, NULL, 'iPad 5th gen wifi only', 'condition_new', '1', '37', 1, '600', '4', '4', 'single', '', '138', 'Retina', 'Li-ion', 'on', '512', 'apple', '<p>iPad 5th gen wifi only</p>\r\n', 'iPad 5th gen wifi only', 1),
(176, NULL, NULL, 'iPad 5th gen wifi only', 'condition_new', '1', '37', 1, '470', '7', '2', 'single', '', '138', 'Retina', 'Li-ion', 'on', '512', 'apple', '<p>iPad 5th gen wifi only</p>\r\n', 'iPad 5th gen wifi only', 1),
(177, NULL, NULL, 'iPad 5th gen wifi only', 'condition_new', '1', '37', 1, '600', '7', '4', 'single', '', '138', 'Retina', 'Li-ion', 'on', '512', 'apple', '<p>iPad 5th gen wifi only</p>\r\n', 'iPad 5th gen wifi only', 1),
(178, NULL, NULL, 'Ipad mini 4 wifi only ', 'condition_new', '1', '34', 1, '580', '4', '4', 'single', '', '138', 'retina ', 'li-ion', 'on', '512', 'apple', '<p>ipad mini 4&nbsp;</p>\r\n', 'ipad mini 4 ', 1),
(179, NULL, NULL, 'ipad 6th gen wifi', 'condition_new', '1', '38', 0, '470', '3', '2', 'single', '', '240 x 169.5 x  7.5mm', 'retina ', 'li-ion', 'on', '512', 'apple', '<p>ipad 6th gen wifi</p>\r\n', 'ipad 6th gen wifi', 1),
(180, NULL, NULL, 'ipad 6th gen wifi', 'condition_new', '1', '38', 0, '600', '3', '4', 'single', '', '240 x 169.5 x  7.5mm', 'retina ', 'li-ion', 'on', '512', 'apple', '<p>ipad 6th gen wifi</p>\r\n', 'ipad 6th gen wifi', 1),
(181, NULL, NULL, 'ipad 6th gen wifi', 'condition_new', '1', '38', 0, '470', '4', '2', 'single', '', '240 x 169.5 x  7.5mm', 'retina ', 'li-ion', 'on', '512', 'apple', '<p>ipad 6th gen wifi</p>\r\n', 'ipad 6th gen wifi', 1),
(182, NULL, NULL, 'ipad 6th gen wifi', 'condition_new', '1', '38', 1, '600', '4', '4', 'single', '', '240 x 169.5 x  7.5mm', 'retina ', 'li-ion', 'on', '512', 'apple', '<p>ipad 6th gen wifi</p>\r\n', 'ipad 6th gen wifi', 1),
(183, NULL, NULL, 'ipad 6th gen wifi', 'condition_new', '1', '38', 0, '470', '7', '2', 'single', '', '240 x 169.5 x  7.5mm', 'retina ', 'li-ion', 'on', '512', 'apple', '<p>ipad 6th gen wifi</p>\r\n', 'ipad 6th gen wifi', 1),
(184, NULL, NULL, 'ipad 6th gen wifi', 'condition_new', '1', '38', 0, '600', '7', '4', 'single', '', '240 x 169.5 x  7.5mm', 'retina ', 'li-ion', 'on', '512', 'apple', '<p>ipad 6th gen wifi</p>\r\n', 'ipad 6th gen wifi', 1),
(185, NULL, NULL, 'Ipad 6th gen 4G ', 'condition_new', '1', '39', 2, '670', '3', '2', 'single', '', '138x77x43mm', 'Retina', 'li-ION', 'on', '512', 'apple', '<p>Ipad 6th gen 4G&nbsp;</p>\r\n', 'Ipad 6th gen 4G ', 1),
(186, NULL, NULL, 'Ipad 6th gen 4G ', 'condition_new', '1', '39', 1, '800', '3', '4', 'single', '', '138x77x43mm', 'Retina', 'li-ION', 'on', '512', 'apple', '<p>Ipad 6th gen 4G&nbsp;</p>\r\n', 'Ipad 6th gen 4G ', 1),
(187, NULL, NULL, 'Ipad 6th gen 4G ', 'condition_new', '1', '39', 0, '670', '4', '2', 'single', '', '138x77x43mm', 'Retina', 'li-ION', 'on', '512', 'apple', '<p>Ipad 6th gen 4G&nbsp;</p>\r\n', 'Ipad 6th gen 4G ', 1),
(188, NULL, NULL, 'Ipad 6th gen 4G ', 'condition_new', '1', '39', 0, '800', '4', '4', 'single', '', '138x77x43mm', 'Retina', 'li-ION', 'on', '512', 'apple', '<p>Ipad 6th gen 4G&nbsp;</p>\r\n', 'Ipad 6th gen 4G ', 1),
(189, NULL, NULL, 'Ipad 6th gen 4G ', 'condition_new', '1', '39', 0, '670', '7', '2', 'single', '', '138x77x43mm', 'Retina', 'li-ION', 'on', '512', 'apple', '<p>Ipad 6th gen 4G&nbsp;</p>\r\n', 'Ipad 6th gen 4G ', 1),
(190, NULL, NULL, 'Ipad 6th gen 4G ', 'condition_new', '1', '39', 0, '800', '7', '4', 'single', '', '138x77x43mm', 'Retina', 'li-ION', 'on', '512', 'apple', '<p>Ipad 6th gen 4G&nbsp;</p>\r\n', 'Ipad 6th gen 4G ', 1),
(191, NULL, NULL, 'Samsung Galaxy s8 64gb ', 'condition_new', '2', '5', 3, '800', '1', '3', 'single', '', '123.8 x 58.6 x 7.6 mm', 'retina', 'li-ION', 'on', '512', 'apple', '<p>Samsung Galaxy s8 64gb&nbsp;</p>\r\n', 'Samsung Galaxy s8 64gb ', 1),
(192, NULL, NULL, 'Samsung Galaxy s8 64gb ', 'condition_new', '2', '5', 0, '1200', '7', '3', 'single', '', '123.8 x 58.6 x 7.6 mm', 'retina', 'li-ION', 'on', '512', 'apple', '<p>Samsung Galaxy s8 64gb&nbsp;</p>\r\n', 'Samsung Galaxy s8 64gb ', 1),
(193, NULL, NULL, 'Samsung Galaxy s8 64gb ', 'condition_new', '2', '5', 0, '1200', '7', '3', 'single', '', '123.8 x 58.6 x 7.6 mm', 'retina', 'li-ION', 'on', '512', 'apple', '<p>Samsung Galaxy s8 64gb&nbsp;</p>\r\n', 'Samsung Galaxy s8 64gb ', 1),
(194, NULL, NULL, 'MACBOOK PRO 15\'\' 256GB', 'condition_new', '1', '41', 0, '', '3', '5', 'single', '', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>MACBOOK PRO 15&#39;&#39; 256GB</p>\r\n', 'MACBOOK PRO 15\'\' 256GB', 1),
(195, NULL, NULL, 'MACBOOK PRO 15\'\' 256GB', 'condition_new', '1', '41', 1, '3500', '4', '5', 'single', '', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>MACBOOK PRO 15&#39;&#39; 256GB</p>\r\n', 'MACBOOK PRO 15\'\' 256GB', 1),
(196, NULL, NULL, 'APPLE IPHONE 8 PLUS ', 'condition_new', '1', '2', 5, '1230', '10', '3', 'single', '', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>APPLE IPHONE 8 PLUS&nbsp;</p>\r\n', 'APPLE IPHONE 8 PLUS ', 1),
(197, NULL, NULL, 'APPLE IPHONE 8 PLUS ', 'condition_new', '1', '2', 0, '1480', '10', '5', 'single', '', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'LI-ION', 'on', '512', 'apple', '<p>APPLE IPHONE 8 PLUS&nbsp;</p>\r\n', 'APPLE IPHONE 8 PLUS ', 1),
(198, NULL, NULL, 'IPAD PRO 10.5\'\' 4G', 'condition_new', '1', '13', 3, '1180', '4', '3', 'single', '', '138.3 x 67.1 x 7.1 mm', 'RETINA', 'KLI-ION', 'on', '512', 'apple', '<p>IPAD PRO 10.5&#39; 4G</p>\r\n', 'IPAD PRO 10.5\' 4G', 1);

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
-- Table structure for table `paymentterm`
--

CREATE TABLE `paymentterm` (
  `pay_id` int(11) NOT NULL,
  `pay_name` varchar(255) DEFAULT NULL,
  `pay_des` varchar(255) DEFAULT NULL,
  `pay_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentterm`
--

INSERT INTO `paymentterm` (`pay_id`, `pay_name`, `pay_des`, `pay_status`) VALUES
(6, '14 Days', 'test ', 1),
(9, 'threedays', 'threedays', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `intId` int(11) NOT NULL,
  `intinvId` int(50) NOT NULL,
  `intOrderId` int(50) NOT NULL,
  `intCompId` int(11) NOT NULL,
  `intcatID` int(50) DEFAULT NULL,
  `intSupId` int(11) NOT NULL,
  `intCashtypeId` int(11) NOT NULL,
  `intItemId` int(11) NOT NULL,
  `discount` int(50) NOT NULL,
  `taxid` varchar(50) NOT NULL,
  `itemqty` int(11) NOT NULL,
  `vartotal` varchar(50) NOT NULL,
  `itemcat` varchar(50) NOT NULL,
  `itemprice` varchar(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `purdate` date NOT NULL,
  `purchasenotes` mediumtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`intId`, `intinvId`, `intOrderId`, `intCompId`, `intcatID`, `intSupId`, `intCashtypeId`, `intItemId`, `discount`, `taxid`, `itemqty`, `vartotal`, `itemcat`, `itemprice`, `itemname`, `purdate`, `purchasenotes`, `status`) VALUES
(1, 0, 50001, 4, NULL, 13, 2, 2, 1080, '', 3, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-09', '', 1),
(2, 0, 50001, 4, NULL, 13, 2, 4, 360, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-09', '', 1),
(3, 0, 50001, 4, NULL, 13, 2, 3, 280, '', 1, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-09', '', 1),
(4, 0, 50001, 4, NULL, 13, 2, 13, 290, '', 1, '', 'newbrand', '1480', 'iphone8plus', '2018-03-09', '', 1),
(5, 0, 50001, 4, NULL, 13, 2, 19, 330, '', 1, '', 'newbrand', '1330', 'iphone8', '2018-03-09', '', 1),
(6, 0, 50001, 4, NULL, 13, 2, 22, 354, '', 1, '', 'newbrand', '1180', 'ipadpro1054G', '2018-03-09', '', 1),
(7, 0, 50002, 4, NULL, 1, 2, 1, 260, '', 1, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-09', '', 1),
(8, 0, 50003, 4, NULL, 1, 2, 1, 260, '', 1, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-09', '', 1),
(9, 0, 50004, 4, NULL, 1, 2, 2, 360, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-09', '', 1),
(10, 0, 50005, 4, NULL, 14, 2, 1, 0, '', 2, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-10', '', 1),
(11, 0, 50006, 4, NULL, 15, 2, 2, 720, '', 2, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-10', '', 1),
(12, 0, 50006, 4, NULL, 15, 2, 1, 260, '', 1, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-10', '', 1),
(13, 0, 50006, 4, NULL, 15, 2, 37, 310, '', 1, '', 'newbrand', '1480', 'iphone8plus', '2018-03-10', '', 1),
(14, 0, 50006, 4, NULL, 15, 2, 34, 250, '', 1, '', 'newbrand', '1080', 'IPHONE8', '2018-03-10', '', 1),
(15, 0, 50007, 4, NULL, 1, 2, 1, 260, '', 1, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-10', '', 1),
(16, 0, 50008, 4, NULL, 14, 2, 2, 360, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-10', '', 1),
(17, 0, 50009, 4, NULL, 1, 2, 42, 139, '', 1, '', 'newbrand', '459', 'iphone six ', '2018-03-10', '', 1),
(18, 8, 50010, 4, NULL, 16, 2, 3, 260, '', 1, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-11', '', 1),
(19, 9, 50010, 4, NULL, 16, 2, 3, 260, '', 1, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-11', '', 1),
(20, 10, 50011, 4, NULL, 15, 0, 1, 260, '', 1, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-11', '', 1),
(21, 11, 50012, 4, NULL, 11, 3, 4, 1050, '', 3, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-12', '', 1),
(22, 12, 50012, 4, NULL, 11, 3, 2, 350, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-12', '', 1),
(23, 13, 50012, 4, NULL, 11, 3, 34, 250, '', 1, '', 'newbrand', '1080', 'IPHONE8', '2018-03-12', '', 1),
(24, 14, 50013, 4, NULL, 1, 3, 2, 370, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-13', '', 1),
(25, 15, 50013, 4, NULL, 1, 3, 4, 370, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-13', '', 1),
(26, 16, 50013, 4, NULL, 1, 3, 81, 360, '', 2, '', 'newbrand', '1150', 'SAMSUNG GALAXY S8 PLUS ', '2018-03-13', '', 1),
(27, 17, 50014, 4, NULL, 11, 3, 23, 840, '', 2, '', 'newbrand', '1400', 'IPAD PRO 10.5\'\' 4G', '2018-03-13', '', 1),
(28, 18, 50014, 4, NULL, 11, 3, 74, 400, '', 1, '', 'newbrand', '1360', 'SAMSUNG GALAXY NOTE 8 ', '2018-03-13', '', 1),
(29, 19, 50014, 4, NULL, 11, 3, 86, 580, '', 2, '', 'newbrand', '1000', 'IPHONE 7 ', '2018-03-13', '', 1),
(30, 20, 50014, 4, NULL, 11, 3, 3, 520, '', 2, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-13', '', 1),
(31, 21, 50014, 4, NULL, 11, 3, 2, 350, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-13', '', 1),
(32, 22, 50014, 4, NULL, 11, 3, 4, 350, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-13', '', 1),
(33, 23, 50015, 4, NULL, 16, 2, 2, 700, '', 2, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-13', '', 1),
(34, 24, 50015, 4, NULL, 16, 2, 4, 350, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-13', '', 1),
(35, 25, 50015, 4, NULL, 16, 2, 32, 420, '', 1, '', 'newbrand', '1400', 'IPAD PRO 10.5\'\' 4G', '2018-03-13', '', 1),
(36, 26, 50016, 4, NULL, 17, 2, 1, 520, '', 2, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-14', '', 1),
(37, 27, 50016, 4, NULL, 17, 2, 3, 520, '', 2, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-14', '', 1),
(38, 28, 50016, 4, NULL, 17, 2, 2, 340, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-14', '', 1),
(39, 29, 50016, 4, NULL, 17, 2, 2, 1830, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-14', '', 1),
(40, 30, 50016, 4, NULL, 17, 2, 20, 1080, '', 1, '', 'newbrand', '1080', 'iphone8', '2018-03-14', '', 1),
(41, 31, 50017, 4, NULL, 1, 3, 97, 230, '', 1, '', 'newbrand', '550', 'IPHONE SE ', '2018-03-14', '', 1),
(42, 32, 50017, 4, NULL, 1, 3, 81, 360, '', 1, '', 'newbrand', '1150', 'SAMSUNG GALAXY S8 PLUS ', '2018-03-14', '', 1),
(43, 33, 50018, 4, NULL, 1, 3, 1, 270, '', 1, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-16', '', 1),
(44, 34, 50019, 4, NULL, 11, 3, 4, 350, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-16', '', 1),
(45, 35, 50019, 4, NULL, 11, 3, 106, 250, '', 1, '', 'newbrand', '1350', 'SAMSUNG S9 ', '2018-03-16', '', 1),
(46, 36, 50019, 4, NULL, 11, 3, 113, 250, '', 1, '', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-03-16', '', 1),
(47, 37, 50020, 4, NULL, 1, 3, 105, 220, '', 1, '', 'newbrand', '1200', 'SAMSUNG S9 ', '2018-03-17', '', 1),
(48, 38, 50021, 4, NULL, 1, 3, 121, 110, '', 1, '', 'newbrand', '270', 'OPPO A57', '2018-03-17', '', 1),
(49, 39, 50021, 4, NULL, 1, 3, 118, 125, '', 1, '', 'newbrand', '350', 'SAMSUNG GALAXY J5 PRO ', '2018-03-17', '', 1),
(50, 40, 50021, 4, NULL, 1, 3, 42, 139, '', 1, '', 'newbrand', '459', 'iphone six ', '2018-03-17', '', 1),
(51, 41, 50021, 4, NULL, 1, 3, 2, 1020, '', 3, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-17', '', 1),
(52, 42, 50021, 4, NULL, 1, 3, 4, 330, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-17', '', 1),
(53, 43, 50022, 4, NULL, 18, 2, 1, 270, '', 1, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-18', '', 1),
(54, 44, 50023, 4, NULL, 15, 3, 1, 270, '', 1, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-18', '', 1),
(55, 45, 50024, 4, NULL, 16, 2, 4, 680, '', 2, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-18', '', 1),
(56, 46, 50025, 4, NULL, 15, 2, 113, 280, '', 1, '', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-03-18', '', 1),
(57, 47, 50025, 4, NULL, 15, 2, 1, 270, '', 1, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-18', '', 1),
(58, 48, 50025, 4, NULL, 15, 2, 3, 270, '', 1, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-18', '', 1),
(59, 49, 50025, 4, NULL, 15, 2, 4, 360, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-18', '', 1),
(60, 50, 50025, 4, NULL, 15, 2, 2, 440, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-18', '', 1),
(61, 51, 50026, 4, NULL, 14, 2, 121, 110, '', 3, '', 'newbrand', '270', 'OPPO A57', '2018-03-18', '', 1),
(62, 52, 50027, 4, NULL, 15, 2, 2, 720, '', 2, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-19', '', 1),
(63, 53, 50027, 4, NULL, 15, 2, 4, 720, '', 2, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-19', '', 1),
(64, 54, 50027, 4, NULL, 15, 2, 3, 730, '', 1, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-19', '', 1),
(65, 55, 50028, 4, NULL, 16, 2, 2, 1360, '', 4, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-19', '', 1),
(66, 56, 50029, 4, NULL, 1, 3, 2, 360, '', 1, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-19', '', 1),
(67, 57, 50029, 4, NULL, 1, 3, 42, 139, '', 1, '', 'newbrand', '459', 'iphone six ', '2018-03-19', '', 1),
(68, 58, 50029, 4, NULL, 1, 3, 122, 135, '', 1, '', 'newbrand', '450', 'IPOD TOUCH ', '2018-03-19', '', 1),
(69, 59, 50030, 4, NULL, 15, 2, 2, 1440, '', 4, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-19', '', 1),
(70, 60, 50030, 4, NULL, 15, 2, 47, 419, '', 1, '', 'newbrand', '1399', 'IPAD PRO 12.9\'\' 4G', '2018-03-19', '', 1),
(71, 61, 50031, 4, NULL, 17, 2, 2, 1020, '', 3, '', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-19', '', 1),
(72, 62, 50031, 4, NULL, 17, 2, 1, 1820, '', 7, '', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-19', '', 1),
(73, 52, 50032, 4, NULL, 19, 2, 125, 310, '', 1, '4970', 'newbrand', '1080', 'GOOGLE PIXEL 2 ', '2018-03-20', '', 1),
(74, 53, 50032, 4, NULL, 19, 2, 128, 1000, '', 2, '4970', 'newbrand', '1550', 'GOOGLE PIXEL 2 XL ', '2018-03-20', '', 1),
(75, 54, 50032, 4, NULL, 19, 2, 130, 1000, '', 2, '4970', 'newbrand', '1550', 'GOOGLE PIXEL 2 XL ', '2018-03-20', '', 1),
(76, 55, 50033, 4, NULL, 14, 2, 121, 380, '', 4, '700', 'newbrand', '270', 'OPPO A57', '2018-03-20', '', 1),
(77, 56, 50034, 4, NULL, 15, 2, 4, 720, '', 2, '2940', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-20', '', 1),
(78, 57, 50035, 4, NULL, 16, 2, 134, 350, '', 1, '2040', 'newbrand', '1200', 'Ipad pro 10.5â€ wifi', '2018-03-20', '', 1),
(79, 58, 50035, 4, NULL, 16, 2, 37, 290, '', 1, '2040', 'newbrand', '1480', 'iphone8plus', '2018-03-20', '', 1),
(80, 59, 50036, 4, NULL, 15, 3, 3, 300, '', 1, '1280', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-21', '', 1),
(81, 60, 50037, 4, NULL, 1, 3, 1, 270, '', 1, '1310', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-21', '', 1),
(82, 61, 50038, 4, NULL, 1, 3, 1, 300, '', 1, '1280', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-21', '', 1),
(83, 62, 50039, 4, NULL, 11, 3, 4, 2800, '', 8, '12970', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-21', '', 1),
(84, 63, 50039, 4, NULL, 11, 3, 2, 700, '', 1, '12970', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-21', '', 1),
(85, 64, 50040, 4, NULL, 11, 3, 2, 0, '', 1, '1830', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-21', '', 1),
(86, 65, 50041, 4, NULL, 17, 2, 1, 1080, '', 4, '18722', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-22', '', 1),
(87, 66, 50041, 4, NULL, 17, 2, 3, 540, '', 2, '18722', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-22', '', 1),
(88, 67, 50041, 4, NULL, 17, 2, 2, 1360, '', 4, '18722', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-22', '', 1),
(89, 68, 50041, 4, NULL, 17, 2, 4, 340, '', 1, '18722', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-22', '', 1),
(90, 69, 50041, 4, NULL, 17, 2, 47, 419, '', 1, '18722', 'newbrand', '1399', 'IPAD PRO 12.9\'\' 4G', '2018-03-22', '', 1),
(91, 70, 50041, 4, NULL, 17, 2, 145, 708, '', 2, '18722', 'newbrand', '1180', 'IPAD PRO 10.5\' 4G', '2018-03-22', '', 1),
(92, 71, 50041, 4, NULL, 17, 2, 83, 420, '', 1, '18722', 'newbrand', '1200', 'SAMSUNG GALAXY S8 PLUS ', '2018-03-22', '', 1),
(93, 72, 50042, 4, NULL, 15, 2, 4, 360, '', 1, '2770', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-22', '', 1),
(94, 73, 50042, 4, NULL, 15, 2, 1, 280, '', 1, '2770', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-22', '', 1),
(95, 74, 50043, 0, NULL, 16, 2, 4, 340, '', 1, '1490', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-22', '', 1),
(96, 75, 50044, 4, NULL, 16, 2, 111, 300, '', 1, '4650', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-03-23', '', 1),
(97, 76, 50044, 4, NULL, 16, 2, 112, 330, '', 1, '4650', 'newbrand', '1500', 'SAMSUNG S9 PLUS', '2018-03-23', '', 1),
(98, 77, 50044, 4, NULL, 16, 2, 2, 340, '', 1, '4650', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-23', '', 1),
(99, 78, 50044, 4, NULL, 16, 2, 74, 420, '', 1, '4650', 'newbrand', '1360', 'SAMSUNG GALAXY NOTE 8 ', '2018-03-23', '', 1),
(100, 79, 50045, 0, NULL, 20, 0, 35, 400, '', 1, '10970', '', '1380', 'IPHONE8', '2018-03-23', '', 1),
(101, 80, 50045, 0, NULL, 21, 0, 15, 310, '', 1, '10970', '', '1480', 'iphone8plus', '2018-03-23', '', 1),
(102, 81, 50045, 0, NULL, 22, 0, 2, 2160, '', 6, '10970', '', '1830', 'APPLE IPHONE X ', '2018-03-23', '', 1),
(103, 82, 50046, 4, NULL, 15, 2, 2, 2160, '', 6, '10970', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-23', '', 1),
(104, 83, 50046, 4, NULL, 15, 2, 35, 400, '', 1, '10970', 'newbrand', '1380', 'IPHONE8', '2018-03-23', '', 1),
(105, 84, 50046, 4, NULL, 15, 2, 15, 310, '', 1, '10970', 'newbrand', '1480', 'iphone8plus', '2018-03-23', '', 1),
(106, 85, 50047, 4, NULL, 16, 2, 3, 270, '', 1, '5180', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-23', '', 1),
(107, 86, 50047, 4, NULL, 16, 2, 2, 340, '', 1, '5180', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-23', '', 1),
(108, 87, 50047, 4, NULL, 16, 2, 13, 290, '', 1, '5180', 'newbrand', '1480', 'iphone8plus', '2018-03-23', '', 1),
(109, 88, 50047, 4, NULL, 16, 2, 15, 290, '', 1, '5180', 'newbrand', '1480', 'iphone8plus', '2018-03-23', '', 1),
(110, 89, 50048, 4, NULL, 1, 2, 2, 330, '', 1, '6730', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-23', '', 1),
(111, 90, 50048, 4, NULL, 1, 2, 4, 330, '', 1, '6730', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-23', '', 1),
(112, 91, 50048, 4, NULL, 1, 2, 42, 556, '', 4, '6730', 'newbrand', '459', 'iphone six ', '2018-03-23', '', 1),
(113, 92, 50048, 4, NULL, 1, 2, 20, 230, '', 1, '6730', 'newbrand', '1080', 'iphone8', '2018-03-23', '', 1),
(114, 93, 50048, 4, NULL, 1, 2, 115, 290, '', 1, '6730', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-03-23', '', 1),
(115, 94, 50048, 4, NULL, 1, 2, 146, 380, '', 4, '6730', 'newbrand', '230', 'SAMSUNG GALAXY J2 PRO ', '2018-03-23', '', 1),
(116, 95, 50049, 4, NULL, 1, 2, 3, 270, '', 1, '1310', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-23', '', 1),
(117, 96, 50050, 4, NULL, 11, 3, 48, 484, '', 1, '12955', 'newbrand', '1619', 'IPAD PRO 12.9\'\' 4G', '2018-03-24', '', 1),
(118, 97, 50050, 4, NULL, 11, 3, 2, 700, '', 2, '12955', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-24', '', 1),
(119, 98, 50050, 4, NULL, 11, 3, 4, 1050, '', 3, '12955', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-24', '', 1),
(120, 99, 50050, 4, NULL, 11, 3, 77, 420, '', 1, '12955', 'newbrand', '1360', 'SAMSUNG GALAXY NOTE 8 ', '2018-03-24', '', 1),
(121, 100, 50050, 4, NULL, 11, 3, 106, 540, '', 2, '12955', 'newbrand', '1350', 'SAMSUNG S9 ', '2018-03-24', '', 1),
(122, 101, 50050, 4, NULL, 11, 3, 3, 260, '', 1, '12955', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-24', '', 1),
(123, 102, 50051, 4, NULL, 1, 2, 2, 330, '', 1, '2000', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-24', '', 1),
(124, 103, 50051, 4, NULL, 1, 2, 149, 300, '', 1, '2000', 'newbrand', '550', 'SAMSUNG GALAXY S7 ', '2018-03-24', '', 1),
(125, 104, 50051, 4, NULL, 1, 2, 148, 300, '', 1, '2000', 'newbrand', '550', 'SAMSUNG GALAXY S7 ', '2018-03-24', '', 1),
(126, 105, 50052, 4, NULL, 15, 2, 4, 720, '', 2, '2940', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-24', '', 1),
(127, 106, 50053, 4, NULL, 15, 2, 4, 720, '', 2, '2940', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-24', '', 1),
(128, 107, 50054, 4, NULL, 1, 3, 2, 350, '', 1, '1480', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-25', '', 1),
(129, 108, 50055, 4, NULL, 1, 3, 1, 540, '', 2, '10120', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-26', '', 1),
(130, 109, 50055, 4, NULL, 1, 3, 2, 330, '', 1, '10120', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-26', '', 1),
(131, 110, 50055, 4, NULL, 1, 3, 4, 1320, '', 4, '10120', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-26', '', 1),
(132, 111, 50056, 4, NULL, 15, 3, 145, 350, '', 1, '830', 'newbrand', '1180', 'IPAD PRO 10.5\' 4G', '2018-03-26', '', 1),
(133, 112, 50057, 4, NULL, 15, 3, 22, 350, '', 1, '830', 'newbrand', '1180', 'ipadpro1054G', '2018-03-27', '', 1),
(134, 113, 50058, 4, NULL, 23, 2, 4, 360, '', 1, '2780', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-27', '', 1),
(135, 114, 50058, 4, NULL, 23, 2, 3, 270, '', 1, '2780', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-27', '', 1),
(136, 115, 50059, 4, NULL, 1, 3, 2, 330, '', 1, '1500', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-27', '', 1),
(137, 116, 50060, 4, NULL, 1, 3, 1, 540, '', 2, '5590', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-27', '', 1),
(138, 117, 50060, 4, NULL, 1, 3, 4, 340, '', 1, '5590', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-27', '', 1),
(139, 118, 50060, 4, NULL, 1, 3, 2, 350, '', 1, '5590', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-27', '', 1),
(140, 119, 50061, 4, NULL, 16, 2, 4, 680, '', 2, '2980', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-27', '', 1),
(141, 120, 50062, 4, NULL, 11, 3, 4, 1400, '', 4, '19030', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-28', '', 1),
(142, 121, 50062, 4, NULL, 11, 3, 2, 1750, '', 5, '19030', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-28', '', 1),
(143, 122, 50062, 4, NULL, 11, 3, 19, 330, '', 1, '19030', 'newbrand', '1330', 'iphone8', '2018-03-28', '', 1),
(144, 123, 50062, 4, NULL, 11, 3, 18, 690, '', 3, '19030', 'newbrand', '1080', 'iphone8', '2018-03-28', '', 1),
(145, 124, 50062, 4, NULL, 11, 3, 15, 300, '', 1, '19030', 'newbrand', '1480', 'iphone8plus', '2018-03-28', '', 1),
(146, 125, 50062, 4, NULL, 11, 3, 23, 420, '', 1, '19030', 'newbrand', '1400', 'IPAD PRO 10.5\'\' 4G', '2018-03-28', '', 1),
(147, 126, 50063, 4, NULL, 15, 2, 20, 250, '', 1, '830', 'newbrand', '1080', 'iphone8', '2018-03-28', '', 1),
(148, 127, 50064, 4, NULL, 13, 2, 1, 560, '', 2, '4070', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-28', '', 1),
(149, 128, 50064, 4, NULL, 13, 2, 2, 360, '', 1, '4070', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-28', '', 1),
(150, 129, 50065, 4, NULL, 13, 3, 2, 720, '', 2, '4240', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-28', '', 1),
(151, 130, 50065, 4, NULL, 13, 3, 3, 280, '', 1, '4240', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-28', '', 1),
(152, 131, 50066, 4, NULL, 1, 3, 152, 540, '', 1, '2600', 'newbrand', '1800', 'Macbook Air 13\' ', '2018-03-28', '', 1),
(153, 132, 50066, 4, NULL, 1, 3, 81, 960, '', 2, '2600', 'newbrand', '1150', 'SAMSUNG GALAXY S8 PLUS ', '2018-03-28', '', 1),
(154, 133, 50067, 4, NULL, 1, 3, 1, 270, '', 1, '17666', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-03-29', '', 1),
(155, 134, 50067, 4, NULL, 1, 3, 4, 1020, '', 3, '17666', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-03-29', '', 1),
(156, 135, 50067, 4, NULL, 1, 3, 151, 420, '', 1, '17666', 'newbrand', '1500', 'Macbook Air 13\' ', '2018-03-29', '', 1),
(157, 136, 50067, 4, NULL, 1, 3, 152, 1512, '', 3, '17666', 'newbrand', '1800', 'Macbook Air 13\' ', '2018-03-29', '', 1),
(158, 137, 50067, 4, NULL, 1, 3, 153, 532, '', 1, '17666', 'newbrand', '1900', 'Macbook Book Pro 13\'\'', '2018-03-29', '', 1),
(159, 138, 50067, 4, NULL, 1, 3, 155, 840, '', 1, '17666', 'newbrand', '3000', 'Macbook Book Pro 13\'\'', '2018-03-29', '', 1),
(160, 139, 50067, 4, NULL, 1, 3, 74, 420, '', 1, '17666', 'newbrand', '1360', 'SAMSUNG GALAXY NOTE 8 ', '2018-03-29', '', 1),
(161, 140, 50067, 4, NULL, 1, 3, 105, 300, '', 1, '17666', 'newbrand', '1200', 'SAMSUNG S9 ', '2018-03-29', '', 1),
(162, 141, 50067, 4, NULL, 1, 3, 20, 230, '', 1, '17666', 'newbrand', '1080', 'iphone8', '2018-03-29', '', 1),
(163, 142, 50067, 4, NULL, 1, 3, 133, 280, '', 1, '17666', 'newbrand', '980', 'Ipad pro 10.5â€ wifi', '2018-03-29', '', 1),
(164, 143, 50068, 4, NULL, 16, 2, 4, 1020, '', 3, '4470', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-03', '', 1),
(165, 144, 50069, 4, NULL, 15, 2, 156, 90, '', 1, '9005', 'newbrand', '300', 'iPod touch 32gb ', '2018-04-03', '', 1),
(166, 145, 50069, 4, NULL, 15, 2, 122, 135, '', 1, '9005', 'newbrand', '450', 'IPOD TOUCH ', '2018-04-03', '', 1),
(167, 146, 50069, 4, NULL, 15, 2, 3, 560, '', 2, '9005', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-03', '', 1),
(168, 147, 50069, 4, NULL, 15, 2, 2, 720, '', 2, '9005', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-03', '', 1),
(169, 148, 50069, 4, NULL, 15, 2, 4, 720, '', 2, '9005', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-03', '', 1),
(170, 149, 50070, 4, NULL, 15, 2, 1, 430, '', 1, '1150', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-03', '', 1),
(171, 150, 50071, 4, NULL, 13, 2, 105, 350, '', 1, '1850', 'newbrand', '1200', 'SAMSUNG S9 ', '2018-04-03', '', 1),
(172, 151, 50071, 4, NULL, 13, 2, 106, 350, '', 1, '1850', 'newbrand', '1350', 'SAMSUNG S9 ', '2018-04-03', '', 1),
(173, 152, 50072, 4, NULL, 11, 3, 1, 270, '', 1, '8130', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-03', '', 1),
(174, 153, 50072, 4, NULL, 11, 3, 4, 1400, '', 4, '8130', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-03', '', 1),
(175, 154, 50072, 4, NULL, 11, 3, 105, 300, '', 1, '8130', 'newbrand', '1200', 'SAMSUNG S9 ', '2018-04-03', '', 1),
(176, 155, 50073, 4, NULL, 19, 3, 112, 2400, '', 6, '10550', 'newbrand', '1500', 'SAMSUNG S9 PLUS', '2018-04-03', '', 1),
(177, 156, 50073, 4, NULL, 19, 3, 111, 1050, '', 3, '10550', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-04-03', '', 1),
(178, 157, 50073, 4, NULL, 19, 3, 127, 450, '', 1, '10550', 'newbrand', '1400', 'GOOGLE PIXEL 2 XL ', '2018-04-03', '', 1),
(179, 158, 50074, 4, NULL, 1, 3, 157, 174, '', 1, '4450', 'newbrand', '580', 'IPAD MINI 4 WIFI ', '2018-04-03', '', 1),
(180, 159, 50074, 4, NULL, 1, 3, 49, 575, '', 1, '4450', 'newbrand', '1919', 'IPAD PRO 12.9\'\' 4G', '2018-04-03', '', 1),
(181, 160, 50074, 4, NULL, 1, 3, 62, 360, '', 1, '4450', 'newbrand', '1200', 'IPAD PRO 12.9\'\' WIFI ONLY', '2018-04-03', '', 1),
(182, 161, 50074, 4, NULL, 1, 3, 111, 370, '', 1, '4450', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-04-03', '', 1),
(183, 162, 50074, 4, NULL, 1, 3, 109, 320, '', 1, '4450', 'newbrand', '1200', 'SAMSUNG S9 ', '2018-04-03', '', 1),
(184, 163, 50075, 4, NULL, 1, 3, 112, 420, '', 1, '3300', 'newbrand', '1500', 'SAMSUNG S9 PLUS', '2018-04-03', '', 1),
(185, 164, 50075, 4, NULL, 1, 3, 127, 450, '', 1, '3300', 'newbrand', '1400', 'GOOGLE PIXEL 2 XL ', '2018-04-03', '', 1),
(186, 165, 50075, 4, NULL, 1, 3, 3, 310, '', 1, '3300', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-03', '', 1),
(187, 166, 50076, 4, NULL, 16, 2, 15, 290, '', 1, '5480', 'newbrand', '1480', 'iphone8plus', '2018-04-05', '', 1),
(188, 167, 50076, 4, NULL, 16, 2, 4, 680, '', 2, '5480', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-05', '', 1),
(189, 168, 50076, 4, NULL, 16, 2, 3, 270, '', 1, '5480', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-05', '', 1),
(190, 169, 50077, 4, NULL, 1, 3, 118, 125, '', 1, '225', 'newbrand', '350', 'SAMSUNG GALAXY J5 PRO ', '2018-04-05', '', 1),
(191, 170, 50078, 4, NULL, 15, 2, 2, 720, '', 2, '3770', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-06', '', 1),
(192, 171, 50078, 4, NULL, 15, 2, 20, 250, '', 1, '3770', 'newbrand', '1080', 'iphone8', '2018-04-06', '', 1),
(193, 172, 50079, 4, NULL, 16, 2, 109, 320, '', 1, '1980', 'newbrand', '1200', 'SAMSUNG S9 ', '2018-04-06', '', 1),
(194, 173, 50079, 4, NULL, 16, 2, 112, 400, '', 1, '1980', 'newbrand', '1500', 'SAMSUNG S9 PLUS', '2018-04-06', '', 1),
(195, 174, 50080, 4, NULL, 1, 2, 2, 1040, '', 3, '9820', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-06', '', 1),
(196, 175, 50080, 4, NULL, 1, 2, 4, 1020, '', 3, '9820', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-06', '', 1),
(197, 176, 50080, 4, NULL, 1, 2, 105, 300, '', 1, '9820', 'newbrand', '1200', 'SAMSUNG S9 ', '2018-04-06', '', 1),
(198, 177, 50081, 4, NULL, 23, 2, 2, 2880, '', 8, '27930', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-06', '', 1),
(199, 178, 50081, 4, NULL, 23, 2, 4, 3960, '', 11, '27930', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-06', '', 1),
(200, 179, 50082, 4, NULL, 17, 2, 4, 2105, '', 5, '17440', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-06', '', 1),
(201, 180, 50082, 4, NULL, 17, 2, 2, 2415, '', 7, '17440', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-06', '', 1),
(202, 181, 50083, 4, NULL, 17, 2, 4, 2105, '', 6, '19270', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-06', '', 1),
(203, 182, 50083, 4, NULL, 17, 2, 2, 2415, '', 7, '19270', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-06', '', 1),
(204, 183, 50084, 4, NULL, 16, 2, 2, 340, '', 1, '4280', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-08', '', 1),
(205, 184, 50084, 4, NULL, 16, 2, 4, 340, '', 1, '4280', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-08', '', 1),
(206, 185, 50084, 4, NULL, 16, 2, 3, 280, '', 1, '4280', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-08', '', 1),
(207, 186, 50085, 4, NULL, 16, 3, 2, 1080, '', 3, '14530', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-08', '', 1),
(208, 187, 50085, 4, NULL, 16, 3, 4, 2160, '', 6, '14530', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-08', '', 1),
(209, 188, 50085, 4, NULL, 16, 3, 1, 280, '', 1, '14530', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-08', '', 1),
(210, 189, 50086, 4, NULL, 1, 3, 113, 350, '', 1, '4316', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-04-08', '', 1),
(211, 190, 50086, 4, NULL, 1, 3, 115, 350, '', 1, '4316', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-04-08', '', 1),
(212, 191, 50086, 4, NULL, 1, 3, 2, 340, '', 1, '4316', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-08', '', 1),
(213, 192, 50086, 4, NULL, 1, 3, 22, 354, '', 1, '4316', 'newbrand', '1180', 'ipadpro1054G', '2018-04-08', '', 1),
(214, 193, 50087, 4, NULL, 14, 3, 159, 54, '', 1, '1746', 'newbrand', '1800', 'MacBook Air 13â€™â€™', '2018-04-08', '', 1),
(215, 194, 50088, 4, NULL, 14, 2, 159, 540, '', 1, '1260', 'newbrand', '1800', 'MacBook Air 13â€™â€™', '2018-04-08', '', 1),
(216, 195, 50089, 4, NULL, 15, 2, 2, 1800, '', 1, '30', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-08', '', 1),
(217, 196, 50090, 4, NULL, 15, 2, 2, 1800, '', 5, '7350', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-08', '', 1),
(218, 197, 50091, 4, NULL, 15, 2, 1, 660, '', 2, '6825', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-11', '', 1),
(219, 198, 50091, 4, NULL, 15, 2, 3, 330, '', 1, '6825', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-11', '', 1),
(220, 199, 50091, 4, NULL, 15, 2, 15, 310, '', 1, '6825', 'newbrand', '1480', 'iphone8plus', '2018-04-11', '', 1),
(221, 200, 50091, 4, NULL, 15, 2, 112, 420, '', 1, '6825', 'newbrand', '1500', 'SAMSUNG S9 PLUS', '2018-04-11', '', 1),
(222, 201, 50091, 4, NULL, 15, 2, 177, 210, '', 1, '6825', 'newbrand', '600', 'iPad 5th gen wifi only', '2018-04-11', '', 1),
(223, 202, 50091, 4, NULL, 15, 2, 168, 235, '', 1, '6825', 'newbrand', '670', 'iPad 5th gen 4G', '2018-04-11', '', 1),
(224, 203, 50092, 4, NULL, 15, 2, 1, 430, '', 1, '1150', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-11', '', 1),
(225, 204, 50093, 4, NULL, 15, 2, 1, 330, '', 1, '1250', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-11', '', 1),
(226, 205, 50094, 4, NULL, 16, 2, 112, 400, '', 1, '2590', 'newbrand', '1500', 'SAMSUNG S9 PLUS', '2018-04-11', '', 1),
(227, 206, 50094, 4, NULL, 16, 2, 4, 340, '', 1, '2590', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-11', '', 1),
(228, 207, 50095, 4, NULL, 1, 3, 113, 390, '', 1, '3170', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-04-11', '', 1),
(229, 208, 50095, 4, NULL, 1, 3, 106, 390, '', 1, '3170', 'newbrand', '1350', 'SAMSUNG S9 ', '2018-04-11', '', 1),
(230, 209, 50095, 4, NULL, 1, 3, 3, 330, '', 1, '3170', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-11', '', 1),
(231, 210, 50096, 4, NULL, 24, 3, 20, 250, '', 1, '1710', 'newbrand', '1080', 'iphone 8', '2018-04-12', '', 1),
(232, 211, 50096, 4, NULL, 24, 3, 107, 320, '', 1, '1710', 'newbrand', '1200', 'SAMSUNG S9 ', '2018-04-12', '', 1),
(233, 212, 50097, 4, NULL, 15, 2, 4, 440, '', 1, '1390', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-16', '', 1),
(234, 213, 50098, 4, NULL, 1, 3, 2, 370, '', 1, '3900', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-16', '', 1),
(235, 214, 50098, 4, NULL, 1, 3, 4, 370, '', 1, '3900', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-16', '', 1),
(236, 215, 50098, 4, NULL, 1, 3, 111, 370, '', 1, '3900', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-04-16', '', 1),
(237, 216, 50099, 4, NULL, 16, 2, 4, 340, '', 1, '2980', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-16', '', 1),
(238, 217, 50099, 4, NULL, 16, 2, 2, 340, '', 1, '2980', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-16', '', 1),
(239, 218, 50100, 4, NULL, 16, 2, 2, 340, '', 1, '1490', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-16', '', 1),
(240, 219, 50101, 4, NULL, 19, 2, 167, 280, '', 1, '6495', 'newbrand', '800', 'iPad 5th gen 4G', '2018-04-17', '', 1),
(241, 220, 50101, 4, NULL, 19, 2, 176, 165, '', 1, '6495', 'newbrand', '470', 'iPad 5th gen wifi only', '2018-04-17', '', 1),
(242, 221, 50101, 4, NULL, 19, 2, 105, 670, '', 2, '6495', 'newbrand', '1200', 'SAMSUNG S9 ', '2018-04-17', '', 1),
(243, 222, 50101, 4, NULL, 19, 2, 115, 370, '', 1, '6495', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-04-17', '', 1),
(244, 223, 50101, 4, NULL, 19, 2, 111, 740, '', 2, '6495', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-04-17', '', 1),
(245, 224, 50101, 4, NULL, 19, 2, 106, 350, '', 1, '6495', 'newbrand', '1350', 'SAMSUNG S9 ', '2018-04-17', '', 1),
(246, 225, 50102, 4, NULL, 11, 3, 2, 350, '', 1, '7145', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-17', '', 1),
(247, 226, 50102, 4, NULL, 11, 3, 4, 350, '', 1, '7145', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-17', '', 1),
(248, 227, 50102, 4, NULL, 11, 3, 13, 310, '', 1, '7145', 'newbrand', '1480', 'iphone8plus', '2018-04-17', '', 1),
(249, 228, 50102, 4, NULL, 11, 3, 15, 310, '', 1, '7145', 'newbrand', '1480', 'iphone8plus', '2018-04-17', '', 1),
(250, 229, 50102, 4, NULL, 11, 3, 178, 175, '', 1, '7145', 'newbrand', '580', 'Ipad mini 4 wifi only ', '2018-04-17', '', 1),
(251, 230, 50102, 4, NULL, 11, 3, 182, 150, '', 1, '7145', 'newbrand', '600', 'ipad 6th gen wifi', '2018-04-17', '', 1),
(252, 231, 50102, 4, NULL, 11, 3, 111, 360, '', 1, '7145', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-04-17', '', 1),
(253, 232, 50103, 4, NULL, 19, 3, 175, 210, '', 1, '4190', 'newbrand', '600', 'iPad 5th gen wifi only', '2018-04-17', '', 1),
(254, 233, 50103, 4, NULL, 19, 3, 112, 400, '', 1, '4190', 'newbrand', '1500', 'SAMSUNG S9 PLUS', '2018-04-17', '', 1),
(255, 234, 50103, 4, NULL, 19, 3, 74, 920, '', 2, '4190', 'newbrand', '1360', 'SAMSUNG GALAXY NOTE 8 ', '2018-04-17', '', 1),
(256, 235, 50103, 4, NULL, 19, 3, 77, 460, '', 1, '4190', 'newbrand', '1360', 'SAMSUNG GALAXY NOTE 8 ', '2018-04-17', '', 1),
(257, 236, 50104, 4, NULL, 25, 2, 3, 920, '', 3, '3820', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-17', '', 1),
(258, 237, 50105, 4, NULL, 25, 2, 4, 360, '', 1, '2860', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-17', '', 1),
(259, 238, 50105, 4, NULL, 25, 2, 2, 440, '', 1, '2860', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-17', '', 1),
(260, 239, 50106, 4, NULL, 16, 2, 18, 230, '', 1, '850', 'newbrand', '1080', 'iphone8', '2018-04-18', '', 1),
(261, 240, 50107, 4, NULL, 17, 2, 3, 300, '', 1, '7375', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-18', '', 1),
(262, 241, 50107, 4, NULL, 17, 2, 1, 300, '', 1, '7375', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-18', '', 1),
(263, 242, 50107, 4, NULL, 17, 2, 4, 345, '', 1, '7375', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-18', '', 1),
(264, 243, 50107, 4, NULL, 17, 2, 74, 840, '', 2, '7375', 'newbrand', '1360', 'SAMSUNG GALAXY NOTE 8 ', '2018-04-18', '', 1),
(265, 244, 50107, 4, NULL, 17, 2, 191, 800, '', 1, '7375', 'newbrand', '800', 'Samsung Galaxy s8 64gb ', '2018-04-18', '', 1),
(266, 245, 50107, 4, NULL, 17, 2, 185, 170, '', 1, '7375', 'newbrand', '670', 'Ipad 6th gen 4G ', '2018-04-18', '', 1),
(267, 246, 50107, 4, NULL, 17, 2, 111, 1240, '', 1, '7375', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-04-18', '', 1),
(268, 247, 50107, 4, NULL, 17, 2, 18, 240, '', 1, '7375', 'newbrand', '1080', 'iphone8', '2018-04-18', '', 1),
(269, 248, 50108, 4, NULL, 1, 3, 115, 380, '', 1, '3010', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-04-18', '', 1),
(270, 249, 50108, 4, NULL, 1, 3, 105, 320, '', 1, '3010', 'newbrand', '1200', 'SAMSUNG S9 ', '2018-04-18', '', 1),
(271, 250, 50108, 4, NULL, 1, 3, 1, 420, '', 1, '3010', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-18', '', 1),
(272, 251, 50109, 4, NULL, 1, 3, 3, 290, '', 1, '1290', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-19', '', 1),
(273, 252, 50110, 4, NULL, 26, 3, 106, 360, '', 1, '990', 'newbrand', '1350', 'SAMSUNG S9 ', '2018-04-20', '', 1),
(274, 253, 50111, 4, NULL, 16, 2, 168, 235, '', 1, '5895', 'newbrand', '670', 'iPad 5th gen 4G', '2018-04-23', '', 1),
(275, 254, 50111, 4, NULL, 16, 2, 167, 280, '', 1, '5895', 'newbrand', '800', 'iPad 5th gen 4G', '2018-04-23', '', 1),
(276, 255, 50111, 4, NULL, 16, 2, 4, 340, '', 1, '5895', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-23', '', 1),
(277, 256, 50111, 4, NULL, 16, 2, 2, 340, '', 1, '5895', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-23', '', 1),
(278, 257, 50111, 4, NULL, 16, 2, 113, 370, '', 1, '5895', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-04-23', '', 1),
(279, 258, 50111, 4, NULL, 16, 2, 12, 250, '', 1, '5895', 'newbrand', '1230', 'iphone8plus', '2018-04-23', '', 1),
(280, 259, 50112, 4, NULL, 16, 2, 185, 502, '', 1, '168', 'newbrand', '670', 'Ipad 6th gen 4G ', '2018-04-23', '', 1),
(281, 260, 50113, 4, NULL, 15, 2, 105, 320, '', 1, '880', 'newbrand', '1200', 'SAMSUNG S9 ', '2018-04-23', '', 1),
(282, 261, 50114, 4, NULL, 16, 2, 2, 340, '', 1, '3425', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-23', '', 1),
(283, 262, 50114, 4, NULL, 16, 2, 112, 400, '', 1, '3425', 'newbrand', '1500', 'SAMSUNG S9 PLUS', '2018-04-23', '', 1),
(284, 263, 50114, 4, NULL, 16, 2, 31, 345, '', 1, '3425', 'newbrand', '1180', 'ipadpro1054G', '2018-04-23', '', 1),
(285, 264, 50115, 4, NULL, 17, 2, 2, 2310, '', 7, '21940', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-23', '', 1),
(286, 265, 50115, 4, NULL, 17, 2, 4, 2310, '', 7, '21940', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-23', '', 1),
(287, 266, 50115, 4, NULL, 17, 2, 74, 420, '', 1, '21940', 'newbrand', '1360', 'SAMSUNG GALAXY NOTE 8 ', '2018-04-23', '', 1),
(288, 267, 50116, 4, NULL, 1, 3, 4, 680, '', 2, '2980', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-26', '', 1),
(289, 268, 50117, 4, NULL, 1, 3, 49, 575, '', 1, '5674', 'newbrand', '1919', 'IPAD PRO 12.9\'\' 4G', '2018-04-27', '', 1),
(290, 269, 50117, 4, NULL, 1, 3, 105, 320, '', 1, '5674', 'newbrand', '1200', 'SAMSUNG S9 ', '2018-04-27', '', 1),
(291, 270, 50117, 4, NULL, 1, 3, 3, 600, '', 2, '5674', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-27', '', 1),
(292, 271, 50117, 4, NULL, 1, 3, 127, 510, '', 1, '5674', 'newbrand', '1400', 'GOOGLE PIXEL 2 XL ', '2018-04-27', '', 1),
(293, 272, 50118, 4, NULL, 25, 2, 1, 320, '', 1, '1260', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-27', '', 1),
(294, 273, 50119, 4, NULL, 16, 2, 2, 340, '', 1, '2980', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-27', '', 1),
(295, 274, 50119, 4, NULL, 16, 2, 4, 340, '', 1, '2980', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-27', '', 1),
(296, 275, 50120, 4, NULL, 1, 3, 155, 1740, '', 2, '5120', 'newbrand', '3000', 'Macbook Book Pro 13\'\'', '2018-04-28', '', 1),
(297, 276, 50120, 4, NULL, 1, 3, 2, 340, '', 1, '5120', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-28', '', 1),
(298, 277, 50120, 4, NULL, 1, 3, 146, 1095, '', 3, '5120', 'newbrand', '230', 'SAMSUNG GALAXY J2 PRO ', '2018-04-28', '', 1),
(299, 278, 50120, 4, NULL, 1, 3, 118, 575, '', 1, '5120', 'newbrand', '350', 'SAMSUNG GALAXY J5 PRO ', '2018-04-28', '', 1),
(300, 279, 50121, 4, NULL, 17, 2, 2, 990, '', 3, '17127', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-29', '', 1),
(301, 280, 50121, 4, NULL, 17, 2, 4, 990, '', 3, '17127', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-29', '', 1),
(302, 281, 50121, 4, NULL, 17, 2, 1, 295, '', 1, '17127', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-04-29', '', 1),
(303, 282, 50121, 4, NULL, 17, 2, 15, 780, '', 3, '17127', 'newbrand', '1480', 'iphone8plus', '2018-04-29', '', 1),
(304, 283, 50121, 4, NULL, 17, 2, 48, 485, '', 1, '17127', 'newbrand', '1619', 'IPAD PRO 12.9\'\' 4G', '2018-04-29', '', 1),
(305, 284, 50121, 4, NULL, 17, 2, 44, 420, '', 1, '17127', 'newbrand', '1400', 'IPAD PRO 12.9\'\' 4G', '2018-04-29', '', 1),
(306, 285, 50121, 4, NULL, 17, 2, 186, 200, '', 1, '17127', 'newbrand', '800', 'Ipad 6th gen 4G ', '2018-04-29', '', 1),
(307, 286, 50121, 4, NULL, 17, 2, 170, 202, '', 1, '17127', 'newbrand', '670', 'iPad 5th gen 4G', '2018-04-29', '', 1),
(308, 287, 50122, 4, NULL, 16, 2, 115, 370, '', 1, '5450', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-04-29', '', 1),
(309, 288, 50122, 4, NULL, 16, 2, 2, 340, '', 1, '5450', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-29', '', 1),
(310, 289, 50122, 4, NULL, 16, 2, 4, 680, '', 2, '5450', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-04-29', '', 1),
(311, 290, 50123, 4, NULL, 19, 3, 105, 640, '', 2, '14940', 'newbrand', '1200', 'SAMSUNG S9 ', '2018-05-01', '', 1),
(312, 291, 50123, 4, NULL, 19, 3, 106, 350, '', 1, '14940', 'newbrand', '1350', 'SAMSUNG S9 ', '2018-05-01', '', 1),
(313, 292, 50123, 4, NULL, 19, 3, 111, 740, '', 2, '14940', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-05-01', '', 1),
(314, 293, 50123, 4, NULL, 19, 3, 113, 740, '', 2, '14940', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-05-01', '', 1),
(315, 294, 50123, 4, NULL, 19, 3, 115, 370, '', 1, '14940', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-05-01', '', 1),
(316, 295, 50123, 4, NULL, 19, 3, 112, 1200, '', 3, '14940', 'newbrand', '1500', 'SAMSUNG S9 PLUS', '2018-05-01', '', 1),
(317, 296, 50123, 4, NULL, 19, 3, 128, 1040, '', 2, '14940', 'newbrand', '1550', 'GOOGLE PIXEL 2 XL ', '2018-05-01', '', 1),
(318, 297, 50123, 4, NULL, 19, 3, 130, 520, '', 1, '14940', 'newbrand', '1550', 'GOOGLE PIXEL 2 XL ', '2018-05-01', '', 1),
(319, 298, 50123, 4, NULL, 19, 3, 127, 510, '', 1, '14940', 'newbrand', '1400', 'GOOGLE PIXEL 2 XL ', '2018-05-01', '', 1),
(320, 299, 50124, 4, NULL, 1, 3, 111, 370, '', 1, '2560', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-05-01', '', 1),
(321, 300, 50124, 4, NULL, 1, 3, 115, 370, '', 1, '2560', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-05-01', '', 1),
(322, 301, 50124, 4, NULL, 1, 3, 191, 200, '', 1, '2560', 'newbrand', '800', 'Samsung Galaxy s8 64gb ', '2018-05-01', '', 1),
(323, 302, 50125, 4, NULL, 1, 3, 4, 330, '', 1, '1170', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-01', '', 1),
(324, 303, 50125, 4, NULL, 1, 3, 2, 330, '', 0, '1170', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-01', '', 1),
(325, 304, 50126, 4, NULL, 1, 3, 4, 330, '', 1, '3000', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-01', '', 1),
(326, 305, 50126, 4, NULL, 1, 3, 2, 330, '', 1, '3000', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-01', '', 1),
(327, 306, 50127, 4, NULL, 11, 3, 4, 1400, '', 4, '22050', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-03', '', 1),
(328, 307, 50127, 4, NULL, 11, 3, 2, 1400, '', 4, '22050', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-03', '', 1),
(329, 308, 50127, 4, NULL, 11, 3, 48, 2595, '', 5, '22050', 'newbrand', '1619', 'IPAD PRO 12.9\'\' 4G', '2018-05-03', '', 1),
(330, 309, 50127, 4, NULL, 11, 3, 195, 1050, '', 1, '22050', 'newbrand', '3500', 'MACBOOK PRO 15\'\' 256GB', '2018-05-03', '', 1),
(331, 310, 50127, 4, NULL, 11, 3, 3, 310, '', 1, '22050', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-05-03', '', 1),
(332, 311, 50127, 4, NULL, 11, 3, 111, 360, '', 1, '22050', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-05-03', '', 1),
(333, 312, 50128, 4, NULL, 13, 3, 20, 460, '', 2, '4580', 'newbrand', '1080', 'iphone 8', '2018-05-03', '', 1),
(334, 313, 50128, 4, NULL, 13, 3, 127, 550, '', 1, '4580', 'newbrand', '1400', 'GOOGLE PIXEL 2 XL ', '2018-05-03', '', 1),
(335, 314, 50128, 4, NULL, 13, 3, 85, 220, '', 1, '4580', 'newbrand', '800', 'IPHONE 7 ', '2018-05-03', '', 1),
(336, 315, 50128, 4, NULL, 13, 3, 2, 380, '', 1, '4580', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-03', '', 1),
(337, 316, 50129, 4, NULL, 25, 2, 2, 1100, '', 3, '5860', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-03', '', 1),
(338, 317, 50129, 4, NULL, 25, 2, 4, 360, '', 1, '5860', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-03', '', 1),
(339, 318, 50130, 4, NULL, 16, 2, 13, 290, '', 1, '3020', 'newbrand', '1480', 'iphone8plus', '2018-05-03', '', 1),
(340, 319, 50130, 4, NULL, 16, 2, 20, 230, '', 1, '3020', 'newbrand', '1080', 'iphone 8', '2018-05-03', '', 1),
(341, 320, 50130, 4, NULL, 16, 2, 111, 370, '', 1, '3020', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-05-03', '', 1),
(342, 321, 50131, 4, NULL, 19, 3, 112, 1200, '', 3, '12520', 'newbrand', '1500', 'SAMSUNG S9 PLUS', '2018-05-03', '', 1),
(343, 322, 50131, 4, NULL, 19, 3, 115, 370, '', 1, '12520', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-05-03', '', 1),
(344, 323, 50131, 4, NULL, 19, 3, 130, 1040, '', 2, '12520', 'newbrand', '1550', 'GOOGLE PIXEL 2 XL ', '2018-05-03', '', 1),
(345, 324, 50131, 4, NULL, 19, 3, 128, 3120, '', 6, '12520', 'newbrand', '1550', 'GOOGLE PIXEL 2 XL ', '2018-05-03', '', 1),
(346, 325, 50132, 4, NULL, 27, 2, 196, 1000, '', 5, '5150', 'newbrand', '1230', 'APPLE IPHONE 8 PLUS ', '2018-05-04', '', 1),
(347, 326, 50133, 4, NULL, 1, 3, 60, 475, '', 1, '4425', 'newbrand', '1400', 'IPAD PRO 12.9\'\' WIFI ONLY', '2018-05-06', '', 1),
(348, 327, 50133, 4, NULL, 1, 3, 145, 710, '', 2, '4425', 'newbrand', '1180', 'IPAD PRO 10.5\' 4G', '2018-05-06', '', 1),
(349, 328, 50133, 4, NULL, 1, 3, 4, 660, '', 1, '4425', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-06', '', 1),
(350, 329, 50133, 4, NULL, 1, 3, 74, 680, '', 1, '4425', 'newbrand', '1360', 'SAMSUNG GALAXY NOTE 8 ', '2018-05-06', '', 1),
(351, 330, 50134, 4, NULL, 16, 2, 49, 594, '', 1, '2944', 'newbrand', '1919', 'IPAD PRO 12.9\'\' 4G', '2018-05-06', '', 1),
(352, 331, 50134, 4, NULL, 16, 2, 48, 1120, '', 1, '2944', 'newbrand', '1619', 'IPAD PRO 12.9\'\' 4G', '2018-05-06', '', 1),
(353, 332, 50134, 4, NULL, 16, 2, 14, 990, '', 1, '2944', 'newbrand', '1230', 'iphone8plus', '2018-05-06', '', 1),
(354, 333, 50134, 4, NULL, 16, 2, 107, 320, '', 1, '2944', 'newbrand', '1200', 'SAMSUNG S9 ', '2018-05-06', '', 1),
(355, 334, 50135, 4, NULL, 1, 3, 145, 710, '', 2, '1650', 'newbrand', '1180', 'IPAD PRO 10.5\' 4G', '2018-05-06', '', 1),
(356, 335, 50136, 4, NULL, 1, 3, 198, 710, '', 2, '1650', 'newbrand', '1180', 'IPAD PRO 10.5\'\' 4G', '2018-05-06', '', 1),
(357, 336, 50137, 4, NULL, 1, 3, 2, 430, '', 1, '2880', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-06', '', 1),
(358, 337, 50137, 4, NULL, 1, 3, 4, 350, '', 1, '2880', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-06', '', 1),
(359, 338, 50138, 4, NULL, 25, 2, 1, 310, '', 1, '1270', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-05-06', '', 1),
(360, 339, 50139, 4, NULL, 1, 2, 2, 660, '', 2, '7500', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-06', '', 1),
(361, 340, 50139, 4, NULL, 1, 2, 4, 990, '', 3, '7500', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-06', '', 1),
(362, 341, 50140, 4, NULL, 1, 3, 1, 280, '', 1, '5800', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-05-09', '', 1),
(363, 342, 50140, 4, NULL, 1, 3, 2, 660, '', 2, '5800', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-09', '', 1),
(364, 343, 50140, 4, NULL, 1, 3, 4, 330, '', 1, '5800', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-09', '', 1),
(365, 344, 50141, 4, NULL, 17, 2, 106, 325, '', 1, '17211', 'newbrand', '1350', 'SAMSUNG S9 ', '2018-05-09', '', 1),
(366, 345, 50141, 4, NULL, 17, 2, 113, 350, '', 1, '17211', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-05-09', '', 1),
(367, 346, 50141, 4, NULL, 17, 2, 111, 350, '', 1, '17211', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-05-09', '', 1),
(368, 347, 50141, 4, NULL, 17, 2, 2, 1650, '', 5, '17211', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-09', '', 1),
(369, 348, 50141, 4, NULL, 17, 2, 4, 1320, '', 4, '17211', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-09', '', 1),
(370, 349, 50141, 4, NULL, 17, 2, 133, 294, '', 1, '17211', 'newbrand', '980', 'Ipad pro 10.5â€ wifi', '2018-05-09', '', 1),
(371, 350, 50142, 4, NULL, 1, 3, 4, 990, '', 3, '12260', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-10', '', 1),
(372, 351, 50142, 4, NULL, 1, 3, 2, 990, '', 3, '12260', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-10', '', 1),
(373, 352, 50142, 4, NULL, 1, 3, 113, 370, '', 1, '12260', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-05-10', '', 1),
(374, 353, 50142, 4, NULL, 1, 3, 111, 370, '', 1, '12260', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-05-10', '', 1),
(375, 354, 50142, 4, NULL, 1, 3, 3, 280, '', 1, '12260', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-05-10', '', 1),
(376, 355, 50143, 0, NULL, 1, 3, 4, 330, '', 1, '1500', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-10', '', 1),
(377, 356, 50144, 4, NULL, 17, 3, 130, 1020, '', 2, '5850', 'newbrand', '1550', 'GOOGLE PIXEL 2 XL ', '2018-05-11', '', 1),
(378, 357, 50144, 4, NULL, 17, 3, 128, 1530, '', 3, '5850', 'newbrand', '1550', 'GOOGLE PIXEL 2 XL ', '2018-05-11', '', 1),
(379, 358, 50144, 4, NULL, 17, 3, 191, 150, '', 1, '5850', 'newbrand', '800', 'Samsung Galaxy s8 64gb ', '2018-05-11', '', 1),
(380, 359, 50145, 4, NULL, 11, 2, 2, 2720, '', 8, '11920', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-11', '', 1),
(381, 360, 50146, 4, NULL, 11, 3, 2, 2040, '', 6, '12365', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-11', '', 1),
(382, 361, 50146, 4, NULL, 11, 3, 1, 560, '', 2, '12365', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-05-11', '', 1),
(383, 362, 50146, 4, NULL, 11, 3, 198, 355, '', 1, '12365', 'newbrand', '1180', 'IPAD PRO 10.5\'\' 4G', '2018-05-11', '', 1),
(384, 363, 50147, 4, NULL, 17, 2, 106, 325, '', 1, '3725', 'newbrand', '1350', 'SAMSUNG S9 ', '2018-05-11', '', 1),
(385, 364, 50147, 4, NULL, 17, 2, 112, 400, '', 1, '3725', 'newbrand', '1500', 'SAMSUNG S9 PLUS', '2018-05-11', '', 1),
(386, 365, 50147, 4, NULL, 17, 2, 116, 400, '', 1, '3725', 'newbrand', '', 'SAMSUNG S9 PLUS', '2018-05-11', '', 1),
(387, 366, 50147, 4, NULL, 17, 2, 111, 700, '', 2, '3725', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-05-11', '', 1),
(388, 367, 50148, 4, NULL, 1, 3, 2, 660, '', 2, '5280', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-13', '', 1),
(389, 368, 50148, 4, NULL, 1, 3, 3, 280, '', 1, '5280', 'newbrand', '1580', 'APPLE IPHONE X ', '2018-05-13', '', 1),
(390, 369, 50148, 4, NULL, 1, 3, 111, 370, '', 1, '5280', 'newbrand', '1350', 'SAMSUNG S9 PLUS', '2018-05-13', '', 1),
(391, 370, 50149, 4, NULL, 13, 3, 34, 230, '', 1, '1850', 'newbrand', '1080', 'IPHONE8', '2018-05-13', '', 1),
(392, 371, 50149, 4, NULL, 13, 3, 19, 330, '', 1, '1850', 'newbrand', '1330', 'iphone8', '2018-05-13', '', 1),
(393, 1, 50150, 4, NULL, 27, 2, 44, 50, '', 3, '4150', 'newbrand', '1400', 'IPAD PRO 12.9\'\' 4G', '2018-05-16', '', 1),
(394, 2, 50151, 4, NULL, 27, 2, 15, 0, '', 5, '7400', 'newbrand', '1480', 'iphone8plus', '2018-05-16', '', 1),
(395, 3, 50152, 4, NULL, 27, 3, 4, 0, '', 1, '1830', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-16', 'Now, the case of an identifier not being defined at all, either as a var or let, as a function parameter, or as a property of the global context is different. A reference to such an identifier is treated as an error at runtime. You could attempt a reference and catch the error:', 1),
(396, 4, 50153, 4, NULL, 27, 3, 4, 0, '', 1, '1830', 'newbrand', '1830', 'APPLE IPHONE X ', '2018-05-16', 'Now, the case of an identifier not being defined at all, either as a var or let, as a function parameter, or as a property of the global context is different. A reference to such an identifier is treated as an error at runtime. You could attempt a reference and catch the error:', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchaseinventory`
--

CREATE TABLE `purchaseinventory` (
  `intId` int(11) NOT NULL,
  `intOrderId` int(11) NOT NULL,
  `intCompId` int(11) NOT NULL,
  `intcatID` int(50) DEFAULT NULL,
  `intSupId` int(11) NOT NULL,
  `intCashtypeId` int(11) NOT NULL,
  `intItemId` int(11) NOT NULL,
  `discount` int(50) NOT NULL,
  `itemqty` int(11) NOT NULL,
  `vartotal` varchar(50) NOT NULL,
  `itemcat` varchar(50) NOT NULL,
  `taxid` varchar(50) NOT NULL,
  `itemprice` int(11) NOT NULL,
  `itemname` varchar(200) NOT NULL,
  `purdate` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchaseinventory`
--

INSERT INTO `purchaseinventory` (`intId`, `intOrderId`, `intCompId`, `intcatID`, `intSupId`, `intCashtypeId`, `intItemId`, `discount`, `itemqty`, `vartotal`, `itemcat`, `taxid`, `itemprice`, `itemname`, `purdate`, `status`) VALUES
(1, 50150, 4, NULL, 27, 2, 44, 50, 3, '4150', 'newbrand', '', 1400, 'IPAD PRO 12.9\'\' 4G', '2018-05-16', 1),
(2, 50151, 4, NULL, 27, 2, 15, 0, 5, '7400', 'newbrand', '', 1480, 'iphone8plus', '2018-05-16', 1),
(3, 50152, 4, NULL, 27, 3, 4, 0, 1, '1830', 'newbrand', '', 1830, 'APPLE IPHONE X ', '2018-05-16', 1),
(4, 50153, 4, NULL, 27, 3, 4, 0, 1, '1830', 'newbrand', '', 1830, 'APPLE IPHONE X ', '2018-05-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchaseinventoryitem`
--

CREATE TABLE `purchaseinventoryitem` (
  `intId` int(50) NOT NULL,
  `itemId` varchar(50) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `itemIMEI` varchar(200) NOT NULL,
  `itemSerial` varchar(200) NOT NULL,
  `purorderId` varchar(200) NOT NULL,
  `purintId` varchar(200) NOT NULL,
  `pinvdate` date DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `intId` int(11) NOT NULL,
  `intMemId` varchar(50) NOT NULL,
  `varpinID` varchar(150) NOT NULL,
  `SponsorId` varchar(150) NOT NULL,
  `prename` varchar(200) NOT NULL,
  `cusName` varchar(200) NOT NULL,
  `prefname` varchar(200) NOT NULL,
  `cusFName` varchar(200) NOT NULL,
  `cusDob` date NOT NULL,
  `cusGender` varchar(200) NOT NULL,
  `cusAddress` text NOT NULL,
  `cusState` varchar(200) NOT NULL,
  `cusCity` varchar(200) NOT NULL,
  `cusPin` varchar(200) NOT NULL,
  `cusPhone` varchar(200) NOT NULL,
  `cusMobile` varchar(200) NOT NULL,
  `cusEmail` varchar(200) NOT NULL,
  `cusMStatus` varchar(200) NOT NULL,
  `cusProfession` varchar(200) NOT NULL,
  `cusNomineeName` varchar(200) NOT NULL,
  `cusRelation` varchar(200) NOT NULL,
  `cusRelationDob` date NOT NULL,
  `cusBank` varchar(200) NOT NULL,
  `cusBranch` varchar(200) NOT NULL,
  `cusAccno` varchar(200) NOT NULL,
  `cusPanNo` varchar(200) NOT NULL,
  `cusPaytm` varchar(200) NOT NULL,
  `cusIFSC` varchar(200) NOT NULL,
  `varPayType` varchar(150) NOT NULL,
  `varStatus` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`intId`, `intMemId`, `varpinID`, `SponsorId`, `prename`, `cusName`, `prefname`, `cusFName`, `cusDob`, `cusGender`, `cusAddress`, `cusState`, `cusCity`, `cusPin`, `cusPhone`, `cusMobile`, `cusEmail`, `cusMStatus`, `cusProfession`, `cusNomineeName`, `cusRelation`, `cusRelationDob`, `cusBank`, `cusBranch`, `cusAccno`, `cusPanNo`, `cusPaytm`, `cusIFSC`, `varPayType`, `varStatus`) VALUES
(1, '', 'WT166988', '1', '', 'Admin', '', 'test', '0000-00-00', '', '', '', '', '', '', '123456', 'admin@admin.com', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', 1),
(2, '9', 'WT929231', 'WT166988', 'Mr', 'test', 'Mr', 'test', '0000-00-00', 'Male', '', '', '', '', '', '1234567', 'muthukumar.t@infogenx.com', 'Single', 'Employed', '', 'Select Relation', '0000-00-00', '', '', '', '', '', '', 'epin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `intId` int(11) NOT NULL,
  `intOrderId` int(11) NOT NULL,
  `intCusId` int(11) DEFAULT NULL,
  `intCompId` int(11) DEFAULT NULL,
  `intSupId` int(11) DEFAULT NULL,
  `taxid` int(11) NOT NULL,
  `discount` int(50) NOT NULL,
  `payterms` int(11) NOT NULL,
  `intCashtypeId` int(11) DEFAULT NULL,
  `intItemId` int(11) NOT NULL,
  `itemqty` varchar(50) DEFAULT NULL,
  `itemprice` int(11) NOT NULL,
  `itemname` varchar(250) NOT NULL,
  `itemimei` varchar(200) NOT NULL,
  `saledate` date NOT NULL,
  `salesnotes` mediumtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`intId`, `intOrderId`, `intCusId`, `intCompId`, `intSupId`, `taxid`, `discount`, `payterms`, `intCashtypeId`, `intItemId`, `itemqty`, `itemprice`, `itemname`, `itemimei`, `saledate`, `salesnotes`, `status`) VALUES
(1, 10001, 12, 4, NULL, 0, 91, 0, NULL, 106, '1', 1350, 'SAMSUNG S9 ', '355894090061802', '2018-03-18', '', 1),
(2, 10002, 13, 4, NULL, 0, 91, 0, NULL, 113, '1', 1350, 'SAMSUNG S9 PLUS', '352402093106641', '2018-03-19', '', 1),
(3, 10003, 10, 4, NULL, 0, 0, 6, NULL, 2, '1', 1830, 'APPLE IPHONE X ', '353057092393159', '2018-04-08', '', 1),
(4, 10003, 10, 4, NULL, 0, 0, 6, NULL, 2, '1', 1830, 'APPLE IPHONE X ', '353055092582771', '2018-04-08', '', 1),
(5, 10003, 10, 4, NULL, 0, 0, 6, NULL, 2, '1', 1830, 'APPLE IPHONE X ', '353054092713668', '2018-04-08', '', 1),
(6, 10004, 1, 4, NULL, 0, 300, 6, NULL, 4, '1', 1830, 'APPLE IPHONE X ', '353053091782153', '2018-04-10', '', 1),
(7, 10005, 0, 4, NULL, 0, 360, 6, NULL, 74, '1', 1360, 'SAMSUNG GALAXY NOTE 8 ', '354075095051375', '2018-04-14', '', 1),
(8, 10005, 0, 4, NULL, 0, 70, 6, NULL, 121, '1', 270, 'OPPO A57', '098712366325', '2018-04-14', '', 1),
(9, 10005, 0, 4, NULL, 0, 80, 6, NULL, 3, '1', 1580, 'APPLE IPHONE X ', '353058095517075', '2018-04-14', '', 1),
(10, 10006, 1, 4, NULL, 0, 290, 6, NULL, 4, '1', 1830, 'APPLE IPHONE X ', '353057094496760', '2018-04-14', '', 1),
(11, 10007, 1, 4, NULL, 0, 300, 6, NULL, 2, '1', 1830, 'APPLE IPHONE X ', '353054094670312', '2018-04-16', '', 1),
(12, 10008, 1, 4, NULL, 0, 200, 6, NULL, 1, '1', 1580, 'APPLE IPHONE X ', '353056094385924', '2018-05-06', '', 1),
(13, 10009, 14, 4, NULL, 0, 350, 6, NULL, 111, '1', 1350, 'SAMSUNG S9 PLUS', '355893091300391', '2018-05-13', '', 1),
(14, 10010, 15, 4, NULL, 0, 200, 6, NULL, 1, '1', 1580, 'APPLE IPHONE X ', '353054094551355', '2018-05-13', '', 1),
(15, 10011, 10, 4, NULL, 0, 50, 6, NULL, 130, '1', 1550, 'GOOGLE PIXEL 2 XL ', '358036080541834', '2018-05-16', '', 1),
(16, 10012, 14, 4, NULL, 0, 0, 6, NULL, 42, '1', 459, 'iphone six ', '359478088310763', '2018-05-16', 'There are two special clauses in the \"abstract equality comparison algorithm\" in the JavaScript spec devoted to the case of one operand being null and the other being undefined, and the result is true for == and false for !=. Thus if the value of the variable is undefined, it\'s not != null, and if it\'s not null, it\'s obviously not != null.', 1),
(17, 10013, 14, 4, NULL, 0, 0, 6, NULL, 42, '1', 459, 'iphone six ', '359478088310763', '2018-05-16', 'There are two special clauses in the \"abstract equality comparison algorithm\" in the JavaScript spec devoted to the case of one operand being null and the other being undefined, and the result is true for == and false for !=. Thus if the value of the variable is undefined, it\'s not != null, and if it\'s not null, it\'s obviously not != null.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `StCode` int(11) NOT NULL,
  `StateName` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StCode`, `StateName`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajastha'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'Uttar Pradesh'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_id` int(11) NOT NULL,
  `sup_company_name` varchar(255) DEFAULT NULL,
  `sup_contact_name` varchar(255) DEFAULT NULL,
  `sup_phone` varchar(255) DEFAULT NULL,
  `sup_mobile_no` varchar(255) DEFAULT NULL,
  `sup_email` varchar(255) DEFAULT NULL,
  `sup_adress` varchar(255) DEFAULT NULL,
  `sup_postcode` varchar(255) DEFAULT NULL,
  `sup_country` varchar(255) DEFAULT NULL,
  `sup_state` varchar(255) DEFAULT NULL,
  `sup_abn` varchar(255) DEFAULT NULL,
  `sup_acn` varchar(255) DEFAULT NULL,
  `sup_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_company_name`, `sup_contact_name`, `sup_phone`, `sup_mobile_no`, `sup_email`, `sup_adress`, `sup_postcode`, `sup_country`, `sup_state`, `sup_abn`, `sup_acn`, `sup_status`) VALUES
(1, 'Cresecent Mobiles', 'Cresecent Mobiles', '0451 326 660', '0451 326 660', 'cashforphoness@gmail.com', '13 Japonica street \r\nInala QLD 4077', '4077', 'Australia', 'Queensland', '37 749 927 783 ', ' 749 927 783 ', 1),
(11, 'Mohammad Mostain Hossain', 'Mostain', '0423533414', '0423533414', 'mostain.azwar@gmail.com', 'unit 507\r\n39-47 George Street\r\nRockdale ', '2216', 'Australia', 'NSW', '00', '00', 1),
(13, 'Gagan My Mobile', 'Gagan BATHLA', '0451636292', '0451636292', 'gagan_bathla2001@yahoo.com', '20/43 Ashgrove Avenue\r\nAshgrove ', '4060', 'Australia', 'QLD', '000', '000', 1),
(14, 'Vasanth Test', 'testing', '0433056736', '0433056736', 'vasant.it@gmail.com', '6 the ave', '4110', 'Australia', 'QLD', '1234567', '1234567', 1),
(15, 'TUAN THANH HUYNH', 'TUAN THANH HUYNH', '0405275905', '0405275905', 'tuanhuynh2209@gmail.com', '33/13 Grandchester street\r\nsunnybank hills', '4109', 'Australia', 'Queensland', '0', '0', 1),
(16, 'JOY One Mobile ', 'Eric Yan', '0410850113', '0410850113', 'tomyan0312@gmail.com', '\r\nSHOP 105A Times Square, 250 McCullough Street, Sunnybank', '4109', 'Australia', 'QLD', '000', '000', 1),
(17, 'Skytree Electronics ', 'Shakil Khadir ', '0400000010', '0400000010', 'shakgc@gmail.com', '8/26 Orchid Avenue\r\nSurfers Paradise ', '4217', 'AUSTRALIA', 'QLD', '98 988 140 542', '988 140 542', 1),
(19, 'ZHAO TRADING ', 'Zhao Zeng', '0452481939', '0452481939', 'zhaosoletradings@hotmail.com', '5 CARAVEL LANE\r\nDOCKLANDS \r\n', '3008', 'AUSTRALIA', 'VICTORIA', '50169821372', '169821372', 1),
(20, '', '', NULL, '', '', NULL, NULL, NULL, NULL, '', NULL, 1),
(21, '', '', NULL, '', '', NULL, NULL, NULL, NULL, '', NULL, 1),
(22, '', '', NULL, '', '', NULL, NULL, NULL, NULL, '', NULL, 1),
(23, 'CHI HOU MAK', 'SAM MAK', '0403346105', '0403346105', 'chihou@me.com', '6/554 south pine road \r\nEverton Park ', '4053', 'Australia', 'Queensland', '0', '0', 1),
(24, 'Kamal Ponnuswamy', 'Kamal ponnuswamy', '0421775156', '0421775156', 'kamal1020@gmail.com', '58 wreath drive\r\nTarneit', '3029', 'Australia', 'Victoria', '0', '0', 1),
(25, 'ASIF AHMED ', 'ASIF AHMED', '0469731217', '0469731217', 'gtphones001@gmail.com', '115 Merthyr Road\r\nnew Farm', '4005', 'Australia', 'QLD', '0', '0', 1),
(26, '', '', NULL, '', '', NULL, NULL, NULL, NULL, '', NULL, 1),
(27, 'DEBU BANIK', 'DEBU BANIK', '0403882354', '0403882354', 'debu16@yahoo.com', '1/31  ACANTUS STREET\r\nDARRA ', '4076', 'AUSTRALIA', 'QUEENSLAND', '0', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `tax_id` int(11) NOT NULL,
  `tax_name` varchar(255) DEFAULT NULL,
  `tax_des` varchar(255) DEFAULT NULL,
  `tax_status` int(11) NOT NULL DEFAULT '1',
  `taxtype` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`tax_id`, `tax_name`, `tax_des`, `tax_status`, `taxtype`) VALUES
(2, 'Incl GST', '8', 1, 'purchase'),
(6, 'INCL GST', '10', 1, 'sale');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `intId` int(11) NOT NULL,
  `intMId` varchar(100) NOT NULL,
  `varMName` varchar(255) NOT NULL,
  `varMEmail` varchar(255) NOT NULL,
  `varMPassword` varchar(255) NOT NULL,
  `varMType` varchar(255) NOT NULL,
  `VarMStatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`intId`, `intMId`, `varMName`, `varMEmail`, `varMPassword`, `varMType`, `VarMStatus`) VALUES
(1, '1', 'admin', 'admin@gmail.com', 'admin', 'administrator', 1),
(9, '', 'test', 'user@gmail.com', 'test', 'user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `brandmodel`
--
ALTER TABLE `brandmodel`
  ADD PRIMARY KEY (`bmodel_id`);

--
-- Indexes for table `capacity`
--
ALTER TABLE `capacity`
  ADD PRIMARY KEY (`capacity_id`);

--
-- Indexes for table `cash`
--
ALTER TABLE `cash`
  ADD PRIMARY KEY (`cash_id`);

--
-- Indexes for table `colour`
--
ALTER TABLE `colour`
  ADD PRIMARY KEY (`colour_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`DistCode`),
  ADD KEY `StCode` (`StCode`);

--
-- Indexes for table `itemdetails`
--
ALTER TABLE `itemdetails`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `paymentterm`
--
ALTER TABLE `paymentterm`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `purchaseinventory`
--
ALTER TABLE `purchaseinventory`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `purchaseinventoryitem`
--
ALTER TABLE `purchaseinventoryitem`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`StCode`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`intId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `intId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brandmodel`
--
ALTER TABLE `brandmodel`
  MODIFY `bmodel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `capacity`
--
ALTER TABLE `capacity`
  MODIFY `capacity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cash`
--
ALTER TABLE `cash`
  MODIFY `cash_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `colour`
--
ALTER TABLE `colour`
  MODIFY `colour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `DistCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `itemdetails`
--
ALTER TABLE `itemdetails`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=599;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `intId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `paymentterm`
--
ALTER TABLE `paymentterm`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;

--
-- AUTO_INCREMENT for table `purchaseinventory`
--
ALTER TABLE `purchaseinventory`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchaseinventoryitem`
--
ALTER TABLE `purchaseinventoryitem`
  MODIFY `intId` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `StCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
