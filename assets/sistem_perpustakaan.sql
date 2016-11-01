/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : sistem_perpustakaan

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2016-10-31 15:28:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for buku
-- ----------------------------
DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `buku_kode` char(10) NOT NULL,
  `kategori_kode` char(10) DEFAULT NULL,
  `penerbit_kode` char(10) DEFAULT NULL,
  `buku_judul` varchar(50) DEFAULT NULL,
  `buku_jumlah` decimal(10,0) DEFAULT NULL,
  `buku_deskripsi` varchar(250) DEFAULT NULL,
  `buku_pengarang` varchar(30) DEFAULT NULL,
  `buku_tahun_terbit` int(11) DEFAULT NULL,
  PRIMARY KEY (`buku_kode`),
  KEY `kategori` (`kategori_kode`),
  KEY `penerbit` (`penerbit_kode`),
  CONSTRAINT `kategori` FOREIGN KEY (`kategori_kode`) REFERENCES `kategori` (`kategori_kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `penerbit` FOREIGN KEY (`penerbit_kode`) REFERENCES `penerbit` (`penerbit_kode`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of buku
-- ----------------------------

-- ----------------------------
-- Table structure for detail_peminjaman
-- ----------------------------
DROP TABLE IF EXISTS `detail_peminjaman`;
CREATE TABLE `detail_peminjaman` (
  `peminjaman_kode` char(10) NOT NULL,
  `buku_kode` char(10) NOT NULL,
  `detail_tgl_kembali` date DEFAULT NULL,
  `detail_denda` double DEFAULT NULL,
  `detail_status_kembali` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`peminjaman_kode`,`buku_kode`),
  KEY `buku` (`buku_kode`),
  CONSTRAINT `buku` FOREIGN KEY (`buku_kode`) REFERENCES `buku` (`buku_kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `peminjaman` FOREIGN KEY (`peminjaman_kode`) REFERENCES `peminjaman` (`peminjaman_kode`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detail_peminjaman
-- ----------------------------

-- ----------------------------
-- Table structure for kartu_pendaftaran
-- ----------------------------
DROP TABLE IF EXISTS `kartu_pendaftaran`;
CREATE TABLE `kartu_pendaftaran` (
  `kartu_barkode` char(10) NOT NULL,
  `petugas_kode` char(10) DEFAULT NULL,
  `peminjam_kode` char(10) DEFAULT NULL,
  `kartu_tgl_pembuatan` date DEFAULT NULL,
  `kartu_tgl_akhir` date DEFAULT NULL,
  `kartu_status_aktif` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`kartu_barkode`),
  KEY `petugas_kode` (`petugas_kode`),
  KEY `peminjam_kode` (`peminjam_kode`),
  CONSTRAINT `peminjam_kode` FOREIGN KEY (`peminjam_kode`) REFERENCES `peminjam` (`peminjam_kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `petugas_kode` FOREIGN KEY (`petugas_kode`) REFERENCES `petugas` (`petugas_kode`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kartu_pendaftaran
-- ----------------------------

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `kategori_kode` char(10) NOT NULL,
  `kategori_nama` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kategori_kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------

-- ----------------------------
-- Table structure for peminjam
-- ----------------------------
DROP TABLE IF EXISTS `peminjam`;
CREATE TABLE `peminjam` (
  `peminjam_kode` char(10) NOT NULL,
  `peminjam_nama` varchar(30) DEFAULT NULL,
  `peminjam_alamat` varchar(50) DEFAULT NULL,
  `peminjam_telp` bigint(20) DEFAULT NULL,
  `peminjam_foto` longblob,
  PRIMARY KEY (`peminjam_kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of peminjam
-- ----------------------------

-- ----------------------------
-- Table structure for peminjaman
-- ----------------------------
DROP TABLE IF EXISTS `peminjaman`;
CREATE TABLE `peminjaman` (
  `peminjaman_kode` char(10) NOT NULL,
  `petugas_kode` char(10) DEFAULT NULL,
  `peminjam_kode` char(10) DEFAULT NULL,
  `peminjaman_tgl` date DEFAULT NULL,
  `peminjaman_tgl_hrs_kembali` date DEFAULT NULL,
  PRIMARY KEY (`peminjaman_kode`),
  KEY `petugas` (`petugas_kode`),
  KEY `peminjam` (`peminjam_kode`),
  CONSTRAINT `peminjam` FOREIGN KEY (`peminjam_kode`) REFERENCES `peminjam` (`peminjam_kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `petugas` FOREIGN KEY (`petugas_kode`) REFERENCES `petugas` (`petugas_kode`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of peminjaman
-- ----------------------------

-- ----------------------------
-- Table structure for penerbit
-- ----------------------------
DROP TABLE IF EXISTS `penerbit`;
CREATE TABLE `penerbit` (
  `penerbit_kode` char(10) NOT NULL,
  `penerbit_nama` varchar(20) DEFAULT NULL,
  `penerbit_alamat` varchar(50) DEFAULT NULL,
  `penerbit_telp` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`penerbit_kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penerbit
-- ----------------------------

-- ----------------------------
-- Table structure for petugas
-- ----------------------------
DROP TABLE IF EXISTS `petugas`;
CREATE TABLE `petugas` (
  `petugas_kode` char(10) NOT NULL,
  `petugas_nama` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`petugas_kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of petugas
-- ----------------------------
