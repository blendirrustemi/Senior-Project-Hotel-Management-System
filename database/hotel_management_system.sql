-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2023 at 02:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bookings`
--

CREATE TABLE `Bookings` (
  `BookingID` int(11) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `RoomID` int(11) DEFAULT NULL,
  `CheckInDate` date DEFAULT NULL,
  `CheckOutDate` date DEFAULT NULL,
  `Adults` int(11) DEFAULT NULL,
  `Children` int(11) DEFAULT NULL,
  `Requests` text DEFAULT NULL,
  `NightsToStay` int(11) DEFAULT NULL,
  `TotalPrice` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Bookings`
--

INSERT INTO `Bookings` (`BookingID`, `CustomerID`, `RoomID`, `CheckInDate`, `CheckOutDate`, `Adults`, `Children`, `Requests`, `NightsToStay`, `TotalPrice`) VALUES
(1, 2, 1, '2023-05-01', '2023-05-05', 2, 0, 'Non-smoking room', 4, '920.00'),
(2, 3, 2, '2023-05-06', '2023-05-13', 2, 1, 'Extra towels', 7, '1750.00');

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`CustomerID`, `FirstName`, `LastName`, `Email`, `Phone`, `Password`, `isAdmin`) VALUES
(1, 'Blendi', 'Rrustemi', 'blendirrustemi@example.com', '123-456-7890', 'blendi321', 1),
(2, 'Mario', 'Stura', 'mariostura@example.com', '987-654-3210', 'mario321', 0),
(3, 'Denim', 'Behn', 'denimbehn@example.com', '987-654-3210', 'denim321', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Rooms`
--

CREATE TABLE `Rooms` (
  `RoomID` int(11) NOT NULL,
  `RoomNumber` varchar(20) DEFAULT NULL,
  `RoomType` varchar(50) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `PricePerNight` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Rooms`
--

INSERT INTO `Rooms` (`RoomID`, `RoomNumber`, `RoomType`, `Description`, `PricePerNight`) VALUES
(1, '101', 'Standard', 'The Blue Room is a cozy and comfortable option for solo travelers or couples.', '230.00'),
(2, '201', 'Standard', 'The Bolero Room is a spacious and elegant choice, perfect for a romantic getaway.', '250.00'),
(3, '301', 'Suite', 'The Rose Suite is a luxurious option with a king-size bed, a private balcony, and stunning views of the surrounding area.', '230.00'),
(4, '401', 'Suite', 'The Lodge Suite is the ultimate in comfort and style, featuring a private living room, a fireplace, and a hot tub.', '230.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bookings`
--
ALTER TABLE `Bookings`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `RoomID` (`RoomID`);

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `Rooms`
--
ALTER TABLE `Rooms`
  ADD PRIMARY KEY (`RoomID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Bookings`
--
ALTER TABLE `Bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `Customers` (`CustomerID`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`RoomID`) REFERENCES `Rooms` (`RoomID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
