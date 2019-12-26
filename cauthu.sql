-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 02:25 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qlct`
--

-- --------------------------------------------------------

--
-- Table structure for table `cauthu`
--

CREATE TABLE IF NOT EXISTS `cauthu` (
`mact` int(11) NOT NULL,
  `tenct` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `namsinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `quequan` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `clb` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cauthu`
--

INSERT INTO `cauthu` (`mact`, `tenct`, `namsinh`, `quequan`, `clb`) VALUES
(1, 'tien anh', '1999', 'thanh hoa', 'ha noi'),
(2, 'tien anh + cuong', '1999', 'erghjklas;dajdisa', 'asrdfytsadhua'),
(3, 'sadrasydshadhusa', '2000', 'uahsuhdasudsaiduas', 'dasidisa'),
(4, 'son', '2000', 'asdasdsa', 'asdsadasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cauthu`
--
ALTER TABLE `cauthu`
 ADD PRIMARY KEY (`mact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cauthu`
--
ALTER TABLE `cauthu`
MODIFY `mact` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
