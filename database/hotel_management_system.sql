-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2023 at 02:58 PM
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
CREATE DATABASE IF NOT EXISTS hotel_management_system;
USE hotel_management_system;
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
(1, 2, 2, '2023-04-08', '2023-04-13', 4, 2, 'Non-smoking room', 5, '1250.00'),
(8, 17, 2, '2023-04-17', '2023-04-23', 2, 1, 'No windows operating system in my room!', 6, '1500.00'),
(11, 20, 3, '2023-04-13', '2023-04-20', 2, 4, 'No apple in this shit!', 7, '1610.00');

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Birthday` date NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Gender` varchar(20) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Address` text NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`CustomerID`, `FirstName`, `LastName`, `Birthday`, `Username`, `Gender`, `Email`, `Phone`, `Address`, `Password`, `isAdmin`) VALUES
(1, 'Blendi', 'Rrustemi', '2001-01-13', 'blendirr', 'Male', 'blendirrustemi@example.com', '123-456-7890', 'Prishtina, 10000', 'blendi321', 1),
(2, 'Mario', 'Stura', '1993-02-21', '', 'Male', 'mariostura@example.com', '987-654-3210', 'Zagreb, 10000', 'mario321', 0),
(17, 'Steve', 'Jobs', '1999-05-05', NULL, 'male', 'stevejobs@apple.com', '0992441382', 'California', NULL, 0),
(20, 'Bill', 'Gates', '2023-03-27', NULL, 'male', 'bill@microsoft.com', '1231231231', 'London, UK', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Rooms`
--

CREATE TABLE `Rooms` (
  `RoomID` int(11) NOT NULL,
  `RoomNumber` varchar(20) DEFAULT NULL,
  `RoomName` varchar(50) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Sleeps` int(11) NOT NULL,
  `Picture` text NOT NULL,
  `PricePerNight` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Rooms`
--

INSERT INTO `Rooms` (`RoomID`, `RoomNumber`, `RoomName`, `Description`, `Sleeps`, `Picture`, `PricePerNight`) VALUES
(1, '101', 'Blue Room', 'Sleeps 2 and features a wall of south facing windows overlooking the deck and back yard. The private bath features an oversized standup shower.', 2, '/assets/images/blue-room/blue8.jpg', '230.00'),
(2, '201', 'Bolero Room', 'The Bolero is our premium, private, romantic suite. It sleeps two in style and comfort with a king bed, a sitting area and an oversized bath featuring a two person jacuzzi tub and individual shower.', 2, '/assets/images/bolero-room/bolero3.webp', '250.00'),
(3, '301', 'Rose Suite', 'The Rose Suite is a two bedroom suite that sleeps up to 6 individuals. It also has large windows overlooking the deck and back yard. It has a second door that opens directly onto the deck. The private bath features an oversized standup shower.', 6, 'assets/images/rose-suite/rose3.webp', '230.00'),
(4, '401', 'Lodge Suite', 'The Lodge is a two bedroom suite that sleeps up to 6 individuals. It is trimmed in rough sawn cedar and features a traditonal bath with a tub and shower combination.', 6, '/assets/images/lodge-suite/lodge9.webp', '230.00');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bookings`
--
ALTER TABLE `Bookings`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Customers`
--
ALTER TABLE `Customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Bookings`
--
ALTER TABLE `Bookings`
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`RoomID`) REFERENCES `Rooms` (`RoomID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
