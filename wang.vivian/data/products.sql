-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2021 at 01:40 AM
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
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `images` varchar(256) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `Images`, `Thumbnail`, `Description`) VALUES
(1, 'Hanging Lamp Paul Secon Swag Sompex Space Age Mid-Century', 1851.07, 'Light Fixture', '2021-04-25 01:10:25', '2021-04-25 01:10:25', 'Hanging Lamp Paul.jpg', 'Hanging Lamp Paul_t.jpg', 'Large Paul Secon lamp, model SWAG for Sompex in 1970s. Fine original condition. Lucite frame connected by nylon cords. One bulb. Diameter of the frame is 60 cm, 23.6 in, the height is 47 cm, 18.5 in. We can customize the total length of the lamp.'),
(2, 'Little Petra Lounge Chair in Sheepskin with Oak Frame by & Tradi', 1800.00, 'Furniture', '2021-04-25 01:19:42', '2021-04-25 01:19:42', 'Little Petra Lounge Chair.jpg', 'Little Petra Lounge Chair_t.jpg', 'Initially introduced back in 1938, Little Petra won instant praise at the Copenhagen Cabinetmakers Guild Exhibition, subsequently winning awards at exhibits in New York and Berlin. It’s one of just a few designs by architect Viggo Boesen, who became associated with Denmark’s signature design aesthetic in the 1930s called funkis style. Little Petra is surprisingly petite, able to fit into all kinds of spaces, interiors and environments. Low to the ground, open and embracing, it embodies the essence of a lounge chair, allowing for all kinds of seating positions in any cosy setting imaginable.'),
(3, 'Ovoid Lounge Chair in Solid Oak, Raw Effect and Leather by Craig', 1999.00, 'Furniture', '2021-04-25 01:23:11', '2021-04-25 01:23:11', 'Chair in Solid Oak.jpg', 'Chair in Solid Oak_t.jpg', 'The Bassam Fellows Ovoid lounge chair is a deceptively simple and casual chair derived from the pure geometry of elliptical forms. With a big sit despite a smaller footprint, Ovoid is the kind of pull-up chair that defines ease. With no sharp edges and no corners, the chair lends itself to random, organic layouts that encourage viewing, lounging or leaning in multiple directions. The chunky, sculptural wood base with elliptical legs suspends and floats the signature upholstered seat and back creating a clear separation of parts and contributing to a sense of lightness.'),
(4, 'Three-Seat Sofa for A. Mikael Laursen & S', 11000.00, 'Furniture', '2021-04-25 00:53:12', '2021-04-25 00:53:12', 'Three-Seat Sofa.jpg', 'Three-Seat Sofa_t.jpg', 'The impressive body is balanced out visually by the slim and simple lines, as well as the tapered legs. The color of the teak wood is complimented by the subdued forest green color of the upholstery. The embracing back- and armrests along with the three loose cushions further add to the comfortable and soft look of this modernist three-seat. The design feature that distinguishes this sofa from others is the pair of inverted, wooden arches at the bottom that adds further visual interest and shows off the craftsmanship of the manufacturer.'),
(5, 'Cartagena Woven Fabric Upholstered Armchair ', 460.00, 'Furniture', '2021-04-25 00:50:32', '2021-04-25 00:50:32', 'Brass Table Lamp.jpg', 'Brass Table Lamp_t.jpg', 'Large patinated brass or bronze desk or table lamp attributed to Fontana Arte, circa 1960 (very similar to mod. 2278). Dark patinated brass with a silvery sheen and textured acrylic diffuser. Three E14 sockets.'),
(6, 'Large Patinated Brass Table Lamp, 1960s, Italy', 2495.00, 'Light Fixture', '2021-04-25 00:47:26', '2021-04-25 00:47:26', 'Brass Table Lamp.jpg', 'Brass Table Lamp_t.jpg', 'Large Patinated Brass Table Lamp'),
(7, 'Italian Designer,Large Modernist Vase, Solid Brass', 2500.00, 'Accessories', '2021-04-25 00:40:10', '2021-04-25 00:40:10', 'Large Modernist Vase.jpg', 'Large Modernist Vase_t.jpg', 'A large vase. Designed and produced in Italy, c. 1950s. In solid brass.'),
(8, 'Contemporary Besame Floor Lamp in Cream Lacquer by Robert Kuo', 4650.00, 'Light Fixtures', '2021-04-25 00:26:54', '2021-04-25 00:26:54', 'Contemporary Besame Floor Lamp.jpg', 'Contemporary Besame Floor Lamp_t.jpg', 'Besame floor lamp Cream lacquer Hand repoussé Limited edition Measures: Ivory pongee shade (24\" x 26\" x 14 1/2\" H) Lacquer is a technique that dates back to the Shang dynasty, circa 1600-1100 B.C. These pieces are made with at least 60 coats of organic lacquer. Each layer of lacquer is applied with a curing period of 24 hours in between so that it can dry.'),
(9, 'Paolo Buffa 1940s Oak Wood Cabinet Vetrine, Italy', 12221.00, 'Furniture', '2021-04-25 00:31:48', '2021-04-25 00:31:48', 'Paolo Buffa 1940s Oak Wood Cabinet Vetrine.jpg', 'Paolo Buffa 1940s Oak Wood Cabinet Vetrine_t.jpg', 'Architect Paolo Buffa oak wood Abinet with Vitrine. Ref: L\'Arredamento Moderno / Terza Serie / Roberto Aloi / 1947 / Hoepli Editore / Image 349. for a similar piece.'),
(10, 'Sculpted Bronze Sconce Light by Henry Wilson', 2041.00, 'Light Fixtures', '2021-04-25 00:18:19', '2021-04-25 00:18:19', 'Sculpted Bronze Sconce Light by Henry Wilson.jpg', 'Sculpted Bronze Sconce Light by Henry Wilson_t.jpg', 'Sculpted bronze sconce light by Henry Wilson This sculptural item is handmade in Sydney, Australia. Sandwiched between the two bronze components, the light source is projected onto the concave backing. The light follows the gentle bowl of the dish and is directed outward, reflecting a warm glow of light onto the opposing surface.'),
(11, 'Jacques Quinet, Pair Lounge Chairs, France, circa 1955', 35000.00, 'Furniture', '2021-04-25 00:13:51', '2021-04-25 00:13:51', 'Jacques Quinet, Pair Lounge Chairs.jpg', 'Jacques Quinet, Pair Lounge Chairs_t.jpg', 'This extraordinary pair of lounge chairs are an excellent examples Quinet\'s midcentury output, and feature strapped backs, metal sabots, and lush, newly restored skai upholstery.'),
(12, 'Guillerme et Chambron, Midcentury Buffet with Sliding Doors', 18000.00, 'Furniture', '2021-04-25 23:56:00', '2021-04-25 23:56:00', 'Guillerme et Chambron.jpg', 'Guillerme et Chambron_t.jpg', 'This midcentury buffet in a light, veneered oak has sliding doors and drawers, and was made by the celebrated French designer Robert Guillerme, as part of a line of midcentury design he produced for the company, Votre Maison.'),
(13, 'Cutler & Girard, Three-panel screen, Italy, 1902', 120000.00, 'Furniture', '2021-04-24 23:48:18', '2021-04-24 23:48:18', 'Three-panel screen.jpg', 'Three-panel screen_t.jpg', 'Rare and fine piece of Italian Art Nouveau. Carved maple, walnut, mahogany and satinwood. Overall: Height: 71.75\" width: 64\" depth: 1.5\". Left panel: Height: 71.75\" width: 22.25\" depth: 1.5\". Middle panel: height: 71.75 width: 18.25\" depth: 1.5\". Right panel: Height: 71.75\" width: 22.75\" depth: 1.5\"');

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
