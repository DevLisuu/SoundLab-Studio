-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 02:55 PM
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
  `cena` decimal(10,2) DEFAULT NULL,
  `zdjecie` varchar(255) DEFAULT NULL,
  `zdjecie2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `produkty`
--

INSERT INTO `produkty` (`id_produktu`, `tytul`, `wykonawca`, `cena`, `zdjecie`, `zdjecie2`) VALUES
(1, 'GANG', 'Masno', 40.00, 'gang.jpg', 'gang2.jpg'),
(2, 'Bufor (Standard)', 'Jan-rapowanie', 44.00, 'bufor_standard.jpg', 'bufor_standard2.jpg'),
(3, 'Bufor (Vinyl)', 'Jan-rapowanie', 179.99, 'bufor_vinyl.jpg', 'bufor_standard2.jpg'),
(4, 'D jak DYCHA (mp3)', 'DYCHA & MASNO', 4.99, 'dycha.jpg', 'dycha2.jpg'),
(5, 'KWIAT POLSKIEJ MŁODZIEŻY', 'Bedoes & Kubi Producent', 44.99, 'kwiat_pol.jpg', 'kwiat_pol1.jpg'),
(6, 'PRETTY BOY (Standard)', 'White 2115', 44.99, 'prettyboy.jpg', 'prettyboy2.jpg'),
(7, 'Evil_Things', 'Guzior', 33.99, 'evil-things.jpg', 'evil-things2.jpg'),
(8, 'Pleśń', 'Guzior', 43.99, 'plesn.jpg', 'plesn2.jpg'),
(9, '2.0', 'Chillwagon', 28.99, '2.0.jpg', '2.02.jpg'),
(10, 'Jeszcze pięć minut', 'Kizo', 46.99, 'jeszczepiecminut.jpg', 'jeszczepiecminut2.jpg');

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
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_klienta`, `imie`, `nazwisko`, `email`, `haslo`) VALUES
(2, 'a', 'a', 'a@a', '12345678');

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
  MODIFY `id_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
