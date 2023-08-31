-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 31 août 2023 à 13:11
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sunushop`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nomCategorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nomCategorie`) VALUES
(1, 'Chemises'),
(2, 'Chaussure'),
(3, 'Chapeaux'),
(4, 'colles'),
(5, 'caravates'),
(24, 'robes'),
(37, 'sacs'),
(38, 'lait de corps');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `idUser`, `idProduit`, `quantite`) VALUES
(5, 2, 25, 3),
(9, 5, 26, 1),
(13, 5, 23, 1),
(15, 5, 25, 3),
(18, 5, 27, 3),
(19, 3, 28, 1),
(20, 2, 23, 1),
(21, 2, 27, 1),
(28, 35, 23, 1),
(29, 35, 25, 1),
(30, 35, 30, 1),
(32, 35, 31, 1),
(33, 2, 29, 1),
(34, 2, 33, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL,
  `qStock` int(11) NOT NULL,
  `idcategorie` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `visite` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `description`, `qStock`, `idcategorie`, `image`, `visite`) VALUES
(23, 'chaussure', 40000, 'belle chaussure', 10, 2, '1693430953.jpg', 1),
(25, 'chemise', 6000, 'chemise de bonne qualite', 7, 1, '64d8073faf353.jpg', 1),
(26, 'chaussure', 7000, 'belle chaussure de femme', 75, 2, '64e4d35c3b7ae.jpg', 1),
(27, 'caravate', 3500, 'caravate de toute couleur', 12, 5, '64e4d3a2d8896.jpg', 1),
(28, 'chapeau', 1000, 'chapeau gris', 25, 3, '64e4de9356a3b.jpg', 1),
(29, 'sac bleu-blanc', 250000, 'belle sac de bonne qualite', 15, 37, '64e788a2d2566.jpg', 1),
(30, 'chemise blanche', 7000, 'chemise de bonne qualite', 5, 1, '64e7895eed43e.jpg', 1),
(31, 'chemise bleue', 6000, 'chemise en coton', 20, 1, '64e789a260458.jpg', 1),
(32, 'sac bleu', 5000, 'sac de luxe', 9, 37, '64e78a01cfd42.jpg', 0),
(33, 'sac noir et blanc', 20000, 'chaussure de luxe', 60, 37, '64e78a729c37f.jpg', 1),
(34, 'basket', 20000, 'basket de bonne qualite', 14, 2, '64e78b51b79c7.jpg', 1),
(35, 'chemise grise', 7000, 'chemise de bonne qualite', 23, 1, '64e78f7484c84.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `prenom`, `nom`, `tel`, `adresse`, `email`, `mdp`, `role`) VALUES
(1, 'admin', 'admin', '00000000', 'Sicap', 'admin@gmail.com', 'admin', 'admin'),
(2, 'pathe', 'ndiaye', '77773333333', 'Parcelle', 'pathe@gmail.com', 'passer', 'client'),
(3, 'massaba', 'ndiaye', '7777777777', 'parcelles assainies', 'mas@gmail.com', '12345', 'client'),
(5, 'yama', 'sow', '77777777', 'Parcelle', 'yama@gmail.com', 'passer123', 'client'),
(8, 'mamy', 'ndiaye', '7777777777', 'parcelle', 'mamy@gmail.com', 'passer345', 'client'),
(35, 'ndeye', 'soz', '7777777777', 'sicap', 'ndeye@gmail.com', 'passer123', 'client'),
(36, 'fatou', 'diop', '787757700', 'pikine', 'fatou@gmail.com', 'passer', 'client');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idProduit` (`idProduit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcategorie` (`idcategorie`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`idcategorie`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
