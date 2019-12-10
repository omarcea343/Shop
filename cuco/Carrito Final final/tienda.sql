-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 06:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tienda`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `descripcion` text NOT NULL,
  `existencias` int(10) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `nombre`, `precio`, `imagen`, `descripcion`, `existencias`) VALUES
(1, 'Iphone Blanco', 30000, 'https://www.costco.com.mx/medias/sys_master/products/h6a/h49/11306462412830.jpg', 'Color: Blanco \r\n32gb de memoria interna \r\nPantalla de 6\" \r\nCuatro camaras ', 5),
(2, 'Iphone Negro', 30000, 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-11-pro-select-2019-family?wid=882&amp;hei=1058&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1567812930312\r\n', 'Color: Negro\r\n32gb de memoria interna \r\nPantalla de 6\" \r\nCuatro camaras ', 5),
(3, 'Iphone Rosa', 30000, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRkltJN_WbrfQAtH1MM57PguArgI2clJMK0gtOPjeguYUavR2y8Q9VEdMFhDZsO5KpUWxDvk6s&usqp=CAc', 'Color: Rosa\r\n32gb de memoria interna \r\nPantalla de 6\" \r\nCuatro camaras ', 5),
(4, 'OnePlus', 13000, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTZaI_KF27ZYDqPK8fOfMocKo_hShVwfOCAta3j3KHHzS5obtgdzN3-2h6VunVYdOSxgilMPlFZ&usqp=CAc', 'Color: OnePlus\r\n128gb ROM\r\n8gb RAM\r\nPantalla de 6\" \r\nCuatro camaras \r\n', 5),
(5, 'Motorola ', 10000, 'https://andro4all.com/files/2019/02/Moto-Razr-2019-concepto.jpg', 'MOTOROLA negro RAZR 3 \r\n32gb de memoria interna \r\nPantalla de 6\" \r\nCuatro camaras ', 5),
(6, 'samsung', 17000, 'https://cdn1.coppel.com/images/catalog/pm/2171973-2.jpg', 'Color: Blanco \r\n32gb de memoria interna \r\nPantalla de 6\" AMOLED\r\n', 5),
(7, 'Xiaomi', 8000, 'https://images-na.ssl-images-amazon.com/images/I/61Lfaa153lL._SY355_.jpg', 'Color: negro\r\n256gb de memoria interna \r\nPantalla de 6\" AMOLED \r\nBateria de 5000mah', 5),
(8, 'Iphone Blanco', 30000, 'https://www.costco.com.mx/medias/sys_master/products/h6a/h49/11306462412830.jpg', 'Color: Blanco \r\n32gb de memoria interna \r\nPantalla de 6\" \r\nCuatro camaras ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblventas`
--

CREATE TABLE `tblventas` (
  `id` int(11) NOT NULL,
  `Clavetransaccion` varchar(250) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(5000) NOT NULL,
  `Total` decimal(60,2) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
