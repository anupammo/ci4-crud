-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2022 at 12:34 AM
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
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `body`) VALUES
(1, 'Elvis sighted', 'elvis-sighted', 'Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
(2, 'Say it isn\'t so!', 'say-it-isnt-so', 'Scientists conclude that some programmers have a sense of humor.'),
(3, 'Caffeination, Yes!', 'caffeination-yes', 'World\'s largest coffee shop open onsite nested coffee shop for staff only.'),
(4, 'Second female president', 'second-female-president', 'New elected president is the second female president from Indian tribal minorities.'),
(5, 'Religion tension', 'religion-tension', 'India facing huge tension between two religions, from the Hindus and the Muslims.');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `serial_no` int(8) NOT NULL,
  `p_name` varchar(60) NOT NULL,
  `p_sex` varchar(8) NOT NULL,
  `cell_no` varchar(16) NOT NULL,
  `email_id` varchar(32) NOT NULL,
  `p_age` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`serial_no`, `p_name`, `p_sex`, `cell_no`, `email_id`, `p_age`) VALUES
(1, 'Anupam Mondal', 'Male', '9474405860', 'anupam@email.in', 27),
(2, 'Mondira Mondal', 'Female', '9435043815', 'mondira@gmail.in', 38),
(3, 'Hritick Baidya', 'Male', '9382399893', 'hritick@gmail.com', 22),
(4, 'Anusmita Mondal', 'Female', '9433819433', 'anusmita@gmail.com', 5),
(5, 'Goutam Baidya', 'Male', '7501311448', 'goutamb@gmail.in', 64),
(6, 'Pratima Baidya', 'Female', '7477701360', 'pratimab@gmail.com', 57),
(8, 'Indira Chakraborty', 'Female', '9898767656', 'indira@gmail.com', 40),
(9, 'Bidisha Baidya', 'Female', '2342342345', 'bidisha@gmail.com', 31),
(10, 'Rahul Chakraborty', 'Male', '1234554321', 'rahul@email.com', 42),
(24, 'Prapti Chakraborty', 'Female', '9123456780', 'prapti@gmail.com', 12),
(25, 'Shatadru Chakraborty', 'Male', '8345679012', 'satadru@gmail.com', 2),
(29, 'Priyankar Gayen', 'Male', '9123456789', 'pgayen@email.com', 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `serial_no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
