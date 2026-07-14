-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Maj 2024, 06:44
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `viachat`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `conversations`
--

CREATE TABLE `conversations` (
  `ConversationID` int(11) NOT NULL,
  `User1ID` int(11) NOT NULL,
  `User2ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `conversations`
--

INSERT INTO `conversations` (`ConversationID`, `User1ID`, `User2ID`) VALUES
(1, 4, 5),
(2, 4, 6),
(3, 4, 3),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `messages`
--

CREATE TABLE `messages` (
  `MessageID` int(11) NOT NULL,
  `ConversationID` int(11) NOT NULL,
  `SenderID` int(11) NOT NULL,
  `ReceiverID` int(11) NOT NULL,
  `Content` text NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `messages`
--

INSERT INTO `messages` (`MessageID`, `ConversationID`, `SenderID`, `ReceiverID`, `Content`, `Timestamp`) VALUES
(3, 2, 6, 4, 'Hej, co u Ciebie?', '2024-05-16 21:25:34'),
(4, 2, 4, 6, 'Wszystko w porządku, dzięki!', '2024-05-16 21:25:34'),
(5, 2, 4, 6, 'Gramy w fortnite?', '2024-05-17 21:50:26'),
(6, 2, 6, 4, 'spoko okok', '2024-05-17 21:53:01'),
(69, 2, 4, 6, 'Gramy w piłe', '0000-00-00 00:00:00'),
(70, 2, 6, 4, 'dobra', '0000-00-00 00:00:00'),
(71, 1, 4, 5, 'Robimy cosik', '0000-00-00 00:00:00'),
(72, 3, 4, 3, 'Elo', '0000-00-00 00:00:00'),
(73, 1, 4, 5, 'halu', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Email`, `Password`) VALUES
(1, 'Mietek', 'mietek@wp.pl', '$2y$10$eNaxO00CtOrMW9yY05W.M.e8lUjc1mOos7YNNLzPEMT9t7JuutdKa'),
(2, 'Wiktor', 'wiktor@wp.pl', '$2y$10$6Jk2Wx1NLCIbZujlimvfkutrxIqVDGd7YPdZf2Z8ViO3TTcaR8SHm'),
(3, 'Hanus', 'hanus@wp.pl', '$2y$10$d3E64dmsnHzfmHxsgGgKM.qG0X5.EaMxVVZleI78cSoRbXagtj6M6'),
(4, 'Jel', 'jel@wp.pl', '$2y$10$GkN9hZ0m3n.7NEQmTcCe6OMPC5h2iYWqYgPugsISVCRDZuHgSwxvW'),
(5, 'Pablo', 'pablo@wp.pl', '$2y$10$BwH3m7BaomAVSjCsmf8VMeA1OFPELPgY85rVuDg2KKLBINxPARZye'),
(6, 'John', 'johndoe@mail.com', '$2y$10$pWteKWaRM43pYADUC9lXneCusUWQ6BANeVWKJmU.1kSpskolbpjDS');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`ConversationID`),
  ADD KEY `User1ID` (`User1ID`),
  ADD KEY `User2ID` (`User2ID`);

--
-- Indeksy dla tabeli `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`MessageID`),
  ADD KEY `ConversationID` (`ConversationID`),
  ADD KEY `SenderID` (`SenderID`),
  ADD KEY `ReceiverID` (`ReceiverID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `conversations`
--
ALTER TABLE `conversations`
  MODIFY `ConversationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `messages`
--
ALTER TABLE `messages`
  MODIFY `MessageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `conversations_ibfk_1` FOREIGN KEY (`User1ID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `conversations_ibfk_2` FOREIGN KEY (`User2ID`) REFERENCES `users` (`UserID`);

--
-- Ograniczenia dla tabeli `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`ConversationID`) REFERENCES `conversations` (`ConversationID`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`SenderID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `messages_ibfk_3` FOREIGN KEY (`ReceiverID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
