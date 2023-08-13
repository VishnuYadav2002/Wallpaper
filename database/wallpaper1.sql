-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 02:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallpaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `animal_id` int(11) NOT NULL,
  `animal_name` varchar(30) NOT NULL,
  `animal_path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`animal_id`, `animal_name`, `animal_path`) VALUES
(1, 'Squirrel', 'images/Animal/An1.jpg'),
(2, 'Squirrel 1', 'images/Animal/An2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `anime_id` int(11) NOT NULL,
  `anime_name` varchar(30) NOT NULL,
  `anime_path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`anime_id`, `anime_name`, `anime_path`) VALUES
(1, 'Pain', 'images/Anime/a6.jpg'),
(2, 'Sasuke', 'images/Anime/a7.jpg'),
(3, 'Kakashi', 'images/Anime/a5.jpg'),
(4, 'Madara Uchiha', 'images/Anime/a2.jpg'),
(5, 'Jin Mori', 'images/Anime/a3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE `bike` (
  `bike_id` int(11) NOT NULL,
  `bike_name` varchar(30) NOT NULL,
  `bike_path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike`
--

INSERT INTO `bike` (`bike_id`, `bike_name`, `bike_path`) VALUES
(1, 'Royal ', 'images/Bikes/b1.jpg'),
(2, 'KTM', 'images/Bikes/b2.jpg'),
(3, 'Bike', 'images/Bikes/b3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(30) NOT NULL,
  `car_path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `car_name`, `car_path`) VALUES
(1, 'Car1', 'images/Cars/c1.jpg'),
(2, 'Car2', 'images/Cars/c2.jpg'),
(3, 'Car3', 'images/Cars/c3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `design_id` int(11) NOT NULL,
  `design_name` varchar(30) NOT NULL,
  `design_path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`design_id`, `design_name`, `design_path`) VALUES
(1, 'Design1', 'images/Design/de1.jpg'),
(2, 'Design2', 'images/Design/de2.jpg'),
(3, 'Design3', 'images/Design/de3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `drawing`
--

CREATE TABLE `drawing` (
  `drawing_id` int(11) NOT NULL,
  `drawing_name` varchar(30) NOT NULL,
  `drawing_path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drawing`
--

INSERT INTO `drawing` (`drawing_id`, `drawing_name`, `drawing_path`) VALUES
(1, 'Drawing1', 'images/Drawing/dr1.jpg'),
(2, 'Drawing2', 'images/Drawing/dr2.jpg'),
(3, 'Drawing3', 'images/Drawing/dr3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(30) NOT NULL,
  `e_path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`e_id`, `e_name`, `e_path`) VALUES
(1, 'E1', 'images/Entertainment/e1.jpg'),
(2, 'E2', 'images/Entertainment/e2.jpg'),
(3, 'E3', 'images/Entertainment/e3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `funny`
--

CREATE TABLE `funny` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `f_path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funny`
--

INSERT INTO `funny` (`f_id`, `f_name`, `f_path`) VALUES
(1, 'Funny1', 'images/Funny/f2.jpg'),
(2, 'Funny2', 'images/Funny/f3.jpg'),
(3, 'Funny3', 'images/Funny/f4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(30) NOT NULL,
  `img_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_id`, `img_name`, `img_path`) VALUES
(1, 'Anime', 'images/Anime/a1.jpg'),
(2, 'Anime1', 'images/Anime/a2.jpg'),
(3, 'Anime 2', 'images/Anime/a3.jpg'),
(4, 'Drawing', 'images/dr2.jpg'),
(16, 'Anime', 'images/de2.jpg'),
(17, 'Anime', 'images/a1.jpg'),
(18, 'Car', 'images/c1.jpg'),
(19, 'Anime1', 'images/a1.jpg'),
(20, 'Bike', 'images?Bike/b1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `livewp`
--

CREATE TABLE `livewp` (
  `wp_id` int(11) NOT NULL,
  `wp_name` varchar(50) NOT NULL,
  `wp_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livewp`
--

INSERT INTO `livewp` (`wp_id`, `wp_name`, `wp_path`) VALUES
(1, 'Minato', 'live wallpaper/Minato.mp4'),
(2, 'Mermaid', 'live wallpaper/Mermaid.mp4'),
(3, 'AOT', 'live wallpaper/Eren Yeager.mp4'),
(4, 'Kakashi Hatake', 'live wallpaper/Kakashi Hatake.mp4'),
(5, 'Minato And Naruto', 'live wallpaper/Minato-Naruto.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `l_path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`l_id`, `l_name`, `l_path`) VALUES
(1, 'Apple', 'images/Logo/logo1.jpg'),
(2, 'Ferrari', 'images/Logo/logo3.jpg'),
(3, 'Adidas', 'images/Logo/logo4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `love`
--

CREATE TABLE `love` (
  `love_id` int(11) NOT NULL,
  `love_name` varchar(30) NOT NULL,
  `love_path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `love`
--

INSERT INTO `love` (`love_id`, `love_name`, `love_path`) VALUES
(1, 'L1', 'images/Love/l1.jpg'),
(2, 'L2', 'images/Love/l2.jpg'),
(3, 'L3', 'images/Love/l3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `m_path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`m_id`, `m_name`, `m_path`) VALUES
(1, 'Music', 'images/Music/m1.jpg'),
(2, 'Music', 'images/Music/m2.jpg'),
(3, 'Music', 'images/Music/m3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nature`
--

CREATE TABLE `nature` (
  `n_id` int(11) NOT NULL,
  `n_name` varchar(30) NOT NULL,
  `n_path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nature`
--

INSERT INTO `nature` (`n_id`, `n_name`, `n_path`) VALUES
(1, 'Nature', 'images/Nature/n2.jpg'),
(2, 'Nature', 'images/Nature/n3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `role`) VALUES
(3, 'admin', 'Admin', 'admin@gmail.com', '12345', 1),
(4, 'yagyashrestha.3', 'Yagya', 'xyz@gmail.com', '12345', 2),
(5, 'var', 'Varsha', 'xyz@gmail.com', 'var', 2),
(7, 'virzil', 'Vinay', 'abc@gmail.com', 'qwert', 2),
(8, 'xyz', 'XYZ', 'xyz@gmail.com', 'xyz', 2),
(10, 'saga', 'xyz', 'xyz@gmail.com', 'xyz', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`anime_id`);

--
-- Indexes for table `bike`
--
ALTER TABLE `bike`
  ADD PRIMARY KEY (`bike_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`design_id`);

--
-- Indexes for table `drawing`
--
ALTER TABLE `drawing`
  ADD PRIMARY KEY (`drawing_id`);

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `funny`
--
ALTER TABLE `funny`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `livewp`
--
ALTER TABLE `livewp`
  ADD PRIMARY KEY (`wp_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `love`
--
ALTER TABLE `love`
  ADD PRIMARY KEY (`love_id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `nature`
--
ALTER TABLE `nature`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `anime_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bike`
--
ALTER TABLE `bike`
  MODIFY `bike_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `design_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drawing`
--
ALTER TABLE `drawing`
  MODIFY `drawing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `funny`
--
ALTER TABLE `funny`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `livewp`
--
ALTER TABLE `livewp`
  MODIFY `wp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `love`
--
ALTER TABLE `love`
  MODIFY `love_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nature`
--
ALTER TABLE `nature`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
