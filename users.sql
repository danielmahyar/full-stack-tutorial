-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 04. 09 2021 kl. 22:14:52
-- Serverversion: 10.4.17-MariaDB
-- PHP-version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testapp`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `USER_NAME` tinytext NOT NULL,
  `LAST_NAME` tinytext NOT NULL,
  `AGE` int(11) NOT NULL,
  `GENDER` int(11) NOT NULL,
  `SUBJECTS` tinytext DEFAULT NULL,
  `CLASSES` tinytext DEFAULT NULL,
  `ROLE` tinytext NOT NULL DEFAULT 'NO_ROLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`ID`, `USER_NAME`, `LAST_NAME`, `AGE`, `GENDER`, `SUBJECTS`, `CLASSES`, `ROLE`) VALUES
(7, 'Daniel', 'Mahyar', 22, 1, NULL, NULL, 'STUDENT'),
(8, 'Daniel', 'Mahyar', 22, 1, NULL, NULL, 'TEACHER'),
(9, 'August', 'Mahyar', 22, 1, NULL, NULL, 'TEACHER'),
(10, 'August', 'Mahyar', 22, 1, NULL, NULL, 'TEACHER');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
