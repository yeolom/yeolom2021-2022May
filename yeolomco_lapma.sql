-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2022 at 05:24 PM
-- Server version: 5.7.38
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yeolomco_lapma`
--

-- --------------------------------------------------------

--
-- Table structure for table `titleimg`
--

CREATE TABLE `titleimg` (
  `fileName` varchar(100) NOT NULL,
  `titleId` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titleimg`
--

INSERT INTO `titleimg` (`fileName`, `titleId`, `date`) VALUES
('dn(1).png', 1, '2022-02-07'),
('dn(3).png', 1, '2022-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `titleId` int(11) NOT NULL,
  `titleName` varchar(50) NOT NULL,
  `shortDisc` varchar(100) NOT NULL,
  `longDisc` varchar(5000) NOT NULL,
  `img` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`titleId`, `titleName`, `shortDisc`, `longDisc`, `img`, `date`) VALUES
(1, 'Detective Nari', 'A recruit detective aims to better country for baby brother. Solve riddles, and figure out culprits.', '\"I am from a <span class=\"text-primary\">third world</span> country..and um, I moved <span class=\"text-primary\">abroad for schooling</span>.<br/>\r\nThe country wasn\'t great when I left, but...<br/>\r\nWhile I was away it got <span class=\"text-primary\">worse</span>.<br/>\r\nIt got so bad people <span class=\"text-primary\">protested</span>, and government reaction?...<br/>\r\n<span class=\"text-danger\">massacre</span>.<br/>\r\nIn a country like that, <span class=\"text-danger\">no one\'s safe</span>...and um.<br/>\r\nThat\'s where my loved ones are <span class=\"text-primary\">living</span>.<br/>\r\nIn particular my <span class=\"text-primary\">baby brother</span>.<br/>\r\nI tried bringing them here, but wasn\'t <span class=\"text-primary\">successful</span>.<br/>\r\nOnly option now, is to <span class=\"text-primary\">better</span> the country...and I <span class=\"text-primary\">plan</span> to do just that.<br/>\r\nI Would do that as a <span class=\"text-primary\">detective</span> of the <span class=\"text-primary\">best privately</span> owned agency...<br/>\r\n<span class=\"text-primary\">The O.N.E Agency.</span><br/>\r\nLet\'s see what I can do.\"', 'dn.png', '2022-02-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`titleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `titleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
