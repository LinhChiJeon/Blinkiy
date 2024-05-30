-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 11:06 AM
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
-- Database: `blinkiy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `stt` int(11) NOT NULL,
  `TenKhachHang` varchar(40) NOT NULL,
  `SDT` varchar(40) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `TieuDe` text NOT NULL,
  `CauHoi` text NOT NULL,
  `PhanHoi` tinyint(1) NOT NULL,
  `PhanHoi_TieuDe` text NOT NULL,
  `PhanHoi_NoiDung` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`stt`, `TenKhachHang`, `SDT`, `Email`, `TieuDe`, `CauHoi`, `PhanHoi`, `PhanHoi_TieuDe`, `PhanHoi_NoiDung`, `created_at`, `updated_at`) VALUES
(2, 'phạm anh nguyên', '0325671864', 'Blinkiy.is334@gmail.com ', 'hỏi', 'cứu t môn web', 1, '', '', NULL, '2024-05-26 14:32:06'),
(3, '22520980', '0325671864', 'Blinkiy.is334@gmail.com ', 'ádasd', 'ádasdsa', 0, '', '', NULL, NULL),
(4, '22520980', '0325671864', 'phamanhnguyen2708@gmail.com', 'ádasd', 'ádasdsa', 1, '29/5/2024', 'ngủ đi nguyên', NULL, '2024-05-28 12:04:05'),
(5, '22520980', '0325671864', 'abc@gmail.com', 'ádasd', 'đâsd', 0, '', '', NULL, NULL),
(6, '22520980', '0325671864', '22520980@gmail.com', 'sa', 'aaaa', 0, '', '', NULL, NULL),
(7, '22520980', '0325671864', 'phamanhnguyen2708@gmail.com', 'a', 'a', 0, '', '', NULL, NULL),
(8, 'phạm anh nguyên', '0325671864', 'phamanhnguyen2708@gmail.com', 'a', 'a', 0, '', '', NULL, NULL),
(9, '22520980', '0325671864', 'phamanhnguyen2708@gmail.com', 'a', 'a', 0, '', '', NULL, NULL),
(10, 'phạm anh nguyên', '0325671864', 'phamanhnguyen2708@gmail.com', 'aa', 'aa', 0, '', '', NULL, NULL),
(11, '22520980', '0325671864', 'phamanhnguyen2708@gmail.com', 'b', 'b', 0, '', '', NULL, NULL),
(12, '22520980', '0325671864', 'phamanhnguyen2708@gmail.com', 'b', 'b', 0, '', '', NULL, NULL),
(13, '22520980', '0325671864', 'phamanhnguyen2708@gmail.com', 'b', 'b', 0, '', '', NULL, NULL),
(14, '22520980', '0325671864', 'phamanhnguyen2708@gmail.com', 'b', 'b', 0, '', '', NULL, NULL),
(15, '22520980', '0325671864', 'phamanhnguyen2708@gmail.com', 'b', 'b', 0, '', '', NULL, NULL),
(16, '22520980', '0325671864', 'phamanhnguyen2708@gmail.com', 'abc', 'abc', 0, '', '', NULL, NULL),
(17, 'phạm anh nguyên', '0325671864', 'phamanhnguyen2708@gmail.com', 'A', 'S', 0, '', '', NULL, NULL),
(18, 'phạm anh nguyên', '0325671864', 'phamanhnguyen2708@gmail.com', 'A', 'S', 0, '', '', NULL, NULL),
(19, 'a', '0325671864', 'phamanhnguyen2708@gmail.com', 'a', 'a', 0, '', '', NULL, NULL),
(20, 'a', '0325671864', 'phamanhnguyen2708@gmail.com', 'a', 'a', 0, '', '', NULL, NULL),
(21, 'a', '0325671864', 'phamanhnguyen2708@gmail.com', 'a', 'a', 0, '', '', NULL, NULL),
(22, 'pan', '0123456789', 'abc@gmail.com', 'abc', 'bcd', 0, '', '', NULL, NULL),
(23, 'phạm anh nguyên', '0123456789', 'phamanhnguyen2708@gmail.com', 'tesst mail', 'a', 0, '', '', '2024-05-26 10:02:43', '2024-05-26 10:02:43'),
(24, 'phạm anh nguyên2', '0325671864', 'phamanhnguyen2708@gmail.com', 'tesst mail', 'abc', 0, '', '', '2024-05-26 10:02:56', '2024-05-26 10:02:56'),
(25, 'phạm anh nguyên2', '', 'phamanhnguyen2708@gmail.com', 'tesst mail', 'a', 0, '', '', '2024-05-26 10:14:21', '2024-05-26 10:14:21'),
(26, 'phạm anh nguyên2', '0325671864', 'phamanhnguyen2708@gmail.com', 'tesst mail', 'a', 0, '', '', '2024-05-26 10:16:12', '2024-05-26 10:16:12'),
(27, 'Trần Linh Chi', '0123456789', 'Tlchi2808@gmail.com', 'xin chao', 'Xin chao Blinkiy', 1, 'email_subject', 'email_body', '2024-05-27 02:22:33', '2024-05-27 02:50:21'),
(28, 'phạm anh nguyên', '0325671864', 'Tlchi2808@gmail.com', 'aaaa', 'aaaa', 1, '29/5/2024', 'hi', '2024-05-27 02:23:46', '2024-05-28 12:46:28'),
(29, 'Trần Linh Chi', '0325671864', 'Tlchi2808@gmail.com', 'xin chao', 'xin chao Blinkiy', 0, '', '', '2024-05-27 02:24:48', '2024-05-27 02:24:48'),
(30, 'Zaneee', '0325671864', 'nguyenlove417@gmail.com', '5h chiều', '5h chiều', 1, 'hmm', 'hmmm', '2024-05-27 02:59:52', '2024-05-27 03:05:05'),
(31, '29052024', '0325671864', 'phamanhnguyen2708@gmail.com', 'a', 'abc', 1, '29/5/2024', 'ngủ đi nguyên 2', '2024-05-28 12:02:29', '2024-05-28 12:19:59'),
(32, '29052024-822', '0325671864', 'phamanhnguyen2708@gmail.com', 'a', '8/22 29/5/2024', 1, 'rep 822', 'rep 822', '2024-05-29 06:23:06', '2024-05-29 06:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `PhanHoi` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cthd`
--

CREATE TABLE `cthd` (
  `MaHD` varchar(40) NOT NULL,
  `MaSP` varchar(40) NOT NULL,
  `MaKT` varchar(40) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Tong` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` varchar(40) NOT NULL,
  `NgHD` datetime NOT NULL,
  `TriGia` double NOT NULL,
  `MaKH` varchar(40) NOT NULL,
  `Note` varchar(1000) NOT NULL,
  `File` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon_vanglai`
--

CREATE TABLE `hoadon_vanglai` (
  `MaHDVL` varchar(40) NOT NULL,
  `TenKH` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `Note` varchar(1000) NOT NULL,
  `File` blob NOT NULL,
  `TriGia` double NOT NULL,
  `NgDH` datetime NOT NULL,
  `PTTT` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `hoadon_vanglai`
--

INSERT INTO `hoadon_vanglai` (`MaHDVL`, `TenKH`, `Email`, `SDT`, `DiaChi`, `Note`, `File`, `TriGia`, `NgDH`, `PTTT`) VALUES
('HDVLMWCNWE', 'Nguyễn Ngọc Huy Hoàng', 'konichiwa462@gmail.com', '0907636406', '157/7 Lê Văn Việt, phường Hiệp Phú, Huyện Ngân Sơn, Bắc Kạn', 'AAAAAA', '', 0, '0000-00-00 00:00:00', 1),
('HDVLUjKJs9', 'Nguyễn Ngọc Huy Hoàng', 'konichiwa462@gmail.com', '0907636406', '157/7 Lê Văn Việt, phường Hiệp Phú, Huyện Ngân Sơn, Bắc Kạn', 'AAAAAA', '', 0, '2024-05-29 16:39:13', 1),
('HDVLW6pqig', 'Nguyễn Ngọc Huy Hoàng', 'konichiwa462@gmail.com', '0907636406', '157/7 Lê Văn Việt, phường Hiệp Phú, Thành phố Thủ Đức, TP Hồ Chí Minh', 'AAAAAAAAAAAA', 0x75706c6f6164732f6c65645f7363616e6e696e672e6a7067, 0, '2024-05-29 17:49:31', 0),
('HDVLhnlfu0', 'Nguyễn Ngọc Huy Hoàng', 'konichiwa462@gmail.com', '0907636406', '157/7 Lê Văn Việt, phường Hiệp Phú, Thành phố Thủ Đức, TP Hồ Chí Minh', 'AAAAAAAAAAAA', 0x75706c6f6164732f6c65645f7363616e6e696e672e6a7067, 0, '2024-05-29 17:53:04', 0),
('HDVLcPwuSG', 'Nguyễn Ngọc Huy Hoàng', 'konichiwa462@gmail.com', '0907636406', '157/7 Lê Văn Việt, phường Hiệp Phú, Thành phố Thủ Đức, TP Hồ Chí Minh', 'AAAAAAAAAAAA', 0x75706c6f6164732f6c65645f7363616e6e696e672e6a7067, 0, '2024-05-29 17:53:09', 3),
('HDVL7O07Gb', 'Nguyễn Ngọc Huy Hoàng', 'konichiwa462@gmail.com', '0907636406', '157/7 Lê Văn Việt, phường Hiệp Phú, Thành phố Thủ Đức, TP Hồ Chí Minh', '', 0x75706c6f6164732f74686553562e6a7067, 0, '2024-05-29 20:09:37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `huyen`
--

CREATE TABLE `huyen` (
  `MaHuyen` varchar(40) NOT NULL,
  `TenHuyen` varchar(40) NOT NULL,
  `MaTinh` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `huyen`
--

INSERT INTO `huyen` (`MaHuyen`, `TenHuyen`, `MaTinh`) VALUES
('Q01', 'Thành phố Long Xuyên', 'T01'),
('Q02', 'Thành phố Châu Đốc', 'T01'),
('Q03', 'Thị xã Tân Châu', 'T01'),
('Q04', 'Thị xã Tịnh Biên', 'T01'),
('Q05', 'Huyện An Phú', 'T01'),
('Q06', 'Huyện Châu Phú', 'T01'),
('Q07', 'Huyện Châu Thành', 'T01'),
('Q08', 'Huyện Chợ Mới', 'T01'),
('Q09', 'Huyện Phú Tân', 'T01'),
('Q10', 'Huyện Thoại Sơn', 'T01'),
('Q100', 'Huyện Phú Quý', 'T11'),
('Q101', 'Huyện Tánh Linh', 'T11'),
('Q102', 'Huyện Tuy Phong', 'T11'),
('Q103', 'Thành phố Cà Mau', 'T12'),
('Q104', 'Huyện Cái Nước', 'T12'),
('Q105', 'Huyện Đầm Dơi', 'T12'),
('Q106', 'Huyện Năm Căn', 'T12'),
('Q107', 'Huyện Ngọc Hiển', 'T12'),
('Q108', 'Huyện Phú Tân', 'T12'),
('Q109', 'Huyện Thới Bình', 'T12'),
('Q11', 'Huyện Tri Tôn', 'T01'),
('Q110', 'Huyện Trần Văn Thời', 'T12'),
('Q111', 'Huyện U Minh', 'T12'),
('Q112', 'Thành phố Cao Bằng', 'T13'),
('Q113', 'Huyện Bảo Lạc', 'T13'),
('Q114', 'Huyện Bảo Lâm', 'T13'),
('Q115', 'Huyện Hạ Lang', 'T13'),
('Q116', 'Huyện Hà Quảng', 'T13'),
('Q117', 'Huyện Hòa An', 'T13'),
('Q118', 'Huyện Nguyên Bình', 'T13'),
('Q119', 'Huyện Quảng Hòa', 'T13'),
('Q12', 'Thành phố Bà Rịa', 'T02'),
('Q120', 'Huyện Thạch An', 'T13'),
('Q121', 'Huyện Trùng Khánh', 'T13'),
('Q122', 'Quận Bình Thủy', 'T14'),
('Q123', 'Quận Cái Răng', 'T14'),
('Q124', 'Quận Ninh Kiều', 'T14'),
('Q125', 'Quận Ô Môn', 'T14'),
('Q126', 'Quận Thốt Nốt', 'T14'),
('Q127', 'Huyện Cờ Đỏ', 'T14'),
('Q128', 'Huyện Phong Điền', 'T14'),
('Q129', 'Huyện Thới Lai', 'T14'),
('Q13', 'Thành phố Vũng Tàu', 'T02'),
('Q130', 'Huyện Vĩnh Thạnh', 'T14'),
('Q131', 'Quận Cẩm Lệ', 'T15'),
('Q132', 'Quận Hải Châu', 'T15'),
('Q133', 'Quận Liên Chiểu', 'T15'),
('Q134', 'Quận Ngũ Hành Sơn', 'T15'),
('Q135', 'Quận Sơn Trà', 'T15'),
('Q136', 'Quận Thanh Khê', 'T15'),
('Q137', 'Huyện Hòa Vang', 'T15'),
('Q138', 'Huyện Hoàng Sa', 'T15'),
('Q139', 'Thành phố Buôn Ma Thuột', 'T16'),
('Q14', 'Thị xã Phú Mỹ', 'T02'),
('Q140', 'Thị xã Buôn Hồ', 'T16'),
('Q141', 'Huyện Buôn Đôn', 'T16'),
('Q142', 'Huyện Cư Kuin', 'T16'),
('Q143', 'Huyện Cư M\'gar', 'T16'),
('Q144', 'Huyện Ea H\'leo', 'T16'),
('Q145', 'Huyện Ea Kar', 'T16'),
('Q146', 'Huyện Ea Súp', 'T16'),
('Q147', 'Huyện Krông Ana', 'T16'),
('Q148', 'Huyện Krông Bông', 'T16'),
('Q149', 'Huyện Krông Búk', 'T16'),
('Q15', 'Huyện Châu Đức', 'T02'),
('Q150', 'Huyện Krông Năng', 'T16'),
('Q151', 'Huyện Krông Pắc', 'T16'),
('Q152', 'Huyện Lắk', 'T16'),
('Q153', 'Huyện M\'Drắk', 'T16'),
('Q154', 'Thành phố Gia Nghĩa', 'T17'),
('Q155', 'Huyện Cư Jút', 'T17'),
('Q156', 'Huyện Đắk Glong', 'T17'),
('Q157', 'Huyện Đắk Mil', 'T17'),
('Q158', 'Huyện Đắk R\'lấp', 'T17'),
('Q159', 'Huyện Đắk Song', 'T17'),
('Q16', 'Huyện Côn Đảo', 'T02'),
('Q160', 'Huyện Krông Nô', 'T17'),
('Q161', 'Huyện Tuy Đức', 'T17'),
('Q162', 'Thành phố Điện Biên Phủ', 'T18'),
('Q163', 'Thị xã Mường Lay', 'T18'),
('Q164', 'Huyện Điện Biên', 'T18'),
('Q165', 'Huyện Điện Biên Đông', 'T18'),
('Q166', 'Huyện Mường Ảng', 'T18'),
('Q167', 'Huyện Mường Chà', 'T18'),
('Q168', 'Huyện Mường Nhé', 'T18'),
('Q169', 'Huyện Nậm Pồ', 'T18'),
('Q17', 'Huyện Đất Đỏ', 'T02'),
('Q170', 'Huyện Tủa Chùa', 'T18'),
('Q171', 'Huyện Tuần Giáo', 'T18'),
('Q172', 'Thành phố Biên Hòa', 'T19'),
('Q173', 'Thành phố Long Khánh', 'T19'),
('Q174', 'Huyện Cẩm Mỹ', 'T19'),
('Q175', 'Huyện Định Quán', 'T19'),
('Q176', 'Huyện Long Thành', 'T19'),
('Q177', 'Huyện Nhơn Trạch', 'T19'),
('Q178', 'Huyện Tân Phú', 'T19'),
('Q179', 'Huyện Thống Nhất', 'T19'),
('Q18', 'Huyện Long Điền', 'T02'),
('Q180', 'Huyện Trảng Bom', 'T19'),
('Q181', 'Huyện Vĩnh Cửu', 'T19'),
('Q182', 'Huyện Xuân Lộc', 'T19'),
('Q183', 'Thành phố Cao Lãnh', 'T20'),
('Q184', 'Thành phố Hồng Ngự', 'T20'),
('Q185', 'Thành phố Sa Đéc', 'T20'),
('Q186', 'Huyện Cao Lãnh', 'T20'),
('Q187', 'Huyện Châu Thành', 'T20'),
('Q188', 'Huyện Hồng Ngự', 'T20'),
('Q189', 'Huyện Lai Vung', 'T20'),
('Q19', 'Huyện Xuyên Mộc', 'T02'),
('Q190', 'Huyện Lấp Vò', 'T20'),
('Q191', 'Huyện Tam Nông', 'T20'),
('Q192', 'Huyện Tân Hồng', 'T20'),
('Q193', 'Huyện Thanh Bình', 'T20'),
('Q194', 'Huyện Tháp Mười', 'T20'),
('Q195', 'Thành phố Pleiku', 'T21'),
('Q196', 'Thị xã An Khê', 'T21'),
('Q197', 'Thị xã Ayun Pa', 'T21'),
('Q198', 'Huyện Chư Păh', 'T21'),
('Q199', 'Huyện Chư Prông', 'T21'),
('Q20', 'Thành phố Bạc Liêu', 'T03'),
('Q200', 'Huyện Chư Pưh', 'T21'),
('Q201', 'Huyện Chư Sê', 'T21'),
('Q202', 'Huyện Đak Đoa', 'T21'),
('Q203', 'Huyện Đak Pơ', 'T21'),
('Q204', 'Huyện Đức Cơ', 'T21'),
('Q205', 'Huyện Ia Grai', 'T21'),
('Q206', 'Huyện Ia Pa', 'T21'),
('Q207', 'Huyện Kbang', 'T21'),
('Q208', 'Huyện Kông Chro', 'T21'),
('Q209', 'Huyện Krông Pa', 'T21'),
('Q21', 'Thị xã Giá Rai', 'T03'),
('Q210', 'Huyện Mang Yang', 'T21'),
('Q211', 'Huyện Phú Thiện', 'T21'),
('Q212', 'Thành phố Hà Giang', 'T22'),
('Q213', 'Huyện Bắc Mê', 'T22'),
('Q214', 'Huyện Bắc Quang', 'T22'),
('Q215', 'Huyện Đồng Văn', 'T22'),
('Q216', 'Huyện Hoàng Su Phì', 'T22'),
('Q217', 'Huyện Mèo Vạc', 'T22'),
('Q218', 'Huyện Quản Bạ', 'T22'),
('Q219', 'Huyện Quang Bình', 'T22'),
('Q22', 'Huyện Đông Hải', 'T03'),
('Q220', 'Huyện Vị Xuyên', 'T22'),
('Q221', 'Huyện Xín Mần', 'T22'),
('Q222', 'Huyện Yên Minh', 'T22'),
('Q223', 'Thành phố Phủ Lý', 'T23'),
('Q224', 'Thị xã Duy Tiên', 'T23'),
('Q225', 'Huyện Bình Lục', 'T23'),
('Q226', 'Huyện Kim Bảng', 'T23'),
('Q227', 'Huyện Lý Nhân', 'T23'),
('Q228', 'Huyện Thanh Liêm', 'T23'),
('Q229', 'Quận Ba Đình', 'T24'),
('Q23', 'Huyện Hòa Bình', 'T03'),
('Q230', 'Quận Bắc Từ Liêm', 'T24'),
('Q231', 'Quận Cầu Giấy', 'T24'),
('Q232', 'Quận Đống Đa', 'T24'),
('Q233', 'Quận Hà Đông', 'T24'),
('Q234', 'Quận Hai Bà Trưng', 'T24'),
('Q235', 'Quận Hoàn Kiếm', 'T24'),
('Q236', 'Quận Hoàng Mai', 'T24'),
('Q237', 'Quận Long Biên', 'T24'),
('Q238', 'Quận Nam Từ Liêm', 'T24'),
('Q239', 'Quận Tây Hồ', 'T24'),
('Q24', 'Huyện Hồng Dân', 'T03'),
('Q240', 'Quận Thanh Xuân', 'T24'),
('Q241', 'Thị xã Sơn Tây', 'T24'),
('Q242', 'Huyện Ba Vì', 'T24'),
('Q243', 'Huyện Chương Mỹ', 'T24'),
('Q244', 'Huyện Đan Phượng', 'T24'),
('Q245', 'Huyện Đông Anh', 'T24'),
('Q246', 'Huyện Gia Lâm', 'T24'),
('Q247', 'Huyện Hoài Đức', 'T24'),
('Q248', 'Huyện Mê Linh', 'T24'),
('Q249', 'Huyện Mỹ Đức', 'T24'),
('Q25', 'Huyện Phước Long', 'T03'),
('Q250', 'Huyện Phú Xuyên', 'T24'),
('Q251', 'Huyện Phúc Thọ', 'T24'),
('Q252', 'Huyện Quốc Oai', 'T24'),
('Q253', 'Huyện Sóc Sơn', 'T24'),
('Q254', 'Huyện Thạch Thất', 'T24'),
('Q255', 'Huyện Thanh Oai', 'T24'),
('Q256', 'Huyện Thanh Trì', 'T24'),
('Q257', 'Huyện Thường Tín', 'T24'),
('Q258', 'Huyện Ứng Hòa', 'T24'),
('Q259', 'Thành phố Hà Tĩnh', 'T25'),
('Q26', 'Huyện Vĩnh Lợi', 'T03'),
('Q260', 'Thị xã Hồng Lĩnh', 'T25'),
('Q261', 'Thị xã Kỳ Anh', 'T25'),
('Q262', 'Huyện Can Lộc', 'T25'),
('Q263', 'Huyện Cẩm Xuyên', 'T25'),
('Q264', 'Huyện Đức Thọ', 'T25'),
('Q265', 'Huyện Hương Khê', 'T25'),
('Q266', 'Huyện Hương Sơn', 'T25'),
('Q267', 'Huyện Kỳ Anh', 'T25'),
('Q268', 'Huyện Lộc Hà', 'T25'),
('Q269', 'Huyện Nghi Xuân', 'T25'),
('Q27', 'Thành phố Bắc Giang', 'T04'),
('Q270', 'Huyện Thạch Hà', 'T25'),
('Q271', 'Huyện Vũ Quang', 'T25'),
('Q272', 'Thành phố Hải Dương', 'T26'),
('Q273', 'Thành phố Chí Linh', 'T26'),
('Q274', 'Thị xã Kinh Môn', 'T26'),
('Q275', 'Huyện Bình Giang', 'T26'),
('Q276', 'Huyện Cẩm Giàng', 'T26'),
('Q277', 'Huyện Gia Lộc', 'T26'),
('Q278', 'Huyện Kim Thành', 'T26'),
('Q279', 'Huyện Nam Sách', 'T26'),
('Q28', 'Thị xã Việt Yên', 'T04'),
('Q280', 'Huyện Ninh Giang', 'T26'),
('Q281', 'Huyện Thanh Hà', 'T26'),
('Q282', 'Huyện Thanh Miện', 'T26'),
('Q283', 'Huyện Tứ Kỳ', 'T26'),
('Q284', 'Quận Hồng Bàng', 'T27'),
('Q285', 'Quận Lê Chân', 'T27'),
('Q286', 'Quận Ngô Quyền', 'T27'),
('Q287', 'Quận Hải An', 'T27'),
('Q288', 'Quận Kiến An', 'T27'),
('Q289', 'Quận Dương Kinh', 'T27'),
('Q29', 'Huyện Hiệp Hòa', 'T04'),
('Q290', 'Quận Đồ Sơn', 'T27'),
('Q291', 'Huyện Thủy Nguyên', 'T27'),
('Q292', 'Huyện An Dương', 'T27'),
('Q293', 'Huyện Kiến Thụy', 'T27'),
('Q294', 'Huyện An Lão', 'T27'),
('Q295', 'Huyện Tiên Lãng', 'T27'),
('Q296', 'Huyện Vĩnh Bảo', 'T27'),
('Q297', 'Huyện Cát Hải', 'T27'),
('Q298', 'Huyện Bạch Long Vĩ', 'T27'),
('Q299', 'Thành phố Vị Thanh', 'T28'),
('Q30', 'Huyện Lạng Giang', 'T04'),
('Q300', 'Thành phố Ngã Bảy', 'T28'),
('Q301', 'Thị xã Long Mỹ', 'T28'),
('Q302', 'Huyện Châu Thành', 'T28'),
('Q303', 'Huyện Châu Thành A', 'T28'),
('Q304', 'Huyện Long Mỹ', 'T28'),
('Q305', 'Huyện Phụng Hiệp', 'T28'),
('Q306', 'Huyện Vị Thuỷ', 'T28'),
('Q307', 'Thành phố Hòa Bình', 'T29'),
('Q308', 'Huyện Cao Phong', 'T29'),
('Q309', 'Huyện Đà Bắc', 'T29'),
('Q31', 'Huyện Lục Nam', 'T04'),
('Q310', 'Huyện Kim Bôi', 'T29'),
('Q311', 'Huyện Lạc Sơn', 'T29'),
('Q312', 'Huyện Lạc Thủy', 'T29'),
('Q313', 'Huyện Lương Sơn', 'T29'),
('Q314', 'Huyện Mai Châu', 'T29'),
('Q315', 'Huyện Tân Lạc', 'T29'),
('Q316', 'Huyện Yên Thủy', 'T29'),
('Q317', 'Thành phố Hưng Yên', 'T30'),
('Q318', 'Thị xã Mỹ Hào', 'T30'),
('Q319', 'Huyện Ân Thi', 'T30'),
('Q32', 'Huyện Lục Ngạn', 'T04'),
('Q320', 'Huyện Khoái Châu', 'T30'),
('Q321', 'Huyện Kim Động', 'T30'),
('Q322', 'Huyện Phù Cừ', 'T30'),
('Q323', 'Huyện Tiên Lữ', 'T30'),
('Q324', 'Huyện Văn Giang', 'T30'),
('Q325', 'Huyện Văn Lâm', 'T30'),
('Q326', 'Huyện Yên Mỹ', 'T30'),
('Q327', 'Thành phố Nha Trang', 'T31'),
('Q328', 'Thị xã Cam Ranh', 'T31'),
('Q329', 'Huyện Ninh Hòa', 'T31'),
('Q33', 'Huyện Sơn Động', 'T04'),
('Q330', 'Huyện Cam Lâm', 'T31'),
('Q331', 'Huyện Diên Khánh', 'T31'),
('Q332', 'Huyện Khánh Sơn', 'T31'),
('Q333', 'Huyện Khánh Vĩnh', 'T31'),
('Q334', 'Huyện Trường Sa', 'T31'),
('Q335', 'Huyện Vạn Ninh', 'T31'),
('Q336', 'Thành phố Rạch Giá', 'T32'),
('Q337', 'Thành phố Hà Tiên', 'T32'),
('Q338', 'Thành phố Phú Quốc', 'T32'),
('Q339', 'Huyện An Biên', 'T32'),
('Q34', 'Huyện Tân Yên', 'T04'),
('Q340', 'Huyện An Minh', 'T32'),
('Q341', 'Huyện Châu Thành', 'T32'),
('Q342', 'Huyện Giang Thành', 'T32'),
('Q343', 'Huyện Giồng Riềng', 'T32'),
('Q344', 'Huyện Gò Quao', 'T32'),
('Q345', 'Huyện Hòn Đất', 'T32'),
('Q346', 'Huyện Kiên Hải', 'T32'),
('Q347', 'Huyện Kiên Lương', 'T32'),
('Q348', 'Huyện Tân Hiệp', 'T32'),
('Q349', 'Huyện U Minh Thượng', 'T32'),
('Q35', 'Huyện Yên Dũng', 'T04'),
('Q350', 'Huyện Vĩnh Thuận', 'T32'),
('Q351', 'Thành phố Kon Tum', 'T33'),
('Q352', 'Huyện Đăk Glei', 'T33'),
('Q353', 'Huyện Đăk Hà', 'T33'),
('Q354', 'Huyện Đăk Tô', 'T33'),
('Q355', 'Huyện Ia H\'Drai', 'T33'),
('Q356', 'Huyện Kon Plông', 'T33'),
('Q357', 'Huyện Kon Rẫy', 'T33'),
('Q358', 'Huyện Ngọc Hồi', 'T33'),
('Q359', 'Huyện Sa Thầy', 'T33'),
('Q36', 'Huyện Yên Thế', 'T04'),
('Q360', 'Huyện Tu Mơ Rông', 'T33'),
('Q361', 'Thành phố Lai Châu', 'T34'),
('Q362', 'Huyện Mường Tè', 'T34'),
('Q363', 'Huyện Sìn Hồ', 'T34'),
('Q364', 'Huyện Phong Thổ', 'T34'),
('Q365', 'Huyện Tam Đường', 'T34'),
('Q366', 'Huyện Tân Uyên', 'T34'),
('Q367', 'Huyện Nậm Nhùn', 'T34'),
('Q368', 'Huyện Than Uyên', 'T34'),
('Q369', 'Thành phố Lạng Sơn', 'T35'),
('Q37', 'Thành phố Bắc Kạn', 'T05'),
('Q370', 'Huyện Bắc Sơn', 'T35'),
('Q371', 'Huyện Bình Gia', 'T35'),
('Q372', 'Huyện Cao Lộc', 'T35'),
('Q373', 'Huyện Chi Lăng', 'T35'),
('Q374', 'Huyện Đình Lập', 'T35'),
('Q375', 'Huyện Hữu Lũng', 'T35'),
('Q376', 'Huyện Lộc Bình', 'T35'),
('Q377', 'Huyện Tràng Định', 'T35'),
('Q378', 'Huyện Văn Lãng', 'T35'),
('Q379', 'Huyện Văn Quan', 'T35'),
('Q38', 'Huyện Ba Bể', 'T05'),
('Q380', 'Thành phố Lào Cai', 'T36'),
('Q381', 'Thị xã Sa Pa', 'T36'),
('Q382', 'Huyện Bát Xát', 'T36'),
('Q383', 'Huyện Bảo Thắng', 'T36'),
('Q384', 'Huyện Bảo Yên', 'T36'),
('Q385', 'Huyện Bắc Hà', 'T36'),
('Q386', 'Huyện Mường Khương', 'T36'),
('Q387', 'Huyện Si Ma Cai', 'T36'),
('Q388', 'Huyện Văn Bàn', 'T36'),
('Q389', 'Thành phố Đà Lạt', 'T37'),
('Q39', 'Huyện Bạch Thông', 'T05'),
('Q390', 'Thành phố Bảo Lộc', 'T37'),
('Q391', 'Huyện Bảo Lâm', 'T37'),
('Q392', 'Huyện Cát Tiên', 'T37'),
('Q393', 'Huyện Di Linh', 'T37'),
('Q394', 'Huyện Đạ Huoai', 'T37'),
('Q395', 'Huyện Đạ Tẻh', 'T37'),
('Q396', 'Huyện Đam Rông', 'T37'),
('Q397', 'Huyện Đơn Dương', 'T37'),
('Q398', 'Huyện Đức Trọng', 'T37'),
('Q399', 'Huyện Lạc Dương', 'T37'),
('Q40', 'Huyện Chợ Đồn', 'T05'),
('Q400', 'Huyện Lâm Hà', 'T37'),
('Q401', 'Thành phố Tân An', 'T38'),
('Q402', 'Thị xã Kiến Tường', 'T38'),
('Q403', 'Huyện Bến Lức', 'T38'),
('Q404', 'Huyện Thủ Thừa', 'T38'),
('Q405', 'Huyện Cần Giuộc', 'T38'),
('Q406', 'Huyện Cần Đước', 'T38'),
('Q407', 'Huyện Châu Thành', 'T38'),
('Q408', 'Huyện Tân Trụ', 'T38'),
('Q409', 'Huyện Đức Hòa', 'T38'),
('Q41', 'Huyện Chợ Mới', 'T05'),
('Q410', 'Huyện Đức Huệ', 'T38'),
('Q411', 'Huyện Thạnh Hóa', 'T38'),
('Q412', 'Huyện Tân Thạnh', 'T38'),
('Q413', 'Huyện Mộc Hóa', 'T38'),
('Q414', 'Huyện Vĩnh Hưng', 'T38'),
('Q415', 'Huyện Tân Hưng', 'T38'),
('Q416', 'Thành phố Nam Định', 'T39'),
('Q417', 'Huyện Giao Thủy', 'T39'),
('Q418', 'Huyện Hải Hậu', 'T39'),
('Q419', 'Huyện Mỹ Lộc', 'T39'),
('Q42', 'Huyện Na Rì', 'T05'),
('Q420', 'Huyện Nam Trực', 'T39'),
('Q421', 'Huyện Nghĩa Hưng', 'T39'),
('Q422', 'Huyện Trực Ninh', 'T39'),
('Q423', 'Huyện Vụ Bản', 'T39'),
('Q424', 'Huyện Xuân Trường', 'T39'),
('Q425', 'Huyện Ý Yên', 'T39'),
('Q426', 'Thành phố Vinh', 'T40'),
('Q427', 'Thị xã Cửa Lò', 'T40'),
('Q428', 'Thị xã Hoàng Mai', 'T40'),
('Q429', 'Thị xã Thái Hòa', 'T40'),
('Q43', 'Huyện Ngân Sơn', 'T05'),
('Q430', 'Huyện Anh Sơn', 'T40'),
('Q431', 'Huyện Con Cuông', 'T40'),
('Q432', 'Huyện Diễn Châu', 'T40'),
('Q433', 'Huyện Đô Lương', 'T40'),
('Q434', 'Huyện Hưng Nguyên', 'T40'),
('Q435', 'Huyện Kỳ Sơn', 'T40'),
('Q436', 'Huyện Nam Đàn', 'T40'),
('Q437', 'Huyện Nghi Lộc', 'T40'),
('Q438', 'Huyện Nghĩa Đàn', 'T40'),
('Q439', 'Huyện Quế Phong', 'T40'),
('Q44', 'Huyện Pác Nặm', 'T05'),
('Q440', 'Huyện Quỳ Châu', 'T40'),
('Q441', 'Huyện Quỳ Hợp', 'T40'),
('Q442', 'Huyện Quỳnh Lưu', 'T40'),
('Q443', 'Huyện Tân Kỳ', 'T40'),
('Q444', 'Huyện Thanh Chương', 'T40'),
('Q445', 'Huyện Tương Dương', 'T40'),
('Q446', 'Huyện Yên Thành', 'T40'),
('Q447', 'Thành phố Ninh Bình', 'T41'),
('Q448', 'Thị xã Tam Điệp', 'T41'),
('Q449', 'Huyện Gia Viễn', 'T41'),
('Q45', 'Thành phố Bắc Ninh', 'T06'),
('Q450', 'Huyện Hoa Lư', 'T41'),
('Q451', 'Huyện Kim Sơn', 'T41'),
('Q452', 'Huyện Nho Quan', 'T41'),
('Q453', 'Huyện Yên Khánh', 'T41'),
('Q454', 'Huyện Yên Mô', 'T41'),
('Q455', 'Thành phố Phan Rang – Tháp Chàm', 'T42'),
('Q456', 'Huyện Bác Ái', 'T42'),
('Q457', 'Huyện Ninh Hải', 'T42'),
('Q458', 'Huyện Ninh Phước', 'T42'),
('Q459', 'Huyện Ninh Sơn', 'T42'),
('Q46', 'Thành phố Từ Sơn', 'T06'),
('Q460', 'Huyện Thuận Bắc', 'T42'),
('Q461', 'Huyện Thuận Nam', 'T42'),
('Q462', 'Thành phố Việt Trì', 'T43'),
('Q463', 'Thị xã Phú Thọ', 'T43'),
('Q464', 'Huyện Cẩm Khê', 'T43'),
('Q465', 'Huyện Đoan Hùng', 'T43'),
('Q466', 'Huyện Hạ Hòa', 'T43'),
('Q467', 'Huyện Lâm Thao', 'T43'),
('Q468', 'Huyện Phù Ninh', 'T43'),
('Q469', 'Huyện Tam Nông', 'T43'),
('Q47', 'Thị xã Quế Võ', 'T06'),
('Q470', 'Huyện Tân Sơn', 'T43'),
('Q471', 'Huyện Thanh Ba', 'T43'),
('Q472', 'Huyện Thanh Sơn', 'T43'),
('Q473', 'Huyện Thanh Thủy', 'T43'),
('Q474', 'Huyện Yên Lập', 'T43'),
('Q475', 'Thành phố Tuy Hòa', 'T44'),
('Q476', 'Thị xã Đông Hòa', 'T44'),
('Q477', 'Thị xã Sông Cầu', 'T44'),
('Q478', 'Huyện Đồng Xuân', 'T44'),
('Q479', 'Huyện Phú Hòa', 'T44'),
('Q48', 'Thị xã Thuận Thành', 'T06'),
('Q480', 'Huyện Sơn Hòa', 'T44'),
('Q481', 'Huyện Sông Hinh', 'T44'),
('Q482', 'Huyện Tây Hòa', 'T44'),
('Q483', 'Huyện Tuy An', 'T44'),
('Q484', 'Thành phố Đồng Hới', 'T45'),
('Q485', 'Thị xã Ba Đồn', 'T45'),
('Q486', 'Huyện Bố Trạch', 'T45'),
('Q487', 'Huyện Lệ Thủy', 'T45'),
('Q488', 'Huyện Minh Hóa', 'T45'),
('Q489', 'Huyện Quảng Ninh', 'T45'),
('Q49', 'Huyện Yên Phong', 'T06'),
('Q490', 'Huyện Quảng Trạch', 'T45'),
('Q491', 'Huyện Tuyên Hóa', 'T45'),
('Q492', 'Thành phố Tam Kỳ', 'T46'),
('Q493', 'Thành phố Hội An', 'T46'),
('Q494', 'Thị xã Điện Bàn', 'T46'),
('Q495', 'Huyện Bắc Trà My', 'T46'),
('Q496', 'Huyện Đại Lộc', 'T46'),
('Q497', 'Huyện Đông Giang', 'T46'),
('Q498', 'Huyện Duy Xuyên', 'T46'),
('Q499', 'Huyện Hiệp Đức', 'T46'),
('Q50', 'Huyện Tiên Du', 'T06'),
('Q500', 'Huyện Nam Giang', 'T46'),
('Q501', 'Huyện Nam Trà My', 'T46'),
('Q502', 'Huyện Nông Sơn', 'T46'),
('Q503', 'Huyện Núi Thành', 'T46'),
('Q504', 'Huyện Phú Ninh', 'T46'),
('Q505', 'Huyện Phước Sơn', 'T46'),
('Q506', 'Huyện Quế Sơn', 'T46'),
('Q507', 'Huyện Tây Giang', 'T46'),
('Q508', 'Huyện Thăng Bình', 'T46'),
('Q509', 'Huyện Tiên Phước', 'T46'),
('Q51', 'Huyện Gia Bình', 'T06'),
('Q510', 'Thành phố Quảng Ngãi', 'T47'),
('Q511', 'Thị xã Đức Phổ', 'T47'),
('Q512', 'Huyện Ba Tơ', 'T47'),
('Q513', 'Huyện Bình Sơn', 'T47'),
('Q514', 'Huyện Lý Sơn', 'T47'),
('Q515', 'Huyện Minh Long', 'T47'),
('Q516', 'Huyện Mộ Đức', 'T47'),
('Q517', 'Huyện Nghĩa Hành', 'T47'),
('Q518', 'Huyện Sơn Hà', 'T47'),
('Q519', 'Huyện Sơn Tây', 'T47'),
('Q52', 'Huyện Lương Tài', 'T06'),
('Q520', 'Huyện Sơn Tịnh', 'T47'),
('Q521', 'Huyện Trà Bồng', 'T47'),
('Q522', 'Huyện Tư Nghĩa', 'T47'),
('Q523', 'Thành phố Hạ Long', 'T48'),
('Q524', 'Thành phố Cẩm Phả', 'T48'),
('Q525', 'Thành phố Móng Cái', 'T48'),
('Q526', 'Thành phố Uông Bí', 'T48'),
('Q527', 'Thị xã Đông Triều', 'T48'),
('Q528', 'Thị xã Quảng Yên', 'T48'),
('Q529', 'Huyện Ba Chẽ', 'T48'),
('Q53', 'Huyện Bến Tre', 'T07'),
('Q530', 'Huyện Bình Liêu', 'T48'),
('Q531', 'Huyện Cô Tô', 'T48'),
('Q532', 'Huyện Đầm Hà', 'T48'),
('Q533', 'Huyện Hải Hà', 'T48'),
('Q534', 'Huyện Tiên Yên', 'T48'),
('Q535', 'Huyện Vân Đồn', 'T48'),
('Q536', 'Thành phố Đông Hà', 'T49'),
('Q537', 'Thị xã Quảng Trị', 'T49'),
('Q538', 'Huyện Cam Lộ', 'T49'),
('Q539', 'Huyện Cồn Cỏ', 'T49'),
('Q54', 'Huyện Ba Tri', 'T07'),
('Q540', 'Huyện Đakrông', 'T49'),
('Q541', 'Huyện Gio Linh', 'T49'),
('Q542', 'Huyện Hải Lăng', 'T49'),
('Q543', 'Huyện Hướng Hóa', 'T49'),
('Q544', 'Huyện Triệu Phong', 'T49'),
('Q545', 'Huyện Vĩnh Linh', 'T49'),
('Q546', 'Thành phố Sóc Trăng', 'T50'),
('Q547', 'Thị xã Ngã Năm', 'T50'),
('Q548', 'Thị xã Vĩnh Châu', 'T50'),
('Q549', 'Huyện Châu Thành', 'T50'),
('Q55', 'Huyện Bình Đại', 'T07'),
('Q550', 'Huyện Cù Lao Dung', 'T50'),
('Q551', 'Huyện Kế Sách', 'T50'),
('Q552', 'Huyện Long Phú', 'T50'),
('Q553', 'Huyện Mỹ Tú', 'T50'),
('Q554', 'Huyện Mỹ Xuyên', 'T50'),
('Q555', 'Huyện Thạnh Trị', 'T50'),
('Q556', 'Huyện Trần Đề', 'T50'),
('Q557', 'Thành phố Sơn La', 'T51'),
('Q558', 'Huyện Quỳnh Nhai', 'T51'),
('Q559', 'Huyện Thuận Châu', 'T51'),
('Q56', 'Huyện Châu Thành', 'T07'),
('Q560', 'Huyện Mường La', 'T51'),
('Q561', 'Huyện Bắc Yên', 'T51'),
('Q562', 'Huyện Phù Yên', 'T51'),
('Q563', 'Huyện Mộc Châu', 'T51'),
('Q564', 'Huyện Yên Châu', 'T51'),
('Q565', 'Huyện Mai Sơn', 'T51'),
('Q566', 'Huyện Sông Mã', 'T51'),
('Q567', 'Huyện Sốp Cộp', 'T51'),
('Q568', 'Huyện Vân Hồ', 'T51'),
('Q569', 'Thành phố Tây Ninh', 'T52'),
('Q57', 'Huyện Chợ Lách', 'T07'),
('Q570', 'Thị xã Hòa Thành', 'T52'),
('Q571', 'Thị xã Trảng Bàng', 'T52'),
('Q572', 'Huyện Bến Cầu', 'T52'),
('Q573', 'Huyện Châu Thành', 'T52'),
('Q574', 'Huyện Dương Minh Châu', 'T52'),
('Q575', 'Huyện Gò Dầu', 'T52'),
('Q576', 'Huyện Tân Biên', 'T52'),
('Q577', 'Huyện Tân Châu', 'T52'),
('Q578', 'Thành phố Thái Bình', 'T53'),
('Q579', 'Huyện Đông Hưng', 'T53'),
('Q58', 'Huyện Giồng Trôm', 'T07'),
('Q580', 'Huyện Hưng Hà', 'T53'),
('Q581', 'Huyện Kiến Xương', 'T53'),
('Q582', 'Huyện Quỳnh Phụ', 'T53'),
('Q583', 'Huyện Thái Thụy', 'T53'),
('Q584', 'Huyện Tiền Hải', 'T53'),
('Q585', 'Huyện Vũ Thư', 'T53'),
('Q586', 'Thành phố Thái Nguyên', 'T54'),
('Q587', 'Thành phố Phổ Yên', 'T54'),
('Q588', 'Thành phố Sông Công', 'T54'),
('Q589', 'Huyện Đại Từ', 'T54'),
('Q59', 'Huyện Mỏ Cày Bắc', 'T07'),
('Q590', 'Huyện Định Hóa', 'T54'),
('Q591', 'Huyện Đồng Hỷ', 'T54'),
('Q592', 'Huyện Phú Bình', 'T54'),
('Q593', 'Huyện Phú Lương', 'T54'),
('Q594', 'Huyện Võ Nhai', 'T54'),
('Q595', 'Thành phố Thanh Hóa', 'T55'),
('Q596', 'Thành phố Sầm Sơn', 'T55'),
('Q597', 'Thị xã Bỉm Sơn', 'T55'),
('Q598', 'Thị xã Nghi Sơn', 'T55'),
('Q599', 'Huyện Bá Thước', 'T55'),
('Q60', 'Huyện Mỏ Cày Nam', 'T07'),
('Q600', 'Huyện Cẩm Thủy', 'T55'),
('Q601', 'Huyện Đông Sơn', 'T55'),
('Q602', 'Huyện Hà Trung', 'T55'),
('Q603', 'Huyện Hậu Lộc', 'T55'),
('Q604', 'Huyện Hoằng Hóa', 'T55'),
('Q605', 'Huyện Lang Chánh', 'T55'),
('Q606', 'Huyện Mường Lát', 'T55'),
('Q607', 'Huyện Nga Sơn', 'T55'),
('Q608', 'Huyện Ngọc Lặc', 'T55'),
('Q609', 'Huyện Như Thanh', 'T55'),
('Q61', 'Huyện Thạnh Phú', 'T07'),
('Q610', 'Huyện Như Xuân', 'T55'),
('Q611', 'Huyện Nông Cống', 'T55'),
('Q612', 'Huyện Quan Hóa', 'T55'),
('Q613', 'Huyện Quan Sơn', 'T55'),
('Q614', 'Huyện Quảng Xương', 'T55'),
('Q615', 'Huyện Thạch Thành', 'T55'),
('Q616', 'Huyện Thiệu Hóa', 'T55'),
('Q617', 'Huyện Thọ Xuân', 'T55'),
('Q618', 'Huyện Thường Xuân', 'T55'),
('Q619', 'Huyện Triệu Sơn', 'T55'),
('Q62', 'Thành phố Thủ Dầu Một', 'T08'),
('Q620', 'Huyện Vĩnh Lộc', 'T55'),
('Q621', 'Huyện Yên Định', 'T55'),
('Q622', 'Quận 1', 'T56'),
('Q623', 'Quận 3', 'T56'),
('Q624', 'Quận 4', 'T56'),
('Q625', 'Quận 5', 'T56'),
('Q626', 'Quận 6', 'T56'),
('Q627', 'Quận 7', 'T56'),
('Q628', 'Quận 8', 'T56'),
('Q629', 'Quận 10', 'T56'),
('Q63', 'Thành phố Bến Cát', 'T08'),
('Q630', 'Quận 11', 'T56'),
('Q631', 'Quận 12', 'T56'),
('Q632', 'Quận Bình Tân', 'T56'),
('Q633', 'Quận Bình Thạnh', 'T56'),
('Q634', 'Quận Gò Vấp', 'T56'),
('Q635', 'Quận Phú Nhuận', 'T56'),
('Q636', 'Quận Tân Bình', 'T56'),
('Q637', 'Quận Tân Phú', 'T56'),
('Q638', 'Thành phố Thủ Đức', 'T56'),
('Q639', 'Huyện Bình Chánh', 'T56'),
('Q64', 'Thành phố Dĩ An', 'T08'),
('Q640', 'Huyện Cần Giờ', 'T56'),
('Q641', 'Huyện Củ Chi', 'T56'),
('Q642', 'Huyện Hóc Môn', 'T56'),
('Q643', 'Huyện Nhà Bè', 'T56'),
('Q644', 'Thành phố Huế', 'T57'),
('Q645', 'Thị xã Hương Thủy', 'T57'),
('Q646', 'Thị xã Hương Trà', 'T57'),
('Q647', 'Huyện A Lưới', 'T57'),
('Q648', 'Huyện Nam Đông', 'T57'),
('Q649', 'Huyện Phong Điền', 'T57'),
('Q65', 'Thành phố Tân Uyên', 'T08'),
('Q650', 'Huyện Phú Lộc', 'T57'),
('Q651', 'Huyện Phú Vang', 'T57'),
('Q652', 'Huyện Quảng Điền', 'T57'),
('Q653', 'Thành phố Mỹ Tho', 'T58'),
('Q654', 'Thành phố Gò Công', 'T58'),
('Q655', 'Thị xã Cai Lậy', 'T58'),
('Q656', 'Huyện Cái Bè', 'T58'),
('Q657', 'Huyện Cai Lậy', 'T58'),
('Q658', 'Huyện Châu Thành', 'T58'),
('Q659', 'Huyện Chợ Gạo', 'T58'),
('Q66', 'Huyện Thuận An', 'T08'),
('Q660', 'Huyện Gò Công Đông', 'T58'),
('Q661', 'Huyện Gò Công Tây', 'T58'),
('Q662', 'Huyện Tân Phú Đông', 'T58'),
('Q663', 'Huyện Tân Phước', 'T58'),
('Q664', 'Thành phố Trà Vinh', 'T59'),
('Q665', 'Thị xã Duyên Hải', 'T59'),
('Q666', 'Huyện Càng Long', 'T59'),
('Q667', 'Huyện Cầu Kè', 'T59'),
('Q668', 'Huyện Cầu Ngang', 'T59'),
('Q669', 'Huyện Châu Thành', 'T59'),
('Q67', 'Huyện Bàu Bàng', 'T08'),
('Q670', 'Huyện Duyên Hải', 'T59'),
('Q671', 'Huyện Tiểu Cần', 'T59'),
('Q672', 'Huyện Trà Cú', 'T59'),
('Q673', 'Thành phố Tuyên Quang', 'T60'),
('Q674', 'Huyện Chiêm Hóa', 'T60'),
('Q675', 'Huyện Hàm Yên', 'T60'),
('Q676', 'Huyện Lâm Bình', 'T60'),
('Q677', 'Huyện Na Hang', 'T60'),
('Q678', 'Huyện Sơn Dương', 'T60'),
('Q679', 'Huyện Yên Sơn', 'T60'),
('Q68', 'Huyện Bắc Tân Uyên', 'T08'),
('Q680', 'Thành phố Vĩnh Long', 'T61'),
('Q681', 'Thị xã Bình Minh', 'T61'),
('Q682', 'Huyện Bình Tân', 'T61'),
('Q683', 'Huyện Long Hồ', 'T61'),
('Q684', 'Huyện Mang Thít', 'T61'),
('Q685', 'Huyện Tam Bình', 'T61'),
('Q686', 'Huyện Trà Ôn', 'T61'),
('Q687', 'Huyện Vũng Liêm', 'T61'),
('Q688', 'Thành phố Vĩnh Yên', 'T62'),
('Q689', 'Thành phố Phúc Yên', 'T62'),
('Q69', 'Huyện Dầu Tiếng', 'T08'),
('Q690', 'Huyện Bình Xuyên', 'T62'),
('Q691', 'Huyện Lập Thạch', 'T62'),
('Q692', 'Huyện Sông Lô', 'T62'),
('Q693', 'Huyện Tam Đảo', 'T62'),
('Q694', 'Huyện Tam Dương', 'T62'),
('Q695', 'Huyện Vĩnh Tường', 'T62'),
('Q696', 'Huyện Yên Lạc', 'T62'),
('Q697', 'Thành phố Yên Bái', 'T63'),
('Q698', 'Thị xã Nghĩa Lộ', 'T63'),
('Q699', 'Huyện Lục Yên', 'T63'),
('Q70', 'Huyện Phú Giáo', 'T08'),
('Q700', 'Huyện Mù Cang Chải', 'T63'),
('Q701', 'Huyện Trạm Tấu', 'T63'),
('Q702', 'Huyện Trấn Yên', 'T63'),
('Q703', 'Huyện Văn Chấn', 'T63'),
('Q704', 'Huyện Văn Yên', 'T63'),
('Q705', 'Huyện Yên Bình', 'T63'),
('Q71', 'Thành phố Quy Nhơn', 'T09'),
('Q72', 'Thị xã An Nhơn', 'T09'),
('Q73', 'Thị xã Hoài Nhơn', 'T09'),
('Q74', 'Huyện An Lão', 'T09'),
('Q75', 'Huyện Hoài Ân', 'T09'),
('Q76', 'Huyện Phù Cát', 'T09'),
('Q77', 'Huyện Phù Mỹ', 'T09'),
('Q78', 'Huyện Tây Sơn', 'T09'),
('Q79', 'Huyện Tuy Phước', 'T09'),
('Q80', 'Huyện Vân Canh', 'T09'),
('Q81', 'Huyện Vĩnh Thạnh', 'T09'),
('Q82', 'Thành phố Đồng Xoài', 'T10'),
('Q83', 'Thị xã Bình Long', 'T10'),
('Q84', 'Thị xã Chơn Thành', 'T10'),
('Q85', 'Thị xã Phước Long', 'T10'),
('Q86', 'Huyện Bù Đăng', 'T10'),
('Q87', 'Huyện Bù Đốp', 'T10'),
('Q88', 'Huyện Bù Gia Mập', 'T10'),
('Q89', 'Huyện Đồng Phú', 'T10'),
('Q90', 'Huyện Hớn Quản', 'T10'),
('Q91', 'Huyện Lộc Ninh', 'T10'),
('Q92', 'Huyện Phú Riềng', 'T10'),
('Q93', 'Thành phố Phan Thiết', 'T11'),
('Q94', 'Thị xã La Gi', 'T11'),
('Q95', 'Huyện Bắc Bình', 'T11'),
('Q96', 'Huyện Đức Linh', 'T11'),
('Q97', 'Huyện Hàm Tân', 'T11'),
('Q98', 'Huyện Hàm Thuận Bắc', 'T11'),
('Q99', 'Huyện Hàm Thuận Nam', 'T11');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_23_212434_create_contacts_table', 2),
(5, '2024_05_26_165915_add_timestamps_to_contact', 3),
(6, '2024_04_19_085509_create_tbl_admin_table', 4),
(7, '2024_05_13_121906_create_tbl_category_product', 4),
(8, '2024_05_14_061921_create_tbl_product', 4),
(9, '2024_05_16_104853_drop_product_color_tbl', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('OgXNOBF9ZYcx0VpBmTgY4zpR7CegZTfC1Swa6Wkl', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZkZEYWxrMHpSRUFqUFZneWZBOElmYVlmVVRscjRhODdYQVJvM0NhZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHA6Ly9sb2NhbGhvc3QvV0VCX0Jhbl9IYW5nL0JsaW5raXkvYWRtaW4tZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxMDoiYWRtaW5fbmFtZSI7czoyNzoicGhhbWFuaG5ndXllbjI3MDhAZ21haWwuY29tIjtzOjg6ImFkbWluX2lkIjtpOjE7czo3OiJtZXNzYWdlIjtOO30=', 1716992263);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'phamanhnguyen2708@gmail.com', 'anhnguyen2708', 'phamanhnguyen2708@gmail.com', '0325671864', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` text NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_content` longtext NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tempuser`
--

CREATE TABLE `tempuser` (
  `USERID` varchar(40) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tinh`
--

CREATE TABLE `tinh` (
  `MaTinh` varchar(40) NOT NULL,
  `TenTinh` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tinh`
--

INSERT INTO `tinh` (`MaTinh`, `TenTinh`) VALUES
('T01', 'An Giang'),
('T02', 'Bà Rịa - Vũng Tàu'),
('T03', 'Bạc Liêu'),
('T04', 'Bắc Giang'),
('T05', 'Bắc Kạn'),
('T06', 'Bắc Ninh'),
('T07', 'Bến Tre'),
('T08', 'Bình Dương'),
('T09', 'Bình Định'),
('T10', 'Bình Phước'),
('T11', 'Bình Thuận'),
('T12', 'Cà Mau'),
('T13', 'Cao Bằng'),
('T14', 'Cần Thơ'),
('T15', 'Đà Nẵng'),
('T16', 'Đắk Lắk'),
('T17', 'Đắk Nông'),
('T18', 'Điện Biên'),
('T19', 'Đồng Nai'),
('T20', 'Đồng Tháp'),
('T21', 'Gia Lai'),
('T22', 'Hà Giang'),
('T23', 'Hà Nam'),
('T24', 'Hà Nội'),
('T25', 'Hà Tĩnh'),
('T26', 'Hải Dương'),
('T27', 'Hải Phòng'),
('T28', 'Hậu Giang'),
('T29', 'Hòa Bình'),
('T30', 'Hưng Yên'),
('T31', 'Khánh Hòa'),
('T32', 'Kiên Giang'),
('T33', 'Kon Tum'),
('T34', 'Lai Châu'),
('T35', 'Lạng Sơn'),
('T36', 'Lào Cai'),
('T37', 'Lâm Đồng'),
('T38', 'Long An'),
('T39', 'Nam Định'),
('T40', 'Nghệ An'),
('T41', 'Ninh Bình'),
('T42', 'Ninh Thuận'),
('T43', 'Phú Thọ'),
('T44', 'Phú Yên'),
('T45', 'Quảng Bình'),
('T46', 'Quảng Nam'),
('T47', 'Quảng Ngãi'),
('T48', 'Quảng Ninh'),
('T49', 'Quảng Trị'),
('T50', 'Sóc Trăng'),
('T51', 'Sơn La'),
('T52', 'Tây Ninh'),
('T53', 'Thái Bình'),
('T54', 'Thái Nguyên'),
('T55', 'Thanh Hóa'),
('T56', 'TP Hồ Chí Minh'),
('T57', 'Thừa Thiên - Huế '),
('T58', 'Tiền Giang'),
('T59', 'Trà Vinh'),
('T60', 'Tuyên Quang'),
('T61', 'Vĩnh Long'),
('T62', 'Vĩnh Phúc'),
('T63', 'Yên Bái');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `xa`
--

CREATE TABLE `xa` (
  `MaXa` varchar(40) NOT NULL,
  `TenXa` varchar(40) NOT NULL,
  `MaHuyen` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `xa`
--

INSERT INTO `xa` (`MaXa`, `TenXa`, `MaHuyen`) VALUES
('X01', 'Phường Bình Đức', 'Q01'),
('X02', 'Phường Bình Khánh', 'Q01'),
('X03', 'Phường Đông Xuyên', 'Q01'),
('X04', 'Phường Mỹ Bình', 'Q01'),
('X05', 'Phường Mỹ Hòa', 'Q01'),
('X06', 'Phường Mỹ Long', 'Q01'),
('X07', 'Phường Mỹ Phước', 'Q01'),
('X08', 'Phường Mỹ Quý', 'Q01'),
('X09', 'Phường Mỹ Thạnh', 'Q01'),
('X10', 'Phường Mỹ Thới', 'Q01'),
('X100', 'Xã Long Giang', 'Q08'),
('X101', 'Xã Long Kiến', 'Q08'),
('X102', 'Xã Mỹ An', 'Q08'),
('X103', 'Xã Mỹ Hiệp', 'Q08'),
('X104', 'Xã Mỹ Hội Đông', 'Q08'),
('X105', 'Xã Nhơn Mỹ', 'Q08'),
('X106', 'Xã Tấn Mỹ', 'Q08'),
('X107', 'Thị trấn Phú Mỹ', 'Q09'),
('X108', 'Xã Chợ Vàm', 'Q09'),
('X109', 'Xã Bình Thạnh Đông', 'Q09'),
('X11', 'Phường Mỹ Xuyên', 'Q01'),
('X110', 'Xã Hiệp Xương', 'Q09'),
('X111', 'Xã Hòa Lạc', 'Q09'),
('X112', 'Xã Long Hòa', 'Q09'),
('X113', 'Xã Phú An', 'Q09'),
('X114', 'Xã Phú Bình', 'Q09'),
('X115', 'Xã Phú Hiệp', 'Q09'),
('X116', 'Xã Phú Hưng', 'Q09'),
('X117', 'Xã Phú Lâm', 'Q09'),
('X118', 'Xã Phú Long', 'Q09'),
('X119', 'Xã Phú Thành', 'Q09'),
('X12', 'Xã Mỹ Hòa Hưng', 'Q01'),
('X120', 'Xã Phú Thạnh', 'Q09'),
('X121', 'Xã Phú Thọ', 'Q09'),
('X122', 'Xã Phú Xuân', 'Q09'),
('X123', 'Xã Tân Hòa', 'Q09'),
('X124', 'Xã Tân Trung', 'Q09'),
('X125', 'Thị trấn Núi Sập', 'Q10'),
('X126', 'Thị trấn Óc Eo', 'Q10'),
('X127', 'Xã Phú Hòa', 'Q10'),
('X128', 'Xã An Bình', 'Q10'),
('X129', 'Xã Bình Thành', 'Q10'),
('X13', 'Xã Mỹ Khánh', 'Q01'),
('X130', 'Xã Định Mỹ', 'Q10'),
('X131', 'Xã Định Thành', 'Q10'),
('X132', 'Xã Mỹ Phú Đông', 'Q10'),
('X133', 'Xã Phú Thuận', 'Q10'),
('X134', 'Xã Tây Phú', 'Q10'),
('X135', 'Xã Thoại Giang', 'Q10'),
('X136', 'Xã Vĩnh Chánh', 'Q10'),
('X137', 'Xã Vĩnh Khánh', 'Q10'),
('X138', 'Xã Vĩnh Phú', 'Q10'),
('X139', 'Xã Vĩnh Trạch', 'Q10'),
('X14', 'Phường Châu Phú A', 'Q02'),
('X140', 'Xã Vọng Đông', 'Q10'),
('X141', 'Xã Vọng Thê', 'Q10'),
('X142', 'Thị trấn Tri Tôn', 'Q11'),
('X143', 'Thị trấn Ba Chúc', 'Q11'),
('X144', 'Xã Cô Tô', 'Q11'),
('X145', 'Xã An Tức', 'Q11'),
('X146', 'Xã Châu Lăng', 'Q11'),
('X147', 'Xã Lạc Quới', 'Q11'),
('X148', 'Xã Lê Trì', 'Q11'),
('X149', 'Xã Lương An Trà', 'Q11'),
('X15', 'Phường Châu Phú B', 'Q02'),
('X150', 'Xã Lương Phi', 'Q11'),
('X151', 'Xã Núi Tô', 'Q11'),
('X152', 'Xã Ô Lâm', 'Q11'),
('X153', 'Xã Tà Đảnh', 'Q11'),
('X154', 'Xã Tân Tuyến', 'Q11'),
('X155', 'Xã Vĩnh Gia', 'Q11'),
('X156', 'Xã Vĩnh Phước', 'Q11'),
('X157', 'Phường Kim Dinh', 'Q12'),
('X158', 'Phường Long Hương', 'Q12'),
('X159', 'Phường Long Tâm', 'Q12'),
('X16', 'Phường Núi Sam', 'Q02'),
('X160', 'Phường Long Toàn', 'Q12'),
('X161', 'Phường Phước Hiệp', 'Q12'),
('X162', 'Phường Phước Hưng', 'Q12'),
('X163', 'Phường Phước Nguyên', 'Q12'),
('X164', 'Phường Phước Trung', 'Q12'),
('X165', 'Xã Hòa Long', 'Q12'),
('X166', 'Xã Long Phước', 'Q12'),
('X167', 'Xã Tân Hưng', 'Q12'),
('X168', 'Phường 1', 'Q13'),
('X169', 'Phường 2', 'Q13'),
('X17', 'Phường Vĩnh Mỹ', 'Q02'),
('X170', 'Phường 3', 'Q13'),
('X171', 'Phường 4', 'Q13'),
('X172', 'Phường 5', 'Q13'),
('X173', 'Phường 7', 'Q13'),
('X174', 'Phường 8', 'Q13'),
('X175', 'Phường 9', 'Q13'),
('X176', 'Phường 10', 'Q13'),
('X177', 'Phường 11', 'Q13'),
('X178', 'Phường 12', 'Q13'),
('X179', 'Phường Thắng Nhất', 'Q13'),
('X18', 'Phường Vĩnh Nguơn', 'Q02'),
('X180', 'Phường Thắng Nhì', 'Q13'),
('X181', 'Phường Thắng Tam', 'Q13'),
('X182', 'Phường Nguyễn An Ninh', 'Q13'),
('X183', 'Phường Rạch Dừa', 'Q13'),
('X184', 'Xã Long Sơn', 'Q13'),
('X185', 'Phường Phú Mỹ', 'Q14'),
('X186', 'Phường Mỹ Xuân', 'Q14'),
('X187', 'Phường Hắc Dịch', 'Q14'),
('X188', 'Phường Phước Hòa', 'Q14'),
('X189', 'Phường Tân Phước', 'Q14'),
('X19', 'Xã Vĩnh Châu', 'Q02'),
('X190', 'Xã Tân Hải', 'Q14'),
('X191', 'Xã Tóc Tiên', 'Q14'),
('X192', 'Xã Tân Hòa', 'Q14'),
('X193', 'Xã Châu Pha', 'Q14'),
('X194', 'Xã Sông Xoài', 'Q14'),
('X195', 'Thị trấn Ngãi Giao', 'Q15'),
('X196', 'Xã Bàu Chinh', 'Q15'),
('X197', 'Xã Bình Ba', 'Q15'),
('X198', 'Xã Bình Giã', 'Q15'),
('X199', 'Xã Bình Trung', 'Q15'),
('X20', 'Xã Vĩnh Tế', 'Q02'),
('X200', 'Xã Cù Bị', 'Q15'),
('X201', 'Xã Đá Bạc', 'Q15'),
('X202', 'Xã Kim Long', 'Q15'),
('X203', 'Xã Láng Lớn', 'Q15'),
('X204', 'Xã Nghĩa Thành', 'Q15'),
('X205', 'Xã Quảng Thành', 'Q15'),
('X206', 'Xã Sơn Bình', 'Q15'),
('X207', 'Xã Suối Nghệ', 'Q15'),
('X208', 'Xã Suối Rao', 'Q15'),
('X209', 'Xã Xà Bang', 'Q15'),
('X21', 'Phường Long Châu', 'Q03'),
('X210', 'Xã Xuân Sơn', 'Q15'),
('X211', 'Thị trấn Đất Đỏ', 'Q17'),
('X212', 'Thị trấn Phước Hải', 'Q17'),
('X213', 'Xã Láng Dài', 'Q17'),
('X214', 'Xã Lộc An', 'Q17'),
('X215', 'Xã Long Mỹ', 'Q17'),
('X216', 'Xã Long Tân', 'Q17'),
('X217', 'Xã Phước Hội', 'Q17'),
('X218', 'Xã Phước Long Thọ', 'Q17'),
('X219', 'Thị trấn Long Điền', 'Q18'),
('X22', 'Phường Long Hưng', 'Q03'),
('X220', 'Thị trấn Long Hải', 'Q18'),
('X221', 'Xã An Ngãi', 'Q18'),
('X222', 'Xã An Nhứt', 'Q18'),
('X223', 'Xã Phước Hưng', 'Q18'),
('X224', 'Xã Phước Tỉnh', 'Q18'),
('X225', 'Xã Tam Phước', 'Q18'),
('X226', 'Thị trấn Phước Bửu', 'Q19'),
('X227', 'Xã Bàu Lâm', 'Q19'),
('X228', 'Xã Bình Châu', 'Q19'),
('X229', 'Xã Bông Trang', 'Q19'),
('X23', 'Phường Long Phú', 'Q03'),
('X230', 'Xã Bưng Riềng', 'Q19'),
('X231', 'Xã Hòa Bình', 'Q19'),
('X232', 'Xã Hòa Hiệp', 'Q19'),
('X233', 'Xã Hòa Hội', 'Q19'),
('X234', 'Xã Hòa Hưng', 'Q19'),
('X235', 'Xã Phước Tân', 'Q19'),
('X236', 'Xã Tân Lâm', 'Q19'),
('X237', 'Xã Phước Thuận', 'Q19'),
('X238', 'Xã Xuyên Mộc', 'Q19'),
('X239', 'Phường 1', 'Q20'),
('X24', 'Phường Long Sơn', 'Q03'),
('X240', 'Phường 2', 'Q20'),
('X241', 'Phường 3', 'Q20'),
('X242', 'Phường 5', 'Q20'),
('X243', 'Phường 7', 'Q20'),
('X244', 'Phường 8', 'Q20'),
('X245', 'Phường Nhà Mát', 'Q20'),
('X246', 'Xã Hiệp Thành', 'Q20'),
('X247', 'Xã Vĩnh Trạch', 'Q20'),
('X248', 'Phường Vĩnh Trạch Đông', 'Q20'),
('X249', 'Phường 1', 'Q21'),
('X25', 'Phường Long Thạnh', 'Q03'),
('X250', 'Phường Hộ Phòng', 'Q21'),
('X251', 'Phường Láng Tròn', 'Q21'),
('X252', 'Xã Phong Tân', 'Q21'),
('X253', 'Xã Phong Thạnh', 'Q21'),
('X254', 'Xã Phong Thạnh A', 'Q21'),
('X255', 'Xã Phong Thạnh Đông', 'Q21'),
('X256', 'Xã Phong Thạnh Tây', 'Q21'),
('X257', 'Xã Tân Phong', 'Q21'),
('X258', 'Xã Tân Thạnh', 'Q21'),
('X259', 'Thị trấn Gành Hào', 'Q22'),
('X26', 'Xã Châu Phong', 'Q03'),
('X260', 'Xã An Phúc', 'Q22'),
('X261', 'Xã An Trạch', 'Q22'),
('X262', 'Xã An Trạch A', 'Q22'),
('X263', 'Xã Điền Hải', 'Q22'),
('X264', 'Xã Định Thành', 'Q22'),
('X265', 'Xã Định Thành A', 'Q22'),
('X266', 'Xã Long Điền', 'Q22'),
('X267', 'Xã Long Điền Đông', 'Q22'),
('X268', 'Xã Long Điền Đông A', 'Q22'),
('X269', 'Xã Long Điền Tây', 'Q22'),
('X27', 'Xã Lê Chánh', 'Q03'),
('X270', 'Thị trấn Hòa Bình', 'Q23'),
('X271', 'Xã Minh Diệu', 'Q23'),
('X272', 'Xã Vĩnh Bình', 'Q23'),
('X273', 'Xã Vĩnh Hậu', 'Q23'),
('X274', 'Xã Vĩnh Hậu A', 'Q23'),
('X275', 'Xã Vĩnh Mỹ A', 'Q23'),
('X276', 'Xã Vĩnh Mỹ B', 'Q23'),
('X277', 'Xã Vĩnh Thịnh', 'Q23'),
('X278', 'Thị trấn Ngan Dừa', 'Q24'),
('X279', 'Xã Lộc Ninh', 'Q24'),
('X28', 'Xã Long An', 'Q03'),
('X280', 'Xã Ninh Hòa', 'Q24'),
('X281', 'Xã Ninh Quới', 'Q24'),
('X282', 'Xã Ninh Quới A', 'Q24'),
('X283', 'Xã Ninh Thạnh Lợi', 'Q24'),
('X284', 'Xã Ninh Thạnh Lợi A', 'Q24'),
('X285', 'Xã Vĩnh Lộc', 'Q24'),
('X286', 'Xã Vĩnh Lộc A', 'Q24'),
('X287', 'Thị trấn Phước Long', 'Q25'),
('X288', 'Xã Hưng Phú', 'Q25'),
('X289', 'Xã Phong Thạnh Tây A', 'Q25'),
('X29', 'Xã Phú Lộc', 'Q03'),
('X290', 'Xã Phong Thạnh Tây B', 'Q25'),
('X291', 'Xã Phước Long', 'Q25'),
('X292', 'Xã Vĩnh Phú Đông', 'Q25'),
('X293', 'Xã Vĩnh Phú Tây', 'Q25'),
('X294', 'Xã Vĩnh Thanh', 'Q25'),
('X295', 'Thị trấn Châu Hưng', 'Q26'),
('X296', 'Xã Châu Hưng A', 'Q26'),
('X297', 'Xã Châu Thới', 'Q26'),
('X298', 'Xã Hưng Hội', 'Q26'),
('X299', 'Xã Hưng Thành', 'Q26'),
('X30', 'Xã Phú Vĩnh', 'Q03'),
('X300', 'Xã Long Thạnh', 'Q26'),
('X301', 'Xã Vĩnh Hưng', 'Q26'),
('X302', 'Xã Vĩnh Hưng A', 'Q26'),
('X303', 'Phường Đa Mai', 'Q27'),
('X304', 'Phường Dĩnh Kế', 'Q27'),
('X305', 'Phường Hoàng Văn Thụ', 'Q27'),
('X306', 'Phường Lê Lợi', 'Q27'),
('X307', 'Phường Mỹ Độ', 'Q27'),
('X308', 'Phường Ngô Quyền', 'Q27'),
('X309', 'Phường Thọ Xương', 'Q27'),
('X31', 'Xã Tân An', 'Q03'),
('X310', 'Phường Trần Nguyên Hãn', 'Q27'),
('X311', 'Phường Trần Phú', 'Q27'),
('X312', 'Phường Xương Giang', 'Q27'),
('X313', 'Xã Dĩnh Trì', 'Q27'),
('X314', 'Xã Đồng Sơn', 'Q27'),
('X315', 'Xã Song Khê', 'Q27'),
('X316', 'Xã Song Mai', 'Q27'),
('X317', 'Xã Tân Mỹ', 'Q27'),
('X318', 'Xã Tân Tiến', 'Q27'),
('X319', 'Phường Bích Động', 'Q28'),
('X32', 'Xã Tân Thạnh', 'Q03'),
('X320', 'Phường Hồng Thái', 'Q28'),
('X321', 'Phường Nếnh', 'Q28'),
('X322', 'Phường Ninh Sơn', 'Q28'),
('X323', 'Phường Quang Châu', 'Q28'),
('X324', 'Phường Quảng Minh', 'Q28'),
('X325', 'Phường Tăng Tiến', 'Q28'),
('X326', 'Phường Tự Lạn', 'Q28'),
('X327', 'Phường Vân Trung', 'Q28'),
('X328', 'Xã Hương Mai', 'Q28'),
('X329', 'Xã Minh Đức', 'Q28'),
('X33', 'Xã Vĩnh Hòa', 'Q03'),
('X330', 'Xã Nghĩa Trung', 'Q28'),
('X331', 'Xã Thượng Lan', 'Q28'),
('X332', 'Xã Tiên Sơn', 'Q28'),
('X333', 'Xã Trung Sơn', 'Q28'),
('X334', 'Xã Vân Hà', 'Q28'),
('X335', 'Xã Việt Tiến', 'Q28'),
('X34', 'Xã Vĩnh Xương', 'Q03'),
('X35', 'Phường An Phú', 'Q04'),
('X36', 'Phường Chi Lăng', 'Q04'),
('X37', 'Phường Nhà Bàng', 'Q04'),
('X38', 'Phường Nhơn Hưng', 'Q04'),
('X39', 'Phường Núi Voi', 'Q04'),
('X40', 'Phường Thới Sơn', 'Q04'),
('X41', 'Phường Tịnh Biên', 'Q04'),
('X42', 'Xã An Cư', 'Q04'),
('X43', 'Xã An Hảo', 'Q04'),
('X44', 'Xã An Nông', 'Q04'),
('X45', 'Xã Tân Lập', 'Q04'),
('X46', 'Xã Tân Lợi', 'Q04'),
('X47', 'Xã Văn Giáo', 'Q04'),
('X48', 'Xã Vĩnh Trung', 'Q04'),
('X49', 'Thị trấn An Phú', 'Q05'),
('X50', 'Thị trấn Đa Phước', 'Q05'),
('X51', 'Thị trấn Long Bình', 'Q05'),
('X52', 'Xã Khánh An', 'Q05'),
('X53', 'Xã Khánh Bình', 'Q05'),
('X54', 'Xã Nhơn Hội', 'Q05'),
('X55', 'Xã Phú Hội', 'Q05'),
('X56', 'Xã Phú Hữu', 'Q05'),
('X57', 'Xã Phước Hưng', 'Q05'),
('X58', 'Xã Quốc Thái', 'Q05'),
('X59', 'Xã Vĩnh Hậu', 'Q05'),
('X60', 'Xã Vĩnh Hội Đông', 'Q05'),
('X61', 'Xã Vĩnh Lộc', 'Q05'),
('X62', 'Xã Vĩnh Trường', 'Q05'),
('X63', 'Thị trấn Cái Dầu', 'Q06'),
('X64', 'Xã Vĩnh Thạnh Trung', 'Q06'),
('X65', 'Xã Bình Chánh', 'Q06'),
('X66', 'Xã Bình Long', 'Q06'),
('X67', 'Xã Bình Mỹ', 'Q06'),
('X68', 'Xã Bình Phú', 'Q06'),
('X69', 'Xã Bình Thủy', 'Q06'),
('X70', 'Xã Đào Hữu Cảnh', 'Q06'),
('X71', 'Xã Khánh Hòa', 'Q06'),
('X72', 'Xã Mỹ Đức', 'Q06'),
('X73', 'Xã Mỹ Phú', 'Q06'),
('X74', 'Xã Ô Long Vĩ', 'Q06'),
('X75', 'Xã Thạnh Mỹ Tây', 'Q06'),
('X76', 'Thị trấn An Châu', 'Q07'),
('X77', 'Xã Vĩnh Bình', 'Q07'),
('X78', 'Xã An Hòa', 'Q07'),
('X79', 'Xã Bình Hòa', 'Q07'),
('X80', 'Xã Bình Thạnh', 'Q07'),
('X81', 'Xã Cần Đăng', 'Q07'),
('X82', 'Xã Hòa Bình Thạnh', 'Q07'),
('X83', 'Xã Tân Phú', 'Q07'),
('X84', 'Xã Vĩnh An', 'Q07'),
('X85', 'Xã Vĩnh Hanh', 'Q07'),
('X86', 'Xã Vĩnh Lợi', 'Q07'),
('X87', 'Xã Vĩnh Nhuận', 'Q07'),
('X88', 'Xã Vĩnh Thành', 'Q07'),
('X89', 'Thị trấn Chợ Mới', 'Q08'),
('X90', 'Thị trấn Hội An', 'Q08'),
('X91', 'Xã Mỹ Luông', 'Q08'),
('X92', 'Xã An Thạnh Trung', 'Q08'),
('X93', 'Xã Bình Phước Xuân', 'Q08'),
('X94', 'Xã Hòa An', 'Q08'),
('X95', 'Xã Hòa Bình', 'Q08'),
('X96', 'Xã Kiến An', 'Q08'),
('X97', 'Xã Kiến Thành', 'Q08'),
('X98', 'Xã Long Điền A', 'Q08'),
('X99', 'Xã Long Điền B', 'Q08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`stt`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `huyen`
--
ALTER TABLE `huyen`
  ADD PRIMARY KEY (`MaHuyen`),
  ADD KEY `MaTinh` (`MaTinh`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`MaTinh`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `xa`
--
ALTER TABLE `xa`
  ADD PRIMARY KEY (`MaXa`),
  ADD KEY `MaHuyen` (`MaHuyen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `huyen`
--
ALTER TABLE `huyen`
  ADD CONSTRAINT `huyen_ibfk_1` FOREIGN KEY (`MaTinh`) REFERENCES `tinh` (`MaTinh`);

--
-- Constraints for table `xa`
--
ALTER TABLE `xa`
  ADD CONSTRAINT `xa_ibfk_1` FOREIGN KEY (`MaHuyen`) REFERENCES `huyen` (`MaHuyen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
