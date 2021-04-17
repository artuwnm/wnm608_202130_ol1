-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2021 at 03:49 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kellysko_products_tables`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `category`, `thumbnail`, `images`, `date_created`, `date_modified`) VALUES
(1, 'Pen Adaptor', 10.00, '**This item does not work with the Cricut Explore One. It does work with: Cricut Explore, Explore Air, Air 2, and Maker.**\r\n\r\nThis is made to replace the pen slot of your Cricut Machine. With this adapter you can use any pen that is 1/2” or smaller with your machine and are no longer limited to the Cricut pens!', 'Craft Supplies', 'img/IMG_5158.jpeg', '', '2021-04-17 14:38:39', '2021-04-17 14:38:39'),
(2, 'Reusable Produce Bag', 10.00, 'Reusable Produce Bags are hand made with  burlap to allow fruits or vegetables to breath, extending shelf life.\r\n\r\nBags measure: 8\" X 15\"\r\n\r\nAs all bags are handmade dimensions may vary slightly.\r\n\r\nAll materials used are 100% organic. ', 'Reusable', 'img/IMG_5170.jpeg', 'img/IMG_5173.jpeg', '2021-04-17 14:38:39', '2021-04-17 14:38:39'),
(3, 'Reusable Produce Bag', 10.00, 'Reusable Produce Bags are hand made with  cotton fabric to allow fruits or vegetables to breath, extending shelf life.\r\n\r\nBags measure: 8\" X 15\"\r\n\r\nAs all bags are handmade dimensions may vary slightly.\r\n\r\nAll materials used are 100% organic. ', 'Reusable', 'img/IMG_5171.jpeg', 'img/IMG_5172.jpeg', '2021-04-17 14:38:39', '2021-04-17 14:38:39'),
(4, 'Circus Sign', 40.00, '\"Our Family is one tent away from a full blown circus\" sign', 'Sign', 'img/IMG_5185.jpeg', '', '2021-04-17 14:55:17', '2021-04-17 14:55:17'),
(5, 'Harry Potter Coffee Mug', 25.00, '15 oz travel coffee mug\r\n\r\nNOT microwave/dishwasher safe', 'Tumbler', 'img/IMG_5202.jpeg', 'img/IMG_5203.jpeg', '2021-04-17 14:55:17', '2021-04-17 14:55:17'),
(6, '#1 Mom Cutting Board', 8.00, 'Glass 10\" X 10\" cutting board. ', 'Cutting Board                   ', 'img/IMG_5207.jpeg', '', '2021-04-17 15:10:24', '2021-04-17 15:10:24'),
(7, 'Reusable Shopping Bag', 25.00, 'Reusable Shopping Bags that roll up for easy storage. The bags are sturdy enough to handle any grocery items and are big enough to hold many items.\r\n\r\n\r\nDimensions: 20\" X 21\"', 'Reusable', 'img/IMG_5208.jpeg', '', '2021-04-17 15:10:24', '2021-04-17 15:10:24'),
(8, 'Reusable Shopping Bag', 25.00, 'Reusable Shopping Bags that roll up for easy storage. The bags are sturdy enough to handle any grocery items and are big enough to hold many items.\r\n\r\n\r\nDimensions: 20\" X 21\"', 'Reusable', 'img/IMG_5209.jpeg', '', '2021-04-17 15:10:24', '2021-04-17 15:10:24'),
(9, 'Reusable Shopping Bag', 25.00, 'Reusable Shopping Bags that roll up for easy storage. The bags are sturdy enough to handle any grocery items and are big enough to hold many items.\r\n\r\n\r\nDimensions: 20\" X 21\"', 'Reusable', 'img/IMG_5210.jpeg', '', '2021-04-17 15:10:24', '2021-04-17 15:10:24'),
(10, 'Reusable Shopping Bag', 25.00, 'Reusable Shopping Bags that roll up for easy storage. The bags are sturdy enough to handle any grocery items and are big enough to hold many items.\r\n\r\n\r\nDimensions: 20\" X 21\"', 'Reusable', 'img/IMG_5211.jpeg', '', '2021-04-17 15:10:24', '2021-04-17 15:10:24'),
(11, 'Reusable Shopping Bag', 25.00, 'Reusable Shopping Bags that roll up for easy storage. The bags are sturdy enough to handle any grocery items and are big enough to hold many items.\r\n\r\n\r\nDimensions: 20\" X 21\"', 'Reusable', 'img/IMG_5212.jpeg', '', '2021-04-17 15:10:24', '2021-04-17 15:10:24'),
(12, 'Reusable Shopping Bag', 25.00, 'Reusable Shopping Bags that roll up for easy storage. The bags are sturdy enough to handle any grocery items and are big enough to hold many items.\r\n\r\n\r\nDimensions: 20\" X 21\"', 'Reusable', 'img/IMG_5213.jpeg', '', '2021-04-17 15:10:24', '2021-04-17 15:10:24'),
(13, 'Reusable Shopping Bag', 25.00, 'Reusable Shopping Bags that roll up for easy storage. The bags are sturdy enough to handle any grocery items and are big enough to hold many items.\r\n\r\n\r\nDimensions: 20\" X 21\"', 'Reusable', 'img/IMG_5214.jpeg', '', '2021-04-17 15:10:24', '2021-04-17 15:10:24'),
(14, 'Reusable Shopping Bag', 25.00, 'Reusable Shopping Bags that roll up for easy storage. The bags are sturdy enough to handle any grocery items and are big enough to hold many items.\r\n\r\n\r\nDimensions: 20\" X 21\"', 'Reusable', 'img/IMG_5215.jpeg', '', '2021-04-17 15:10:24', '2021-04-17 15:10:24'),
(15, 'Reusable Shopping Bag', 25.00, 'Reusable Shopping Bags that roll up for easy storage. The bags are sturdy enough to handle any grocery items and are big enough to hold many items.\r\n\r\n\r\nDimensions: 20\" X 21\"', 'Reusable', 'img/IMG_5216.jpeg', '', '2021-04-17 15:10:24', '2021-04-17 15:10:24'),
(16, 'Guidon Desk Ornament', 65.00, 'Air Force Guidon Desk Ornament.\r\n\r\nHas a black marble base, wood flag pole, and fabric for the flag. Vinyl is applied to both sides with the Eagle and can be customized to whatever Squadron and Flight you need.\r\n\r\nWhen ordering, I would prefer that you send me a picture of the guidon you would like. That way I can make sure to make it as close as possible.\r\n\r\n\r\nIf preferred, a white marble base is available with slightly different dimensions. If white is not specifically asked for at the time of purchase, I will default to black.\r\n\r\nIf you have any questions or additional customizations you would like please message me before ordering to see if I can accommodate.\r\n\r\n\r\nMeasurements are approximate and may vary slightly.', 'Desk Ornament', 'img/IMG_5571.jpeg', 'img/IMG_5572.jpeg', '2021-04-17 15:25:00', '2021-04-17 15:25:00'),
(17, 'Woodgrain Tumbler', 50.00, '30 oz skinny tumbler\r\n\r\nWoodgrain colors can be altered if you prefer different colors.\r\n\r\nOn this tumbler there is a Cessna airplane with an airport on the back. Those two items can be altered to suit  your needs. ', 'Tumbler', 'img/IMG_5675.jpeg', 'img/IMG_5676.jpeg', '2021-04-17 15:25:00', '2021-04-17 15:25:00'),
(18, 'Halloween Sign', 25.00, '\"Come in my pretties\" welcome sign.\r\n\r\nMeasurements: 9\" X 18\"', 'Sign', 'img/IMG_5769.jpeg', '', '2021-04-17 15:43:48', '2021-04-17 15:43:48'),
(19, 'Glow in the Dark Halloween Coasters', 15.00, 'Set of four custom coasters. Coaters are 4\" X 4\". All are glow in the dark and halloween themed.', 'Coasters', 'img/IMG_5787.jpeg', '', '2021-04-17 15:43:48', '2021-04-17 15:43:48'),
(20, 'Woodgrain Sippy & Tumbler Duo', 75.00, '12oz 360 sippy cup and 30 oz skinny tumbler. \r\n\r\nWoodgrain colors can be altered to suit what you would like as well as what is on them.', 'Tumbler', 'img/IMG_5809.jpeg', 'img/IMG_5810.jpeg', '2021-04-17 15:43:48', '2021-04-17 15:43:48'),
(21, 'Michigan Themed Coasters', 15.00, 'Set of four custom coasters. Coaters are 4\" X 4\". All are Michigan Themed.', 'Coasters', 'img/IMG_5814.jpeg', '', '2021-04-17 15:43:48', '2021-04-17 15:43:48'),
(22, 'Halloween Welcome Sign', 30.00, '20\" door welcome sign.\r\n\r\nHalloween themed but can be altered with special order.', 'Sign', 'img/IMG_5848.jpeg', '', '2021-04-17 15:49:01', '2021-04-17 15:49:01');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
