-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sporteal_agile2021`
--
CREATE DATABASE IF NOT EXISTS `sporteal_agile2021` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `sporteal_agile2021`;

-- --------------------------------------------------------

--
-- Struttura della tabella `Eventi`
--

CREATE TABLE `Eventi` (
  `id` int(11) NOT NULL,
  `id_luogo` int(11) NOT NULL,
  `id_gruppo` int(11) NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_evento` datetime DEFAULT NULL,
  `capienza` int(11) DEFAULT NULL,
  `id_genere` int(11) DEFAULT NULL,
  `prezzo` decimal(10,2) DEFAULT NULL,
  `offerta` tinyint(1) DEFAULT NULL,
  `formale` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `Eventi`
--

INSERT INTO `Eventi` (`id`, `id_luogo`, `id_gruppo`, `nome`, `data_evento`, `capienza`, `id_genere`, `prezzo`, `offerta`, `formale`) VALUES

(2, 2, 2, 'Carl Brave - Coraggio Tour 2021', '2021-06-14 21:00:00', NULL, 11, NULL, NULL, NULL),
(3, 3, 3, 'Pinguini Tattici Nucleari - Ma chi l\'avrebbe mai detto Tour ', '2021-10-21 20:30:00', 5800, 2, NULL, NULL, NULL),
(4, 4, 3, 'Pinguini Tattici Nucleari - Ma chi l\'avrebbe mai detto Tour ', '2021-10-28 20:30:00', 11000, 2, NULL, NULL, NULL),
(5, 5, 3, 'rovere - Live 2022', '2022-03-13 22:00:00', 18000, 2, NULL, NULL, NULL),
(6, 6, 3, 'rovere - Live 2022', '2022-03-28 22:00:00', NULL, 2, NULL, NULL, NULL),
(7, 7, 1, 'Ligabue - Start Tour 2022', '2022-08-10 20:00:00', 84000, 1, NULL, NULL, NULL),
(8, 8, 1, 'Ligabue - Start Tour 2022', '2022-08-28 20:00:00', 36000, 1, NULL, NULL, NULL),
(9, 1, 1, 'a', NULL, 250, 1, 250.00, 0, 0),
(10, 1, 1, 'a', NULL, 250, 1, 250.00, 0, 1),
(11, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(12, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(13, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(14, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(15, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(16, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(17, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(18, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(19, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(20, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(21, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(22, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(23, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(24, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(25, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(26, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(27, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(28, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(29, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(30, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(31, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(32, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(33, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(34, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(35, 1, 1, 'asdrubale', '2021-08-08 20:30:00', 25, 1, 250.00, 0, 0),
(36, 1, 1, 'Ligabue - Start Tour 2022', '2022-07-28 20:00:00', 24000, 1, NULL, NULL, NULL);
-- --------------------------------------------------------

--
-- Struttura della tabella `formano`


CREATE TABLE `formano` (
  `id_utente` int(11) NOT NULL,
  `id_gruppo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `formano`
--

INSERT INTO `formano` (`id_utente`, `id_gruppo`) VALUES
(1, 1),
(1, 3),
(2, 1),
(3, 1),
(4, 1),
(5, 3),
(6, 3),
(7, 3),
(8, 2),
(9, 2),
(10, 2),
(11, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `Generi`


CREATE TABLE `Generi` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `Generi`
--

INSERT INTO `Generi` (`id`, `nome`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(3, 'Classica'),
(4, 'Hip-Hop'),
(5, 'Rap'),
(6, 'Trap'),
(7, 'EDM'),
(8, 'Folk'),
(9, 'Country'),
(10, 'Dance'),
(11, 'Indie'),
(12, 'Metal'),
(13, 'Opera'),
(14, 'Blues'),
(15, 'Jazz'),
(16, 'Dubstep'),
(17, 'Hardcore');

-- --------------------------------------------------------

--
-- Struttura della tabella `Gruppi`


CREATE TABLE `Gruppi` (
  `id` int(11) NOT NULL,
  `id_admin_gruppo` int(11) NOT NULL DEFAULT 1,
  `id_membro_1` int(11) DEFAULT 1,
  `id_membro_2` int(11) DEFAULT 1,
  `id_membro_3` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `Gruppi`
--

INSERT INTO `Gruppi` (`id`, `id_admin_gruppo`, `id_membro_1`, `id_membro_2`, `id_membro_3`) VALUES
(1, 1, 2, 3, 4),
(2, 8, 9, 10, 11),
(3, 5, 6, 7, NULL);

--
-- Trigger `Gruppi`
--
DELIMITER $$
CREATE TRIGGER `formazione_gruppo` AFTER INSERT ON `Gruppi` FOR EACH ROW BEGIN INSERT INTO `formano` (id_utente, id_gruppo) VALUES (NEW.id_admin_gruppo, NEW.id); INSERT INTO `formano` (id_utente, id_gruppo) VALUES (NEW.id_membro_1, NEW.id); INSERT INTO `formano` (id_utente, id_gruppo) VALUES (NEW.id_membro_2, NEW.id); INSERT INTO `formano` (id_utente, id_gruppo) VALUES (NEW.id_membro_3, NEW.id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Luoghi`


CREATE TABLE `Luoghi` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indirizzo` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citta` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capienza_max` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pwd` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `Luoghi`
--

INSERT INTO `Luoghi` (`id`, `nome`, `indirizzo`, `citta`, `capienza_max`, `pwd`) VALUES
(1, 'Stadio Adriatico', 'Via Pepe', 'Pescara', '24.600', NULL),
(2, 'Auditorium Parco della Musica', 'Via Pietro de Coubertin 30', 'Roma', '450', NULL),
(3, 'PalaRossini', 'Strada Prov. Cameranese', 'Ancona', '6.500', NULL),
(4, 'PalaLottomatica', 'Piazzale Pier Luigi Nervi', 'Roma', '11.500', NULL),
(5, 'Unipol Arena', 'Via Gino Cervi', 'Casalecchio di Reno', '20.000', NULL),
(6, 'Pin Up Club', 'Via Francia', 'Mosciano S. Angelo', '1.500', NULL),
(7, 'Stadio Olimpico', 'Viale dei Gladiatori', 'Roma', '85.000', NULL),
(8, 'Stadio Renato Dall\'Ara', 'Via Andrea Costa', 'Bologna', '38.000', NULL),
(9, 'Stadio San Siro', 'Piazzale Angelo Moratti', 'Milano', '81.000', NULL),
(12, 'Test', 'Via Del Nulla', 'Boh', '3000', NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `partecipano`


CREATE TABLE `partecipano` (
  `id_utente` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `partecipano`
--

INSERT INTO `partecipano` (`id_utente`, `id_evento`) VALUES
(3, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `Utenti`


CREATE TABLE `Utenti` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cognome` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_nascita` date DEFAULT NULL,
  `citta` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `Utenti`
--

INSERT INTO `Utenti` (`id`, `nome`, `cognome`, `data_nascita`, `citta`, `username`, `pwd`) VALUES
(1, 'Mario', 'Rossi', '1957-03-11', 'Roma', 'utente1', 'utente1'),
(2, 'Giovanni', 'Bianchi', '1989-05-27', 'Milano', 'utente2', 'utente2'),
(3, 'Ferdinando', 'Verdi', '1988-05-18', 'Ancona', 'utente3', 'utente3'),
(4, 'Giulia', 'Ascari', '1991-06-18', 'Bari', 'utente4', 'utente4'),
(5, 'Luisa', 'Longati', '1968-11-03', 'Napoli', 'utente5', 'utente5'),
(6, 'Matteo', 'Giardino', '1998-10-04', 'Torino', 'utente6', 'utente6'),
(7, 'Giovanni', 'Facchinetti', '1999-12-05', 'Milano', 'utente7', 'utente7'),
(8, 'Dario', 'Scimone', '1999-04-24', 'Milano', 'utente8', 'utente8'),
(9, 'Marco', 'Di Bonaventura', '1974-03-12', 'Teramo', 'utente9', 'utente9'),
(10, 'Michele', 'Cantisani', '1996-06-22', 'Latina', 'utente10', 'utente10'),
(11, 'Matteo', 'Bruno', '1990-10-13', 'Roma', 'utente11', 'utente11'),
(12, 'Nicolas', 'Paruolo', '1996-04-12', 'Bologna', 'utente12', 'utente12'),
(14, 'sporteal_agile2021', 'Agile2021', '2021-06-09', 'Ancona', 'sporteal_agile2021', 'Agile2021'),
(15, 'coso', 'non coso', '2021-06-09', 'Ancona', 'sporteal_agile2021', 'Agile2021'),
(16, 'Muori', 'Ora', '1969-12-21', 'Male', 'uccidimi', 'digiustezza');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Eventi`
--
ALTER TABLE `Eventi`
  ADD PRIMARY KEY (`id`,`id_luogo`,`id_gruppo`);

--
-- Indici per le tabelle `formano`
--
ALTER TABLE `formano`
  ADD PRIMARY KEY (`id_utente`,`id_gruppo`),
  ADD KEY `id_gruppo` (`id_gruppo`);

--
-- Indici per le tabelle `Generi`
--
ALTER TABLE `Generi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `Gruppi`
--
ALTER TABLE `Gruppi`
  ADD PRIMARY KEY (`id`,`id_admin_gruppo`);

--
-- Indici per le tabelle `Luoghi`
--
ALTER TABLE `Luoghi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `partecipano`
--
ALTER TABLE `partecipano`
  ADD PRIMARY KEY (`id_utente`,`id_evento`),
  ADD KEY `id_evento` (`id_evento`);

--
-- Indici per le tabelle `Utenti`
--
ALTER TABLE `Utenti`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `Eventi`
--
ALTER TABLE `Eventi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT per la tabella `Generi`
--
ALTER TABLE `Generi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT per la tabella `Gruppi`
--
ALTER TABLE `Gruppi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `Luoghi`
--
ALTER TABLE `Luoghi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT per la tabella `Utenti`
--
ALTER TABLE `Utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `formano`
--
ALTER TABLE `formano`
  ADD CONSTRAINT `formano_ibfk_1` FOREIGN KEY (`id_gruppo`) REFERENCES `Gruppi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `formano_ibfk_2` FOREIGN KEY (`id_utente`) REFERENCES `Utenti` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `partecipano`
--
ALTER TABLE `partecipano`
  ADD CONSTRAINT `partecipano_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `Utenti` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `partecipano_ibfk_2` FOREIGN KEY (`id_evento`) REFERENCES `Eventi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
