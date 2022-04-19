--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `pc_id` int(20) NOT NULL,
  `pc_name` varchar(120) NOT NULL,
  `pc_brand` varchar(100) NOT NULL,
  `pc_price` decimal(8,2) NOT NULL,
  `pc_ram` char(5) NOT NULL,
  `pc_storage` varchar(50) NOT NULL,
  `pc_camera` varchar(20) NOT NULL,
  `pc_image` varchar(100) NOT NULL,
  `pc_quantity` mediumint(5) NOT NULL,
  `pc_status` enum('0','1') NOT NULL COMMENT '0-active,1-inactive'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`pc_id`, `pc_name`, `pc_brand`, `pc_price`, `pc_ram`, `pc_storage`, `pc_image`, `pc_quantity`, `pc_status`) VALUES
(1, 'Laptop Acer Aspire 3 A315-41-R2C9 cu procesor AMD Ryzen™ 3 2200U pana la 3.40 GHz, 15.6", 4GB, 500GB, Radeon™ Vega 3 Graphics, Linux, Black', 'Acer', '1599,99', '4', '500','acer1.jpg', 10, '1'),
(2, 'Laptop Dell Inspiron 3567 cu procesor Intel® Core™ i3-7020U 2.30 GHz, Kaby Lake, 15.6", Full HD, 4GB, 1TB, DVD-RW, Intel® HD Graphics 620, Ubuntu Linux 16.04, Black', 'Dell', '1499,99', '4', '1 TB', 'dell1.jpg', 10, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`pc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `pc_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
