-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 mai 2023 à 13:10
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
-- Base de données : `madina`
--

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `id` int(200) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `date_naissance` date NOT NULL,
  `date_admistion` date NOT NULL,
  `personne_prevenir` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `form`
--

INSERT INTO `form` (`id`, `nom`, `prenom`, `genre`, `date_naissance`, `date_admistion`, `personne_prevenir`) VALUES
(1, 'DABONE', 'Madina ', 'feminin', '2001-10-20', '2023-02-06', 72340651),
(2, 'Garba', 'Faridatou', 'feminin', '2003-08-27', '2021-12-11', 70281686),
(3, 'OUEDRAOGO', 'Ravigwaogo Odile', 'feminin', '2000-12-12', '2020-11-11', 70053631),
(4, 'ANGE', 'ANGE', 'feminin', '2002-06-06', '2023-05-23', 23450),
(5, 'DICKO', 'Boureima', 'masculin', '1991-02-10', '2000-10-10', 74593366),
(6, 'TIENDREBEOGO', 'Adéline Joceline', 'feminin', '1990-10-15', '2023-05-23', 62518756),
(7, 'CISSE', 'Amadou', 'masculin', '2023-05-23', '2023-05-19', 3),
(8, 'Dao', 'razak', 'masculin', '2000-12-25', '2014-04-16', 1),
(9, 'OUEDRAOGO', 'SAFI', 'feminin', '2023-05-10', '2023-06-01', 70072525),
(10, 'OUEDRAOGO', 'Henri', 'masculin', '2003-09-13', '2023-02-06', 76520804),
(11, 'YELYAORE', 'Eudes', 'masculin', '1991-10-22', '2023-02-03', 70662501),
(12, 'KABORE', 'Sadia', 'feminin', '2023-05-11', '2023-05-11', 76224050),
(13, 'SAOUADOGO', 'Passing Abdel Aziz Hermann', 'masculin', '2023-02-25', '2001-02-25', 56787434),
(14, 'DABONE', 'Madina ', 'feminin', '2023-05-22', '2023-05-22', 75564550);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
