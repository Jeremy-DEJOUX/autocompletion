CREATE TABLE `stars` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `age` int NOT NULL
);
