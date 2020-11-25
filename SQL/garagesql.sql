#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: clients
#------------------------------------------------------------

CREATE TABLE clients(
        idClient      Int Auto_increment  NOT NULL PRIMARY KEY,
        nomClient     Varchar (50) NOT NULL ,
        prenomClient  Varchar (50) NOT NULL ,
        telClient     Varchar (15) NOT NULL ,
        adresseClient Varchar (50) NOT NULL ,
        cpClient      Varchar (5) NOT NULL ,
        villeClient   Varchar (30) NOT NULL
	,CONSTRAINT clients_PK PRIMARY KEY (idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: vehicules
#------------------------------------------------------------

CREATE TABLE vehicules(
        idVehicule              Int Auto_increment  NOT NULL PRIMARY KEY,
        marqueVehicule          Varchar (50) NOT NULL ,
        modeleVehicule          Varchar (50) NOT NULL ,
        immatriculationVehicule Varchar (9) NOT NULL ,
        klmVehicule             Int NOT NULL ,
        idClient                Int NOT NULL
	,CONSTRAINT vehicules_PK PRIMARY KEY (idVehicule)

	,CONSTRAINT vehicules_clients_FK FOREIGN KEY (idClient) REFERENCES clients(idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: pieces
#------------------------------------------------------------

CREATE TABLE pieces(
        idPiece      Int Auto_increment  NOT NULL PRIMARY KEY,
        libellePiece Varchar (50) NOT NULL ,
        prixPiece    Float NOT NULL
	,CONSTRAINT pieces_PK PRIMARY KEY (idPiece)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: factures
#------------------------------------------------------------

CREATE TABLE factures(
        idFacture   Int Auto_increment  NOT NULL PRIMARY KEY,
        dateFacture Date NOT NULL
	,CONSTRAINT factures_PK PRIMARY KEY (idFacture)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: reparations
#------------------------------------------------------------

CREATE TABLE reparations(
        idReparation      Int Auto_increment  NOT NULL PRIMARY KEY,
        libelleReparation Varchar (50) NOT NULL ,
        prixReparation    Float NOT NULL ,
        dateReparation    Date NOT NULL ,
        idVehicule        Int NOT NULL ,
        idFacture         Int NOT NULL
	,CONSTRAINT reparations_PK PRIMARY KEY (idReparation)

	,CONSTRAINT reparations_vehicules_FK FOREIGN KEY (idVehicule) REFERENCES vehicules(idVehicule)
	,CONSTRAINT reparations_factures0_FK FOREIGN KEY (idFacture) REFERENCES factures(idFacture)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: interventions
#------------------------------------------------------------

CREATE TABLE interventions(
        id
        idPiece       Int NOT NULL ,
        idReparation  Int NOT NULL ,
        quantitePiece Int NOT NULL
	,CONSTRAINT interventions_PK PRIMARY KEY (idPiece,idReparation)

	,CONSTRAINT interventions_pieces_FK FOREIGN KEY (idPiece) REFERENCES pieces(idPiece)
	,CONSTRAINT interventions_reparations0_FK FOREIGN KEY (idReparation) REFERENCES reparations(idReparation)
)ENGINE=InnoDB;



ALTER TABLE stationshotels.hotels ADD CONSTRAINT hotels_stations_FK FOREIGN KEY (idStation) REFERENCES stations(idStation);
ALTER TABLE stationshotels.chambres ADD CONSTRAINT chambres_hotels_FK FOREIGN KEY (idHotel) REFERENCES hotels(idHotel);
ALTER TABLE stationshotels.reservations ADD CONSTRAINT reservations_chambres_FK FOREIGN KEY (idChambre) REFERENCES chambres(idChambre);
ALTER TABLE stationshotels.reservations ADD CONSTRAINT reservations_clients_FK FOREIGN KEY (idClient) REFERENCES clients(idClient);