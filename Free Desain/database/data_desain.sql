-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 11:36 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_desain`
--
ALTER TABLE `data_desain`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `editor` (`editor`),
  ADD UNIQUE KEY `judul_desain` (`nama_desain`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_desain`
--
ALTER TABLE `data_desain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
