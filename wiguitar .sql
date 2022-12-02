-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 02 déc. 2022 à 12:40
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wiguitar`
--

-- --------------------------------------------------------

--
-- Structure de la table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `id_addresses` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(50) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `complement` varchar(50) DEFAULT NULL,
  `id_users` int(11) NOT NULL,
  PRIMARY KEY (`id_addresses`),
  KEY `id_users` (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `addresses`
--

INSERT INTO `addresses` (`id_addresses`, `street`, `zip_code`, `city`, `complement`, `id_users`) VALUES
(1, '9 du cerisier', 53000, 'st-claire', NULL, 1),
(2, '15 rue de la forêt', 72500, 'ouranne', NULL, 2),
(3, '15 rue aristide', 53290, 'sablé-sur-sarthe', '', 3);

-- --------------------------------------------------------

--
-- Structure de la table `basket`
--

DROP TABLE IF EXISTS `basket`;
CREATE TABLE IF NOT EXISTS `basket` (
  `id_basket` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  PRIMARY KEY (`id_basket`) KEY_BLOCK_SIZE=3 USING BTREE,
  KEY `id_users` (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `basket`
--

INSERT INTO `basket` (`id_basket`, `id_users`) VALUES
(3, 1),
(1, 6),
(2, 8),
(19, 8),
(20, 8),
(21, 8),
(22, 8),
(23, 8),
(24, 8),
(25, 8),
(26, 8);

-- --------------------------------------------------------

--
-- Structure de la table `deliverys`
--

DROP TABLE IF EXISTS `deliverys`;
CREATE TABLE IF NOT EXISTS `deliverys` (
  `id_deliverys` int(11) NOT NULL AUTO_INCREMENT,
  `delivery_date` datetime NOT NULL,
  `delivery_number` varchar(50) NOT NULL,
  `id_deliverys_status` int(11) NOT NULL,
  `id_addresses` int(11) NOT NULL,
  PRIMARY KEY (`id_deliverys`),
  UNIQUE KEY `dlivery_number` (`delivery_number`),
  KEY `id_deliverys_status` (`id_deliverys_status`),
  KEY `id_addresses` (`id_addresses`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `deliverys`
--

INSERT INTO `deliverys` (`id_deliverys`, `delivery_date`, `delivery_number`, `id_deliverys_status`, `id_addresses`) VALUES
(1, '2022-10-13 16:53:28', '15', 1, 1),
(2, '2022-10-13 16:53:28', '16', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `deliverys_status`
--

DROP TABLE IF EXISTS `deliverys_status`;
CREATE TABLE IF NOT EXISTS `deliverys_status` (
  `id_deliverys_status` int(11) NOT NULL AUTO_INCREMENT,
  `label_delivery_status` varchar(60) NOT NULL,
  PRIMARY KEY (`id_deliverys_status`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `deliverys_status`
--

INSERT INTO `deliverys_status` (`id_deliverys_status`, `label_delivery_status`) VALUES
(1, 'En cours de préparation'),
(2, 'En cours d\'expédition'),
(3, 'Expédiée'),
(4, 'Livrée');

-- --------------------------------------------------------

--
-- Structure de la table `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE IF NOT EXISTS `features` (
  `id_features` int(11) NOT NULL AUTO_INCREMENT,
  `maker` varchar(50) NOT NULL,
  `body_material` varchar(50) NOT NULL,
  `handle_material` varchar(50) NOT NULL,
  `number_frets` int(11) NOT NULL,
  `number_strings` int(11) NOT NULL,
  `settings` varchar(50) DEFAULT NULL,
  `switch_micro` varchar(50) DEFAULT NULL,
  `id_products` int(11) NOT NULL,
  PRIMARY KEY (`id_features`),
  KEY `maker` (`maker`) USING BTREE,
  KEY `body_material` (`body_material`) USING BTREE,
  KEY `handle_material` (`handle_material`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `features`
--

INSERT INTO `features` (`id_features`, `maker`, `body_material`, `handle_material`, `number_frets`, `number_strings`, `settings`, `switch_micro`, `id_products`) VALUES
(1, 'Aucun', 'Aucun', 'Aucun', 0, 0, 'Aucun', 'Aucun', 1),
(2, 'Yamaha', 'Acajou', 'Maple', 22, 6, 'volume,tone', '5 voie', 2),
(3, 'Ibanez', 'accacia', 'erable', 24, 6, 'volume, tone', '5 voie', 3),
(4, 'fender', 'Sapin', 'Bambou', 22, 6, 'volume, tone', '5 voie', 4),
(5, 'Ibanez', 'Acajou', 'Erable', 24, 6, 'volume', '5 voie', 5),
(6, 'Yamaha', 'Chêne', 'Boulot', 21, 6, 'volume, tone', '5 voie', 6),
(7, 'ESP', 'Acajou', 'Maple', 24, 6, 'volume, tone', '5 voie', 7),
(9, 'Ibanez', 'Acajou', 'Erable', 24, 6, 'volume', '5 voie', 9),
(10, 'Ibanez', 'Accacia', 'Erable', 24, 6, 'volume', '5 voie', 10),
(11, 'Yamaha', 'Accacia', 'Boulot', 22, 6, 'Aucun', 'Aucun', 11),
(12, 'ESP', 'Acajou', 'Erable', 24, 6, 'Volume', '2 voie', 12);

-- --------------------------------------------------------

--
-- Structure de la table `holds`
--

DROP TABLE IF EXISTS `holds`;
CREATE TABLE IF NOT EXISTS `holds` (
  `id_products` int(11) NOT NULL,
  `id_basket` int(11) NOT NULL,
  `quantity` int(15) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_products`,`id_basket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `holds`
--

INSERT INTO `holds` (`id_products`, `id_basket`, `quantity`) VALUES
(4, 2, 1),
(5, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id_orders` int(11) NOT NULL AUTO_INCREMENT,
  `labels` varchar(60) DEFAULT NULL,
  `orders_date` datetime NOT NULL,
  `orders_received_date` datetime NOT NULL,
  `sum_total` decimal(7,2) DEFAULT NULL,
  `status` enum('vendu','facturée','annulée') DEFAULT NULL,
  `pdf` varchar(50) DEFAULT NULL,
  `id_deliverys` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  PRIMARY KEY (`id_orders`),
  KEY `id_deliverys` (`id_deliverys`),
  KEY `id_users` (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id_orders`, `labels`, `orders_date`, `orders_received_date`, `sum_total`, `status`, `pdf`, `id_deliverys`, `id_users`) VALUES
(1, 'Ibanez', '2022-10-13 14:55:07', '2022-10-13 14:55:07', '275.00', 'vendu', NULL, 1, 1),
(2, 'Ibanez', '2022-10-13 14:55:07', '2022-10-13 14:55:07', '275.00', 'vendu', NULL, 2, 2),
(3, 'jesaispasnonplus', '2022-10-19 00:00:00', '2022-10-28 00:00:00', '250.00', 'vendu', NULL, 1, 1),
(4, 'jesaispas2.0', '2022-10-19 00:00:00', '2022-10-21 00:00:00', '300.00', 'vendu', NULL, 1, 3),
(5, 'nimporte', '2022-10-18 00:00:00', '2022-10-20 00:00:00', '175.00', 'facturée', NULL, 2, 2),
(6, 'commande numéro 001', '2022-10-20 00:00:00', '2022-10-27 00:00:00', '500.00', 'facturée', NULL, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `orders_line`
--

DROP TABLE IF EXISTS `orders_line`;
CREATE TABLE IF NOT EXISTS `orders_line` (
  `id_orders_line` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `id_orders` int(11) NOT NULL,
  PRIMARY KEY (`id_orders_line`),
  KEY `id_products` (`id_products`),
  KEY `id_orders` (`id_orders`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders_line`
--

INSERT INTO `orders_line` (`id_orders_line`, `amount`, `id_products`, `id_orders`) VALUES
(1, 269, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id_products` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `description` varchar(1200) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `type` enum('électrique','classique','folk') DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_products`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id_products`, `name`, `description`, `price`, `type`, `image`) VALUES
(1, 'Ibanez Gio-GRGR221PA-AQB Aqua Burst', 'Avec la Ibanez Gio GRGR221PA-AQB Aqua Burst, Ibanez propose un équipement haut de gamme absolu à un prix d\'entrée de gamme ! La guitare électrique de la série Gio présente le design RG mince classique sous la forme d\'un corps en okoumé avec un placage de peuplier grainé chic et s\'appuie sur le profil de manche GRGR mince bien connu pour des caractéristiques de jeu optimales dans toutes les positions. ', '279.00', 'électrique', NULL),
(2, 'Ibanez Artcore AS53-SRF Sunburst Red Flat', 'L\'Ibanez Artcore AS53-SRF Sunburst Red Flat Semi Hollow de la série Ibanez Artcore combine le design double-cut agile de l\'AM53 avec un plus grand volume de corps et se présente comme une guitare électrique polyvalente allant des cleans jazzy au crunch classique de Blues en passant par le son riche en gain du rock moderne.', '331.00', 'électrique', '/img_product/ibanez_artcore.webp'),
(3, 'Yamaha Pacifica 012 DBM Dark Bleu métallique', 'Le moins cher 012 impressionne également avec la même carrosserie à double coupe qui a fait du Pacifica 112 un best-seller absolu. Un humbucker puissant dans le chevalet et deux versions à bobine simple en position centrale et au cou.', '247.00', 'électrique', NULL),
(4, 'Yamaha CGX 122 MC', 'Grâce à sa construction exceptionnellement légère composée d\'une table en cèdre massif sur un corps en nato laminé, la Yamaha CGX 122 MC produit un son puissant et équilibré. Cette guitare de concert 4/4 convient donc aussi bien aux débutants qu\'aux joueurs confirmés.', '389.00', 'classique', '/img_product/yamaha-cgx.webp'),
(5, 'ESP LTD MH-17 Black', 'Le ESP LTD MH-17 Black avec son prix attractif et ses caractéristiques de jeu optimales est l\'entrée idéale dans le monde des guitares à gamme étendue. ', '259.00', 'électrique', '/img_product/esp-ltd-mh.webp'),
(6, 'ESP LTD SN-200HT Dark Metallic Purple Satin', 'La conversion électrique de la sonorité de la guitare ESP LTD SN-200HT est assurée par deux humbuckers ESP Designed LH-150, dont la sortie puissante donne à l\'ampli de la guitare une véritable impulsion en cas de besoin.', '444.00', 'électrique', '/img_product/esp-ltd-sn-200ht.webp'),
(7, 'Fender Player Offset Duo-Sonic HS MN Crimson Red Transparent', 'La série Fender Player Duo-Sonic HS MN Crimson Red Transparent représente le modèle d\'étude populaire en design offset de 1956 . La guitare électrique, construite à partir d\'ingrédients classiques avec une construction électronique simple , est synonyme de sons distinctifs d\'une bobine simple Duo-Sonic ainsi que d\'un humbucker sur le chevalet.', '654.00', 'électrique', '/img_product/fender-player-offset-duo.webp'),
(9, 'Ibanez Gio GRGR131EX-BKF Black Flat', 'Avec la Ibanez Gio GRGR131EX-BKF Black Flat, Ibanez propose une guitare électrique élégante et abordable pour les amateurs de métal. Entièrement dans les tons noir et gris, la GRGR131EX d\'Ibanez possède un corps en peuplier au design RG et un manche en érable extrêmement confortable avec la touche en amaranth.', '239.00', 'électrique', '/img_product/ibanez-gio-grgr131.webp'),
(10, 'Ibanez S521-BBS Blackberry Sunburst', 'La Série S fait partie de la gamme Ibanez depuis 1987 et jouit d\'une grande popularité depuis lors. La particularité d\'une Ibanez S-guitare est le corps mince et aérodynamique en acajou, ce qui donne à la guitare une très bonne ergonomie.', '399.00', 'électrique', '/img_product/ibanez-s521-bbs.webp'),
(11, 'Yamaha F 310 TBS', 'La Yamaha F 310 TBS est un excellent choix pour les débutants grâce à sa construction robuste et sa longueur de gamme raccourcie. La haute qualité de Hardware et le traitement propre garantissent en outre des succès d\'apprentissage rapides. Grâce à sa construction stratifiée et légère, l\'instrument produit un son très puissant et chaud qui se déploie rapidement et sur une large zone. La guitare acoustique est complétée par une finition noble et brillante.', '149.00', 'folk', '/img_product/yamaha-f-310.webp');

-- --------------------------------------------------------

--
-- Structure de la table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `id_stocks` int(11) NOT NULL AUTO_INCREMENT,
  `id_products` int(11) NOT NULL,
  `stock_min` varchar(50) NOT NULL,
  `stock_max` varchar(50) NOT NULL,
  `nbr_products` varchar(50) NOT NULL,
  PRIMARY KEY (`id_stocks`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stocks`
--

INSERT INTO `stocks` (`id_stocks`, `id_products`, `stock_min`, `stock_max`, `nbr_products`) VALUES
(1, 1, '0', '20', '15'),
(2, 2, '0', '15', '10'),
(3, 3, '0', '12', '5'),
(4, 4, '0', '10', '4'),
(5, 5, '0', '12', '7'),
(6, 6, '0', '15', '15'),
(7, 7, '0', '10', '8'),
(9, 9, '0', '10', '3'),
(10, 10, '0', '10', '10'),
(11, 11, '0', '15', '10'),
(12, 12, '0', '15', '14');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_users`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `phone_number` (`phone_number`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `firstname`, `lastname`, `mail`, `password`, `phone_number`) VALUES
(1, 'fabien', 'pistary', 'fabien.pistary@gmail.com', 'motdepassecommeça', '0625456325'),
(2, 'louis', 'jean-charles', 'louis.charles@gmail.com', 'deuxiememdphasardeux', '0647859878'),
(3, 'monsieur', 'lamort', 'mrlamort@gmail.com', 'jesuislamort', '0642586325'),
(4, 'Aimé', 'Garain', 'aimé.garain@gmail.com', 'aiméeeee', '0745124556'),
(6, 'James', 'Bond', 'james.bond@gmail.com', '$2y$10$mqquYnVMMNzzAV/G.CGP0.hUpN/Wo0wALIAbaaHuQVwoxjje3ChpG', '0070070070'),
(8, 'azerty', 'azerty', 'azerty@gmail.com', '$2y$10$sOz3Vj.cX0z4AHqi3g9fze4QjXmGzsBPMgfvI50rk32oN0cWJr6Ci', '0745896325');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `deliverys`
--
ALTER TABLE `deliverys`
  ADD CONSTRAINT `deliverys_ibfk_1` FOREIGN KEY (`id_deliverys_status`) REFERENCES `deliverys_status` (`id_deliverys_status`),
  ADD CONSTRAINT `deliverys_ibfk_2` FOREIGN KEY (`id_addresses`) REFERENCES `addresses` (`id_addresses`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_deliverys`) REFERENCES `deliverys` (`id_deliverys`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
