-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 02:59 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cfilm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfilm_tb`
--

CREATE TABLE `addfilm_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `actor` varchar(80) NOT NULL,
  `actress` varchar(30) NOT NULL,
  `budget` varchar(30) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addfilm_tb`
--

INSERT INTO `addfilm_tb` (`id`, `name`, `dname`, `pname`, `actor`, `actress`, `budget`, `genre`, `image`) VALUES
(5, 'Avengers Endgame', 'Razik', 'Vaishnav', 'Adil', 'Scarlet', '1000 crore', 'Sc-ifi/Action', '51LNtFacJBL.jpg'),
(6, 'Baahubal The Begning', 'Razik', 'Vaishnav', 'Prabhas', 'Anushka', '200 crore', 'Fantasy/Action', '81Go-tuPszL__SX450_.jpg'),
(7, 'Lion king', 'Adil', 'Amir', 'Lion', 'Lioness', '850 Crore', 'Fantasy/Drama', 'images.jpg'),
(8, 'Avatar', 'James Cameron', 'Amir', 'Razik', 'Zoe Zaldana', '1200 Crore', 'SciFi/Fantasy/Drama', '91FKuRPgwCL__SL1500_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `distributor_rights`
--

CREATE TABLE `distributor_rights` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `distributor` varchar(50) NOT NULL,
  `film_name` varchar(50) NOT NULL,
  `money` varchar(50) NOT NULL,
  `film_rights` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributor_rights`
--

INSERT INTO `distributor_rights` (`id`, `pname`, `distributor`, `film_name`, `money`, `film_rights`, `image`) VALUES
(11, 'Amir', 'Warner Bros', 'Avatar', '800 Crore', 'The Distribution Rights Of Avatar Movie  Owned By WarnerBros Studio For 800 Crore From Avatar Producer Amir  ', '91FKuRPgwCL__SL1500_.jpg'),
(12, 'Vaishnav', 'Marvel', 'Avengers Endgame', '600 Crore', 'The Distribution Rights Of Avengers Endgame Movie Owned By Marvel Studio For 600 Crore From Avengers Endgame Producer Vaishnav', '51LNtFacJBL.jpg'),
(13, 'Amir', 'Disney', 'Lion king', '500 Crore', 'The Distribution Rights Of Lion King Movie Owned By Disney Studio For 500 Crore From&nbsp; Lion King Producer Amir', 'images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `distributor_tb`
--

CREATE TABLE `distributor_tb` (
  `id` int(11) NOT NULL,
  `distributor` varchar(40) NOT NULL,
  `year` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributor_tb`
--

INSERT INTO `distributor_tb` (`id`, `distributor`, `year`, `country`, `username`, `password`) VALUES
(1, 'Disney', '1932', 'America', 'disney', 'admin'),
(3, 'Warner Bros', '1925', 'America', 'warner bros', 'admin'),
(4, 'Marvel', '1990', 'America', 'marvel', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `filmauction_tb`
--

CREATE TABLE `filmauction_tb` (
  `id` int(11) NOT NULL,
  `film_name` varchar(50) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `actor` varchar(50) NOT NULL,
  `actress` varchar(50) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `auction` varchar(50) NOT NULL,
  `distributor` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filmauction_tb`
--

INSERT INTO `filmauction_tb` (`id`, `film_name`, `dname`, `pname`, `actor`, `actress`, `budget`, `genre`, `image`, `auction`, `distributor`, `status`) VALUES
(16, 'Avengers Endgame', 'Razik', 'Vaishnav', 'Adil', 'Scarlet', '1000 crore', 'Sc-ifi/Action', '51LNtFacJBL.jpg', '600 Crore', 'Marvel', '1'),
(17, 'Baahubal The Begning', 'Razik', 'Vaishnav', 'Prabhas', 'Anushka', '200 crore', 'Fantasy/Action', '81Go-tuPszL__SX450_.jpg', '110 Crore', 'Warner Bros', '0'),
(18, 'Lion king', 'Adil', 'Amir', 'Lion', 'Lioness', '850 Crore', 'Fantasy/Drama', 'images.jpg', '500 Crore', 'Disney', '1'),
(22, 'Avatar', 'James Cameron', 'Amir', 'Razik', 'Zoe Zaldana', '1200 Crore', 'SciFi/Fantasy/Drama', '91FKuRPgwCL__SL1500_.jpg', '800 Crore', 'Warner Bros', '1');

-- --------------------------------------------------------

--
-- Table structure for table `filmcollection_tb`
--

CREATE TABLE `filmcollection_tb` (
  `id` int(11) NOT NULL,
  `film_name` varchar(50) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `theater` varchar(50) NOT NULL,
  `distributor` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `collection` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filmcollection_tb`
--

INSERT INTO `filmcollection_tb` (`id`, `film_name`, `pname`, `theater`, `distributor`, `date`, `collection`, `image`) VALUES
(1, 'Avatar', 'Amir', 'Savitha Film City', 'Warner Bros', '14-01-2020', '2 Crore', '91FKuRPgwCL__SL1500_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `producer_tb`
--

CREATE TABLE `producer_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `age` varchar(50) NOT NULL,
  `place` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producer_tb`
--

INSERT INTO `producer_tb` (`id`, `name`, `age`, `place`, `username`, `password`) VALUES
(1, 'Vaishnav', '30', 'Kasarkod', 'vaishnav', 'admin'),
(3, 'Amir', '45', 'Pattambi', 'amir', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `theaterauction_tb`
--

CREATE TABLE `theaterauction_tb` (
  `id` int(11) NOT NULL,
  `film_name` varchar(50) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `distributor` varchar(50) NOT NULL,
  `dmoney` varchar(60) NOT NULL,
  `auction` varchar(50) NOT NULL,
  `theater` varchar(50) NOT NULL,
  `scrcount` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theaterauction_tb`
--

INSERT INTO `theaterauction_tb` (`id`, `film_name`, `pname`, `distributor`, `dmoney`, `auction`, `theater`, `scrcount`, `image`, `status`) VALUES
(3, 'Avatar', 'Amir', 'Warner Bros', '800 Crore', '10 Crore', 'Savitha Film City', '3', '91FKuRPgwCL__SL1500_.jpg', '1'),
(4, 'Avengers Endgame', 'Vaishnav', 'Marvel', '600 Crore', '8 Crore', 'Krishna Dev Complex', '2', '51LNtFacJBL.jpg', '1'),
(5, 'Avengers Endgame', 'Vaishnav', 'Marvel', '600 Crore', '12 Crore', 'Savitha Film City', '3', '51LNtFacJBL.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `theater_rights`
--

CREATE TABLE `theater_rights` (
  `id` int(11) NOT NULL,
  `film_name` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `theater` varchar(50) NOT NULL,
  `distributor` varchar(50) NOT NULL,
  `tmoney` varchar(50) NOT NULL,
  `film_rights` varchar(250) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theater_rights`
--

INSERT INTO `theater_rights` (`id`, `film_name`, `pname`, `theater`, `distributor`, `tmoney`, `film_rights`, `image`) VALUES
(3, 'Avatar', 'Amir', 'Savitha Film City', 'Warner Bros', '10 Crore', 'The Releasing Permission Of Avatar Movie Is Sold To Savitha Film City For 10 Crore From Warner Bros Studio', '91FKuRPgwCL__SL1500_.jpg'),
(4, 'Avengers Endgame', 'Vaishnav', 'Krishna Dev Complex', 'Marvel', '8 Crore', '<p>The Releasing Permission Of Avengers Endgame Movie Is Sold To Krishna Dev Complex For 8 Crore From Marvel Studio</p>', '51LNtFacJBL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `theater_tb`
--

CREATE TABLE `theater_tb` (
  `id` int(11) NOT NULL,
  `theater` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `screens` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theater_tb`
--

INSERT INTO `theater_tb` (`id`, `theater`, `place`, `screens`, `username`, `password`) VALUES
(1, 'Savitha Film City', 'caltex,kannur', '3', 'savitha', 'admin'),
(2, 'Krishna Dev Complex', 'pattambi,palakkad', '2', 'krishna', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addfilm_tb`
--
ALTER TABLE `addfilm_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributor_rights`
--
ALTER TABLE `distributor_rights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributor_tb`
--
ALTER TABLE `distributor_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filmauction_tb`
--
ALTER TABLE `filmauction_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filmcollection_tb`
--
ALTER TABLE `filmcollection_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producer_tb`
--
ALTER TABLE `producer_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theaterauction_tb`
--
ALTER TABLE `theaterauction_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater_rights`
--
ALTER TABLE `theater_rights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater_tb`
--
ALTER TABLE `theater_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addfilm_tb`
--
ALTER TABLE `addfilm_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `distributor_rights`
--
ALTER TABLE `distributor_rights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `distributor_tb`
--
ALTER TABLE `distributor_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `filmauction_tb`
--
ALTER TABLE `filmauction_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `filmcollection_tb`
--
ALTER TABLE `filmcollection_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `producer_tb`
--
ALTER TABLE `producer_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `theaterauction_tb`
--
ALTER TABLE `theaterauction_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `theater_rights`
--
ALTER TABLE `theater_rights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `theater_tb`
--
ALTER TABLE `theater_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
