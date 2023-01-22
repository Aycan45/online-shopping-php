-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Време на генериране: 22 яну 2023 в 17:57
-- Версия на сървъра: 10.4.24-MariaDB
-- Версия на PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данни: `shopping`
--

-- --------------------------------------------------------

--
-- Структура на таблица `item`
--

CREATE TABLE `item` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `item`
--

INSERT INTO `item` (`ID`, `title`, `description`, `images`) VALUES
(13, 'Iphone', 'Iphone 13 pro', 'images/pro.jpeg'),
(14, 'Darwin', 'Darwin from Gumball', 'images/adsda.jpg'),
(15, 'car', 'How are you', 'images/iphone.jpeg'),
(16, 'test', 'test', 'images/adsda.jpg'),
(17, 'test', 'For cat day', 'images/adsda.jpg'),
(18, 'asdasd', 'asdasdas', 'images/adsda.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`ID`, `name`, `surname`, `email`, `phone`, `city`, `password`) VALUES
(1, 'Gosho', 'Boev', 'gosho@email.com', 2147483647, 'Plovdiv', '$2y$10$fET0fhrc4..E.adWq7'),
(2, 'Mitko1', 'Mitkov', 'mitko@mitko.eu', 2147483647, 'Plovdiv', '$2y$10$LeXtdsBX1wz6FxscQMmuh.LqDn/h5FhLJ3P3M9Dn/oxWKSJqqHPly'),
(3, 'Peter', 'Malinkov', 'peter@peter.com', 2147483647, 'Plovdiv', '$2y$10$tkde/xlRkQSRQuTkmDpUPufr07snpcCiZI5eGlYfAuw3WZamfthYC');

--
-- Indexes for dumped tables
--

--
-- Индекси за таблица `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID`);

--
-- Индекси за таблица `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
