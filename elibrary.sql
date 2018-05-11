-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 05:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `username` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `stat` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`username`, `pass`, `nama`, `telepon`, `alamat`, `stat`) VALUES
('fer', '202cb962ac59075b964b07152d234b70', 'Ferdian', '0822222', 'pelosok', 'usr'),
('gopal', 'e10adc3949ba59abbe56e057f20f883e', 'Naofal Leo', '08112222', 'pelosok', 'usr'),
('JL', '81dc9bdb52d04dc20036dbd8313ed055', 'Joshua Laurich', '08999999999', 'Jl ajah', 'adm'),
('jy', '827ccb0eea8a706c4c34a16891f84e7b', 'Jason Yehezkiel', '081111111111', 'Jl Pasadena', 'adm'),
('Kebin', '501c2037022ef6b5d9ef2f1c1ea329ce', 'Kevin', '1234', 'Jl pasirkoja', 'adm'),
('kikil', '41d96a32a1ba29a6b996e0ae515c4c60', 'Yehezkiel Rusli', '0813944667204', 'Jl Kopo no 341', 'adm'),
('uname1', 'a722c63db8ec8625af6cf71cb8c2d939', 'nama1', 'phone1', 'alamat1', 'usr'),
('uname10', 'a3224611fd03510682690769d0195d66', 'nama10', 'phone10', 'alamat10', 'usr'),
('uname11', '0102812fbd5f73aa18aa0bae2cd8f79f', 'nama11', 'phone11', 'alamat11', 'usr'),
('uname12', '0bd0fe6372c64e09c4ae81e056a9dbda', 'nama12', 'phone12', 'alamat12', 'usr'),
('uname13', 'c868bff94e54b8eddbdbce22159c0299', 'nama13', 'phone13', 'alamat13', 'usr'),
('uname14', 'd1f38b569c772ebb8fa464e1a90c5a00', 'nama14', 'phone14', 'alamat14', 'usr'),
('uname15', 'b279786ec5a7ed00dbe4d3fe1516c121', 'nama15', 'phone15', 'alamat15', 'usr'),
('uname16', '66c99bf933f5e6bf3bf2052d66577ca8', 'nama16', 'phone16', 'alamat16', 'usr'),
('uname17', '6c2a5c9ead1d7d6ba86c8764d5cad395', 'nama17', 'phone17', 'alamat17', 'usr'),
('uname18', '64152ab7368fc7ca6b3ef6b71e330b86', 'nama18', 'phone18', 'alamat18', 'usr'),
('uname19', '1f61b744f2c9e8f49ae4c4965f39963f', 'nama19', 'phone19', 'alamat19', 'usr'),
('uname2', 'c1572d05424d0ecb2a65ec6a82aeacbf', 'nama2', 'phone2', 'alamat2', 'usr'),
('uname20', '90bfa11df19a9b9d429ccfa6997104df', 'nama20', 'phone20', 'alamat20', 'usr'),
('uname21', '5cddd1f7857fd4ab8095f676fcf88835', 'nama21', 'phone21', 'alamat21', 'usr'),
('uname22', 'b9974191c2e2806abb0ed0fe229ca0f6', 'nama22', 'phone22', 'alamat22', 'usr'),
('uname23', 'b9b09ad3b376b828898d171e1cc2e05b', 'nama23', 'phone23', 'alamat23', 'usr'),
('uname24', '87de23031d30a01efbb97ab885de862b', 'nama24', 'phone24', 'alamat24', 'usr'),
('uname25', '41e4652a622b10077ff4c22717dc57fd', 'nama25', 'phone25', 'alamat25', 'usr'),
('uname26', 'ea8852d0353318fdf7c0fa2769fe2c35', 'nama26', 'phone26', 'alamat26', 'usr'),
('uname27', '713fdc6c473ce5e66a6276686a3c745f', 'nama27', 'phone27', 'alamat27', 'usr'),
('uname28', '421b66e92350b35dc2e8c67948b1eb74', 'nama28', 'phone28', 'alamat28', 'usr'),
('uname29', '6cf1cd514774dd611a9a07ff764f3324', 'nama29', 'phone29', 'alamat29', 'usr'),
('uname3', '3afc79b597f88a72528e864cf81856d2', 'nama3', 'phone3', 'alamat3', 'usr'),
('uname30', '60d589174ca2b89351a41d90a8c9c2cf', 'nama30', 'phone30', 'alamat30', 'usr'),
('uname31', 'd111fad6810cfa1a59069cebd3ad85c4', 'nama31', 'phone31', 'alamat31', 'usr'),
('uname32', 'a0ec99b64a6cb5129ec685b0c49cca44', 'nama32', 'phone32', 'alamat32', 'usr'),
('uname33', '7a33c0fc3823abdb9ec8b761d8268c33', 'nama33', 'phone33', 'alamat33', 'usr'),
('uname34', '9e8843837f5c8c0a1c8b4d662c3f17ed', 'nama34', 'phone34', 'alamat34', 'usr'),
('uname35', '9c840fa2785637c170c854d2fd449569', 'nama35', 'phone35', 'alamat35', 'usr'),
('uname36', '8906431425b6a2e55bf7805f09f3acf4', 'nama36', 'phone36', 'alamat36', 'usr'),
('uname37', '3b2eb393f7753a761bbc94645e16fbe8', 'nama37', 'phone37', 'alamat37', 'usr'),
('uname38', '985982a99954f66ad4f64a719b83f5bb', 'nama38', 'phone38', 'alamat38', 'usr'),
('uname39', '4cfe645aadbf4dc06f93db8369ce7e4e', 'nama39', 'phone39', 'alamat39', 'usr'),
('uname4', 'fc2921d9057ac44e549efaf0048b2512', 'nama4', 'phone4', 'alamat4', 'usr'),
('uname40', 'a2d974c9e262fe021854b6bc2f68f0e1', 'nama40', 'phone40', 'alamat40', 'usr'),
('uname41', '081c83bb29106f359a14c130c9c62037', 'nama41', 'phone41', 'alamat41', 'usr'),
('uname42', 'a1ee851405ed0cb0aaac4b981d392f85', 'nama42', 'phone42', 'alamat42', 'usr'),
('uname43', '48ffa8152062285137eb997803989d6e', 'nama43', 'phone43', 'alamat43', 'usr'),
('uname44', 'bb0c54f71b801c050d54cdfd0c0048aa', 'nama44', 'phone44', 'alamat44', 'usr'),
('uname45', '60e1d01d8141ebbc34fa875d60408b50', 'nama45', 'phone45', 'alamat45', 'usr'),
('uname46', '4798f8bbc1b59a99929570bc86708d6e', 'nama46', 'phone46', 'alamat46', 'usr'),
('uname47', '7b94cbbd016561fc0aaf6f2605dfaf0f', 'nama47', 'phone47', 'alamat47', 'usr'),
('uname48', '2ec9a8f824cb94b93221f784b64cebc1', 'nama48', 'phone48', 'alamat48', 'usr'),
('uname49', 'f1d2da0fc31c0241c64cadb055619fec', 'nama49', 'phone49', 'alamat49', 'usr'),
('uname5', 'd35f6fa9a79434bcd17f8049714ebfcb', 'nama5', 'phone5', 'alamat5', 'usr'),
('uname50', '1b5434e51613f5776d6d01401ae66810', 'nama50', 'phone50', 'alamat50', 'usr'),
('uname6', 'e9568c9ea43ab05188410a7cf85f9f5e', 'nama6', 'phone6', 'alamat6', 'usr'),
('uname7', '8c96c3884a827355aed2c0f744594a52', 'nama7', 'phone7', 'alamat7', 'usr'),
('uname8', 'ccd3cd18225730c5edfc69f964b9d7b3', 'nama8', 'phone8', 'alamat8', 'usr'),
('uname9', 'c28cce9cbd2daf76f10eb54478bb0454', 'nama9', 'phone9', 'alamat9', 'usr');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `judul` varchar(20) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `tahun` int(4) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`judul`, `pengarang`, `tahun`, `penerbit`, `code`) VALUES
('Pelangi-Pelangi', 'Adam', 2012, 'Gramedia', 1),
('Topi Saya Bundar', 'Kak Sur', 1997, 'Gramedia', 2),
('PBW', 'Ci Joane', 2018, 'UNPAR', 3),
('aku bahagia', 'ccc', 1000, 'rumah', 4),
('buku1', 'pengarang1', 2011, 'penerbit1', 5),
('buku1', 'pengarang1', 2011, 'penerbit1', 6),
('buku1', 'pengarang1', 2011, 'penerbit1', 7),
('buku1', 'pengarang1', 2011, 'penerbit1', 8),
('buku2', 'pengarang2', 2011, 'penerbit2', 9),
('buku3', 'pengarang3', 2011, 'penerbit3', 10),
('buku4', 'pengarang4', 2011, 'penerbit4', 11),
('buku5', 'pengarang5', 2011, 'penerbit5', 12),
('buku6', 'pengarang6', 2011, 'penerbit6', 13),
('buku7', 'pengarang7', 2011, 'penerbit7', 14),
('buku8', 'pengarang8', 2011, 'penerbit8', 15),
('buku9', 'pengarang9', 2011, 'penerbit9', 16),
('buku10', 'pengarang10', 2011, 'penerbit10', 17),
('buku11', 'pengarang11', 2011, 'penerbit11', 18),
('buku12', 'pengarang12', 2011, 'penerbit12', 19),
('buku13', 'pengarang13', 2011, 'penerbit13', 20),
('buku14', 'pengarang14', 2011, 'penerbit14', 21),
('buku15', 'pengarang15', 2011, 'penerbit15', 22),
('buku21', 'pengarang21', 2517, 'penerbit21', 23),
('buku22', 'pengarang22', 2517, 'penerbit22', 24),
('buku23', 'pengarang23', 2517, 'penerbit23', 25),
('buku24', 'pengarang24', 2517, 'penerbit24', 26),
('buku25', 'pengarang25', 2517, 'penerbit25', 27),
('buku21', 'pengarang21', 2517, 'penerbit21', 28),
('buku22', 'pengarang22', 2517, 'penerbit22', 29),
('buku23', 'pengarang23', 2517, 'penerbit23', 30),
('buku24', 'pengarang24', 2517, 'penerbit24', 31),
('buku25', 'pengarang25', 2517, 'penerbit25', 32),
('buku26', 'pengarang26', 2517, 'penerbit26', 33),
('buku27', 'pengarang27', 2517, 'penerbit27', 34),
('buku28', 'pengarang28', 2517, 'penerbit28', 35),
('buku29', 'pengarang29', 2517, 'penerbit29', 36),
('buku30', 'pengarang30', 2517, 'penerbit30', 37),
('Jacky', 'Chan', 2017, 'China', 44),
('Kura-Kura Ninja', 'Hashrul', 1998, 'Gunung Angung', 45),
('Naruto', 'ajinomoti', 1997, 'Hiroshima Nagasaki', 46),
('Conan', 'aoyama gosho', 1991, 'PT Elecmedia compute', 47);

-- --------------------------------------------------------

--
-- Table structure for table `kategory`
--

CREATE TABLE `kategory` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategory`
--

INSERT INTO `kategory` (`id`, `nama`) VALUES
(1, 'Horor'),
(2, 'Musical'),
(3, 'Novel'),
(4, 'Bussiness'),
(5, 'Comedy'),
(6, 'Law'),
(7, 'Science'),
(8, 'Pelajaran');

-- --------------------------------------------------------

--
-- Table structure for table `kategorybuku`
--

CREATE TABLE `kategorybuku` (
  `kategory` int(11) NOT NULL,
  `buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorybuku`
--

INSERT INTO `kategorybuku` (`kategory`, `buku`) VALUES
(1, 9),
(1, 22),
(1, 23),
(1, 31),
(1, 38),
(2, 1),
(2, 3),
(2, 14),
(2, 17),
(2, 30),
(2, 32),
(3, 4),
(3, 7),
(3, 10),
(3, 19),
(3, 24),
(3, 29),
(3, 33),
(4, 8),
(4, 11),
(4, 18),
(4, 21),
(4, 26),
(5, 2),
(5, 13),
(5, 15),
(5, 25),
(5, 37),
(6, 12),
(6, 16),
(6, 20),
(6, 27),
(6, 34),
(6, 36),
(7, 5),
(7, 28),
(7, 35),
(8, 6),
(3, 41),
(5, 23),
(1, 43),
(6, 44),
(8, 45),
(6, 46),
(1, 47);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `pinjam` date NOT NULL,
  `kembali` date NOT NULL,
  `buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`pinjam`, `kembali`, `buku`) VALUES
('2018-05-03', '2018-05-08', 4),
('2018-05-03', '2018-05-06', 5),
('2018-05-03', '2018-05-10', 2),
('2018-05-03', '2018-05-10', 6),
('2018-05-09', '2018-05-15', 12),
('2018-05-03', '2018-05-12', 15),
('2018-05-04', '2018-05-12', 13),
('2018-05-05', '2018-05-11', 24),
('2018-05-02', '2018-05-10', 26),
('2018-05-06', '2018-05-12', 12),
('2018-05-08', '2018-05-14', 11),
('2018-05-07', '2018-05-13', 10),
('2018-05-01', '2018-05-08', 1),
('2018-05-03', '2018-05-10', 14),
('2018-05-04', '2018-05-08', 16),
('2018-05-05', '2018-05-23', 21),
('2018-05-09', '2018-05-15', 20),
('2018-05-10', '2018-05-15', 28),
('2018-05-05', '2018-05-09', 13),
('2018-05-06', '2018-05-10', 30),
('2018-05-07', '2018-05-12', 29),
('2018-05-04', '2018-05-09', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `kategory`
--
ALTER TABLE `kategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorybuku`
--
ALTER TABLE `kategorybuku`
  ADD KEY `kategory` (`kategory`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD KEY `pinjam` (`pinjam`),
  ADD KEY `buku` (`buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `kategory`
--
ALTER TABLE `kategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategorybuku`
--
ALTER TABLE `kategorybuku`
  ADD CONSTRAINT `kategory` FOREIGN KEY (`kategory`) REFERENCES `kategory` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
