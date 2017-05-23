-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 03:21 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `ad_id` int(11) NOT NULL,
  `ad_title` varchar(255) NOT NULL,
  `ad_url` varchar(255) NOT NULL,
  `ad_footer` varchar(255) NOT NULL,
  `ad_p_page` varchar(255) NOT NULL,
  `ad_cat` int(11) NOT NULL,
  `ad_st` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `a_id` int(11) NOT NULL,
  `f_n` varchar(155) NOT NULL,
  `l_n` varchar(155) NOT NULL,
  `abt` longtext NOT NULL,
  `exp` varchar(255) NOT NULL,
  `sale` varchar(155) NOT NULL,
  `a_img` varchar(255) NOT NULL,
  `a_seo_url` varchar(255) NOT NULL,
  `em` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL,
  `ph` varchar(255) NOT NULL,
  `ad1` varchar(255) NOT NULL,
  `ad2` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `lkd` varchar(255) NOT NULL,
  `gl` varchar(255) NOT NULL,
  `skp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`a_id`, `f_n`, `l_n`, `abt`, `exp`, `sale`, `a_img`, `a_seo_url`, `em`, `mob`, `ph`, `ad1`, `ad2`, `tw`, `fb`, `lkd`, `gl`, `skp`) VALUES
(26, 'Yeasin', 'ERICSON', 'MIKE ERICSON Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id metus odio. Vestibulum rutrum justo semper felis dapibus, id consectetur lacus accumsan.', '8', '30', 'images/69046staff-profile3.jpg', 'yeasin', 'yeasin1994@gmail.com', '01671773040', '42180890', 'Jessore', 'Bagerhat', 'mike', 'mike', 'mike', 'mike', 'mike'),
(27, 'MELISSA', 'DALE', 'MELISSA DALE Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id metus odio. Vestibulum rutrum justo semper felis dapibus, id consectetur lacus accumsan.', '5', '25', 'images/74627staff-profile2.jpg', 'melissa', 'melissa@gmail.com', '01671773041', '42180891', 'Sylhet', 'Bagura', 'melissa', 'melissa', 'melissa', 'melissa', 'melissa'),
(28, 'PAUL', 'PETERSON', '', '', '', 'images/82308staff-profile1.jpg', 'paul', 'paul@gmail.com', '01671773042', '42180892', '', '', '', '', '', '', ''),
(29, 'CHRISTINA', 'GATZ', 'CHRISTINA GATZ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id metus odio. Vestibulum rutrum justo semper felis dapibus, id consectetur lacus accumsan.', '8', '45', 'images/98471staff-profile4.jpg', 'christina', 'christina@gmail.com', '01671773043', '42180893', 'London', 'Atlanta', 'christina', 'christina', 'christina', 'christina', 'christina');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `a_id` int(11) NOT NULL,
  `f_n` varchar(155) NOT NULL,
  `l_n` varchar(255) NOT NULL,
  `abt` longtext NOT NULL,
  `exp` varchar(255) NOT NULL,
  `sale` varchar(155) NOT NULL,
  `a_img` varchar(255) NOT NULL,
  `pro_seo_url` int(11) NOT NULL,
  `em` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL,
  `ph` varchar(255) NOT NULL,
  `ad1` varchar(255) NOT NULL,
  `ad2` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `lkd` varchar(255) NOT NULL,
  `gl` varchar(255) NOT NULL,
  `skp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_product_id` int(11) NOT NULL,
  `cart_product_title` varchar(255) NOT NULL,
  `cart_product_price` varchar(55) NOT NULL,
  `cart_quantity` int(55) NOT NULL,
  `cart_product_image` varchar(255) NOT NULL,
  `cart_product_seo_url` int(255) NOT NULL,
  `cart_customer_id` int(11) NOT NULL,
  `cart_tax` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` longtext NOT NULL,
  `cat_mate_title` varchar(255) NOT NULL,
  `cat_mate_description` varchar(255) NOT NULL,
  `cat_mate_key` varchar(255) NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `cat_seo_url` varchar(255) NOT NULL,
  `cat_top` int(5) NOT NULL,
  `cat_parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customers_id` int(11) NOT NULL,
  `fb_id` varchar(255) NOT NULL,
  `customers_first_name` varchar(155) NOT NULL,
  `customers_last_name` varchar(155) NOT NULL,
  `customers_email` varchar(155) NOT NULL,
  `customers_user_name` varchar(155) NOT NULL,
  `customers_password` varchar(155) NOT NULL,
  `customers_date` datetime NOT NULL,
  `customers_agent` varchar(155) NOT NULL,
  `customers_ip` int(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `address_id` int(11) NOT NULL,
  `address_customer_id` int(11) NOT NULL,
  `address_street_one` varchar(255) NOT NULL,
  `address_street_two` varchar(255) NOT NULL,
  `address_state` varchar(255) NOT NULL,
  `address_zip` varchar(155) NOT NULL,
  `address_country` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `features_id` int(11) NOT NULL,
  `features_product_id` int(11) NOT NULL,
  `features_active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `frontend`
--

CREATE TABLE `frontend` (
  `front_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `store_owner_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `maps_latitude` varchar(255) NOT NULL,
  `maps_longitude` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_dis` varchar(255) NOT NULL,
  `bag_img` varchar(255) NOT NULL,
  `footer_img` varchar(255) NOT NULL,
  `copy_text` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frontend`
--

INSERT INTO `frontend` (`front_id`, `title`, `slogan`, `logo`, `store_name`, `store_owner_name`, `phone`, `email`, `address`, `maps_latitude`, `maps_longitude`, `meta_keyword`, `meta_title`, `meta_dis`, `bag_img`, `footer_img`, `copy_text`, `facebook`, `twitter`, `youtube`, `google`) VALUES
(1, 'slicklab2', 'Get slicklab', 'images/53546luxor-realty.png', 'Coupon Hut', 'Jodran', '+1 733-928438', 'abdullasadi23@gmail.com', 'Newyork. Brooklyn', '22.8167', '89.5500', 'Get coupons one stop', 'Get coupons one stop', 'Get coupons one stop', 'images/919098f0fb7776bb1cba00f1f1123c6954f3b.jpg', 'images/luxor-realty-footer.png', '2015@jordan', '', '', 'www.facebook.com/ya', '');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `Information_id` int(11) NOT NULL,
  `Information_title` varchar(255) NOT NULL,
  `Information_description` longtext NOT NULL,
  `Information_meta_title` varchar(255) NOT NULL,
  `Information_meta_description` varchar(255) NOT NULL,
  `Information_meta_keyword` varchar(255) NOT NULL,
  `Information_meta_stores` int(11) NOT NULL,
  `Information_seo_keyword` varchar(255) NOT NULL,
  `Information_meta_Bottom` int(11) NOT NULL,
  `Information_meta_Status` int(11) NOT NULL,
  `Information_sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`Information_id`, `Information_title`, `Information_description`, `Information_meta_title`, `Information_meta_description`, `Information_meta_keyword`, `Information_meta_stores`, `Information_seo_keyword`, `Information_meta_Bottom`, `Information_meta_Status`, `Information_sort_order`) VALUES
(1, 'about ', 'sdafsa', 'dfasd', 'sadf', 'sdf', 0, 'about', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(11) NOT NULL,
  `manufacturer_name` varchar(155) NOT NULL,
  `manufacturer_description` longtext NOT NULL,
  `manufacturer_seo_url` varchar(255) NOT NULL,
  `manufacturer_sort_oder` varchar(255) NOT NULL,
  `manufacturer_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `news_id` int(11) NOT NULL,
  `news_date` varchar(155) NOT NULL,
  `news_em` varchar(255) NOT NULL,
  `news_ip` varchar(255) NOT NULL,
  `news_user_agent` varchar(255) NOT NULL,
  `news_st` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_payment_method` varchar(155) NOT NULL,
  `order_shipping_price` varchar(155) NOT NULL,
  `order_tax` varchar(155) NOT NULL,
  `customer_key` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `pro_title` varchar(255) NOT NULL,
  `pro_dis` longtext NOT NULL,
  `pro_m_title` varchar(255) NOT NULL,
  `pro_m_dis` longtext NOT NULL,
  `pro_owner_name` varchar(255) NOT NULL,
  `pro_publish_date` date NOT NULL,
  `pro_ex_date` varchar(155) NOT NULL,
  `pro_price` varchar(155) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `pro_seo_url` varchar(255) NOT NULL,
  `pro_user_id` int(11) NOT NULL,
  `pro_status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sl_id` int(11) NOT NULL,
  `sl_name` varchar(255) NOT NULL,
  `sl_url` varchar(255) NOT NULL,
  `sl_date` date NOT NULL,
  `sl_img` varchar(255) NOT NULL,
  `sl_status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sl_id`, `sl_name`, `sl_url`, `sl_date`, `sl_img`, `sl_status`) VALUES
(14, 'silder1', 'silder1', '2015-11-10', 'images/slide1.jpg', 1),
(15, 'silder2', 'silder2', '2015-11-10', 'images/slide2.jpg', 1),
(16, 'dsf', 'dsf', '2015-11-10', 'images/slide3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(155) NOT NULL,
  `user_last_name` varchar(155) NOT NULL,
  `user_age` varchar(3) NOT NULL,
  `user_sex` varchar(5) NOT NULL,
  `user_date_of_birth` varchar(255) NOT NULL,
  `user_about` longtext NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_username` varchar(155) NOT NULL,
  `user_password` varchar(155) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_address2` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `user_r_date` date NOT NULL,
  `user_solt` varchar(155) NOT NULL,
  `user_status` varchar(155) NOT NULL,
  `user_session_id` varchar(255) NOT NULL,
  `user_agent` varchar(155) NOT NULL,
  `user_ip` varchar(155) NOT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_age`, `user_sex`, `user_date_of_birth`, `user_about`, `user_email`, `user_username`, `user_password`, `user_address`, `user_address2`, `user_img`, `user_r_date`, `user_solt`, `user_status`, `user_session_id`, `user_agent`, `user_ip`, `user_role`) VALUES
(1, 'yeasin', 'arafat', '10', '', '', '', 'yeasin1994@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'khulna,bangladesh', 'khulna,bangladesh', 'images/post3.jpg', '0000-00-00', '', '', 'q5d5kcqngfips58mopad0aqnki', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '::1', 0),
(13, 'Correctioned', '', '', '', '', '', 'dvruddddddddddd@yahoo.com', '', '463b2ec451796d0756bc27606c63b9ff', '5409 port alice waysdaf', '', 'images/90518post7.jpg', '2015-11-10', '', '', 'f1p63drp50g77e9qsac68hbbi0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36', '::1', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `em` (`em`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customers_id`,`customers_email`,`customers_user_name`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`address_id`,`address_customer_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`features_id`);

--
-- Indexes for table `frontend`
--
ALTER TABLE `frontend`
  ADD PRIMARY KEY (`front_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`Information_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`news_id`),
  ADD UNIQUE KEY `news_em` (`news_em`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`,`customer_id`,`product_id`),
  ADD UNIQUE KEY `orders_id` (`orders_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`,`user_session_id`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customers_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `features_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `frontend`
--
ALTER TABLE `frontend`
  MODIFY `front_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `Information_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
