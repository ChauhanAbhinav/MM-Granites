-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 11:51 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marble`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('marbleadmin', 'marblepass'),
('marbleadmin', 'marblepass');

-- --------------------------------------------------------

--
-- Table structure for table `company_address`
--

CREATE TABLE `company_address` (
  `id` int(11) NOT NULL,
  `add_1` varchar(500) NOT NULL,
  `add_2` varchar(500) NOT NULL,
  `add_3` varchar(500) NOT NULL,
  `add_4` varchar(500) NOT NULL,
  `add_5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_address`
--

INSERT INTO `company_address` (`id`, `add_1`, `add_2`, `add_3`, `add_4`, `add_5`) VALUES
(3, 'Meharon ki dhani, Fatehgarh, Jaisalmer,', 'Rajasthan, India-345001', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `company_contacts`
--

CREATE TABLE `company_contacts` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_contacts`
--

INSERT INTO `company_contacts` (`id`, `email`, `phone`, `fax`) VALUES
(6, 'Granitesmm@gmail.com', '9929417407', '7742111414');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `message` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) DEFAULT NULL,
  `content` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `heading`, `content`) VALUES
(6, 'Our Mission', 'MM Granites is the leading Indian conglomerate and a global trendsetter in the world of Natural Stone. The choice of undertaking the paths less travelled has made all the difference in the success story of M M Granite. The company was established in a simple warehouse and ever since has been raising the bar with its quality products and superior services. Today, M M Granite, with a keen aptitude for innovation and skill, inclination towards concurrent technological advancements, and with multiple quarries at Dharmeta, Morwad, Dhariyawad, Banswara in Rajasthan, India, along with quarries in YÃªn BÃ¡i province, Vietnam, has emerged as an undisputed leader in marble mining, processing, and research and technology development across the globe.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL,
  `brief` varchar(500) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `brief`, `description`) VALUES
(11, 'product_images/prd1.jpg', 'Lakha Red Granite', 'Lakha Red Granite is generally use to the flooring and counter tops. It is a well known name in the market. Lakha Red Granite is Popular among for their unique Specifications like heat resistance and stylish appearance. It gives a perfect look to the floor of house.', 'Lakha Red Granite is generally use to the flooring and counter tops. It is a well known name in the market. Lakha Red Granite is Popular among for their unique Specifications like heat resistance and stylish appearance. It gives a perfect look to the floor of house.');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `profile_photo` varchar(500) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `why_us_contents`
--

CREATE TABLE `why_us_contents` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `why_us_contents`
--

INSERT INTO `why_us_contents` (`id`, `heading`, `description`) VALUES
(1, 'Why Us', 'MM Granites is the leading Indian conglomerate and a global trendsetter in the world of Natural Stone. The choice of undertaking the paths less travelled has made all the difference in the success story of M M Granite. The company was established in a simple warehouse and ever since has been raising the bar with its quality products and superior services. Today, M M Granite, with a keen aptitude for innovation and skill, inclination towards concurrent technological advancements, and with multiple quarries at Dharmeta, Morwad, Dhariyawad, Banswara in Rajasthan, India, along with quarries in YÃªn BÃ¡i province, Vietnam, has emerged as an undisputed leader in marble mining, processing, and research and technology development across the globe.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_address`
--
ALTER TABLE `company_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_contacts`
--
ALTER TABLE `company_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_us_contents`
--
ALTER TABLE `why_us_contents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_address`
--
ALTER TABLE `company_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_contacts`
--
ALTER TABLE `company_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `why_us_contents`
--
ALTER TABLE `why_us_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
