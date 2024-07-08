-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 08, 2024 lúc 10:11 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `montero`
--
CREATE DATABASE IF NOT EXISTS `montero` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `montero`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` varchar(255) NOT NULL,
  `modelName` varchar(255) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `filePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `modelName`, `brandName`, `price`, `filePath`) VALUES
('de904962de2005458d61e5277c9deb38', 'dsafa', 'dsafasf', '20000', 'de904962de2005458d61e5277c9deb38/imgPath.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly`
--

CREATE TABLE `quanly` (
  `quanLy_id` varchar(225) NOT NULL,
  `user_id` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quanly`
--

INSERT INTO `quanly` (`quanLy_id`, `user_id`) VALUES
('QL6685a666502c8', '6685a666502c8'),
('QL6685a67f6732c', '6685a67f6732c'),
('QL66860f7dab53a', '66860f7dab53a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` varchar(225) NOT NULL,
  `fullname` varchar(225) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `hashPassword` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `roleUser` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `hashPassword`, `email`, `roleUser`) VALUES
('6685a666502c8', 'viet linh', 'admin', '$2y$10$1D3hu9MSOIDyuzXTnQYquuDecxNupT1rziJMfO6vLjH4UXZ4lzB5W', 'linh@gmail.com', 'QL'),
('6685a67f6732c', 'viet linh', 'admin', '$2y$10$yTPmYNO0Sqig232NRFL7teVNn91JILgeRW0m4kndsmk0ir4b8L.7e', 'linh@gmail.com', 'QL'),
('66860f7dab53a', 'viet linh', 'vietlinh', '$2y$10$tX8pLqZEC6/6vS.A09ZY/OukbOHD/NjgiNwAKzlC2Ed4mt11ZxTQe', 'linh@gmail.com', 'QL');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD PRIMARY KEY (`quanLy_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
