-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2013 at 11:39 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `students portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `TABLE 1`
--

CREATE TABLE IF NOT EXISTS `table_1` (
  `ID` int(50) NOT NULL,
  `NAME` varchar(60) NOT NULL,
  `TYPE` varchar(60) NOT NULL,
  `LINK` varchar(80) NOT NULL,
  `TARGET` varchar(60) NOT NULL,
  `AUTHENTICATION` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TABLE 1`
--

INSERT INTO `TABLE_1` (`ID`, `NAME`, `TYPE`, `LINK`, `TARGET`, `AUTHENTICATION`) VALUES
(1, 'Home', 'Stdent portal', 'http://students.iitm.ac.in/home.php', '_self', 'LDAP'),
(2, 'Workflow', '', 'https://workflow.iitm.ac.in/student/', '_blank', 'BLANK'),
(3, 'Academics', '', 'http://academic.iitm.ac.in/', '_blank', 'BLANK'),
(4, 'Thought Cloud', '', 'http://students.iitm.ac.in/forum/', '_self', 'BLANK'),
(5, 'Placements', '', 'http://placement.iitm.ac.in/', '_blank', 'BLANK'),
(6, 'Moodle', '', 'https://courses.iitm.ac.in/', '_blank', 'BLANK'),
(7, 'Shaastra', '', 'http://www.shaastra.org/', '_blank', 'BLANK'),
(8, 'Saarang', '', 'http://www.saarang.org/', '_blank', 'BLANK'),
(9, 'CFI', '', 'http://cfi.iitm.ac.in/', '_blank', 'BLANK'),
(10, 'T5E', '', 'http://t5e.iitm.ac.in/', '_blank', 'BLANK'),
(11, 'Mess Registeration', '', 'http://students2.iitm.ac.in/', '_self', 'LDAP'),
(12, 'Student Search', '', 'http://students.iitm.ac.in/student-search.php', '_self', 'LDAP'),
(13, 'SAC', '', 'http://students2.iitm.ac.in/#', '_self', 'LDAP'),
(14, 'Executive Wing', '', 'http://students2.iitm.ac.in/#', '_self', 'LDAP'),
(15, 'Downloads', '', 'http://students2.iitm.ac.in/#', '_self', 'LDAP'),
(16, 'Sports', '', 'http://sports.iitm.ac.in/', '_blank', 'BLANK'),
(17, 'NPTEL', '', 'http://nptel.iitm.ac.in/', '_blank', 'BLANK'),
(18, 'Alumni', '', 'http://alumni.iitm.ac.in/', '_blank', 'BLANK'),
(19, 'Computer Centre', '', 'https://cc.iitm.ac.in/', '_blank', 'BLANK'),
(20, 'CCW', '', 'http://ccw.iitm.ac.in/', '_blank', 'BLANK'),
(21, 'Institute Hospital', '', 'http://hospital.iitm.ac.in/', '_blank', 'BLANK'),
(22, 'IC & SR', '', 'http://icandsr.iitm.ac.in/', '_blank', 'BLANK'),
(23, 'OIR', '', 'http://www.oir.iitm.ac.in/', '_blank', 'BLANK'),
(24, 'Tech-Soc', '', 'http://students2.iitm.ac.in/#', '_self', 'LDAP'),
(25, 'Lit-Soc', '', 'http://students2.iitm.ac.in/#', '_self', 'LDAP'),
(26, 'Schroeter', '', 'http://www.sports.iitm.ac.in/', '_blank', 'BLANK'),
(27, 'Astronomy', '', 'http://www.astro.iitm.ac.in/Home/', '_blank', 'BLANK'),
(28, 'Centre For Innovation', '', 'http://cfi.iitm.ac.in/', '_blank', 'BLANK'),
(29, 'IITMSAT', '', 'http://iitmsat.iitm.ac.in/', '_blank', 'BLANK'),
(30, 'NSS', '', 'http://www.nss.iitm.ac.in/', '_blank', 'BLANK'),
(31, 'China Studies Center', '', 'http://csc.iitm.ac.in/', '_blank', 'BLANK'),
(32, 'Dhruva', '', 'http://reflections.iitm.ac.in/', '_blank', 'BLANK'),
(33, 'S-Net', '', 'http://snet.iitm.ac.in/', '_blank', 'BLANK'),
(34, 'Extra Mural Lectures', '', 'http://eml.iitm.ac.in', '_blank', 'BLANK'),
(35, 'Hindi Club', '', 'http://hindi.iitm.ac.in/', '_blank', 'BLANK'),
(36, 'DOMS Sports', '', '', '_blank', 'BLANK'),
(37, 'Vivekananda Study Circle', '', 'http://www.vsc.iitm.ac.in/Home/', '_blank', 'BLANK'),
(38, 'iVIL', '', 'http://www.ivil.iitm.ac.in/', '_blank', 'BLANK'),
(39, 'Social Innovation', '', 'http://csie.iitm.ac.in/Education.html', '_blank', 'BLANK');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
