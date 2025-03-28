-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2025 at 06:26 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driver_trip_log_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `activity_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `activity_name` varchar(100) NOT NULL,
  `time_occured` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `category_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category_type`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'D'),
(4, 'E'),
(5, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driver_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driver_id`, `user_id`) VALUES
(5, 1),
(1, 2),
(2, 3),
(3, 4),
(4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `driver_categories`
--

CREATE TABLE `driver_categories` (
  `driver_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_categories`
--

INSERT INTO `driver_categories` (`driver_id`, `cat_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `financial_record_trip`
--

CREATE TABLE `financial_record_trip` (
  `record_id` int(11) NOT NULL,
  `trip_id` int(11) DEFAULT NULL,
  `fuel_cost` decimal(12,2) NOT NULL,
  `mentainace_cost` decimal(12,2) DEFAULT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial_record_trip`
--

INSERT INTO `financial_record_trip` (`record_id`, `trip_id`, `fuel_cost`, `mentainace_cost`, `description`) VALUES
(1, 1, '50000.00', '20000.00', 'Trip to Kigali City Tower'),
(2, 2, '75000.00', '15000.00', 'Trip to Rubavu Bus Park'),
(3, 3, '60000.00', '10000.00', 'Trip to Muhanga Market'),
(4, 4, '80000.00', '30000.00', 'Trip to Huye University'),
(5, 5, '55000.00', '25000.00', 'Trip to Musanze Stadium');

--
-- Triggers `financial_record_trip`
--
DELIMITER $$
CREATE TRIGGER `after_insert_financialrecord` AFTER INSERT ON `financial_record_trip` FOR EACH ROW BEGIN
   
   INSERT INTO activity_logs(item_id,activity_id) 
   VALUES (NEW.record_id,'inserted in financial record');
   END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `district` varchar(150) NOT NULL,
  `province` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `address`, `district`, `province`) VALUES
(1, 'Kigali City Tower', 'KN 2 St', 'Nyarugenge', 'Kigali'),
(2, 'Rubavu Bus Park', 'Main St', 'Rubavu', 'Western'),
(3, 'Muhanga Market', 'RN1 Road', 'Muhanga', 'Southern'),
(4, 'Huye University', 'Campus Rd', 'Huye', 'Southern'),
(5, 'Musanze Stadium', 'Sports Ave', 'Musanze', 'Northern');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `requested_by` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `trip_id`, `requested_by`) VALUES
(1, 3, '3'),
(2, 1, '0'),
(3, 5, 'Charlie Davis');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `maintenance_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `maintenance_type` varchar(150) NOT NULL,
  `start_service_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_service_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`maintenance_id`, `vehicle_id`, `maintenance_type`, `start_service_date`, `end_service_date`) VALUES
(1, 1, 'Engine Check', '2025-03-12 15:04:07', '2025-03-13 15:04:07'),
(2, 2, 'Oil Change', '2025-03-12 15:04:07', '2025-03-14 15:04:07'),
(3, 3, 'Tire Replacement', '2025-03-12 15:04:07', '2025-03-13 15:04:07'),
(4, 4, 'Brake Repair', '2025-03-12 15:04:07', '2025-03-15 15:04:07'),
(5, 5, 'Battery Replacement', '2025-03-12 15:04:07', '2025-03-14 15:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `request_for_trip`
--

CREATE TABLE `request_for_trip` (
  `request_id` int(11) NOT NULL,
  `trip_id` int(11) DEFAULT NULL,
  `request_by` varchar(150) NOT NULL,
  `date_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('pending','approved','declined') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_for_trip`
--

INSERT INTO `request_for_trip` (`request_id`, `trip_id`, `request_by`, `date_request`, `status`) VALUES
(1, 1, 'Sangwa joseph', '2025-03-12 14:56:35', 'approved'),
(2, 2, 'hirwa edison ', '2025-03-12 14:56:35', 'pending'),
(3, 3, 'Sebarera patrcick', '2025-03-12 14:56:35', 'approved'),
(4, 4, 'ITUZE EBEDI Meleleck', '2025-03-12 14:56:35', 'pending'),
(5, 5, 'Charlie Davis', '2025-03-12 14:56:35', 'approved');

--
-- Triggers `request_for_trip`
--
DELIMITER $$
CREATE TRIGGER `after_update_request` AFTER UPDATE ON `request_for_trip` FOR EACH ROW BEGIN
   
    IF NEW.status = 'approved' THEN
        INSERT INTO logs(trip_id, requested_by) VALUES (NEW.trip_id, NEW.request_by);
    END IF;
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'driver'),
(3, 'financial'),
(4, 'other'),
(5, 'Mechanic');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `vehicle_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `departure_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `departure_location` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`vehicle_id`, `trip_id`, `driver_id`, `departure_time`, `departure_location`) VALUES
(1, 4, 1, '2025-03-12 06:00:00', 'Kigali'),
(2, 5, 2, '2025-03-12 07:00:00', 'Musanze'),
(3, 3, 3, '2025-03-12 08:30:00', 'Huye'),
(4, 1, 4, '2025-03-12 10:00:00', 'Ruhengeri'),
(5, 1, 5, '2025-03-12 12:00:00', 'Nyundo');

--
-- Triggers `trips`
--
DELIMITER $$
CREATE TRIGGER `after_insert_trips` AFTER INSERT ON `trips` FOR EACH ROW BEGIN
   
   INSERT INTO activity_logs(item_id,activity_id) 
   VALUES (NEW.trip_id,'insertion of trip');
   END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `trip_detail`
--

CREATE TABLE `trip_detail` (
  `trip_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip_detail`
--

INSERT INTO `trip_detail` (`trip_id`, `location_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `password`, `email`, `phone_number`) VALUES
(1, 'John', 'Doe', 'a615a46a9f52e117dffce7d7235b464a910f74508dfb51a27ce8c63d0413d9a0', 'john.doe@example.com', '0789123456'),
(2, 'Jane', 'Smith', 'b77f5643318b6f52887b23eba92f0f1068dd75a29a5be2812d4a1c1ccb19bc31', 'jane.smith@example.com', '0789234567'),
(3, 'Alice', 'Johnson', '7bfd5078efc1b2b838e28a79574e2fc6bd9b7fb63edf789b3023ba12aff099fd', 'alice.johnson@example.com', '0789345678'),
(4, 'Bob', 'Brown', '67823010ef4657dcae1dad584cdeafb3d226a7038793ab9b2f8ff2a142cc438e', 'bob.brown@example.com', '0789456789'),
(5, 'Charlie', 'Davis', 'b87853026a7c62266e5788a55fc6c65faf6967886f54fffebd120be44d13b933', 'charlie.davis@example.com', '0789567890');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `after_creation_of_users` AFTER INSERT ON `users` FOR EACH ROW BEGIN
   
   INSERT INTO activity_logs(item_id,activity_id) 
   VALUES (NEW.user_id,'creted user ');
   END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_deletion_of_users` AFTER DELETE ON `users` FOR EACH ROW BEGIN
   
   INSERT INTO activity_logs(item_id,activity_id) 
   VALUES (old.user_id,'deleted user ');
   END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(2, 3),
(3, 4),
(4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `plate_numbe` varchar(150) NOT NULL,
  `vehicle_type` enum('truck','bus','minibus','taxt') NOT NULL,
  `model` varchar(150) NOT NULL,
  `year` year(4) NOT NULL,
  `status` enum('Available','in use','under maintenance') NOT NULL DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `plate_numbe`, `vehicle_type`, `model`, `year`, `status`) VALUES
(1, 'RAC123B', 'bus', 'Toyota Coaster', 2018, 'Available'),
(2, 'RBC456C', 'truck', 'Isuzu FVR', 2020, 'in use'),
(3, 'RAD789D', 'minibus', 'Hyundai H1', 2019, 'Available'),
(4, 'RAE321E', '', 'Toyota Corolla', 2021, 'under maintenance'),
(5, 'RAF654F', 'bus', 'Mercedes Sprinter', 2022, 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driver_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `driver_categories`
--
ALTER TABLE `driver_categories`
  ADD KEY `driver_id` (`driver_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `financial_record_trip`
--
ALTER TABLE `financial_record_trip`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `trip_id` (`trip_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `trip_id` (`trip_id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`maintenance_id`),
  ADD KEY `vehicle_id` (`vehicle_id`);

--
-- Indexes for table `request_for_trip`
--
ALTER TABLE `request_for_trip`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `request_for_trip_ibfk_1` (`trip_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD KEY `trip_id` (`trip_id`),
  ADD KEY `vehicle_id` (`vehicle_id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Indexes for table `trip_detail`
--
ALTER TABLE `trip_detail`
  ADD PRIMARY KEY (`trip_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD KEY `role_id` (`role_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD UNIQUE KEY `plate_numbe` (`plate_numbe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `financial_record_trip`
--
ALTER TABLE `financial_record_trip`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `maintenance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request_for_trip`
--
ALTER TABLE `request_for_trip`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trip_detail`
--
ALTER TABLE `trip_detail`
  MODIFY `trip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `driver_categories`
--
ALTER TABLE `driver_categories`
  ADD CONSTRAINT `driver_categories_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`driver_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `driver_categories_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE;

--
-- Constraints for table `financial_record_trip`
--
ALTER TABLE `financial_record_trip`
  ADD CONSTRAINT `financial_record_trip_ibfk_1` FOREIGN KEY (`trip_id`) REFERENCES `trip_detail` (`trip_id`);

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`trip_id`) REFERENCES `trip_detail` (`trip_id`) ON DELETE CASCADE;

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `maintenance_ibfk_1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`);

--
-- Constraints for table `request_for_trip`
--
ALTER TABLE `request_for_trip`
  ADD CONSTRAINT `request_for_trip_ibfk_1` FOREIGN KEY (`trip_id`) REFERENCES `trip_detail` (`trip_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_ibfk_1` FOREIGN KEY (`trip_id`) REFERENCES `trip_detail` (`trip_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trips_ibfk_2` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trips_ibfk_3` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`driver_id`) ON DELETE CASCADE;

--
-- Constraints for table `trip_detail`
--
ALTER TABLE `trip_detail`
  ADD CONSTRAINT `trip_detail_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`),
  ADD CONSTRAINT `user_roles_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
