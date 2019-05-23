-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 mei 2019 om 13:45
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sono`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sonobase`
--

CREATE TABLE `sonobase` (
  `ID` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Furthest Distance Travelled` int(11) NOT NULL DEFAULT '0',
  `Total Distance Travelled` int(11) NOT NULL DEFAULT '0',
  `Most coins in a run` int(11) NOT NULL DEFAULT '0',
  `Total Coins` int(11) NOT NULL DEFAULT '0',
  `Total Playcount` int(11) NOT NULL DEFAULT '0',
  `Total Pickups` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `sonobase`
--

INSERT INTO `sonobase` (`ID`, `Username`, `Password`, `Furthest Distance Travelled`, `Total Distance Travelled`, `Most coins in a run`, `Total Coins`, `Total Playcount`, `Total Pickups`) VALUES
(1, 'WiebeHero', 'Pass', 0, 0, 0, 0, 0, 0),
(2, 'Gerson', 'Yeet', 0, 0, 0, 0, 0, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `sonobase`
--
ALTER TABLE `sonobase`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `sonobase`
--
ALTER TABLE `sonobase`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
