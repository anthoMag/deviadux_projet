-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 05 jan. 2023 à 23:42
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
