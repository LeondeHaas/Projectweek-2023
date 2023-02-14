-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 feb 2023 om 14:44
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escaperoom`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(50) NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `aanmelden` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `admin`, `aanmelden`, `name`, `email`, `birthday`, `address`, `street`, `zipcode`, `profile`, `password`) VALUES
(1, 0, 0, 'damper', 'damper@gmail.com', '2011-11-11', 'damper', 'damper', 'damper', 'nicue tom.png', 'damper'),
(4, 0, 0, 'Raphael Watkins', 'sebuwumo@mailinator.com', '1933-10-13', 'Animi nisi dolores ', 'Rerum in sapiente vo', '74861', 'theorie toppers.png', 'test123'),
(5, 0, 0, 'Alice Kerr', 'tufaturuc@mailinator.com', '1945-02-09', 'Et sint ratione est', 'Et nobis minim sunt ', '37049', '', 'test123'),
(6, 0, 0, 'Haley Nelson', 'huvaz@mailinator.com', '1948-07-23', 'Magni illo dolores o', 'Voluptas dolorum num', '68431', 'imposter json.png', 'test123'),
(7, 0, 0, 'Felicia Fowler', 'jovycyren@mailinator.com', '1989-09-30', 'Nisi sed mollit qui ', 'Quibusdam non molest', '48712', '', 'test123'),
(8, 0, 0, 'Shaeleigh Moreno', 'cely@mailinator.com', '1978-04-23', 'Ea optio molestiae ', 'Ea aut enim irure su', '39664', '2022-02-24.png', 'test123'),
(9, 0, 0, 'Donna Floyd', 'dowykykajy@mailinator.com', '1987-12-31', 'Incidunt quia unde ', 'Eu voluptas voluptat', '71224', '', 'test123'),
(10, 0, 0, 'Ramona Herrera', 'syxe@mailinator.com', '1991-10-29', 'Eius voluptatem vol', 'Nihil rerum consequa', '47421', '', 'test123'),
(11, 0, 0, 'Celeste Sharpe', 'luwyrugyx@mailinator.com', '1973-12-17', 'Autem doloribus cupi', 'Recusandae Cupidita', '58310', '', 'test123'),
(12, 0, 0, 'Lacey Livingston', 'qyrecew@mailinator.com', '1925-03-08', 'Magni enim sed omnis', 'Optio voluptate max', '28599', '', 'test123'),
(13, 0, 0, 'Ahmed Petty', 'zyrovex@mailinator.com', '1970-05-08', 'Saepe excepteur qui ', 'Rerum ut itaque amet', '27513', '', 'test123'),
(14, 0, 0, 'Chaney Gilmore', 'dacegoruga@mailinator.com', '1983-06-15', 'Dolor elit blanditi', 'Consectetur reprehen', '33264', '', 'test123'),
(15, 0, 0, 'Theodore Faulkner', 'sogesytu@mailinator.com', '1967-05-14', 'Debitis officia veli', 'Facere fugiat corru', '52101', '', 'test123'),
(16, 0, 0, 'Larissa Russell', 'jarodeguc@mailinator.com', '1986-08-19', 'Lorem ullamco cumque', 'Et libero aut magni ', '27204', '', 'test123'),
(17, 0, 0, 'Jakeem Walker', 'zonotareca@mailinator.com', '1952-12-08', 'Amet qui aliquid la', 'A nostrud architecto', '40430', '', 'test123'),
(18, 0, 0, 'Quinn Ward', 'lohyvugyqi@mailinator.com', '1966-08-06', 'Fugit iste iste ven', 'Voluptatum reiciendi', '84928', '', 'test123'),
(19, 0, 0, 'test2', 'test2@gmail.com', '2010-10-10', 'Amsterdam', 'Amsterdamseweg 80', '2493Db', '', 'test2'),
(20, 0, 0, 'Kiona Marquez', 'farudagysy@mailinator.com', '1959-06-18', 'Quidem quo voluptate', 'Quasi reprehenderit', '34497', '', 'test123'),
(21, 1, 1, 'admin', 'admin@gmail.com', '0000-00-00', '', '', '', '', 'admin'),
(22, 0, 1, 'test3', 'test3@gmail.com', '2000-10-10', 'test3', 'test3', '2343AB', '2021-10-01 (3).png', 'test3'),
(23, 0, 0, 'test4', 'test4@gmail.com', '1920-10-10', 'test4', 'test4', 'test4', '', 'test4'),
(24, 0, 0, 'test6', 'test6@gmail.com', '2000-08-23', 'test6', 'test6', 'test6', '2021-12-14.png', 'test6'),
(25, 0, 1, 'test7', 'test7@gmail.com', '2009-03-09', 'test7', 'test7', 'test7', '2022-08-26.png', 'test7'),
(26, 0, 1, 'test8test8', 'test8test8@gmail.com', '2008-08-18', 'test8test8', 'test8test8', 'test8test8', '2021-10-01 (3).png', 'test8test8'),
(27, 0, 0, 'lol', 'lol@gmail.com', '2003-04-05', 'lol', 'lol', 'lol', '2021-04-25.png', 'lol'),
(28, 0, 1, 'test9', 'test9@gmail.com', '2000-01-10', 'test9', 'test9', 'test9', 'jack.jpg', 'test9'),
(29, 0, 1, 'test10', 'test10@gmail.com', '2000-10-10', 'test10', 'test10', 'test10', 'ooh.png', 'test10'),
(31, 0, 1, 'test12', 'test12@gmail.com', '2001-08-23', 'test12', 'test12', 'test12', '2021-10-01 (3).png', 'test12'),
(33, 0, 1, 'wasdy1', 'wasdy1@gmail.com', '2010-10-10', 'wasdy1', 'wasdy1', 'wasdy1', NULL, 'wasdy');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
