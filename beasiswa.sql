/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.17 : Database - beasiswa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`beasiswa` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `beasiswa`;

/*Table structure for table `form_beasiswa_bpp` */

DROP TABLE IF EXISTS `form_beasiswa_bpp`;

CREATE TABLE `form_beasiswa_bpp` (
  `id_form` int(11) NOT NULL AUTO_INCREMENT,
  `npm` varchar(20) DEFAULT NULL,
  `nama_mhs` varchar(255) DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `jenjang` varchar(4) DEFAULT NULL,
  `smt` int(11) DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `jml_tanggungan` int(11) DEFAULT NULL,
  `penghasilan` int(11) DEFAULT NULL,
  `prestasi` int(11) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `leaving_flow` float DEFAULT NULL,
  `entering_flow` float DEFAULT NULL,
  `net_flow` float DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `status_lolos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_form`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `form_beasiswa_bpp` */

insert  into `form_beasiswa_bpp`(`id_form`,`npm`,`nama_mhs`,`jk`,`prodi`,`jenjang`,`smt`,`ipk`,`pekerjaan`,`jml_tanggungan`,`penghasilan`,`prestasi`,`alamat`,`telepon`,`leaving_flow`,`entering_flow`,`net_flow`,`ranking`,`status_lolos`) values (1,'11420100041','Adhi Reza','Laki-laki','Desain Komunikasi Visual','S1',6,3.02,'TNI/POLRI',2,4,0,NULL,'081230864446',0.695915,0.468511,0.227404,13,1),(2,'12410100092','Sonia Ayu Pertiwi','Perempuan','Sistem Informasi','S1',4,3.13,'Lainnya',3,5,1,NULL,'085234084887',0.770466,0.227841,0.542626,10,1),(3,'11410100248','M. Risa Fahmi','Laki-Laki','Sistem Informasi','S1',6,2.98,'PNS',2,4,1,NULL,'081703563470',0.103882,0.675316,-0.571433,41,1),(4,'12410100062','Citra Prasetya','Laki-Laki','Sistem Informasi','S1',4,3.35,'Lainnya',2,3,1,NULL,'085730239214',0.177104,0.624666,-0.447562,35,1),(5,'12410200020','Rizky Putra Efendi','Laki-laki','Sistem Komputer','S1',4,2.73,'Wiraswasta',2,4,0,NULL,'085607393699',0.965385,0.124099,0.841286,5,1),(6,'11410100030','Fitri Dwi Ariyanti','Perempuan','Sistem Informasi','S1',6,3.14,'Lainnya',2,5,1,NULL,'085648616821',0.229476,0.627151,-0.397675,33,1),(7,'11410200138','Karin Devina','Perempuan','Sistem Komputer','S1',6,2.8,'Pegawai Swasta',2,5,1,NULL,'081803089320',0.246074,0.50645,-0.260376,30,1),(8,'11420100057','Agung Setiyo Budi','Laki-Laki','Desain Komunikasi Visual','S1',6,3.36,'Pegawai Swasta',4,5,1,NULL,'085708459042',0.598938,0.471031,0.127907,16,1),(9,'12410100033','Dewangga Pramananda Soemarno','Laki-Laki','Sistem Informasi','S1',4,3.14,'Pegawai Swasta',2,3,1,NULL,'087853115797',0.24219,0.59649,-0.3543,32,1),(10,'12410100009','Hesty Susianawati','Perempuan','Sistem Informasi','S1',4,2.84,'PNS',2,4,1,NULL,'081259406223',0.333834,0.354308,-0.0204745,23,1),(11,'11410100124','Dimas Febrian','Laki-laki','Sistem Informasi','S1',6,3,'Wiraswasta',3,4,0,NULL,'08973995858',1.02949,0.342687,0.686798,8,1),(12,'13410100008','Cenradi Yanuar Ristanto','Laki-laki','Sistem Informasi','S1',2,2.91,'Wiraswasta',1,5,1,NULL,'085733491707',0.720117,0.588653,0.131464,15,1),(13,'11420100022','Suryo Widjaya','Laki-laki','Desain Komunikasi Visual','S1',6,3.37,'Lainnya',3,5,0,NULL,'085655939910',1.09822,0.32895,0.769265,7,1),(14,'11410200067','Niko Priyo Utomo','Laki-Laki','Sistem Komputer','S1',6,2.81,'PNS',2,4,1,NULL,'085655515515',0.123792,0.625297,-0.501505,36,1),(15,'11420100050','Titis Febri Prabandari','Perempuan','Desain Komunikasi Visual','S1',6,3.45,'Wiraswasta',3,3,1,NULL,'089678090969',0.214293,0.745219,-0.530926,39,1),(16,'12420100016','Faris Fahmizal','Laki-laki','Desain Komunikasi Visual','S1',4,3.25,'PNS',3,4,0,NULL,'08562906928',1.21392,0.139175,1.07475,4,1),(17,'12410100083','Nina Setyawati','Perempuan','Sistem Informasi','S1',4,3.41,'Pegawai Swasta',2,4,1,NULL,'085745986480',0.242083,0.49811,-0.256027,29,1),(18,'11410100034','Ayu Safitri','Perempuan','Sistem Informasi','S1',6,3.4,'Lainnya',2,5,1,NULL,'087853920323',0.149746,0.654173,-0.504426,37,1),(19,'12420100043','Bagus Wibowo Utomo','Laki-laki','Desain Komunikasi Visual','S1',4,3.16,'Pegawai Swasta',2,3,0,NULL,'085736907069',0.858761,0.406685,0.452076,11,1),(20,'12410200083','Adri Wiyana Subekti','Laki-laki','Sistem Komputer','S1',4,2.81,'TNI/POLRI',2,4,0,NULL,'085708686564',0.96125,0.152142,0.809108,6,1),(21,'12410100006','Otniel Reza Kusuma','Laki-Laki','Sistem Informasi','S1',4,3.01,'Pegawai Swasta',2,3,1,NULL,'083857665364',0.256282,0.564684,-0.308402,31,1),(22,'12410100217','Shella Eka Maulidah','Perempuan','Sistem Informasi','S1',4,2.79,'Pegawai Swasta',2,3,1,NULL,'083856666940',0.259666,0.476866,-0.2172,27,1),(23,'11410100001','Diana Saraswati Handoko','Perempuan','Sistem Informasi','S1',6,3.37,'Pegawai Swasta',2,4,1,NULL,'085732558815',0.0150567,0.741465,-0.726409,45,1),(24,'12420100086','Harel Laisa Mardha','Laki-Laki','Desain Komunikasi Visual','S1',4,3.43,'Pegawai Swasta',1,4,1,NULL,'08973138586',0.188576,0.792201,-0.603626,42,1),(25,'12410200029','Deni Irtian ','Laki-laki','Sistem Komputer','S1',4,3.42,'Wiraswasta',2,5,1,NULL,'08563678003',0.375331,0.395153,-0.0198218,22,1),(26,'12410200017','Reza Arghi','Laki-laki','Sistem Komputer','S1',4,2.72,'Pegawai Swasta',3,4,0,NULL,'085649605912',1.27182,-0.0172946,1.28911,1,1),(27,'11410200006','Ngurah Kukuh Bimantara','Laki-Laki','Sistem Komputer','S1',6,3.41,'Pegawai Swasta',3,3,1,NULL,'088801742151',0.24306,0.758611,-0.515551,38,1),(28,'12410100030','Indah Suryaning Rachmawati','Perempuan','Desain Komunikasi Visual','S1',4,2.85,'Pegawai Swasta',3,3,1,NULL,'087853619400',0.565171,0.361077,0.204095,14,1),(29,'11410200036','Yudo Asmoro','Laki-Laki','Sistem Komputer','S1',6,3.17,'TNI/Polri',2,4,1,NULL,'085733850516',0.0755994,0.72147,-0.64587,44,1),(30,'13420100100','Brilianti Ayunda','Perempuan','Desain Komunikasi Visual','S1',2,3.18,'Wiraswasta',2,5,0,NULL,'085648698959',1.32527,0.156542,1.16873,2,1),(31,'12410100010','Avan Kurniawan','Laki-laki','Sistem Informasi','S1',4,3.19,'Lainnya',3,4,0,NULL,'085645087905',1.22837,0.135671,1.0927,3,1),(32,'11410200069','Nauval Zabidi Kurniawan','Laki-Laki','Sistem Komputer','S1',6,3.16,'Pegawai Swasta',2,3,1,NULL,'087851439381',0.0178802,0.878291,-0.860411,47,1),(33,'11420100026','Eko Ary Nugroho','Laki-laki','Desain Komunikasi Visual','S1',6,3.32,'Wiraswasta',2,4,0,NULL,'087851472130',0.657827,0.546687,0.11114,17,1),(34,'11410200008','Rachmat Priambodo','Laki-Laki','Sistem Komputer','S1',6,2.92,'Pegawai Swasta',2,4,1,NULL,'087856070787',0.107103,0.650951,-0.543848,40,1),(35,'12410100099','Laga Duasukma','Laki-Laki','Sistem Informasi','S1',4,2.88,'Pegawai Swasta',4,4,1,NULL,'08819480714',0.779385,0.200829,0.578556,9,1),(36,'11410200043','Wahyu Indra Lesmana','Laki-Laki','Sistem Komputer','S1',6,3.07,'PNS',3,4,1,NULL,'087853025002',0.389264,0.556273,-0.167009,25,1),(37,'11410200123','Ragil Ayu Kristinawati','Perempuan','Sistem Komputer','S1',6,3.38,'Pegawai Swasta',3,5,1,NULL,'082233586280',0.455091,0.505538,-0.050447,24,1),(38,'11420100065','Dony Bagus Kresna Dana','Laki-Laki','Desain Komunikasi Visual','S1',4,3.23,'Pegawai Swasta',2,5,1,NULL,'087853163303',0.430364,0.378245,0.0521181,20,1),(39,'12410100165','Januaryoputra Setyo Handoko','Laki-Laki','Sistem Informasi','S1',4,3.36,'Pegawai Swasta',2,4,1,NULL,'089676595770',0.242689,0.478941,-0.236253,28,1),(40,'11410110014','Indah Widoretno Purnomo','Perempuan','Desain Komunikasi Visual','S1',6,3.03,'Wiraswasta',3,5,1,NULL,'083830354112',0.542355,0.448829,0.0935265,18,1),(41,'12410100043','Nur Mohamad Prima Putra Wardani','Laki-Laki','Sistem Informasi','S1',4,3.35,'Pegawai Swasta',1,3,1,NULL,'083856070238',0.154944,0.928358,-0.773414,46,1),(42,'10410200054','Rizky Aderusman','Laki-Laki','Sistem Komputer','S1',4,3.15,'Pegawai Swasta',3,3,1,NULL,'085733022579',0.528829,0.453284,0.0755444,19,1),(43,'12410100025','Andreas Yanuar Prasetianto','Laki-Laki','Sistem Informasi','S1',4,3.38,'PNS',2,5,1,NULL,'087702578852',0.384273,0.396964,-0.0126905,21,1),(44,'12410100019','Zhulfiki Arbhi Rochdiansyah','Laki-Laki','Sistem Informasi','S1',4,3.3,'PNS',2,4,1,NULL,'08563170044',0.259665,0.47151,-0.211844,26,1),(45,'12410200013','Wahyu Rokhman Sugiarto','Laki-Laki','Sistem Komputer','S1',4,3.25,'Pegawai Swasta',4,4,1,NULL,'085737319373',0.717014,0.289947,0.427067,12,1),(46,'11410200011','Angsorul Anam','Laki-Laki','Sistem Komputer','S1',6,3.21,'Pegawai Swasta',2,5,1,NULL,'083830016860',0.213043,0.637318,-0.424275,34,1),(47,'11410200063','Muhammad Misbahul Umam','Laki-Laki','Sistem Komputer','S1',6,3.07,'PNS',2,4,1,NULL,'08976898588',0.0809584,0.687773,-0.606814,43,1);

/*Table structure for table `form_beasiswa_ppa` */

DROP TABLE IF EXISTS `form_beasiswa_ppa`;

CREATE TABLE `form_beasiswa_ppa` (
  `id_form` int(11) NOT NULL AUTO_INCREMENT,
  `npm` varchar(20) DEFAULT NULL,
  `nama_mhs` varchar(255) DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `jenjang` varchar(4) DEFAULT NULL,
  `smt` int(11) DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `jml_tanggungan` int(11) DEFAULT NULL,
  `penghasilan` int(11) DEFAULT NULL,
  `prestasi` int(11) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `leaving_flow` float DEFAULT NULL,
  `entering_flow` float DEFAULT NULL,
  `net_flow` float DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `status_lolos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_form`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

/*Data for the table `form_beasiswa_ppa` */

insert  into `form_beasiswa_ppa`(`id_form`,`npm`,`nama_mhs`,`jk`,`prodi`,`jenjang`,`smt`,`ipk`,`pekerjaan`,`jml_tanggungan`,`penghasilan`,`prestasi`,`alamat`,`telepon`,`leaving_flow`,`entering_flow`,`net_flow`,`ranking`,`status_lolos`) values (1,'12410100004','John Christian','Laki-Laki','Sistem Informasi','S1',4,3.95,'Lainnya',1,4,1,NULL,'08980853634',0.378954,0.0755847,0.303369,4,1),(2,'11410200124','M Abil Zamroni','Laki-Laki','Sistem Komputer','S1',6,3.45,'Pegawai Swasta',3,4,1,NULL,'083856800405',0.248581,0.0461964,0.202385,12,1),(3,'12410100164','Alif Zakariya Septarian','Laki-Laki','Sistem Informasi','S1',4,3.53,'Lainnya',1,3,1,NULL,'08973455117',0.214808,0.0950604,0.119748,20,1),(4,'12410100025','Achmad Ardiansyah Akbar','Laki-Laki','Sistem Informasi','S1',4,3.12,'Wiraswasta',1,3,0,NULL,'08173076451',0.0619201,0.312416,-0.250496,49,1),(5,'11420100051','Rizky Senja Pahlawan Putra B.','Laki-Laki','Desain Komunikasi Visual','S1',6,3.45,'Pegawai Swasta',3,4,1,NULL,'085706666702',0.248581,0.0461964,0.202385,13,1),(6,'11420100013','Halim Surya Perdana','Laki-Laki','Desain Komunikasi Visual','S1',6,3.27,'Wiraswasta',2,4,0,NULL,'085645063092',0.133042,0.195116,-0.0620733,34,1),(7,'12420100132','Aisyah Khanza','Perempuan','Desain Komunikasi Visual','S1',4,3.31,'PNS',1,4,0,NULL,'08564562145',0.0617777,0.247477,-0.1857,38,1),(8,'12410200021','Mega Ayu Fitria Hardyanti','Perempuan','Sistem Komputer','S1',4,3.65,'PNS',1,3,1,NULL,'087854878782',0.26215,0.080407,0.181743,15,1),(9,'12410100194','Yusuf Budiharjo','Laki-Laki','Sistem Informasi','S1',4,3.58,'Pegawai Swasta',2,3,1,NULL,'085730022259',0.235169,0.0770256,0.158143,16,1),(10,'11410100137','Ramadhan Putra Hadi','Laki-Laki','Sistem Informasi','S1',6,3,'Wiraswasta',3,4,1,NULL,'08785453449',0.17738,0.207478,-0.030098,32,1),(11,'12410200074','Elfira Rahmawati','Perempuan','Sistem Komputer','S1',4,3.34,'TNI/POLRI',2,5,0,NULL,'085252000076',0.052532,0.243531,-0.190999,41,1),(12,'12410200019','Haikal Dwi Cahya','Laki-Laki','Sistem Komputer','S1',4,3.01,'Pegawai Swasta',3,5,1,NULL,'089687645623',0.0823104,0.272332,-0.190021,40,1),(13,'12410100046','Lutfiyah','Perempuan','Sistem Informasi','S1',4,3.59,'Wiraswasta',5,5,0,NULL,'083831994442',0.159154,0.184488,-0.0253344,31,1),(14,'11420100047','Joshua Keegan Salim','Laki-Laki','Desain Komunikasi Visual','S1',6,3.29,'Wiraswasta',1,4,1,NULL,'083834789834',0.197563,0.103441,0.0941214,22,1),(15,'11410100023','M Dicky Zamroni','Laki-Laki','Sistem Informasi','S1',6,3,'Lainnya',4,5,0,NULL,'085756790800',0.107295,0.316144,-0.208849,46,1),(16,'11410100096','Cindy Clarissa Handoyo','Perempuan','Sistem Informasi','S1',6,3.09,'Wiraswasta',2,5,0,NULL,'083867536744',0.0912245,0.279654,-0.188429,39,1),(17,'12420100032','Muhammad Apri Sastriyono','Laki-Laki','Desain Komunikasi Visual','S1',4,3.61,'Pegawai Swasta',3,4,1,NULL,'08563071641',0.227454,0.0741358,0.153318,17,1),(18,'12420100029','Rizky Eriansyah ','Laki-Laki','Desain Komunikasi Visual','S1',4,3.52,'Wiraswasta',2,5,1,NULL,'081916486786',0.16672,0.1063,0.0604205,24,1),(19,'12410100012','Adinda Kamila Karunia','Perempuan','Sistem Informasi','S1',4,3.11,'Wiraswasta',2,5,0,NULL,'082258689986',0.0161802,0.326004,-0.309823,52,0),(20,'11410200003','Guntur Kresno Ibbowo','Laki-Laki','Sistem Informasi','S1',6,3.59,'Pegawai Swasta',3,5,1,NULL,'085748188896',0.277119,0.0357686,0.24135,8,1),(21,'11420100028','Naomi Natassia','Perempuan','Desain Komunikasi Visual','S1',6,3.57,'Wiraswasta',2,3,1,NULL,'081362019601',0.308053,0.0233488,0.284704,5,1),(22,'11410200045','Dika Lazuardi','Laki-Laki','Sistem Komputer','S1',6,3.47,'Lainnya',4,5,0,NULL,'085756423678',0.184602,0.150635,0.0339665,26,1),(23,'12420100035','Ari Hendi Pratomo','Laki-Laki','Desain Komunikasi Visual','S1',4,3.45,'Wiraswasta',1,5,1,NULL,'081254856733',0.141756,0.130064,0.0116922,29,1),(24,'12410100029','Felicia Kathrin Atmaja','Perempuan','Sistem Informasi','S1',4,3.39,'Wiraswasta',1,5,1,NULL,'089993065422',0.1256,0.144906,-0.0193055,30,1),(25,'12420100112','Henry Wijaya','Laki-Laki','Desain Komunikasi Visual','S1',4,3.29,'Wiraswasta',2,5,1,NULL,'085619728633',0.104725,0.163129,-0.058404,33,1),(26,'13410100038','Hasanah Yasmin Azzahra','Perempuan','Sistem Informasi','S1',2,3.38,'Lainnya',2,5,0,NULL,'085756645623',0.0551159,0.357177,-0.302061,51,0),(27,'12420100088','Ika Mega Apriliani','Perempuan','Desain Komunikasi Visual','S1',4,3.56,'Pegawai Swasta',2,3,1,NULL,'087702980708',0.227842,0.0800315,0.147811,18,1),(28,'11420100072','Muhamad Izharudin','Laki-Laki','Desain Komunikasi Visual','S1',6,3.8,'Pegawai Swasta',2,5,1,NULL,'081232303745',0.36397,0.027167,0.336803,2,1),(29,'11410100083','Moses Evan Wijaya','Laki-Laki','Sistem Informasi','S1',6,3.07,'Lainnya',2,5,0,NULL,'083856745634',0.0899095,0.288671,-0.198762,43,1),(30,'12410200036','Fika Rahmania Utami','Perempuan','Sistem Komputer','S1',4,3.26,'PNS',2,4,0,NULL,'081243186656',0.0547104,0.253677,-0.198967,44,1),(31,'12420100026','Doni Alamsyah','Laki-Laki','Desain Komunikasi Visual','S1',4,3.13,'Wiraswasta',3,5,1,NULL,'087856665644',0.0904825,0.218509,-0.128026,37,1),(32,'11410200039','Shochibah Yatimatul Asmak','Perempuan','Sistem Komputer','S1',6,3.71,'Wiraswasta',3,3,1,NULL,'085746914666',0.377692,0.00762191,0.370071,1,1),(33,'12410100003','Rahman Nur Hadi','Laki-Laki','Sistem Informasi','S1',4,3.8,'Pegawai Swasta',2,5,1,NULL,'081358200284',0.287329,0.0822529,0.205076,11,1),(34,'11410100129','Albert Sutanto','Laki-Laki','Sistem Informasi','S1',6,3.41,'TNI/POLRI',3,4,0,NULL,'08564563324',0.174314,0.151021,0.023293,28,1),(35,'11420100081','Aditya Bagus ','Laki-Laki','Desain Komunikasi Visual','S1',6,3.6,'Wiraswasta',2,5,1,NULL,'087889746756',0.272386,0.0389085,0.233478,9,1),(36,'11420100060','Rohry Dinda Pinasti','Laki-Laki','Desain Komunikasi Visual','S1',6,3.61,'PNS',1,4,1,NULL,'085932611718',0.292716,0.0332737,0.259442,7,1),(37,'12420100004','Dini Wulandari ','Perempuan','Desain Komunikasi Visual','S1',4,3.24,'Wiraswasta',2,5,0,NULL,'085906897643',0.0327123,0.275374,-0.242662,48,1),(38,'11410100017','Lutfi Aditama Putra','Laki-Laki','Sistem Informasi','S1',6,3.27,'Wiraswasta',2,5,1,NULL,'085278634575',0.177609,0.114618,0.0629905,23,1),(39,'12420100058','Christoper Yonathan Hadikusuma','Laki-Laki','Desain Komunikasi Visual','S1',4,3.3,'Wiraswasta',3,5,0,NULL,'081333164877',0.0521919,0.250818,-0.198626,42,1),(40,'12410200014','Yeremia Octaviano','Laki-Laki','Sistem Komputer','S1',4,3.87,'Pegawai Swasta',2,3,1,NULL,'08983385776',0.369492,0.0615268,0.307966,3,1),(41,'11420100068','Alexander Dimas Kurniawan Putra','Laki-Laki','Desain Komunikasi Visual','S1',6,3.79,'Wiraswasta',3,5,0,NULL,'08989084234',0.304581,0.118331,0.186249,14,1),(42,'12410100096','M Rafa Azka Putra','Laki-Laki','Sistem Informasi','S1',4,3,'Lainnya',2,5,1,NULL,'08197864563',0.0731634,0.281389,-0.208226,45,1),(43,'12410100027','Ahmad Faisal Danish','Laki-Laki','Sistem Informasi','S1',4,3.04,'Wiraswasta',1,5,0,NULL,'081267534577',0.00896983,0.367522,-0.358552,54,0),(44,'11410200105','Greysia Halim','Perempuan','Sistem Komputer','S1',6,3.18,'Lainnya',3,5,1,NULL,'08983345641',0.173229,0.143697,0.0295324,27,1),(45,'11420100093','Lusi Indah Astari','Perempuan','Desain Komunikasi Visual','S1',6,3.66,'Wiraswasta',2,5,1,NULL,'08983946696',0.298593,0.034118,0.264475,6,1),(46,'12410100016','Atia Arenda Banitrisna','Perempuan','Sistem Informasi','S1',4,3.62,'Pegawai Swasta',2,4,1,NULL,'085732168722',0.223003,0.0775575,0.145446,19,1),(47,'11420100053','Fajar Malik ','Laki-Laki','Desain Komunikasi Visual','S1',6,3.21,'Wiraswasta',3,5,0,NULL,'085722564551',0.113804,0.227199,-0.113395,36,1),(48,'12410200069','Haffafa Nur Fatihah','Perempuan','Sistem Komputer','S1',4,3.49,'Lainnya',3,5,1,NULL,'081243178655',0.165628,0.107668,0.0579601,25,1),(49,'13410100024','Angelina Surya Negara','Perempuan','Sistem Informasi','S1',2,3.1,'Wiraswasta',2,5,0,NULL,'083889016911',0.00814969,0.454866,-0.446717,55,0),(50,'11420100075','William Sasongko','Laki-Laki','Desain Komunikasi Visual','S1',6,3,'Lainnya',1,5,1,NULL,'08998974562',0.147197,0.23626,-0.0890633,35,1),(51,'11420100055','Syarful Laziem','Laki-Laki','Desain Komunikasi Visual','S1',6,3.46,'PNS',5,4,1,NULL,'083830368137',0.273634,0.0426136,0.23102,10,1),(52,'12410100095','Widya Kartika Wulandari','Perempuan','Sistem Informasi','S1',4,3.23,'TNI/POLRI',2,4,0,NULL,'085634687659',0.0500138,0.264479,-0.214465,47,1),(53,'12410200082','Aditya Galih Pratama','Laki-Laki','Sistem Komputer','S1',4,3.11,'Lainnya',2,5,0,NULL,'081243256423',0.0161802,0.326004,-0.309823,53,0),(54,'13410200024','Dimas Prasetyo','Laki-Laki','Sistem Komputer','S1',2,3.32,'PNS',2,4,0,NULL,'081356478645',0.0594547,0.359151,-0.299696,50,1),(55,'12410100234','Erika Veri Pratikna','Perempuan','Sistem Informasi','S1',4,3.57,'Wiraswasta',2,4,1,NULL,'087754490977',0.202902,0.0832874,0.119615,21,1);

/*Table structure for table `matriks_perbandingan_bpp` */

DROP TABLE IF EXISTS `matriks_perbandingan_bpp`;

CREATE TABLE `matriks_perbandingan_bpp` (
  `id` varchar(255) DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `semester` float DEFAULT NULL,
  `gaji` float DEFAULT NULL,
  `tanggungan` float DEFAULT NULL,
  `keaktifan` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `matriks_perbandingan_bpp` */

/*Table structure for table `matriks_perbandingan_ppa` */

DROP TABLE IF EXISTS `matriks_perbandingan_ppa`;

CREATE TABLE `matriks_perbandingan_ppa` (
  `id` varchar(255) DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `semester` float DEFAULT NULL,
  `gaji` float DEFAULT NULL,
  `tanggungan` float DEFAULT NULL,
  `keaktifan` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `matriks_perbandingan_ppa` */

insert  into `matriks_perbandingan_ppa`(`id`,`ipk`,`semester`,`gaji`,`tanggungan`,`keaktifan`) values ('ipk',1,3,7,7,5),('semester',0.333333,1,5,7,3),('gaji',0.142857,0.2,1,3,0.2),('tanggungan',0.142857,0.142857,0.333333,1,0.2),('keaktifan',0.2,0.333333,5,5,1),('total',1.81905,4.67619,18.3333,23,9.4),('bobot',0.481873,0.258664,0.0655121,0.0384041,0.155547),('cr',0.0975949,NULL,NULL,NULL,NULL);

/*Table structure for table `parameter_bpp` */

DROP TABLE IF EXISTS `parameter_bpp`;

CREATE TABLE `parameter_bpp` (
  `id_parameter` int(11) DEFAULT NULL,
  `nama_kriteria` varchar(255) DEFAULT NULL,
  `kaidah` int(11) DEFAULT NULL,
  `tipe` int(11) DEFAULT NULL,
  `bobot` float DEFAULT NULL,
  `q` float DEFAULT NULL,
  `p` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `parameter_bpp` */

insert  into `parameter_bpp`(`id_parameter`,`nama_kriteria`,`kaidah`,`tipe`,`bobot`,`q`,`p`) values (1,'ipk',1,5,0.4,0,1),(2,'semester',2,4,0.5,0,1),(3,'gaji',1,2,0.3,0,1),(4,'tanggungan',1,1,0.5,0,2),(5,'keaktifan',2,1,0.8,1,2);

/*Table structure for table `parameter_ppa` */

DROP TABLE IF EXISTS `parameter_ppa`;

CREATE TABLE `parameter_ppa` (
  `id_parameter` int(11) NOT NULL,
  `nama_kriteria` varchar(255) DEFAULT NULL,
  `kaidah` int(11) DEFAULT NULL,
  `tipe` int(11) DEFAULT NULL,
  `bobot` float DEFAULT NULL,
  `q` float DEFAULT NULL,
  `p` float DEFAULT NULL,
  PRIMARY KEY (`id_parameter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `parameter_ppa` */

insert  into `parameter_ppa`(`id_parameter`,`nama_kriteria`,`kaidah`,`tipe`,`bobot`,`q`,`p`) values (1,'ipk',1,5,0.481873,0,0.95),(2,'semester',1,4,0.258664,0,2),(3,'gaji',2,4,0.0655121,0,1),(4,'tanggungan',1,3,0.0384041,0,3),(5,'keaktifan',1,1,0.155546,0,0);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`email`,`password`,`nama`,`hak_akses`) values (1,'a','a','Ramadhan Rosihadi Perdana',1),(2,'b','b','Qonita Luthfia Sutino',2),(3,'pegawai','pegawai','Pegawai',2),(4,'admin','admin','Admin',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
