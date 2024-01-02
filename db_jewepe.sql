-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 02:35 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jewepe`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_account`
--

CREATE TABLE IF NOT EXISTS `db_account` (
  `id_account` int(5) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `description` text,
  `acc_img` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_account`
--

INSERT INTO `db_account` (`id_account`, `name`, `email`, `password`, `description`, `acc_img`, `created_at`, `last_updated`) VALUES
(0, 'Adomin', 'adomin@gmail.com', '$2y$10$q34m/4OMFr2rWqStz9NtCOlcXlJoO/MCicGQPoGt7ft6Tn/LnjCm6', 'first admin account', NULL, '2024-01-02 20:17:05', '2024-01-02 20:17:05');

-- --------------------------------------------------------

--
-- Table structure for table `db_article`
--

CREATE TABLE IF NOT EXISTS `db_article` (
  `id_article` int(5) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  `view` int(7) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `uploader` int(5) DEFAULT NULL,
  `article_img` varchar(255) DEFAULT NULL,
  `content` longtext,
  `last_updated` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_article`
--

INSERT INTO `db_article` (`id_article`, `title`, `publish`, `view`, `category`, `uploader`, `article_img`, `content`, `last_updated`) VALUES
(1, 'Artikel Pertama', 1, 0, 'tech-programming', 0, '../files/Screenshot 2023-10-11 212209_32123.png', '<p>Test artikel</p>', '2024-01-02 20:27:40'),
(2, 'Artikel kedua', 1, 0, 'tech-software', 0, '../files/Screenshot 2023-10-08 164308_3512.png', '<p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut varius libero. Donec at bibendum lacus. Duis mollis massa in eleifend ullamcorper. Morbi sollicitudin lacus ut risus volutpat imperdiet. Aliquam erat volutpat. Cras dictum eu nisi sagittis elementum. Proin sed neque iaculis, interdum lectus quis, condimentum augue. Nullam vitae lorem eu augue vehicula lobortis. Aliquam accumsan vehicula enim, in gravida arcu elementum sed. In aliquam, sapien quis semper eleifend, eros ipsum maximus sapien, vel egestas libero dolor eu orci. Vivamus ullamcorper nunc velit, ut ultricies enim venenatis sed. Nulla commodo vulputate porttitor. Aenean imperdiet molestie condimentum. Nunc ut neque a nisi interdum convallis sit amet ac libero. Sed vulputate velit a iaculis rutrum. Aliquam auctor ac sapien at fringilla.</p><p class="ql-align-justify">Vestibulum scelerisque eget quam id tristique. Nulla dignissim augue tincidunt, malesuada nisl non, euismod enim. Integer faucibus tincidunt tortor, id luctus augue rutrum et. Donec viverra, ex eu fermentum ullamcorper, ligula arcu tristique dolor, et commodo tellus elit vel arcu. Pellentesque gravida erat felis. Proin efficitur pharetra nulla, bibendum tempus urna pharetra at. Phasellus semper pharetra quam at suscipit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas urna justo, commodo eget tincidunt sed, elementum at enim. Morbi nec interdum justo. Suspendisse porta, tortor at elementum volutpat, libero nibh sollicitudin lorem, in elementum ex magna vel ex.</p><p><br></p>', '2024-01-02 20:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `db_logs`
--

CREATE TABLE IF NOT EXISTS `db_logs` (
  `id_logs` int(5) NOT NULL,
  `executed_by` int(5) DEFAULT NULL,
  `log_title` varchar(30) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `log_content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_account`
--
ALTER TABLE `db_account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `db_article`
--
ALTER TABLE `db_article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `uploader` (`uploader`);

--
-- Indexes for table `db_logs`
--
ALTER TABLE `db_logs`
  ADD PRIMARY KEY (`id_logs`),
  ADD KEY `executed_by` (`executed_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_article`
--
ALTER TABLE `db_article`
  MODIFY `id_article` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_article`
--
ALTER TABLE `db_article`
  ADD CONSTRAINT `db_article_ibfk_1` FOREIGN KEY (`uploader`) REFERENCES `db_account` (`id_account`);

--
-- Constraints for table `db_logs`
--
ALTER TABLE `db_logs`
  ADD CONSTRAINT `db_logs_ibfk_1` FOREIGN KEY (`executed_by`) REFERENCES `db_account` (`id_account`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
