-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 08 jan. 2023 à 17:35
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `deviadux_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

DROP TABLE IF EXISTS `departements`;
CREATE TABLE IF NOT EXISTS `departements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_dep` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CF7489B2990B26CC` (`reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`id`, `name`, `code_dep`, `reg_id`) VALUES
(97, 'Ain', '1', 1),
(98, 'Aisne', '2', 7),
(99, 'Allier', '3', 1),
(100, 'Alpes-de-Haute-Provence', '4', 13),
(101, 'Hautes-Alpes', '5', 13),
(102, 'Alpes-Maritimes', '6', 13),
(103, 'Ardèche', '7', 1),
(104, 'Ardennes', '8', 6),
(105, 'Ariège', '9', 11),
(106, 'Aube', '10', 6),
(107, 'Aude', '11', 11),
(108, 'Aveyron', '12', 11),
(109, 'Bouches-du-Rhône', '13', 13),
(110, 'Calvados', '14', 9),
(111, 'Cantal', '15', 1),
(112, 'Charente', '16', 10),
(113, 'Charente-Maritime', '17', 10),
(114, 'Cher', '18', 4),
(115, 'Corrèze', '19', 10),
(116, 'Corse-du-sud', '2A', 5),
(117, 'Haute-corse', '2B', 5),
(118, 'Côte-d\'or', '21', 2),
(119, 'Côtes-d\'armor', '22', 3),
(120, 'Creuse', '23', 10),
(121, 'Dordogne', '24', 10),
(122, 'Doubs', '25', 2),
(123, 'Drôme', '26', 1),
(124, 'Eure', '27', 9),
(125, 'Eure-et-Loir', '28', 4),
(126, 'Finistère', '29', 3),
(127, 'Gard', '30', 11),
(128, 'Haute-Garonne', '31', 11),
(129, 'Gers', '32', 11),
(130, 'Gironde', '33', 10),
(131, 'Hérault', '34', 11),
(132, 'Ile-et-Vilaine', '35', 3),
(133, 'Indre', '36', 4),
(134, 'Indre-et-Loire', '37', 4),
(135, 'Isère', '38', 1),
(136, 'Jura', '39', 2),
(137, 'Landes', '40', 10),
(138, 'Loir-et-Cher', '41', 4),
(139, 'Loire', '42', 12),
(140, 'Haute-Loire', '43', 1),
(141, 'Loire-Atlantique', '44', 12),
(142, 'Loiret', '45', 4),
(143, 'Lot', '46', 11),
(144, 'Lot-et-Garonne', '47', 10),
(145, 'Lozère', '48', 11),
(146, 'Maine-et-Loire', '49', 12),
(147, 'Manche', '50', 9),
(148, 'Marne', '51', 6),
(149, 'Haute-Marne', '52', 6),
(150, 'Mayenne', '53', 12),
(151, 'Meurthe-et-Moselle', '54', 6),
(152, 'Meuse', '55', 6),
(153, 'Morbihan', '56', 3),
(154, 'Moselle', '57', 6),
(155, 'Nièvre', '58', 2),
(156, 'Nord', '59', 7),
(157, 'Oise', '60', 7),
(158, 'Orne', '61', 9),
(159, 'Pas-de-Calais', '62', 7),
(160, 'Puy-de-Dôme', '63', 1),
(161, 'Pyrénées-Atlantiques', '64', 10),
(162, 'Hautes-Pyrénées', '65', 11),
(163, 'Pyrénées-Orientales', '66', 11),
(164, 'Bas-Rhin', '67', 6),
(165, 'Haut-Rhin', '68', 6),
(166, 'Rhône', '69', 1),
(167, 'Haute-Saône', '70', 2),
(168, 'Saône-et-Loire', '71', 2),
(169, 'Sarthe', '72', 12),
(170, 'Savoie', '73', 1),
(171, 'Haute-Savoie', '74', 1),
(172, 'Paris', '75', 8),
(173, 'Seine-Maritime', '76', 9),
(174, 'Seine-et-Marne', '77', 8),
(175, 'Yvelines', '78', 8),
(176, 'Deux-Sèvres', '79', 10),
(177, 'Somme', '80', 7),
(178, 'Tarn', '81', 11),
(179, 'Tarn-et-Garonne', '82', 11),
(180, 'Var', '83', 13),
(181, 'Vaucluse', '84', 13),
(182, 'Vendée', '85', 12),
(183, 'Vienne', '86', 10),
(184, 'Haute-Vienne', '87', 10),
(185, 'Vosges', '88', 6),
(186, 'Yonne', '89', 2),
(187, 'Territoire de Belfort', '90', 2),
(188, 'Essonne', '91', 8),
(189, 'Hauts-de-Seine', '92', 8),
(190, 'Seine-Saint-Denis', '93', 8),
(191, 'Val-de-Marne', '94', 8),
(192, 'Val-d\'oise', '95', 8);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230106002131', '2023-01-06 00:21:35', 146),
('DoctrineMigrations\\Version20230106003133', '2023-01-06 00:31:40', 104);

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `periode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_alert` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic_de_crue` double DEFAULT NULL,
  `lieu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coordonnee_x` double DEFAULT NULL,
  `coordonnee_y` double DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL,
  `polygones` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E10AD400814AA86C` (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `title`, `image`, `periode`, `level_alert`, `pic_de_crue`, `lieu`, `coordonnee_x`, `coordonnee_y`, `dep_id`, `polygones`) VALUES
(1, 'Crues de l’Adour moyen et de la Midouze', 'mont_de_marsant.jpg', '1er au 5 janvier 2021', 'orange', 7.45, 'Mont-de-Marsan', 43.8915, -0.498008, 137, NULL),
(2, 'Crues de l’Arrats-Gimone-Save-Touch', 'beaumont_de_lomagne.jpg', '1er au 5 janvier 2021', 'orange', 3.05, ' Beaumont-de-Lomagne', 43.8811, 0.992782, 179, NULL),
(5, 'Crues de la Charentonne', 'trinite.jpg', '22 au 24 juin 2021', 'orange', 2.43, 'Trinité-de-Réville', 48.9701, 0.5082, 124, NULL),
(6, 'Crues de l’Aisne Vaux', 'rilly_sur_aisne.jpg', '14 au 24 juillet 2021', 'orange', 5.4, 'Rilly-sur-Aisne', 49.49, 4.63309, 104, NULL),
(8, 'Crues de l’Ardèche ', 'gravieres.jpg', '2 au 4 octobre 2021', 'orange', 6.32, 'Les Salelles', 44.4252, 4.09502, 103, NULL),
(10, 'Crues de la Lys', 'merville.jpg', '28 novembre au 2 décembre 2021', 'orange', 2.88, 'Merville', 50.6421, 2.64489, 156, NULL),
(11, 'Crues du Bec du Gave', 'cambo_les_bains.jpg', '9 au 15 décembre', 'rouge', 5.78, 'Cambo-les-Bains', 43.3631, -1.3976, 161, NULL),
(12, 'Crue de la saôme', 'macon.jpg', '20 au 22 juillet', 'orange', 4.81, 'Macon', 46.302723, 4.834103, 168, NULL),
(14, 'Crue de la Loire', 'angers_2019.jpg', '4 au 5 février 2021', 'orange', 4.79, 'Angers', 47.476965, -0.561218, 146, NULL),
(16, 'Crue du Gardon', 'anduze.jpg', '2 au 5 ocobre 2021', 'orange', 3.85, 'Anduze', 44.055711, 3.987693, 127, NULL),
(17, 'Crue de la Garonne', 'reole.jpg', '2 au 5 ocobre 2021', 'orange', 9.5, 'La Réole', 44.579336, -0.034024, 130, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

DROP TABLE IF EXISTS `regions`;
CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`id`, `name`) VALUES
(1, 'Auvergne-Rhône-Alpes'),
(2, 'Bourgogne-Franche-Comté'),
(3, 'Bretagne'),
(4, 'Centre-Val de Loire'),
(5, 'Corse'),
(6, 'Grand Est'),
(7, 'Hauts-de-France'),
(8, 'Île-de-France'),
(9, 'Normandie'),
(10, 'Nouvelle-Aquitaine'),
(11, 'Occitanie'),
(12, 'Pays de la Loire'),
(13, 'Provence-Alpes-Côte d\'Azur');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `departements`
--
ALTER TABLE `departements`
  ADD CONSTRAINT `FK_CF7489B2990B26CC` FOREIGN KEY (`reg_id`) REFERENCES `regions` (`id`);

--
-- Contraintes pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD CONSTRAINT `FK_E10AD400814AA86C` FOREIGN KEY (`dep_id`) REFERENCES `departements` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
