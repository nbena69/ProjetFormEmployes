
--
-- Base de données :  `nb_mesEmployes`
--
CREATE DATABASE IF NOT EXISTS `nb_mesEmployes`
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_general_ci;
USE `nb_mesEmployes`;



--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `numEmp` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` char(6) DEFAULT NULL,
  `nom` char(25) DEFAULT NULL,
  `prenom` char(25) DEFAULT NULL,
  `pwd` char(35) DEFAULT NULL,
  `profil` char(20) DEFAULT NULL,
  `interet` char(20) DEFAULT NULL,
  `message` char(100) DEFAULT NULL,
  PRIMARY KEY (`numEmp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `employe` (`numEmp`, `civilite`, `nom`, `prenom`, `pwd`, `profil`, `interet`, `message`) VALUES
(1, 'Mr', 'VIAL', 'Christian', '47eb752bac1c08c75e30d9624b3e58b7', 'insti', 'achat', 'Je découvre le framework Laravel'),
(2, 'Mr', 'BRIMBEUF', 'Philippe', '8d3152ebd103cea3509c7dcfad8f8c10', 'profe', 'achat', 'Professeur SIO SLAM'),
(3, 'Mr', 'SCHAFFTER', 'Eriam', '8d3152ebd103cea3509c7dcfad8f8c10', 'profe', 'achat', 'Professeur SIO');
