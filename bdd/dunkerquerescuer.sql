-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 03 déc. 2021 à 03:40
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dunkerquerescuer`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` varchar(32) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `rescuer`
--

CREATE TABLE `rescuer` (
  `idRescuer` varchar(32) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `birthDay` date DEFAULT NULL,
  `sources` text DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `image` mediumblob DEFAULT NULL,
  `rescueNumber` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rescuer`
--

INSERT INTO `rescuer` (`idRescuer`, `firstName`, `lastName`, `birthDay`, `sources`, `age`, `image`, `rescueNumber`) VALUES
('1', 'Albert Noël Eugène', 'BENTEU', '1826-12-09', 'NULL', 0, '', 3),
('2', 'Jacques Joseph', 'Bommelaer', '1864-08-18', 'BNF Gallica Société centrale de sauvetage des naufragés 1866 – 1939 BNF Gallica Journal Officiel Base Léonore Dossier de la légion d’honneur', 70, '', 3),
('3', 'EMILE ALFRED', 'REES', '1809-01-09', 'Base Léonore Dossier : 19800035/0250/33252 BNF Gallica Société Centrale de Sauvetage des Naufragés Généanet Données généalogiques Crocq Journal Officiel Le Grand Echo Du Nord de la France – Interview Charles Gossin du 25 juillet 1930 Crédits photographiques Gérard Laridan –  Photo colorisée et cimetière Philippe Boutelier', 80, '', 13),
('4', 'Albert Noël Eugène', 'BENTEU', '1829-05-28', '', 0, '', 3),
('5', 'Pierre Louis ', 'DELUGNY', '1800-06-14', 'BNF Gallica Société centrale de sauvetage des naufragés 1866 – 1939 Le Grand Echo du Nord de la France – Avis de décés 20 avril 1901 Base Léonore Dossier de la légion d’honneur Généalogie Pascale Blondé Crédit photographique Pascale Blondé', 85, '', 22),
('6', 'Pierre Joseph', 'Leprêtre', '1816-04-15', 'BNF Gallica Société centrale de sauvetage des naufragés 1866 – 1939 Base Léonore Dossier de la légion d’honneur. .Dupas et P.Oddone Histoire de Gravelines Porte de Flandres', 84, '', 28),
('7', 'Charles Pierre', 'LAVIE', '1856-02-01', 'BNF Gallica Société centrale de sauvetage des naufragés 1866 – 1939 BNF Gallica Journal Officiel Base Léonore Dossier de la légion d’honneur', 59, '', 13);

-- --------------------------------------------------------

--
-- Structure de la table `rescuer_story`
--

CREATE TABLE `rescuer_story` (
  `idRescuer` varchar(32) NOT NULL,
  `idStory` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `story`
--

CREATE TABLE `story` (
  `idStory` varchar(32) NOT NULL,
  `releaseDate` date DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `keyword` text DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `storyDate` date DEFAULT NULL,
  `numberOfPeopleSave` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `rescuer`
--
ALTER TABLE `rescuer`
  ADD PRIMARY KEY (`idRescuer`);
ALTER TABLE `rescuer` ADD FULLTEXT KEY `recherche` (`firstName`,`lastName`);

--
-- Index pour la table `rescuer_story`
--
ALTER TABLE `rescuer_story`
  ADD KEY `foreign_key _resuer_s` (`idRescuer`) USING BTREE,
  ADD KEY `foreign_key _story_r` (`idStory`) USING BTREE;

--
-- Index pour la table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`idStory`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `rescuer_story`
--
ALTER TABLE `rescuer_story`
  ADD CONSTRAINT `foreign_key _resuer` FOREIGN KEY (`idRescuer`) REFERENCES `rescuer` (`idRescuer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `foreign_key _story` FOREIGN KEY (`idStory`) REFERENCES `story` (`idStory`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
