-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 06:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `pass`) VALUES
(1, 'abc@gmail.com', 'abc', '12345'),
(2, 'admin@gmail.com', 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `time_stamp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `client_id`, `product_id`, `quantity`, `time_stamp`) VALUES
(3, 2, 3, 1, 1697654670),
(14, 3, 2, 1, 1698244057),
(15, 3, 7, 2, 1698244062);

-- --------------------------------------------------------

--
-- Table structure for table `client_db`
--

CREATE TABLE `client_db` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `ph_no` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_db`
--

INSERT INTO `client_db` (`id`, `name`, `email`, `pass`, `address`, `ph_no`, `pincode`, `city`, `district`, `state`) VALUES
(2, 'Atanu Paul', 'atanu.paul123456789@gmail.com', 'atanu3000', '', 0, 0, '', '', ''),
(3, 'John Doe', 'john@gmail.com', '12345', '109/1/3 Balivara Road Naihati North 24 Parganas WB - 743135', 2147483647, 743135, 'Naihati', 'North 24 Parganas', 'WB');

-- --------------------------------------------------------

--
-- Table structure for table `order_db`
--

CREATE TABLE `order_db` (
  `order_id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `client_id` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_db`
--

INSERT INTO `order_db` (`order_id`, `product_id`, `payment_id`, `client_id`, `address`, `added_date`) VALUES
(1, '4,6,1', 'pay_MsLyNkyAiexB6c', '3', '109/1/3 Balivara Road Naihati North 24 Parganas WB - 743135', '2023-10-25 12:44:22'),
(2, '4,6,1', 'pay_MsMEHZiCxuK3ae', '3', '109/1/3 Balivara Road Naihati North 24 Parganas WB - 743135', '2023-10-25 12:59:25'),
(3, '4,6,1', 'pay_MsMG8UdCGX9K7N', '3', '109/1/3 Balivara Road Naihati North 24 Parganas WB - 743135', '2023-10-25 13:01:10'),
(4, '4,6,1', 'pay_MsMNLu6Oric97p', '3', '109/1/3 Balivara Road Naihati North 24 Parganas WB - 743135', '2023-10-25 13:07:59'),
(5, '4,6,1', 'pay_MsMSNZKi9eE14g', '3', '109/1/3 Balivara Road Naihati North 24 Parganas WB - 743135', '2023-10-25 13:12:45'),
(6, '4,6,1', 'pay_MsMV7nYgBH8E6W', '3', '109/1/3 Balivara Road Naihati North 24 Parganas WB - 743135', '2023-10-25 13:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pname` varchar(300) NOT NULL,
  `price` int(30) NOT NULL,
  `image` varchar(300) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `price`, `image`, `category`, `description`, `rating`) VALUES
(1, 'Desi Danedar Ghee 500ml Glass jar', 120, '1697639161Desi Danedar Ghee 500ml Glass jar.jpg', 'ghee', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quod sapiente maiores ipsum maxime asperiores. Ad nesciunt recusandae odio incidunt.', 4.9),
(2, 'Organic Cow Ghee from Sundarban island, 250ml Glass jar', 135, '1697640864Organic Cow Ghee from Sundarban island, 250ml Glass jar.jpg', 'ghee', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quod sapiente maiores ipsum maxime asperiores. Ad nesciunt recusandae odio incidunt.', 5),
(3, 'Bonphool Coriander Honey , 250 Gram', 55, '1697640979Bonphool Coriander Honey , 250 Gram.png', 'honey', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quod sapiente maiores ipsum maxime asperiores. Ad nesciunt recusandae odio incidunt.', 5),
(4, 'Certified Organic Malai Paneer Handcrafted From Cow Milk, 200gm pack', 70, '1697641112Certified Organic Malai Paneer Handcrafted From Cow Milk, 200gm pack.jpg', 'dairy', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quod sapiente maiores ipsum maxime asperiores. Ad nesciunt recusandae odio incidunt.', 4.7),
(5, 'Jalbhora Sandesh (Plain) - 4 Pcs Pack', 40, '1697641191Jalbhora Sandesh (Plain) - 4 Pcs Pack.jpg', 'sweet', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quod sapiente maiores ipsum maxime asperiores. Ad nesciunt recusandae odio incidunt.', 5),
(6, 'Aam Sandesh - 4 Pcs Pack', 32, '1697641256Aam Sandesh - 4 Pcs Pack.jpg', 'sweet', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quod sapiente maiores ipsum maxime asperiores. Ad nesciunt recusandae odio incidunt.', 4.2),
(7, 'Organic Wild Sundarban Honey, 250g Glass Jar', 80, '1697641314Organic Wild Sundarban Honey, 250g Glass Jar.jpg', 'honey', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quod sapiente maiores ipsum maxime asperiores. Ad nesciunt recusandae odio incidunt.', 4.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_db`
--
ALTER TABLE `client_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_db`
--
ALTER TABLE `order_db`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `client_db`
--
ALTER TABLE `client_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_db`
--
ALTER TABLE `order_db`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
