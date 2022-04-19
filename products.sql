-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2019 at 08:16 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `cantitate` varchar(111) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name`, `description`, `price`, `cantitate`) VALUES
(1, 'Laptop Acer Aspire 3 A315-41-R2C9 cu procesor AMD Ryzen™ 3 2200U pana la 3.40 GHz, 15.6", 4GB, 500GB, Radeon™ Vega 3 Graphics, Linux, Black', 'Some random description', '1599.99', ''),
(2, 'Telefon mobil Allview X4 Soul Vision, Dual SIM, 32GB, 4G, Dark Blue', 'Some random description', '1699.99', ''),
(3, 'Telefon Mobil Apple iPhone X 256GB Silver + complet WOWFIXIT liquid screen protector', 'Some random description', '6558.99', ''),
(4, 'Carcasa Zalman T1 Plus, mATX Mini Tower, Negru', 'Some random description', '114.98', ''),
(5, 'Laptop Dell Inspiron 3567 cu procesor Intel® Core™ i3-7020U 2.30 GHz, Kaby Lake, 15.6", Full HD, 4GB, 1TB, DVD-RW, Intel® HD Graphics 620, Ubuntu Linux 16.04, Black', 'Some random description', '1499.99', ''),
(6, 'HDD WD Blue 1TB, 7200rpm, 64MB cache, SATA III', 'Some random description', '195.00', ''),
(7, 'Telefon mobil Huawei Mate 20 Pro, Dual SIM, 128GB, 6GB RAM, 4G, Twilight', 'Some random description', '4599.99', ''),
(8, 'Laptop Lenovo V130-15IGM cu procesor Intel® Celeron® N4000 pana la 2.60 GHz, 15.6", 4GB, 1TB, Intel® UHD Graphics 600, Free DOS, Iron Grey', 'Some random description', '899.99', ''),
(9, 'Procesor Intel Core i9-9900K Coffee Lake-R, 3.60GHz, Socket 1151, box - Chipset seria 300', 'Some random description', '2558.94', ''),
(10, 'Sistem Desktop PC Gaming Acer N50-600 cu procesor Intel® Core™ i3-8100 3.60 GHz, Coffee Lake, 8GB, 1TB, DVD-RW, NVIDIA GeForce GTX 1050 Ti 4GB, Free DOS', 'Some random description', '3799.99', ''),
(11, 'Sistem Desktop Dell OptiPlex 3060 MT cu procesor Intel® Core™ i5-8500 pana la 4.10 GHz, Coffee Lake, 8GB, 256GB SSD, Intel UHD Graphics 630, Microsoft Windows 10 Pro, Black', 'Some random description', '3422.99', ''),
(12, 'Sistem PC Lenovo Think Centre V530s SFF cu procesor Intel® Core™ i3-8100 3.60 GHz, Coffee Lake, 4GB, 1TB, Intel® UHD Graphics 630, Free DOS, Mouse + Tastatura', 'Some random description', '1793.81', ''),
(13, 'Placa de baza Gigabyte B450M DS3H, Socket AM4', 'Some random description', '340.91', ''),
(14, 'Memorie HyperX Predator Black 16GB, DDR4, 3200MHz, CL16, 1.35V, kit 2x8GB', 'Some random description', '724.00', ''),
(15, 'Solid state drive (SSD) Samsung 860 EVO, 250GB, 2.5", SATA III', 'Some random description', '289.99', ''),
(16, 'Placa de sunet ASUS Xonar AE, 7.1, PCIe', 'Some random description', '319.99', ''),
(17, 'Sursa nJoy Titan 600, 600W Real Power, PFC Activ, 80 Plus Bronze', 'Some random description', '199.99', ''),
(18, 'Televizor LED Smart LG, 108 cm, 43UK6950PLB, 4K Ultra HD', 'Some random description', '2299.99', ''),
(19, 'Televizor LED Smart Android Philips, 139 cm, 55PUS7303/12, 4K Ultra HD', 'Some random description', '2999.99', ''),
(20, 'Televizor QLED Smart Samsung, 123 cm, 49Q6FN, 4K Ultra HD', 'Some random description', '3299.99', ''),
(21, 'Placa video GIGABYTE GeForce® GTX 1060 WINDFORCE 2, 6GB GDDR5, 192-bit', 'Some random description', '1367.31', ''),
(22, 'Laptop ultraportabil Acer Swift 1 SF114-32 cu procesor Intel® Pentium® Silver N5000 pana la 2.70 GHz, Gemini Lake, 14", Full HD, 4GB, 128GB SSD, Intel® UHD Graphics 605, Linux, Pink', 'Some random description', '1849.99', ''),
(23, 'Telefon mobil Allview Soul X5 Pro, Dual SIM, 32GB, 4G, Black', 'Some random description', '1149.99', ''),
(24, 'Telefon mobil Apple iPhone 6S, 16GB, Rose Gold', 'Some random description', '1979.00', ''),
(25, 'Carcasa Segotep Racing, ATX Mid Tower, Negru', 'Some random description', '102.00', ''),
(26, 'Laptop Dell Inspiron 5570 cu procesor Intel® Core™ i5-8250U pana la 3.40 GHz, Kaby Lake R, 15.6", Full HD, 8GB, 256GB SSD, AMD Radeon 530 4GB, Linux, Silver, Backlit', 'Some random description', '2899.99', ''),
(27, 'Hard disk intern Apacer SSD AS340 PANTHER 120GB 2.5'' SATA3 6GB/s, 550/550 MB/s', 'Some random description', '115.12', ''),
(28, 'Telefon mobil Huawei P Smart, Dual SIM, 32GB, 4G, Blue', 'Some random description', '769.00', ''),
(29, 'Laptop Lenovo V130-15IKB cu procesor Intel® Core™ i3-6006U 2.00 GHz, Skylake, 15.6", Full HD, 4GB, 1TB, AMD Radeon 530 2GB, Free DOS, Iron Grey', 'Some random description', '1549.94', ''),
(30, 'Procesor AMD Ryzen 5 2600, 3.9GHz, 19MB Socket AM4, Wraith Stealth cooler', 'Some random description', '829.99', ''),
(31, 'Sistem Gaming PC Desktop Acer Predator Orion 3000 cu procesor Intel® Core™ i7-8700 pana la 4.60 GHz, Coffee Lake, 16GB, 1TB + 256GB SSD, DVD-RW, NVIDIA GeForce GTX 1060 6GB, Endless OS, Black, Mouse + Tastatura', 'Some random description', '8299.99', ''),
(32, 'Sistem Desktop Dell OptiPlex 3060 SFF cu procesor Intel® Core™ i5-8500 pana la 4.10 GHz, Coffee Lake, 8GB, 256GB SSD, Intel UHD Graphics 630, Linux, Black', 'Some random description', '2499.99', ''),
(33, 'Sistem Desktop PC Lenovo IdeaCentre 510-15ICB cu procesor Intel® Core™ i5-8400, 2.8GHz, Coffee Lake, 8GB, 1TB HDD, DVD-RW, AMD Radeon RX 560 4GB, Free DOS, Black, Mouse + Tastatura', 'Some random description', '2949.99', ''),
(34, 'Placa de baza MSI X470 GAMING PLUS, Socket AM4', 'Some random description', '799.99', ''),
(35, 'Memorie ADATA XPG Spectrix D41, 8GB, DDR4, 3600MHz, CL17, RGB, Titanium Grey', 'Some random description', '379.99', ''),
(36, 'Solid-State Drive (SSD) Gigabyte, 120GB, 2.5", SATA III', 'Some random description', '121.23', ''),
(37, 'Placa de sunet Asus XONAR_DG', 'Some random description', '132.09', ''),
(38, 'Sursa Inter-Tech SL-500K, 500W', 'Some random description', '289.99', ''),
(39, 'Televizor OLED Smart LG, 139 cm, OLED55B8PLA, 4K Ultra HD', 'Some random description', '6499.99', ''),
(40, 'Televizor LED Smart Philips, 139 cm, 55PUS6703/12, 4K Ultra HD', 'Some random description', '2999.99', ''),
(41, 'Televizor LED Smart Samsung, 123 cm, 49NU7102, 4K Ultra HD', 'Some random description', '1899.99', ''),
(42, 'Placa video MSI GeForce® GTX 1050 Ti GAMING X, 4GB GDDR5, 128-bit', 'Some random description', '899.99', ''),
(43, 'Desktop Gaming Lenovo Legion C530-19ICB cu procesor Intel® Core™ i7-8700 3.2GHz, Coffee Lake, 8GB, 1TB + 128GB SSD, nVIDIA GeForce GTX 1060 6GB, Free DOS, Mouse + Tastatura', 'Some random description', '5299.99', ''),
(44, 'Placa de baza ASUS H110M-K, Socket 1151 (DDR4)', 'Some random description', '279.99', ''),
(45, 'Memorie ADATA XPG Gammix D30, 8GB, DDR4, 3200MHz, CL16', 'Some random description', '304.94', ''),
(46, 'Solid State Drive (SSD) Teclast, 120GB, 2.5"', 'Some random description', '88.31', ''),
(47, 'Sound stick USB 2.0 Logilink UA0078, 7.1 Sound Effect', 'Some random description', '35.80', ''),
(48, 'Sursa Asus ROG Thor, 1200W Platinum, Aura Sync, OLED display', 'Some random description', '1989.53', ''),
(49, 'Televizor LED Smart LG, 164 cm, 65UK6470PLC, 4K Ultra HD', 'Some random description', '4499.99', ''),
(50, 'Televizor Smart Android Philips, 164 cm, 65PUS7303/12, 4K Ultra HD', 'Some random description', '5183.99', ''),
(51, 'Televizor Smart Android LED Sony BRAVIA, 123.2 cm, 49XF8096, 4K Ultra HD', 'Some random description', '3399.99', ''),
(52, 'Placa video GIGABYTE GeForce® GT 710, 2GB DDR3, 64-bit', 'Some random description', '246.55', ''),
(53, 'Laptop Gaming Acer Nitro 5 AN515-52-55Z3, Intel® Core™ i5-8300H, 8GB, SSD 256GB, nVIDIA GTX 1050 4GB', 'Some random description', '3399.99', ''),
(54, 'Telefon mobil Allview X4 Soul Infinity Z, Dual SIM, 32GB, 4G, Steel Gray', 'Some random description', '749.99', ''),
(55, 'Telefon mobil Apple iPhone 5S, 16GB, Gold', 'Some random description', '900.00', ''),
(56, 'Carcasa Segotep Racing, ATX Mid Tower, Negru', 'Some random description', '119.99', ''),
(57, 'Laptop Dell Inspiron 5770 cu procesor Intel® Core™ i5-8250U pana la 3.40 GHz, Kaby Lake R, 17.3", Full HD, 8GB, 1TB + 128GB SSD, AMD Radeon 530 4GB, FPR, Linux, Silver', 'Some random description', '3549.99', ''),
(58, 'Hard disk WD Red Pro 8TB SATA-III 7200RPM 256MB', 'Some random description', '1749.00', ''),
(59, 'Telefon mobil Huawei P10, Dual Sim, 64GB, 4G, Prestige Gold', 'Some random description', '1844.50', ''),
(60, 'Laptop Lenovo IdeaPad 330-15IKB cu procesor Intel® Core™ i5-8250U pana la 3.40 GHz, Kaby Lake R, 15.6", Full HD, 8GB, 256GB SSD, Intel® UHD Graphics 620, Free DOS, Mid Night Blue', 'Some random description', '2399.99', ''),
(61, 'Procesor AMD Ryzen 3 2200G, 3.7 GHz, Socket AM4', 'Some random description', '495.00', ''),
(62, 'Sistem Desktop PC Gaming Acer GX-281 cu procesor AMD RYZEN 5 1600 3.20 GHz, 8GB, 1TB, DVD-RW, nVIDIA GeForce GTX 1050 Ti 4GB, Endless OS, Mouse + Tastatura', 'Some random description', '4199.00', ''),
(63, 'Sistem Desktop PC Dell Vostro 3268 SFF cu procesor Intel® Core™ i5-7400 3.0 GHz, Kaby Lake, 4GB, 1TB, DVD-RW, Intel HD Graphics 630, Microsoft Windows 10 Pro', 'Some random description', '2599.99', ''),
(64, 'Placa de baza MSI X470 GAMING PLUS, Socket AM4', 'Some random description', '799.99', '');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
