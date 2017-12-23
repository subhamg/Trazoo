-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2017 at 09:51 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trazoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `inv`
--

DROP TABLE IF EXISTS `inv`;
CREATE TABLE IF NOT EXISTS `inv` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  
  
  `product_name` varchar(100) NOT NULL, 
  `product_code` varchar(100) NOT NULL,
  `product_photo` varchar(100) NOT NULL,
  
  `in_stock` varchar(100) NOT NULL,
  `total_variats` varchar(100) NOT NULL,
  `whole_sale_price` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  
  `product_type1` varchar(100) NOT NULL,
  `product_type2` varchar(100) NOT NULL,
  `product_type3` varchar(100) NOT NULL,
  `product_type4` varchar(100) NOT NULL,

  `selling_format` varchar(100) NOT NULL,
  `moq` varchar(100) NOT NULL,
  `mrp` varchar(100) NOT NULL,
  `shipping_time` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `warranty_application` varchar(100) NOT NULL,
  `warranty_duration` varchar(100) NOT NULL,
  `warranty_provider` varchar(100) NOT NULL,
  `shipping_responsibility` varchar(100) NOT NULL,
  `free_shipping` varchar(100) NOT NULL,
  `weight_per_kg` varchar(100) NOT NULL,
  `items_in_one_box` varchar(100) NOT NULL,
  `box_dimensions` varchar(100) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `style_type` varchar(100) NOT NULL,
  `ideal_for` varchar(100) NOT NULL,
  `fabric` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `fit_type` varchar(100) NOT NULL,
  `pattern_type` varchar(100) NOT NULL,
  `wash_care` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
