-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 05, 2015 at 03:49 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lab_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `quote_id` int(255) NOT NULL,
  `quote_text` text NOT NULL,
  `source` varchar(255) DEFAULT '',
  `year` smallint(4) DEFAULT NULL,
  `user_id` int(32) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`quote_id`, `quote_text`, `source`, `year`, `user_id`, `time`) VALUES
(1, 'f', 'g', 0, 2, '0000-00-00 00:00:00'),
(2, 'Hejsan', 'Emma', 0, 2, '0000-00-00 00:00:00'),
(3, 'Nu blommar det!', 'Maria', 0, 3, '0000-00-00 00:00:00'),
(5, 'I''ll be back.', 'Arnold', 1984, 3, '2015-06-05 11:46:34'),
(8, 'dsa', 'as', -300, 3, '2015-06-05 11:48:50'),
(9, 'This is an entry.', 'Hampi', 0, 4, '0000-00-00 00:00:00'),
(10, 'sdfdfsdf', 'sdfsd', 0, 4, '0000-00-00 00:00:00'),
(11, 'dfsdeaa', 'gg', 0, 4, '0000-00-00 00:00:00'),
(12, '', '', 0, 3, '2015-06-05 13:39:12'),
(13, '', '', 0, 3, '2015-06-05 13:39:57'),
(14, '', '', 0, 3, '2015-06-05 13:40:53'),
(15, '', '', 0, 3, '2015-06-05 13:42:43'),
(16, 'Hej', 'Nolla', 1973, 3, '2015-06-05 13:44:04'),
(17, 'WE are all the winners', 'Danmark', 1995, 3, '2015-06-05 13:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(32) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(127) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `salt`) VALUES
(2, 'hep', 'hep@hep.com', 'f5f7aa11c3fc87382b54425edae56f15e5e0f378', '56713269fd291b7bf931c3'),
(3, 'jonas', 'jonas.gabrielson@me.com', '123e9fe2dc85cd6fd24d1415000ada10357c79ee', 'b782ab7315d2053383aa0a'),
(4, 'maria', 'maria@maria.com', '520e5ba73ccc25ebede0bc1e729b63e204b5f6d7', 'dde153e4f09247f5b7476d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `quote_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(32) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
