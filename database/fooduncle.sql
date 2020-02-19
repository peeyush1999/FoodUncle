-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 03:31 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooduncle`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `username` varchar(50) NOT NULL,
  `dishname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`username`, `dishname`, `price`) VALUES
('asdf', 'ROTI', 25),
('qwerty', 'chole bhature', 55),
('qwerty', 'Curd', 20),
('qwerty', 'Dahi', 23);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobileno` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` int(11) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `numrating` int(11) NOT NULL DEFAULT '0',
  `avgrating` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`username`, `name`, `password`, `mobileno`, `address`, `email`, `city`, `state`, `timing`, `rating`, `numrating`, `avgrating`) VALUES
('asdf', 'asdf', '3fc0a7acf087f549ac2b266baf94b8b1', 2147483647, 'sahupeeyush1999@gmail.com', 'Sahu Niwas, Upper Road, Haridwar', 'Haridwar', 35, '9:00 AM - 10:00 PM', 0, 0, 0),
('qwerty', 'qwerty', '3fc0a7acf087f549ac2b266baf94b8b1', 2147483647, 'Sahu Niwas, Upper Road, Haridwar', 'tarpitsahu@gmail.com', 'Haridwar', 35, '9:00 AM -10:00 PM', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE IF NOT EXISTS `userdata` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `aadharno` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`username`, `name`, `password`, `mobileno`, `aadharno`, `email`, `address`, `city`, `state`) VALUES
('aksjdhd1213@', 'zczcc xzcz#', '3fc0a7acf087f549ac2b266baf94b8b1', 7417233836, 123456789123, 'sahu.gayatri123@gmail.com', 'sacas', 'sacsca', 18),
('asd', 'asd', '3fc0a7acf087f549ac2b266baf94b8b1', 7417233836, 123456789123, 'sahu@sahu.com', 'sfdfd', 'haridwar', 35),
('ash', 'anita sahu', '5f27592c4fc6953781fc9e47ed9a9bf8', 8445649232, 123123123123, 'anitasahu@gmail.com', 'Sahu Niwas, Upper Road, Haridwar', 'Haridwar', 35),
('awasf', 'sas asda', '3fc0a7acf087f549ac2b266baf94b8b1', 7417233836, 123456789123, 'sahu.gayatri123@gmail.com', 'dfsfaf', 'ssa', 14),
('pari', 'Himadri sahu', 'ed69ff2a1cc4cec40684b3627eeda3f5', 9897508608, 999999999999, 'pari@sahu.com', 'sahu niwas', 'Pokemon Nagar', 32),
('peeyusgh', 'poeeyush', '4a2bd1f09a89409c5df8716d75fe1a54', 9897208308, 120012001200, 'p@gmail.com', 'asd', 'Haridwar', 35),
('peeyush', 'sahu', 'd4395a5856617fa4afe8c5cd2eed3912', 7417233836, 123456789123, 'sahu.gayatri123@gmail.com', 'Sahu Niwas, Upper Road', 'Haridwar', 35),
('raviprakash', 'Ravi Prakash', 'e58cc3fe4b3387c893c8fc9dd43a829a', 9999988888, 147896321478, 'ravipk@gmail.com', 'Near Sabzi Mandi, Jwalapur', 'Roorkee', 35),
('sahu', 'sahu', '3fc0a7acf087f549ac2b266baf94b8b1', 7417233836, 123456789123, 'sahu@gmail.com', 'kshcgkasjg', 'haridwar', 17),
('tarpitsahu', '"); or 1=1;', '4a2bd1f09a89409c5df8716d75fe1a54', 2147483647, 2147483647, 't@g.com', 'aasd', 'asd', 35),
('tarpitsahuji', '"); or 1=1;', '4a2bd1f09a89409c5df8716d75fe1a54', 2147483647, 2147483647, 't@g.com', 'aasd', 'asd', 35),
('tarpitsahuji1', '"); or 1=1;', '4a2bd1f09a89409c5df8716d75fe1a54', 2147483647, 2147483647, 't@g.com', 'aasd', 'asd', 35),
('user', 'user', 'b5b73fae0d87d8b4e2573105f8fbe7bc', 7417233836, 123412341234, 'user@user.com', 'Sahu Niwas, Upper Road, Haridwar', 'Haridwar', 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
