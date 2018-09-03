-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 03 sep. 2018 à 09:19
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_projets`
--

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id_projet` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `manager` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `report_date` date NOT NULL,
  `SchedualList` text NOT NULL,
  `CostList` text NOT NULL,
  `QualityList` text NOT NULL,
  `optionsRadios` set('qd','qzd','dz','qz') NOT NULL,
  `direction` varchar(20) NOT NULL,
  PRIMARY KEY (`id_projet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `login` varchar(20) NOT NULL,
  `m2p` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  PRIMARY KEY (`login`,`m2p`),
  UNIQUE KEY `id` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`login`, `m2p`, `role`, `id_user`, `nom`, `prenom`) VALUES
('admin', 'admin', 'administrateur', 1, 'romdhani', 'kamel');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
