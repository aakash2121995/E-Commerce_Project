-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2015 at 05:53 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jmicart`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `Line1_ADDR` varchar(100) NOT NULL,
  `Line2_ADDR` varchar(100) NOT NULL,
  `Line3_ADDR` varchar(100) NOT NULL,
  `City_ADDR` varchar(30) NOT NULL,
  `PinCode_ADDR` int(6) NOT NULL,
  `State_ADDR` varchar(50) NOT NULL,
  `Country_ADDR` varchar(50) NOT NULL,
  `CUSTOMER_UserName_CUST` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`Line1_ADDR`, `Line2_ADDR`, `Line3_ADDR`, `City_ADDR`, `PinCode_ADDR`, `State_ADDR`, `Country_ADDR`, `CUSTOMER_UserName_CUST`) VALUES
('1704A', 'Govindpuri Extension', 'Kalkaji', 'New Delhi', 110019, 'Delhi', 'India', 'aakash2121995'),
('34', 'dssdsds', '434334', 'New Delhi', 34334, 'Delhi', 'India', 'Ba'),
('1007', 'Mountain Drive', '', 'Gotham city', 764873, 'Gotham', 'United Kingdom', 'batman');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `UserName_ADMIN` varchar(50) NOT NULL,
  `PassHash_ADMIN` varchar(512) NOT NULL,
  `PassSalt_ADMIN` varchar(512) NOT NULL,
  `FName_ADMIN` varchar(50) DEFAULT NULL,
  `LName_ADMIN` varchar(100) DEFAULT NULL,
  `Email_ADMIN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `NumOfItems_CART` int(11) NOT NULL,
  `TotalPrice_CART` decimal(10,2) NOT NULL,
  `ORDER_CUSTOMER_UserName_CUST` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cart2`
--

CREATE TABLE IF NOT EXISTS `cart2` (
  `QTY_CART` int(11) NOT NULL DEFAULT '1',
  `PRODUCT_ID` int(11) DEFAULT NULL,
  `CUSTOMER_USERNAME` varchar(50) DEFAULT NULL,
  `TOTAL_PRICE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE IF NOT EXISTS `cart_item` (
  `Quantity_ITEM` int(11) NOT NULL DEFAULT '1',
  `CART_ORDER_CUSTOMER_UserName_CUST` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `ID_CATE` int(11) NOT NULL,
  `Name_CATE` varchar(50) NOT NULL,
  `Description_CATE` longtext
) ENGINE=InnoDB AUTO_INCREMENT=457 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID_CATE`, `Name_CATE`, `Description_CATE`) VALUES
(121, 'MEN', NULL),
(234, 'WOMEN', NULL),
(456, 'KIDS', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `UserName_CUST` varchar(50) NOT NULL,
  `Email_CUST` varchar(50) NOT NULL,
  `PassHash_CUST` varchar(512) NOT NULL,
  `PassSalt_CUST` varchar(512) NOT NULL,
  `FName_CUST` varchar(50) DEFAULT NULL,
  `LNAME_CUST` varchar(100) DEFAULT NULL,
  `DOB_CUST` datetime DEFAULT NULL,
  `Gender_CUST` enum('Male','Female','Other') DEFAULT NULL,
  `Phone_CUST` bigint(11) DEFAULT NULL,
  `DateCreated_CUST` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastAccessed_CUST` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProfilePicPath_CUST` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`UserName_CUST`, `Email_CUST`, `PassHash_CUST`, `PassSalt_CUST`, `FName_CUST`, `LNAME_CUST`, `DOB_CUST`, `Gender_CUST`, `Phone_CUST`, `DateCreated_CUST`, `LastAccessed_CUST`, `ProfilePicPath_CUST`) VALUES
('aakash2121995', 'aakash.srt@gmail.com', 'aakash', 'logmein', 'aakash', 'aggarwal', '1995-02-12 00:00:00', 'Male', 8860155393, '2015-10-20 07:40:31', '2015-10-20 07:40:31', 'Img/aakash2121995.jpg'),
('Ba', '', '', '', NULL, NULL, NULL, NULL, NULL, '2015-10-25 12:39:22', '2015-10-25 12:39:22', 'Img/aakash2121995.jpg'),
('batman', 'masterwayne@batman.com ', 'alfred', '', 'Bruce', 'Wayne', '1974-01-30 00:00:00', 'Male', 2147483647, '2015-10-25 12:44:39', '2015-10-25 12:44:39', 'Img/batman.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `ID_MANU` int(11) NOT NULL,
  `Name_MANU` varchar(100) NOT NULL,
  `Website_MANU` varchar(50) DEFAULT NULL,
  `Email_MANU` varchar(50) DEFAULT NULL,
  `Logo_MANU` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1011 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`ID_MANU`, `Name_MANU`, `Website_MANU`, `Email_MANU`, `Logo_MANU`) VALUES
(171, 'Koutons', NULL, NULL, NULL),
(182, 'Pepe', NULL, NULL, NULL),
(193, 'Adidas', NULL, NULL, NULL),
(203, 'ABC', NULL, NULL, NULL),
(233, 'Levis', NULL, NULL, NULL),
(1010, 'Puma', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `ID_ORDR` int(11) NOT NULL,
  `Date_ORDR` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `BillingName_ORDR` varchar(150) NOT NULL,
  `Status_ORDR` enum('Placed','Processing','Accepted','Shipping','Delivered') NOT NULL,
  `OrderNumber_ORDR` int(11) NOT NULL,
  `Amount_ORDR` decimal(10,2) NOT NULL,
  `CUSTOMER_UserName_CUST` varchar(50) NOT NULL,
  `ADDRESS_CUSTOMER_UserName_CUST` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order2`
--

CREATE TABLE IF NOT EXISTS `order2` (
  `ID_ORDR` bigint(20) NOT NULL,
  `Date_ORDR` date NOT NULL,
  `Status_ORDR` enum('Delivered','Shipping','Processing','') NOT NULL DEFAULT 'Processing',
  `CUSTOMER_USERNAME_CUST` varchar(50) NOT NULL,
  `PRODUCT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order2`
--

INSERT INTO `order2` (`ID_ORDR`, `Date_ORDR`, `Status_ORDR`, `CUSTOMER_USERNAME_CUST`, `PRODUCT_ID`) VALUES
(45445, '2015-03-26', 'Processing', 'batman', 897),
(123442, '2015-03-04', 'Shipping', 'aakash2121995', 742),
(343443, '2015-09-03', 'Shipping', 'aakash2121995', 543),
(758983, '2014-11-11', 'Delivered', 'batman', 101),
(8564343, '2015-08-05', 'Shipping', 'batman', 5634),
(95746756, '2015-07-01', 'Delivered', 'aakash2121995', 897),
(123444554, '2015-10-07', 'Processing', 'aakash2121995', 101);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID_PROD` int(11) NOT NULL,
  `Name_PROD` varchar(100) NOT NULL,
  `Description_PROD` longtext COMMENT 'Multiline descriptions ????',
  `Picture_PROD` varchar(256) DEFAULT NULL COMMENT 'Path to image. Multiple images should be supported.\nConsider changing into a separate entity.',
  `UnitPrice_PROD` decimal(10,2) DEFAULT NULL,
  `Discount_PROD` decimal(5,3) DEFAULT NULL,
  `UnitMRP_PROD` decimal(10,2) DEFAULT NULL,
  `STOCK_PROD` int(11) DEFAULT '50',
  `Sizes_PROD` varchar(100) DEFAULT NULL COMMENT 'available sizes has to be a list.\nConsider changing into an entity.',
  `Colours_PROD` varchar(100) DEFAULT NULL COMMENT 'Has to be a list.\nConsider changing into an entity.',
  `AvgRating_PROD` decimal(3,2) DEFAULT NULL,
  `MANUFACTURER_ID_MANU` int(11) NOT NULL,
  `CATEGORY_ID_CATE` int(11) NOT NULL,
  `PROD_KEYWORDS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5635 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID_PROD`, `Name_PROD`, `Description_PROD`, `Picture_PROD`, `UnitPrice_PROD`, `Discount_PROD`, `UnitMRP_PROD`, `STOCK_PROD`, `Sizes_PROD`, `Colours_PROD`, `AvgRating_PROD`, `MANUFACTURER_ID_MANU`, `CATEGORY_ID_CATE`, `PROD_KEYWORDS`) VALUES
(543, 'Green Black T-shirt', NULL, NULL, '300.00', NULL, NULL, 3, NULL, NULL, NULL, 1010, 234, 'black,t-shirt,green'),
(742, 'XYZ Trouser', NULL, NULL, '500.00', NULL, NULL, 10, NULL, NULL, NULL, 203, 121, 'trouser,xyz'),
(897, 'Superman Shirt', NULL, NULL, '670.00', NULL, NULL, 50, NULL, NULL, NULL, 182, 456, 'superman'),
(5634, 'Bat Suit', NULL, NULL, '100000.00', NULL, NULL, 35, NULL, NULL, NULL, 233, 234, 'bat,batsuit,batman');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `Rating_REVI` decimal(3,2) NOT NULL,
  `Title_REVI` varchar(100) DEFAULT NULL,
  `Text_REVI` longtext,
  `Date_REVI` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `PRODUCT_ID_PROD` int(11) NOT NULL,
  `CUSTOMER_UserName_CUST` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`CUSTOMER_UserName_CUST`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`),
  ADD UNIQUE KEY `UserName_ADMIN_UNIQUE` (`UserName_ADMIN`),
  ADD UNIQUE KEY `Email_ADMIN_UNIQUE` (`Email_ADMIN`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ORDER_CUSTOMER_UserName_CUST`);

--
-- Indexes for table `cart2`
--
ALTER TABLE `cart2`
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`,`CUSTOMER_USERNAME`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`CART_ORDER_CUSTOMER_UserName_CUST`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_CATE`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`UserName_CUST`),
  ADD UNIQUE KEY `UserName_CUST_UNIQUE` (`UserName_CUST`),
  ADD UNIQUE KEY `Email_CUST_UNIQUE` (`Email_CUST`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`ID_MANU`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID_ORDR`,`CUSTOMER_UserName_CUST`,`ADDRESS_CUSTOMER_UserName_CUST`),
  ADD UNIQUE KEY `OrderNumber_ORDR_UNIQUE` (`OrderNumber_ORDR`),
  ADD KEY `FK_ORDER_ADDRESS1_idx` (`ADDRESS_CUSTOMER_UserName_CUST`),
  ADD KEY `FK_ORDER_CUSTOMER1` (`CUSTOMER_UserName_CUST`);

--
-- Indexes for table `order2`
--
ALTER TABLE `order2`
  ADD PRIMARY KEY (`ID_ORDR`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`),
  ADD KEY `CUSTOMER_USERNAME_CUST` (`CUSTOMER_USERNAME_CUST`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID_PROD`),
  ADD KEY `FK_PRODUCT_MANUFACTURER_idx` (`MANUFACTURER_ID_MANU`),
  ADD KEY `FK_PRODUCT_CATEGORY1_idx` (`CATEGORY_ID_CATE`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`PRODUCT_ID_PROD`,`CUSTOMER_UserName_CUST`),
  ADD KEY `FK_REVIEW_CUSTOMER1_idx` (`CUSTOMER_UserName_CUST`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID_CATE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=457;
--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `ID_MANU` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1011;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID_PROD` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5635;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_ADDRESS_CUSTOMER1` FOREIGN KEY (`CUSTOMER_UserName_CUST`) REFERENCES `customer` (`UserName_CUST`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_CART_ORDER1` FOREIGN KEY (`ORDER_CUSTOMER_UserName_CUST`) REFERENCES `order` (`CUSTOMER_UserName_CUST`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `FK_CART_ITEM_CART1` FOREIGN KEY (`CART_ORDER_CUSTOMER_UserName_CUST`) REFERENCES `cart` (`ORDER_CUSTOMER_UserName_CUST`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_ORDER_ADDRESS1` FOREIGN KEY (`ADDRESS_CUSTOMER_UserName_CUST`) REFERENCES `address` (`CUSTOMER_UserName_CUST`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ORDER_CUSTOMER1` FOREIGN KEY (`CUSTOMER_UserName_CUST`) REFERENCES `customer` (`UserName_CUST`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_PRODUCT_CATEGORY1` FOREIGN KEY (`CATEGORY_ID_CATE`) REFERENCES `category` (`ID_CATE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PRODUCT_MANUFACTURER` FOREIGN KEY (`MANUFACTURER_ID_MANU`) REFERENCES `manufacturer` (`ID_MANU`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_REVIEW_CUSTOMER1` FOREIGN KEY (`CUSTOMER_UserName_CUST`) REFERENCES `customer` (`UserName_CUST`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_REVIEW_PRODUCT1` FOREIGN KEY (`PRODUCT_ID_PROD`) REFERENCES `product` (`ID_PROD`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
