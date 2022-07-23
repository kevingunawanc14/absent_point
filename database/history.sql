-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 07:52 AM
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
-- Database: `absent_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `rating` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `tanggal`, `waktu`, `rating`, `id_user`) VALUES
(1, '2022-07-17', '11:17:11', 0, 1),
(2, '2022-07-17', '11:17:11', 0, 1),
(3, '2022-07-17', '14:34:47', 0, 1),
(4, '2022-07-17', '14:34:47', 0, 1),
(5, '2022-07-17', '14:46:39', 12, 1),
(6, '2022-07-17', '14:51:38', 13, 1),
(7, '2022-07-17', '14:57:13', 12, 1),
(8, '2022-07-18', '14:17:23', 13, 1),
(9, '2022-07-18', '14:18:13', 13, 1),
(10, '2022-07-18', '14:18:55', 13, 1),
(11, '2022-07-18', '14:18:55', 13, 1),
(12, '2022-07-18', '14:19:04', 13, 1),
(13, '2022-07-18', '14:19:11', 13, 1),
(14, '2022-07-18', '14:19:12', 13, 1),
(15, '2022-07-18', '14:19:31', 13, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
