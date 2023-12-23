-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 02:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scoopworth`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `id_author` int(11) NOT NULL,
  `date_posted` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_article`, `category`, `title`, `id_author`, `date_posted`) VALUES
(1, 'Business', 'Majority of CebuPac\'s domestic destinations open for leisure travel', 2, '2021-11-05'),
(2, 'Business', 'Metrobank income rises by 131% on lower bad loan buffer', 3, '2021-11-06'),
(3, 'Business', 'Price rise slows in October, but not for long, says central bank', 1, '2021-12-06'),
(4, 'Entertainment', 'The \'Jujutsu Kaisen\' prequel trailer gets pretty chaotic (of course)', 4, '2021-11-03'),
(5, 'Entertainment', 'Enchong Dee shares greatest lesson learned from 15-year show biz career', 5, '2021-11-06'),
(6, 'Entertainment', 'Robinsons Malls ushers in the Holiday Season with Ben&Ben\'s Tuloy Pa Rin ang Pasko ', 14, '2021-11-04'),
(7, 'Nation', 'Army chief Andres Centino is next AFP chief', 10, '2021-11-12'),
(8, 'Nation', 'More schools to be included in pilot face-to-face classes - DepEd', 14, '2021-11-12'),
(9, 'Nation', 'Vaccination required for onsite workers', 9, '2021-11-12'),
(10, 'Sports', 'Hidilyn Diaz\'s record-breaking lift is a golden moment in PH sports history', 13, '2021-08-08'),
(11, 'Sports', 'Pacquiao retires from boxing', 12, '2021-09-09'),
(12, 'Sports', 'Indoor sports venues now allowed under Alert Level 2 in Metro Manila', 11, '2021-11-05'),
(13, 'Lifestyle', 'Is Angel Locsin\'s very low 800-calorie diet safe?', 7, '2021-06-21'),
(14, 'Lifestyle', 'Baler welcomes tourists', 14, '2021-11-12'),
(15, 'Lifestyle', 'Two queer women fall in love while building a shelter in this book', 6, '2021-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id_author` int(11) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id_author`, `lastname`, `firstname`) VALUES
(1, 'de Vera', 'Ben'),
(2, 'Lucas', 'Daxim'),
(3, 'Abadilla', 'Doris'),
(4, 'Cabral', 'Katrina Maisie'),
(5, 'Cruz', 'Marinel'),
(6, 'Acosta', 'Zofiya'),
(7, 'Que', 'Cheshire'),
(8, 'Mendoza', 'Red'),
(9, 'Valente', 'Catherine'),
(10, 'Bolledo', 'Jairo'),
(11, 'Terrado', 'Jonas'),
(12, 'Saldajeno', 'Ivan'),
(13, 'Del Rosario', 'Kenneth'),
(14, 'anonymous', 'anonymous');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_form`
--

CREATE TABLE `contact_us_form` (
  `id_viewer` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us_form`
--

INSERT INTO `contact_us_form` (`id_viewer`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Mariane Arcilla', 'mariane@gmail.com', 'mysql test 2', 'huhwaaaahduwahdau'),
(3, 'YAN1', 'marianaa1@gmail.com', 'MARIANE1', 'MARIANEMARIANE1'),
(4, 'yan2', 'mariane2@gmail.com', 'mariane2', 'marianemariane2'),
(5, 'YAN3', 'MARIANE3@GMAIL.COM', 'MARIANE3', 'MARIANEMARIANE3'),
(6, 'derick castro', 'dericktimothycastro@yahoo.com', 'DATABASE2', 'wow'),
(7, 'john doe', 'johndoe123@gmail.com', 'good website', 'good website yayyy');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `lastname`, `firstname`, `email`) VALUES
(1, 'Arcilla', 'Mariane Christene', 'marianechristene.arcilla.cics@ust.edu.ph'),
(2, 'Arquiza', 'Zach Anthony', 'zachanthony.arquiza.cics@ust.edu.ph'),
(3, 'Bugay', 'Lean Cristine', 'leancristine.bugay.cics@ust.edu.ph'),
(4, 'Castro', 'Derick Timothy', 'dericktimothy.castro.cics@ust.edu.ph'),
(5, 'Lacuna', 'Leonard Aron', 'leonardaron.lacuna.cics@ust.edu.ph'),
(6, 'Pentecostes', 'Ivan Jio', 'ivanjio.pentecostes.cics@ust.edu.ph'),
(7, 'Solacito', 'Paolo Luigi', 'paololuigi.solacito.cics@ust.edu.ph');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `user_id` (`id_author`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id_author`);

--
-- Indexes for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  ADD PRIMARY KEY (`id_viewer`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id_author` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  MODIFY `id_viewer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_author`) REFERENCES `author` (`id_author`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
