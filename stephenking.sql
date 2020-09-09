-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 09 sep. 2020 à 08:28
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.10-dev

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `stephenking`
--

-- --------------------------------------------------------

--
-- Structure de la table `adaptation`
--

DROP TABLE IF EXISTS `adaptation`;
CREATE TABLE IF NOT EXISTS `adaptation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee_sortie` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `liens` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `adaptation`
--

INSERT INTO `adaptation` (`id`, `titre`, `annee_sortie`, `image`, `type`, `content`, `liens`) VALUES
(7, 'Shining', 1980, 'https://images-na.ssl-images-amazon.com/images/I/81TiKfQeJxL._AC_SL1500_.jpg', 'Film', 'film d\'horreur américano-britannique, est le onzième long métrage réalisé par Stanley Kubrick, avec Jack Nicholson, Shelley Duvall et Danny Lloyd dans les rôles principaux.', 'https://fr.wikipedia.org/wiki/Shining_(film)'),
(8, 'La ligne verte', 2000, 'https://i.pinimg.com/originals/6a/ef/e2/6aefe21d089d55b5d50ab90fc5853d55.jpg', 'Film', 'film américain écrit et réalisé par Frank Darabont, avec Tom Hanks, Michael Clarke Duncan, David Morse et Doug Hutchison dans les rôles principaux.', 'https://fr.wikipedia.org/wiki/La_Ligne_verte_(film)'),
(9, 'The Outsider', 2020, 'https://pbs.twimg.com/profile_images/1266009671132942336/6_J2eeFi_400x400.jpg', 'Série', 'The Outsider est une mini-série dramatique américaine en dix épisodes d’entre 50 et 60 minutes, créée par Richard Price et diffusée entre le 12 janvier et le 8 mars 2020 sur la chaîne HBO aux États-Unis avec Ben Mendelsohn, Cynthia Erivo et Jason Bateman dans les rôles principaux.', 'https://fr.wikipedia.org/wiki/The_Outsider_(s%C3%A9rie_t%C3%A9l%C3%A9vis%C3%A9e)');

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
('DoctrineMigrations\\Version20200901103028', '2020-09-01 10:30:49', 47),
('DoctrineMigrations\\Version20200902102456', '2020-09-02 10:25:21', 108),
('DoctrineMigrations\\Version20200902121455', '2020-09-02 12:15:14', 439),
('DoctrineMigrations\\Version20200902123522', '2020-09-02 12:35:37', 407),
('DoctrineMigrations\\Version20200904074239', '2020-09-04 07:43:24', 467),
('DoctrineMigrations\\Version20200904075051', '2020-09-04 07:51:10', 41),
('DoctrineMigrations\\Version20200904080010', '2020-09-04 08:00:28', 38),
('DoctrineMigrations\\Version20200904080106', '2020-09-04 08:01:23', 38);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `titre`, `url`) VALUES
(7, 'Simetierre', 'https://www.lavisqteam.fr/wp-content/uploads/2019/05/714OW7qXoBL-633x1024.jpg'),
(8, 'Misery', 'https://www.babelio.com/couv/CVT_Misery_6414.jpeg'),
(9, 'Mr Mercedes', 'https://images-na.ssl-images-amazon.com/images/I/51Bk3TVNu0L._SX319_BO1,204,203,200_.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee_sortie` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `liens` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `titre`, `annee_sortie`, `image`, `content`, `liens`) VALUES
(11, 'Shining, l\'enfant lumière', 1977, 'https://p3.storage.canalblog.com/32/39/1299180/102362562_o.jpg', 'Jack Torrance est un homme instruit mais au tempérament colérique. Il tente de reconstruire sa vie et celle de sa famille après la perte de son emploi d’enseignant due à un élan de violence. Ayant arrêté de boire, il accepte un emploi de gardien dans un grand hôtel isolé dans les montagnes, et fermé en hiver. Il emménage dans l’hôtel Overlook (dans les montagnes du Colorado) avec sa femme Wendy et son fils Danny. Ce dernier possède des dons de médium (le shining du titre) et est sensible aux forces surnaturelles. Le jour de son arrivée à l\'hôtel, Danny fait la connaissance de Dick Hallorann, le cuisinier de l\'hôtel, qui possède lui aussi le shining mais à un degré bien moindre que le jeune garçon. Hallorann met en garde Danny contre les dangers de l\'hôtel qui serait doté d\'une conscience, et possédé par des esprits.', 'https://fr.wikipedia.org/wiki/Shining,_l%27enfant_lumi%C3%A8re'),
(12, 'La ligne verte', 1996, 'https://products-images.di-static.com/image/stephen-king-la-ligne-verte-coffret-6-episodes-episode-1-deux-petites-filles-mortes/9782277341550-475x500-1.jpg', 'Aujourd\'hui centenaire et vivant dans une maison de retraite, Paul Edgecombe écrit son histoire. Il était en 1932 le gardien-chef du bloc E (réservé aux condamnés à mort et surnommé « la ligne verte ») du pénitencier de Cold Mountain, en Louisiane. Il tente, avec son équipe composée des gardiens Brutus « Brutal » Howell, Dean Stanton et Harry Terwilliger, de faire en sorte que les conditions de vie soient les plus humaines possibles pour les condamnés mais Percy Wetmore, un gardien nouveau venu qui a des relations haut placées, lui donne du fil à retordre à ce niveau car il ne cesse de harceler les prisonniers. John Caffey, un gigantesque Noir condamné pour le viol et le double meurtre de deux fillettes, fait son arrivée dans le bloc E, où est déjà détenu Édouard Delacroix, un cajun pyromane. Malgré le meurtre affreux pour lequel il est condamné, Caffey semble être d\'un naturel doux et timide.', 'https://fr.wikipedia.org/wiki/La_Ligne_verte_(roman)'),
(13, 'L\'outsider', 2018, 'https://images.epagine.fr/897/9782226435897_1_75.jpg', 'Le corps d\'un jeune garçon de onze ans, qui a été violé et partiellement dévoré, est retrouvé dans un parc de la petite ville de Flint City, dans l\'Oklahoma. Des empreintes digitales et plusieurs témoignages accablants conduisent rapidement l\'enquête vers Terry Maitland, professeur d\'anglais et entraîneur de l\'équipe de jeunes de baseball, père de famille et citoyen respectable. L\'inspecteur Ralph Anderson, dont Maitland a entraîné le fils, l\'arrête publiquement lors d\'un match de baseball. Maitland clame son innocence et fournit un alibi confirmé par des témoins : le jour du meurtre, il était dans une ville distante de cent kilomètres pour assister à une conférence.', 'https://fr.wikipedia.org/wiki/L%27Outsider_(roman)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
