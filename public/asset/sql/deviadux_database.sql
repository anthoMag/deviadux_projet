
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


INSERT INTO `evenements` (`id`, `title`, `periode`, `level_alert`, `pic_de_crue`, `lieu`, `coordonnee_x`, `coordonnee_y`, `dep_id`, `image`) VALUES
(1, 'Crues de l’Adour moyen et de la Midouze', '1er au 5 janvier 2021', 'orange', 7.45, 'Mont-de-Marsan', 43.8915, -0.498008, 137, 'mont_de_marsant.jpg'),
(2, 'Crues de l’Arrats-Gimone-Save-Touch', '1er au 5 janvier 2021', 'orange', 3.05, ' Beaumont-de-Lomagne', 43.8811, 0.992782, 179, 'beaumont_de_lomagne.jpg'), 
(3, 'Crues de la Liane', '14 et 15 janvier 2021', 'orange', 4.4, 'Isques', 50.6757, 1.64379, 159, 'isques.jpg'),
(4, 'Crues de la Garonne marmandaise', '28 janvier au 4 février 2021', 'rouge', 10.2, 'Marmande', 44.4989, 0.156086, 144, 'marmande.jpg'),
(5, 'Crues de la Charentonne', '22 au 24 juin 2021', 'orange', 2.43, 'Trinité-de-Réville', 48.9701, 0.5082, 124, 'trinite.jpg'),
(6, 'Crues de l’Aisne Vaux', '14 au 24 juillet 2021', 'orange', 5.4, 'Rilly-sur-Aisne', 49.49, 4.63309, 144, 'rilly_sur_aisne.jpg'),
(7, 'Crues du Vistre', '14 et 15 septembre 2021', 'orange', 3.71, 'Bernis', 48.9701, 0.5082, 127, 'bernis.jpg'),
(8, 'Crues de l’Ardèche amont', '2 au 4 octobre 2021', 'orange', 6.32, 'Gravières', 44.4252, 4.09502, 103, 'gravieres.jpg'),
(9, 'Crues de l’Ardèche amont', '29 et 30 octobre 2021', 'orange', 6.97, 'Vallon-Pont-d’Arc', 44.4031, 4.38266, 103, 'vallon_pont_darc.jpg'),
(10, 'Crues de la Lys', '28 novembre au 2 décembre 2021', 'orange', 2.88, 'Merville', 50.6421, 2.64489, 156, 'merville.jpg'),
(11, 'Crues du Bec du Gave', '9 au 15 décembre', 'rouge', 5.78, 'Cambo-les-Bains', 43.3631, -1.3976, 161, 'cambo_les_mains.jpg'),
(12, 'Crue de la saôme', '20 au 22 juillet', 'orange', 4.81, 'Macon', 46.302723, 4.834103, 168, 'macom_2018.jpg'),
(13, 'Crue de la Sarthe', '29 au 30 decembre 2001', 'orange', 3.50, 'Cheffes', 47.622998, -0.503046, 146, 'cheffes.JPG'),
(14, 'Crue de la Loire', '4 au 5 février 2021', 'orange', 4.79, 'Ponts-de-Cé', 47.426185, -0.526115, 146, 'angers_2019.jpg'),
(15, 'Crue de la Maine', '2 au 5 février 2021', 'orange', 5.37, 'Angers', 47.478183, -0.555369, 146, 'angers.jpg'),
(16,'Crue du Gardon', '2 au 5 ocobre 2021', 'orange', 3.85, 'Anduze', 44.055711, 3.987693, 127, 'anduze.jpg'),
(17, 'Crue de la Garonne', '2 au 5 ocobre 2021', 'orange', 9.50, 'La Réole', 44.579336, -0.034024, 130, 'reole.jpg');

