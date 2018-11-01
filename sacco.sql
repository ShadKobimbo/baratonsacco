-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 12:28 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sacco`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstname`, `secondname`, `status`) VALUES
(1, 'Shadrach', 'Kobimbo', 'Active'),
(3, 'Bella', 'Obonyo', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageno` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageno`, `firstname`, `secondname`, `email`, `messages`) VALUES
(1, 'test', 'test', 'samaki@gmail.com', 'Testing testing'),
(2, 'test 2', 'testing2', 'test@shad.com', 'lets try this again'),
(3, 'final', 'test', 'test@shad.com', 'Final checking to see if this still works'),
(4, 'test 3', 'testing 3', 'test@shad.com', 'Last one'),
(5, 'Big', 'Ben', 'big@ben.com', 'asgvadhsfmdgmdgmdg');

-- --------------------------------------------------------

--
-- Table structure for table `new_members`
--

CREATE TABLE `new_members` (
  `entryno` int(10) NOT NULL,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `payroll_no` int(15) NOT NULL,
  `designation` varchar(15) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `employer` varchar(20) NOT NULL,
  `department` text NOT NULL,
  `address` varchar(15) NOT NULL,
  `pin` int(6) NOT NULL,
  `terms` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `entryno` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `payroll` varchar(12) NOT NULL,
  `designation` text NOT NULL,
  `nationalid` varchar(8) NOT NULL,
  `address` varchar(25) NOT NULL,
  `pin` int(4) NOT NULL,
  `mobile` int(12) NOT NULL,
  `employer` varchar(25) NOT NULL,
  `department` varchar(15) NOT NULL,
  `terms` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`entryno`, `firstname`, `secondname`, `payroll`, `designation`, `nationalid`, `address`, `pin`, `mobile`, `employer`, `department`, `terms`) VALUES
(1, 'Vera', 'Sidika', '', '', '', '', 0, 734976293, 'University Of Eastern Afr', '', ''),
(2, 'Vera', 's', '', '', '', '', 0, 734976293, 'University Of Eastern Afr', 'ISC', 'technician'),
(3, 'Vera', 'Sidika', '', '', '', '', 0, 734976293, 'University Of Eastern Afr', 'ISC', 'Working as a Technician till 2030'),
(4, 'Vera', 'Sidika', '', '', '07349762', 'A017075', 0, 6969, 'University Of Eastern Afr', 'ISC', 'you know wassup'),
(5, 'Vera', 'Sidika', '', '', 'A017075', 'UEAB 2500', 6969, 734976293, 'University Of Eastern Afr', 'ISC', 'lets try that again'),
(6, 'Vera', 'Sidika', '124252345', 'Techy', 'A017075', 'UEAB 2500', 6969, 734976293, 'University Of Eastern Afr', 'ISC', 'Fingers Crossed'),
(7, 'Big', 'Ben', '3245345', 'dfsbsdfbsd', '34523453', 'sdfvddfbd', 4352, 45345, 'University Of Eastern Afr', 'ISC', 'sfsbdnfmjsmxgmcdt');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `email` varchar(8) NOT NULL,
  `passwrd` varchar(12) NOT NULL,
  `classification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `secondname`, `email`, `passwrd`, `classification`) VALUES
(1, 'Shadrach', 'Kobimbo', 'Shad001', 'samaki99', 'admin'),
(2, 'Daniel', 'Kobimbo', 'Dani10', 'datura11', 'client'),
(3, 'Bella', 'Obonyo', 'obonyo', 'james1', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageno`);

--
-- Indexes for table `new_members`
--
ALTER TABLE `new_members`
  ADD PRIMARY KEY (`entryno`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`entryno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `new_members`
--
ALTER TABLE `new_members`
  MODIFY `entryno` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `entryno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
