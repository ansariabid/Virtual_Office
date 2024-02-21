/*
SQLyog Ultimate v8.82 
MySQL - 5.1.45-community : Database - v_office
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`v_office` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `v_office`;

/*Table structure for table `attendence` */

DROP TABLE IF EXISTS `attendence`;

CREATE TABLE `attendence` (
  `email` varchar(40) DEFAULT NULL,
  `dtof` varchar(40) DEFAULT NULL,
  `rsn` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `attendence` */

insert  into `attendence`(`email`,`dtof`,`rsn`) values ('anand@gmail.com','2019-12-02T10:02','dkkmdmk'),('anand@gmail.com','1990-12-02T10:15','dvjhnj'),('anand@gmail.com','','');

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mob` varchar(10) DEFAULT NULL,
  `msg` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`name`,`email`,`mob`,`msg`) values ('anand','anand@gmail.com','1234456','hello sir');

/*Table structure for table `empleave` */

DROP TABLE IF EXISTS `empleave`;

CREATE TABLE `empleave` (
  `email` varchar(40) DEFAULT NULL,
  `lf` varchar(40) DEFAULT NULL,
  `lt` varchar(40) DEFAULT NULL,
  `rsn` varchar(100) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `empleave` */

insert  into `empleave`(`email`,`lf`,`lt`,`rsn`,`status`) values ('anand@gmail.com','2019-12-02','2019-01-05','jkdjkkjd','Approved'),('inshu@gmail.com','2019-12-02','2019-12-13','dkjf','apply');

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `ename` varchar(30) DEFAULT NULL,
  `adhar` varchar(30) DEFAULT NULL,
  `pswd` varchar(15) DEFAULT NULL,
  `cpswd` varchar(15) DEFAULT NULL,
  `gen` varchar(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `mob` varchar(10) DEFAULT NULL,
  `ques` varchar(40) DEFAULT NULL,
  `ans` varchar(40) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `post` varchar(30) DEFAULT NULL,
  `qualification` varchar(30) DEFAULT NULL,
  `doj` varchar(30) DEFAULT NULL,
  `salary_in` varchar(30) DEFAULT NULL,
  `sal_mode` varchar(50) DEFAULT NULL,
  `salary` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employee` */

insert  into `employee`(`ename`,`adhar`,`pswd`,`cpswd`,`gen`,`email`,`mob`,`ques`,`ans`,`dob`,`post`,`qualification`,`doj`,`salary_in`,`sal_mode`,`salary`,`address`) values ('anand gupta','238343749','1234','1234','male','anand@gmail.com','485848543','What is Your old Phone Number','585844',' 664','Assistant Manager','M.Com.','chh','Per Month','Cash On Hand','12000','aliganj'),('inshal','903299349839','1234','1234','male','inshu@gmail.com','9809834398','What is your Pet Name?','insa','ffbg','Accountant','M.Com.','vv','chy','tgtv','35465','4rgbn');

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `image` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `images` */

/*Table structure for table `img` */

DROP TABLE IF EXISTS `img`;

CREATE TABLE `img` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `img` */

insert  into `img`(`id`,`name`,`image`) values (NULL,'heart.png',NULL);

/*Table structure for table `manager` */

DROP TABLE IF EXISTS `manager`;

CREATE TABLE `manager` (
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `pswd` varchar(15) DEFAULT NULL,
  `cpswd` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `mob` varchar(10) DEFAULT NULL,
  `ques` varchar(40) DEFAULT NULL,
  `ans` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `manager` */

insert  into `manager`(`fname`,`lname`,`pswd`,`cpswd`,`email`,`mob`,`ques`,`ans`) values ('yugal','kishore','123','123','yug@gmail.com','9876543267','What is your Birthdate?','kukku');

/*Table structure for table `salary` */

DROP TABLE IF EXISTS `salary`;

CREATE TABLE `salary` (
  `name` varchar(40) DEFAULT NULL,
  `adhar` varchar(40) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `mob` varchar(10) DEFAULT NULL,
  `post` varchar(40) DEFAULT NULL,
  `salin` varchar(40) DEFAULT NULL,
  `salmode` varchar(40) DEFAULT NULL,
  `sal` varchar(10) DEFAULT NULL,
  `da` varchar(10) DEFAULT NULL,
  `oc` varchar(10) DEFAULT NULL,
  `ca` varchar(10) DEFAULT NULL,
  `coa` varchar(10) DEFAULT NULL,
  `hra` varchar(10) DEFAULT NULL,
  `ma` varchar(10) DEFAULT NULL,
  `ba` varchar(10) DEFAULT NULL,
  `gst` varchar(10) DEFAULT NULL,
  `date` varchar(40) DEFAULT NULL,
  `month` varchar(40) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `salary` */

insert  into `salary`(`name`,`adhar`,`email`,`mob`,`post`,`salin`,`salmode`,`sal`,`da`,`oc`,`ca`,`coa`,`hra`,`ma`,`ba`,`gst`,`date`,`month`,`status`) values ('anand','238343749','anand@gmail.com','485848543','Assistant Manager','Per Month','Cash On Hand','12000','1200','1000','2330','293','2000','1234','1234`','2160','2019-12-02','December','unpaid');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
