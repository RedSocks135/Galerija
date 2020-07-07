-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 10:21 PM
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
  `author_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `author_surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `author_bio` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `author_image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author_name`, `author_surname`, `author_bio`, `author_image`) VALUES
(45, 'Jozefina', 'Skenderović', 'Jozefina Skenderović, već gotovo četiri decenije bavi se slamarstvom. Bavljenje ovim hobijem, počinje davne 1979. godine, kada se zaposlila u osnovnoj školi u Tavankutu, gde su se održavale slamarske radionice za decu. Ljubav prema slamarstvu, potekla je iz okruženja, jer kako kaže, odrastala je dok se žetva još radila ručno, a nije bilo ni jedne Dužijance na kojoj ona nije bila. \"Da bi ste se bavili slamarstvom, morate najpre imati ljubavi, strpljenja, ali i vremena\", kaže ona.', 'images/authors/5df900cb0c4ef5.55223844.jpg'),
(46, 'Marija', 'Vojnić', 'Rodila se je u Tavankutu 1948. godine. Motivi njenih dela su svakodnevni seoski život i pejzaži. Služi se živim bojama.\r\nZa slikarstvo se zanima još od osnovne škole. Srednju školu je pohađala u školi Primenjenih umetnosti u Novom Sadu koju je završila 1968. godine. \r\nUčlanila se u Likovnu koloniju Grupe Šestorice tavankutskog KUD-a Matija Gubec 1962. zajedno s Pištikom Pfeiffer i Tezom Milodanović.', 'images/authors/5df9023e21fc99.44719148.jpg'),
(54, 'Kristina', 'Kovačić', 'Zaposlena je u OŠ: \"Matija Gubec\" kao nastavnica muzičke kulture. Pored svog posla, predaje slamarsku sekciju učenicima u školi.', 'images/authors/5f00fe74d111f7.69346206.jpg'),
(55, 'Kata', 'Kujundžić', 'Nakon što je izgubila posao, na inicijativu svoje prijateljice, pronalazi se svetu slame. Umetnošću u tehnici slame se bavi duže od 20 godina. Pored umetnosti u tehnici slame, bavi se heklanjem i pletenjem.', 'images/authors/5f01038f890346.00570586.jpg'),
(56, 'Nevenka', 'Obradović', 'Bavi se umetnošću u tehnici slame. Redovno učestvuje na Sazivu prve kolonije naive u tehnici slame.', 'images/authors/5f0104e1bd4fc3.48967130.jpg'),
(57, 'Vera', 'Bašić Palković', 'Bavi se umetnošću u tehnici slame. Redovno učestvuje na Sazivu prve kolonije naive u tehnici slame.\"', 'images/authors/5f01063bbc5036.33878711.jpg'),
(58, 'Marija', 'Dulić', 'Bavi se umetnošću u tehnici slame. Redovno učestvuje na Sazivu prve kolonije naive u tehnici slame.', 'images/authors/5f0106f515b9d7.24442674.jpg');

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
  `cust_password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cust_vkey` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cust_verified` tinyint(1) NOT NULL DEFAULT 0,
  `cust_createdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cust_name`, `cust_surname`, `cust_email`, `cust_phone`, `cust_username`, `cust_password`, `cust_vkey`, `cust_verified`, `cust_createdate`) VALUES
(13, 'Nenad', 'Vojnić', 'nenad.vojnic.n2v@gmail.com', '4565467', 'nenad', '$2y$10$x4uEknUXmNNQJp6MaJEpjeD5HTMyYkUc88aPU/lmzTs9dwaKLyIs2', 'eee72102496754a1c22a3994ed76bb28c964fc91d02f41b7c3f088569959f9d6', 1, '2020-07-07 19:29:07'),
(16, 'lala', 'asdasd', 'nenad@mail.com', '4565467', 'lala', '$2y$10$CNJAdt69asnReKhp5Kshz.asRKSg4Fl1rPMoPF8obcnLDNurIRbRK', '236b0098f8a3847358b27ed7085e14916fe4fb05dc73997b06b9ea95075dc9ee', 1, '2020-07-07 20:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_items`
--

CREATE TABLE `ordered_items` (
  `id` int(8) NOT NULL,
  `id_product` int(8) NOT NULL,
  `id_order` int(11) NOT NULL,
  `quantity` decimal(5,0) NOT NULL,
  `order_status` enum('Na čekanju','Poslato','Odbijeno') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ordered_items`
--

INSERT INTO `ordered_items` (`id`, `id_product`, `id_order`, `quantity`, `order_status`) VALUES
(23, 7, 7, '3', 'Poslato'),
(24, 5, 7, '1', 'Odbijeno'),
(25, 17, 7, '2', 'Na čekanju'),
(26, 7, 8, '3', 'Na čekanju'),
(27, 5, 8, '1', 'Na čekanju'),
(28, 17, 8, '2', 'Na čekanju'),
(29, 24, 9, '1', 'Poslato'),
(30, 14, 10, '2', 'Na čekanju'),
(31, 28, 10, '1', 'Na čekanju');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_customers` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sending_method` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_customers`, `order_date`, `sending_method`) VALUES
(7, 13, '2020-07-07 19:49:39', 'Pošta'),
(8, 13, '2020-07-07 19:55:20', 'Pošta'),
(9, 13, '2020-07-07 19:56:01', 'Post ekspres'),
(10, 16, '2020-07-07 20:20:46', 'Lično preuzimanje');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(8) NOT NULL,
  `id_product_type` int(8) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_author` int(8) NOT NULL,
  `product_size_description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `product_year` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_product_type`, `product_name`, `id_author`, `product_size_description`, `product_year`, `product_image`, `product_price`) VALUES
(5, 2, 'Salaš u suncokretima', 46, '40x30 cm, zlatni ram', '2017.', 'images/products/5f00fef920a407.76371537.jpg', '6.000'),
(6, 1, 'Papuče i šling', 46, '30x50 cm, zlatni ram', '2019.', 'images/products/5e2493e146d5b7.25122941.jpg', '5.000'),
(7, 1, 'Momačko kolo', 45, '100x80 cm, zlatni ram', '1996.', 'images/products/5f047a300a1c01.32835194.jpg', '15.000'),
(14, 1, 'Bunjevka prid ogledalom', 45, '40x60 cm, drveni ram', '1995.', 'images/products/5f00f6ca8041f8.32343872.jpg', '15.000'),
(15, 11, 'Anđeo', 46, 'Prečnik 10 cm, crvena mat boja', '2017.', 'images/products/5f00faad4ff0b1.88759113.jpg', '1.000'),
(16, 4, 'Ljubavna čestitka', 46, '10x30 cm, bela pozadina', '2018.', 'images/products/5f00fb2a7fcaf4.00847068.jpg', '350'),
(17, 2, 'Korpica sa cvećem', 54, '25x25 cm, zlatni ram', '2015.', 'images/products/5f00fec0204f69.22426238.jpg', '1.500'),
(18, 4, 'Buket cveća', 54, '10x30 cm, bela pozadina', '2016.', 'images/products/5f00ff3be4bbc1.89036281.jpg', '350'),
(19, 10, 'Kutija - srce', 54, '15x15 cm, crvena iznutra', '2014.', 'images/products/5f00ff7e653334.13228575.jpg', '500'),
(20, 12, 'Perlica za svadbu', 46, 'Više vrsta pletiva', '2015.', 'images/products/5f0101923d7b33.59113041.jpg', '500'),
(21, 1, 'Kroz prozor', 56, '80x120 cm, zlatni ram', '2019.', 'images/products/5f010547d43b69.32519534.jpg', '16.000'),
(22, 2, 'Vaza sa suncokretima', 56, '40x30 cm, zlatni ram', '2016.', 'images/products/5f010573bb4b21.56205730.jpg', '7.000'),
(23, 1, 'Deran i pivac', 58, '60x80, drveni ram', '1990.', 'images/products/5f0107566264b8.00903225.jpg', '13.000'),
(24, 2, 'Čista soba', 45, '30x55 cm, zlatni ram', '2017.', 'images/products/5f0107e7aa43d7.57546698.jpg', '8.000'),
(25, 9, 'Ovalne minđuše', 57, '5 cm dugačke, više vrsta pletiva', '2010.', 'images/products/5f01088241b8c6.65896640.jpg', '600'),
(26, 13, 'Broš sa ružama i suncokre', 57, '10 cm prečnik, više vrsta pletiva', '2009.', 'images/products/5f0108c86e5e48.45354925.jpg', '500'),
(27, 9, 'Ruža minđuše', 57, '3 cm prečnik, \"ruža\" pletivo', '2011.', 'images/products/5f0109391a1628.83413582.jpg', '400'),
(28, 12, 'Perlica za bandaša', 45, '15 cm dužine, više vrsta pletiva', '2007.', 'images/products/5f010996a211c7.46189073.jpg', '1.200');

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
(4, 'Čestitka'),
(8, 'Uskršnje jaje'),
(9, 'Minđuše'),
(10, 'Kutija za nakit'),
(11, 'Kulga za jelku'),
(12, 'Perlica'),
(13, 'Broš');

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
-- Indexes for table `ordered_items`
--
ALTER TABLE `ordered_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products` (`id_product`),
  ADD KEY `fk_order` (`id_order`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customers` (`id_customers`);

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ordered_items`
--
ALTER TABLE `ordered_items`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordered_items`
--
ALTER TABLE `ordered_items`
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `fk_products` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_customers` FOREIGN KEY (`id_customers`) REFERENCES `customers` (`id`);

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
