-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2017 at 04:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'Php'),
(2, 'Html'),
(3, 'Css'),
(4, 'JavaScript'),
(5, 'Jquery'),
(6, 'Bootstrap'),
(7, 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `ans1` varchar(200) NOT NULL,
  `ans2` varchar(200) NOT NULL,
  `ans3` varchar(200) NOT NULL,
  `ans4` varchar(200) NOT NULL,
  `ans` int(5) NOT NULL,
  `cat_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(1, 'What does PHP stand for?', 'PHP: Hypertext Preprocessor', 'Private Home Page', 'Personal Hypertext Processor', 'None of these', 0, 1),
(5, 'How do you write \"Hello World\" in PHP?', 'echo \"Hello World\";', '\"Hello World\";', 'Document.Write(\"Hello World\");', 'None of these', 0, 1),
(6, 'All variables in PHP start with which symbol?', '$', '!', '&', 'none', 1, 1),
(7, 'The PHP syntax is most similar to:', 'Perl and C', 'JavaScript', 'VBScript', 'None', 2, 1),
(8, 'How do you get information from a form that is submitted using the \"get\" method?', '$_GET[];', 'Request.QueryString;', 'Request.Form;', 'None', 0, 1),
(9, 'What does HTML stand for?', 'Hyper Text Markup Language', 'Hyperlinks and Text Markup Language', 'Home Tool Markup Language', 'None of these', 0, 2),
(10, 'Who is making the Web standards?', 'Google', 'Microsoft', 'The World Wide Web Consortium', 'Mozilla', 2, 2),
(11, 'Choose the correct HTML element for the largest heading:', '<head>', '<heading>', '<h1>', '<h6>', 2, 2),
(12, 'What is the correct HTML element for inserting a line break?', ' <break>', '<br>', '<lb>', 'none', 1, 2),
(13, 'What does CSS stand for?', 'Creative Style Sheets', 'Cascading Style Sheets', ' Computer Style Sheets', 'Colorful Style Sheets', 1, 3),
(14, 'What is the correct HTML for referring to an external style sheet?', '(<link rel=\"stylesheet\" type=\"text/css\" href=\"mystyle.css\">)', '(<stylesheet>mystyle.css</stylesheet>)', '\"<style src=\"mystyle.css\">\"', 'none', 0, 3),
(15, ' Where in an HTML document is the correct place to refer to an external style sheet?', ' In the <body> section', ' In the <head> section', 'At the end of the document', 'none', 1, 3),
(16, 'Inside which HTML element do we put the JavaScript?', '<javascript>', '<script>', '<js>', '<scripting>', 1, 4),
(17, 'Where is the correct place to insert a JavaScript?', 'The <head> section', 'Both the <head> section and the <body> section are correct', 'The <body> section\r\n', 'none', 0, 4),
(18, ' Which class provides a responsive fixed width container?', '.container-fluid', '.container', '.container-fixed\r\n', 'none', 1, 6),
(19, 'Which class provides a full width \r\n container, spanning the entire width of the viewport?', ' .container', ' .container-fluid', '.container-fixed', ' none', 1, 6),
(20, ' Ten years ago, P was half of Q\'s age. If the ratio of their present ages is \r\n3\r\n:\r\n4\r\n3:4, what will be the total of their present ages?', '45', '40', '35', '30', 2, 7),
(21, 'Father is aged three times more than his son Sunil. After \r\n8\r\n8 years, he would be two and a half times of Sunil\'s age. After further \r\n8\r\n8 years, how many times would he be of Sunil\'s age?', '5 times', '2 times', '3 times', '1 times', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pass`, `img`) VALUES
(21, 'Dhiraj kumar', 'kumardhiraj93@gmail.com', '123456789', 'Untitled copy.jpg'),
(20, 'Saurabh kumar', 'saurabhkr579@gmail.com', 'saurabh', 'sau.jpg'),
(19, 'Wishvanath Anand', 'anandwishvanath@gmail.com', 'wishva', 'wishvaa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`name`,`img`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
