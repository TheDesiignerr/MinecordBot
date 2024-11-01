-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: sql8.freemysqlhosting.net
-- Generation Time: Oct 23, 2024 at 10:14 PM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql8739498`
--
CREATE DATABASE IF NOT EXISTS `sql8739498` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sql8739498`;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `mine_author` varchar(255) NOT NULL,
  `mine_name` varchar(255) NOT NULL,
  `mine_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `mine_author`, `mine_name`, `mine_amount`) VALUES
(1, 'desiignerr', 'Dirt', 511),
(2, 'desiignerr', 'Poppy', 26),
(3, 'desiignerr', 'Apple', 19),
(4, 'desiignerr', 'Furnace', 31),
(5, 'desiignerr', 'Cobblestone', 65),
(6, 'desiignerr', 'Coal', 44),
(7, 'desiignerr', 'Sweet berries', 31),
(8, 'desiignerr', 'Fishing rod', 31),
(9, 'desiignerr', 'Iron', 95),
(10, 'desiignerr', 'Daisy', 2),
(11, 'desiignerr', 'Iron ingot', 13),
(12, 'desiignerr', 'Cod', 10),
(13, 'desiignerr', 'Salmon', 9),
(14, 'desiignerr', 'Pufferfish', 22),
(15, 'desiignerr', 'Cake', 16),
(16, 'desiignerr', 'Gold', 25),
(17, 'desiignerr', 'Diamond', 9),
(18, 'hgk0', 'Coal', 1),
(19, 'hgk0', 'Dirt', 8),
(20, 'hgk0', 'Iron', 0),
(21, 'hgk0', 'Furnace', 1),
(22, 'hgk0', 'Iron ingot', 1),
(23, 'hgk0', 'Cod', 1),
(24, 'hgk0', 'Pufferfish', 998),
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
(78, 'desiignerr', 'Egg', 5),
(79, 'desiignerr', 'Snowball', 10),
(80, 'basilisk3049', 'Gold', 4),
(81, 'basilisk3049', 'Cobblestone', 4),
(82, 'basilisk3049', 'Snowball', 3),
(83, 'basilisk3049', 'Apple', 4),
(84, 'basilisk3049', 'Cake', 5),
(85, 'basilisk3049', 'egg', 12),
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
(99, 'zyrusthegronkler', 'Gold', 1),
(100, 'starzzmeoww', 'Gold', 1),
(101, 'zyrusthegronkler', 'Iron', 1),
(102, 'zyrusthegronkler', 'Dirt', 2),
(103, 'zyrusthegronkler', 'Fishing rod', 1),
(104, 'zyrusthegronkler', 'Cod', 1),
(105, 'zyrusthegronkler', 'Diamond', 1),
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
(135, 'desiignerr', 'Water bucket', 1),
(136, 'basilisk3049', 'Furnace', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(12, 'skibidiohiogang.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
