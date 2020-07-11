-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 02:11 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_flag` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `cdate`, `delete_flag`) VALUES
(23, 'admin', 'admin', 'admin', '2020-07-07 11:17:43', 0),
(37, 'Hadi', 'Hadi', 'hadi2000', '2020-07-07 21:13:48', 0),
(50, 'Wildan Sania', 'wildan', '123456', '2020-07-07 15:09:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_desain`
--

CREATE TABLE `data_desain` (
  `id` int(11) NOT NULL,
  `nama_desain` varchar(500) NOT NULL,
  `editor` varchar(125) NOT NULL,
  `link_download` varchar(500) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(2000) NOT NULL,
  `cdate` datetime NOT NULL,
  `delete_flag` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_desain`
--

INSERT INTO `data_desain` (`id`, `nama_desain`, `editor`, `link_download`, `deskripsi`, `foto`, `cdate`, `delete_flag`) VALUES
(15, 'Fighting Coronavirus', 'freepik', 'https://www.freepik.com/free-vector/fighting-coronavirus-concept_7335674.htm', '                        <p>Fighting Coronavirus adalah template poster yang diciptakan oleh freepik.\r\nAkun ini terdaftar di website Freepik dimana web ini berisi template template gambar\r\nyang siap kita download kapanpun.</p></br>\r\n\r\n<p>Desain ini dapat di aplikasikan pada desain poster anda, template desain ini memiliki lisensi gratis untuk pribadi dan bukan untuk di jual.</p></br>\r\n\r\n<p>Anda dapat post desain ini ke media sosial anda dengan mencantumkan nama desainner(editor)nya, jika anda upload di website maka sisipkan link editornya untuk memberi tahu bahwa desain ini bukan milik kita</p> </br>\r\n\r\n<p>Anda bisa Download template ini secara gratis dengan klik tulisan di bawah</p> \r\n</br>\r\n\r\nterimakasih sudah berkunjung, jangan lupa tinggalkan komentar di bawah :-)                                                                        ', '2.jpg', '2020-07-08 13:17:11', 0),
(18, 'Positive Lettering', 'pikisuperstar', 'https://www.freepik.com/free-vector/positive-lettering-background-concept_7259596.htm', 'Positive Lettering Background adalah template surat yang diciptakan oleh pikisuperstar.\r\nAkun ini terdaftar di website Freepik dimana web ini berisi template template gambar\r\nyang siap kita download kapanpun', '1.jpg', '2020-07-08 16:05:00', 0),
(20, 'Food Delivery Man', 'freepik.com', 'https://www.freepik.com/free-vector/hand-drawn-food-delivery-man_1285297.htm#page=2&position=28', '                        Food Delivery Man adalah template poster yang diciptakan oleh freepik.\r\nAkun ini terdaftar di website Freepik dimana web ini berisi template template gambar\r\nyang siap kita download kapanpun. Gambar ini menjelaskan tentang seorang laki - laki yang\r\nsedang mengiriman makanan untuk pemesan.\r\n</br>\r\n<p>Desain ini dapat di aplikasikan pada desain poster anda, template desain ini memiliki lisensi gratis untuk pribadi dan bukan untuk di jual.</p></br>\r\n\r\n<p>Anda dapat post desain ini ke media sosial anda dengan mencantumkan nama desainner(editor)nya, jika anda upload di website maka sisipkan link editornya untuk memberi tahu bahwa desain ini bukan milik kita</p> </br>\r\n\r\n<p>Anda bisa Download template ini secara gratis dengan klik tulisan di bawah</p> \r\n</br>\r\n\r\nterimakasih sudah berkunjung, jangan lupa tinggalkan komentar di bawah :-)                                                                                    ', '6.jpg', '2020-07-08 16:02:49', 0),
(23, 'Sport poster', '@pikisuperstar', 'https://www.freepik.com/free-vector/sport-poster-with-photo_7606207.htm#page=1&query=poster&position=0', '                                                            ', '5.jpg', '2020-07-08 16:34:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `log_aktivity`
--

CREATE TABLE `log_aktivity` (
  `id` int(20) NOT NULL,
  `keterangan` varchar(2000) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_aktivity`
--

INSERT INTO `log_aktivity` (`id`, `keterangan`, `cdate`) VALUES
(50, '', '2020-07-08 16:00:15'),
(51, '', '2020-07-08 16:01:14'),
(52, '', '2020-07-08 16:01:24'),
(53, '', '2020-07-08 16:02:28'),
(54, '', '2020-07-08 16:02:49'),
(55, '', '2020-07-08 16:05:00'),
(56, '', '2020-07-08 16:05:08'),
(57, '', '2020-07-08 16:15:19'),
(58, '', '2020-07-08 16:16:15'),
(59, '', '2020-07-08 16:16:26'),
(60, '', '2020-07-08 16:16:55'),
(61, '', '2020-07-08 16:17:04'),
(62, '', '2020-07-08 16:17:14'),
(63, '', '2020-07-08 16:17:23'),
(64, '', '2020-07-08 16:17:31'),
(65, '', '2020-07-08 16:17:39'),
(66, '', '2020-07-08 16:18:47'),
(67, '', '2020-07-08 16:22:24'),
(68, '', '2020-07-08 16:33:34'),
(69, '', '2020-07-08 16:33:43'),
(70, '', '2020-07-08 16:34:00'),
(71, '', '2020-07-08 16:35:56'),
(72, '', '2020-07-10 13:52:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_desain`
--
ALTER TABLE `data_desain`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `editor` (`editor`),
  ADD UNIQUE KEY `judul_desain` (`nama_desain`);

--
-- Indexes for table `log_aktivity`
--
ALTER TABLE `log_aktivity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `data_desain`
--
ALTER TABLE `data_desain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `log_aktivity`
--
ALTER TABLE `log_aktivity`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
