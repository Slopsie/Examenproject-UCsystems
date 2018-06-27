# Examenproject-UCsystems
CodeIgniter project for UCsystems

sql code to duplicate database

-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 12:50 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucalert`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `ticket_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 1, 'brad', 'brad@gmail.com', 'testing', '2018-06-11 14:07:01'),
(2, 1, 'brad', '', 'testing some more', '2018-06-13 07:37:54'),
(3, 1, 'brad', '', 'testing again', '2018-06-13 07:42:23'),
(4, 1, 'brad', '', 'nog meer testen', '2018-06-13 12:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `created_at`) VALUES
(1, 'Post One', 'post-one', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus pharetra leo at tincidunt. Aenean sit amet finibus leo. Morbi aliquet eleifend congue. Donec sed nibh et dolor rhoncus rutrum. Mauris et elit quis mauris luctus blandit. Sed id sollicitudin metus. Donec ornare arcu quam, ut congue nunc rhoncus imperdiet. Phasellus maximus dolor vehicula euismod mattis. Proin convallis nec ipsum non mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\n', '2018-05-28 09:43:46'),
(2, 'Post Two', 'post-two', 'Sed placerat euismod arcu, gravida varius erat porta ac. Nulla semper nunc eget rhoncus faucibus. Mauris vehicula imperdiet risus nec dictum. Sed quis est vitae mi semper vehicula. Integer a aliquam neque. Vestibulum interdum scelerisque tortor ac condimentum. Sed eleifend mollis nunc, lobortis bibendum ligula porta euismod. Curabitur vitae sem non elit dictum ultrices varius in libero. Donec eget nunc enim. Aliquam tempus consequat pulvinar. Proin in nisl nec massa congue accumsan at et dolor. Nullam venenatis luctus tellus elementum eleifend. Nullam at ex quis metus consectetur suscipit hendrerit at nulla. Ut pretium imperdiet condimentum.\r\n\r\n', '2018-05-28 09:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `received_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `resolved` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `subject`, `slug`, `body`, `received_at`, `resolved`) VALUES
(1, 'broken cable', 'broken-cable', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt ligula sapien, id placerat risus blandit non. Donec et feugiat metus, non sodales tortor. Suspendisse vulputate ultricies mi eu laoreet. Suspendisse pulvinar lobortis leo, vitae convallis sem pulvinar a. Integer rhoncus mauris sit amet lacinia commodo. Aliquam vehicula nunc eget urna feugiat ultrices. Aenean leo dolor, feugiat ut justo vitae, scelerisque condimentum ligula. Phasellus odio dolor, sodales id quam id, varius fringilla nibh. Cras aliquam dapibus feugiat. Donec mollis justo vel est gravida viverra. Nullam blandit odio ut quam convallis placerat id ut erat. Sed ut volutpat enim. Donec non felis orci. Phasellus rhoncus felis quis lorem euismod, at volutpat odio efficitur. Etiam faucibus diam ut elit egestas hendrerit.\r\n\r\n', '2018-06-05 00:00:00', 1),
(2, 'broken cable as well', 'broken-cable2', 'Curabitur nec est nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec commodo dui, et cursus ante. Curabitur finibus non ipsum eget auctor. Proin mattis porttitor eros at consectetur. In eu porta felis. Vivamus blandit, risus id rutrum ultrices, massa nunc facilisis orci, id cursus nulla neque vel mauris. Donec elementum justo eget fermentum efficitur. Ut iaculis commodo justo vel volutpat. Etiam imperdiet arcu et sapien vestibulum, ac commodo nisi semper. In lacinia nisl in enim convallis, tristique auctor arcu accumsan.\r\n\r\n', '2018-06-05 00:00:00', 1),
(3, 'why are all these cables broken', 'broken-again', 'Nulla laoreet purus at lacinia varius. Morbi commodo urna ut mi pretium, sit amet fringilla quam tempus. Vivamus aliquet eros vel metus ullamcorper tristique. Sed faucibus magna dignissim, aliquam quam quis, lobortis odio. Praesent lacus velit, efficitur et iaculis id, porttitor vitae lectus. Vivamus eget interdum magna, quis vestibulum lorem. Proin ultrices venenatis ipsum, quis blandit eros finibus quis. Maecenas hendrerit sem lorem, et lacinia metus ultricies ac. Quisque vulputate elit ac quam ullamcorper fringilla. Curabitur et sollicitudin enim.\r\n\r\n', '2018-06-05 00:00:00', 1),
(4, 'No internet', 'no-internet', 'Donec vestibulum sapien diam, ut suscipit turpis faucibus a. Maecenas pharetra vestibulum malesuada. Maecenas ut turpis sed dui finibus congue. Phasellus lectus arcu, laoreet quis libero quis, bibendum vehicula sapien. Curabitur mollis consequat vehicula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean fermentum fringilla purus, sed lobortis turpis consectetur sit amet. Curabitur sodales id arcu quis tincidunt. Phasellus aliquet risus ut turpis porttitor tempus.\r\n\r\n', '2018-06-05 00:00:00', 1),
(5, 'no wifi', 'no-wifi', 'Duis vel sapien hendrerit, ornare dui eget, sodales urna. Sed fermentum volutpat tortor tincidunt placerat. Donec a tempor leo. Integer elementum laoreet mattis. Donec viverra erat vitae odio lobortis, quis ultricies sapien gravida. Suspendisse sit amet lectus semper, mollis quam nec, aliquam ipsum. Nullam at lectus quis lectus lobortis pretium eu rutrum quam. Aenean dolor sem, interdum ac eleifend sed, pellentesque ac neque. Donec tristique molestie leo eu egestas. Sed iaculis finibus metus, nec malesuada augue eleifend id. Nunc tincidunt enim orci, vel ornare ante tristique egestas. Nam suscipit ultricies ex id pulvinar. Pellentesque commodo odio nec porttitor efficitur.\r\n\r\n', '2018-06-05 00:00:00', 1),
(7, 'hello there', 'hello-there', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla pretium, urna vitae convallis fringilla, ipsum ante maximus tellus, sed hendrerit lectus augue vitae nunc. Sed in urna nulla. Ut venenatis in tellus non tincidunt. Mauris mattis hendrerit efficitur. Proin condimentum commodo aliquet. Nulla vitae accumsan ligula. ', '2018-06-11 14:32:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'Brad', '01921', 'brad@gmail.com', 'brad', '81dc9bdb52d04dc20036dbd8313ed055', '2018-05-28 14:54:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
