-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 16 mai 2021 à 19:38
-- Version du serveur :  8.0.23
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autocompletion`
--
CREATE DATABASE IF NOT EXISTS `autocompletion` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `autocompletion`;

-- --------------------------------------------------------

--
-- Structure de la table `stars`
--

DROP TABLE IF EXISTS `stars`;
CREATE TABLE IF NOT EXISTS `stars` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `age` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `stars`
--

INSERT INTO `stars` (`id`, `nom`, `prenom`, `alias`, `age`) VALUES
(1, 'Astier', 'Alexandre', 'Roi Arthur', 46),
(2, 'Astier', 'Simon', 'Yvain', 37),
(3, 'Astier', 'Lionel', 'Léodagan', 0),
(4, 'Radcliffe', 'Daniel', 'Harry Potter', 31),
(5, 'Watson', 'Emma', 'Hermione Granger', 31),
(6, 'Grint', 'Rupert', 'Ron Weasley', 32),
(7, 'Efron', 'Zac', NULL, 33),
(8, 'Johnson', 'Dwayne', 'The Rock', 48),
(9, 'DiCaprio', 'Leonardo', 'Jack', 46),
(10, 'Depardieu', 'Gérard', NULL, 72),
(11, 'Baer', 'Édouard', NULL, 54),
(12, 'Clavier', 'Christian', NULL, 68),
(13, 'Richard', 'Pierre', 'Le Grand Blond', 86),
(14, 'Berry', 'Richard', NULL, 70),
(15, 'Delon', 'Alain', 'Le plus beau acteur du cinéma français', 85),
(16, 'Deneuve', 'Catherine', NULL, 77),
(17, 'Bouquet', 'Carole', NULL, 63),
(18, 'Belmondo', 'Jean-Paul', 'Le Professionnel', 88),
(19, 'Chabat', 'Alain', 'Serge Karamazov', 62),
(20, 'Lauby', 'Chantal', 'Odile Deray', 73),
(21, 'Farrugia', 'Dominique', 'Simon Jérémi', 58),
(22, 'Auteuil', 'Daniel', NULL, 71),
(23, 'Reno', 'Jean', NULL, 72),
(24, 'Blier', 'Bertrand', NULL, 82),
(25, 'Dewaere', 'Patrick', NULL, 35),
(26, 'Ardant', 'Fanny', NULL, 72),
(27, 'Lhermitte', 'Thierry', NULL, 68),
(28, 'Blanc', 'Michel', NULL, 69),
(29, 'Balasko', 'Josiane', NULL, 71),
(30, 'Chazel', 'Marie-Anne', NULL, 69),
(31, 'Maunier', 'Jean-Baptiste', 'le jeune acteurs des choristes qui est devenu manequin', 30),
(32, 'Merad', 'Kad', NULL, 57),
(33, 'Leconte', 'Patrice', NULL, 73),
(34, 'Bourguignon', 'Anne', 'Anémone', 68),
(35, 'Berléand', 'François', NULL, 68),
(36, 'Lanvin', 'Gérard', NULL, 70),
(37, 'Rochefort', 'Jean', NULL, 87),
(38, 'Marielle', 'Jean-Pierre', NULL, 87),
(39, 'Niney', 'Pierre', NULL, 32),
(40, 'Efira', 'Virginie', NULL, 43),
(41, 'Civil', 'François', NULL, 31),
(42, 'Gallienne', 'Guillaume', NULL, 49),
(43, 'Girardot', 'Ana', NULL, 32),
(44, 'Garrel', 'Louis', NULL, 37),
(45, 'Le Bon', 'Charlotte', NULL, 34),
(46, 'Wilson', 'Lambert', NULL, 62),
(47, 'Lacoste', 'Vincent', NULL, 27),
(48, 'Cohen', 'Jonathan', 'Serge le Mytho', 40),
(49, 'Canet', 'Guillaume', NULL, 48),
(50, 'Cotillard', 'Marion', NULL, 45),
(51, 'Lellouche', 'Gilles', NULL, 48),
(52, 'Cluzet', 'François', NULL, 65),
(53, 'Dujardin', 'Jaen', 'Jean', 48),
(54, 'Tillier', 'Doria', NULL, 35),
(55, 'Lafitte', 'Laurent', NULL, 47),
(56, 'Cassel', 'Vincent', NULL, 54),
(57, 'Tautou', 'Audrey', 'Amélie Poulain', 44);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
