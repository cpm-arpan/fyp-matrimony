-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 11:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shubhamangal1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `dob` text NOT NULL,
  `contact` text NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `created_on` date NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `fname`, `lname`, `gender`, `dob`, `contact`, `address`, `image`, `created_on`, `group_id`) VALUES
(1, 'admin', 'mayuri.infospace@gmail.com', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'admin', 'admina', 'Female', '1992-05-28', '9000000000', 'Nashik', 'young-woman-avatar-facial-features-stylish-userpic-flat-cartoon-design-elegant-lady-blue-jacket-close-up-portrait-80474088.jpg', '2021-05-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `father_work` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `mother_work` varchar(100) NOT NULL,
  `family_member` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `height` varchar(100) NOT NULL,
  `body_color` varchar(100) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `occupasion` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `m_stat` varchar(50) NOT NULL,
  `smoking` varchar(50) NOT NULL,
  `physical_disability` varchar(50) NOT NULL,
  `abroad_or_not` varchar(50) NOT NULL,
  `cur_address` varchar(500) NOT NULL,
  `per_address` varchar(200) NOT NULL,
  `jsc` varchar(20) NOT NULL,
  `jsc_board` varchar(20) NOT NULL,
  `jsc_year` varchar(20) NOT NULL,
  `ssc` varchar(20) NOT NULL,
  `ssc_board` varchar(20) NOT NULL,
  `ssc_year` varchar(20) NOT NULL,
  `hsc` varchar(20) NOT NULL,
  `hsc_board` varchar(20) NOT NULL,
  `hsc_year` varchar(20) NOT NULL,
  `bsc` varchar(20) NOT NULL,
  `bsc_year` varchar(20) NOT NULL,
  `msc` varchar(20) NOT NULL,
  `msc_year` varchar(20) NOT NULL,
  `last_ins` varchar(100) NOT NULL,
  `nid` varchar(25) NOT NULL,
  `about_me` varchar(1000) NOT NULL,
  `about_her` varchar(110) NOT NULL,
  `biodata_soft` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `user`, `name`, `father_name`, `father_work`, `mother_name`, `mother_work`, `family_member`, `bday`, `age`, `gender`, `weight`, `height`, `body_color`, `blood_group`, `religion`, `occupasion`, `mobile`, `email`, `m_stat`, `smoking`, `physical_disability`, `abroad_or_not`, `cur_address`, `per_address`, `jsc`, `jsc_board`, `jsc_year`, `ssc`, `ssc_board`, `ssc_year`, `hsc`, `hsc_board`, `hsc_year`, `bsc`, `bsc_year`, `msc`, `msc_year`, `last_ins`, `nid`, `about_me`, `about_her`, `biodata_soft`) VALUES
(1, 'raghav@gmail.com', 'Raghav Shivaji Bhosale', 'Shivaji', 'Teacher', 'Sujata', 'Housewife', '1', '1997-02-12', 28, 'Male', '68', '5 feet 6 inch', 'Fair', 'AB Positiv', 'Hindu', 'Male', '9090909090', 'raghav@gmail.com', 'Unmarried', 'No', 'No', 'India', 'Khardi,Pune', 'Khardi,Pune', 'undefined', 'undefined', 'undefined', 'SSC', 'mah', '2000', 'HSC', 'mah', '2012', 'BCom', '2015', 'MBA', '2017', 'MBA in Marketing', '123456789', 'I am genuine person who is looking for better life partner.', 'I am very friendly in nature', '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `com_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `commenter` varchar(50) NOT NULL,
  `poster` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `seen` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dp`
--

CREATE TABLE `dp` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `dp` varchar(60) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dp`
--

INSERT INTO `dp` (`id`, `user`, `dp`, `num`) VALUES
(1, 'sushma@gmail.com', 'sushma@gmail.com_dp0.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `flag`
--

CREATE TABLE `flag` (
  `id` int(11) NOT NULL,
  `fl` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `following`
--

CREATE TABLE `following` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `goppo`
--

CREATE TABLE `goppo` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manage_website`
--

CREATE TABLE `manage_website` (
  `id` int(11) NOT NULL,
  `title` varchar(600) NOT NULL,
  `short_title` varchar(600) NOT NULL,
  `logo` text NOT NULL,
  `footer` text NOT NULL,
  `currency_code` varchar(600) NOT NULL,
  `currency_symbol` varchar(600) NOT NULL,
  `login_logo` text NOT NULL,
  `invoice_logo` text NOT NULL,
  `background_login_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_website`
--

INSERT INTO `manage_website` (`id`, `title`, `short_title`, `logo`, `footer`, `currency_code`, `currency_symbol`, `login_logo`, `invoice_logo`, `background_login_image`) VALUES
(1, 'SoulMate by Mayuri K.', 'SoulMate by Mayuri K.', 'logo (3).png', 'SoulMate by Mayuri K.', 'INR', 'â‚¹', 'logo (3).png', 'logo (3).png', 'banner2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(400) NOT NULL,
  `currentdate` date DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `member_id`, `fullname`, `gender`, `email`, `password`, `currentdate`, `status`) VALUES
(1, 1, 'Saurabh', 'Male', 'saurabh@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '2021-08-05', 0),
(2, 2, 'Raghav Bhosale', 'Male', 'raghav@gmail.com', '690d98f0872d00d6854f05e54d58d4218d95f59dc09bb8226025c5a7723b19c4', '2021-12-06', 0),
(3, 3, 'Sushma Ahire', 'Female', 'sushma@gmail.com', '3242365fc82dd5347e86218e0eaa3eb00d01c4d17d95e0d94104e970adcec565', '2022-01-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `PaymentMethod` varchar(150) NOT NULL,
  `currentdate` date DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `description` varchar(150) NOT NULL,
  `days` int(30) NOT NULL,
  `approvestatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE `pm` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `seen` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm`
--

INSERT INTO `pm` (`id`, `sender`, `receiver`, `message`, `seen`, `timestamp`) VALUES
(1, 'raghav@gmail.com', 'saurabh@gmail.com', 'Hi Saurabh', 0, '2021-12-06 17:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `pm_notification`
--

CREATE TABLE `pm_notification` (
  `message_id` int(11) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `seen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipshoi`
--

CREATE TABLE `tipshoi` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipshoi`
--

INSERT INTO `tipshoi` (`id`, `name`, `gender`, `mail`) VALUES
(1, 'Saurabh', 'Male', 'saurabh@gmail.com'),
(2, 'Raghav Shivaji Bhosale', 'Male', 'raghav@gmail.com'),
(3, 'Sushma Ahire', 'Female', 'sushma@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `dp`
--
ALTER TABLE `dp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flag`
--
ALTER TABLE `flag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `following`
--
ALTER TABLE `following`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goppo`
--
ALTER TABLE `goppo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pm`
--
ALTER TABLE `pm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pm_notification`
--
ALTER TABLE `pm_notification`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipshoi`
--
ALTER TABLE `tipshoi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dp`
--
ALTER TABLE `dp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `following`
--
ALTER TABLE `following`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goppo`
--
ALTER TABLE `goppo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pm`
--
ALTER TABLE `pm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipshoi`
--
ALTER TABLE `tipshoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
