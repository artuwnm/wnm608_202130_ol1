-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2021 at 11:38 PM
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
-- Database: `akshatsonarproducts`
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
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(22, 'PlayStation 5', 49990.00, 'Accessories', '2021-05-20 06:17:01', '2021-05-25 21:43:32', 'Lightning speed - harness the power of a custom CPU, GPU, and SSD with an integrated I/world that rewrite the rules of what a PlayStation console can do. Stunning games - Marvel at incredible graphics and experience new PS5 features.  Breath-taking immersion - discover a deeper gaming experience with support for haptic feedback, adaptive triggers, and 3D audio technology. 8K Output - PS5 consoles support 8K Output, so you can play games on your 4320p resolution display.', 'ps5_front.png', 'ps5_front.png,ps5_side.png'),
(4, 'Demon Souls', 4499.00, 'Discs', '2021-04-13 04:30:43', '2021-05-22 21:51:31', 'In his quest for power, the 12th King of Boletaria, King Allant channeled the ancient Soul Arts, awakening a demon from the dawn of time itself, The Old One. With the summoning of The Old One, a colorless fog swept across the land, unleashing nightmarish creatures that hungered for human souls. Those whose souls were stripped from them, lost their minds – left only with the desire to attack the sane that remained.', 'demonsoul_front.jpg', 'demonsoul_front.jpg,demonsoul_side.png'),
(5, 'Returnal', 4999.00, 'Discs', '2021-04-13 04:35:23', '2021-04-13 04:35:23', 'Intense combat: fight to survive in this third-person roguelike shooter, take on ruthless enemies in explosive, bullet hell-fuelled combat.\r\n\r\nThrilling exploration: manage equipment and resources carefully – every time you die, you restart from the beginning.\r\n\r\nHaunting narrative: piece together fragments of Selene\'s memories as she seeks out answers.\r\n', 'returnal_front.jpg', 'returnal_front.jpg'),
(6, 'Control Ultimate Edition', 2999.00, 'Discs', '2021-04-13 04:38:50', '2021-05-25 21:31:07', 'After a secretive agency in New York is invaded by an otherworldly threat, take on the role of Jesse Faden (Courtney Hope), the building\'s new Director, and fight to regain control of the situation.Explore a vast concrete skyscraper known as \'The Oldest House\' with your trusty Service Weapon, a supernatural shape-shifting sidearm, in hand. This vast, ever-shifting environment is far bigger on the inside than its exterior would suggest, and filled with far deeper secrets.', 'control_front.png', 'control_front.png'),
(7, 'Call of Duty: Black Ops Cold War', 5299.00, 'Discs', '2021-04-13 04:41:51', '2021-04-13 04:41:51', 'As Elite operatives, you will follow the trail of a shadowy Figure named Perseus who is on a mission to destabilize the global balance of power and change the course of history.\r\n\r\nDescend into the dark center of this global conspiracy alongside iconic characters woods, Mason, and Hudson, and a new cast of operatives attempting to stop plot decades in the making.\r\n\r\nBeyond the campaign, players will bring a cold war arsenal of weapons and equipment into the next generation of multiplayer and Zombies experiences.', 'cod_front.jpg', 'cod_front.jpg'),
(8, 'Godfall', 4999.00, 'Discs', '2021-04-13 04:44:25', '2021-04-13 04:44:25', 'Adventure across exotic vistas, from the above-ground reefs of the water realm to the subterranean Crimson forests of the Earth realm\r\n\r\nMaster all five weapon classes, each with unique play styles and a variety of long swords, polearms, Warhammer, greatswords, and Dual Blades\r\n\r\nLevel up, learn new skills and uncover legendary weapons with devastating effects on the battlefield', 'godfall_front.jpg', 'godfall_front.jpg'),
(9, ' Sackboy : A Big Adventure', 3999.00, 'Discs', '2021-04-13 04:47:59', '2021-05-22 21:54:04', 'The dastardly Vex (a near-mythical being born of chaos and fear, no less) kidnaps Sackboy’s friends and forces them to build his Topsy Turver. This most deadly diabolical device will transform Craftworld from a fantastical land of pure imagination and innocent dreams… into a torrid, barren eyesore of nightmares. Ooh, the fiend!', 'sackboy_front.jpg', 'sackboy_front.jpg,sackboy_side.png'),
(10, 'Back 4 Blood', 3999.00, 'Discs', '2021-04-13 04:49:51', '2021-05-20 06:09:13', '4-Player co-op story campaign where you must work together to survive challenging missions.Play with up to 3 of your friends online or go solo and lead your team in battle8 customizable cleaners and a range of lethal weapons and items to strategize against the enemy.Switch sides and play as the horrific ridden. Both with unique weapons, abilities, and perks', 'b4b_front.png', 'b4b_front.png'),
(11, 'NBA 2K21', 4599.00, 'Disc', '2021-04-13 04:51:50', '2021-05-20 06:12:39', 'Make a name for yourself in the city, where an expansive, dynamic basketball world awaits.Rep one of four affiliations, with non-stop battles that determine which side runs the city.Exclusively available in next-gen NBA 2K21.Extensive improvements upon its best-in-class graphics, gameplay & community online features', 'nba_front.png', 'nba_front.png'),
(23, 'DualSense Wireless Controller', 6500.00, 'Accessories', '2021-05-20 06:26:29', '2021-05-22 22:12:03', 'Bring gaming worlds to life - a) feel your in-game actions and Environment simulated through haptic feedback2, b)experience varying force and tension at your fingertips with adaptive triggers2. Chat online through the built-in microphone3, connect a headset directly via the 3.5mm jack, Switch voice capture on & off using the dedicated mute button, record & broadcast your epic gaming moments. Enjoy a comfortable, evolved design with an iconic layout and enhanced sticks, intuitively interact with select games using the integrated motion sensor. Hear higher-fidelity1 sound effects through the built-in Speaker in supported games.', 'dualsense_front.png', 'dualsense_front.png,dualsense_side.png,dualsense.png'),
(14, 'HD Camera', 4999.00, 'Accessories', '2021-04-13 05:04:03', '2021-05-22 21:57:20', 'Capture unmissable moments - record yourself in full-HD through the camera’s dual wide-angle lenses.Built-in stand - get the perfect shot with the built-in adjustable stand.Background removal tools - Take center stage in your gameplay videos with the background removal tools.', 'camera_front.png', 'camera_front.png,camera_side.png'),
(15, 'Spiderman Miles Morales', 3999.00, 'Discs', '2021-04-13 05:09:36', '2021-05-22 21:59:30', 'Miles moral discovers explosive powers that set him apart from his mentor, Peter ParkerA war for power -a war for control of Marvel’s new York has broken out between a devious Energy Corporation and a high-tech criminal armyA vibrant new home - traverse the snowy streets of his new, vibrant, and bustling neighborhood as Miles searches for a sense of belonging', 'spiderman_front.jpg', 'spiderman_front.jpg,spiderman_side.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
