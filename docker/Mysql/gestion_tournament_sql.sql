-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 09 mai 2025 à 13:13
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bidouille`
--

-- --------------------------------------------------------

--
-- Structure de la table `amitié`
--

CREATE TABLE `amitié` (
  `idU` varchar(37) NOT NULL,
  `idU_1` varchar(37) NOT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `date_demande` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE `avoir` (
  `idN` int(11) NOT NULL,
  `idTN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `faire`
--

CREATE TABLE `faire` (
  `idU` varchar(37) NOT NULL,
  `idReport` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

CREATE TABLE `jeu` (
  `idJ` int(11) NOT NULL,
  `nomJ` varchar(50) DEFAULT NULL,
  `image_ref` varchar(50) DEFAULT NULL,
  `idTJ` int(11) NOT NULL,
  `idT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `idM` int(11) NOT NULL,
  `contenu` varchar(50) DEFAULT NULL,
  `date_envoi` date DEFAULT NULL,
  `lu` tinyint(1) DEFAULT NULL,
  `idU` varchar(37) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `idN` int(11) NOT NULL,
  `contenu` varchar(100) DEFAULT NULL,
  `lu` tinyint(1) DEFAULT NULL,
  `date_envoi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `obtenir`
--

CREATE TABLE `obtenir` (
  `idU` varchar(37) NOT NULL,
  `idTJ` int(11) NOT NULL,
  `id_succès` int(11) NOT NULL,
  `nb_participation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `organisateur`
--

CREATE TABLE `organisateur` (
  `idU` varchar(37) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `organiser`
--

CREATE TABLE `organiser` (
  `idT` int(11) NOT NULL,
  `idU` varchar(37) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `idU` varchar(37) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE `participer` (
  `idT` int(11) NOT NULL,
  `idU` varchar(37) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recevoir`
--

CREATE TABLE `recevoir` (
  `idU` varchar(37) NOT NULL,
  `idN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `signalement`
--

CREATE TABLE `signalement` (
  `idReport` int(11) NOT NULL,
  `raison` varchar(50) DEFAULT NULL,
  `date_signe` date DEFAULT NULL,
  `id_signalé` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE `statut` (
  `idStat` int(11) NOT NULL,
  `libelleStat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`idStat`, `libelleStat`) VALUES
(0, 'connecté'),
(1, 'déconnecté'),
(2, 'ne pas déranger'),
(3, 'indisponible');

-- --------------------------------------------------------

--
-- Structure de la table `succès`
--

CREATE TABLE `succès` (
  `id_succès` int(11) NOT NULL,
  `date_obtention` date DEFAULT NULL,
  `libelle_succès` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tournoi`
--

CREATE TABLE `tournoi` (
  `idT` int(11) NOT NULL,
  `date_deb` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `région` varchar(50) DEFAULT NULL,
  `pays` varchar(50) DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `nb_joueur` int(11) DEFAULT NULL,
  `idJ` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `typejeu`
--

CREATE TABLE `typejeu` (
  `idTJ` int(11) NOT NULL,
  `libelleT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `typenotif`
--

CREATE TABLE `typenotif` (
  `idTN` int(11) NOT NULL,
  `libelleTN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idU` varchar(37) NOT NULL,
  `pseudoU` varchar(50) NOT NULL,
  `mailU` varchar(50) DEFAULT NULL,
  `mdpU` varchar(70) DEFAULT NULL,
  `pdp_ref` varchar(50) DEFAULT NULL,
  `idStat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idU`, `pseudoU`, `mailU`, `mdpU`, `pdp_ref`, `idStat`) VALUES
('8786098563', 'test', 'test@test.com', 'seYbqlVB7.n7k', './photos/pdp_test.png', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `amitié`
--
ALTER TABLE `amitié`
  ADD PRIMARY KEY (`idU`,`idU_1`),
  ADD KEY `idU_1` (`idU_1`);

--
-- Index pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD PRIMARY KEY (`idN`,`idTN`),
  ADD KEY `idTN` (`idTN`);

--
-- Index pour la table `faire`
--
ALTER TABLE `faire`
  ADD PRIMARY KEY (`idU`,`idReport`),
  ADD KEY `idReport` (`idReport`);

--
-- Index pour la table `jeu`
--
ALTER TABLE `jeu`
  ADD PRIMARY KEY (`idJ`),
  ADD KEY `fk_jeu_tournoi` (`idT`),
  ADD KEY `fk_jeu_typejeu` (`idTJ`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idM`),
  ADD KEY `idU` (`idU`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`idN`);

--
-- Index pour la table `obtenir`
--
ALTER TABLE `obtenir`
  ADD PRIMARY KEY (`idU`,`idTJ`,`id_succès`),
  ADD KEY `idTJ` (`idTJ`),
  ADD KEY `id_succès` (`id_succès`);

--
-- Index pour la table `organisateur`
--
ALTER TABLE `organisateur`
  ADD PRIMARY KEY (`idU`);

--
-- Index pour la table `organiser`
--
ALTER TABLE `organiser`
  ADD PRIMARY KEY (`idT`,`idU`),
  ADD KEY `idU` (`idU`);

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`idU`);

--
-- Index pour la table `participer`
--
ALTER TABLE `participer`
  ADD PRIMARY KEY (`idT`,`idU`),
  ADD KEY `idU` (`idU`);

--
-- Index pour la table `recevoir`
--
ALTER TABLE `recevoir`
  ADD PRIMARY KEY (`idU`,`idN`),
  ADD KEY `idN` (`idN`);

--
-- Index pour la table `signalement`
--
ALTER TABLE `signalement`
  ADD PRIMARY KEY (`idReport`);

--
-- Index pour la table `statut`
--
ALTER TABLE `statut`
  ADD PRIMARY KEY (`idStat`);

--
-- Index pour la table `succès`
--
ALTER TABLE `succès`
  ADD PRIMARY KEY (`id_succès`);

--
-- Index pour la table `tournoi`
--
ALTER TABLE `tournoi`
  ADD PRIMARY KEY (`idT`),
  ADD KEY `fk_tournoi_jeu` (`idJ`);

--
-- Index pour la table `typejeu`
--
ALTER TABLE `typejeu`
  ADD PRIMARY KEY (`idTJ`);

--
-- Index pour la table `typenotif`
--
ALTER TABLE `typenotif`
  ADD PRIMARY KEY (`idTN`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idU`) USING BTREE,
  ADD KEY `idStat` (`idStat`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `amitié`
--
ALTER TABLE `amitié`
  ADD CONSTRAINT `amitié_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`idU`),
  ADD CONSTRAINT `amitié_ibfk_2` FOREIGN KEY (`idU_1`) REFERENCES `utilisateur` (`idU`);

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `avoir_ibfk_1` FOREIGN KEY (`idN`) REFERENCES `notification` (`idN`),
  ADD CONSTRAINT `avoir_ibfk_2` FOREIGN KEY (`idTN`) REFERENCES `typenotif` (`idTN`);

--
-- Contraintes pour la table `faire`
--
ALTER TABLE `faire`
  ADD CONSTRAINT `faire_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`idU`),
  ADD CONSTRAINT `faire_ibfk_2` FOREIGN KEY (`idReport`) REFERENCES `signalement` (`idReport`);

--
-- Contraintes pour la table `jeu`
--
ALTER TABLE `jeu`
  ADD CONSTRAINT `fk_jeu_tournoi` FOREIGN KEY (`idT`) REFERENCES `tournoi` (`idT`),
  ADD CONSTRAINT `fk_jeu_typejeu` FOREIGN KEY (`idTJ`) REFERENCES `typejeu` (`idTJ`),
  ADD CONSTRAINT `jeu_ibfk_1` FOREIGN KEY (`idTJ`) REFERENCES `typejeu` (`idTJ`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`idU`);

--
-- Contraintes pour la table `obtenir`
--
ALTER TABLE `obtenir`
  ADD CONSTRAINT `obtenir_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`idU`),
  ADD CONSTRAINT `obtenir_ibfk_2` FOREIGN KEY (`idTJ`) REFERENCES `typejeu` (`idTJ`),
  ADD CONSTRAINT `obtenir_ibfk_3` FOREIGN KEY (`id_succès`) REFERENCES `succès` (`id_succès`);

--
-- Contraintes pour la table `organisateur`
--
ALTER TABLE `organisateur`
  ADD CONSTRAINT `organisateur_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`idU`);

--
-- Contraintes pour la table `organiser`
--
ALTER TABLE `organiser`
  ADD CONSTRAINT `organiser_ibfk_1` FOREIGN KEY (`idT`) REFERENCES `tournoi` (`idT`),
  ADD CONSTRAINT `organiser_ibfk_2` FOREIGN KEY (`idU`) REFERENCES `organisateur` (`idU`);

--
-- Contraintes pour la table `participant`
--
ALTER TABLE `participant`
  ADD CONSTRAINT `participant_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`idU`);

--
-- Contraintes pour la table `participer`
--
ALTER TABLE `participer`
  ADD CONSTRAINT `participer_ibfk_1` FOREIGN KEY (`idT`) REFERENCES `tournoi` (`idT`),
  ADD CONSTRAINT `participer_ibfk_2` FOREIGN KEY (`idU`) REFERENCES `participant` (`idU`);

--
-- Contraintes pour la table `recevoir`
--
ALTER TABLE `recevoir`
  ADD CONSTRAINT `recevoir_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`idU`),
  ADD CONSTRAINT `recevoir_ibfk_2` FOREIGN KEY (`idN`) REFERENCES `notification` (`idN`);

--
-- Contraintes pour la table `tournoi`
--
ALTER TABLE `tournoi`
  ADD CONSTRAINT `fk_tournoi_jeu` FOREIGN KEY (`idJ`) REFERENCES `jeu` (`idJ`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`idStat`) REFERENCES `statut` (`idStat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
