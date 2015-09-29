-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 27. September 2015 jam 17:53
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sinau`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(250) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `nama`, `password`, `email`, `photo`) VALUES
(1, 'nddiett', 'Andita Mega Wahyudi', 'andita', 'nddiettmega@gmail.com', ''),
(2, 'teteh', 'Andita Mega Wahyudi', 'geulis', 'sigeulis@yahoo.com', 'img.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `judul` varchar(100) NOT NULL,
  `ringkasan` varchar(100) NOT NULL,
  `news` text NOT NULL,
  `gambar_news` varchar(250) NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id_news`, `tanggal`, `judul`, `ringkasan`, `news`, `gambar_news`) VALUES
(1, '2015-09-27', 'Semangat Belajar', 'Karena keinginan yang hebat dan kuat dari para mahasiswa untuk bisa menguasai pemrograman java ini, ', 'Karena keinginan yang hebat dan kuat dari para mahasiswa untuk bisa menguasai pemrograman java ini, mereka sangat antusias ketika sedang berada di kelas,Semua materi yang diberikan Pak Isa mereka perhatikan dan mereka pahami, apabila waktu kelas sudah habis, mereka melanjutkannya di luar kelas, demi keinginan untuk faham.Semangat para mahasiswa ini sungguh sangat luar biasa, patut untuk dimiliki oleh seluruh jiwa para mahasiswa di IndonesiSemangat :)', 'Pusing Coy.jpg'),
(2, '0000-00-00', 'Kelas Bahasa Inggris', 'Akan dibuka kelas bahasa inggris, ide ini berawal dari banyaknya syntak atau kode pemrograman menggu', 'Akan dibuka kelas bahasa inggris, ide ini berawal dari banyaknya syntak atau kode pemrograman menggunakan bahasa inggris, sehingga mengharuskan mahasiswanya mahir dalam berbahasa inggris,\r\nkarena itulan akan dibuka kelas bahasa inggris yang sampai saat ini masih di musyawarahkan bagaimana bagaimana nya \r\nSemoga lancar ya', 'gus dur.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opini`
--

CREATE TABLE IF NOT EXISTS `opini` (
  `id_opini` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `opini` text NOT NULL,
  `photo` varchar(250) NOT NULL,
  PRIMARY KEY (`id_opini`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `opini`
--

INSERT INTO `opini` (`id_opini`, `nama`, `opini`, `photo`) VALUES
(1, 'Andita Mega Wahyudi', 'Sinau Academy paling TOP BGT !!', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id_profil` int(10) NOT NULL AUTO_INCREMENT,
  `judul_profil` varchar(100) NOT NULL,
  `prakata` text NOT NULL,
  `gambar_profil` varchar(250) NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `judul_profil`, `prakata`, `gambar_profil`) VALUES
(1, 'Tentang Sinau Academy', 'SINAU ACADEMY berdiri atas dasar keinginan yang kuat dari para mahasiswa Cikarang untuk mendalami pemrograman JAVA.\r\nDidirikan oleh salah satu dosen di Cikarang yaitu Pak Avif, tempat belajar ini semakin didukung dan di ikuti banyak mahasiswa dari Cikarang, Selain itu pengajar yang sangat handal dan ahli dalam programming Java ini juga menjadi pemicu mahasiswa untuk lebih bisa menguasai Programming Java ', 'ksdfg.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `id_sponsor` int(10) NOT NULL AUTO_INCREMENT,
  `nama_sponsor` varchar(100) NOT NULL,
  `gambar_sponsor` varchar(250) NOT NULL,
  PRIMARY KEY (`id_sponsor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
