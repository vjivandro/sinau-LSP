-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2017 at 05:22 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sinau`
--

CREATE TABLE `tbl_sinau` (
  `id` int(12) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `umur` varchar(200) NOT NULL,
  `jk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sinau`
--

INSERT INTO `tbl_sinau` (`id`, `nama`, `umur`, `jk`) VALUES
(1, 'sapi', '20', 'lanang'),
(2, 'wedus', '11', 'lanang'),
(3, 'aA', 'a', 'a'),
(4, 'saa', '33', 'vsds'),
(5, 'tahu', 'idi', 'usu'),
(6, 'tahu', 'idi', 'usu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_sinau`
--
ALTER TABLE `tbl_sinau`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_sinau`
--
ALTER TABLE `tbl_sinau`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
