-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 08:18 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `lab_id` int(255) NOT NULL,
  `lab_name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `lab_img` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `address` text COLLATE utf8_persian_ci NOT NULL,
  `pastal_code` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `insurance` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `telephone` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `azmayesh` text COLLATE utf8_persian_ci NOT NULL,
  `comments` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`lab_id`, `lab_name`, `lab_img`, `address`, `pastal_code`, `username`, `password`, `mobile`, `insurance`, `telephone`, `azmayesh`, `comments`) VALUES
(4, 'kjlj', 'logo/a595a1549fed78002bb5ac3e125fb88bb.jpg', 'kjnkj', '555555', 'fda', '123', '99999999', 'fdfdfd', '1111', 'nnkll', 'mkkl'),
(5, 'daf', 'logo/22eda48c12cf62ee3b94adc85fa67de1b.jpg', 'klmkl', '45', 'fda', '11', '455', 'kk', '5465', 'klkl', 'klkl'),
(3, 'daf', 'logo/528b0b918f595683f0cdc101e6e5b9c2b.jpg', 'kjldslsdl', '555555', 'fda', '25', '99999999', 'fdfdfd', '1111', 'cxvll', 'dflsls'),
(6, 'آزمایشگاه شماره 1', 'logo/d3229bd55334b5fb6e9f449b5c231aabb.jpg', '1111111', '5422555', '55555555', '123', '1235', '1235', '12545', '55555555', '444444'),
(7, 'آزمایشگاه شماره 1', 'logo/da49a395fd1045fd882750bab639c93db.jpg', '1111111', '5422555', '55555555', '123', '1235', '1235', '12545', '55555555', '444444'),
(8, 'daf', 'logo/2b609443fc21f5a96b2bbc6296ad4e96b.jpg', 'kjkl', '1515454', 'fda', '123', '5464654', 'kljlk', '5455', 'knll', 'klkl'),
(9, 'daf', 'logo/e33157fe26d83c6a6645410eeac4277db.jpg', 'jjkhkjhjk', '5555', '54289078', '123', '55555', 'نhghjh', '5555', 'jbkbjk', 'kjh'),
(10, 'daf', 'logo/0853b586c5853306eb3b18cda98fef6fb.jpg', 'kjhkjhkj', '6465464', '54289078', '123', '15616615', 'kljl', '1555', 'bkhjjk', 'khkk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`lab_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laboratory`
--
ALTER TABLE `laboratory`
  MODIFY `lab_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
