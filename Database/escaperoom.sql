-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 feb 2023 om 08:49
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
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `admin`, `name`, `email`, `birthday`, `address`, `street`, `zipcode`, `profile`, `password`) VALUES
(1, 0, 'Nicholas Burks', 'soxug@mailinator.com', '2015-03-18', 'In fugit rem nulla ', 'Cillum nihil et est ', '24430', 'nicue tom.png', 'test123'),
(2, 0, 'test1', 'test1@gmail.com', '2000-01-01', 'Testen', 'teststraat 79', '6969PP', 'honey guy ad.png', 'testen'),
(3, 0, 'Xena Russo', 'sisutukik@mailinator.com', '1966-07-06', 'Voluptatibus deserun', 'Eius libero sint odi', '33138', '', 'test123'),
(4, 0, 'Raphael Watkins', 'sebuwumo@mailinator.com', '1933-10-13', 'Animi nisi dolores ', 'Rerum in sapiente vo', '74861', 'theorie toppers.png', 'test123'),
(5, 0, 'Alice Kerr', 'tufaturuc@mailinator.com', '1945-02-09', 'Et sint ratione est', 'Et nobis minim sunt ', '37049', '', 'test123'),
(6, 0, 'Haley Nelson', 'huvaz@mailinator.com', '1948-07-23', 'Magni illo dolores o', 'Voluptas dolorum num', '68431', 'imposter json.png', 'test123'),
(7, 0, 'Felicia Fowler', 'jovycyren@mailinator.com', '1989-09-30', 'Nisi sed mollit qui ', 'Quibusdam non molest', '48712', '', 'test123'),
(8, 0, 'Shaeleigh Moreno', 'cely@mailinator.com', '1978-04-23', 'Ea optio molestiae ', 'Ea aut enim irure su', '39664', '2022-02-24.png', 'test123'),
(9, 0, 'Donna Floyd', 'dowykykajy@mailinator.com', '1987-12-31', 'Incidunt quia unde ', 'Eu voluptas voluptat', '71224', '', 'test123'),
(10, 0, 'Ramona Herrera', 'syxe@mailinator.com', '1991-10-29', 'Eius voluptatem vol', 'Nihil rerum consequa', '47421', '', 'test123'),
(11, 0, 'Celeste Sharpe', 'luwyrugyx@mailinator.com', '1973-12-17', 'Autem doloribus cupi', 'Recusandae Cupidita', '58310', '', 'test123'),
(12, 0, 'Lacey Livingston', 'qyrecew@mailinator.com', '1925-03-08', 'Magni enim sed omnis', 'Optio voluptate max', '28599', '', 'test123'),
(13, 0, 'Ahmed Petty', 'zyrovex@mailinator.com', '1970-05-08', 'Saepe excepteur qui ', 'Rerum ut itaque amet', '27513', '', 'test123'),
(14, 0, 'Chaney Gilmore', 'dacegoruga@mailinator.com', '1983-06-15', 'Dolor elit blanditi', 'Consectetur reprehen', '33264', '', 'test123'),
(15, 0, 'Theodore Faulkner', 'sogesytu@mailinator.com', '1967-05-14', 'Debitis officia veli', 'Facere fugiat corru', '52101', '', 'test123'),
(16, 0, 'Larissa Russell', 'jarodeguc@mailinator.com', '1986-08-19', 'Lorem ullamco cumque', 'Et libero aut magni ', '27204', '', 'test123'),
(17, 0, 'Jakeem Walker', 'zonotareca@mailinator.com', '1952-12-08', 'Amet qui aliquid la', 'A nostrud architecto', '40430', '', 'test123'),
(18, 0, 'Quinn Ward', 'lohyvugyqi@mailinator.com', '1966-08-06', 'Fugit iste iste ven', 'Voluptatum reiciendi', '84928', '', 'test123'),
(19, 0, 'test2', 'test2@gmail.com', '2010-10-10', 'Amsterdam', 'Amsterdamseweg 80', '2493Db', '', 'test2'),
(20, 0, 'Kiona Marquez', 'farudagysy@mailinator.com', '1959-06-18', 'Quidem quo voluptate', 'Quasi reprehenderit', '34497', '', 'test123'),
(21, 1, 'admin', 'admin@gmail.com', '0000-00-00', '', '', '', '', 'admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
