-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2021-05-29 07:56:26
-- 服务器版本： 5.6.51-cll-lve
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `hi94740_joystore`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `current_price` decimal(10,2) NOT NULL,
  `type` enum('full','left','right','accessory') NOT NULL,
  `platform` enum('xbox','ns') NOT NULL,
  `2.4g` tinyint(1) NOT NULL,
  `bluetooth` tinyint(1) NOT NULL,
  `hue` int(3) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `current_price`, `type`, `platform`, `2.4g`, `bluetooth`, `hue`, `description`, `image`, `date_create`, `date_modify`) VALUES
(1, 'Joy-Con - Blue Left', 49.99, 29.99, 'left', 'ns', 0, 1, 207, '', '1.jpeg', '2021-04-15 01:33:19', '2021-04-15 01:33:19'),
(2, 'Joy-Con - Red Right', 49.99, 29.99, 'right', 'ns', 0, 1, 351, '', '2.jpeg', '2021-04-15 01:37:36', '2021-04-15 01:37:36'),
(3, 'Joy-Con - Neon Red Left', 49.99, 49.99, 'left', 'ns', 0, 1, 336, '', '3.jpeg', '2021-04-15 01:40:49', '2021-04-15 01:40:49'),
(4, 'Joy-Con - Neon Yellow Right', 49.99, 49.99, 'right', 'ns', 0, 1, 87, '', '4.jpeg', '2021-04-15 01:41:24', '2021-04-15 01:41:24'),
(5, 'Joy-Con Grip', 19.99, 10.00, 'accessory', 'ns', 0, 0, -1, '', '5.jpeg', '2021-04-15 01:46:16', '2021-04-15 01:46:16'),
(6, 'Joy-Con Charging Grip', 29.99, 19.99, 'accessory', 'ns', 0, 0, -1, '', '6.jpeg', '2021-04-15 01:47:07', '2021-04-15 01:47:07'),
(7, 'Ring-Con', 29.99, 19.99, 'accessory', 'ns', 0, 0, -1, '', '7.jpeg', '2021-04-15 01:48:27', '2021-04-15 01:48:27'),
(8, 'Ring-Con Leg Strap', 9.99, 5.00, 'accessory', 'ns', 0, 0, -1, '', '8.jpeg', '2021-04-15 01:51:32', '2021-04-15 01:51:32'),
(9, 'Joy-Con Strap - Left', 9.99, 5.00, 'accessory', 'ns', 0, 0, -1, '', '9.jpeg', '2021-04-15 01:52:56', '2021-04-15 01:52:56'),
(10, 'Joy-Con Strap - Right', 9.99, 5.00, 'accessory', 'ns', 0, 0, -1, '', '10.jpeg', '2021-04-15 01:53:18', '2021-04-15 01:53:18'),
(11, 'Switch Pro Controller', 99.99, 59.99, 'full', 'ns', 0, 1, -1, '', '11.jpeg', '2021-04-15 01:59:22', '2021-04-15 01:59:22'),
(12, 'Switch Pro Controller - Splatoon 2 Edition', 99.99, 99.99, 'full', 'ns', 0, 1, -1, '', '12.jpeg', '2021-04-15 02:03:15', '2021-05-12 03:08:03'),
(13, 'Xbox One Controller - Midnight Blue', 99.99, 50.00, 'full', 'xbox', 1, 0, 205, '', '13.jpeg', '2021-04-15 02:09:00', '2021-04-15 02:09:00'),
(14, 'Xbox One S Controller - Volcano Shadow', 99.99, 99.99, 'full', 'xbox', 1, 1, 346, '', '14.jpeg', '2021-04-15 02:13:31', '2021-04-15 02:13:31'),
(15, 'Xbox One S Controller - Ocean Shadow', 99.99, 99.99, 'full', 'xbox', 1, 1, 202, '', '15.jpeg', '2021-04-15 02:21:48', '2021-04-15 02:21:48'),
(16, 'Xbox One Controller Receiver', 19.99, 19.99, 'accessory', 'xbox', 1, 0, -1, '', '16.jpeg', '2021-04-15 02:24:46', '2021-05-12 02:44:48'),
(17, 'Switch Pro Controller - Splatoon 3 Edition', 119.99, 50.00, 'full', 'ns', 0, 1, 295, '', '12.jpeg', '2021-05-12 10:04:29', '2021-05-12 10:45:43'),
(20, 'Switch Pro Controller - Splatoon 666 Edition', 666.00, 233.00, 'full', 'ns', 1, 1, -1, '', '12.jpeg', '2021-05-12 10:46:32', '2021-05-18 14:15:25');

--
-- 转储表的索引
--

--
-- 表的索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
