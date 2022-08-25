-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 07:40 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products`
(
  `id` int
(11) NOT NULL,
  `name` varchar
(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar
(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`
id`,
`name
`, `price`, `photo`) VALUES
(NULL, 'morecare showergel apricot 300ml', '100', 'images/img-1.jpg'),
(NULL, 'morecare showergel apricot 600ml', '100', 'images/img-2.jpg'),
(NULL, 'morecare showergel herbal 300ml', '100', 'images/img-3.jpg'),
(NULL, 'morecare showergel herbal 600ml', '100', 'images/img-4.jpg'),
(NULL, 'morecare showergel lavender 600ml', '100', 'images/img-5.jpg'),
(NULL, 'morecare showergel lemon 300ml', '100', 'images/img-6.jpg'),
(NULL, 'morecare showergel shea and vitamins 300ml', '100', 'images/img-7.jpg'),
(NULL, 'morecare showergel shea and vitamins 600ml', '100', 'images/img-8.jpg'),
(NULL, 'morecare showergel softpeach 300ml', '100', 'images/img-9.jpg'),
(NULL, 'morecare showergel softpeach 600ml', '100', 'images/img-10.jpg'),
(NULL, 'morecare showergel strawberry 300ml', '100', 'images/img-11.jpg'),
(NULL, 'morecare showergel vanilla 300ml', '100', 'images/img-12.jpg'),
(NULL, 'morecare showergel vanilla 600ml', '100', 'images/img-13.jpg'),
(NULL, 'morecare sanitizer aloevera 50ml', '100', 'images/img-14.jpg'),
(NULL, 'morecare sanitizer no water 5ltrs', '100', 'images/img-15.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
