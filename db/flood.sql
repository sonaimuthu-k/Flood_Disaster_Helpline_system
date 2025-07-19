-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2025 at 09:55 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(12) NOT NULL,
  `email` varchar(90) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blooddinfo`
--

CREATE TABLE IF NOT EXISTS `blooddinfo` (
`bdid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `bg` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `blooddinfo`
--

INSERT INTO `blooddinfo` (`bdid`, `rid`, `bg`) VALUES
(10, 1, 'A+'),
(11, 1, 'B-'),
(12, 4, 'B+'),
(13, 4, 'O+'),
(14, 5, 'B+'),
(15, 5, 'B-'),
(16, 5, 'O+'),
(17, 6, 'B+'),
(18, 6, 'AB+'),
(19, 6, 'A-'),
(20, 7, 'AB-'),
(21, 7, 'A-'),
(22, 7, 'O-'),
(23, 1, 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `blooddonate`
--

CREATE TABLE IF NOT EXISTS `blooddonate` (
`donoid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `bg` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bloodinfo`
--

CREATE TABLE IF NOT EXISTS `bloodinfo` (
`bid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `bg` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `bloodinfo`
--

INSERT INTO `bloodinfo` (`bid`, `hid`, `bg`) VALUES
(7, 1, 'A-'),
(8, 1, 'O+'),
(12, 4, 'A-'),
(13, 4, 'A+'),
(14, 4, 'AB+'),
(16, 5, 'A+'),
(17, 5, 'B-'),
(18, 5, 'O-'),
(20, 5, 'B+'),
(21, 6, 'O+'),
(22, 6, 'A-'),
(23, 6, 'O-'),
(24, 7, 'A-'),
(25, 7, 'A+'),
(26, 7, 'B-'),
(27, 7, 'B+'),
(31, 1, 'B-');

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--

CREATE TABLE IF NOT EXISTS `bloodrequest` (
`reqid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `bg` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
`chatid` int(12) NOT NULL,
  `chat_room_id` int(11) NOT NULL,
  `chat_msg` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `chat_date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatid`, `chat_room_id`, `chat_msg`, `userid`, `chat_date`) VALUES
(1, 3, 'hi', 2, '2017-08-30 14:31:43'),
(2, 3, 'hello', 1, '2017-08-30 14:32:01'),
(3, 4, 'how are you?', 1, '2017-08-30 14:32:31'),
(4, 5, 'ya', 2, '0000-00-00 00:00:00'),
(5, 6, 'yaasss', 2, '0000-00-00 00:00:00'),
(6, 2, 'yaasss', 2, '0000-00-00 00:00:00'),
(7, 1, 'henry', 2, '0000-00-00 00:00:00'),
(8, 2, 'hi', 2, '0000-00-00 00:00:00'),
(9, 1, 'gasssd', 1, '0000-00-00 00:00:00'),
(10, 1, 'twqww', 2, '0000-00-00 00:00:00'),
(11, 1, 'hello', 7, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `chatv`
--

CREATE TABLE IF NOT EXISTS `chatv` (
`chatid` int(12) NOT NULL,
  `chat_room_id` int(11) NOT NULL,
  `chat_msg` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `chat_date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `chatv`
--

INSERT INTO `chatv` (`chatid`, `chat_room_id`, `chat_msg`, `userid`, `chat_date`) VALUES
(10, 1, 'hello how are you', 1, '0000-00-00 00:00:00'),
(12, 1, 'hello', 1, '0000-00-00 00:00:00'),
(13, 1, 'hello', 2, '0000-00-00 00:00:00'),
(14, 1, 'hii', 1, '0000-00-00 00:00:00'),
(15, 1, 'hi', 2, '0000-00-00 00:00:00'),
(16, 1, 'yes', 1, '0000-00-00 00:00:00'),
(17, 1, 'yes', 1, '0000-00-00 00:00:00'),
(18, 1, 'hi', 3, '0000-00-00 00:00:00'),
(19, 1, 'wait pl', 3, '0000-00-00 00:00:00'),
(20, 1, 'call me', 3, '0000-00-00 00:00:00'),
(21, 1, 'ok', 2, '0000-00-00 00:00:00'),
(22, 1, 'ok?', 3, '0000-00-00 00:00:00'),
(23, 1, 'ok?', 3, '0000-00-00 00:00:00'),
(24, 1, 'ok?', 3, '0000-00-00 00:00:00'),
(25, 1, 'ok?', 3, '0000-00-00 00:00:00'),
(26, 1, 'ok?', 3, '0000-00-00 00:00:00'),
(27, 1, 'hello admin', 2, '0000-00-00 00:00:00'),
(28, 1, 'yes', 3, '0000-00-00 00:00:00'),
(29, 1, 'hii', 4, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `chat_room`
--

CREATE TABLE IF NOT EXISTS `chat_room` (
`chat_room_id` int(12) NOT NULL,
  `chat_room_name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `chat_room`
--

INSERT INTO `chat_room` (`chat_room_id`, `chat_room_name`) VALUES
(1, 'Sample Chat Room');

-- --------------------------------------------------------

--
-- Table structure for table `chat_roomv`
--

CREATE TABLE IF NOT EXISTS `chat_roomv` (
`chat_room_id` int(12) NOT NULL,
  `chat_room_name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `chat_roomv`
--

INSERT INTO `chat_roomv` (`chat_room_id`, `chat_room_name`) VALUES
(1, 'Sample Chat Room');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE IF NOT EXISTS `hospitals` (
`id` int(11) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `hemail` varchar(100) NOT NULL,
  `hpassword` varchar(100) NOT NULL,
  `hphone` varchar(100) NOT NULL,
  `hcity` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hname`, `hemail`, `hpassword`, `hphone`, `hcity`) VALUES
(1, 'Gandhi hospital', 'gandhi@gmail.com', 'gandhi', '7865376358', 'Delhi'),
(4, 'Arunodhaya', 'arunodhaya@gmail.com', 'arunodhaya', '9898988909', 'Ballari'),
(5, 'Columbia Asia', 'columbia@gmail.com', 'asia47', '080616156262', 'Bengaluru'),
(6, 'Apollo Hospital', 'apollo@gmail.com', 'apollo247', '04428293333', 'Chennai'),
(7, 'Sree Amaravathi Multispeciality Hospital', 'sreeamaravathihospitals@gmail.com', 'amaravathi', '09441432567', 'Amaravathi');

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE IF NOT EXISTS `receivers` (
`id` int(11) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `remail` varchar(100) NOT NULL,
  `rpassword` varchar(100) NOT NULL,
  `rphone` varchar(100) NOT NULL,
  `rbg` varchar(10) NOT NULL,
  `rcity` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`id`, `rname`, `remail`, `rpassword`, `rphone`, `rbg`, `rcity`) VALUES
(1, 'test', 'test@gmail.com', 'test', '8875643456', 'A+', 'lucknow'),
(4, 'Chandana', 'xyz@gmail.com', 'xyz@47', '9902477355', 'B+', 'Ballari'),
(5, 'Rithish', 'abcd@gmail.com', 'rithish', '9380073433', 'B+', 'Tirupathi'),
(6, 'Akshay', 'klmn@gmail.com', 'akshay74', '8106298053', 'B+', 'Hyderabad'),
(7, 'Nandhini', 'nandhu@gmail.com', 'nandhu989', '9849492206', 'AB-', 'Bengaluru');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(12) NOT NULL,
  `name` varchar(90) NOT NULL,
  `address` mediumtext NOT NULL,
  `phone` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `address`, `phone`, `email`, `username`, `password`) VALUES
(9, 'Harini', 'Coimbatore', '9632587412', 'harini@gmail.com', 'harini', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `userhelp`
--

CREATE TABLE IF NOT EXISTS `userhelp` (
`help_id` int(12) NOT NULL,
  `name` varchar(90) NOT NULL,
  `address` mediumtext NOT NULL,
  `phone` varchar(90) NOT NULL,
  `location` varchar(90) NOT NULL,
  `needs` varchar(90) NOT NULL,
  `noofperson` varchar(90) NOT NULL,
  `oneeds` varchar(90) NOT NULL,
  `userid` varchar(90) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
`volunteer_id` int(12) NOT NULL,
  `name` varchar(90) NOT NULL,
  `address` mediumtext NOT NULL,
  `phone` varchar(90) NOT NULL,
  `degree` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`volunteer_id`, `name`, `address`, `phone`, `degree`, `email`, `username`, `password`) VALUES
(2, 'dani', 'cbe', '7485965466', 'bca', 'dani@gmail.com', 'dani', 'dani123'),
(3, 'admin', 'chennai', '9943467543', 'BE', 'admin@gmail.com', 'admin', 'admin'),
(4, 'sanjay', 'cbe', '8542136970', 'bca', 'sanjay@gmail.com', 'sanjay', 'sanjya'),
(5, 'Priya', 'Coimbatore', '9632587418', 'Bsc', 'priya@gmail.com', 'priya', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blooddinfo`
--
ALTER TABLE `blooddinfo`
 ADD PRIMARY KEY (`bdid`), ADD KEY `blooddinfo_ibfk_2` (`rid`);

--
-- Indexes for table `blooddonate`
--
ALTER TABLE `blooddonate`
 ADD PRIMARY KEY (`donoid`), ADD KEY `rid` (`rid`);

--
-- Indexes for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
 ADD PRIMARY KEY (`bid`), ADD KEY `hid` (`hid`);

--
-- Indexes for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
 ADD PRIMARY KEY (`reqid`), ADD KEY `hid` (`hid`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
 ADD PRIMARY KEY (`chatid`);

--
-- Indexes for table `chatv`
--
ALTER TABLE `chatv`
 ADD PRIMARY KEY (`chatid`);

--
-- Indexes for table `chat_room`
--
ALTER TABLE `chat_room`
 ADD PRIMARY KEY (`chat_room_id`);

--
-- Indexes for table `chat_roomv`
--
ALTER TABLE `chat_roomv`
 ADD PRIMARY KEY (`chat_room_id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receivers`
--
ALTER TABLE `receivers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userhelp`
--
ALTER TABLE `userhelp`
 ADD PRIMARY KEY (`help_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
 ADD PRIMARY KEY (`volunteer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blooddinfo`
--
ALTER TABLE `blooddinfo`
MODIFY `bdid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `blooddonate`
--
ALTER TABLE `blooddonate`
MODIFY `donoid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
MODIFY `chatid` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `chatv`
--
ALTER TABLE `chatv`
MODIFY `chatid` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `chat_room`
--
ALTER TABLE `chat_room`
MODIFY `chat_room_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chat_roomv`
--
ALTER TABLE `chat_roomv`
MODIFY `chat_room_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE `receivers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `userhelp`
--
ALTER TABLE `userhelp`
MODIFY `help_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
MODIFY `volunteer_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blooddinfo`
--
ALTER TABLE `blooddinfo`
ADD CONSTRAINT `blooddinfo_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `receivers` (`id`);

--
-- Constraints for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
ADD CONSTRAINT `bloodinfo_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `hospitals` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
