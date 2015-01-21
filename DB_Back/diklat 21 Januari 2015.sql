-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2015 at 10:00 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diklat`
--

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('admin', '1', NULL, 'N;'),
('Authenticated', '1', NULL, 'N;'),
('Lecturer', '3', NULL, 'N;'),
('Lecturer', '9', NULL, 'N;'),
('Pelatihan.*', '1', NULL, 'N;'),
('Pelatihan.Admin', '1', NULL, 'N;'),
('Pelatihan.Create', '1', NULL, 'N;'),
('Pelatihan.Delete', '1', NULL, 'N;'),
('Pelatihan.Index', '1', NULL, 'N;'),
('Pelatihan.Update', '1', NULL, 'N;'),
('Pelatihan.View', '1', NULL, 'N;'),
('Student', '10', NULL, 'N;'),
('Student', '7', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('admin', 2, NULL, NULL, 'N;'),
('Authenticated', 2, NULL, NULL, 'N;'),
('Department.*', 1, NULL, NULL, 'N;'),
('Department.Admin', 0, NULL, NULL, 'N;'),
('Department.Create', 0, NULL, NULL, 'N;'),
('Department.Delete', 0, NULL, NULL, 'N;'),
('Department.Index', 0, NULL, NULL, 'N;'),
('Department.Update', 0, NULL, NULL, 'N;'),
('Department.View', 0, NULL, NULL, 'N;'),
('Employee.*', 1, NULL, NULL, 'N;'),
('Employee.Admin', 0, NULL, NULL, 'N;'),
('Employee.Create', 0, NULL, NULL, 'N;'),
('Employee.Delete', 0, NULL, NULL, 'N;'),
('Employee.Index', 0, NULL, NULL, 'N;'),
('Employee.Update', 0, NULL, NULL, 'N;'),
('Employee.View', 0, NULL, NULL, 'N;'),
('Guest', 2, NULL, NULL, 'N;'),
('Lecturer', 2, 'Pengajar', NULL, 'N;'),
('Pelatihan.*', 1, NULL, NULL, 'N;'),
('Pelatihan.Admin', 0, NULL, NULL, 'N;'),
('Pelatihan.Create', 0, NULL, NULL, 'N;'),
('Pelatihan.Delete', 0, NULL, NULL, 'N;'),
('Pelatihan.Index', 0, NULL, NULL, 'N;'),
('Pelatihan.Update', 0, NULL, NULL, 'N;'),
('Pelatihan.View', 0, NULL, NULL, 'N;'),
('Pengajar.*', 1, NULL, NULL, 'N;'),
('Pengajar.Admin', 0, NULL, NULL, 'N;'),
('Pengajar.Create', 0, NULL, NULL, 'N;'),
('Pengajar.Delete', 0, NULL, NULL, 'N;'),
('Pengajar.Index', 0, NULL, NULL, 'N;'),
('Pengajar.Update', 0, NULL, NULL, 'N;'),
('Pengajar.View', 0, NULL, NULL, 'N;'),
('Peserta.*', 1, NULL, NULL, 'N;'),
('Peserta.Admin', 0, NULL, NULL, 'N;'),
('Peserta.Create', 0, NULL, NULL, 'N;'),
('Peserta.Delete', 0, NULL, NULL, 'N;'),
('Peserta.Index', 0, NULL, NULL, 'N;'),
('Peserta.Update', 0, NULL, NULL, 'N;'),
('Peserta.View', 0, NULL, NULL, 'N;'),
('Site.*', 1, NULL, NULL, 'N;'),
('Site.Contact', 0, NULL, NULL, 'N;'),
('Site.Error', 0, NULL, NULL, 'N;'),
('Site.Index', 0, NULL, NULL, 'N;'),
('Site.Login', 0, NULL, NULL, 'N;'),
('Site.Logout', 0, NULL, NULL, 'N;'),
('Student', 2, 'Peserta', NULL, 'N;'),
('User.*', 1, NULL, NULL, 'N;'),
('User.Activation.*', 1, NULL, NULL, 'N;'),
('User.Activation.Activation', 0, NULL, NULL, 'N;'),
('User.Admin', 0, NULL, NULL, 'N;'),
('User.Admin.*', 1, NULL, NULL, 'N;'),
('User.Admin.Admin', 0, NULL, NULL, 'N;'),
('User.Admin.Create', 0, NULL, NULL, 'N;'),
('User.Admin.Delete', 0, NULL, NULL, 'N;'),
('User.Admin.Update', 0, NULL, NULL, 'N;'),
('User.Admin.View', 0, NULL, NULL, 'N;'),
('User.Create', 0, NULL, NULL, 'N;'),
('User.Default.*', 1, NULL, NULL, 'N;'),
('User.Default.Index', 0, NULL, NULL, 'N;'),
('User.Delete', 0, NULL, NULL, 'N;'),
('User.Index', 0, NULL, NULL, 'N;'),
('User.Login.*', 1, NULL, NULL, 'N;'),
('User.Login.Login', 0, NULL, NULL, 'N;'),
('User.Logout.*', 1, NULL, NULL, 'N;'),
('User.Logout.Logout', 0, NULL, NULL, 'N;'),
('User.Profile.*', 1, NULL, NULL, 'N;'),
('User.Profile.Changepassword', 0, NULL, NULL, 'N;'),
('User.Profile.Edit', 0, NULL, NULL, 'N;'),
('User.Profile.Profile', 0, NULL, NULL, 'N;'),
('User.ProfileField.*', 1, NULL, NULL, 'N;'),
('User.ProfileField.Admin', 0, NULL, NULL, 'N;'),
('User.ProfileField.Create', 0, NULL, NULL, 'N;'),
('User.ProfileField.Delete', 0, NULL, NULL, 'N;'),
('User.ProfileField.Update', 0, NULL, NULL, 'N;'),
('User.ProfileField.View', 0, NULL, NULL, 'N;'),
('User.Recovery.*', 1, NULL, NULL, 'N;'),
('User.Recovery.Recovery', 0, NULL, NULL, 'N;'),
('User.Registration.*', 1, NULL, NULL, 'N;'),
('User.Registration.Registration', 0, NULL, NULL, 'N;'),
('User.Update', 0, NULL, NULL, 'N;'),
('User.User.*', 1, NULL, NULL, 'N;'),
('User.User.Index', 0, NULL, NULL, 'N;'),
('User.User.View', 0, NULL, NULL, 'N;'),
('User.View', 0, NULL, NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
`id` int(11) NOT NULL,
  `angka_nilai` int(11) NOT NULL,
  `peserta_id` int(11) NOT NULL,
  `pelatihan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE IF NOT EXISTS `pelatihan` (
`id_pelatihan` int(11) NOT NULL,
  `nama_pelatihan` varchar(250) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `tarif` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `nama_pelatihan`, `waktu`, `tarif`) VALUES
(1, 'MAGANG/TRAINEE D-III/S-1 NEGERI', '<= 1 Bulan', 400000),
(2, 'MAGANG/TRAINEE D-III/S-1 SWASTA', '<= 1 Bulan', 500000),
(3, 'MAGANG/TRAINEE S-2 NEGERI', '<= 1 Bulan', 1100000),
(4, 'KURSUS ANESTESI KARDIOLOGI', '1 Tahun', 30000000),
(5, 'KURSUS BEDAH JANTUNG', '1 Tahun', 30000000),
(6, 'KURSUS KATETERISASI', '1 Tahun', 20000000),
(7, 'KURSUS INTERVENSI EP & PPM INSERSI', '1 Tahun', 30000000),
(8, 'KURSUS ICU POST OPERASI JANTUNG', '6 Bulan', 20000000),
(9, 'KURSUS PEDIATRIK KARDIOLOGI', '6 Bulan', 20000000),
(10, 'KURSUS ECHOCARDIOGRAFI', '6 Bulan', 20000000);

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gol`
--

CREATE TABLE IF NOT EXISTS `tbl_gol` (
`id` int(11) NOT NULL,
  `tipe_gol` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gol`
--

INSERT INTO `tbl_gol` (`id`, `tipe_gol`, `keterangan`) VALUES
(1, '00', 'Tanpa Golongan'),
(2, '1/a', 'Juru Muda'),
(3, '1/b', 'Juru Muda Tingkat I'),
(4, '1/c', 'Juru'),
(5, '1/d', 'Juru Tingkat I'),
(6, '2/a', 'Pengatur Muda'),
(7, '2/b', 'Pengatur Muda Tingkat I'),
(8, '2/c', 'Pengatur'),
(9, '2/d', 'Pengatur Tingkat I'),
(10, '3/a', 'Penata Muda'),
(11, '3/b', 'Penata Muda Tingkat I'),
(12, '3/c', 'Penata'),
(13, '3/d', 'Penata Tingkat I'),
(14, '4/a', 'Pembina'),
(15, '4/b', 'Pembina TIngkat I'),
(16, '4/c', 'Pembina Utama Muda'),
(17, '4/d', 'Pembina Utama Madya'),
(18, '4/e', 'Pembina Utama');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pend`
--

CREATE TABLE IF NOT EXISTS `tbl_pend` (
`id` int(11) NOT NULL,
  `tingkat` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pend`
--

INSERT INTO `tbl_pend` (`id`, `tingkat`) VALUES
(1, 'SMA'),
(2, 'D3 (sederajat)'),
(3, 'S1 (sederajat)'),
(4, 'S2 (sederajat)'),
(5, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `agama` varchar(50) NOT NULL DEFAULT '',
  `nip` varchar(25) NOT NULL DEFAULT '',
  `tempatlahir` varchar(75) NOT NULL DEFAULT '',
  `alamat` varchar(255) NOT NULL DEFAULT '',
  `jns_klmn` varchar(2) NOT NULL DEFAULT '',
  `gol` varchar(25) NOT NULL DEFAULT '',
  `pendidikan` varchar(50) NOT NULL DEFAULT '',
  `nama_inst` varchar(150) NOT NULL DEFAULT '',
  `alamat_inst` varchar(255) NOT NULL DEFAULT '',
  `nama_instansi` varchar(255) NOT NULL DEFAULT '',
  `alamat_instansi` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_profiles`
--

INSERT INTO `tbl_profiles` (`user_id`, `lastname`, `firstname`, `birthday`, `agama`, `nip`, `tempatlahir`, `alamat`, `jns_klmn`, `gol`, `pendidikan`, `nama_inst`, `alamat_inst`, `nama_instansi`, `alamat_instansi`) VALUES
(1, 'Admin', 'Administrator', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Demo', 'Demo', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'septi Rahadian', 'presteniko', '2013-02-19', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'raha', 'raha', '2014-12-10', 'islam', '214352452', 'Jakarta', 'jalan jalan', '1', '2/a', '', '', '', '', ''),
(7, 'rider', 'rider', '2014-12-17', 'rider', '352582385', 'rider', 'rider', '1', '3/d', 'S1 (sederajat)', 'rider', 'rider', 'rider', 'rider'),
(9, 'mantap', 'mantap', '2014-12-16', 'mantap', '3242353262323', 'mantap', 'mantap', '1', 'mantap', 'mantap', 'mantap', 'mantap', 'mantap', 'mantap'),
(10, 'malik', 'malik', '2012-06-13', 'malik', '3435423', 'malik', 'Jalan malik 5', '1', '2/d', 'SMA', 'ffg', 'dgfdgdg', 'gsdgds', 'dsgdsgdsg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles_fields` (
`id` int(10) NOT NULL,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_profiles_fields`
--

INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3),
(3, 'birthday', 'Tanggal Lahir', 'DATE', 0, 0, 1, '', '', '', '', '0000-00-00', 'UWjuidate', '{"ui-theme":"redmond"}', 4, 2),
(4, 'agama', 'Agama', 'VARCHAR', 50, 0, 1, '', '', 'Agama Belum dimasukkan.', '', '', '', '', 5, 1),
(5, 'nip', 'NIP/NOPEG', 'VARCHAR', 25, 0, 1, '', '', 'NIP/NOPEG belum dimasukkan.', '', '', '', '', 2, 1),
(6, 'tempatlahir', 'Tempat Lahir', 'VARCHAR', 75, 0, 2, '', '', '', '', '', '', '', 3, 1),
(7, 'alamat', 'Alamat ', 'TEXT', 255, 0, 1, '', '', 'Alamat belum dimasukkan.', '', '', '', '', 6, 1),
(8, 'jns_klmn', 'Jenis Kelamin', 'VARCHAR', 2, 1, 1, '', '1==Pria;2==Wanita', 'Jenis Kelamin belum dimasukkan', '', '', '', '', 3, 1),
(9, 'gol', 'Pangkat/Golongan', 'VARCHAR', 25, 0, 1, '', '', 'Pangkat/Golongan belum dimasukkan', '', '', '', '', 7, 2),
(10, 'pendidikan', 'Pendidikan Terakhir', 'VARCHAR', 50, 0, 1, '', '', 'Pendidikan Terakhir belum dimasukkan.', '', '', '', '', 8, 2),
(11, 'nama_inst', 'Nama Institusi Pendidikan Terakhir', 'VARCHAR', 150, 0, 1, '', '', 'Nama Institusi Pendidikan Terakhir belum dimasukkan.', '', '', '', '', 9, 1),
(12, 'alamat_inst', 'Alamat Institusi Pendidikan Terakhir', 'TEXT', 255, 0, 1, '', '', 'Alamat Institusi Pendidikan Terakhir belum dimasukkan', '', '', '', '', 10, 1),
(13, 'nama_instansi', 'Nama Instansi Tempat Bekerja', 'VARCHAR', 255, 0, 1, '', '', 'Nama Instansi tempat bekerja belum dimasukkan', '', '', '', '', 11, 1),
(14, 'alamat_instansi', 'Alamat Instansi ', 'TEXT', 255, 0, 1, '', '', 'Alamat Instansi belum dimasukkan.', '', '', '', '', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_pelatihan`
--

CREATE TABLE IF NOT EXISTS `tbl_status_pelatihan` (
`id` int(11) NOT NULL,
  `pelatihan_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status_daftar` varchar(15) NOT NULL,
  `status_selesai` varchar(15) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status_pelatihan`
--

INSERT INTO `tbl_status_pelatihan` (`id`, `pelatihan_id`, `nama`, `status_daftar`, `status_selesai`, `tgl_mulai`, `tgl_selesai`) VALUES
(1, 5, 'mamang', 'dibuka', 'daftar', '2015-01-02', '2015-01-28'),
(2, 5, 'mamang', 'dibuka', 'daftar', '2015-01-02', '2015-01-28'),
(4, 1, 'Trainee D3', 'dibuka', 'daftar', '2015-01-14', '2015-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `createtime`, `lastvisit`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', 1261146094, 1421829133, 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', 1261146096, 0, 0, 1),
(3, 'kaixza', '0570d34d36cc0d7231b1f5c5a09103ff', 'presteniko@gmail.com', 'f2f8545517895599d79ce074e7022156', 1415660769, 1416522821, 0, 1),
(5, 'raha', '59c27cd83eb81a92d70ec96061ebae7e', 'raha@raha.com', 'db97dc14a2765dae532c8942daf211a8', 1418705210, 1418705210, 0, 1),
(7, 'rider', '2c308cebf509cd27afe35ee987083f38', 'rider@rider.com', '16f211fc4e53ab47646e0fa86faeb7e7', 1418991548, 1418991548, 0, 1),
(9, 'mantap', '2fea6c02a98d6318d44cdf150775f07a', 'mantap@mantap.com', 'a88ba7b540408b56bcd0da79522072ec', 1418997993, 1418997993, 0, 1),
(10, 'malik', '6c34fd5b51dcdd56ad9204c67209d6b5', 'malik@malik.malik.com', 'b892a9b73ee691ae3c4401cee6ce9bc4', 1421806563, 1421806563, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authassignment`
--
ALTER TABLE `authassignment`
 ADD PRIMARY KEY (`itemname`,`userid`);

--
-- Indexes for table `authitem`
--
ALTER TABLE `authitem`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `authitemchild`
--
ALTER TABLE `authitemchild`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
 ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `rights`
--
ALTER TABLE `rights`
 ADD PRIMARY KEY (`itemname`);

--
-- Indexes for table `tbl_gol`
--
ALTER TABLE `tbl_gol`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pend`
--
ALTER TABLE `tbl_pend`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_profiles_fields`
--
ALTER TABLE `tbl_profiles_fields`
 ADD PRIMARY KEY (`id`), ADD KEY `varname` (`varname`,`widget`,`visible`);

--
-- Indexes for table `tbl_status_pelatihan`
--
ALTER TABLE `tbl_status_pelatihan`
 ADD PRIMARY KEY (`id`), ADD KEY `pelatihan_id` (`pelatihan_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`), ADD KEY `status` (`status`), ADD KEY `superuser` (`superuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_gol`
--
ALTER TABLE `tbl_gol`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_pend`
--
ALTER TABLE `tbl_pend`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_profiles_fields`
--
ALTER TABLE `tbl_profiles_fields`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_status_pelatihan`
--
ALTER TABLE `tbl_status_pelatihan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `authassignment`
--
ALTER TABLE `authassignment`
ADD CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `authitemchild`
--
ALTER TABLE `authitemchild`
ADD CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rights`
--
ALTER TABLE `rights`
ADD CONSTRAINT `Rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_status_pelatihan`
--
ALTER TABLE `tbl_status_pelatihan`
ADD CONSTRAINT `idPelatihan` FOREIGN KEY (`pelatihan_id`) REFERENCES `pelatihan` (`id_pelatihan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
