
CREATE TABLE Restaurant(
  ID SERIAL PRIMARY KEY,
  Adresse VARCHAR(50) NOT NULL,
  Ville VARCHAR(50) NOT NULL,
  Pays VARCHAR(50) NOT NULL,
  Nom VARCHAR(50) NOT NULL,
  UNIQUE (Adresse,Ville,Pays)
);


CREATE TABLE Commande(
  ID SERIAL,
  IDRest INTEGER REFERENCES Restaurant(ID),
  DateCommande TIMESTAMP NOT NULL,
  PRIMARY KEY (ID,IDRest)
);


CREATE TABLE Element(
 IDElement SERIAL PRIMARY KEY
);

CREATE TABLE QuantiteElem(
   IDCommande INTEGER,
   IDRestaurant INTEGER,
   IDElement INTEGER,
   Quantite INTEGER,
   PRIMARY KEY (IDCommande, IDRestaurant, IDElement),
   FOREIGN KEY(IDCommande,IDRestaurant) REFERENCES Commande(ID,        	   IDRest),
   FOREIGN KEY(IDElement) REFERENCES Element(IDElement),
   CHECK ((Quantite > 0)
     AND (Quantite IS NOT NULL))
);


CREATE TABLE Boisson(
   ID SERIAL REFERENCES Element(IDElement),
   NomBoisson VARCHAR(50) NOT NULL,
   Volume FLOAT NOT NULL,
   PRIMARY KEY (ID),
   UNIQUE(NomBoisson,Volume),
   CHECK (Volume > 0)
);


CREATE TABLE Menu(
   ID SERIAL REFERENCES Element(IDElement) PRIMARY KEY,
   NomMenu VARCHAR(50) UNIQUE NOT NULL
);


CREATE TYPE Choix AS ENUM ('Plat Principal', 'Entree','Dessert');


CREATE TABLE Plat(
   ID SERIAL REFERENCES Element(IDELement) PRIMARY KEY,
   NomPlat VARCHAR(50) UNIQUE NOT NULL,
   Categorie VARCHAR(50),
   t choix
);


CREATE TABLE ContenuMenu(
   IDMenu INTEGER REFERENCES Element(IDElement),
   IDPlat INTEGER REFERENCES Element(IDElement),
   PRIMARY KEY (IDMenu,IDPlat)
);


CREATE TABLE Carte(
   Nom VARCHAR(50) PRIMARY KEY);


CREATE TABLE Periode(
   IDRestau INTEGER REFERENCES Restaurant(ID),
   NomCarte VARCHAR(50) REFERENCES Carte(Nom),
   DateDebut DATE,
   DateFin DATE NOT NULL,
   PRIMARY KEY (IDRestau, NomCarte, DateDebut)
);


CREATE TABLE Prix(
   IDElement INTEGER REFERENCES Element(IDElement),
   NomCarte VARCHAR(50) REFERENCES Carte(Nom),
   Prix NUMERIC(5,2) NOT NULL,
   PRIMARY KEY (IDElement,NomCarte)
);
/*
CREATE TABLE Ingredients (
	Nom VARCHAR(50) PRIMARY KEY,
	Solide bool
);

CREATE TABLE QuantiteIngredients(
	IDPlat INTEGER REFERENCES Plat(ID),
	NomIngredients VARCHAR(50)REFERENCES Ingredients(Nom),
	Quantite FLOAT,
	PRIMARY KEY (IDPlat, NomIngredients)
);*/
