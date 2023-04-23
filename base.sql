CREATE TABLE produkty (
  id_produktu INT AUTO_INCREMENT PRIMARY KEY,
  tytul VARCHAR(255),
  wykonawca VARCHAR(255),
  rok_wydania INT,
  gatunek VARCHAR(255),
  cena DECIMAL(10,2),
  opis TEXT,
  zdjecie VARCHAR(255),
  zdjecie2 VARCHAR(255)
);

CREATE TABLE klienci (
  id_klienta INT AUTO_INCREMENT PRIMARY KEY,
  imie VARCHAR(255),
  nazwisko VARCHAR(255),
  email VARCHAR(255),
  haslo VARCHAR(255),
  adres VARCHAR(255),
  miasto VARCHAR(255),
  kod_pocztowy VARCHAR(10),
  telefon VARCHAR(20)
);


CREATE TABLE `uzytkownicy` (
  `id_klienta` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `imie` varchar(255) NOT NULL,
  `nazwisko` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `token` int(11) NOT NULL
);

CREATE TABLE historie_zamowien (
  id_zamowienia INT NOT NULL AUTO_INCREMENT,
  id_klienta INT NOT NULL,
  id_produktu INT NOT NULL,
  ilosc INT NOT NULL,
  cena DECIMAL(10,2) NOT NULL,
  data_zamowienia DATETIME NOT NULL,
  status VARCHAR(20) NOT NULL,
  PRIMARY KEY (id_zamowienia),
--   FOREIGN KEY (id_klienta) REFERENCES klienci(id_klienta),
--   FOREIGN KEY (id_produktu) REFERENCES produkty(id_produktu)
);

INSERT INTO `produkty` (`id_produktu`, `tytul`, `wykonawca`, `cena`, `zdjecie`, `zdjecie2`) VALUES
(1, 'GANG', 'Masno', 40.00, 'gang.jpg', 'gang2.jpg'),
(2, 'Bufor (Standard)', 'Jan-rapowanie', 44.00, 'bufor_standard.jpg', 'bufor_standard.jpg'),
(3, 'Bufor (Vinyl)', 'Jan-rapowanie', 179.99, 'bufor_vinyl.jpg', 'bufor_vinyl.jpg'),
(4, 'D jak DYCHA (mp3)', 'DYCHA & MASNO', 4.99, 'dycha.jpg', 'dycha.jpg'),
(5, 'KWIAT POLSKIEJ MŁODZIEŻY', 'Bedoes & Kubi Producent', 44.99, 'kwiat_pol.jpg', 'kwiat_pol.jpg'),
(6, 'PRETTY BOY (Standard)', 'White 2115', 44.99, 'prettyboy.jpg', 'prettyboy2.jpg');

INSERT INTO `historie_zamowien`(`id_produktu`, `ilosc`, `cena`, `data_zamowienia`) VALUES (1,1,10,2020-1-1)