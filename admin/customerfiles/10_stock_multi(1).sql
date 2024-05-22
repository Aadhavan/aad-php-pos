-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2018 at 07:55 AM
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
-- Database: `stock_multi`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `id` int(11) NOT NULL,
  `intAdminId` int(20) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `comp_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`id`, `intAdminId`, `category_name`, `category_desc`, `status`, `comp_id`) VALUES
(1, 0, 'Dry', ' ', 1, ''),
(2, 0, 'Packaging', ' ', 1, ''),
(3, 0, 'Cleaning', '', 1, ''),
(4, 0, 'Cold', ' ', 1, ''),
(5, 0, 'Freezer', ' ', 1, ''),
(6, 0, 'Drinks', ' ', 1, ''),
(7, 0, 'Bulk Product', 'Bulk ', 1, 'xdf123'),
(8, 0, 'Dryvan55', 'InfogenXTest ', 1, ''),
(9, 0, 'pdt', '654654  ', 1, 'xdf123'),
(10, 15, 'CJ16', ' Noope', 1, 'ser123'),
(11, 17, 'Goods', ' Noope', 1, 'k8thse'),
(12, 28, 'Packaging', ' ', 1, 'bxnh9y'),
(13, 28, 'Dry', ' ', 1, 'bxnh9y'),
(14, 28, 'Cold', ' ', 1, 'bxnh9y'),
(15, 28, 'Freezer', ' ', 1, 'bxnh9y'),
(16, 28, 'Drinks', ' ', 1, 'bxnh9y'),
(17, 35, 'cat1', ' tst ', 1, 'ni8lxh'),
(18, 35, 'cat2', ' ', 1, 'ni8lxh'),
(19, 17, 'Packaging', ' ', 1, 'k8thse'),
(20, 17, 'Dry', ' ', 1, 'k8thse');

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(11) NOT NULL,
  `intAdminId` int(11) NOT NULL,
  `sku_id` int(11) DEFAULT NULL,
  `product_name` varchar(250) DEFAULT NULL,
  `product_supplier` int(11) DEFAULT NULL,
  `product_category` int(11) DEFAULT NULL,
  `product_day` int(11) DEFAULT NULL,
  `product_qty` int(11) DEFAULT '0',
  `product_unit` varchar(200) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_threshold` int(11) DEFAULT NULL,
  `product_tax` int(11) DEFAULT NULL,
  `product_gallery` varchar(250) DEFAULT NULL,
  `product_notes` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `comp_id` varchar(100) NOT NULL,
  `checkout_status` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `intAdminId`, `sku_id`, `product_name`, `product_supplier`, `product_category`, `product_day`, `product_qty`, `product_unit`, `product_price`, `product_threshold`, `product_tax`, `product_gallery`, `product_notes`, `status`, `comp_id`, `checkout_status`) VALUES
(10, 0, 1, '9ï¿½ PIZZA BOX TEXT', 1, 2, NULL, 22, 'Unit', 21, 300, 0, NULL, '', 1, '', 'completed'),
(11, 0, 2, '12ï¿½ PIZZA BOX TEXT', 1, 2, NULL, 200, 'Unit', 31, 400, 0, NULL, '', 1, '', 'completed'),
(13, 0, 4, 'OLIVES KALAMATTA 10KG', 1, 1, NULL, 1, 'can', 60, 1, NULL, NULL, '', 1, '', 'completed'),
(14, 0, 5, 'TOMATO POLPA 10KG', 1, 1, NULL, 5, 'carton', 15, 8, NULL, NULL, '', 1, '', 'completed'),
(15, 0, 6, 'TOMATO SUN DRIED 1KG', 1, 1, NULL, 0, 'pack', 0, 2, NULL, NULL, '', 1, '', 'completed'),
(16, 0, 7, 'PINEAPPLE CHOICE CUT', 1, 1, NULL, -20, 'carton', 36, 1, NULL, NULL, '', 1, '', 'completed'),
(17, 0, 8, 'PEPPERS FIRE ROASTED 4.1KG', 1, 1, NULL, 5, 'Carton', 13, 1, NULL, NULL, '', 1, '', 'completed'),
(18, 0, 9, 'JALAPENO SLICED A10', 1, 1, NULL, 0, 'Carton', 9, 1, NULL, NULL, '', 1, '', 'completed'),
(19, 0, 10, 'VEGETABLE OIL 2LT', 1, 1, NULL, 33, 'can', 36, 2, NULL, NULL, '', 1, '', 'completed'),
(20, 0, 11, 'DINNER CLAM BROWN KRAFT', 1, 2, NULL, 80, 'carton', 47, 1, NULL, NULL, '', 1, '', 'completed'),
(21, 0, 12, 'SOS BAG BROWN #16', 1, 2, NULL, 10, 'carton', 35, 1, NULL, NULL, '250 in a CTN', 1, '', 'completed'),
(22, 0, 13, 'SNACK BOX MEDIUM', 1, 2, NULL, 15, 'carton', 38, 1, NULL, NULL, '250 in a CTN', 1, '', 'completed'),
(23, 0, 14, 'SNACK BOX LARGE', 1, 2, NULL, 0, 'carton', 40, 1, NULL, NULL, '250 in a CTN', 1, '', 'completed'),
(24, 0, 15, 'PLASTIC CONT. RND 280ML', 1, 2, NULL, 0, 'slv', 6, 3, NULL, NULL, '100 in a slv', 1, '', 'completed'),
(25, 0, 16, 'LID SUIT C10', 1, 2, NULL, 0, 'slv', 3, 6, NULL, NULL, '50 in a slv', 1, '', 'completed'),
(26, 0, 17, 'PLASTIC CONT. RECT 750ML', 1, 2, NULL, 0, 'Carton', 5, 1, NULL, NULL, '50 in a slv', 1, '', 'completed'),
(27, 0, 18, 'LID SUIT CM750', 1, 2, NULL, 0, 'Carton', 4, 1, NULL, NULL, '50 in a slv', 1, '', 'completed'),
(28, 0, 19, 'SAUCE CONT. PLASTIC 35ML', 1, 2, NULL, 0, 'slv', 4, 3, NULL, NULL, '50 in a slv', 1, '', 'completed'),
(29, 0, 20, 'SALAD CONT. 8OZ DOME', 1, 2, NULL, 0, 'slv', 4, 3, NULL, NULL, '25 in a slv', 1, '', 'completed'),
(30, 0, 21, 'FOIL ROLL 44CMX150M', 1, 2, NULL, 0, 'pack', 18, 1, NULL, NULL, '', 1, '', 'completed'),
(31, 0, 22, 'CLING WRAP 45CMX600M', 1, 2, NULL, 0, 'pack', 21, 1, NULL, NULL, '', 1, '', 'completed'),
(32, 0, 23, 'FOIL CONTAINER 446 - 100SLV', 1, 2, NULL, 1, 'slv', 16, 3, NULL, NULL, '', 1, '', 'completed'),
(33, 0, 24, 'LID SUIT 446 100SLV', 1, 2, NULL, 1, 'slv', 6, 3, NULL, NULL, '', 1, '', 'completed'),
(34, 0, 25, 'FOIL CONTAINER 990ML', 1, 2, NULL, 0, 'carton', 62, 1, NULL, NULL, '400 in a carton', 1, '', 'completed'),
(35, 0, 26, 'LID SUIT 448', 1, 2, NULL, 0, 'carton', 31, 1, NULL, NULL, '400 in a carton', 1, '', 'completed'),
(36, 0, 27, 'EFTPOS ROLLS 20 PACK', 1, 2, NULL, 0, 'box', 30, 1, NULL, NULL, '', 1, '', 'completed'),
(37, 0, 28, 'NAPKIN 2PLY LUNCH', 1, 2, NULL, 0, 'slv', 1, 2, NULL, NULL, '', 1, '', 'completed'),
(38, 0, 29, 'PAPER TOWEL INTERLEAVED CTN', 1, 2, NULL, 0, 'carton', 47, 1, NULL, NULL, '', 1, '', 'completed'),
(39, 0, 30, 'KNIFE PLASTIC', 1, 2, NULL, 0, 'slv', 2, 2, NULL, NULL, '', 1, '', 'completed'),
(40, 0, 31, 'FORK PLASTIC', 1, 2, NULL, 0, 'slv', 2, 2, NULL, NULL, '', 1, '', 'completed'),
(41, 0, 32, 'GARBAGE BAGS 80L ', 1, 2, NULL, 112, 'slv', 4, 3, NULL, NULL, '', 1, '', 'completed'),
(42, 0, 33, 'PLASTIC BAG SMALL ', 1, 2, NULL, 0, 'slv', 4, 1, NULL, NULL, '', 1, '', 'completed'),
(43, 0, 34, 'PLASTIC BAG MED', 1, 2, NULL, 0, 'slv', 5, 1, NULL, NULL, '', 1, '', 'completed'),
(44, 0, 35, 'PLASTIC BAG LGE', 1, 2, NULL, 0, 'slv', 7, 1, NULL, NULL, '', 1, '', 'completed'),
(45, 0, 36, 'GLOVES VINY MED', 1, 3, NULL, 0, 'slv', 4, 1, NULL, NULL, '', 1, '', 'completed'),
(46, 0, 37, 'GLOVES VINYL LGE', 1, 3, NULL, 1, 'slv', 4, 2, NULL, NULL, '', 1, '', 'completed'),
(47, 0, 38, 'KITCHEN WIPES H/DUTY 85 ROLL', 1, 3, NULL, 0, 'Roll', 15, 1, NULL, NULL, '', 1, '', 'completed'),
(48, 0, 39, 'FLOOR ALL PURPOSE CLEANER 5L', 1, 3, NULL, 0, 'bottle', 18, 1, NULL, NULL, '', 1, '', 'completed'),
(49, 0, 40, 'LIQUID HAND SOAP TALC 5L', 1, 3, NULL, 0, 'bottle', 11, 1, NULL, NULL, '', 1, '', 'completed'),
(50, 0, 41, 'SANITISER 5L', 1, 3, NULL, 0, 'bottle', 17, 1, NULL, NULL, '', 1, '', 'completed'),
(51, 0, 43, 'Beef Mince - 026553', 6, 4, NULL, 2, 'kg', 8, 10, NULL, NULL, '', 1, '', 'completed'),
(52, 0, 44, 'Onion Rings - 213843', 6, 4, NULL, 3, 'unit', 12, 8, NULL, NULL, '', 1, '', 'completed'),
(53, 0, 45, 'Salami - 013924', 6, 4, NULL, 3, 'unit', 17, 8, NULL, NULL, '', 1, '', 'completed'),
(54, 0, 46, 'Black Pepper - 019866', 6, 1, NULL, 1, 'unit', 23, 2, NULL, NULL, '', 1, '', 'completed'),
(55, 0, 47, 'Elegre Pesto - 033959 ', 6, 4, NULL, 0, 'unit', 27, 1, NULL, NULL, '', 1, '', 'completed'),
(56, 0, 48, 'Garlic Granules - 017403', 6, 1, NULL, 1, 'unit', 20, 2, NULL, NULL, '', 1, '', 'completed'),
(57, 0, 49, 'Large Gluten Free Pizza - 150632', 5, 5, NULL, 0, 'Carton', 78, 1, NULL, NULL, '', 1, '', 'completed'),
(58, 0, 50, 'Allied Mills Yeast 13648', 5, 4, NULL, 1, 'Unit', 4, 5, NULL, NULL, '', 1, '', 'completed'),
(59, 0, 51, 'Pork Ribs', 4, 4, NULL, 0, 'Carton', 149, 1, NULL, NULL, '', 1, '', 'completed'),
(60, 0, 52, 'Parmesan Cheese', 4, 4, NULL, 2, 'unit', 17, 6, NULL, NULL, '', 1, '', 'completed'),
(61, 0, 53, '11mm Chips', 4, 5, NULL, 0, 'Carton', 28, 6, NULL, NULL, '', 1, '', 'completed'),
(62, 0, 54, 'Sugar', 4, 1, NULL, 0, 'Bag', 23, 1, NULL, NULL, '', 1, '', 'completed'),
(63, 0, 55, 'Salt', 4, 1, NULL, 5, 'Bag', 27, 1, NULL, NULL, '', 1, '', 'completed'),
(64, 0, 56, 'Bread Crumbs Fine White', 4, 1, NULL, 0, 'Bag', 20, 1, NULL, NULL, '', 1, '', 'completed'),
(65, 0, 57, 'Corn Flour', 4, 1, NULL, 5, 'Bag', 20, 1, NULL, NULL, '', 1, '', 'completed'),
(66, 0, 58, 'Chicken Thigh Meat', 3, 4, NULL, 20, 'kg', 8, 20, NULL, NULL, '', 1, '', 'completed'),
(67, 0, 59, 'Small Breast 200gms', 3, 4, NULL, 2, 'kg', 8, 10, NULL, NULL, '', 1, '', 'completed'),
(68, 0, 60, 'Wings Large Size', 3, 4, NULL, 3, 'Kg', 2, 15, NULL, NULL, '', 1, '', 'completed'),
(69, 0, 61, 'Chicken Nuggest', 3, 5, NULL, 8, 'Carton', 31, 1, NULL, NULL, '', 1, '', 'completed'),
(70, 0, 62, 'Sherwood Butter Chicken ', 7, 1, NULL, 0, 'unit', 4, 6, NULL, NULL, '', 1, '', 'completed'),
(71, 0, 63, 'Oreo', 7, 1, NULL, 5, 'unit', 3, 5, NULL, NULL, '', 1, '', 'completed'),
(72, 0, 64, 'Freezer Bag Medium', 7, 1, NULL, 5, 'unit', 1, 5, NULL, NULL, '', 1, '', 'completed'),
(73, 0, 65, 'Cherry Tomato', 8, 4, NULL, 4, 'unit', 2, 4, NULL, NULL, '', 1, '', 'completed'),
(74, 0, 66, 'Marinara Mix', 8, 5, NULL, 1, 'unit', 13, 2, NULL, NULL, '', 1, '', 'completed'),
(75, 0, 67, 'Bundi', 7, 6, NULL, 1, 'Carton', 13, 1, NULL, NULL, '', 1, '', 'completed'),
(76, 0, 68, 'Can Drinks', 7, 6, NULL, 8, 'Carton', 16, 8, NULL, NULL, '', 1, '', 'completed'),
(77, 0, 69, 'Mount Franklin', 7, 6, NULL, 2, 'Carton', 8, 2, NULL, NULL, '', 1, '', 'completed'),
(78, 0, 8906, 'tset', 1, 1, NULL, 535, '45', 123, 535, NULL, NULL, 'dffsdfds', 1, '', 'completed'),
(79, 0, 201, 'FIAMA Penne Rigate 500g', 2, 1, NULL, 0, 'Pkt', 1, 30, NULL, NULL, '', 1, '', 'completed'),
(80, 0, 202, 'FIAMA Spaghetti 5kg', 2, 1, NULL, 2, 'Pkt', 10, 3, NULL, NULL, '', 1, '', 'completed'),
(81, 0, 203, 'DECEC Lasagne Sheets 500g', 2, 1, NULL, 3, 'Pkt', 5, 10, NULL, NULL, '', 1, '', 'completed'),
(82, 0, 204, 'BENFU Pizza Flour 12.5kg', 2, 1, NULL, 8, 'Bag', 13, 8, NULL, NULL, '', 1, '', 'completed'),
(83, 0, 205, 'GLOBL Bread Improver 500g', 2, 1, NULL, 10, 'Bag', 6, 10, NULL, NULL, '', 1, '', 'completed'),
(84, 0, 206, 'GLOBL Croutons 500g', 2, 1, NULL, 1, 'Bag', 4, 2, NULL, NULL, '', 1, '', 'completed'),
(85, 0, 207, 'MAGGI GF Gravy Rich Mix 2kg', 2, 1, NULL, 2, 'Tub', 24, 2, NULL, NULL, '', 1, '', 'completed'),
(86, 0, 208, 'CWIDE Tomato Sauce 4ltr', 2, 1, NULL, 3, 'Btl', 8, 3, NULL, NULL, '', 1, '', 'completed'),
(87, 0, 209, 'SUNSH BBQ Hickory Smoked 3ltr', 2, 1, NULL, 2, 'Btl', 9, 3, NULL, NULL, '', 1, '', 'completed'),
(88, 0, 210, 'CWIDE BBQ Sauce 4ltr', 2, 1, NULL, 2, 'Btl', 9, 3, NULL, NULL, '', 1, '', 'completed'),
(89, 0, 211, 'MASTF Chilli Sauce Hot 3lt', 2, 1, NULL, 2, 'Btl', 19, 2, NULL, NULL, '', 1, '', 'completed'),
(90, 0, 212, 'FMAID Sweet Chilli Sauce 2lt', 2, 1, NULL, 2, 'Btl', 18, 2, NULL, NULL, '', 1, '', 'completed'),
(91, 0, 213, 'FMAID Garlic Aioli Sauce 2ltr', 2, 1, NULL, 1, 'Btl', 17, 2, NULL, NULL, '', 1, '', 'completed'),
(92, 0, 214, 'ZOOSH Caesar Dressing 2.4kg', 2, 1, NULL, 2, 'Btl', 19, 2, NULL, NULL, '', 1, '', 'completed'),
(93, 0, 215, 'ZOOSH \'Free\' French Dressing 2.5lt', 2, 1, NULL, 0, 'Btl', 15, 2, NULL, NULL, '', 1, '', 'completed'),
(94, 0, 216, 'ZOOSH Italian Dressing 2.6kg', 2, 1, NULL, 1, 'Btl', 15, 2, NULL, NULL, '', 1, '', 'completed'),
(95, 0, 217, 'MASTF Ranch Dressing 2.4kg', 2, 1, NULL, 1, 'Btl', 21, 2, NULL, NULL, '', 1, '', 'completed'),
(96, 0, 218, 'CASDU Cooking Wine White 5ltr [2] 10lt', 2, 1, NULL, 0, 'Ctn', 24, 1, NULL, NULL, '', 1, '', NULL),
(97, 0, 219, 'CASDU Cooking Wine Red 5ltr [2] 10lt', 2, 1, NULL, 2, 'Ctn', 28, 1, NULL, NULL, '', 1, '', 'completed'),
(98, 0, 220, 'GLOBL Basil Leaves 500g', 2, 1, NULL, 3, 'Bag', 6, 2, NULL, NULL, '', 1, '', 'completed'),
(99, 0, 221, 'GLOBL Chilli Crushed [Flakes] 1kg', 2, 1, NULL, 1, 'Bag', 14, 1, NULL, NULL, '', 1, '', 'completed'),
(100, 0, 222, 'GLOBL Oregano Leaves 500g', 2, 1, NULL, 4, 'Bag', 6, 2, NULL, NULL, '', 1, '', 'completed'),
(101, 0, 223, 'NESTL Choc Buttons White SNOWCAP 5kg', 2, 1, NULL, 0, 'Box', 38, 1, NULL, NULL, '', 1, '', 'completed'),
(102, 0, 224, 'EDLYN GF Topping Chocolate 3lt', 2, 1, NULL, 0, 'Btl', 9, 3, NULL, NULL, '', 1, '', 'completed'),
(103, 0, 225, 'MONTF Bocconcini 1kg', 2, 4, NULL, 1, 'Tub', 17, 2, NULL, NULL, '', 1, '', 'completed'),
(104, 0, 226, 'DDALE Mozzarella Block [10kg x 2] 20kg', 2, 4, NULL, 3, 'Ctn', 136, 5, NULL, NULL, '', 1, '', 'completed'),
(105, 0, 227, 'RIVER Fetta Diced 2kg', 2, 4, NULL, 1, 'Unit', 25, 2, NULL, NULL, '', 1, '', 'completed'),
(106, 0, 228, 'D/FAR Cream Thickened Caterers 5lt', 2, 4, NULL, 3, 'Btl', 25, 5, NULL, NULL, '', 1, '', 'completed'),
(107, 0, 229, 'PUOP Ham Shredded Pizza 3kg', 2, 4, NULL, 1, 'Pkt', 17, 8, NULL, NULL, '', 1, '', 'completed'),
(108, 0, 230, 'LAGO Bacon Rindless 2.5kg MA', 2, 4, NULL, 3, 'Pkt', 22, 6, NULL, NULL, '', 1, '', 'completed'),
(109, 0, 231, 'PUOP Pepperoni Sliced MILD 2.5kg', 2, 4, NULL, 2, 'Pkt', 37, 8, NULL, NULL, '', 1, '', 'completed'),
(110, 0, 232, 'PARAM Chorizo 2.5kg', 2, 4, NULL, 1, 'Pkt', 31, 2, NULL, NULL, '', 1, '', 'completed'),
(111, 0, 233, 'ALPI Anchovie Tin Oil 720g [Italy]', 2, 4, NULL, 2, 'Tin', 14, 2, NULL, NULL, '', 1, '', 'completed'),
(112, 0, 234, 'LAFAM Garlic Bread 24s [48pcs]', 2, 4, NULL, 2, 'Ctn', 34, 4, NULL, NULL, '', 1, '', 'completed'),
(113, 0, 235, 'AUSIE Garlic Bread 9\" Foil 40s 5509', 2, 4, NULL, 1, 'Ctn', 32, 5, NULL, NULL, '', 1, '', 'completed'),
(114, 0, 236, 'JUST Prawn Cooked & Peeled 60/90 1kg', 2, 5, NULL, 0, 'Bag', 23, 2, NULL, NULL, '', 1, '', 'completed'),
(115, 0, 237, 'S/BER Four Berry Mix Frozen 1kg', 2, 5, NULL, 2, 'Bag', 9, 2, NULL, NULL, '', 1, '', 'completed'),
(116, 0, 238, 'MARKW Fries Stealth Twister 13.6kg', 2, 5, NULL, 0, 'Ctn', 42, 1, NULL, NULL, '', 1, '', 'completed'),
(117, 0, 239, 'CWIDE Ice Cream Vanilla 4lt', 2, 5, NULL, 2, 'Tub', 8, 3, NULL, NULL, '', 1, '', 'completed'),
(118, 0, 240, 'PRSTL Tiramisu Sliced [15] 2.15kg 1-321', 2, 5, NULL, 0, 'Tray', 28, 1, NULL, NULL, '', 1, '', 'completed'),
(119, 0, 241, 'MR.CH Fries Beer Battered Steak 12kg', 2, 5, NULL, 0, 'Ctn', 40, 1, NULL, NULL, '', 1, '', 'completed'),
(120, 0, 242, 'FIAMA Penne Rigate 50g', 2, 1, NULL, 16, 'Pkt', 1, 30, NULL, NULL, '', 1, '', 'completed'),
(121, 0, 501, 'Beef Ribs - 112399', 5, 4, NULL, 0, 'Carton', 150, 1, NULL, NULL, '', 1, '', NULL),
(122, 0, 502, 'Pork Ribs', 5, 4, NULL, 0, 'Carton', 130, 1, NULL, NULL, '', 1, '', NULL),
(123, 0, 503, 'Bechamel Sauce', 5, 1, NULL, 0, 'Unit', 26, 1, NULL, NULL, '', 1, '', NULL),
(124, 0, 504, 'Perfect Cheese', 5, 4, NULL, 5, 'Unit', 156, 5, NULL, NULL, '', 1, '', 'completed'),
(125, 0, NULL, 'Sara25', 9, 7, NULL, 0, 'Test', 120, 120, 5, NULL, 'Test', 1, '', 'completed'),
(126, 0, NULL, 'test dry', 9, 1, NULL, 13, '', 320, 12, 2, NULL, '', 1, '', 'completed'),
(127, 0, NULL, 'test', 2, 2, NULL, 0, '', 123, 23, 2, NULL, '', 1, '', NULL),
(129, 0, NULL, 'DryPack', 10, 8, NULL, 140, 'Air Cover', 400, 140, 1, NULL, 'test', 1, '', 'completed'),
(130, 5, NULL, 'Goods', 9, 7, NULL, 450, '', 105, 2000, 0, NULL, 'asdas', 1, 'xdf123', 'completed'),
(131, 15, NULL, 'Cake', 14, 10, NULL, 0, 'dasfsd', 50, 80, 2, NULL, 'sadfsdf', 1, 'ser123', 'completed'),
(132, 9, NULL, 'Cook', 9, 9, NULL, 500, 'Box', 650, 500, 5, NULL, 'noope', 1, 'xdf123', 'completed'),
(133, 17, NULL, 'Whear', 15, 11, NULL, 440, 'Bags', 52, 500, 0, NULL, 'aDAS', 1, 'k8thse', 'completed'),
(134, 17, NULL, 'Biscuit', 15, 11, NULL, 20, 'Box', 10, 100, 1, NULL, 'dsfgdfg', 1, 'k8thse', 'completed'),
(135, 17, NULL, 'Cook', 15, 11, NULL, 0, 'Box', 100, 50, 0, NULL, 'sdfgsddf', 1, 'k8thse', 'completed'),
(136, 17, NULL, 'Wheat', 15, 11, NULL, 192, '', 25, 50, 1, NULL, 'sdfdfsdf', 1, 'k8thse', 'completed'),
(137, 17, NULL, 'Chips', 15, 11, NULL, 400, 'Packs', 10, 500, 1, NULL, 'Noiope', 1, 'k8thse', 'completed'),
(138, 1, 28, 'Chicken Thigh Meat', 16, 14, NULL, 0, 'kg', 8, 20, NULL, NULL, '', 1, 'bxnh9y', 'completed'),
(139, 2, 28, 'Small Breast 200gms', 16, 14, NULL, 3, 'kg', 8, 10, NULL, NULL, '', 1, 'bxnh9y', 'completed'),
(140, 3, 28, 'Wings Large Size', 16, 14, NULL, 0, 'Kg', 2, 15, NULL, NULL, '', 1, 'bxnh9y', NULL),
(141, 4, 28, 'Chicken Nuggest', 16, 15, NULL, 0, 'Carton', 31, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(142, 5, 28, '9 inch PIZZA BOX TEXT', 17, 12, NULL, 0, 'Unit', 0, 300, NULL, NULL, '', 1, 'bxnh9y', NULL),
(143, 6, 28, '12inch PIZZA BOX TEXT', 17, 12, NULL, 0, 'Unit', 0, 400, NULL, NULL, '', 1, 'bxnh9y', NULL),
(144, 7, 28, 'OLIVES KALAMATTA 10KG', 17, 13, NULL, 0, 'Drum', 60, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(145, 8, 28, 'TOMATO POLPA 10KG', 17, 13, NULL, 0, 'carton', 15, 8, NULL, NULL, '', 1, 'bxnh9y', NULL),
(146, 9, 28, 'TOMATO SUN DRIED 1KG', 17, 13, NULL, 0, 'pack', 10, 2, NULL, NULL, '', 1, 'bxnh9y', NULL),
(147, 10, 28, 'PINEAPPLE CHOICE CUT', 17, 13, NULL, 0, 'carton', 36, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(148, 11, 28, 'PEPPERS FIRE ROASTED 4.1KG', 17, 13, NULL, 0, 'Carton', 408, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(149, 12, 28, 'JALAPENO SLICED A10', 17, 13, NULL, 0, 'Carton', 26, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(150, 13, 28, 'VEGETABLE OIL 2LT', 17, 13, NULL, 0, 'Drum', 36, 2, NULL, NULL, '', 1, 'bxnh9y', NULL),
(151, 14, 28, 'ITALIAN HERBS 1Kg', 17, 13, NULL, 0, 'Bag', 11, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(152, 15, 28, 'CHICKEN SALT 1 Kg', 17, 13, NULL, 0, 'Bag', 6, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(153, 16, 28, 'CHILLI FLAKES 1 Kg', 17, 13, NULL, 0, 'Bag', 9, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(154, 17, 28, 'CRACKED PEPPER 1 Kg', 17, 13, NULL, 0, 'Bag', 19, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(155, 18, 28, 'DINNER CLAM BROWN KRAFT', 17, 12, NULL, 0, 'carton', 47, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(156, 19, 28, 'SOS BAG BROWN #16', 17, 12, NULL, 0, 'carton', 41, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(157, 20, 28, 'SOS BAG BROWN #20', 17, 12, NULL, 0, 'carton', 47, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(158, 21, 28, 'SNACK BOX MEDIUM', 17, 12, NULL, 0, 'carton', 38, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(159, 22, 28, 'SNACK BOX LARGE', 17, 12, NULL, 0, 'carton', 40, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(160, 23, 28, 'PLASTIC CONT. RND 280ML CA-C10', 17, 12, NULL, 0, 'slv', 6, 3, NULL, NULL, '', 1, 'bxnh9y', NULL),
(161, 24, 28, 'LID SUIT C10 ', 17, 12, NULL, 0, 'slv', 3, 6, NULL, NULL, '', 1, 'bxnh9y', NULL),
(162, 25, 28, 'PLASTIC CONT. RECT 750ML CA-CM750', 17, 12, NULL, 0, 'Carton', 54, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(163, 26, 28, 'LID SUIT CM750', 17, 12, NULL, 0, 'Carton', 35, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(164, 27, 28, 'SAUCE CONT. PLASTIC 35ML TCC035', 17, 12, NULL, 0, 'slv', 4, 3, NULL, NULL, '', 1, 'bxnh9y', NULL),
(165, 29, 28, 'FOIL ROLL 44CMX150M', 17, 12, NULL, 0, 'pack', 18, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(166, 30, 28, 'CLING WRAP 45CMX600M', 17, 12, NULL, 0, 'pack', 21, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(167, 31, 28, 'FOIL CONTAINER 446 - 100SLV', 17, 12, NULL, 0, 'slv', 16, 3, NULL, NULL, '', 1, 'bxnh9y', NULL),
(168, 32, 28, 'LID SUIT 446 100SLV', 17, 12, NULL, 0, 'slv', 5, 3, NULL, NULL, '', 1, 'bxnh9y', NULL),
(169, 33, 28, 'FOIL CONTAINER 448 - 100SLV', 17, 12, NULL, 0, 'carton', 62, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(170, 34, 28, 'LID SUIT 448', 17, 12, NULL, 0, 'carton', 31, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(171, 35, 28, 'EFTPOS ROLLS 20 PACK T5735', 17, 12, NULL, 0, 'box', 19, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(172, 36, 28, 'EFTPOS ROLLS  80x80 T8080', 17, 12, NULL, 0, 'box', 19, 2, NULL, NULL, '', 1, 'bxnh9y', NULL),
(173, 37, 28, 'NAPKIN 2PLY LUNCH', 17, 12, NULL, 0, 'slv', 2, 2, NULL, NULL, '', 1, 'bxnh9y', NULL),
(174, 38, 28, 'PAPER TOWEL INTERLEAVED CTN', 17, 12, NULL, 0, 'carton', 47, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(175, 39, 28, 'KNIFE PLASTIC', 17, 12, NULL, 0, 'slv', 3, 2, NULL, NULL, '', 1, 'bxnh9y', NULL),
(176, 40, 28, 'FORK PLASTIC', 17, 12, NULL, 0, 'slv', 2, 2, NULL, NULL, '', 1, 'bxnh9y', NULL),
(177, 41, 28, 'GARBAGE BAGS 80L', 17, 12, NULL, 0, 'slv', 4, 3, NULL, NULL, '', 1, 'bxnh9y', NULL),
(178, 42, 28, 'PLASTIC BAG SMALL', 17, 12, NULL, 0, 'slv', 4, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(179, 43, 28, 'PLASTIC BAG MED', 17, 12, NULL, 0, 'slv', 5, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(180, 44, 28, 'PLASTIC BAG LGE', 17, 12, NULL, 0, 'slv', 7, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(181, 45, 28, 'GLOVES VINY MED', 17, 12, NULL, 0, 'slv', 4, 3, NULL, NULL, '', 1, 'bxnh9y', NULL),
(182, 46, 28, 'GLOVES VINYL LGE', 17, 12, NULL, 0, 'slv', 4, 5, NULL, NULL, '', 1, 'bxnh9y', NULL),
(183, 47, 28, 'KITCHEN WIPES H/DUTY 85 ROLL', 17, 12, NULL, 0, 'Roll', 15, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(184, 48, 28, 'FLOOR ALL PURPOSE CLEANER 5L', 17, 12, NULL, 0, 'bottle', 18, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(185, 49, 28, 'LIQUID HAND SOAP TALC 5L', 17, 12, NULL, 0, 'bottle', 17, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(186, 50, 28, 'SANITISER 5L', 17, 12, NULL, 0, 'bottle', 0, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(187, 51, 28, 'DISHWASHING LIQUID', 17, 12, NULL, 0, 'bottle', 11, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(188, 52, 28, 'GARLIC BREAD COVER - PB WS 02', 17, 12, NULL, 0, 'slv', 12, 1, NULL, NULL, '', 1, 'bxnh9y', NULL),
(189, 1, 17, '9ï¿½ PIZZA BOX TEXT', 19, 0, NULL, 0, 'Unit', 21, 300, NULL, NULL, '', 1, 'k8thse', 'completed'),
(190, 2, 17, '12ï¿½ PIZZA BOX TEXT', 19, 0, NULL, 0, 'Unit', 31, 400, NULL, NULL, '', 1, 'k8thse', 'completed'),
(191, 4, 17, 'OLIVES KALAMATTA 10KG', 19, 0, NULL, 0, 'can', 60, 1, NULL, NULL, '', 1, 'k8thse', 'completed'),
(192, 5, 17, 'TOMATO POLPA 10KG', 19, 0, NULL, 0, 'carton', 15, 8, NULL, NULL, '', 1, 'k8thse', NULL),
(193, 6, 17, 'TOMATO SUN DRIED 1KG', 19, 0, NULL, 0, 'pack', 0, 2, NULL, NULL, '', 1, 'k8thse', NULL),
(194, 7, 17, 'PINEAPPLE CHOICE CUT', 19, 0, NULL, 0, 'carton', 36, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(195, 8, 17, 'PEPPERS FIRE ROASTED 4.1KG', 19, 0, NULL, 0, 'Carton', 13, 1, NULL, NULL, '', 1, 'k8thse', 'completed'),
(196, 9, 17, 'JALAPENO SLICED A10', 19, 0, NULL, 0, 'Carton', 9, 1, NULL, NULL, '', 1, 'k8thse', 'completed'),
(197, 10, 17, 'VEGETABLE OIL 2LT', 19, 0, NULL, 0, 'can', 36, 2, NULL, NULL, '', 1, 'k8thse', NULL),
(198, 11, 17, 'DINNER CLAM BROWN KRAFT', 19, 0, NULL, 0, 'carton', 47, 1, NULL, NULL, '', 1, 'k8thse', 'completed'),
(199, 201, 17, 'FIAMA Penne Rigate 500g', 18, 0, NULL, 0, 'Pkt', 1, 30, NULL, NULL, '', 1, 'k8thse', 'completed'),
(200, 202, 17, 'FIAMA Spaghetti 5kg', 18, 0, NULL, 0, 'Pkt', 10, 3, NULL, NULL, '', 1, 'k8thse', 'completed'),
(201, 203, 17, 'DECEC Lasagne Sheets 500g', 18, 0, NULL, 0, 'Pkt', 5, 10, NULL, NULL, '', 1, 'k8thse', 'completed'),
(202, 204, 17, 'BENFU Pizza Flour 12.5kg', 18, 0, NULL, 0, 'Bag', 13, 8, NULL, NULL, '', 1, 'k8thse', 'completed'),
(203, 205, 17, 'GLOBL Bread Improver 500g', 18, 0, NULL, 0, 'Bag', 6, 10, NULL, NULL, '', 1, 'k8thse', 'completed'),
(204, 206, 17, 'GLOBL Croutons 500g', 18, 0, NULL, 0, 'Bag', 4, 2, NULL, NULL, '', 1, 'k8thse', 'completed'),
(205, 207, 17, 'MAGGI GF Gravy Rich Mix 2kg', 18, 0, NULL, 0, 'Tub', 24, 2, NULL, NULL, '', 1, 'k8thse', 'completed'),
(206, 208, 17, 'CWIDE Tomato Sauce 4ltr', 18, 0, NULL, 0, 'Btl', 8, 3, NULL, NULL, '', 1, 'k8thse', 'completed'),
(207, 209, 17, 'SUNSH BBQ Hickory Smoked 3ltr', 18, 0, NULL, 0, 'Btl', 9, 3, NULL, NULL, '', 1, 'k8thse', 'completed'),
(208, 210, 17, 'CWIDE BBQ Sauce 4ltr', 18, 0, NULL, 0, 'Btl', 9, 3, NULL, NULL, '', 1, 'k8thse', 'completed'),
(209, 211, 17, 'MASTF Chilli Sauce Hot 3lt', 18, 0, NULL, 0, 'Btl', 19, 2, NULL, NULL, '', 1, 'k8thse', 'completed'),
(210, 212, 17, 'FMAID Sweet Chilli Sauce 2lt', 18, 0, NULL, 0, 'Btl', 18, 2, NULL, NULL, '', 1, 'k8thse', 'completed'),
(211, 213, 17, 'FMAID Garlic Aioli Sauce 2ltr', 18, 0, NULL, 0, 'Btl', 17, 2, NULL, NULL, '', 1, 'k8thse', 'completed'),
(212, 214, 17, 'ZOOSH Caesar Dressing 2.4kg', 18, 0, NULL, 0, 'Btl', 19, 2, NULL, NULL, '', 1, 'k8thse', NULL),
(213, 215, 17, 'ZOOSH \'Free\' French Dressing 2.5lt', 18, 0, NULL, 0, 'Btl', 15, 2, NULL, NULL, '', 1, 'k8thse', NULL),
(214, 216, 17, 'ZOOSH Italian Dressing 2.6kg', 18, 0, NULL, 4, 'Btl', 15, 2, NULL, NULL, '', 1, 'k8thse', 'completed'),
(215, 217, 17, 'MASTF Ranch Dressing 2.4kg', 18, 0, NULL, 0, 'Btl', 21, 2, NULL, NULL, '', 1, 'k8thse', 'completed'),
(216, 218, 17, 'CASDU Cooking Wine White 5ltr [2] 10lt', 18, 0, NULL, 0, 'Ctn', 24, 1, NULL, NULL, '', 1, 'k8thse', 'completed'),
(217, 219, 17, 'CASDU Cooking Wine Red 5ltr [2] 10lt', 18, 0, NULL, 0, 'Ctn', 28, 1, NULL, NULL, '', 1, 'k8thse', 'completed'),
(218, 220, 17, 'GLOBL Basil Leaves 500g', 18, 0, NULL, 0, 'Bag', 6, 2, NULL, NULL, '', 1, 'k8thse', 'completed'),
(219, 221, 17, 'GLOBL Chilli Crushed [Flakes] 1kg', 18, 0, NULL, 0, 'Bag', 14, 1, NULL, NULL, '', 1, 'k8thse', 'completed'),
(220, 222, 17, 'GLOBL Oregano Leaves 500g', 18, 0, NULL, 0, 'Bag', 6, 2, NULL, NULL, '', 1, 'k8thse', 'completed'),
(221, 223, 17, 'NESTL Choc Buttons White SNOWCAP 5kg', 18, 0, NULL, 0, 'Box', 38, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(222, 224, 17, 'EDLYN GF Topping Chocolate 3lt', 18, 0, NULL, 0, 'Btl', 9, 3, NULL, NULL, '', 1, 'k8thse', 'completed'),
(223, 225, 17, 'MONTF Bocconcini 1kg', 18, 0, NULL, 0, 'Tub', 17, 2, NULL, NULL, '', 1, 'k8thse', 'completed'),
(224, 123, 17, 'test', 19, 11, NULL, 0, 'pkd', 1400, 50, NULL, NULL, 'test', 1, 'k8thse', 'completed'),
(225, 35, NULL, 'test pro1', 20, 17, NULL, 0, 'box', 100, 50, 2, NULL, 'test', 1, 'ni8lxh', 'completed'),
(226, 35, NULL, 'test pro2', 20, 18, NULL, 0, 'btl', 500, 100, 3, NULL, '', 1, 'ni8lxh', NULL),
(227, 35, NULL, 'test pro3', 21, 17, NULL, 0, 'Tub', 300, 69, 3, NULL, '', 1, 'ni8lxh', NULL),
(228, 2, 17, '12ï¿½ PIZZA BOX TEXT', 19, 19, NULL, 0, 'Unit', 31, 400, NULL, NULL, '', 1, 'k8thse', 'completed'),
(229, 4, 17, 'OLIVES KALAMATTA 10KG', 19, 20, NULL, 0, 'can', 60, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(230, 5, 17, 'TOMATO POLPA 10KG', 19, 20, NULL, 0, 'carton', 15, 8, NULL, NULL, '', 1, 'k8thse', NULL),
(231, 6, 17, 'TOMATO SUN DRIED 1KG', 19, 20, NULL, 0, 'pack', 0, 2, NULL, NULL, '', 1, 'k8thse', NULL),
(232, 7, 17, 'PINEAPPLE CHOICE CUT', 19, 20, NULL, 0, 'carton', 36, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(233, 8, 17, 'PEPPERS FIRE ROASTED 4.1KG', 19, 20, NULL, 0, 'Carton', 13, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(234, 9, 17, 'JALAPENO SLICED A10', 19, 20, NULL, 0, 'Carton', 9, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(235, 10, 17, 'VEGETABLE OIL 2LT', 19, 20, NULL, 0, 'can', 36, 2, NULL, NULL, '', 1, 'k8thse', NULL),
(236, 11, 17, 'DINNER CLAM BROWN KRAFT', 19, 19, NULL, 0, 'carton', 47, 1, NULL, NULL, '', 1, 'k8thse', 'completed'),
(237, 2, 17, '12ï¿½ PIZZA BOX TEXT', 19, 19, NULL, 0, 'Unit', 31, 400, NULL, NULL, '', 1, 'k8thse', 'completed'),
(238, 4, 17, 'OLIVES KALAMATTA 10KG', 19, 20, NULL, 0, 'can', 60, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(239, 5, 17, 'TOMATO POLPA 10KG', 19, 20, NULL, 0, 'carton', 15, 8, NULL, NULL, '', 1, 'k8thse', NULL),
(240, 6, 17, 'TOMATO SUN DRIED 1KG', 19, 20, NULL, 0, 'pack', 0, 2, NULL, NULL, '', 1, 'k8thse', NULL),
(241, 7, 17, 'PINEAPPLE CHOICE CUT', 19, 20, NULL, 0, 'carton', 36, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(242, 8, 17, 'PEPPERS FIRE ROASTED 4.1KG', 19, 20, NULL, 0, 'Carton', 13, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(243, 9, 17, 'JALAPENO SLICED A10', 19, 20, NULL, 0, 'Carton', 9, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(244, 10, 17, 'VEGETABLE OIL 2LT', 19, 20, NULL, 0, 'can', 36, 2, NULL, NULL, '', 1, 'k8thse', NULL),
(245, 11, 17, 'DINNER CLAM BROWN KRAFT', 19, 19, NULL, 0, 'carton', 47, 1, NULL, NULL, '', 1, 'k8thse', 'completed'),
(246, 2, 17, '12ï¿½ PIZZA BOX TEXT', 19, 19, NULL, 0, 'Unit', 31, 400, NULL, NULL, '', 1, 'k8thse', 'completed'),
(247, 4, 17, 'OLIVES KALAMATTA 10KG', 19, 20, NULL, 0, 'can', 60, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(248, 5, 17, 'TOMATO POLPA 10KG', 19, 20, NULL, 0, 'carton', 15, 8, NULL, NULL, '', 1, 'k8thse', NULL),
(249, 6, 17, 'TOMATO SUN DRIED 1KG', 19, 20, NULL, 0, 'pack', 0, 2, NULL, NULL, '', 1, 'k8thse', NULL),
(250, 7, 17, 'PINEAPPLE CHOICE CUT', 19, 20, NULL, 0, 'carton', 36, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(251, 8, 17, 'PEPPERS FIRE ROASTED 4.1KG', 19, 20, NULL, 0, 'Carton', 13, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(252, 9, 17, 'JALAPENO SLICED A10', 19, 20, NULL, 0, 'Carton', 9, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(253, 10, 17, 'VEGETABLE OIL 2LT', 19, 20, NULL, 0, 'can', 36, 2, NULL, NULL, '', 1, 'k8thse', NULL),
(254, 11, 17, 'DINNER CLAM BROWN KRAFT', 19, 19, NULL, 9, 'carton', 47, 1, NULL, NULL, '', 1, 'k8thse', 'completed'),
(255, 1, 17, '9ï¿½ PIZZA BOX TEXT', 19, 19, NULL, 0, 'Unit', 21, 300, NULL, NULL, '', 1, 'k8thse', 'completed'),
(256, 2, 17, '12ï¿½ PIZZA BOX TEXT', 19, 19, NULL, 0, 'Unit', 31, 400, NULL, NULL, '', 1, 'k8thse', 'completed'),
(257, 4, 17, 'OLIVES KALAMATTA 10KG', 19, 20, NULL, 0, 'can', 60, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(258, 5, 17, 'TOMATO POLPA 10KG', 19, 20, NULL, 0, 'carton', 15, 8, NULL, NULL, '', 1, 'k8thse', NULL),
(259, 6, 17, 'TOMATO SUN DRIED 1KG', 19, 20, NULL, 0, 'pack', 0, 2, NULL, NULL, '', 1, 'k8thse', NULL),
(260, 7, 17, 'PINEAPPLE CHOICE CUT', 19, 20, NULL, 0, 'carton', 36, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(261, 8, 17, 'PEPPERS FIRE ROASTED 4.1KG', 19, 20, NULL, 0, 'Carton', 13, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(262, 9, 17, 'JALAPENO SLICED A10', 19, 20, NULL, 0, 'Carton', 9, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(263, 10, 17, 'VEGETABLE OIL 2LT', 19, 20, NULL, 0, 'can', 36, 2, NULL, NULL, '', 1, 'k8thse', NULL),
(264, 11, 17, 'DINNER CLAM BROWN KRAFT', 19, 19, NULL, 0, 'carton', 47, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(265, 1, 17, '9ï¿½ PIZZA BOX TEXT', 19, 19, NULL, 0, 'Unit', 21, 300, NULL, NULL, '', 1, 'k8thse', 'completed'),
(266, 17, 1, '9 PIZZA BOX TEXT', 19, 19, NULL, 0, 'Unit', 21, 300, NULL, NULL, '', 1, 'k8thse', 'completed'),
(267, 17, 2, '12 PIZZA BOX TEXT', 19, 19, NULL, 0, 'Unit', 31, 400, NULL, NULL, '', 1, 'k8thse', 'completed'),
(268, 17, 4, 'OLIVES KALAMATTA 10KG', 19, 20, NULL, 0, 'can', 60, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(269, 17, 5, 'TOMATO POLPA 10KG', 19, 20, NULL, 0, 'carton', 15, 8, NULL, NULL, '', 1, 'k8thse', NULL),
(270, 17, 6, 'TOMATO SUN DRIED 1KG', 19, 20, NULL, 0, 'pack', 0, 2, NULL, NULL, '', 1, 'k8thse', NULL),
(271, 17, 7, 'PINEAPPLE CHOICE CUT', 19, 20, NULL, 0, 'carton', 36, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(272, 17, 8, 'PEPPERS FIRE ROASTED 4.1KG', 19, 20, NULL, 0, 'Carton', 13, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(273, 17, 9, 'JALAPENO SLICED A10', 19, 20, NULL, 0, 'Carton', 9, 1, NULL, NULL, '', 1, 'k8thse', NULL),
(274, 17, 10, 'VEGETABLE OIL 2LT', 19, 20, NULL, 0, 'can', 36, 2, NULL, NULL, '', 1, 'k8thse', NULL),
(275, 17, 11, 'DINNER CLAM BROWN KRAFT', 19, 19, NULL, 0, 'carton', 47, 1, NULL, NULL, '', 1, 'k8thse', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `add_supplier`
--

CREATE TABLE `add_supplier` (
  `id` int(11) NOT NULL,
  `intAdminId` int(20) NOT NULL,
  `supplier_name` varchar(255) DEFAULT NULL,
  `supplier_email` varchar(255) DEFAULT NULL,
  `supplier_mob` varchar(50) DEFAULT NULL,
  `supplier_day` varchar(255) DEFAULT NULL,
  `supplier_pref` varchar(255) DEFAULT NULL,
  `supplier_comp` varchar(250) DEFAULT NULL,
  `supplier_address` varchar(255) DEFAULT NULL,
  `supplier_city` varchar(255) DEFAULT NULL,
  `supplier_state` varchar(255) DEFAULT NULL,
  `supplier_country` varchar(250) DEFAULT NULL,
  `supplier_post` varchar(255) DEFAULT NULL,
  `supplier_custom1` varchar(255) DEFAULT NULL,
  `supplier_custom2` varchar(255) DEFAULT NULL,
  `supplier_custom3` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `comp_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_supplier`
--

INSERT INTO `add_supplier` (`id`, `intAdminId`, `supplier_name`, `supplier_email`, `supplier_mob`, `supplier_day`, `supplier_pref`, `supplier_comp`, `supplier_address`, `supplier_city`, `supplier_state`, `supplier_country`, `supplier_post`, `supplier_custom1`, `supplier_custom2`, `supplier_custom3`, `status`, `comp_id`) VALUES
(1, 0, 'Shawparth', 'mozzacoorparoo@gmail.com', '433056736', NULL, 'Email', 'Shawparth', '', '', '', '', '', 'supplier_custom1', '', '', 1, ''),
(2, 0, 'Global', 'mozzacoorparoo@gmail.com', '433056736', NULL, 'Email', '', '', '', '', '', '', '', '', '', 1, ''),
(3, 0, 'Abd', 'mozzacoorparoo@gmail.com', '433056736', NULL, 'Email', '', '', '', '', '', '', 'supplier_custom1', '', '', 1, ''),
(4, 0, 'BE', 'mozzacoorparoo@gmail.com', '433056736', NULL, 'Email', '', '', '', '', '', '', '', '', '', 1, ''),
(5, 0, 'Bidfood', 'mozzacoorparoo@gmail.com', '433056736', NULL, 'Email', '', '', '', '', '', '', '', '', '', 1, ''),
(6, 0, 'PFD', 'mozzacoorparoo@gmail.com', '433056736', NULL, 'Email', '', '', '', '', '', '', '', '', '', 1, ''),
(7, 0, 'Coles', 'Coles@gmail.com', '89898989', NULL, 'Email', '', '', '', '', '', '', '', '', '', 1, ''),
(8, 0, 'Aldi', 'aldi@gamil.om', '86868686', NULL, 'Email', '', '', '', '', '', '', '', '', '', 1, ''),
(9, 0, 'InfoSupplier', 'muthukumar.t@infogenx.com', '9790793115', NULL, 'SMS', 'Sara&Co', '5/323, Muthamilzh nagar, 121st street,5th block', 'Chennai', 'Tamil Nadu', 'India', '600118', 'supplier_custom1', 'Test2', 'Test Note', 1, 'xdf123'),
(10, 0, 'Velocitymovers', 'srjikumar@gmail.com', '8521478524', NULL, 'Email', 'infogenx', '5/123', 'chennai', 'tamilnadu', 'IN', '600001', 'Test', 'test', 'test', 1, ''),
(11, 0, 'pandi', 'admin@lexcorp.com', '5646465465', NULL, 'Choose Preference', 'ASDASD', 'jhfdjsdf', 'Anantapur', 'Andhra Pradesh', 'asd', '6546544', 'ASDFASDF', 'ASDFASDF', 'ASDASD', 1, ''),
(12, 0, 'Anand', 'admin@lexcorp.com', '6465464', NULL, 'Email', 'SADFASDFASDF', 'sdfsdfdsf', 'North Delhi', 'Delhi (NCT)', 'ASDASD', '64655', 'ASDASD', 'd', 'ASDASD', 1, 'xdf123'),
(13, 0, 'sat', 'admin@lexcorp.com', '2345698712', NULL, 'Email', 'asdasd', 'jkbflksdbfljkb', 'Chennai', 'Tamil Nadu', 'ASDFASD', 'jfkjbjkdfgfjkfdsbj', 'ASDFASDF', 'ASDASD', 'ASDF', 1, ''),
(14, 15, 'Goog', 'goog@gmail.com', '45698741', NULL, 'Email', 'ssgsdfg', 'asdfgasdfgas', 'fgasfdga', 'fdgasg', 'fdgafg', 'asfgafdg', 'afdgasfd', 'gafsdgafds', 'gagfasdfg', 1, 'ser123'),
(15, 17, 'Gokul', 'gokul@gmail.com', '142578996', NULL, 'Email', '5gdsfg', '5ASD5FASDF', 'DFGDSFG', 'YHUJVGHSDV', 'HJBSDHJBSD', 'JHBDSFVHJSBD', 'HBASAS', 'SHDBCFSHDB', 'KJSBDKSBD', 1, 'k8thse'),
(16, 28, 'ABD', 'mozzacoorparoo@gmail.com', '433056736', NULL, 'Email', '', '', '', '', '', '', '', '', '', 1, 'bxnh9y'),
(17, 28, 'Shawparth', 'mozzacoorparoo@gmail.com', '433056736', NULL, 'Email', '', '', '', '', '', '', '', '', '', 1, 'bxnh9y'),
(18, 17, 'Global', 'muthukumar.t@gmail.com', '928349874', NULL, 'Email', 'channai Info', 'chennai', 'chennai', 'Tamilnadu', 'India', '600042', 'supplier_custom1', 'BO  64646', '', 1, 'k8thse'),
(19, 17, 'Shawparth', 'tmkumardev@gmail.com', '928349874', NULL, 'Email', 'Infobev', 'Madurai', 'Madurai', 'Tamilnadu', 'India', '625001', 'supplier_custom1', '', '', 1, 'k8thse'),
(20, 35, 'kumar', 'tmkumardev@gmail.com', '9865996264', NULL, 'Email', 'test', 'Chennai', 'chennai', 'Tamilnadu', 'India', '600042', 'APN 456984564', '', '', 1, 'ni8lxh'),
(21, 35, 'Freezer', 'muthukumar.t@gmail.com', '928349874', NULL, 'Email', 'channai Info', 'Madurai', 'Madurai', 'Tamilnadu', 'India', '600042', 'VPN 654968481', '', '', 1, 'ni8lxh');

-- --------------------------------------------------------

--
-- Table structure for table `add_user`
--

CREATE TABLE `add_user` (
  `id` int(11) NOT NULL,
  `adminId` int(50) NOT NULL,
  `user_roll` varchar(250) DEFAULT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `middle_name` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `company` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `comp_id` varchar(50) NOT NULL,
  `added_ip` varchar(20) DEFAULT NULL,
  `added_time` datetime DEFAULT NULL,
  `added_by` varchar(20) DEFAULT NULL,
  `modified_ip` varchar(20) DEFAULT NULL,
  `modified_time` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_ip` varchar(20) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `current_sub_id` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_user`
--

INSERT INTO `add_user` (`id`, `adminId`, `user_roll`, `first_name`, `last_name`, `middle_name`, `gender`, `dob`, `company`, `email`, `user_name`, `password`, `status`, `comp_id`, `added_ip`, `added_time`, `added_by`, `modified_ip`, `modified_time`, `modified_by`, `deleted_ip`, `deleted_time`, `deleted_by`, `current_sub_id`, `city`, `state`, `country`) VALUES
(5, 0, 'Administrator', 'sathya', 'murugesan', 'sundhari', 'female', '1970-01-01', 'infogenx', 'msathyaseetha@gmail.com', 'admin', 'admin@123', 1, 'xdf123', '', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', 0, 'kjhgfvkhgsadvjhsdvf', '', '', ''),
(6, 0, 'Manager', 'Tele marketing', 'Tele', 'A', 'male', '1991-03-10', 'InfogenX', 'sarath.a@infogenx.com', 'SaraTele', '05TJLwE2', 1, 'xdf123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', ''),
(7, 0, 'Supervisor', 'InfoSupervisors', 'GenX', '', 'female', '2018-03-31', 'InfogenXE', 'srjikumar@gmail.com', 'SaraSupervisor', 'qpTG5p8T', 1, 'xdf123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', ''),
(9, 0, 'Manager', 'vivekan', 'traders', 'A', 'male', '1990-10-02', 'viveks', 'vivek@gmail.com', 'viveks33', '8BfJCoyr', 1, 'xdf123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', ''),
(10, 0, 'Supervisor', 'Lokesh', 'k', '', 'male', '1874-10-02', 'infog', 'lokesh.k@infogenx.com', 'Lokesh66', '1neT3yDm', 1, 'xdf123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', ''),
(11, 0, 'Manager', 'InfoManager', 'info', 'A', 'male', '1991-10-03', 'infogenx', 'testonemanager94@gmail.com', 'InfoManager66', 'DO7DIizi', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', ''),
(12, 0, 'Supervisor', 'InfoSupervisor', 'info', 'A', 'female', '1984-10-02', 'infogenX', 'infosupervisor58@gmail.com', 'InfoSupervisor6', 'hCNFyiYj', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', ''),
(13, 0, 'Manager', 'Sarath', '8', 'A', 'male', '2018-05-04', 'Krossark', 'swetha@gmail.com', 'Sara85269', 'BrwimrUW', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', ''),
(14, 5, 'Manager', 'Sateesh', 'a', 'a', 'male', '1995-02-03', 'xdf123', 'sateesh@gmail.com', 'Sateesh', 'ti7cAiYh', 1, 'xdf123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', ''),
(15, 1, 'Administrator', 'Google', 'Pixel', 'r', 'Male', '2018-03-01', 'Google', 'google@gmail.com', 'admin2', 'admin@2', 1, 'ser123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kasgvdkjasvdgahvsdjvhasd654654', '', '', ''),
(16, 15, 'Manager', 'man', '54', '455', 'male', '2018-11-05', '6551', 'admin@smbs.com', 'man1', '92GAiil1', 1, 'ser123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', ''),
(17, 1, 'Administrator', 'Sateesh', 'Moorthy', NULL, NULL, '2018-05-14', 'jkbflksdbfljkb', 'admin@lexcorp.com', 'google', 'google', 1, 'k8thse', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5af98aaaeaf3d', 'Chennai', 'Tamil Nadu', 'AF'),
(18, 1, 'Administrator', 'Sateesh', 'Moorthy', NULL, NULL, '2018-05-14', 'jkbflksdbfljkb', 'admin@lexcorp.com', 'goo', 'goo', 1, 'fir1ht', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5af98aef46aa0', 'Chennai', 'Tamil Nadu', 'AF'),
(19, 1, 'Administrator', 'Sateesh', 'Moorthy', NULL, NULL, '2018-05-14', 'jkbflksdbfljkb', 'admin@lexcorp.com', 'good', 'good', 1, 'g81xtu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5af98b6f0ab96', 'Chennai', 'Tamil Nadu', 'IN'),
(20, 17, 'Manager', 'pandi', 'a', 'a', 'male', '1988-05-18', 'asdasd', 'admin@pandi.com', 'pandi', 'Ugymbfh0', 1, 'k8thse', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', ''),
(21, 17, 'Supervisor', 'Sateesh', 'a', 'a', 'male', '1999-12-27', 'asdasd', 'sat@gmail.com', 'Sateesh', 'LYKW1Ow0', 1, 'k8thse', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', ''),
(22, 1, 'Administrator', '', '', NULL, NULL, '2018-05-24', '', '', 'aaa', 'ncKS0SZc', 1, '6eb0ao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5b0683714a7f9', '', '', 'AF'),
(23, 1, 'Administrator', '', '', NULL, NULL, '2018-05-24', '', '', '', 'LgeCJpih', 1, '9g6owd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5b06843c13b83', '', '', 'AF'),
(24, 1, 'Administrator', '', '', NULL, NULL, '2018-05-24', '', '', '', 'kfhtajOm', 1, '1up3vp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5b0684fdd7693', '', '', 'AF'),
(25, 1, 'Administrator', '', '', NULL, NULL, '2018-05-24', '', '', '', 'KKqtZ5sx', 1, 'f5g201', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5b06851cc0adf', '', '', 'AF'),
(26, 1, 'Administrator', '', '', NULL, NULL, '2018-05-24', '', '', 'sda', '2je0rK1M', 1, 'qt3224', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5b06855e57af7', '', '', 'AF'),
(27, 1, 'Administrator', '', '', NULL, NULL, '2018-05-24', '', '', 'dasdas', 'XTu8B8el', 1, '29ms8z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5b068574e523f', '', '', 'AF'),
(28, 1, 'Administrator', 'Vasanth', 'Elango', NULL, NULL, '2018-05-26', 'Shop 2, 285 old Cleveland road', 'mozzacoorparoo@gmail.com', 'mozzacoorparoo', 'nYsl2IIE', 1, 'bxnh9y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5b09292aa6c02', 'COORPAROO', 'Queensland', 'AU'),
(35, 1, 'Administrator', 'test', '', NULL, NULL, '2018-05-31', 'test123', 'test@gmail.com', 'test123', 'aaaa', 1, 'ni8lxh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5b0fa214a1d97', '', '', ''),
(36, 1, 'Administrator', 'test', '', NULL, NULL, '2018-06-01', 'test123', 'muthukumar.t@infogenx.com', 'test123', '33sZ2Uuc', 1, 'hxuyqv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5b10e0f7b5407', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `checkoutsubmit`
--

CREATE TABLE `checkoutsubmit` (
  `intId` int(11) NOT NULL,
  `intsupId` int(11) NOT NULL,
  `intProId` int(11) NOT NULL,
  `proname` varchar(11) NOT NULL,
  `proqty` int(11) NOT NULL,
  `prounit` varchar(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `comp_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkoutsubmit`
--

INSERT INTO `checkoutsubmit` (`intId`, `intsupId`, `intProId`, `proname`, `proqty`, `prounit`, `status`, `comp_id`) VALUES
(1, 19, 254, 'DINNER CLAM', 9, 'carton', 1, 'k8thse'),
(2, 18, 214, 'ZOOSH Itali', 19, 'Btl', 1, 'k8thse');

-- --------------------------------------------------------

--
-- Table structure for table `globalsettings`
--

CREATE TABLE `globalsettings` (
  `intGlobalid` int(50) NOT NULL,
  `intUserId` int(50) NOT NULL,
  `varCompany` varchar(100) DEFAULT NULL,
  `varContactPerson` varchar(100) DEFAULT NULL,
  `varAddress` text,
  `varTelephone` varchar(25) DEFAULT NULL,
  `varWebsite` varchar(100) DEFAULT '',
  `varEmail` varchar(100) DEFAULT '',
  `varLogo` varchar(100) DEFAULT NULL,
  `varDLno` varchar(100) DEFAULT NULL,
  `intNoofrows` int(10) DEFAULT NULL,
  `varMetaKeyword` varchar(250) DEFAULT NULL,
  `varMetaDescription` varchar(250) DEFAULT NULL,
  `varAdminpage` varchar(250) DEFAULT NULL,
  `comp_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `globalsettings`
--

INSERT INTO `globalsettings` (`intGlobalid`, `intUserId`, `varCompany`, `varContactPerson`, `varAddress`, `varTelephone`, `varWebsite`, `varEmail`, `varLogo`, `varDLno`, `intNoofrows`, `varMetaKeyword`, `varMetaDescription`, `varAdminpage`, `comp_id`) VALUES
(1, 35, 'test123 c', 'test', 'test', '9865996265', 'test.com', 'muthukumar.t@gmail.com', NULL, NULL, NULL, '', '', 'test', ''),
(2, 36, 'test123', 'test', NULL, '9865996264', '', 'muthukumar.t@infogenx.com', NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `ordertosupplier_items`
--

CREATE TABLE `ordertosupplier_items` (
  `intId` int(50) NOT NULL,
  `intAdminId` int(20) NOT NULL,
  `intStockId` int(50) DEFAULT NULL,
  `intorderId` varchar(100) NOT NULL,
  `intSupId` int(15) NOT NULL,
  `intProId` int(50) NOT NULL,
  `varProName` varchar(250) NOT NULL,
  `varProQty` varchar(50) NOT NULL,
  `varProUnit` varchar(100) DEFAULT NULL,
  `varProPrice` int(200) DEFAULT NULL,
  `ItemType` varchar(150) DEFAULT NULL,
  `varStatus` varchar(50) NOT NULL DEFAULT 'Active',
  `comp_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertosupplier_items`
--

INSERT INTO `ordertosupplier_items` (`intId`, `intAdminId`, `intStockId`, `intorderId`, `intSupId`, `intProId`, `varProName`, `varProQty`, `varProUnit`, `varProPrice`, `ItemType`, `varStatus`, `comp_id`) VALUES
(1, 0, NULL, '', 1, 3, 'test pro', '47', NULL, NULL, NULL, 'Active', ''),
(2, 0, NULL, '', 1, 4, 'test pro', '43 ', NULL, NULL, NULL, 'Active', ''),
(3, 0, NULL, '', 1, 3, 'test pro', '45', NULL, NULL, NULL, 'Active', ''),
(4, 0, NULL, '', 1, 4, 'test pro', '43 ', NULL, NULL, NULL, 'Active', ''),
(5, 0, NULL, '', 1, 3, 'test pro', '34', NULL, NULL, NULL, 'Active', ''),
(6, 0, NULL, '', 1, 4, 'test pro', '43 ', NULL, NULL, NULL, 'Active', ''),
(7, 0, NULL, '', 1, 3, 'test pro', '40', NULL, NULL, NULL, 'Active', ''),
(8, 0, NULL, '', 1, 4, 'test pro', '43', NULL, NULL, NULL, 'Active', ''),
(9, 0, NULL, '', 1, 3, 'test pro', '22', NULL, NULL, NULL, 'Active', ''),
(10, 0, NULL, '', 1, 4, 'test pro', '43 ', NULL, NULL, NULL, 'Active', ''),
(11, 0, NULL, '', 1, 3, 'test pro', '47', NULL, NULL, NULL, 'Active', ''),
(12, 0, NULL, '', 1, 4, 'test pro', '43 ', NULL, NULL, NULL, 'Active', ''),
(13, 0, NULL, '', 1, 3, 'test pro', '37', NULL, NULL, NULL, 'Active', ''),
(14, 0, NULL, '', 1, 4, 'test pro', '43 ', NULL, NULL, NULL, 'Active', ''),
(15, 0, NULL, '', 1, 3, 'test pro', '37', NULL, NULL, NULL, 'Active', ''),
(16, 0, NULL, '', 1, 4, 'test pro', '43 ', NULL, NULL, NULL, 'Active', ''),
(17, 0, NULL, '', 1, 3, 'test pro', '12', NULL, NULL, NULL, 'Active', ''),
(18, 0, NULL, '', 1, 4, 'test pro', '43 ', NULL, NULL, NULL, 'Active', ''),
(19, 0, NULL, '', 1, 3, 'test pro', '17', NULL, NULL, NULL, 'Active', ''),
(20, 0, NULL, '', 1, 4, 'test pro', '43 ', NULL, NULL, NULL, 'Active', ''),
(21, 0, NULL, '', 1, 3, 'test pro', '57 ', NULL, NULL, NULL, 'Active', ''),
(22, 0, NULL, '', 1, 4, 'test pro', '43 ', NULL, NULL, NULL, 'Active', ''),
(23, 0, NULL, '', 1, 10, '9Ã¯Â¿Â½ PIZZA BOX TEXT', '300 ', NULL, NULL, NULL, 'Active', ''),
(24, 0, NULL, '', 1, 11, '12Ã¯Â¿Â½ PIZZA BOX TEXT', '400 ', NULL, NULL, NULL, 'Active', ''),
(25, 0, NULL, '', 1, 12, '15Ã¯Â¿Â½ PIZZA BOX TEXT', '200 ', NULL, NULL, NULL, 'Active', ''),
(26, 0, NULL, '', 1, 13, 'OLIVES KALAMATTA 10KG', '1 ', NULL, NULL, NULL, 'Active', ''),
(27, 0, NULL, '', 1, 14, 'TOMATO POLPA 10KG', '8 ', NULL, NULL, NULL, 'Active', ''),
(28, 0, NULL, '', 1, 15, 'TOMATO SUN DRIED 1KG', '2 ', NULL, NULL, NULL, 'Active', ''),
(29, 0, NULL, '', 1, 16, 'PINEAPPLE CHOICE CUT', '1 ', NULL, NULL, NULL, 'Active', ''),
(30, 0, NULL, '', 1, 17, 'PEPPERS FIRE ROASTED 4.1KG', '1 ', NULL, NULL, NULL, 'Active', ''),
(31, 0, NULL, '', 1, 18, 'JALAPENO SLICED A10', '1 ', NULL, NULL, NULL, 'Active', ''),
(32, 0, NULL, '', 1, 19, 'VEGETABLE OIL 2LT', '2 ', NULL, NULL, NULL, 'Active', ''),
(33, 0, NULL, '', 1, 20, 'DINNER CLAM BROWN KRAFT', '1 ', NULL, NULL, NULL, 'Active', ''),
(34, 0, NULL, '', 1, 21, 'SOS BAG BROWN #16', '1 ', NULL, NULL, NULL, 'Active', ''),
(35, 0, NULL, '', 1, 22, 'SNACK BOX MEDIUM', '1 ', NULL, NULL, NULL, 'Active', ''),
(36, 0, NULL, '', 1, 23, 'SNACK BOX LARGE', '1 ', NULL, NULL, NULL, 'Active', ''),
(37, 0, NULL, '', 1, 24, 'PLASTIC CONT. RND 280ML', '3 ', NULL, NULL, NULL, 'Active', ''),
(38, 0, NULL, '', 1, 25, 'LID SUIT C10', '6 ', NULL, NULL, NULL, 'Active', ''),
(39, 0, NULL, '', 1, 26, 'PLASTIC CONT. RECT 750ML', '1 ', NULL, NULL, NULL, 'Active', ''),
(40, 0, NULL, '', 1, 27, 'LID SUIT CM750', '1 ', NULL, NULL, NULL, 'Active', ''),
(41, 0, NULL, '', 1, 28, 'SAUCE CONT. PLASTIC 35ML', '3 ', NULL, NULL, NULL, 'Active', ''),
(42, 0, NULL, '', 1, 29, 'SALAD CONT. 8OZ DOME', '3 ', NULL, NULL, NULL, 'Active', ''),
(43, 0, NULL, '', 1, 30, 'FOIL ROLL 44CMX150M', '1 ', NULL, NULL, NULL, 'Active', ''),
(44, 0, NULL, '', 1, 31, 'CLING WRAP 45CMX600M', '1 ', NULL, NULL, NULL, 'Active', ''),
(45, 0, NULL, '', 1, 32, 'FOIL CONTAINER 446 - 100SLV', '3 ', NULL, NULL, NULL, 'Active', ''),
(46, 0, NULL, '', 1, 33, 'LID SUIT 446 100SLV', '3 ', NULL, NULL, NULL, 'Active', ''),
(47, 0, NULL, '', 1, 34, 'FOIL CONTAINER 990ML', '1 ', NULL, NULL, NULL, 'Active', ''),
(48, 0, NULL, '', 1, 35, 'LID SUIT 448', '1 ', NULL, NULL, NULL, 'Active', ''),
(49, 0, NULL, '', 1, 36, 'EFTPOS ROLLS 20 PACK', '1 ', NULL, NULL, NULL, 'Active', ''),
(50, 0, NULL, '', 1, 37, 'NAPKIN 2PLY LUNCH', '2 ', NULL, NULL, NULL, 'Active', ''),
(51, 0, NULL, '', 1, 38, 'PAPER TOWEL INTERLEAVED CTN', '1 ', NULL, NULL, NULL, 'Active', ''),
(52, 0, NULL, '', 1, 39, 'KNIFE PLASTIC', '2 ', NULL, NULL, NULL, 'Active', ''),
(53, 0, NULL, '', 1, 40, 'FORK PLASTIC', '2 ', NULL, NULL, NULL, 'Active', ''),
(54, 0, NULL, '', 1, 41, 'GARBAGE BAGS 80L ', '3 ', NULL, NULL, NULL, 'Active', ''),
(55, 0, NULL, '', 1, 42, 'PLASTIC BAG SMALL ', '1 ', NULL, NULL, NULL, 'Active', ''),
(56, 0, NULL, '', 1, 43, 'PLASTIC BAG MED', '1 ', NULL, NULL, NULL, 'Active', ''),
(57, 0, NULL, '', 1, 44, 'PLASTIC BAG LGE', '1 ', NULL, NULL, NULL, 'Active', ''),
(58, 0, NULL, '', 1, 45, 'GLOVES VINY MED', '1 ', NULL, NULL, NULL, 'Active', ''),
(59, 0, NULL, '', 1, 46, 'GLOVES VINYL LGE', '2 ', NULL, NULL, NULL, 'Active', ''),
(60, 0, NULL, '', 1, 47, 'KITCHEN WIPES H/DUTY 85 ROLL', '1 ', NULL, NULL, NULL, 'Active', ''),
(61, 0, NULL, '', 1, 48, 'FLOOR ALL PURPOSE CLEANER 5L', '1 ', NULL, NULL, NULL, 'Active', ''),
(62, 0, NULL, '', 1, 49, 'LIQUID HAND SOAP TALC 5L', '1 ', NULL, NULL, NULL, 'Active', ''),
(63, 0, NULL, '', 1, 50, 'SANITISER 5L', '1 ', NULL, NULL, NULL, 'Active', ''),
(64, 0, NULL, '', 1, 10, '9Ã¯Â¿Â½ PIZZA BOX TEXT', '288 ', NULL, NULL, NULL, 'Active', ''),
(65, 0, NULL, '', 1, 11, '12Ã¯Â¿Â½ PIZZA BOX TEXT', '344 ', NULL, NULL, NULL, 'Active', ''),
(66, 0, NULL, '', 1, 45, 'GLOVES VINY MED', '1 ', NULL, NULL, NULL, 'Active', ''),
(67, 0, NULL, '', 1, 46, 'GLOVES VINYL LGE', '2 ', NULL, NULL, NULL, 'Active', ''),
(68, 0, NULL, '', 1, 10, '9Ã¯Â¿Â½ PIZZA BOX TEXT', '200', NULL, NULL, NULL, 'Active', ''),
(69, 0, NULL, '', 1, 11, '12Ã¯Â¿Â½ PIZZA BOX TEXT', '300 ', NULL, NULL, NULL, 'Active', ''),
(70, 0, NULL, '', 1, 14, 'TOMATO POLPA 10KG', '5 ', NULL, NULL, NULL, 'Active', ''),
(71, 0, NULL, '', 1, 10, '9Ã¯Â¿Â½ PIZZA BOX TEXT', '0 ', NULL, NULL, NULL, 'Active', ''),
(72, 0, NULL, '', 1, 11, '12Ã¯Â¿Â½ PIZZA BOX TEXT', '400 ', NULL, NULL, NULL, 'Active', ''),
(73, 0, NULL, '', 1, 13, 'OLIVES KALAMATTA 10KG', '1 ', NULL, NULL, NULL, 'Active', ''),
(74, 0, NULL, '', 1, 14, 'TOMATO POLPA 10KG', '5 ', NULL, NULL, NULL, 'Active', ''),
(75, 0, NULL, '', 1, 15, 'TOMATO SUN DRIED 1KG', '1 ', NULL, NULL, NULL, 'Active', ''),
(76, 0, NULL, '', 1, 17, 'PEPPERS FIRE ROASTED 4.1KG', '0 ', NULL, NULL, NULL, 'Active', ''),
(77, 0, NULL, '', 1, 20, 'DINNER CLAM BROWN KRAFT', '1 ', NULL, NULL, NULL, 'Active', ''),
(78, 0, NULL, '', 1, 10, '9Ã¯Â¿Â½ PIZZA BOX TEXT', '200 ', NULL, NULL, NULL, 'Active', ''),
(79, 0, NULL, '', 1, 11, '12Ã¯Â¿Â½ PIZZA BOX TEXT', '800 ', NULL, NULL, NULL, 'Active', ''),
(80, 0, NULL, '', 1, 13, 'OLIVES KALAMATTA 10KG', '1 ', NULL, NULL, NULL, 'Active', ''),
(81, 0, NULL, '', 1, 14, 'TOMATO POLPA 10KG', '5 ', NULL, NULL, NULL, 'Active', ''),
(82, 0, NULL, '', 1, 10, '9Ã¯Â¿Â½ PIZZA BOX TEXT', '350', NULL, NULL, NULL, 'Active', ''),
(83, 0, NULL, '', 1, 11, '12Ã¯Â¿Â½ PIZZA BOX TEXT', '600', NULL, NULL, NULL, 'Active', ''),
(84, 0, NULL, '', 1, 13, 'OLIVES KALAMATTA 10KG', '1 ', NULL, NULL, NULL, 'Active', ''),
(85, 0, NULL, '', 1, 14, 'TOMATO POLPA 10KG', '10', NULL, NULL, NULL, 'Active', ''),
(86, 0, NULL, '', 1, 15, 'TOMATO SUN DRIED 1KG', '2 ', NULL, NULL, NULL, 'Active', ''),
(87, 0, NULL, '', 1, 16, 'PINEAPPLE CHOICE CUT', '2', NULL, NULL, NULL, 'Active', ''),
(88, 0, NULL, '', 1, 17, 'PEPPERS FIRE ROASTED 4.1KG', '1', NULL, NULL, NULL, 'Active', ''),
(89, 0, NULL, '', 1, 18, 'JALAPENO SLICED A10', '1 ', NULL, NULL, NULL, 'Active', ''),
(90, 0, NULL, '', 1, 19, 'VEGETABLE OIL 2LT', '3', NULL, NULL, NULL, 'Active', ''),
(91, 0, NULL, '', 1, 20, 'DINNER CLAM BROWN KRAFT', '1 ', NULL, NULL, NULL, 'Active', ''),
(92, 0, NULL, '', 1, 21, 'SOS BAG BROWN #16', '0', NULL, NULL, NULL, 'Active', ''),
(93, 0, NULL, '', 1, 22, 'SNACK BOX MEDIUM', '1 ', NULL, NULL, NULL, 'Active', ''),
(94, 0, NULL, '', 1, 25, 'LID SUIT C10', '5 ', NULL, NULL, NULL, 'Active', ''),
(95, 0, NULL, '', 1, 26, 'PLASTIC CONT. RECT 750ML', '1 ', NULL, NULL, NULL, 'Active', ''),
(96, 0, NULL, '', 1, 27, 'LID SUIT CM750', '1 ', NULL, NULL, NULL, 'Active', ''),
(97, 0, NULL, '', 1, 28, 'SAUCE CONT. PLASTIC 35ML', '3 ', NULL, NULL, NULL, 'Active', ''),
(98, 0, NULL, '', 1, 29, 'SALAD CONT. 8OZ DOME', '0', NULL, NULL, NULL, 'Active', ''),
(99, 0, NULL, '', 1, 30, 'FOIL ROLL 44CMX150M', '0', NULL, NULL, NULL, 'Active', ''),
(100, 0, NULL, '', 1, 31, 'CLING WRAP 45CMX600M', '0', NULL, NULL, NULL, 'Active', ''),
(101, 0, NULL, '', 1, 32, 'FOIL CONTAINER 446 - 100SLV', '0', NULL, NULL, NULL, 'Active', ''),
(102, 0, NULL, '', 1, 33, 'LID SUIT 446 100SLV', '0', NULL, NULL, NULL, 'Active', ''),
(103, 0, NULL, '', 1, 36, 'EFTPOS ROLLS 20 PACK', '1 ', NULL, NULL, NULL, 'Active', ''),
(104, 0, NULL, '', 1, 37, 'NAPKIN 2PLY LUNCH', '1 ', NULL, NULL, NULL, 'Active', ''),
(105, 0, NULL, '', 1, 45, 'GLOVES VINY MED', '2', NULL, NULL, NULL, 'Active', ''),
(106, 0, NULL, '', 1, 46, 'GLOVES VINYL LGE', '3', NULL, NULL, NULL, 'Active', ''),
(107, 0, NULL, '', 1, 47, 'KITCHEN WIPES H/DUTY 85 ROLL', '1 ', NULL, NULL, NULL, 'Active', ''),
(108, 0, NULL, '', 1, 10, '9Ã¯Â¿Â½ PIZZA BOX TEXT', '300 ', NULL, NULL, NULL, 'Active', ''),
(109, 0, NULL, '', 1, 11, '12Ã¯Â¿Â½ PIZZA BOX TEXT', '150 ', NULL, NULL, NULL, 'Active', ''),
(110, 0, NULL, '', 1, 13, 'OLIVES KALAMATTA 10KG', '0 ', NULL, NULL, NULL, 'Active', ''),
(111, 0, NULL, '', 1, 14, 'TOMATO POLPA 10KG', '4 ', NULL, NULL, NULL, 'Active', ''),
(112, 0, NULL, '', 1, 15, 'TOMATO SUN DRIED 1KG', '-1 ', NULL, NULL, NULL, 'Active', ''),
(113, 0, NULL, '', 1, 16, 'PINEAPPLE CHOICE CUT', '0 ', NULL, NULL, NULL, 'Active', ''),
(114, 0, NULL, '', 1, 17, 'PEPPERS FIRE ROASTED 4.1KG', '0 ', NULL, NULL, NULL, 'Active', ''),
(115, 0, NULL, '', 1, 18, 'JALAPENO SLICED A10', '0 ', NULL, NULL, NULL, 'Active', ''),
(116, 0, NULL, '', 1, 19, 'VEGETABLE OIL 2LT', '1 ', NULL, NULL, NULL, 'Active', ''),
(117, 0, NULL, '', 1, 20, 'DINNER CLAM BROWN KRAFT', '1 ', NULL, NULL, NULL, 'Active', ''),
(118, 0, NULL, '', 1, 21, 'SOS BAG BROWN #16', '1 ', NULL, NULL, NULL, 'Active', ''),
(119, 0, NULL, '', 1, 24, 'PLASTIC CONT. RND 280ML', '1 ', NULL, NULL, NULL, 'Active', ''),
(120, 0, NULL, '', 1, 25, 'LID SUIT C10', '0 ', NULL, NULL, NULL, 'Active', ''),
(121, 0, NULL, '', 1, 28, 'SAUCE CONT. PLASTIC 35ML', '2 ', NULL, NULL, NULL, 'Active', ''),
(122, 0, NULL, '', 1, 34, 'FOIL CONTAINER 990ML', '1 ', NULL, NULL, NULL, 'Active', ''),
(123, 0, NULL, '', 1, 37, 'NAPKIN 2PLY LUNCH', '2 ', NULL, NULL, NULL, 'Active', ''),
(124, 0, NULL, '', 1, 38, 'PAPER TOWEL INTERLEAVED CTN', '1 ', NULL, NULL, NULL, 'Active', ''),
(125, 0, NULL, '', 1, 40, 'FORK PLASTIC', '2 ', NULL, NULL, NULL, 'Active', ''),
(126, 0, NULL, '', 1, 41, 'GARBAGE BAGS 80L ', '1 ', NULL, NULL, NULL, 'Active', ''),
(127, 0, NULL, '', 1, 42, 'PLASTIC BAG SMALL ', '0 ', NULL, NULL, NULL, 'Active', ''),
(128, 0, NULL, '', 1, 43, 'PLASTIC BAG MED', '1 ', NULL, NULL, NULL, 'Active', ''),
(129, 0, NULL, '', 1, 44, 'PLASTIC BAG LGE', '1 ', NULL, NULL, NULL, 'Active', ''),
(130, 0, NULL, '', 1, 45, 'GLOVES VINY MED', '0 ', NULL, NULL, NULL, 'Active', ''),
(131, 0, NULL, '', 1, 46, 'GLOVES VINYL LGE', '2 ', NULL, NULL, NULL, 'Active', ''),
(132, 0, NULL, '', 1, 47, 'KITCHEN WIPES H/DUTY 85 ROLL', '0 ', NULL, NULL, NULL, 'Active', ''),
(133, 0, NULL, '', 1, 48, 'FLOOR ALL PURPOSE CLEANER 5L', '1 ', NULL, NULL, NULL, 'Active', ''),
(134, 0, NULL, '', 1, 49, 'LIQUID HAND SOAP TALC 5L', '1 ', NULL, NULL, NULL, 'Active', ''),
(135, 0, NULL, '', 1, 10, '9Ã¯Â¿Â½ PIZZA BOX TEXT', '300 ', NULL, NULL, NULL, 'Active', ''),
(136, 0, NULL, '', 1, 11, '12Ã¯Â¿Â½ PIZZA BOX TEXT', '200 ', NULL, NULL, NULL, 'Active', ''),
(137, 0, NULL, '', 1, 13, 'OLIVES KALAMATTA 10KG', '0 ', NULL, NULL, NULL, 'Active', ''),
(138, 0, NULL, '', 1, 14, 'TOMATO POLPA 10KG', '3 ', NULL, NULL, NULL, 'Active', ''),
(139, 0, NULL, '', 1, 15, 'TOMATO SUN DRIED 1KG', '2 ', NULL, NULL, NULL, 'Active', ''),
(140, 0, NULL, '', 1, 16, 'PINEAPPLE CHOICE CUT', '1 ', NULL, NULL, NULL, 'Active', ''),
(141, 0, NULL, '', 1, 17, 'PEPPERS FIRE ROASTED 4.1KG', '1 ', NULL, NULL, NULL, 'Active', ''),
(142, 0, NULL, '', 1, 18, 'JALAPENO SLICED A10', '1 ', NULL, NULL, NULL, 'Active', ''),
(143, 0, NULL, '', 1, 19, 'VEGETABLE OIL 2LT', '2 ', NULL, NULL, NULL, 'Active', ''),
(144, 0, NULL, '', 1, 20, 'DINNER CLAM BROWN KRAFT', '1 ', NULL, NULL, NULL, 'Active', ''),
(145, 0, NULL, '', 1, 21, 'SOS BAG BROWN #16', '1 ', NULL, NULL, NULL, 'Active', ''),
(146, 0, NULL, '', 1, 24, 'PLASTIC CONT. RND 280ML', '3 ', NULL, NULL, NULL, 'Active', ''),
(147, 0, NULL, '', 1, 25, 'LID SUIT C10', '6 ', NULL, NULL, NULL, 'Active', ''),
(148, 0, NULL, '', 1, 28, 'SAUCE CONT. PLASTIC 35ML', '3 ', NULL, NULL, NULL, 'Active', ''),
(149, 0, NULL, '', 1, 32, 'FOIL CONTAINER 446 - 100SLV', '2 ', NULL, NULL, NULL, 'Active', ''),
(150, 0, NULL, '', 1, 33, 'LID SUIT 446 100SLV', '2 ', NULL, NULL, NULL, 'Active', ''),
(151, 0, NULL, '', 1, 41, 'GARBAGE BAGS 80L ', '1 ', NULL, NULL, NULL, 'Active', ''),
(152, 0, NULL, '', 1, 42, 'PLASTIC BAG SMALL ', '1 ', NULL, NULL, NULL, 'Active', ''),
(153, 0, NULL, '', 1, 45, 'GLOVES VINY MED', '1 ', NULL, NULL, NULL, 'Active', ''),
(154, 0, NULL, '', 1, 46, 'GLOVES VINYL LGE', '1 ', NULL, NULL, NULL, 'Active', ''),
(155, 0, NULL, '', 1, 47, 'KITCHEN WIPES H/DUTY 85 ROLL', '1 ', NULL, NULL, NULL, 'Active', ''),
(156, 0, NULL, '', 1, 10, '9Ã¯Â¿Â½ PIZZA BOX TEXT', '278 ', NULL, NULL, NULL, 'Active', ''),
(157, 0, NULL, '', 6, 51, 'Beef Mince - 026553', '8 ', NULL, NULL, NULL, 'Active', ''),
(158, 0, NULL, '', 6, 52, 'Onion Rings - 213843', '5 ', NULL, NULL, NULL, 'Active', ''),
(159, 0, NULL, '', 6, 53, 'Salami - 013924', '5 ', NULL, NULL, NULL, 'Active', ''),
(160, 0, NULL, '', 6, 54, 'Black Pepper - 019866', '1 ', NULL, NULL, NULL, 'Active', ''),
(161, 0, NULL, '', 6, 55, 'Elegre Pesto - 033959 ', '1 ', NULL, NULL, NULL, 'Active', ''),
(162, 0, NULL, '', 3, 57, 'Large Gluten Free Pizza - 150632', '1 ', NULL, NULL, NULL, 'Active', ''),
(163, 0, NULL, '', 3, 58, 'Allied Mills Yeast 13648', '4 ', NULL, NULL, NULL, 'Active', ''),
(164, 0, NULL, '', 3, 59, 'Pork Ribs', '1 ', NULL, NULL, NULL, 'Active', ''),
(165, 0, NULL, '', 3, 60, 'Parmesan Cheese', '4 ', NULL, NULL, NULL, 'Active', ''),
(166, 0, NULL, '', 3, 67, 'Small Breast 200gms', '8 ', NULL, NULL, NULL, 'Active', ''),
(167, 0, NULL, '', 3, 68, 'Wings Large Size', '12 ', NULL, NULL, NULL, 'Active', ''),
(168, 0, NULL, '', 0, 56, 'Garlic Granules - 017403', '1 ', NULL, NULL, NULL, 'Active', ''),
(169, 0, NULL, '', 0, 61, '11mm Chips', '6 ', NULL, NULL, NULL, 'Active', ''),
(170, 0, NULL, '', 0, 62, 'Sugar', '1 ', NULL, NULL, NULL, 'Active', ''),
(171, 0, NULL, '', 0, 70, 'Sherwood Butter Chicken ', '6 ', NULL, NULL, NULL, 'Active', ''),
(172, 0, NULL, '', 0, 79, 'FIAMA Penne Rigate 500g', '30 ', NULL, NULL, NULL, 'Active', ''),
(173, 0, NULL, '', 0, 63, 'Salt', '-4 ', NULL, NULL, NULL, 'Active', ''),
(174, 0, NULL, '', 0, 69, 'Chicken Nuggest', '-7 ', NULL, NULL, NULL, 'Active', ''),
(175, 0, NULL, '', 0, 64, 'Bread Crumbs Fine White', '1 ', NULL, NULL, NULL, 'Active', ''),
(176, 0, NULL, '', 4, 65, 'Corn Flour', '1 ', NULL, NULL, NULL, 'Active', ''),
(177, 0, NULL, '', 2, 80, 'FIAMA Spaghetti 5kg', '1 ', NULL, NULL, NULL, 'Active', ''),
(178, 0, NULL, '', 2, 87, 'SUNSH BBQ Hickory Smoked 3ltr', '1 ', NULL, NULL, NULL, 'Active', ''),
(179, 0, NULL, '', 2, 88, 'CWIDE BBQ Sauce 4ltr', '1 ', NULL, NULL, NULL, 'Active', ''),
(180, 0, NULL, '', 2, 91, 'FMAID Garlic Aioli Sauce 2ltr', '1 ', NULL, NULL, NULL, 'Active', ''),
(181, 0, NULL, '', 2, 94, 'ZOOSH Italian Dressing 2.6kg', '1 ', NULL, NULL, NULL, 'Active', ''),
(182, 0, NULL, '', 2, 95, 'MASTF Ranch Dressing 2.4kg', '1 ', NULL, NULL, NULL, 'Active', ''),
(183, 0, NULL, '', 2, 103, 'MONTF Bocconcini 1kg', '1 ', NULL, NULL, NULL, 'Active', ''),
(184, 0, NULL, '', 2, 104, 'DDALE Mozzarella Block [10kg x 2] 20kg', '2 ', NULL, NULL, NULL, 'Active', ''),
(185, 0, NULL, '', 2, 105, 'RIVER Fetta Diced 2kg', '1 ', NULL, NULL, NULL, 'Active', ''),
(186, 0, NULL, '', 2, 106, 'D/FAR Cream Thickened Caterers 5lt', '2 ', NULL, NULL, NULL, 'Active', ''),
(187, 0, NULL, '', 2, 107, 'PUOP Ham Shredded Pizza 3kg', '7 ', NULL, NULL, NULL, 'Active', ''),
(188, 0, NULL, '', 2, 108, 'LAGO Bacon Rindless 2.5kg MA', '3 ', NULL, NULL, NULL, 'Active', ''),
(189, 0, NULL, '', 2, 109, 'PUOP Pepperoni Sliced MILD 2.5kg', '6 ', NULL, NULL, NULL, 'Active', ''),
(190, 0, NULL, '', 2, 110, 'PARAM Chorizo 2.5kg', '1 ', NULL, NULL, NULL, 'Active', ''),
(191, 0, NULL, '', 2, 112, 'LAFAM Garlic Bread 24s [48pcs]', '2 ', NULL, NULL, NULL, 'Active', ''),
(192, 0, NULL, '', 2, 113, 'AUSIE Garlic Bread 9', '4 ', NULL, NULL, NULL, 'Active', ''),
(193, 0, NULL, '', 2, 114, 'JUST Prawn Cooked & Peeled 60/90 1kg', '2 ', NULL, NULL, NULL, 'Active', ''),
(194, 0, NULL, '', 2, 116, 'MARKW Fries Stealth Twister 13.6kg', '1 ', NULL, NULL, NULL, 'Active', ''),
(195, 0, NULL, '', 2, 117, 'CWIDE Ice Cream Vanilla 4lt', '1 ', NULL, NULL, NULL, 'Active', ''),
(196, 0, NULL, '', 2, 120, 'FIAMA Penne Rigate 50g', '14 ', NULL, NULL, NULL, 'Active', ''),
(197, 0, NULL, '', 9, 125, 'Sara25', '120 ', NULL, NULL, NULL, 'Active', ''),
(198, 0, NULL, '', 2, 81, 'DECEC Lasagne Sheets 500g', '7 ', NULL, NULL, NULL, 'Active', ''),
(199, 0, NULL, '', 2, 84, 'GLOBL Croutons 500g', '1 ', NULL, NULL, NULL, 'Active', ''),
(200, 0, NULL, '', 2, 97, 'CASDU Cooking Wine Red 5ltr [2] 10lt', '1 ', NULL, NULL, NULL, 'Active', ''),
(201, 0, NULL, '', 2, 98, 'GLOBL Basil Leaves 500g', '2 ', NULL, NULL, NULL, 'Active', ''),
(202, 0, NULL, '', 2, 99, 'GLOBL Chilli Crushed [Flakes] 1kg', '1 ', NULL, NULL, NULL, 'Active', ''),
(203, 0, NULL, '', 2, 100, 'GLOBL Oregano Leaves 500g', '2 ', NULL, NULL, NULL, 'Active', ''),
(204, 0, NULL, '', 2, 101, 'NESTL Choc Buttons White SNOWCAP 5kg', '1 ', NULL, NULL, NULL, 'Active', ''),
(205, 0, NULL, '', 2, 102, 'EDLYN GF Topping Chocolate 3lt', '3 ', NULL, NULL, NULL, 'Active', ''),
(206, 0, NULL, '', 2, 118, 'PRSTL Tiramisu Sliced [15] 2.15kg 1-321', '1 ', NULL, NULL, NULL, 'Active', ''),
(207, 0, NULL, '', 2, 119, 'MR.CH Fries Beer Battered Steak 12kg', '1 ', NULL, NULL, NULL, 'Active', ''),
(208, 0, NULL, '5011', 9, 126, 'test dry', '12 ', NULL, NULL, NULL, 'Active', ''),
(209, 0, NULL, '5012', 3, 66, 'Chicken Thigh Meat', '10 ', NULL, NULL, NULL, 'Active', ''),
(210, 0, NULL, '5012', 7, 71, 'Oreo', '3 ', NULL, NULL, NULL, 'Active', ''),
(211, 0, NULL, '5012', 7, 72, 'Freezer Bag Medium', '5 ', NULL, NULL, NULL, 'Active', ''),
(212, 0, NULL, '5012', 8, 73, 'Cherry Tomato', '2 ', NULL, NULL, NULL, 'Active', ''),
(213, 0, NULL, '5012', 8, 74, 'Marinara Mix', '2 ', NULL, NULL, NULL, 'Active', ''),
(214, 0, NULL, '5012', 1, 78, 'tset', '435 ', NULL, NULL, NULL, 'Active', ''),
(215, 0, NULL, '5012', 2, 82, 'BENFU Pizza Flour 12.5kg', '4 ', NULL, NULL, NULL, 'Active', ''),
(216, 0, NULL, '5012', 2, 85, 'MAGGI GF Gravy Rich Mix 2kg', '2 ', NULL, NULL, NULL, 'Active', ''),
(217, 0, NULL, '5012', 2, 86, 'CWIDE Tomato Sauce 4ltr', '3 ', NULL, NULL, NULL, 'Active', ''),
(218, 0, NULL, '5012', 2, 89, 'MASTF Chilli Sauce Hot 3lt', '2 ', NULL, NULL, NULL, 'Active', ''),
(219, 0, NULL, '5013', 10, 129, 'DryPack', '138 ', NULL, NULL, NULL, 'Active', ''),
(220, 0, NULL, '5014', 7, 75, 'Bundi', '1 ', NULL, NULL, NULL, 'Active', ''),
(221, 0, NULL, '5014', 7, 76, 'Can Drinks', '6 ', NULL, NULL, NULL, 'Active', ''),
(222, 0, NULL, '5014', 7, 77, 'Mount Franklin', '2 ', NULL, NULL, NULL, 'Active', ''),
(223, 0, NULL, '5014', 2, 83, 'GLOBL Bread Improver 500g', '5 ', NULL, NULL, NULL, 'Active', ''),
(224, 0, NULL, '5015', 2, 90, 'FMAID Sweet Chilli Sauce 2lt', '2 ', NULL, NULL, NULL, 'Active', ''),
(225, 0, NULL, '5016', 2, 92, 'ZOOSH Caesar Dressing 2.4kg', '2 ', NULL, NULL, NULL, 'Active', ''),
(226, 0, NULL, '5018', 2, 111, 'ALPI Anchovie Tin Oil 720g [Italy]', '2 ', NULL, NULL, NULL, 'Active', ''),
(227, 0, NULL, '5019', 2, 115, 'S/BER Four Berry Mix Frozen 1kg', '2 ', NULL, NULL, NULL, 'Active', ''),
(228, 0, NULL, '5020', 5, 124, 'Perfect Cheese', '5 ', NULL, NULL, NULL, 'Active', ''),
(229, 0, NULL, '5021', 14, 131, 'Cake', '55', NULL, NULL, NULL, 'Active', ''),
(230, 0, NULL, '5022', 9, 132, 'Cook', '0 ', NULL, NULL, NULL, 'Active', ''),
(231, 0, NULL, '5023', 9, 130, 'Goods', '1550 ', NULL, NULL, NULL, 'Active', ''),
(232, 17, NULL, '5024', 15, 136, 'Wheat', '50 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(233, 17, NULL, '5024', 15, 134, 'Biscuit', '100 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(234, 17, NULL, '5024', 15, 135, 'Cook', '50 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(235, 17, NULL, '5024', 15, 136, 'Wheat', '50 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(236, 17, NULL, '5025', 15, 135, 'Cook', '50 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(237, 17, NULL, '5025', 15, 135, 'Cook', '50 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(238, 17, NULL, '5026', 15, 133, 'Whear', '40 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(239, 17, NULL, '5026', 15, 134, 'Biscuit', '100 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(240, 17, NULL, '5027', 15, 136, 'Wheat', '50 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(241, 17, NULL, '5028', 15, 137, 'Chips', '500 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(242, 28, NULL, '5029', 16, 138, 'Chicken Thigh Meat', '20 ', NULL, NULL, NULL, 'Active', 'bxnh9y'),
(243, 28, NULL, '5029', 16, 139, 'Small Breast 200gms', '7 ', NULL, NULL, NULL, 'Active', 'bxnh9y'),
(244, 17, NULL, '5030', 19, 189, '9ï¿½ PIZZA BOX TEXT', '300 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(245, 17, NULL, '5030', 19, 190, '12ï¿½ PIZZA BOX TEXT', '400 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(246, 17, NULL, '5030', 19, 198, 'DINNER CLAM BROWN KRAFT', '1 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(247, 17, NULL, '5031', 18, 199, 'FIAMA Penne Rigate 500g', '30 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(248, 17, NULL, '5031', 18, 200, 'FIAMA Spaghetti 5kg', '3 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(249, 17, NULL, '5031', 18, 201, 'DECEC Lasagne Sheets 500g', '10 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(250, 17, NULL, '5031', 18, 202, 'BENFU Pizza Flour 12.5kg', '8 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(251, 17, NULL, '5031', 18, 203, 'GLOBL Bread Improver 500g', '10 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(252, 17, NULL, '5031', 18, 204, 'GLOBL Croutons 500g', '2 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(253, 17, NULL, '5031', 18, 206, 'CWIDE Tomato Sauce 4ltr', '3 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(254, 17, NULL, '5031', 18, 208, 'CWIDE BBQ Sauce 4ltr', '3 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(255, 17, NULL, '5031', 18, 210, 'FMAID Sweet Chilli Sauce 2lt', '2 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(256, 17, NULL, '5031', 18, 211, 'FMAID Garlic Aioli Sauce 2ltr', '2 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(257, 17, NULL, '5032', 18, 216, 'CASDU Cooking Wine White 5ltr [2] 10lt', '1 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(258, 17, NULL, '5032', 18, 217, 'CASDU Cooking Wine Red 5ltr [2] 10lt', '1 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(259, 17, NULL, '5032', 18, 218, 'GLOBL Basil Leaves 500g', '2 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(260, 17, NULL, '5032', 18, 219, 'GLOBL Chilli Crushed [Flakes] 1kg', '1 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(261, 17, NULL, '5032', 18, 220, 'GLOBL Oregano Leaves 500g', '2 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(262, 17, NULL, '5032', 18, 222, 'EDLYN GF Topping Chocolate 3lt', '3 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(263, 35, NULL, '5033', 20, 225, 'test pro1', '50', NULL, NULL, NULL, 'Active', 'ni8lxh'),
(264, 17, NULL, '5034', 19, 196, 'JALAPENO SLICED A10', '1 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(265, 17, NULL, '5034', 18, 205, 'MAGGI GF Gravy Rich Mix 2kg', '2 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(266, 17, NULL, '5034', 18, 209, 'MASTF Chilli Sauce Hot 3lt', '2 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(267, 17, NULL, '5034', 19, 191, 'OLIVES KALAMATTA 10KG', '1 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(268, 17, NULL, '5034', 19, 195, 'PEPPERS FIRE ROASTED 4.1KG', '1 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(269, 17, NULL, '5034', 18, 207, 'SUNSH BBQ Hickory Smoked 3ltr', '3 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(270, 17, NULL, '5034', 19, 224, 'test', '50 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(271, 17, NULL, '5035', 19, 267, '12 PIZZA BOX TEXT', '400 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(272, 17, NULL, '5035', 19, 228, '12ï¿½ PIZZA BOX TEXT', '400 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(273, 17, NULL, '5035', 19, 237, '12ï¿½ PIZZA BOX TEXT', '400 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(274, 17, NULL, '5035', 19, 246, '12ï¿½ PIZZA BOX TEXT', '400 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(275, 17, NULL, '5035', 19, 256, '12ï¿½ PIZZA BOX TEXT', '400 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(276, 17, NULL, '5035', 19, 266, '9 PIZZA BOX TEXT', '300 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(277, 17, NULL, '5035', 19, 255, '9ï¿½ PIZZA BOX TEXT', '300 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(278, 17, NULL, '5035', 19, 265, '9ï¿½ PIZZA BOX TEXT', '300 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(279, 17, NULL, '5035', 19, 236, 'DINNER CLAM BROWN KRAFT', '1 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(280, 17, NULL, '5035', 19, 245, 'DINNER CLAM BROWN KRAFT', '1 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(281, 17, NULL, '5035', 18, 215, 'MASTF Ranch Dressing 2.4kg', '2 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(282, 17, NULL, '5035', 18, 223, 'MONTF Bocconcini 1kg', '2 ', NULL, NULL, NULL, 'Active', 'k8thse'),
(283, 17, NULL, '5036', 19, 254, 'DINNER CLAM BROWN KRAFT', '9', NULL, NULL, NULL, 'Active', 'k8thse'),
(284, 17, NULL, '5036', 18, 214, 'ZOOSH Italian Dressing 2.6kg', '19', NULL, NULL, NULL, 'Active', 'k8thse');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `descriptions` varchar(200) NOT NULL,
  `comp_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku_id`, `name`, `qty`, `descriptions`, `comp_id`) VALUES
(1, 0, 'Product name', 0, 'Descriptions', ''),
(2, 12456, 'Polo shirt', 4, 'Polo shirts always nice.', ''),
(3, 12457, 'Cotton shirts', 1, 'Cotton colth  data.', '');

-- --------------------------------------------------------

--
-- Table structure for table `stocktake_cart_items`
--

CREATE TABLE `stocktake_cart_items` (
  `intId` int(50) NOT NULL,
  `intAdminId` int(20) NOT NULL,
  `intStockId` int(50) DEFAULT NULL,
  `intorderId` varchar(150) NOT NULL,
  `intProId` int(50) DEFAULT NULL,
  `varProName` varchar(250) DEFAULT NULL,
  `varProQty` int(50) DEFAULT NULL,
  `varProUnit` varchar(100) DEFAULT NULL,
  `varProPrice` int(200) DEFAULT NULL,
  `ItemType` varchar(150) NOT NULL,
  `varStatus` varchar(50) DEFAULT 'Active',
  `comp_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocktake_cart_items`
--

INSERT INTO `stocktake_cart_items` (`intId`, `intAdminId`, `intStockId`, `intorderId`, `intProId`, `varProName`, `varProQty`, `varProUnit`, `varProPrice`, `ItemType`, `varStatus`, `comp_id`) VALUES
(1, 0, 1, '', 4, 'test pro', 12, '23', 1234, 'Stock', 'Active', ''),
(2, 0, 4, '', 41, 'GARBAGE BAGS 80L ', 85, 'slv', 4, 'Stock', 'Active', ''),
(3, 0, 4, '', 41, 'GARBAGE BAGS 80L ', 25, 'slv', 4, 'Stock', 'Active', ''),
(4, 0, 5, '', 19, 'VEGETABLE OIL 2LT', 15, 'can', 36, 'Stock', 'Active', ''),
(5, 0, 6, '', 19, 'VEGETABLE OIL 2LT', 20, 'can', 36, 'Stock', 'Active', ''),
(6, 0, 7, '', 22, 'SNACK BOX MEDIUM', 15, 'carton', 38, 'Stock', 'Active', ''),
(7, 0, 7, '', 20, 'DINNER CLAM BROWN KRAFT', 80, 'carton', 47, 'Stock', 'Active', ''),
(8, 0, 8, '', 16, 'PINEAPPLE CHOICE CUT', 20, 'carton', 36, 'Order', 'Active', ''),
(9, 0, 9, '', 21, 'SOS BAG BROWN #16', 10, 'carton', 35, 'Stock', 'Active', ''),
(10, 0, 9, '', 17, 'PEPPERS FIRE ROASTED 4.1KG', 5, 'Carton', 13, 'Stock', 'Active', ''),
(11, 0, 9, '', 17, 'PEPPERS FIRE ROASTED 4.1KG', 5, 'Carton', 13, 'Stock', 'Active', ''),
(12, 0, 10, '', 65, 'Corn Flour', 5, 'Bag', 20, 'Stock', 'Active', ''),
(13, 0, 10, '', 65, 'Corn Flour', 5, 'Bag', 20, 'Stock', 'Active', ''),
(14, 0, 11, '', 19, 'VEGETABLE OIL 2LT', 2, 'can', 36, 'Order', 'Active', ''),
(15, 0, 12, '', 97, 'CASDU Cooking Wine Red 5ltr [2] 10lt', 2, 'Ctn', 28, 'Stock', 'Active', ''),
(16, 0, 12, '', 98, 'GLOBL Basil Leaves 500g', 3, 'Bag', 6, 'Stock', 'Active', ''),
(17, 0, 12, '', 99, 'GLOBL Chilli Crushed [Flakes] 1kg', 1, 'Bag', 14, 'Stock', 'Active', ''),
(18, 0, 12, '', 100, 'GLOBL Oregano Leaves 500g', 4, 'Bag', 6, 'Stock', 'Active', ''),
(19, 0, 12, '', 101, 'NESTL Choc Buttons White SNOWCAP 5kg', 0, 'Box', 38, 'Stock', 'Active', ''),
(20, 0, 12, '', 102, 'EDLYN GF Topping Chocolate 3lt', 0, 'Btl', 9, 'Stock', 'Active', ''),
(21, 0, 12, '', 118, 'PRSTL Tiramisu Sliced [15] 2.15kg 1-321', 0, 'Tray', 28, 'Stock', 'Active', ''),
(22, 0, 12, '', 119, 'MR.CH Fries Beer Battered Steak 12kg', 0, 'Ctn', 40, 'Stock', 'Active', ''),
(23, 0, 12, '', 119, 'MR.CH Fries Beer Battered Steak 12kg', 0, 'Ctn', 40, 'Stock', 'Active', ''),
(24, 0, 13, '', 126, 'test dry', 13, '2', 320, 'Stock', 'Active', ''),
(25, 0, 13, '', 126, 'test dry', 13, '2', 320, 'Stock', 'Active', ''),
(26, 0, 14, '', 66, 'Chicken Thigh Meat', 10, 'kg', 8, 'Stock', 'Active', ''),
(27, 0, 14, '', 71, 'Oreo', 3, 'unit', 3, 'Stock', 'Active', ''),
(28, 0, 14, '', 72, 'Freezer Bag Medium', 5, 'unit', 1, 'Stock', 'Active', ''),
(29, 0, 14, '', 73, 'Cherry Tomato', 2, 'unit', 2, 'Stock', 'Active', ''),
(30, 0, 14, '', 74, 'Marinara Mix', 2, 'unit', 13, 'Stock', 'Active', ''),
(31, 0, 14, '', 78, 'tset', 435, '45', 123, 'Stock', 'Active', ''),
(32, 0, 14, '', 82, 'BENFU Pizza Flour 12.5kg', 4, 'Bag', 13, 'Stock', 'Active', ''),
(33, 0, 14, '', 85, 'MAGGI GF Gravy Rich Mix 2kg', 2, 'Tub', 24, 'Stock', 'Active', ''),
(34, 0, 14, '', 86, 'CWIDE Tomato Sauce 4ltr', 3, 'Btl', 8, 'Stock', 'Active', ''),
(35, 0, 14, '', 89, 'MASTF Chilli Sauce Hot 3lt', 2, 'Btl', 19, 'Stock', 'Active', ''),
(36, 0, 14, '', 89, 'MASTF Chilli Sauce Hot 3lt', 2, 'Btl', 19, 'Stock', 'Active', ''),
(37, 0, 15, '', 74, 'Marinara Mix', 1, 'unit', 13, 'Order', 'Active', ''),
(38, 0, 16, '', 129, 'DryPack', 138, 'Air Cover', 400, 'Stock', 'Active', ''),
(39, 0, 16, '', 129, 'DryPack', 138, 'Air Cover', 400, 'Stock', 'Active', ''),
(40, 0, 17, '', 129, 'DryPack', 0, 'Air Cover', 400, 'Order', 'Active', ''),
(41, 0, 17, '', 129, 'DryPack', 0, 'Air Cover', 400, 'Order', 'Active', ''),
(42, 0, 17, '', 129, 'DryPack', 0, 'Air Cover', 400, 'Order', 'Active', ''),
(43, 0, 17, '', 129, 'DryPack', 0, 'Air Cover', 400, 'Order', 'Active', ''),
(44, 0, 18, '', 129, 'DryPack', 0, 'Air Cover', 400, 'Order', 'Active', ''),
(45, 0, 19, '', 81, 'DECEC Lasagne Sheets 500g', 0, 'Pkt', 5, 'Stock', 'Active', ''),
(46, 0, 19, '', 84, 'GLOBL Croutons 500g', 0, 'Bag', 4, 'Stock', 'Active', ''),
(47, 0, 19, '', 84, 'GLOBL Croutons 500g', 0, 'Bag', 4, 'Stock', 'Active', ''),
(48, 0, 20, '', 125, 'Sara25', 0, 'Test', 120, 'Stock', 'Active', ''),
(49, 0, 20, '', 125, 'Sara25', 0, 'Test', 120, 'Stock', 'Active', ''),
(50, 0, 21, '', 129, 'DryPack', 0, 'Air Cover', 400, 'Order', 'Active', ''),
(51, 0, 22, '', 129, 'DryPack', 0, 'Air Cover', 400, 'Order', 'Active', ''),
(52, 0, 22, '', 129, 'DryPack', 0, 'Air Cover', 400, 'Order', 'Active', ''),
(53, 0, 22, '', 129, 'DryPack', 0, 'Air Cover', 400, 'Order', 'Active', ''),
(54, 0, 22, '', 129, 'DryPack', 0, 'Air Cover', 400, 'Order', 'Active', ''),
(55, 0, 22, '', 129, 'DryPack', 0, 'Air Cover', 400, 'Order', 'Active', ''),
(56, 0, 22, '', 129, 'DryPack', 0, 'Air Cover', 400, 'Order', 'Active', ''),
(57, 0, 22, '', 129, 'DryPack', 0, 'Air Cover', 400, 'Order', 'Active', ''),
(58, 0, 23, '', 75, 'Bundi', 1, 'Carton', 13, 'Stock', 'Active', ''),
(59, 0, 23, '', 76, 'Can Drinks', 6, 'Carton', 16, 'Stock', 'Active', ''),
(60, 0, 23, '', 77, 'Mount Franklin', 2, 'Carton', 8, 'Stock', 'Active', ''),
(61, 0, 23, '', 83, 'GLOBL Bread Improver 500g', 5, 'Bag', 6, 'Stock', 'Active', ''),
(62, 0, 23, '', 83, 'GLOBL Bread Improver 500g', 5, 'Bag', 6, 'Stock', 'Active', ''),
(63, 0, 24, '', 32, 'FOIL CONTAINER 446 - 100SLV', 0, 'slv', 16, 'Stock', 'Active', ''),
(64, 0, 24, '', 98, 'GLOBL Basil Leaves 500g', 0, 'Bag', 6, 'Stock', 'Active', ''),
(65, 0, 24, '', 85, 'MAGGI GF Gravy Rich Mix 2kg', 0, 'Tub', 24, 'Stock', 'Active', ''),
(66, 0, 24, '', 24, 'PLASTIC CONT. RND 280ML', 0, 'slv', 6, 'Stock', 'Active', ''),
(67, 0, 24, '', 24, 'PLASTIC CONT. RND 280ML', 0, 'slv', 6, 'Stock', 'Active', ''),
(68, 0, 25, '', 90, 'FMAID Sweet Chilli Sauce 2lt', 2, 'Btl', 18, 'Stock', 'Active', ''),
(69, 0, 25, '', 90, 'FMAID Sweet Chilli Sauce 2lt', 2, 'Btl', 18, 'Stock', 'Active', ''),
(70, 0, 26, '', 92, 'ZOOSH Caesar Dressing 2.4kg', 2, 'Btl', 19, 'Stock', 'Active', ''),
(71, 0, 26, '', 92, 'ZOOSH Caesar Dressing 2.4kg', 2, 'Btl', 19, 'Stock', 'Active', ''),
(72, 0, 31, '', 111, 'ALPI Anchovie Tin Oil 720g [Italy]', 2, 'Tin', 14, 'Stock', 'Active', ''),
(73, 0, 31, '', 111, 'ALPI Anchovie Tin Oil 720g [Italy]', 2, 'Tin', 14, 'Stock', 'Active', ''),
(74, 0, 33, '', 115, 'S/BER Four Berry Mix Frozen 1kg', 2, 'Bag', 9, 'Stock', 'Active', ''),
(75, 0, 34, '', 124, 'Perfect Cheese', 5, 'Unit', 156, 'Stock', 'Active', 'xdf123'),
(76, 17, 36, '', 136, 'Wheat', 50, '', 25, 'Stock', 'Active', 'k8thse'),
(77, 17, 36, '', 136, 'Wheat', 50, '', 25, 'Stock', 'Active', 'k8thse'),
(78, 17, 37, '', 137, 'Chips', 500, 'Packs', 10, 'Stock', 'Active', 'k8thse'),
(79, 17, 41, '', 134, 'Biscuit', 20, 'Box', 10, 'Stock', 'Active', 'k8thse'),
(80, 17, 42, '', 137, 'Chips', 10, 'Packs', 10, 'Stock', 'Active', 'k8thse'),
(81, 17, 43, '', 254, 'DINNER CLAM BROWN KRAFT', 9, 'carton', 47, 'Stock', 'Active', 'k8thse'),
(82, 17, 43, '', 214, 'ZOOSH Italian Dressing 2.6kg', 19, 'Btl', 15, 'Stock', 'Active', 'k8thse');

-- --------------------------------------------------------

--
-- Table structure for table `stocktake_order`
--

CREATE TABLE `stocktake_order` (
  `intId` int(50) NOT NULL,
  `intAdminId` int(20) NOT NULL,
  `intOrderId` int(50) NOT NULL,
  `intProId` int(50) NOT NULL,
  `intqty` int(50) NOT NULL,
  `checkoutStatus` varchar(200) NOT NULL,
  `suplierId` int(50) NOT NULL,
  `curdate` date NOT NULL,
  `status` int(50) NOT NULL DEFAULT '1',
  `comp_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocktake_order`
--

INSERT INTO `stocktake_order` (`intId`, `intAdminId`, `intOrderId`, `intProId`, `intqty`, `checkoutStatus`, `suplierId`, `curdate`, `status`, `comp_id`) VALUES
(1, 0, 5001, 53, 0, 'onprocess', 0, '0000-00-00', 1, '0'),
(2, 0, 5001, 54, 0, 'onprocess', 0, '0000-00-00', 1, '0'),
(3, 0, 5001, 55, 0, 'onprocess', 0, '0000-00-00', 1, '0'),
(4, 0, 5002, 57, 0, 'onprocess', 0, '0000-00-00', 1, '0'),
(5, 0, 5002, 58, 0, 'onprocess', 0, '0000-00-00', 1, '0'),
(6, 0, 5002, 59, 0, 'onprocess', 0, '0000-00-00', 1, '0'),
(7, 0, 5002, 60, 0, 'onprocess', 0, '0000-00-00', 1, '0'),
(8, 0, 5002, 67, 0, 'onprocess', 0, '0000-00-00', 1, '0'),
(9, 0, 5002, 68, 0, 'onprocess', 0, '0000-00-00', 1, '0'),
(10, 0, 5003, 56, 0, 'completed', 0, '0000-00-00', 1, '0'),
(11, 0, 5003, 61, 0, 'completed', 0, '0000-00-00', 1, '0'),
(12, 0, 5003, 62, 0, 'completed', 0, '0000-00-00', 1, '0'),
(13, 0, 5003, 70, 0, 'completed', 0, '0000-00-00', 1, '0'),
(14, 0, 5003, 79, 0, 'completed', 0, '0000-00-00', 1, '0'),
(15, 0, 5004, 63, 0, 'completed', 0, '0000-00-00', 1, '0'),
(16, 0, 5004, 69, 0, 'completed', 0, '0000-00-00', 1, '0'),
(17, 0, 5005, 64, 0, 'completed', 0, '0000-00-00', 1, '0'),
(18, 0, 5006, 65, 0, 'completed', 4, '0000-00-00', 0, '0'),
(19, 0, 5007, 80, 0, 'completed', 2, '0000-00-00', 1, '0'),
(20, 0, 5007, 87, 0, 'completed', 2, '0000-00-00', 1, '0'),
(21, 0, 5007, 88, 0, 'completed', 2, '0000-00-00', 1, '0'),
(22, 0, 5007, 91, 0, 'completed', 2, '0000-00-00', 1, '0'),
(23, 0, 5007, 94, 0, 'completed', 2, '0000-00-00', 1, '0'),
(24, 0, 5007, 95, 0, 'completed', 2, '0000-00-00', 1, '0'),
(25, 0, 5007, 103, 0, 'completed', 2, '0000-00-00', 1, '0'),
(26, 0, 5007, 104, 0, 'completed', 2, '0000-00-00', 1, '0'),
(27, 0, 5007, 105, 0, 'completed', 2, '0000-00-00', 1, '0'),
(28, 0, 5007, 106, 0, 'completed', 2, '0000-00-00', 1, '0'),
(29, 0, 5007, 107, 0, 'completed', 2, '0000-00-00', 1, '0'),
(30, 0, 5007, 108, 0, 'completed', 2, '0000-00-00', 1, '0'),
(31, 0, 5007, 109, 0, 'completed', 2, '0000-00-00', 1, '0'),
(32, 0, 5007, 110, 0, 'completed', 2, '0000-00-00', 1, '0'),
(33, 0, 5007, 112, 0, 'completed', 2, '0000-00-00', 1, '0'),
(34, 0, 5007, 113, 0, 'completed', 2, '0000-00-00', 1, '0'),
(35, 0, 5007, 114, 0, 'completed', 2, '0000-00-00', 1, '0'),
(36, 0, 5007, 116, 0, 'completed', 2, '0000-00-00', 1, '0'),
(37, 0, 5007, 117, 0, 'completed', 2, '0000-00-00', 1, '0'),
(38, 0, 5007, 120, 0, 'completed', 2, '0000-00-00', 1, '0'),
(39, 0, 5008, 125, 0, 'completed', 9, '0000-00-00', 0, '0'),
(40, 0, 5009, 81, 0, 'completed', 2, '0000-00-00', 0, '0'),
(41, 0, 5009, 84, 0, 'completed', 2, '0000-00-00', 0, '0'),
(42, 0, 5010, 97, 0, 'completed', 2, '0000-00-00', 0, '0'),
(43, 0, 5010, 98, 0, 'completed', 2, '0000-00-00', 0, '0'),
(44, 0, 5010, 99, 0, 'completed', 2, '0000-00-00', 0, '0'),
(45, 0, 5010, 100, 0, 'completed', 2, '0000-00-00', 0, '0'),
(46, 0, 5010, 101, 0, 'completed', 2, '0000-00-00', 0, '0'),
(47, 0, 5010, 102, 0, 'completed', 2, '0000-00-00', 0, '0'),
(48, 0, 5010, 118, 0, 'completed', 2, '0000-00-00', 0, '0'),
(49, 0, 5010, 119, 0, 'completed', 2, '0000-00-00', 0, '0'),
(50, 0, 5011, 126, 0, 'completed', 9, '2018-04-19', 0, '0'),
(51, 0, 5012, 66, 0, 'completed', 3, '2018-04-23', 0, '0'),
(52, 0, 5012, 71, 0, 'completed', 7, '2018-04-23', 0, '0'),
(53, 0, 5012, 72, 0, 'completed', 7, '2018-04-23', 0, '0'),
(54, 0, 5012, 73, 0, 'completed', 8, '2018-04-23', 0, '0'),
(55, 0, 5012, 74, 0, 'completed', 8, '2018-04-23', 0, '0'),
(56, 0, 5012, 78, 0, 'completed', 1, '2018-04-23', 0, '0'),
(57, 0, 5012, 82, 0, 'completed', 2, '2018-04-23', 0, '0'),
(58, 0, 5012, 85, 0, 'completed', 2, '2018-04-23', 0, '0'),
(59, 0, 5012, 86, 0, 'completed', 2, '2018-04-23', 0, '0'),
(60, 0, 5012, 89, 0, 'completed', 2, '2018-04-23', 0, '0'),
(61, 0, 5013, 129, 0, 'completed', 10, '2018-04-24', 0, '0'),
(62, 0, 5014, 75, 0, 'completed', 7, '2018-05-03', 0, '0'),
(63, 0, 5014, 76, 0, 'completed', 7, '2018-05-03', 0, '0'),
(64, 0, 5014, 77, 0, 'completed', 7, '2018-05-03', 0, '0'),
(65, 0, 5014, 83, 0, 'completed', 2, '2018-05-03', 0, '0'),
(66, 0, 5015, 90, 0, 'completed', 2, '2018-05-05', 0, '0'),
(67, 0, 5016, 92, 0, 'completed', 2, '2018-05-05', 0, '0'),
(68, 0, 5017, 93, 0, 'completed', 2, '2018-05-05', 1, '0'),
(69, 0, 5018, 111, 0, 'completed', 2, '2018-05-05', 0, '0'),
(70, 0, 5019, 115, 0, 'completed', 2, '2018-05-05', 0, '0'),
(71, 0, 5020, 124, 0, 'completed', 5, '2018-05-05', 0, '0'),
(72, 0, 5021, 131, 0, 'completed', 14, '2018-05-11', 1, 'xdf123'),
(73, 0, 5022, 132, 0, 'completed', 9, '2018-05-11', 1, 'xdf123'),
(74, 0, 5023, 130, 0, 'completed', 9, '2018-05-11', 1, 'xdf123'),
(75, 17, 5024, 134, 0, 'completed', 15, '2018-05-15', 1, 'k8thse'),
(76, 17, 5024, 135, 0, 'completed', 15, '2018-05-15', 1, 'k8thse'),
(77, 17, 5024, 136, 0, 'completed', 15, '2018-05-15', 1, 'k8thse'),
(78, 17, 5025, 135, 0, 'completed', 15, '2018-05-15', 1, 'k8thse'),
(79, 17, 5026, 133, 40, 'completed', 15, '2018-05-15', 1, 'k8thse'),
(80, 17, 5026, 134, 100, 'completed', 15, '2018-05-15', 1, 'k8thse'),
(81, 17, 5027, 136, 50, 'completed', 15, '2018-05-15', 0, 'k8thse'),
(82, 17, 5027, 136, 50, 'completed', 15, '2018-05-15', 0, 'k8thse'),
(83, 17, 5028, 137, 500, 'completed', 15, '2018-05-15', 0, 'k8thse'),
(84, 28, 5029, 138, 20, 'completed', 16, '2018-05-26', 1, 'bxnh9y'),
(85, 28, 5029, 139, 7, 'completed', 16, '2018-05-26', 1, 'bxnh9y'),
(86, 17, 5030, 189, 300, 'completed', 19, '2018-05-28', 1, 'k8thse'),
(87, 17, 5030, 190, 400, 'completed', 19, '2018-05-28', 1, 'k8thse'),
(88, 17, 5030, 198, 1, 'completed', 19, '2018-05-28', 1, 'k8thse'),
(89, 17, 5031, 199, 30, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(90, 17, 5031, 200, 3, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(91, 17, 5031, 201, 10, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(92, 17, 5031, 202, 8, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(93, 17, 5031, 203, 10, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(94, 17, 5031, 204, 2, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(95, 17, 5031, 206, 3, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(96, 17, 5031, 208, 3, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(97, 17, 5031, 210, 2, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(98, 17, 5031, 211, 2, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(99, 17, 5032, 216, 1, 'completed', 18, '2018-05-29', 1, 'k8thse'),
(100, 17, 5032, 217, 1, 'completed', 18, '2018-05-29', 1, 'k8thse'),
(101, 17, 5032, 218, 2, 'completed', 18, '2018-05-29', 1, 'k8thse'),
(102, 17, 5032, 219, 1, 'completed', 18, '2018-05-29', 1, 'k8thse'),
(103, 17, 5032, 220, 2, 'completed', 18, '2018-05-29', 1, 'k8thse'),
(104, 17, 5032, 222, 3, 'completed', 18, '2018-05-29', 1, 'k8thse'),
(105, 35, 5033, 225, 50, 'completed', 20, '2018-05-31', 1, 'ni8lxh'),
(106, 17, 5034, 196, 1, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(107, 17, 5034, 205, 2, 'completed', 18, '2018-06-01', 1, 'k8thse'),
(108, 17, 5034, 209, 2, 'completed', 18, '2018-06-01', 1, 'k8thse'),
(109, 17, 5034, 191, 1, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(110, 17, 5034, 195, 1, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(111, 17, 5034, 207, 3, 'completed', 18, '2018-06-01', 1, 'k8thse'),
(112, 17, 5034, 224, 50, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(113, 17, 5035, 267, 400, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(114, 17, 5035, 228, 400, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(115, 17, 5035, 237, 400, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(116, 17, 5035, 246, 400, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(117, 17, 5035, 256, 400, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(118, 17, 5035, 266, 300, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(119, 17, 5035, 255, 300, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(120, 17, 5035, 265, 300, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(121, 17, 5035, 236, 1, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(122, 17, 5035, 245, 1, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(123, 17, 5035, 215, 2, 'completed', 18, '2018-06-01', 1, 'k8thse'),
(124, 17, 5035, 223, 2, 'completed', 18, '2018-06-01', 1, 'k8thse'),
(125, 17, 5036, 254, 9, 'completed', 19, '2018-06-01', 0, 'k8thse'),
(126, 17, 5036, 214, 19, 'completed', 18, '2018-06-01', 0, 'k8thse');

-- --------------------------------------------------------

--
-- Table structure for table `stocktake_order_history`
--

CREATE TABLE `stocktake_order_history` (
  `intId` int(50) NOT NULL,
  `intAdminId` int(20) NOT NULL,
  `intOrderId` int(50) NOT NULL,
  `intProId` int(50) NOT NULL,
  `intqty` int(50) NOT NULL,
  `checkoutStatus` varchar(200) NOT NULL,
  `suplierId` int(50) NOT NULL,
  `curdate` date NOT NULL,
  `status` int(50) NOT NULL DEFAULT '1',
  `comp_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocktake_order_history`
--

INSERT INTO `stocktake_order_history` (`intId`, `intAdminId`, `intOrderId`, `intProId`, `intqty`, `checkoutStatus`, `suplierId`, `curdate`, `status`, `comp_id`) VALUES
(39, 0, 5003, 56, 0, 'completed', 0, '0000-00-00', 1, '0'),
(40, 0, 5003, 61, 0, 'completed', 0, '0000-00-00', 1, '0'),
(41, 0, 5003, 62, 0, 'completed', 0, '0000-00-00', 1, '0'),
(42, 0, 5003, 70, 0, 'completed', 0, '0000-00-00', 1, '0'),
(43, 0, 5003, 79, 0, 'completed', 0, '0000-00-00', 1, '0'),
(44, 0, 5004, 63, 0, 'completed', 0, '0000-00-00', 1, '0'),
(45, 0, 5004, 69, 0, 'completed', 0, '0000-00-00', 1, '0'),
(46, 0, 5005, 64, 0, 'completed', 0, '0000-00-00', 1, '0'),
(47, 0, 5006, 65, 0, 'completed', 4, '0000-00-00', 1, '0'),
(48, 0, 5007, 80, 0, 'completed', 2, '0000-00-00', 1, '0'),
(49, 0, 5007, 87, 0, 'completed', 2, '0000-00-00', 1, '0'),
(50, 0, 5007, 88, 0, 'completed', 2, '0000-00-00', 1, '0'),
(51, 0, 5007, 91, 0, 'completed', 2, '0000-00-00', 1, '0'),
(52, 0, 5007, 94, 0, 'completed', 2, '0000-00-00', 1, '0'),
(53, 0, 5007, 95, 0, 'completed', 2, '0000-00-00', 1, '0'),
(54, 0, 5007, 103, 0, 'completed', 2, '0000-00-00', 1, '0'),
(55, 0, 5007, 104, 0, 'completed', 2, '0000-00-00', 1, '0'),
(56, 0, 5007, 105, 0, 'completed', 2, '0000-00-00', 1, '0'),
(57, 0, 5007, 106, 0, 'completed', 2, '0000-00-00', 1, '0'),
(58, 0, 5007, 107, 0, 'completed', 2, '0000-00-00', 1, '0'),
(59, 0, 5007, 108, 0, 'completed', 2, '0000-00-00', 1, '0'),
(60, 0, 5007, 109, 0, 'completed', 2, '0000-00-00', 1, '0'),
(61, 0, 5007, 110, 0, 'completed', 2, '0000-00-00', 1, '0'),
(62, 0, 5007, 112, 0, 'completed', 2, '0000-00-00', 1, '0'),
(63, 0, 5007, 113, 0, 'completed', 2, '0000-00-00', 1, '0'),
(64, 0, 5007, 114, 0, 'completed', 2, '0000-00-00', 1, '0'),
(65, 0, 5007, 116, 0, 'completed', 2, '0000-00-00', 1, '0'),
(66, 0, 5007, 117, 0, 'completed', 2, '0000-00-00', 1, '0'),
(67, 0, 5007, 120, 0, 'completed', 2, '0000-00-00', 1, '0'),
(68, 0, 5008, 125, 0, 'completed', 9, '0000-00-00', 1, '0'),
(69, 0, 5009, 81, 0, 'completed', 2, '0000-00-00', 1, '0'),
(70, 0, 5009, 84, 0, 'completed', 2, '0000-00-00', 1, '0'),
(71, 0, 5010, 97, 0, 'completed', 2, '0000-00-00', 1, '0'),
(72, 0, 5010, 98, 0, 'completed', 2, '0000-00-00', 1, '0'),
(73, 0, 5010, 99, 0, 'completed', 2, '0000-00-00', 1, '0'),
(74, 0, 5010, 100, 0, 'completed', 2, '0000-00-00', 1, '0'),
(75, 0, 5010, 101, 0, 'completed', 2, '0000-00-00', 1, '0'),
(76, 0, 5010, 102, 0, 'completed', 2, '0000-00-00', 1, '0'),
(77, 0, 5010, 118, 0, 'completed', 2, '0000-00-00', 1, '0'),
(78, 0, 5010, 119, 0, 'completed', 2, '0000-00-00', 1, '0'),
(79, 0, 5011, 126, 0, 'completed', 9, '2018-04-19', 1, '0'),
(80, 0, 5012, 66, 0, 'completed', 3, '2018-04-23', 1, '0'),
(81, 0, 5012, 71, 0, 'completed', 7, '2018-04-23', 1, '0'),
(82, 0, 5012, 72, 0, 'completed', 7, '2018-04-23', 1, '0'),
(83, 0, 5012, 73, 0, 'completed', 8, '2018-04-23', 1, '0'),
(84, 0, 5012, 74, 0, 'completed', 8, '2018-04-23', 1, '0'),
(85, 0, 5012, 78, 0, 'completed', 1, '2018-04-23', 1, '0'),
(86, 0, 5012, 82, 0, 'completed', 2, '2018-04-23', 1, '0'),
(87, 0, 5012, 85, 0, 'completed', 2, '2018-04-23', 1, '0'),
(88, 0, 5012, 86, 0, 'completed', 2, '2018-04-23', 1, '0'),
(89, 0, 5012, 89, 0, 'completed', 2, '2018-04-23', 1, '0'),
(90, 0, 5013, 129, 0, 'completed', 10, '2018-04-24', 1, '0'),
(91, 0, 5014, 75, 0, 'completed', 7, '2018-05-03', 1, '0'),
(92, 0, 5014, 76, 0, 'completed', 7, '2018-05-03', 1, '0'),
(93, 0, 5014, 77, 0, 'completed', 7, '2018-05-03', 1, '0'),
(94, 0, 5014, 83, 0, 'completed', 2, '2018-05-03', 1, '0'),
(95, 0, 5015, 90, 0, 'completed', 2, '2018-05-05', 1, '0'),
(96, 0, 5016, 92, 0, 'completed', 2, '2018-05-05', 1, '0'),
(97, 0, 5017, 93, 0, 'completed', 2, '2018-05-05', 1, '0'),
(98, 0, 5018, 111, 0, 'completed', 2, '2018-05-05', 1, '0'),
(99, 0, 5019, 115, 0, 'completed', 2, '2018-05-05', 1, '0'),
(100, 0, 5020, 124, 0, 'completed', 5, '2018-05-05', 1, '0'),
(101, 0, 5021, 131, 0, 'completed', 14, '2018-05-11', 1, ''),
(102, 0, 5022, 132, 0, 'completed', 9, '2018-05-11', 1, ''),
(103, 0, 5023, 130, 0, 'completed', 9, '2018-05-11', 1, ''),
(104, 17, 5027, 136, 50, 'completed', 15, '2018-05-15', 1, 'k8thse'),
(105, 17, 5028, 137, 500, 'completed', 15, '2018-05-15', 1, 'k8thse'),
(106, 28, 5029, 138, 20, 'completed', 16, '2018-05-26', 1, 'bxnh9y'),
(107, 28, 5029, 139, 7, 'completed', 16, '2018-05-26', 1, 'bxnh9y'),
(108, 17, 5030, 189, 300, 'completed', 19, '2018-05-28', 1, 'k8thse'),
(109, 17, 5030, 190, 400, 'completed', 19, '2018-05-28', 1, 'k8thse'),
(110, 17, 5030, 198, 1, 'completed', 19, '2018-05-28', 1, 'k8thse'),
(111, 17, 5031, 199, 30, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(112, 17, 5031, 200, 3, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(113, 17, 5031, 201, 10, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(114, 17, 5031, 202, 8, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(115, 17, 5031, 203, 10, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(116, 17, 5031, 204, 2, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(117, 17, 5031, 206, 3, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(118, 17, 5031, 208, 3, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(119, 17, 5031, 210, 2, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(120, 17, 5031, 211, 2, 'completed', 18, '2018-05-28', 1, 'k8thse'),
(121, 17, 5032, 216, 1, 'completed', 18, '2018-05-29', 1, 'k8thse'),
(122, 17, 5032, 217, 1, 'completed', 18, '2018-05-29', 1, 'k8thse'),
(123, 17, 5032, 218, 2, 'completed', 18, '2018-05-29', 1, 'k8thse'),
(124, 17, 5032, 219, 1, 'completed', 18, '2018-05-29', 1, 'k8thse'),
(125, 17, 5032, 220, 2, 'completed', 18, '2018-05-29', 1, 'k8thse'),
(126, 17, 5032, 222, 3, 'completed', 18, '2018-05-29', 1, 'k8thse'),
(127, 35, 5033, 225, 50, 'completed', 20, '2018-05-31', 1, 'ni8lxh'),
(128, 17, 5034, 196, 1, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(129, 17, 5034, 205, 2, 'completed', 18, '2018-06-01', 1, 'k8thse'),
(130, 17, 5034, 209, 2, 'completed', 18, '2018-06-01', 1, 'k8thse'),
(131, 17, 5034, 191, 1, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(132, 17, 5034, 195, 1, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(133, 17, 5034, 207, 3, 'completed', 18, '2018-06-01', 1, 'k8thse'),
(134, 17, 5034, 224, 50, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(135, 17, 5035, 267, 400, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(136, 17, 5035, 228, 400, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(137, 17, 5035, 237, 400, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(138, 17, 5035, 246, 400, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(139, 17, 5035, 256, 400, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(140, 17, 5035, 266, 300, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(141, 17, 5035, 255, 300, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(142, 17, 5035, 265, 300, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(143, 17, 5035, 236, 1, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(144, 17, 5035, 245, 1, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(145, 17, 5035, 215, 2, 'completed', 18, '2018-06-01', 1, 'k8thse'),
(146, 17, 5035, 223, 2, 'completed', 18, '2018-06-01', 1, 'k8thse'),
(147, 17, 5036, 254, 9, 'completed', 19, '2018-06-01', 1, 'k8thse'),
(148, 17, 5036, 214, 19, 'completed', 18, '2018-06-01', 1, 'k8thse');

-- --------------------------------------------------------

--
-- Table structure for table `stock_tacking`
--

CREATE TABLE `stock_tacking` (
  `intId` int(11) NOT NULL,
  `intAdminId` int(20) NOT NULL,
  `intStokCode` varchar(200) DEFAULT NULL,
  `varStockName` varchar(250) DEFAULT NULL,
  `intSupID` int(50) DEFAULT NULL,
  `varNotes` longtext,
  `varStatus` varchar(100) DEFAULT 'Active',
  `comp_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_tacking`
--

INSERT INTO `stock_tacking` (`intId`, `intAdminId`, `intStokCode`, `varStockName`, `intSupID`, `varNotes`, `varStatus`, `comp_id`) VALUES
(1, 0, '123', 'test', 1, '                test', 'Active', ''),
(6, 0, '25635', 'swet', 1, '                        Test', 'Active', ''),
(7, 0, '965236', 'Fecky', 1, '                        Test', 'Active', ''),
(9, 0, 'SD120', 'SdfStock', 9, 'Test', 'Active', ''),
(10, 0, '185006', 'stock418', 0, '', 'Active', ''),
(11, 0, '', '', 0, '                        ', 'Active', ''),
(12, 0, '425010', 'stock242', 2, '', 'Active', ''),
(13, 0, '505011', 'stock950', 9, '', 'Active', ''),
(14, 0, '515012', 'stock351', 3, '', 'Active', ''),
(15, 0, '', '', 0, '                        ', 'Active', ''),
(16, 0, '615013', 'stock1061', 10, '', 'Active', ''),
(17, 0, '', '', 0, '                        Test', 'Active', ''),
(18, 0, '', '', 0, '   Test                     ', 'Active', ''),
(19, 0, '405009', 'stock240', 2, 'test', 'Active', ''),
(20, 0, '395008', 'stock939', 9, '', 'Active', ''),
(21, 0, '', '', 0, '                        Test', 'Active', ''),
(22, 0, '', '', 0, '                        Test', 'Active', ''),
(23, 0, '625014', 'stock762', 7, 'Google', 'Active', ''),
(24, 0, '7894', 'stock', 1, '', 'Active', ''),
(25, 0, '665015', 'stock266', 2, '', 'Active', ''),
(26, 0, '675016', 'stock267', 2, '', 'Active', ''),
(27, 0, '195007', 'stock219', 2, 'sdfsdf', 'Active', ''),
(28, 0, '685017', 'stock268', 2, '', 'Active', ''),
(29, 0, '685017', 'stock268', 2, '', 'Active', ''),
(30, 0, '685017', 'stock268', 2, '', 'Active', ''),
(31, 0, '695018', 'stock269', 2, '', 'Active', ''),
(32, 0, '685017', 'stock268', 2, '', 'Active', ''),
(33, 0, '705019', 'stock270', 2, '', 'Active', ''),
(34, 0, '715020', 'stock571', 5, '', 'Active', 'xdf123'),
(35, 0, '', '', 0, '                        ', 'Active', ''),
(36, 17, '815027', 'stock1581', 15, '', 'Active', 'k8thse'),
(37, 17, '835028', 'stock1583', 15, '', 'Active', 'k8thse'),
(38, 17, '', '', 0, '                        ', 'Active', 'k8thse'),
(39, 17, '', '', 0, '                        ', 'Active', 'k8thse'),
(40, 17, '', '', 0, '                        dsfsdf', 'Active', 'k8thse'),
(41, 17, '7894', 'stock', 15, '', 'Active', 'k8thse'),
(42, 17, '1452', 'stock', 15, '', 'Active', 'k8thse'),
(43, 17, '1255036', 'stock19125', 19, '', 'Active', 'k8thse'),
(44, 17, '', '', 0, '                        ', 'Active', 'k8thse');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(20) NOT NULL,
  `intAdminId` int(20) NOT NULL,
  `subscript_id` varchar(50) NOT NULL,
  `comp_id` varchar(30) NOT NULL,
  `subscript_date` date NOT NULL,
  `subscript_edate` date NOT NULL,
  `subscript_type` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `intAdminId`, `subscript_id`, `comp_id`, `subscript_date`, `subscript_edate`, `subscript_type`, `status`) VALUES
(1, 1, 'kjhgfvkhgsadvjhsdvf', 'xdf123', '2018-05-01', '2018-05-12', '2', 'Active'),
(2, 1, 'kasgvdkjasvdgahvsdjvhasd654654', 'ser123', '2018-05-02', '2018-05-15', '2', 'Active'),
(3, 1, '5af98b6f0ab96', 'g81xtu', '2018-05-14', '2018-07-14', '1', 'Active'),
(4, 1, '5af98aaaeaf3d', 'k8thse', '2018-05-14', '2018-07-14', '1', 'Active'),
(5, 1, '5af98aef46aa0', 'fir1ht', '2018-05-14', '2018-07-14', '1', 'Active'),
(6, 1, '5b0683714a7f9', '6eb0ao', '2018-05-24', '2018-07-24', '1', 'Active'),
(7, 1, '5b06843c13b83', '9g6owd', '2018-05-24', '2018-07-24', '1', 'Active'),
(8, 1, '5b0684fdd7693', '1up3vp', '2018-05-24', '2018-07-24', '1', 'Active'),
(9, 1, '5b06851cc0adf', 'f5g201', '2018-05-24', '2018-07-24', '1', 'Active'),
(10, 1, '5b06855e57af7', 'qt3224', '2018-05-24', '2018-07-24', '1', 'Active'),
(11, 1, '5b068574e523f', '29ms8z', '2018-05-24', '2018-07-24', '1', 'Active'),
(12, 1, 'yfghjsdjklfsdjkf', 'xdf123', '2018-05-25', '2018-12-12', '2', 'Active'),
(13, 1, '5b09292aa6c02', 'bxnh9y', '2018-05-26', '2018-07-26', '1', 'Active'),
(14, 1, '5b0f934acf20e', 'qmipx9', '2018-05-31', '2018-07-31', '1', 'Active'),
(15, 1, '5b0f996605cff', '9jo51h', '2018-05-31', '2018-07-31', '1', 'Active'),
(16, 1, '5b0fa14582e18', 'ilgnj6', '2018-05-31', '2018-07-31', '1', 'Active'),
(17, 1, '5b0fa1a8e37bd', 'boz12x', '2018-05-31', '2018-07-31', '1', 'Active'),
(18, 1, '5b0fa1ceaa64d', 'cj057o', '2018-05-31', '2018-07-31', '1', 'Active'),
(19, 1, '5b0fa214a1d97', 'ni8lxh', '2018-05-31', '2018-07-31', '1', 'Active'),
(20, 1, '5b10e0f7b5407', 'hxuyqv', '2018-06-01', '2018-08-01', '1', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `intID` int(11) NOT NULL,
  `varName` varchar(255) DEFAULT NULL,
  `varEmail` varchar(255) DEFAULT NULL,
  `varUserName` varchar(64) DEFAULT NULL,
  `varPassword` varchar(50) DEFAULT NULL,
  `varStatus` varchar(10) DEFAULT NULL,
  `comp_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`intID`, `varName`, `varEmail`, `varUserName`, `varPassword`, `varStatus`, `comp_id`) VALUES
(1, 'Super Admin', 'admin@gmail.com', 'admin', 'sadmin', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(70) NOT NULL,
  `comp_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_supplier`
--
ALTER TABLE `add_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_user`
--
ALTER TABLE `add_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkoutsubmit`
--
ALTER TABLE `checkoutsubmit`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `globalsettings`
--
ALTER TABLE `globalsettings`
  ADD PRIMARY KEY (`intGlobalid`);

--
-- Indexes for table `ordertosupplier_items`
--
ALTER TABLE `ordertosupplier_items`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocktake_cart_items`
--
ALTER TABLE `stocktake_cart_items`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `stocktake_order`
--
ALTER TABLE `stocktake_order`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `stocktake_order_history`
--
ALTER TABLE `stocktake_order_history`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `stock_tacking`
--
ALTER TABLE `stock_tacking`
  ADD PRIMARY KEY (`intId`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`intID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT for table `add_supplier`
--
ALTER TABLE `add_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `add_user`
--
ALTER TABLE `add_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `checkoutsubmit`
--
ALTER TABLE `checkoutsubmit`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `globalsettings`
--
ALTER TABLE `globalsettings`
  MODIFY `intGlobalid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ordertosupplier_items`
--
ALTER TABLE `ordertosupplier_items`
  MODIFY `intId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stocktake_cart_items`
--
ALTER TABLE `stocktake_cart_items`
  MODIFY `intId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `stocktake_order`
--
ALTER TABLE `stocktake_order`
  MODIFY `intId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `stocktake_order_history`
--
ALTER TABLE `stocktake_order_history`
  MODIFY `intId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `stock_tacking`
--
ALTER TABLE `stock_tacking`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `intID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
