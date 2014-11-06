-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2014 at 04:10 
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbcombo`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE IF NOT EXISTS `jenis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_obyek` int(11) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `id_obyek`, `nama_jenis`) VALUES
(1, 1, 'Burung'),
(2, 1, 'Kucing'),
(3, 1, 'Harimau'),
(4, 2, 'Mangga'),
(5, 2, 'Apel'),
(6, 2, 'Pisang');

-- --------------------------------------------------------

--
-- Table structure for table `obyek`
--

CREATE TABLE IF NOT EXISTS `obyek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_obyek` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `obyek`
--

INSERT INTO `obyek` (`id`, `nama_obyek`) VALUES
(1, 'Hewan'),
(2, 'Buah');

-- --------------------------------------------------------

--
-- Table structure for table `varian`
--

CREATE TABLE IF NOT EXISTS `varian` (
  `id_jenis` int(11) NOT NULL,
  `nama_varian` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `varian`
--

INSERT INTO `varian` (`id_jenis`, `nama_varian`) VALUES
(1, 'Elang'),
(2, 'Angora\r\n'),
(3, 'Sumatra'),
(4, 'Manalagi'),
(5, 'Malang'),
(6, 'Ambon');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
