/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.0.45-community-nt-log : Database - db_si12c
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_si12c` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_si12c`;

/*Table structure for table `tbl_barang` */

DROP TABLE IF EXISTS `tbl_barang`;

CREATE TABLE `tbl_barang` (
  `kode` varchar(4) character set latin1 NOT NULL,
  `nama` varchar(20) character set latin1 NOT NULL,
  `harga` int(11) NOT NULL,
  `produk` varchar(20) character set latin1 NOT NULL,
  `ukuran` varchar(5) character set latin1 NOT NULL,
  `info` varchar(100) character set latin1 NOT NULL,
  `jumlah` varchar(3) character set latin1 NOT NULL,
  `gambar` varchar(50) character set latin1 NOT NULL,
  PRIMARY KEY  (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tbl_barang` */

insert  into `tbl_barang`(`kode`,`nama`,`harga`,`produk`,`ukuran`,`info`,`jumlah`,`gambar`) values ('001','RIKA',150000,'TROPCL','M','   READY STOK         ','2','images (11).jpg'),('111','RIKO',215000,'TROPCL','M','      READY      ','3','1392311043825.jpg'),('12','DASW',120000,'TROPCL','S','    SSS        ','1','images (16).jpg'),('1233','ANJAR',200000,'TROPCL','L','        SS    ','3','alnwick poppy.jpg');

/*Table structure for table `tbl_pembeli` */

DROP TABLE IF EXISTS `tbl_pembeli`;

CREATE TABLE `tbl_pembeli` (
  `no_faktur` varchar(10) character set latin1 NOT NULL,
  `nama_pembeli` varchar(30) character set latin1 NOT NULL,
  `tanggal` varchar(10) character set latin1 NOT NULL,
  `kode` varchar(5) character set latin1 NOT NULL,
  `jumlah_beli` varchar(3) character set latin1 NOT NULL,
  `gambar` varchar(100) character set latin1 NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY  (`no_faktur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tbl_pembeli` */

insert  into `tbl_pembeli`(`no_faktur`,`nama_pembeli`,`tanggal`,`kode`,`jumlah_beli`,`gambar`,`total`) values ('12','RAE','04/05/2015','111','5','images (19).jpg',5000000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
