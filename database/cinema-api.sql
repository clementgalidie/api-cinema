-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 11 Juillet 2014 à 11:22
-- Version du serveur: 5.6.11-log
-- Version de PHP: 5.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cinema-api`
--
CREATE DATABASE IF NOT EXISTS `cinema-api` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cinema-api`;

-- --------------------------------------------------------

--
-- Structure de la table `junction`
--

CREATE TABLE IF NOT EXISTS `junction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `likes` tinyint(1) NOT NULL DEFAULT '0',
  `dislikes` tinyint(1) NOT NULL DEFAULT '0',
  `watched` int(11) NOT NULL DEFAULT '0',
  `watchlist` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `junction`
--

INSERT INTO `junction` (`id`, `id_user`, `id_movie`, `likes`, `dislikes`, `watched`, `watchlist`) VALUES
(1, 3, 1, 1, 0, 0, 0),
(2, 4, 2, 0, 1, 0, 0),
(3, 4, 2, 0, 0, 1, 0),
(4, 6, 1, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `cover` varchar(128) NOT NULL,
  `genre` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `cover`, `genre`) VALUES
(1, 'Movie 1', 'assets/images/cover.jpg', 1),
(2, 'Movie 2', 'assets/images/cover.jpg', 2),
(3, 'Movie 3', 'assets/images/cover.jpg', 3),
(4, '', '', 0),
(6, 'Test', 'assets/images/cover_test.jpg', 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`) VALUES
(7, 'New user!'),
(6, 'Lucas'),
(3, 'Mathieu'),
(4, 'Anaïs'),
(5, 'Test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
