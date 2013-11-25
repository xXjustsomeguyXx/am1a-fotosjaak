-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 25 nov 2013 om 14:19
-- Serverversie: 5.6.12-log
-- PHP-versie: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `am1a`
--
CREATE DATABASE IF NOT EXISTS `am1a-fotosjaak` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1a-fotosjaak`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_english` text NOT NULL,
  `question_dutch` text NOT NULL,
  `answer_english` text NOT NULL,
  `answer_dutch` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Gegevens worden uitgevoerd voor tabel `faq`
--

INSERT INTO `faq` (`id`, `question_english`, `question_dutch`, `answer_english`, `answer_dutch`) VALUES
(1, 'Is this game hard to play?', 'Is dit een moeilijk spel om te spelen?', 'Yes, this game is very hard to crack', 'Ja, dit spel is mega moeilijk'),
(2, 'When is this game completed', 'Wanneer is dit spel uitgespeeld?', 'the game is a never ending experience.\n', 'De game komt nooit ten einde. '),
(3, 'Are the controls easy to handle?', 'Zijn de controles makkelijk te besturen?', 'Yes The Keys are \r\nTo go Up (W)\r\nTo go Down (S)\r\nTo Shoot Left mouse click.', 'Ja de toetsen zijn\r\nomhoog bewegen (W)\r\nOmlaag bewegen (S)\r\nJe schiet met de linker muis knop.'),
(4, 'Is the game Finished?', 'Is de game klaar?', 'Yes, The game is totaly finished', 'Ja, de game is helemaal af'),
(5, 'Does have the game some good gameplay?', 'Heeft de game goede gameplay?', 'Yes, this game have some nice gameplay', 'Ja, deze game heeft zeker goede gameplay'),
(6, 'Will there be some updates for the game?', 'Komen er nog updates uit voor de game?', 'Yes, There will be like 2 updates', 'ja er komen nog 2 updates '),
(7, 'Is the game 3D? or 2D', 'is de game 3D? of 2D', 'The game is 2D', 'De game is 2D'),
(8, 'What''s the goal of the game?', 'Wat is het doel van het spel?', 'The Goal of this game is to kill all the zombies.\r\nand get so much as possible points', 'Het doel van deze game is om alle zombies te doden.\r\nen zoveel mogelijk punten krijgen'),
(9, 'I can immediately play the game when, i download it.', 'kan ik de game meteen spelen, wanneer ik de game download', 'No, You must first Instal the game.', 'nee, Je moet de game eerst installeren'),
(10, 'Is there a manual by the game? can i download it.', 'is er een handleiding bij de game? kan ik die downloaden.\r\n', 'yes, there is a manual and you can download it on the download page', 'ja, er is een handleiding je kan die downloaden op de download page');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `infix` varchar(20) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `street` varchar(100) NOT NULL,
  `housenumber` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `civilstats` varchar(100) NOT NULL,
  `favorite_game_type` enum('Actie','Sports','Avontuur','Racing') NOT NULL,
  `favorite_game` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userrole` enum('admin','root','customer') NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `infix`, `surname`, `street`, `housenumber`, `address`, `zipcode`, `birthday`, `sex`, `civilstats`, `favorite_game_type`, `favorite_game`, `email`, `password`, `userrole`) VALUES
(8, 'roy', '', 'kuijper', 'van exelstraat ', 23, 'maarssen', '3602PE', '1997-07-30', 'Male', 'single', 'Racing', 'CODBO2', 'roy97@casema.nl', 'Superhaha23', 'customer'),
(9, 'roy', '', 'kuijper', 'Van exelstraat ', 23, 'Maarssen', '3602PE', '1997-07-30', 'Male', 'yolo', 'Actie', 'COD-BO2', 'roy97@casema.nl', 'lesser23', 'customer'),
(10, 'root', 'de', 'root', 'roortstraat', 12, 'roottown', '1962PE', '2013-10-04', 'Male', 'single', 'Actie', 'BO2', 'root@homtail.com', 'root23', 'root'),
(11, 'admin', 'de', 'admin', 'adminstraat', 2, 'admintown', '1842EP', '2013-10-18', 'Male', 'single', 'Actie', 'COD-BO2', 'admin@hotmail.com', 'admin23', 'admin'),
(15, 'floris', '', 'verdoorn', 'Ikweetnietstraat', 4, 'Ikweetniet', '2345PE', '2013-11-08', 'Female', 'Single', 'Actie', 'COD-BO2', 'florisverdoorn@akio.nl', 'akio23', 'customer'),
(16, 'Roy', '', 'kuijper', 'Van exelstraat ', 5, 'maarssen', '3602PE', '2013-11-30', 'Male', 'Single', 'Avontuur', 'BO2', 'roy@hotmail.com', 'lesser23', 'customer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
