-- phpMyAdmin SQL Dump
-- version 4.6.5.2deb1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 01 Février 2017 à 10:18
-- Version du serveur :  5.6.30-1
-- Version de PHP :  7.0.14-2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `penduApp`
--

-- --------------------------------------------------------

--
-- Structure de la table `compteurs`
--

DROP TABLE IF EXISTS `compteurs`;
CREATE TABLE IF NOT EXISTS `compteurs` (
  `motId` int(11) NOT NULL,
  `joueurId` int(11) NOT NULL,
  `essais` int(11) NOT NULL,
  `trouve` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `joueurs`
--

DROP TABLE IF EXISTS `joueurs`;
CREATE TABLE IF NOT EXISTS `joueurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `joueurs`
--

INSERT INTO `joueurs` (`id`, `nom`) VALUES
(1, 'Kévin'),
(2, 'Laetitia'),
(3, 'Samuel'),
(4, 'Delphine'),
(5, 'Aziz');

-- --------------------------------------------------------

--
-- Structure de la table `mots`
--

DROP TABLE IF EXISTS `mots`;
CREATE TABLE IF NOT EXISTS `mots` (
  `id` int(11) NOT NULL,
  `mot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mots`
--

INSERT INTO `mots` (`id`, `mot`) VALUES
(1, 'tartiflette'),
(2, 'éléphant'),
(3, 'livre'),
(4, 'tomate'),
(5, 'choucroute'),
(6, 'bière'),
(7, 'vache'),
(8, 'couscous'),
(9, 'étoile'),
(10, 'salade'),
(11, 'cheval'),
(12, 'course'),
(13, 'ordinateur'),
(14, 'écran'),
(15, 'table'),
(16, 'fauteuil'),
(17, 'manteau'),
(18, 'bouteille'),
(19, 'clavier'),
(20, 'manette'),
(21, 'planche'),
(22, 'écureuil'),
(23, 'plastique'),
(24, 'écharpe'),
(26, 'tableau'),
(27, 'crayon'),
(28, 'télécommande'),
(29, 'pomme'),
(30, 'bateau'),
(31, 'poire'),
(32, 'vélo'),
(33, 'paquebot'),
(34, 'chyropracteur'),
(35, 'tractopelle'),
(37, 'cacahuète'),
(38, 'livraison');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `joueurs`
--
ALTER TABLE `joueurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mots`
--
ALTER TABLE `mots`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `joueurs`
--
ALTER TABLE `joueurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `mots`
--
ALTER TABLE `mots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
