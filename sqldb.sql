/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.27 : Database - onlinevoting
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`onlinevoting` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `onlinevoting`;

/*Table structure for table `admintable` */

DROP TABLE IF EXISTS `admintable`;

CREATE TABLE `admintable` (
  `AdminName` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admintable` */

insert  into `admintable`(`AdminName`,`Password`) values ('admin','admin');

/*Table structure for table `partytable` */

DROP TABLE IF EXISTS `partytable`;

CREATE TABLE `partytable` (
  `PartyId` int(11) NOT NULL AUTO_INCREMENT,
  `PartyName` varchar(100) DEFAULT NULL,
  `PresidentName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `PhoneNum` varchar(100) DEFAULT NULL,
  `LoginName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Members` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `FileName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`PartyId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `partytable` */

insert  into `partytable`(`PartyId`,`PartyName`,`PresidentName`,`EmailId`,`PhoneNum`,`LoginName`,`Password`,`Members`,`Address`,`FileName`) values (1,'BJP','Amit Shah','bjp@gmail.com','9886239083','bjp','1234','25','RajajiNagar','election2.jpg'),(2,'Congress','Sonia Gandhi','bjp@gmail.com','9886239083','congress','1234','25','RajajiNagar','election2.jpg'),(3,'JDS','Devve Gowda','bjp@gmail.com','9886239083','jds','1234','25','RajajiNagar','election2.jpg');

/*Table structure for table `usertable` */

DROP TABLE IF EXISTS `usertable`;

CREATE TABLE `usertable` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `EmailId` varchar(50) DEFAULT NULL,
  `PhoneNum` varchar(50) DEFAULT NULL,
  `LoginName` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `VoterId` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `FileName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `usertable` */

insert  into `usertable`(`UserId`,`FirstName`,`LastName`,`EmailId`,`PhoneNum`,`LoginName`,`PASSWORD`,`VoterId`,`Address`,`FileName`) values (2,'user','user','user@gmail.com','9886239083','user','1234','voter101','RajajiNagar','Picture2.jpg'),(3,'user1','user1','user1@gmail.com','9886239083','user1','1234','voter102','RajajiNagar','Picture2.jpg'),(4,'user2','user2','user2@gmail.com','9886239083','user2','1234','voter103','VijayaNagar','Picture2.jpg'),(5,'user3','user3','user3@gmail.com','9886239083','user3','1234','voter104','Malleswaram','Picture2.jpg'),(6,'user4','user4','user4@gmail.com','9886239083','user4','1234','voter105','VijayaNagar','Picture2.jpg'),(7,'user5','user5','user5@gmail.com','9886239083','user5','1234','voter105','Malleswaram','Picture2.jpg'),(8,'user6','user6','user6@gmail.com','9886239083','user6','1234','voter106','RajajiNagar','Picture2.jpg'),(9,'user7','user7','user7@gmail.com','9886239083','user7','1234','voter107','JayaNagar','Picture2.jpg'),(10,'user8','user8','user8@gmail.com','9886239083','user8','1234','voter108','JPNagar','Picture2.jpg');

/*Table structure for table `votingtable` */

DROP TABLE IF EXISTS `votingtable`;

CREATE TABLE `votingtable` (
  `VotingId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `PartyId` int(11) DEFAULT NULL,
  `PartyName` varchar(50) DEFAULT NULL,
  `MinisterName` varchar(50) DEFAULT NULL,
  `FileName` varchar(100) DEFAULT NULL,
  `VotingStatus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`VotingId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `votingtable` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
