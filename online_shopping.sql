-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 02, 2024 lúc 11:20 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `online_shopping`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `Cat_ID` varchar(10) NOT NULL,
  `Cat_Name` varchar(30) NOT NULL,
  `Cat_Des` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`, `Cat_Des`) VALUES
('cr1', 'car', 'Nice'),
('td1', 'teddy', 'good');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `CustName` varchar(30) NOT NULL,
  `gender` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CusDate` int(11) NOT NULL,
  `CusMonth` int(11) NOT NULL,
  `CusYear` int(11) NOT NULL,
  `SSN` varchar(10) DEFAULT NULL,
  `ActiveCode` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`Username`, `Password`, `CustName`, `gender`, `Address`, `telephone`, `email`, `CusDate`, `CusMonth`, `CusYear`, `SSN`, `ActiveCode`, `state`) VALUES
('lethinh', 'e10adc3949ba59abbe56e057f20f883e', 'Le Phuc Thinh', 0, 'can', '0763388757', 'lethinhqw@gmail,com', 13, 8, 2003, '', '', 0),
('phucthinh', 'e10adc3949ba59abbe56e057f20f883e', 'Le Phuc Thinh', 0, 'C', '0763388757', 'thinhle@gmail.com', 8, 2, 2020, '', '', 0),
('Thinh', 'Thinh@0310', 'Thinh', 0, 'ct', '0763388757', 'thinh@gmail.com', 9, 8, 2001, '', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `OrderID` varchar(6) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `DeliveryDate` datetime NOT NULL,
  `Delivery_loca` varchar(200) NOT NULL,
  `Payment` int(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `Product_ID` varchar(10) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `oldPrice` decimal(12,2) NOT NULL,
  `SmallDesc` varchar(1000) NOT NULL,
  `DetailDesc` text NOT NULL,
  `ProDate` datetime NOT NULL,
  `Pro_qty` int(11) NOT NULL,
  `Pro_image` varchar(200) NOT NULL,
  `Cat_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Price`, `oldPrice`, `SmallDesc`, `DetailDesc`, `ProDate`, `Pro_qty`, `Pro_image`, `Cat_ID`) VALUES
('car1', 'car 1', 200, 0.00, 'Nice', '<p>\r\n	small</p>\r\n', '2023-10-24 07:39:11', 1, 'car1.jpg', 'cr1'),
('car2', 'car 2', 200, 0.00, 'Nice', '<p>\r\n	small</p>\r\n', '2023-10-24 07:39:55', 1, 'car2.jpg', 'cr1'),
('car3', 'car 3', 200, 0.00, 'Nice', '<p>\r\n	small</p>\r\n', '2023-10-24 07:40:32', 1, 'car3.jpg', 'cr1'),
('car4', 'car 4', 200, 0.00, 'Nice', '<p>\r\n	big</p>\r\n', '2023-10-24 07:41:09', 1, 'car4.jpg', 'cr1'),
('car5', 'car 5', 300, 0.00, 'Nice', '<p>\r\n	big</p>\r\n', '2023-10-24 07:41:47', 1, 'car5.jpg', 'cr1'),
('car6', 'car 6', 300, 0.00, 'Nice', '<p>\r\n	small</p>\r\n', '2023-10-24 07:42:29', 1, 'car6.jpg', 'cr1'),
('car7', 'car 7', 150, 0.00, 'Nice', '<p>\r\n	big</p>\r\n', '2023-10-24 07:43:05', 1, 'car7.jpg', 'cr1'),
('car8', 'car 8', 200, 0.00, 'Nice', '<p>\r\n	small</p>\r\n', '2024-04-02 11:01:24', 2, 'car1.jpg', 'cr1'),
('teddy1', 'panda', 150, 0.00, 'Good', '<p>\r\n	medium</p>\r\n', '2023-10-24 07:27:36', 2, 'tedy1.jpg', 'td1'),
('teddy10', 'teddy bear 3', 200, 0.00, 'Good', '<p>\r\n	small</p>\r\n', '2023-10-24 07:37:18', 1, 'tedy10.jpg', 'td1'),
('teddy2', 'Dog', 150, 0.00, 'Good', '<p>\r\n	medium</p>\r\n', '2023-10-24 07:29:27', 1, 'tedy2.jpg', 'td1'),
('teddy3', 't-rex', 200, 0.00, 'Good', '<p>\r\n	big</p>\r\n', '2023-10-24 07:30:57', 1, 'tedy5.jpg', 'td1'),
('teddy4', 'dinosaurus', 150, 0.00, 'Good', '<p>\r\n	big</p>\r\n', '2023-10-24 07:32:03', 1, 'tedy3.jpg', 'td1'),
('teddy5', 'teddy long', 200, 0.00, 'Good', '<p>\r\n	big</p>\r\n', '2023-10-24 07:33:17', 1, 'tedy4.jpg', 'td1'),
('teddy6', 'dog 2', 150, 0.00, 'Good', '<p>\r\n	medium</p>\r\n', '2023-10-24 07:34:01', 1, 'tedy6.jpg', 'td1'),
('teddy7', 'robot', 300, 0.00, 'Good', '<p>\r\n	small</p>\r\n', '2023-10-24 07:35:12', 1, 'tedy7.jpg', 'td1'),
('teddy8', 'teddy bear', 150, 0.00, 'Good', '<p>\r\n	big</p>\r\n', '2023-10-24 07:36:02', 1, 'tedy8.jpg', 'td1'),
('teddy9', 'teddy bear 2', 150, 0.00, 'Good', '<p>\r\n	small</p>\r\n', '2023-10-24 07:36:40', 1, 'tedy9.jpg', 'td1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Username`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Cat_ID` (`Cat_ID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`Username`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `cat_pro` FOREIGN KEY (`Cat_ID`) REFERENCES `category` (`Cat_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
