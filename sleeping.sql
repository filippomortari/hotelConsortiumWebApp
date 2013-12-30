-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Nov 02, 2012 alle 23:15
-- Versione del server: 5.5.27
-- Versione PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sleeping`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `EContatti`
--

CREATE TABLE IF NOT EXISTS `EContatti` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Telefono` varchar(255) DEFAULT NULL,
  `Mobile` varchar(255) DEFAULT NULL,
  `Fax` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `EContatti`
--

INSERT INTO `EContatti` (`ID`, `Telefono`, `Mobile`, `Fax`, `Email`) VALUES
(3, NULL, NULL, NULL, 'dipompeodaniele@gmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `EIndirizzo`
--

CREATE TABLE IF NOT EXISTS `EIndirizzo` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Via` varchar(255) DEFAULT NULL,
  `NumCiv` int(10) DEFAULT NULL,
  `Citta` varchar(255) DEFAULT NULL,
  `Prov` varchar(255) DEFAULT NULL,
  `Cap` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dump dei dati per la tabella `EIndirizzo`
--

INSERT INTO `EIndirizzo` (`ID`, `Via`, `NumCiv`, `Citta`, `Prov`, `Cap`) VALUES
(5, 'via amiternum', NULL, 'cagnano amiterno', '67012', NULL),
(6, NULL, NULL, 'l''aquila', 'aq', NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `EPrenotazione`
--

CREATE TABLE IF NOT EXISTS `EPrenotazione` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `EPrezzoID` int(10) DEFAULT NULL,
  `EUtenteID` int(10) DEFAULT NULL,
  `CheckIn` date DEFAULT NULL,
  `CheckOut` date DEFAULT NULL,
  `Nights` int(10) NOT NULL,
  `People` int(10) NOT NULL,
  `Confermata` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FKEPrenotazi618338` (`EUtenteID`),
  KEY `FKEPrenotazi516313` (`EPrezzoID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `EPrezzo`
--

CREATE TABLE IF NOT EXISTS `EPrezzo` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Value` int(10) DEFAULT NULL,
  `Currency` int(10) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `ERoom`
--

CREATE TABLE IF NOT EXISTS `ERoom` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `EStrutturaID` int(10) NOT NULL,
  `EPrenotazioneID` int(10) DEFAULT NULL,
  `EPrezzoID` int(10) DEFAULT NULL,
  `Posti` int(10) DEFAULT NULL,
  `Descrizione` int(10) DEFAULT NULL,
  `Discriminator` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FKERoom974158` (`EPrezzoID`),
  KEY `FKERoom687700` (`EPrenotazioneID`),
  KEY `FKERoom360975` (`EStrutturaID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `EStruttura`
--

CREATE TABLE IF NOT EXISTS `EStruttura` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `EContattiID` int(10) DEFAULT NULL,
  `EIndirizzoID` int(10) NOT NULL,
  `EUtenteID` int(10) DEFAULT NULL,
  `Nome` int(10) DEFAULT NULL,
  `PIva` int(10) DEFAULT NULL,
  `Cf` int(10) DEFAULT NULL,
  `Discriminator` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FKEStruttura244550` (`EUtenteID`),
  KEY `FKEStruttura763223` (`EIndirizzoID`),
  KEY `FKEStruttura948931` (`EContattiID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `EUtente`
--

CREATE TABLE IF NOT EXISTS `EUtente` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `EContattiID` int(10) DEFAULT NULL,
  `EIndirizzoID3` int(10) DEFAULT NULL,
  `EIndirizzoID2` int(10) NOT NULL,
  `EIndirizzoID` int(10) DEFAULT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `Cognome` varchar(255) DEFAULT NULL,
  `DataNascita` date DEFAULT NULL,
  `CodFisc` varchar(255) DEFAULT NULL,
  `Sesso` char(1) NOT NULL,
  `Credito` float NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Discriminator` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FKEUtente518973` (`EIndirizzoID`),
  KEY `FKEUtente142595` (`EIndirizzoID2`),
  KEY `FKEUtente142596` (`EIndirizzoID3`),
  KEY `FKEUtente333265` (`EContattiID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `EUtente`
--

INSERT INTO `EUtente` (`ID`, `EContattiID`, `EIndirizzoID3`, `EIndirizzoID2`, `EIndirizzoID`, `Nome`, `Cognome`, `DataNascita`, `CodFisc`, `Sesso`, `Credito`, `Username`, `Password`, `Discriminator`) VALUES
(3, 3, 6, 5, 5, 'daniele', 'di pompeo', '1983-07-26', 'dpmdnl83l26a345l', '', 0, 'daniele', '679ab793796da4cbd0dda3d0daf74ec1', '');

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `EPrenotazione`
--
ALTER TABLE `EPrenotazione`
  ADD CONSTRAINT `FKEPrenotazi516313` FOREIGN KEY (`EPrezzoID`) REFERENCES `EPrezzo` (`ID`),
  ADD CONSTRAINT `FKEPrenotazi618338` FOREIGN KEY (`EUtenteID`) REFERENCES `EUtente` (`ID`);

--
-- Limiti per la tabella `ERoom`
--
ALTER TABLE `ERoom`
  ADD CONSTRAINT `FKERoom360975` FOREIGN KEY (`EStrutturaID`) REFERENCES `EStruttura` (`ID`),
  ADD CONSTRAINT `FKERoom687700` FOREIGN KEY (`EPrenotazioneID`) REFERENCES `EPrenotazione` (`ID`),
  ADD CONSTRAINT `FKERoom974158` FOREIGN KEY (`EPrezzoID`) REFERENCES `EPrezzo` (`ID`);

--
-- Limiti per la tabella `EStruttura`
--
ALTER TABLE `EStruttura`
  ADD CONSTRAINT `FKEStruttura244550` FOREIGN KEY (`EUtenteID`) REFERENCES `EUtente` (`ID`),
  ADD CONSTRAINT `FKEStruttura763223` FOREIGN KEY (`EIndirizzoID`) REFERENCES `EIndirizzo` (`ID`),
  ADD CONSTRAINT `FKEStruttura948931` FOREIGN KEY (`EContattiID`) REFERENCES `EContatti` (`ID`);

--
-- Limiti per la tabella `EUtente`
--
ALTER TABLE `EUtente`
  ADD CONSTRAINT `FKEUtente142595` FOREIGN KEY (`EIndirizzoID2`) REFERENCES `EIndirizzo` (`ID`),
  ADD CONSTRAINT `FKEUtente142596` FOREIGN KEY (`EIndirizzoID3`) REFERENCES `EIndirizzo` (`ID`),
  ADD CONSTRAINT `FKEUtente333265` FOREIGN KEY (`EContattiID`) REFERENCES `EContatti` (`ID`),
  ADD CONSTRAINT `FKEUtente518973` FOREIGN KEY (`EIndirizzoID`) REFERENCES `EIndirizzo` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
