-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 10:12 PM
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
-- Database: `laravel-inteview`
--

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `siteId` varchar(255) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`siteId`, `site_name`, `area`) VALUES
('1001', 'site name 1', 'area 1'),
('1002', 'site name 2', 'area 1'),
('1003', 'site name 3', 'area 1'),
('1004', 'site name 4', 'area 1'),
('1005', 'site name 5', 'area 1'),
('1006', 'site name 6', 'area 1'),
('1007', 'site name 7', 'area 1'),
('1008', 'site name 8', 'area 1'),
('1009', 'site name 9', 'area 2'),
('1010', 'site name 10', 'area 2'),
('1011', 'site name 11', 'area 2'),
('1012', 'site name 12', 'area 3'),
('1013', 'site name 13', 'area 3'),
('1014', 'site name 14', 'area 3'),
('1015', 'site name 15', 'area 3'),
('1016', 'site name 16', 'area 3'),
('1017', 'site name 17', 'area 3'),
('1018', 'site name 18', 'area 3'),
('1019', 'site name 19', 'area 4'),
('1020', 'site name 20', 'area 4');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` varchar(255) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `siteId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task_name`, `vendor`, `siteId`) VALUES
('task 01', 'proj 1', 'BA', '1001'),
('task 02', 'proj 2', 'BA', '1002'),
('task 03', 'proj 3', 'BA', '1003'),
('task 04', 'proj 4', 'BO', '1004'),
('task 05', 'proj 5', 'BO', '1005'),
('task 06', 'proj 6', 'BO', '1006'),
('task 07', 'proj 7', 'BO', '1007'),
('task 08', 'proj 8', 'NE', '1008'),
('task 09', 'proj 9', 'NE', '1009'),
('task 10', 'proj 10', 'NE', '1010'),
('task 1', 'proj 11', 'NE', '1011'),
('task 12', 'proj 12', 'AI', '1012'),
('task 13', 'proj 13', 'AI', '1013'),
('task 14', 'proj 14', 'AI', '1014'),
('task 15', 'proj 15', 'AI', '1015'),
('task 16', 'proj 16', 'AI', '1016'),
('task 17', 'proj 17', 'AI', '1017'),
('task 18', 'proj 18', 'O2', '1018'),
('task 19', 'proj 19', 'O2', '1019'),
('task 20', 'proj 20', 'O2', '1020');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
