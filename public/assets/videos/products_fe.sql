-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2026 at 01:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u331209357_fonivo_lk`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_fe`
--

CREATE TABLE `products_fe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `series` varchar(100) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `sku` varchar(100) DEFAULT NULL,
  `storage` varchar(50) DEFAULT NULL,
  `condition` varchar(100) DEFAULT NULL,
  `colour` varchar(50) DEFAULT NULL,
  `battery` varchar(50) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `warranty` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `koko_installment_price` decimal(12,2) DEFAULT NULL,
  `koko_installment_part` int(11) DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `sub_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`sub_images`)),
  `status` tinyint(1) DEFAULT 1 COMMENT '1=active, 0=inactive',
  `is_published` tinyint(1) DEFAULT 1 COMMENT '1=published, 0=draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_fe`
--

INSERT INTO `products_fe` (`id`, `brand`, `series`, `name`, `slug`, `sku`, `storage`, `condition`, `colour`, `battery`, `region`, `warranty`, `description`, `price`, `koko_installment_price`, `koko_installment_part`, `main_image`, `sub_images`, `status`, `is_published`, `created_at`, `updated_at`) VALUES
(1, ' Apple ', 'iPhone 14', 'iPhone 14 Pro Max', NULL, NULL, '128GB', 'Brand New Condition', 'Gold', '84%', 'ZP/A', '14 Days Hardware / 3 Months Software', 'The Apple iPhone is a line of smartphones designed by Apple that combines performance, security, and a user-friendly experience. It features a sleek design, high-quality display, and advanced camera system for capturing photos and videos with great detail. Powered by Apple’s optimized processors, it delivers smooth performance for everyday tasks, gaming, and productivity. The iPhone also runs on iOS, offering regular updates, strong privacy features, and seamless integration with other Apple devices.', 245.00, 61.00, 4, '11series.png', NULL, 1, 1, NULL, NULL),
(2, 'Apple', 'iPhone 15', 'iPhone 15 Pro', 'iphone-15-pro', 'iphone-15-pro', '128GB', 'Brand New Condition', 'Blue Titanium', '100% | CC : 300', 'ZP/A', '14 Days Hardware / 3 Months Software', 'The Apple iPhone is a line of smartphones designed by Apple that combines performance, security, and a user-friendly experience. It features a sleek design, high-quality display, and advanced camera system for capturing photos and videos with great detail. Powered by Apple’s optimized processors, it delivers smooth performance for everyday tasks, gaming, and productivity. The iPhone also runs on iOS, offering regular updates, strong privacy features, and seamless integration with other Apple devices.', 215000.00, 53750.00, 4, 'iphone15pro.png', '[\"iphone15pro_1.png\",\"iphone15pro_2.png\"]', 1, 1, '2026-04-24 04:31:54', '2026-04-24 04:31:54'),
(3, 'Apple', 'iPhone 14', 'iPhone 14 Pro Max', 'iphone-14-pro-max', 'iphone-14-pro-max', '256GB', 'Used - Excellent', 'Deep Purple', '92% | CC : 250', 'LL/A', '14 Days Hardware / 3 Months Software', 'The Apple iPhone is a line of smartphones designed by Apple that combines performance, security, and a user-friendly experience. It features a sleek design, high-quality display, and advanced camera system for capturing photos and videos with great detail. Powered by Apple’s optimized processors, it delivers smooth performance for everyday tasks, gaming, and productivity. The iPhone also runs on iOS, offering regular updates, strong privacy features, and seamless integration with other Apple devices.', 198000.00, 49500.00, 4, 'iphone14promax.png', '[\"iphone14_1.png\",\"iphone14_2.png\"]', 1, 1, '2026-04-24 04:31:54', '2026-04-24 04:31:54'),
(4, 'Apple', 'iPhone 13', 'iPhone 13 Pro', 'iphone-13-pro', 'iphone-13-pro', '128GB', 'Brand New Condition', 'Graphite', '100% | CC : 310', 'ZA/A', '14 Days Hardware / 3 Months Software', 'The Apple iPhone is a line of smartphones designed by Apple that combines performance, security, and a user-friendly experience. It features a sleek design, high-quality display, and advanced camera system for capturing photos and videos with great detail. Powered by Apple’s optimized processors, it delivers smooth performance for everyday tasks, gaming, and productivity. The iPhone also runs on iOS, offering regular updates, strong privacy features, and seamless integration with other Apple devices.', 165000.00, 41250.00, 4, 'iphone13pro.png', '[\"iphone13_1.png\",\"iphone13_2.png\"]', 0, 1, '2026-04-24 04:31:54', '2026-04-24 04:31:54'),
(5, 'Apple', 'iPhone 12 Pro', 'iPhone 12', 'iphone-12', 'iphone-12', '256GB', 'Brand New Condition', 'Graphite', '83%', 'LL/A', '14 Days Hardware / 3 Months Software', 'The Apple iPhone is a line of smartphones designed by Apple that combines performance, security, and a user-friendly experience. It features a sleek design, high-quality display, and advanced camera system for capturing photos and videos with great detail. Powered by Apple’s optimized processors, it delivers smooth performance for everyday tasks, gaming, and productivity. The iPhone also runs on iOS, offering regular updates, strong privacy features, and seamless integration with other Apple devices.', 125000.00, 31250.00, 4, 'iphone12.png', '[\"iphone12_1.png\",\"iphone12_2.png\"]', 1, 1, '2026-04-24 04:31:54', '2026-04-24 04:31:54'),
(6, 'Apple', 'iPhone 11', 'iPhone 11', 'iphone-11', 'iphone-11', '128GB', 'Used - Good', 'White', '80% | CC : 180', 'ZP/A', '14 Days Hardware / 3 Months Software', 'The Apple iPhone is a line of smartphones designed by Apple that combines performance, security, and a user-friendly experience. It features a sleek design, high-quality display, and advanced camera system for capturing photos and videos with great detail. Powered by Apple’s optimized processors, it delivers smooth performance for everyday tasks, gaming, and productivity. The iPhone also runs on iOS, offering regular updates, strong privacy features, and seamless integration with other Apple devices.', 95000.00, 23750.00, 4, 'iphone11.png', '[\"iphone11_1.png\",\"iphone11_2.png\"]', 1, 1, '2026-04-24 04:31:54', '2026-04-24 04:31:54'),
(7, 'Apple', 'iPhone X', 'iPhone X', 'iphone-x', 'iphone-x', '64GB', 'Used - Fair', 'Silver', '87%', 'LL/A', '14 Days Hardware / 3 Months Software', 'The Apple iPhone is a line of smartphones designed by Apple that combines performance, security, and a user-friendly experience. It features a sleek design, high-quality display, and advanced camera system for capturing photos and videos with great detail. Powered by Apple’s optimized processors, it delivers smooth performance for everyday tasks, gaming, and productivity. The iPhone also runs on iOS, offering regular updates, strong privacy features, and seamless integration with other Apple devices.', 75000.00, 18750.00, 4, 'iphonex.png', '[\"iphonex_1.png\",\"iphonex_2.png\"]', 0, 1, '2026-04-24 04:31:54', '2026-04-24 04:31:54'),
(8, 'Apple', 'iPhone SE 3RD Generation', 'iPhone SE 2022', 'iphone-se-2022', 'iphone-se-2022', '64GB', 'Good', 'Midnight ', '100% | CC : 280', 'ZA/A', '14 Days Hardware / 3 Months Software', 'The Apple iPhone is a line of smartphones designed by Apple that combines performance, security, and a user-friendly experience. It features a sleek design, high-quality display, and advanced camera system for capturing photos and videos with great detail. Powered by Apple’s optimized processors, it delivers smooth performance for everyday tasks, gaming, and productivity. The iPhone also runs on iOS, offering regular updates, strong privacy features, and seamless integration with other Apple devices.', 110000.00, 27500.00, 4, 'iphonese.png', '[\"iphonese_1.png\",\"iphonese_2.png\"]', 1, 1, '2026-04-24 04:31:54', '2026-04-24 04:31:54'),
(9, 'Apple', 'iPhone 16', 'iPhone 16 Pro Max', 'iphone-16-pro-max', 'iphone-16-pro-max', '256GB', 'Brand New Condition', 'Desert Titanium', '87%  | CC : 620', 'ZP/A', '14 Days Hardware / 3 Months Software', 'The Apple iPhone is a line of smartphones designed by Apple that combines performance, security, and a user-friendly experience. It features a sleek design, high-quality display, and advanced camera system for capturing photos and videos with great detail. Powered by Apple’s optimized processors, it delivers smooth performance for everyday tasks, gaming, and productivity. The iPhone also runs on iOS, offering regular updates, strong privacy features, and seamless integration with other Apple devices.', 245000.00, 61250.00, 4, 'iphone16promax.png', '[\"iphone16_1.png\",\"iphone16_2.png\"]', 1, 1, '2026-04-24 04:31:54', '2026-04-24 04:31:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_fe`
--
ALTER TABLE `products_fe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_fe`
--
ALTER TABLE `products_fe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
