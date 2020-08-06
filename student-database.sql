-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 06. Aug 2020 um 07:23
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `student-database`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `Studiengang` varchar(32) NOT NULL,
  `Kurzel` varchar(6) NOT NULL,
  `Abschluss` varchar(32) NOT NULL,
  `Semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `courses`
--

INSERT INTO `courses` (`id`, `Studiengang`, `Kurzel`, `Abschluss`, `Semester`) VALUES
(1, 'Multimedia und Kommunikation', 'MUK', 'Bachelor of Arts', 7),
(2, 'Angewandte Ingenieurwissenschaft', 'AIW', 'Bachelor of Engineering', 7),
(3, 'Angewandte Kunststofftechnik', 'AKT', 'Bachelor of Engineering', 11);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `foto` mediumblob NOT NULL,
  `nachname` varchar(12) NOT NULL,
  `vorname` varchar(12) NOT NULL,
  `studiengang` varchar(12) NOT NULL,
  `semester` int(2) NOT NULL,
  `matrikelnummer` int(10) NOT NULL,
  `email` varchar(32) NOT NULL,
  `telefon` varchar(32) NOT NULL,
  `adresse` varchar(64) NOT NULL,
  `geburtsdatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
