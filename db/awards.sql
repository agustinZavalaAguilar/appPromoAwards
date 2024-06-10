-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 juin 2024 à 16:52
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
-- Base de données : `awards`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

CREATE TABLE `candidat` (
  `id_candidat` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `url_avatar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`id_candidat`, `id_role`, `nom`, `prenom`, `url_avatar`) VALUES
(43, 1, 'Maurice', 'Barnabé', 'public\\image\\Apprenants\\barnabe.png'),
(44, 1, 'Marchand', 'Christophe', 'public\\image\\Apprenants\\christophe.png'),
(45, 1, 'Sochard', 'Kilian', 'public\\image\\Apprenants\\kilian.png'),
(46, 1, 'Chedaille', 'Martin', 'public\\image\\Apprenants\\martin.png'),
(47, 1, 'Rouly', 'Annaelle', 'public\\image\\Apprenants\\annaelle.png'),
(48, 1, 'Delmas', 'Noe', 'public\\image\\Apprenants\\noe.png'),
(49, 1, 'Vincent', 'Stephane', 'public\\image\\Apprenants\\stephane.png'),
(50, 1, 'Puyestier', 'Vincent', 'public\\image\\Apprenants\\vincent.png'),
(51, 1, 'Benoist', 'Cyril', 'public\\image\\Apprenants\\cyril.png'),
(52, 1, 'Zavala', 'Agustin', 'public\\image\\Apprenants\\agustin.png'),
(53, 2, 'Leydier', 'Christophe', 'public\\image\\Formateurs\\christophe.png'),
(54, 2, 'Turquois', 'Laetitia', 'public\\image\\Formateurs\\laetitia.png'),
(55, 2, 'Trancard', 'Tony', 'public\\image\\Formateurs\\tony.png'),
(56, 2, 'Tetart', 'Cedric', 'public\\image\\Formateurs\\cedric.png'),
(57, 2, 'Fontaine', 'Luc', 'public\\image\\Formateurs\\luc.png');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `nom_categorie` varchar(150) NOT NULL,
  `description_categorie` varchar(150) NOT NULL,
  `url_smiley` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `id_role`, `nom_categorie`, `description_categorie`, `url_smiley`) VALUES
(1, 1, 'Le radieux', 'Prix destiné à l\'élevé qui éblouit en passant', 'public\\image\\smiley\\radieux.png'),
(3, 1, 'L\'ami de tous', 'Prix destiné à élève le plus social', 'public\\image\\smiley\\ami.png'),
(4, 1, 'Le fêtard', 'Prix destiné à l\'élève le plus festif', 'public\\image\\smiley\\fetard.png'),
(5, 1, 'Le titan du travail', 'Le prix destiné à l\'élève le plus bosseur et sérieux', 'public\\image\\smiley\\titan.png'),
(6, 1, 'Le Designer', 'Prix destiné à l\'élève qui adore le design et le front', 'public\\image\\smiley\\designer.png'),
(7, 1, 'Le Codeur émérite', 'Prix destiné à l\'élève qui s\'est marié avec le code et dans les méandres les plus obscurs de Visual Studio', 'public\\image\\smiley\\codeur.png'),
(8, 1, 'La fusée de l\'animation', 'Prix destiné à l\'élève le plus fun et jamais à court de blague', 'public\\image\\smiley\\fusee.png'),
(9, 1, 'Le râleur ou grincheux', 'Prix destiné à l\'élève le plus frustré et le plus grognon', 'public\\image\\smiley\\raleur.png'),
(10, 2, 'Le défenseur de la patience', 'Prix destiné au prof qui fait preuve d\'une patience exceptionnelle dans toutes les situations', 'public\\image\\smiley\\patient.png'),
(11, 2, 'Le comique magistral', 'Prix destiné au prof qui apporte la joie et le rire dans la salle de classe avec son humour exceptionnel et sa capacité à rendre l\'apprentissage amusa', 'public\\image\\smiley\\comique.png'),
(12, 2, 'L\'étourdi', 'Prix destiné au prof maladroit, inattentif ou distrait', 'public\\image\\smiley\\etourdi.png');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nom_role` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `nom_role`) VALUES
(1, 'apprenant'),
(2, 'formateur');

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

CREATE TABLE `vote` (
  `email` varchar(150) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_candidat` int(11) NOT NULL,
  `date_heure` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `statut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`id_candidat`),
  ADD KEY `id_role` (`id_role`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`),
  ADD KEY `id_role` (`id_role`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`email`,`id_categorie`,`id_candidat`),
  ADD KEY `email` (`id_categorie`,`id_candidat`),
  ADD KEY `fk_id_candidat` (`id_candidat`),
  ADD KEY `id_categorie` (`id_categorie`,`id_candidat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `id_candidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD CONSTRAINT `fk_id_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `fk_id_role_in_cat` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `fk_id_candidat` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id_candidat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
