-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2023 at 01:56 AM
-- Server version: 8.0.28
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcse`
--

use heroku_bbc518307663e76;

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`id`) VALUES
(7),
(8),
(9),
(3),
(10);

-- --------------------------------------------------------

--
-- Table structure for table `mycheatbook`
--

CREATE TABLE `mycheatbook` (
  `id` int NOT NULL,
  `fun` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `language` varchar(200) NOT NULL,
  `cheat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mycheatbook`
--

INSERT INTO `mycheatbook` (`id`, `fun`, `language`, `cheat`) VALUES
(3, 'dsds', 'C#', '<p>ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</p>\r\n'),
(7, 'variable', 'C++', '<pre>\r\n//setup some variables with data types\r\n\r\nint number = 100;</pre>\r\n\r\n<p>char letter;</p>\r\n\r\n<p>letter = &#39;c&#39;;</p>\r\n\r\n<p>const int pi = 3.14;</p>\r\n'),
(8, 'do-while-loop', 'C++', '<pre>\r\nint price = 300;</pre>\r\n\r\n<p>do {</p>\r\n\r\n<p>std::cout &lt;&lt; &quot;Too expensive!&quot;;</p>\r\n\r\n<p>} while (price &gt; 500);</p>\r\n'),
(9, 'for loop', 'C++', '<p>for(iiiiii) test</p>\r\n'),
(10, 'testDBconnection', 'Python', '<p>DBconnection</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `studyresource`
--

CREATE TABLE `studyresource` (
  `id` int NOT NULL,
  `resource` varchar(500) NOT NULL,
  `language` varchar(500) NOT NULL,
  `about` varchar(100) NOT NULL,
  `url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `studyresource`
--

INSERT INTO `studyresource` (`id`, `resource`, `language`, `about`, `url`) VALUES
(2, 'stackoverflow', 'C++', 'vector', 'https://stackoverflow.com/questions/3167272/how-does-c-stdvector-work'),
(3, 'w3schools', 'HTML', 'Bootstrap Alerts', 'https://www.w3schools.com/bootstrap/bootstrap_alerts.asp#:~:text=To%20close%20the%20alert%20message,the%20alert%20box%20will%20disappear).'),
(5, 'w3schools', 'Css', 'XML-AJAX-Server Response', 'https://www.w3schools.com/xml/ajax_xmlhttprequest_response.asp'),
(6, 'stackoverflow', 'C#', 'Global Variable', 'https://stackoverflow.com/questions/35083652/how-to-declare-a-variable-for-global-use'),
(7, 'stackoverflow', 'C#', 'Referencing a variable from another method', 'https://stackoverflow.com/questions/9301197/referencing-a-variable-from-another-method'),
(12, 'geeksforgeeks', 'HTML', 'footer to stay at the bottom of a Web page', 'https://www.geeksforgeeks.org/how-to-create-footer-to-stay-at-the-bottom-of-a-web-page/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'june', '202cb962ac59075b964b07152d234b70'),
(2, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'july', '202cb962ac59075b964b07152d234b70'),
(4, '22332', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, '111', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, '123', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, '555', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, '666', 'd41d8cd98f00b204e9800998ecf8427e'),
(9, '777', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, '888', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, '999', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mycheatbook`
--
ALTER TABLE `mycheatbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studyresource`
--
ALTER TABLE `studyresource`
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
-- AUTO_INCREMENT for table `mycheatbook`
--
ALTER TABLE `mycheatbook`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `studyresource`
--
ALTER TABLE `studyresource`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
