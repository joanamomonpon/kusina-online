-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Mar 21, 2019 at 03:21 AM
=======
-- Generation Time: Mar 23, 2019 at 08:09 PM
>>>>>>> oderadd/Orderviewcus
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinekusina`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `middle_initial` varchar(2) NOT NULL,
  `pnumber` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `middle_initial`, `pnumber`, `province`, `street`, `barangay`, `city`) VALUES
(1, 'juy', 'Entigro', 'A.', '09876543321', 'Misamis Oriental', 'P-5 ambot nimu', 'Lower Lamac', 'Oroquieta City'),
(2, 'joan', 'Amomonpon', 'S.', '09108332155', 'Misamis Occidental', 'P-5 liko-liko', 'Sibugon', 'Oroquieta City'),
(231, 'Michille', 'Piang', 'G.', '0009876554', 'Misamis Oriental', 'Purok-3', 'Puntod , Lopez jaena', 'misamis occidental');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(50) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `timestamp`) VALUES
<<<<<<< HEAD
(357347, 2, '2019-03-16 23:59:00');
=======
(1, 1, '2019-03-23 17:21:00'),
(9977, 2, '2019-03-23 16:12:00'),
(98989, 231, '2019-03-30 12:06:00');
>>>>>>> oderadd/Orderviewcus

-- --------------------------------------------------------

--
-- Table structure for table `login_form`
--

CREATE TABLE `login_form` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_form`
--

INSERT INTO `login_form` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` varchar(50) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(100) NOT NULL,
  `unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `price`, `description`, `unit`) VALUES
<<<<<<< HEAD
(909, 'menudo', '20.00', 'delicious', 'kg'),
(7979, 'humba', '656.00', 'iy', 'serve');
=======
('K01', 'Fried Lumpia', '123.00', 'zxcbbxvncbvm', 'grms'),
('KO-007', 'Calderita', '10.00', 'ddsddsasd', 'grms'),
('KO-009', 'fried chicken', '182.00', 'ddsddsasd', 'pcs.');
>>>>>>> oderadd/Orderviewcus

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `hidden_id` int(11) NOT NULL,
  `order_id` int(50) NOT NULL,
<<<<<<< HEAD
  `menu_id` int(50) NOT NULL,
=======
  `menu_id` varchar(50) NOT NULL,
>>>>>>> oderadd/Orderviewcus
  `price` decimal(10,2) NOT NULL,
  `quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`hidden_id`, `order_id`, `menu_id`, `price`, `quantity`) VALUES
(7, 1, 'K01', '75.50', '1'),
(8, 9977, 'K01', '75.50', '2'),
(9, 9977, 'KO-009', '20.00', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `login_form`
--
ALTER TABLE `login_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`hidden_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_form`
--
ALTER TABLE `login_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

<<<<<<< HEAD
=======
--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `hidden_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

>>>>>>> oderadd/Orderviewcus
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `customer_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
<<<<<<< HEAD
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`),
  ADD CONSTRAINT `order_item_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `customer_order` (`order_id`);
=======
  ADD CONSTRAINT `order_item_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `customer_order` (`order_id`),
  ADD CONSTRAINT `order_item_ibfk_3` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`);
>>>>>>> oderadd/Orderviewcus
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
