-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 05:19 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayanko`
--

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `media` varchar(500) NOT NULL,
  `icon` varchar(256) NOT NULL,
  `host` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `notif_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_hidden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ume_friends`
--

CREATE TABLE `ume_friends` (
  `id` int(11) NOT NULL,
  `host_id` int(11) NOT NULL COMMENT 'The one whos requesting for friend request',
  `friend_id` int(11) NOT NULL COMMENT 'the one who needs to accept the friend request',
  `status` varchar(255) NOT NULL COMMENT 'status of friendship: ex: 0- for pending and 1 for accepted',
  `request_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ume_post`
--

CREATE TABLE `ume_post` (
  `id` int(11) NOT NULL,
  `host` varchar(222) NOT NULL COMMENT 'Email of the one who posted.',
  `description` text NOT NULL COMMENT 'Description of post mateerial',
  `type` varchar(222) NOT NULL COMMENT 'Type of post. ex Video, Image, Album',
  `media` varchar(500) NOT NULL COMMENT 'It could be a vide, image, album or link attachments',
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `img_resolution` varchar(222) NOT NULL,
  `original_filename` varchar(1000) NOT NULL,
  `shared_by` varchar(222) NOT NULL COMMENT 'The user of ume who attempted to share this post',
  `shared_by_desc` varchar(5000) NOT NULL COMMENT 'The description of user who shared this post',
  `shared_by_privacylevel` int(11) NOT NULL COMMENT '1- public, 2 - friends only, 3 - friends of friends',
  `shared_by_origin` varchar(222) NOT NULL,
  `product_code` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ume_post_products`
--

CREATE TABLE `ume_post_products` (
  `id` int(11) NOT NULL,
  `prdct_media_files` varchar(5000) NOT NULL,
  `prdct_specification` varchar(5000) NOT NULL,
  `prdct_condition` varchar(222) NOT NULL,
  `prdct_availability` varchar(200) NOT NULL,
  `prdct_name` varchar(5000) NOT NULL,
  `prdct_category` varchar(222) NOT NULL,
  `prdct_tags` varchar(222) NOT NULL,
  `produccode` varchar(222) NOT NULL,
  `prdct_host` varchar(222) NOT NULL,
  `prdct_price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ume_post_reports`
--

CREATE TABLE `ume_post_reports` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `reason` varchar(5000) NOT NULL,
  `report_host` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ume_reactions`
--

CREATE TABLE `ume_reactions` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `host` int(11) NOT NULL,
  `react_type` varchar(222) NOT NULL,
  `react_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ume_remarks`
--

CREATE TABLE `ume_remarks` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL COMMENT 'The post id on ume_post table',
  `host_id` int(11) NOT NULL COMMENT 'The one whos commenting',
  `description` varchar(5000) NOT NULL COMMENT 'Remarks text written by host to the post',
  `media` varchar(1000) NOT NULL COMMENT 'host attached media file(s) in the remarks',
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ume_user_secondaryinfo`
--

CREATE TABLE `ume_user_secondaryinfo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `motto` varchar(1000) NOT NULL,
  `contact` varchar(222) NOT NULL,
  `location` varchar(500) NOT NULL,
  `education` varchar(5000) NOT NULL,
  `email_contact` varchar(200) NOT NULL,
  `job` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL COMMENT 'user email as a unique identifier',
  `password` varchar(222) NOT NULL COMMENT 'Users password encoded to MD5',
  `date_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Date and time of first user registration to bayanko PH',
  `fname` varchar(256) NOT NULL COMMENT 'First Name',
  `mname` varchar(256) NOT NULL COMMENT 'Middle Name',
  `lname` varchar(256) NOT NULL COMMENT 'Last Name',
  `pic_profile` varchar(1000) NOT NULL,
  `pic_coverphoto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ume_friends`
--
ALTER TABLE `ume_friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ume_post`
--
ALTER TABLE `ume_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ume_post_products`
--
ALTER TABLE `ume_post_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ume_post_reports`
--
ALTER TABLE `ume_post_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ume_reactions`
--
ALTER TABLE `ume_reactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ume_remarks`
--
ALTER TABLE `ume_remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ume_user_secondaryinfo`
--
ALTER TABLE `ume_user_secondaryinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ume_friends`
--
ALTER TABLE `ume_friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ume_post`
--
ALTER TABLE `ume_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ume_post_products`
--
ALTER TABLE `ume_post_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ume_post_reports`
--
ALTER TABLE `ume_post_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ume_reactions`
--
ALTER TABLE `ume_reactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ume_remarks`
--
ALTER TABLE `ume_remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ume_user_secondaryinfo`
--
ALTER TABLE `ume_user_secondaryinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
