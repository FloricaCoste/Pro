-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2017 at 09:27 PM
-- Server version: 8.0.0-dmr-log
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`id`, `username`, `password`, `email`, `is_active`, `roles`) VALUES
(1, 'super', '$2y$13$OCIv/e6OYtcw3HD/MdDIwOYFoCie73swpCznvXYe7NwQ1ubG3lk22', 'super@admin.com', 1, '["ROLE_SUPER_ADMIN"]'),
(2, 'admin', '$2y$13$xGIf/AAUTEaS8uYp.ofNPOUtCgmnAaahSlMEmuICpA5228aXcMpFq', 'admin@admin.com', 1, '["ROLE_ADMIN"]'),
(3, 'flo', '$2y$13$2enZqoIRVGAqbas7ctjD5eXMIcaZETXiqkKGLoXtsCC9YX9bwDEBK', 'coseflorica@yahoo.com', 1, '["ROLE_FLO"]');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `suppliers_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `orders_date` datetime NOT NULL,
  `delivery_date` datetime NOT NULL,
  `ship_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orders_cost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orders_id`, `suppliers_id`, `user_id`, `orders_date`, `delivery_date`, `ship_address`, `orders_cost`) VALUES
(1, 1, 12, 1, '2012-01-01 00:00:00', '2012-02-02 06:02:00', '57 Achill Sq', 1452);

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `quality_Unit` int(11) NOT NULL,
  `price_Unit` double NOT NULL,
  `suppliers_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `product_ID` int(11) NOT NULL,
  `product_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_ID` int(11) NOT NULL,
  `product_Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_ID`, `product_Name`, `product_Type`, `suppliers_ID`, `product_Description`) VALUES
(1, 5, 'Teacup', 'Cutlery item', 12, 'A cup from which tea is drunk.         an amount held by a teacup, about 150 ml.'),
(3, 2, 'Soap', 'Accommodation', 1, 'It is substance used with water for washing and cleaning, made of a compound of natural oils or fats with sodium hydroxide or another strong alkali, and typically having perfume and colouring added.');

-- --------------------------------------------------------

--
-- Table structure for table `product_invetory`
--

CREATE TABLE `product_invetory` (
  `id` int(11) NOT NULL,
  `product_ID` int(11) NOT NULL,
  `product_Counting_Group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_Unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quality_Unit` int(11) NOT NULL,
  `price_Unit` double NOT NULL,
  `product_Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `URL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estimated_Delivery_Time` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p_o`
--

CREATE TABLE `p_o` (
  `id` int(11) NOT NULL,
  `hotel_ID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_ID` int(11) NOT NULL,
  `po_no` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `po_date` datetime NOT NULL,
  `ship_to_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` double NOT NULL,
  `VAT` double NOT NULL,
  `discount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount_Value` double NOT NULL,
  `shipment_Costs` double NOT NULL,
  `TAX_rate` double NOT NULL,
  `aprovedaproved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `id` int(11) NOT NULL,
  `quotation_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `suppliers_id` int(11) NOT NULL,
  `product_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `request_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `stock_date` datetime NOT NULL,
  `product_ID` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `suppliers_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `stock_date`, `product_ID`, `quantity`, `suppliers_ID`) VALUES
(1, '2017-05-01 00:00:00', 5, 3, 1),
(2, '2017-05-01 00:00:00', 2, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_address`
--

CREATE TABLE `suppliers_address` (
  `id` int(11) NOT NULL,
  `suppliers_ID` int(11) NOT NULL,
  `suppliers_Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_Region` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `suppliers_address`
--

INSERT INTO `suppliers_address` (`id`, `suppliers_ID`, `suppliers_Address`, `suppliers_Region`) VALUES
(1, 1, '27 Boghall Rd, Beechwood Cl, Kilruddery Demesne East, Bray, Co. Wicklow, A98 AE03', 'Leinster');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_bank`
--

CREATE TABLE `suppliers_bank` (
  `id` int(11) NOT NULL,
  `suppliers_id` int(11) NOT NULL,
  `suppliers_Bank_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_Acc_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_IBAN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_BIC` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_Country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_Bank_Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uppliers_Swift` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_Routing_Cod` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_contact`
--

CREATE TABLE `suppliers_contact` (
  `id` int(11) NOT NULL,
  `suppliers_id` int(11) NOT NULL,
  `suppliers_contact_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_e_mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_fax` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_web` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `suppliers_contact`
--

INSERT INTO `suppliers_contact` (`id`, `suppliers_id`, `suppliers_contact_Name`, `suppliers_phone`, `suppliers_mobile`, `suppliers_e_mail`, `suppliers_fax`, `suppliers_web`) VALUES
(1, 1, 'Bruce Cot', '(01) 276 0930', '0862305111', 'Bruce@irishdist.ie', '(01) 276 0000', 'www.irishdist.ie/');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_details`
--

CREATE TABLE `suppliers_details` (
  `id` int(11) NOT NULL,
  `suppliers_id` int(11) NOT NULL,
  `susuppliers_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_business_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suppliers_web` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `suppliers_details`
--

INSERT INTO `suppliers_details` (`id`, `suppliers_id`, `susuppliers_Name`, `suppliers_business_type`, `suppliers_web`) VALUES
(1, 1, 'Irish Distibutors', 'Catering, Hygiene & Chef Equipment', 'http://www.irishdist.ie/'),
(2, 1, 'Bunzl Rafferty', 'Catering, Hygiene & Chef Equipment', 'https://www.raffertyhospitality.com/'),
(3, 3, 'Aldi', 'Supermarket', 'www.aldi.ie');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_quotation`
--

CREATE TABLE `suppliers_quotation` (
  `id` int(11) NOT NULL,
  `quotation_no` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `product_Counting_Group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_Unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quality_Unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_Unit` double NOT NULL,
  `product_Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `URL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estimated_Delivery_Time` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_details_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_details_landline` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_details_prefix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_details_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_First_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_Second_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_e_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_validate` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C2502824F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_C2502824E7927C74` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_invetory`
--
ALTER TABLE `product_invetory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_o`
--
ALTER TABLE `p_o`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers_address`
--
ALTER TABLE `suppliers_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers_bank`
--
ALTER TABLE `suppliers_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers_contact`
--
ALTER TABLE `suppliers_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers_details`
--
ALTER TABLE `suppliers_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers_quotation`
--
ALTER TABLE `suppliers_quotation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_invetory`
--
ALTER TABLE `product_invetory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p_o`
--
ALTER TABLE `p_o`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `suppliers_address`
--
ALTER TABLE `suppliers_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `suppliers_bank`
--
ALTER TABLE `suppliers_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suppliers_contact`
--
ALTER TABLE `suppliers_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `suppliers_details`
--
ALTER TABLE `suppliers_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `suppliers_quotation`
--
ALTER TABLE `suppliers_quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
