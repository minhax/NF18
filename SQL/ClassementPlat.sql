/*Classement des plats les plus command�s*/
SELECT P.NomPlat, sum(QE.Quantite)
FROM Plat P, Menu M, ContenuMenu CM, QuantiteElem QE
WHERE (QE.IDElement=P.ID
AND CM.IDPlat=P.ID
AND M.ID=CM.IDMenu)
OR (QE.IDElement = M.ID
AND P.ID = CM.IDPlat
AND CM.IDMenu = M.ID)
GROUP BY P.NomPlat
ORDER BY SUM(QE.Quantite) DESC


/*Les plats � base de viande sont-ils plus command�s que les plats � base de poisson?*/
SELECT P.Categorie, COUNT(P.Categorie)
FROM Plat P, Menu M, ContenuMenu CM, QuantiteElem QE
WHERE (QE.IDElement=P.ID
AND CM.IDPlat=P.ID
AND M.ID=CM.IDMenu
AND(P.Categorie='poisson'OR P.Categorie='viande'))
OR (QE.IDElement = M.ID
AND P.ID = CM.IDPlat
AND CM.IDMenu = M.ID
AND(P.Categorie='poisson'OR P.Categorie='viande'))
GROUP BY P.Categorie
ORDER BY SUM(QE.Quantite) DESC

/* Y a t-il plus de plats command�s � base de viande que de plats � base de poisson?*/
SELECT P.Categorie, COUNT(P.NomPlat)
FROM Plat P, QuantiteElem QE
WHERE (P.Categorie='poisson'OR P.Categorie='viande')
AND QE.IDElement=P.ID
GROUP BY P.Categorie
HAVING COUNT(QE.Quantite)>0

/* Somme moyenne d�pens�e pour les desserts pour chaque commande*/
SELECT P.t AVG(SUM(PR.Prix)*QE.Quantite)
FROM Plat P, Prix Pr, QuantiteElem QE
WHERE P.t='Dessert'
AND QE.IDElement=P.ID
AND Pr.IDElement=P.ID
GROUP BY P.t