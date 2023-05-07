-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2022 at 04:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restuarant`
--
CREATE DATABASE IF NOT EXISTS `restuarant` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `restuarant`;

-- --------------------------------------------------------

--
-- Table structure for table `BILL`
--

DROP TABLE IF EXISTS `BILL`;
CREATE TABLE `BILL` (
  `Bill_No` int(11) NOT NULL,
  `T_amount` int(11) DEFAULT NULL,
  `Bill_date` date DEFAULT NULL,
  `C_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `BILL`:
--   `C_id`
--       `CUSTOMER` -> `Customer_id`
--

--
-- Dumping data for table `BILL`
--

INSERT INTO `BILL` (`Bill_No`, `T_amount`, `Bill_date`, `C_id`) VALUES
(1, 100, '2022-11-23', 6),
(2, 100, '2022-11-23', 35),
(3, 100, '2022-11-23', 36),
(4, 100, '2022-11-23', 37),
(5, 100, '2022-11-23', 39),
(6, 100, '2022-11-23', 40),
(7, 100, '2022-11-23', 41),
(8, 100, '2022-11-23', 42),
(9, 100, '2022-11-23', 43),
(10, 100, '2022-11-23', 44),
(11, 100, '2022-11-23', 45),
(12, 100, '2022-11-28', 71),
(13, 188, '2022-11-30', 124),
(14, 99, '2022-12-01', 125),
(15, 177, '2022-12-01', 126),
(16, 149, '2022-12-01', 127),
(17, 77, '2022-12-01', 128),
(18, 94, '2022-12-01', 129),
(19, 77, '2022-12-01', 130),
(20, 222, '2022-12-01', 131),
(21, 266, '2022-12-01', 132),
(22, 343, '2022-12-01', 133),
(23, 531, '2022-12-01', 136),
(24, 324, '2022-12-01', 136),
(25, 72, '2022-12-01', 137),
(26, 33, '2022-12-01', 138),
(27, 78, '2022-12-01', 139),
(28, 144, '2022-12-01', 140),
(29, 288, '2022-12-01', 140),
(30, 169, '2022-12-01', 141),
(31, 338, '2022-12-01', 141),
(32, 58, '2022-12-01', 142),
(33, 116, '2022-12-01', 142),
(34, 147, '2022-12-01', 143),
(35, 364, '2022-12-01', 144),
(36, 7650, '2022-12-02', 146),
(37, 2450, '2022-12-02', 147),
(38, 500, '2022-12-08', 148),
(39, 1350, '2022-12-08', 149),
(40, 3600, '2022-12-08', 150),
(41, 1200, '2022-12-09', 151),
(42, 3100, '2022-12-09', 152),
(43, 1600, '2022-12-10', 153),
(44, 7080, '2022-12-11', 154),
(45, 940, '2022-12-11', 155),
(46, 1750, '2022-12-11', 156),
(47, 2895, '2022-12-11', 157),
(48, 1040, '2022-12-11', 158),
(49, 1550, '2022-12-11', 159),
(50, 1000, '2022-12-11', 160),
(51, 685, '2022-12-11', 161),
(52, 1485, '2022-12-11', 162),
(53, 1230, '2022-12-11', 163),
(54, 2695, '2022-12-11', 164),
(55, 3645, '2022-12-11', 165),
(56, 400, '2022-12-11', 166),
(57, 1995, '2022-12-11', 167),
(58, 1845, '2022-12-11', 168),
(59, 3195, '2022-12-11', 169),
(60, 1545, '2022-12-11', 170),
(61, 3765, '2022-12-11', 171),
(62, 9540, '2022-12-12', 174),
(63, 10600, '2022-12-12', 174),
(64, 1500, '2022-12-12', 175),
(65, 1500, '2022-12-12', 176),
(66, 470, '2022-12-12', 177),
(67, 1070, '2022-12-12', 178),
(68, 1020, '2022-12-12', 196),
(69, 1060, '2022-12-12', 197),
(70, 1430, '2022-12-12', 198),
(71, 1590, '2022-12-12', 199),
(72, 1590, '2022-12-12', 200),
(73, 1620, '2022-12-12', 201),
(74, 1680, '2022-12-12', 202),
(75, 1900, '2022-12-13', 214),
(76, 2120, '2022-12-13', 215),
(77, 780, '2022-12-13', 216),
(78, 360, '2022-12-13', 217),
(79, 810, '2022-12-13', 218),
(80, 840, '2022-12-13', 219),
(81, 960, '2022-12-13', 220),
(82, 1580, '2022-12-13', 221),
(83, 970, '2022-12-13', 222),
(84, 800, '2022-12-13', 223),
(85, 770, '2022-12-14', 224);

-- --------------------------------------------------------

--
-- Table structure for table `CUSTOMER`
--

DROP TABLE IF EXISTS `CUSTOMER`;
CREATE TABLE `CUSTOMER` (
  `Customer_id` int(11) NOT NULL,
  `table_No` int(11) DEFAULT NULL,
  `Customer_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `CUSTOMER`:
--   `table_No`
--       `TABLE_` -> `Table_id`
--

--
-- Dumping data for table `CUSTOMER`
--

INSERT INTO `CUSTOMER` (`Customer_id`, `table_No`, `Customer_name`) VALUES
(6, 1, 'joyfree dias'),
(7, 1, 'joyfree dias'),
(8, 1, 'joyfree dias'),
(9, 1, 'joyfree dias'),
(10, 1, 'joyfree dias'),
(11, 1, 'joyfree dias'),
(12, 1, 'joyfree dias'),
(13, 1, 'joyfree dias'),
(14, 1, 'joyfree dias'),
(15, 1, 'joyfree diaw'),
(16, 1, 'joyfree diaw'),
(17, 1, 'joyfree diaw'),
(18, 1, 'joyfree diaw'),
(19, 1, 'joyfree dias'),
(20, 1, 'joyfree dias'),
(21, 1, 'joyfree dias'),
(22, 1, 'joyfree dias'),
(23, 1, 'joyfree dias'),
(24, 1, 'joyfree dias'),
(25, 1, 'joyfree diaw'),
(26, 1, 'joyfree dias'),
(27, 1, 'joyfree dias'),
(28, 1, 'joyfree dias'),
(29, 1, 'joyfree dias'),
(30, 1, 'joyfree dias'),
(31, 1, 'fjwageck'),
(32, 1, 'cywafegja'),
(33, 1, 'fcaegdves'),
(34, 1, 'joyfree diaw'),
(35, 1, 'joyfree dias'),
(36, 1, 'joyfree diaw'),
(37, 1, 'joyfree diaw'),
(38, 1, 'bfwafg'),
(39, 1, 'fjmchwuski,wge'),
(40, 1, 'jvawrkgbgawgehb'),
(41, 1, 'jeslif fernandes'),
(42, 1, 'qkfjcwa'),
(43, 1, 'bfjew'),
(44, 1, 'nfqkkw'),
(45, 1, 'wkfgajhg'),
(46, 1, 'joyfree dias'),
(47, 1, 'joyfree dias'),
(48, 1, 'fcaegdves'),
(49, 1, 'fcaegdves'),
(50, 1, 'fcaegdves'),
(51, 1, 'joyfree diaw'),
(52, 1, 'joyfree dias'),
(53, 1, 'cywafegja'),
(54, 1, 'joyfree diaw'),
(55, NULL, ''),
(56, NULL, 'john doe'),
(57, NULL, ''),
(58, NULL, ''),
(59, NULL, 'john doe'),
(60, NULL, 'john doe'),
(61, NULL, ''),
(62, NULL, 'joyfree dias'),
(63, NULL, ''),
(64, NULL, 'joy'),
(65, NULL, ''),
(66, NULL, 'joyy'),
(67, NULL, 'joyy'),
(68, NULL, 'joyy'),
(69, NULL, ''),
(70, NULL, 'bruh'),
(71, 1, 'kaushik'),
(72, NULL, ''),
(73, NULL, 'jesluf'),
(74, NULL, ''),
(75, NULL, 'jesligf'),
(76, NULL, 'kuaho'),
(77, NULL, 'jayden'),
(78, NULL, ''),
(79, NULL, ''),
(80, NULL, 'joyfree123'),
(81, NULL, ''),
(82, NULL, ''),
(83, NULL, ''),
(84, NULL, ''),
(85, NULL, 'joyfree'),
(86, NULL, ''),
(87, NULL, ''),
(88, NULL, ''),
(89, NULL, ''),
(90, NULL, ''),
(91, NULL, ''),
(92, NULL, 'joe'),
(93, NULL, ''),
(94, NULL, ''),
(95, NULL, 'joe'),
(96, NULL, 'isaiah'),
(97, NULL, ''),
(98, NULL, ''),
(99, NULL, 'jeslif fernandes'),
(100, NULL, 'jeslif fernandes'),
(101, NULL, ''),
(102, NULL, 'Joss'),
(103, NULL, ''),
(104, NULL, 'kaushik'),
(105, NULL, ''),
(106, NULL, 'veron'),
(107, NULL, ''),
(108, NULL, 'jayden'),
(109, NULL, ''),
(110, NULL, 'luke'),
(111, NULL, ''),
(112, NULL, 'jeslif fernandes'),
(113, NULL, 'kaushik'),
(114, NULL, 'rushab'),
(115, NULL, 'Jaden'),
(116, NULL, 'loop'),
(117, NULL, ''),
(118, NULL, ''),
(119, NULL, ''),
(120, NULL, ''),
(121, NULL, 'lock'),
(122, NULL, 'homi'),
(123, NULL, 'joylon'),
(124, NULL, 'jhon'),
(125, NULL, 'Joashua'),
(126, NULL, 'jeslif fernandes'),
(127, NULL, 'Satyam'),
(128, NULL, 'Rudra'),
(129, NULL, 'ViVek'),
(130, NULL, 'Dummy'),
(131, NULL, 'luke'),
(132, NULL, 'Duane'),
(133, NULL, 'isaiah'),
(134, NULL, 'kaushik'),
(135, NULL, ''),
(136, NULL, ''),
(137, NULL, 'joyfree dias'),
(138, NULL, 'home'),
(139, NULL, 'jayden'),
(140, NULL, 'isaiash'),
(141, NULL, 'isiah'),
(142, NULL, 'log'),
(143, NULL, 'Duane'),
(144, NULL, 'Manoher'),
(145, NULL, 'zenaida'),
(146, NULL, 'kaushik'),
(147, NULL, 'joy'),
(148, NULL, 'ivan'),
(149, NULL, 'jayden'),
(150, NULL, 'pro'),
(151, NULL, 'jes'),
(152, NULL, 'joy'),
(153, NULL, 'dub'),
(154, 1, 'dude'),
(155, 1, 'Jayden Ferrao'),
(156, 1, 'Joyfree'),
(157, 1, 'John'),
(158, 1, 'Bro'),
(159, 1, 'joy'),
(160, 1, 'joyfree dias'),
(161, 1, 'jon'),
(162, 1, 'rega'),
(163, 1, 'rowan'),
(164, 1, 'me'),
(165, 1, 'lol'),
(166, 1, 'joyfree dias'),
(167, 1, 'kyle'),
(168, 1, 'joy'),
(169, 1, 'kaushik'),
(170, 4, 'joke'),
(171, 6, 'luke'),
(172, 8, 'joyfree dias'),
(173, 8, 'joyfree dias'),
(174, 4, 'jaden'),
(175, 3, 'joe'),
(176, 5, 'jack'),
(177, 5, 'joe'),
(178, 4, 'kaushik'),
(179, 5, 'jake'),
(180, 5, 'jake'),
(181, 5, 'jake'),
(182, 6, 'jeslif fernandes'),
(183, 4, 'jolly'),
(184, 4, 'jolly'),
(185, 4, 'jolly'),
(186, 5, 'jake'),
(187, 6, 'joe'),
(188, 6, 'joe'),
(189, 6, 'joe'),
(190, 6, 'joe'),
(191, 6, 'joe'),
(192, 6, 'joe'),
(193, 6, 'joe'),
(194, 6, 'joe'),
(195, 7, 'Joashua'),
(196, 4, 'joylon'),
(197, 1, 'jake'),
(198, 5, 'jose'),
(199, 2, 'darren'),
(200, 4, 'joyfree dias'),
(201, 5, 'jake'),
(202, 6, 'joe'),
(203, 4, 'jose'),
(204, 1, 'joe'),
(205, 1, 'joe'),
(206, 1, 'joe'),
(207, 1, 'joe'),
(208, 5, 'hope'),
(209, 4, 'jade'),
(210, 4, 'jade'),
(211, 5, 'joe'),
(212, 6, 'joyfree dias'),
(213, 4, 'kyle'),
(214, 6, 'joyfree dias'),
(215, 6, 'jake'),
(216, 3, 'Jayden Ferrao'),
(217, 4, 'jejslif'),
(218, 4, 'Joyfree'),
(219, 1, 'kenn'),
(220, 2, 'kenn2'),
(221, 4, 'Joe'),
(222, 5, 'Joe1'),
(223, 5, 'joker'),
(224, 2, 'customer1');

-- --------------------------------------------------------

--
-- Table structure for table `deleted_items`
--

DROP TABLE IF EXISTS `deleted_items`;
CREATE TABLE `deleted_items` (
  `mid` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `deleted_items`:
--

--
-- Dumping data for table `deleted_items`
--

INSERT INTO `deleted_items` (`mid`, `item_name`, `item_price`, `category`) VALUES
(2, 'bread', 10, 'starter');

-- --------------------------------------------------------

--
-- Stand-in structure for view `display_bill`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `display_bill`;

-- --------------------------------------------------------

--
-- Table structure for table `EMPLOYEE`
--

DROP TABLE IF EXISTS `EMPLOYEE`;
CREATE TABLE `EMPLOYEE` (
  `EMP_id` int(11) NOT NULL,
  `Fname` varchar(100) DEFAULT NULL,
  `Mname` varchar(100) DEFAULT NULL,
  `Lname` varchar(100) DEFAULT NULL,
  `Address` varchar(225) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone_number` bigint(18) DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL,
  `Sex` varchar(10) DEFAULT NULL,
  `Job_title` varchar(100) DEFAULT NULL,
  `Super_id` int(11) DEFAULT NULL,
  `Joining_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `EMPLOYEE`:
--   `Super_id`
--       `EMPLOYEE` -> `EMP_id`
--

--
-- Dumping data for table `EMPLOYEE`
--

INSERT INTO `EMPLOYEE` (`EMP_id`, `Fname`, `Mname`, `Lname`, `Address`, `Email`, `Phone_number`, `Salary`, `Sex`, `Job_title`, `Super_id`, `Joining_date`) VALUES
(14, 'Joyfree', '', 'Dias', 'Goa,India', 'joyfree@gmail.com', 8265027129, 120000, 'male', 'Owner', NULL, '2022-11-23'),
(18, 'Jayden', 'Jeff', 'Ferrao', 'Goa', 'bf2g3uqg@gmail.com', 12345678, 12000, 'female', 'CEO', NULL, '2022-11-05'),
(20, 'Jeslif', 'sam', 'Fernandes', 'Goa', 'joyfree@gmail.com', 826502712, 12345, 'male', 'Chef', 14, '2022-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `MANAGES`
--

DROP TABLE IF EXISTS `MANAGES`;
CREATE TABLE `MANAGES` (
  `Order_No` int(11) DEFAULT NULL,
  `EMP_id` int(11) DEFAULT NULL,
  `M_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `MANAGES`:
--   `EMP_id`
--       `EMPLOYEE` -> `EMP_id`
--   `Order_No`
--       `ORDERS` -> `Order_No`
--

--
-- Dumping data for table `MANAGES`
--

INSERT INTO `MANAGES` (`Order_No`, `EMP_id`, `M_date`) VALUES
(145, 14, '2022-12-12'),
(162, 14, '2022-12-13'),
(163, 14, '2022-12-13'),
(164, 14, '2022-12-13'),
(165, 14, '2022-12-13'),
(166, 14, '2022-12-13'),
(167, 14, '2022-12-13'),
(168, 14, '2022-12-13'),
(169, 14, '2022-12-13'),
(170, 14, '2022-12-13'),
(171, 14, '2022-12-13'),
(172, 14, '2022-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `MENU`
--

DROP TABLE IF EXISTS `MENU`;
CREATE TABLE `MENU` (
  `item__id` int(11) NOT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `item_price` int(11) DEFAULT NULL,
  `data_name` varchar(225) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `pic_info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `MENU`:
--

--
-- Dumping data for table `MENU`
--

INSERT INTO `MENU` (`item__id`, `item_name`, `item_price`, `data_name`, `category`, `pic_info`) VALUES
(1, 'Margherita', 220, 'Margherita', 'pizza', 'pizza1.jpg'),
(2, 'Formaggio', 250, 'Formaggio', 'pizza', 'pizza2.png'),
(3, 'Chicken', 190, 'Chicken', 'pizza', 'pizza3.jpg'),
(4, 'Grape juice', 30, 'Grape-juice', 'beverage', 'grapes.png'),
(5, 'Apple juice', 40, 'Apple-juice', 'beverage', 'apple.png'),
(6, 'Pineapple-o-clock', 200, 'Pineapple-o-clock', 'pizza', 'pizza4.png'),
(7, 'Fried Rice', 120, 'Fried-rice', 'chinese', 'friedrice.jpeg'),
(8, 'Coca-Cola', 30, 'Coco-Cola', 'beverage', 'coco-cola.webp'),
(9, 'Bruschetta', 160, 'Bruschetta', 'starter', 'starter2.jpg'),
(10, 'Garlic Bread', 90, 'Garlic-Bread', 'starter', 'starter3.jpg'),
(11, 'Chicken Salad', 140, 'Chicken-Salad', 'starter', 'starter4.jpg'),
(12, 'French Fries', 70, 'French-Fries', 'starter', 'starter5.jpg'),
(13, 'Salmon & Veggies', 300, 'Salmon-&-Veggies', 'starter', 'starter6.jpg');

--
-- Triggers `MENU`
--
DROP TRIGGER IF EXISTS `before_delete_item`;
DELIMITER $$
CREATE TRIGGER `before_delete_item` BEFORE DELETE ON `MENU` FOR EACH ROW BEGIN
INSERT INTO deleted_items (item_name,item_price,category)
VALUES (old.item_name,old.item_price,old.category);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ORDERS`
--

DROP TABLE IF EXISTS `ORDERS`;
CREATE TABLE `ORDERS` (
  `Order_No` int(11) NOT NULL,
  `C_id` int(11) DEFAULT NULL,
  `Order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `ORDERS`:
--   `C_id`
--       `CUSTOMER` -> `Customer_id`
--

--
-- Dumping data for table `ORDERS`
--

INSERT INTO `ORDERS` (`Order_No`, `C_id`, `Order_date`) VALUES
(1, 45, '2022-11-23'),
(2, 46, '2022-11-27'),
(3, 47, '2022-11-27'),
(4, 48, '2022-11-27'),
(5, 49, '2022-11-27'),
(6, 50, '2022-11-27'),
(7, 51, '2022-11-27'),
(8, 52, '2022-11-27'),
(9, 53, '2022-11-27'),
(10, 54, '2022-11-27'),
(11, 55, '2022-11-28'),
(12, 56, '2022-11-28'),
(13, 57, '2022-11-28'),
(14, 58, '2022-11-28'),
(15, 59, '2022-11-28'),
(16, 60, '2022-11-28'),
(17, 74, '2022-11-29'),
(18, 75, '2022-11-29'),
(19, 76, '2022-11-29'),
(20, 77, '2022-11-29'),
(21, 78, '2022-11-29'),
(22, 79, '2022-11-29'),
(23, 80, '2022-11-29'),
(24, 81, '2022-11-29'),
(25, 82, '2022-11-29'),
(26, 83, '2022-11-29'),
(27, 84, '2022-11-29'),
(28, 85, '2022-11-29'),
(29, 86, '2022-11-29'),
(30, 87, '2022-11-29'),
(31, 88, '2022-11-29'),
(32, 89, '2022-11-29'),
(33, 90, '2022-11-29'),
(34, 91, '2022-11-29'),
(35, 92, '2022-11-29'),
(36, 93, '2022-11-29'),
(37, 94, '2022-11-29'),
(38, 95, '2022-11-29'),
(39, 96, '2022-11-29'),
(40, 97, '2022-11-29'),
(41, 98, '2022-11-29'),
(42, 99, '2022-11-29'),
(43, 100, '2022-11-29'),
(44, 101, '2022-11-29'),
(45, 102, '2022-11-29'),
(46, 103, '2022-11-29'),
(47, 104, '2022-11-29'),
(48, 105, '2022-11-29'),
(49, 106, '2022-11-29'),
(50, 107, '2022-11-29'),
(51, 108, '2022-11-30'),
(52, 109, '2022-11-30'),
(53, 110, '2022-11-30'),
(54, 111, '2022-11-30'),
(55, 112, '2022-11-30'),
(56, 113, '2022-11-30'),
(57, 114, '2022-11-30'),
(58, 115, '2022-11-30'),
(59, 116, '2022-11-30'),
(60, 117, '2022-11-30'),
(61, 118, '2022-11-30'),
(62, 119, '2022-11-30'),
(63, 120, '2022-11-30'),
(64, 121, '2022-11-30'),
(65, 122, '2022-11-30'),
(66, 123, '2022-11-30'),
(67, 124, '2022-11-30'),
(68, 125, '2022-12-01'),
(69, 126, '2022-12-01'),
(70, 127, '2022-12-01'),
(71, 128, '2022-12-01'),
(72, 129, '2022-12-01'),
(73, 130, '2022-12-01'),
(74, 131, '2022-12-01'),
(75, 132, '2022-12-01'),
(76, 133, '2022-12-01'),
(77, 134, '2022-12-01'),
(78, 135, '2022-12-01'),
(79, 136, '2022-12-01'),
(80, 137, '2022-12-01'),
(81, 138, '2022-12-01'),
(82, 139, '2022-12-01'),
(83, 140, '2022-12-01'),
(84, 141, '2022-12-01'),
(85, 142, '2022-12-01'),
(86, 143, '2022-12-01'),
(87, 144, '2022-12-01'),
(88, 145, '2022-12-02'),
(89, 146, '2022-12-02'),
(90, 147, '2022-12-02'),
(91, 148, '2022-12-08'),
(92, 149, '2022-12-08'),
(93, 150, '2022-12-08'),
(94, 151, '2022-12-09'),
(95, 152, '2022-12-09'),
(96, 153, '2022-12-10'),
(97, 154, '2022-12-11'),
(98, 155, '2022-12-11'),
(99, 156, '2022-12-11'),
(100, 157, '2022-12-11'),
(101, 158, '2022-12-11'),
(102, 159, '2022-12-11'),
(103, 160, '2022-12-11'),
(104, 161, '2022-12-11'),
(105, 162, '2022-12-11'),
(106, 163, '2022-12-11'),
(107, 164, '2022-12-11'),
(108, 165, '2022-12-11'),
(109, 166, '2022-12-11'),
(110, 167, '2022-12-11'),
(111, 168, '2022-12-11'),
(112, 169, '2022-12-11'),
(113, 170, '2022-12-11'),
(114, 171, '2022-12-11'),
(115, 172, '2022-12-12'),
(116, 173, '2022-12-12'),
(117, 174, '2022-12-12'),
(118, 175, '2022-12-12'),
(119, 176, '2022-12-12'),
(120, 177, '2022-12-12'),
(121, 178, '2022-12-12'),
(122, 179, '2022-12-12'),
(123, 180, '2022-12-12'),
(124, 181, '2022-12-12'),
(125, 182, '2022-12-12'),
(126, 183, '2022-12-12'),
(127, 184, '2022-12-12'),
(128, 185, '2022-12-12'),
(129, 186, '2022-12-12'),
(130, 187, '2022-12-12'),
(131, 188, '2022-12-12'),
(132, 189, '2022-12-12'),
(133, 190, '2022-12-12'),
(134, 191, '2022-12-12'),
(135, 192, '2022-12-12'),
(136, 193, '2022-12-12'),
(137, 194, '2022-12-12'),
(138, 195, '2022-12-12'),
(139, 196, '2022-12-12'),
(140, 197, '2022-12-12'),
(141, 198, '2022-12-12'),
(142, 199, '2022-12-12'),
(143, 200, '2022-12-12'),
(144, 201, '2022-12-12'),
(145, 202, '2022-12-12'),
(146, 203, '2022-12-12'),
(147, 204, '2022-12-12'),
(148, 205, '2022-12-12'),
(149, 206, '2022-12-12'),
(150, 207, '2022-12-12'),
(151, 208, '2022-12-12'),
(152, 209, '2022-12-13'),
(153, 209, '2022-12-13'),
(154, 210, '2022-12-13'),
(155, 210, '2022-12-13'),
(156, 211, '2022-12-13'),
(157, 211, '2022-12-13'),
(158, 212, '2022-12-13'),
(159, 212, '2022-12-13'),
(160, 213, '2022-12-13'),
(161, 213, '2022-12-13'),
(162, 214, '2022-12-13'),
(163, 215, '2022-12-13'),
(164, 216, '2022-12-13'),
(165, 217, '2022-12-13'),
(166, 218, '2022-12-13'),
(167, 219, '2022-12-13'),
(168, 220, '2022-12-13'),
(169, 221, '2022-12-13'),
(170, 222, '2022-12-13'),
(171, 223, '2022-12-13'),
(172, 224, '2022-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `ORDER_DETAILS`
--

DROP TABLE IF EXISTS `ORDER_DETAILS`;
CREATE TABLE `ORDER_DETAILS` (
  `Order_No` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `ORDER_DETAILS`:
--   `item_id`
--       `MENU` -> `item__id`
--   `Order_No`
--       `ORDERS` -> `Order_No`
--

--
-- Dumping data for table `ORDER_DETAILS`
--

INSERT INTO `ORDER_DETAILS` (`Order_No`, `item_id`, `quantity`) VALUES
(NULL, 1, 3),
(NULL, 1, 3),
(NULL, 3, 4),
(NULL, 2, 1),
(NULL, 1, 3),
(NULL, 2, 1),
(NULL, 1, 3),
(NULL, 2, 1),
(NULL, 1, 3),
(NULL, 2, 1),
(40, 1, 1),
(40, 2, 1),
(40, 3, 1),
(44, 1, 2),
(44, 2, 3),
(44, 3, 2),
(46, 1, 1),
(46, 2, 3),
(46, 3, 1),
(48, 1, 1),
(48, 2, 1),
(50, 1, 1),
(50, 2, 3),
(52, 1, 4),
(52, 2, 1),
(52, 3, 1),
(54, 1, 4),
(54, 2, 1),
(54, 3, 1),
(56, 1, 1),
(56, 2, 1),
(56, 3, 4),
(57, 3, 2),
(57, 1, 2),
(57, 2, 4),
(58, 1, 3),
(58, 2, 2),
(58, 3, 1),
(64, 1, 3),
(64, 2, 1),
(65, 1, 1),
(65, 2, 3),
(66, 1, 16),
(66, 2, 11),
(66, 3, 8),
(67, 1, 2),
(67, 2, 4),
(68, 1, 1),
(68, 2, 2),
(68, 3, 1),
(69, 1, 3),
(69, 2, 1),
(69, 3, 1),
(70, 1, 2),
(70, 2, 2),
(70, 3, 1),
(71, 1, 1),
(71, 2, 1),
(71, 3, 1),
(72, 1, 1),
(72, 2, 2),
(73, 1, 1),
(73, 2, 1),
(73, 3, 1),
(74, 1, 4),
(74, 2, 1),
(75, 1, 4),
(75, 2, 3),
(76, 1, 5),
(76, 2, 4),
(76, 3, 1),
(79, 1, 9),
(79, 2, 3),
(79, 3, 3),
(79, 1, 9),
(79, 2, 3),
(79, 3, 3),
(80, 1, 2),
(80, 2, 3),
(80, 3, 1),
(81, 2, 2),
(81, 3, 1),
(82, 2, 4),
(82, 3, 2),
(82, 1, 1),
(83, 1, 9),
(83, 2, 2),
(83, 3, 2),
(83, 1, 9),
(83, 2, 2),
(83, 3, 2),
(84, 1, 8),
(84, 2, 3),
(84, 3, 4),
(84, 1, 8),
(84, 2, 3),
(84, 3, 4),
(85, 1, 3),
(85, 2, 1),
(85, 3, 1),
(85, 1, 3),
(85, 2, 1),
(85, 3, 1),
(86, 1, 3),
(86, 2, 4),
(86, 3, 3),
(87, 1, 10),
(87, 2, 14),
(87, 3, 2),
(89, 1, 3),
(89, 2, 3),
(89, 3, 3),
(89, 4, 36),
(90, 5, 2),
(90, 4, 1),
(90, 1, 2),
(90, 2, 3),
(91, 1, 1),
(91, 4, 1),
(92, 1, 1),
(92, 2, 1),
(92, 3, 1),
(93, 6, 2),
(93, 2, 4),
(93, 7, 4),
(94, 6, 2),
(95, 7, 4),
(95, 2, 2),
(95, 1, 4),
(96, 1, 1),
(96, 2, 1),
(96, 7, 5),
(97, 1, 4),
(97, 2, 4),
(97, 3, 4),
(97, 5, 6),
(97, 8, 4),
(97, 7, 6),
(98, 1, 1),
(98, 2, 1),
(98, 8, 2),
(99, 1, 3),
(99, 2, 1),
(99, 5, 1),
(100, 1, 2),
(100, 2, 2),
(100, 6, 1),
(100, 4, 1),
(100, 8, 1),
(100, 7, 3),
(101, 1, 2),
(101, 8, 2),
(101, 7, 1),
(102, 1, 1),
(102, 6, 1),
(102, 4, 1),
(102, 5, 3),
(102, 7, 1),
(103, 1, 1),
(103, 5, 3),
(103, 7, 2),
(104, 7, 1),
(104, 4, 4),
(104, 8, 3),
(105, 7, 1),
(105, 4, 4),
(105, 8, 3),
(105, 1, 2),
(106, 1, 1),
(106, 2, 1),
(106, 4, 1),
(106, 5, 1),
(106, 8, 4),
(107, 1, 1),
(107, 2, 1),
(107, 3, 3),
(107, 8, 1),
(107, 5, 3),
(108, 1, 1),
(108, 2, 2),
(108, 3, 4),
(108, 8, 1),
(108, 5, 3),
(109, 1, 1),
(110, 1, 1),
(110, 2, 1),
(110, 6, 1),
(110, 3, 1),
(110, 8, 1),
(111, 1, 1),
(111, 2, 1),
(111, 3, 1),
(111, 8, 1),
(111, 7, 3),
(112, 1, 2),
(112, 2, 2),
(112, 3, 2),
(112, 8, 1),
(112, 7, 3),
(113, 1, 1),
(113, 2, 1),
(113, 4, 1),
(113, 5, 1),
(113, 8, 1),
(113, 7, 3),
(114, 1, 1),
(114, 2, 4),
(114, 4, 1),
(114, 5, 1),
(114, 8, 7),
(114, 7, 7),
(117, 1, 1),
(117, 10, 2),
(117, 11, 3),
(117, 7, 2),
(117, 1, 1),
(117, 10, 2),
(117, 11, 3),
(117, 7, 2),
(117, 1, 1),
(117, 10, 2),
(117, 11, 3),
(117, 7, 2),
(117, 1, 1),
(117, 10, 2),
(117, 11, 3),
(117, 7, 2),
(117, 1, 1),
(117, 10, 2),
(117, 11, 3),
(117, 7, 2),
(117, 1, 1),
(117, 10, 2),
(117, 11, 3),
(117, 7, 2),
(117, 1, 1),
(117, 10, 2),
(117, 11, 3),
(117, 7, 2),
(117, 1, 1),
(117, 10, 2),
(117, 11, 3),
(117, 7, 2),
(117, 1, 1),
(117, 10, 2),
(117, 11, 3),
(117, 7, 2),
(117, 1, 1),
(117, 10, 2),
(117, 11, 3),
(117, 7, 2),
(118, 1, 3),
(118, 10, 2),
(118, 11, 3),
(118, 7, 2),
(119, 1, 3),
(119, 10, 2),
(119, 11, 3),
(119, 7, 2),
(120, 1, 2),
(120, 8, 1),
(121, 1, 1),
(121, 2, 2),
(121, 8, 1),
(121, 9, 2),
(139, 1, 2),
(139, 2, 2),
(139, 5, 2),
(140, 1, 2),
(140, 2, 2),
(140, 5, 3),
(141, 1, 2),
(141, 2, 3),
(141, 5, 3),
(141, 7, 1),
(142, 1, 2),
(142, 2, 3),
(142, 5, 3),
(142, 7, 1),
(142, 9, 1),
(143, 1, 2),
(143, 2, 3),
(143, 5, 3),
(143, 7, 1),
(143, 9, 1),
(144, 1, 2),
(144, 2, 3),
(144, 5, 3),
(144, 7, 1),
(144, 9, 1),
(144, 8, 1),
(145, 1, 2),
(145, 2, 3),
(145, 5, 3),
(145, 7, 1),
(145, 9, 1),
(145, 8, 3),
(162, 1, 1),
(162, 2, 1),
(162, 3, 1),
(162, 5, 3),
(162, 7, 4),
(162, 9, 4),
(163, 1, 2),
(163, 2, 1),
(163, 3, 1),
(163, 5, 3),
(163, 7, 4),
(163, 9, 4),
(164, 1, 1),
(164, 2, 1),
(164, 3, 1),
(164, 8, 4),
(165, 3, 1),
(165, 8, 1),
(165, 12, 2),
(166, 1, 1),
(166, 2, 2),
(166, 8, 3),
(167, 1, 1),
(167, 2, 2),
(167, 8, 4),
(168, 1, 1),
(168, 2, 2),
(168, 8, 4),
(168, 7, 1),
(169, 1, 1),
(169, 2, 1),
(169, 3, 1),
(169, 6, 1),
(169, 4, 1),
(169, 5, 3),
(169, 8, 3),
(169, 9, 3),
(170, 9, 1),
(170, 10, 2),
(170, 11, 3),
(170, 7, 1),
(170, 8, 3),
(171, 4, 2),
(171, 2, 2),
(171, 7, 2),
(172, 9, 1),
(172, 1, 1),
(172, 3, 1),
(172, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

DROP TABLE IF EXISTS `pass`;
CREATE TABLE `pass` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwords` int(11) NOT NULL,
  `changedat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `pass`:
--

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`id`, `username`, `passwords`, `changedat`) VALUES
(21, 'admin', 123456, '2022-12-13'),
(22, 'admin', 1234567, '2022-12-13'),
(23, 'admin', 1234567, '2022-12-13'),
(24, 'admin', 1234567, '2022-12-13'),
(25, 'admin', 1234567, '2022-12-13'),
(26, 'admin', 1234567, '2022-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `PAYMENT`
--

DROP TABLE IF EXISTS `PAYMENT`;
CREATE TABLE `PAYMENT` (
  `PAYMENT_id` int(11) NOT NULL,
  `method_id` int(11) DEFAULT NULL,
  `Pay_date` date DEFAULT NULL,
  `BILL_no` int(11) DEFAULT NULL,
  `Pay_Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `PAYMENT`:
--   `BILL_no`
--       `BILL` -> `Bill_No`
--   `method_id`
--       `PAY_METHOD` -> `M_id`
--

--
-- Dumping data for table `PAYMENT`
--

INSERT INTO `PAYMENT` (`PAYMENT_id`, `method_id`, `Pay_date`, `BILL_no`, `Pay_Status`) VALUES
(1, 1, '2022-11-23', 1, 'Failed'),
(2, 2, '2022-11-23', 2, 'Successful'),
(3, 2, '2022-11-23', 1, 'Successful'),
(4, 4, '2022-12-11', 45, 'Successful'),
(5, 4, '2022-12-11', 46, 'Successful'),
(6, 4, '2022-12-11', 47, 'Successful'),
(7, 4, '2022-12-11', 48, 'Successful'),
(8, 4, '2022-12-11', 49, 'Successful'),
(9, 4, '2022-12-11', 50, 'Successful'),
(10, 4, '2022-12-11', 51, 'Successful'),
(11, 4, '2022-12-11', 52, 'Successful'),
(12, 4, '2022-12-11', 53, 'Successful'),
(13, 4, '2022-12-11', 54, 'Successful'),
(14, 4, '2022-12-11', 55, 'Successful'),
(15, 4, '2022-12-11', 56, 'Successful'),
(16, 4, '2022-12-11', 57, 'Successful'),
(17, 4, '2022-12-11', 57, 'Successful'),
(18, 4, '2022-12-11', 58, 'Successful'),
(19, 4, '2022-12-11', 59, 'Successful'),
(20, 4, '2022-12-11', 60, 'Successful'),
(21, 4, '2022-12-11', 61, 'Successful'),
(22, 4, '2022-12-12', 64, 'Successful'),
(23, 4, '2022-12-12', 66, 'Successful'),
(24, 4, '2022-12-12', 67, 'Successful'),
(25, 4, '2022-12-12', 68, 'Successful'),
(26, 4, '2022-12-12', 69, 'Successful'),
(27, 4, '2022-12-12', 70, 'Successful'),
(28, 4, '2022-12-12', 71, 'Successful'),
(29, 4, '2022-12-12', 72, 'Successful'),
(30, 4, '2022-12-12', 74, 'Successful'),
(31, 4, '2022-12-13', 75, 'Successful'),
(32, 4, '2022-12-13', 76, 'Successful'),
(33, 2, '2022-12-13', 77, 'Successful'),
(34, 2, '2022-12-13', 78, 'Successful'),
(35, 4, '2022-12-13', 79, 'Successful'),
(36, 1, '2022-12-13', 80, 'Successful'),
(37, 2, '2022-12-13', 81, 'Successful'),
(38, 2, '2022-12-13', 82, 'Successful'),
(39, 1, '2022-12-13', 83, 'Successful'),
(40, 2, '2022-12-13', 84, 'Successful'),
(41, 2, '2022-12-14', 85, 'Successful');

-- --------------------------------------------------------

--
-- Table structure for table `PAY_METHOD`
--

DROP TABLE IF EXISTS `PAY_METHOD`;
CREATE TABLE `PAY_METHOD` (
  `M_id` int(11) NOT NULL,
  `P_method` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `PAY_METHOD`:
--

--
-- Dumping data for table `PAY_METHOD`
--

INSERT INTO `PAY_METHOD` (`M_id`, `P_method`) VALUES
(1, 'CASH'),
(2, 'GPAY'),
(3, 'Credit Card'),
(4, 'Debit Card');

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_`
--

DROP TABLE IF EXISTS `TABLE_`;
CREATE TABLE `TABLE_` (
  `Table_id` int(11) NOT NULL,
  `Table_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `TABLE_`:
--

--
-- Dumping data for table `TABLE_`
--

INSERT INTO `TABLE_` (`Table_id`, `Table_name`) VALUES
(1, 'T1'),
(2, 'T2'),
(3, 'T3'),
(4, 'T4'),
(5, 'T5'),
(6, 'T6'),
(7, 'T7'),
(8, 'T8');

-- --------------------------------------------------------

--
-- Stand-in structure for view `total_no_of_each_items_ordered`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `total_no_of_each_items_ordered`;
CREATE TABLE `total_no_of_each_items_ordered` (
`item_id` int(11)
,`item_name` varchar(100)
,`tot` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `passwords` varchar(20) NOT NULL,
  `uid` mediumint(9) NOT NULL,
  `ldate` date DEFAULT NULL,
  `e_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `passwords`, `uid`, `ldate`, `e_id`) VALUES
('admin', '1234567', 8, '2022-12-14', 14),
('joy', '123456', 20, NULL, 14),
('jade', '123456', 21, NULL, 14);

--
-- Triggers `users`
--
DROP TRIGGER IF EXISTS `before_update_password`;
DELIMITER $$
CREATE TRIGGER `before_update_password` BEFORE UPDATE ON `users` FOR EACH ROW BEGIN
INSERT INTO pass (username,passwords,changedat)
VALUES(old.username,old.passwords,NOW());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure for view `display_bill`
--
DROP TABLE IF EXISTS `display_bill`;

DROP VIEW IF EXISTS `display_bill`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `display_bill`  AS SELECT `ORDER_DETAILS`.`Order_No` AS `Order_No`, `MENU`.`item_name` AS `item_name`, `ORDER_DETAILS`.`quantity` AS `quantity`, `MENU`.`item_price`* `ORDER_DETAILS`.`quantity` AS `sub_tot` FROM (`MENU` join `ORDER_DETAILS`) WHERE `MENU`.`item__id` = `ORDER_DETAILS`.`item_id`  ;

-- --------------------------------------------------------

--
-- Structure for view `total_no_of_each_items_ordered`
--
DROP TABLE IF EXISTS `total_no_of_each_items_ordered`;

DROP VIEW IF EXISTS `total_no_of_each_items_ordered`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_no_of_each_items_ordered`  AS SELECT `ORDER_DETAILS`.`item_id` AS `item_id`, `MENU`.`item_name` AS `item_name`, count(`ORDER_DETAILS`.`item_id`) AS `tot` FROM (`ORDER_DETAILS` join `MENU`) WHERE `ORDER_DETAILS`.`item_id` = `MENU`.`item__id` GROUP BY `ORDER_DETAILS`.`item_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BILL`
--
ALTER TABLE `BILL`
  ADD PRIMARY KEY (`Bill_No`),
  ADD KEY `customer_billing` (`C_id`);

--
-- Indexes for table `CUSTOMER`
--
ALTER TABLE `CUSTOMER`
  ADD PRIMARY KEY (`Customer_id`),
  ADD KEY `Table_connection` (`table_No`);

--
-- Indexes for table `deleted_items`
--
ALTER TABLE `deleted_items`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `EMPLOYEE`
--
ALTER TABLE `EMPLOYEE`
  ADD PRIMARY KEY (`EMP_id`),
  ADD KEY `supervising` (`Super_id`);

--
-- Indexes for table `MANAGES`
--
ALTER TABLE `MANAGES`
  ADD KEY `order_managed` (`Order_No`),
  ADD KEY `managing` (`EMP_id`);

--
-- Indexes for table `MENU`
--
ALTER TABLE `MENU`
  ADD PRIMARY KEY (`item__id`);

--
-- Indexes for table `ORDERS`
--
ALTER TABLE `ORDERS`
  ADD PRIMARY KEY (`Order_No`),
  ADD KEY `cust_orders` (`C_id`);

--
-- Indexes for table `ORDER_DETAILS`
--
ALTER TABLE `ORDER_DETAILS`
  ADD KEY `order_detail` (`Order_No`),
  ADD KEY `items_selected` (`item_id`);

--
-- Indexes for table `pass`
--
ALTER TABLE `pass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `PAYMENT`
--
ALTER TABLE `PAYMENT`
  ADD PRIMARY KEY (`PAYMENT_id`),
  ADD KEY `Pay_method` (`method_id`),
  ADD KEY `Bill_allocation` (`BILL_no`);

--
-- Indexes for table `PAY_METHOD`
--
ALTER TABLE `PAY_METHOD`
  ADD PRIMARY KEY (`M_id`);

--
-- Indexes for table `TABLE_`
--
ALTER TABLE `TABLE_`
  ADD PRIMARY KEY (`Table_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BILL`
--
ALTER TABLE `BILL`
  MODIFY `Bill_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `CUSTOMER`
--
ALTER TABLE `CUSTOMER`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `deleted_items`
--
ALTER TABLE `deleted_items`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `EMPLOYEE`
--
ALTER TABLE `EMPLOYEE`
  MODIFY `EMP_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `MENU`
--
ALTER TABLE `MENU`
  MODIFY `item__id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ORDERS`
--
ALTER TABLE `ORDERS`
  MODIFY `Order_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `pass`
--
ALTER TABLE `pass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `PAYMENT`
--
ALTER TABLE `PAYMENT`
  MODIFY `PAYMENT_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `PAY_METHOD`
--
ALTER TABLE `PAY_METHOD`
  MODIFY `M_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `TABLE_`
--
ALTER TABLE `TABLE_`
  MODIFY `Table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BILL`
--
ALTER TABLE `BILL`
  ADD CONSTRAINT `customer_billing` FOREIGN KEY (`C_id`) REFERENCES `CUSTOMER` (`Customer_id`);

--
-- Constraints for table `CUSTOMER`
--
ALTER TABLE `CUSTOMER`
  ADD CONSTRAINT `Table_connection` FOREIGN KEY (`table_No`) REFERENCES `TABLE_` (`Table_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `EMPLOYEE`
--
ALTER TABLE `EMPLOYEE`
  ADD CONSTRAINT `supervising` FOREIGN KEY (`Super_id`) REFERENCES `EMPLOYEE` (`EMP_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `MANAGES`
--
ALTER TABLE `MANAGES`
  ADD CONSTRAINT `managing` FOREIGN KEY (`EMP_id`) REFERENCES `EMPLOYEE` (`EMP_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_managed` FOREIGN KEY (`Order_No`) REFERENCES `ORDERS` (`Order_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ORDERS`
--
ALTER TABLE `ORDERS`
  ADD CONSTRAINT `cust_orders` FOREIGN KEY (`C_id`) REFERENCES `CUSTOMER` (`Customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ORDER_DETAILS`
--
ALTER TABLE `ORDER_DETAILS`
  ADD CONSTRAINT `items_selected` FOREIGN KEY (`item_id`) REFERENCES `MENU` (`item__id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail` FOREIGN KEY (`Order_No`) REFERENCES `ORDERS` (`Order_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `PAYMENT`
--
ALTER TABLE `PAYMENT`
  ADD CONSTRAINT `Bill_allocation` FOREIGN KEY (`BILL_no`) REFERENCES `BILL` (`Bill_No`),
  ADD CONSTRAINT `Pay_method` FOREIGN KEY (`method_id`) REFERENCES `PAY_METHOD` (`M_id`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
