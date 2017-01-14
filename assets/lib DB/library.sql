-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 08:04 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `id`, `password`) VALUES
('Abhijit', '131307', 'abhi'),
('Pranshu', '131318', 'devil'),
('hima', '131317', 'hima'),
('akhil', '131313', 'akhil'),
('ak', '131324', 'akhil');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `title` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `publication` varchar(20) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `copies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`title`, `author`, `publication`, `genre`, `id`, `cost`, `copies`) VALUES
('', '', '', '', '', '', 0),
('jjcdrcgfbhn', 'esxfgv', 'dcfgvh', 'esdrtfu', 'xdcfgvbh', '396', 212165),
('jjcdrcgfbhn', 'esxfgv', 'dcfgvh', 'esdrtfu', 'xdcfgvbh', '396', 212165),
('jjcdrcgfbhn', 'esxfgv', 'dcfgvh', 'esdrtfu', 'xdcfgvbh', '396', 212165),
('jjcdrcgfbhn', 'esxfgv', 'dcfgvh', 'esdrtfu', 'xdcfgvbh', '396', 212165),
('abcdef', 'ppppppp', 'hnnnnnn', '1236', 'abcdefghijk', '456', 23),
('abcdef', 'ppppppp', 'hnnnnnn', '1236', 'abcdefghijk', '456', 23);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` varchar(20) NOT NULL,
  `feed` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feed`) VALUES
('131307', 'papa'),
('123', 'jjghgjgjhgj'),
('131308', 'agchscbccbd'),
('131308', 'agchscbccbd'),
('', 'rr');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `id` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `password` varchar(50) NOT NULL,
  `father` varchar(20) NOT NULL,
  `book1` varchar(20) NOT NULL,
  `book2` varchar(20) NOT NULL,
  `book3` varchar(20) NOT NULL,
  `balance` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `id`, `email`, `gender`, `password`, `father`, `book1`, `book2`, `book3`, `balance`) VALUES
('deep', '', '', '0', '', '', '', '', '', ''),
('Adhishri', '131290', 'adhi@gmail.com', 'F', 'bekaar', 'Jaat', '', '', '', '200'),
('deep', '131299', 'deepshreekanchan0@gm', 'm', 'deep', 'akshay', '', '', '', ''),
('mehul', '131300', 'msingh@gmail.com', 'm', 'mehul', '', '', '', '', '25'),
('abhijit', '131307', 'abhuijit12@gmail.com', 'm', 'abhijit', 'akshay', 'xdcfgvbh', '', '', '50'),
('navneet', '131306', 'nav21@gmail.com', 'm', 'nav', 'abhi', '', '', '', '50'),
('pranshu', '131318', 'pranshu21@gmail.com', 'm', 'pranshu', 'akshay', '', '', '', '0'),
('rishabh', '131228', 'rjdaking@gmail.com', 'm', 'rjda', 'deep', '', '', '', '25'),
('d', '', '', '', '', '', '', '', '', ''),
('deep', '1312991', 's@g', 'm', 'deep', 'hh', '', '', '', ''),
('Prakshal', '1313081', 'f@g.c', 'm', 'uuutitgl', 'jaat', '', '', '', ''),
('meddddddd', '884841', 'a@g.c', 'f', 'fkmfl', '9888888888', '', '', '', ''),
('hhh', '2221', 'm@g.c', 'm', 'fjhkf', '23233232232', '', '', '', ''),
('hima', '1313151', 'm@g.c', 'f', 'qwerty', '8878787787878', 'xdcfgvbh', '', '', ''),
('shruti', '1313021', 'm@g.c', 'f', 'qwerty', '4627289000', 'vhkkkk', '', '', ''),
('prakshal', '131308', 'prakshal@gmail.com', 'm', 'abc', '9816927579', '', '', '', ''),
('akh', '1313322', 'sharmaakhil51@gmail.', 'm', '545d26918d43a640c4bed801fa7c86a4', '9816927579', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
