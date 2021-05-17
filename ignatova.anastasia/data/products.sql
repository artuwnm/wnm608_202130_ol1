-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2021 at 08:46 PM
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
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `skin type` varchar(64) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `IMAGES` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `category`, `skin type`, `date_create`, `date_modify`, `description`, `thumbnail`, `IMAGES`) VALUES
(1, 'Protini Polypeptide Moisturizer', '', '', 68.00, 'moisturizer', 'Normal, Dry, Combination, and Oily', '2021-04-18 15:39:28', '2021-04-18 15:39:28', 'A protein moisturizer that combines signal peptides, growth factors, amino acids, and pygmy waterlily to visibly improve skin‘s tone, texture, and firmness.', 'img/protini_thumb.jpeg', 'img/img/protini_1.jpeg, img/img/protini_2.jpeg'),
(2, 'Drunk Elephant - Lala Retro™ Whipped Moisturizer with Ceramides', '', '', 60.00, 'moisturizer', 'Normal, Dry, Combination, and Oily', '2021-04-18 15:49:41', '2021-04-18 15:49:41', 'A rescue cream infused with six African oils and a plant ceramide complex for intense moisture and replenishing barrier support.', 'img/lalaretro_thumb.jpeg', 'img/lalaretro_1.jpeg,\r\nimg/lalaretro_2.jpeg'),
(3, 'Lancôme - Re-Hydrating Comforting Toner with Acacia Honey', '', '', 35.00, 'toner', 'Normal, Dry, Combination, and Oily', '2021-04-18 16:02:34', '2021-04-18 16:02:34', 'A soothing and moisturizing toner that gently cleanses and hydrates dry skin for a smooth, glowing appearance.', 'img/lancome_toner_thumb.jpeg', 'img/lancome_toner_1.jpeg'),
(4, 'OLEHENRIKSEN - Truth Serum®', '', '', 50.00, 'serum', 'Normal, Dry, Combination, and Oily', '2021-04-18 16:09:40', '2021-04-18 16:09:40', 'A powerful anti-aging serum formulated with vitamin C and collagen for brightening and all-day hydration.', 'img/truthserum_thumb.jpeg', 'img/truthserum_1.jpeg,\r\nimg/truthserum_2.jpeg'),
(5, 'OLEHENRIKSEN - Banana Bright Eye Crème', '', '', 39.00, 'eye_cream', 'Normal, Oily, Combination, Dry, Sensitive', '2021-04-18 16:12:43', '2021-04-18 16:12:43', 'A brightening, vitamin C-rich eye crème that targets signs of aging, reducing the look of dark circles while improving concealer application and wear—inspired by makeup artist secret, banana powder.', 'img/bananabright_thumb.jpeg', 'img/bananabright_1.jpeg,\r\nimg/bananabright_2.jpeg'),
(6, 'Clarins - Natural Lip Perfector', '', '', 26.00, 'lip_balm', 'Dry', '2021-04-18 16:19:05', '2021-04-18 16:19:05', 'Smoothes, softens and visibly plumps with Acacia micro-pearls and vegetable waxes to smooth, and soothes the senses with a delicate scent of vanilla. ', 'img/clarinslipperfefctor_thumb.jpeg', 'img/clarinslipperfefctor_1.jpeg,\r\nimg/clarinslipperfefctor_2.jpeg'),
(7, 'Sol de Janeiro - Brazilian Bum Bum Cream', '', '', 45.00, 'body_cream', 'All', '2021-04-18 16:23:02', '2021-04-18 16:23:02', 'A fast-absorbing body cream with an addictive scent and a visibly tightening, smoothing formula that adds a hint of shimmer to skin.', 'img/bumbumcream_thumb.jpeg', 'img/bumbumcream_1.jpeg,\r\nimg/bumbumcream_2.jpeg'),
(8, 'Sol de Janeiro - Bom Dia Bright™ Body Cream', '', '', 45.00, 'body_cream', 'All', '2021-04-18 16:26:01', '2021-04-18 16:26:01', 'A retexturizing and nourishing daily body cream with Fruit AHAs and Vitamin C that reveals visibly brighter, smoother skin.', 'img/bomdia_thumb.jpeg', 'img/bomdia_1.jpeg,\r\nimg/bomdia_2.jpeg'),
(9, 'Kiehl\'s - Turmeric & Cranberry Seed Energizing Radiance Mask', '', '', 45.00, 'face_mask', 'Normal, Combination, and Oily', '2021-04-18 16:30:36', '2021-04-18 16:30:36', 'An energizing radiance mask that helps visibly brighten dull, fatigued skin.', 'img/kiehls_cranberry_mask_thumb.jpeg', 'img/kiehls_cranberry_mask_1.jpeg,\r\nimg/kiehls_cranberry_mask_2.jpeg'),
(10, 'SUNDAY RILEY - C.E.O Glow Face Oil', '', '', 80.00, 'lightweight_oil', 'Normal, Dry, and Combination', '2021-04-18 16:35:23', '2021-04-18 16:35:23', 'An instantly absorbing face oil infused with advanced vitamin C (THD ascorbate), turmeric, and evening primrose oil, to brighten, hydrate, and leave skin glowing.', 'img/sundayriley_ceoglow_thumb.jpeg', 'img/sundayriley_ceoglow_1.jpeg,\r\nimg/sundayriley_ceoglow_2.jpeg'),
(11, 'SUNDAY RILEY - Luna Retinol Sleeping Night Oil', '', '', 55.00, 'lightweight_oil', 'Normal, Dry, Combination, and Oily', '2021-04-18 16:38:23', '2021-04-18 16:38:23', 'A gentle, glow-giving retinoid night oil—perfect for new and experienced retinol users—that is balanced with blue tansy to calm skin while improving the look of wrinkles, redness, and pores.', 'img/sundayriley_luna_thumb.jpeg', 'img/sundayriley_luna_1.jpeg,\r\nimg/sundayriley_luna_2.jpeg'),
(12, 'SUNDAY RILEY - Good Genes All-In-One Lactic Acid Treatment', '', '', 85.00, 'serum', 'Normal, Dry, Combination, and Oily', '2021-04-18 16:41:33', '2021-04-18 16:41:33', 'A lactic-acid, AHA serum that targets the look of pores, hyperpigmentation, and dark spots and is clinically shown to reduce the look of fine lines and wrinkles.', 'img/sundayriley_goodgenes_thumb.jpeg', 'img/sundayriley_goodgenes_1.jpeg,\r\nimg/sundayriley_goodgenes_2.jpeg'),
(13, 'Drunk Elephant - T.L.C. Sukari Babyfacial™ AHA + BHA Mask', '', '', 80.00, 'face_mask', 'Normal, Dry, Combination, and Oily', '2021-04-18 16:44:27', '2021-04-18 16:44:27', 'A pro-quality AHA/BHA \"facial\" that resurfaces skin to visibly reveal greater clarity, improved skin texture and tone, and a more youthful-looking appearance.', 'img/drunkelephant_babyfacial_thumb.jpeg', 'img/drunkelephant_babyfacial_1.jpeg,\r\nimg/drunkelephant_babyfacial_2.jpeg'),
(14, 'Algenist - GENIUS Liquid Collagen', '', '', 135.00, 'serum', 'Normal, Dry, Combination, and Oily', '2021-04-18 16:46:58', '2021-04-18 16:46:58', 'A vegan collagen treatment serum that helps to restore skin\'s natural bounce and resilience while diminishing the look of fine lines and wrinkles.', 'img/algenist_liquidcollagen_thumb.jpeg', 'img/algenist_liquidcollagen_1.jpeg,\r\nimg/algenist_liquidcollagen_2.jpeg'),
(15, 'Glossier - Solution, exfoliating skin perfector', '', '', 24.00, 'toner', 'All', '2021-04-18 16:52:28', '2021-04-18 16:52:28', 'Unlike physical scrubs, Solution uses a 10% blend of skincare acids to “unglue” dead skin and sweep it away, so your complexion appears smoother, softer, and glowier', 'img/glossier_solution_thumb.jpeg', 'img/glossier_solution_1.jpeg,\r\nimg/glossier_solution_2.jpeg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
