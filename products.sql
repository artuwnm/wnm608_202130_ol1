-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2021 at 10:00 PM
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
-- Database: `xrquandesign_608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `year` year(4) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `year`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Nike Air Max 97 - \'Have a Nice Day\'', 120.00, 'shoes_lifestyle', 2019, '2021-04-18 21:20:30', '2021-04-18 21:20:30', 'Nike’s release lineup for Air Max Day 2019 includes the Air Max 97 ‘Have a Nike Day.’ The tagline wraps around the upper in white-on-black print, contrasted by a lavender suede mudguard and bright teal leather overlays atop a tan mesh base. The feel-good design is finished with a circular lace jewel that offers a Swoosh-infused spin on the classic smiley-face icon.', 'images/Haveaniceday_thumb.jpg', 'images/Haveaniceday_1.jpg,images/Haveaniceday_2.jpg,images/Haveaniceday_3.jpg'),
(2, 'Nike - Wmns Dunk Low \'Coast\'', 99.99, 'shoes_lifestyle', 2021, '2021-04-18 21:30:05', '2021-04-18 21:30:05', 'The Nike women’s Dunk Low ‘Coast’ highlights traditional two-tone color blocking on a leather upper that maintains the look of the original 1985 release. A crisp white base, replete with perforated detailing on the toe box, is contrasted by overlays in a vibrant blue finish. Nike branding on the heel tab and woven tongue tag are rendered in an unexpected pop of yellow. The sneaker rides on a low-profile midsole, supported by a rubber outsole featuring concentric circle tread.', 'images/Nike_WDLC_thumb.jpg', 'images/Nike_WDLC_1.jpg,images/Nike_WDLC_2.jpg,images/Nike_WDLC_3.jpg'),
(3, 'Air Jordan 6 - Retro OG \'Carmine\'', 140.00, 'shoes_lifestyle', 2021, '2021-04-18 21:32:50', '2021-04-18 21:32:50', 'The 2021 edition of the Air Jordan 6 Retro OG ‘Carmine’ brings back the classic silhouette on the occasion of its 30th anniversary. Worn by Michael Jordan during his first championship season, the distinctive colorway represents the first Air Jordan 6 to feature contrast color blocking on the upper. The sneaker’s Carmine red nubuck base is fortified with white leather overlays, including a heel panel embellished with Nike Air branding.', '', ''),
(4, 'Air Force 1 \'07 \'White\'', 99.00, 'shoes_lifestyle', 2018, '2021-04-18 21:37:10', '2021-04-18 21:37:10', 'The Nike Air Force 1 Low is a modern take on the iconic white on white low top Air Force 1. Released in honor of the classic shoe\'s 25th anniversary in 2007, the sneaker features an upgraded, crispier 10A full grain leather white upper with a matching white Air-cushioned rubber sole.', 'images/AFW_thumb.jpg', 'images/AFW_1.jpg,images/AFW_2.jpg,images/AFW_3.jpg'),
(5, 'Cortez Basic Leather OG \'Forrest Gump\'', 59.99, 'shoes_lifestyle', 2017, '2021-04-18 21:39:23', '2021-04-18 21:39:23', 'Released in June 2017, this Classic Cortez SE \'OG\' features the white, Varsity Royal, and Varsity Red color scheme made famous by the 1994 film \'Forrest Gump.\' This version upgrades the classic silhouette with a more durable leather upper, a lower cut fit around the ankle, and improved cushioning on the sole. A nylon and suede version of this colorway re-released in the summer of 2015 and a meticulously authentic NikeLab reproduction of the OG 1972 model released in September 2015.', 'images/Forrestgump_thumb.jpg', 'images/Forrestgump_1.jpg,images/Forrestgump_2.jpg,images/Forrestgump_3.jpg'),
(6, 'KD 6 \'Maryland Blue Crab\'', 79.99, 'basketball', 2013, '2021-04-18 21:42:25', '2021-04-18 21:42:25', 'Designed by Leo Chang, the KD 6 was the first low-top model in the KD line. Inspired by the colors of the Maryland blue crab, the shoe features a Gamma Blue upper with speckled, white bubble detailing and Team Orange accents. The Teal Tint midsole sports speckled gold detailing and holds a Gamma Blue Max Air heel unit. The Mine Grey mesh tongue and laces provide subdued contrast.\r\n\r\n', 'images/KD6_thumb.jpg', 'images/KD6_1.jpg,images/KD6_2.jpg,images/KD6_3.jpg'),
(7, 'Yeezy 700 V3 \'Kyanite\'', 270.00, 'shoes_lifestyle', 2021, '2021-04-18 21:44:40', '2021-04-18 21:44:40', 'The adidas Yeezy 700 V3 ‘Kyanite’ showcases flowing stripes of blue coloring throughout the breathable upper, constructed from monofilament engineered mesh with exoskeletal RPU overlays coated in a glow-in-the-dark finish. Interior bootie construction delivers a snug fit, while a reinforced rubber toe cap provides added durability. The sneaker rides on a lightweight EVA midsole encapsulated in an off-white PU cage, supported by a herringbone rubber outsole.', 'images/Yeezy700_thumb.jpg', 'images/Yeezy700_1.jpg,images/Yeezy700_2.jpg,images/Yeezy700_3.jpg'),
(8, 'Yeezy Foam Runner \'Sand\'', 390.00, 'shoes_lifestyle', 2021, '2021-04-18 21:48:11', '2021-04-18 21:48:11', 'The adidas Yeezy Foam Runner ‘Sand’ delivers a monotone iteration of Kanye West’s clog-like silhouette. Featuring a slightly darker tan shade than the debut ‘Ararat’ colorway from 2020, the slip-on makes use of a flexible one-piece build that combines standard EVA with an algae-based foam compound. Multiple ventilation ports allow feet to breathe, while textured interiors offer no-slip grip. Underfoot, a classic herringbone tread provides dependable traction.\r\n\r\n', 'images/Sand_thumb.jpg', 'images/Sand_1.jpg,images/Sand_2.jpg,images/Sand_3.jpg'),
(9, 'Fear of God Essentials Hoodie \'Charcoal\'', 160.00, 'apparel', 2020, '2021-04-18 21:51:32', '2021-04-18 21:51:32', 'Fear Of God Essentials / Men / Tops / Fear of God Essentials Hoodie \'Charcoal\'', 'images/Essentials_top_thumb.jpg', 'images/Essentials_top_1.jpg,images/Essentials_top_2.jpg,images/Essentials_top_3.jpg'),
(10, 'Comme des Garçons PLAY Heart T-Shirt \'White\'', 98.00, 'apparel', 2021, '2021-04-18 21:53:57', '2021-04-18 21:53:57', 'Comme Des Garçons Play / Women / Tops / Comme des Garçons PLAY Heart T-Shirt \'White\'', 'images/Playheart_shirt_thumb.jpg', 'images/Playheart_shirt_1.jpg,images/Playheart_shirt_2.jpg,images/Playheart_shirt_3.jpg'),
(11, 'Stussy Big Logo Cap \'Orange\'', 50.00, 'apparel', 2021, '2021-04-18 21:56:59', '2021-04-18 21:56:59', 'Stussy / Men / Hats / Stussy Big Logo Cap \'Orange\'', 'images/Stussy_cap_thumb.jpg', 'images/Stussy_cap_1.jpg,images/Stussy_cap_2.jpg,images/Stussy_cap_3.jpg'),
(12, 'Cactus Jack by Travis Scott x Air Jordan Highest Hoodie \'Gold\'', 220.00, 'apparel', 2019, '2021-04-18 21:59:09', '2021-04-18 21:59:09', 'Cactus Jack By Travis Scott / Men / Tops / Cactus Jack by Travis Scott x Air Jordan Highest Hoodie', 'images/AJG_hoodie_thumb.jpg', 'images/AJG_hoodie_1.jpg,images/AJG_hoodie_2.jpg,images/AJG_hoodie_3.jpg,');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
