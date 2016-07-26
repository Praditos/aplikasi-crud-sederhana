-- phpMyAdmin SQL Dump
-- version 4.0.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2016 at 08:24 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zadmin_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warga`
--

CREATE TABLE IF NOT EXISTS `tbl_warga` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `status` enum('Menikah','Belum Menikah') NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `umur` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_warga`
--

INSERT INTO `tbl_warga` (`id`, `nama`, `status`, `pekerjaan`, `umur`) VALUES
(1, 'Ahmad Sanusi', 'Menikah', 'UX Designer', 28),
(2, 'Ater', 'Belum Menikah', 'Welding', 21),
(3, 'Reza Shintia Dewi', 'Menikah', 'Craft Designer', 21);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
