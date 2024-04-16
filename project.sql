-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 10:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `district_location` varchar(340) NOT NULL,
  `sector_location` varchar(340) NOT NULL,
  `price` varchar(333) NOT NULL,
  `action` varchar(3333) NOT NULL,
  `image` varchar(290) NOT NULL,
  `category` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `name`, `district_location`, `sector_location`, `price`, `action`, `image`, `category`) VALUES
(14, 'house', 'kicukiro', 'masaka', '900000000 rwf Negotiable', 'for sale', 'myfolder/download (1).jpg', 'house'),
(15, 'house', 'nyarugenege', '', '20000000 negotiablls', 'for sale', 'myfolder/images (7).jpg', 'house'),
(16, 'house', 'gasabo', 'muhima', '600000000 rwf Negotiable', 'for sale', 'myfolder/download (2).jpg', 'house'),
(17, 'house', 'nyarugenege', 'muhima', '900000000 rwf Negotiable', 'for sale', 'myfolder/download (5).jpg', 'house'),
(18, 'nbxsnx', 'nyarugenege', 'gasabo', '12000000000 rwf negotiable', 'for sale', 'myfolder/download (8).jpg', 'house'),
(19, 'house', 'gasabo', 'masaka', '900000000 rwf Negotiable', 'for sale', 'myfolder/download (6).jpg', 'house'),
(20, 'house', 'nyarugenege', '', '450000000 negotiablls', 'for sale', 'myfolder/images (3).jpg', 'house'),
(21, 'iulddc', 'kicukiro', 'masaka', '456560', 'for sale', 'myfolder/images.jpg', 'house'),
(22, 'iulddc', 'kicukiro', 'muhima', '900000000 rwf Negotiable', 'for sale', 'myfolder/images (8).jpg', 'house'),
(24, 'iulddc', 'gasabo', 'masaka', '900000000 rwf Negotiable', 'for sale', 'myfolder/images (2).jpg', 'house'),
(25, 'house', 'kicukiro', 'masaka', '2000000 rwf Negotiable', 'for sale', 'myfolder/images (4).jpg', 'house'),
(26, 'iulddc', 'kicukiro', 'masaka', '200000000 rwf Negotiable', 'for sale', 'myfolder/images (1).jpg', 'house');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(228) NOT NULL,
  `email` varchar(38) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image` (`image`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
