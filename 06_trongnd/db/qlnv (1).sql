-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2018 at 11:38 AM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.2.7-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlnv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leader`
--

CREATE TABLE `tbl_leader` (
  `pk_leader_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `fk_team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teams`
--

CREATE TABLE `tbl_teams` (
  `pk_teams_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `leader_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_teams`
--

INSERT INTO `tbl_teams` (`pk_teams_id`, `name`, `description`, `logo`, `leader_id`) VALUES
(31, 'admin', '333', '153440266615344026668.png', 3),
(32, '333', '4', '15344026881534402688ez.jpg', 111),
(33, 'abc', '123', '1534497846aaa.png', 1121),
(34, 'abc', '123', '122131', 1121),
(35, 'trongnd', '123', '122131', 1121);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `pk_user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_personal` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `date_of_birth` date NOT NULL,
  `identify_id` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `current_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `graduate_from` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `bank_account_number` varchar(255) NOT NULL,
  `hobby` text NOT NULL,
  `family_description` text NOT NULL,
  `language_skills` text NOT NULL,
  `leave_days` float NOT NULL,
  `role_id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`pk_user_id`, `name`, `email`, `email_personal`, `password`, `remember_token`, `image`, `gender`, `date_of_birth`, `identify_id`, `phone_number`, `current_address`, `permanent_address`, `graduate_from`, `salary`, `bank_account_number`, `hobby`, `family_description`, `language_skills`, `leave_days`, `role_id`, `team_id`, `status`) VALUES
(6, 'trongnd', 'trong09796@gmail.com', 'trong09796@gmail.com', '8b1bf02c110183cf773de13037f5207b', NULL, '1534497868cakoi.jpg', 1, '2018-08-05', '1', 1, '1', '1', '11', 1, '1', '1', '1', '1', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `11111` int(11) NOT NULL,
  `112222` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_leader`
--
ALTER TABLE `tbl_leader`
  ADD PRIMARY KEY (`pk_leader_id`);

--
-- Indexes for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  ADD PRIMARY KEY (`pk_teams_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`pk_user_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`11111`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_leader`
--
ALTER TABLE `tbl_leader`
  MODIFY `pk_leader_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  MODIFY `pk_teams_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `pk_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `11111` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
