-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2019 at 08:16 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `tara` varchar(100) NOT NULL,
  `oras` varchar(100) NOT NULL,
  `adresa` varchar(100) NOT NULL,
  `varsta` date NOT NULL,
  `numar` varchar(1111) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `nume`, `prenume`, `tara`, `oras`, `adresa`, `varsta`, `numar`) VALUES
(1, 'asd', 'asd@yahoo.com', '7815696ecbf1c96e6894b779456d330e', '1', '1', '1', '1', '1', '0000-00-00', ''),
(8, 'aaaaaaaaaa', 'aaaaaaaaaa', '47bce5c74f589f4867dbd57e9ca9f808', 'nume', 'prenume', 'tara', 'oras', 'adresa', '0000-00-00', ''),
(9, 'aaaaaaaaaaaaaaaa', 'asd@yaaaahoo.com', '0cc175b9c0f1b6a831c399e269772661', 'nume', 'prenume', 'tara', 'oras', 'adresa', '0000-00-00', ''),
(10, 'fff', 'fff@yahoo.com', '343d9040a671c45832ee5381860e2996', '', 'aaa', '', '', '', '0000-00-00', ''),
(11, 'ggg', 'gg@yahpp', '7815696ecbf1c96e6894b779456d330e', '', '', '', '', '', '0000-00-00', ''),
(12, 'asdff', 'asd@asd.asd', '7815696ecbf1c96e6894b779456d330e', '', '', '', '', '', '0000-00-00', ''),
(13, 'abc', 'abc@yahoo.com', '900150983cd24fb0d6963f7d28e17f72', 'abc', 'abc', 'abc', 'abc', 'abc', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
