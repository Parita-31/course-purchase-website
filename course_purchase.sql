-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 07:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_purchase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `email`, `password`) VALUES
(1, 'Dave Parita', 'admin@demo.com', '3126');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `name`) VALUES
(1, 'PHP'),
(2, 'Java'),
(3, 'DSA'),
(4, 'C language'),
(5, 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(5) NOT NULL,
  `message` mediumtext NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `message`, `name`, `email`, `subject`) VALUES
(1, 'Glad to visit these wonderful website...', 'abc', 'abc@gmail.com', 'Appreciation'),
(2, 'I have a problem while using website it is crashing please help', 'xyz', 'xyz@gmail.com', 'Fault');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cid` int(5) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `description` mediumtext NOT NULL,
  `img` varchar(50) NOT NULL,
  `total_lect` int(10) NOT NULL,
  `trainer_name` char(50) NOT NULL,
  `cat_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `course_name`, `price`, `description`, `img`, `total_lect`, `trainer_name`, `cat_id`) VALUES
(1, 'PHP', 2000, 'Here you will learn the basic of PHP and also learn SQL connectivity with PHP.', 'course-img/1.jpg', 24, 'Dave Parita', 1),
(2, 'Java', 2500, 'In these you can learn basic fundamentals of java', 'course-img/2.jpg', 30, 'ABCXYZ', 2),
(3, 'PHP and MYSQL', 2300, 'With PHP you will also learn the connectivity of it with mysql.', 'course-img/3.jpg', 20, 'David', 1),
(4, 'PHP frontend and backend', 3000, 'In these both the frontend and backend will be taught.', 'course-img/4.jpg', 29, 'Srishti', 1),
(5, 'PHP Beginner', 1500, 'Basics of php will be taught in these like oop,function etc..', 'course-img/5.jpg', 15, 'Prachi', 1),
(6, 'PHP crash course', 1700, 'This course is best suitable for beginners.', 'course-img/6.png', 23, 'Rohit', 1),
(7, 'Java Beginner', 2600, 'The basics of java can be learned in it with threading,oop etc', 'course-img/7.jpg', 19, 'Shilpa', 2),
(8, 'Advanced Java', 3000, 'Advanced technologies for java are taught in these course.', 'course-img/8.jpg', 26, 'Prapti', 2),
(9, 'Java Full Stack', 3500, 'All the things of java will be taught in these course.', 'course-img/9.jpg', 35, 'Pratham', 2),
(10, 'OOP in Java', 1500, 'OOP concepts in java are explained in these course.', 'course-img/10.jpg', 12, 'Arjun', 2),
(11, 'DSA with c++', 2000, 'Learning DSA concepts using c++ is very helpful', 'course-img/11.jpg', 25, 'Shiv', 3),
(12, 'DSA with Java', 2200, 'Learning DSA concepts using Java is very helpful', 'course-img/12.png', 26, 'Jalpa', 3),
(13, 'DSA with Python', 2300, 'Learning DSA concepts using Python is a great choice', 'course-img/13.png', 20, 'Mahesh', 3),
(14, 'DSA with C', 1900, 'Learning DSA concepts using C is very useful', 'course-img/14.jpg', 24, 'Vicky', 3),
(15, 'DSA +leetcode solution', 3000, 'DSA concpets explained with solving of leetcode', 'course-img/15.png', 35, 'Prachi', 3),
(16, 'C programing for beginners', 2000, 'Learn all the fundamentals of c language.', 'course-img/16.png', 36, 'Pratham', 4),
(17, 'Advanced C programming', 2600, 'All the advanced features of c are taught.', 'course-img/17.png', 40, 'Nilay', 4),
(18, 'Advanced C programming:Pointer', 2400, 'All advanced features for pointers in c', 'course-img/18.jpg', 20, 'Srishti', 4),
(19, 'Introduction to C', 1400, 'All the basics of c will be explained in these course', 'course-img/19.jpg', 16, 'Chetna', 4),
(20, 'C with standard libraries', 2500, 'The standard libraries in c will be explained', 'course-img/20.jpg', 25, 'Chirag', 4),
(21, 'Python Beginners', 2300, 'The fundamentals of python are taught in very detail.', 'course-img/21.jpg', 28, 'Dave Parita', 5),
(22, 'Python for Cybersecurity', 2900, 'How to use python in cybersecurity will be explained', 'course-img/22.jpg', 32, 'Rohit', 5),
(23, 'Data Analysis with Python', 3400, 'Python will be used with data analysis and how to do so will be explained', 'course-img/23.jpg', 35, 'Satyen', 5),
(24, 'Advanced Python', 2500, 'The advanced feature of python and different libraries will be explained', 'course-img/24.jpg', 22, 'Arpita', 5),
(25, 'AI and ML using Python', 2600, 'Learn ai and ml using python programming.', 'course-img/25.jpg', 24, 'Ashish', 5);

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `lid` int(5) NOT NULL,
  `cid` int(5) NOT NULL,
  `url` varchar(60) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`lid`, `cid`, `url`, `title`) VALUES
(1, 1, 'videos/l_id-1.mp4', 'Introduction to PHP'),
(2, 6, 'videos/l_id-2.mp4', 'PHP Tutorial'),
(3, 5, 'videos/l_id-3.mp4', 'PHP tutorial beginner'),
(4, 2, 'videos/l_id-4.mp4', 'Java Introduction'),
(5, 7, 'videos/l_id-5.mp4', 'Java Tutorial'),
(6, 3, 'videos/l_id-6.mp4', 'PHP with MYSQL '),
(7, 4, 'videos/l_id-7.mp4', 'PHP frontend and backend '),
(8, 8, 'videos/l_id-8.mp4', 'Advanced Java'),
(9, 9, 'videos/l_id-9.mp4', ' Java Full Stack'),
(10, 10, 'videos/l_id-10.mp4', 'OOP in java'),
(11, 11, 'videos/l_id-11.mp4', 'DSA with C++'),
(12, 12, 'videos/l_id-12.mp4', 'DSA withJava'),
(13, 13, 'videos/l_id-13.mp4', 'DSA with Python'),
(14, 14, 'videos/l_id-14.mp4', 'DSA with C'),
(15, 15, 'videos/l_id-15.mp4', 'DSA with leetcode solution'),
(16, 16, 'videos/l_id-16.mp4', 'C for Beginners'),
(17, 17, 'videos/l_id-17.mp4', 'Advance C language'),
(18, 18, 'videos/l_id-18.mp4', 'Advance C language : Pointer'),
(19, 19, 'videos/l_id-19.mp4', 'Intro to C'),
(20, 20, 'videos/l_id-20.mp4', 'C with slb'),
(21, 21, 'videos/l_id-21.mp4', 'Python for beginners'),
(22, 22, 'videos/l_id-22.mp4', 'Cyber security using Puthon'),
(23, 23, 'videos/l_id-23.mp4', 'Data Analysis using Python'),
(24, 24, 'videos/l_id-24.mp4', 'Advance Python programming'),
(25, 25, 'videos/l_id-25.mp4', 'AI and ML understanding using ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(5) NOT NULL,
  `o_date` date NOT NULL,
  `cid` int(5) NOT NULL,
  `uid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `o_date`, `cid`, `uid`) VALUES
(1, '2024-07-01', 1, 1),
(2, '2024-06-11', 15, 2),
(3, '2024-07-08', 12, 3),
(4, '2024-06-18', 8, 4),
(5, '2024-06-12', 17, 5),
(6, '2024-06-26', 23, 6),
(7, '2024-06-23', 3, 7),
(8, '2024-06-02', 10, 8),
(9, '2024-06-04', 6, 9),
(10, '2024-07-05', 24, 10),
(23, '2024-07-25', 5, 3),
(27, '2024-07-29', 25, 1),
(28, '2024-08-02', 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `rid` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `r_date` date NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`rid`, `uid`, `r_date`, `message`) VALUES
(1, 1, '2024-07-03', 'The PHP course was very helpful and I learned to create my own website. The trainer explains very nicely.'),
(2, 2, '2024-06-17', 'These course was very useful and the solution of leetcode was done nicely.\r\n'),
(3, 3, '2024-07-14', 'It was a very nice course and dsa with java is explained very easily'),
(4, 4, '2024-06-28', 'Thank you very much for you best services'),
(5, 5, '2024-06-30', 'All the Advanced features of C language are explained in detail. Thank You'),
(6, 6, '2024-07-02', 'Very nicely explained.Thank You😊'),
(7, 7, '2024-07-03', 'These course was very helpful. Thanks'),
(8, 8, '2024-06-12', 'The OOP are explained in very detailed manner. Thank you😁'),
(9, 9, '2024-06-28', 'These crash course is very helpful to learn in short time. thanks for your service'),
(10, 10, '2024-07-21', 'All the advanced features of python are explained nicely by trainer.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`) VALUES
(1, 'Parii', 'user@demo.com', '1234'),
(2, 'Shiv', 'test@demo.com', 'test'),
(3, 'Jalpa', 'jalpa@gmail.com', 'jalpa04'),
(4, 'Satyen', 'satyen28@gmail.com', 'satyen74'),
(5, 'Shambhavi', 'shambhavii@gmail.com', 'shambhu29'),
(6, 'Jhanvi', 'jhanvi@gmail.com', 'jh06'),
(7, 'Arjit', 'arj07@gmail.com', '4321'),
(8, 'Ritu', 'rt001@gmail.com', 'rituu'),
(9, 'Nick', 'nick@gmail.com', '4567'),
(10, 'Gita', 'gitu09@gmail.com', '6789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `lid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `rid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
