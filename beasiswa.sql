/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.17 : Database - surveykapal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`surveykapal` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `surveykapal`;

/*Table structure for table `contoh_kapal` */

DROP TABLE IF EXISTS `contoh_kapal`;

CREATE TABLE `contoh_kapal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loa` float NOT NULL COMMENT 'm',
  `lpp` float NOT NULL COMMENT 'm',
  `d_design` float NOT NULL COMMENT 'm',
  `h_mld` float NOT NULL COMMENT 'm',
  `b_mld` float NOT NULL COMMENT 'm',
  `vs` int(11) NOT NULL COMMENT 'Knots',
  `complement` int(11) NOT NULL COMMENT 'P',
  `engine_output` int(11) NOT NULL COMMENT 'HP',
  `bollard_pull` int(11) NOT NULL COMMENT 'Tons',
  `harga` bigint(20) NOT NULL COMMENT 'Rupiah',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `contoh_kapal` */

insert  into `contoh_kapal`(`id`,`loa`,`lpp`,`d_design`,`h_mld`,`b_mld`,`vs`,`complement`,`engine_output`,`bollard_pull`,`harga`) values (1,30,28.4,4.9,3.8,9.5,12,12,2400,28,48336668071),(2,30,28.4,4.9,3.8,9.5,12,12,3200,35,52625561573);

/*Table structure for table `keterangan_kapal` */

DROP TABLE IF EXISTS `keterangan_kapal`;

CREATE TABLE `keterangan_kapal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loa` float DEFAULT NULL,
  `lpp` float DEFAULT NULL,
  `d_design` float DEFAULT NULL,
  `h_mld` float DEFAULT NULL,
  `b_mld` float DEFAULT NULL,
  `vs` int(11) DEFAULT NULL,
  `complement` int(11) DEFAULT NULL,
  `engine_output` int(11) DEFAULT NULL,
  `bollard_pull` int(11) DEFAULT NULL,
  `harga` bigint(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `keterangan_kapal` */

insert  into `keterangan_kapal`(`id`,`loa`,`lpp`,`d_design`,`h_mld`,`b_mld`,`vs`,`complement`,`engine_output`,`bollard_pull`,`harga`,`tahun`) values (1,0,28,0,0,0,0,0,3200,0,1627865,2000);

/*Table structure for table `survey_dokumen` */

DROP TABLE IF EXISTS `survey_dokumen`;

CREATE TABLE `survey_dokumen` (
  `id` int(11) NOT NULL,
  `Nama_Dokumen` varchar(50) NOT NULL,
  `Kondisi_Dokumen` varchar(50) NOT NULL,
  `Depresiasi_Dokumen` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `survey_dokumen` */

insert  into `survey_dokumen`(`id`,`Nama_Dokumen`,`Kondisi_Dokumen`,`Depresiasi_Dokumen`) values (1,'Gross Akte','belum_dibuka','tidak'),(2,'Sertifikat Kelayakan Kapal','Ada dan masih berlaku','tidak'),(3,'Sertifikat Lambung','Ada dan masih berlaku','tidak'),(4,'Sertifikat Mesin','Tidak ada','iya'),(5,'Surat Ukur Internasional','Ada dan masih berlaku','tidak'),(6,'Sertifikat Keselamatan Kapal Barang','Tidak ada','iya'),(7,'Sertifikat Radio Komunikasi','Ada dan masih berlaku','tidak'),(8,'Sertifikat Bebas Polusi','Ada dan masih berlaku','tidak'),(9,'Sertifikat Bebas Tikus','Tidak ada','iya');

/*Table structure for table `survey_lambung_kapal` */

DROP TABLE IF EXISTS `survey_lambung_kapal`;

CREATE TABLE `survey_lambung_kapal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pelat` varchar(255) DEFAULT NULL,
  `nama_bagian` varchar(255) DEFAULT NULL,
  `tebal` float DEFAULT NULL,
  `depresiasi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `survey_lambung_kapal` */

insert  into `survey_lambung_kapal`(`id`,`pelat`,`nama_bagian`,`tebal`,`depresiasi`) values (1,'Pelat Sisi Atas','Ceruk Buritan',10.14,'tidak'),(2,'Pelat Sisi Atas','Ruang Mesin',10.34,'tidak'),(3,'Pelat Sisi Atas','Ceruk Haluan',10.22,'tidak'),(4,'Pelat Sisi Bawah','Ceruk Buritan',10.66,'tidak'),(5,'Pelat Sisi Bawah','Ruang Mesin',9.59,'iya'),(6,'Pelat Sisi Bawah','Ceruk Haluan',10.32,'tidak'),(7,'Pelat Bottom','Ceruk Buritan',10.17,'tidak'),(8,'Pelat Bottom','Ruang Mesin',9.68,'tidak'),(9,'Pelat Bottom','Ceruk Haluan',10.38,'tidak'),(10,'Pelat Geladak','Ceruk Buritan',10.94,'tidak'),(11,'Pelat Geladak','Ruang Mesin',9.28,'iya'),(12,'Pelat Geladak','Ceruk Haluan',9.63,'tidak'),(13,'Pelat Keel','Ceruk Buritan',12.87,'tidak'),(14,'Pelat Keel','Ruang Mesin',12.74,'tidak'),(15,'Pelat Keel','Ceruk Haluan',12.86,'tidak');

/*Table structure for table `survey_outfitting_kapal` */

DROP TABLE IF EXISTS `survey_outfitting_kapal`;

CREATE TABLE `survey_outfitting_kapal` (
  `id` int(11) NOT NULL,
  `Nama_Outfitting` varchar(50) NOT NULL,
  `Bagian_Outfitting` varchar(50) NOT NULL,
  `Kondisi_Outfitting` varchar(100) NOT NULL,
  `Depresiasi_Outfitting` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `survey_outfitting_kapal` */

insert  into `survey_outfitting_kapal`(`id`,`Nama_Outfitting`,`Bagian_Outfitting`,`Kondisi_Outfitting`,`Depresiasi_Outfitting`) values (1,'Dek dan Tambat','Jangkar dan Rantai','Semua alat masih berfungsi dengan baik','Tidak'),(2,'Dek dan Tambat','Tali Tambat Kapal','Semua alat masih berfungsi dengan baik','Tidak'),(3,'Dek dan Tambat','Deck Machinery','ada kerusakan','Penggantian'),(4,'Navigasi','Alat Navigasi','ada kerusakan','Penggantian'),(5,'Keselamatan','Alat Keselamatan','ada kerusakan','Penggantian'),(6,'Komunikasi','Alat Komunikasi','Semua alat masih berfungsi dengan baik','Tidak'),(7,'Akomodasi','Barang Akomodasi','ada kerusakan','Penggantian');

/*Table structure for table `survey_permesinan_kapal` */

DROP TABLE IF EXISTS `survey_permesinan_kapal`;

CREATE TABLE `survey_permesinan_kapal` (
  `id` int(11) NOT NULL,
  `Bagian_Permesinan` varchar(20) NOT NULL,
  `Nama_Permesinan` varchar(50) NOT NULL,
  `Kondisi_Permesinan` varchar(100) NOT NULL,
  `Depresiasi_Permesinan` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `survey_permesinan_kapal` */

insert  into `survey_permesinan_kapal`(`id`,`Bagian_Permesinan`,`Nama_Permesinan`,`Kondisi_Permesinan`,`Depresiasi_Permesinan`) values (1,'Permesinan','Main Engine','bekerja dengan baik','perawatan'),(2,'Permesinan','Mesin Bantu','bekerja dengan baik','perawatan'),(3,'Permesinan','Poros dan Daun Kemudi','bekerja dengan baik','perawatan'),(4,'Permesinan','Poros dan Baling-baling Propeller','bekerja dengan baik','perawatan'),(5,'Perpipaan','Pipa Kamar Mesin','ada kerusakan','perbaikan'),(6,'Perpipaan','Pipa Ballast','bekerja dengan baik','perawatan'),(7,'Pompa','Pompa Air Bersih','bekerja dengan baik','perawatan'),(8,'Pompa','Pompa Pemadam','bekerja dengan baik','perawatan'),(9,'Pompa','Pompa Bilga','bekerja dengan baik','perawatan'),(10,'Pompa','Pompa Air Ballast','bekerja dengan baik','perawatan'),(11,'Pompa','Pompa BBM','bekerja dengan baik','perawatan'),(12,'Pompa','Pompa Minyak Pelumas','bekerja dengan baik','perawatan'),(13,'Pompa','Pompa Pendingin','bekerja dengan baik','perawatan');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`username`,`password`,`nama`) values ('admin','admin','Admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
