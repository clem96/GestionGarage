#------------------------------------------------------------
#-- la base de donnée s'appelle gestionGarage
#------------------------------------------------------------

DROP DATABASE IF EXISTS gestionGarage;

CREATE DATABASE gestionGarage;

USE gestionGarage;

CREATE TABLE clients
(
        idClient      Int Auto_increment  NOT NULL PRIMARY KEY,
        nomClient     Varchar (50) NOT NULL ,
        prenomClient  Varchar (50) NOT NULL ,
        telClient     Varchar (15) NOT NULL ,
        adresseClient Varchar (50) NOT NULL ,
        cpClient      Varchar (5) NOT NULL ,
        villeClient   Varchar (30) NOT NULL
)
ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE vehicules
(
        idVehicule              Int Auto_increment  NOT NULL PRIMARY KEY,
        marqueVehicule          Varchar (50) NOT NULL ,
        modeleVehicule          Varchar (50) NOT NULL ,
        immatriculationVehicule Varchar (9) NOT NULL ,
        klmVehicule             Int NOT NULL ,
        idClient                Int NOT NULL
)
ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE pieces
(
        idPiece      Int Auto_increment  NOT NULL PRIMARY KEY,
        libellePiece Varchar (50) NOT NULL ,
        prixPiece    Float NOT NULL
)
ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE factures
(
        idFacture   Int Auto_increment  NOT NULL PRIMARY KEY,
        dateFacture Varchar (10) NOT NULL
)
ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE reparations
(
        idReparation      Int Auto_increment  NOT NULL PRIMARY KEY,
        libelleReparation Varchar (50) NOT NULL ,
        prixReparation    Float NOT NULL ,
        dateReparation    Varchar (10) NOT NULL ,
        idVehicule        Int NOT NULL ,
        idFacture         Int NOT NULL
)

ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE interventions
(
        idIntervention         Int Auto_increment  NOT NULL PRIMARY KEY,
        quantitePiece          Int NOT NULL ,
        idPiece                Int NOT NULL ,
        idReparation           Int NOT NULL 
)
        
ENGINE=INNODB DEFAULT CHARSET=UTF8;

ALTER TABLE gestionGarage.vehicules ADD CONSTRAINT vehicules_clients_FK FOREIGN KEY (idClient) REFERENCES clients(idClient);
ALTER TABLE gestionGarage.reparations ADD CONSTRAINT reparations_vehicules_FK FOREIGN KEY (idVehicule) REFERENCES vehicules(idVehicule);
ALTER TABLE gestionGarage.reparations ADD CONSTRAINT reparations_factures_FK FOREIGN KEY (idFacture) REFERENCES factures(idFacture);
ALTER TABLE gestionGarage.interventions ADD CONSTRAINT interventions_pieces_FK FOREIGN KEY (idPiece) REFERENCES pieces(idPiece);
ALTER TABLE gestionGarage.interventions ADD CONSTRAINT interventions_reparations_FK FOREIGN KEY (idReparation) REFERENCES reparations(idReparation);


-- Insertion dans l'ordre


INSERT INTO clients (idClient, nomClient, prenomClient, telClient, adresseClient, cpClient, villeClient) VALUES (1, 'Lavachette', 'Pierrette', '0720304050', '5 rue des vaches', '59240', 'Dunkerque');
INSERT INTO clients (idClient, nomClient, prenomClient, telClient, adresseClient, cpClient, villeClient) VALUES (2, 'Lacafet', 'Brunette', '0610374058', '9 rue du café', '13140', 'Marseille');
INSERT INTO clients (idClient, nomClient, prenomClient, telClient, adresseClient, cpClient, villeClient) VALUES (3, 'Orangerie', 'Clementine', '0612399080', '12 rue des oranges', '59140', 'Dunkerque');
INSERT INTO clients (idClient, nomClient, prenomClient, telClient, adresseClient, cpClient, villeClient) VALUES (4, 'Force', 'Armando', '0780457820', '25 rue de truc', '33000', 'Bordeaux');
INSERT INTO clients (idClient, nomClient, prenomClient, telClient, adresseClient, cpClient, villeClient) VALUES (5, 'Paquerette', 'Maxine', '0655443322', '221B Baker Street', 'EC1A', 'Londres');

INSERT INTO factures (idFacture, dateFacture) VALUES (1, '2020-5-25');
INSERT INTO factures (idFacture, dateFacture) VALUES (2, '2020-9-12');
INSERT INTO factures (idFacture, dateFacture) VALUES (3, '2020-10-15');
INSERT INTO factures (idFacture, dateFacture) VALUES (4, '2020-10-18');
INSERT INTO factures (idFacture, dateFacture) VALUES (5, '2020-11-20');

INSERT INTO pieces (idPiece, libellePiece, prixPiece) VALUES (1, 'Pneu', 150);
INSERT INTO pieces (idPiece, libellePiece, prixPiece) VALUES (2, 'Vis', 15);
INSERT INTO pieces (idPiece, libellePiece, prixPiece) VALUES (3, 'Moteur', 200);
INSERT INTO pieces (idPiece, libellePiece, prixPiece) VALUES (4, 'Carroserie', 290);
INSERT INTO pieces (idPiece, libellePiece, prixPiece) VALUES (5, 'Pare-brise', 111);

INSERT INTO vehicules (idVehicule, marqueVehicule, modeleVehicule, immatriculationVehicule, klmVehicule, idClient) VALUES (1, 'Dacia', 'Sandero', 'AA-229-AA', 15000, 1);
INSERT INTO vehicules (idVehicule, marqueVehicule, modeleVehicule, immatriculationVehicule, klmVehicule, idClient) VALUES (2, 'Citroen', 'C4', 'AB-289-BB', 12000, 2);
INSERT INTO vehicules (idVehicule, marqueVehicule, modeleVehicule, immatriculationVehicule, klmVehicule, idClient) VALUES (3, 'Chevrolet', 'Corvette', 'FF-222-FF', 20000, 3);
INSERT INTO vehicules (idVehicule, marqueVehicule, modeleVehicule, immatriculationVehicule, klmVehicule, idClient) VALUES (4, 'Ford', 'Fiesta', 'AE-155-BA', 11000, 4);
INSERT INTO vehicules (idVehicule, marqueVehicule, modeleVehicule, immatriculationVehicule, klmVehicule, idClient) VALUES (5, 'Bentley', 'Continental', 'IM-735-LA', 25000, 5);

INSERT INTO reparations (idReparation, libelleReparation, prixReparation, dateReparation, idVehicule, idFacture) VALUES (1, 'Changement de pneu', 300, '2020-5-20', 1, 1);
INSERT INTO reparations (idReparation, libelleReparation, prixReparation, dateReparation, idVehicule, idFacture) VALUES (2, 'On a fait des trucs', 120, '2020-9-10', 2, 2);
INSERT INTO reparations (idReparation, libelleReparation, prixReparation, dateReparation, idVehicule, idFacture) VALUES (3, 'Changement du moteur', 400, '2020-10-19', 3, 3);
INSERT INTO reparations (idReparation, libelleReparation, prixReparation, dateReparation, idVehicule, idFacture) VALUES (4, 'Réparation Carroserie', 320, '2020-10-20', 4, 4);
INSERT INTO reparations (idReparation, libelleReparation, prixReparation, dateReparation, idVehicule, idFacture) VALUES (5, 'Carglass répare, Carglass remplace !', 222, '2020-11-21', 5, 5);

INSERT INTO interventions (idIntervention, quantitePiece, idPiece, idReparation) VALUES (1, 2, 1, 1);
INSERT INTO interventions (idIntervention, quantitePiece, idPiece, idReparation) VALUES (2, 25, 2, 2);
INSERT INTO interventions (idIntervention, quantitePiece, idPiece, idReparation) VALUES (3, 1, 3, 3);
INSERT INTO interventions (idIntervention, quantitePiece, idPiece, idReparation) VALUES (4, 1, 4, 4);
INSERT INTO interventions (idIntervention, quantitePiece, idPiece, idReparation) VALUES (5, 1, 5, 5);