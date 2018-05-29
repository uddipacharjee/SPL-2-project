-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2018 at 06:21 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(20) NOT NULL,
  `question_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `answer` varchar(2000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `question_id`, `user_id`, `answer`, `time`) VALUES
(1, 3, 2, 'Find out what people fish for in your area. Many newspapers have local fishing reports that will list locations and tell you what fish, if any, are biting and what theyâ€™re biting on. You can also ask around at angling shops, marinas and camping supply stores in the area for tips.\r\n\r\n    Catfish are common river and lake fish all over the United States. Channel catfish, blue catfish, and flathead catfish are all commonly caught for eating. Look for deep water at the mouth of large creeks and rivers, and keep an eye out for sudden cut banks or drops. Catfish love these spots, but will head out to deeper water when it warms', '2018-04-26 02:29:46'),
(2, 3, 2, 'Most freshwater fish are crepuscular feeders, which means they come out to eat at dawn and at dusk, making sunrise and sunset the most effective fishing hours. ', '2018-04-26 02:49:25'),
(3, 3, 1, 'Going to the sporting goods store can be an intimidating experience, but you do not need to break the bank to pick an appropriate rod and reel to get started with. Talk to the guy behind the counter for advice on a rod and pick something in your price range. ', '2018-04-26 02:50:47'),
(4, 3, 1, 'Typically, a medium-length pole will be appropriate for most beginners. Pick a rod that\'s roughly as long as you are tall and that\'s a comfortable weight for your casting arm. In terms of flexibility, you\'ll probably want a fairly \"loose\" (that is, not rigid) rod to get started with. These rods are less likely to break line and--while not strong enough to fish for big game fish--are plenty strong for the average fish a beginner catches.', '2018-04-26 02:58:45'),
(5, 3, 5, 'The two basic kinds of reels are baitcast reels, which spool vertically when you\'re holding the rod, and spinning reels, which spool perpendicular to the rod. Spinning reels are more common for the beginner, and are available in open and closed varieties. Closed varieties are generally operated with a push-button and are great for the beginner. ', '2018-04-26 03:00:30'),
(6, 3, 1, 'Get an appropriate fishing line and an appropriate variety of hook. The smaller the hook and line, the better the chance of a bite. You want to match the kind of line to the type of pole you\'ve got--if you\'ve got a particularly rigid pole, you\'ll want fairly strong test line. If you\'ve got a looser pole, get the lightest gauge you can. Smaller line means more fish.\r\n\r\n    You need hooks that will fit the kind of fish you\'re planning to catch. Number 1 hooks work well for many things, but size 8 to 5/0 are more appropriate for some fish. Ask your local tackle shop about the hook sizing system (i.e. 6,4,2,1,1/0, 2/0) and the best tools for the job.', '2018-04-26 03:02:01'),
(7, 4, 2, 'you can learn to ride cycle after enough practising.', '2018-04-26 08:14:06'),
(8, 9, 2, 'sjnmjsnMS,,MS ,MS', '2018-04-26 09:03:06'),
(9, 3, 2, 'test answer', '2018-04-26 09:07:39'),
(10, 10, 2, '<p>as</p>\r\n', '2018-04-28 05:45:18'),
(11, 11, 2, '<p>coding is easy</p>\r\n', '2018-04-28 05:55:09'),
(12, 10, 2, '<p>askjdhajksd</p>\r\n', '2018-04-28 06:53:17'),
(13, 3, 2, '<p>fishing is awsome</p>\r\n', '2018-04-30 05:42:44'),
(14, 3, 7, '<p>adasdasdsdfsdfsd</p>\r\n', '2018-04-30 06:57:34'),
(15, 2, 1, 'start with the book written by herbert sheild', '2018-05-06 04:11:30'),
(16, 3, 2, 'aasdadasd', '2018-05-06 12:19:32'),
(17, 2, 2, '<p>practise</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-05-07 05:24:42'),
(18, 2, 2, '<p>practise more and more</p>\r\n', '2018-05-07 05:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `answerLikeTable`
--

CREATE TABLE `answerLikeTable` (
  `id` int(10) NOT NULL,
  `answer_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `liked` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answerLikeTable`
--

INSERT INTO `answerLikeTable` (`id`, `answer_id`, `user_id`, `liked`) VALUES
(1, 1, 2, 1),
(2, 2, 2, 0),
(3, 5, 2, 1),
(4, 4, 2, 1),
(5, 16, 2, 1),
(6, 14, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `likeTable`
--

CREATE TABLE `likeTable` (
  `id` int(20) NOT NULL,
  `question_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `liked` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likeTable`
--

INSERT INTO `likeTable` (`id`, `question_id`, `user_id`, `liked`) VALUES
(1, 3, 5, 1),
(2, 3, 2, 1),
(3, 2, 2, 1),
(4, 4, 2, 1),
(5, 3, 1, 1),
(6, 2, 1, 1),
(7, 3, 3, 1),
(8, 0, 2, 1),
(9, 0, 2, 1),
(10, 0, 2, 1),
(11, 0, 2, 1),
(12, 0, 2, 1),
(13, 0, 2, 1),
(14, 0, 2, 1),
(15, 0, 2, 1),
(16, 0, 2, 1),
(17, 3, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(20) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `question` varchar(5000) NOT NULL,
  `category` varchar(100) NOT NULL,
  `user_id` int(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `title`, `question`, `category`, `user_id`, `time`) VALUES
(1, 'howto', 'swim', 'learn', 2, '2018-04-28 17:29:16'),
(2, 'how to code?', 'i want to learn coding in c++. How should i start?', 'coding', 5, '2018-04-28 18:21:01'),
(3, 'how to catch  fish?', 'i want to catch fish.i have a pond . i want to know how to catch fish?', 'fishing', 5, '2018-04-30 05:43:27'),
(4, 'how to ride by-cycle?', 'i have a cycle.I want to learn how to ride cycle?', 'learning', 5, '2018-04-28 11:18:08'),
(6, 'how to eat', 'eat', 'e', 2, '2018-04-28 11:18:08'),
(8, 'asasa\'qwqw', 'asas\'we', 'qwqw', 2, '2018-04-28 11:18:08'),
(9, 'how to eat?', 'Get an appropriate fishing line and an appropriate variety of hook. The smaller the hook and line, the better the chance of a bite. You want to match the kind of line to the type of pole you\'ve got--if you\'ve got a particularly rigid pole, you\'ll want fairly strong test line. If you\'ve got a looser pole, get the lightest gauge you can. Smaller line means more fish.\r\n\r\n    You need hooks that will fit the kind of fish you\'re planning to catch. Number 1 hooks work well for many things, but size 8 to 5/0 are more appropriate for some fish. Ask your local tackle shop about the hook sizing system (i.e. 6,4,2,1,1/0, 2/0) and the best tools for the job.\r\n    Making a hook knot is difficult with small hooks and line and can be tricky to get the hang of. Ask a tackle shop owner or your fishing buddy to', 'eating', 5, '2018-04-28 11:18:08'),
(10, 'how to yoga', '<h2 style=\"font-style:italic;\">hello everyone.I want to know about <strong>yoga</strong>.refer some book.</h2>\r\n\r\n<ol>\r\n	<li>from where to learn</li>\r\n	<li>how much time require to master</li>\r\n</ol>\r\n', 'yoga', 2, '2018-04-28 11:18:08'),
(11, 'how to code in java?', '<p>i wan</p>\r\n', 'coding', 6, '2018-04-28 11:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `reg_date`) VALUES
(1, 'xyz', 'xyz@gmail.com', 'xyz123', '2018-04-23 14:16:38'),
(2, 'abc', 'abc@gmail.com', 'abc123', '2018-04-23 14:32:24'),
(3, 'poi', 'poi@gmail.com', '123', '2018-04-23 14:42:32'),
(4, 'zxc', 'zxc@gmail.com', 'zxc', '2018-04-23 14:44:10'),
(5, 'samima', 'samima@gmail.com', '1234', '2018-04-24 07:44:00'),
(6, 'rafe', 'rafe@gmail.com', '123', '2018-04-28 05:53:16'),
(7, 'moumita', 'm@gmail.com', '123', '2018-04-30 06:48:07'),
(8, 'sajib', 'ss@gmail.com', '123', '2018-05-24 06:54:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answerLikeTable`
--
ALTER TABLE `answerLikeTable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likeTable`
--
ALTER TABLE `likeTable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `answerLikeTable`
--
ALTER TABLE `answerLikeTable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `likeTable`
--
ALTER TABLE `likeTable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
