-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 01:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(21, 'Shreya Choudhury', 'shreyachoudhury', '202cb962ac59075b964b07152d234b70'),
(23, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(24, 'ABC', 'abc', '900150983cd24fb0d6963f7d28e17f72');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(32, ' Ice Cream Cake', 'Food_Category_473.jpg', 'Yes', 'Yes'),
(33, 'Wedding Cake', 'Food_Category_561.jpg', 'Yes', 'Yes'),
(34, 'Birthday Cake', 'Food_Category_366.jpg', 'Yes', 'Yes'),
(35, 'Cupcake', 'Food_Category_88.jpg', 'Yes', 'Yes'),
(36, 'Donut', 'Food_Category_703.jpg', 'Yes', 'Yes'),
(37, 'Cookie', 'Food_Category_684.jpg', 'Yes', 'Yes'),
(38, 'Brownie', 'Food_Category_303.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(17, 'Chocolate Cake', 'chocolate, egg, butter, cream', '200.00', 'Food-Name-13.jpg', 34, 'Yes', 'Yes'),
(22, 'Plum Cake', 'dry fruits, egg, butter', '150.00', 'Food-Name-983.jpg', 32, 'Yes', 'Yes'),
(23, 'Strawberry Cake', 'flour, strawberry, cream, butter', '120.00', 'Food-Name-87.jpg', 32, 'Yes', 'Yes'),
(25, 'Flower Cake', 'chocolate, butter, egg, Cream,\r\nused for wedding and anniversary purpose', '700.00', 'Food-Name-618.jpg', 33, 'Yes', 'Yes'),
(27, 'Mr. and Mrs. Cake', 'chocolate, butter, egg, Cream,\r\nused for wedding and anniversary purpose', '800.00', 'Food-Name-591.jpg', 33, 'Yes', 'Yes'),
(32, 'Strawberry Birthday cake', 'strawberry, flour, egg, butter, sugar', '150.00', 'Food-Name-347.jpg', 34, 'Yes', 'Yes'),
(33, 'Chocolate Donut', 'chocolate, gems, baking powder, milk', '40.00', 'Food-Name-922.jpg', 36, 'Yes', 'Yes'),
(34, 'Strawberry Cupcake', 'strawberry, sprinkles, cream, egg', '50.00', 'Food-Name-1161.jpg', 35, 'No', 'Yes'),
(36, 'Chocolate Cookie', 'chocolate, wheat flour, sugar, choco chips', '30.00', 'Food-Name-732.jpg', 37, 'Yes', 'Yes'),
(39, 'Chocolate brownie', 'flour, butter, eggs, chocolate and cocoa powder, sugar', '60.00', 'Food-Name-8866.jpg', 38, 'Yes', 'Yes'),
(40, 'Mango Cake', 'mango cubes, sugar, flour, baking powder, melted butter, condensed milk, vanilla essence', '120.00', 'Food-Name-5091.jpg', 34, 'No', 'No'),
(41, 'Rainbow Cupcake', 'egg, rainbow cream, butter, milk, flour, sugar', '40.00', 'Food-Name-2890.jpg', 35, 'Yes', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(8, 'Mr. and Mrs. Cake', '800.00', 1, '800.00', '2022-02-05 16:07:26', 'Delivered', 'Ram Sen', '9876543210', 'ramsen@gmail.com', 'Rajarhat,Kol-700145'),
(9, 'Strawberry Cupcake', '40.00', 2, '80.00', '2022-02-05 16:08:24', 'Cancelled', 'Riya Dey', '9875506896', 'riya@gmail.com', 'Kolkata'),
(10, 'Plum Cake', '150.00', 1, '150.00', '2022-02-05 16:09:30', 'Ordered', 'Rabi Roy', '9875506844', 'rabiroy@gmail.com', 'Kolkata'),
(11, 'Chocolate Donut', '40.00', 5, '200.00', '2022-02-05 16:12:02', 'On Delivery', 'Priya Das', '9875506894', 'priya@gmail.com', 'Kolkata'),
(12, 'Chocolate Cookie', '30.00', 5, '150.00', '2022-02-05 17:29:33', 'Delivered', 'Shreyan Choudhury', '9876543212', 'shreyan@gmail.com', 'Newtown'),
(13, 'Strawberry Birthday cake', '150.00', 1, '150.00', '2022-02-05 17:39:20', 'On Delivery', 'Smriti Choudhury', '9867453210', 'smriti@gmail.com', 'College Street');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
