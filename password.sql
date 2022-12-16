-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Ned 11. pro 2022, 14:57
-- Verze serveru: 5.7.11
-- Verze PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `password`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `page`
--

CREATE TABLE `page` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `text` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `page`
--

INSERT INTO `page` (`id`, `name`, `text`) VALUES
(1, 'MENU', 'všichni tohle můžou vidět'),
(2, 'ADMIN', 'pouze admini můžou vidět'),
(3, 'CLASS', 'pouze učitelé a admini můžou vidět');

-- --------------------------------------------------------

--
-- Struktura tabulky `permission`
--

CREATE TABLE `permission` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `permission`
--

INSERT INTO `permission` (`id`, `name`) VALUES
(2, 'gold'),
(3, 'platinum'),
(1, 'silver');

-- --------------------------------------------------------

--
-- Struktura tabulky `permission_has_page`
--

CREATE TABLE `permission_has_page` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `permission_has_page`
--

INSERT INTO `permission_has_page` (`permission_id`, `page_id`) VALUES
(1, 1),
(2, 1),
(2, 3),
(3, 1),
(3, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Struktura tabulky `permission_has_user`
--

CREATE TABLE `permission_has_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `permission_has_user`
--

INSERT INTO `permission_has_user` (`permission_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Struktura tabulky `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'Karel', 'Heslo123'),
(2, 'Kozak', 'Heslo456'),
(3, 'Muller', 'Heslo789'),
(4, 'Visitor', NULL);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Klíče pro tabulku `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Klíče pro tabulku `permission_has_page`
--
ALTER TABLE `permission_has_page`
  ADD KEY `fk_permission_has_page_permission1_idx` (`permission_id`),
  ADD KEY `fk_permission_has_page_page1_idx` (`page_id`);

--
-- Klíče pro tabulku `permission_has_user`
--
ALTER TABLE `permission_has_user`
  ADD KEY `fk_permission_has_user_permission1_idx` (`permission_id`),
  ADD KEY `fk_permission_has_user_user1_idx` (`user_id`);

--
-- Klíče pro tabulku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `iduser_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `page`
--
ALTER TABLE `page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pro tabulku `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pro tabulku `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `permission_has_page`
--
ALTER TABLE `permission_has_page`
  ADD CONSTRAINT `fk_permission_has_page_page1` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_permission_has_page_permission1` FOREIGN KEY (`permission_id`) REFERENCES `permission` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omezení pro tabulku `permission_has_user`
--
ALTER TABLE `permission_has_user`
  ADD CONSTRAINT `fk_permission_has_user_permission1` FOREIGN KEY (`permission_id`) REFERENCES `permission` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_permission_has_user_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
