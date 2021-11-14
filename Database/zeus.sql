-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 11:31 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeus`
--

-- --------------------------------------------------------

--
-- Table structure for table `icu`
--

CREATE TABLE `icu` (
  `icu_bed_number` varchar(20) NOT NULL,
  `availability` int(20) NOT NULL,
  `patient_id` varchar(20) NOT NULL,
  `patient_nic` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icu`
--

INSERT INTO `icu` (`icu_bed_number`, `availability`, `patient_id`, `patient_nic`, `address`, `contact_number`) VALUES
('123123', 213, 'wqeweqeq', '21323', 'wqewe', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userName` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userName`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` varchar(15) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `patient_name` varchar(20) NOT NULL,
  `patient_age` int(20) NOT NULL,
  `patient_address` varchar(20) NOT NULL,
  `patient_contact` varchar(20) NOT NULL,
  `patient_admission` varchar(20) NOT NULL,
  `patient_state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `nic`, `patient_name`, `patient_age`, `patient_address`, `patient_contact`, `patient_admission`, `patient_state`) VALUES
('123431421', '12312313123', 'cvbfabfsvsV', 123, 'dsafsfa', '12312314', '1223123123', 'discharged'),
('1341341341', '143411', 'wfSDGSDVDVS', 20, 'RFASFAF', '34636435636', '346346346', 'critical'),
('1351', '4456651n', 'hbjhbh', 23, 'gvjhgb', '512561', '22/22/22', 'discharged'),
('asfadf', '0', 'qwwrq', 10, 'asfdsf', '1324154', '14135113515', 'normal'),
('sss', '342342', 'ssss', 23432, '3rrwewr', '234', '34242342342', 'critical');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_number` varchar(20) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `job_role` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `home_address` varchar(20) NOT NULL,
  `telephone_number` varchar(20) NOT NULL,
  `duty_shift` varchar(20) NOT NULL,
  `vaccination` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_number`, `full_name`, `job_role`, `age`, `home_address`, `telephone_number`, `duty_shift`, `vaccination`) VALUES
('4525', 'rtgerg', 'nurse', 345, 'fdgdfg', '2345', 'day', 'vaccinated');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `category` varchar(30) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `name`, `category`, `brand`, `quantity`) VALUES
('dsfdsf', 'aaaaa', 'equipment', 'aaaaaaaaa', 2);

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `nic` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `first_dose_date` varchar(30) NOT NULL,
  `second_dose_date` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`nic`, `name`, `address`, `contact`, `brand`, `first_dose_date`, `second_dose_date`, `price`) VALUES
('sadas', 'asdas', 'sdada', '3443', 'asdasd', 'asdasd', 'sdad', '13134');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `icu`
--
ALTER TABLE `icu`
  ADD PRIMARY KEY (`icu_bed_number`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`nic`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
