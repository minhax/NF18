INSERT INTO Restaurant (ID, Adresse, Ville, Pays, Nom)
VALUES (1,'14 rue de Minh', 'Minhcity', 'Minhland', 'Au Palace du Minhou');

INSERT INTO Restaurant (ID, Adresse, Ville, Pays, Nom)
VALUES (2, '81 rue de Roue', 'Compiègne', 'France', 'Le Bouchon');

INSERT INTO Restaurant (ID, Adresse, Ville, Pays, Nom)
VALUES (3, '25 impasse du pont', 'Avignon', 'France', 'On y danse');

INSERT INTO Restaurant (ID, Adresse, Ville, Pays, Nom)
VALUES (4, '16 rue de loie', 'Compiègne', 'France', 'Le bon foie gras');

INSERT INTO Carte (Nom) VALUES
('Carte du Printemps');
INSERT INTO Carte (Nom) VALUES
('Carte dAutomne');
INSERT INTO Carte (Nom) VALUES
('Carte dEté');
INSERT INTO Carte (Nom) VALUES
('Carte dHiver');
INSERT INTO Carte (Nom) VALUES
('Carte du Bon Mangeur');
INSERT INTO Carte (Nom) VALUES
('Carte des Picantins');
INSERT INTO Carte (Nom) VALUES
('Carte du Faux Vegan');
INSERT INTO Carte (Nom) VALUES
('Carte des Boissons');
INSERT INTO Carte (Nom) VALUES
('Carte des Spiritueux');

INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (1, TO_DATE('2016-09-01','YYYY-MM-DD'), 1);

INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (2, TO_DATE('2016-09-02','YYYY-MM-DD'), 1);

INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (3, TO_DATE('2016-09-01','YYYY-MM-DD'), 1);
INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (4, TO_DATE('2013-09-03','YYYY-MM-DD'), 1);
INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (5, TO_DATE('2013-09-02','YYYY-MM-DD'), 1);
INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (6, TO_DATE('2013-09-02','YYYY-MM-DD'), 1);
INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (1, TO_DATE('2013-09-01','YYYY-MM-DD'), 2);
INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (2, TO_DATE('2017-06-01','YYYY-MM-DD'), 2);
INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (3, TO_DATE('2013-06-01','YYYY-MM-DD'), 2);
INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (4, TO_DATE('2013-09-01','YYYY-MM-DD'), 2);
INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (5, TO_DATE('2013-09-02','YYYY-MM-DD'), 2);
INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (6, TO_DATE('2013-10-01','YYYY-MM-DD'), 2);
INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (1, TO_DATE('2013-09-01','YYYY-MM-DD'), 3);
INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (2, TO_DATE('2013-09-02','YYYY-MM-DD'), 3);
INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (3, TO_DATE('2013-09-03','YYYY-MM-DD'), 3);
INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (4, TO_DATE('2013-09-04','YYYY-MM-DD'), 3);
INSERT INTO Commande (ID, DateCommande, IDRest)
VALUES (5, TO_DATE('2013-09-05','YYYY-MM-DD'), 3);


INSERT INTO Element (IDElement) VALUES
(1);
INSERT INTO Element (IDElement) VALUES
(2);
INSERT INTO Element (IDElement) VALUES
(3);
INSERT INTO Element (IDElement) VALUES
(4);
INSERT INTO Element (IDElement) VALUES
(5);
INSERT INTO Element (IDElement) VALUES
(6);
INSERT INTO Element (IDElement) VALUES
(7);
INSERT INTO Element (IDElement) VALUES
(8);
INSERT INTO Element (IDElement) VALUES
(9);
INSERT INTO Element (IDElement) VALUES
(10);
INSERT INTO Element (IDElement) VALUES
(11);
INSERT INTO Element (IDElement) VALUES
(12);
INSERT INTO Element (IDElement) VALUES
(13);


INSERT INTO Boisson (ID,NomBoisson,Volume) VALUES
(1,'Coca',25);
INSERT INTO Boisson (ID,NomBoisson,Volume) VALUES
(2,'Fanta',25);
INSERT INTO Boisson (ID,NomBoisson,Volume) VALUES
(3,'Sprite',25);
INSERT INTO Boisson (ID,NomBoisson,Volume) VALUES
(4,'Absynthe',25);


INSERT INTO Menu (ID,NomMenu) VALUES
(5,'Menu Enfant');
INSERT INTO Menu (ID,NomMenu) VALUES
(6,'Menu du fin Gourmet');
INSERT INTO Menu (ID,NomMenu) VALUES
(7,'Menu du doux palais');


INSERT INTO Plat (ID,NomPlat,Categorie,t) VALUES
(8,'Croustillant daubergines sur un panache de legumes','Viande','Plat Principal');
INSERT INTO Plat (ID,NomPlat,Categorie,t) VALUES
(9,'Soupe à loignon y croutons','Soupe','Entree');
INSERT INTO Plat (ID,NomPlat,Categorie,t) VALUES
(10,'Gaspaccho','Soupe','Entree');
INSERT INTO Plat (ID,NomPlat,Categorie,t) VALUES
(11,'Pad Thaï','Nouilles','Plat Principal');
INSERT INTO Plat (ID,NomPlat,Categorie,t) VALUES
(12,'Moelleux au chocolat','Gateau','Dessert');
INSERT INTO Plat (ID,NomPlat,Categorie,t) VALUES
(13,'Baba au rhum','Gateau','Dessert');

INSERT INTO ContenuMenu (IDMenu, IDPlat) VALUES
(5,10);
INSERT INTO ContenuMenu (IDMenu, IDPlat) VALUES
(5,11);
INSERT INTO ContenuMenu (IDMenu, IDPlat) VALUES
(5,12);
INSERT INTO ContenuMenu (IDMenu, IDPlat) VALUES
(5,1);

INSERT INTO ContenuMenu (IDMenu, IDPlat) VALUES
(6,9);
INSERT INTO ContenuMenu (IDMenu, IDPlat) VALUES
(6,8);
INSERT INTO ContenuMenu (IDMenu, IDPlat) VALUES
(6,13);
INSERT INTO ContenuMenu (IDMenu, IDPlat) VALUES
(6,4);


INSERT INTO ContenuMenu (IDMenu, IDPlat) VALUES
(7,10);
INSERT INTO ContenuMenu (IDMenu, IDPlat) VALUES
(7,8);
INSERT INTO ContenuMenu (IDMenu, IDPlat) VALUES
(7,12);
INSERT INTO ContenuMenu (IDMenu, IDPlat) VALUES
(5,2);



INSERT INTO Periode (IDRestau,NomCarte,DateDebut,DateFin) VALUES
(1,'Carte du Printemps', TO_DATE('2016-02-01','YYYY-MM-DD'), TO_DATE('2016-04-31','YYYY-MM-DD'));
INSERT INTO Periode (IDRestau,NomCarte,DateDebut,DateFin) VALUES
(1,'Carte dAutomne', TO_DATE('2016-09-01','YYYY-MM-DD'), TO_DATE('2016-10-31','YYYY-MM-DD'));
INSERT INTO Periode (IDRestau,NomCarte,DateDebut,DateFin) VALUES
(1,'Carte dEté', TO_DATE('2016-05-01','YYYY-MM-DD'), TO_DATE('2016-08-31','YYYY-MM-DD'));
INSERT INTO Periode (IDRestau,NomCarte,DateDebut,DateFin) VALUES(1,'Carte dHiver', TO_DATE('2016-11-01','YYYY-MM-DD'), TO_DATE('2016-01-31','YYYY-MM-DD'));
INSERT INTO Periode (IDRestau,NomCarte,DateDebut,DateFin) VALUES(1,'Carte du Bon Mangeur', TO_DATE('2016-05-05','YYYY-MM-DD'), TO_DATE('2016-06-15','YYYY-MM-DD'));
INSERT INTO Periode (IDRestau,NomCarte,DateDebut,DateFin) VALUES(2,'Carte du Bon Mangeur', TO_DATE('2016-05-08','YYYY-MM-DD'), TO_DATE('2016-08-15','YYYY-MM-DD'));
INSERT INTO Periode (IDRestau,NomCarte,DateDebut,DateFin) VALUES(2, 'Carte dHiver', TO_DATE('2016-01-01','YYYY-MM-DD'), TO_DATE('2016-05-31','YYYY-MM-DD'));
INSERT INTO Periode (IDRestau,NomCarte,DateDebut,DateFin) VALUES(3, 'Carte du Faux Vegan', TO_DATE('2016-01-08','YYYY-MM-DD'), TO_DATE('2016-05-15','YYYY-MM-DD'));
INSERT INTO Periode (IDRestau,NomCarte,DateDebut,DateFin) VALUES(3, 'Carte dHiver', TO_DATE('2016-06-01','YYYY-MM-DD'), TO_DATE('2016-09-31','YYYY-MM-DD'));

INSERT INTO Periode (IDRestau,NomCarte,DateDebut,DateFin) VALUES(3, 'Carte des Boissons', TO_DATE('2016-12-08','YYYY-MM-DD'), TO_DATE('2016-05-15','YYYY-MM-DD'));
INSERT INTO Periode (IDRestau,NomCarte,DateDebut,DateFin) VALUES(3, 'Carte des Spiritueux', TO_DATE('2016-06-01','YYYY-MM-DD'), TO_DATE('2016-09-31','YYYY-MM-DD'));

INSERT INTO Prix(IDElement,NomCarte,Prix) VALUES
(1, 'Carte des Boissons', 2.85);
INSERT INTO Prix(IDElement,NomCarte,Prix) VALUES
(2, 'Carte des Boissons', 2.85);
INSERT INTO Prix(IDElement,NomCarte,Prix) VALUES
(3, 'Carte des Boissons', 2.85);
INSERT INTO Prix(IDElement,NomCarte,Prix) VALUES
(4, 'Carte des Spiritueux', 5.8);
INSERT INTO Prix(IDElement,NomCarte,Prix) VALUES
(5, 'Carte du Printemps', 12);
INSERT INTO Prix(IDElement,NomCarte,Prix) VALUES
(6, 'Carte du Bon Mangeur', 18);
INSERT INTO Prix(IDElement,NomCarte,Prix) VALUES
(7, 'Carte du Faux Vegan', 135.25);
INSERT INTO Prix(IDElement,NomCarte,Prix) VALUES
(8, 'Carte du Bon Mangeur', 12);
INSERT INTO Prix(IDElement,NomCarte,Prix) VALUES
(9, 'Carte du Printemps', 8);
INSERT INTO Prix(IDElement,NomCarte,Prix) VALUES
(10, 'Carte du Bon Mangeur', 15);
INSERT INTO Prix(IDElement,NomCarte,Prix) VALUES
(11, 'Carte du Faux Vegan', 35.25);
INSERT INTO Prix(IDElement,NomCarte,Prix) VALUES
(12, 'Carte du Bon Mangeur', 5);
