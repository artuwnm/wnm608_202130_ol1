CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `material` varchar(256) DEFAULT NULL,
  `details` varchar(320) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `quantity` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `material`, `details`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `quantity`) VALUES
(1, 'Diamond Bezel Bracelet', '14k yellow gold and white diamond', '6.5in/16.6cm with jump rings at 5.5in/14.0cm chain length and lobster clasp', 650.00, 'Bracelet', '2021-04-13 01:01:56', '2021-05-15 00:56:44', 'A tennis bracelet looks even better with these bezel-set beauties. Brilliant white diamonds wrap the length of the bracelet with the faintest hint of yellow gold chain in between to give this iconic design a modern twist. ', 'jewelry/bracelet1_thumb.png', 'jewelry/bracelet1_thumb.png,jewelry/bracelet1_wear.jpeg', '40'),
(2, 'Mother Of Pearl Heart Bracelet', '14k yellow gold, white diamond, and mother of pearl', '7.5in/19.1cm adjustable to a minimum at 5.25in/13.9cm  \r\nlength and spring ring clasp', 500.00, 'Bracelet', '2021-04-13 01:06:56', '2021-05-13 19:00:15', 'The new mother of pearl bracelet has a whole lot of heart. A single heart lays on its side, surrounded by three white diamonds on each side, laying on a single gold chain that drapes delicately on the wrist.', 'jewelry/bracelet2_thumb.png', 'jewelry/bracelet2_thumb.png,jewelry/bracelet2_wear.jpeg', '30'),
(3, 'Diamond Bezel Tennis Bracelet', '14k white gold and white diamond', 'length and diamond availavle in 6.5in/16.5cm - 2.57cts, 7.0in/17.8cm - 2.77cts, 7.5in/19.1cm - 2.97cts', 720.00, 'Bracelet', '2021-04-13 01:10:28', '2021-04-13 01:10:28', 'This beauty features 1mm bezel set diamonds that run the length of the dazzling design.', 'jewelry/bracelet3_thumb.png', 'jewelry/bracelet3_thumb.png,jewelry/bracelet3_wear.jpeg', '26'),
(4, 'Diamond Star Earring', '14k yellow gold and white diamond', 'Diameter is approximately 10.5mm, and average carat weight is 0.08cts', 300.00, 'Earring', '2021-04-13 01:15:16', '2021-04-13 01:15:16', 'The sweetest classic pavé huggie that hugs tight to the ear is updated with an equally bright pavé star charm that hangs delicately below.', 'jewelry/earings1_thumb.png', 'jewelry/earings1_thumb.png,jewelry/earings1_wear.png', '38'),
(5, 'White Topaz Solitaire Earring', '14k yellow gold and white diamond', 'Diameter is approximately 11mm, and average carat weight is 0.043cts', 265.00, 'Earring', '2021-04-13 01:18:55', '2021-04-13 01:18:55', 'This earring uses white topaz with a drop of three diamond bezels that hangs effortlessly from the base of the medium-sized seamless hoop to create a simple fashion style.', 'jewelry/earings2_thumb.png', 'jewelry/earings2_thumb.png,jewelry/earings2_wear.jpeg', '40'),
(6, 'J Hook Earring', '14k yellow gold and white diamond', 'Length is approximately 0.8in/2.0cm, and average carat weight is 0.12cts', 330.00, 'Earring', '2021-04-13 01:21:21', '2021-04-13 01:21:21', 'The earring presents a special shape of \"J\" with a single row of white diamonds that curves back ever so slightly at the bottom of the lobe to reveal another glittering single cluster of diamonds that climb the ear from behind. ', 'jewelry/earings3_thumb.png', 'jewelry/earings3_thumb.png,jewelry/earings3_wear.jpeg', '32'),
(7, 'Diamond Honey Comb Necklace', '14k yellow gold and white diamond', 'Length is approximately 16in, and six 1.3mm white diamonds', 700.00, 'Necklace', '2021-04-13 01:25:00', '2021-04-13 01:25:00', 'Inspired by the natural honeycomb, the necklace shows an organic handmade style with negative space that appropriately combined melee into the design. ', 'jewelry/necklace1_thumb.png', 'jewelry/necklace1_thumb.png,jewelry/necklace1_wear.png', '16'),
(8, 'The Sun\'s Claw Necklace', '14k yellow gold and white diamond', 'Nine white diamonds, sized between 1.5mm to 1mm', 750.00, 'Necklace', '2021-04-13 01:28:29', '2021-04-13 01:28:29', 'Add a glimmer to this 14k yellow gold pendant with nine dainty white diamonds to stand out the radiant claw of the sun. Mill grain is applied around settings.', 'jewelry/necklace2_thumb.png', 'jewelry/necklace2_thumb.png,jewelry/necklace2_wear.png', '25'),
(9, 'Textured Disc Necklace', '14k yellow gold and white diamond', '1.9mm white diamond, and 16in chain', 460.00, 'Necklace', '2021-04-13 01:31:33', '2021-04-13 01:31:33', 'The pendant is created with textures and a gypsy setting by hand, conveying simplicity and organic style. ', 'jewelry/necklace3_thumb.png', 'jewelry/necklace3_thumb.png,jewelry/necklace3_wear.png', '28'),
(10, 'Orbit Band Ring', '14k gray gold and baguette white diamond', 'Band measures 2.1mm wide by 2.3mm thick at the widest part of the dome and seven baguette white diamonds.', 1500.00, 'Ring', '2021-04-13 01:34:24', '2021-04-13 01:34:24', 'The elegant combination of the 14k gray gold and baguette white diamonds makes a classic and harmonious balance for the orbit band. ', 'jewelry/ring1_thumb.png', 'jewelry/ring1_thumb.png,jewelry/ring1_wear.png', '8'),
(11, 'Umi Ring', '18k yellow gold and Mexican pearl', '9mm pink-hued Mexican pearl and two rose-cut color diamonds.', 980.00, 'Ring', '2021-04-13 01:37:41', '2021-04-13 01:37:41', 'The pink-hued Mexican pearl shows an amazing iridescent from the flair of the ocean. The unsymmetrical lined textures and the two rose-cut diamonds on the sides are all made by pure hands, which gives a mild and smooth feeling to the ring.', 'jewelry/ring2_thumb.png', 'jewelry/ring2_thumb.png,jewelry/ring2_wear.png', '10'),
(12, 'Diamond Halo Ring', '14k white gold and white diamond', 'Band measures 1.90mm by 1.40mm, center stone includes Rose Cut diamond, 0.53ct, and side stones include 4 Melee White Diamonds, 1.3mm', 1349.94, 'Ring', '2021-04-13 01:39:44', '2021-05-16 15:13:51', 'The middle prong setting and the side bezel setting match each other to stand out the center rose cut diamond. The halo design effectively enhances the visual effect for the stone size. ', 'jewelry/ring3_thumb.png', 'jewelry/ring3_thumb.png,jewelry/ring3_wear.png', '15'),
(18, 'Diamond Bracelet', NULL, NULL, 950.00, 'Bracelet', '2021-05-15 02:24:52', '2021-05-15 02:24:52', 'This beauty features bezel set diamonds that run the length of the dazzling design.', 'jewelry/bracelet3_thumb.png', 'jewelry/bracelet3_thumb.png,jewelry/bracelet3_wear.jpeg', '25');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `material` varchar(256) DEFAULT NULL,
  `details` varchar(320) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `quantity` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `material`, `details`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `quantity`) VALUES
(1, 'Diamond Bezel Bracelet', '14k yellow gold and white diamond', '6.5in/16.6cm with jump rings at 5.5in/14.0cm chain length and lobster clasp', 650.00, 'Bracelet', '2021-04-13 01:01:56', '2021-05-15 00:56:44', 'A tennis bracelet looks even better with these bezel-set beauties. Brilliant white diamonds wrap the length of the bracelet with the faintest hint of yellow gold chain in between to give this iconic design a modern twist. ', 'jewelry/bracelet1_thumb.png', 'jewelry/bracelet1_thumb.png,jewelry/bracelet1_wear.jpeg', '40'),
(2, 'Mother Of Pearl Heart Bracelet', '14k yellow gold, white diamond, and mother of pearl', '7.5in/19.1cm adjustable to a minimum at 5.25in/13.9cm  \r\nlength and spring ring clasp', 500.00, 'Bracelet', '2021-04-13 01:06:56', '2021-05-13 19:00:15', 'The new mother of pearl bracelet has a whole lot of heart. A single heart lays on its side, surrounded by three white diamonds on each side, laying on a single gold chain that drapes delicately on the wrist.', 'jewelry/bracelet2_thumb.png', 'jewelry/bracelet2_thumb.png,jewelry/bracelet2_wear.jpeg', '30'),
(3, 'Diamond Bezel Tennis Bracelet', '14k white gold and white diamond', 'length and diamond availavle in 6.5in/16.5cm - 2.57cts, 7.0in/17.8cm - 2.77cts, 7.5in/19.1cm - 2.97cts', 720.00, 'Bracelet', '2021-04-13 01:10:28', '2021-04-13 01:10:28', 'This beauty features 1mm bezel set diamonds that run the length of the dazzling design.', 'jewelry/bracelet3_thumb.png', 'jewelry/bracelet3_thumb.png,jewelry/bracelet3_wear.jpeg', '26'),
(4, 'Diamond Star Earring', '14k yellow gold and white diamond', 'Diameter is approximately 10.5mm, and average carat weight is 0.08cts', 300.00, 'Earring', '2021-04-13 01:15:16', '2021-04-13 01:15:16', 'The sweetest classic pavé huggie that hugs tight to the ear is updated with an equally bright pavé star charm that hangs delicately below.', 'jewelry/earings1_thumb.png', 'jewelry/earings1_thumb.png,jewelry/earings1_wear.png', '38'),
(5, 'White Topaz Solitaire Earring', '14k yellow gold and white diamond', 'Diameter is approximately 11mm, and average carat weight is 0.043cts', 265.00, 'Earring', '2021-04-13 01:18:55', '2021-04-13 01:18:55', 'This earring uses white topaz with a drop of three diamond bezels that hangs effortlessly from the base of the medium-sized seamless hoop to create a simple fashion style.', 'jewelry/earings2_thumb.png', 'jewelry/earings2_thumb.png,jewelry/earings2_wear.jpeg', '40'),
(6, 'J Hook Earring', '14k yellow gold and white diamond', 'Length is approximately 0.8in/2.0cm, and average carat weight is 0.12cts', 330.00, 'Earring', '2021-04-13 01:21:21', '2021-04-13 01:21:21', 'The earring presents a special shape of \"J\" with a single row of white diamonds that curves back ever so slightly at the bottom of the lobe to reveal another glittering single cluster of diamonds that climb the ear from behind. ', 'jewelry/earings3_thumb.png', 'jewelry/earings3_thumb.png,jewelry/earings3_wear.jpeg', '32'),
(7, 'Diamond Honey Comb Necklace', '14k yellow gold and white diamond', 'Length is approximately 16in, and six 1.3mm white diamonds', 700.00, 'Necklace', '2021-04-13 01:25:00', '2021-04-13 01:25:00', 'Inspired by the natural honeycomb, the necklace shows an organic handmade style with negative space that appropriately combined melee into the design. ', 'jewelry/necklace1_thumb.png', 'jewelry/necklace1_thumb.png,jewelry/necklace1_wear.png', '16'),
(8, 'The Sun\'s Claw Necklace', '14k yellow gold and white diamond', 'Nine white diamonds, sized between 1.5mm to 1mm', 750.00, 'Necklace', '2021-04-13 01:28:29', '2021-04-13 01:28:29', 'Add a glimmer to this 14k yellow gold pendant with nine dainty white diamonds to stand out the radiant claw of the sun. Mill grain is applied around settings.', 'jewelry/necklace2_thumb.png', 'jewelry/necklace2_thumb.png,jewelry/necklace2_wear.png', '25'),
(9, 'Textured Disc Necklace', '14k yellow gold and white diamond', '1.9mm white diamond, and 16in chain', 460.00, 'Necklace', '2021-04-13 01:31:33', '2021-04-13 01:31:33', 'The pendant is created with textures and a gypsy setting by hand, conveying simplicity and organic style. ', 'jewelry/necklace3_thumb.png', 'jewelry/necklace3_thumb.png,jewelry/necklace3_wear.png', '28'),
(10, 'Orbit Band Ring', '14k gray gold and baguette white diamond', 'Band measures 2.1mm wide by 2.3mm thick at the widest part of the dome and seven baguette white diamonds.', 1500.00, 'Ring', '2021-04-13 01:34:24', '2021-04-13 01:34:24', 'The elegant combination of the 14k gray gold and baguette white diamonds makes a classic and harmonious balance for the orbit band. ', 'jewelry/ring1_thumb.png', 'jewelry/ring1_thumb.png,jewelry/ring1_wear.png', '8'),
(11, 'Umi Ring', '18k yellow gold and Mexican pearl', '9mm pink-hued Mexican pearl and two rose-cut color diamonds.', 980.00, 'Ring', '2021-04-13 01:37:41', '2021-04-13 01:37:41', 'The pink-hued Mexican pearl shows an amazing iridescent from the flair of the ocean. The unsymmetrical lined textures and the two rose-cut diamonds on the sides are all made by pure hands, which gives a mild and smooth feeling to the ring.', 'jewelry/ring2_thumb.png', 'jewelry/ring2_thumb.png,jewelry/ring2_wear.png', '10'),
(12, 'Diamond Halo Ring', '14k white gold and white diamond', 'Band measures 1.90mm by 1.40mm, center stone includes Rose Cut diamond, 0.53ct, and side stones include 4 Melee White Diamonds, 1.3mm', 1349.94, 'Ring', '2021-04-13 01:39:44', '2021-05-16 15:13:51', 'The middle prong setting and the side bezel setting match each other to stand out the center rose cut diamond. The halo design effectively enhances the visual effect for the stone size. ', 'jewelry/ring3_thumb.png', 'jewelry/ring3_thumb.png,jewelry/ring3_wear.png', '15'),
(18, 'Diamond Bracelet', NULL, NULL, 950.00, 'Bracelet', '2021-05-15 02:24:52', '2021-05-15 02:24:52', 'This beauty features bezel set diamonds that run the length of the dazzling design.', 'jewelry/bracelet3_thumb.png', 'jewelry/bracelet3_thumb.png,jewelry/bracelet3_wear.jpeg', '25');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
