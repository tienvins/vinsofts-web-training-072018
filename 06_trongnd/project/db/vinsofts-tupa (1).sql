-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2018 at 11:41 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.2.9-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinsofts-tupa`
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

--
-- Dumping data for table `tbl_leader`
--

INSERT INTO `tbl_leader` (`pk_leader_id`, `fk_user_id`, `fk_team_id`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teams`
--

CREATE TABLE `tbl_teams` (
  `pk_team_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_description` text NOT NULL,
  `c_logo` varchar(255) DEFAULT NULL,
  `leader_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_teams`
--

INSERT INTO `tbl_teams` (`pk_team_id`, `c_name`, `c_description`, `c_logo`, `leader_id`) VALUES
(1, 'Phòng Nhân Sự', 'Đây là phòng Nhân sự', '15343268941534326894opacity.png', '1'),
(2, 'Phòng Nhân Viên', 'Đây là phòng Nhân Viên', '1534347734nancy18.jpg', '1'),
(3, 'Phòng Bảo Vệ', 'Đây là phòng Bảo Vệ', '1534347782s-l300.jpg', '2'),
(4, 'Phòng Kế Toán', 'Đây là phòng Kế Toán', '1534347815download.jpeg', '2'),
(5, 'Phòng Giám Đốcaaaaa', 'Đây là phòng Giám Đốc', '1534347416like.png', '1'),
(17, 'a', 'a', '1534413926a1.png', '3'),
(18, 'aaabbb', 'bbbaaa', '1534413960opacity.png', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `pk_user_id` int(11) NOT NULL,
  `c_name` varchar(255) DEFAULT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_email_personal` varchar(255) NOT NULL,
  `c_password` varchar(255) NOT NULL,
  `c_remember_token` varchar(100) DEFAULT NULL,
  `c_img` varchar(255) DEFAULT NULL,
  `c_gender` tinyint(4) NOT NULL,
  `c_date_of_birth` date NOT NULL,
  `c_identify_id` varchar(255) DEFAULT NULL,
  `c_phone_number` int(11) NOT NULL,
  `c_current_address` varchar(255) DEFAULT NULL,
  `c_permanent_address` varchar(255) DEFAULT NULL,
  `c_graduate_from` int(255) DEFAULT NULL,
  `c_salary` int(11) NOT NULL,
  `c_bank_account_number` varchar(255) DEFAULT NULL,
  `c_hobby` text,
  `c_family_description` text,
  `c_language_skills` text,
  `c_leave_days` float NOT NULL,
  `role_id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `c_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`pk_user_id`, `c_name`, `c_email`, `c_email_personal`, `c_password`, `c_remember_token`, `c_img`, `c_gender`, `c_date_of_birth`, `c_identify_id`, `c_phone_number`, `c_current_address`, `c_permanent_address`, `c_graduate_from`, `c_salary`, `c_bank_account_number`, `c_hobby`, `c_family_description`, `c_language_skills`, `c_leave_days`, `role_id`, `team_id`, `c_status`) VALUES
(1, 'Phạm Anh B', 'b@mail.com', 'b@mail.com', '123', '1', '1534385683s-l300.jpg', 1, '2018-08-11', '', 90, '', '', 1, 13000000, '', '', '', '', 1, 1, 1, 1),
(2, 'Phạm Anh A', 'a@mail.com', 'a@mail.com', '202cb962ac59075b964b07152d234b70', '', '1534385705nancy18.jpg', 1, '2018-08-17', '', 12345678, '', '', 123456, 9000000, '', '', '', '', 3, 1, 1, 1),
(3, 'Phạm Anh C', 'c@mail.com', 'c@mail.com', '123', '', '1534385761opacity.png', 3, '2018-07-30', '', 33333333, '', '', 3, 4500000, '', '', '', '', 3, 3, 3, 3),
(8, 'Phạm Anh E', 'e@mail.com', 'e@mail.com', '202cb962ac59075b964b07152d234b70', '1', '1534413597download.jpeg', 1, '2018-08-17', '1', 111111, '1', '1', 11, 1111111111, '', '1', '1', '1', 11, 1, 1, 1),
(18, 'aaaaaa', 'asdasd@asd.com', 'asdasd@asd.com', '123', NULL, NULL, 1, '2018-11-11', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 1, 1, 1),
(19, 'aaaaaa', 'asdasd@asd.com', 'asdasd@asd.com', '123', NULL, NULL, 1, '2018-11-11', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 1, 1, 1),
(20, 'aaaaaa', 'asdasd@asd.com', 'asdasd@asd.com', '123', NULL, NULL, 1, '2018-11-11', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 1, 1, 1),
(21, '', 'asdasd@asd.com', 'asdasd@asd.com', '123', NULL, NULL, 1, '2018-11-11', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 1, 1, 1),
(22, 'w1w1', 'w@mail.com', 'w@mail.com', '202cb962ac59075b964b07152d234b70', '1', '15347828641534782864', 1, '2018-08-11', '1', 1, '1', '1', 1, 1, '', '1', '1', '1', 1, 1, 5, 1);

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
  ADD PRIMARY KEY (`pk_team_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`pk_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_leader`
--
ALTER TABLE `tbl_leader`
  MODIFY `pk_leader_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  MODIFY `pk_team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `pk_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
