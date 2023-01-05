-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 20 déc. 2022 à 10:15
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

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

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`id`, `reg_id`, `name`, `code_dep`) VALUES
(97, 1, 'Ain', '1'),
(98, 7, 'Aisne', '2'),
(99, 1, 'Allier', '3'),
(100, 13, 'Alpes-de-Haute-Provence', '4'),
(101, 13, 'Hautes-Alpes', '5'),
(102, 13, 'Alpes-Maritimes', '6'),
(103, 1, 'Ardèche', '7'),
(104, 6, 'Ardennes', '8'),
(105, 11, 'Ariège', '9'),
(106, 6, 'Aube', '10'),
(107, 11, 'Aude', '11'),
(108, 11, 'Aveyron', '12'),
(109, 13, 'Bouches-du-Rhône', '13'),
(110, 9, 'Calvados', '14'),
(111, 1, 'Cantal', '15'),
(112, 10, 'Charente', '16'),
(113, 10, 'Charente-Maritime', '17'),
(114, 4, 'Cher', '18'),
(115, 10, 'Corrèze', '19'),
(116, 5, 'Corse-du-sud', '2A'),
(117, 5, 'Haute-corse', '2B'),
(118, 2, 'Côte-d\'or', '21'),
(119, 3, 'Côtes-d\'armor', '22'),
(120, 10, 'Creuse', '23'),
(121, 10, 'Dordogne', '24'),
(122, 2, 'Doubs', '25'),
(123, 1, 'Drôme', '26'),
(124, 9, 'Eure', '27'),
(125, 4, 'Eure-et-Loir', '28'),
(126, 3, 'Finistère', '29'),
(127, 11, 'Gard', '30'),
(128, 11, 'Haute-Garonne', '31'),
(129, 11, 'Gers', '32'),
(130, 10, 'Gironde', '33'),
(131, 11, 'Hérault', '34'),
(132, 3, 'Ile-et-Vilaine', '35'),
(133, 4, 'Indre', '36'),
(134, 4, 'Indre-et-Loire', '37'),
(135, 1, 'Isère', '38'),
(136, 2, 'Jura', '39'),
(137, 10, 'Landes', '40'),
(138, 4, 'Loir-et-Cher', '41'),
(139, 12, 'Loire', '42'),
(140, 1, 'Haute-Loire', '43'),
(141, 12, 'Loire-Atlantique', '44'),
(142, 4, 'Loiret', '45'),
(143, 11, 'Lot', '46'),
(144, 10, 'Lot-et-Garonne', '47'),
(145, 11, 'Lozère', '48'),
(146, 12, 'Maine-et-Loire', '49'),
(147, 9, 'Manche', '50'),
(148, 6, 'Marne', '51'),
(149, 6, 'Haute-Marne', '52'),
(150, 12, 'Mayenne', '53'),
(151, 6, 'Meurthe-et-Moselle', '54'),
(152, 6, 'Meuse', '55'),
(153, 3, 'Morbihan', '56'),
(154, 6, 'Moselle', '57'),
(155, 2, 'Nièvre', '58'),
(156, 7, 'Nord', '59'),
(157, 7, 'Oise', '60'),
(158, 9, 'Orne', '61'),
(159, 7, 'Pas-de-Calais', '62'),
(160, 1, 'Puy-de-Dôme', '63'),
(161, 10, 'Pyrénées-Atlantiques', '64'),
(162, 11, 'Hautes-Pyrénées', '65'),
(163, 11, 'Pyrénées-Orientales', '66'),
(164, 6, 'Bas-Rhin', '67'),
(165, 6, 'Haut-Rhin', '68'),
(166, 1, 'Rhône', '69'),
(167, 2, 'Haute-Saône', '70'),
(168, 2, 'Saône-et-Loire', '71'),
(169, 12, 'Sarthe', '72'),
(170, 1, 'Savoie', '73'),
(171, 1, 'Haute-Savoie', '74'),
(172, 8, 'Paris', '75'),
(173, 9, 'Seine-Maritime', '76'),
(174, 8, 'Seine-et-Marne', '77'),
(175, 8, 'Yvelines', '78'),
(176, 10, 'Deux-Sèvres', '79'),
(177, 7, 'Somme', '80'),
(178, 11, 'Tarn', '81'),
(179, 11, 'Tarn-et-Garonne', '82'),
(180, 13, 'Var', '83'),
(181, 13, 'Vaucluse', '84'),
(182, 12, 'Vendée', '85'),
(183, 10, 'Vienne', '86'),
(184, 10, 'Haute-Vienne', '87'),
(185, 6, 'Vosges', '88'),
(186, 2, 'Yonne', '89'),
(187, 2, 'Territoire de Belfort', '90'),
(188, 8, 'Essonne', '91'),
(189, 8, 'Hauts-de-Seine', '92'),
(190, 8, 'Seine-Saint-Denis', '93'),
(191, 8, 'Val-de-Marne', '94'),
(192, 8, 'Val-d oise', '95');

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `dep_id`, `title`, `image`, `periode`, `level_alert`, `pic_de_crue`, `lieu`, `coordonnee_x`, `coordonnee_y`) VALUES
(1, 137, 'Crues de l’Adour moyen et de la Midouze', 'mont_de_marsant.jpg', '1er au 5 janvier 2021', 'orange', 7.45, 'Mont-de-Marsan', 43.8915, -0.498008),
(2, 179, 'Crues de l’Arrats-Gimone-Save-Touch', 'beaumont_de_lomagne.jpg', '1er au 5 janvier 2021', 'orange', 3.05, ' Beaumont-de-Lomagne', 43.8811, 0.992782),
(5, 124, 'Crues de la Charentonne', 'trinite.jpg', '22 au 24 juin 2021', 'orange', 2.43, 'Trinité-de-Réville', 48.9701, 0.5082),
(6, 104, 'Crues de l’Aisne Vaux', 'rilly_sur_aisne.jpg', '14 au 24 juillet 2021', 'orange', 5.4, 'Rilly-sur-Aisne', 49.49, 4.63309),
(8, 103, 'Crues de l’Ardèche ', 'gravieres.jpg', '2 au 4 octobre 2021', 'orange', 6.32, 'Les Salelles', 44.4252, 4.09502),
(10, 156, 'Crues de la Lys', 'merville.jpg', '28 novembre au 2 décembre 2021', 'orange', 2.88, 'Merville', 50.6421, 2.64489),
(11, 161, 'Crues du Bec du Gave', 'cambo_les_bains.jpg', '9 au 15 décembre', 'rouge', 5.78, 'Cambo-les-Bains', 43.3631, -1.3976),
(12, 168, 'Crue de la saôme', 'macon.jpg', '20 au 22 juillet', 'orange', 4.81, 'Macon', 46.302723, 4.834103),
(14, 146, 'Crue de la Loire', 'angers_2019.jpg', '4 au 5 février 2021', 'orange', 4.79, 'Angers', 47.476965, -0.561218),
(16, 127, 'Crue du Gardon', 'anduze.jpg', '2 au 5 ocobre 2021', 'orange', 3.85, 'Anduze', 44.055711, 3.987693),
(17, 130, 'Crue de la Garonne', 'reole.jpg', '2 au 5 ocobre 2021', 'orange', 9.5, 'La Réole', 44.579336, -0.034024);
COMMIT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
