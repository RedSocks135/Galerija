-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2020 at 10:44 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(8) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$RSr9y128JvpATnuWJzf5SO8JsAqcu80CUeAD6Obcer4Ecl5ABJ.ya');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(8) NOT NULL,
  `author_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `author_surname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `author_bio` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `author_image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author_name`, `author_surname`, `author_bio`, `author_image`) VALUES
(45, 'Jozefina', 'Skenderović', 'Jozefina Skenderović, već gotovo četiri decenije bavi se slamarstvom. Bavljenje ovim hobijem, počinje davne 1979. godine, kada se zaposlila u osnovnoj školi u Tavankutu, gde su se održavale slamarske radionice za decu. Ljubav prema slamarstvu, potekla je iz okruženja, jer kako kaže, odrastala je dok se žetva još radila ručno, a nije bilo ni jedne Dužijance na kojoj ona nije bila. Da bi ste se bavili slamarstvom, morate najpre imati ljubavi, strpljenja, ali i vremena.', 'images/authors/5df900cb0c4ef5.55223844.jpg'),
(46, 'Marija', 'Vojnić', 'Rodila se je u Tavankutu 1948. godine. Motivi njenih dela su svakodnevni seoski život i pejzaži. Služi se živim bojama.\r\nZa slikarstvo se zanima još od osnovne škole. Srednju školu je pohađala u školi Primenjenih umetnosti u Novom Sadu koju je završila 1968. godine. \r\nUčlanila se u Likovnu koloniju Grupe Šestorice tavankutskog KUD-a Matija Gubec 1962. zajedno s Pištikom Pfeiffer i Tezom Milodanović.', 'images/authors/5df9023e21fc99.44719148.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(8) NOT NULL,
  `cust_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `cust_surname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `cust_email` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `cust_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cust_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `cust_password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cust_name`, `cust_surname`, `cust_email`, `cust_phone`, `cust_username`, `cust_password`) VALUES
(2, 'nenad', 'vojnic', 'nenad@mail.com', '12345', 'nenad', '$2y$10$GyaNrPmmA98DKsXqM0ue6ujVEt.AlyK9SyTeRKR3DN6ujMVCSLrgq'),
(3, 'dubravko', 'bilinovic', 'dundalfthegray@mail.com', '678678', 'dubro', '$2y$10$YBbFWYyhghSpmB0eTS6lT.Z/youR2t15iVSE2gAFAUAWFAYrvdj6G'),
(4, 'neso', 'vojke', 'neso@mail.com', '1232345', 'neso', '$2y$10$vmrZhTu4S8nfNGYurhznc.BstNO2E5Oj8tE0gN2Tjh6CAz8.TS9FW'),
(5, 'pere', 'postas', 'pere@mail.com', '343423', 'pere', '$2y$10$PuConqhYcrLUxR69J3L97.h6pjofhzsBGnIp0Wukwvtate1gh2E5i');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(8) NOT NULL,
  `id_customer` int(8) NOT NULL,
  `id_product` int(8) NOT NULL,
  `quantity` decimal(5,0) NOT NULL,
  `sending_method` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `order_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(8) NOT NULL,
  `id_product_type` int(8) NOT NULL,
  `product_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `id_author` int(8) NOT NULL,
  `product_size_description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_year` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_product_type`, `product_name`, `id_author`, `product_size_description`, `product_year`, `product_image`, `product_price`) VALUES
(5, 2, 'Salaš u suncokretima', 46, '40x30 cm, zlatni ram', '2017.', 'images/products/5df93d23b09278.58555194.jpg', '4000'),
(6, 1, 'Papuče i šling', 46, '30x50 cm, zlatni ram', '2019.', 'images/products/5e2493e146d5b7.25122941.jpg', '5000'),
(7, 1, 'Momačko kolo', 45, '100x80 cm, zlatni ram', '2010.', 'images/products/5e2494fe0c50a0.37534200.jpg', '10.000');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(8) NOT NULL,
  `product_type_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `product_type_name`) VALUES
(1, 'Slika'),
(2, 'Minijatura'),
(4, 'Čestitka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customers` (`id_customer`),
  ADD KEY `fk_products` (`id_product`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_authors` (`id_author`),
  ADD KEY `fk_product_type` (`id_product_type`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_customers` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_products` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_authors` FOREIGN KEY (`id_author`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_type` FOREIGN KEY (`id_product_type`) REFERENCES `product_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
