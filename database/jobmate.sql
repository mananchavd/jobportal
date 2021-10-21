-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 02:23 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `jid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `app_status` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `jid`, `user_id`, `app_status`, `date`) VALUES
(1, 1, 1, 'highered', '2019-01-08 19:45:45'),
(2, 1, 4, 'applied', '2019-01-09 19:19:30'),
(3, 1, 5, 'highered', '2019-01-09 19:46:59'),
(4, 2, 1, 'rejected', '2019-01-09 19:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `catname`) VALUES
(1, 'Finance'),
(2, 'IT & Engineering'),
(3, 'Education/Training'),
(4, 'Art/Design'),
(5, 'Sale/Markting'),
(6, 'Healthcare'),
(7, 'Science'),
(8, 'Food Services');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `jobid` int(11) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `jobtitle` varchar(40) NOT NULL,
  `jobdec` varchar(100) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `sdate` varchar(14) NOT NULL,
  `edate` varchar(14) NOT NULL,
  `poston` varchar(14) NOT NULL,
  `location` varchar(40) NOT NULL,
  `eligibility` varchar(40) NOT NULL,
  `opening` int(10) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `home` varchar(10) NOT NULL,
  `parttime` varchar(10) NOT NULL,
  `certificate` varchar(10) NOT NULL,
  `categorie` int(11) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`jobid`, `comp_id`, `jobtitle`, `jobdec`, `skill`, `sdate`, `edate`, `poston`, `location`, `eligibility`, `opening`, `salary`, `home`, `parttime`, `certificate`, `categorie`, `postdate`) VALUES
(1, 3, 'PHP Developer', 'jquery,javascript,ajax required : wordpress,joomla,codigniter,laravel', 'jquery,javascript,ajax required : wordpress,joomla,codigniter,laravel', '2019-12-07', '2019-01-31', '01/07/2019', 'Rajkot, Ahmedabad, ', 'Bechalor 1 year exp.', 3, '12000', 'on', 'yes', 'on', 3, '2019-01-08 07:50:31'),
(2, 3, 'Marketing', 'kskdfkslkfjowielsjlkjf', 'aksdfiwekljsdfoiweljslf', '2019-01-17', '2019-01-31', '01/09/2019', 'Ahmedabad, Pune, ', 'B.E', 1500, '0-20,000', 'no', 'no', 'yes', 0, '2019-01-09 14:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `registermember`
--

CREATE TABLE `registermember` (
  `reid` int(10) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(150) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `profilepic` varchar(400) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `companyname` varchar(40) NOT NULL,
  `role` varchar(20) NOT NULL,
  `bdate` varchar(150) NOT NULL,
  `categorie` int(15) NOT NULL,
  `joblocation` varchar(250) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `hometown` varchar(150) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `website` varchar(250) NOT NULL,
  `noofemployee` varchar(150) NOT NULL,
  `cprofile` text NOT NULL,
  `campanylogo` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL,
  `regidate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registermember`
--

INSERT INTO `registermember` (`reid`, `fname`, `lname`, `email`, `password`, `mobile`, `profilepic`, `designation`, `companyname`, `role`, `bdate`, `categorie`, `joblocation`, `gender`, `hometown`, `cv`, `website`, `noofemployee`, `cprofile`, `campanylogo`, `status`, `regidate`) VALUES
(1, 'Kaushik', 'Khandhar', 'kaushikkhandhar@gmail.com', '123', '9879879879', 'dentist.png', '', '', 'candidate', '01/15/2019', 1, 'Visakhapatnam, Chennai, Vijayawada, ', 'Male', 'Chennai', 'kaushik final.pdf', '', '', '', '', '100%', '2019-01-05 05:21:37'),
(2, 'Mitesh', 'Patel', 'amar@gmail.com', '123', '7897897899', '', 'CEO', 'Amardental Clinic', 'company', '', 3, 'Visakhapatnam, Chennai, Vijayawada, ', '', 'Visakhapatnam', '', 'https://www.crewultima.com/', '32', 'asdfasasdf\r\nsdfasdf\r\nasdf\r\nasdf\r\nasd\r\nf\r\nas\r\nd\r\naf', 'easymoney.png', '100%', '2019-01-05 10:35:54'),
(3, 'Beed', 'Kotla', 'beedk@gmail.com', '123', '9879879879', '', 'HR', 'Beedk Info', 'company', '', 5, 'Visakhapatnam, Chennai, Vijayawada, ', '', 'Quilon', '', 'https://www.beedk.com/', '25', 'Logo Rank is an AI system that understands logo design. It\'s trained on a million+ logo images to give you tips and ideas. It can also be used to see if your designer took inspiration from stock icons. ', 'beats.png', '100%', '2019-01-08 08:01:33'),
(4, 'bhavik', 'tanna', 'bhavik@gmail.com', '123', '4567899879', 'sun.gif', '', '', 'candidate', '01/08/2019', 5, 'Ahmedabad, Rajkot, ', 'Male', 'Puducherry', 'Kachra-Kaka.jpg', '', '', '', '', '100%', '2019-01-09 13:28:31'),
(5, 'Uttam', 'Jotaniya', 'uttam@gmail.com', '123', '789787899', 'logo2.png', '', '', 'candidate', '01/07/2019', 2, 'Ahmedabad, Hyderabad, Indore, ', 'Male', 'Hyderabad', 'die-blocks.pdf', '', '', '', '', '100%', '2019-01-09 14:07:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `registermember`
--
ALTER TABLE `registermember`
  ADD PRIMARY KEY (`reid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registermember`
--
ALTER TABLE `registermember`
  MODIFY `reid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
