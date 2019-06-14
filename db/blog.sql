-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 03:05 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `message`, `post_id`, `date`, `status`) VALUES
(17, 'JACKSON JACOB', 'very', 14, 'Friday 14 June 2019', 0),
(18, 'joyce jacob', 'nzuri', 16, 'Friday 14 June 2019', 0),
(19, 'dionis', 'nice test post', 13, 'Friday 14 June 2019', 0),
(20, 'JACKSON JACOB', 'njema', 16, 'Friday 14 June 2019', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `comments` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `date`, `image`, `comments`, `views`) VALUES
(13, 'test post', ' test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test', 'Friday 14 June 2019', '../images/sa.PNG', 0, 0),
(14, 'j first blog', 'j first blogj first blogj first blogj first blogj first blogj first blogj first blogj first blogj first blogj first blogj first blogj first blogj first blogj first blogj first blogj first blogj first blogj first blogj first blogj first blogj first blogj f', 'Friday 14 June 2019', '../images/25-cars-worth-waiting-for-2019-2022-rolls-royce-cullinan-placement-1526580466.jpg', 0, 0),
(16, 'j first blog', 'clear test clear test clear test clear test clear test clear test clear test clear test clear test clear test clear test clear test clear test clear test clear test clear test clear test clear test clear test clear test clear test clear test clear test ', 'Friday 14 June 2019', '../images/25-cars-worth-waiting-for-2019-2022-rolls-royce-cullinan-placement-1526580466.jpg', 3, 23),
(17, 'test three ', 'test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three ', 'Friday 14 June 2019', '../images/25-cars-worth-waiting-for-2019-2022-rolls-royce-cullinan-placement-1526580466.jpg', 0, 0),
(18, 'test three test three ', 'test three ðŸ˜ test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three test three v', 'Friday 14 June 2019', '../images/sa.PNG', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
