-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Cze 2021, 21:59
-- Wersja serwera: 10.3.27-MariaDB-31.cba+deb10u1
-- Wersja PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `poeforum`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE `komentarze` (
  `id` int(11) NOT NULL,
  `tresc` text COLLATE utf8_polish_ci NOT NULL,
  `autor` text COLLATE utf8_polish_ci NOT NULL,
  `data` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `komentarze`
--

INSERT INTO `komentarze` (`id`, `tresc`, `autor`, `data`) VALUES
(1, 'testowy komentarz', 'iraxus', '03-06-2021 | 10:38:42'),
(2, 'testowy komentarz 2', 'iraxus', '03-06-2021 | 10:38:42'),
(3, '123', '123', '03-06-2021 | 10:38:42'),
(4, '123', '123', '03-06-2021 | 10:39:43'),
(5, '123333', '123', '04-06-2021 | 10:46:17'),
(6, '3123123', '312', '05-06-2021 | 01:11:31'),
(7, '431211', '12344', '05-06-2021 | 02:07:17'),
(8, 'testowy komentarz', 'iraxus', '05-06-2021 | 02:09:17'),
(9, 'ploijjs', 'MoreMinesPLS', '05-06-2021 | 06:12:48'),
(10, 'test', 'iraxus', '05-06-2021 | 06:14:56'),
(11, 'asdasda', 'dasdas', '05-06-2021 | 06:25:30'),
(12, 'asdasddd', 'asd', '05-06-2021 | 06:26:13'),
(13, 'sadadasds', 'dasdas', '05-06-2021 | 06:28:12'),
(14, 'ddddd', 'dddd', '05-06-2021 | 06:29:07'),
(15, 'xxxxxxxxxxx', 'xxxxxxxx', '05-06-2021 | 06:32:48'),
(16, 'Witam\r\n\r\nTworzyłem bardziej dla zabawy ale może się rozrośnie :)\r\nhttps://www.pathofexile.com/guild/profile/535350\r\n\r\nJak coś piszcie w grze do mnie!\r\n\r\n\r\nZapraszam do naszej grupy na facebooku dużo nowych wiadomości dla starych jak i nowych graczy z poe i innych gierek tego typu :)\r\n\r\nlink do grupy: https://www.facebook.com/groups/FraggeRteam/\r\n\r\n\r\nPozdrawiam :)', 'iraxus', '05-06-2021 | 09:15:06'),
(17, 'asdasdas', 'dasdasd', '06-06-2021 | 08:50:44'),
(18, 'xczzzz', 'czxzx', '06-06-2021 | 08:50:59'),
(19, 'rawrawraw', 'dawrawraw', '06-06-2021 | 08:51:10'),
(20, 'Da ktoś jakiegoś poba do aura stackera budżet 3ex?', 'MaciejTotemiarz', '07-06-2021 | 09:18:34'),
(21, '@MaciejTotemiarz\r\nhttps://pastebin.com/QMXsmSgH', 'iraxus', '07-06-2021 | 09:19:26'),
(22, 'Nie polecam użytkownika iraxus, scamer jebany oscamował mnie kurwa na Hh a dał mi kurwa jebane 1 mirror 20 chaosów zamiast mirror 20 ex jebać kurwa mać szmate pierdoloną', 'More_Mines_Pls', '07-06-2021 | 09:19:53');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(26, 'Pan Tadeusz wszedÅ‚ pierwszy, ', '123'),
(23, 'Kurwa_jebaÄ‡_disa', '1234'),
(24, 'MaciejRutkos', 'jebacrudnika'),
(25, 'Rucham_psa', '123'),
(27, 'Chuju jebany', '123'),
(28, 'Dzialaj pedale', '123'),
(29, 'Witam chuju', '123'),
(30, 'Jebac wpr', '123'),
(31, 'sql inject', '123'),
(32, ';Select * from users;', '123'),
(33, 'truncate database', '123');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
