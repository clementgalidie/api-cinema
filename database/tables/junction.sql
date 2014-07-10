--
-- Database: `cinema-api`
--

-- --------------------------------------------------------

--
-- `junction` table structure
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- `junction` table content.
--

INSERT INTO `junction` (`id`, `id_user`, `id_movie`, `likes`, `dislikes`, `watched`, `watchlist`) VALUES
(1, 3, 1, 1, 0, 0, 0);