-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Jul 04, 2024 at 03:38 AM
-- Server version: 8.4.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_docker`
--

-- --------------------------------------------------------

--
-- Table structure for table `php_docker_table`
--

CREATE TABLE `php_docker_table` (
  `id` int NOT NULL,
  `vendorType` enum('restaurant','farmer','small business','animal shelter','community outreach','other') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `deadline` date NOT NULL,
  `coverPhoto` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` enum('approved','waitlisted','denied','in review') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dateCreated` date NOT NULL,
  `contactName` varchar(100) NOT NULL,
  `contactEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `php_docker_table`
--

INSERT INTO `php_docker_table` (`id`, `vendorType`, `title`, `description`, `deadline`, `coverPhoto`, `status`, `dateCreated`, `contactName`, `contactEmail`) VALUES
(3, 'farmer', 'Arbor Farms', 'We are a family-owned business since 1956. We sell strawberry products such as jams, pies, wine, candies, and more!', '2024-08-16', 'bleh', 'waitlisted', '2024-06-30', '', ''),
(4, 'animal shelter', 'Pawbabies', 'Animal shelter looking to increase reach for animal adoption. We have lovely paw babies including dogs and cats along with weird friends such as tortoises and geckos!!!', '2024-07-24', 'bleh', 'approved', '2024-06-29', '', ''),
(5, 'restaurant', 'scoobydoo', 'mystery', '2024-07-03', '360_F_353869422_waSYC2L9etYWNrnQxwDdhUyPrTNOaSnN.jpg', 'in review', '2024-07-03', '', ''),
(83, 'restaurant', 'Little Asia', 'Delicious combo of different cuisines across Asia!!!', '2024-07-04', 'Beach Boogie Night.png', 'in review', '2024-07-04', 'Sharmila', 'Tagore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php_docker_table`
--
ALTER TABLE `php_docker_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `php_docker_table`
--
ALTER TABLE `php_docker_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
