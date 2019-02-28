-- phpMyAdmin SQL Dump
-- http://www.phpmyadmin.net
-- Testdaten für die Datenbank legt einen Benutzer admin an
-- Zum einloggen steht dann benutzer admin und als passwort admin bereit.
--
-- Tabellenstruktur für die Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `passwd` varchar(40) NOT NULL DEFAULT '',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Daten für Tabell `user`
--

INSERT INTO `user` (`id`, `name`, `passwd`, `active`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

-- --------------------------------------------------------
