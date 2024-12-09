-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2024 at 04:09 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_bl` int NOT NULL,
  `id_nguoidung` int NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_sp` int NOT NULL,
  `tensp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_general_ci,
  `ngaybl` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`id_bl`, `id_nguoidung`, `hoten`, `id_sp`, `tensp`, `noidung`, `ngaybl`) VALUES
(1, 10, 'admin', 13, 'Rượu Champagne Comtes De Champagne Taittinger', 'Sản phẩm thật chất lượng', '02:26:50pm 07/12/2024'),
(2, 11, 'duy le', 13, 'Rượu Champagne Comtes De Champagne Taittinger', 'duy le đã xác nhâtnj sản phẩm oke', '02:30:41pm 07/12/2024');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `id_chitietdonhang` int NOT NULL,
  `id_sp` int NOT NULL,
  `id_donhang` int NOT NULL,
  `soluong` int DEFAULT NULL,
  `thanhtien` int NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`id_chitietdonhang`, `id_sp`, `id_donhang`, `soluong`, `thanhtien`, `img`, `name`, `price`) VALUES
(32, 10, 29, 1, 7800000, 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', 'Rượu Champagne Comtes De Champagne Taittinger', 7800000),
(33, 13, 29, 1, 7800000, 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', 'Rượu Champagne Comtes De Champagne Taittinger', 7800000),
(34, 10, 30, 1, 7800000, 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', 'Rượu Champagne Comtes De Champagne Taittinger', 7800000),
(35, 7, 31, 1, 1999000, 'Ruou-Sam-Banh-Canard-Duchene-Charles-VII-Rose-2-1.jpg', 'Rượu Champagne Canard Duchene Charles VII Brut Rose', 1999000),
(36, 13, 32, 1, 7800000, 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', 'Rượu Champagne Comtes De Champagne Taittinger', 7800000),
(37, 10, 33, 1, 7800000, 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', 'Rượu Champagne Comtes De Champagne Taittinger', 7800000),
(38, 4, 33, 1, 300000, '06-ruou-vang-chateau-dauzac-768x960.jpg', 'Rượu Champagne Moet & Chandon Imperial Brut', 300000),
(39, 5, 33, 20, 28600000, '03-champagne-charles-de-cazanove-brut-rose-768x961.jpg', 'Rượu Champagne Charles De Cazanove Brut Rose', 1430000),
(40, 10, 34, 1, 7800000, 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', 'Rượu Champagne Comtes De Champagne Taittinger', 7800000),
(41, 7, 35, 1, 1999000, 'Ruou-Sam-Banh-Canard-Duchene-Charles-VII-Rose-2-1.jpg', 'Rượu Champagne Canard Duchene Charles VII Brut Rose', 1999000),
(42, 10, 36, 1, 7800000, 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', 'Rượu Champagne Comtes De Champagne Taittinger', 7800000),
(43, 10, 37, 1, 7800000, 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', 'Rượu Champagne Comtes De Champagne Taittinger', 7800000),
(44, 10, 38, 1, 7800000, 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', 'Rượu Champagne Comtes De Champagne Taittinger', 7800000),
(45, 10, 39, 1, 7800000, 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', 'Rượu Champagne Comtes De Champagne Taittinger', 7800000),
(46, 10, 40, 1, 7800000, 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', 'Rượu Champagne Comtes De Champagne Taittinger', 7800000),
(47, 10, 41, 1, 7800000, 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', 'Rượu Champagne Comtes De Champagne Taittinger', 7800000),
(48, 4, 42, 1, 300000, '06-ruou-vang-chateau-dauzac-768x960.jpg', 'Rượu Champagne Moet & Chandon Imperial Brut', 300000),
(49, 8, 43, 1, 2350000, 'Ruou-Sam-Banh-Charles-Heidsieck-Rose-Reserve-2-1.jpg', 'Rượu Champagne Charles Heidsieck Rosé Réserve', 2350000),
(50, 13, 44, 2, 15600000, 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', 'Rượu Champagne Comtes De Champagne Taittinger', 7800000),
(51, 9, 45, 1, 3600000, 'Rượu-Champagne-Clos-Du-Chateau-De-Bligny-Brut-Nature-1.jpg', 'Rượu Champagne Clos Du Chateau De Bligny Brut Nature', 3600000);

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id_dm` int NOT NULL,
  `ten_danhmuc` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ngay_tao` date DEFAULT NULL,
  `ngay_sua` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`id_dm`, `ten_danhmuc`, `ngay_tao`, `ngay_sua`) VALUES
(1, 'Rượu Vang', '2024-11-01', '2024-11-25'),
(2, 'Rượu Mạnh', '2024-11-25', '2024-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id_donhang` int NOT NULL,
  `id_nguoidung` int DEFAULT NULL,
  `id_trangthai` int NOT NULL DEFAULT '0',
  `madh` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pttt` tinyint NOT NULL DEFAULT '0' COMMENT '0. Tien mat\r\n1. Qua ma QR\r\n2. Thanh toan online',
  `hoten` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ngaydathang` date DEFAULT NULL,
  `tongtien` int NOT NULL,
  `ghichu` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id_donhang`, `id_nguoidung`, `id_trangthai`, `madh`, `pttt`, `hoten`, `sdt`, `diachi`, `email`, `ngaydathang`, `tongtien`, `ghichu`) VALUES
(29, NULL, 1, 'wk7849', 0, 'ddd', '0904454526', 'hai phong', 'hquan12323@gmail.com', '2024-12-06', 7800000, NULL),
(30, 5, 1, 'wk3897', 0, 'quan', '0904454526', 'hai phong', 'quanhxph49074@gmail.com', '2024-12-06', 7800000, NULL),
(31, 5, 1, 'wk6717', 0, 'quan', '0904454526', 'hai phong', 'quanhxph49074@gmail.com', '2024-12-06', 1999000, NULL),
(32, NULL, 1, 'wk1098', 0, 'ffff', 'ffff', 'ffff', 'fff', '2024-12-06', 7800000, NULL),
(33, 5, 1, 'wk7159', 0, 'quan', '0904454526', 'hai phong', 'quanhxph49074@gmail.com', '2024-12-06', 28600000, NULL),
(34, 5, 1, 'wk2355', 0, 'quan', '0904454526', 'hai phong', 'quanhxph49074@gmail.com', '2024-12-06', 7800000, NULL),
(35, 5, 1, 'wk4140', 0, 'quan', '0904454526', 'hai phong', 'quanhxph49074@gmail.com', '2024-12-06', 1999000, NULL),
(36, 5, 1, 'wk5032', 0, 'quan', '0904454526', 'hai phong', 'quanhxph49074@gmail.com', '2024-12-06', 7800000, NULL),
(37, 5, 1, 'wk3113', 0, 'quan', '0904454526', 'hai phong', 'quanhxph49074@gmail.com', '2024-12-06', 7800000, NULL),
(38, 5, 1, 'wk7122', 0, 'quan', '0904454526', 'hai phong', 'quanhxph49074@gmail.com', '2024-12-06', 7800000, NULL),
(39, 5, 1, 'wk4112', 0, 'quan', '0904454526', 'hai phong', 'quanhxph49074@gmail.com', '2024-12-06', 7800000, NULL),
(40, 5, 1, 'wk5295', 0, 'quan', '0904454526', 'hai phong', 'quanhxph49074@gmail.com', '2024-12-06', 7800000, NULL),
(41, 5, 1, 'wk7041', 0, 'quan', '0904454526', 'hai phong', '', '2024-12-06', 7800000, NULL),
(42, 5, 1, 'wk4511', 0, 'quan', '0904454526', 'hai phong', 'quanhxph49074@gmail.com', '2024-12-06', 300000, NULL),
(43, NULL, 6, 'wk9156', 0, 'tao la tao', '0987654321', 'khong co', 'aaa@gmail.com', '2024-12-07', 2350000, NULL),
(44, 11, 6, 'wk7259', 0, 'duy le', '0987654321', 'khong co', 'duyhlph49062@gmail.com', '2024-12-07', 15600000, NULL),
(45, 11, 5, 'wk3402', 0, 'duy le', '0987654321', 'khong co', 'duyhlph49062@gmail.com', '2024-12-07', 3600000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id_nguoidung` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngaydangky` date DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id_nguoidung`, `email`, `matkhau`, `hoten`, `sdt`, `diachi`, `ngaydangky`, `role`) VALUES
(5, 'quanhxph49074@gmail.com', '1', 'quan', '0904454526', 'hai phong', '2024-11-24', 0),
(6, 'dddd@gmail.com', '1234321', 'quanhp1234', '0904454527', 'hai phong', '2024-11-24', 0),
(7, 'hquan1232@gmail.com', '1234', 'quan', '0904454526', 'hai phong', '2024-11-24', 0),
(10, 'hquan142323@gmail.com', '1', 'admin', '0904454526', 'hai phong', '2024-11-24', 1),
(11, 'duyhlph49062@gmail.com', '123456', 'duy le', '0987654321', 'khong co', '2024-11-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int NOT NULL,
  `id_dm` int NOT NULL,
  `hang` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tensp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `giatien` int DEFAULT NULL,
  `soluong` int DEFAULT NULL,
  `giamgia` int DEFAULT NULL,
  `mota` text COLLATE utf8mb4_general_ci,
  `anhsp` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngaytao` date DEFAULT NULL,
  `ngaycapnhat` date DEFAULT NULL,
  `nongdo` int DEFAULT NULL,
  `dungluong` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `id_dm`, `hang`, `tensp`, `giatien`, `soluong`, `giamgia`, `mota`, `anhsp`, `ngaytao`, `ngaycapnhat`, `nongdo`, `dungluong`) VALUES
(4, 1, 'Moet & Chandon', 'Rượu Champagne Moet & Chandon Imperial Brut', 1750000, 290, 300000, 'Rượu Champagne Moet & Chandon Imperial là chai sâm panh nổi tiếng và được ưa chuộng nhất trên thế giới của nhà Moët & Chandon đến từ Pháp. Champagne mang đến một hương vị cân bằng hoàn hảo giữa sự tươi mát của trái cây, hoa và mùi bánh mì nướng.', '06-ruou-vang-chateau-dauzac-768x960.jpg', '2024-11-25', '2024-11-25', 40, 700),
(5, 1, 'Charles de Cazanove', 'Rượu Champagne Charles De Cazanove Brut Rose', 1700000, 100, 1430000, 'Rượu Champagne Charles De Cazanove Brut Rose là chai vang sủi hồng được sản xuất bởi nhà Charles de Cazanove tại nước Pháp mộng mơ. Với sự kết hợp của hai giống nho cơ bản Chardonnay và Pinot Noir, rượu mang đến hương thơm cân bằng, sảng khoái và mạnh mẽ của các loại trái cây chín đỏ mọng thơm ngon.', '03-champagne-charles-de-cazanove-brut-rose-768x961.jpg', '2024-11-25', NULL, 30, 700),
(6, 1, 'Rượu Champagne Moet & Chandon', 'Rượu Champagne Moet & Chandon Rose Imperial', 1800000, 200, 1550000, 'Rượu Champagne Moet & Chandon Rose Imperial là chai sâm panh hồng nổi tiếng được sản xuất bởi thương hiệu Moët & Chandon của Pháp. Rượu được trưởng thành từ ba giống nho Pinot Meunier, Pinot Noir và Chardonnay, mang đến màu sắc tươi sáng, bọt khí mịn màng, hương thơm quyến rũ và hương vị tinh tế, thường được dùng trong các dịp lễ kỷ niệm, tiệc tùng hoặc làm quà tặng sang trọng.', 'Ruou-Champagne-Moet-Chandon-Rose-1-1.jpg', '2024-11-25', NULL, 50, 600),
(7, 1, 'Champagne Canard Duchene', 'Rượu Champagne Canard Duchene Charles VII Brut Rose', 2250000, 250, 1999000, 'Rượu Champagne Canard Duchene Charles VII Brut Rose là dòng vang sủi hồng cao cấp của nhà Champagne Canard Duchene đến từ Phápđược lên men từ ba giống nho Chardonnay, Pinot Noir và Pinot Meunier tại vùng Champagne, mang đến hương thơm nhiều tầng nguyên liệu tạo cảm giác mượt mà, uyển chuyển.', 'Ruou-Sam-Banh-Canard-Duchene-Charles-VII-Rose-2-1.jpg', '2024-11-25', NULL, 50, 600),
(8, 1, 'Charles Heidsieck', 'Rượu Champagne Charles Heidsieck Rosé Réserve', 325000, 121, 2350000, 'Rượu Champagne Charles Heidsieck Rosé Réserve là một loại rượu sâm panh hồng cao cấp đến từ vùng Champagne, Pháp. Được sản xuất bởi nhà Charles Heidsieck, chai champagne này có sự kết hợp tinh tế giữa ba giống nho Pinot Noir, Pinot Meunier và Chardonnay, mang đến hương vị phức hợp và quyến rũ.', 'Ruou-Sam-Banh-Charles-Heidsieck-Rose-Reserve-2-1.jpg', '2024-11-25', NULL, 30, 700),
(9, 2, 'Chateau de Bligny', 'Rượu Champagne Clos Du Chateau De Bligny Brut Nature', 4200000, 202, 3600000, 'Champagne Clos Du Chateau De Bligny Brut Nature là loại rượu champagne có hương vị tươi mới, sảng khoái, được làm từ 6 giống nho khác nhau của vùng Champagne, Pháp. Rượu có độ ngọt dịu nhẹ hòa quyện hoàn hảo với độ axit thanh mát, tạo nên một cấu trúc hài hòa, tinh tế.', 'Rượu-Champagne-Clos-Du-Chateau-De-Bligny-Brut-Nature-1.jpg', '2024-11-25', NULL, 40, 800),
(10, 2, 'Rượu Champagne Taittinger', 'Rượu Champagne Comtes De Champagne Taittinger', 10900000, 1010, 7800000, 'Rượu Champagne Comtes De Champagne Taittinger là cái tên rượu Champane, rượu vang trắng không thể thiếu khi nhắc đến những sản phẩm của nhà Taittinger đến từ Pháp. Với sự lên men của nho Chardonnay, rượu sở hữu hương thơm nồng nàn, say đắm gợi nhớ đến hương vị ngọt ngào và béo ngậy của các loại trái cây và rau quả khác nhau.', 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', '2024-11-25', NULL, 30, 700),
(13, 2, 'Rượu Champagne Taittinger', 'Rượu Champagne Comtes De Champagne Taittinger', 10900000, 1010, 7800000, 'Rượu Champagne Comtes De Champagne Taittinger là cái tên rượu Champane, rượu vang trắng không thể thiếu khi nhắc đến những sản phẩm của nhà Taittinger đến từ Pháp. Với sự lên men của nho Chardonnay, rượu sở hữu hương thơm nồng nàn, say đắm gợi nhớ đến hương vị ngọt ngào và béo ngậy của các loại trái cây và rau quả khác nhau.', 'Rượu-Champagne-Taittinger-Comtes-De-Champagne-De-Taittinger.jpg', '2024-11-25', NULL, 30, 700);

-- --------------------------------------------------------

--
-- Table structure for table `trang_thai_don_hang`
--

CREATE TABLE `trang_thai_don_hang` (
  `id_trangthai` int NOT NULL,
  `list_trangthai` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trang_thai_don_hang`
--

INSERT INTO `trang_thai_don_hang` (`id_trangthai`, `list_trangthai`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Đã xác nhận'),
(3, 'Chờ lấy hàng'),
(4, 'Đang giao hàng'),
(5, 'Giao hàng thành công '),
(6, 'Đã Huỷ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `id_nguoidung` (`id_nguoidung`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`id_chitietdonhang`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_donhang` (`id_donhang`);

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `id_nguoidung` (`id_nguoidung`),
  ADD KEY `id_trangthai` (`id_trangthai`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id_nguoidung`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_dm` (`id_dm`);

--
-- Indexes for table `trang_thai_don_hang`
--
ALTER TABLE `trang_thai_don_hang`
  ADD PRIMARY KEY (`id_trangthai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_bl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `id_chitietdonhang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id_dm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_donhang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id_nguoidung` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `trang_thai_don_hang`
--
ALTER TABLE `trang_thai_don_hang`
  MODIFY `id_trangthai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`id_nguoidung`) REFERENCES `nguoi_dung` (`id_nguoidung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_2` FOREIGN KEY (`id_donhang`) REFERENCES `don_hang` (`id_donhang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_ibfk_1` FOREIGN KEY (`id_nguoidung`) REFERENCES `nguoi_dung` (`id_nguoidung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `don_hang_ibfk_2` FOREIGN KEY (`id_trangthai`) REFERENCES `trang_thai_don_hang` (`id_trangthai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danh_muc` (`id_dm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
