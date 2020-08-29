-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2018 at 06:07 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boutique`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `description`) VALUES
(1, 'PC-Protable'),
(2, 'PC-Bureau'),
(3, 'Tablette'),
(4, 'Phone');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL DEFAULT '20',
  `categorie_id` int(11) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `description`, `quantite`, `categorie_id`, `prix`) VALUES
(1, 'Portable Asus', 20, 1, 1600),
(2, 'HP Notebook', 20, 1, 1100),
(3, 'Asus ROG', 20, 1, 1890),
(4, 'Lenovo IdeaPad', 20, 1, 1460),
(5, 'Asus Zenbook', 20, 1, 1850),
(6, 'MacBook Pro', 20, 1, 3250),
(7, 'Acer Aspire', 20, 1, 1200),
(8, 'Lenovo Ideapad', 20, 1, 1240),
(9, 'Asus R457UR', 20, 1, 1680),
(10, 'Asus UX310UA', 20, 1, 1250),
(11, 'Asus GL552VW', 20, 1, 1400),
(12, 'Lenovo 100', 20, 1, 1500),
(13, 'Asus V230ICGK', 20, 2, 1200),
(14, 'Asus K31CD', 20, 2, 950),
(15, 'Apple iMac', 20, 2, 3260),
(16, 'VIBOX PC Gamer', 20, 2, 1950),
(17, 'Dell Optiplex', 20, 2, 1100),
(18, 'Dell Optiplex', 20, 2, 1250),
(19, ' tout-en-un tactile ', 20, 2, 1850),
(20, 'MSI Gaming 24', 20, 2, 1620),
(21, 'iPad Mini', 20, 3, 500),
(22, 'Galaxy Tab S2', 20, 3, 1250),
(23, 'iPad Mini 4', 20, 3, 950),
(24, 'Galaxy Tab A6', 20, 3, 850),
(25, 'Tablette Asus', 20, 3, 540),
(26, 'iPad Pro', 20, 3, 820),
(27, 'Lenovo Moto', 20, 4, 260),
(28, 'Huawei P8', 20, 4, 450),
(29, 'Honor 8', 20, 4, 650),
(30, 'Honor 8 Premium', 20, 4, 850),
(31, 'Galaxy J7', 20, 4, 1020),
(32, 'Wiko Fever', 20, 4, 450),
(33, 'Wiko Fever', 20, 4, 580),
(34, 'Galaxy S6', 20, 4, 890),
(35, 'Galaxy S6', 20, 4, 895),
(36, 'Galaxy S7', 20, 4, 1420);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_produit_categorie_id` (`categorie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_produit_categorie_id` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
