-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2022 at 05:39 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kichai`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `created_at`) VALUES
(1, 'Laptop', '2022-09-14 17:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `quantity`, `description`, `product_img`, `created_at`) VALUES
(2, 'Computer', 999, 120, '\r\n\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Error eos, ipsum illo sapiente id quisquam, accusamus ratione sequi possimus tenetur placeat natus, veritatis sed blanditiis atque autem sunt consequatur incidunt.\r\nHarum atque, voluptatibus cum error esse debitis minima, molestias placeat ipsam laboriosam eos quod rem et autem cupiditate aliquam. Ullam cupiditate illum autem quos et impedit dicta ratione excepturi explicabo?', 'Laptops.jpg', '2022-09-15 04:31:01'),
(4, 'Computer', 999, 120, '\r\n\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Error eos, ipsum illo sapiente id quisquam, accusamus ratione sequi possimus tenetur placeat natus, veritatis sed blanditiis atque autem sunt consequatur incidunt.\r\nHarum atque, voluptatibus cum error esse debitis minima, molestias placeat ipsam laboriosam eos quod rem et autem cupiditate aliquam. Ullam cupiditate illum autem quos et impedit dicta ratione excepturi explicabo?', 'Laptops.jpg', '2022-09-15 04:31:01'),
(7, 'Computer', 999, 120, '\r\n\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Error eos, ipsum illo sapiente id quisquam, accusamus ratione sequi possimus tenetur placeat natus, veritatis sed blanditiis atque autem sunt consequatur incidunt.\r\nHarum atque, voluptatibus cum error esse debitis minima, molestias placeat ipsam laboriosam eos quod rem et autem cupiditate aliquam. Ullam cupiditate illum autem quos et impedit dicta ratione excepturi explicabo?', 'Laptops.jpg', '2022-09-15 04:31:01'),
(8, 'Computer', 999, 120, '\r\n\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Error eos, ipsum illo sapiente id quisquam, accusamus ratione sequi possimus tenetur placeat natus, veritatis sed blanditiis atque autem sunt consequatur incidunt.\r\nHarum atque, voluptatibus cum error esse debitis minima, molestias placeat ipsam laboriosam eos quod rem et autem cupiditate aliquam. Ullam cupiditate illum autem quos et impedit dicta ratione excepturi explicabo?', 'Laptops.jpg', '2022-09-15 04:31:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
