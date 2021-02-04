-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 01:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xx`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `acc_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password1` text NOT NULL,
  `password2` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acc_id`, `username`, `password1`, `password2`, `firstname`, `middlename`, `lastname`, `contact`, `email`, `gender`, `user_type`) VALUES
(1, 'username1', 'password1', 'password1', 'Manuel', 'Gob', 'Mamba', '09239843354', 'gobmamba@gmail.com', '0', 'GOVERNOR'),
(2, 'user2', 'password2', 'password2', 'Marifel Grace', 'C.', 'Kummer', '094512345378', 'mkummer@spup.edu.ph', '0', 'DEAN'),
(5, 'user4', 'pass4', 'pass4', 'Rucelj', 'Dolorfino', 'Pugeda', '09451234567', 'ruceljpugeda@spup.edu.ph', '0', 'FACULTY');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `att_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_name` text NOT NULL,
  `presence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`att_id`, `s_id`, `event_id`, `event_name`, `presence`) VALUES
(1, 20030042, 14, 'Students Assembly', 4),
(2, 200400037, 14, 'Students Assembly', 4),
(3, 200603124, 14, 'Students Assembly', 4),
(4, 201200678, 14, 'Students Assembly', 4),
(5, 20124338, 14, 'Students Assembly', 4),
(6, 201304562, 14, 'Students Assembly', 4),
(7, 20130945, 14, 'Students Assembly', 4),
(8, 201700234, 14, 'Students Assembly', 4),
(9, 201710434, 14, 'Students Assembly', 4),
(10, 201720123, 14, 'Students Assembly', 4),
(11, 20030042, 15, 'Hyperlink', 4),
(12, 200400037, 15, 'Hyperlink', 4),
(13, 200603124, 15, 'Hyperlink', 4),
(14, 201200678, 15, 'Hyperlink', 4),
(15, 20124338, 15, 'Hyperlink', 4),
(16, 201304562, 15, 'Hyperlink', 4),
(17, 20130945, 15, 'Hyperlink', 4),
(18, 201700234, 15, 'Hyperlink', 4),
(19, 201710434, 15, 'Hyperlink', 4),
(20, 201720123, 15, 'Hyperlink', 4),
(21, 20030042, 19, 'Rest and Reboot', 4),
(22, 200400037, 19, 'Rest and Reboot', 4),
(23, 200603124, 19, 'Rest and Reboot', 4),
(24, 201200678, 19, 'Rest and Reboot', 4),
(25, 20124338, 19, 'Rest and Reboot', 4),
(26, 201304562, 19, 'Rest and Reboot', 4),
(27, 20130945, 19, 'Rest and Reboot', 4),
(28, 201700234, 19, 'Rest and Reboot', 4),
(29, 201710434, 19, 'Rest and Reboot', 4),
(30, 201720123, 19, 'Rest and Reboot', 4);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` text NOT NULL,
  `e_date` text NOT NULL,
  `e_end` text NOT NULL,
  `venue` text NOT NULL,
  `status` int(11) NOT NULL,
  `auto_absent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `e_date`, `e_end`, `venue`, `status`, `auto_absent`) VALUES
(14, 'Students Assembly', '2020-09-09', '2020-09-09', 'MM Hall', 1, 1),
(15, 'Hyperlink', '2020-10-17', '2020-10-17', 'Gymnasium', 1, 1),
(16, 'SITE Paulympics', '2020-11-14', '2020-11-14', 'Gymnasium, Students Center, Grandstand', 0, 0),
(17, 'SITE Jam', '2020-11-15', '2020-11-15', 'Gymnasium', 0, 0),
(18, 'iHeart SITE', '2021-02-13', '2021-02-13', 'Global Center', 0, 0),
(19, 'Rest and Reboot', '2021-04-17', '2021-04-17', 'Students Center', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `fullname` text NOT NULL,
  `user_type` text NOT NULL,
  `xdate` text NOT NULL,
  `xtime` text NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `username`, `fullname`, `user_type`, `xdate`, `xtime`, `action`) VALUES
(1, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:06:50pm', 'Edited in students(20030042)'),
(2, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:07:03pm', 'Edited in students(20030042)'),
(3, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:08:37pm', 'Added in students(2)'),
(4, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:08:49pm', 'Edited in students(200603124)'),
(5, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:09:02pm', 'Deleted in students(2)'),
(6, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:10:31pm', 'Added in students(20124338)'),
(7, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:11:39pm', 'Added in students(20130945)'),
(8, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:13:24pm', 'Added in students(201304562)'),
(9, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:15:05pm', 'Added in students(201200678)'),
(10, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:18:26pm', 'Added in students(201710434)'),
(11, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:20:16pm', 'Added in students(201720123)'),
(12, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:21:26pm', 'Added in students(201700234)'),
(13, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:21:58pm', 'Deleted in events(5)'),
(14, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:23:22pm', 'Added in events(7)'),
(15, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:23:53pm', 'Added in events(9)'),
(16, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:24:02pm', 'Deleted in events(9)'),
(17, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:24:32pm', 'Added in events(7)'),
(18, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:25:38pm', 'Added in events(7)'),
(19, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:26:06pm', 'Added in events(7)'),
(20, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:27:11pm', 'Added in events(7)'),
(21, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:27:42pm', 'Added in events(10)'),
(22, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:28:35pm', 'Added in events(10)'),
(23, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:29:18pm', 'Added in events(11)'),
(24, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:29:36pm', 'Deleted in events(10)'),
(25, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:29:38pm', 'Deleted in events(11)'),
(26, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:29:56pm', 'Added in events(12)'),
(27, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:30:09pm', 'Edited in events(12)'),
(28, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:30:41pm', 'Deleted in events(12)'),
(29, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:35:10pm', 'Added in events(13)'),
(30, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:35:46pm', 'Added in events(14)'),
(31, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:36:00pm', 'Deleted in events(4)'),
(32, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:36:07pm', 'Deleted in events(6)'),
(33, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:36:12pm', 'Deleted in events(7)'),
(34, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:36:31pm', 'Deleted in events(13)'),
(35, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:37:15pm', 'Added in events(15)'),
(36, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:39:15pm', 'Added in events(16)'),
(37, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:40:04pm', 'Added in events(17)'),
(38, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:42:15pm', 'Added in events(18)'),
(39, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:42:49pm', 'Added in events(19)'),
(40, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:43:19pm', 'Deactivated sanction(1)'),
(41, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:43:21pm', 'Deactivated sanction(2)'),
(42, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:43:22pm', 'Deactivated sanction(4)'),
(43, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:44:03pm', 'Added in sanctions(37)'),
(44, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:46:45pm', 'Added in sanctions(38)'),
(45, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:47:06pm', 'Added in sanctions(39)'),
(46, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '11:00:16pm', 'Activated sanction(1)'),
(47, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '11:00:23pm', 'Deactivated sanction(1)'),
(48, 'user2', 'Marifel Grace Kummer', 'DEAN', '2020-10-24', '11:02:39pm', 'Edited in accounts(2)'),
(49, 'user2', 'Marifel Grace Kummer', 'DEAN', '2020-10-24', '11:03:31pm', 'Edited in accounts(1)'),
(50, 'user2', 'Marifel Grace', 'DEAN', '2020-10-24', '11:56:11pm', 'Edited in events(19)');

-- --------------------------------------------------------

--
-- Table structure for table `sanctions`
--

CREATE TABLE `sanctions` (
  `sanction_id` int(11) NOT NULL,
  `sanction_name` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanctions`
--

INSERT INTO `sanctions` (`sanction_id`, `sanction_name`, `quantity`, `status`) VALUES
(1, 'stick-o', 5, 1),
(2, 'lulululu', 2, 1),
(4, 'jabalgo', 2, 1),
(36, 'g lang', 1, 1),
(37, 'Newspaper', 2, 0),
(38, 'Glue', 2, 0),
(39, 'Scissors', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `schoolyear`
--

CREATE TABLE `schoolyear` (
  `sy_id` int(11) NOT NULL,
  `start` text NOT NULL,
  `end` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schoolyear`
--

INSERT INTO `schoolyear` (`sy_id`, `start`, `end`, `status`) VALUES
(2, '2020-10-31', '2020-11-14', 1),
(3, '2020-10-04', '2020-10-08', 0),
(4, '2020-10-04', '2020-10-09', 0),
(5, '2020-09-24', '2020-09-29', 1),
(6, '2020-10-01', '2020-10-01', 1),
(7, '2020-10-31', '2020-10-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(11) NOT NULL,
  `year_level` int(11) NOT NULL,
  `section` text NOT NULL,
  `program` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `contact` text NOT NULL,
  `officer` text NOT NULL,
  `gender` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `year_level`, `section`, `program`, `firstname`, `middlename`, `lastname`, `email`, `contact`, `officer`, `gender`, `status`) VALUES
('09', 4, 'asd', 'BSCpE', 'asd', 'adf', 'dfh', 'asd@w', '2', 'NO', 'FEMALE', 1),
('112', 2, '1', 'BSCpE', '112', 'dfgdfgs', 'sdg', 'asdf@q', '234', 'YES', 'MALE', 1),
('1234', 1, 's', 'BSIT', 'Aba', 'Welcome', 'Back', 'loytu@g', '134', 'NO', 'FEMALE', 1),
('12341234', 5, '4', 'BSCE', 'CE', 'kid', 'guy', 'asd@e', '123456', 'NO', 'MALE', 1),
('20030042', 2, 'A', 'BSIT', 'Jonas Gabriel', 'Caggay', 'Rivera', 'jrivera@gmail.com', '09063626164', 'YES', 'MALE', 0),
('200400037', 2, 'B', 'BSIT', 'Francis Prim', 'Santiago', 'Pagunuran', 'pagunuranprim0@gmail.com', '9453687678', 'YES', 'MALE', 0),
('200400042', 3, '2', 'BSIT', 'Franz', 'Ewan', 'Kafka', 'asd@b', '12345', 'YES', 'MALE', 1),
('200603124', 4, 'C', 'BSCpE', 'Alec Jiro', 'Castaneda', 'Saludes', 'ajsaludes@gmail.com', '09341237890', 'NO', 'MALE', 0),
('201200678', 2, 'C', 'BSIT', 'Miguel', 'Francisco', 'Gamiao', 'm_gamiao@gmail.com', '09356412432', 'YES', 'MALE', 0),
('20124338', 4, 'C', 'BSCpE', 'Vince Lesther', 'Virtouso', 'Calimag', 'vincecalimag@gmail.com', '0935412534', 'NO', 'MALE', 0),
('201304562', 1, 'B', 'BLIS', 'Grandeur Majesty', 'Talue', 'Labang', 'labangrands@gmail.com', '098672412423', 'NO', 'MALE', 0),
('20130945', 5, 'A', 'BSEnSE', 'Gerald Martin', 'Villar', 'Balabis', 'geraldbalabis@gmail.com', '09787264531', 'NO', 'MALE', 0),
('201700234', 4, 'B', 'BSCpE', 'Marcy Clarete', 'Apoy', 'Clemente', 'clareteclemente@gmail.com', '09325238738', 'YES', 'FEMALE', 0),
('201710434', 3, 'A', 'BSCE', 'Cassandra', 'Ugac', 'Andal', 'cassyandal@gmail.com', '09123473434', 'NO', 'FEMALE', 0),
('201720123', 2, 'A', 'BSCpE', 'Alyssa Jane', 'Bautista', 'Villanueva', 'ajvillaneva@gmail.com', '0932422342', 'YES', 'FEMALE', 0),
('999111', 2, 'nowhite', 'BSIT', 'lets', 'get', 'married', 'asd@w', '12345', 'YES', 'MALE', 1),
('999999', 2, '2', 'BLIS', 'Plus ', '1', 'lang', 'qwe@w', '12', 'NO', 'FEMALE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `vio_id` int(11) NOT NULL,
  `committer_id` text NOT NULL,
  `description` text NOT NULL,
  `date_committed` text NOT NULL,
  `compliance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`vio_id`, `committer_id`, `description`, `date_committed`, `compliance`) VALUES
(1, '0', '123', '2020-09-26', 0),
(2, '0', 'sa pa', '2020-09-26', 0),
(4, '0', 'asdas', '2020-09-26', 0),
(5, 'First Middle Last', '69', '2020-09-26', 0),
(6, 'First Middle Last', '696', '2020-09-26', 0),
(7, 'First Middle Last', '6969', '2020-09-26', 0),
(8, 'First Middle Last', '69696', '2020-09-26', 0),
(9, 'First Middle Last', 'sa pa', '2020-09-26', 0),
(10, '200400037', 'orayty', '2020-09-26', 0),
(11, '200400037', 'orayty', '2020-09-26', 0),
(12, '112', 'ZZ', '2020-09-26', 1),
(13, '112', 'dadag trial', '2020-09-25', 1),
(14, '112', 'add lang', '2020-09-27', 1),
(15, '112', 'dagdag manin', '2020-09-27', 0),
(16, '12341234', 'as the clock strikes 12', '2020-09-30', 0),
(17, '12341234', 'xxyy', '2020-09-13', 0),
(19, '112', 'asd', '2020-09-30', 0),
(20, '200400037', 'asd', '1233-03-12', 0),
(21, '200400037', 'badboi', '2020-09-15', 0),
(22, '112', 'baesikqwe', '2020-09-14', 1),
(23, '11', 'sdfgdf', '', 0),
(24, '112', 'dagdag sa gabi', '2020-09-20', 0),
(25, '112', 'tae', '2020-09-28', 1),
(26, '112', 'tumae ulit', '2020-09-28', 0),
(27, '09', 'smoke til im high', '2020-10-10', 0),
(28, '09', 'gotta represent', '2020-10-14', 0),
(30, '09', 'never chase a c', '2020-10-17', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `sanctions`
--
ALTER TABLE `sanctions`
  ADD PRIMARY KEY (`sanction_id`);

--
-- Indexes for table `schoolyear`
--
ALTER TABLE `schoolyear`
  ADD PRIMARY KEY (`sy_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `violations`
--
ALTER TABLE `violations`
  ADD PRIMARY KEY (`vio_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `sanctions`
--
ALTER TABLE `sanctions`
  MODIFY `sanction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `schoolyear`
--
ALTER TABLE `schoolyear`
  MODIFY `sy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `vio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
