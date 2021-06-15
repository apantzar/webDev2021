-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 13 Ιουν 2021 στις 14:31:35
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
CREATE TABLE contact (
    messageID int(11) not null AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) not null,
    email VARCHAR(100) not null,
    phone INTEGER(15) not null,
    Date datetime not null,
    message VARCHAR(300) not null
 );



 CREATE TABLE comments(
	CommentID int(11) not null AUTO_INCREMENT PRIMARY KEY,
    UserID Varchar(128) not null,
    Date datetime not null,
    message TEXT not null
);

INSERT INTO comments (CommentID,UserID,Date,message) VALUES (1,'Nicolas','2021-06-15 01:28:40','Hello Guys! From Beautifull Island Of Pafos!');
INSERT INTO comments (CommentID,UserID,Date,message) VALUES (2,'Emily','2021-06-15 01:28:49','Hello Nicolas How Are You Doing There?!');
INSERT INTO comments (CommentID,UserID,Date,message) VALUES (3,'Papadopoulos','2021-06-15 01:31:28','Come And Visit Bahames (Hola Hola)!');
INSERT INTO comments (CommentID,UserID,Date,message) VALUES (4,'K.Katakouzinos','2021-06-15 02:02:32','Oh Guys Have You Ever Heard How Sewerage System Was Working At Byzantium?');

CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(100) NOT NULL,
  password varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  userType varchar(100) NOT NULL DEFAULT 'user'
);

INSERT INTO users (id,username,password,email,userType) VALUES (1,'Nicolas','12345678','NicolasCage@hollywood.com','user');
INSERT INTO users (id,username,password,email,userType) VALUES (2,'Emily','87654321','EmilyRatajkowski@hollywood.com','user');
INSERT INTO users (id,username,password,email,userType) VALUES (3,'Papadopoulos','qwerty','ADreamComeTrue@hollywood.com','user');
INSERT INTO users (id,username,password,email,userType) VALUES (4,'K.Katakouzinos','Byzan','KKatakouzinos@Byzantiologists.gr','user');


CREATE TABLE profileimg(
  id int(11) not null PRIMARY KEY AUTO_INCREMENT,
  userid int(11) not null,
  status int(11) not null
);

INSERT INTO profileimg (id,userid,status) VALUES (1,1,0);
INSERT INTO profileimg (id,userid,status) VALUES (2,2,0);
INSERT INTO profileimg (id,userid,status) VALUES (3,3,1);
INSERT INTO profileimg (id,userid,status) VALUES (4,4,0);








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
(1, 'The ocean is a huge body of saltwater that covers about 71 percent of the Earth’s surface. The planet has one global ocean, though oceanographers and the nations of the world have divided it into distinct geographic regions: the Pacific, Atlantic, Indian, and Arctic oceans. In recent years, some oceanographers have determined that the seas around Antarctica deserve their own designation: the Southern Ocean. An estimated 97 percent of the world’s water is found in the ocean. Because of this, the ocean has considerable impact on weather, temperature, and the food supply of humans and other organisms. Despite its size and impact on the lives of every organism on Earth, the ocean remains a mystery. More than 80 percent of the ocean has never been mapped, explored, or even seen by humans. A far greater percentage of the surfaces of the moon and the planet Mars have been mapped and studied than our own ocean floor has.It is unknown how many different species call the ocean their home. With many marine ecosystems suffering from rising sea temperatures, pollution, and other problems, some oceanographers believe the number of species is dropping. Still, there may be many positive surprises awaiting oceanographers in the years ahead. It could be that more than 90 percent of the ocean’s species are still undiscovered, with some scientists estimating that there are anywhere between a few hundred thousand to a few million more to be discovered. Currently, scientists know of around 226,000 ocean species.\r\n\r\nWrecked ships pollute the ocean through the release of oil, fuel, acidic components, asbestos, plastic, and radioactive materials, some of these are based on ship cargo contents. Some materials aboard sunken ships such as stainless steel or wood do not pollute the ocean.Of course, all pollution should be addressed. But it’s common to hear of many sunken ships …or “shipwrecks” occurring.From the many ships sunk during the second world war, to many more that have happened since. In fact, often ships these days are intentionally sunk too. Many ships are sunk intentionally simply to provide for “great diving spots”. Because divers enjoy diving into and around sunken ships! However, aside from human enjoyment at the cost of the planet, shipwrecks and sunken ships are a great potential pollution source.', '', 'Ocean');

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
(1, 'admin', '660dd10155865dc861bf169f7e6d30c97125a5aea6874c795bf312998666bba3', 'admin');

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
