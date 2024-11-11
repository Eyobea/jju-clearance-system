-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 04:42 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clearance`
--
CREATE DATABASE IF NOT EXISTS `clearance` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `clearance`;

-- --------------------------------------------------------

--
-- Table structure for table `cafe`
--

CREATE TABLE `cafe` (
  `name` varchar(30) NOT NULL,
  `id` varchar(10) NOT NULL,
  `Material_name` varchar(11) NOT NULL,
  `Material_Id` varchar(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cafe`
--

INSERT INTO `cafe` (`name`, `id`, `Material_name`, `Material_Id`, `quantity`, `price`) VALUES
('vxs v', '234c', 'fg', 'xfc', 45, 3);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptId` varchar(10) NOT NULL,
  `deptname` varchar(30) NOT NULL,
  `Faculty` varchar(40) NOT NULL,
  `campus` varchar(20) NOT NULL,
  `Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptId`, `deptname`, `Faculty`, `campus`, `Year`) VALUES
('100', 'computer science', 'teacher', 'jigjiga university', 4),
('101', 'IT', 'teacher', 'jigjiga university', 4),
('102', 'civil enginnering', 'fgh', 'jigjiga university', 5),
('103', 'electrical', 'teacher', 'jigjiga university', 5),
('104', 'mechanical enginnering', 'teacher', 'jigjiga university', 5),
('105', 'nutrition', 'teacher', 'jigjiga university', 4);

-- --------------------------------------------------------

--
-- Table structure for table `departmente`
--

CREATE TABLE `departmente` (
  `Material_Id` int(11) NOT NULL,
  `Material_Name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departmente`
--

INSERT INTO `departmente` (`Material_Id`, `Material_Name`, `quantity`, `price`, `name`, `id`) VALUES
(566, 'pen', 8, 8, 'nibretu ayele bayee', 'R/5845'),
(234, 'wdgsd', 9, 9, 'nibretu ayele bayee', 'R/5845');

-- --------------------------------------------------------

--
-- Table structure for table `dormitory`
--

CREATE TABLE `dormitory` (
  `Material_Id` int(8) NOT NULL,
  `Material_Name` varchar(20) NOT NULL,
  `quantity` int(15) NOT NULL,
  `price` int(50) NOT NULL,
  `name` varchar(55) NOT NULL,
  `id` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dormitory`
--

INSERT INTO `dormitory` (`Material_Id`, `Material_Name`, `quantity`, `price`, `name`, `id`) VALUES
(564, 'gos', 6, 34, 'endashaw abera', '546r'),
(234, 'scl', 1, 4, 'eyob  yibeltal', 'R/7878/14'),
(566, 'pen', 1, 3, 'nibretu ayele bayee', 'R2355'),
(566, 'pen', 8, 8, 'nibretu ayele bayee', 'R/5845'),
(566, 'pen', 1, 9, 'nibretu ayele bayee', 'R/5845');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `Material_Id` int(11) NOT NULL,
  `Material_Name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`Material_Id`, `Material_Name`, `quantity`, `price`, `name`, `id`) VALUES
(566, 'pen', 3, 9, 'nibretu ayele bayee', 'R2355'),
(566, 'pen', 9, 9, 'nibretu ayele bayee', 'R/5845');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `name` varchar(30) NOT NULL,
  `id` varchar(11) NOT NULL,
  `reason_of_clearance` varchar(2000) NOT NULL,
  `requaste_date` varchar(200) NOT NULL,
  `responce` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`name`, `id`, `reason_of_clearance`, `requaste_date`, `responce`) VALUES
('eyob assefa yibeltal', 'R23455678', 'fweoger', '2024-05-28', 'ok'),
('eyob assefa yibeltal', 'R23455678', 'fweoger', '2024-05-28', 'ok'),
('eyob assefa yibeltal', 'R23455678', 'fweoger', '2024-05-28', 'ok'),
('eyob assefa yibeltal', 'R23455678', 'fweoger', '2024-05-28', 'ok'),
('daniel elias wadelo', 'R/5845', 'fweoger', '2024-05-28', 'asdfg'),
('daniel elias wadel', 'R/5845', 'fweoger', '2024-05-28', 'yes you can');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Idno` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `office` varchar(60) NOT NULL,
  `campus` varchar(60) NOT NULL,
  `favorite_food` varchar(60) NOT NULL,
  `primary_school` varchar(60) NOT NULL,
  `born_place` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Idno`, `username`, `password`, `role`, `status`, `office`, `campus`, `favorite_food`, `primary_school`, `born_place`) VALUES
('jju908', 'admin', '0000', 'Admin', '0', '34', 'jigjiga university', 'shiro', 'adiss', 'adiss'),
('jju2344', 'sport', '0000', 'sport', '0', '11', 'jigjiga university', 'shiro', 'adiss', 'adiss'),
('jju678', 'bs', '0000', 'bookstore', '0', '54', 'jigjiga university', 'shiro', 'adiss', 'adiss'),
('jju456', 'dormitory', '0000', 'dormitory', '0', '98', 'jigjiga university', 'shiro', 'adiss', 'adiss'),
('jju34566', 'registrar', '7777', 'registrar', '0', '78', 'jigjiga university', 'shiro', 'adiss', 'adiss'),
('	jju5677', 'humanResource', '0000', 'humanResource', '0', '43', 'jigjiga university', 'shiro', 'adiss', 'adiss'),
('jju456', 'library', '0000', 'library', '0', '55', 'jigjiga university', 'shiro', 'adiss', 'adiss'),
('jju45644', 'cafe', '0000', 'cafe', '0', '56', 'jigjiga university', 'shiro', 'adiss', 'adiss');

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `Material_Id` int(11) NOT NULL,
  `Material_Name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`Material_Id`, `Material_Name`, `quantity`, `price`, `name`, `id`) VALUES
(566, 'pen', 1, 4, 'nibretu ayele bayee', 'R/5845'),
(566, 'pen', 2, 3, 'nibretu ayele bayee', 'R/5845');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Fname` varchar(20) NOT NULL,
  `Mname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Sex` enum('male','female','','') NOT NULL,
  `Idno` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `role` varchar(7) NOT NULL DEFAULT 'student',
  `program` enum('Regular','Extension','summer') NOT NULL,
  `faculty` varchar(40) NOT NULL,
  `acadamicYear` year(4) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `mothersFatherName` varchar(30) NOT NULL,
  `campus` varchar(60) NOT NULL,
  `favorite_food` varchar(60) NOT NULL,
  `primary_school` varchar(60) NOT NULL,
  `born_place` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Fname`, `Mname`, `Lname`, `Sex`, `Idno`, `password`, `status`, `role`, `program`, `faculty`, `acadamicYear`, `phone`, `mothersFatherName`, `campus`, `favorite_food`, `primary_school`, `born_place`) VALUES
('Eyob', 'Yibeltal', 'Yibeltal', 'male', 'R/1145', '0000', 0, 'student', 'Regular', 'computing', 2013, '0918256777', 'mm', 'jigjiga university', 'shiro', 'yetmen', 'bichena'),
('markos', 'kibatu', 'weldesenbet', 'male', 'R/1932/13', '0000', 0, 'student', 'Regular', 'computing', 2013, '0932554667', 'sfg', 'dsds', 'shiro', 'adiss', 'adiss'),
('markos', 'kibatu', 'weldesenbet', 'male', 'R/1952/13', '0000', 0, 'student', 'Regular', 'computing', 2013, '09324554667', 'sfg', 'dsds', 'shiro', 'adiss', 'adiss'),
('', 'ayele', 'baye', 'male', 'R/2375/13', '0000', 0, '1', 'Regular', 'computing', 2012, '906862339', 'fjhjk', 'jij', 'shiro', 'adiss', 'adiss'),
('yayew', 'belay', 'zeleke', 'male', 'R/3014', '0000', 0, 'student', 'Regular', 'computing', 2013, '0935701350', 'qwe', 'jigjiga university', 'shiro', 'wefargif', 'wefargif'),
('molalegne', 'tamiru', 'bezie', 'male', 'R/5845', '0000', 0, 'student', 'Regular', 'computing', 2013, '0927670889', 'tyuyy', 'jigjiga university', 'shiro', 'adiss', 'adiss'),
('jonee', 'aragewe', 'agenagne', 'male', 'R1233', '0000', 0, 'student', 'Regular', 'computing', 2012, '906834', 'fjhjk', 'jij', 'shiro', 'adiss', 'adiss'),
('endashaw', 'abera', 'abula', 'male', 'R1234', '0000', 0, 'student', 'Regular', 'computing', 2012, '0717846345', 'fgdr', 'jigjiga', 'shiro', 'adiss', 'adiss'),
('bayech', 'yibeltal', 'assefa', 'female', 'R2355', '0000', 0, '0', 'Regular', '', 2012, '2345686564', 'fjhjkf', 'jigjiga', 'shiro', 'adiss', 'adiss'),
('bilen', 'matny', 'askdi', 'female', 'R4567', '0000', 0, 'student', 'Regular', '', 2012, '0935411376', 'fgdr', 'jigjiga', 'shiro', 'adiss', 'adiss'),
('ilen', 'matny', 'askdi', 'female', 'R4568', '0000', 1, 'student', 'Regular', '', 2012, '0935411377', 'fgdr', 'jigjiga', 'shiro', 'adiss', 'adiss');

-- --------------------------------------------------------

--
-- Table structure for table `studentclearance`
--

CREATE TABLE `studentclearance` (
  `stud_id` varchar(8) NOT NULL,
  `faculty` tinyint(1) NOT NULL DEFAULT '0',
  `department` tinyint(1) NOT NULL DEFAULT '0',
  `library` tinyint(1) NOT NULL DEFAULT '0',
  `bookstore` tinyint(1) NOT NULL DEFAULT '0',
  `cafeteria` tinyint(1) NOT NULL DEFAULT '0',
  `dormitory` tinyint(1) NOT NULL DEFAULT '0',
  `sport` tinyint(1) NOT NULL DEFAULT '0',
  `Clearance` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentclearance`
--

INSERT INTO `studentclearance` (`stud_id`, `faculty`, `department`, `library`, `bookstore`, `cafeteria`, `dormitory`, `sport`, `Clearance`) VALUES
('R/1145', 0, 0, 0, 0, 0, 2, 1, 0),
('R/3014', 0, 0, 0, 0, 0, 0, 1, 0),
('R/5845', 0, 0, 0, 0, 0, 0, 1, 0),
('R2355', 0, 1, 0, 0, 1, 0, 1, 1),
('R4567', 0, 0, 0, 0, 0, 0, 0, 0),
('R4568', 0, 0, 0, 0, 0, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptId`),
  ADD UNIQUE KEY `deptname` (`deptname`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Idno`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `Idno` (`Idno`),
  ADD KEY `Idno_2` (`Idno`);
ALTER TABLE `student` ADD FULLTEXT KEY `password` (`password`);

--
-- Indexes for table `studentclearance`
--
ALTER TABLE `studentclearance`
  ADD PRIMARY KEY (`stud_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentclearance`
--
ALTER TABLE `studentclearance`
  ADD CONSTRAINT `studentclearance_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `student` (`Idno`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Database: `clearancee`
--
CREATE DATABASE IF NOT EXISTS `clearancee` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `clearancee`;

-- --------------------------------------------------------

--
-- Table structure for table `book_store`
--

CREATE TABLE `book_store` (
  `Full_Name` varchar(200) NOT NULL,
  `ID_Number` varchar(60) NOT NULL,
  `comment` varchar(60) NOT NULL,
  `year` varchar(20) NOT NULL,
  `college` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_store`
--

INSERT INTO `book_store` (`Full_Name`, `ID_Number`, `comment`, `year`, `college`, `department`) VALUES
('eyob yibeltal', 'R/1145/13', 'clear', '4th year', 'IOT', 'computer science'),
('yohannis agenagn', 'R/3014/13', 'clear', '4th year', 'IOT', 'computer science'),
('daniel elias', 'R/5845/13', 'clear', '4th year', 'IOT', 'computer science');

-- --------------------------------------------------------

--
-- Table structure for table `cafeterian`
--

CREATE TABLE `cafeterian` (
  `Full_Name` varchar(60) NOT NULL,
  `ID_Number` varchar(60) NOT NULL,
  `comment` varchar(2000) NOT NULL,
  `year` varchar(60) NOT NULL,
  `college` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Full_Name` varchar(60) NOT NULL,
  `ID_Number` varchar(60) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `year` varchar(60) NOT NULL,
  `college` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Full_Name`, `ID_Number`, `comment`, `year`, `college`, `department`) VALUES
('eyob yibeltal', 'R/1145/13', 'asdfgh', '4th year', 'IOT', 'computer science'),
('yohannis agenagn', 'R/3014/13', 'clear', '4th year', 'IOT', 'computer science'),
('daniel elias', 'R/5845/13', 'boot', '4th year', 'IOT', 'computer science');

-- --------------------------------------------------------

--
-- Table structure for table `dormitary`
--

CREATE TABLE `dormitary` (
  `Full_Name` varchar(60) NOT NULL,
  `ID_Number` varchar(60) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `year` varchar(60) NOT NULL,
  `college` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dormitary`
--

INSERT INTO `dormitary` (`Full_Name`, `ID_Number`, `comment`, `year`, `college`, `department`) VALUES
('eyob yibeltal', 'R/1145/13', 'clear', '4th year', 'IOT', 'computer science'),
('yohannis agenagn', 'R/3014/13', 'clear', '4th year', 'IOT', 'computer science'),
('daniel elias', 'R/5845/13', 'clear', '4th year', 'IOT', 'computer science');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registerar`
--

CREATE TABLE `registerar` (
  `Full_Name` varchar(60) NOT NULL,
  `ID_Number` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `year` varchar(60) NOT NULL,
  `college` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerar`
--

INSERT INTO `registerar` (`Full_Name`, `ID_Number`, `comment`, `year`, `college`, `department`) VALUES
('eyob yibeltal', 'R/1145/13', 'clear', '4th year', 'IOT', 'computer science'),
('yohannis agenagn', 'R/3014/13', 'clear', '4th year', 'IOT', 'computer science'),
('daniel elias', 'R/5845/13', 'clear', '4th year', 'IOT', 'computer science');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `year` varchar(60) NOT NULL,
  `college` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL,
  `ID_Number` varchar(20) NOT NULL,
  `Full_Name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`username`, `password`, `year`, `college`, `department`, `ID_Number`, `Full_Name`) VALUES
('eyoba', '12345', '4th year', 'IOT', 'computer science', 'R/1145/13', 'eyob yibeltal'),
('jone', '12345', '4th year', 'IOT', 'computer science', 'R/3014/13', 'yohannis agenagn'),
('dani', '12345', '4th year', 'IOT', 'computer science', 'R/5845/13', 'daniel elias');
--
-- Database: `insertuseraccount`
--
CREATE DATABASE IF NOT EXISTS `insertuseraccount` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `insertuseraccount`;

-- --------------------------------------------------------

--
-- Table structure for table `insertuseraccount`
--

CREATE TABLE `insertuseraccount` (
  `Id` int(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `account_number` varchar(40) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Database: `milcard`
--
CREATE DATABASE IF NOT EXISTS `milcard` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `milcard`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `category_id` int(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `book_copies` int(11) NOT NULL,
  `book_pub` varchar(100) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `procurmentOffice` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `Title`, `category_id`, `author`, `book_copies`, `book_pub`, `isbn`, `status`, `procurmentOffice`) VALUES
(15, 'Natural Resources', 8, 'Robin Kerrod', 20, 'Marshall Cavendish Corporation', '1-85435-628-3', 'ddhh', 'library'),
(17, 'Algebra 1', 3, 'Carolyn Bradshaw, Michael Seals', 35, 'Pearson Education, Inc', '0-13-125087-6', 'Damage', ''),
(18, 'The Philippine Daily Inquirer', 7, '..', 3, 'Pasay City', '..', 'New', ''),
(19, 'Science in our World', 4, 'Brian Knapp', 25, 'Regency Publishing Group', '0-13-050841-1', 'Lost', ''),
(20, 'Literature', 9, 'Greg Glowka', 20, 'Regency Publishing Group', '0-13-050841-1', 'Old', ''),
(21, 'Lexicon Universal Encyclopedia', 5, 'Lexicon', 10, 'Lexicon Publication', '0-7172-2043-5', 'Old', ''),
(22, 'Science and Invention Encyclopedia', 5, 'Clarke Donald, Dartford Mark', 16, 'H.S. Stuttman inc. Publishing', '0-87475-450-x', 'New', ''),
(23, 'Integrated Science Textbook ', 4, 'Merde C. Tan', 15, 'Vibal Publishing House Inc.', '971-570-124-8', 'New', ''),
(24, 'Algebra 2', 3, 'Glencoe McGraw Hill', 15, 'The McGrawHill Companies Inc.', '978-0-07-873830-2', 'New', ''),
(25, 'Wiki at Panitikan ', 7, 'Lorenza P. Avera', 28, 'JGM & S Corporation', '971-07-1574-7', 'Damage', ''),
(26, 'English Expressways TextBook for 4th year', 9, 'Virginia Bermudez Ed. O. et al', 23, 'SD Publications, Inc.', '978-971-0315-33-8', 'New', ''),
(27, 'Asya Pag-usbong Ng Kabihasnan ', 8, 'Ricardo T. Jose, Ph . D.', 21, 'Vibal Publishing House Inc.', '971-07-2324-3', 'New', ''),
(28, 'Literature (the readers choice)', 9, 'Glencoe McGraw Hill', 20, '..', '0-02-817934-x', 'Damage', ''),
(29, 'Beloved a Novel', 9, 'Toni Morrison', 13, '..', '0-394-53597-9', 'Old', ''),
(30, 'Silver Burdett Engish', 2, 'Judy Brim', 12, 'Silver Burdett Company', '0-382-03575-5', 'Old', ''),
(31, 'The Corporate Warriors (Six Classic Cases in American Business)', 8, 'Douglas K. Ramsey', 8, 'Houghton Miffin Company', '0-395-35487-0', 'Old', ''),
(32, 'Introduction to Information System', 9, 'Cristine Redoblo', 10, 'CHMSC', '123-132', 'New', ''),
(41, 'network', 0, 'bere', 7, 'gerr', '17234', 'Damage', ''),
(42, 'computer security', 0, 'feasele', 3, 'gorge', '432er', 'Damage', ''),
(44, 'computer enginnering', 0, 'jon', 3, 'sdda', '90876', 'Old', ''),
(50, 'java', 0, 'aasa', 4, 'gerr', 'werrt', 'Subject for Replacement', ''),
(52, 'java', 0, 'keven', 7, 'ethio', '43wer', 'Old', ''),
(53, 'system analysis', 0, 'parkash', 7, 'ethio', 'dsfv132', 'Lost', ''),
(54, 'operating system', 0, 'dgj', 7, 'gghj', '455', 'Lost', '');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrow_id` int(11) NOT NULL,
  `ISBN` varchar(30) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `stud_Id` bigint(50) NOT NULL,
  `date_borrow` datetime NOT NULL,
  `procurmentOffice` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `ISBN`, `Title`, `stud_Id`, `date_borrow`, `procurmentOffice`) VALUES
(494, '2', 'vbcnbv', 0, '0000-00-00 00:00:00', 'library'),
(495, '1854356283', 'naturanscience', 0, '0000-00-00 00:00:00', 'library'),
(496, '1854356283', 'naturanscience', 0, '0000-00-00 00:00:00', 'library');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptId` varchar(10) NOT NULL,
  `deptname` varchar(30) NOT NULL,
  `Faculty` varchar(40) NOT NULL,
  `campus` varchar(20) NOT NULL,
  `Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptId`, `deptname`, `Faculty`, `campus`, `Year`) VALUES
('CSD', 'computerscience', 'computing', 'poly', 4),
('dfg', 'sdfgh', 'dfvgbh', 'poly', 3),
('dfgh', 'fgh', 'fgh', 'zenzelima', 4),
('EED', 'electrical', 'electricalcomputerenginering', 'poly', 5),
('sdcfvg', 'xcfvgbh', 'dcfvgbh', 'zenzelima', 4),
('sdfg', 'sdf', 'xczv', 'fgh', 5);

-- --------------------------------------------------------

--
-- Table structure for table `fbclearance`
--

CREATE TABLE `fbclearance` (
  `staff_id` varchar(20) NOT NULL,
  `manager` int(11) NOT NULL DEFAULT '0',
  `finance` int(11) NOT NULL DEFAULT '0',
  `library` int(11) NOT NULL DEFAULT '0',
  `sport` int(11) NOT NULL DEFAULT '0',
  `bookstore` int(11) NOT NULL DEFAULT '0',
  `registrar` int(11) NOT NULL DEFAULT '0',
  `distance&continuing` int(11) NOT NULL DEFAULT '0',
  `labstore` int(11) NOT NULL DEFAULT '0',
  `housing` int(11) NOT NULL DEFAULT '0',
  `energycenter` int(11) NOT NULL DEFAULT '0',
  `Ethics` int(11) NOT NULL DEFAULT '0',
  `teacherassocation` int(11) NOT NULL DEFAULT '0',
  `mentenanceTeam` int(11) NOT NULL DEFAULT '0',
  `InnovationCenter` int(11) NOT NULL DEFAULT '0',
  `officeservice` int(11) NOT NULL DEFAULT '0',
  `fixedAssets` int(11) NOT NULL DEFAULT '0',
  `revenueCenter` int(11) NOT NULL DEFAULT '0',
  `loanSaving` int(11) NOT NULL DEFAULT '0',
  `Clearance` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fbclearance`
--

INSERT INTO `fbclearance` (`staff_id`, `manager`, `finance`, `library`, `sport`, `bookstore`, `registrar`, `distance&continuing`, `labstore`, `housing`, `energycenter`, `Ethics`, `teacherassocation`, `mentenanceTeam`, `InnovationCenter`, `officeservice`, `fixedAssets`, `revenueCenter`, `loanSaving`, `Clearance`) VALUES
('ad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU117UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU118UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU119UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU120UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU121UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU123UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU124UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU125UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU134UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU150UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU176UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('cfvgbhn', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('dcfvgbh', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ghd', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ghjfg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('registrar', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('sdcfvgbh', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('sxdcfvg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('sxdcfvgbh', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('xdcfvgbhn', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `liability`
--

CREATE TABLE `liability` (
  `liablityId` int(11) NOT NULL,
  `staffId` varchar(20) NOT NULL,
  `liabilityName` varchar(40) NOT NULL,
  `liabilityType` date NOT NULL,
  `date_added` date NOT NULL,
  `office` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liability`
--

INSERT INTO `liability` (`liablityId`, `staffId`, `liabilityName`, `liabilityType`, `date_added`, `office`) VALUES
(2, 'ffhg', 'fgddffgh', '0000-00-00', '1970-01-01', 'humanResource'),
(3, 'ffhg', 'fgddffgh', '0000-00-00', '1970-01-01', 'humanResource'),
(4, 'ffhg', 'fgddffgh', '0000-00-00', '1970-01-01', 'humanResource'),
(5, 'ghd', 'fgddffgh', '0000-00-00', '1970-01-01', 'humanResource'),
(6, 'registrar', 'fgddffgh', '0000-00-00', '1970-01-01', 'humanResource');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `materialId` varchar(20) NOT NULL,
  `materialName` varchar(30) NOT NULL,
  `materialType` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `measurment` varchar(10) NOT NULL,
  `status` varchar(40) NOT NULL,
  `procurmentOffice` varchar(40) NOT NULL,
  `registeredBy` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`materialId`, `materialName`, `materialType`, `quantity`, `measurment`, `status`, `procurmentOffice`, `registeredBy`) VALUES
('bd01', 'laptop', 'electronic', 9, 'number', 'stat', 'sport', 'wubet yehuala'),
('ch01', 'chair', 'metal', 8, 'number', 'stat', 'sport', 'dfghj dcfvgbhn');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `new id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `news` varchar(1000) NOT NULL,
  `office` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pedaclearance`
--

CREATE TABLE `pedaclearance` (
  `staff_id` varchar(20) NOT NULL,
  `manager` int(11) NOT NULL DEFAULT '0',
  `finance` int(11) NOT NULL DEFAULT '0',
  `library` int(11) NOT NULL DEFAULT '0',
  `sport` int(11) NOT NULL DEFAULT '0',
  `bookstore` int(11) NOT NULL DEFAULT '0',
  `registrar` int(11) NOT NULL DEFAULT '0',
  `distance&continuing` int(11) NOT NULL DEFAULT '0',
  `labstore` int(11) NOT NULL DEFAULT '0',
  `housing` int(11) NOT NULL DEFAULT '0',
  `energycenter` int(11) NOT NULL DEFAULT '0',
  `Ethics` int(11) NOT NULL DEFAULT '0',
  `teacherassocation` int(11) NOT NULL DEFAULT '0',
  `mentenanceTeam` int(11) NOT NULL DEFAULT '0',
  `InnovationCenter` int(11) NOT NULL DEFAULT '0',
  `officeservice` int(11) NOT NULL DEFAULT '0',
  `fixedAssets` int(11) NOT NULL DEFAULT '0',
  `revenueCenter` int(11) NOT NULL DEFAULT '0',
  `loanSaving` int(11) NOT NULL DEFAULT '0',
  `Clearance` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pedaclearance`
--

INSERT INTO `pedaclearance` (`staff_id`, `manager`, `finance`, `library`, `sport`, `bookstore`, `registrar`, `distance&continuing`, `labstore`, `housing`, `energycenter`, `Ethics`, `teacherassocation`, `mentenanceTeam`, `InnovationCenter`, `officeservice`, `fixedAssets`, `revenueCenter`, `loanSaving`, `Clearance`) VALUES
('BDU120UR', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU121UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU124UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU125UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU128UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU129UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU134UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU139UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU150UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU176UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `polyclearance`
--

CREATE TABLE `polyclearance` (
  `staff_id` varchar(20) NOT NULL,
  `manager` int(11) NOT NULL DEFAULT '0',
  `finance` int(11) NOT NULL DEFAULT '0',
  `library` int(11) NOT NULL DEFAULT '0',
  `sport` int(11) NOT NULL DEFAULT '0',
  `bookstore` int(11) NOT NULL DEFAULT '0',
  `registrar` int(11) NOT NULL DEFAULT '0',
  `distance&continuing` int(11) NOT NULL DEFAULT '0',
  `labstore` int(11) NOT NULL DEFAULT '0',
  `housing` int(11) NOT NULL DEFAULT '0',
  `energycenter` int(11) NOT NULL DEFAULT '0',
  `Ethics` int(11) NOT NULL DEFAULT '0',
  `teacherassocation` int(11) NOT NULL DEFAULT '0',
  `mentenanceTeam` int(11) NOT NULL DEFAULT '0',
  `InnovationCenter` int(11) NOT NULL DEFAULT '0',
  `officeservice` int(11) NOT NULL DEFAULT '0',
  `fixedAssets` int(11) NOT NULL DEFAULT '0',
  `revenueCenter` int(11) NOT NULL DEFAULT '0',
  `loanSaving` int(11) NOT NULL DEFAULT '0',
  `Clearance` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polyclearance`
--

INSERT INTO `polyclearance` (`staff_id`, `manager`, `finance`, `library`, `sport`, `bookstore`, `registrar`, `distance&continuing`, `labstore`, `housing`, `energycenter`, `Ethics`, `teacherassocation`, `mentenanceTeam`, `InnovationCenter`, `officeservice`, `fixedAssets`, `revenueCenter`, `loanSaving`, `Clearance`) VALUES
('BDU120UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU121UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU124UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU125UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU128UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU129UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU134UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU139UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU150UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU176UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `staffId` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(15) NOT NULL,
  `status` tinyint(11) NOT NULL DEFAULT '1',
  `office` varchar(20) NOT NULL,
  `campus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`staffId`, `username`, `password`, `role`, `status`, `office`, `campus`) VALUES
('BDU120UR', 'hrm', '0000', 'humanResource', 0, '', 'um'),
('BDU121UR', 'registrar', '0000', 'registrar', 0, 'um', 'peda'),
('BDU124UR', 'dormitory', '0000', 'dormitory', 0, 'student', 'peda'),
('BDU128UR', 'bs', '0000', 'bookstore', 0, 'student', 'um'),
('BDU139UR', 'sport', '0000', 'sport', 0, 'student', 'peda'),
('BDU150UR', 'admin', '0000', 'Admin', 0, '', 'um');

-- --------------------------------------------------------

--
-- Table structure for table `signedstaff`
--

CREATE TABLE `signedstaff` (
  `clearanceNo` int(11) NOT NULL,
  `staffId` varchar(20) NOT NULL,
  `FullName` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `reason` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL,
  `position` varchar(40) NOT NULL,
  `sex` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signedstudent`
--

CREATE TABLE `signedstudent` (
  `clearanceNo` int(11) NOT NULL,
  `studId` varchar(20) NOT NULL,
  `Status` char(10) NOT NULL,
  `Reason` char(20) NOT NULL,
  `Date` date NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `semister` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signedstudent`
--

INSERT INTO `signedstudent` (`clearanceNo`, `studId`, `Status`, `Reason`, `Date`, `FullName`, `sex`, `faculty`, `department`, `year`, `semister`) VALUES
(8, 'BDU120UR', 'Cleared', 'acadamic year', '0000-00-00', 'molalegne tamiru bezie', 'male', 'computing', 'computerscience', 1, 'II'),
(9, 'BDU122UR', 'Cleared', 'graduation', '0000-00-00', 'nebyu lamenew emire', 'male', 'computing', 'computerscience', 1, 'II');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Fname` varchar(20) NOT NULL,
  `Mname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `staffId` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `contactAddress` varchar(13) NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'staff',
  `status` int(11) NOT NULL DEFAULT '1',
  `position` varchar(30) NOT NULL,
  `year` year(4) NOT NULL,
  `mothersFatherName` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Fname`, `Mname`, `Lname`, `staffId`, `password`, `sex`, `contactAddress`, `role`, `status`, `position`, `year`, `mothersFatherName`) VALUES
('molalegne', 'tamiru', 'bezir', 'BDU120UR', '0000', 'male', '0927670889', 'staff', 0, 'acadamic', 2008, 'werku'),
('solomon', 'kefale', 'belew', 'BDU121UR', '0000', 'male', '0935812365', 'staff', 0, 'acadamic', 2005, 'menen'),
('lalem', 'akalu', 'lule', 'BDU124UR', '0000', 'male', '0987654323', 'staff', 0, 'management', 2009, 'qwer'),
('senait', 'alemu', 'belew', 'BDU125UR', '0000', 'male', '0918256777', 'staff', 0, 'security', 2009, 'asdf'),
('ayele', 'lakew', 'ashenafi', 'BDU128UR', '0000', 'male', '0987654323', 'staff', 0, 'acadamic', 2009, 'u'),
('molalegne', 'lema', 'reta', 'BDU129UR', '0000', 'male', '0935812365', 'staff', 0, 'gfd', 2008, 'hgd'),
('aa', 'bb', 'cc', 'BDU134UR', 'nn1234#', 'male', '0927670845', 'staff', 1, 'acadamic', 2009, 'nn'),
('sdfghj', 'sdfghnj', 'sdcfghj', 'BDU139UR', '0000', 'male', '0927670889', 'staff', 0, 'sdfgh', 2009, 'sdfghj'),
('nebyu', 'lamenew', 'emire', 'BDU150UR', '0000', 'male', '0935701350', 'staff', 0, 'management', 2006, 'fcg'),
('dd', 'ff', 'rr', 'BDU176UR', 'gg1234#', 'male', '0918256777', 'staff', 1, 'acadamic', 2009, 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `staffcase`
--

CREATE TABLE `staffcase` (
  `caseId` int(11) NOT NULL,
  `staffId` varchar(30) NOT NULL,
  `materialId` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `procurmentOffice` varchar(40) NOT NULL,
  `by_user` varchar(40) NOT NULL,
  `date_added` date NOT NULL,
  `campus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffcase`
--

INSERT INTO `staffcase` (`caseId`, `staffId`, `materialId`, `quantity`, `procurmentOffice`, `by_user`, `date_added`, `campus`) VALUES
(2, 'BDU120UR', 'bdo1', 3, 'sport', 'sdfghj', '2017-06-16', 'peda'),
(3, 'BDU117UR', 'bdo1', 2, 'sport', 'sdfghj', '0000-00-00', 'peda'),
(4, 'BDU117UR', 'bdo1', 2, 'sport', 'sdfghj', '0000-00-00', 'peda');

-- --------------------------------------------------------

--
-- Table structure for table `staffcase_trash`
--

CREATE TABLE `staffcase_trash` (
  `caseId` int(11) NOT NULL,
  `staffId` varchar(20) NOT NULL,
  `materialId` varchar(20) NOT NULL,
  `procurmentOffice` varchar(40) NOT NULL,
  `quantity` int(11) NOT NULL,
  `by_user` varchar(30) NOT NULL,
  `campus` varchar(30) NOT NULL,
  `date_added` date NOT NULL,
  `date_returned` date NOT NULL,
  `returnedby` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffcase_trash`
--

INSERT INTO `staffcase_trash` (`caseId`, `staffId`, `materialId`, `procurmentOffice`, `quantity`, `by_user`, `campus`, `date_added`, `date_returned`, `returnedby`) VALUES
(17, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'um', '0000-00-00', '0000-00-00', ''),
(18, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'um', '0000-00-00', '0000-00-00', ''),
(19, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'um', '0000-00-00', '0000-00-00', ''),
(20, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'poly', '0000-00-00', '0000-00-00', ''),
(21, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'um', '0000-00-00', '0000-00-00', ''),
(22, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'um', '0000-00-00', '0000-00-00', ''),
(23, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'um', '0000-00-00', '0000-00-00', ''),
(24, 'registrar', 'bdo1', 'sport', 3, 'sxdfg', 'um', '0000-00-00', '0000-00-00', ''),
(25, 'registrar', 'bdo1', 'sport', 3, 'sxdfg', 'poly', '0000-00-00', '0000-00-00', ''),
(26, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'poly', '0000-00-00', '0000-00-00', ''),
(27, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'um', '0000-00-00', '0000-00-00', ''),
(28, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'poly', '0000-00-00', '0000-00-00', ''),
(29, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'poly', '0000-00-00', '0000-00-00', ''),
(30, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'un', '0000-00-00', '0000-00-00', ''),
(31, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'un', '0000-00-00', '0000-00-00', ''),
(32, 'registrar', 'bdo1', 'sport', 3, 'sxdfg', 'um', '0000-00-00', '0000-00-00', ''),
(33, 'registrar', 'bdo1', 'sport', 3, 'sxdfg', 'poly', '0000-00-00', '0000-00-00', ''),
(34, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'poly', '0000-00-00', '0000-00-00', ''),
(35, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'poly', '0000-00-00', '0000-00-00', ''),
(36, 'registrar', 'bdo1', 'sport', 3, 'sxdfg', 'um', '0000-00-00', '0000-00-00', ''),
(37, 'registrar', 'bdo1', 'sport', 3, 'sxdfg', 'um', '0000-00-00', '0000-00-00', ''),
(38, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'um', '0000-00-00', '0000-00-00', ''),
(39, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'poly', '0000-00-00', '0000-00-00', ''),
(40, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'poly', '0000-00-00', '0000-00-00', ''),
(41, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'poly', '0000-00-00', '0000-00-00', ''),
(42, 'registrar', 'bdo1', 'sport', 3, 'sxdfg', 'peda', '0000-00-00', '0000-00-00', ''),
(43, 'registrar', 'bdo1', 'sport', 2, 'sxdfg', 'um', '0000-00-00', '0000-00-00', ''),
(44, 'registrar', 'bdo1', 'sport', 2, 'nebyuesdfg', 'poly', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Fname` varchar(20) NOT NULL,
  `Mname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Sex` enum('male','female','','') NOT NULL,
  `Idno` varchar(50) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `role` varchar(7) NOT NULL DEFAULT 'student',
  `program` enum('Regular','Extension','summer') NOT NULL,
  `campus` enum('poly','peda','zenzelema','yibab','F/heiwot') NOT NULL,
  `faculty` varchar(40) NOT NULL,
  `acadamicYear` year(4) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `mothersFatherName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Fname`, `Mname`, `Lname`, `Sex`, `Idno`, `Department`, `password`, `status`, `role`, `program`, `campus`, `faculty`, `acadamicYear`, `phone`, `mothersFatherName`) VALUES
('yayew', 'belay', 'zeleke', 'male', 'BDU117UR', 'computerscience', '0000', 1, 'student', 'Regular', 'poly', 'computing', 2006, '0935701350', 'qwe'),
('molalegne', 'tamiru', 'bezie', 'male', 'BDU118UR', 'computerscience', '1234', 0, 'student', 'Regular', 'poly', 'computing', 2009, '0927670889', 'tyuyy'),
('nebyu', 'lamenew', 'emire', 'male', 'BDU19UR', 'computerscience', '0000', 0, 'student', 'Regular', 'poly', 'computing', 2009, '0918256777', 'mm');

-- --------------------------------------------------------

--
-- Table structure for table `studentcase`
--

CREATE TABLE `studentcase` (
  `caseId` int(20) NOT NULL,
  `studId` varchar(20) NOT NULL,
  `MaterialId` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `procurmentOffice` varchar(40) NOT NULL,
  `by_user` varchar(40) NOT NULL,
  `date_added` date NOT NULL,
  `campus` varchar(20) NOT NULL DEFAULT 'poly'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentcase`
--

INSERT INTO `studentcase` (`caseId`, `studId`, `MaterialId`, `quantity`, `procurmentOffice`, `by_user`, `date_added`, `campus`) VALUES
(1, 'BDU117UR', 'bdo1', 3, 'sport', 'sdfghj', '0000-00-00', 'peda');

-- --------------------------------------------------------

--
-- Table structure for table `studentcase_trash`
--

CREATE TABLE `studentcase_trash` (
  `caseId` int(11) NOT NULL,
  `studId` varchar(20) NOT NULL,
  `materialId` varchar(20) NOT NULL,
  `procurmentOffice` varchar(40) NOT NULL,
  `quantity` int(11) NOT NULL,
  `by_user` varchar(30) NOT NULL,
  `campus` varchar(30) NOT NULL,
  `date_added` date NOT NULL,
  `date_returned` date NOT NULL,
  `returnedby` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentcase_trash`
--

INSERT INTO `studentcase_trash` (`caseId`, `studId`, `materialId`, `procurmentOffice`, `quantity`, `by_user`, `campus`, `date_added`, `date_returned`, `returnedby`) VALUES
(11, 'BDU117UR', '', 'sport', 2, 'dfghj', 'peda', '0000-00-00', '0000-00-00', ''),
(12, 'BDU117UR', '', 'sport', 2, 'dfghj', 'peda', '0000-00-00', '0000-00-00', ''),
(13, 'BDU120UR', '', 'sport', 2, 'wubet', 'yibab', '0000-00-00', '0000-00-00', ''),
(14, 'BDU120UR', '', 'sport', 2, 'wubet', 'yibab', '0000-00-00', '0000-00-00', ''),
(15, 'BDU120UR', '', 'sport', 2, 'wubet', 'yibab', '0000-00-00', '0000-00-00', ''),
(16, 'BDU120UR', '', 'sport', 2, 'wubet', 'yibab', '0000-00-00', '0000-00-00', ''),
(17, 'BDU120UR', '', 'sport', 2, 'wubet', 'yibab', '0000-00-00', '0000-00-00', ''),
(18, 'BDU120UR', '', 'sport', 2, 'wubet', 'yibab', '0000-00-00', '0000-00-00', ''),
(19, 'BDU120UR', '', 'sport', 2, 'wubet', 'yibab', '0000-00-00', '0000-00-00', ''),
(20, 'BDU120UR', '', 'sport', 2, 'wubet', 'yibab', '0000-00-00', '0000-00-00', ''),
(21, 'BDU120UR', '', 'sport', 2, 'wubet', 'yibab', '0000-00-00', '0000-00-00', ''),
(22, 'BDU120UR', '', 'sport', 2, 'wubet', 'yibab', '0000-00-00', '0000-00-00', ''),
(23, 'BDU120UR', '', 'sport', 2, 'wubet', 'yibab', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentclearance`
--

CREATE TABLE `studentclearance` (
  `stud_id` varchar(8) NOT NULL,
  `faculty` tinyint(1) NOT NULL DEFAULT '0',
  `department` tinyint(1) NOT NULL DEFAULT '0',
  `library` tinyint(1) NOT NULL DEFAULT '0',
  `bookstore` tinyint(1) NOT NULL DEFAULT '0',
  `cafeteria` tinyint(1) NOT NULL DEFAULT '0',
  `dormitory` tinyint(1) NOT NULL DEFAULT '0',
  `sport` tinyint(1) NOT NULL DEFAULT '0',
  `Clearance` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentclearance`
--

INSERT INTO `studentclearance` (`stud_id`, `faculty`, `department`, `library`, `bookstore`, `cafeteria`, `dormitory`, `sport`, `Clearance`) VALUES
('BDU117UR', 0, 0, 0, 0, 0, 0, 1, 0),
('BDU118UR', 0, 0, 0, 0, 0, 0, 0, 0),
('BDU19UR', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `universitymgmt`
--

CREATE TABLE `universitymgmt` (
  `staff_id` varchar(20) NOT NULL,
  `manager` int(11) NOT NULL DEFAULT '0',
  `finance` int(11) NOT NULL DEFAULT '0',
  `library` int(11) NOT NULL DEFAULT '0',
  `sport` int(11) NOT NULL DEFAULT '0',
  `bookstore` int(11) NOT NULL DEFAULT '0',
  `registrar` int(11) NOT NULL DEFAULT '0',
  `distance&continuing` int(11) NOT NULL DEFAULT '0',
  `labstore` int(11) NOT NULL DEFAULT '0',
  `housing` int(11) NOT NULL DEFAULT '0',
  `energycenter` int(11) NOT NULL DEFAULT '0',
  `Ethics` int(11) NOT NULL DEFAULT '0',
  `teacherassocation` int(11) NOT NULL DEFAULT '0',
  `mentenanceTeam` int(11) NOT NULL DEFAULT '0',
  `InnovationCenter` int(11) NOT NULL DEFAULT '0',
  `officeservice` int(11) NOT NULL DEFAULT '0',
  `fixedAssets` int(11) NOT NULL DEFAULT '0',
  `revenueCenter` int(11) NOT NULL DEFAULT '0',
  `loanSaving` int(11) NOT NULL DEFAULT '0',
  `Clearance` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universitymgmt`
--

INSERT INTO `universitymgmt` (`staff_id`, `manager`, `finance`, `library`, `sport`, `bookstore`, `registrar`, `distance&continuing`, `labstore`, `housing`, `energycenter`, `Ethics`, `teacherassocation`, `mentenanceTeam`, `InnovationCenter`, `officeservice`, `fixedAssets`, `revenueCenter`, `loanSaving`, `Clearance`) VALUES
('BDU120UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU121UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU124UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU125UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU128UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU129UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU134UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU139UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU150UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU176UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `yibabclearance`
--

CREATE TABLE `yibabclearance` (
  `staff_id` varchar(20) NOT NULL,
  `manager` int(11) NOT NULL DEFAULT '0',
  `finance` int(11) NOT NULL DEFAULT '0',
  `library` int(11) NOT NULL DEFAULT '0',
  `sport` int(11) NOT NULL DEFAULT '0',
  `bookstore` int(11) NOT NULL DEFAULT '0',
  `registrar` int(11) NOT NULL DEFAULT '0',
  `distance&continuing` int(11) NOT NULL DEFAULT '0',
  `labstore` int(11) NOT NULL DEFAULT '0',
  `housing` int(11) NOT NULL DEFAULT '0',
  `energycenter` int(11) NOT NULL DEFAULT '0',
  `Ethics` int(11) NOT NULL DEFAULT '0',
  `teacherassocation` int(11) NOT NULL DEFAULT '0',
  `mentenanceTeam` int(11) NOT NULL DEFAULT '0',
  `InnovationCenter` int(11) NOT NULL DEFAULT '0',
  `officeservice` int(11) NOT NULL DEFAULT '0',
  `fixedAssets` int(11) NOT NULL DEFAULT '0',
  `revenueCenter` int(11) NOT NULL DEFAULT '0',
  `loanSaving` int(11) NOT NULL DEFAULT '0',
  `Clearance` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yibabclearance`
--

INSERT INTO `yibabclearance` (`staff_id`, `manager`, `finance`, `library`, `sport`, `bookstore`, `registrar`, `distance&continuing`, `labstore`, `housing`, `energycenter`, `Ethics`, `teacherassocation`, `mentenanceTeam`, `InnovationCenter`, `officeservice`, `fixedAssets`, `revenueCenter`, `loanSaving`, `Clearance`) VALUES
('BDU120UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU121UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU124UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU125UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU128UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU129UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU134UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU139UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU150UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU176UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `zenzelimaclearance`
--

CREATE TABLE `zenzelimaclearance` (
  `staff_id` varchar(20) NOT NULL,
  `manager` int(11) NOT NULL DEFAULT '0',
  `finance` int(11) NOT NULL DEFAULT '0',
  `library` int(11) NOT NULL DEFAULT '0',
  `sport` int(11) NOT NULL DEFAULT '0',
  `bookstore` int(11) NOT NULL DEFAULT '0',
  `registrar` int(11) NOT NULL DEFAULT '0',
  `distance&continuing` int(11) NOT NULL DEFAULT '0',
  `labstore` int(11) NOT NULL DEFAULT '0',
  `housing` int(11) NOT NULL DEFAULT '0',
  `energycenter` int(11) NOT NULL DEFAULT '0',
  `Ethics` int(11) NOT NULL DEFAULT '0',
  `teacherassocation` int(11) NOT NULL DEFAULT '0',
  `mentenanceTeam` int(11) NOT NULL DEFAULT '0',
  `InnovationCenter` int(11) NOT NULL DEFAULT '0',
  `officeservice` int(11) NOT NULL DEFAULT '0',
  `fixedAssets` int(11) NOT NULL DEFAULT '0',
  `revenueCenter` int(11) NOT NULL DEFAULT '0',
  `loanSaving` int(11) NOT NULL DEFAULT '0',
  `Clearance` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zenzelimaclearance`
--

INSERT INTO `zenzelimaclearance` (`staff_id`, `manager`, `finance`, `library`, `sport`, `bookstore`, `registrar`, `distance&continuing`, `labstore`, `housing`, `energycenter`, `Ethics`, `teacherassocation`, `mentenanceTeam`, `InnovationCenter`, `officeservice`, `fixedAssets`, `revenueCenter`, `loanSaving`, `Clearance`) VALUES
('BDU120UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU121UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU124UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU125UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU128UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU129UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU134UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU139UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU150UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BDU176UR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `borrowerid` (`stud_Id`),
  ADD KEY `borrowid` (`borrow_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptId`),
  ADD UNIQUE KEY `deptname` (`deptname`);

--
-- Indexes for table `fbclearance`
--
ALTER TABLE `fbclearance`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `liability`
--
ALTER TABLE `liability`
  ADD PRIMARY KEY (`liablityId`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`materialId`);

--
-- Indexes for table `pedaclearance`
--
ALTER TABLE `pedaclearance`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `polyclearance`
--
ALTER TABLE `polyclearance`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`staffId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `signedstaff`
--
ALTER TABLE `signedstaff`
  ADD PRIMARY KEY (`clearanceNo`),
  ADD UNIQUE KEY `staffId` (`staffId`);

--
-- Indexes for table `signedstudent`
--
ALTER TABLE `signedstudent`
  ADD PRIMARY KEY (`clearanceNo`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffId`);

--
-- Indexes for table `staffcase`
--
ALTER TABLE `staffcase`
  ADD UNIQUE KEY `caseId` (`caseId`);

--
-- Indexes for table `staffcase_trash`
--
ALTER TABLE `staffcase_trash`
  ADD PRIMARY KEY (`caseId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Idno`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `studentcase`
--
ALTER TABLE `studentcase`
  ADD UNIQUE KEY `caseId` (`caseId`);

--
-- Indexes for table `studentcase_trash`
--
ALTER TABLE `studentcase_trash`
  ADD UNIQUE KEY `caseId` (`caseId`);

--
-- Indexes for table `studentclearance`
--
ALTER TABLE `studentclearance`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `universitymgmt`
--
ALTER TABLE `universitymgmt`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `yibabclearance`
--
ALTER TABLE `yibabclearance`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `zenzelimaclearance`
--
ALTER TABLE `zenzelimaclearance`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=497;
--
-- AUTO_INCREMENT for table `liability`
--
ALTER TABLE `liability`
  MODIFY `liablityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `signedstaff`
--
ALTER TABLE `signedstaff`
  MODIFY `clearanceNo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `signedstudent`
--
ALTER TABLE `signedstudent`
  MODIFY `clearanceNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `staffcase`
--
ALTER TABLE `staffcase`
  MODIFY `caseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `staffcase_trash`
--
ALTER TABLE `staffcase_trash`
  MODIFY `caseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `studentcase`
--
ALTER TABLE `studentcase`
  MODIFY `caseId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `studentcase_trash`
--
ALTER TABLE `studentcase_trash`
  MODIFY `caseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pedaclearance`
--
ALTER TABLE `pedaclearance`
  ADD CONSTRAINT `pedaclearance_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staffId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `polyclearance`
--
ALTER TABLE `polyclearance`
  ADD CONSTRAINT `polyclearance_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staffId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`staffId`) REFERENCES `staff` (`staffId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentclearance`
--
ALTER TABLE `studentclearance`
  ADD CONSTRAINT `studentclearance_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `student` (`Idno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `universitymgmt`
--
ALTER TABLE `universitymgmt`
  ADD CONSTRAINT `universitymgmt_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staffId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `yibabclearance`
--
ALTER TABLE `yibabclearance`
  ADD CONSTRAINT `yibabclearance_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staffId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zenzelimaclearance`
--
ALTER TABLE `zenzelimaclearance`
  ADD CONSTRAINT `zenzelimaclearance_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staffId`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Database: `onlineclearance`
--
CREATE DATABASE IF NOT EXISTS `onlineclearance` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `onlineclearance`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '1a1dc91c907325c69271ddf0c944bc72',
  `depr` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `password`, `depr`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(2, 'aw', 'bcbe3365e6ac95ea2c0343a2395834dd', 0),
(3, 'aw', '1a1dc91c907325c69271ddf0c944bc72', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `clearance_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `is_accountant_approval` int(11) NOT NULL,
  `is_supply_approval` int(11) NOT NULL,
  `is_director_ppf_approval` int(11) NOT NULL,
  `is_facfed_approval` int(11) NOT NULL,
  `is_cooperative_approval` int(11) NOT NULL,
  `is_librarian_approval` int(11) NOT NULL,
  `is_registrar_approval` int(11) NOT NULL,
  `is_area_approval` int(11) NOT NULL,
  `is_dean_approval` int(11) NOT NULL,
  `is_executive_approval` int(11) NOT NULL,
  `is_hrm_approval` int(11) NOT NULL,
  `is_cao_approval` int(11) NOT NULL,
  `is_vp_admin_approval` int(11) NOT NULL,
  `is_vp_academic_approval` int(11) NOT NULL,
  `is_head_approval` int(11) NOT NULL,
  `until` varchar(15) NOT NULL,
  `mailing_address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`clearance_id`, `id`, `is_accountant_approval`, `is_supply_approval`, `is_director_ppf_approval`, `is_facfed_approval`, `is_cooperative_approval`, `is_librarian_approval`, `is_registrar_approval`, `is_area_approval`, `is_dean_approval`, `is_executive_approval`, `is_hrm_approval`, `is_cao_approval`, `is_vp_admin_approval`, `is_vp_academic_approval`, `is_head_approval`, `until`, `mailing_address`) VALUES
(1, 65, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, '', ''),
(2, 66, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(3, 68, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(4, 73, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(5, 74, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(6, 75, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(7, 76, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(8, 77, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', ''),
(9, 78, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(10, 79, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', ''),
(11, 80, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '07/24/2016', 'Carmella Valley Home'),
(12, 81, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '', ''),
(13, 82, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(14, 83, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(15, 84, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(16, 85, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(17, 86, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(18, 87, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(19, 88, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(20, 89, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(21, 90, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(22, 91, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(23, 92, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(24, 93, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(25, 94, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(26, 95, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(27, 96, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(28, 97, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(29, 98, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(30, 99, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(31, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(32, 101, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(33, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(34, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(35, 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(36, 105, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(37, 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(38, 107, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(39, 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(40, 109, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(41, 110, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(42, 111, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(43, 112, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(44, 113, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(45, 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(46, 115, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(47, 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(48, 117, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, '', ''),
(49, 118, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, '', ''),
(50, 119, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(51, 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(52, 121, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(53, 122, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(54, 123, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(55, 124, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(56, 125, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(57, 126, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(58, 127, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(59, 128, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(60, 129, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(61, 130, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(62, 131, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(63, 132, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(64, 133, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(65, 134, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cleared_teacher`
--

CREATE TABLE `cleared_teacher` (
  `cleared_teacher_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cleared_teacher`
--

INSERT INTO `cleared_teacher` (`cleared_teacher_id`, `id`) VALUES
(1, 80),
(2, 117),
(3, 117),
(4, 117),
(5, 117),
(6, 118),
(7, 117);

-- --------------------------------------------------------

--
-- Table structure for table `deadline`
--

CREATE TABLE `deadline` (
  `id` int(20) NOT NULL,
  `d_date` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deadline`
--

INSERT INTO `deadline` (`id`, `d_date`, `status`) VALUES
(2, '2017-01-23', 0),
(3, '2017-01-23', 0),
(4, '2017-01-20', 0),
(5, '2017-01-19', 0),
(6, '2017-01-24', 0),
(7, '2017-01-24', 0),
(8, '2017-01-23', 0),
(9, '2017-01-22', 0),
(10, '2017-01-02', 0),
(11, '2017-01-22', 0),
(12, '2017-01-22', 0),
(13, '2017-01-23', 0),
(14, '2017-01-23', 0),
(15, '2017-01-22', 0),
(16, '2017-01-23', 0),
(17, '2017-01-31', 0),
(18, '2017-02-24', 0),
(19, '2017-02-24', 0),
(20, '2017-02-24', 0),
(21, '2017-02-24', 0),
(22, '2017-02-25', 0),
(23, '2017-02-25', 0),
(24, '2017-02-25', 0),
(25, '2017-02-25', 0),
(26, '2017-02-24', 0),
(27, '2017-02-25', 0),
(28, '2017-02-24', 0),
(29, '2017-02-24', 0),
(30, '2017-02-24', 0),
(31, '2017-02-25', 0),
(32, '2017-02-25', 0),
(33, '2017-02-25', 0),
(34, '2017-02-25', 0),
(35, '2017-02-25', 0),
(36, '2017-02-25', 0),
(37, '2017-02-25', 0),
(38, '2017-02-25', 0),
(39, '2017-02-25', 0),
(40, '2017-02-25', 0),
(41, '2017-02-25', 0),
(42, '2017-02-25', 0),
(43, '2017-02-25', 0),
(44, '2017-02-25', 0),
(45, '2017-02-25', 0),
(46, '2017-02-25', 0),
(47, '2017-02-25', 0),
(48, '2017-02-25', 0),
(49, '2017-02-25', 0),
(50, '2017-02-24', 0),
(51, '2017-02-25', 0),
(52, '2017-02-25', 0),
(53, '2017-02-25', 0),
(54, '2017-02-25', 0),
(55, '2017-02-25', 0),
(56, '2017-02-25', 0),
(57, '2017-02-25', 0),
(58, '2017-02-25', 0),
(59, '2017-02-25', 0),
(60, '2017-02-25', 0),
(61, '2017-02-25', 0),
(62, '2017-02-25', 0),
(63, '2017-02-25', 0),
(64, '2017-02-25', 0),
(65, '2017-02-25', 0),
(66, '2017-02-25', 0),
(67, '2017-02-25', 0),
(68, '2017-02-25', 0),
(69, '2017-02-25', 0),
(70, '2017-02-25', 0),
(71, '2017-02-25', 0),
(72, '2017-02-25', 0),
(73, '2017-02-25', 0),
(74, '2017-02-25', 0),
(75, '2017-02-25', 0),
(76, '2017-02-25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `dep_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `req_id` int(10) NOT NULL,
  `faculty_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `designee`
--

CREATE TABLE `designee` (
  `designee_id` int(11) NOT NULL,
  `designee_name` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '81dc9bdb52d04dc20036dbd8313ed055'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designee`
--

INSERT INTO `designee` (`designee_id`, `designee_name`, `username`, `password`) VALUES
(1, 'Accountant', 'accountant', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Supply Officer', 'supplyofficer', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Director, Physical Plant-Facilities', 'physicalplant', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'FACFED/Campus Faculty Club President', 'facfed', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Chairman, Cooperative', 'cooperative', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'College Librarian', 'librarian', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Registrar', 'registrar', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'Area Chairman', 'areachairman', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'Dean of the College', 'dean', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'Executive Director', 'executive', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'Human Resource Mgt. Officer III', 'hrm', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, 'Chief Administrative Officer (Adm)', 'cao', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'Vice-President for Administration', 'administration', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'Vice-President for Academic\\Affairs', 'academic', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 'Head of the Agency', 'head', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, 'Area Chairman-BSCE', 'areachairman_bsce', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, 'Area Chairman-BSIT', 'areachairman_bsit', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, 'Area Chairman-BSED', 'areachairman_bsed', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, 'Area Chairman-BEED', 'areachairman_beed', '81dc9bdb52d04dc20036dbd8313ed055'),
(20, 'Area Chairman-BSIS', 'areachairman_bsis', '81dc9bdb52d04dc20036dbd8313ed055'),
(21, 'Area Chairman-BSHRM', 'areachairman_bshrm', '81dc9bdb52d04dc20036dbd8313ed055'),
(22, 'Area Chairman-BS Info Tech', 'areachairman_bsinfo', '81dc9bdb52d04dc20036dbd8313ed055'),
(23, 'Area Chairman-BTTE', 'areachairman_btte', '81dc9bdb52d04dc20036dbd8313ed055'),
(24, 'Area Chairman-BSA', 'areachairman_bsa', '81dc9bdb52d04dc20036dbd8313ed055'),
(25, 'Area Chairman-BSBA', 'areachairman_bsba', '81dc9bdb52d04dc20036dbd8313ed055'),
(26, 'Area Chairman-BSOA', 'areachairman_bsoa', '81dc9bdb52d04dc20036dbd8313ed055'),
(27, 'Area Chairman-BSE', 'areachairman_bse', '81dc9bdb52d04dc20036dbd8313ed055'),
(28, 'Area Chairman-BSAccT', 'areachairman_bsacct', '81dc9bdb52d04dc20036dbd8313ed055'),
(29, 'Area Chairman-BSF', 'areachairman_bsf', '81dc9bdb52d04dc20036dbd8313ed055'),
(30, 'Area Chairman-BS Crim', 'areachairman_crim', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(10) NOT NULL,
  `faculty_id` int(15) NOT NULL,
  `faculty_Fname` varchar(20) NOT NULL,
  `faculty_Mname` varchar(20) NOT NULL,
  `faculty_Lname` varchar(20) NOT NULL,
  `Contact_num` int(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Department` varchar(5) NOT NULL,
  `req_id` int(20) NOT NULL,
  `dep_id` int(20) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '81dc9bdb52d04dc20036dbd8313ed055',
  `faculty_picture` varchar(120) NOT NULL,
  `Campus` varchar(15) NOT NULL COMMENT '1 = talisay, 2 = alijis, 3 = fortune town, 4 = binalbagan',
  `course_program` varchar(15) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_id`, `faculty_Fname`, `faculty_Mname`, `faculty_Lname`, `Contact_num`, `Email`, `Designation`, `Department`, `req_id`, `dep_id`, `password`, `faculty_picture`, `Campus`, `course_program`, `status`) VALUES
(129, 12, 'Carmelo', 'Wex', 'Anthony', 9164654, 'carmelo@gmail.com', 'Permanent', 'CFAC', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Binalbagan', 'BTTE', 0),
(130, 13, 'Nico', 'Swan', 'Pascual', 96546465, 'nico@gmail.com', 'Permanent', 'CBMA', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Fortune Towne', 'BSA', 0),
(131, 14, 'Mark', 'Anthony', 'Fernandez', 94136131, 'mark@gmail.com', 'Parttime', 'IIT', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Fortune Towne', 'BSBA', 0),
(80, 2222222, 'Kevin', 'Decatoria', 'Grajo', 952749822, 'kevin@gmail.com', 'Parttime', 'CIT', 0, 0, 'd93591bdf7860e1e4ee2fca799911215', 'HAHAHAHA.jpg', 'Talisay', 'BSOA', 0),
(119, 3, 'Micole', 'Marie', 'Dioma', 2147483647, 'micole@gmail.com', 'Parttime', 'CIT', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Talisay', 'BSIT', 0),
(120, 4, 'Donard', 'Cruz', 'Ytienza', 92164631, 'donard@gmail.com', 'Permanent', 'COE', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Talisay', 'BSIS', 0),
(121, 5, 'Rose', 'Ann', 'Balladares', 9132113, 'rose@gmail.com', 'Permanent', 'CIT', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Alijis', 'BSED', 0),
(122, 6, 'Razel', 'Joy', 'Bacan', 956431, 'razel@gmail.com', 'Parttime', 'IIT', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Alijis', 'BEED', 0),
(123, 7, 'Daniel', 'Robert', 'Tand', 9243515, 'daniel@gmail.com', 'Permanent', 'IIT', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Alijis', 'BSHRM', 0),
(124, 8, 'Eliseo', 'Joy', 'Chan', 9123151, 'eliseo@gmail.com', 'Permanent', 'SAS', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Alijis', 'BS Info Tech', 0),
(125, 9, 'Robert', 'Fernandez', 'Cunahap', 96214156, 'robert@gmail.com', 'Permanent', 'CFAC', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Binalbagan', 'BSE', 0),
(128, 11, 'Tony', 'James', 'Parker', 9215416, 'tony@gmail.com', 'Parttime', 'CFAC', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Binalbagan', 'BSAccT', 0),
(127, 10, 'Cris', 'John', 'Bryant', 9232464, 'cris@gmail.com', 'Permanent', 'CFAC', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Binalbagan', 'BSF', 0),
(118, 2, 'Sweden', 'Grajo', 'Vargas', 953411, 'sweden@gmail.com', 'Permanent', 'CIT', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Talisay', 'BS Crim', 0),
(117, 1, 'John', 'Cruz', 'Smith', 9132464, 'john@gmail.com', 'Permanent', 'COE', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Talisay', '', 1),
(132, 15, 'Sunshine', 'Montano', 'Cruz', 9144513, 'sun@gmail.com', 'Parttime', 'CBMA', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Fortune Towne', '', 0),
(133, 15, 'Sunshine', 'Montano', 'Cruz', 9144513, 'sun@gmail.com', 'Parttime', 'CBMA', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Fortune Towne', '', 0),
(134, 99, 'John', 'F.', 'Wick', 2147483647, 'john@gmail.com', 'Permanent', 'COE', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Talisay', 'BSCE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `designee_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `message_content` text NOT NULL,
  `message_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `designee_id`, `id`, `message_content`, `message_status`) VALUES
(32, 7, 66, 'qwertyui', 1),
(33, 7, 65, 'test mic check', 1),
(34, 7, 65, 'qwertyuwertyuqwertyuwerty', 1),
(35, 1, 65, 'testing ah', 1),
(36, 6, 68, 'awawaw', 0),
(37, 6, 65, 'WHAAT', 1),
(38, 6, 74, 'test message\r\n', 1),
(39, 6, 74, 'test 2', 1),
(40, 1, 77, 'kulang ka ', 0),
(41, 1, 66, 'qwertyui\r\n', 1),
(42, 1, 66, 'test\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pds_civil_service`
--

CREATE TABLE `pds_civil_service` (
  `civil_service_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `career_service` varchar(25) NOT NULL,
  `rating` int(11) NOT NULL,
  `date_of_examination` varchar(15) NOT NULL,
  `place_of_examination` text NOT NULL,
  `license_number` int(15) NOT NULL,
  `license_date_of_release` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_civil_service`
--

INSERT INTO `pds_civil_service` (`civil_service_id`, `id`, `career_service`, `rating`, `date_of_examination`, `place_of_examination`, `license_number`, `license_date_of_release`) VALUES
(1, 79, 'test', 99, '11/11/1111', 'test', 99, '11/11/1111'),
(3, 80, 'test career', 90, '12/25/2017', 'Tai tung', 11, '12/31/2018'),
(4, 100, '', 0, '', '', 0, ''),
(5, 101, '', 0, '', '', 0, ''),
(6, 102, '', 0, '', '', 0, ''),
(7, 103, '', 0, '', '', 0, ''),
(8, 104, '', 0, '', '', 0, ''),
(9, 105, '', 0, '', '', 0, ''),
(10, 106, '', 0, '', '', 0, ''),
(11, 107, '', 0, '', '', 0, ''),
(12, 108, '', 0, '', '', 0, ''),
(13, 109, '', 0, '', '', 0, ''),
(14, 110, '', 0, '', '', 0, ''),
(15, 111, '', 0, '', '', 0, ''),
(16, 112, '', 0, '', '', 0, ''),
(17, 113, '', 0, '', '', 0, ''),
(18, 114, '', 0, '', '', 0, ''),
(19, 115, '', 0, '', '', 0, ''),
(20, 116, '', 0, '', '', 0, ''),
(21, 117, '', 0, '', '', 0, ''),
(22, 118, '', 0, '', '', 0, ''),
(23, 119, '', 0, '', '', 0, ''),
(24, 120, '', 0, '', '', 0, ''),
(25, 121, '', 0, '', '', 0, ''),
(26, 122, '', 0, '', '', 0, ''),
(27, 123, '', 0, '', '', 0, ''),
(28, 124, '', 0, '', '', 0, ''),
(29, 125, '', 0, '', '', 0, ''),
(30, 126, '', 0, '', '', 0, ''),
(31, 127, '', 0, '', '', 0, ''),
(32, 128, '', 0, '', '', 0, ''),
(33, 129, '', 0, '', '', 0, ''),
(34, 130, '', 0, '', '', 0, ''),
(35, 131, '', 0, '', '', 0, ''),
(36, 132, '', 0, '', '', 0, ''),
(37, 133, '', 0, '', '', 0, ''),
(38, 134, '', 0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pds_educational_background`
--

CREATE TABLE `pds_educational_background` (
  `educational_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `educational_level` text NOT NULL,
  `educational_name_of_school` text NOT NULL,
  `educational_degree_course` text NOT NULL,
  `educational_year_graduated` text NOT NULL,
  `educational_highest_grade` text NOT NULL,
  `educational_date_from` text NOT NULL,
  `educational_date_to` text NOT NULL,
  `educational_scholarship` text NOT NULL,
  `secondary_level` varchar(20) NOT NULL,
  `secondary_name` varchar(20) NOT NULL,
  `secondary_degree` varchar(20) NOT NULL,
  `secondary_year` varchar(20) NOT NULL,
  `secondary_highest` varchar(20) NOT NULL,
  `secondary_date_form` varchar(20) NOT NULL,
  `secondary_date_to` varchar(20) NOT NULL,
  `secondary_scholarship` varchar(20) NOT NULL,
  `vocational_level` varchar(20) NOT NULL,
  `vocational_name` varchar(20) NOT NULL,
  `vocational_degree` varchar(20) NOT NULL,
  `vocational_year` varchar(20) NOT NULL,
  `vocational_highest` varchar(20) NOT NULL,
  `vocational_date_form` varchar(20) NOT NULL,
  `vocational_date_to` varchar(20) NOT NULL,
  `vocational_scholarship` varchar(20) NOT NULL,
  `college_level` varchar(20) NOT NULL,
  `college_name` varchar(20) NOT NULL,
  `college_degree` varchar(20) NOT NULL,
  `college_year` varchar(20) NOT NULL,
  `college_highest` varchar(20) NOT NULL,
  `college_date_form` varchar(20) NOT NULL,
  `college_date_to` varchar(20) NOT NULL,
  `college_scholarship` varchar(20) NOT NULL,
  `graduate_level` int(20) NOT NULL,
  `graduate_name` int(20) NOT NULL,
  `graduate_degree` int(20) NOT NULL,
  `graduate_year` int(20) NOT NULL,
  `graduate_highest` varchar(20) NOT NULL,
  `graduate_date_from` int(20) NOT NULL,
  `graduate_date_to` int(20) NOT NULL,
  `graduate_scholarship` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_educational_background`
--

INSERT INTO `pds_educational_background` (`educational_id`, `id`, `educational_level`, `educational_name_of_school`, `educational_degree_course`, `educational_year_graduated`, `educational_highest_grade`, `educational_date_from`, `educational_date_to`, `educational_scholarship`, `secondary_level`, `secondary_name`, `secondary_degree`, `secondary_year`, `secondary_highest`, `secondary_date_form`, `secondary_date_to`, `secondary_scholarship`, `vocational_level`, `vocational_name`, `vocational_degree`, `vocational_year`, `vocational_highest`, `vocational_date_form`, `vocational_date_to`, `vocational_scholarship`, `college_level`, `college_name`, `college_degree`, `college_year`, `college_highest`, `college_date_form`, `college_date_to`, `college_scholarship`, `graduate_level`, `graduate_name`, `graduate_degree`, `graduate_year`, `graduate_highest`, `graduate_date_from`, `graduate_date_to`, `graduate_scholarship`) VALUES
(1, 100, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(2, 101, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(3, 102, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(4, 103, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(5, 104, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(6, 105, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(7, 106, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(8, 107, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(9, 108, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(10, 109, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(11, 110, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(12, 111, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(13, 112, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(14, 113, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(15, 114, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(16, 115, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(17, 116, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(18, 117, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(19, 118, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(20, 119, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(21, 120, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(22, 121, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(23, 122, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(24, 123, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(25, 124, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(26, 125, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(27, 126, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(28, 127, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(29, 128, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(30, 129, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(31, 130, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(32, 131, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(33, 132, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(34, 133, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(35, 134, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pds_family_background`
--

CREATE TABLE `pds_family_background` (
  `family_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `spouse_surname` varchar(20) NOT NULL,
  `spouse_firstname` varchar(20) NOT NULL,
  `spouse_middlename` varchar(20) NOT NULL,
  `spouse_occupation` varchar(20) NOT NULL,
  `spouse_employer_name` varchar(20) NOT NULL,
  `spouse_business_address` text NOT NULL,
  `spouse_tel_no` varchar(20) NOT NULL,
  `father_surname` varchar(20) NOT NULL,
  `father_firstname` varchar(20) NOT NULL,
  `father_middlename` varchar(20) NOT NULL,
  `mother_surname` varchar(20) NOT NULL,
  `mother_firstname` varchar(20) NOT NULL,
  `mother_middlename` varchar(20) NOT NULL,
  `child_name` varchar(35) NOT NULL,
  `child_birthday` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_family_background`
--

INSERT INTO `pds_family_background` (`family_id`, `id`, `spouse_surname`, `spouse_firstname`, `spouse_middlename`, `spouse_occupation`, `spouse_employer_name`, `spouse_business_address`, `spouse_tel_no`, `father_surname`, `father_firstname`, `father_middlename`, `mother_surname`, `mother_firstname`, `mother_middlename`, `child_name`, `child_birthday`) VALUES
(1, 79, 'test', 'test', 'test', 'test', 'test', 'test', '(111) 111-1111', 'test', 'test', 'test', 'test', 'test', 'test', 'child1', '55/55/5555'),
(3, 80, 'Vargas', 'Sweden', 'Labalo', 'Civil Engr.', 'Silver Dragon', 'Riverside', '(312) 312-3123', 'Grajo', 'Jerry', 'C', 'Decatoria', 'Arlene', 'G', 'Raijin', '12/31/2018'),
(4, 100, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 101, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 102, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 103, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 104, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 105, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 106, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 107, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 108, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 109, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 110, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 111, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 112, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 113, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 114, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 115, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 116, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 117, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 118, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 119, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 120, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 121, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 122, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 123, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 124, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 125, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 126, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 127, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 128, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 129, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 130, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 131, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 132, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 133, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 134, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pds_other_info`
--

CREATE TABLE `pds_other_info` (
  `pds_other_info_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `other_special_skill` varchar(30) NOT NULL,
  `other_non_academic` varchar(30) NOT NULL,
  `other_membership` varchar(30) NOT NULL,
  `36_a` int(11) NOT NULL,
  `36_a_yes` text NOT NULL,
  `36_b` int(11) NOT NULL,
  `36_b_yes` text NOT NULL,
  `37_a` int(11) NOT NULL,
  `37_a_yes` text NOT NULL,
  `37_b` int(11) NOT NULL,
  `37_b_yes` text NOT NULL,
  `number_38` int(11) NOT NULL,
  `number_38_yes` text NOT NULL,
  `number_39` int(11) NOT NULL,
  `number_39_yes` text NOT NULL,
  `number_40` int(11) NOT NULL,
  `number_40_yes` text NOT NULL,
  `41_a` int(11) NOT NULL,
  `41_a_yes` text NOT NULL,
  `41_b` int(11) NOT NULL,
  `41_b_yes` text NOT NULL,
  `41_c` int(11) NOT NULL,
  `41_c_yes` text NOT NULL,
  `references_name` varchar(30) NOT NULL,
  `references_address` varchar(30) NOT NULL,
  `references_tel_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_other_info`
--

INSERT INTO `pds_other_info` (`pds_other_info_id`, `id`, `other_special_skill`, `other_non_academic`, `other_membership`, `36_a`, `36_a_yes`, `36_b`, `36_b_yes`, `37_a`, `37_a_yes`, `37_b`, `37_b_yes`, `number_38`, `number_38_yes`, `number_39`, `number_39_yes`, `number_40`, `number_40_yes`, `41_a`, `41_a_yes`, `41_b`, `41_b_yes`, `41_c`, `41_c_yes`, `references_name`, `references_address`, `references_tel_no`) VALUES
(1, 79, 'Dota 2', 'Best Carry', 'Gold', 0, 'awwawaw', 1, 'sssss', 1, 'ddddd', 0, 'fffffff', 1, 'ggggggg', 0, 'hhhhh', 0, 'jjjjjj', 1, 'test_message1', 0, 'test_message2', 1, 'test_message3', 'Donard', 'Ytienza', '(656) 544-5665'),
(3, 80, 'Dota 2', 'Best Carry', 'Gold', 0, 'awwawaw', 1, 'sssss', 1, 'ddddd', 0, 'fffffff', 1, 'ggggggg', 0, 'hhhhh', 0, 'jjjjjj', 1, 'test_message1', 0, 'test_message2', 1, 'test_message3', 'Donard', 'Ytienza', '(656) 544-5665'),
(4, 100, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(5, 101, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(6, 102, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(7, 103, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(8, 104, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(9, 105, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(10, 106, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(11, 107, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(12, 108, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(13, 109, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(14, 110, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(15, 111, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(16, 112, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(17, 113, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(18, 114, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(19, 115, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(20, 116, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(21, 117, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(22, 118, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(23, 119, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(24, 120, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(25, 121, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(26, 122, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(27, 123, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(28, 124, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(29, 125, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(30, 126, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(31, 127, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(32, 128, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(33, 129, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(34, 130, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(35, 131, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(36, 132, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(37, 133, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(38, 134, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pds_personal_information`
--

CREATE TABLE `pds_personal_information` (
  `personal_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `name_extension` varchar(10) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `place_of_birth` text NOT NULL,
  `sex` varchar(10) NOT NULL,
  `civil_status` int(5) NOT NULL,
  `other_civil_status` varchar(20) NOT NULL,
  `citizenship` varchar(20) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `gsis_id_no` int(15) NOT NULL,
  `pagibig_id_no` int(15) NOT NULL,
  `philhealth_no` int(15) NOT NULL,
  `sss_no` int(15) NOT NULL,
  `residential_address` text NOT NULL,
  `residential_zipcode` int(15) NOT NULL,
  `residential_tel_no` varchar(15) NOT NULL,
  `permanent_address` text NOT NULL,
  `permanent_zipcode` int(15) NOT NULL,
  `permanent_tel_no` varchar(15) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `cellphone_no` int(15) NOT NULL,
  `agency_employee_no` int(15) NOT NULL,
  `tin_no` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_personal_information`
--

INSERT INTO `pds_personal_information` (`personal_id`, `id`, `surname`, `firstname`, `middlename`, `name_extension`, `birthday`, `place_of_birth`, `sex`, `civil_status`, `other_civil_status`, `citizenship`, `height`, `weight`, `blood_type`, `gsis_id_no`, `pagibig_id_no`, `philhealth_no`, `sss_no`, `residential_address`, `residential_zipcode`, `residential_tel_no`, `permanent_address`, `permanent_zipcode`, `permanent_tel_no`, `email_address`, `cellphone_no`, `agency_employee_no`, `tin_no`) VALUES
(1, 79, 'test', 'test', 'test', 'Sr.', '11/11/1111', 'test', '', 6, 'test', 'Filipino', 2, 2, 'O', 11111111, 11111111, 11111111, 11111111, 'test', 111111111, '(111) 111-1111', 'test', 2222222, '(222) 222-2222', 'test@test.test', 2147483647, 11111111, 1111111111),
(3, 80, 'Grajo', 'Kevin', 'Decatoria', 'III', '11/11/1111', 'Bacolod City', 'M', 5, '', 'Filipino', 2, 100, 'AB', 1212121, 2121212, 3232323, 2323232, 'Talisay City', 6115, '(122) 122-1221', 'Bacolod', 6100, '(211) 211-2112', 'kevin@gmail.com', 2147483647, 121212, 222111),
(4, 100, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(5, 101, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(6, 102, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(7, 103, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(8, 104, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(9, 105, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(10, 106, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(11, 107, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(12, 108, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(13, 109, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(14, 110, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(15, 111, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(16, 112, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(17, 113, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(18, 114, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(19, 115, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(20, 116, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(21, 117, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(22, 118, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(23, 119, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(24, 120, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(25, 121, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(26, 122, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(27, 123, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(28, 124, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(29, 125, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(30, 126, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(31, 127, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(32, 128, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(33, 129, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(34, 130, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(35, 131, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(36, 132, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(37, 133, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(38, 134, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pds_training_program`
--

CREATE TABLE `pds_training_program` (
  `training_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `title_of_seminar` varchar(25) NOT NULL,
  `training_date_from` varchar(15) NOT NULL,
  `training_date_to` varchar(15) NOT NULL,
  `training_number_of_hours` int(11) NOT NULL,
  `conducted_by` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_training_program`
--

INSERT INTO `pds_training_program` (`training_id`, `id`, `title_of_seminar`, `training_date_from`, `training_date_to`, `training_number_of_hours`, `conducted_by`) VALUES
(1, 79, 'test', '11/11/1111', '22/22/2222', 11, 'test'),
(3, 80, 'Game Development', '11/01/2015', '12/01/2015', 243, 'Stratium'),
(4, 100, '', '', '', 0, ''),
(5, 101, '', '', '', 0, ''),
(6, 102, '', '', '', 0, ''),
(7, 103, '', '', '', 0, ''),
(8, 104, '', '', '', 0, ''),
(9, 105, '', '', '', 0, ''),
(10, 106, '', '', '', 0, ''),
(11, 107, '', '', '', 0, ''),
(12, 108, '', '', '', 0, ''),
(13, 109, '', '', '', 0, ''),
(14, 110, '', '', '', 0, ''),
(15, 111, '', '', '', 0, ''),
(16, 112, '', '', '', 0, ''),
(17, 113, '', '', '', 0, ''),
(18, 114, '', '', '', 0, ''),
(19, 115, '', '', '', 0, ''),
(20, 116, '', '', '', 0, ''),
(21, 117, '', '', '', 0, ''),
(22, 118, '', '', '', 0, ''),
(23, 119, '', '', '', 0, ''),
(24, 120, '', '', '', 0, ''),
(25, 121, '', '', '', 0, ''),
(26, 122, '', '', '', 0, ''),
(27, 123, '', '', '', 0, ''),
(28, 124, '', '', '', 0, ''),
(29, 125, '', '', '', 0, ''),
(30, 126, '', '', '', 0, ''),
(31, 127, '', '', '', 0, ''),
(32, 128, '', '', '', 0, ''),
(33, 129, '', '', '', 0, ''),
(34, 130, '', '', '', 0, ''),
(35, 131, '', '', '', 0, ''),
(36, 132, '', '', '', 0, ''),
(37, 133, '', '', '', 0, ''),
(38, 134, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pds_voluntary_work`
--

CREATE TABLE `pds_voluntary_work` (
  `voluntary_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name_and_address` text NOT NULL,
  `voluntary_work_from` varchar(15) NOT NULL,
  `voluntary_work_to` varchar(15) NOT NULL,
  `number_of_hours` int(11) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_voluntary_work`
--

INSERT INTO `pds_voluntary_work` (`voluntary_id`, `id`, `name_and_address`, `voluntary_work_from`, `voluntary_work_to`, `number_of_hours`, `position`) VALUES
(1, 79, 'test', '11/11/1111', '22/22/2222', 22, 'test'),
(3, 80, 'Stratium', '12/12/2012', '12/31/2019', 234, 'President'),
(4, 100, '', '', '', 0, ''),
(5, 101, '', '', '', 0, ''),
(6, 102, '', '', '', 0, ''),
(7, 103, '', '', '', 0, ''),
(8, 104, '', '', '', 0, ''),
(9, 105, '', '', '', 0, ''),
(10, 106, '', '', '', 0, ''),
(11, 107, '', '', '', 0, ''),
(12, 108, '', '', '', 0, ''),
(13, 109, '', '', '', 0, ''),
(14, 110, '', '', '', 0, ''),
(15, 111, '', '', '', 0, ''),
(16, 112, '', '', '', 0, ''),
(17, 113, '', '', '', 0, ''),
(18, 114, '', '', '', 0, ''),
(19, 115, '', '', '', 0, ''),
(20, 116, '', '', '', 0, ''),
(21, 117, '', '', '', 0, ''),
(22, 118, '', '', '', 0, ''),
(23, 119, '', '', '', 0, ''),
(24, 120, '', '', '', 0, ''),
(25, 121, '', '', '', 0, ''),
(26, 122, '', '', '', 0, ''),
(27, 123, '', '', '', 0, ''),
(28, 124, '', '', '', 0, ''),
(29, 125, '', '', '', 0, ''),
(30, 126, '', '', '', 0, ''),
(31, 127, '', '', '', 0, ''),
(32, 128, '', '', '', 0, ''),
(33, 129, '', '', '', 0, ''),
(34, 130, '', '', '', 0, ''),
(35, 131, '', '', '', 0, ''),
(36, 132, '', '', '', 0, ''),
(37, 133, '', '', '', 0, ''),
(38, 134, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pds_work_experience`
--

CREATE TABLE `pds_work_experience` (
  `work_experience_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `work_experience_from` varchar(15) NOT NULL,
  `work_experience_to` varchar(15) NOT NULL,
  `position_title` varchar(25) NOT NULL,
  `department` varchar(20) NOT NULL,
  `monthly_salary` int(11) NOT NULL,
  `salary_grade` varchar(5) NOT NULL,
  `status_of_appointment` varchar(15) NOT NULL,
  `govt_service` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_work_experience`
--

INSERT INTO `pds_work_experience` (`work_experience_id`, `id`, `work_experience_from`, `work_experience_to`, `position_title`, `department`, `monthly_salary`, `salary_grade`, `status_of_appointment`, `govt_service`) VALUES
(1, 79, '11/11/1111', '22/22/2222', 'test', 'test', 100000000, '11-1', 'test', 'yes'),
(3, 80, '11/11/1111', '22/22/2222', 'President', 'DOH', 1000000, '10-0', 'OK', 'No'),
(4, 100, '', '', '', '', 0, '', '', ''),
(5, 101, '', '', '', '', 0, '', '', ''),
(6, 102, '', '', '', '', 0, '', '', ''),
(7, 103, '', '', '', '', 0, '', '', ''),
(8, 104, '', '', '', '', 0, '', '', ''),
(9, 105, '', '', '', '', 0, '', '', ''),
(10, 106, '', '', '', '', 0, '', '', ''),
(11, 107, '', '', '', '', 0, '', '', ''),
(12, 108, '', '', '', '', 0, '', '', ''),
(13, 109, '', '', '', '', 0, '', '', ''),
(14, 110, '', '', '', '', 0, '', '', ''),
(15, 111, '', '', '', '', 0, '', '', ''),
(16, 112, '', '', '', '', 0, '', '', ''),
(17, 113, '', '', '', '', 0, '', '', ''),
(18, 114, '', '', '', '', 0, '', '', ''),
(19, 115, '', '', '', '', 0, '', '', ''),
(20, 116, '', '', '', '', 0, '', '', ''),
(21, 117, '', '', '', '', 0, '', '', ''),
(22, 118, '', '', '', '', 0, '', '', ''),
(23, 119, '', '', '', '', 0, '', '', ''),
(24, 120, '', '', '', '', 0, '', '', ''),
(25, 121, '', '', '', '', 0, '', '', ''),
(26, 122, '', '', '', '', 0, '', '', ''),
(27, 123, '', '', '', '', 0, '', '', ''),
(28, 124, '', '', '', '', 0, '', '', ''),
(29, 125, '', '', '', '', 0, '', '', ''),
(30, 126, '', '', '', '', 0, '', '', ''),
(31, 127, '', '', '', '', 0, '', '', ''),
(32, 128, '', '', '', '', 0, '', '', ''),
(33, 129, '', '', '', '', 0, '', '', ''),
(34, 130, '', '', '', '', 0, '', '', ''),
(35, 131, '', '', '', '', 0, '', '', ''),
(36, 132, '', '', '', '', 0, '', '', ''),
(37, 133, '', '', '', '', 0, '', '', ''),
(38, 134, '', '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `req_id` int(10) NOT NULL,
  `req_content` text NOT NULL,
  `designee_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`req_id`, `req_content`, `designee_id`) VALUES
(1, 'DBM Form SUC IA', 7),
(2, 'List of Failures/Dropouts', 7),
(3, 'Grade Sheets-undergraduate/graduate studies.', 7),
(4, 'Various Forms for Laboratory School Advisers', 7),
(5, 'All Daily Time Records', 11),
(6, 'Updated Personal Data Sheet', 11),
(7, 'Three (3) original copies of Statement of Assets, Liabilities, and Network (SALN)', 11),
(8, 'Certified Photocopy of Master''s and Doctorate Transcript of Records/Diploma of Degree''s obtained of the current school year', 11),
(9, 'Photocopy of Renewed PRC License/ID or Renewal Application for those teaching courses which require a license to teach. (Waiver will not be accepted and non-submission is taken to mean that the faculty has no license).', 11),
(10, 'Certified true copy of Marriage Certificate for both married male and female faculty', 11),
(11, 'Property Clearance', 2),
(12, 'Keys of Laboratories Rooms / Shoprooms', 2),
(13, 'List of room fixtures needing inspection and repair', 3),
(14, 'Second original copy of Grade Sheets for undergraduate and graduate programs', 9),
(15, 'Class Records', 9),
(16, 'Midterm and Final Examinations with Table of Specification (1st and 2nd Semesters)', 9),
(17, 'Accomplishment Report to include; Academic Advising Report; List of Instructional Materials/Technology Prepared and Used in the classroom; Report on seminars/training''s attended; and Photocopy of Certificates of Participation/Resources Speaker ship in seminar/training''s ', 9),
(18, 'Course Syllabus for all subjects/courses taught and documentary evidence of distribution to students', 9),
(19, 'List of books, laboratory needs, supplies and materials needed ', 9),
(20, 'Job-Released Accomplishments', 9),
(21, 'On-going/Proposed Research, Extension, Production Initiatives', 9),
(22, 'Accomplished Commitment Form for First Semester', 9),
(23, 'For advisers of student organizations, financial report of student organizations/student activities that involved finances collections and contributions (e.g educational tours, raffle draws, fund raising projects, etc.)', 9),
(24, 'Compliance Report on educational tours/field trips conducted which is marked "complied" by CHED', 9),
(25, 'Copy of on-going/proposed research , extension, production initiatives ', 10),
(26, 'Copy of financial reports of student organizations/student activities that involved finances, collections and contributions (e.g educational tours with compliance report marked"Complied" by CHED, raffle draws, fund raising, etc.)', 10),
(27, 'Liquidation of cash advances/travel expenses, etc.', 13);

-- --------------------------------------------------------

--
-- Table structure for table `requirementstatus`
--

CREATE TABLE `requirementstatus` (
  `reqstat_id` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `req_id` int(10) NOT NULL,
  `designee_id` int(11) NOT NULL,
  `file` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirementstatus`
--

INSERT INTO `requirementstatus` (`reqstat_id`, `status`, `id`, `req_id`, `designee_id`, `file`) VALUES
(1, 0, 79, 11, 2, 'ceres.jpg'),
(2, 0, 79, 11, 2, 'ceres.jpg'),
(3, 0, 79, 11, 2, 'ceres.jpg'),
(4, 0, 79, 11, 2, 'ceres.jpg'),
(5, 0, 79, 11, 2, 'ceres.jpg'),
(6, 0, 79, 11, 2, 'ceres.jpg'),
(7, 0, 79, 11, 2, 'ceres.jpg'),
(8, 0, 79, 11, 2, 'ceres.jpg'),
(9, 0, 79, 11, 2, 'ceres.jpg'),
(10, 0, 79, 11, 2, 'ceres.jpg'),
(11, 0, 79, 11, 2, 'ceres.jpg'),
(12, 0, 79, 11, 2, 'ceres.jpg'),
(13, 0, 79, 13, 3, 'cap.png'),
(14, 0, 79, 13, 3, 'cap.png'),
(15, 0, 79, 13, 3, 'cap.png'),
(16, 0, 79, 13, 3, 'cap.png'),
(17, 0, 79, 13, 3, 'cap.png'),
(18, 0, 79, 13, 3, 'cap.png'),
(19, 0, 79, 13, 3, 'cap.png'),
(20, 0, 79, 13, 3, 'cap.png'),
(21, 0, 79, 13, 3, 'cap.png'),
(22, 0, 79, 13, 3, 'cap.png'),
(23, 0, 79, 13, 3, 'cap.png'),
(24, 0, 79, 13, 3, 'cap.png'),
(25, 0, 79, 1, 7, '43.jpg'),
(26, 0, 79, 14, 9, 'l;.jpg'),
(27, 0, 81, 11, 2, 'nybl.xlsx'),
(28, 1, 80, 11, 2, 'nybl.xlsx'),
(30, 1, 80, 12, 2, 'pds-jo-2014.xls'),
(31, 1, 117, 11, 2, '6a00d83451c73369e20162fcddf9ab970d-600wi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '81dc9bdb52d04dc20036dbd8313ed055',
  `usertype` int(1) NOT NULL COMMENT '1 = admin, 2 = department, 3 = faculty'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(15, 'Accountant', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(16, '69', '81dc9bdb52d04dc20036dbd8313ed055', 3),
(17, '69', '81dc9bdb52d04dc20036dbd8313ed055', 3),
(18, 'Supply Officer', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(19, '4444444', '81dc9bdb52d04dc20036dbd8313ed055', 3),
(20, '1111111', '81dc9bdb52d04dc20036dbd8313ed055', 3),
(21, '2222222', '81dc9bdb52d04dc20036dbd8313ed055', 3),
(22, '3333333', '81dc9bdb52d04dc20036dbd8313ed055', 3),
(23, '21300712', '81dc9bdb52d04dc20036dbd8313ed055', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`clearance_id`);

--
-- Indexes for table `cleared_teacher`
--
ALTER TABLE `cleared_teacher`
  ADD PRIMARY KEY (`cleared_teacher_id`);

--
-- Indexes for table `deadline`
--
ALTER TABLE `deadline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designee`
--
ALTER TABLE `designee`
  ADD PRIMARY KEY (`designee_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `pds_civil_service`
--
ALTER TABLE `pds_civil_service`
  ADD PRIMARY KEY (`civil_service_id`);

--
-- Indexes for table `pds_educational_background`
--
ALTER TABLE `pds_educational_background`
  ADD PRIMARY KEY (`educational_id`);

--
-- Indexes for table `pds_family_background`
--
ALTER TABLE `pds_family_background`
  ADD PRIMARY KEY (`family_id`);

--
-- Indexes for table `pds_other_info`
--
ALTER TABLE `pds_other_info`
  ADD PRIMARY KEY (`pds_other_info_id`);

--
-- Indexes for table `pds_personal_information`
--
ALTER TABLE `pds_personal_information`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indexes for table `pds_training_program`
--
ALTER TABLE `pds_training_program`
  ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `pds_voluntary_work`
--
ALTER TABLE `pds_voluntary_work`
  ADD PRIMARY KEY (`voluntary_id`);

--
-- Indexes for table `pds_work_experience`
--
ALTER TABLE `pds_work_experience`
  ADD PRIMARY KEY (`work_experience_id`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `requirementstatus`
--
ALTER TABLE `requirementstatus`
  ADD PRIMARY KEY (`reqstat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `clearance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `cleared_teacher`
--
ALTER TABLE `cleared_teacher`
  MODIFY `cleared_teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `deadline`
--
ALTER TABLE `deadline`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `designee`
--
ALTER TABLE `designee`
  MODIFY `designee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `pds_civil_service`
--
ALTER TABLE `pds_civil_service`
  MODIFY `civil_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pds_educational_background`
--
ALTER TABLE `pds_educational_background`
  MODIFY `educational_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `pds_family_background`
--
ALTER TABLE `pds_family_background`
  MODIFY `family_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pds_other_info`
--
ALTER TABLE `pds_other_info`
  MODIFY `pds_other_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pds_personal_information`
--
ALTER TABLE `pds_personal_information`
  MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pds_training_program`
--
ALTER TABLE `pds_training_program`
  MODIFY `training_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pds_voluntary_work`
--
ALTER TABLE `pds_voluntary_work`
  MODIFY `voluntary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pds_work_experience`
--
ALTER TABLE `pds_work_experience`
  MODIFY `work_experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `req_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `requirementstatus`
--
ALTER TABLE `requirementstatus`
  MODIFY `reqstat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma_bookmark`
--

CREATE TABLE `pma_bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma_column_info`
--

CREATE TABLE `pma_column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_designer_coords`
--

CREATE TABLE `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma_history`
--

CREATE TABLE `pma_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_navigationhiding`
--

CREATE TABLE `pma_navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

--
-- Dumping data for table `pma_navigationhiding`
--

INSERT INTO `pma_navigationhiding` (`username`, `item_name`, `item_type`, `db_name`, `table_name`) VALUES
('root', 'sport', 'table', 'clearance', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma_pdf_pages`
--

CREATE TABLE `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_recent`
--

CREATE TABLE `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"clearance","table":"studentclearance"},{"db":"clearance","table":"role"},{"db":"clearance","table":"liability"},{"db":"clearance","table":"studentcase"},{"db":"clearance","table":"material"},{"db":"clearance","table":"studentcase_trash"},{"db":"clearance","table":"book"},{"db":"clearance","table":"cafe"},{"db":"clearance","table":"dormitory"},{"db":"phpmyadmin","table":"pma_table_info"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma_relation`
--

CREATE TABLE `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma_savedsearches`
--

CREATE TABLE `pma_savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_coords`
--

CREATE TABLE `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_info`
--

CREATE TABLE `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_uiprefs`
--

CREATE TABLE `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma_table_uiprefs`
--

INSERT INTO `pma_table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'clearance', 'cafe', '{"CREATE_TIME":"2024-05-29 21:56:25","col_order":["1","0","2","3","4","5"],"col_visib":["1","1","1","1","1","1"]}', '2024-05-30 19:29:42'),
('root', 'clearance', 'student', '{"sorted_col":"`program` ASC","CREATE_TIME":"2024-04-30 22:15:00","col_visib":["1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","0"]}', '2024-05-28 13:29:03'),
('root', 'clearance', 'studentclearance', '{"sorted_col":"`department`  DESC","CREATE_TIME":"2024-04-25 00:02:23","col_visib":["1","1","1","1","1","1","1","1","1"]}', '2024-05-28 13:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `pma_tracking`
--

CREATE TABLE `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin' ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `pma_userconfig`
--

CREATE TABLE `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-04-24 20:57:48', '{"collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma_usergroups`
--

CREATE TABLE `pma_usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma_users`
--

CREATE TABLE `pma_users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma_column_info`
--
ALTER TABLE `pma_column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma_designer_coords`
--
ALTER TABLE `pma_designer_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma_history`
--
ALTER TABLE `pma_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma_navigationhiding`
--
ALTER TABLE `pma_navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma_recent`
--
ALTER TABLE `pma_recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma_relation`
--
ALTER TABLE `pma_relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma_table_coords`
--
ALTER TABLE `pma_table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma_table_info`
--
ALTER TABLE `pma_table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma_table_uiprefs`
--
ALTER TABLE `pma_table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma_tracking`
--
ALTER TABLE `pma_tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma_userconfig`
--
ALTER TABLE `pma_userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma_usergroups`
--
ALTER TABLE `pma_usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma_users`
--
ALTER TABLE `pma_users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_column_info`
--
ALTER TABLE `pma_column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_history`
--
ALTER TABLE `pma_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `webauth`
--
CREATE DATABASE IF NOT EXISTS `webauth` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `webauth`;

-- --------------------------------------------------------

--
-- Table structure for table `user_pwd`
--

CREATE TABLE `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_pwd`
--
ALTER TABLE `user_pwd`
  ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
