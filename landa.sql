-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 06:50 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landa`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_product`
--

CREATE TABLE `table_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_review` varchar(100) NOT NULL,
  `product_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_product`
--

INSERT INTO `table_product` (`product_id`, `product_name`, `product_review`, `product_picture`) VALUES
(1, 'Braslet 1', 'Braslet 1. Text text text text text text text text text', 'braslet1mini.png'),
(2, 'Braslet 2', 'Braslet 2. Text text text text text text text text text', 'braslet2mini.png'),
(3, 'Braslet 3', 'Braslet 3. Text text text text text text text text text', 'braslet3mini.png'),
(4, 'Braslet 4', 'Braslet 4. Text text text text text text text text text', 'braslet4mini.png'),
(5, 'Braslet 5', 'Braslet 5. Text text text text text text text text text', 'braslet6mini.png'),
(6, 'Braslet 6', 'Braslet 6. Text text text text text text text text text', 'brastetsAllmini.png'),
(7, 'Braslet 7', 'Braslet 7. Text text text text text text text text text', 'keyfolder1mini.png'),
(8, 'Braslet 8', 'Braslet 8. Text text text text text text text text text', 'keyfolder2mini.png'),
(9, 'Braslet 9', 'Braslet 9. Text text text text text text text text text', 'keyfolder5mini.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'dedmastdie', '$2y$10$FwnBT7k6orxVtz.GRX20a.OGTqva.rTrHk4DqwcRnZJqBhRJYTfmK'),
(2, 'faustBFG', '$2y$10$UtC.ejcQ8SzC8MaqRLsT2.pC23ltjlZ/tmDINq2BmCy.5GfzueIp6'),
(3, 'st56688', '$2y$10$r7E6AtS3JbjIuDq1exPOl.igy9/QGUR2lqmhB7Mphd6ZtNmn6ssiO'),
(4, 'admin', '$2y$10$8Xa0NutBLIGa6hgFdW3LiOvsDKSGg0KppWDdRJoqOjCJw5B1HEf5C'),
(5, 'test123', '$2y$10$LQKjLiPFCRZCWZohwI5rneZABt3kVbHZ4mTAdE1i1Y/t57BYFmCIy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_product`
--
ALTER TABLE `table_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`username`(191),`password`(191));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_product`
--
ALTER TABLE `table_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
