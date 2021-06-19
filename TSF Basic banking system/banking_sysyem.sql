-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 09:50 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking sysyem`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(255) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(255) NOT NULL,
  `Datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `Datetime`) VALUES
(1, 'Raj Malhotra', 'Naira', 1000, '2021-06-18 11:35:34'),
(2, 'Rohit Mehra', 'Naira', 1000, '2021-06-19 10:59:41'),
(3, 'Naira', 'Vijay D', 100, '2021-06-19 11:00:26'),
(4, 'Varsha Maheshwari', 'Anirudh Deshmukh', 500, '2021-06-19 11:02:13'),
(5, 'Kabir Singh', 'Anjali Sharma', 1000, '2021-06-19 11:32:28'),
(6, 'Aditya Kashyap', 'Varsha Maheshwari', 40, '2021-06-19 11:34:30'),
(7, 'Vijay D', 'Akshara Singhaniya', 1000, '2021-06-19 11:35:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email Id` varchar(200) NOT NULL,
  `Account no.` varchar(255) NOT NULL,
  `balance` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email Id`, `Account no.`, `balance`) VALUES
(1, 'Akshara Singhaniya', 'akshara@gmail.com', '7666223309', 101001),
(2, 'Vijay D', 'vijay@gmail.com', '8986122077', 108600),
(3, 'Raj Malhotra', 'malhotra@gmail.com', '2179345089', 49158),
(4, 'Anjali Sharma', 'anjali@gmail.com', '2142365410', 1499),
(5, 'Rohit Mehra', 'rohit@gmail.com', '9423856701', 10000),
(6, 'Naira', 'naira@gmail.com', '9123705443', 2742),
(7, 'Anirudh Deshmukh', 'anirudh@gmail.com', '7666290811', 26003),
(8, 'Kabir Singh', 'kabir@outlook.com', '2170984463', 9000),
(9, 'Varsha Maheshwari', 'vm@gmail.com', '9138508022', 8540),
(10, 'Aditya Kashyap', 'aditya@gmail.com', '9865121176', 12000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
