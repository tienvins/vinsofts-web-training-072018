-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 20, 2018 lúc 05:30 AM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `employees`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'admin1', '123456', 'Admin 1'),
(2, 'admin2', '123456', 'Admin 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `leader_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `teams`
--

INSERT INTO `teams` (`id`, `name`, `description`, `logo`, `leader_id`) VALUES
(5, 'Team JAV', 'Lap trinh JAV', 'public/upload/teams/image_38273670_2055850221333065_5001678132760018944_n_1534734989.jpg', 44),
(6, 'Team Adroid', 'Lap trinh app', 'public/upload/teams/logo_29243837_1963605547224200_1914047889085038592_n_1534735614.png', 49);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_personal` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_personal`, `password`, `remember_token`, `image`, `gender`, `date_of_birth`, `identify_id`, `phone_number`, `current_address`, `permanent_address`, `graduate_from`, `salary`, `bank_account_number`, `hobby`, `family_description`, `language_skills`, `leave_days`, `role_id`, `team_id`, `status`) VALUES
(44, 'Do Van Kien2', 'kiendo5695@gmail.com', 'admin@gmail.com', '1', NULL, 'public/upload/users/image_22528486_1302631066550466_1236664192050846970_n_1534735473.jpg', 1, '2018-08-04', '11', 978416602, 'ha noi', 'ha noi', 'HAUI', 1, '111111111111111111', 'abc', 'xyz', 'vietnamese', 4, 111, 6, 1),
(49, 'Do Van Kien1', 'dohuongptit@gmail.com', 'admin1@gmail.com', '123456', NULL, 'public/upload/users/image_21105527_813592732145060_5113765853883085787_n_1534735438.jpg', 1, '2018-08-10', '123456789', 978416602, 'ha noi', 'Ha noi', 'HAUI', 100000000, '12456789', 'abc', 'xyz', 'vietnamese', 4, 1, 6, 1),
(50, 'Do Van Kien3', 'dohuongptit@gmail.com', 'admin1@gmail.com', '3', NULL, 'public/upload/users/image_23364923_1142138875922545_2044594756_n_1534735479.jpg', 1, '2018-08-11', '123456789', 978416602, 'ha noi', 'Ha noi', 'HAUI', 100000000, '12456789', 'abc', 'xyz', 'vietnamese', 4, 1, 6, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
