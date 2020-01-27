-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 08:20 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasulampua`
--

-- --------------------------------------------------------

--
-- Table structure for table `olah_data`
--

CREATE TABLE `olah_data` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `waktu` datetime(6) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `headline` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `olah_data`
--

INSERT INTO `olah_data` (`id`, `judul`, `waktu`, `penulis`, `headline`, `isi`, `gambar`) VALUES
(1, 'Persentase Penduduk Miskin Provinsi Sulawesi Tenggara pada September 2019 turun menjadi 11,04 persen', '2020-01-23 11:02:00.000000', 'sindi santija', 'Jumlah penduduk miskin (penduduk dengan pengeluaran per kapita per bulan dibawah Garis Kemiskinan) di Sulawesi Tenggara', 'Jumlah penduduk miskin (penduduk dengan pengeluaran per kapita per bulan dibawah Garis Kemiskinan) di Sulawesi Tenggara pada bulan September 2019 adalah 299,97 ribu orang (11,04 persen), berkurang sebesar 2,61 ribu orang dibandingkan dengan kondisi Maret 2019 yang berjumlah 302,58 ribu orang (11,24 persen)', 'alam.jpg'),
(2, 'Ekspor Sulawesi Tenggara November 2019 turun 56,79 persen. Sedangkan, Impor November 2019 naik 68,10 persen', '2020-01-23 11:04:00.000000', 'lan lan normawan', 'Nilai ekspor Sulawesi Tenggara pada November 2019 tercatat US$121,78 juta atau mengalami penurunan sebesar 56,79 persen dibanding ekspor Oktober 2019 yang tercatat US$281,84 juta. Sementara, volume ekspor November 2019 tercatat 1.195,97 ribu ton atau mengalami penurunan sebesar 67,59 persen dibanding ekspor Oktober 2019 yang tercatat 3.690,10 ribu ton.\r\n', 'Nilai ekspor Sulawesi Tenggara pada November 2019 tercatat US$121,78 juta atau mengalami penurunan sebesar 56,79 persen dibanding ekspor Oktober 2019 yang tercatat US$281,84 juta. Sementara, volume ekspor November 2019 tercatat 1.195,97 ribu ton atau mengalami penurunan sebesar 67,59 persen dibanding ekspor Oktober 2019 yang tercatat 3.690,10 ribu ton.\r\nTotal ekspor Sulawesi Tenggara selama Januari- November 2019 mencapai 14.129,21 ribu ton atau senilai US$1.669,77 juta.\r\nNilai impor Sulawesi Tenggara pada November 2019 tercatat US$341,77 juta atau mengalami kenaikan sebesar 68,10 persen dibanding impor Oktober 2019 yang tercatat US$203,32 juta. Sementara volume impor November 2019 tercatat 1.707,17 ribu ton atau mengalami kenaikan sebesar 574,83 persen dibanding impor Oktober 2019 yang tercatat 252,98 ribu ton.\r\nTotal impor Sulawesi Tenggara Januari-November 2019 mencapai 3.309,96 ribu ton atau senilai US$1.328,34 juta.', 'alam.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `olah_data`
--
ALTER TABLE `olah_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `olah_data`
--
ALTER TABLE `olah_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
