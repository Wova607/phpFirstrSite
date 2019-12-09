-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Гру 09 2019 р., 06:19
-- Версія сервера: 10.4.8-MariaDB
-- Версія PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `animal_db`
--

-- --------------------------------------------------------

--
-- Структура таблиці `tbl_animals`
--

CREATE TABLE `tbl_animals` (
  `Id` int(11) NOT NULL,
  `Kind` varchar(255) NOT NULL,
  `Breed` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Birdthday` date DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `tbl_user`
--

CREATE TABLE `tbl_user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `Birdthday` date DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Login` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `tbl_user`
--

INSERT INTO `tbl_user` (`Id`, `Name`, `Surname`, `Birdthday`, `Email`, `Phone`, `City`, `Login`, `Password`) VALUES
(1, 'Vova', 'Solohubov', '2019-12-01', 'wova607@gmail.com', '+380969659465', 'Rivne', 'wova607', '$2y$10$LbShwgMm6ubjNU3vMRKHGeb5.AlhWrVtL/V19xo8sea3CRUYUiIeq'),
(2, 'WovaTest', 'Test', '2019-11-04', 'wova607@gmail.com', '+380969659465', 'Rivne', 'wTest', '$2y$10$u2sQP59OSkDzF3h6ddgXlevjhAC2sB6uRoZ12yEo8cVY0k69LFtfS');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `tbl_animals`
--
ALTER TABLE `tbl_animals`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `tbl_animals`
--
ALTER TABLE `tbl_animals`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
