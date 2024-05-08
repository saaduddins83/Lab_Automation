-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 12:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_name` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `test_code` varchar(10) DEFAULT NULL,
  `test_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_name`, `product_code`, `test_code`, `test_description`) VALUES
('Capacitors', 'XYZ', 'T002', 'Capacitance Measurement'),
('Circuit Breakers', 'JKL', 'T006', 'Circuit Trip Test'),
('Connectors', 'MNO', 'T007', 'Connectivity Test'),
('Diodes', 'UVW', 'T008', 'Diode Forward Voltage Drop Test'),
('Fuses', 'LMN', 'T003', 'Fuse Breaking Capacity Test'),
('Inductors', 'GHI', 'T009', 'Inductance Measurement'),
('Resistors', 'PQR', 'T004', 'Resistance Verification Test'),
('Switches', 'ABC', 'T001', 'Electrical Performance Test'),
('Transformers', 'DEF', 'T005', 'Efficiency Measurement'),
('Transistors', 'RST', 'T010', 'Transistor Gain Test');

-- --------------------------------------------------------

--
-- Table structure for table `products_table`
--

CREATE TABLE `products_table` (
  `product_id` varchar(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `revision_no` varchar(50) NOT NULL,
  `manufacturing_no` varchar(50) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_table`
--

INSERT INTO `products_table` (`product_id`, `product_name`, `revision_no`, `manufacturing_no`, `category_name`) VALUES
('AAB0012345', ' bulb', '00', '12345', NULL),
('ABA00123', ' bulb', '00', '123', NULL),
('ABC0056789', 'Selector Switche', '00', '56789', 'Switches'),
('ABC0101234', 'Electrical Connector', '01', '01234', NULL),
('DEF0099999', 'IF transformer', '00', '99999', 'Transformers'),
('LMN0034567', 'cartrige fuse', '00', '34567', 'Fuses'),
('UVW1266666', 'zener diode', '12', '66666', 'Diodes'),
('XYZ0012345', ' Film Capacitor', '00', '12345', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `r_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`r_id`, `fname`, `lname`, `email`, `pass`, `role`) VALUES
(5, 'saad', 'uddin', 'saaduddins83@gmail.com', '123', 'admin'),
(6, 'asd', 'asd', 'asd@gmail.com', '123', 'employee'),
(7, 'haris', 'khan', 'haris@gmail.com', '123', 'admin'),
(8, 'adil', 'khan', 'adil@gmail.com', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `testing_records`
--

CREATE TABLE `testing_records` (
  `testing_id` varchar(12) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `testing_code` varchar(255) NOT NULL,
  `testing_roll_number` varchar(255) NOT NULL,
  `test_result` varchar(50) NOT NULL,
  `remarks` text NOT NULL,
  `tester_name` varchar(255) NOT NULL,
  `remanufacturing_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testing_records`
--

INSERT INTO `testing_records` (`testing_id`, `product_id`, `testing_code`, `testing_roll_number`, `test_result`, `remarks`, `tester_name`, `remanufacturing_status`) VALUES
('00F580', 'LMN0034567', '', 'F580', 'pass', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure pariatur culpa hic molestias ipsam dicta libero consequuntur, ullam dolor veritatis nulla, illo vitae? Totam ut nesciunt suscipit, mollitia quia sunt?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Iure pariatur culpa hic molestias ipsam dicta libero consequuntur, ullam dolor veritatis nulla, illo vitae? Totam ut nesciunt suscipit, mollitia quia sunt?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Iure pariatur culpa hic molestias ipsam dicta libero consequuntur, ullam dolor veritatis nulla, illo vitae? Totam ut nesciunt suscipit, mollitia quia sunt?\r\n', 'saad', 0),
('ABC01XYZW567', 'ABC0101234', 'XYZ', 'W567', 'Pending', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sit voluptate minus quidem recusandae vel adipisci. Tempora beatae numquam, id, aliquid, labore blanditiis at provident quasi dolores vitae fuga dolorum.\r\n', 'Saad', 0),
('DEF00T005T33', 'DEF0099999', 'T005', 'T334', 'pass', 'this test has been successful', 'haris', 0),
('UVW12T008D22', 'UVW1266666', 'T008', 'D223', 'pass', 'The Diode Forward Voltage Drop Test went successful', 'saad', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_name`);

--
-- Indexes for table `products_table`
--
ALTER TABLE `products_table`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_category` (`category_name`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `testing_records`
--
ALTER TABLE `testing_records`
  ADD PRIMARY KEY (`testing_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products_table`
--
ALTER TABLE `products_table`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_name`) REFERENCES `categories` (`category_name`);

--
-- Constraints for table `testing_records`
--
ALTER TABLE `testing_records`
  ADD CONSTRAINT `testing_records_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products_table` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
