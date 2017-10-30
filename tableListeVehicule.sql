-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Lun 30 Octobre 2017 à 14:08
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `listeVehicule`
--

-- --------------------------------------------------------

--
-- Structure de la table `Vehicule`
--

CREATE TABLE `Vehicule` (
  `id` int(11) NOT NULL,
  `type_vehicule` varchar(30) NOT NULL,
  `nom_vehicule` varchar(50) NOT NULL,
  `marque_vehicule` varchar(50) NOT NULL,
  `poids` float NOT NULL,
  `couleur` varchar(15) NOT NULL,
  `annee_sortie` int(11) NOT NULL,
  `nbPorte` int(11) NOT NULL,
  `volume` int(11) NOT NULL,
  `hauteur` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Vehicule`
--

INSERT INTO `Vehicule` (`id`, `type_vehicule`, `nom_vehicule`, `marque_vehicule`, `poids`, `couleur`, `annee_sortie`, `nbPorte`, `volume`, `hauteur`) VALUES
(4, 'moto', 'MERDE', 'saab', 0.15, 'white', 1989, 2000, 2000, 0),
(8, 'camion', 'sovreign', 'Moissonneur', 15.4, 'grey', 2017, 0, 0, 3.1),
(15, 'voiture', 'R21', 'testMarque', 2.3, 'red', 2202, 5, 0, 0),
(21, 'Angel', 'hgfd', 'hgfds', 0.3, 'hgfds', 2091, 0, 300, 0),
(25, 'voiture', 'OSEF', 'Saab', 1.3, 'red', 1993, 5, 0, 0),
(26, 'moto', 'machin', 'jhgfds', 0.15, 'jhgfd', 1989, 0, 300, 0),
(27, 'voiture', 'machin', 'truc', 2.1, 'red', 2011, 3, 0, 0),
(28, 'moto', 'superMoto', 'DS', 0.3, 'grey', 2011, 0, 300, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Vehicule`
--
ALTER TABLE `Vehicule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Vehicule`
--
ALTER TABLE `Vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
