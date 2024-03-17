-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Lis 2019, 09:44
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `pizzaparty`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `desery`
--

CREATE TABLE `desery` (
  `id_deser` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `cena` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `desery`
--

INSERT INTO `desery` (`id_deser`, `nazwa`, `opis`, `cena`) VALUES
(1, 'Czekoladowe Calzone', 'Calzone z nadzieniem czekoladowym, posypane cukrem pudrem', 11.5),
(2, 'Pana Cotta', 'Pana Cotta ze śmietanką, żelatyną, laską waniliową, syropem malinowym i świeżymi owocami leśnymi', 9.5),
(3, 'Tiramisu', 'Tiramisu z jajkami, mascarpone, ciasteczkami Pavezinni, likierem Amaretto, kawą i kakao', 11.2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lokale`
--

CREATE TABLE `lokale` (
  `id_lokal` int(11) NOT NULL,
  `miasto` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `ulica` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `numer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `lokale`
--

INSERT INTO `lokale` (`id_lokal`, `miasto`, `ulica`, `numer`) VALUES
(1, 'Gorzów Wielkopolski', 'Chrobrego', 21),
(2, 'Gorzów Wielkopolski', 'Walczaka', 13),
(3, 'Gorzów Wielkopolski', 'Hawaleńska', 1),
(4, 'Szczecin', 'Piłsudskiego', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `napoje`
--

CREATE TABLE `napoje` (
  `id_napoj` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `cena` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `napoje`
--

INSERT INTO `napoje` (`id_napoj`, `nazwa`, `opis`, `cena`) VALUES
(1, 'Coca-Cola', 'Orzeźwiający napój - idealny na upalne dni! - 0.85L', 5.9),
(2, 'Coca-Cola Zero', 'Orzeźwiający napój - idealny na upalne dni! - 0.85L', 5.9),
(4, 'Fanta', 'Orzeźwiający napój - idealny na upalne dni! - 0.85L', 5.9),
(5, 'Kropla bezkidu Gaz.', 'Naturalna woda mineralna, gazowana - 0.5L', 3.5),
(6, 'Kropla bezkidu Niegaz.', 'Naturalna woda mineralna, niegazowana - 0.5L', 3.5),
(7, 'Sprite', 'Orzeźwiający napój - idealny na upalne dni! - 0.5L', 4.9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pizza`
--

CREATE TABLE `pizza` (
  `id_pizza` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `cena` float NOT NULL,
  `id_typ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pizza`
--

INSERT INTO `pizza` (`id_pizza`, `nazwa`, `opis`, `cena`, `id_typ`) VALUES
(1, 'Margarita', 'sos pomidorowy, ser', 18, 1),
(2, 'Capricciosa', 'sos pomidorowy, ser, szynka, pieczarki', 20, 2),
(3, 'Salami', 'sos pomidorowy, ser, salami', 22, 2),
(4, 'Hawajska', 'sos pomidorowy, ser, szynka, ananas, oregano', 25, 2),
(5, 'Po góralsku', 'sos pomidorowy, ser, oscypek, żurawina, oregano', 24, 1),
(6, 'Turecki rozbój', 'sos pomidorowy, ser, wołowina, kapusta pekińska, pomidor', 24, 2),
(7, 'Brokoli', 'sos pomidorowy, ser, kukurydza, brokuły', 21, 6),
(8, 'Italia', 'sos pomidorowy, ser, szynka, cebula, papryka, bekon, oregano', 26, 2),
(9, 'Pepperoni', 'sos pomidorowy, ser, bekon, cebula, papryka, papryka pepperoni', 27, 5),
(10, 'Quattro Formaggi', 'sos śmietanowy, ser feta, ser pleśniowy, ser gouda, cebula, oregano', 23, 1),
(11, 'Chicken', 'sos pomidorowy, ser, pieczarki, cebula, papryka, kukurydza, kurczak', 26, 2),
(12, 'Americano', 'sos pomidorowy, ser mozzarella, kiełbasa pepperoni, pieczarki', 22, 2),
(13, 'Carbonara', 'sos śmietanowy, ser, boczek, cebula, pieczarki', 23, 2),
(14, 'Wiejska', 'sos pomidorowy, ser, kiełbasa, ogórki konserwowe, cebula, orgegano', 25, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `promocje`
--

CREATE TABLE `promocje` (
  `id_promocja` int(11) NOT NULL,
  `id_pizza` int(11) DEFAULT NULL,
  `id_przystawka` int(11) DEFAULT NULL,
  `id_deser` int(11) DEFAULT NULL,
  `id_napoj` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `promocje`
--

INSERT INTO `promocje` (`id_promocja`, `id_pizza`, `id_przystawka`, `id_deser`, `id_napoj`) VALUES
(1, 1, 0, 0, 0),
(2, 0, 3, 0, 0),
(3, 0, 0, 2, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przystawki`
--

CREATE TABLE `przystawki` (
  `id_przystawka` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `cena` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `przystawki`
--

INSERT INTO `przystawki` (`id_przystawka`, `nazwa`, `opis`, `cena`) VALUES
(1, 'Wege tortilla', 'Zapiekany wrap z tortilli z sosem pomidorowym, serem mozzarella, młodym szpinakiem, czarnymi oliwkami, papryką oraz serem typu greckiego', 14.5),
(2, 'Tortilla z kurczakiem', 'Zapiekany wrap z tortilli z sosem czosnkowym, serem mozzarella, pieczonym kurczakiem, papryką i sałatą', 13.9),
(3, 'Tortilla z kurczakiem na ostro', 'Zapiekany w piecu wrap z tortilli z sosem Sriracha, serem mozzarella, pieczonym kurczakiem, czarwoną fasolą i papryczką jalapeno', 13.9),
(4, 'Frytki', 'Grubo ciosane pieczone ziemniaki - 23 szt.', 7.5),
(5, 'Statki ziemniaczane', 'Pieczone stateczki z ziemniaczków - 15 szt.', 8),
(6, 'Dip czosnkowy ', 'Wyśmienity sos czosnkowy z dodatkiem ziół', 1.5),
(7, 'Wielki dip czosnkowy ', 'Wielki wyśmienity sos czosnkowy z dodatkiem ziół', 2.5),
(8, 'Dip musztardowo-miodowy ', 'Pyszne połączenie słodko-ostrego smaku', 1.5),
(9, 'Wielki dip musztardowo-miodowy ', 'Pyszne połączenie słodko-ostrego smaku', 2.5),
(10, 'Dip jalapeno ', 'Pyszny, pikantny sos z papryczek jalapeno', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `typ_pizza`
--

CREATE TABLE `typ_pizza` (
  `id_typ` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `typ_pizza`
--

INSERT INTO `typ_pizza` (`id_typ`, `nazwa`) VALUES
(1, 'Tradycyjne'),
(2, 'Mięsne'),
(4, 'Z owocami morza'),
(5, 'Pikantne'),
(6, 'Wegetariańskie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_user` int(11) NOT NULL,
  `imie` varchar(80) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(80) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(80) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_user`, `imie`, `nazwisko`, `haslo`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdjecia`
--

CREATE TABLE `zdjecia` (
  `id_zdjecia` int(11) NOT NULL,
  `plik` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `id_pizza` int(11) DEFAULT NULL,
  `id_przystawka` int(11) DEFAULT NULL,
  `id_deser` int(11) DEFAULT NULL,
  `id_napoj` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `desery`
--
ALTER TABLE `desery`
  ADD PRIMARY KEY (`id_deser`);

--
-- Indeksy dla tabeli `lokale`
--
ALTER TABLE `lokale`
  ADD PRIMARY KEY (`id_lokal`);

--
-- Indeksy dla tabeli `napoje`
--
ALTER TABLE `napoje`
  ADD PRIMARY KEY (`id_napoj`);

--
-- Indeksy dla tabeli `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id_pizza`),
  ADD KEY `id_typ` (`id_typ`);

--
-- Indeksy dla tabeli `promocje`
--
ALTER TABLE `promocje`
  ADD PRIMARY KEY (`id_promocja`);

--
-- Indeksy dla tabeli `przystawki`
--
ALTER TABLE `przystawki`
  ADD PRIMARY KEY (`id_przystawka`);

--
-- Indeksy dla tabeli `typ_pizza`
--
ALTER TABLE `typ_pizza`
  ADD PRIMARY KEY (`id_typ`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeksy dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  ADD PRIMARY KEY (`id_zdjecia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `desery`
--
ALTER TABLE `desery`
  MODIFY `id_deser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `lokale`
--
ALTER TABLE `lokale`
  MODIFY `id_lokal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `napoje`
--
ALTER TABLE `napoje`
  MODIFY `id_napoj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id_pizza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `promocje`
--
ALTER TABLE `promocje`
  MODIFY `id_promocja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `przystawki`
--
ALTER TABLE `przystawki`
  MODIFY `id_przystawka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `typ_pizza`
--
ALTER TABLE `typ_pizza`
  MODIFY `id_typ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  MODIFY `id_zdjecia` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `pizza`
--
ALTER TABLE `pizza`
  ADD CONSTRAINT `pizza_ibfk_1` FOREIGN KEY (`id_typ`) REFERENCES `typ_pizza` (`id_typ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
