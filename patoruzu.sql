-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2017 at 08:27 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patoruzu`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Revistas'),
(2, 'libros');

-- --------------------------------------------------------

--
-- Table structure for table `magazines`
--

CREATE TABLE `magazines` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `tapa` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `embebed` text NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magazines`
--

INSERT INTO `magazines` (`id`, `titulo`, `tapa`, `numero`, `fecha`, `category_id`, `embebed`, `updated_at`, `created_at`) VALUES
(13, 'Patoruzito 4', 'patoruzito1.jpg', 1, '1981-06-06', 0, '<p>asdasd</p>\r\n', '2016-12-15', '2016-12-15'),
(14, 'Prueba de otra revista', 'patoruzito2.jpg', 2, '1981-04-01', 0, '<p>asdasd</p>\r\n', '2016-12-17', '2016-12-17'),
(15, 'probando otra', '15195916_1380127668688188_2627782970461706822_o.jpg', 4, '1981-05-05', 0, '', '2016-12-17', '2016-12-17'),
(16, 'y otra', 'tapa1.jpg', 6, '1986-12-07', 0, '', '2016-12-17', '2016-12-17'),
(17, 'Lupin: "Contra los Espias"', 'lupin1.jpg', 1, '0000-00-00', 0, '<iframe src="http://docs.google.com/gview?url=https://dl.dropbox.com/s/qvm92zgyb8g0z0n/001.pdf?dl=0&embedded=true" style="width:500px; height:375px;" frameborder="0"></iframe>\r\n\r\n\r\n', '2016-12-17', '2016-12-17'),
(18, 'Lupin: "Vuelo de Prueba"', 'lupin2.jpg', 2, '0000-00-00', 0, '<iframe src="http://docs.google.com/gview?url=https://dl.dropbox.com/s/25yal977a2wqcwl/002.pdf?dl=0&embedded=true" style="width:500px; height:375px;" frameborder="0"></iframe>', '2016-12-17', '2016-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`) VALUES
(1, 'accion'),
(2, 'aventuras');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazines`
--
ALTER TABLE `magazines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `magazines`
--
ALTER TABLE `magazines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
