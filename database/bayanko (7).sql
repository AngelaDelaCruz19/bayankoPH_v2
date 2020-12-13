-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 09:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `description`, `media`, `icon`, `host`, `status`, `notif_datetime`, `is_hidden`) VALUES
(1, 'friend_request', '', '<i class=\"fas fa-user-friends\"></i>', '1', 1, '2020-12-04 00:59:56', 1),
(2, 'April De Leon Vargas commented on your post: akakas', '', '<i class=\"fas fa-comment-alt\"></i>', '1', 1, '2020-12-04 00:59:55', 0),
(3, 'virmil  talattad has accepted your a friend request.', '', '<i class=\"fas fa-user-friends\"></i>', '2', 1, '2020-12-04 02:30:49', 0),
(4, 'virmil  talattad commented on your post: sarap mag share ng possssttt', '', '<i class=\"fas fa-comment-alt\"></i>', '2', 1, '2020-12-04 02:30:49', 0),
(5, 'friend_request', '', '<i class=\"fas fa-user-friends\"></i>', '3', 1, '2020-12-04 02:42:05', 1),
(6, 'Regina Grace  Sillacos has accepted your a friend request.', '', '<i class=\"fas fa-user-friends\"></i>', '2', 1, '2020-12-04 02:44:04', 0),
(7, 'friend_request', '', '<i class=\"fas fa-user-friends\"></i>', '1', 1, '2020-12-09 12:57:12', 1),
(8, 'virmil  talattad has accepted your a friend request.', '', '<i class=\"fas fa-user-friends\"></i>', '5', 0, '2020-12-09 12:57:31', 0);

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

--
-- Dumping data for table `ume_friends`
--

INSERT INTO `ume_friends` (`id`, `host_id`, `friend_id`, `status`, `request_timestamp`) VALUES
(1, 2, 1, '2', '2020-12-04 00:59:58'),
(2, 2, 3, '2', '2020-12-04 02:42:06'),
(3, 5, 1, '2', '2020-12-09 12:57:31');

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

--
-- Dumping data for table `ume_post`
--

INSERT INTO `ume_post` (`id`, `host`, `description`, `type`, `media`, `date_time`, `img_resolution`, `original_filename`, `shared_by`, `shared_by_desc`, `shared_by_privacylevel`, `shared_by_origin`, `product_code`) VALUES
(1, '1', '', '3', '', '2020-12-04 07:28:47', '', '', '', '', 0, '', 'PROD_5fc9123f355ee_1'),
(2, '1', '', '3', '', '2020-12-04 07:37:25', '', '', '', '', 0, '', 'PROD_5fc91445d1068_1'),
(3, '2', 'love', '0', '', '2020-12-03 17:52:16', '', '', '', '', 0, '', ''),
(4, '1', '', '3', '', '2020-12-04 16:00:58', '', '', '1', 'BILI NA PLS!', 1, '1', 'PROD_5fc9123f355ee_1'),
(5, '2', 'love', '0', '', '2020-12-04 16:03:25', '', '', '1', 'OYOYOYOYO', 1, '3', ''),
(6, '1', '', '3', '', '2020-12-04 16:06:40', '', '', '', '', 0, '', 'PROD_5fc98ba0aa19a_1'),
(7, '1', 'mahal ko', '0', 'http://beta.bayanko.ph/uploads/1607044093_1.jpg', '2020-12-04 01:08:12', '1920x1080', 'WIN_20201009_15_31_12_Pro.jpg', '', '', 0, '', ''),
(9, '1', '', '3', '', '2020-12-04 18:34:43', '', '', '2', '', 1, '6', 'PROD_5fc98ba0aa19a_1'),
(10, '3', '', '0', 'http://beta.bayanko.ph/uploads/1607053113_3.jpg', '2020-12-04 03:38:33', '410x245', 'image.jpg', '', '', 0, '', ''),
(11, '2', 'good day!\r\n', '0', '', '2020-12-04 03:40:04', '', '', '', '', 0, '', ''),
(12, '1', '', '2', 'http://beta.bayanko.ph/uploads/1607069781_1.zip', '2020-12-04 08:16:20', '', 'archive.zip', '', '', 0, '', ''),
(13, '5', '', '0', 'http://beta.bayanko.ph/uploads/1607157170_5.jpeg', '2020-12-05 08:32:49', '612x750', 'pexels-photo-2787341.jpeg', '', '', 0, '', ''),
(14, '5', '', '0', 'http://beta.bayanko.ph/uploads/1607157170_5.jpeg', '2020-12-05 23:33:19', '612x750', 'pexels-photo-2787341.jpeg', '5', '', 1, '13', ''),
(15, '5', '', '3', '', '2020-12-05 23:34:27', '', '', '', '', 0, '', 'PROD_5fcb4613eb7e8_5'),
(17, '1', '', '3', '', '2020-12-09 11:26:44', '', '', '1', '', 1, '6', 'PROD_5fc98ba0aa19a_1'),
(18, '1', '', '3', '', '2020-12-09 11:47:38', '', '', '1', 'as', 1, '6', 'PROD_5fc98ba0aa19a_1'),
(19, '1', 'angelA', '0', '', '2020-12-09 14:25:53', '', '', '', '', 0, '', ''),
(20, '1', 'angelA', '0', '', '2020-12-09 14:26:58', '', '', '1', 'aaa', 1, '19', ''),
(21, '1', 'i want this', '0', 'http://192.168.1.17/bayankoPH/uploads/1607585215_1.jpg', '2020-12-10 07:26:54', '640x640', '430e8b3d3aaebcb6044783bf126791fa.jpg', '', '', 0, '', ''),
(22, '1', '', '3', '', '2020-12-11 08:08:38', '', '', '', '', 0, '', 'PROD_5fd32906c6d17_1'),
(23, '1', '', '3', '', '2020-12-11 08:31:01', '', '', '', '', 0, '', 'PROD_5fd32e4500247_1'),
(24, '1', '', '3', '', '2020-12-12 04:57:44', '', '', '', '', 0, '', 'PROD_5fd44dc8d0385_1');

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

--
-- Dumping data for table `ume_post_products`
--

INSERT INTO `ume_post_products` (`id`, `prdct_media_files`, `prdct_specification`, `prdct_condition`, `prdct_availability`, `prdct_name`, `prdct_category`, `prdct_tags`, `produccode`, `prdct_host`, `prdct_price`) VALUES
(1, 'http://beta.bayanko.ph/uploads/16070129270_1.jpg,http://beta.bayanko.ph/uploads/16070129271_1.jpg,', 'Screen Size : 6.5 inches\r\nType : IPS LCD, 90Hz, 480 nits (typ)\r\nRAM : 4GB\r\nROM : 128GB\r\nOS : Android 10, Realme UI\r\nSIM : Dual Sim (Nano-Sim, Dual Stand-by)\r\nBattery : Li-Po 4300mAh, non-removable\r\nQuad : 64 MP, f/1.8, 26mm (wide), 1/1.72&quot;, 0.8&micro;m, PDAF\r\nSingle : 16 MP, f/2.0, 26mm (wide), 1/3.06&quot;, 1.0&micro;m\r\nFeatures : LED Flash, HDR, panorama\r\nCharging : Fast Charging 30W\r\nChipset : Mediatek MT6785 Helio G90T\r\nResolution : 1080 x 2400 pixels\r\nCPU : Octa-core (2x2.05 GHz Cortex-A76 &amp; 6x2.0 GHz Cortex-A55)\r\nGPU : Mali-G76 MC4', 'Used - But like new', 'Single Item (Single Item)', 'REALME 6 6.5&quot; IPS LCD 4GB RAM 128GB ROM 64MP Quad Camera Octa Core Fast Charging 30W 4300mAh Battery', 'Electronic Devices', '', 'PROD_5fc9123f355ee_1', '1', '23445'),
(2, 'http://beta.bayanko.ph/uploads/16070134460_1.jpg,http://beta.bayanko.ph/uploads/16070134461_1.jpg,http://beta.bayanko.ph/uploads/16070134462_1.jpg,', 'Material: Mahogany Ply\r\nCut away shape\r\nHigh quality\r\n19 frets', 'Used - Good', 'In Stock (Multiple Items)', 'RJ Masa Acoustic - Masa (Slim Cutaway) Assorted Color', 'Electronic Devices', '', 'PROD_5fc91445d1068_1', '1', '35666'),
(3, 'http://beta.bayanko.ph/uploads/16070440010_1.jpg,http://beta.bayanko.ph/uploads/16070440011_1.jpg,http://beta.bayanko.ph/uploads/16070440012_1.jpg,http://beta.bayanko.ph/uploads/16070440013_1.jpg,', 'Quest 2 requires your Facebook account to login, making it easy to meet up with friends in VR and discover communities around the world. You can explore as yourself or pick a new name by creating a unique VR profile.', 'New', 'In Stock (Multiple Items)', 'Oculus Quest 2', 'Electronic Devices', '', 'PROD_5fc98ba0aa19a_1', '1', '50000'),
(4, 'http://beta.bayanko.ph/uploads/16071572680_5.jpeg,http://beta.bayanko.ph/uploads/16071572681_5.jpeg,http://beta.bayanko.ph/uploads/16071572682_5.jpeg,', 'fwefwef', 'New', 'Single Item (Single Item)', 'efwefwe', 'Electronic Devices', '', 'PROD_5fcb4613eb7e8_5', '5', '2222'),
(5, 'http://localhost/bayankoPH/uploads/16076741190_1.png,http://localhost/bayankoPH/uploads/16076741191_1.png,http://localhost/bayankoPH/uploads/16076741192_1.png,http://localhost/bayankoPH/uploads/16076741193_1.png,', 'aaa', 'Used - But like new', 'In Stock (Multiple Items)', 'aas', 'Electronic Devices', '', 'PROD_5fd32906c6d17_1', '1', '1000000'),
(6, 'http://localhost/bayankoPH/uploads/16076754610_1.png,', 'aas', 'New', 'Single Item (Single Item)', 'asd', 'Electronic Devices', '', 'PROD_5fd32e4500247_1', '1', '12212'),
(7, 'http://localhost/bayankoPH/uploads/16077490650_1.jpg,', 'asd', 'New', 'Single Item (Single Item)', 'asd', 'Electronic Devices', '', 'PROD_5fd44dc8d0385_1', '1', '12');

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

--
-- Dumping data for table `ume_reactions`
--

INSERT INTO `ume_reactions` (`id`, `post_id`, `host`, `react_type`, `react_time`) VALUES
(1, 4, 1, 'angry', '2020-12-04 16:02:31'),
(2, 6, 2, 'love', '2020-12-04 17:41:33'),
(3, 4, 2, 'angry', '2020-12-04 17:42:21'),
(4, 3, 3, 'haha', '2020-12-04 17:43:14'),
(5, 6, 1, 'love', '2020-12-04 23:15:56'),
(6, 13, 5, 'sad', '2020-12-05 23:33:03'),
(8, 16, 6, 'love', '2020-12-06 14:50:40'),
(9, 7, 2, 'haha', '2020-12-08 20:54:36'),
(21, 18, 1, 'angry', '2020-12-09 12:49:52'),
(22, 19, 1, 'angry', '2020-12-09 14:26:00'),
(23, 20, 1, 'haha', '2020-12-09 14:57:09'),
(24, 21, 1, 'angry', '2020-12-10 12:41:56');

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

--
-- Dumping data for table `ume_remarks`
--

INSERT INTO `ume_remarks` (`id`, `post_id`, `host_id`, `description`, `media`, `date_time`) VALUES
(1, 2, 2, 'akakas', '', '2020-12-04 08:33:41'),
(2, 3, 2, 'lololololo', '', '2020-12-04 08:52:30'),
(3, 5, 1, 'sarap mag share ng possssttt', '', '2020-12-04 16:03:38'),
(4, 6, 1, 'refgrefef', '', '2020-12-04 23:16:04'),
(5, 14, 5, '4rtew4rtfewr', '', '2020-12-05 23:33:29'),
(6, 18, 1, 'aSasAS', '', '2020-12-09 12:11:37'),
(7, 18, 1, 'asd', '', '2020-12-09 12:41:44'),
(8, 19, 1, 'panget', '', '2020-12-09 14:26:12'),
(9, 20, 1, 'ghfdhjgf', '', '2020-12-09 14:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `ume_user_secondaryinfo`
--

CREATE TABLE `ume_user_secondaryinfo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wordsstory` varchar(1000) NOT NULL,
  `contact` varchar(222) NOT NULL,
  `location` varchar(500) NOT NULL,
  `education` varchar(5000) NOT NULL,
  `email_contact` varchar(200) NOT NULL,
  `job` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ume_user_secondaryinfo`
--

INSERT INTO `ume_user_secondaryinfo` (`id`, `user_id`, `wordsstory`, `contact`, `location`, `education`, `email_contact`, `job`) VALUES
(1, 2, 'I\'m not born to be strong\r\n\r\n(Phil 4:13)', '09472222222', 'sa bahay', 'tapos na sa kalokohan', 'kinili@gmail.com', 'taga gawa ng lata'),
(2, 3, 'FAILURE IS A LEARNING EXPERIENCE', '', 'Paranaque City', 'B.S PSYCHOLOGY', '', 'Business Analyst @16 Years Web Technologies Inc.'),
(3, 4, '', '', '', '', '', ''),
(4, 6, 'If life is gold, Isangla mo. EZ money', '0999999999', 'sa puso mo', 'kinder graduate', 'aid@gmail.com', 'Krusty Krab'),
(5, 1, 'Finding you was like coming home', 'asdas', 'asdasdasd', 'asdasd', 'virmil@gmail.com', 'asdasda');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `date_reg`, `fname`, `mname`, `lname`, `pic_profile`, `pic_coverphoto`) VALUES
(1, 'virmil@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', '2020-12-13 03:30:15', 'virmil', '', 'talattad', 'http://localhost/bayankoPH/profile_uploads/1607735264_1.jpg', 'http://localhost/bayankoPH/uploads/cover/16078302150_1.png,http://localhost/bayankoPH/uploads/cover/16078302151_1.png,'),
(2, 'advargas384@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2020-12-04 03:24:22', 'April', 'De Leon', 'Vargas', 'http://beta.bayanko.ph/profile_uploads/1607015854_2.jpeg', 'http://beta.bayanko.ph/cover_uploads/1607052263_2.jpg'),
(3, 'yahsillacos@bayanko.ph', '81dc9bdb52d04dc20036dbd8313ed055', '2020-12-04 02:44:41', 'Regina Grace', '', 'Sillacos', 'http://beta.bayanko.ph/profile_uploads/1607049846_3.jpg', 'http://beta.bayanko.ph/cover_uploads/1607049882_3.jpg'),
(4, 'miroare59@gmail.com', '9ce1360ad4b76c6c9657a11ee79e4aa6', '2020-12-05 03:48:29', 'dave', 'miro', 'are', 'http://beta.bayanko.ph/image_placeholders/profile.png', 'http://beta.bayanko.ph/image_placeholders/cover.png'),
(5, 'adrian@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', '2020-12-05 23:32:16', 'Adrian', '', 'Monsalve', 'http://beta.bayanko.ph/image_placeholders/profile.png', 'http://beta.bayanko.ph/image_placeholders/cover.png'),
(6, 'test', '098f6bcd4621d373cade4e832627b4f6', '2020-12-06 00:42:09', 'test', 'test', 'test', 'http://beta.bayanko.ph/profile_uploads/1607215287_6.png', 'Sorry, only image files are allowed.Sorry, your file was not uploaded.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ume_friends`
--
ALTER TABLE `ume_friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ume_post`
--
ALTER TABLE `ume_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ume_post_products`
--
ALTER TABLE `ume_post_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ume_post_reports`
--
ALTER TABLE `ume_post_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ume_reactions`
--
ALTER TABLE `ume_reactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ume_remarks`
--
ALTER TABLE `ume_remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ume_user_secondaryinfo`
--
ALTER TABLE `ume_user_secondaryinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
