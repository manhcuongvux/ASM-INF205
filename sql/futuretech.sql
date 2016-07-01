-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2015 at 04:49 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `futuretech`
--

-- --------------------------------------------------------

--
-- Table structure for table `brandproduct`
--

CREATE TABLE IF NOT EXISTS `brandproduct` (
`IdBrand` int(12) NOT NULL,
  `Brand` varchar(64) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `brandproduct`
--

INSERT INTO `brandproduct` (`IdBrand`, `Brand`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Sony'),
(4, 'HTC'),
(5, 'Blackberry');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
`ContactID` int(12) NOT NULL,
  `ContactName` varchar(50) NOT NULL,
  `ContactEmail` varchar(30) NOT NULL,
  `ContactPhone` int(15) NOT NULL,
  `ContactDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
`OrderID` int(12) NOT NULL,
  `ProductID` int(12) NOT NULL,
  `ProductPrice` double(10,0) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Totals` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`OrderID` int(12) NOT NULL,
  `OrderDate` date NOT NULL,
  `OrderTotal` int(10) NOT NULL,
  `UserID` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `productdetail`
--

CREATE TABLE IF NOT EXISTS `productdetail` (
  `ProductID` int(12) NOT NULL,
  `BatteryCapacity` varchar(64) NOT NULL,
  `Os` varchar(64) NOT NULL,
  `Ram` varchar(64) NOT NULL,
  `InterialMemorize` varchar(64) NOT NULL,
  `Resolution` varchar(64) NOT NULL,
  `ScreenSize` varchar(64) NOT NULL,
  `Camera` varchar(64) NOT NULL,
  `NFC` varchar(64) NOT NULL,
  `Wifi` varchar(64) NOT NULL,
  `Networks` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productdetail`
--

INSERT INTO `productdetail` (`ProductID`, `BatteryCapacity`, `Os`, `Ram`, `InterialMemorize`, `Resolution`, `ScreenSize`, `Camera`, `NFC`, `Wifi`, `Networks`) VALUES
(1, '2750 mAh', 'Ios', '1G', '128G', '1080x1920 px', '5,5 in', '12px', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(2, '2750 mAh', 'Ios\n', '1G', '64G', '1080x1920 px', '5.5 in', '12px', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(3, '2750 mAh', 'Ios\r\n', '1G', '128G', '1080x1920 px', '5.5 in', '12px', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(4, '2750 mAh', 'Ios\r\n', '1G', '128G', '1080x1920 px', '5.5 in', '12px', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(5, '1810 mAh', 'Ios\r\n', '1G', '16G', '750x1334 px', '4.7 in', '8px', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(6, '1810 mAh', 'Ios\r\n', '1G', '64G', '750x1334 px', '4.7 in', '8px', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(7, '1810 mAh', 'Ios\r\n', '1G', '128G', '750x1334 px', '4.7 in', '8px', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(8, '1800 mAh', 'BB 10', '2G', '16G', '768 x 1280 px', '4.2 in', '8.0 Mp', 'yes', '802.11 b/g/n', 'A-GPS\r\nGLONASS'),
(9, '3450 mAh', 'BB 10', '3G', '32G', '1440 px', '4.5 in', '13.0 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(10, '3000 mAh', 'Android', '4.0 GB', '32 GB', '1440 x 2560 px', '5.7 in', '16.0 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(11, '3000 mAh', 'Android', '4.0 GB', '32 GB', '1440 x 2560 px', '5.7 in', '16.0 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(12, '3000 mAh', 'Android', '4.0 GB', '32 GB', '1440 x 2560 px', '5.7 in', '16.0 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(13, '3000 mAh', 'Android', '3.0 GB', '32 GB', '1600x2560 px', '5.6 in', '16.0 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(14, '3000 mAh', 'Android', '3.0 GB', '32 GB', '1600x2560 px', '5.6 in', '16.0 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(15, '2930 mAh', 'Android', '3.0 GB', '16 GB', '1080 x 1920 px', '5.2 in', '20.7 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(16, '2930 mAh', 'Android', '3.0 GB', '32 GB', '1080 x 1920 px', '5.1 in', '23 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(17, '2930 mAh', 'Android', '2 GB', '16 GB', '1080 x 1920 px', '6 in', '13 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(18, '2930 mAh', 'Android', '3 GB', '32 GB', '1080 x 1920 px', '5.2 in', '20.7 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(19, '2930 mAh', 'Android', '3 GB', '32 GB', '1080 x 1920 px', '5.2 in', '20.7 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(20, '3100 mAh', 'Android', '3 GB', '16 GB', '1080 x 1920 px', '5.2 in', '20.7 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(21, '2840 mAh', 'Android', '3 GB', '32 GB', '1080 x 1920 px', '5.2 in', '20.7 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(22, '2840 mAh', 'Android', '2 GB', '16 GB', '1080 x 1920 px', '5 in', '20.7 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(23, '2800 mAh', 'Android', '2 GB', '16 GB', '1080 x 1920 px', '5 in', '13 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(24, '8820 mAh', 'iOS', '2.0 GB', '64 GB', '1536 x 2048 px', '9.7 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(25, '5124 mAh', 'iOS', '2.0 GB', '16 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', ''),
(26, '5124 mAh', 'iOS', '2.0 GB', '16 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(27, '5124 mAh', 'iOS', '2.0 GB', '16 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(28, '5124 mAh', 'iOS', '2.0 GB', '64 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(29, '5124 mAh', 'iOS', '2.0 GB', '128 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(30, '5124 mAh', 'iOS', '2.0 GB', '16 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', ''),
(31, '5124 mAh', 'iOS', '2.0 GB', '64 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', ''),
(32, '5124 mAh', 'iOS', '2.0 GB', '128 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', ''),
(34, '8820 mAh', 'iOS', '2.0 GB', '64 GB', '1536 x 2048 px', '9.7 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(35, '8820 mAh', 'iOS', '2.0 GB', '128 GB', '1536 x 2048 px', '9.7 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(36, '39.7', 'Mac os', '8 GB', '256GB PCIe', '2304 x 1440 Mp', '12 in', 'HD', 'no', '802.11 a/b/g/n/ac', 'no'),
(37, '39.7', 'Mac os', '8 GB', '256GB PCIe', '2304 x 1440 Mp', '12 in', 'HD', 'no', '802.11 a/b/g/n/ac', 'no'),
(38, '99.5 Watt-hour Lithium polymer', 'Mac os', '16GB – 1600Mhz – DDR3L Onboard', '512GB PCle', '1800 x 2880 Mp', '15.4 in', '720p FaceTime HD', 'no', '802.11 a/b/g/n/ac', 'no'),
(39, '74.9 Watt-hour Lithium polymer', 'Mac os', '8GB - 1866MHz - LPDDR3 Onboard', '512GB PCle', '2560 x 1600 Mp', '13.3 in', '720p FaceTime HD', 'no', '802.11 a/b/g/n/ac', 'no'),
(40, '38 Watt-hour Lithium Polymer', 'Mac os', '4GB 1600MHz LPDDR3 Onboard', '256GB PCIe', '1440 x 900 Mp', '13.3 in', '720p FaceTime HD', 'no', '802.11 a/b/g/n/ac', 'no'),
(41, '74.9 Watt-hour Lithium polymer', 'Mac os', '8GB - 1866MHz - LPDDR3 Onboard', '256GB PCIe', '2560 x 1600 Mp', '13.3 in', '720p FaceTime HD', 'no', '802.11 a/b/g/n/ac', 'no'),
(42, '38 Watt-hour Lithium Polymer', 'Mac os', '4GB 1600MHz LPDDR3 Onboard', '256GB PCIe', '1366 x 768 Mp', '11.6 in', '720p FaceTime HD', 'no', '802.11 a/b/g/n/ac', 'no'),
(56, '2300 mAh', 'Android 5.1 Lollipop', '4GB', '32GB', '720 x 1280 pixels', '4,6 in', 'Chính: 23.0 MP, phụ: 5.0 MP', 'yes', '802.11 a/b/g/n/ac', 'A-GPS GLONASS');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`ProductID` int(12) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductImage` varchar(255) NOT NULL,
  `ProductPrice` double(10,0) NOT NULL,
  `ProductIntro` text NOT NULL,
  `TypeId` int(11) NOT NULL,
  `IdBrand` int(12) NOT NULL,
  `Views` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductImage`, `ProductPrice`, `ProductIntro`, `TypeId`, `IdBrand`, `Views`) VALUES
(1, 'Apple iPhone 6S Plus 128GB', 'apple_iphone_6s_plus.png', 25510000, 'Máy mới 100% nguyên seal, chưa active.\r\n01 đổi 01 trong 03 ngày đầu.\r\nBảo hành 12 tháng tất cả các bộ phận, kể cả màn hình và mất nguồn.\r\nPhụ kiện bảo hành 30 ngày.\r\nPhụ kiện gồm: Cáp, Sạc, Tai nghe, Que lấy sim.\r\n(Chỉ áp dụng cho gói bảo hành 1 năm )', 1, 1, 0),
(2, 'Apple iPhone 6S Plus 64GB', 'apple_iphone_6s.png', 23310000, 'Máy mới 100% nguyên seal, chưa active.\r\n01 đổi 01 trong 03 ngày đầu.\r\nBảo hành 12 tháng tất cả các bộ phận, kể cả màn hình và mất nguồn.\r\nPhụ kiện bảo hành 30 ngày.\r\nPhụ kiện gồm: Cáp, Sạc, Tai nghe, Que lấy sim.\r\n(Chỉ áp dụng cho gói bảo hành 1 năm )', 1, 1, 0),
(3, 'Apple iPhone 6S Plus 16GB', 'apple_iphone_6s.png', 19810000, 'Máy mới 100% nguyên seal, chưa active.\r\n01 đổi 01 trong 03 ngày đầu.\r\nBảo hành 12 tháng tất cả các bộ phận, kể cả màn hình và mất nguồn.\r\nPhụ kiện bảo hành 30 ngày.\r\nPhụ kiện gồm: Cáp, Sạc, Tai nghe, Que lấy sim.\r\n(Chỉ áp dụng cho gói bảo hành 1 năm )', 1, 1, 0),
(4, 'Apple iPhone 6 Plus 128GB', 'apple_iphone_6.png', 18110000, 'Máy mới 100% nguyên seal, chưa active.\r\n01 đổi 01 trong 03 ngày đầu.\r\nBảo hành 12 tháng tất cả các bộ phận, kể cả màn hình và mất nguồn.\r\nPhụ kiện bảo hành 30 ngày.\r\nPhụ kiện gồm: Cáp, Sạc, Tai nghe, Que lấy sim.\r\n(Chỉ áp dụng cho gói bảo hành 1 năm )', 1, 1, 0),
(5, 'Apple iPhone 6 16GB', 'apple_iphone_6.png', 13610000, 'Máy mới 100% nguyên seal, chưa active.\r\n01 đổi 01 trong 03 ngày đầu.\r\nBảo hành 12 tháng tất cả các bộ phận, kể cả màn hình và mất nguồn.\r\nPhụ kiện bảo hành 30 ngày.\r\nPhụ kiện gồm: Cáp, Sạc, Tai nghe, Que lấy sim.\r\n(Chỉ áp dụng cho gói bảo hành 1 năm )', 1, 1, 0),
(6, 'Apple iPhone 6 64GB', 'apple_iphone_6.png', 15810000, 'Máy mới 100% nguyên seal, chưa active.\r\n01 đổi 01 trong 03 ngày đầu.\r\nBảo hành 12 tháng tất cả các bộ phận, kể cả màn hình và mất nguồn.\r\nPhụ kiện bảo hành 30 ngày.\r\nPhụ kiện gồm: Cáp, Sạc, Tai nghe, Que lấy sim.\r\n(Chỉ áp dụng cho gói bảo hành 1 năm )', 1, 1, 0),
(7, 'Apple iPhone 6 128GB', 'apple_iphone_6.png', 17910000, 'Máy mới 100% nguyên seal, chưa active.\r\n01 đổi 01 trong 03 ngày đầu.\r\nBảo hành 12 tháng tất cả các bộ phận, kể cả màn hình và mất nguồn.\r\nPhụ kiện bảo hành 30 ngày.\r\nPhụ kiện gồm: Cáp, Sạc, Tai nghe, Que lấy sim.\r\n(Chỉ áp dụng cho gói bảo hành 1 năm )', 1, 1, 0),
(8, 'BlackBerry Z10 STL-004', 'blackberry_z10.png', 2910000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: Sạc, cáp, tai nghe.', 1, 5, 0),
(9, 'Blackberry Passport (CTY)', 'blackberry_z10.png', 12310000, '- Sản phẩm là hàng mới 100% từ nhà phân phối chính thức Blackberry tại Việt Nam. Giá niêm yết ở trên đã bao gồm 10% VAT.\r\n- Sản phẩm được bảo hành theo chính sách của Blackberry Việt Nam. (12 tháng, phụ kiện 06 tháng).\r\n- Phụ kiện kèm theo sản phẩm gồm: cáp, sạc, tai nghe, sách hướng dẫn.', 1, 5, 0),
(10, 'Samsung Galaxy Note 5 32GB (Korea)', 'samsung_note5.png', 12540000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\n- Phụ kiện bao gồm: sạc, cáp, tai nghe, nút cao su tai nghe, sách hướng dẫn.', 1, 2, 0),
(11, 'Samsung Galaxy S6 Edge Plus 32GB (CTY)', 'samsung_s6.png', 18000000, 'Sản phẩm là hàng mới 100% từ nhà phân phối chính thức Samsung tại Việt Nam. Giá niêm yết ở trên đã bao gồm 10% VAT.\r\n- Sản phẩm được bảo hành theo chính sách của Samsung Việt Nam. (12 tháng, phụ kiện 06 tháng).\r\n- Phụ kiện kèm theo sản phẩm gồm: cáp, sạc, tai nghe, sách hướng dẫn.\r\n', 1, 2, 0),
(12, 'Samsung Galaxy Note 5 32GB Dual Sim', 'samsung_note5.png', 14610000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: sạc, cáp, tai nghe, nút cao su tai nghe, sách hướng dẫn.', 1, 2, 0),
(13, 'Samsung Galaxy Note Edge SCL24 (TRAY)', 'samsung_s6.png', 7960000, 'Máy mới 100%.\r\nPhụ kiện bao gồm: Cáp, Tai Nghe, Sạc Nhanh (Quick Charge).\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nLưu Ý: Sản phẩm không bao gồm Hộp (TRAY).', 1, 2, 0),
(14, 'Samsung Galaxy S6 Edge Plus (Korea)', 'samsung_s6.png', 14000000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: Hộp, Sạc, cáp, tai nghe, sách hướng dẫn.', 1, 2, 0),
(15, 'Sony Xperia Z3+', 'sony_xperia_z3_compact.png', 10560000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: sạc, cáp, tai nghe, sách hướng dẫn.', 1, 3, 0),
(16, 'Sony Xperia Z5 Dual (CTY)', 'sony_z5.png', 15310000, '- Sản phẩm là hàng mới 100% từ nhà phân phối chính thức Sony tại Việt Nam. Giá niêm yết ở trên đã bao gồm 10% VAT.\r\n- Sản phẩm được bảo hành theo chính sách của Sony Việt Nam. (12 tháng, phụ kiện 06 tháng).\r\n- Phụ kiện kèm theo sản phẩm gồm: cáp, sạc, tai nghe, sách hướng dẫn.\r\n', 1, 3, 0),
(17, 'Sony Xperia C5 Ultra Dual (CTY)', 'sony_c5.png', 7990000, '- Sản phẩm là hàng mới 100% từ nhà phân phối chính thức Sony tại Việt Nam. Giá niêm yết ở trên đã bao gồm 10% VAT.\r\n- Sản phẩm được bảo hành theo chính sách của Sony Việt Nam. (12 tháng, phụ kiện 06 tháng).\r\n- Phụ kiện kèm theo sản phẩm gồm: cáp, sạc, tai nghe, sách hướng dẫn.', 1, 3, 0),
(18, 'Sony Xperia Z3+ (CTY)', 'sony_z3+d.png', 15210000, 'Tai nghe Digital Noise Cancelling Headset MDR-NC31trị giá 1.190.000 VNĐ\r\nSạc nhanh Quick Charger UCH10 trị gía 690.000 VNĐ\r\nQuà tặng đặc biệt: bao da chính hãng Z3+ trị giá 1.500.000 VNĐ\r\nSố lượng có hạn ( Vui lòng liên hệ cửa hàng để biết thêm thông tin)', 1, 3, 0),
(19, 'Sony Xperia Z3+ E6533 Dual Sim', 'sony_z3+d.png', 11460000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: sạc, cáp, tai nghe, sách hướng dẫn.', 1, 3, 0),
(20, 'Sony Xperia Z3 Dual Sim', 'sony_z3+d.png', 9960000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: sạc, cáp, tai nghe, sách hướng dẫn.', 1, 3, 0),
(21, 'HTC One M9 (CTY)', 'htc_m9.png', 13510000, '- Sản phẩm là hàng mới 100% từ nhà phân phối chính thức của HTC tại Việt Nam. Giá niêm yết ở trên đã bao gồm 10% VAT.\r\n- Sản phẩm được bảo hành theo chính sách của HTC Việt Nam. (12 tháng, phụ kiện 06 tháng).\r\n- Phụ kiện kèm theo sản phẩm gồm: cáp, sạc, tai nghe, sách hướng dẫn.', 1, 4, 0),
(22, 'HTC One M8 Eye (CTY)', 'htc_m8.png', 8110000, '- Sản phẩm là hàng mới 100% từ nhà phân phối chính thức của HTC tại Việt Nam. Giá niêm yết ở trên đã bao gồm 10% VAT.\r\n- Sản phẩm được bảo hành theo chính sách của HTC Việt Nam. (12 tháng, phụ kiện 06 tháng).\r\n- Phụ kiện kèm theo sản phẩm gồm: cáp, sạc, tai nghe, sách hướng dẫn.', 1, 4, 0),
(23, 'HTC ONE E9', 'htc_e7.png', 6800000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\n- Phụ kiện bao gồm: Sạc, cáp, tai nghe.', 1, 4, 0),
(24, 'Apple iPad Air 2 4G 64GB Gold', 'apple_ipadair2.png', 11340000, 'Tặng: sạc, cáp chính hãng.\r\nTặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: iPad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm iPad mới 100%.', 2, 1, 0),
(25, 'Apple iPad Mini 4 WiFi (CTY)', 'apple_ipadmini_4.png', 10010000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 1, 0),
(26, 'Apple iPad Mini 4 4G (CTY)', 'apple_ipadmini_4.png', 12910000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 1, 0),
(27, 'Apple iPad Mini 4 4G 16GB', 'apple_ipadmini_4.png', 14260000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 1, 0),
(28, 'Apple iPad Mini 4 4G 64GB', 'apple_ipadmini_4.png', 14260000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 1, 0),
(29, 'Apple iPad Mini 4 4G 128GB', 'apple_ipadmini_4.png', 16860000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 1, 0),
(30, 'Apple iPad Mini 4 WiFi 16GB', 'apple_ipadmini_4.png', 9360000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 1, 0),
(31, 'Apple iPad Mini 4 WiFi 64GB', 'apple_ipadmini_4.png', 11360000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 1, 0),
(32, 'Apple iPad Mini 4 WiFi 128GB', 'apple_ipadmini_4.png', 13360000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 1, 0),
(34, 'Apple iPad Air 2 4G 64GB', 'apple_ipadair2.png', 13060000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: iPad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm iPad mới 100%.', 2, 1, 0),
(35, 'Apple iPad Air 2 4G 128GB', 'apple_ipadair2.png', 15860000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: iPad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm iPad mới 100%.\r\n', 2, 1, 0),
(36, 'Apple The New Macbook - MJY42 (Gray)', 'apple_macbook.png', 32160000, 'Máy mới 100%, nguyên seal, chưa Active.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: dây nguồn, sách hướng dẫn, thùng máy.', 3, 1, 0),
(37, 'Apple The New Macbook - MF855 (Sliver)', 'apple_macbook.png', 26860000, 'Máy mới 100%, nguyên seal, chưa Active.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: dây nguồn, sách hướng dẫn, thùng máy.', 3, 1, 0),
(38, 'Apple Macbook Pro 2015 - MJLT2', 'apple_macbook_pro.png', 49360000, 'Máy mới 100%, nguyên seal, chưa Active.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: dây nguồn, sách hướng dẫn, thùng máy.', 3, 1, 0),
(39, 'Apple Macbook Pro 2015 - MF841', 'apple_macbook_pro.png', 36260000, 'Máy mới 100%, nguyên seal, chưa Active.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: dây nguồn, sách hướng dẫn, thùng máy.', 3, 1, 0),
(40, 'Apple Macbook Air 2015 - MJVG2', 'apple_macbook_air.png', 24160000, 'Máy mới 100%, nguyên seal, chưa Active.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: dây nguồn, sách hướng dẫn, thùng máy.', 3, 1, 0),
(41, 'Apple Macbook Pro 2015 - MF839', 'apple_macbook_pro.png', 26360000, 'Máy mới 100%, nguyên seal, chưa Active.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: dây nguồn, sách hướng dẫn, thùng máy.', 3, 1, 0),
(42, 'Apple Macbook Air 2015 - MJVP2', 'apple_macbook_air.png', 22060000, 'Máy mới 100%, nguyên seal, chưa Active.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: dây nguồn, sách hướng dẫn, thùng máy.', 3, 1, 0),
(44, 'MagSafe To MagSafe 2 Converter', 'magesafe260w.jpg', 190000, 'Mới 100%, nguyên hộp, nguyên seal.\r\nBảo hành 30 ngày (1 đổi 1)', 4, 1, 0),
(45, 'Apple 85W MagSafe Power Adapter', 'magesafe260w.jpg', 1230000, 'Mới 100%, nguyên hộp, nguyên seal.\r\nBảo hành 30 ngày (1 đổi 1) ', 4, 1, 0),
(46, 'Camera Connection Kit', 'caplighhdmi.png', 610000, 'Mới 100%, nguyên hộp, nguyên seal.', 4, 1, 0),
(47, 'Lightning Digital AV Adapter', 'caplighhdmi.png', 890000, 'Mới 100%, nguyên hộp, nguyên seal.\r\nBảo hành 30 ngày (1 đổi 1)', 4, 1, 0),
(48, 'Tai nghe iPhone 5 Original (Fullbox)', 'tainghe.png', 560000, 'Mới 100%, nguyên hộp, nguyên seal.\r\nBảo hành 3 tháng 1 đổi 1', 4, 1, 0),
(49, 'Apple TV Gen 3', 'apple_tv.png', 2000000, 'Máy mới 100% nguyên seal, chưa kích hoạt.\r\n- Phụ kiện gồm: Cáp nguồn, điều khiển từ xa.', 4, 1, 0),
(50, 'Apple Magic Mouse', 'applemagic.png', 2000000, 'Mới 100% nguyên seal.', 4, 1, 0),
(52, 'Sony Xperia Z5 Dual Gold', 'sony-z5-dual.png', 16900000, 'Xperia Z5 Dual giúp bạn lưu lại những cơ hội chụp ảnh tuyệt vời nhất trong đời – trước khi bạn bỏ lỡ. Với tính năng Tự động lấy nét kép, điện thoại chụp ảnh đẹp nhất của chúng tôi là bậc thầy về tốc độ và độ chuẩn xác. Sở hữu 23 megapixel và khả năng thu phóng hình ảnh mạnh mẽ gấp năm lần, Xperia Z5 Dual có thể chụp lại những khoảng khắc chớp nhoáng nhất. Với độ rõ nét đáng kinh ngạc. Ở ngay lần thử đầu tiên.', 1, 3, 0),
(53, 'Sony Xperia Z5 Premium', 'sony-z5-premium.png', 19900000, 'Bạn hãy tưởng tượng tinh hoa công nghệ TV Sony nằm bên trong một chiếc điện thoại thông minh. Màn hình vô cùng sống động và sắc nét nằm ngay trong lòng bàn tay bạn. Khám phá Xperia Z5 Premium. Với màn hình Ultra HD 4K, chiếc điện thoại thông minh 5,5 inch này sở hữu độ phân giải gấp bốn lần Full HD cho trải nghiệm xem không gì sánh kịp.', 1, 3, 0),
(56, 'Sony Xperia Z5 Compact', 'sony-z5-compact.png', 16900000, 'Với Xperia Z5 Compact, điều cần quan tâm không chỉ là bạn có thể làm gì với điện thoại thông minh của mình. Mà là bạn có thể làm được những việc gì khác nữa. Điện thoại thông minh nhỏ gọn tốt nhất của chúng tôi tích hợp mọi tính năng của thiết bị lớn nhưng được thiết kế để vừa vặn hoàn hảo với cuộc sống thực tế. Cùng những màu sắc phù hợp với phong cách của bạn. Những cải tiến giúp loại bỏ mọi sự gián đoạn. Và thiết kế 4,6 inch cho bạn một kích cỡ hoàn hảo.', 1, 3, 0),
(57, 'Sony Xperia Z3 Compact', 'xperia-z3-compact.jpg', 8560000, 'Mỏng nhẹ gọn gàng nhưng lại mang trong mình những thông số phần cứng cao cấp nhất, đó là Sony Xperia Z3 Compact. Hãy cùng trải nghiệm cảm giác chụp ảnh chuyên nghiệp, lưu giữ từng khoảnh khắc của camera cao cấp 20.7MP, cả thế giới đều nằm trong ống kính G của bạn.', 1, 3, 0),
(58, 'Sony Xperia M5', 'xperia-m5.jpg', 9990000, 'Sony Xperia M5 sử dụng khung máy làm từ thép không gỉ giúp hạn chế được các tác hại do va đập, khung kéo sát với màn hình giúp phân tán lực tác động mà màn hình phải chịu khi rơi vỡ. Giống như hầu hết các dòng điện thoại Xperia mới hiện nay, M5 cũng được trang bị công nghệ chống nước và chống bụi dựa trên tiêu chuẩn IP65/68.', 1, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE IF NOT EXISTS `producttype` (
  `TypeId` int(11) NOT NULL,
  `TypeName` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`TypeId`, `TypeName`) VALUES
(1, 'SmartPhone'),
(2, 'Tablet'),
(3, 'Laptop'),
(4, 'Phụ Kiện');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`UserID` int(12) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` int(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `FullName`, `Email`, `Address`, `Phone`) VALUES
(3, 'vanvang', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyễn Văn Vang', 'vanvangnguyen@gmail.com', 'TP.HCM', 123456789),
(4, 'manhcuong', '02c75fb22c75b23dc963c7eb91a062cc', 'Vũ Mạnh Cường', 'manhcuongvu@gmail.com', 'Gò Vấp, TP.HCM', 966373737),
(5, 'nhathanh', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyễn Nhật Hạnh', 'nhathanh123@gmail.com', 'Phú Nhuận, TP.HCM', 967123789),
(6, 'congthang', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyễn Trần Công Thắng', 'congthang@gmail.com', 'Tân Phú, TP.HCM', 982345678),
(7, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'manhcuongvux', 'manhcuongvu@gmail.com', 'Sài Gòn', 966373737);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brandproduct`
--
ALTER TABLE `brandproduct`
 ADD PRIMARY KEY (`IdBrand`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
 ADD PRIMARY KEY (`OrderID`), ADD KEY `PKMA_ID` (`ProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`OrderID`), ADD UNIQUE KEY `Order_ID` (`OrderID`), ADD KEY `Order_ID_2` (`OrderID`), ADD KEY `User_ID` (`UserID`);

--
-- Indexes for table `productdetail`
--
ALTER TABLE `productdetail`
 ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`ProductID`), ADD KEY `TypeId` (`TypeId`), ADD KEY `IdBrand` (`IdBrand`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
 ADD PRIMARY KEY (`TypeId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brandproduct`
--
ALTER TABLE `brandproduct`
MODIFY `IdBrand` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
MODIFY `ContactID` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
MODIFY `OrderID` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `OrderID` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `ProductID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `UserID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `productdetail`
--
ALTER TABLE `productdetail`
ADD CONSTRAINT `productdetail_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`TypeId`) REFERENCES `producttype` (`TypeId`),
ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`IdBrand`) REFERENCES `brandproduct` (`IdBrand`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
