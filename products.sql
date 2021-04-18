-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2021 at 06:29 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rongwdesign_wnm608_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`) VALUES
(1, 'Loafer Chair Nude Velvet', 2300.00, 'furniture'),
(2, 'Little Petra', 1800.00, 'Furniture'),
(3, 'Cooper Sofa - Top Grain Leather', 1999.00, 'furniture'),
(4, 'Vintage Mid Century Teak Sofa', 1895.00, ''),
(5, 'Cartagena Woven Fabric Upholstered Armchair ', 460.00, 'furniture'),
(6, 'Large Patinated Brass Table Lamp, 1960s, Italy', 2495.00, 'lighting'),
(7, 'Italian Designer,Large Modernist Vase, Solid Brass', 2500.00, 'decor'),
(8, 'Contemporary Besame Floor Lamp in Cream Lacquer by Robert Kuo', 4650.00, 'lighting'),
(9, 'Paolo Buffa 1940s Oak Wood Cabinet Vetrine, Italy', 12221.00, 'furniture'),
(10, 'Sculpted Bronze Sconce Light by Henry Wilson', 2041.00, 'lighting'),
(11, 'Jacques Quinet, Pair Lounge Chairs, France, circa 1955', 35000.00, 'furniture'),
(12, 'Guillerme et Chambron, Midcentury Buffet with Sliding Doors, Fra', 18000.00, 'furniture'),
(13, 'Cutler & Girard, Three-panel screen, Italy, 1902', 120000.00, 'furniture');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
