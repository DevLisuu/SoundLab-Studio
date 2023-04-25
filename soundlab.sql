-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 01:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soundlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `historie_zamowien`
--

CREATE TABLE `historie_zamowien` (
  `id_zamowienia` int(11) NOT NULL,
  `id_klienta` int(11) NOT NULL,
  `id_produktu` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `rodzaj_płatności` varchar(255) DEFAULT NULL,
  `data_zamowienia` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `klienci`
--

CREATE TABLE `klienci` (
  `id_klienta` int(11) NOT NULL,
  `imie` varchar(255) DEFAULT NULL,
  `nazwisko` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `haslo` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `miasto` varchar(255) DEFAULT NULL,
  `kod_pocztowy` varchar(10) DEFAULT NULL,
  `telefon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produkty`
--

CREATE TABLE `produkty` (
  `id_produktu` int(11) NOT NULL,
  `tytul` varchar(255) DEFAULT NULL,
  `wykonawca` varchar(255) DEFAULT NULL,
  `rok_wydania` int(11) DEFAULT NULL,
  `gatunek` varchar(255) DEFAULT NULL,
  `cena` decimal(10,2) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `zdjecie` varchar(255) DEFAULT NULL,
  `zdjecie2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `produkty`
--

INSERT INTO `produkty` (`id_produktu`, `tytul`, `wykonawca`, `rok_wydania`, `gatunek`, `cena`, `opis`, `zdjecie`, `zdjecie2`) VALUES
(1, 'GANG', 'Masno', NULL, NULL, 40.00, NULL, 'gang.jpg', 'gang2.jpg'),
(2, 'Bufor (Standard)', 'Jan-rapowanie', NULL, NULL, 44.00, NULL, 'bufor_standard.jpg', 'bufor_standard2.jpg'),
(3, 'Bufor (Vinyl)', 'Jan-rapowanie', NULL, NULL, 179.99, NULL, 'bufor_vinyl.jpg', 'bufor_vinyl.jpg'),
(4, 'D jak DYCHA (mp3)', 'DYCHA & MASNO', NULL, NULL, 4.99, NULL, 'dycha.jpg', 'dycha2.jpg'),
(5, 'KWIAT POLSKIEJ MŁODZIEŻY', 'Bedoes & Kubi Producent', NULL, NULL, 44.99, NULL, 'kwiat_pol.jpg', 'kwiat_pol1.jpg'),
(6, 'PRETTY BOY (Standard)', 'White 2115', NULL, NULL, 44.99, NULL, 'prettyboy.jpg', 'prettyboy2.jpg'),
(7, 'Evil_Things', 'Guzior', NULL, NULL, 33.99, NULL, 'evil-things.jpg', 'evil-things2.jpg'),
(8, 'Pleśń', 'Guzior', NULL, NULL, 43.99, NULL, 'plesn.jpg', 'plesn2.jpg'),
(9, '2.0', 'Chillwagon', NULL, NULL, 28.99, NULL, '2.0.jpg', '2.02.jpg'),
(10, 'Jeszcze pięć minut', 'Kizo', NULL, NULL, 46.99, NULL, 'jeszczepiecminut.jpg', 'jeszczepiecminut2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_klienta` int(11) NOT NULL,
  `imie` varchar(255) NOT NULL,
  `nazwisko` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historie_zamowien`
--
ALTER TABLE `historie_zamowien`
  ADD PRIMARY KEY (`id_zamowienia`);

--
-- Indexes for table `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id_klienta`);

--
-- Indexes for table `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id_produktu`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_klienta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historie_zamowien`
--
ALTER TABLE `historie_zamowien`
  MODIFY `id_zamowienia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klienta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id_produktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_klienta` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
