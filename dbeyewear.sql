-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 08:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbeyewear`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'Amankiran', '123ak45');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(800) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `postby` varchar(100) NOT NULL,
  `poston` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `picture`, `postby`, `poston`) VALUES
(6, 'DESIGNER SPECS FRAMES EYEGLASSES & CHASMA FRAMES', 'Looking for the most durable yet stylish Chasma frames? Look no further than IDEE Eyewear. We present you with the best collection of eyeglasses frames for men and women. IDEE understands that your specs frames must be stylish as you have to wear them every day. Our specs frames collection is the most stylish and diverse such as square, rectangle, ', 'best-sunglasses-women.webp', 'admin', '2024-07-17'),
(7, 'POLARIZED VS. NON-POLARIZED - BEST SUNGLASSES FOR EYE SAFETY', 'When the sun shines brighter and days get longer, sunglasses become an essential accessory to shield your eyes from the harsh glare and stand out as a beacon of style...', '360_F_661529031_wrlGD9mUoCVteCRSDZOzKT98CfHU6eSX.jpg', 'admin', '2024-07-17'),
(8, 'ALL YOU NEED TO KNOW ABOUT UV-PROTECTED SUNGLASSES', 'At some point in the day, we all indulge in heading outdoors for some work or the other. Be it regular office visits or handling chores, these activities can never be ignored. So can’t our eyes with harmful UV rays hitting right on them.\r\n\r\nA good pair of UV-protected sunglasses shields your eyes from these rays in the long run. Being exposed to too much sunlight and harmful rays may cause your eyelids to contract melanoma. In addition to this, those who are engaged in constant outdoor activities have higher chances of witnessing early signs of cataract.\r\n\r\nIn addition to this, there have been several myths relative to the usage of these pairs. Most markets tend to offer darker shades over lighter and reflective ones. Individuals are under the impression that darker shades come with better', 'category3-prescription.jpg', 'admin', '2024-07-17'),
(9, '2024 Vision: YourSpex Unveils the Hottest Eyewear Trends to Elevate Your Style', 'Steering through the ever-changing trends can be challenging especially when new trends emerge every 15 days. With a wide selection of eyewear options and trends evolving, adapting to the zeitgeist of our time is deemed necessary. 2024 is right around the corner and we are here with defining eyewear trends to help you pick frames that are right for you. Here are 5 trends that you wouldn’t want to miss out on. Let’s see which resonates with your personality! Cat Eye Frames \r\nCat-eye spectacle frames are a timeless option which effortlessly blends vintage glamour with a contemporary flair. The feline-inspired design adds a touch of mystique to any look, framing the eyes with a subtle yet captivating allure. \r\n\r\nWhether you’re aiming for a sophisticated office fit, or a dressy evening outing,', 'design-sect-pn1nv6oznl5nueqhyuiyembh9zgfumb1p6pl4obwc4.jpg', 'admin', '2024-07-19'),
(10, 'WHY BEING CAUTIOUS WITH QUIRKY PRODUCTS IS A GOOD IDEA', 'WHY BEING CAUTIOUS WITH QUIRKY PRODUCTS IS A GOOD IDEA\r\nBrowsing Olympic Eyewear\'s inventory of wholesale sunglasses makes it clear that we do not spend a lot of time focusing on quirky, kitschy, novelty products. One could argue that our most radical product line is our selection of shield sunglasses. But even the shield shape is pretty mainstream.\r\n\r\nWe take the position that being cautious with quirky products is a good idea. Yes, there are times when novelty sunglasses are appropriate. There are times when they do sell. But it is difficult to build a solid business with growth potential by focusing on quirky, kitschy, novelty products with limited appeal.\r\n\r\nLIMITING YOUR AUDIENCE\r\nAs a company that specializes in bulk sunglasses at wholesale prices, we are constantly aware of the need', '240_F_127154936_1zPSMtnW4Vtr4Whoe7xNCWwZ6Ay7mkBd.jpg', 'admin', '2024-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL,
  `curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Id`, `Name`, `Email`, `Subject`, `Message`, `curdate`) VALUES
(1, 'zd', 'kh@kjkl', 'jhg', 'jh', '2024-07-10'),
(2, 'zd', 'kh@kjkl', 'jhg', 'jh', '2024-07-10'),
(3, '', '', '', '', '2024-07-11'),
(4, '', '', '', '', '2024-07-11'),
(5, '', '', '', '', '2024-07-11'),
(6, '', '', '', '', '2024-07-11'),
(7, '', '', '', '', '2024-07-11'),
(8, '', '', '', '', '2024-07-11'),
(9, '', '', '', '', '2024-07-12'),
(10, '', '', '', '', '2024-07-19'),
(11, '', '', '', '', '2024-07-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
