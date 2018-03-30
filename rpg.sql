-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Mar 2018, 10:23
-- Wersja serwera: 10.1.29-MariaDB
-- Wersja PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `rpg`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `armor`
--

CREATE TABLE `armor` (
  `player_id` int(11) NOT NULL,
  `typ` varchar(32) NOT NULL,
  `obc` varchar(32) NOT NULL,
  `lokacja_ciala` varchar(32) NOT NULL,
  `pz` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `armor`
--

INSERT INTO `armor` (`player_id`, `typ`, `obc`, `lokacja_ciala`, `pz`) VALUES
(1, 'lekki', '2', 'dupa', '3');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cechy_glowne`
--

CREATE TABLE `cechy_glowne` (
  `player_id` int(11) NOT NULL,
  `WW` int(25) NOT NULL,
  `US` int(15) NOT NULL,
  `K` int(45) NOT NULL,
  `ODP` int(30) NOT NULL,
  `ZR` int(42) NOT NULL,
  `INT` int(33) NOT NULL,
  `SW` int(25) NOT NULL,
  `OGD` int(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `cechy_glowne`
--

INSERT INTO `cechy_glowne` (`player_id`, `WW`, `US`, `K`, `ODP`, `ZR`, `INT`, `SW`, `OGD`) VALUES
(1, 25, 33, 15, 53, 23, 16, 5, 42);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `player`
--

CREATE TABLE `player` (
  `id_player` int(11) NOT NULL,
  `nick` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `player`
--

INSERT INTO `player` (`id_player`, `nick`) VALUES
(1, 'tykieph');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `weapon`
--

CREATE TABLE `weapon` (
  `player_id` int(11) NOT NULL,
  `nazwa` varchar(32) NOT NULL,
  `obc` varchar(32) NOT NULL,
  `kat` varchar(32) NOT NULL,
  `sila` varchar(32) NOT NULL,
  `zasieg` varchar(32) NOT NULL,
  `przelad` varchar(32) NOT NULL,
  `cechy` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `weapon`
--

INSERT INTO `weapon` (`player_id`, `nazwa`, `obc`, `kat`, `sila`, `zasieg`, `przelad`, `cechy`) VALUES
(1, 'miecz', '3', 'chuj', '5', '3', '2', 'mjentki');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `armor`
--
ALTER TABLE `armor`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `cechy_glowne`
--
ALTER TABLE `cechy_glowne`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id_player`);

--
-- Indexes for table `weapon`
--
ALTER TABLE `weapon`
  ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `player`
--
ALTER TABLE `player`
  MODIFY `id_player` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
