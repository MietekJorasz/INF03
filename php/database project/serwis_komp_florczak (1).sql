-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Lut 2023, 18:06
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `serwis_komp_florczak`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cennik`
--

CREATE TABLE `cennik` (
  `id_usługi` int(11) NOT NULL,
  `typ_usługi` varchar(255) DEFAULT NULL,
  `usługa` varchar(255) DEFAULT NULL,
  `cena` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `cennik`
--

INSERT INTO `cennik` (`id_usługi`, `typ_usługi`, `usługa`, `cena`) VALUES
(1, 'Diagnoza', 'Laptop', 0),
(2, 'Diagnoza', 'Komputer', 0),
(3, 'Diagnoza', 'Karta graficzna', 0),
(4, 'Diagnoza', 'Procesor', 0),
(5, 'Diagnoza', 'Klawiatura', 0),
(6, 'Diagnoza', 'Drukarka', 0),
(7, 'Naprawa software', 'Instalacja Windows', 100),
(8, 'Naprawa software', 'Instalacja sterowników Windows', 100),
(9, 'Naprawa software', 'Instalacja oprogramowania klienta', 100),
(10, 'Naprawa software', 'Wgranie BIOS płyty głównej', 100),
(11, 'Naprawa software', 'Wgranie BIOS karty graficznej', 150),
(12, 'Naprawa hardware', 'Lutowanie elementów ', 150),
(13, 'Naprawa hardware', 'Wymiana gniazda (np. USB, audio, ethernet) ', 150),
(14, 'Naprawa hardware', 'Wymiana wentylatorów (np. karty graficznej)', 150),
(15, 'Naprawa hardware', 'Prostowanie pinów (np. w płycie głownej, procesorze) ', 100),
(16, 'Naprawa hardware', 'Dorobienie pinów (np. w płycie głownej, procesorze) ', 100),
(17, 'Naprawa hardware', 'Wymiana szyny / slotu (np. RAM, PCI-E) ', 200),
(18, 'Naprawa hardware', 'Wymiana zawiasów laptopa', 200),
(19, 'Naprawa hardware', 'Klejenie zawiasów laptopa', 300),
(20, 'Serwis', 'Wymiana pasty (np. na procesorze)', 100),
(21, 'Serwis', 'Wymiana pasty i termopadów (np. na karcie graficznej, laptopie)', 200),
(22, 'Serwis', 'Czyszczenie bez rozbiórki (np. karty graficznej, komputera)', 100),
(23, 'Serwis', 'Czyszczenie z rozbiórką (np. komputera, laptopa, drukarki)', 150),
(24, 'Serwis', 'Montaż części bez rozbiórki (np. dysku, pamięci RAM)', 50),
(25, 'Serwis', 'Montaż części z rozbiórką (np. dysku, zasilacza)', 100),
(26, 'Diagnoza', 'Diagnoza konsol', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `imie` varchar(255) NOT NULL,
  `nazwisko` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `NIP` varchar(255) DEFAULT NULL,
  `nr_karty_kredytowej` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `customers`
--

INSERT INTO `customers` (`customer_id`, `imie`, `nazwisko`, `email`, `NIP`, `nr_karty_kredytowej`) VALUES
(1, 'Bogey', 'Colloby', 'bcolloby0@hc360.com', '143-44-34-334', NULL),
(2, 'Rozalin', 'Boydle', 'rboydle1@earthlink.net', '433-73-18-784', '$2y$10$op.L4UK5m/MR9gziifCuCOYn7B8C4xFBIKHiZUw.z/KOle3XyBMSq'),
(3, 'Gabriella', 'Dixcee', 'gdixcee2@liveinternet.ru', '432-73-18-784', '$2y$10$ACxrZQHNwAIUKR1Y6BK7zuBD3Y1uUE..ZLohH75PcQA6.93zrFLYO'),
(4, 'Yasmeen', 'Crutchley', 'ycrutchley3@jimdo.com', '431-73-18-784', '$2y$10$bE6Z7IToIW8T08yvT0lo0Oo2iEhDqdtf.C30y6C7zdfwCrvS8J7za'),
(5, 'Gilemette', 'Holliar', 'gholliar4@dagondesign.com', '233-73-18-784', '$2y$10$tlZlRHKL/5xoMB9xygS2beITq0px3KLwkMfr5zFDCt2o/OBuLlnLi'),
(6, 'Kristien', 'Matschoss', 'kmatschoss5@independent.co.uk', '133-73-18-784', NULL),
(7, 'Maisey', 'Baddiley', 'mbaddiley6@oaic.gov.au', '013-93-10-572', '$2y$10$k8HBXGmyRKnEoVSX1gjtxOPnNfckXfJn7nAJ0kAd33hoFj.fqprcK'),
(8, 'Jolene', 'Crohan', 'jcrohan7@icio.us', NULL, '$2y$10$GDMJctkYgyaOJON3qpnVze7ePPcGMFxZWdbEtJfgzenltAD8LHwhy'),
(9, 'Benji', 'Shilliday', 'bshilliday8@marketwatch.com', '04-155-9894', '$2y$10$tdiU8Br0n3hwnoPnVeSVpekSxT..FNDXoFhULsfvYE15u2AR7I50K'),
(10, 'Cob', 'Stobie', 'cstobie9@wiley.com', '62-588-8552', '$2y$10$V7IvGz1XuQ284YSHryGKQ.5eEagv4.CwJ82M62bHXIPcA9Ymo5QEC'),
(11, 'Rollo', 'Harken', 'rharkena@buzzfeed.com', '11-489-0662', '$2y$10$64pivMM.LIkQ7csSmCDx8uhBqn7sLyMX1rqyFGwVpeC7u3Dj1sIIG'),
(12, 'Ethelind', 'Knocker', 'eknockerb@topsy.com', '92-516-9121', '$2y$10$U2luy9SpmqGa1O13VVwFTuJIAtL89vf4WBGOiP6SDtrAVNprnd.Gq'),
(13, 'Sylvester', 'Haggith', 'shaggithc@baidu.com', NULL, '$2y$10$ghDnov49fv5Qfw/fsFizoe1j6k5UTqJZONSvVT1bcTKyLmlkTgAUe'),
(14, 'Lindy', 'MacCaffery', 'lmaccafferyd@wiley.com', '33-673-8773', NULL),
(15, 'Tamiko', 'Longhorne', 'tlonghornee@smh.com.au', '88-640-4707', '$2y$10$H7eRuHs0ALDm1MfxDNb0rOGiQDfkLAckk7/msiTldcM./NdsxB9rK'),
(16, 'Faun', 'Nelles', 'fnellesf@dell.com', NULL, '$2y$10$DAwuCPTZBysdDFvKS94JpOSuO1wGTResUKmvwZ5afttjeQnwsTJIK'),
(17, 'Lawton', 'Ashworth', 'lashworthg@senate.gov', '18-089-3750', '$2y$10$6v034K.TNIbhUZcJii/iW.82hP/QRPYDT0qB1HUfcPHl0gY.iLzv2'),
(18, 'Roland', 'Clowsley', 'rclowsleyh@sciencedirect.com', '39-094-6853', '$2y$10$REVlnVOxM4u/iWMPuo7/SukR5AuDp61mXDX69wK1f3yNizjSy2YQi'),
(19, 'Paige', 'Foucar', 'pfoucari@mtv.com', '87-628-5494', '$2y$10$hH.qO8ycYImjb.GrH/Nn..lBNjO9TxrfMALqNYFj0VuSetlIfcWda'),
(20, 'Jorie', 'Dalgetty', 'jdalgettyj@google.it', '05-489-7872', '$2y$10$lcvPz10JZpIgTFrggDtLiOs5p4Z4ssTK75/qO3FDZcEbuir6EoHou'),
(21, 'Glynn', 'Cowope', 'gcowopek@csmonitor.com', '24-283-0992', '$2y$10$vUlACQqSogpMkR6cpDi4wOfdCk2uNrcxJjpI.ED06ThhyaFqx81MC'),
(22, 'Pacorro', 'Burditt', 'pburdittl@typepad.com', NULL, '$2y$10$wLGggmFauQt6CJcQHs/TJ.UuVeXfOG.k5Tw9VHdoQGXq6eoQDpKQu'),
(23, 'Leola', 'Noteyoung', 'lnoteyoungm@opensource.org', '89-848-6433', '$2y$10$qhbQzhSxAuAoVPbELcP78.x3I5DPmf3bMGzhd05h0ZQf2i3nhurnC'),
(24, 'Lethia', 'Tapsfield', 'ltapsfieldn@cisco.com', '65-897-3751', '$2y$10$PWNOqotPOdhZ7nbrZrhVR.rLaqu7JTmpyGJuI.15gbY5LmL/g/hDG'),
(25, 'Arty', 'Clitheroe', 'aclitheroeo@redcross.org', '25-723-9385', '$2y$10$zY0TV9MX2V7DdenzusEOuOMfz.nmkS2l2e.N4NtmZpn6xz7X37ymq'),
(26, 'Lillian', 'Calven', 'lcalvenp@about.com', '38-402-2604', NULL),
(27, 'Alia', 'Charlton', 'acharltonq@marriott.com', NULL, '$2y$10$.RZBgce8NtSQhPyXQw7dX.voI8eH70I.07Rh7gcgfZBNWk2jLSTt6'),
(28, 'Josepha', 'Monini', 'jmoninir@utexas.edu', '08-334-4805', '$2y$10$3VZNeIKo5WwNzFx2hMesM.JNXNnlFurCTf7hp3/FP.QWB69JWaXCW'),
(29, 'Vernon', 'Savatier', 'vsavatiers@google.com', '20-380-1161', '$2y$10$G/FGIhdMt9/5i3iN2Iq0o.i.IIwBNjxNCHXGBKj0/8FRJ4dvEhEyy'),
(30, 'Kliment', 'Bleazard', 'kbleazardt@gravatar.com', NULL, NULL),
(31, 'Harley', 'Marre', 'hmarreu@statcounter.com', '00-028-3156', '$2y$10$9q/sasZHbUJex8kQ4fMMiek.Z0AzVgVe9CMDsPKvuoS6MC6AaePk6'),
(32, 'Clemmie', 'Heardman', 'cheardmanv@yolasite.com', '69-119-4674', '$2y$10$ya5uM0vKfK9KMeB7FHJA7uVBYxiEHmTi3pYn9tHj00Fi3Hq1XMUbG'),
(33, 'Maris', 'Plum', 'mplumw@cyberchimps.com', '40-221-7120', '$2y$10$Ik4.seq.tRB/rpbPjIwcyexa0peqpZT5E/Ln6TXRekbMggoQuuvyC'),
(34, 'Marybeth', 'Spinnace', 'mspinnacex@uol.com.br', '75-339-6934', '$2y$10$c7P9rMuojay5wZXQQN8ePegf9rYxc5RlELg/0vu5SNFfXXmo4kNym'),
(35, 'Minor', 'McGarrell', 'mmcgarrelly@trellian.com', NULL, '$2y$10$wgb0CJI5ziLzXTakDABt4uzoqC.iqVdGBm1ydXX8C13dnR/ApqWoS'),
(36, 'Nanine', 'Blodgetts', 'nblodgettsz@microsoft.com', '80-926-4740', NULL),
(37, 'Jillie', 'Paulon', 'jpaulon10@alibaba.com', '01-468-5110', '$2y$10$UvU9Tc9To9jxzsDcr3sjWuyBBoiOjwvbBTjroc9ZdL9WIJRnbfghi'),
(38, 'Glen', 'Digginson', 'gdigginson11@tripod.com', '99-520-5519', '$2y$10$NI8mX2ZIws5k8yNQPM8x4exR46ODJEjjytUrHFNWJx7RCfvOFesn6'),
(39, 'Reginauld', 'Addeycott', 'raddeycott12@storify.com', '08-674-9423', '$2y$10$w3fHZD8Eu7A2JBO7GC8b9eOoacSEHsoosqq1AQBeElQXOfuikMVQq'),
(40, 'Diahann', 'Tilby', 'dtilby13@topsy.com', NULL, '$2y$10$TxrkD/fksu8D96GbZc4MQuOhOJ/vWzlG1MJKmme3h2rppxfChB.xy'),
(41, 'Amalee', 'McGahern', 'amcgahern14@boston.com', '01-088-7353', NULL),
(42, 'Merrilee', 'Mirams', 'mmirams15@miitbeian.gov.cn', '02-051-8083', '$2y$10$axjtmJLIQA6bgcnloFheUe9S17OsdqNen0VeTDVbuExgcEd9S4ieC'),
(43, 'Filip', 'Clardge', 'fclardge16@who.int', NULL, '$2y$10$nRhRHArMQb4488/xG7EFguNTCeUaomk4QKtJ5llCQuqqNaLQVkL5W'),
(44, 'Aigneis', 'Staker', 'astaker17@amazonaws.com', '22-320-4155', NULL),
(45, 'Carline', 'Shawyers', 'cshawyers18@networkadvertising.org', '99-154-0190', '$2y$10$0QpwNauv0ixqZrblI4m0mOehSmLJE4auNC9fnQX4JBlsqm761pIp.'),
(46, 'Jarib', 'Netti', 'jnetti19@taobao.com', '02-537-3057', '$2y$10$tU2w2aMsIhsc1GYeNPJMJOWjOd2P9iTYVdyz1PPbM.IXk0Er1okmG'),
(47, 'Banky', 'Bazek', 'bbazek1a@friendfeed.com', NULL, '$2y$10$UTs93YiJJoRo12aodgjLz.xHQxauTZqOM9ZNz1Y.hp.RDHsjrPyfO'),
(48, 'Leonanie', 'Pancost', 'lpancost1b@slate.com', '46-006-9082', '$2y$10$1nADx6yNmoYUCNHh32Lo2uByBQnlUVVmsMWx.akmomyDtgMwQMbFq'),
(49, 'Jocelin', 'Ginger', 'jginger1c@fema.gov', '59-707-0122', '$2y$10$du9ZFA9Hs6Q1Y22yEvf2wOnUiUMrAhz0Z8cbxX4KbZsZjsfS2kmMC'),
(50, 'Nariko', 'Hedan', 'nhedan1d@unesco.org', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `imie` varchar(25) DEFAULT NULL,
  `nazwisko` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `stanowisko` varchar(50) DEFAULT NULL,
  `pensja` int(11) DEFAULT NULL,
  `id_oddzialu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `employee`
--

INSERT INTO `employee` (`employee_id`, `imie`, `nazwisko`, `email`, `stanowisko`, `pensja`, `id_oddzialu`) VALUES
(1, 'Toddy', 'Millhill', 'tmillhill0@taobao.com', 'kasjer', 2599, 1),
(2, 'Elspeth', 'Malcolmson', 'emalcolmson1@studiopress.com', 'kasjer', 2599, 2),
(3, 'Adrian', 'Florek', 'apiggot2@monster.ru', 'prezes', 40000, NULL),
(4, 'Harriet', 'Antonopoulos', 'hantonopoulos3@com.com', 'ochroniarz', 3000, 1),
(5, 'Petronilla', 'Legges', 'plegges4@wiley.com', 'starzysta', 2000, 1),
(6, 'Hamnet', 'Hayes', 'hhayes5@youku.com', 'ochroniarz', 3000, 2),
(7, 'Floyd', 'Zorzenoni', 'fzorzenoni6@cnn.com', 'ochroniarz', 3000, 3),
(8, 'Nester', 'Hailes', 'nhailes7@google.cn', 'starzysta', 2000, 2),
(9, 'Lind', 'Pilger', 'lpilger8@indiegogo.com', 'kasjer', 3000, 3),
(10, 'Magdalen', 'Screach', 'mscreach9@tripadvisor.com', 'ochroniarz', 3000, 10),
(11, 'Edwin', 'Hamly', 'ehamlya@edublogs.org', 'kasjer', 3000, 4),
(12, 'Annabal', 'Brownsea', 'abrownseab@about.com', 'starzysta', 2599, 3),
(13, 'Aleksandra', 'Krzyzyk', 'ola@about.com', 'starzysta', 2599, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oddzialy`
--

CREATE TABLE `oddzialy` (
  `id_oddzialu` int(11) NOT NULL,
  `miasto` varchar(50) DEFAULT NULL,
  `ulica` varchar(50) DEFAULT NULL,
  `kod_pocztowy` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `oddzialy`
--

INSERT INTO `oddzialy` (`id_oddzialu`, `miasto`, `ulica`, `kod_pocztowy`) VALUES
(1, 'Rzeszów', 'Krakowska 40', '31-555'),
(2, 'Krosno', 'Sienkiewicza 10', '35-306'),
(3, 'Sanok', 'Bieszczadzka 19', '33-284'),
(4, 'Tarnów', 'Maczka 4', '32-754');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id_usługi` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `data_transakcji` date NOT NULL,
  `stan_usługi` varchar(255) NOT NULL,
  `id_zamowienia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id_usługi`, `customer_id`, `data_transakcji`, `stan_usługi`, `id_zamowienia`) VALUES
(1, 1, '2022-10-09', 'gotowe do odbioru', 1),
(2, 2, '2022-12-03', 'w serwisie', 2),
(3, 3, '0000-00-00', 'w serwisie', 3),
(4, 4, '2022-04-09', 'w serwisie', 4),
(5, 5, '2022-09-16', 'gotowe do odbioru', 5),
(6, 10, '2023-01-09', 'gotowe do odbioru', 6),
(7, 11, '2023-02-03', 'gotowe do odbioru', 7),
(8, 12, '2023-02-02', 'gotowe do odbioru', 8),
(9, 13, '2023-01-09', 'gotowe do odbioru', 9),
(10, 14, '2023-01-16', 'gotowe do odbioru', 10);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cennik`
--
ALTER TABLE `cennik`
  ADD PRIMARY KEY (`id_usługi`);

--
-- Indeksy dla tabeli `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeksy dla tabeli `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `id_oddzialu` (`id_oddzialu`);

--
-- Indeksy dla tabeli `oddzialy`
--
ALTER TABLE `oddzialy`
  ADD PRIMARY KEY (`id_oddzialu`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id_zamowienia`);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `oddzialy`
--
ALTER TABLE `oddzialy`
  ADD CONSTRAINT `oddzialy_ibfk_1` FOREIGN KEY (`id_oddzialu`) REFERENCES `employee` (`id_oddzialu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
