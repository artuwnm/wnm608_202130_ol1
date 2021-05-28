-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2021 at 08:58 PM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rachel_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `url`, `price`, `description`, `thumbnail`, `images`, `date_create`, `date_modify`) VALUES
(1, 'Estee Lauder Double-Wear Liquid Foundation', 'face', 'http://rachellauren.work', '52.00', 'Medium-to-full coverage buildable foundation with a matte finish. ', 'face_doublewear_thumb.jpg', 'face_doublewear_1.jpg, face_doublewear_2.jpg', '2021-04-17 20:16:57', '2021-04-17 20:16:57'),
(2, 'Dior Backstage Liquid Foundation ', 'face', 'http://rachellauren.work', '45.00', 'Natural medium coverage liquid foundation that is sweat and waterproof with a matte finish. ', 'face_dior_thumb.jpg', 'face_dior_1.jpg, face_dior_2.jpg', '2021-04-17 20:28:10', '2021-04-17 20:28:10'),
(3, 'Dior Backstage Liquid Foundation ', 'face', 'http://rachellauren.work', '45.00', 'Natural medium coverage liquid foundation that is sweat and waterproof with a matte finish. ', 'face_dior_thumb.jpg', 'face_dior_1.jpg, face_dior_2.jpg', '2021-04-17 20:28:25', '2021-04-17 20:28:25'),
(4, 'Laura Mercier Pure Canvas Hydrating Primer', 'face', 'http://rachellauren.work', '35.00', 'Hydrating water-based face primer that visibly smooths and locks in hydration for  a perfect base. ', 'face_laura_mercier_primer_thumb.jpg', 'face_laura_mercier_primer_1.jpg, face_laura_mercier_primer_2.jpg', '2021-04-17 20:32:08', '2021-04-17 20:32:08'),
(5, 'Laura Mercier Pure Canvas Hydrating Primer', 'face', 'http://rachellauren.work', '35.00', 'Hydrating water-based face primer that visibly smooths and locks in hydration for  a perfect base. ', 'face_laura_mercier_primer_thumb.jpg', 'face_laura_mercier_primer_1.jpg, face_laura_mercier_primer_2.jpg', '2021-04-17 20:32:10', '2021-04-17 20:32:10'),
(6, 'Milk Hydro Grip Primer', 'face', 'http://rachellauren.work', '30.00', 'Gel-based primer that creates a gripping canvas that lasts all day.', 'face_milk_primer_thumb.jpg', 'face_milk_primer_1.jpg, face_milk_primer_2.jpg', '2021-04-17 20:34:28', '2021-04-17 20:34:28'),
(7, 'Milk Hydro Grip Primer', 'face', 'http://rachellauren.work', '30.00', 'Gel-based primer that creates a gripping canvas that lasts all day.', 'face_milk_primer_thumb.jpg', 'face_milk_primer_1.jpg, face_milk_primer_2.jpg', '2021-04-17 20:34:31', '2021-04-17 20:34:31'),
(8, 'Channel Les Beiges Bronzer', 'face', 'http://rachellauren.work', '40.00', 'Bronzed cream bronzer to give a healthy warm glow with a velvet-matte finish. ', 'face_channel_bronzer_thumb.jpg', 'face_channel_bronzer_1.jpg, face_channel_bronzer_2.jpg', '2021-04-17 20:37:13', '2021-04-17 20:37:13'),
(9, 'Channel Les Beiges Bronzer', 'face', 'http://rachellauren.work', '40.00', 'Bronzed cream bronzer to give a healthy warm glow with a velvet-matte finish. ', 'face_channel_bronzer_thumb.jpg', 'face_channel_bronzer_1.jpg, face_channel_bronzer_2.jpg', '2021-04-17 20:37:53', '2021-04-17 20:37:53'),
(10, 'MAC Studio Fix Packed Powder', 'face', 'http://rachellauren.work', '25.00', 'A one-step powder and foundation that gives skin a smooth and even ultra-matte finish with medium-to-full buildable coverage, with a velvety texture that allows skin to breathe.', 'face_mac_powder_thumb.jpg', 'face_mac_powder_1.jpg, face_mac_powder_2.jpg', '2021-04-17 20:40:29', '2021-04-17 20:40:29'),
(11, 'MAC Studio Fix Packed Powder', 'face', 'http://rachellauren.work', '25.00', 'A one-step powder and foundation that gives skin a smooth and even ultra-matte finish with medium-to-full buildable coverage, with a velvety texture that allows skin to breathe.', 'face_mac_powder_thumb.jpg', 'face_mac_powder_1.jpg, face_mac_powder_2.jpg', '2021-04-17 20:40:32', '2021-04-17 20:40:32'),
(12, 'Olaplex Number 7 Bonding Oil ', 'hair', 'http://rachellauren.work', '28.00', 'Reparative styling oil that protects colors, fights frizz, and provides heat protection. ', 'hair_olaplex_7_thumb.jpg', 'hair_olaplex_7_1.jpg, hair_olaplex_7_2.jpg', '2021-04-17 20:44:33', '2021-04-17 20:44:33'),
(13, 'Olaplex Number 7 Bonding Oil ', 'hair', 'http://rachellauren.work', '28.00', 'Reparative styling oil that protects colors, fights frizz, and provides heat protection. ', 'hair_olaplex_7_thumb.jpg', 'hair_olaplex_7_1.jpg, hair_olaplex_7_2.jpg', '2021-04-17 20:44:37', '2021-04-17 20:44:37'),
(14, 'Kerastase Nectar Thermique', 'hair', 'http://rachellauren.work', '38.00', 'Leave in conditioner that helps protect against heat and leaves hair silky smooth. ', 'hair_kerastase_leavein_thumb.jpg', 'hair_kerastase_leavein_1.jpg, hair_kerastase_leavein_2.jpg', '2021-04-17 20:47:07', '2021-04-17 20:47:07'),
(15, 'Kerastase Nectar Thermique', 'hair', 'http://rachellauren.work', '38.00', 'Leave in conditioner that helps protect against heat and leaves hair silky smooth. ', 'hair_kerastase_leavein_thumb.jpg', 'hair_kerastase_leavein_1.jpg, hair_kerastase_leavein_2.jpg', '2021-04-17 20:47:10', '2021-04-17 20:47:10'),
(16, 'Morphe 9W Eyeshadow Palette', 'eyes', 'http://rachellauren.work', '15.00', 'Create a cool-tone smokey eye look with this Morphe Palette. ', 'eyes_morphe_cool_thumb.jpg', 'eyes_morphe_cool_1.jpg', '2021-04-17 20:49:33', '2021-04-17 20:49:33'),
(17, 'Morphe 9W Eyeshadow Palette', 'eyes', 'http://rachellauren.work', '15.00', 'Create a cool-tone smokey eye look with this Morphe Palette. ', 'eyes_morphe_cool_thumb.jpg', 'eyes_morphe_cool_1.jpg', '2021-04-17 20:49:36', '2021-04-17 20:49:36'),
(18, 'Rare Beauty Nearly Neutral Liquid Eyeshadow ', 'eyes', 'http://rachellauren.work', '23.00', 'Liquid-to-powder eyeshadow that blends seamlessly for a buildable look of long-lasting, waterproof, crease-resistant color. ', 'eyes_rare_beauty_thumb.jpg', 'eyes_rare_beauty_1.jpg, eyes_rare_beauty_2.jpg', '2021-04-17 20:51:49', '2021-04-17 20:51:49'),
(19, 'Rare Beauty Nearly Neutral Liquid Eyeshadow ', 'eyes', 'http://rachellauren.work', '23.00', 'Liquid-to-powder eyeshadow that blends seamlessly for a buildable look of long-lasting, waterproof, crease-resistant color. ', 'eyes_rare_beauty_thumb.jpg', 'eyes_rare_beauty_1.jpg, eyes_rare_beauty_2.jpg', '2021-04-17 20:51:51', '2021-04-17 20:51:51'),
(20, 'L\'ORÉAl Telescopic Mascara ', 'eyes', 'http://rachellauren.work ', '12.00', 'Long lasting, clump-free formula to  intensify lash length.', 'eyes_telescopic_thumb.jpg', 'eyes_telescopic_1.jpg, eyes_telescopic_2.jpg', '2021-04-17 20:55:08', '2021-04-17 20:55:08'),
(21, 'L\'ORÉAl Telescopic Mascara ', 'eyes', 'http://rachellauren.work ', '12.00', 'Long lasting, clump-free formula to  intensify lash length.', 'eyes_telescopic_thumb.jpg', 'eyes_telescopic_1.jpg, eyes_telescopic_2.jpg', '2021-04-17 20:55:11', '2021-04-17 20:55:11'),
(22, 'Ardell Wispies', 'eyes', 'http://rachellauren.work', '5.99', 'False lashes to create a full lash look.', 'eyes_wispies_thumb.jpg', 'eyes_wispies_1.jpg, eyes_wispies_2.jpg', '2021-04-17 20:56:50', '2021-04-17 20:56:50'),
(23, 'Ardell Wispies', 'eyes', 'http://rachellauren.work', '5.99', 'False lashes to create a full lash look.', 'eyes_wispies_thumb.jpg', 'eyes_wispies_1.jpg, eyes_wispies_2.jpg', '2021-04-17 20:56:52', '2021-04-17 20:56:52');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
