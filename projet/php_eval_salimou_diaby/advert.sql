-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 12 oct. 2023 à 14:25
-- Version du serveur : 8.0.31
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wf3_php_intermediaire_salimou`
--

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

DROP TABLE IF EXISTS `advert`;
CREATE TABLE IF NOT EXISTS `advert` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `postal_code` int NOT NULL,
  `city` varchar(50) NOT NULL,
  `type` enum('Location','Vente') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL,
  `reservation_message` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id`, `title`, `description`, `postal_code`, `city`, `type`, `price`, `reservation_message`) VALUES
(62, 'Chateau', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, 'TEST'),
(61, 'Salon', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(60, 'MA chambre', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(59, 'Le dome', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(58, 'Place', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(57, 'Palace', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(63, 'Ascenceur', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(56, 'MA chambre', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(64, 'Manoir', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(65, 'Maison', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(66, 'Maison', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(67, 'Maison', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(68, 'Chateau', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(69, 'cienema', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(70, 'Chambre', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(71, 'Maison', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(72, 'Sale', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(73, 'Vila', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(74, 'palace', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(75, 'classe', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, NULL),
(76, 'Maison', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente provident quae, voluptates illo culpa ab reiciendis debitis neque placeat eligendi enim suscipit cumque temporibus, consectetur asperiores sequi quaerat in repellendus.\r\n    Inventore', 95400, 'villiers-le-bel', 'Location', 500, 'hukukluo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
