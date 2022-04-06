-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 09:08 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebakeryshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` text COLLATE utf8_bin NOT NULL,
  `aemail` text COLLATE utf8_bin NOT NULL,
  `a_address` text COLLATE utf8_bin NOT NULL,
  `aphone_no` text COLLATE utf8_bin NOT NULL,
  `apassword` text COLLATE utf8_bin NOT NULL,
  `aconfirm_pass` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `aemail`, `a_address`, `aphone_no`, `apassword`, `aconfirm_pass`) VALUES
(1, 'admin', 'admin@gmail.com', 'Lanmadaw', '0985475632', '1234', '1234'),
(2, 'Jone', 'jone@gmail.com', 'SouthDagon', '09251859665', 'asd', 'asd'),
(4, 'Zoro', 'Zoro@gmail.com', 'GrandLine', '09957074505', 'asdf', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `odate` date NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `odate`, `uid`) VALUES
(1, '2022-03-30', 8),
(2, '2022-03-30', 8),
(3, '2022-03-30', 6),
(4, '2022-03-30', 8),
(5, '2022-03-30', 8),
(6, '2022-03-30', 8),
(7, '2022-03-30', 6),
(8, '2022-03-30', 6),
(9, '2022-03-30', 8),
(10, '2022-03-31', 8),
(11, '2022-03-31', 6),
(12, '2022-03-31', 6),
(13, '2022-03-31', 8),
(14, '2022-03-31', 8),
(15, '2022-03-31', 4),
(16, '2022-03-31', 4),
(17, '2022-03-31', 8),
(18, '2022-03-31', 6),
(19, '2022-03-31', 6),
(20, '2022-03-31', 4),
(21, '2022-03-31', 5),
(22, '2022-03-31', 4),
(23, '2022-03-31', 6),
(24, '2022-03-31', 8),
(25, '2022-03-31', 6),
(26, '2022-03-31', 8),
(27, '2022-03-31', 8),
(28, '2022-03-31', 8),
(29, '2022-03-31', 6),
(30, '2022-03-31', 6),
(31, '2022-03-31', 6),
(32, '2022-04-01', 6),
(33, '2022-04-01', 10),
(34, '2022-04-01', 10),
(35, '2022-04-01', 11),
(36, '2022-04-04', 6),
(37, '2022-04-04', 12),
(38, '2022-04-04', 12),
(39, '2022-04-05', 13),
(40, '2022-04-05', 13);

-- --------------------------------------------------------

--
-- Table structure for table `order_line`
--

CREATE TABLE `order_line` (
  `oid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `order_line`
--

INSERT INTO `order_line` (`oid`, `pid`, `qty`, `price`) VALUES
(13, 3, 2, 2500),
(14, 5, 3, 4000),
(16, 4, 2, 2000),
(0, 2, 2, 3000),
(0, 14, 3, 5000),
(0, 1, 2, 2000),
(0, 6, 3, 3000),
(0, 2, 3, 3000),
(0, 13, 5, 500),
(21, 5, 2, 4000),
(21, 14, 3, 5000),
(22, 2, 3, 9000),
(22, 4, 4, 17000),
(23, 2, 3, 9000),
(23, 6, 2, 15000),
(24, 2, 3, 9000),
(24, 15, 2, 15000),
(25, 1, 3, 6000),
(25, 14, 3, 15000),
(26, 5, 4, 16000),
(26, 14, 4, 20000),
(27, 2, 2, 6000),
(27, 6, 3, 9000),
(28, 2, 3, 9000),
(28, 4, 3, 6000),
(29, 2, 3, 9000),
(29, 14, 2, 10000),
(30, 2, 3, 9000),
(30, 4, 2, 4000),
(31, 1, 2, 4000),
(31, 3, 3, 7500),
(32, 3, 2, 5000),
(32, 14, 3, 15000),
(33, 3, 2, 5000),
(33, 4, 2, 4000),
(33, 14, 3, 15000),
(34, 1, 3, 6000),
(34, 5, 2, 8000),
(35, 8, 3, 900),
(36, 2, 2, 6000),
(36, 14, 3, 15000),
(37, 1, 3, 6000),
(37, 14, 3, 15000),
(38, 2, 3, 9000),
(38, 9, 2, 4000),
(39, 2, 2, 6000),
(39, 14, 1, 5000),
(39, 6, 3, 9000),
(40, 7, 2, 1000),
(40, 13, 3, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `payment` text COLLATE utf8_bin NOT NULL,
  `tranid` int(11) NOT NULL,
  `remark` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `oid`, `amount`, `uid`, `payment`, `tranid`, `remark`) VALUES
(1, 2, 15500, 8, '0', 0, 'Confirm'),
(2, 3, 14500, 6, '0', 0, 'Confirm'),
(3, 4, 21500, 8, '0', 2147483647, 'Confirm'),
(4, 5, 18500, 8, 'WAVE', 12345687, 'Confirm'),
(5, 6, 17500, 8, 'AYA', 45689512, 'Confirm'),
(6, 7, 18500, 6, 'AYA', 789456578, 'Confirm'),
(7, 8, 12000, 6, 'WAVE', 456987458, 'Confirm'),
(8, 9, 17500, 8, 'WAVE', 45685291, ''),
(9, 10, 17500, 8, 'Cash On Deli', 0, 'Cancel'),
(10, 11, 9500, 6, 'AYA', 415258695, 'Cancel by Customer'),
(11, 12, 17500, 6, 'AYA', 415258695, ''),
(12, 13, 5500, 8, 'AYA', 14362579, ''),
(13, 14, 17500, 8, 'AYA', 14362579, ''),
(14, 15, 21500, 4, 'Cash On Deli', 0, ''),
(15, 16, 12000, 4, 'Cash On Deli', 0, ''),
(16, 17, 18500, 8, 'Cash On Deli', 0, ''),
(17, 18, 21500, 6, 'WAVE', 78945658, ''),
(18, 19, 13500, 6, 'Cash On Deli', 0, 'Cancel'),
(19, 20, 0, 4, 'WAVE', 12345896, ''),
(20, 21, 23500, 5, 'WAVE', 85967425, 'Confirm'),
(21, 22, 17500, 4, 'KBZ', 45698745, 'Confirm'),
(22, 23, 15500, 6, 'AYA', 47852451, 'Confirm'),
(23, 24, 15500, 8, 'Cash On Deli', 0, 'Confirm'),
(24, 25, 21500, 6, 'AYA', 47589625, 'Confirm'),
(25, 26, 36500, 8, 'KBZ', 456787, ''),
(26, 27, 15500, 8, 'Cash On Deli', 0, ''),
(27, 28, 15500, 8, 'Cash On Deli', 0, 'Cancel by Customer'),
(28, 29, 19500, 6, 'Cash On Deli', 0, ''),
(29, 30, 13500, 6, 'AYA', 45689521, ''),
(30, 31, 12000, 6, 'WAVE', 1235689, 'Cancel by Admin'),
(31, 32, 20500, 6, 'AYA', 456895214, 'Confirm'),
(32, 33, 24500, 10, 'KBZ', 123456987, 'Cancel'),
(33, 34, 14500, 10, 'Cash On Deli', 0, 'Confirm'),
(34, 35, 1400, 11, 'KBZ', 456789, 'Cancel'),
(35, 36, 21500, 6, 'AYA', 4568974, 'Confirm'),
(36, 37, 21500, 12, 'KBZ', 132456897, 'Cancel by Customer'),
(37, 38, 13500, 12, 'Cash On Deli', 0, 'Confirm'),
(38, 39, 20500, 13, 'WAVE', 132458798, 'Cancel by Customer'),
(39, 40, 3000, 13, 'Cash On Deli', 0, 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pname` text COLLATE utf8_bin NOT NULL,
  `categories` text COLLATE utf8_bin NOT NULL,
  `pingredient` text COLLATE utf8_bin NOT NULL,
  `pprice` text COLLATE utf8_bin NOT NULL,
  `availability` text COLLATE utf8_bin NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `categories`, `pingredient`, `pprice`, `availability`, `image`) VALUES
(1, 'Scramble Egg Toasted Sandwich', 'Toast', 'Scramble Egg, Fresh Cream, Parsley, Egg Sauce, Brioche Bun', '2000', '', 0x746f617374312e6a7067),
(2, 'Bacon Double Cheese Toast', 'Toast', 'Scramble Egg, Smoked Bacon, Cheddar Cheese, Egg Sauce', '3000', '', 0x746f617374322e706e67),
(3, 'Avocado Holic Toasted Sandwich', 'Toast', 'Scramble Egg, Fresh Cream, Fresh Avocado, Egg Sauce, Bun', '2500', '', 0x746f617374332e706e67),
(4, 'Ham&Cheese French Toast', 'Toast', 'Egg, Ham, Cheddar Cheese, Parsley, Sauce, Toast', '2000', '', 0x746f617374342e706e67),
(5, 'Honey Berry Ice-Cream Toast', 'Toast', 'Honey, Sugar, Big Toast, Berries, Ice cream', '4000', '', 0x746f617374352e6a7067),
(6, 'Yogurt Berry Toast', 'Toast', 'Cinnamon, Greek Yogurt, Blueberry, Sugar, French Toast', '3000', '', 0x746f617374362e6a7067),
(7, 'Sour Dough bread', 'Bread', 'fine sea salt, wheat dough, starter, warm water', '500', '', 0x6272656164312e6a706567),
(8, 'Pita Bread', 'Bread', 'Virgin Oil, Sugar, Yeast, Flour, Milk', '300', '', 0x6272656164322e6a7067),
(9, 'Multigrain Bread', 'Bread', 'Multigrain Flour, Butter, Honey, Yeast', '2000', '', 0x6272656164332e6a7067),
(10, 'Brioche Bread', 'Bread', 'Flour, Egg, Milk, Yeast, Warm Water', '2000', '', 0x6272656164342e6a7067),
(11, 'Baguette Bread', 'Bread', 'Yeast, Flour, Salt, Honey, Warm Water', '500', '', 0x6272656164352e6a7067),
(12, 'French Toasted Bread', 'Bread', 'Sugar, Yeast, Milk, Cream, Egg White', '2000', '', 0x6272656164362e6a7067),
(13, 'Croissant', 'Pastries', 'Sugar, Salt, Butter, Milk, Yeast, Water', '500', '', 0x7061737472696573312e6a7067),
(14, 'Mini Pie Sets (9)', 'Pastries', 'Pear, Chocolate, Pumpkin, Berries, Cheese, Nut', '5000', '', 0x7061737472696573322e6a7067),
(15, 'Danish Sets (5)', 'Pastries', 'Chocolate, Berry, Cheese, Butter, Milk', '3000', '', 0x7061737472696573332e6a7067),
(16, 'Éclairs Sets (5)', 'Pastries', 'Milk, Butter, Heavy Cream, Sugar, Salt, Warm Water', '2000', '', 0x7061737472696573342e6a7067),
(17, 'Cannoli (2)', 'Pastries', 'Ricotta, Cheese, Sugar, Cream, Salt, Water', '1200', '', 0x7061737472696573352e6a7067),
(18, 'Tart Sets (16)', 'Pastries', 'Berries, Cream, Chocolate, Butter, Milk, Egg, Dough', '8000', '', 0x7061737472696573362e706e67),
(19, 'Cheese Cake Pieces', 'Desserts', 'Cheese, Cream, Butter, Sugar, Salt, Biscuit, Milk, Water', '1500', '', 0x64657373657274312e6a7067),
(20, 'Cupcake Sets (6)', 'Desserts', 'Berry, Cream, Sugar, Milk, Salt, Cake Butter, Macrons', '4000', '', 0x64657373657274322e6a7067),
(21, 'Brownie', 'Desserts', 'Chocolate, Cassava flour, Chips, Coco Powder, Milk, Egg, Water', '500', '', 0x64657373657274332e6a7067),
(22, 'Choco Chip Cookies', 'Desserts', 'Choco Chips, Butter, Egg, Sugar, Salt, Water, Milk', '200', '', 0x64657373657274342e706e67),
(23, 'Sugar Donut', 'Desserts', 'Sugar, Milk, Butter, Yeast, Salt, Egg', '500', '', 0x64657373657274352e6a7067),
(24, 'Choco Filling Donut', 'Desserts', 'Choco, Milk, Butter, Milk, Egg, Yeast, Salt', '800', '', 0x64657373657274362e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `comment` text COLLATE utf8_bin NOT NULL,
  `rating` text COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rid`, `cid`, `comment`, `rating`, `date`) VALUES
(9, 8, 'Hi', '3', '2022-03-21'),
(10, 6, 'GOAT', '5', '2022-03-22'),
(11, 5, 'Best thing I ever have', '4', '2022-03-22'),
(12, 4, 'Always Want to eat', '5', '2022-03-22'),
(13, 4, 'Best thing I ever have', '4', '2022-03-26'),
(14, 9, 'Nice', '4', '2022-04-01'),
(15, 10, 'Good', '4', '2022-04-01'),
(16, 12, 'not bad', '4', '2022-04-04'),
(17, 13, 'Hi', '3', '2022-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(100) NOT NULL,
  `uname` text COLLATE utf8_bin NOT NULL,
  `uemail` text COLLATE utf8_bin NOT NULL,
  `upassword` text COLLATE utf8_bin NOT NULL,
  `uphone` text COLLATE utf8_bin NOT NULL,
  `ucity` text COLLATE utf8_bin NOT NULL,
  `utownship` text COLLATE utf8_bin NOT NULL,
  `uaddress` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `upassword`, `uphone`, `ucity`, `utownship`, `uaddress`) VALUES
(4, 'tun nyein', 'tunnyein@gmail.com', '1234', '098357676', 'Yangon', '', 'North Dagon'),
(5, 'yeyint', 'yeyintphyooo@gmail.com', '1234', '09384767', 'Yangon', '', 'South Okkalar'),
(6, 'Luffy', 'monkeyd@gmail.com', 'ace', '09854756214', 'Yangon', '', 'Latha'),
(8, 'Sanji', 'Sanji@gmail.com', '2345', '09854763259', 'Yangon', '', 'South Dagon'),
(9, 'Zoro', 'Zoro@gmail.com', 'asd', '09784565987', 'Grand Line', '', 'Wano'),
(10, 'Jone', 'jone@gmail.com', '1234', '098546598', 'Yangon', '', 'North Dagon'),
(11, 'nu war', 'nuwar@gmail.com', '12345', '09957074505', 'Yangon', '', 'Latha'),
(12, 'JOJO', 'jojo@gmail.com', 'asd', '09854658774', 'Yangon', 'Ahlone', 'dkjfadsf'),
(13, 'Naruto', 'naruto@gmail.com', 'asdf', '09854632548', 'Yangon', 'Thingangyun', 'Mandalay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
