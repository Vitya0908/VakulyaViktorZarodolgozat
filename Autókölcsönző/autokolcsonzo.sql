-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Ápr 28. 20:20
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `autokolcsonzo`
--
CREATE DATABASE IF NOT EXISTS `autokolcsonzo` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `autokolcsonzo`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tblcar`
--

CREATE TABLE `tblcar` (
  `car_id` int(11) NOT NULL,
  `auto_nev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `leiras` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `evjarat` int(4) NOT NULL,
  `marka` varchar(25) COLLATE utf8_hungarian_ci NOT NULL,
  `szin` varchar(15) COLLATE utf8_hungarian_ci NOT NULL,
  `loero` int(3) NOT NULL,
  `rendszam` varchar(11) COLLATE utf8_hungarian_ci NOT NULL,
  `mertek` float NOT NULL,
  `statusz` int(2) NOT NULL,
  `ulesek_szama` int(3) NOT NULL,
  `valto` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  `ar` int(10) NOT NULL,
  `nepszeruseg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `tblcar`
--

INSERT INTO `tblcar` (`car_id`, `auto_nev`, `leiras`, `evjarat`, `marka`, `szin`, `loero`, `rendszam`, `mertek`, `statusz`, `ulesek_szama`, `valto`, `ar`, `nepszeruseg`) VALUES
(2, 'BMW M4', 'Jó állapotban lévő.', 2020, 'BMW', 'Király kék', 500, 'BMW-001', 5, 1, 5, 'Automata', 40000, 10),
(3, 'RS 6', 'Jó', 2021, 'Audi', 'fekete', 600, 'CXN-234', 4, 1, 5, 'Automata', 30000, 2),
(4, '320D', 'Megkímélt, frissen szervizelt.', 2006, 'BMW', 'Sötét kék', 163, 'RXX-524', 5, 1, 5, 'Manuális', 20000, 9),
(5, 'Giulia', 'Új nyári gumikkal, 50 km ezelőtt cserélt motor olaj.', 2021, 'Alfa Romeo', 'piros', 350, 'ERT-344', 5, 1, 5, 'Automata', 30000, 5),
(6, 'AMG GT', 'Brutális teljesítmény, a száguldás szerelmeseinek. ', 2022, 'Mercedes', 'Matt szürke', 800, 'RXX-356', 5, 1, 2, 'Automata', 60000, 8),
(7, 'Camaro', 'Jó', 2015, 'Chevrolet', 'fekete', 300, 'CHV-635', 4, 1, 4, 'Manuális', 40000, 4);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tblcarimage`
--

CREATE TABLE `tblcarimage` (
  `image_id` int(11) NOT NULL,
  `kep` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `car_id` int(11) NOT NULL,
  `main_foto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `tblcarimage`
--

INSERT INTO `tblcarimage` (`image_id`, `kep`, `car_id`, `main_foto`) VALUES
(2, 'img_4.jpg', 2, 1),
(3, 'Rs6.jpg', 3, 1),
(4, 'BMW-min.jpg', 4, 1),
(5, 'Giulia-min.jpg', 5, 1),
(6, 'AMG-min.jpg', 6, 1),
(7, 'img_3.jpg', 7, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tblrental`
--

CREATE TABLE `tblrental` (
  `rental_id` int(11) NOT NULL,
  `rental_date` date NOT NULL,
  `return_date` date NOT NULL,
  `car_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rental_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `tblrental`
--

INSERT INTO `tblrental` (`rental_id`, `rental_date`, `return_date`, `car_id`, `user_id`, `rental_status`) VALUES
(1, '2022-01-28', '2022-01-31', 2, 3, 0),
(2, '2022-04-10', '2022-04-15', 2, 1, 0),
(3, '2022-09-04', '2022-09-08', 2, 3, 0),
(4, '2022-04-12', '2022-04-15', 2, 1, 1),
(26, '2022-03-10', '2022-01-01', 2, 3, 0),
(37, '2022-03-25', '2022-03-27', 2, 1, 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_hungarian_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'asd', 'asd', '$2y$10$xBgnCcVXasQU2h9zPG3TOOtaFGbpAZg45bXXVW0MX5NgTkALM3gqq', 'user'),
(3, 'Vitya', 'teszt@gmail.com', '$2y$10$YfYHJIhyS52CEp0yAVzak.EtfapU93liFZdmDlE9XIbI4SPJs55y6', 'user'),
(5, 'Petra', 'dawnd', '$2y$10$fzxvOT73TLyoAYGdSZaYze6Z1pCuOn.y96ZAHtydKFdjj7pN.PqZK', 'user');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `tblcar`
--
ALTER TABLE `tblcar`
  ADD PRIMARY KEY (`car_id`);

--
-- A tábla indexei `tblcarimage`
--
ALTER TABLE `tblcarimage`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `car_id` (`car_id`);

--
-- A tábla indexei `tblrental`
--
ALTER TABLE `tblrental`
  ADD PRIMARY KEY (`rental_id`),
  ADD KEY `owner_id` (`car_id`,`user_id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `customer_id` (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `tblcar`
--
ALTER TABLE `tblcar`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT a táblához `tblcarimage`
--
ALTER TABLE `tblcarimage`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT a táblához `tblrental`
--
ALTER TABLE `tblrental`
  MODIFY `rental_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `tblcarimage`
--
ALTER TABLE `tblcarimage`
  ADD CONSTRAINT `tblcarimage_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `tblcar` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `tblrental`
--
ALTER TABLE `tblrental`
  ADD CONSTRAINT `tblrental_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `tblcar` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblrental_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
