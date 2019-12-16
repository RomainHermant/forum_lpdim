-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 16 déc. 2019 à 11:11
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `discussion`
--

DROP TABLE IF EXISTS `discussion`;
CREATE TABLE IF NOT EXISTS `discussion` (
  `idDiscu` int(11) NOT NULL AUTO_INCREMENT,
  `contenuDiscu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUserExpediteurDiscu` int(11) NOT NULL,
  `idUserDestinataireDiscu` int(11) NOT NULL,
  PRIMARY KEY (`idDiscu`),
  KEY `fk_discussion_user` (`idUserExpediteurDiscu`),
  KEY `fk_discussion_user2` (`idUserDestinataireDiscu`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `discussion`
--

INSERT INTO `discussion` (`idDiscu`, `contenuDiscu`, `idUserExpediteurDiscu`, `idUserDestinataireDiscu`) VALUES
(1, 'Salut', 54, 52);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `idPost` int(11) NOT NULL AUTO_INCREMENT,
  `contenuPost` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `datePost` date NOT NULL,
  `idUserPost` int(11) NOT NULL,
  `idTopicPost` int(11) NOT NULL,
  PRIMARY KEY (`idPost`),
  KEY `fk_topic_post` (`idTopicPost`),
  KEY `fk_user_post` (`idUserPost`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`idPost`, `contenuPost`, `datePost`, `idUserPost`, `idTopicPost`) VALUES
(20, 'Réponse 3', '2019-12-16', 58, 20),
(19, 'Réponse 2', '2019-12-16', 58, 20),
(18, 'Réponse 1', '2019-12-16', 58, 20),
(17, 'Réponse 2', '2019-12-16', 58, 18),
(16, '', '2019-12-16', 58, 18),
(15, 'Réponse 1', '2019-12-16', 58, 18),
(14, 'Test réponse topic 1', '2019-12-16', 58, 17),
(21, 'Test', '2019-12-16', 58, 21);

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `idTheme` int(11) NOT NULL AUTO_INCREMENT,
  `libelleTheme` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbTopicTheme` int(11) NOT NULL,
  `lastTopicDateTheme` date DEFAULT NULL,
  PRIMARY KEY (`idTheme`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`idTheme`, `libelleTheme`, `nbTopicTheme`, `lastTopicDateTheme`) VALUES
(2, 'jeux-videos', 0, NULL),
(3, 'informatique', 0, NULL),
(4, 'smartphones', 0, NULL),
(5, 'programmation', 0, NULL),
(6, 'entraides', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

DROP TABLE IF EXISTS `topic`;
CREATE TABLE IF NOT EXISTS `topic` (
  `idTopic` int(11) NOT NULL AUTO_INCREMENT,
  `titreTopic` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenuTopic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastUserTopic` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastDateTopic` date NOT NULL,
  `idThemeTopic` int(11) NOT NULL,
  PRIMARY KEY (`idTopic`),
  KEY `fk_theme_topic` (`idThemeTopic`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `topic`
--

INSERT INTO `topic` (`idTopic`, `titreTopic`, `contenuTopic`, `lastUserTopic`, `lastDateTopic`, `idThemeTopic`) VALUES
(21, 'Test topic entraide', 'Contenu topic entraide', 'admin', '2019-12-16', 6),
(20, 'Problème php', 'aaaaaaaaaaa', 'admin', '2019-12-16', 5),
(19, 'Avis nouveau Iphone', 'test test', 'admin', '2019-12-16', 4),
(17, 'Test topic 1', 'test contenu', 'admin', '2019-12-16', 2),
(18, 'Test topic info', 'Contenu topic informatique', 'admin', '2019-12-16', 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenomUser` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailUser` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pseudoUser` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdpUser` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbConnexionUser` int(11) DEFAULT NULL,
  `derniereConnexionUser` date DEFAULT NULL,
  `avatar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `nomUser`, `prenomUser`, `emailUser`, `pseudoUser`, `mdpUser`, `nbConnexionUser`, `derniereConnexionUser`, `avatar`) VALUES
(58, 'Administrateur', 'Administrateur', 'admin@gmail.com', 'admin', '$2y$10$8saNVMspaMO6pcHBMsiYFuj4VALuir5wCsKgrztVNgDGSz0sJVKJm', NULL, NULL, '58.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
