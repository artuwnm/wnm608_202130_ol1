-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 29, 2021 at 05:02 PM
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
-- Database: `innerbloom_products_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(32) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  `category` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `skin_type` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_name`, `name`, `price`, `quantity`, `category`, `description`, `thumbnail`, `images`, `date_create`, `date_modify`, `skin_type`, `url`) VALUES
(1, 'Drunk Elephant', 'Protini Polypeptide Moisturizer', 68.00, 100, 'moisturizer', 'A protein moisturizer that combines signal peptides, growth factors, amino acids, and pygmy waterlily to visibly improve skin‘s tone, texture, and firmness.', 'img/protini_thumb.jpeg', 'img/protini_1.jpeg', '2021-04-18 15:39:28', '2021-04-18 15:39:28', 'Normal, Dry, Combination, and Oily', ''),
(2, 'Drunk Elephant', 'Lala Retro™ Whipped Moisturizer', 60.00, 100, 'moisturizer', 'A rescue cream infused with six African oils and a plant ceramide complex for intense moisture and replenishing barrier support.', 'img/lalaretro_thumb.jpeg', 'img/lalaretro_1.jpeg', '2021-04-18 15:49:41', '2021-04-18 15:49:41', 'Normal, Dry, Combination, and Oily', ''),
(3, 'Lancôme', 'Re-Hydrating Comforting Toner', 35.00, 100, 'toner', 'A soothing and moisturizing toner that gently cleanses and hydrates dry skin for a smooth, glowing appearance.', 'img/lancome_toner_thumb.jpeg', 'img/lancome_toner_1.jpeg, img/lancome_toner_2.jpeg', '2021-04-18 16:02:34', '2021-04-18 16:02:34', 'Normal, Dry, Combination, and Oily', ''),
(4, 'OLEHENRIKSEN', 'Truth Serum®', 50.00, 100, 'serum', 'A powerful anti-aging serum formulated with vitamin C and collagen for brightening and all-day hydration.', 'img/truthserum_thumb.jpeg', 'img/truthserum_1.jpeg', '2021-04-18 16:09:40', '2021-04-18 16:09:40', 'Normal, Dry, Combination, and Oily', ''),
(5, 'OLEHENRIKSEN', 'Banana Bright Eye Crème', 39.00, 100, 'eye_cream', 'A brightening, vitamin C-rich eye crème that targets signs of aging, reducing the look of dark circles while improving concealer application and wear—inspired by makeup artist secret, banana powder.', 'img/bananabright_thumb.jpeg', 'img/bananabright_1.jpeg,\r\nimg/bananabright_2.jpeg', '2021-04-18 16:12:43', '2021-04-18 16:12:43', 'Normal, Oily, Combination, Dry, Sensitive', ''),
(6, 'Clarins', 'Natural Lip Perfector', 26.00, 100, 'lip_balm', 'Smoothes, softens and visibly plumps with Acacia micro-pearls and vegetable waxes to smooth, and soothes the senses with a delicate scent of vanilla. ', 'img/clarinslipperfefctor_thumb.jpeg', 'img/clarinslipperfefctor_1.jpeg', '2021-04-18 16:19:05', '2021-04-18 16:19:05', 'Dry', ''),
(7, 'Sol de Janeiro', 'Brazilian Bum Bum Cream', 45.00, 100, 'body_cream', 'A fast-absorbing body cream with an addictive scent and a visibly tightening, smoothing formula that adds a hint of shimmer to skin.', 'img/bumbumcream_thumb.jpeg', 'img/bumbumcream_1.jpeg,\r\nimg/bumbumcream_2.jpeg, img/bumbumcream_3.jpeg,', '2021-04-18 16:23:02', '2021-04-18 16:23:02', 'All', ''),
(8, 'Sol de Janeiro', 'Bom Dia Bright™ Body Cream', 45.00, 100, 'body_cream', 'A retexturizing and nourishing daily body cream with Fruit AHAs and Vitamin C that reveals visibly brighter, smoother skin.', 'img/bomdia_thumb.jpeg', 'img/bomdia_1.jpeg,\r\nimg/bomdia_2.jpeg', '2021-04-18 16:26:01', '2021-04-18 16:26:01', 'All', ''),
(9, 'Kiehl\'s', 'Turmeric & Cranberry Seed Mask', 45.00, 100, 'face_mask', 'An energizing radiance mask that helps visibly brighten dull, fatigued skin.', 'img/kiehls_cranberry_mask_thumb.jpeg', 'img/kiehls_cranberry_mask_1.jpeg', '2021-04-18 16:30:36', '2021-04-18 16:30:36', 'Normal, Combination, and Oily', ''),
(10, 'SUNDAY RILEY', 'C.E.O Glow Face Oil', 80.00, 100, 'lightweight_oil', 'An instantly absorbing face oil infused with advanced vitamin C (THD ascorbate), turmeric, and evening primrose oil, to brighten, hydrate, and leave skin glowing.', 'img/sundayriley_ceoglow_thumb.jpeg', 'img/sundayriley_ceoglow_1.jpeg,\r\nimg/sundayriley_ceoglow_2.jpeg,\r\nimg/sundayriley_ceoglow_3.jpeg', '2021-04-18 16:35:23', '2021-04-18 16:35:23', 'Normal, Dry, and Combination', ''),
(11, 'SUNDAY RILEY', 'Luna Retinol Sleeping Night Oil', 55.00, 100, 'lightweight_oil', 'A gentle, glow-giving retinoid night oil—perfect for new and experienced retinol users—that is balanced with blue tansy to calm skin while improving the look of wrinkles, redness, and pores.', 'img/sundayriley_luna_thumb.jpeg', 'img/sundayriley_luna_1.jpeg,\r\nimg/sundayriley_luna_2.jpeg, \r\nimg/sundayriley_luna_3.jpeg', '2021-04-18 16:38:23', '2021-04-18 16:38:23', 'Normal, Dry, Combination, and Oily', ''),
(12, 'Glow Recipe', 'Avocado Ceramide Redness Relief Serum', 85.00, 100, 'serum', 'A lactic-acid, AHA serum that targets the look of pores, hyperpigmentation, and dark spots and is clinically shown to reduce the look of fine lines and wrinkles.', 'img/avocado_serum_thumb.jpeg', 'img/avocado_serum_1.jpeg', '2021-04-18 16:41:33', '2021-04-18 16:41:33', 'Normal, Dry, Combination, and Oily', ''),
(13, 'Drunk Elephant', 'T.L.C. Sukari Babyfacial™ Mask', 80.00, 100, 'face_mask', 'A pro-quality AHA/BHA \"facial\" that resurfaces skin to visibly reveal greater clarity, improved skin texture and tone, and a more youthful-looking appearance.', 'img/drunkelephant_babyfacial_thumb.jpeg', 'img/drunkelephant_babyfacial_1.jpeg,\r\nimg/drunkelephant_babyfacial_2.jpeg', '2021-04-18 16:44:27', '2021-04-18 16:44:27', 'Normal, Dry, Combination, and Oily', ''),
(14, 'Algenist', 'GENIUS Liquid Collagen', 135.00, 100, 'serum', 'A vegan collagen treatment serum that helps to restore skin\'s natural bounce and resilience while diminishing the look of fine lines and wrinkles.', 'img/algenist_liquidcollagen_thumb.jpeg', 'img/algenist_liquidcollagen_1.jpeg,\r\nimg/algenist_liquidcollagen_2.jpeg', '2021-04-18 16:46:58', '2021-04-18 16:46:58', 'Normal, Dry, Combination, and Oily', ''),
(15, 'Glossier', 'Solution', 24.00, 100, 'toner', 'Unlike physical scrubs, Solution uses a 10% blend of skincare acids to “unglue” dead skin and sweep it away, so your complexion appears smoother, softer, and glowier', 'img/glossier_solution_thumb.jpeg', 'img/glossier_solution_1.jpeg', '2021-04-18 16:52:28', '2021-04-18 16:52:28', 'All', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
