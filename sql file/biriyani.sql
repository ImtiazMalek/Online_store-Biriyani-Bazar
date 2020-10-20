-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 07:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biriyani`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(18, 'mutton kacchi', 220),
(19, 'beef kacchi', 220);

-- --------------------------------------------------------

--
-- Table structure for table `selling_data`
--

CREATE TABLE `selling_data` (
  `item_id` int(11) NOT NULL,
  `number_of_plates` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selling_data`
--

INSERT INTO `selling_data` (`item_id`, `number_of_plates`, `total_price`, `date_time`) VALUES
(18, 1, 220, '2020-10-20'),
(18, 1, 220, '2020-10-20'),
(19, 2, 400, '2020-10-21'),
(19, 1, 220, '2020-10-20'),
(18, 1, 220, '2020-10-16'),
(18, 2, 440, '2020-10-20'),
(18, 2, 440, '2020-10-20'),
(18, 2, 440, '2020-10-20'),
(18, 2, 440, '2020-10-20'),
(18, 2, 440, '2020-10-20'),
(18, 2, 440, '2020-10-20'),
(18, 2, 440, '2020-10-20'),
(18, 2, 440, '2020-10-20'),
(18, 1, 220, '2020-10-22'),
(18, 3, 660, '2020-10-20'),
(19, 2, 440, '2020-10-20'),
(18, 1, 220, '2020-10-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
