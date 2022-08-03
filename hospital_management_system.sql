-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 08:57 AM
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
-- Database: `hospital_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `Consultation_ID` int(50) NOT NULL,
  `Patient_ID` int(50) NOT NULL,
  `Doctor_ID` int(50) NOT NULL,
  `Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `Fees` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`Consultation_ID`, `Patient_ID`, `Doctor_ID`, `Time`, `Fees`) VALUES
(1, 1, 1, '2022-07-21 06:45:48.000000', 100),
(2, 2, 2, '2022-07-27 06:45:48.000000', 150);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_ID` int(255) NOT NULL,
  `Doctor_Name` varchar(255) NOT NULL,
  `Contact_No` varchar(255) NOT NULL,
  `Specialisation` varchar(255) NOT NULL,
  `Hospital_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_ID`, `Doctor_Name`, `Contact_No`, `Specialisation`, `Hospital_ID`) VALUES
(1, 'Dr.Priya', '3467892345', 'Pediatrics', 1),
(2, 'Dr.Mohan', '5689235184', 'Orthology', 2);

-- --------------------------------------------------------

--
-- Table structure for table `follow_up`
--

CREATE TABLE `follow_up` (
  `Patient_ID` int(50) NOT NULL,
  `Doctor_ID` int(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `follow_up`
--

INSERT INTO `follow_up` (`Patient_ID`, `Doctor_ID`, `Status`) VALUES
(1, 1, 'Surgery Date Confirmed'),
(2, 2, 'Waiting for Lab Results');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `Hospital_ID` int(50) NOT NULL,
  `Hospital_Name` varchar(50) NOT NULL,
  `Region` varchar(50) NOT NULL,
  `Contact_No` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`Hospital_ID`, `Hospital_Name`, `Region`, `Contact_No`) VALUES
(1, 'Thalassery Cooperative Hospital', 'Thalassery', '3467129836'),
(3, 'Rajiv Gandhi Memorial Hospital', 'Kannur', '4378651204');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `Medicine_ID` int(50) NOT NULL,
  `Medicine_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`Medicine_ID`, `Medicine_Name`) VALUES
(1, 'Dolo 350'),
(2, 'Apex 220');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patient_ID` int(50) NOT NULL,
  `Patient_Name` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Contact_No` varchar(255) NOT NULL,
  `Blood_Group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_ID`, `Patient_Name`, `Gender`, `Address`, `DOB`, `Contact_No`, `Blood_Group`) VALUES
(1, 'Ram', 'Male', 'Kannur', '2014-07-16', '3467845673', 'A+'),
(2, 'Maya', 'Female', 'Thalassery', '2011-07-21', '7844589237', 'B+'),
(3, 'Rishu', 'Female', 'Kadirur', '2013-07-10', '3426734095', 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` int(50) NOT NULL,
  `Staff_Name` varchar(50) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Contact_No` varchar(50) NOT NULL,
  `Hospital_ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `Staff_Name`, `Designation`, `Contact_No`, `Hospital_ID`) VALUES
(1, 'Shamu', 'Nurse', '3412896472', 3),
(2, 'Meenu', 'Nurse', '5478230723', 4);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `Treatment_ID` int(50) NOT NULL,
  `Consultation_ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`Treatment_ID`, `Consultation_ID`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `treatment_details`
--

CREATE TABLE `treatment_details` (
  `Treatment_ID` int(50) NOT NULL,
  `Medicine_ID` int(50) NOT NULL,
  `Dosage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment_details`
--

INSERT INTO `treatment_details` (`Treatment_ID`, `Medicine_ID`, `Dosage`) VALUES
(1, 1, '1-1-1'),
(2, 2, '1-0-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`Consultation_ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_ID`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`Hospital_ID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`Medicine_ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`Treatment_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
