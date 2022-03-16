

--
-- Base de données : `projetmessage`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `Email` varchar(40) NOT NULL,
  `Username` varchar(70) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `idC` int(30) NOT NULL AUTO_INCREMENT,
  `emailSendMessage` varchar(50) NOT NULL,
  `emailTakeMessage` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(120) NOT NULL,
  PRIMARY KEY (`idC`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;



