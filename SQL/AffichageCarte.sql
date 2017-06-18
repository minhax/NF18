DROP VIEW VMenu;
DROP VIEW VPlatCarte;
DROP VIEW VBoisson;
DROP VIEW IngrMEnu;

--Affichage des menus présents sur les cartes dans les restaurants
CREATE VIEW VMenu (NomRestaurant,NomCarte,MenuID,NomMenu,Prix ) AS
SELECT R.Nom,C.Nom,M.ID,M.NomMenu,P.Prix
FROM Menu M,Prix P,Carte C, Restaurant R, Periode PE
Where M.ID = P.IDElement
AND PE.IDRestau = R.ID
AND P.NomCarte=C.Nom
group BY M.NomMenu,R.Nom,C.Nom,M.ID,M.NomMenu,P.Prix
ORDER BY R.Nom;

 
--Affichage des Plats à la carte:
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


--Affichage des
/*
SELECT M.NomCarte, M.NomMenu, M.Prix, VPlatCarte.platID,VPlatCarte.nomPLat,VPlatCarte.Prix, B.BoissonID, B.NomBoisson, B.Prix
FROM VMenu M, VBoisson B, VPlatCarte 
GROUP BY M.NomCarte, M.NomMenu, M.Prix, VPlatCarte.platID,VPlatCarte.nomPLat,VPlatCarte.Prix, B.BoissonID, B.NomBoisson, B.Prix
ORDER BY M.NomCarte; */

