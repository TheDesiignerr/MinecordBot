-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 11:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql8739498`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `mine_author` varchar(255) NOT NULL,
  `mine_name` varchar(255) NOT NULL,
  `mine_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `mine_author`, `mine_name`, `mine_amount`) VALUES
(2, 'desiignerr', 'Poppy', 32),
(3, 'desiignerr', 'Apple', 24),
(4, 'desiignerr', 'Furnace', 31),
(5, 'desiignerr', 'Cobblestone', 69),
(6, 'desiignerr', 'Coal', 47),
(7, 'desiignerr', 'Sweet berries', 35),
(8, 'desiignerr', 'Fishing rod', 32),
(9, 'desiignerr', 'Iron', 97),
(11, 'desiignerr', 'Iron ingot', 15),
(12, 'desiignerr', 'Cod', 10),
(13, 'desiignerr', 'Salmon', 9),
(14, 'desiignerr', 'Pufferfish', 23),
(15, 'desiignerr', 'Cake', 20),
(16, 'desiignerr', 'Gold', 27),
(17, 'desiignerr', 'Diamond', 10),
(18, 'hgk0', 'Coal', 6),
(19, 'hgk0', 'Dirt', 9),
(20, 'hgk0', 'Iron', 4),
(21, 'hgk0', 'Furnace', 1),
(22, 'hgk0', 'Iron ingot', 1),
(23, 'hgk0', 'Cod', 1),
(24, 'hgk0', 'Pufferfish', 8),
(25, 'jay_boutabag', 'Dirt', 52),
(26, 'hgk0', 'Fishing rod', 2),
(27, 'jay_boutabag', 'Fishing rod', 5),
(28, 'jay_boutabag', 'Furnace', 3),
(29, 'jay_boutabag', 'Iron', 8),
(30, 'jay_boutabag', 'Iron ingot', 2),
(31, 'jay_boutabag', 'Apple', 1),
(32, 'jay_boutabag', 'Cod', 16),
(33, 'jay_boutabag', 'Coal', 11),
(34, 'jay_boutabag', 'Daisy', 2),
(35, 'jay_boutabag', 'Sweet berries', 2),
(36, 'jay_boutabag', 'Cobblestone', 3),
(37, 'jay_boutabag', 'Salmon', 9),
(38, 'jay_boutabag', 'Pufferfish', 6),
(39, 'jay_boutabag', 'Poppy', 1),
(40, 'jay_boutabag', 'Cake', 0),
(41, 'hgk0', 'Cake', 1),
(42, 'basilisk3049', 'Coal', 3),
(43, 'basilisk3049', 'Sweet berries', 4),
(44, 'basilisk3049', 'Fishing rod', 5),
(45, 'basilisk3049', 'Poppy', 12),
(46, 'basilisk3049', 'Daisy', 16),
(47, 'desiignerr', 'Cooked cod', 50),
(48, 'desiignerr', 'Cooked salmon', 37),
(49, 'basilisk3049', 'Cooked cod', 1),
(50, 'basilisk3049', 'Cooked salmon', 0),
(51, 'ga3mer', 'Dirt', 1),
(52, 'ga3mer', 'Cake', 0),
(53, 'elihavenly', 'Dirt', 3),
(54, 'elihavenly', 'Fishing rod', 1),
(55, 'elihavenly', 'Cod', 0),
(56, 'elihavenly', 'Coal', 0),
(57, 'elihavenly', 'Furnace', 1),
(58, 'elihavenly', 'Cooked cod', 0),
(59, 'basilisk3049', 'Cod', 38),
(60, 'basilisk3049', 'Dirt', 14),
(61, 'basilisk3049', 'Iron', 4),
(62, 'thedanie', 'Dirt', 2),
(63, 'thedanie', 'Fishing rod', 1),
(64, 'thedanie', 'Salmon', 0),
(65, 'thedanie', 'Furnace', 1),
(66, 'thedanie', 'Coal', 0),
(67, 'thedanie', 'Cooked salmon', 0),
(68, 'thedanie', 'Cake', 0),
(69, 'niguita', 'Dirt', 8),
(70, 'niguita', 'Coal', 3),
(71, 'niguita', 'Iron', 3),
(72, 'niguita', 'Fishing rod', 1),
(73, 'niguita', 'Cobblestone', 3),
(74, 'niguita', 'Poppy', 1),
(75, 'niguita', 'Salmon', 1),
(76, 'niguita', 'Pufferfish', 0),
(77, 'desiignerr', 'Gold ingot', 4),
(78, 'desiignerr', 'Egg', 7),
(79, 'desiignerr', 'Snowball', 12),
(80, 'basilisk3049', 'Gold', 4),
(81, 'basilisk3049', 'Cobblestone', 4),
(82, 'basilisk3049', 'Snowball', 3),
(83, 'basilisk3049', 'Apple', 4),
(84, 'basilisk3049', 'Cake', 5),
(85, 'basilisk3049', 'Egg', 12),
(86, 'basilisk3049', 'Diamond', 2),
(87, 'starzzmeoww', 'Snowball', 3),
(89, 'starzzmeoww', 'Pufferfish', 5),
(90, 'starzzmeoww', 'Sweet berries', 2),
(91, 'starzzmeoww', 'Fishing rod', 2),
(92, 'starzzmeoww', 'Salmon', 4),
(93, 'starzzmeoww', 'Cake', 1),
(94, 'starzzmeoww', 'Furnace', 1),
(95, 'starzzmeoww', 'Egg', 0),
(97, 'zyrusthegronkler', 'Salmon', 1),
(98, 'starzzmeoww', 'Iron', 3),
(99, 'zyrusthegronkler', 'Gold', 2),
(100, 'starzzmeoww', 'Gold', 1),
(101, 'zyrusthegronkler', 'Iron', 1),
(102, 'zyrusthegronkler', 'Dirt', 2),
(103, 'zyrusthegronkler', 'Fishing rod', 1),
(104, 'zyrusthegronkler', 'Cod', 1),
(105, 'zyrusthegronkler', 'Diamond', 2),
(106, 'starzzmeoww', 'Poppy', 1),
(107, 'starzzmeoww', 'Daisy', 1),
(108, 'starzzmeoww', 'Cod', 3),
(109, 'starzzmeoww', 'Dirt', 1),
(110, 'starzzmeoww', 'Diamond', 1),
(111, 'kya6556', 'Dirt', 3),
(112, 'kya6556', 'Gold', 6),
(113, 'kya6556', 'Cake', 3),
(114, 'kya6556', 'Coal', 3),
(115, 'kya6556', 'Poppy', 1),
(116, 'kya6556', 'Apple', 2),
(117, 'kya6556', 'Daisy', 1),
(118, 'kya6556', 'Egg', 1),
(119, 'kya6556', 'Fishing rod', 1),
(120, 'yvhia', 'Poppy', 2),
(121, 'yvhia', 'Cake', 1),
(122, 'yvhia', 'Snowball', 1),
(123, 'krayziast', 'Salmon', 1),
(124, 'krayziast', 'Snowball', 2),
(125, 'krayziast', 'Dirt', 2),
(126, 'krayziast', 'Fishing rod', 2),
(127, 'krayziast', 'Gold', 2),
(128, 'krayziast', 'Poppy', 2),
(129, 'krayziast', 'Cod', 2),
(130, 'krayziast', 'Pufferfish', 2),
(131, 'skibidiohiogang.', 'Dirt', 1),
(132, 'krayziast', 'Daisy', 1),
(133, 'krayziast', 'Sweet berries', 1),
(134, 'desiignerr', 'Ender pearl', 1),
(135, 'desiignerr', 'Water bucket', 5),
(136, 'basilisk3049', 'Furnace', 1),
(142, 'desiignerr', 'Daisy', 4),
(189, 'desiignerr', 'Planks', 8),
(203, 'desiignerr', 'Stick', 5),
(208, 'desiignerr', 'String', 3),
(209, 'vividlabs', 'Egg', 2),
(210, 'vividlabs', 'Poppy', 2),
(211, 'vividlabs', 'Stick', 2),
(213, 'zyrusthegronkler', 'Cobblestone', 2),
(214, 'zyrusthegronkler', 'Sweet berries', 2),
(215, 'zyrusthegronkler', 'Planks', 4),
(216, 'zyrusthegronkler', 'Cake', 2),
(217, 'zyrusthegronkler', 'String', 1),
(218, 'zyrusthegronkler', 'Snowball', 2),
(219, 'zyrusthegronkler', 'Poppy', 2),
(220, 'zyrusthegronkler', 'Egg', 2),
(221, 'zyrusthegronkler', 'Coal', 1),
(222, 'zyrusthegronkler', 'Water bucket', 1),
(223, 'ixz', 'Dirt', 1),
(224, 'ixz', 'Water bucket', 1),
(225, 'ixz', 'Planks', 1),
(226, 'hgk0', 'Gold', 3),
(227, 'hgk0', 'Planks', 2),
(228, 'hgk0', 'Poppy', 3),
(229, 'hgk0', 'Apple', 4),
(230, 'hgk0', 'Snowball', 2),
(231, 'hgk0', 'Diamond', 2),
(232, 'hgk0', 'Cobblestone', 4),
(233, 'hgk0', 'Stick', 3),
(234, 'hgk0', 'Daisy', 2),
(235, 'hgk0', 'Sweet berries', 2),
(236, 'hgk0', 'Egg', 1),
(237, 'hgk0', 'Gold ingot', 1),
(238, 'vividlabs', 'Cobblestone', 2),
(239, 'vividlabs', 'Planks', 1),
(240, 'vividlabs', 'Snowball', 1),
(241, 'vividlabs', 'Water bucket', 1),
(242, 'vividlabs', 'Iron', 1),
(243, 'vividlabs', 'Apple', 1),
(244, 'elihavenly', 'Snowball', 1),
(245, 'desiignerr', 'Crafting table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`) VALUES
(1, 'desiignerr'),
(2, 'hgk0'),
(3, 'basilisk3049'),
(4, 'jay_boutabag'),
(5, 'niguita'),
(6, 'elihavenly'),
(7, 'starzzmeoww'),
(8, 'zyrusthegronkler'),
(9, 'kya6556'),
(10, 'yvhia'),
(11, 'krayziast'),
(12, 'skibidiohiogang.'),
(13, 'vividlabs'),
(14, 'ixz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
