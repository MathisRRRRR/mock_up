-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 20 nov. 2020 à 23:05
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `questionbank`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'answer identifier',
  `Answer_text` varchar(255) NOT NULL COMMENT 'text of the answer',
  `Is_valid_answer` tinyint(1) NOT NULL COMMENT 'valid answer for question',
  `Answer_question_id` int(11) NOT NULL COMMENT 'question related',
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `answer`
--

INSERT INTO `answer` (`answer_id`, `Answer_text`, `Is_valid_answer`, `Answer_question_id`) VALUES
(1, 'Donald Trump', 1, 1),
(2, 'Bill Gates', 0, 1),
(3, 'Harry Potter', 0, 1),
(4, 'Chicago', 0, 2),
(5, 'New York', 1, 2),
(6, 'Washington', 0, 2),
(7, 'Seatle', 0, 2),
(8, '50', 1, 3),
(9, '2009', 0, 4),
(10, '2017', 0, 4),
(11, '2008', 1, 4),
(12, 'Iron Man', 0, 5),
(13, 'The Hulk', 0, 5),
(14, 'Thor', 1, 5),
(15, 'Gimli', 1, 7),
(16, 'Saruman', 0, 7),
(17, 'Frodo', 1, 7),
(18, 'Merry', 1, 7),
(19, 'Thorin', 0, 7),
(20, 'A new Hope', 0, 6),
(21, 'The Return of the Jedi', 0, 6),
(22, 'The Empire strikes back', 0, 6),
(23, 'The force Awaken', 1, 6),
(24, '2017', 1, 8);

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `main` text NOT NULL,
  `header` text NOT NULL,
  `footer` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `links`
--

INSERT INTO `links` (`main`, `header`, `footer`) VALUES
('main.php', 'template/header.php', 'template/footer.php');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'question_identification',
  `question_title` varchar(255) NOT NULL COMMENT 'title of the question',
  `question_quizz_id` int(11) NOT NULL COMMENT 'link question quizz',
  `question_input_type` varchar(255) NOT NULL COMMENT 'input of the question',
  PRIMARY KEY (`question_id`),
  KEY `question_quizz_id_fk` (`question_quizz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`question_id`, `question_title`, `question_quizz_id`, `question_input_type`) VALUES
(1, 'Who is this Man?', 1, 'select'),
(2, 'In which city can we find this statue', 1, 'radio'),
(3, 'how many states in usa ?', 1, 'number'),
(4, 'when was Obama elected ?', 1, 'checkbox'),
(5, 'Which Avenger is this?', 2, 'select'),
(6, 'What is name of the fifth Starwars movie?', 2, 'radio'),
(7, 'Which characters are members of the fellowship of the Ring', 2, 'checkbox'),
(8, 'In which year was Thor ragnorok released?', 2, 'number');

-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

DROP TABLE IF EXISTS `quizz`;
CREATE TABLE IF NOT EXISTS `quizz` (
  `quizz_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Quizz Identifier',
  `quizz_name` varchar(255) NOT NULL COMMENT 'Quizz name',
  PRIMARY KEY (`quizz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `quizz`
--

INSERT INTO `quizz` (`quizz_id`, `quizz_name`) VALUES
(1, 'quizz1'),
(2, 'quizz2');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user identifier',
  `lastname` varchar(255) NOT NULL COMMENT 'user last name',
  `firstname` varchar(255) NOT NULL COMMENT 'user first name',
  `username` longtext NOT NULL COMMENT 'username',
  `email` longtext COMMENT 'user email address',
  `password` varchar(255) NOT NULL COMMENT 'User Password',
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`User_id`, `lastname`, `firstname`, `username`, `email`, `password`) VALUES
(1, 'Test', 'Test', 'TEST', 'test@test.fr', '$2y$10$xPQnQSDwUb/7XWbkzsZB6umUqwf9r3bmhOPcdq138zgW6QQS6WamO');

-- --------------------------------------------------------

--
-- Structure de la table `user_answer`
--

DROP TABLE IF EXISTS `user_answer`;
CREATE TABLE IF NOT EXISTS `user_answer` (
  `user_answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User answer identifier',
  `User_id` int(11) NOT NULL COMMENT 'user identifier',
  `Answer_id` int(11) NOT NULL COMMENT 'answer_id',
  `User_answer_date` timestamp NULL DEFAULT NULL COMMENT 'date of answer user',
  PRIMARY KEY (`user_answer_id`),
  KEY `user_id_fk` (`User_id`),
  KEY `answer_id_fk` (`Answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_quizz_id_fk` FOREIGN KEY (`question_quizz_id`) REFERENCES `quizz` (`quizz_id`);

--
-- Contraintes pour la table `user_answer`
--
ALTER TABLE `user_answer`
  ADD CONSTRAINT `answer_id_fk` FOREIGN KEY (`Answer_id`) REFERENCES `answer` (`answer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
