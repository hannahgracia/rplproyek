-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 06:58 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyekdbrpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `scrambled`
--

CREATE TABLE `scrambled` (
  `id` int(11) NOT NULL,
  `word` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scrambled`
--

INSERT INTO `scrambled` (`id`, `word`) VALUES
(1, 'pac'),
(2, 'catalbpiiy'),
(3, 'caeblap'),
(4, 'cadntedia'),
(5, 'a'),
(6, 'bnadona'),
(7, 'biayitl'),
(8, 'aelb'),
(9, 'iabornot'),
(10, 'abtou'),
(11, 'beoav'),
(12, 'aadrbo'),
(13, 'aeencbs'),
(14, 'ultbesao'),
(15, 'bluysaltoe'),
(16, 'bsarob'),
(17, 'aeubs'),
(18, 'iaedcamc'),
(19, 'tcecap'),
(20, 'cscase'),
(21, 'cictnead'),
(22, 'ycaaconmp'),
(23, 'pomclhaics'),
(24, 'nadrcicog'),
(25, 'byba'),
(26, 'bcak'),
(27, 'bcandrkuog'),
(28, 'abd'),
(29, 'badyl'),
(30, 'gab'),
(31, 'ekab'),
(32, 'alcbean'),
(33, 'llab'),
(34, 'nab'),
(35, 'nabd'),
(36, 'knab'),
(37, 'rab'),
(38, 'lerbya'),
(39, 'rlreba'),
(40, 'brriear'),
(41, 'esab'),
(42, 'ablalsbe'),
(43, 'csabi'),
(44, 'iabyslcal'),
(45, 'ibcna'),
(46, 'atbneic'),
(47, 'balce'),
(48, 'ekac'),
(49, 'cacltelua'),
(50, 'clal'),
(51, 'rcaeam'),
(52, 'macp'),
(53, 'iaganmcp'),
(54, 'upmcsa'),
(55, 'can'),
(56, 'anaCadni'),
(57, 'accern');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scrambled`
--
ALTER TABLE `scrambled`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scrambled`
--
ALTER TABLE `scrambled`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
