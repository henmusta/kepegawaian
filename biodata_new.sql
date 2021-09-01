/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.18-MariaDB : Database - biodata_app
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`biodata_app` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `biodata_app`;

/*Table structure for table `notification` */

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `message` varchar(111) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `notification` */

/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(120) DEFAULT NULL,
  `full_name` varchar(120) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_admin` */

insert  into `tb_admin`(`id`,`username`,`full_name`,`password`,`id_level`,`image`,`is_active`) values (1,'admin','Administrator','$2y$05$3oQlxl8wMGd8VecO4nFXre3SjeHWqFN79oMy/.pdEj5Q89xopj4oi',1,'admin.png','Y');

/*Table structure for table `tb_aplikasi` */

DROP TABLE IF EXISTS `tb_aplikasi`;

CREATE TABLE `tb_aplikasi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_owner` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tlp` varchar(50) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `nama_aplikasi` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `copy_right` varchar(50) DEFAULT NULL,
  `versi` varchar(20) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_aplikasi` */

insert  into `tb_aplikasi`(`id`,`nama_owner`,`alamat`,`tlp`,`title`,`nama_aplikasi`,`logo`,`copy_right`,`versi`,`tahun`) values (1,'Gink Technology','Enggal, Jl. Way Pengubuan No.16, Pahoman, Engal, Kota Bandar Lampung, Lampung 35132','089506016186','Kepegawaian','Kepegawaian','gink.png','Copy Right &copy; Gink Technology','1.0',2021);

/*Table structure for table `tb_diklat` */

DROP TABLE IF EXISTS `tb_diklat`;

CREATE TABLE `tb_diklat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `nama_diklat` varchar(150) DEFAULT NULL,
  `tahun_lulus` year(4) DEFAULT NULL,
  `tempat_diklat` varchar(150) DEFAULT NULL,
  `penyelenggara` varchar(150) DEFAULT NULL,
  `jenis` enum('Struktural','Fungsional','Teknis') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `tb_diklat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_diklat` */

insert  into `tb_diklat`(`id`,`id_user`,`nama_diklat`,`tahun_lulus`,`tempat_diklat`,`penyelenggara`,`jenis`) values (6,1,'232',2021,'333','33','Struktural'),(7,1,'3232',2021,'32','3232','Fungsional'),(8,1,'777',2021,'u798798','jhojho','Teknis'),(9,3,'23748979832',2024,'ajsdhka','asjdsgjhasgdhj','Struktural');

/*Table structure for table `tb_huk_disiplin` */

DROP TABLE IF EXISTS `tb_huk_disiplin`;

CREATE TABLE `tb_huk_disiplin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `jenis_huk` varchar(50) DEFAULT NULL,
  `nama_huk` varchar(50) DEFAULT NULL,
  `Tmt` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_huk_disiplin` */

insert  into `tb_huk_disiplin`(`id`,`id_user`,`jenis_huk`,`nama_huk`,`Tmt`) values (1,1,'32332','332323','2021-08-04');

/*Table structure for table `tb_jabatan` */

DROP TABLE IF EXISTS `tb_jabatan`;

CREATE TABLE `tb_jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `jabatan` varchar(150) DEFAULT NULL,
  `eselon` varchar(150) DEFAULT NULL,
  `tmt_jabatan` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_jabatan` */

insert  into `tb_jabatan`(`id`,`id_user`,`jabatan`,`eselon`,`tmt_jabatan`) values (16,1,'fighter','epic','2021-08-27'),(17,49,'kolonel','vi','2021-08-28'),(18,49,'2349023940','v','2021-08-28'),(19,58,'768686','898989','2021-08-02'),(20,3,'wqsa','sassasa','2021-08-26');

/*Table structure for table `tb_keluarga` */

DROP TABLE IF EXISTS `tb_keluarga`;

CREATE TABLE `tb_keluarga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tgl_pernikahan` date DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(150) DEFAULT NULL,
  `status` enum('Ibu','Ayah','Pasutri','Anak') DEFAULT NULL,
  `jenis_kelamin` enum('PRIA','PEREMPUAN') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `tb_keluarga_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_keluarga` */

insert  into `tb_keluarga`(`id`,`id_user`,`nama`,`tgl_pernikahan`,`tgl_lahir`,`pekerjaan`,`status`,`jenis_kelamin`) values (15,1,'435543',NULL,'2021-08-10','333','Ibu',NULL),(16,1,'435543',NULL,'2021-08-18','444','Ayah',NULL),(17,1,'435543','2021-08-29','2021-08-10','444','Pasutri',NULL),(18,1,'435543',NULL,'2021-08-24','444','Anak','PRIA');

/*Table structure for table `tb_kepangkatan` */

DROP TABLE IF EXISTS `tb_kepangkatan`;

CREATE TABLE `tb_kepangkatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `pangkat` varchar(150) DEFAULT NULL,
  `gol_ruang` varchar(20) DEFAULT NULL,
  `Tmt_pangkat` date DEFAULT NULL,
  `keterangan` enum('REGULER','PILIHAN','CPNS') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_kepangkatan` */

insert  into `tb_kepangkatan`(`id`,`id_user`,`pangkat`,`gol_ruang`,`Tmt_pangkat`,`keterangan`) values (21,1,'455555','3333','2021-08-01','REGULER'),(22,1,'33','33','2021-08-24','REGULER'),(23,1,'3','3','0000-00-00','REGULER'),(24,1,'eeee','eee','2021-08-10','REGULER'),(25,1,'asuuu','333','2021-08-03','REGULER'),(26,2,'33333','333','2021-11-11','REGULER'),(41,3,'2asd','dsadsa','2021-08-20','REGULER'),(42,3,'wdwa','sdada','2021-08-31','REGULER'),(43,3,'yagitulah','2222','2021-09-22','CPNS'),(44,3,'3333','333','2021-09-21','REGULER'),(45,3,'sadad','sadsad','2021-09-29','REGULER');

/*Table structure for table `tb_kepegawaian` */

DROP TABLE IF EXISTS `tb_kepegawaian`;

CREATE TABLE `tb_kepegawaian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `tmt_pangkat` date DEFAULT NULL,
  `pangkat_lanjut` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_kepegawaian` */

/*Table structure for table `tb_log_notif` */

DROP TABLE IF EXISTS `tb_log_notif`;

CREATE TABLE `tb_log_notif` (
  `id_notif` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `tmt_pangkat` date DEFAULT NULL,
  `tmt_notif` date DEFAULT NULL,
  `pangkat` varchar(50) DEFAULT NULL,
  `recorddate` timestamp NULL DEFAULT current_timestamp(),
  `keterangan` varchar(150) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  PRIMARY KEY (`id_notif`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_log_notif` */

insert  into `tb_log_notif`(`id_notif`,`id_user`,`tmt_pangkat`,`tmt_notif`,`pangkat`,`recorddate`,`keterangan`,`status`) values (37,3,'2021-09-21','2021-09-21',NULL,'2021-08-29 07:46:50','REGULER',1),(38,3,'2021-09-29','2025-09-29',NULL,'2021-08-29 07:47:51','REGULER',0);

/*Table structure for table `tb_pendidikan` */

DROP TABLE IF EXISTS `tb_pendidikan`;

CREATE TABLE `tb_pendidikan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `tingkat_pendidikan` varchar(150) DEFAULT NULL,
  `jurusan` varchar(150) DEFAULT NULL,
  `nama_sekolah` varchar(150) DEFAULT NULL,
  `tgl_lulus` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_pendidikan` */

insert  into `tb_pendidikan`(`id`,`id_user`,`tingkat_pendidikan`,`jurusan`,`nama_sekolah`,`tgl_lulus`) values (1,1,'222','222','222','2021-08-28'),(2,3,'PASCA SARJANA','TEKNIS','UNILA','2021-08-31');

/*Table structure for table `tb_penghargaan` */

DROP TABLE IF EXISTS `tb_penghargaan`;

CREATE TABLE `tb_penghargaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `nama_jasa` varchar(150) DEFAULT NULL,
  `asal_perolehan` varchar(150) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_penghargaan` */

insert  into `tb_penghargaan`(`id`,`id_user`,`nama_jasa`,`asal_perolehan`,`tahun`) values (2,1,'3232','323232',2021);

/*Table structure for table `tb_prestasi` */

DROP TABLE IF EXISTS `tb_prestasi`;

CREATE TABLE `tb_prestasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `tahun` int(100) DEFAULT NULL,
  `nilai_skp` decimal(15,2) DEFAULT NULL,
  `nilai_perilaku` decimal(15,2) DEFAULT NULL,
  `nilai_prestasi` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_prestasi` */

insert  into `tb_prestasi`(`id`,`id_user`,`tahun`,`nilai_skp`,`nilai_perilaku`,`nilai_prestasi`) values (1,1,2021,222.00,222.00,222.00);

/*Table structure for table `tb_settings` */

DROP TABLE IF EXISTS `tb_settings`;

CREATE TABLE `tb_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kepala` varchar(100) DEFAULT NULL,
  `nip_kepala` varchar(50) DEFAULT NULL,
  `jabatan_kepala` varchar(100) DEFAULT NULL,
  `mengetahui` varchar(100) DEFAULT NULL,
  `nip_saksi` varchar(100) DEFAULT NULL,
  `jabatan_saksi` varchar(100) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_settings` */

insert  into `tb_settings`(`id`,`nama_kepala`,`nip_kepala`,`jabatan_kepala`,`mengetahui`,`nip_saksi`,`jabatan_saksi`,`alamat`) values (1,'HENDRA WIJAYA MEGA ST,MT,MM','2147483647332443243','KEPALA BAPPELITBANG KABUPATEN TANGGAMUS','LUSIA UMINI, S.kom..MM','197803082007012011','sekretaris','Kota Agung');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `agama` enum('Islam','Kristen','Konghucu','Budha','Hindu','Dll') DEFAULT NULL,
  `jenis_kelamin` enum('Pria','Wanita') DEFAULT NULL,
  `status_nikah` enum('Sudah','Belum') DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `no_hp` varchar(150) DEFAULT NULL,
  `tempat_lahir` varchar(150) DEFAULT NULL,
  `last_notification_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`nik`,`image`,`nama`,`ttl`,`agama`,`jenis_kelamin`,`status_nikah`,`alamat`,`no_hp`,`tempat_lahir`,`last_notification_id`) values (1,'5434868687686767833332','5434868687686767833332.jpg','435543','2021-08-29','Islam','Pria','Sudah','453435','435345','435435',NULL),(2,'433255646','4332556462.jpg','mustakim','2021-08-29','Islam','Pria','Sudah','dfsfdsfsdf','324234324342','weeqewqe',NULL),(3,'323232','w.jpg','wanipiro','2021-08-29','Islam','Pria','Sudah','w','w','w',NULL);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(24) NOT NULL,
  `last_notification_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`last_notification_id`) values (1,'11',12);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
