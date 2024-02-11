-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2018 at 03:50 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE IF NOT EXISTS `faculty_info` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `faculty_id` varchar(250) NOT NULL,
  `faculty_name` varchar(250) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `faculty_id` (`faculty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`id`, `faculty_id`, `faculty_name`, `mobile_no`, `email_id`, `password`) VALUES
(3, 'TIT001', 'Zankhana Shah', 9537871595, 'brijeshnasit7@gmail.com', '123456'),
(4, 'TIT002', 'Bijal Dalwadi', 9537871595, 'bjd@gmail.com', '123456'),
(5, 'hjh', 'jhjh', 0, 'qwe@gmail.com', 'jhj'),
(6, '12', '12', 9537871595, 'brijeshnasit7@gmail.com', '12'),
(7, '15it068', 'Brijesh Nasit', 9537871595, 'brijeshnasit7@gmail.com', 'TUSHAR@123'),
(8, '15it060', 'brijeshnasit7@gmail.com', 9537871595, 'mbhatt66@gmail.com', '123456789'),
(9, '15it070', 'Brijesh Nasit', 9537871595, 'brijeshnasit7@gmail.com', '123456789'),
(10, '15it071', 'brijeshnasit7@gmail.com', 9537871595, 'mbhatt66@gmail.com', '121'),
(11, '15it0666', 'Brijesh Nasit', 9537871595, 'brijeshnasit7@gmail.com', '12'),
(12, '15it034', 'sdd', 121212, '12121212122@WE', '123457'),
(13, 'TIT006', 'bnds', 1234567890, 'b@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `history_details`
--

CREATE TABLE IF NOT EXISTS `history_details` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `marks` int(250) NOT NULL,
  `start_time` varchar(250) NOT NULL,
  `end_time` varchar(250) NOT NULL,
  `quiz_duration` varchar(250) NOT NULL,
  `q_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Dumping data for table `history_details`
--

INSERT INTO `history_details` (`id`, `student_id`, `name`, `subject`, `marks`, `start_time`, `end_time`, `quiz_duration`, `q_date`) VALUES
(86, '15it065', 'Brijesh Nasit', 'SE', 1, '12:27:53am', '12:28:01am', '8', '2018-04-27'),
(87, '15it065', 'Brijesh Nasit', 'SE', 2, '12:30:59am', '12:31:08am', '9', '2018-04-27'),
(88, '15it065', 'Brijesh Nasit', 'SE', 1, '09:15:49am', '09:18:28am', '159', '2018-04-27'),
(89, '15it066', 'Maulik', 'SE', 5, '09:28:35am', '09:29:04am', '29', '2018-04-27'),
(90, '15it062', 'Nidhish Nanavati', 'SE', 3, '09:30:52am', '09:31:15am', '23', '2018-04-27'),
(91, '15it065', 'Brijesh Nasit', 'SE', 1, '10:58:20am', '10:59:34am', '74', '2018-04-27'),
(92, '15it065', 'Brijesh Nasit', 'SE', 2, '02:24:13pm', '02:24:28pm', '15', '2018-04-27'),
(93, '15it065', 'Brijesh Nasit', 'SE', 3, '06:30:14pm', '06:32:13pm', '119', '2018-05-24'),
(94, '15it065', 'Brijesh Nasit', 'SE', 3, '06:30:14pm', '06:32:52pm', '158', '2018-05-24'),
(95, '15it065', 'Brijesh Nasit', 'SE', 1, '06:33:01pm', '06:33:06pm', '5', '2018-05-24'),
(96, '15it062', 'Nidhish Nanavati', 'SE', 1, '06:35:19pm', '06:35:22pm', '3', '2018-05-24'),
(97, '15it062', 'Nidhish Nanavati', 'SE', 1, '06:48:59pm', '06:49:02pm', '3', '2018-05-24'),
(98, '15it062', 'Nidhish Nanavati', 'SE', 1, '06:49:06pm', '06:49:09pm', '3', '2018-05-24'),
(99, '15it062', 'Nidhish Nanavati', 'SE', 3, '06:49:18pm', '06:57:55pm', '517', '2018-05-24'),
(100, '15it065', 'Brijesh Nasit', 'SE', 2, '07:23:24pm', '07:23:30pm', '6', '2018-05-24'),
(101, '15it065', 'Brijesh Nasit', 'TOC', 2, '07:32:52pm', '07:32:58pm', '6', '2018-05-24'),
(102, '15it065', 'Brijesh Nasit', 'SE', 2, '07:34:03pm', '07:34:07pm', '4', '2018-05-24'),
(103, '15it065', 'Brijesh Nasit', 'SE', 2, '07:41:37pm', '07:41:40pm', '3', '2018-05-24'),
(104, '15it065', 'Brijesh Nasit', 'SE', 4, '07:41:45pm', '07:42:03pm', '18', '2018-05-24'),
(105, '15it065', 'Brijesh Nasit', 'SE', 2, '07:42:14pm', '07:42:19pm', '5', '2018-05-24'),
(112, '15it065', 'Brijesh Nasit', 'TOC', 0, '07:49:21pm', '07:49:33pm', '12', '2018-05-24'),
(113, '15it065', 'Brijesh Nasit', 'TOC', 2, '07:49:39pm', '07:49:58pm', '19', '2018-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `se_qbank`
--

CREATE TABLE IF NOT EXISTS `se_qbank` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `questions` varchar(500) NOT NULL,
  `opa` varchar(500) NOT NULL,
  `opb` varchar(500) NOT NULL,
  `opc` varchar(500) NOT NULL,
  `opd` varchar(500) NOT NULL,
  `ans` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `se_qbank`
--

INSERT INTO `se_qbank` (`id`, `questions`, `opa`, `opb`, `opc`, `opd`, `ans`) VALUES
(1, 'Which one of the following is a functional requirement ?', 'Maintainability', 'Portability', 'Robustness', 'None of the mentioned', 'None of the mentioned'),
(2, 'Which one of the following is a requirement that fits in a developer’s module ?', 'Availability', 'Testability', 'Usability', 'Flexibility', 'Testability'),
(3, 'Selection of a model is based on', 'Requirements', 'Development team & Users', 'Project type and associated risk', 'All of the mentioned', ' All of the mentioned'),
(4, 'Which two models doesn’t allow defining requirements early in the cycle?', 'Waterfall & RAD', 'Prototyping & Spiral', 'Prototyping & RAD', 'Waterfall & Spiral', 'Prototyping & Spiral'),
(5, 'Which of the following life cycle model can be chosen if the development team has less experience on similar projects?', 'Spiral', 'Waterfall', 'RAD', 'Iterative Enhancement Model', 'Spiral'),
(6, 'A company is developing an advance version of their current software available in the market, what model approach would they prefer ?', 'RAD', 'Iterative Enhancement', 'Both RAD & Iterative Enhancement', 'Spiral', 'Both RAD & Iterative Enhancement'),
(7, 'What are the types of requirements ?', 'Availability', 'Reliability', 'Usability', 'All of the mentioned', 'All of the mentioned'),
(8, 'Select the developer specific requirement ?', 'Potability', 'Maintainability', 'Availability', 'Both Potability and Maintainability', 'Both Potability and Maintainability'),
(9, 'Which one of the following is not a step of requirement engineering?', 'elicitation', 'design', 'analysis', 'documentation', 'design'),
(10, 'QFD stands for', 'quality function design', 'quality function development', 'quality function deployment', 'none of the mentioned', 'quality function deployment'),
(11, 'Which one of the following is not a step of requirement engineering?', 'elicitation', 'design', 'analysis', 'documentation', 'design'),
(12, 'QFD stands for', 'quality function design', 'quality function development', 'quality function deployment', 'none of the mentioned', 'quality function deployment'),
(13, 'The user system requirements are the parts of which document ?', 'SDD', 'SRS', 'DDD', 'SRD', 'SRS'),
(14, 'Which is one of the most important stakeholder from the following ?', 'Entry level personnel', 'Middle level stakeholder', 'Managers', 'Users of the software', 'Users of the software'),
(15, 'what is flow?', 'a', 'b', 'c', '123', '(c)');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(250) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `student_id`, `student_name`, `mobile_no`, `email_id`, `password`) VALUES
(20, '15it065', 'Brijesh Nasit', 9537871595, 'brijeshnasit7@gmail.com', '123456'),
(21, '15it069', 'Brijesh Nasit', 9537871595, 'brijeshnasit7@gmail.com', '123456'),
(26, '15it066', 'Maulik', 9537871595, 'maulikbhatt045@gmail.com', '654321'),
(30, '15it061', 'BrijeshNasit', 9537871595, 'brijeshnasit7@gmail.com', '123456'),
(31, '15it062', 'Nidhish Nanavati', 9537871595, 'brijeshnasit7@gmail.com', '123456'),
(32, '15EL024', 'Khushi', 9898987817, 'khishi@gmail.com', 'ilovenidhish'),
(33, '15it089', 'jdnfdjfndjfd', 8976543278, 'nidj@hgh.com', 'date123'),
(37, '15it097', 'Brijesh Nasit', 953787159, 'brijeshnasit7@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `toc_qbank`
--

CREATE TABLE IF NOT EXISTS `toc_qbank` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `questions` varchar(500) NOT NULL,
  `opa` varchar(250) NOT NULL,
  `opb` varchar(250) NOT NULL,
  `opc` varchar(250) NOT NULL,
  `opd` varchar(250) NOT NULL,
  `ans` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `toc_qbank`
--

INSERT INTO `toc_qbank` (`id`, `questions`, `opa`, `opb`, `opc`, `opd`, `ans`) VALUES
(1, 'Which of the following statements is correct?', 'A = { If a^n b^n  | n = 0,1, 2, 3 ..} is regular language', 'Set B of all strings of equal number of a''s and b''s deines a regular language', 'L (A* B*)? B gives the set A', 'None of these', 'L (A* B*)? B gives the set A'),
(2, 'P, Q, R are three languages, if P and R are regular and if PQ = R, then', 'Q has to be regular', 'Q cannot be regular', 'Q need not be regular', 'Q cannot be a CFL', 'Q need not be regular'),
(3, 'Which of the folowing definitions below generates the same language as L, where L = {xn yn such that n > = 1} ? (I) E —> xEy | xy  (II) xy | (x+ xyy+)  (III) x+y+', 'I only', 'I and II', 'II and III', 'II only', 'I only'),
(4, 'Following context free grammar S —> aB | bA  A —>b | aS | bAA B —> b | bS | aBB  generates strings of terminals that have', 'equal number of a''s and b''s', 'odd number of a''s and odd number b''s', 'even number of a''s and even number of b''s', 'odd number of a''s and even number of a''s', 'equal number of a''s and b''s'),
(5, ' The set {anbn | n = 1, 2, 3 ...} can be generated by the CFG', 'S ->ab | aSb', 'S ->aaSbb + abS', 'S-> ab | aSb | E', 'S ->aaSbb | ab | aabb', 'S ->aaSbb | ab | aabb'),
(6, 'The CFG  s---> as | bs |  a |  b  is equivalent to regular expression', '(a + b)', '(a + b) (a + b)*', '(a + b) (a + b)', 'None of these', '(a + b) (a + b)*'),
(8, ' Consider the grammar :  S —> ABCc | Abc    BA —> AB    Bb —> bb    Ab —> ab    Aa —> aa   Which of the following sentences can be derived by this grammar ', 'abc', 'aab', 'abcc', 'abbb', 'abc'),
(9, 'Pumping lemma is generally used for proving that', 'given grammar is regular', 'given grammar is not regular', 'whether two given regular expressions are equivalent or not', 'None of these', 'given grammar is not regular'),
(10, 'The language of all words with at least 2 a''s can be described by the regular expression', '(ab)*a and a (ba)*', '(a + b)* ab* a (a + b)*', 'b* ab* a (a + b)*', 'all of these', 'all of these'),
(11, 'Any string of terminals that can be generated by the following CFG is  S-> XY    X--> aX | bX | a     Y-> Ya  | Yb | a', 'has atleast one ''b''', 'should end in a ''a''', 'has no consecutive a''s or b''s', 'has atleast two a''s', 'has atleast two a''s'),
(12, 'Set of regular languages over a given alphabet set is not closed under', 'union', 'complementation', 'intersection', 'All of these', 'All of these'),
(13, 'Which of the following statement is correct?', 'All languages can not be generated by CFG', 'Any regular language has an equivalent CFG', 'Some non regular languages can''t be generated by CFG', 'both (b) and (c)', 'both (b) and (c)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
