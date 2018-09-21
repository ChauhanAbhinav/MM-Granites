-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 10:11 AM
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
(1, 'Nirman Vihar,New Delhi', 'gtfv', 'fghbgnj', 'Nirman Vihar,New Delhi', 'Nirman Vihar,New Delhi'),
(2, 'Nirman Vihar,New Delhi', 'Near Laxim Nagar', 'New Delhi', 'Nirman Vihar,New Delhi', 'Nirman Vihar,New Delhi');

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
(1, '', '7415522211', '112465'),
(2, '', '7415522211', '112465'),
(3, 'mannukumar7891@gmail.com', '6479272488', '6479272488'),
(4, 'mannukumar7891@gmail.com', '6479272488', '6479272488'),
(5, 'mannukumar7891@gmail.com', '6479272488', '6479272488 bzf');

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

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `mobile`, `message`) VALUES
(1, 'mannukumar7891@gmail.com', '6479272', 'safas'),
(2, '', '64445554', ''),
(3, 'mannukumar7891@outlook.com', '08083430811', 'dtfhdc'),
(4, 'mannukumar7891@outlook.com', '08083430811', 'gfv');

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
(1, 'Our Mission', ''),
(2, 'Our Mission', ''),
(3, 'Our Mission', ''),
(4, 'Our Mission ', ''),
(5, 'Our Mission', 'No mission'),
(6, 'Our Mission', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam erat volutpat. In eros orci, feugiat convallis erat a, pellentesque pharetra diam. Phasellus mollis libero malesuada, fermentum erat sit amet, accumsan velit.\r\n\r\nDuis non mauris pellentesque nibh gravida feugiat. Vivamus sit amet urna sit amet ex elementum egestas ac eget dolor. Suspendisse vel aliquet elit. Sed nec risus vel ex ultricies efficitur eget eu nulla. In facilisis eros vitae tellus suscipit molestie. Maecenas sollicitudin semper massa, et cursus nisi malesuada non. Pellentesque nec libero vel est ultricies tempus. Nullam a consequat dui. Morbi ultrices felis turpis. Duis dapibus posuere justo, sit amet scelerisque metus dignissim et. Aenean mattis molestie est, a dapibus orci luctus a. Etiam egestas, dui nec consequat luctus, elit ante ornare ante, eget semper velit ipsum sed sem. Proin semper vestibulum sollicitudin.');

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
(1, 'product_images/prod 6.jpg', 'Product 1', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non.', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non.'),
(2, 'product_images/prod 4.jpg', 'Product 2', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non.', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non.'),
(3, 'product_images/prod 3.jpg', 'Product 3', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non.', 'ElectriX helps manufacturers maximize the productivity they gain from their pneumatic tools, diaphragm pumps, chain hoists and related supplies. We dedicated to helping our customers andreduce operating costs.1'),
(4, 'product_images/pro 2.jpg', 'Product 4', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non.Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non.', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non.'),
(5, 'product_images/pro 6.jpg', 'Duis non mauris pellentesque nibh gravida feugiat', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam erat volutpat. In eros orci, feugiat convallis erat a, pellentesque pharetra diam. Phasellus mollis libero malesuada, fermentum erat sit amet, accumsan velit.'),
(6, 'product_images/prod 4.jpg', 'Product 6', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam erat volutpat. In eros orci, feugiat convallis erat a, pellentesque pharetra diam. Phasellus mollis libero malesuada, fermentum erat sit amet, accumsan velit.'),
(7, 'product_images/pro 1.jpg', 'Product 7', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam erat volutpat. In eros orci, feugiat convallis erat a, pellentesque pharetra diam. Phasellus mollis libero malesuada, fermentum erat sit amet, accumsan velit.'),
(8, 'product_images/prod 3.jpg', 'Product 8', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam erat volutpat. In eros orci, feugiat convallis erat a, pellentesque pharetra diam. Phasellus mollis libero malesuada, fermentum erat sit amet, accumsan velit.'),
(9, 'product_images/pro 4.jpg', 'Product 9', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam erat volutpat. In eros orci, feugiat convallis erat a, pellentesque pharetra diam. Phasellus mollis libero malesuada, fermentum erat sit amet, accumsan velit.'),
(10, 'product_images/prod 1.jpg', 'product 10', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam erat volutpat. In eros orci, feugiat convallis erat a, pellentesque pharetra diam. Phasellus mollis libero malesuada, fermentum erat sit amet, accumsan velit.');

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

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `name`, `description`) VALUES
(1, 'project_images/pro 1.jpg', 'Project 1', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam'),
(2, 'project_images/pro 6.jpg', 'product ', 'Followers,Live Views ,Story Views,Saves,Impression,Video Views and Impression ,Story poll Votes , Auto Likes per Minutes and Comment on post. We Fully provide refunded Facilities to Our Customers.Creafully Read Our T& C and We refunded Your Money through same payment gateway return back. Must check Our Services Details Below And Buy any Services and check our Service and Support.'),
(3, 'project_images/pro 4.jpg', 'Project 3', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam'),
(4, 'project_images/prod 5.jpg', 'Project 4', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam'),
(5, 'project_images/prod 2.jpg', 'Product 5', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam'),
(6, 'project_images/prod 3.jpg', 'Product 6', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam'),
(7, 'project_images/pro 5.jpg', 'Product 7', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam'),
(8, 'project_images/pro 6.jpg', 'Product 8', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam'),
(9, 'project_images/prod 4.jpg', 'Product 9', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam'),
(10, 'project_images/prod 5.jpg', 'Product 10', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam'),
(11, 'project_images/prod 5.jpg', 'Product 10', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam');

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

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `profile_photo`, `designation`, `qualification`) VALUES
(1, 'Lyra Sorovakia', 'team_images/woman.jpg', 'HR', 'MBA, University of Washington,DC'),
(3, 'markus lamar', 'team_images/man 1.jpg', 'CEO', 'MS Ceremic Engineering'),
(4, 'Heustasz  Mzcandrik', 'team_images/man 2.jpg', 'Co Founder', 'BSc. NYU');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `description`) VALUES
(1, 'testimonials_images/woman.jpg', 'Precise advertising and campaigning in Social Media for viral results updated'),
(2, 'testimonials_images/man 2.jpg', 'Nunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non.'),
(3, 'testimonials_images/man 1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sapien leo, fermentum ut metus nec, commodo tincidunt ex. Mauris egestas lacus eu lectus dictum, at luctus mauris consequat. ');

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
(1, 'Why Us', 'MM Granites is the leading Indian conglomerate and a global trendsetter in the world of Natural Stone. The choice of undertaking the paths less travelled has made all the difference in the success story of M M Granite. The company was established in a simple warehouse and ever since has been raising the bar with its quality products and superior services. Today, M M Granite, with a keen aptitude for innovation and skill, inclination towards concurrent technological advancements, and with multiple quarries at Dharmeta, Morwad, Dhariyawad, Banswara in Rajasthan, India, along with quarries in YÃªn BÃ¡i province, Vietnam, has emerged as an undisputed leader in marble mining, processing, and research and technology development across the globe.'),
(2, 'Why Us', 'MM Granites is the leading Indian conglomerate and a global trendsetter in the world of Natural Stone. The choice of undertaking the paths less travelled has made all the difference in the success story of M M Granite. The company was established in a simple warehouse and ever since has been raising the bar with its quality products and superior services. Today, M M Granite, with a keen aptitude for innovation and skill, inclination towards concurrent technological advancements, and with multiple quarries at Dharmeta, Morwad, Dhariyawad, Banswara in Rajasthan, India, along with quarries in YÃªn BÃ¡i province, Vietnam, has emerged as an undisputed leader in marble mining, processing, and research and technology development across the globe.'),
(3, 'Why Us', 'MM Granites is the leading Indian conglomerate and a global trendsetter in the world of Natural Stone. The choice of undertaking the paths less travelled has made all the difference in the success story of M M Granite. The company was established in a simple warehouse and ever since has been raising the bar with its quality products and superior services. Today, M M Granite, with a keen aptitude for innovation and skill, inclination towards concurrent technological advancements, and with multiple quarries at Dharmeta, Morwad, Dhariyawad, Banswara in Rajasthan, India, along with quarries in YÃªn BÃ¡i province, Vietnam, has emerged as an undisputed leader in marble mining, processing, and research and technology development across the globe.'),
(4, 'Raps n Rolls', 'gvnfgh'),
(5, 'Raps n Rolls', 'gvnfgh'),
(6, 'Raps n Rolls', 'gvnfgh'),
(7, 'Why Us', 'MM Granites is the leading Indian conglomerate and a global trendsetter in the world of Natural Stone. The choice of undertaking the paths less travelled has made all the difference in the success story of M M Granite. The company was established in a simple warehouse and ever since has been raising the bar with its quality products and superior services. Today, M M Granite, with a keen aptitude for innovation and skill, inclination towards concurrent technological advancements, and with multiple quarries at Dharmeta, Morwad, Dhariyawad, Banswara in Rajasthan, India, along with quarries in YÃƒÂªn BÃƒÂ¡i province, Vietnam, has emerged as an undisputed leader in marble mining, processing, and research and technology development across the globe.\r\n\r\n'),
(8, 'Why Us', 'MM Granites is the leading Indian conglomerate and a global trendsetter in the world of Natural Stone. The choice of undertaking the paths less travelled has made all the difference in the success story of M M Granite. The company was established in a simple warehouse and ever since has been raising the bar with its quality products and superior services. Today, M M Granite, with a keen aptitude for innovation and skill, inclination towards concurrent technological advancements, and with multiple quarries at Dharmeta, Morwad, Dhariyawad, Banswara in Rajasthan, India, along with quarries in YÃƒÂªn BÃƒÂ¡i province, Vietnam, has emerged as an undisputed leader in marble mining, processing, and research and technology development across the globe.\r\n\r\n'),
(9, 'Why Us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sapien leo, fermentum ut metus nec, commodo tincidunt ex. Mauris egestas lacus eu lectus dictum, at luctus mauris consequat. Phasellus eget enim auctor, molestie ex eu, interdum nisi. Donec nunc ante, blandit eu enim vel, vehicula aliquet lectus. Sed a tellus viverra, ultrices quam congue, ullamcorper mauris. Aliquam vitae rutrum arcu. Duis aliquet est lorem, sed cursus est scelerisque non. Aenean at urna odio. Quisque nec ornare purus. Nullam viverra efficitur congue.\r\n\r\nNunc tincidunt felis in tortor faucibus viverra. Etiam nec arcu dignissim, sodales lorem mattis, ornare nunc. Proin aliquet malesuada lectus, non pharetra lacus congue ac. Nunc molestie urna nunc, ut rutrum lacus sodales non. Cras ornare risus mi. Sed posuere eros vel felis varius auctor. Aenean leo magna, ultricies vitae ex quis, pretium eleifend magna. Mauris aliquam risus ut nulla suscipit, dapibus congue quam elementum. Fusce bibendum consectetur massa, ac posuere enim consequat vel. Aliquam erat volutpat. In eros orci, feugiat convallis erat a, pellentesque pharetra diam. Phasellus mollis libero malesuada, fermentum erat sit amet, accumsan velit.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_contacts`
--
ALTER TABLE `company_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
