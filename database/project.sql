-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2023 at 08:08 AM
-- Server version: 8.0.31
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Mannat', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `allotment`
--

DROP TABLE IF EXISTS `allotment`;
CREATE TABLE IF NOT EXISTS `allotment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_id` int DEFAULT NULL,
  `room_no` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `arrival` datetime DEFAULT NULL,
  `departure` datetime DEFAULT NULL,
  `first` varchar(20) DEFAULT NULL,
  `last` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `adults` int DEFAULT NULL,
  `children` int DEFAULT NULL,
  `preference` varchar(30) DEFAULT NULL,
  `status` int DEFAULT '0',
  `room_no` int DEFAULT '0',
  `customer_id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`arrival`, `departure`, `first`, `last`, `email`, `phone`, `adults`, `children`, `preference`, `status`, `room_no`, `customer_id`) VALUES
('2023-01-13 00:00:00', '2023-01-17 00:00:00', 'test123', 'garg123', 'test5@yahoo.com', '6183267212', 2, 0, 'Deluxe', 1, 123, 1),
('2023-01-14 00:00:00', '2023-01-18 00:00:00', 'abcd', 'efgh', 'abcd@abcd.com', '8239272112', 2, 2, 'Suite', 1, 125, 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`customer_id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'payal', 'payal@gmail.com', '8193173134', 'siasadji asndc'),
(2, 'test', 'test.5@gmail.com', '7145676543', 'jdiuew siaudd');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `phone`, `username`, `password`) VALUES
('test2', 'test5@yahoo.com', '6921478239', 'test123', 'root123'),
('test', 'test.5@gmail.com', '7145676543', 'test12', 'bfvnff'),
('abcd123', 'abcd@abcd', '9815993556', 'root', 'hf8375');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_no` int NOT NULL,
  `price` int DEFAULT NULL,
  `persons` int DEFAULT NULL,
  `floor` int DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`room_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_no`, `price`, `persons`, `floor`, `title`, `image`, `description`) VALUES
(105, 5000, 1, 1, 'delux', 'room_3.jpg', 'Totally soundproofed and equipped with high tech comforts such as high speed internet access, USB ports , smart TV, room cleaning touch system and private hydromassage bathtub'),
(123, 10000, 2, 1, 'suite', 'hotel_room.jpg', 'It has an attached bathroom, a living area and includes a dining area as well..                                                         '),
(400, 2000, 8, 5, 'room', 'room_4.jpg', 'good  room                         '),
(411, 18000, 1, 4, 'Single Room', '150299624657046.jpg', 'Beautiful and elegant vibes                '),
(512, 24000, 2, 5, 'room with a view', 'room_4.jpg', 'Beautiful views in every direction – inside and out');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allotment`
--
ALTER TABLE `allotment`
  ADD CONSTRAINT `allotment_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `booking` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
