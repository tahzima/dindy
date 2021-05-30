-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 30 mai 2021 à 18:00
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dindy`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `userName`, `password`) VALUES
(1, 'laaraich', 'mohammed', 'maestro', 'maestro');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `telephone` int(11) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idCommande` int(11) NOT NULL AUTO_INCREMENT,
  `idClient` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `prixTT` float NOT NULL,
  `qte` int(11) NOT NULL,
  `date` date NOT NULL,
  `prix` float NOT NULL,
  `numFacture` int(11) NOT NULL,
  PRIMARY KEY (`idCommande`),
  KEY `fk_client` (`idClient`),
  KEY `fk_produit` (`idProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(60) NOT NULL,
  PRIMARY KEY (`idProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `nom`) VALUES
(1, 'Filet de dinde'),
(2, 'Brochettes Blanches'),
(3, 'Escalopes'),
(4, 'Cuisse entière de  dinde'),
(5, 'Haut de Cuisse'),
(6, 'Pilon '),
(7, 'Haut de Cuisse de Dinde'),
(8, 'Brochettes Rouges'),
(9, 'Steak'),
(10, 'Haut de Cuisse Désossé'),
(11, 'Roti '),
(12, 'Pilon de dinde '),
(13, 'Osso Bucco'),
(14, 'Pilon Désossé'),
(15, 'Pilon Raccourci'),
(16, 'Blanquette de Dinde'),
(17, 'Roti de Blanquette'),
(18, 'Blanquettes Désossée'),
(19, 'Aile de Dinde'),
(20, 'Aile Désossé'),
(21, 'Filet de poulet'),
(22, 'Escalopes'),
(23, 'Cuisse entière de Poulet'),
(24, 'Haut de Cuisse de Poulet'),
(25, 'Cuisse entière Désossée'),
(26, 'Pilon'),
(27, 'Pilon de Poulet'),
(28, 'Pilon Désossé'),
(29, 'Haut de Cuisse de Poulet'),
(30, 'Haut de cuisse Désossé'),
(31, 'Blanquette de Poulet'),
(32, 'Blanquette Désossée'),
(33, 'Viande Hachée de Dinde Nature'),
(34, 'Viande Hachée de Dinde Epicée'),
(35, 'Shish Kebab Fumé'),
(36, 'Shish Kebab Nature'),
(37, 'Shish Kebab au Fromage'),
(38, 'Shish Kebab aux Fines Herbes '),
(39, 'Burger de Dinde Epicé'),
(40, 'Burger de Dinde Nature'),
(41, 'Escalope de Dinde Pané'),
(42, 'Cordon Bleu'),
(43, 'Nuggets'),
(44, 'Boulettes'),
(45, 'Saucisses de Poulet Natures'),
(46, 'Saucisses de Poulet Piquants'),
(47, 'Saucisses de Poulet Fines Herbes'),
(48, 'Saucisses de Poulet Fumées'),
(49, 'Saucisses de Poulet au Fromage '),
(50, 'Saucisses de Dinde Fumé '),
(51, 'Merguez Piquant'),
(52, 'Saucisses de Dinde aux Fines Herbes'),
(53, 'Saucisses de Dinde au Fromage'),
(54, 'Saucisses de Dinde Nature'),
(55, 'Saucisses de Dinde Nord'),
(56, 'Brochettes Blanches Marinées'),
(57, 'Brochettes Rouges Marinées'),
(58, 'Brochettes Rouges aux 7 Epices'),
(59, 'Brochettes Blanches aux 7 Epices'),
(60, 'Poulet Mariné Prêt à Cuire'),
(61, 'Haut de cuisse de Poulet  Mariné'),
(62, 'Pilons de poulet Marinés'),
(63, 'Ailes de poulet Marinés'),
(64, 'Escalope de dinde Marinés'),
(65, 'Shawarma de Poulet');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_client` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_produit` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
