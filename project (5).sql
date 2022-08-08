-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 03:29 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('mratul49@gmail.com', 'mratul49@'),
('pk.soft29@gmail.com', 'Pk@16123114');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `comm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `date`, `comm`) VALUES
(1, 'pawan', '0000-00-00', '0'),
(2, 'pawan', '0000-00-00', '0'),
(3, 'pawan', '0000-00-00', '0'),
(4, 'pawan', '0000-00-00', 'this is ;awa'),
(5, 'pawan', '0000-00-00', 'asdfghjkl'),
(6, 'pankaj', '0000-00-00', 'cheack'),
(7, 'pk', '0000-00-00', 'checked'),
(8, 'Siddhartha', '0000-00-00', 'Wow what a beautiful and Attractive site. lovely'),
(9, 'Guddy', '2018-03-17', 'wow Pawan you have done A splendid work bro\r\nhats off ....'),
(10, 'guddu', '2018-03-16', 'good website'),
(11, 'pawan', '2018-03-17', 'This is pawan'),
(12, 'Atul', '2018-03-16', 'my name is kumar atul verma great found of SAATHI NGO . I love you guys.'),
(13, 'Rajni Saizel', '2013-05-12', 'This is an incredible website through which  we can assist the people or needy who really deserve for the love and concern towards them.'),
(14, 'pawan', '2018-03-19', 'this is pawan'),
(15, 'PAWAN', '2018-03-22', 'DCFVGHJKJHGFDFGBNJMK,JHGFR');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(6) NOT NULL,
  `amount` int(6) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `note` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `amount`, `fname`, `lname`, `email`, `phone`, `address`, `note`) VALUES
(1, 1000, 'pawan', 'kumar', 'pk.soft29@gmail.com', '8083373213', 'patna', 'for hungry and poverty'),
(2, 200, 'pawan', 'kumar', 'pk.soft29@gmail.com', '8083373213', 'Patna', 'Socila Awarness');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `id` int(20) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(200) NOT NULL,
  `agenda` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`id`, `date`, `place`, `agenda`) VALUES
(3, '2018-03-17', 'boring road', 'this is pawan kumar'),
(4, '2018-03-20', 'patna', 'meeting will start about how to protect the envorment'),
(5, '2018-03-20', 'delhi', 'cjhjdfj fifhijf ihijfghig gjighjighighg ghghgg fivhgjhgg ivhguihguhg ghguhghg gfuhguhghgih gugh guhguyhg gguhguhguhg ghzugufygry78reuh fufguf hf'),
(6, '2018-03-13', 'sgsgsgs gdggdd dgd', 'ndbhdbjhcbhjcbhc h chfh f  hfubfhbzhbuhbfuh fufgyfufg ufuyf f7fbu f gfu funfuf uf fg kufu uf ufh fu fuf hfgbyuf hf fu fy fuf ');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(6) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `DOB` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `aadhaar` bigint(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pin` int(6) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(10) NOT NULL,
  `hobbies` varchar(50) DEFAULT NULL,
  `qualification` varchar(60) NOT NULL,
  `interest` varchar(60) NOT NULL,
  `img_path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `DOB`, `email`, `mobile`, `aadhaar`, `gender`, `address`, `city`, `pin`, `state`, `country`, `hobbies`, `qualification`, `interest`, `img_path`) VALUES
(27, 'Atul', '', '1997-12-22', 'avatul96@gmail.com', 8581835992, 556598762222, 'Male', 'Hathwa Enclave Ramji chak Bataganj, Digha, Patna-18,\r\nIncuba', 'Patna', 800018, 'Bihar', 'India', 'Other', 'Graduate', 'Advertisement', 'member-4.jpg'),
(28, 'Pawan', 'Kumar', '1998-10-30', 'pk.soft29@gmail.com', 8083373213, 984563467664, 'Male', 'vill-Rampur, Post-Aiyara', 'Arwal', 804426, 'Bidar', 'India', 'Drawing', 'Graduate', 'Field _work', 'member-1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(20) NOT NULL,
  `date` date NOT NULL,
  `note` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `date`, `note`) VALUES
(4, '2018-03-19', 'tyxgxhvb njjc hhgdh ddhdd dhdghdghd dgdgdhgd dhdghdgd dhddgd dhgdhgdhd ddghdbdh dhdghdghd ddhdgjhufdshufuiwehuih fiifhuif  ffhuihf fhgdshdg d shdhgd gdhy dhdbhd'),
(5, '2018-03-18', 'this is to inform all that we have success fully completed our website on 3/8/2018.');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `lname`, `aadhar`, `gender`, `phone`, `email`, `password`) VALUES
('Bipin', 'Kumar', 565465465434, 'male', 9507693321, 'bipin@gmail.com', '12345'),
('Atul', 'Verma ', 998765432123, 'male', 8581835992, 'mratul49@gmail.com', 'mratul49@'),
('pawan', 'kumar', 2147483647, 'male', 2147483647, 'pk.soft29@gmail.com', '16123114'),
('abc', 'def', 123456789045, 'male', 809765654, 'pk.soft9@gmail.com', '12345'),
('mno', 'pqr', 987654345678, 'male', 9878765454, 'pk@gmail.com', '12345'),
('jgch', 'gc', 767454637474, 'male', 8565755375, 'pm@gmail.com', 'abcd'),
('Rajni', 'Saizel', 123456778910, 'male', 8873036647, 'rajnisaizel1996@gmail.com', 'Tanuja@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`,`aadhaar`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `aadhar` (`aadhar`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
