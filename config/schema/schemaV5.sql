-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 01:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fit3047_iep1`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` char(36) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `username` varchar(36) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `abn` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers_order_detail`
--

CREATE TABLE `customers_order_detail` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `order_id` char(36) NOT NULL,
  `price` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` char(36) NOT NULL,
  `customer_id` char(36) NOT NULL,
  `date` date NOT NULL,
  `payment` varchar(36) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` char(36) NOT NULL,
  `name` varchar(36) NOT NULL,
  `cost` decimal(9,2) NOT NULL,
  `retail_price` decimal(9,2) NOT NULL,
  `quantity` int(5) NOT NULL,
  `supplier_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `restockings`
--

CREATE TABLE `restockings` (
  `id` char(36) NOT NULL,
  `staff_id` char(36) NOT NULL,
  `date` date NOT NULL,
  `payment` varchar(36) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` char(36) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(36) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staffs_restocking_detail`
--

CREATE TABLE `staffs_restocking_detail` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `restocking_id` char(36) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` char(36) NOT NULL,
  `business_name` varchar(64) NOT NULL,
  `contact_name` varchar(64) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `abn` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `business_name`, `contact_name`, `address`, `email`, `phone`, `abn`) VALUES
('24885be5-3282-4e86-85d8-f985a2bf6885', 'Supplier1', 'Jerry Thompson', '6 Test Street, Victo', 'test1@test.com', '5436436723', '99999999999'),
('3169d43d-4fc1-4e5e-8348-cab1cc547a24', 'Supplier 4', 'Jason Laio', '12 Test Drive, Goldshire, UK', 'test4@dest.cpm', '0343267567', '65543214567'),
('4a4d2421-c743-4d2c-84a5-a16bb061d456', 'Suppier2', 'Alice Bong', '690 Test Street, Clayton, Victoria', 'test2@test.com', '4544665379', '67876867878'),
('59a4f81c-d97e-4238-9de7-51aa80f9ec18', 'Supplier3', 'Maddy Jane', '344 test Avenue, Brooklyn, DT, USA', 'test3@test.com', '5932333586', '67786666666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `abn` (`abn`);

--
-- Indexes for table `customers_order_detail`
--
ALTER TABLE `customers_order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customers_order_detail_product` (`product_id`),
  ADD KEY `fk_customers_order_detail_order` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customer_orders` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_supplier` (`supplier_id`);

--
-- Indexes for table `restockings`
--
ALTER TABLE `restockings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_staff_restockings` (`staff_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `staffs_restocking_detail`
--
ALTER TABLE `staffs_restocking_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_staffs_restocking_detail_product` (`product_id`),
  ADD KEY `fk_staffs_restocking_detail_restocking` (`restocking_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `abn` (`abn`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers_order_detail`
--
ALTER TABLE `customers_order_detail`
  ADD CONSTRAINT `fk_customers_order_detail_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `fk_customers_order_detail_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_customer_orders` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_supplier` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `restockings`
--
ALTER TABLE `restockings`
  ADD CONSTRAINT `fk_staff_restockings` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`);

--
-- Constraints for table `staffs_restocking_detail`
--
ALTER TABLE `staffs_restocking_detail`
  ADD CONSTRAINT `fk_restocking_orders_detail_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk_restocking_orders_detail_restocking` FOREIGN KEY (`restocking_id`) REFERENCES `restockings` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
