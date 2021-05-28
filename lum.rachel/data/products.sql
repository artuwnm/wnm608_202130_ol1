-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2021 at 05:30 AM
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
(37, 'Maybelline Super Stay', 'face', 'http://rachellauren.work', '9.00', 'Long lasting liquid lipstick with a matte finish. ', 'face_maybelline_thumb.jpg', 'face_maybelline_thumb.jpg,face_maybelline_1.jpg', '2021-05-14 21:35:48', '2021-05-14 21:35:48'),
(22, 'Ardell Wispies', 'eyes', 'http://rachellauren.work', '5.99', 'False lashes to create a full lash look.', 'eyes_wispies_thumb.jpg', 'eyes_wispies_thumb.jpg', '2021-04-17 20:56:50', '2021-04-17 20:56:50'),
(34, 'Kérastase Resistance', 'hair', 'http://rachellauren.work', '39.00', 'Light weight moisturizing blow dry heat protectant for damaged hair. Leaves hair shiny and silky.', 'hair_resistance_thumb.jpg', 'hair_resistance_thumb.jpg', '2021-05-14 21:29:58', '2021-05-14 21:29:58'),
(14, 'Kerastase Nectar', 'hair', 'http://rachellauren.work', '38.00', 'Leave in conditioner that helps protect against heat and leaves hair silky smooth. ', 'hair_kerastase_nectar_thumb.jpg', 'hair_kerastase_nectar_thumb.jpg', '2021-04-17 20:47:07', '2021-04-17 20:47:07'),
(16, 'Morphe 9W Eyeshadow Palette', 'eyes', 'http://rachellauren.work', '15.00', 'Create a cool-tone smokey eye look with this Morphe Palette. ', 'eyes_morphe_9w_thumb.jpg', 'eyes_morphe_9w_thumb.jpg,eyes_morphe_9w_1.jpg', '2021-04-17 20:49:33', '2021-04-17 20:49:33'),
(35, 'Kérastase Genesis Mini', 'hair', 'http://rachellauren.work', '24.00', 'Lightweight fortifying conditioner for weakened hair that is prone to falling due to breakage from brushing. Use daily for best results. ', 'hair_kerastase_genesis_thumb.jpg', 'hair_kerastase_genesis_thumb.jpg', '2021-05-14 21:31:46', '2021-05-14 21:31:46'),
(18, 'Rare Beauty Nearly Neutral Liquid Eyeshadow ', 'eyes', 'http://rachellauren.work', '23.00', 'Liquid-to-powder eyeshadow that blends seamlessly for a buildable look of long-lasting, waterproof, crease-resistant color. ', 'eyes_rare_beauty_thumb.jpg', 'eyes_rare_beauty_thumb.jpg,eyes_rare_beauty_1.jpg', '2021-04-17 20:51:49', '2021-04-17 20:51:49'),
(1, 'Estee Lauder Double-Wear Liquid Foundation', 'face', 'http://rachellauren.work', '52.00', 'Medium-to-full coverage buildable foundation with a matte finish. ', 'face_doublewear_thumb.jpg', 'face_doublewear_thumb.jpg,face_doublewear_1.jpg', '2021-04-17 20:16:57', '2021-04-17 20:16:57'),
(2, 'Dior Backstage Liquid Foundation ', 'face', 'http://rachellauren.work', '45.00', 'Natural medium coverage liquid foundation that is sweat and waterproof with a matte finish. ', 'face_dior_thumb.jpg', 'face_dior_thumb.jpg,face_dior_1.jpg', '2021-04-17 20:28:10', '2021-04-17 20:28:10'),
(6, 'Milk Hydro Grip Primer', 'face', 'http://rachellauren.work', '30.00', 'Gel-based primer that creates a gripping canvas that lasts all day.', 'face_milk_primer_thumb.jpg', 'face_milk_primer_thumb.jpg', '2021-04-17 20:34:28', '2021-04-17 20:34:28'),
(36, 'Morphe Artistry Palette', 'eyes', 'http://rachellauren.work', '30.00', 'Colorful palette with 40 vibrant shades to create amazing looks.', 'eyes_morphe_artistry_palette_thumb.jpg', 'eyes_morphe_artistry_palette_thumb.jpg', '2021-05-14 21:34:11', '2021-05-14 21:34:11'),
(8, 'Channel Les Beiges Bronzer', 'face', 'http://rachellauren.work', '40.00', 'Bronzed cream bronzer to give a healthy warm glow with a velvet-matte finish. ', 'face_chanel_bronzer_thumb.jpg', 'face_chanel_bronzer_thumb.jpg', '2021-04-17 20:37:13', '2021-04-17 20:37:13'),
(11, 'MAC Studio Fix Packed Powder', 'face', 'http://rachellauren.work', '25.00', 'A one-step powder and foundation that gives skin a smooth and even ultra-matte finish with medium-to-full buildable coverage, with a velvety texture that allows skin to breathe.', 'face_mac_powder_thumb.jpg', 'face_mac_powder_thumb.jpg,face_mac_powder_1.jpg', '2021-04-17 20:40:32', '2021-04-17 20:40:32'),
(12, 'Olaplex Number 7 Bonding Oil ', 'hair', 'http://rachellauren.work', '28.00', 'Reparative styling oil that protects colors, fights frizz, and provides heat protection. ', 'hair_olaplex_7_thumb.jpg', 'hair_olaplex_7_thumb.jpg', '2021-04-17 20:44:33', '2021-04-17 20:44:33'),
(20, 'L\'ORÉAl Telescopic Mascara ', 'eyes', 'http://rachellauren.work ', '12.00', 'Long lasting, clump-free formula to  intensify lash length.', 'eyes_telescopic_thumb.jpg', 'eyes_telescopic_thumb.jpg', '2021-04-17 20:55:08', '2021-04-17 20:55:08'),
(33, 'Kérastase Initialiste', 'hair', 'http://rachellauren.work', '53.00', 'Hair serum that strengthens and grows hair fibers by restoring uniformity and smoothness. Provides advanced scalp treatment.', 'hair_kerastase_initialiste_thumb.jpg', 'hair_kerastase_initialiste_thumb.jpg', '2021-05-14 21:27:36', '2021-05-14 21:27:36');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
