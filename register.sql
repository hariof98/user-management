-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 29, 2020 at 12:37 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--
CREATE Database IF NOT EXISTS `register`;
-- --------------------------------------------------------

--
-- Table structure for table `registerform`
--

DROP TABLE IF EXISTS `registerform`;
CREATE TABLE IF NOT EXISTS `registerform` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(55) NOT NULL,
  `Username` varchar(35) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Dob` varchar(25) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Status` int(1) NOT NULL,
  `authtoken` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Email` (`Email`)
) ;

--
-- Dumping data for table `registerform`
--

INSERT INTO `registerform` (`id`, `Name`, `Username`, `Password`, `Email`, `Mobile`, `Dob`, `Address`, `Status`, `authtoken`) VALUES
(148, 'Hari', 'hari', 'e2fc714c4727ee9395f324cd2e7f331f', 'harisridhar77@gmail.com', '9600853062', '12/11/1998', 'Tiruchirapalli', 1, '1fcbbd675446fef8394f3a187dd79441e7086a3d'),
(158, 'Jack', 'jack', '1d6c1e168e362bc0092f247399003a88', 'jack@gmail.com', '9632587410', '16/9/1998', 'Kerala', 0, '9fc81fa9e3b65f63a262ead4ab4c5fe0ef68f181'),
(157, 'Usha', 'usha', 'c17128b5ed50cd6f4860c262cbe1b324', 'usha@gmail.com', '9600399658', '15/7/1889', 'Mumbai', 0, '8d77a1e1556aa5f6972e66582ae82d9335c22f8d'),
(155, 'Anand', 'anand', 'ba81bc9f9d1e38af93a93eb3b2ca7f9d', 'anand@gmail.com', '9944968712', '12/10/1978', 'Chennai', 0, 'ba3091f1f4a8f409f0e16c096f06e18600818c87'),
(156, 'Rahul', 'rahul', '2acb7811397a5c3bea8cba57b0388b79', 'rahul@gmail.com', '6385697425', '15/11/2010', 'Bangalore', 0, '2a47914ab7a456b1b8483f84f4b4cc22fb2be8ae'),
(160, 'Worldline', 'worldline', '26cc7c455e9c42da23384c350e794121', 'worldline@gmail.com', '8547123690', '01/01/2000', 'France', 1, '573bb5aea9788e321287282be94d676f4d09fb6a'),
(159, 'Atos', 'atos', '3ad77fe81efdf544d4b135bb5cc4e09e', 'atos@gmail.com', '7589641256', '03/01/2000', 'Spain', 1, 'a78b262007ade77a1bfaebba783d6e5d7ef56c71'),
(161, 'Sridhar', 'sridhar', 'b3cfc62901450c772a6126b85c4c5fea', 'sridhar@gmail.com', '7859641256', '18/7/1998', 'Bahrain', 0, '4ad03f263e3449bedb1455002684b91902aeddb2'),
(165, 'Hrishi', 'hrishi', 'aa6b0f85557e6fce3a896b99388b4733', 'hrishi@gmail.com', '8574963210', '17/8/1999', 'KK Nagar', 0, 'd0a0d6d2b0b01e30532bacebe4e9ae7c39d651dc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
