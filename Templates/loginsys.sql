-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 05:28 AM
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
-- Database: `loginsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersID` int(10) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUID` varchar(128) NOT NULL,
  `usersPWD` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `usersName`, `usersEmail`, `usersUID`, `usersPWD`) VALUES
(5, 'dawn', 'PaicuTeodor', 'dawn', '$2y$10$FOJMztV6NfIh8rdTJVI6tOrUgjj8ZurhabZ172KAuyOXfb8XbxyWq'),
(6, 'dusk', 'ioanteodorpaicu@gmail.com', 'dusk', '123'),
(7, 'Dawn Laqi', 'paicuvalentindimitrie2001@gmail.com', 'dred', '$2y$10$cmozizhA.FrCysZGIiu0meBZLeu4cUHkFvLiZYcHtt3RT7r5CFrI.'),
(8, 'dawn', 'paicu_teodor@yahoo.com', 'dawnnn', '$2y$10$t9/CsOKtPntgDEjhR5ldY.GoNEuZEabYp.EC4h8Cc6y7UUCtApNBi'),
(9, 'dawn', 'rpaicu_teodor@yahoo.com', 'dawnfrr', '$2y$10$ho.MAv.NOSNzdEODubrRCeYx8VmItmOIcvR5OvENDIlcA0QBuzKcu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
