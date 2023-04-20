-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Kwi 2023, 16:51
-- Wersja serwera: 10.4.16-MariaDB
-- Wersja PHP: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `vishop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `albumy`
--

CREATE TABLE `albumy` (
  `id_albumu` int(11) NOT NULL,
  `tytul` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `wykonawca` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `rok_wydania` int(11) DEFAULT NULL,
  `gatunek` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `cena` decimal(10,2) DEFAULT NULL,
  `opis` text COLLATE utf8_polish_ci DEFAULT NULL,
  `zdjecie` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `historie_zamowien`
--

CREATE TABLE `historie_zamowien` (
  `id_zamowienia` int(11) NOT NULL,
  `id_klienta` int(11) NOT NULL,
  `id_albumu` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `data_zamowienia` datetime NOT NULL,
  `status` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id_klienta` int(11) NOT NULL,
  `imie` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `nazwisko` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `haslo` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `miasto` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `kod_pocztowy` varchar(10) COLLATE utf8_polish_ci DEFAULT NULL,
  `telefon` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id_zamowienia` int(11) NOT NULL,
  `id_klienta` int(11) DEFAULT NULL,
  `data_zamowienia` datetime DEFAULT NULL,
  `cena_calkowita` decimal(10,2) DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia_albumy`
--

CREATE TABLE `zamowienia_albumy` (
  `id_zamowienia` int(11) NOT NULL,
  `id_albumu` int(11) NOT NULL,
  `ilosc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `albumy`
--
ALTER TABLE `albumy`
  ADD PRIMARY KEY (`id_albumu`);

--
-- Indeksy dla tabeli `historie_zamowien`
--
ALTER TABLE `historie_zamowien`
  ADD PRIMARY KEY (`id_zamowienia`),
  ADD KEY `id_klienta` (`id_klienta`),
  ADD KEY `id_albumu` (`id_albumu`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id_klienta`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id_zamowienia`),
  ADD KEY `id_klienta` (`id_klienta`);

--
-- Indeksy dla tabeli `zamowienia_albumy`
--
ALTER TABLE `zamowienia_albumy`
  ADD PRIMARY KEY (`id_zamowienia`,`id_albumu`),
  ADD KEY `id_albumu` (`id_albumu`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `albumy`
--
ALTER TABLE `albumy`
  MODIFY `id_albumu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klienta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id_zamowienia` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `historie_zamowien`
--
ALTER TABLE `historie_zamowien`
  ADD CONSTRAINT `historie_zamowien_ibfk_1` FOREIGN KEY (`id_klienta`) REFERENCES `klienci` (`id_klienta`),
  ADD CONSTRAINT `historie_zamowien_ibfk_2` FOREIGN KEY (`id_albumu`) REFERENCES `albumy` (`id_albumu`);

--
-- Ograniczenia dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD CONSTRAINT `zamowienia_ibfk_1` FOREIGN KEY (`id_klienta`) REFERENCES `klienci` (`id_klienta`);

--
-- Ograniczenia dla tabeli `zamowienia_albumy`
--
ALTER TABLE `zamowienia_albumy`
  ADD CONSTRAINT `zamowienia_albumy_ibfk_1` FOREIGN KEY (`id_zamowienia`) REFERENCES `zamowienia` (`id_zamowienia`),
  ADD CONSTRAINT `zamowienia_albumy_ibfk_2` FOREIGN KEY (`id_albumu`) REFERENCES `albumy` (`id_albumu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
