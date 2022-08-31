-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 06:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `profileImage` text NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `contactNo` varchar(250) NOT NULL,
  `cnic` varchar(250) NOT NULL,
  `checkin` varchar(250) NOT NULL,
  `checkout` varchar(250) NOT NULL,
  `adultNo` int(11) NOT NULL,
  `childrenNo` int(11) NOT NULL,
  `roomType` varchar(250) NOT NULL,
  `noOfRoom` int(11) NOT NULL,
  `FoodPlan` varchar(250) NOT NULL,
  `paymentMethod` varchar(250) NOT NULL,
  `paymentSlip` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `profileImage`, `fullName`, `mail`, `contactNo`, `cnic`, `checkin`, `checkout`, `adultNo`, `childrenNo`, `roomType`, `noOfRoom`, `FoodPlan`, `paymentMethod`, `paymentSlip`, `date`) VALUES
(13, 'https://lh3.googleusercontent.com/a/AATXAJxkhfvcw6sPsJ12nttKDlRRAunQL4yufAkZznNq=s96-c', 'InnoPrince', 'innoprince7@gmail.com', '+923131112233', '35404-11122333-1', '2021-11-10', '2021-11-17', 5, 22, 'Basic>Queen room', 5, 'None', 'By Hand', '', '2021-11-05 13:01:08'),
(14, 'https://lh3.googleusercontent.com/a/AATXAJxkhfvcw6sPsJ12nttKDlRRAunQL4yufAkZznNq=s96-c', 'InnoPrince', 'innoprince7@gmail.com', '+923331122233', '35404-11122333-1', '2021-11-13', '2021-11-14', 3, 2, 'Premium>Single room', 1, 'Standard', 'By Hand', '', '2021-11-05 13:01:08'),
(15, 'https://lh3.googleusercontent.com/a/AATXAJxkhfvcw6sPsJ12nttKDlRRAunQL4yufAkZznNq=s96-c', 'InnoPrince', 'innoprince7@gmail.com', '03101112233', '35404-1111111-1', '2021-11-15', '2021-11-16', 2, 3, 'Standard>Queen room', 1, 'None', 'By Hand', '', '2021-11-09 13:35:39'),
(16, 'https://lh3.googleusercontent.com/a/AATXAJxkhfvcw6sPsJ12nttKDlRRAunQL4yufAkZznNq=s96-c', 'InnoPrince', 'innoprince7@gmail.com', '030111122333', '35303-4111111-1', '2021-11-12', '2021-11-13', 2, 1, 'Premium>Single room', 1, 'Basic', '', '', '2021-11-09 19:56:57'),
(17, 'https://lh3.googleusercontent.com/a/AATXAJxkhfvcw6sPsJ12nttKDlRRAunQL4yufAkZznNq=s96-c', 'InnoPrince', 'innoprince7@gmail.com', '030111122333', '35303-4111111-1', '2021-11-12', '2021-11-13', 2, 1, 'Premium>Single room', 1, 'Basic', '', '', '2021-11-09 20:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `categoryName` varchar(250) NOT NULL,
  `categoryType` varchar(250) NOT NULL,
  `categorySubType` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryType`, `categorySubType`, `date`) VALUES
(58, 'Event Planner', 'team', '', '2021-10-16 04:40:48'),
(59, 'Events Manager', 'team', 'Event Planner', '2021-10-16 04:41:21'),
(60, 'Executive Conference Manager', 'team', 'Event Planner', '2021-10-16 04:41:59'),
(61, 'Executive Meeting Manager', 'team', 'Event Planner', '2021-10-16 04:42:57'),
(62, 'Meeting and Convention Planner', 'team', 'Event Planner', '2021-10-16 05:18:09'),
(63, 'Meeting Coordinator', 'team', 'Event Planner', '2021-10-16 05:18:29'),
(64, 'Meeting Manager', 'team', 'Event Planner', '2021-10-16 05:18:44'),
(65, 'Meeting Planner', 'team', 'Event Planner', '2021-10-16 05:18:56'),
(66, 'Meeting Specialist', 'team', 'Event Planner', '2021-10-16 05:19:10'),
(67, 'Special Events Manager', 'team', 'Event Planner', '2021-10-16 05:19:22'),
(68, 'Wedding Coordinator', 'team', 'Event Planner', '2021-10-16 05:19:36'),
(69, 'Executive Chef', 'team', '', '2021-10-16 05:21:10'),
(70, 'Cafe Manager', 'team', 'Executive Chef', '2021-10-16 05:22:17'),
(71, 'Catering Manager', 'team', 'Executive Chef', '2021-10-16 05:23:12'),
(72, 'Chef', 'team', 'Executive Chef', '2021-10-16 05:23:23'),
(73, 'Cook', 'team', 'Executive Chef', '2021-10-16 05:23:36'),
(74, 'Food and Beverage Manager', 'team', 'Executive Chef', '2021-10-16 05:23:46'),
(75, 'Kitchen Manager', 'team', 'Executive Chef', '2021-10-16 05:24:35'),
(76, 'Pastry Chef', 'team', 'Executive Chef', '2021-10-16 05:24:48'),
(77, 'Restaurant Manager', 'team', 'Executive Chef', '2021-10-16 05:24:58'),
(78, 'Sous Chef', 'team', 'Executive Chef', '2021-10-16 05:25:08'),
(79, 'Hotel General Manager', 'team', '', '2021-10-16 05:25:29'),
(80, 'Back Office Assistant', 'team', 'Hotel General Manager', '2021-10-16 05:27:06'),
(81, 'Catering Sales Manager', 'team', 'Hotel General Manager', '2021-10-16 05:27:29'),
(82, 'Director of Hotel Sales', 'team', 'Hotel General Manager', '2021-10-16 05:27:39'),
(83, 'Director of Marketing and Sales', 'team', 'Hotel General Manager', '2021-10-16 05:27:49'),
(84, 'Group Sales Manager', 'team', 'Hotel General Manager', '2021-10-16 05:27:59'),
(85, 'Guest Room Sales Manager', 'team', 'Hotel General Manager', '2021-10-16 05:28:08'),
(86, 'Hotel Manager', 'team', 'Hotel General Manager', '2021-10-16 05:28:18'),
(87, 'Lodging Manager', 'team', 'Hotel General Manager', '2021-10-16 05:40:02'),
(88, 'Sales and Marketing Manager', 'team', 'Hotel General Manager', '2021-10-16 05:40:17'),
(89, 'Shift Leader', 'team', 'Hotel General Manager', '2021-10-16 05:40:32'),
(90, 'Shift Manager', 'team', 'Hotel General Manager', '2021-10-16 05:40:44'),
(91, 'Wedding Sales Manager', 'team', 'Hotel General Manager', '2021-10-16 05:40:55'),
(92, 'Housekeeper', 'team', '', '2021-10-16 05:41:20'),
(93, 'Director of Housekeeping', 'post', 'Housekeeper', '2021-10-16 05:42:05'),
(94, 'Director of Housekeeping', 'team', 'Housekeeper', '2021-10-16 05:42:16'),
(95, 'Director of Maintenance', 'team', 'Housekeeper', '2021-10-16 05:43:04'),
(96, 'Director of Operations', 'team', 'Housekeeper', '2021-10-16 05:43:16'),
(97, 'Executive Housekeeper', 'team', 'Housekeeper', '2021-10-16 05:43:28'),
(98, 'Housekeeper', 'team', 'Housekeeper', '2021-10-16 05:43:48'),
(99, 'Housekeeping Aide', 'team', 'Housekeeper', '2021-10-16 05:43:59'),
(100, 'Housekeeping Supervisor', 'team', 'Housekeeper', '2021-10-16 05:44:11'),
(101, 'Lead Housekeeper', 'team', 'Housekeeper', '2021-10-16 05:44:23'),
(102, 'Maid', 'team', 'Housekeeper', '2021-10-16 05:44:33'),
(103, 'Maintenance Supervisor', 'team', 'Housekeeper', '2021-10-16 05:44:46'),
(104, 'Maintenance Worker', 'team', 'Housekeeper', '2021-10-16 05:45:06'),
(117, 'Queen room', 'room', '', '2021-10-18 00:45:28'),
(118, 'Basic', 'room', 'Queen room', '2021-10-18 00:46:36'),
(119, 'Standard', 'room', 'Queen room', '2021-10-18 00:46:45'),
(120, 'Premium', 'room', 'Queen room', '2021-10-18 00:46:54'),
(121, 'Single room', 'room', '', '2021-10-18 00:47:54'),
(122, 'Basic', 'room', 'Single room', '2021-10-18 00:48:18'),
(123, 'Standard', 'room', 'Single room', '2021-10-18 00:48:25'),
(124, 'Premium', 'room', 'Single room', '2021-10-18 00:48:32'),
(125, 'Double room', 'room', '', '2021-10-18 00:49:22'),
(126, 'Basic', 'room', 'Double room', '2021-10-18 00:49:42'),
(127, 'Standard', 'room', 'Double room', '2021-10-18 00:49:52'),
(128, 'Premium', 'room', 'Double room', '2021-10-18 00:49:59'),
(129, 'Family room', 'room', '', '2021-10-18 00:50:57'),
(130, 'Basic', 'room', 'Family room', '2021-10-18 00:51:33'),
(131, 'Standard', 'room', 'Family room', '2021-10-18 00:51:40'),
(132, 'Premium', 'room', 'Family room', '2021-10-18 00:51:47'),
(133, 'Executive room', 'room', '', '2021-10-18 00:52:38'),
(134, 'Basic', 'room', 'Executive room', '2021-10-18 00:52:56'),
(135, 'Standard', 'room', 'Executive room', '2021-10-18 00:53:05'),
(136, 'Premium', 'room', 'Executive room', '2021-10-18 00:53:12'),
(137, 'Club room', 'room', '', '2021-10-18 00:54:03'),
(138, 'Basic', 'room', 'Club room', '2021-10-18 00:54:23'),
(139, 'Standard', 'room', 'Club room', '2021-10-18 00:54:32'),
(140, 'Premium', 'room', 'Club room', '2021-10-18 00:54:44'),
(141, 'Suite', 'room', '', '2021-10-18 00:55:23'),
(142, 'Basic', 'room', 'Suite', '2021-10-18 00:56:03'),
(143, 'Standard', 'room', 'Suite', '2021-10-18 00:56:10'),
(144, 'Premium', 'room', 'Suite', '2021-10-18 00:56:17'),
(145, 'Room', 'gallery', '', '2021-10-28 03:27:30'),
(146, 'Queen room', 'gallery', 'Room', '2021-10-28 03:28:59'),
(147, 'Single room', 'gallery', 'Room', '2021-10-28 03:45:31'),
(148, 'Double room', 'gallery', 'Room', '2021-10-28 03:45:47'),
(149, 'Burger', 'food', '', '2021-10-28 11:48:37'),
(150, 'Ice-cream', 'food', '', '2021-10-28 11:49:36'),
(151, 'Cold drink', 'food', '', '2021-10-28 11:49:52'),
(152, 'Pizza', 'food', '', '2021-10-28 11:50:05'),
(153, 'Zinger Burger', 'food', 'Burger', '2021-10-28 12:05:08'),
(154, 'Sandwich', 'food', '', '2021-10-28 12:59:23'),
(155, 'Other', 'food', '', '2021-10-28 13:13:34'),
(156, 'Drinks', 'food', '', '2021-10-28 13:14:33'),
(157, 'Fries', 'food', '', '2021-10-28 13:15:52'),
(158, 'NUGGETS', 'food', '', '2021-10-28 13:17:11'),
(159, 'Corona', 'post', '', '2021-10-29 09:55:05'),
(160, 'Drawing room', 'room', '', '2021-11-03 10:06:29'),
(161, 'Hotel', 'room', 'Premium', '2021-11-04 19:50:43'),
(162, 'About us', 'post', '', '2021-11-05 10:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `customerName` varchar(250) NOT NULL,
  `customerImage` varchar(250) NOT NULL,
  `CustomerMail` varchar(250) NOT NULL,
  `CustomerContact` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customerName`, `customerImage`, `CustomerMail`, `CustomerContact`, `date`) VALUES
(0, 'Ahsan Jutt', 'https://lh3.googleusercontent.com/a-/AOh14GiY-2-q9kgwtmEHsSXLkbr1yaQW764L83sKBEvHZw=s96-c', 'jutt.mail070@gmail.com', '', '2021-10-14 04:58:46'),
(0, 'Muhammad Ahsan Yousaf', 'https://lh3.googleusercontent.com/a-/AOh14GgEFC1FyV5GMdrhgojJnKNuQlGirG7Dg3BLqxkn=s96-c', 'm.ahsanyousaf5@gmail.com', '', '2021-10-19 04:39:15'),
(0, 'Muhammad Ahsan Yousaf', 'https://lh3.googleusercontent.com/a-/AOh14GgEFC1FyV5GMdrhgojJnKNuQlGirG7Dg3BLqxkn=s96-c', 'm.ahsanyousaf5@gmail.com', '', '2021-10-19 05:16:56'),
(0, 'Muhammad Ahsan Yousaf', 'https://lh3.googleusercontent.com/a-/AOh14GgEFC1FyV5GMdrhgojJnKNuQlGirG7Dg3BLqxkn=s96-c', 'm.ahsanyousaf5@gmail.com', '', '2021-10-19 09:38:25'),
(0, 'Muhammad Ahsan Yousaf', 'https://lh3.googleusercontent.com/a-/AOh14GgEFC1FyV5GMdrhgojJnKNuQlGirG7Dg3BLqxkn=s96-c', 'm.ahsanyousaf5@gmail.com', '', '2021-10-19 12:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `erd`
--

CREATE TABLE `erd` (
  `ERD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(10) NOT NULL,
  `featureName` varchar(250) NOT NULL,
  `featureType` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `featureName`, `featureType`, `date`) VALUES
(1, 'Air conditioner', 'room', '2021-10-13 01:41:46'),
(2, 'Dryer', 'room', '2021-10-13 08:56:08'),
(3, 'Gym', 'room', '2021-10-13 08:56:21'),
(4, 'Laundry', 'room', '2021-10-13 08:56:38'),
(5, 'Lawn', 'room', '2021-10-13 08:56:55'),
(6, 'Microwave', 'room', '2021-10-13 08:57:24'),
(7, 'Outdoor shower', 'room', '2021-10-13 08:58:04'),
(8, 'Refrigerator', 'room', '2021-10-13 08:58:28'),
(9, 'Swimming pool', 'room', '2021-10-13 08:58:50'),
(10, 'TV cable', 'room', '2021-10-13 08:59:00'),
(11, 'Wifi', 'room', '2021-10-13 08:59:11'),
(12, 'Window coverings', 'room', '2021-10-13 08:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(10) NOT NULL,
  `foodName` varchar(250) NOT NULL,
  `foodSize` varchar(50) NOT NULL,
  `foodType` varchar(250) NOT NULL,
  `foodPrice` varchar(250) NOT NULL,
  `foodImage` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `foodName`, `foodSize`, `foodType`, `foodPrice`, `foodImage`, `date`) VALUES
(5, '32 EGG MCMUFFIN', 'Burger', '', '350', '8301299372.jpg', '2021-10-28 12:34:16'),
(6, 'CHEESE2BURGER', 'Burger', '', '300', '3469700816.jpg', '2021-10-28 12:35:43'),
(7, 'CHEESEBURGER', 'Burger', '', '320', '7762055349.jpg', '2021-10-28 12:37:05'),
(8, 'DOUBLE SHACK', 'Burger', '', '480', '4612719016.jpg', '2021-10-28 12:37:38'),
(9, 'FILET-O-FISH', 'Burger', '', '560', '2838198619.jpg', '2021-10-28 12:38:59'),
(10, 'MCGRIDDLE', 'Burger', '', '660', '6668521549.jpg', '2021-10-28 12:44:22'),
(11, 'QUARTER POUNDER', 'Burger', '', '750', '3472859504.jpg', '2021-10-28 12:47:42'),
(12, 'SHAKESHACK', 'Burger', '', '750', '3669634445.jpg', '2021-10-28 12:49:15'),
(13, 'STEAKBURGER', 'Burger', '', '850', '4167291247.jpg', '2021-10-28 12:50:00'),
(14, 'WHOPPER', 'Burger', '', '710', '6090378852.jpg', '2021-10-28 12:50:44'),
(15, 'ANIMAL STYLE', 'Burger', '', '350', '4879704913.jpg', '2021-10-28 12:51:27'),
(16, 'BACON CHEESEBURGER', 'Burger', '', '320', '7673667048.jpg', '2021-10-28 12:52:08'),
(17, 'BIG MAC', 'Burger', '', '450', '125423450.jpg', '2021-10-28 12:53:58'),
(19, 'SPICY CHICKEN', 'Sandwich', '', '550', '2559544992.jpg', '2021-10-28 13:02:55'),
(20, 'CHEESE CURDS', 'Other', '', '780', '6118791066.jpg', '2021-10-28 13:14:03'),
(21, 'CHERRY LIMEADE', 'Ice-cream', '', '250', '5953081502.jpg', '2021-10-28 13:15:07'),
(22, 'CHICKEN FINGERS', 'Fries', '', '220', '419287251.jpg', '2021-10-28 13:16:24'),
(23, 'CHICKEN NUGGETS', 'NUGGETS', '', '370', '4935142520.jpg', '2021-10-28 13:18:20'),
(24, 'CHICKEN QUESADILLA', 'Other', '', '250', '4371497668.jpg', '2021-10-28 13:19:05'),
(25, 'CHICKEN', 'Other', '', '260', '5392258383.jpg', '2021-10-28 13:19:37'),
(26, 'CURLY FRIES', 'Fries', '', '450', '2576555385.jpg', '2021-10-28 13:20:04'),
(27, 'ANIMAL STYLE', 'Fries', '', '350', '1679269164.jpg', '2021-10-28 13:21:07'),
(28, 'Cajun', 'Fries', '', '220', '6476795819.jpg', '2021-10-28 13:21:37'),
(29, 'GLAZED DOUGHNUT', 'Other', '', '350', '7483068543.jpg', '2021-10-28 13:22:16'),
(30, 'HASH BROWNS', 'Other', '', '150', '469936817.jpg', '2021-10-28 13:22:49'),
(31, 'BLIZZARD DAIRY QUEEN', 'Ice-cream', '', '90', '8790114619.jpg', '2021-10-28 13:23:59'),
(32, 'FROSTY WENDY', 'Ice-cream', '', '120', '6327765501.jpg', '2021-10-28 13:24:51'),
(33, 'Ice-cream MCFLURRY MCDONALD', 'Ice-cream', '', '360', '4318297904.jpg', '2021-10-28 13:25:23'),
(34, 'MASHED POTATOS AND CAJUN GRAVY', 'Other', '', '650', '8201429399.jpg', '2021-10-28 13:26:17'),
(35, 'NUGGETS MCNUGGETS', 'NUGGETS', '', '550', '9100679889.jpg', '2021-10-28 13:26:53'),
(36, 'PRETZEL', 'Other', '', '150', '7783978467.jpg', '2021-10-28 13:27:23'),
(37, 'CHEESY GORDITA CRUNCH', 'Sandwich', '', '440', '5569423424.jpg', '2021-10-28 13:39:26'),
(38, 'HONEY BBQ CHICKEN', 'Sandwich', '', '220', '3460396141.jpg', '2021-10-28 13:40:24'),
(39, 'ORIGINAL CHICKEN', 'Sandwich', '', '60', '1351047432.jpg', '2021-10-28 13:41:03'),
(40, 'ROAST BEEF', 'Sandwich', '', '260', '9007325017.jpg', '2021-10-28 13:41:38'),
(41, 'SPICY CHICKEN DELUXE', 'Sandwich', '', '330', '4471965499.jpg', '2021-10-28 13:43:56'),
(42, 'SOFT COOKIES', 'Other', '', '150', '4697481170.jpg', '2021-10-28 13:45:30'),
(43, 'SOFT TACOS', 'Other', '', '220', '3113155983.jpg', '2021-10-28 13:46:08'),
(44, 'TENDERS CHICKEN', 'Other', '', '260', '2810494604.jpg', '2021-10-28 13:46:36');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `imageName` varchar(250) NOT NULL,
  `imageSubCategory` varchar(250) NOT NULL,
  `imageCategory` varchar(250) NOT NULL,
  `addBy` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `imageName`, `imageSubCategory`, `imageCategory`, `addBy`, `date`) VALUES
(20, '2533986596.jpg', '', '', 'admin', '2021-10-28 03:42:42'),
(21, '9110019515.jpg', '', '', 'admin', '2021-10-28 03:46:42'),
(22, '9658959591.jpg', '', '', 'admin', '2021-10-28 03:47:00'),
(23, '3761407975.png', '', '', 'admin', '2021-10-29 09:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(250) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `mail`, `Date`) VALUES
(2, 'm.ahsanyousaf5@gmail.com', '2021-10-12 01:24:31'),
(3, 'admin@admin.com', '2021-10-12 01:24:31'),
(4, 'anil@gmail.com', '2021-10-12 01:24:31'),
(5, 'ali', '2021-10-12 01:24:31'),
(6, 'alidanish3e@gmail.com', '2021-10-12 10:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `postImage` varchar(250) NOT NULL,
  `postName` varchar(250) NOT NULL,
  `postCategory` varchar(250) NOT NULL,
  `postText` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `postImage`, `postName`, `postCategory`, `postText`, `date`) VALUES
(11, '3798386382.jpg', 'About our Royal Sheikhupura Hotel', 'About us', '<h3><strong>Our Royal Sheikhupura Hotel is one of the best luxury hotels in our state. We offer high-quality accommodation with a wide variety of rooms, additional services, and amenities available to all our guests.&nbsp;You can always feel comfortable in your room, having the right surroundings to relax and reload as it is very important while staying at Hotel. We offer a wide variety of hotel facilities including what you require.</strong></h3>\r\n\r\n<h3><strong>At our Royal Sheikhupura Hotel, there is a variety of rooms to choose from. Whether you are a casual traveler or a person demanding luxury or a standard room, you won&rsquo;t be disappointed after trying our services.&nbsp;</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-11-05 17:43:23'),
(12, '5387653252.png', 'Our Vision & Mission', 'About us', '<h2><strong>We (Royal Sheikhupura Hotel) deliver trust and we try to make our customers feel comfortable and happy!</strong></h2>\r\n\r\n<h2><strong>Our main mission and goal is to serve our clients and customers in a very good way so that all of their requirements gets fulfilled.</strong></h2>\r\n\r\n<h2><strong>Our main objective for our Royal Sheikhupura hotel is to be practical in this very fast running world and be the best in our state.</strong></h2>\r\n\r\n<h2><strong>The overview of our Royal Sheikhupura hotel is that we have booking page for our valuable clients where they can sign up and process forward and we have a proper team to manage all the stuff and services, respectively.</strong></h2>\r\n', '2021-11-05 17:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(5) NOT NULL,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `objective` text NOT NULL,
  `coreValue` text NOT NULL,
  `overview` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `vision`, `mission`, `objective`, `coreValue`, `overview`) VALUES
(0, '<h2><span style=\"color:#27ae60\"><span style=\"font-family:Georgia,serif\"><strong>We deliver trust and we try to make our customers feel comfortable and happy!</strong></span></span></h2>\n', '<h2><strong><span style=\"color:#27ae60\">Our main mission and goal is to serve our clients and customers in a very good way so that all of their requirements gets fulfilled&nbsp;</span></strong></h2>\n', '<h2><strong><span style=\"color:#27ae60\">Our main objective for our Royal Sheikhupura hotel is to be practical in this very fast running world and be the best in our state&nbsp;</span></strong></h2>\n', '<ul>\n	<li>\n	<h3><span style=\"color:#27ae60\"><strong>Delivering Quality.</strong></span></h3>\n	</li>\n	<li>\n	<h3><span style=\"color:#27ae60\"><strong>Living Integrity.</strong></span></h3>\n	</li>\n	<li>\n	<h3><span style=\"color:#27ae60\"><strong>Supporting Community.</strong></span></h3>\n	</li>\n	<li>\n	<h3><span style=\"color:#27ae60\"><strong>Growing Profitability.</strong></span></h3>\n	</li>\n	<li>\n	<h3><span style=\"color:#27ae60\"><strong>Having Fun.</strong></span></h3>\n	</li>\n</ul>\n', '<h2><span style=\"color:#27ae60\"><strong>The overview of our Royal Sheikhupura hotel is that we have booking page for our valuable clients where they can sign up and process forward and we have a proper team to manage all the stuff and services, respectively.</strong></span></h2>\n');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) NOT NULL,
  `roomImage` varchar(250) NOT NULL,
  `roomTitle` varchar(250) NOT NULL,
  `roomType` varchar(250) NOT NULL,
  `roomSubType` varchar(250) NOT NULL,
  `roomAbout` text NOT NULL,
  `noORoom` int(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `roomImage`, `roomTitle`, `roomType`, `roomSubType`, `roomAbout`, `noORoom`, `date`) VALUES
(1, '9219492531.jpg', 'A-1', 'Queen room', 'Basic', 'Fantastic room', 8, '0000-00-00 00:00:00'),
(22, '6848481456.jpg', 'A-2', 'Queen room', 'Standard', 'Fantastic room', 7, '0000-00-00 00:00:00'),
(23, '8746832056.jpg', 'A-3', 'Queen room', 'Premium', 'Fantastic room', 3, '0000-00-00 00:00:00'),
(24, '2667475527.jpg', 'B-1', 'Single room', 'Basic', 'Fantastic room', 10, '0000-00-00 00:00:00'),
(25, '2989597307.jpg', 'B-2', 'Single room', 'Standard', 'Fantastic room', 5, '0000-00-00 00:00:00'),
(26, '1355426114.jpg', 'B-3', 'Single room', 'Premium', 'Fantastic room', 5, '0000-00-00 00:00:00'),
(27, '2538969005.jpg', 'C-1', 'Double room', 'Basic', 'Fantastic room', 7, '0000-00-00 00:00:00'),
(28, '6769121869.jpg', 'C-2', 'Double room', 'Standard', 'Fantastic room', 5, '0000-00-00 00:00:00'),
(29, '230804374.jpg', 'C-3', 'Double room', 'Premium', 'Fantastic room', 5, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment_sender_name` varchar(250) NOT NULL,
  `comment_mail` varchar(250) NOT NULL,
  `comment` text NOT NULL,
  `comment_status` int(5) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment_sender_name`, `comment_mail`, `comment`, `comment_status`, `date`) VALUES
(26, 0, 'M. Ahsan', 'm.qayum@gmail.com', 'Very good service', 0, '2021-11-03 09:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) NOT NULL,
  `teamImage` varchar(250) NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `contactNo` varchar(250) NOT NULL,
  `contactNoStatus` int(5) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `mailStatus` int(5) NOT NULL,
  `teamRole` varchar(250) NOT NULL,
  `passkey` varchar(250) NOT NULL,
  `facebookLink` varchar(250) NOT NULL,
  `facebookLinkStatus` int(5) NOT NULL,
  `instagramLink` varchar(250) NOT NULL,
  `instagramLinkStatus` int(5) NOT NULL,
  `linkedinLink` varchar(250) NOT NULL,
  `linkedinLinkStatus` int(5) NOT NULL,
  `teamAbout` text NOT NULL,
  `teamStatus` int(5) NOT NULL,
  `cardStatus` int(5) NOT NULL,
  `addBy` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `teamImage`, `fullName`, `contactNo`, `contactNoStatus`, `mail`, `mailStatus`, `teamRole`, `passkey`, `facebookLink`, `facebookLinkStatus`, `instagramLink`, `instagramLinkStatus`, `linkedinLink`, `linkedinLinkStatus`, `teamAbout`, `teamStatus`, `cardStatus`, `addBy`, `date`) VALUES
(3, '7212147552.jpg', 'Manager 2', '+923011234567', 1, '1', 1, 'Event Planner', 'man@12345', '#', 1, '#', 1, '#', 1, 'Event planner', 1, 1, 'manager', '2021-11-09 13:18:52'),
(4, '9980859449.png', 'Chef', '03011234567', 1, '1', 1, 'Event Planner', 'chef@123456', '#', 1, '#', 1, '#', 1, 'About', 1, 1, 'admin', '2021-11-09 13:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `usermails`
--

CREATE TABLE `usermails` (
  `id` int(10) NOT NULL,
  `replyId` int(11) NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `shortname` varchar(250) NOT NULL,
  `contactNo` varchar(100) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `userMessage` text NOT NULL,
  `messageStatus` int(5) NOT NULL,
  `replyStatus` int(5) NOT NULL,
  `receiveingDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cnic` varchar(250) NOT NULL,
  `reigion` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `province` varchar(250) NOT NULL,
  `ciity` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usermails`
--

INSERT INTO `usermails` (`id`, `replyId`, `fullName`, `shortname`, `contactNo`, `mail`, `userMessage`, `messageStatus`, `replyStatus`, `receiveingDate`, `cnic`, `reigion`, `country`, `province`, `ciity`) VALUES
(16, 0, 'client-name', '', '03097800231', 'admin@admin.com', 'Ji', 1, 0, '2021-10-29 09:38:12', '', '', '', '', ''),
(17, 0, 'Hina javed', '', '03011234567', 'hinajaved@gmail.com', 'Hi', 1, 0, '2021-10-14 16:27:53', '', '', '', '', ''),
(18, 0, 'Jamil Khan', '', '+923097800231', 'Jamil@gmail.com', 'Hi', 1, 0, '2021-10-14 16:27:45', '', '', '', '', ''),
(19, 0, 'New client', '', '03211446114', 'mirzaazeem@gmail.com', 'Hello sir', 1, 0, '2021-10-12 10:36:28', '', '', '', '', ''),
(20, 0, 'Muhammad Faizan', '', '03001234567', 'admin@admin.com', 'Setting', 1, 0, '2021-10-12 10:35:44', '', '', '', '', ''),
(30, 15, '[Admin', 'admin', '+923097800231', 'info@mail.com', 'Lo ji', 1, 0, '2021-11-03 19:51:05', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `profileImage` varchar(250) NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `contactNo` varchar(150) NOT NULL,
  `contactNoStatus` int(10) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `mailStatus` int(10) NOT NULL,
  `passkey` varchar(200) NOT NULL,
  `userRole` varchar(250) NOT NULL,
  `userStatus` int(5) NOT NULL,
  `addBy` varchar(200) NOT NULL,
  `aboutUser` text NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fbLink` text NOT NULL,
  `fbLinkStatus` int(10) NOT NULL,
  `instagramLink` text NOT NULL,
  `instagramStatus` int(10) NOT NULL,
  `linkedinLink` text NOT NULL,
  `linkedinLinkStatus` int(10) NOT NULL,
  `cardStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profileImage`, `fullName`, `contactNo`, `contactNoStatus`, `mail`, `mailStatus`, `passkey`, `userRole`, `userStatus`, `addBy`, `aboutUser`, `regDate`, `fbLink`, `fbLinkStatus`, `instagramLink`, `instagramStatus`, `linkedinLink`, `linkedinLinkStatus`, `cardStatus`) VALUES
(31, '4112255520.jpg', 'Syed Abbas Kazmi', '+923131112233', 1, 'admin', 1, 'admin@12345', 'Admin', 1, 'admin', 'Developer\r\n', '2021-11-09 13:15:30', '#', 1, '#', 1, '#', 1, 1),
(38, '5831812720.png', 'Amna Malik', '+923011234567', 1, 'manager', 1, 'man@12345', 'Manager', 1, 'manager', '', '2021-11-09 13:18:06', '#', 1, '#', 1, '#', 1, 1),
(39, '4377272260.png', 'M Faizan', '+923331122233', 1, 'recep', 1, 'recep@12345', 'Receptionist', 1, 'admin', '', '2021-11-09 13:16:55', '#', 1, '#', 1, '#', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `webinfo`
--

CREATE TABLE `webinfo` (
  `id` int(11) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `companyName` varchar(250) NOT NULL,
  `companyTagLine` text NOT NULL,
  `companyContactNo` varchar(250) NOT NULL,
  `companyEmail` varchar(250) NOT NULL,
  `companyAddress` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webinfo`
--

INSERT INTO `webinfo` (`id`, `logo`, `companyName`, `companyTagLine`, `companyContactNo`, `companyEmail`, `companyAddress`, `date`) VALUES
(1, '4839859805.png', 'Royal Sheikhupura Hotel', 'We deliver trust', '+923011234567', 'info@royal.com', 'Batti Chowk Sheikhupura', '2021-11-03 16:31:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermails`
--
ALTER TABLE `usermails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webinfo`
--
ALTER TABLE `webinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usermails`
--
ALTER TABLE `usermails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `webinfo`
--
ALTER TABLE `webinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
