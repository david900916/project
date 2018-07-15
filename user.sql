-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 07 月 15 日 08:17
-- 伺服器版本: 10.1.32-MariaDB
-- PHP 版本： 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test2`
--

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(10) NOT NULL,
  `UserID` int(8) NOT NULL,
  `Passwd` int(11) NOT NULL,
  `Class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `name`, `UserID`, `Passwd`, `Class`) VALUES
(1, 'david', 6305060, 123, 2),
(3, 'bitch', 6305001, 1, 1),
(3, 'jack', 7305001, 1, 1),
(4, 'fuck', 12345678, 111, 1),
(5, 'abc', 123, 456, 1),
(6, 'def', 789, 12, 1),
(7, '1', 0, 0, 0),
(8, '2', 1, 1, 0),
(9, '1', 6304001, 1, 0),
(10, '2', 6304002, 2, 0),
(11, '3', 6304003, 3, 0),
(12, '1', 5305060, 1, 1),
(13, '2', 5305061, 2, 1),
(14, '3', 5305062, 3, 1),
(15, '4', 5305063, 4, 1),
(16, '5', 5305064, 5, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
