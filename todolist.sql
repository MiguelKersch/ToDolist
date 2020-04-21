-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 21 apr 2020 om 10:11
-- Serverversie: 10.4.10-MariaDB
-- PHP-versie: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lijsten`
--

DROP TABLE IF EXISTS `lijsten`;
CREATE TABLE IF NOT EXISTS `lijsten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `lijsten`
--

INSERT INTO `lijsten` (`id`, `naam`) VALUES
(5, 'aardappels'),
(6, 'aaaa');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `todo`
--

DROP TABLE IF EXISTS `todo`;
CREATE TABLE IF NOT EXISTS `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taak` varchar(20) NOT NULL,
  `beschrijving` varchar(500) NOT NULL,
  `status` varchar(25) NOT NULL,
  `duur` int(6) NOT NULL,
  `lijstId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `todo`
--

INSERT INTO `todo` (`id`, `taak`, `beschrijving`, `status`, `duur`, `lijstId`) VALUES
(13, '12345', 'lorem ipsum', 'Niet begonnen', 55500, 5),
(14, 'taak', 'aaaa', 'OK', 95900, 4),
(15, 'test', 'aadsdsdsdsad', 'Bezig', 32300, 5),
(16, 'test2', 'daaaa', 'Niet begonnen', 232100, 5),
(17, 'Afwassen', 'ahahahahahhha', 'Bezig', 380, 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
