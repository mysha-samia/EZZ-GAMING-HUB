-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2023 at 05:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `method` varchar(50) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `product_id`, `price`, `qty`, `date`, `status`) VALUES
(1, 1, 'John Doe', '123-456-7890', 'johndoe@example.com', 'Credit Card', 101, 19.99, 2, '2023-05-01', 'Shipped'),
(2, 2, 'Jane Smith', '555-555-1212', 'janesmith@example.com', 'PayPal', 102, 29.99, 1, '2023-05-02', 'Delivered'),
(3, 3, 'Bob Johnson', '555-123-4567', 'bjohnson@example.com', 'Credit Card', 103, 14.99, 3, '2023-05-03', 'Pending'),
(4, 4, 'Alice Lee', '555-987-6543', 'alee@example.com', 'PayPal', 101, 19.99, 1, '2023-05-04', 'Shipped'),
(5, 5, 'Mike Williams', '555-555-5555', 'mwilliams@example.com', 'Credit Card', 102, 29.99, 2, '2023-05-05', 'Delivered'),
(6, 6, 'Sara Davis', '555-111-1111', 'sdavis@example.com', 'Credit Card', 103, 14.99, 1, '2023-05-06', 'Shipped'),
(7, 7, 'Tom Brown', '555-222-2222', 'tbrown@example.com', 'PayPal', 101, 19.99, 2, '2023-05-07', 'Delivered'),
(8, 8, 'Emily Wilson', '555-333-3333', 'ewilson@example.com', 'Credit Card', 102, 29.99, 1, '2023-05-08', 'Pending'),
(9, 9, 'Jake Rodriguez', '555-444-4444', 'jrodriguez@example.com', 'Credit Card', 103, 14.99, 3, '2023-05-09', 'Shipped'),
(10, 10, 'Linda Nguyen', '555-555-7777', 'lnguyen@example.com', 'PayPal', 101, 19.99, 1, '2023-05-10', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` longblob DEFAULT NULL,
  `product_details` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `product_details`) VALUES
(1, 'Forza Horizon 5', 56.09, 0x6769746875622e706e67, 'Forza Horizon 5'),
(3, 'Fifa23', 25.00, 0x52656163742d69636f6e2e7376672e706e67, 'Play with football!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
