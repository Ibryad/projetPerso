
create table if not exists client(
    id_client int(11) NOT NULL auto_increment,
	nom varchar(30) NOT NULL,
	prenom varchar(30) NOT NULL,
	email varchar(50) NOT NULL,
	PRIMARY KEY (id_client)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE if not exists reservation(
    id_reservation int(11) NOT NULL auto_increment,
	nombre_de_place varchar(50) NOT NULL,
	tarif_appliquee varchar(50) NOT NULL,
	date_res date NOT NULL,
	ref_client int(11) NOT NULL,
	ref_tarif int(11) NOT NULL,
	ref_salle int(11) NOT NULL,
	PRIMARY KEY (id_reservation)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS tarif(
    id_tarif int(11) NOT NULL auto_increment,
	nom VARCHAR(15) NOT NULL,
	prix_unitaire varchar(50) NOT NULL,
	description VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_tarif)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS salle(
    id_salle int(11) NOT NULL auto_increment,
	nombre_siege VARCHAR(50) NOT NULL,
	nom varchar(50) NOT NULL,
	ref_film int(11) NOT NULL,
    PRIMARY KEY (id_salle)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS film(
    id_film int(11) NOT NULL auto_increment,
	titre VARCHAR(15) NOT NULL,
	annee_sortie varchar(50) NOT NULL,
	description varchar(50) NOT NULL,
    PRIMARY KEY (id_film)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;



ALTER TABLE reservation
    
	ADD CONSTRAINT "fk_reservation_client" FOREIGN KEY (ref_client) REFERENCES client(id_client),
	ADD CONSTRAINT "fk_reservation_tarif" FOREIGN KEY (ref_tarif) REFERENCES tarif(id_tarif),
	ADD CONSTRAINT "fk_reservation_salle" FOREIGN KEY (ref_salle) REFERENCES salle(id_salle);
	
	
	ALTER TABLE salle
    
	ADD CONSTRAINT fk_salle_film FOREIGN KEY (ref_film) REFERENCES film(id_film);

