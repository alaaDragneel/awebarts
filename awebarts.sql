-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2016 at 05:23 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awebarts`
--
CREATE DATABASE IF NOT EXISTS `awebarts` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `awebarts`;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `banner_id` int(11) NOT NULL,
  `banner_name` varchar(255) NOT NULL,
  `banner_url` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`banner_id`, `banner_name`, `banner_url`, `status`, `type`, `Date`, `createdBy`) VALUES
(1, '2014-11-28 12.26.32.jpeg', 'resources/uploads/0', 1, '', '2016-09-23 21:45:15', 'sasuke_alaa'),
(2, '1044_1092643174092349_1756376243938499730_n.jpg', 'resources/uploads/0', 1, '', '2016-09-23 21:45:34', 'sasuke_alaa'),
(3, '2016-09-23-23-56-59_fc90f5d4819cc311c910f59e09d23419f703f7e6.jpeg', 'resources/uploads/2016-09-23-23-56-59_fc90f5d4819cc311c910f59e09d23419f703f7e6.jpeg', 1, '', '2016-09-23 21:56:59', 'sasuke_alaa'),
(4, '2016-09-23-23-57-14_6ab091d9de7cf41915649771c9912815fd629089.jpeg', 'resources/uploads/2016-09-23-23-57-14_6ab091d9de7cf41915649771c9912815fd629089.jpeg', 1, '', '2016-09-23 21:57:14', 'sasuke_alaa'),
(5, '2016-09-23-23-57-14_6ab091d9de7cf41915649771c9912815fd629089.jpeg', 'resources/uploads/2016-09-23-23-57-14_6ab091d9de7cf41915649771c9912815fd629089.jpeg', 1, '', '2016-09-23 21:57:14', 'sasuke_alaa'),
(6, '2016-09-23-23-57-14_6ab091d9de7cf41915649771c9912815fd629089.jpeg', 'resources/uploads/2016-09-23-23-57-14_6ab091d9de7cf41915649771c9912815fd629089.jpeg', 1, '', '2016-09-23 21:57:14', 'sasuke_alaa'),
(7, '2016-09-23-23-58-28_7bceb24ed92a001eb33eabc26768328bbab3c7ab.jpg', 'resources/uploads/2016-09-23-23-58-28_7bceb24ed92a001eb33eabc26768328bbab3c7ab.jpg', 1, '', '2016-09-23 21:58:28', 'sasuke_alaa'),
(8, '2016-09-23-23-58-28_7bceb24ed92a001eb33eabc26768328bbab3c7ab.jpg', 'resources/uploads/2016-09-23-23-58-28_7bceb24ed92a001eb33eabc26768328bbab3c7ab.jpg', 1, '', '2016-09-23 21:58:29', 'sasuke_alaa'),
(9, '2016-09-23-23-58-28_7bceb24ed92a001eb33eabc26768328bbab3c7ab.jpg', 'resources/uploads/2016-09-23-23-58-28_7bceb24ed92a001eb33eabc26768328bbab3c7ab.jpg', 1, '', '2016-09-23 21:58:29', 'sasuke_alaa'),
(10, '2016-09-23-23-59-52_96fd578b30d3ee2488564cd33a2100047cbfb9ad.jpeg', 'resources/uploads/2016-09-23-23-59-52_96fd578b30d3ee2488564cd33a2100047cbfb9ad.jpeg', 1, '', '2016-09-23 21:59:52', 'sasuke_alaa'),
(11, '2016-09-24-00-00-20_fc90f5d4819cc311c910f59e09d23419f703f7e6.jpeg', 'resources/uploads/2016-09-24-00-00-20_fc90f5d4819cc311c910f59e09d23419f703f7e6.jpeg', 1, 'slider', '2016-09-23 22:00:20', 'sasuke_alaa'),
(12, '2016-09-24-00-00-32_2bb70922ab645166835bc497e8e25469d8323c06.jpg', 'resources/uploads/2016-09-24-00-00-32_2bb70922ab645166835bc497e8e25469d8323c06.jpg', 1, 'slider', '2016-09-23 22:00:32', 'sasuke_alaa'),
(13, '2016-09-24-00-00-48_9bddd9156b05b5704839d4777a4872aedd05429d.png', 'resources/uploads/2016-09-24-00-00-48_9bddd9156b05b5704839d4777a4872aedd05429d.png', 1, 'slider', '2016-09-23 22:00:48', 'sasuke_alaa'),
(14, '2016-09-24-00-01-06_d2641178be1d55308f7d0b67b0281edd7302320a.jpg', 'resources/uploads/2016-09-24-00-01-06_d2641178be1d55308f7d0b67b0281edd7302320a.jpg', 1, 'slider', '2016-09-23 22:01:06', 'sasuke_alaa'),
(15, '2016-09-26-04-57-15_96fd578b30d3ee2488564cd33a2100047cbfb9ad.jpeg', 'resources/uploads/2016-09-26-04-57-15_96fd578b30d3ee2488564cd33a2100047cbfb9ad.jpeg', 1, '', '2016-09-26 02:57:15', 'alaa dragneel'),
(16, '2', 'resources/uploads/2', 1, '', '2016-09-26 02:58:43', 'alaa dragneel'),
(17, '2', 'resources/uploads/2', 1, '', '2016-09-26 02:59:01', 'alaa dragneel'),
(18, '2', 'resources/uploads/2', 1, '', '2016-09-26 03:05:42', 'alaa dragneel'),
(19, '2', 'resources/uploads/2', 1, '', '2016-09-26 03:06:34', 'alaa dragneel'),
(20, '2', 'resources/uploads/2', 1, NULL, '2016-09-26 03:07:44', 'alaa dragneel'),
(21, '2', 'resources/uploads/2', 1, NULL, '2016-09-26 03:12:27', 'alaa dragneel'),
(22, '2', 'resources/uploads/2', 1, NULL, '2016-09-26 03:13:00', 'alaa dragneel'),
(23, '2', 'resources/uploads/2', 1, NULL, '2016-09-26 03:13:25', 'alaa dragneel'),
(24, '2', 'resources/uploads/2', 1, NULL, '2016-09-26 03:14:00', 'alaa dragneel'),
(25, '2', 'resources/uploads/2', 1, NULL, '2016-09-26 03:14:20', 'alaa dragneel'),
(26, '2', 'resources/uploads/2', 1, NULL, '2016-09-26 03:14:44', 'alaa dragneel'),
(27, '', 'resources/uploads/2', 1, NULL, '2016-09-26 03:15:05', 'alaa dragneel'),
(28, '', 'resources/uploads/2', 1, NULL, '2016-09-26 03:15:27', 'alaa dragneel'),
(29, '', 'resources/uploads/2', 1, NULL, '2016-09-26 03:15:38', 'alaa dragneel'),
(30, '2016-09-26-05-15-56_96fd578b30d3ee2488564cd33a2100047cbfb9ad.jpeg', 'resources/uploads/2', 1, NULL, '2016-09-26 03:15:56', 'alaa dragneel'),
(31, '2', 'resources/uploads/2', 1, NULL, '2016-09-26 03:16:10', 'alaa dragneel'),
(32, '2016-09-26-05-21-21_96fd578b30d3ee2488564cd33a2100047cbfb9ad.jpeg', 'resources/uploads/2016-09-26-05-21-21_96fd578b30d3ee2488564cd33a2100047cbfb9ad.jpeg', 1, '', '2016-09-26 03:21:21', 'alaa dragneel'),
(33, '2016-09-26-05-21-39_6ab091d9de7cf41915649771c9912815fd629089.jpeg', 'resources/uploads/2016-09-26-05-21-39_6ab091d9de7cf41915649771c9912815fd629089.jpeg', 1, '', '2016-09-26 03:21:39', 'alaa dragneel');

-- --------------------------------------------------------

--
-- Table structure for table `main_settings`
--

CREATE TABLE `main_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(200) NOT NULL,
  `site_url` varchar(200) NOT NULL,
  `site_desc` text NOT NULL,
  `site_email` varchar(100) NOT NULL,
  `site_tags` text NOT NULL,
  `home_panel` text NOT NULL,
  `fb` varchar(250) NOT NULL,
  `tw` varchar(250) NOT NULL,
  `yt` varchar(250) NOT NULL,
  `rss` varchar(250) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_settings`
--

INSERT INTO `main_settings` (`id`, `site_name`, `site_url`, `site_desc`, `site_email`, `site_tags`, `home_panel`, `fb`, `tw`, `yt`, `rss`, `userName`, `date`) VALUES
(1, 'Awebarts', 'http://localhost:70/myWork/awebarts/app/index.php', 'this is the site of all the dighn', '', 'site tags', 'home panels', 'https://www.facebook.com/profile.php?id=100005511875112', 'www.twitter.com', 'https://www.youtube.com/', 'www.skype.com', '', '2016-09-21 11:57:58'),
(2, 'Awebarts', 'http://localhost:70/myWork/awebarts/app/index.php', 'this is the site of all the dighn', 'alaa@alaa.com', 'site tags', 'home panels', 'https://www.facebook.com/profile.php?id=100005511875112', 'www.twitter.com', 'https://www.youtube.com/', 'www.skype.com', '', '2016-09-21 11:57:58'),
(3, 'Awebarts', 'http://localhost:70/myWork/awebarts/app/index.php', 'the desc', 'alaa@alaa.com', 'the tags', 'home panel', 'https://www.facebook.com/profile.php?id=100005511875112', 'www.twitter.com', 'https://www.youtube.com/', 'www.skype.com', 'alaa dragneel', '2016-09-21 11:57:58'),
(4, 'Awebarts', 'http://localhost:70/myWork/awebarts/app/index.php', 'the description', 'alaa@alaa.com', 'the tags', 'home panel', 'https://www.facebook.com/profile.php?id=100005511875112', 'www.twitter.com', 'https://www.youtube.com/', 'www.skype.com', 'alaa dragneel', '2016-09-21 11:58:48'),
(5, 'Awebarts', 'http://localhost:70/myWork/awebarts/app/index.php', 'the description here', 'alaa@alaa.com', 'the tags here', 'home panel here', 'https://www.facebook.com/profile.php?id=100005511875112', 'www.twitter.com', 'https://www.youtube.com/', 'www.skype.com', 'alaa', '2016-09-22 06:01:11'),
(6, 'Awebarts', 'http://localhost:70/myWork/awebarts/app/index.php', 'the description here for the site', 'alaa@alaa.com', 'the tags here for the site', 'home panel here for the site', 'https://www.facebook.com/profile.php?id=100005511875112', 'www.twitter.com', 'https://www.youtube.com/', 'www.skype.com', 'alaa', '2016-09-22 06:06:41'),
(7, 'Awebarts.com', 'http://localhost:70/myWork/awebarts/app/index.php', 'the description here for the site', 'moaalaa16@gmail.com', 'the tags here for the site', 'home panel here for the site', 'https://www.facebook.com/profile.php?id=100005511875112', 'https://twitter.com/', 'https://www.youtube.com/', 'https://web.skype.com/', 'alaa', '2016-09-23 21:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `page_content` longtext NOT NULL,
  `page_status` varchar(100) NOT NULL,
  `page_visits` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `page_image` varchar(250) NOT NULL,
  `page_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_content`, `page_status`, `page_visits`, `section_id`, `page_image`, `page_date`, `userName`) VALUES
(1, 'page test', 'the fucking update is finaly finsh', 'active', 0, 12, '2016-09-23-17-16-36_96fd578b30d3ee2488564cd33a2100047cbfb9ad.jpeg', '2016-09-23 18:13:07', 'alaa dragneel'),
(2, 'web design', 'web webweb web', 'active', 0, 11, '2016-09-23-19-37-20_cfb166a37096a4126272bf0f9fb59261e268d94c.jpg', '2016-09-23 17:37:20', 'alaa dragneel'),
(4, 'test page name', 'testetstte', 'active', 0, 11, '2016-09-23-18-15-32_72c2fa051536147b6f2592a7e3e56921eb209d47.jpg', '2016-09-23 16:15:32', 'alaa dragneel'),
(5, 'page sections img edit Final test', 'the final test for this fucking codethe final test for this fucking codethe final test for this fucking codethe final test for this fucking codethe final test for this fucking codethe final test for this fucking codethe final test for this fucking codethe final test for this fucking code', 'disactive', 0, 12, '2016-09-23-20-18-14_ea91bb456d1cb5c66e43d08ec58ce5b2afe6d1e0.gif', '2016-09-23 18:23:42', 'alaa dragneel'),
(6, 'page img test', 'tetetetetete', 'active', 0, 11, '2016-09-23-19-34-10_69a547acfd7f24e0276e38c6471d87cca3be9341.jpg', '2016-09-23 17:34:10', 'sasuke_alaa'),
(11, 'the view site test', 'test for the new view for the fucking page test for the new view for the fucking page test for the new view for the fucking page', 'active', 0, 12, '2016-09-23-20-26-57_87529e4e74fbe84672a9c67500efaa0c284f1ba3.jpg', '2016-09-23 18:26:57', 'sasuke_alaa');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(100) NOT NULL,
  `sectionStatus` varchar(20) NOT NULL,
  `sectionLocation` varchar(20) NOT NULL,
  `sec_desc` text NOT NULL,
  `sec_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`section_id`, `section_name`, `sectionStatus`, `sectionLocation`, `sec_desc`, `sec_date`, `userName`) VALUES
(11, 'products', 'active', 'side', 'error erroe', '2016-09-23 15:04:26', 'alaa dragneel'),
(12, 'Our Projects', 'disactive', 'side', 'the description fuck fuck', '2016-09-23 15:04:09', 'alaa dragneel'),
(15, 'Our Services', 'active', 'side', 'test edit  final try by zayed helping 2', '2016-09-23 15:03:48', 'alaa dragneel');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `userName`, `password`, `email`) VALUES
(1, 'alaa', 'alaa dragneel', '4c1b52409cf6be3896cf163fa17b32e4da293f2e', 'alaa@alaa.com'),
(5, 'moaalaa', 'moa', '6666', 'aaa@xxx.com'),
(6, 'alaa Dragneel', 'alaa', '6666', 'alaa_dragneel@yahoo.com'),
(9, 'sasuke', 'sasuke_alaa', '4c1b52409cf6be3896cf163fa17b32e4da293f2e', 'aaa@xxx.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `main_settings`
--
ALTER TABLE `main_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `main_settings`
--
ALTER TABLE `main_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
