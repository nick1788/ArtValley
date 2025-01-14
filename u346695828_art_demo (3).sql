-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2024 at 10:27 AM
-- Server version: 10.11.11-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u346695828_art_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `Email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `user_id`, `Email_id`, `password`) VALUES
(1, 1, 'amrit', 'Admin', '$2y$10$sI7ttPnJlvvyLk1ljXjjkuksC6Csb.wjnSKNGR5nzHpw8Bxy.pslq');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `Blog_title` text NOT NULL,
  `Blog_Img` varchar(255) NOT NULL,
  `Blog_main_content` text NOT NULL,
  `Blog_detail_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `Blog_title`, `Blog_Img`, `Blog_main_content`, `Blog_detail_content`) VALUES
(5, 'Repudiandae et iste ', 'Shortlisted-accounts.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quos similique unde magni ex aperiam excepturi ipsum, autem quasi. Temporibus exercitationem excepturi debitis omnis dolorum molestiae tempora, nobis optio sit?</p>\r\n', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quos similique unde magni ex aperiam excepturi ipsum, autem quasi. Temporibus exercitationem excepturi debitis omnis dolorum molestiae tempora, nobis optio sit?</p>\r\n'),
(6, 'Consequuntur labore ', 'Design-8.jpg', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo aut cumque sed quisquam illum aliquid porro error tenetur nesciunt! Quod pariatur commodi veritatis accusamus quasi facere repellendus inventore nisi odio?</p>\r\n', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo aut cumque sed quisquam illum aliquid porro error tenetur nesciunt! Quod pariatur commodi veritatis accusamus quasi facere repellendus inventore nisi odio?</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(255) NOT NULL,
  `project_img` varchar(255) NOT NULL,
  `project_title` text NOT NULL,
  `Project_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_img`, `project_title`, `Project_pdf`) VALUES
(1, '66be39ba9a34e.jpg', 'Elementary', 'DOC-20240823-WA0005.PDF'),
(2, '66be3a1a9a761.jpg', 'Tradeshow', 'DOC-20240823-WA0003.PDF'),
(3, '66be3a36a431c.jpg', 'Retail', 'DOC-20240823-WA0009.PDF'),
(4, '66be3a6203a35.jpg', 'Technology', 'DOC-20240823-WA0004.PDF'),
(5, '66be3a78df245.jpg', 'Healthcare', 'DOC-20240823-WA0002.PDF'),
(6, '66be3a9106b38.jpg', 'Cannabis', 'DOC-20240823-WA0007.PDF'),
(7, '66be3aa93f6db.jpg', 'legal', 'DOC-20240823-WA0006.PDF'),
(8, '66be3ac226554.jpg', 'Travel and Hospitality', 'DOC-20240823-WA0008.PDF');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(255) NOT NULL,
  `service_img` varchar(255) NOT NULL,
  `service_title` text NOT NULL,
  `service_dec` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_img`, `service_title`, `service_dec`) VALUES
(1, '66be3583cfde7.jpg', 'Executive Assistant ', 'Spend more time on what matters most. Let our executive virtual assistants manage your emails, calendars, and other routine tasks.'),
(2, '66be359d1d01b.jpg', 'Call Center Specialist ', 'Get best-in-class inbound call center support from experts with extensive experience. Also Leverage the outbound call center to help and expand your business'),
(3, '66be35ca39640.jpg', 'Website Design ', 'Get a Modern Website Designed for your business A professional website design itself can be used to attain various marketing strategies in order to help your business surge. Thoughtfully created website designs have a far outspread reach than any other form of marketing tools.'),
(4, '66f416ef5420e.jpg', 'Order Managements', 'Our services are designed to assist businesses in reducing day sales outstanding, cycle time, hold time, cost per order, etc.'),
(5, '66be369129693.jpg', 'Account Executive ', 'Our mission is to help you focus on running your business with the peace of mind that your accounting and advisory services are being handled by a company that understands your needs.'),
(6, '66be36aebbc2a.jpeg', 'Graphic design', 'A Professional graphic designer does much more than making something look good. Explore the professional graphic designer services with Art Valley today');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
