-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2020 at 05:01 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faiyazkh_money`
--

-- --------------------------------------------------------

--
-- Table structure for table `ref_extenddate`
--

CREATE TABLE `ref_extenddate` (
  `eid` bigint(11) NOT NULL,
  `eusername` varchar(250) NOT NULL,
  `rdate` varchar(250) NOT NULL,
  `edate` varchar(255) NOT NULL,
  `deduct` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ref_history`
--

CREATE TABLE `ref_history` (
  `id` int(255) NOT NULL,
  `his_id` varchar(250) NOT NULL,
  `his_username` varchar(250) NOT NULL,
  `his_earn` varchar(250) NOT NULL,
  `his_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `his_withdrawn` varchar(250) NOT NULL,
  `his_withdrawndate` varchar(250) NOT NULL,
  `his_receipt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ref_users`
--

CREATE TABLE `ref_users` (
  `id` int(255) NOT NULL,
  `myrefid` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `points` int(255) NOT NULL,
  `status` enum('approved','pending') CHARACTER SET utf8 NOT NULL DEFAULT 'pending',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updation_date` varchar(250) NOT NULL,
  `expirydate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_users`
--

INSERT INTO `ref_users` (`id`, `myrefid`, `plan`, `ip`, `points`, `status`, `date`, `updation_date`, `expirydate`) VALUES
(62, '5437201', '1000', 'abuzar', 0, 'pending', '2020-11-09 22:07:30', '2020-11-10 03:37:30', 'notset'),
(61, '4490145', '1000', 'faiyaz', 0, 'pending', '2020-11-09 22:00:43', '2020-11-10 03:30:43', 'notset'),
(60, '1165257', '100', 'alka@8693', 0, 'approved', '2020-11-09 19:39:52', '2020-11-10 01:09:52', '30-11-2020'),
(59, '669765', '100', 'Alka_8693', 0, 'approved', '2020-11-09 19:38:25', '2020-11-10 01:08:25', '30-11-2020'),
(56, '311213', '100', 'azadmr', 100, 'approved', '2020-11-09 18:15:05', '2020-11-09 23:45:05', '29-11-2020'),
(57, '5563639', '1000', 'RAHUL 1234', 0, 'approved', '2020-11-09 18:18:38', '2020-11-09 23:48:38', '29-11-2020'),
(58, '8377972', '100', 'Shaikh', 0, 'approved', '2020-11-09 18:26:02', '2020-11-09 23:56:02', '29-11-2020'),
(54, '2951351', '1000', 'Azad', 0, 'approved', '2020-11-09 18:05:57', '2020-11-09 23:35:57', '29-11-2020'),
(53, '111', '500', 'test11', 0, 'approved', '2020-11-09 17:54:44', '09-11-2020 23:26:12', '29-11-2020 23:26:12'),
(63, '3932172', '1000', 'arya3600', 0, 'approved', '2020-11-10 07:39:17', '2020-11-10 13:09:17', '29-11-2020 23:26:12'),
(64, '3283099', '1000', 'ADV.CHITRA JETHWANI ', 0, 'approved', '2020-11-10 07:44:55', '2020-11-10 13:14:55', '29-11-2020 23:26:12'),
(65, '4909844', '1000', 'D.priyanka', 0, 'approved', '2020-11-10 07:54:51', '2020-11-10 13:24:51', '29-11-2020 23:26:12'),
(66, '9715836', '1000', 'Shyji ann thomas', 0, 'approved', '2020-11-10 10:38:42', '2020-11-10 16:08:42', '29-11-2020'),
(67, '822397', '1000', 'aditisankhe', 0, 'approved', '2020-11-10 10:40:50', '2020-11-10 16:10:50', '29-11-2020'),
(68, '1408608', '1000', 'Vishal Kumar', 0, 'approved', '2020-11-10 11:19:54', '2020-11-10 16:49:54', '29-11-2020 23:26:1'),
(69, '7821735', '100', 'Aakash raj @53', 0, 'pending', '2020-11-10 18:42:13', '2020-11-11 00:12:13', 'notset'),
(70, '2562992', '1000', 'shouryam27', 0, 'pending', '2020-11-11 06:21:03', '2020-11-11 11:51:03', 'notset'),
(71, '997186', '100', 'Mahaveersingh', 0, 'approved', '2020-11-11 16:03:23', '15-11-2020 21:59:33', '25-11-2020 21:59:33'),
(72, '2175256', '1000', 'Joysree 2000', 0, 'pending', '2020-11-11 17:00:56', '2020-11-11 22:30:56', 'notset'),
(73, '9733862', '100', 'gn123', 0, 'pending', '2020-11-15 16:18:22', '2020-11-15 21:48:22', 'notset'),
(74, '5006688', '100', 'Tuna kumar 1', 0, 'pending', '2020-11-15 16:38:38', '2020-11-15 22:08:38', 'notset');

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE `tree` (
  `t_id` int(11) NOT NULL,
  `t_paidto` varchar(250) NOT NULL,
  `t_username` varchar(250) NOT NULL,
  `t_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`t_id`, `t_paidto`, `t_username`, `t_date`) VALUES
(1, '25', 'Faiyaz', '2020-10-26 05:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `loginTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `username`, `userIp`, `loginTime`) VALUES
(128, 51, 'Shaikh', 0x3130362e3231302e31312e313236, '2020-11-09, 11:57 pm'),
(129, 51, 'Shaikh', 0x3130362e3231302e31312e313236, '2020-11-10, 12:03 am'),
(130, 48, 'Azad', 0x34372e33302e3137392e3134, '2020-11-10, 12:05 am'),
(131, 51, 'Shaikh', 0x3130362e3231302e31312e313236, '2020-11-10, 1:07 am'),
(132, 48, 'azad', 0x34372e33302e3137392e3134, '2020-11-10, 2:25 am'),
(133, 48, 'azad', 0x34372e33302e3137392e3134, '2020-11-10, 2:27 am'),
(134, 48, 'azad', 0x34372e33302e3137392e3134, '2020-11-10, 2:57 am'),
(135, 48, 'azad', 0x34372e33302e3137392e3134, '2020-11-10, 3:07 am'),
(136, 48, 'azad', 0x34372e33302e3137392e3134, '2020-11-10, 3:31 am'),
(137, 48, 'azad', 0x34372e33302e3137392e3134, '2020-11-10, 3:37 am'),
(138, 48, 'azad', 0x34372e33302e3137392e3134, '2020-11-10, 3:49 am'),
(139, 48, 'azad', 0x34372e33302e3137392e3134, '2020-11-10, 3:50 am'),
(140, 48, 'azad', 0x34372e33302e3137392e3134, '2020-11-10, 3:51 am'),
(141, 48, 'azad', 0x34372e33302e3134302e3237, '2020-11-10, 11:46 am'),
(142, 48, 'azad', 0x34372e33302e3134302e3237, '2020-11-10, 1:12 pm'),
(143, 47, 'test11', 0x34372e33302e3134302e3237, '2020-11-10, 1:20 pm'),
(144, 47, 'test11', 0x34372e33302e3134302e3237, '2020-11-10, 1:46 pm'),
(145, 47, 'test11', 0x34372e33302e3134302e3237, '2020-11-10, 2:07 pm'),
(146, 47, 'test11', 0x34372e33302e3134302e3237, '2020-11-10, 2:42 pm'),
(147, 47, 'test11', 0x34372e33302e3134302e3237, '2020-11-10, 2:43 pm'),
(148, 59, 'Deepakdeep08587@gmail.com ', 0x3133322e3135342e37332e313935, '2020-11-10, 3:15 pm'),
(149, 47, 'test11', 0x34372e33302e3134302e3237, '2020-11-10, 3:35 pm'),
(150, 47, 'test11', 0x34372e33302e3134302e3237, '2020-11-10, 3:36 pm'),
(151, 59, 'Deepakdeep08587@gmail.com', 0x34372e33302e3134302e3237, '2020-11-10, 4:43 pm'),
(152, 59, 'Deepakdeep08587@gmail.com', 0x34372e33302e3134302e3237, '2020-11-10, 4:45 pm'),
(153, 47, 'test11', 0x34372e33302e3134302e3237, '2020-11-10, 4:50 pm'),
(154, 47, 'test11', 0x34372e33302e3134302e3237, '2020-11-10, 6:50 pm'),
(155, 48, 'azad ', 0x3130362e3231302e34352e3134, '2020-11-10, 7:53 pm'),
(156, 48, 'azad ', 0x3130362e3231302e34352e3134, '2020-11-10, 7:54 pm'),
(157, 48, 'azad ', 0x3130362e3231302e34352e3134, '2020-11-10, 8:02 pm'),
(158, 48, 'azad ', 0x3130362e3231302e34352e3134, '2020-11-10, 8:02 pm'),
(159, 48, 'azad ', 0x3130362e3231302e34352e3134, '2020-11-10, 8:02 pm'),
(160, 48, 'azad ', 0x3130362e3231302e34352e3134, '2020-11-10, 8:02 pm'),
(161, 51, 'Shaikh', 0x3130362e3231302e34352e3134, '2020-11-10, 8:05 pm'),
(162, 47, 'test11', 0x34372e33302e3134302e3237, '2020-11-10, 8:44 pm'),
(163, 47, 'test11', 0x34372e33302e3135372e313338, '2020-11-10, 10:28 pm'),
(164, 62, 'Vishal Kumar', 0x34372e382e3134392e3838, '2020-11-10, 11:52 pm'),
(165, 48, 'azad ', 0x3130362e3231302e35312e323435, '2020-11-11, 12:09 am'),
(166, 48, 'azad ', 0x3130362e3231302e35312e323435, '2020-11-11, 12:12 am'),
(167, 48, 'azad ', 0x3130362e3231302e35312e323435, '2020-11-11, 12:13 am'),
(168, 47, 'test11', 0x34372e33302e3135372e313338, '2020-11-11, 12:27 am'),
(169, 47, 'test11', 0x34372e33302e3132382e323238, '2020-11-11, 12:14 pm'),
(170, 57, 'ADV.CHITRA JETHWANI ', 0x3135372e34372e3231372e323434, '2020-11-11, 8:34 pm'),
(171, 65, 'Mahaveersingh', 0x3135372e33382e33312e323438, '2020-11-11, 9:34 pm'),
(172, 47, 'test11', 0x34372e33302e3133392e323331, '2020-11-12, 12:03 am'),
(173, 47, 'test11', 0x34372e33302e3137352e3535, '2020-11-12, 6:12 pm'),
(174, 47, 'test11', 0x34372e33302e3134372e3438, '2020-11-14, 1:33 am'),
(175, 65, 'Mahaveersingh', 0x3135372e33382e36352e313834, '2020-11-15, 9:57 pm'),
(176, 47, 'test11', 0x34372e33312e32342e3734, '2020-11-15, 10:03 pm'),
(177, 68, 'Tuna kumar 1', 0x3135372e34362e3131362e313037, '2020-11-15, 10:13 pm'),
(178, 47, 'test11', 0x34372e33312e3234302e313735, '2020-11-15, 10:28 pm'),
(179, 67, 'gn123', 0x34372e33312e3234302e313735, '2020-11-15, 10:30 pm'),
(180, 67, 'gn123', 0x34372e33312e3234302e313735, '2020-11-15, 10:31 pm'),
(181, 47, 'test11', 0x34372e33312e3234302e313735, '2020-11-15, 10:35 pm'),
(182, 47, 'test11', 0x34372e33312e3234302e313735, '2020-11-15, 10:36 pm'),
(183, 65, 'Mahaveersingh', 0x34372e33312e3234302e313735, '2020-11-15, 11:14 pm'),
(184, 47, 'test11', 0x34372e33312e3234302e313735, '2020-11-15, 11:24 pm'),
(185, 47, 'test11', 0x34372e33312e3234302e313735, '2020-11-15, 11:27 pm'),
(186, 47, 'test11', 0x34372e33302e3230382e38, '2020-11-16, 11:00 pm'),
(187, 57, 'ADV.CHITRA JETHWANI ', 0x3135372e33382e37302e313133, '2020-11-20, 12:59 pm'),
(188, 57, 'ADV.CHITRA JETHWANI ', 0x3135372e33382e37302e313133, '2020-11-20, 1:06 pm'),
(189, 47, 'test11', 0x3137312e37362e3232342e323032, '2020-11-20, 3:04 pm'),
(190, 47, 'test11', 0x3137312e37362e3232342e323032, '2020-11-20, 3:32 pm'),
(191, 47, 'test11', 0x34372e33302e3139322e313637, '2020-11-20, 4:23 pm'),
(192, 47, 'test11', 0x34372e33302e3139362e313030, '2020-11-21, 12:16 pm'),
(193, 47, 'test11', 0x34372e33302e3230352e323137, '2020-11-21, 8:08 pm'),
(194, 47, 'test11', 0x34372e33302e3139312e3231, '2020-11-26, 10:25 am'),
(195, 47, 'test11', 0x34372e33312e3133372e313737, '2020-11-27, 1:11 pm'),
(196, 47, 'test11', 0x34372e33302e3137322e323530, '2020-11-27, 2:07 pm'),
(197, 47, 'Test11', 0x34372e33302e3137322e323530, '2020-11-27, 4:01 pm'),
(198, 47, 'test11', 0x34372e33312e3136322e3230, '2020-12-03, 5:28 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pstatus` enum('approved','pending') NOT NULL DEFAULT 'pending',
  `refid` varchar(50) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `avatar` varchar(255) NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `bankholder` varchar(255) NOT NULL,
  `bankaccount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pstatus`, `refid`, `fname`, `lname`, `phone`, `email`, `username`, `password`, `created_at`, `avatar`, `bankname`, `ifsc`, `bankholder`, `bankaccount`) VALUES
(47, 'approved', '6789159', 'test', 'one', '64654564', 'fkhalid42@gmail.com', 'test11', '11', '2020-11-09 10:54:44', 'favicon32-2177684326.png', 'n/a', 'n/a', 'n/a', 'n/a'),
(48, 'approved', '4119066', 'Mr', ' Azad', '9015279856', 'azadgngroup@gmail.com', 'Azad', '123', '2020-11-09 11:05:57', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(49, 'approved', '7851', 'Mr', 'Azad', '8368710594', 'azadgngroup@gmail.com', 'azadmr', '12345', '2020-11-09 11:15:05', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(50, 'approved', '2951351', 'RAHUL  sk', 'RAHUL 1234', '1234', 'Shaikhsajibul02@gmail.com', 'RAHUL 1234', '1234', '2020-11-09 11:18:38', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(51, 'approved', '311213', 'Rahul', 'Khanna', '8928918998', 'azadgngroup@gmail.com', 'Shaikh', '321123', '2020-11-09 11:26:02', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(52, 'approved', '311213', 'Alka ', 'Kumari', '08210880659', 'alka8693@gmail.com', 'Alka_8693', '123', '2020-11-09 12:38:25', 'img20201104202906-510608925.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(53, 'approved', '311213', 'Alka ', 'Kumari', '08210880659', 'alka8693@gmail.com', 'alka@8693', '123', '2020-11-09 12:39:52', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(54, 'pending', '2951351', 'FAIYAZ', 'KHALID', '09560141504', 'Advocatespedia@gmail.com', 'faiyaz', '123', '2020-11-09 15:00:43', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(55, 'pending', '2951351', 'Abuzar', 'Khan', '5565151', 'fkhalid42@gmail.com', 'abuzar', '123', '2020-11-09 15:07:30', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(56, 'approved', '111', 'Arya', 'Kudchadker', '9834938318', 'arya1969k@gmail.com', 'arya3600', '123', '2020-11-10 00:39:17', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(57, 'approved', '111', 'CHITRA ', 'JETHWANI ', '9509063854', 'chitra22.jethwani@gmail.com', 'ADV.CHITRA JETHWANI ', '2303', '2020-11-10 00:44:55', 'picsart_01-09-06.37.59-640285361.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(58, 'approved', '111', 'Priyanka', 'D', '7396903998', 'dpriyanka@gmail.com', 'D.priyanka', '123', '2020-11-10 00:54:51', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(60, 'approved', '111', 'Shyji', 'Thomas', '7306630073', 'shyjithomas2001@gmail.com', 'Shyji ann thomas', '123', '2020-11-10 03:38:42', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(61, 'approved', '111', 'Aditi', 'Sankhe', '09930622155', 'aditissankhe@gmail.com', 'aditisankhe', '123', '2020-11-10 03:40:50', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(62, 'approved', '111', 'Vishal', 'Kumar', '7237856606', 'gupta2001vishal@gmail.com', 'Vishal Kumar', '123', '2020-11-10 04:19:54', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(63, 'pending', '311213', 'Aakash', 'Raj', '8283888042', 'aakash7753@gmail.com', 'Aakash raj @53', '123', '2020-11-10 11:42:13', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(64, 'pending', '111', 'shourya', 'mehra', '8567820820', 'mehrashourya28@gmail.com', 'shouryam27', '123', '2020-11-10 23:21:03', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(65, 'approved', '311213', 'Mahaveer', 'Singh', '6378156847', '2002mahaveersingh@gmail.com', 'Mahaveersingh', '123', '2020-11-11 09:03:23', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(66, 'pending', '111', 'Joysree', 'Das', '6290711262', 'joysreedas22@gmail.com', 'Joysree 2000', '124', '2020-11-11 10:00:56', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(67, 'pending', '311213', 'mr', 'azad', '9015279856', 'asimportant201@gmail.com', 'gn123', '123', '2020-11-15 09:18:22', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a'),
(68, 'pending', '9733862', 'Tuna ', 'Kumar', '6379256372', 'tunak5098@gmail.com', 'Tuna kumar 1', '12345678', '2020-11-15 09:38:38', 'default.jpg', 'n/a', 'n/a', 'n/a', 'n/a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ref_extenddate`
--
ALTER TABLE `ref_extenddate`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `ref_history`
--
ALTER TABLE `ref_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_users`
--
ALTER TABLE `ref_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ref_extenddate`
--
ALTER TABLE `ref_extenddate`
  MODIFY `eid` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_history`
--
ALTER TABLE `ref_history`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_users`
--
ALTER TABLE `ref_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
