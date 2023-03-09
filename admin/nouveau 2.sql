DROP TABLE IF EXISTS `bloc_heure`;


CREATE TABLE IF NOT EXISTS `bloc_heure` (
  `id_bloc_heure` int(11) NOT NULL AUTO_INCREMENT,
  `jour` varchar(255) DEFAULT NULL,
  `heure_debut` int(11) DEFAULT NULL,
  `heure_fin` int(11) DEFAULT NULL,
  `ref_classe` int(11) DEFAULT NULL,
  `ref_matiere` int(11) DEFAULT NULL,
  `ref_professeur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_bloc_heure`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  
DROP TABLE IF EXISTS `professeur`;


CREATE TABLE IF NOT EXISTS `professeur` (
  `id_prof` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) DEFAULT NULL,
  `mdp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prof`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1; 
  
DROP TABLE IF EXISTS `classe`;


CREATE TABLE IF NOT EXISTS `classe` (
  `id_classe` int(11) NOT NULL AUTO_INCREMENT,
  `mdp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_classe`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1; 
  
  
DROP TABLE IF EXISTS `devoir`;


CREATE TABLE IF NOT EXISTS `devoir` (
  `id_devoir` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `ref_maiere` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_devoir`)
  );
  
  DROP TABLE IF EXISTS `matiere`;


CREATE TABLE IF NOT EXISTS `matiere` (
  `id_matiere` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_matiere`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1; 
  
DROP TABLE IF EXISTS `direction`;
CREATE TABLE IF NOT EXISTS `direction` (
  `id_direction` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) DEFAULT NULL,
  `mdp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_direction`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1; 
  
  
  
  
  
  
  
  
DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `id_eleve` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) DEFAULT NULL,
  `mdp` int(11) DEFAULT NULL,
  `ref_classe` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_eleve`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1; 

DROP TABLE IF EXISTS `recoit`;
CREATE TABLE IF NOT ExISTS `recoit`(
`ref_eleve`int(11)NOT NULL,
`ref_devoir`int(11)NOT NULL,
PRIMARY KEY(`ref_eleve`,`ref_devoir`)
);
ALTER TABLE `bloc_heure`
	ADD CONSTRAINT `fk_bloc_heure_classe` FOREIGN KEY (`ref_classe`) REFERENCES `classe` (`id_classe`),
	ADD CONSTRAINT `fk_bloc_heure_professeur` FOREIGN KEY (`ref_professeur`) REFERENCES `professeur` (`id_professeur`),
	ADD CONSTRAINT `fk_bloc_heure_matiere` FOREIGN KEY (`ref_matiere`) REFERENCES `classe` (`id_matiere`);


ALTER TABLE `devoir`
	ADD CONSTRAINTS `fk_devoir_matiere` FOREIGN KEY (`ref_matiere`) REFERENCES `matiere` (`id_matiere`);

ALTER TABLE `eleve`
	ADD CONSTRAINTS `fk_eleve_classe` FOREIGN KEY (`ref_classe`) REFERENCES `classe` (`id_classe`);
	
ALTER TABLE `recoit`
	ADD CONSTRAINTS `fk_recoit_eleve` FOREIGN KEY (`ref_eleve`) REFERENCES `eleve` (`id_eleve`),
	ADD CONSTRAINTS `fk_recoit_devoir` FOREIGN KEY (`ref_devoir`) REFERENCES `devoir` (`id_devoir`);














