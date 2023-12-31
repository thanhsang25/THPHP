-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 22, 2023 lúc 03:37 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_tbdt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_user`, `fullname`, `address`, `email`, `phone`, `username`, `password`, `role`) VALUES
(1, 'Đặng Thanh Sang', '', 'thanhsang25@gmail.com', 0, 'admin_sang', '123', 1),
(3, 'Bành Gia Hạnh', '', 'hanh4264@gmail.com', 0, 'hanh', '123', 0),
(4, 'Bành Gia Hạnh', '', 'hanh4264@gmail.com', 0, 'hanh5', '123', 0),
(5, 'sang', '', 'hanh4264@gmail.com', 0, 'hanh6', '123', 0),
(6, 'Bành Gia Hạnh', '', 'hanh4264@gmail.com', 0, 'hanh6', '123', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `namecategory` varchar(100) NOT NULL,
  `serial` int NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `namecategory`, `serial`) VALUES
(62, 'Ram', 1),
(63, 'CPU', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_contract`
--

DROP TABLE IF EXISTS `tbl_contract`;
CREATE TABLE IF NOT EXISTS `tbl_contract` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` int NOT NULL,
  `ngaythem` date NOT NULL,
  `id_contract` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_contract`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_contract`
--

INSERT INTO `tbl_contract` (`name`, `email`, `content`, `ngaythem`, `id_contract`) VALUES
('qwewq', 'qweq', 0, '2023-12-21', 14),
('123', '123', 132, '2023-12-19', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id_order` int NOT NULL AUTO_INCREMENT,
  `ordercode` varchar(30) NOT NULL,
  `id_user` int NOT NULL,
  `orderdate` date NOT NULL,
  `total` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_order`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `ordercode`, `id_user`, `orderdate`, `total`, `status`) VALUES
(81, 'TS-4-58', 4, '2023-12-22', 523123, 0),
(79, 'TS-4-938', 4, '2023-12-22', 123123, 0),
(78, 'TS-4-115', 4, '2023-12-21', 123549, 0),
(77, 'TS-4-121', 4, '2023-12-21', 213, 0),
(80, 'TS-4-875', 4, '2023-12-22', 500000, 1),
(73, 'KN-4-576', 4, '2023-12-18', 213, 1),
(72, 'KN-4-198', 4, '2023-12-18', 123336, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_orderdetail`
--

DROP TABLE IF EXISTS `tbl_orderdetail`;
CREATE TABLE IF NOT EXISTS `tbl_orderdetail` (
  `id_orderdetail` int NOT NULL AUTO_INCREMENT,
  `ordercode` varchar(30) NOT NULL,
  `id_product` int NOT NULL,
  `quantityproduct` int NOT NULL,
  `priceproduct` int NOT NULL,
  PRIMARY KEY (`id_orderdetail`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `tbl_orderdetail`
--

INSERT INTO `tbl_orderdetail` (`id_orderdetail`, `ordercode`, `id_product`, `quantityproduct`, `priceproduct`) VALUES
(90, 'TS-4-58', 86, 1, 123123),
(89, 'TS-4-875', 87, 1, 500000),
(87, 'TS-4-115', 86, 1, 123123),
(86, 'TS-4-115', 85, 2, 213),
(85, 'TS-4-121', 85, 1, 213),
(88, 'TS-4-938', 86, 1, 123123),
(81, 'KN-4-576', 85, 1, 213),
(80, 'KN-4-198', 86, 1, 123123),
(79, 'KN-4-198', 85, 1, 213),
(91, 'TS-4-58', 85, 1, 400000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id_product` int NOT NULL AUTO_INCREMENT,
  `nameproduct` varchar(250) NOT NULL,
  `productcode` varchar(100) NOT NULL,
  `priceproduct` varchar(50) NOT NULL,
  `quantity` int NOT NULL,
  `content` text NOT NULL,
  `summary` tinytext NOT NULL,
  `picture` varchar(50) NOT NULL,
  `status` int NOT NULL,
  `id_category` int NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `nameproduct`, `productcode`, `priceproduct`, `quantity`, `content`, `summary`, `picture`, `status`, `id_category`) VALUES
(86, 'Ram2', 'sp2', '123123', 123123, 'wqeqw', 'dasdas', '1702884607_1.jpg', 1, 63),
(85, 'Ram2', 'sp2', '400000', 1, '123', '213132', '1703180804_1.jpg', 1, 62),
(87, 'rtx 2090', 'sp3', '500000', 1, 'sadas', 'dasdas', '1703180684_3.jpg', 1, 62),
(89, 'cpu', 'sp5', '500000', 1, 'dsa', 'sad', '1703205964_4.webp', 1, 63);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
