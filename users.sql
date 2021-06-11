-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 05 Ιουν 2021 στις 12:34:02
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
-- Δομή πίνακα για τον πίνακα `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userType` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `userType`) VALUES
(1, 'admin', '5@yB&RK#HRSu', 'admin');

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


CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  email varchar(100) NOT NULL,
  userType varchar(100) NOT NULL DEFAULT 'user'
);

CREATE TABLE comments(
	CommentID int(11) not null AUTO_INCREMENT PRIMARY KEY,
    UserID Varchar(128) not null,
    Date datetime not null,
    message TEXT not null
);

CREATE TABLE contact (
    messageID int(11) not null AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) not null,
    email VARCHAR(100) not null,
    phone INTEGER(15) not null,
    Date datetime not null,
    message VARCHAR(300) not null
 );





--
-- Ευρετήρια για άχρηστους πίνακες
--

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
-- Ευρετήρια για πίνακα `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT για πίνακα `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
