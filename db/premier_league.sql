-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: sept. 10, 2019 la 07:13 PM
-- Versiune server: 10.3.15-MariaDB
-- Versiune PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `premier_league`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `alerts`
--

CREATE TABLE `alerts` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `alerts`
--

INSERT INTO `alerts` (`id`, `fname`, `lname`, `email`, `subject`, `message`, `data`) VALUES
(1, 'Biber', 'Andreea', 'bandreea@gmail.com', 'Acesta este un subiect.', 'Acesta este un mesaj.', 'Data de 28-08-2019 la ora 20:53:47'),
(2, 'Biber', 'Andreea', 'bandreea@gmail.com', 'Livrare produs', 'Produsul nu a fost livrat.', 'Data de 10-09-2019 la ora 19:20:36');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `retur`
--

CREATE TABLE `retur` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `nameProdus` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `retur`
--

INSERT INTO `retur` (`id`, `fname`, `lname`, `email`, `phone`, `nameProdus`, `data`) VALUES
(1, 'Broinas', 'Catalin', 'cata@yahoo.com', 774096154, 'Tricou Liverpool Polo, alb, copii.', 'Data de 28-08-2019 la ora 20:52:06'),
(2, 'Broinas', 'Catalin', 'cata@yahoo.com', 765277604, 'Tricou Liverpool Polo, alb, copii.', 'Data de 10-09-2019 la ora 19:18:41');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `password` text NOT NULL,
  `jud` text NOT NULL,
  `loc` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `jud`, `loc`, `address`) VALUES
(1, 'Broinas', 'Catalin', 'cata@yahoo.com', 765277604, '91cb315a6405bfcc30e2c4571ccfb8ce', 'Bihor', 'Oradea', 'Str. Universitati, nr. 1'),
(2, 'Biber', 'Andreea', 'bandreea@gmail.com', 747389812, '91cb315a6405bfcc30e2c4571ccfb8ce', 'Bihor', 'Alesd', 'Str. Manastur, nr 12'),
(3, 'Chipciu', 'Alex', 'calex@gmail.com', 727656112, '91cb315a6405bfcc30e2c4571ccfb8ce', 'BucureÈ›ti sector 1', 'Bucuresti', 'Str. Stefan cel Mare, nr. 9');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `alerts`
--
ALTER TABLE `alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `retur`
--
ALTER TABLE `retur`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `alerts`
--
ALTER TABLE `alerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pentru tabele `retur`
--
ALTER TABLE `retur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
