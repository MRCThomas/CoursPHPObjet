-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 17 Février 2021 à 16:27
-- Version du serveur :  10.1.45-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Clinique`
--

-- --------------------------------------------------------

--
-- Structure de la table `Consultation`
--

CREATE TABLE `Consultation` (
  `id_Consultation` int(11) NOT NULL,
  `Date-Heure` int(11) NOT NULL,
  `id_Patient` int(11) NOT NULL,
  `id_Medecin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Medecin`
--

CREATE TABLE `Medecin` (
  `id_Medecin` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Medecin`
--

INSERT INTO `Medecin` (`id_Medecin`, `Nom`, `Prenom`) VALUES
(2, 'Pierre', 'Lorient'),
(3, 'BORGNE', 'Valentin'),
(4, 'OMG', 'FUERTE'),
(5, 'Rodrigo', 'delamuerté'),
(6, 'THOMAS', 'Robin'),
(24, 'Aurevoir', 'Madame'),
(25, 'bernard ', 'boloss'),
(26, 'Marlon', 'Brondo'),
(27, 'bobo', 'nono');

-- --------------------------------------------------------

--
-- Structure de la table `Medicament`
--

CREATE TABLE `Medicament` (
  `id_Medicament` int(11) NOT NULL,
  `nomCommercial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Medicament`
--

INSERT INTO `Medicament` (`id_Medicament`, `nomCommercial`) VALUES
(1, 'Doliprane'),
(2, 'Advil'),
(3, 'Smecta'),
(4, 'SerumOMG');

-- --------------------------------------------------------

--
-- Structure de la table `Patients`
--

CREATE TABLE `Patients` (
  `id_Patient` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Patients`
--

INSERT INTO `Patients` (`id_Patient`, `Nom`, `Prenom`) VALUES
(1, 'Ozvald', 'Pierre'),
(2, 'Boulet', 'Fabrice'),
(3, 'Halliday', 'Johnny'),
(4, 'Bruyere', 'Gerard'),
(5, 'Trabourd', 'Guillaume');

-- --------------------------------------------------------

--
-- Structure de la table `Prescription`
--

CREATE TABLE `Prescription` (
  `id_Prescription` int(11) NOT NULL,
  `id_Consultation` int(11) NOT NULL,
  `id_Medicament` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Consultation`
--
ALTER TABLE `Consultation`
  ADD PRIMARY KEY (`id_Consultation`),
  ADD KEY `id_Patient` (`id_Patient`),
  ADD KEY `id_Medecin` (`id_Medecin`);

--
-- Index pour la table `Medecin`
--
ALTER TABLE `Medecin`
  ADD PRIMARY KEY (`id_Medecin`);

--
-- Index pour la table `Medicament`
--
ALTER TABLE `Medicament`
  ADD PRIMARY KEY (`id_Medicament`);

--
-- Index pour la table `Patients`
--
ALTER TABLE `Patients`
  ADD KEY `numSS` (`id_Patient`);

--
-- Index pour la table `Prescription`
--
ALTER TABLE `Prescription`
  ADD PRIMARY KEY (`id_Prescription`),
  ADD KEY `id_Consultation` (`id_Consultation`),
  ADD KEY `id_Medicament` (`id_Medicament`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Consultation`
--
ALTER TABLE `Consultation`
  MODIFY `id_Consultation` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Medecin`
--
ALTER TABLE `Medecin`
  MODIFY `id_Medecin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `Medicament`
--
ALTER TABLE `Medicament`
  MODIFY `id_Medicament` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Patients`
--
ALTER TABLE `Patients`
  MODIFY `id_Patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `Prescription`
--
ALTER TABLE `Prescription`
  MODIFY `id_Prescription` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Consultation`
--
ALTER TABLE `Consultation`
  ADD CONSTRAINT `Consultation_ibfk_1` FOREIGN KEY (`id_Patient`) REFERENCES `Patients` (`id_Patient`),
  ADD CONSTRAINT `Consultation_ibfk_3` FOREIGN KEY (`id_Consultation`) REFERENCES `Prescription` (`id_Consultation`),
  ADD CONSTRAINT `Consultation_ibfk_4` FOREIGN KEY (`id_Medecin`) REFERENCES `Medecin` (`id_Medecin`);

--
-- Contraintes pour la table `Prescription`
--
ALTER TABLE `Prescription`
  ADD CONSTRAINT `Prescription_ibfk_1` FOREIGN KEY (`id_Medicament`) REFERENCES `Medicament` (`id_Medicament`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
