-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2021 at 01:02 AM
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
-- Database: `wnm_608_Chang`
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
(1, 'Apple MagSafe iPhone Charger', 39.00, 'Charger', '2021-04-17 23:40:34', '2021-04-17 23:40:34', 'The MagSafe Charger makes wireless charging a snap. The perfectly aligned magnets attach to your iPhone 12 or iPhone 12 Pro and provide faster wireless charging.\r\n', 'images/MagSafe_thumb.jpg', 'images/MagSafe.jpg'),
(2, 'Belkin - BOOST CHARGE™ 3-in-1', 120.00, 'Charger ', '2021-04-18 00:02:27', '2021-04-18 00:02:27', 'A 3-in-1 charging dock that delivers ultimate convenience to charge all your wireless Apple devices quickly, and at the same time. Providing optimal 7.5W wireless charging for iPhone, a magnetic charging module for Apple Watch, and a 5W pad designed to wirelessly charge your AirPods, this stylish charging dock not only charges all your devices at maximum speed but fits seamlessly to any environment.', 'images/Belkin_thumb.jpg', 'images/Belkin.jpg'),
(4, 'DJI OM 4', 150.00, 'Stabilizers', '2021-04-18 00:10:36', '2021-04-18 00:10:36', 'Life’s extraordinary moments deserve to be captured with smooth video. DJI OM 4 is a magnetic gimbal designed to complement your smartphone, allowing you to start recording right away. Ultra-compact, easy to use, and bursting with intelligent features, OM 4 is the ultimate solution for capturing and sharing your world.\r\n', 'images/OM_thumb.jpg', 'images/OM.jpg'),
(5, 'Insignia™ - Tempered Glass Screen Protector', 15.00, 'Screen Protectors', '2021-04-18 00:16:41', '2021-04-18 00:16:41', 'When your phone falls, you feel your stomach drop too – is the screen cracked or is it safe this time? With the Insignia Tempered Glass Screen Protector for iPhone® 12 mini, you don’t have to worry that an accidental fall will mean costly screen repairs. Its 9H hardness rating helps protect your screen from scratches when you put your phone in a bag as well as from drops during everyday use. Smooth tempered glass won’t affect your iPhone’s touch sensitivity, giving you precise control. Case friendly and easy to install, this screen protector takes the damage, so your phone doesn’t have to.\r\n', 'images/Insignia_thumb.jpg', 'images/Insignia.jpg'),
(3, 'PopSockets - PopGrip Stretch', 15.00, 'Cell Phone Grips', '2021-04-18 00:06:04', '2021-04-18 00:06:04', 'Compatible with All PopMounts. No adhesives used — the PopGrip Slide simply clips to your phone case for maximum utility, and is designed specifically for Apple silicone cases made for iPhone. Raise it, lower it, or take it off! It\'s easy to slide, and it stays where you want it.', 'images/PopSockets_thumb.jpg', 'images/PopSockets.jpg'),
(6, 'PopSockets - PopGrip - Opal', 10.00, 'Cell Phone Grips', '2021-04-18 00:24:09', '2021-04-18 00:24:09', 'Accessorize your phone with this opal and off-white swappable PopSocket phone grip. It sticks to most devices, letting you grasp your phone securely while texting or taking photos, and it conveniently doubles as a stand so you can watch videos no matter where you are. The matte print on this swappable PopSocket phone grip provides a stylish look.\r\n', 'images/Opal_thumb.jpg', 'images/Opal.jpg'),
(7, 'Apple - 3.3\' USB Type A-to-Lightning Charging Cable - White', 20.00, 'Adapters & Cables', '2021-04-18 00:26:42', '2021-04-18 00:26:42', '\r\nThis USB 2.0 cable connects your iPhone, iPad or iPod with Lightning connector to your computer\'s USB port for syncing and charging. Or you can connect to the Apple USB Power Adapter for convenient charging from a wall outlet.', 'images/USB_thumb.jpg', 'images/USB.jpg'),
(8, 'Apple - 20W USB-C Power Adapter - White', 19.00, 'Wall Chargers & Power Adapters', '2021-04-18 00:30:35', '2021-04-18 00:30:35', 'The Apple 20W USB-C Power Adapter offers fast, efficient charging at home, in the office, or on the go. While the power adapter is compatible with any USB-C-enabled device, Apple recommends pairing it with the 11-inch iPad Pro and 12.9-inch iPad Pro (3rd generation) for optimal charging performance. You can also pair it with iPhone 8 or later to take advantage of the fast-charging feature.', 'images/Adapter_thumb.jpg', 'images/Adapter.jpg'),
(9, 'iOttie - iON 7.5/10W Qi Certified Fast Charge Wireless Charging ', 23.00, 'Charger', '2021-04-18 00:35:35', '2021-04-18 00:35:35', 'Power your smartphone with this iON wireless fast charging stand. The LED charging indicator lets you know how much energy your phone has, and the silicone pads are anti-slip so it stays securely in place. This iON wireless fast charging stand has two Qi coils so you can power your phone while viewing in portrait or landscape.\r\n', 'images/Ash_thumb.jpg', 'images/Ash.jpg'),
(10, 'PhoneSoap - 3 - UV-C Sanitizer - White', 80.00, 'Cell Phone Care & Cleaning', '2021-04-18 00:42:13', '2021-04-18 00:42:13', '\r\nSafely sanitize your phone while you charge without harmful heat, liquids or harsh chemicals by neutralizing up to 99.99% of germs using UV-C technology. Glow means go, when the glowing lightning bolt indicator light is on, you know your device is receiving 360-degree disinfection, reaching the smallest crevices even liquid cleaners can’t reach. In just 10 minutes when sanitation is complete, PhoneSoap 3 automatically turns off, so you don\'t have to worry about the device overheating. PhoneSoap 3 is specifically designed to fit smartphones of all sizes however, it can also be used to sanitize other small items including ear buds, car keys, credit cards and more! PhoneSoap 3 has two medical-grade UV-C lightbulbs on the top and bottom on the inside of the unit with each bulb built to last up to approximately 24,000 uses or 4,000 hours. Each unit comes with a lifetime bulb warranty offering replacement bulbs at no cost to you so you can keep sanitizing.\r\n', 'images/PhoneSoap_thumb.jpg', 'images/PhoneSoap.jpg'),
(11, 'OtterBox - Symmetry Series Case for Apple® iPhone® 11/XR - Glitt', 26.00, 'Cell Phone Cases', '2021-04-18 00:45:15', '2021-04-18 00:45:15', 'Match your sparkling personality with protection for your phone in the thin design of this OtterBox Symmetry case for Apple iPhone 11/XR. The clear glittering case shows off your device\'s form, while polycarbonate and synthetic rubber construction absorbs the shock of impact. With a slim one-piece construction, this OtterBox Symmetry case snaps easily onto your phone.\r\n', 'images/OtterBox_thumb.jpg', 'images/OtterBox.jpg'),
(12, 'Speck - Presidio Show Case for Apple® iPhone® XS Max - Clear/Ros', 23.00, 'Cell Phone Cases', '2021-04-18 00:47:58', '2021-04-18 00:47:58', 'Wrap your iPhone XS Max in something practical with this Speck Presidio case. Its clear back shows off the color of your smartphone, and a layer of IMPACTIUM material ensures your device is safe during drops and falls up to 10 feet high. Keep the touch screen free of scratches thanks to the raised bezel on this Speck Presidio case.', 'images/Speck_thumb.jpg', 'images/Speck.jpg');

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
