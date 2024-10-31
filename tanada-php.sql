-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2024 at 01:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanada-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `alt_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `image_path`, `alt_text`) VALUES
(1, 'galeri/galeri1.jpg', 'Galeri 1'),
(2, 'galeri/galeri2.jpg', 'Galeri 2'),
(3, 'galeri/galeri3.jpg', 'Galeri 3'),
(4, 'galeri/galeri4.jpg', 'Galeri 4'),
(5, 'galeri/galeri5.jpg', 'Galeri 5'),
(6, 'galeri/galeri6.jpg', 'Galeri 6'),
(7, 'galeri/galeri7.jpg', 'Galeri 7'),
(8, 'galeri/galeri8.jpg', 'Galeri 8'),
(9, 'galeri/galeri9.jpg', 'Galeri 9'),
(10, 'galeri/galeri10.jpg', 'Galeri 10'),
(11, 'galeri/galeri11.jpg', 'Galeri 11'),
(12, 'galeri/galeri12.jpg', 'Galeri 12'),
(14, 'galeri/galeri14.jpg', 'Galeri 14'),
(15, 'galeri/galeri15.jpg', 'Galeri 15'),
(16, 'galeri/galeri16.jpg', 'Galeri 16'),
(17, 'galeri/ulw.jpg', 'Galeri 16'),
(18, 'galeri/dkv.jpg', 'Galeri 16');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `image_path`, `title`, `content`, `date`) VALUES
(7, 'informasi/Screenshot from 2024-10-30 16-59-15.png', 'a', 'asasas', '2024-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `ppdb`
--

CREATE TABLE `ppdb` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_contacts`
--

CREATE TABLE `ppdb_contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ppdb_contacts`
--

INSERT INTO `ppdb_contacts` (`id`, `name`, `number`) VALUES
(1, 'saya', 'endin'),
(2, 'saya', 'endin'),
(3, 'Endin', '6281234567890');

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_info`
--

CREATE TABLE `ppdb_info` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `registration_start` date NOT NULL,
  `registration_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ppdb_info`
--

INSERT INTO `ppdb_info` (`id`, `image_path`, `registration_start`, `registration_end`) VALUES
(1, 'ppdb/galeri5.jpg', '2024-01-01', '2024-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_registration`
--

CREATE TABLE `ppdb_registration` (
  `id` int(11) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ppdb_registration`
--

INSERT INTO `ppdb_registration` (`id`, `info`) VALUES
(1, 'akusuka');

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_requirements`
--

CREATE TABLE `ppdb_requirements` (
  `id` int(11) NOT NULL,
  `requirement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ppdb_requirements`
--

INSERT INTO `ppdb_requirements` (`id`, `requirement`) VALUES
(1, 'satu'),
(2, 'dua'),
(3, 'tiga');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(2, 'smktanada24@gmail.com', '$2y$10$gJIwR4JKxXBauF/ff0gOvOhKqovPOFBAdpv50kgroqBbXTliFg/gm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb`
--
ALTER TABLE `ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_contacts`
--
ALTER TABLE `ppdb_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_info`
--
ALTER TABLE `ppdb_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_registration`
--
ALTER TABLE `ppdb_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb_requirements`
--
ALTER TABLE `ppdb_requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ppdb`
--
ALTER TABLE `ppdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppdb_contacts`
--
ALTER TABLE `ppdb_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ppdb_info`
--
ALTER TABLE `ppdb_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ppdb_registration`
--
ALTER TABLE `ppdb_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ppdb_requirements`
--
ALTER TABLE `ppdb_requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
