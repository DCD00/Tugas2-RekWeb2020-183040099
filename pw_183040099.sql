-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 08:06 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_183040099`
--

-- --------------------------------------------------------

--
-- Table structure for table `smartphone`
--

CREATE TABLE `smartphone` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `netcon` varchar(255) NOT NULL,
  `descreen` varchar(255) NOT NULL,
  `softhard` varchar(255) NOT NULL,
  `memory` varchar(55) NOT NULL,
  `camera` varchar(55) NOT NULL,
  `battery` varchar(40) NOT NULL,
  `features` varchar(50) NOT NULL,
  `harga` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smartphone`
--

INSERT INTO `smartphone` (`id`, `gambar`, `nama`, `netcon`, `descreen`, `softhard`, `memory`, `camera`, `battery`, `features`, `harga`) VALUES
(1, 'x7.png', 'Xiaomi Redmi 7a', 'Jaringan 3G, 4G, Wi-Fi, Bluetooth 4.2, Hotspot, GPS, USB micro', 'Material aluminum, Ukuran 159x76x8 mm, Berat 180 gram <br> Layar 6.26 inch, Resolusi 1520x720 Pixel, Technology screen IPS </br>', 'OS Android 9.0 Pie, Chipset Qualcomm Snapdragon 632', 'RAM 3 GB, Internal 32 GB, Eksternal up to 512 GB', 'Kamera belakang 12 MP dan 2 MP, Depan 8 ', 'Non-Removable 4000 mAh', 'Fingerprint, Accelerometer, Proximity, Compass', 'Rp 1.949.000'),
(2, 'M1.png', 'Asus Zenfone Max Pro M1', 'Jaringan 3G, 4G, Wi-Fi, Bluetooth 4.2, Hotspot, GPS, USB micro', 'Material aluminum, Ukuran 159x76x8 mm, Berat 180 gram <br>Layar 5.99 inch, Resolusi 2160x1080 Pxl, Technology screen IPS</br> ', 'OS Android 8.1 Oreo, Chipset Qualcomm Snapdragon 636', 'RAM 3 GB, Internal 32 GB, Eksternal up to 128 GB', 'Kamera belakang 13 MP dan 5 MP, Depan 8 ', 'Non-Removable 5000 mAh', 'Fingerprint, Accelerometer, Proximity, Compass', 'Rp 1.599.000'),
(3, 'f5.png', 'Oppo F5', 'Jaringan 3G, 4G, Wi-Fi', 'material alumunium', 'OS Android 7.0 Nouget', 'RAM 3 GB INTERNAL 32 GB ', '20 MP dan 12 MP', 'Non-Removable 4000 mAh', 'compas', 'Rp. 1.899.000'),
(4, 'y7.png', 'Huawei Y7 Pro', 'Jaringan 3G, 4G, Wi-Fi, Bluetooth 4.2, Hotspot, GPS', 'Material aluminum, Ukuran 159x77x8 mm, Berat 168 gram <br> Layar 6.26 inch, Resolusi 1520x720 Pixel, Technology screen IPS </br>', 'OS Android Version 8.1 Oreo, Chipset Qualcomm Snapdragon 450', 'RAM 3 GB, Internal 32 GB, Eksternal up to 512GB', 'Belakang 13 MP dan 2 MP, Depan 8 MP', 'Non-Removable 4000 mAh', 'Accelerometer, Proximity, Compass', 'Rp. 1.845.000'),
(5, 'y95.png', 'Vivo Y95', 'Jaringan 3G, 4G, Wi-Fi', 'material alumunium', 'OS Android 7.0 Nouget', 'RAM 3 GB INTERNAL 32 GB', 'Belakang 13 MP dan 2 MP, Depan 20 MP', 'Non-Removable 4000 mAh', 'compas', 'Rp. 2.215.000'),
(6, 'm20.png', 'Samsung Galaxy M20', 'Jaringan 3G, 4G Wi-Fi Bluetooth 5.0, GPS', 'Material aluminum, ukuran 156.5x74.5x9 mm, Berat 186 gram <br> Layar 6.3 inch, Resolusi 2340x1080 Pixel, Technology TFT </br>', 'OS Android Version 8.1 Oreo, Chipset Exynos 7904', 'RAM 3 GB, Internal 32 GB, Eksternal up to 512GB', 'Belakang 13 MP dan 5 MP, Depan 8 MP', 'Non-Removable 5000 mAh', 'Fingerprint, Accelerometer, Gyroscope, Proximity, ', 'Rp 2.499.000'),
(7, 'n5.png', 'Nokia 5', 'Jaringan 3G, 4G, Wi-Fi, Bluetooth 4.2, NFC, Hotspot, GPS', 'Material aluminum, Ukuran 149.7x72.5x8 mm, Berat 160 gram, Layar 5.2 inch, Resolusi 1280x720 Pixel, Technology screen IPS', 'OS Android Version 7.1 Nouget, Chipset Qualcomm Snapdragon 430', 'RAM 3 GB, Internal 16 GB, Eksternal up to 256GB', 'Belakang 13 MP, Depan 8 MP', 'Non-Removable 3000 mAh', 'Fingerprint, Accelerometer, Gyroscope, Proximity, ', 'Rp 1.465.000'),
(8, 's3.png', 'Infinix Hot S3X', 'Jaringan 3G, 4G, Wi-Fi, Bluetooth 5.0, Hotspot, GPS', 'Material Polikarbonat, Ukuran 156x75x8 mm, Berat 175 gram, Layar 6.2 inch, Resolusi 1440x720 Pixel, Technology screen IPS', 'OS Android Version 8.1 Oreo, Chipset Qualcomm Snapdragon 430', 'RAM 3 GB, Internal 32 GB, Eksternal up to 128GB', 'Belakang 13 MP dan 2 MP, Depan 16 MP', 'Non-Removable 4000 mAh', 'Fingerprint, Accelerometer, Gyroscope, Proximity, ', 'Rp 1.550.000'),
(9, 'i6.png', 'Iphone 6S', 'Jaringan 3G, 4G, Wi-Fi, Bluetooth 4.1, NFC, Hotspot, GPS', 'Material Metal, Ukuran 138x67x7 mm, Berat 143 gram <br> Ukuran Layar 4.7 inch, Resolusi 1334x750 Pixel, Technology screen IPS </br>', 'OS IOS 9, up to 10 Chipset Apple A9', 'RAM 2 GB, Internal 64 GB', 'Belakang 12 MP Flash, Depan 5 MP', 'Non-Removable 1715 mAh', 'Fingerprint, Accelerometer, Gyroscope, Proximity, ', 'Rp 2.850.000'),
(10, 'c1.png', 'Realme C1', 'Jaringan 3G, 4G, Wi-Fi, Bluetooth 4.1, Hotspot, GPS', 'Material Plastik, Ukuran 156x75.6x8 mm, Berat 168 gram <br> Layar 6.2 inch, Resolusi 1520X720 Pixel, Technology screen IPS </br>', 'OS Android Version 8.1 Oreo, Chipset Qualcomm Snapdragon 450', 'RAM 2 GB, Internal 16 GB, Eksternal Up to 256GB', 'Belakang 15 MP dan 2 MP, Depan 5 MP', 'Non-Removable 4230 mAh', 'Accelerometer, Proximity, Compass', 'Rp 1.399.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$g6yppWUAGKNzS1Vun21.xOXqjkTzQCgFyUaZW6fy0ZfFMSB6nF2a.'),
(2, 'ddd', '$2y$10$2N9XC.GoV7o8GEneRFBxMeKtSn7854tLAdxa3mDFciMTY/Lu0OQOe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `smartphone`
--
ALTER TABLE `smartphone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `smartphone`
--
ALTER TABLE `smartphone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
