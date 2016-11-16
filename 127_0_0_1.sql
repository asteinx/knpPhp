-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Nov 2016 um 11:38
-- Server-Version: 10.1.10-MariaDB
-- PHP-Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `air_pup`
--
CREATE DATABASE IF NOT EXISTS `air_pup` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `air_pup`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pet`
--

CREATE TABLE `pet` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `breed` varchar(100) DEFAULT NULL,
  `age` int(4) DEFAULT NULL,
  `weight` int(4) DEFAULT NULL,
  `bio` text,
  `filename` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `pet`
--

INSERT INTO `pet` (`id`, `name`, `breed`, `age`, `weight`, `bio`, `filename`) VALUES
(1, 'Chew Barka', 'Bichon', 3, 12, 'The park, The pool or the Playground - I love to go anywhere! I am really great at... SQUIRREL!', 'bichon.jpg'),
(2, 'Spark Pug', 'Pug', 12, 6, 'You want to go to the dog park in style? Then I am your pug!', 'pug.jpg'),
(3, 'Pico de Gato', 'Bengal', 5, 9, 'Oh hai, if you do not have a can of salmon I am not interested.', 'bengal.jpg'),
(4, 'Pancake', 'Bulldog', 9, 22, 'Treats and Snoozin!', 'pancake.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `pet`
--
ALTER TABLE `pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
