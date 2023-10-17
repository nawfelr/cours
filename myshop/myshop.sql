-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 sep. 2023 à 15:48
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `myshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` int(5) NOT NULL,
  `reservation_text` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `title`, `description`, `price`, `city`, `postal_code`, `reservation_text`, `image`) VALUES
(1, 'ps5', 'meilleure console', 500, 'POISSY', 78300, 'je reserve', 'téléchargement.jpg'),
(2, 'ps5', 'meilleure console', 500, 'POISSY', 78300, 'je le veux', 'téléchargement.jpg'),
(3, '3DS', 'jai encore perdu mon stylet', 100, 'POISSY', 78300, 'je reserve', '3DS.jpg'),
(4, '3DS', 'jai encore perdu mon stylet', 100, 'POISSY', 78300, '', '3DS.jpg'),
(5, 'nintendo switch', 'mon joycon bug encore ', 250, 'POISSY', 78300, '', 'switch.jpg'),
(6, 'nintendo switch', 'mon joycon bug encore ', 250, 'POISSY', 78300, '', 'switch.jpg'),
(7, 'ps4', 'Mi console mi aspirateur', 200, 'POISSY', 78300, '', 'ps4.jpg'),
(8, 'ps4', 'Mi console mi aspirateur', 200, 'POISSY', 78300, '', 'ps4.jpg'),
(9, 'ps4', 'Mi console mi aspirateur', 200, 'POISSY', 78300, '', 'ps4.jpg'),
(10, 'ps4', 'Mi console mi aspirateur', 200, 'POISSY', 78300, '', 'ps4.jpg'),
(11, 'xbox one x', 'l enfant de la PS5', 300, 'POISSY', 78300, '', 'xbox.jpg'),
(12, 'PS Vita', 'Console portable de chez Sony', 50, 'POISSY', 78300, 'je reserve', 'vita.jpg'),
(14, 'jeux spider man 2 ', 'comme le un mais c est la suite ', 79, 'Versaille', 78500, '', 'spiderman_ 2.jpg'),
(15, 'PC ASUS', 'Asus alors', 800, 'Paris', 75800, NULL, 'asus.jpg'),
(16, 'Mont Fuji', 'Montagne a vendre de bonne qualité et très peu utilisée, prix négociable. ', 80, 'Roubaix', 59456, NULL, 'luke-stackpoole-ej8pKvHDg_c-unsplash.jpg'),
(17, 'macbook 2022', 'mac Apple de 2022', 1800, 'Bordeaux', 99999, NULL, 'images.jpg'),
(18, 'switch', 'console de nintendo', 264, 'Poissy', 78300, NULL, 'switch.jpg'),
(20, 'test', 'test', 999, 'test', 99999, NULL, 'Capture d’écran 2023-09-25 100913.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
