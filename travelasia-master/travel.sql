-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 11:01 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `photo`) VALUES
(1, 'Усан аялал', NULL),
(2, 'Явган аялал', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`, `description`) VALUES
(1, 'Орос улс Байгаль нуур', 'Байгаль нуур нь Орос улсын урд хэсэгт оршдог дэлхийн хамгийн тунгалаг нуур юм.'),
(2, 'Орос улс Кавказын нуруу', 'kj;lkj;lkj');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_username` varchar(20) NOT NULL,
  `travel_id` int(11) NOT NULL,
  `traveler_fname` varchar(30) NOT NULL,
  `traveler_lname` varchar(30) NOT NULL,
  `traveler_mail` varchar(30) NOT NULL,
  `traveler_phone` int(20) NOT NULL,
  `traveler_gender` varchar(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_username`, `travel_id`, `traveler_fname`, `traveler_lname`, `traveler_mail`, `traveler_phone`, `traveler_gender`, `date`) VALUES
(191108015, 'B170910800', 191028001, 'zola', 'ANZO', 'gffds', 99246464, 'MALE', '2019-11-17 17:37:49'),
(191108016, 'B170910800', 191028001, 'zola', 'ANZO', 'gffds', 99246464, 'MALE', '2019-11-17 17:38:31'),
(191108017, 'B170910800', 191028001, 'vydfuaivjlkfsdlvd', 'ANZO', 'gffds', 99246464, 'MALE', '2019-11-17 17:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(400) NOT NULL,
  `price` double NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `name`, `photo`, `description`, `price`, `start`, `end`, `category_id`, `location_id`) VALUES
(121, 'Tsedensodnom Lkhagvasuren', '', 'хувьцаа', 444, '2019-11-11', '2019-11-15', 2, 2),
(191028001, 'Байгаль нуур', '', '3 хоногийн турш Байгаль нуураар завьтай аялах энэхүү аялал маань сайхан байх болно.', 250000, '2019-10-28', '2019-10-31', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `phone` varchar(8) DEFAULT NULL,
  `user_type_code` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `firstname`, `lastname`, `birthdate`, `gender`, `nationality`, `email`, `password`, `phone`, `user_type_code`) VALUES
('B170910038', NULL, NULL, '1999-07-07', NULL, NULL, 'ltsedee@gmail.com', '4', NULL, 'U'),
('B170910800', NULL, NULL, NULL, NULL, NULL, 'zolooanzo@gmail.com', '123456', NULL, 'U'),
('claude', 'Tsedensodnom', 'Lkhagvasuren', '2000-10-15', 'Male', 'Mongolia', 'claudeburbank@gmail.com', 'Woosh', '95900501', 'U'),
('lol', NULL, NULL, NULL, NULL, NULL, 'asdf@gmail.com', '454545', NULL, 'U'),
('lol1', NULL, NULL, NULL, NULL, NULL, 'asadf@gmail.com', '111111', NULL, 'U'),
('whitepigeon', 'Tsedensodnom', 'Lkhagvasuren', '2019-10-27', 'Male', NULL, 'cla@gmail.com', '879879797', '9', 'O');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `code` char(1) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`code`, `type`) VALUES
('A', 'Admin'),
('O', 'Operator'),
('U', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_user1_idx` (`user_username`),
  ADD KEY `fk_order_travel1_idx` (`travel_id`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_travel_travel_category1_idx` (`category_id`),
  ADD KEY `fk_travel_location1_idx` (`location_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `phone_UNIQUE` (`phone`),
  ADD KEY `fk_user_user_type_idx` (`user_type_code`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191108018;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191028002;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_order_travel` FOREIGN KEY (`travel_id`) REFERENCES `travel` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order_user` FOREIGN KEY (`user_username`) REFERENCES `user` (`username`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `travel`
--
ALTER TABLE `travel`
  ADD CONSTRAINT `fk_travel_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_travel_location` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_type` FOREIGN KEY (`user_type_code`) REFERENCES `user_type` (`code`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
