--
-- Database: `cinema-api`
--

-- --------------------------------------------------------

--
-- `users` table structure.
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- `users` table content.
--

INSERT INTO `users` (`id`, `username`) VALUES
(1, 'Florian'),
(2, 'Anaïs'),
(3, 'Clément');
