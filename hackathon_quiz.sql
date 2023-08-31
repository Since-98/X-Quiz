-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 31 aug 2023 om 10:11
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon_quiz`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vraag_type`
--

CREATE TABLE `vraag_type` (
  `ID` int(50) NOT NULL,
  `Vraag` varchar(50) NOT NULL,
  `Antwoord` varchar(50) NOT NULL,
  `Plaatje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `vraag_type`
--

INSERT INTO `vraag_type` (`ID`, `Vraag`, `Antwoord`, `Plaatje`) VALUES
(9, 'Hoeveel vissen zwemmen er in de zee', 'Onbekend', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `vraag_type`
--
ALTER TABLE `vraag_type`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `vraag_type`
--
ALTER TABLE `vraag_type`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
