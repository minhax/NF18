--Affichage de chaque Carte et de sa période de disponibilité dans chaque restaurant
CREATE VIEW VResto_Carte (NomRestaurant,NomCarte,Debut, Fin) AS
SELECT R.Nom,C.Nom,PE.DateDebut, PE.DateFin
FROM Carte C, Restaurant R, Periode PE
WHERE PE.IDRestau = R.ID
AND PE.NomCarte=C.Nom
ORDER BY R.Nom;

SELECT *
FROM VResto_Carte;


--Affichage de chaque carte, des menus proposés et de leurs prix
DROP VIEW VCarte_Menu;

CREATE VIEW VCarte_Menu (NomCarte,NomMenu,Prix) AS
SELECT C.Nom,M.NomMenu,Pr.Prix
FROM Carte C, Menu M, Prix Pr
WHERE C.Nom=Pr.NomCarte

AND Pr.IDElement=M.ID
ORDER BY C.Nom;

SELECT *
FROM VCarte_Menu;

--Affichage de chaque carte, des Plats proposés et de leurs prix

DROP VIEW VCarte_Plat;

CREATE VIEW VCarte_Plat (NomCarte,NomPlat, Prix) AS
SELECT C.Nom, P.NomPlat, Pr.Prix
FROM Carte C, Plat P, Prix Pr
WHERE C.Nom=Pr.NomCarte
AND Pr.IDElement=P.ID
ORDER BY C.Nom;

SELECT *
FROM VCarte_Plat;


--Affichage de chaque carte, des Boissons proposées et de leurs prix

DROP VIEW VCarte_Boisson;

CREATE VIEW VCarte_Boisson (NomCarte,NomBoisson, Prix) AS
SELECT C.Nom, B.NomBoisson, Pr.Prix
FROM Carte C, Boisson B, Prix Pr
WHERE C.Nom=Pr.NomCarte
AND Pr.IDElement=B.ID
ORDER BY C.Nom;

SELECT *
FROM VCarte_Boisson;

--Pour chaque menu, affichage de tout ses constituants
DROP VIEW VMenu_Plat;

CREATE VIEW VMenu_Plat (NomMenu,Plats) AS
SELECT M.NomMenu, P.NomPlat
FROM Menu M, Plat P, ContenuMenu CM
WHERE CM.IDMenu=M.ID
AND CM.IDPlat=P.ID

ORDER BY M.NomMenu;

SELECT *
FROM VMenu_Plat;



 
--Affichage des Plats à la carte:
/*
 CREATE VIEW VPlatCarte (NomCarte,PlatID,NomPlat,Prix) AS
SELECT Carte.Nom,Plat.ID,Plat.NomPlat,Prix.Prix
 FROM Plat,Prix,Carte
 WHERE Plat.ID=Prix.IDElement
AND Carte.Nom=Prix.NomCarte
ORDER BY Carte.Nom;
 
--Affichage des boissons
 CREATE VIEW VBoisson (NomCarte,BoissonID,NomBoisson,Prix) AS
SELECT C.Nom,B.ID,B.NomBoisson,P.Prix
FROM Boisson B,Prix P,Carte C
WHERE B.ID=P.IDElement
AND P.NomCarte=C.Nom
ORDER BY C.Nom;

--Affichage du contenu des menus:
CREATE VIEW IngrMenu (Menu, IDMenu, Ingrédient) AS
SELECT M.NomMenu, M.ID, P.NomPlat
FROM ContenuMenu CM, Menu M, Plat P
WHERE M.ID= CM.IDMenu
AND P.ID= CM.IDPLat
ORDER BY CM.IDMenu;

SELECT* FROM VMENU;
SELECT* FROM VPlatCarte;
SELECT* FROM VBoisson;
SELECT* FROM IngrMenu;
*/

--Affichage des
/*
SELECT M.NomCarte, M.NomMenu, M.Prix, VPlatCarte.platID,VPlatCarte.nomPLat,VPlatCarte.Prix, B.BoissonID, B.NomBoisson, B.Prix
FROM VMenu M, VBoisson B, VPlatCarte 
GROUP BY M.NomCarte, M.NomMenu, M.Prix, VPlatCarte.platID,VPlatCarte.nomPLat,VPlatCarte.Prix, B.BoissonID, B.NomBoisson, B.Prix
ORDER BY M.NomCarte; */

