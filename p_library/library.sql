-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 02:32 PM
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
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `namebook` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `namebook`, `author`, `publisher`, `picture`) VALUES
(1, 'programing', 'ghomi', 'gostareshrayaneh', '101.jpg'),
(2, 'database', 'ghomi', 'gostareshrayaneh', '102.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `mobile`, `address`, `password`) VALUES
(1, 'nima', 'karimi', 'nima@yahoo.com', '9111325555', 'rasht', '12345'),
(9, 'mehran', 'safari', 'mehran@yahoo.com', '1234567899', 'rasht', '1347'),
(10, 'payman', 'eslami', 'payman@yahoo.com', '1234567888', 'rasht', '1349'),
(11, 'سارا', 'یوسفی', 'sara@yahoocom', '1234123412', 'رشت', '1346'),
(12, 'افشین', 'مرادی', 'afshin@yahoo.com', '1234567891', 'رشت', '1345'),
(13, 'hamid', 'hamidi', 'ha@yahoo.com', '0123456789', 'rasht', 'fb508ef074ee'),
(14, 'mahmod', 'mahmodi', 'mahmod@yahoo.com', '1234567888', 'rasht', 'cf1f78fe923a'),
(15, 'saman', 'samani', 'saman@yahoo.com', '1234567899', 'rasht', '6a5889bb0190d0211a99'),
(17, 'samira', 'shadi', 'samira@yahoo.com', '1234567891', 'rasht', '13471347'),
(18, 'علیرضا', 'شریفی زاده', 'alireza@yahoo.com', '1212121212', 'رشت', '1344');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
