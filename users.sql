-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 15 Ιουν 2021 στις 13:44:44
-- Έκδοση διακομιστή: 10.4.19-MariaDB
-- Έκδοση PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `users`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(11) NOT NULL,
  `UserID` varchar(128) NOT NULL,
  `Date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `comments`
--

INSERT INTO `comments` (`CommentID`, `UserID`, `Date`, `message`) VALUES
(1, 'Nicolas', '2021-06-15 01:28:40', 'Hello Guys! From Beautifull Island Of Pafos!'),
(2, 'Emily', '2021-06-15 01:28:49', 'Hello Nicolas How Are You Doing There?!'),
(3, 'Papadopoulos', '2021-06-15 01:31:28', 'Come And Visit Bahames (Hola Hola)!'),
(4, 'K.Katakouzinos', '2021-06-15 02:02:32', 'Oh Guys Have You Ever Heard How Sewerage System Was Working At Byzantium?');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `contact`
--

CREATE TABLE `contact` (
  `messageID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `Date` datetime NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `images` varchar(100) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `home`
--

INSERT INTO `home` (`id`, `text`, `images`, `title`) VALUES
(1, 'This is a text for home page!', '', 'Test From db');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `info`
--

CREATE TABLE `info` (
  `title` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `maps`
--

CREATE TABLE `maps` (
  `title` int(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `marine_life`
--

CREATE TABLE `marine_life` (
  `title` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `profileimg`
--

CREATE TABLE `profileimg` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `profileimg`
--

INSERT INTO `profileimg` (`id`, `userid`, `status`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 1),
(4, 4, 0),
(5, 5, 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userType` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `userType`) VALUES
(1, 'Nicolas', '12345678', 'NicolasCage@hollywood.com', 'user'),
(2, 'Emily', '87654321', 'EmilyRatajkowski@hollywood.com', 'user'),
(3, 'Papadopoulos', 'qwerty', 'ADreamComeTrue@hollywood.com', 'user'),
(4, 'K.Katakouzinos', 'Byzan', 'KKatakouzinos@Byzantiologists.gr', 'user'),
(5, 'admin', '660dd10155865dc861bf169f7e6d30c97125a5aea6874c795bf312998666bba3', 'admin@admin.com', 'admin');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`);

--
-- Ευρετήρια για πίνακα `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`messageID`);

--
-- Ευρετήρια για πίνακα `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`title`);

--
-- Ευρετήρια για πίνακα `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`title`);

--
-- Ευρετήρια για πίνακα `marine_life`
--
ALTER TABLE `marine_life`
  ADD PRIMARY KEY (`title`);

--
-- Ευρετήρια για πίνακα `profileimg`
--
ALTER TABLE `profileimg`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT για πίνακα `contact`
--
ALTER TABLE `contact`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT για πίνακα `profileimg`
--
ALTER TABLE `profileimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
