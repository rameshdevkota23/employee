-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 07:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_tble`
--

CREATE TABLE `emp_tble` (
  `id` int(11) NOT NULL,
  `nam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ph_name` varchar(255) NOT NULL,
  `addres` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_tble`
--

INSERT INTO `emp_tble` (`id`, `nam`, `email`, `ph_name`, `addres`) VALUES
(27, 'Anish', 'jdhhd@gmail.com', '9866800234', 'pokhara panga'),
(28, 'Nabaraj hshhs', 'jdhhd@gmail.com', '9866800234', 'Banphikot - 5, Banphikanda'),
(58, 'sport', 'jdhhd@gmail.com', '344444444', 'lokanthali'),
(87, 'ghytg', 'jdhhd@gmail.com', '99', 'Banphikot - 5, Banphikanda'),
(109, 'Ramesh', 'jdhhd@gmail.com', '776665', 'Banphikot - 5, Banphikanda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_tble`
--
ALTER TABLE `emp_tble`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_tble`
--
ALTER TABLE `emp_tble`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
