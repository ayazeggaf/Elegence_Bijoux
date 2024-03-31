-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 juin 2023 à 15:21
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `elegence_bijoux`
--

-- --------------------------------------------------------

--
-- Structure de la table `bijoux`
--

CREATE TABLE `bijoux` (
  `idB` varchar(255) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `image` varchar(299) DEFAULT NULL,
  `desciption` varchar(299) DEFAULT NULL,
  `prix` varchar(99) DEFAULT NULL,
  `idcat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bijoux`
--

INSERT INTO `bijoux` (`idB`, `libelle`, `image`, `desciption`, `prix`, `idcat`) VALUES
('bague1', 'lina', 'images/images (9).jpg', 'BAGUE CRISTAUX AVEC PENDENTIF MABROUKA ', '4.99$', 3),
('bague2', '-linda', 'images/images (10).jpg', 'BAGUE SYMBOLE', '7.99$', 3),
('bague3', '-QQ', 'images/images (16).jpg', 'BAGUE oierre verre -CC', '8.99$', 3),
('bague4', '-jj', 'images/images (18).jpg', 'BAGUE SYMBOLE', '7.99$', 3),
('boucle1', '-uu', 'images/images (8).jpg', 'Boucle d\'orreille CLASSE', '24.99$', 4),
('boucle2', '-DD', 'images/images (6).jpg', 'Boucle d\'orreille SYMBOLE  ', '10.99$', 4),
('boucle3', '- FF  ', 'images/images (2).jpg', 'Boucle d\'orreille petales ', '15.99$', 4),
('boucle4', '-ww', 'images/images (7).jpg', 'Boucle d\'orreille WPW ', '17.99$', 4),
('braclet1', '-MM', 'images/images (19).jpg', 'BRACELET CRISTAUX AVEC PENDENTIF MABROUKA -li', '8.99$', 2),
('braclet2', '-YY', 'images/images (28).jpg', 'BRACLE oierre verre ', '99.99$', 2),
('braclet3', 'lina', 'images/images (29).jpg', 'BRACELET CRISTAUX AVEC PENDENTIF MABROUKA -li', '24.99$', 2),
('braclet4', 'lina-BRA', 'images/images (20).jpg', 'BRACLET SYMBOLE -DD', '34.99$', 2),
('colier1', 'cc', 'images/images (27).jpg', 'Ensembles oierre verre -CC', '44.99$', 1),
('colier2', 'colier-rr', 'images/images (21).jpg', 'colier-ziolet', '54.99$', 1),
('colier3', '-linda', 'images/images (25).jpg', 'colier-inoxidable', '55.99$', 1),
('colier4', '-PP', 'images/images (22).jpg', 'colier-patel', '74.99$', 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idcat` int(11) NOT NULL,
  `lib` varchar(299) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idcat`, `lib`) VALUES
(1, 'colliers'),
(2, 'bracelets'),
(3, 'bagues'),
(4, 'boucles_d\'oreilles');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `login` varchar(299) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `motdepasse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`login`, `prenom`, `nom`, `tel`, `email`, `ville`, `adresse`, `motdepasse`) VALUES
('aya123', 'aya', 'zeggaf', 613915657, 'ayazeggaf@gmail.com', 'tanger', 'tanger merchan', '123'),
('ch123', 'chaymae', 'el azzabi', 712345678, 'chaimae@gmail.com', 'rabat', 'mekness 12k', '000'),
('nada123', 'nada', 'samadi', 788888888, 'nadahassi68@gmail.com', 'tanger', 'bni makada', '1111');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `numcom` int(11) NOT NULL,
  `login` varchar(299) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`numcom`, `login`) VALUES
(1, 'aya123'),
(3, 'aya123'),
(4, 'aya123'),
(5, 'aya123'),
(6, 'aya123'),
(7, 'aya123'),
(8, 'aya123'),
(9, 'aya123'),
(10, 'aya123');

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `numcom` int(11) NOT NULL,
  `idB` varchar(255) NOT NULL,
  `login` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contient`
--

INSERT INTO `contient` (`numcom`, `idB`, `login`) VALUES
(4, 'boucle2', 'aya123'),
(9, 'bague2', 'aya123'),
(10, 'boucle3', 'aya123'),
(11, 'boucle3', 'aya123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bijoux`
--
ALTER TABLE `bijoux`
  ADD PRIMARY KEY (`idB`),
  ADD KEY `idcat` (`idcat`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcat`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`login`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`numcom`),
  ADD KEY `login` (`login`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`numcom`,`idB`),
  ADD KEY `idB` (`idB`),
  ADD KEY `fk` (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `numcom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `contient`
--
ALTER TABLE `contient`
  MODIFY `numcom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bijoux`
--
ALTER TABLE `bijoux`
  ADD CONSTRAINT `bijoux_ibfk_1` FOREIGN KEY (`idcat`) REFERENCES `categorie` (`idcat`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`login`) REFERENCES `client` (`login`);

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `contient_ibfk_2` FOREIGN KEY (`idB`) REFERENCES `bijoux` (`idB`),
  ADD CONSTRAINT `fk` FOREIGN KEY (`login`) REFERENCES `client` (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
