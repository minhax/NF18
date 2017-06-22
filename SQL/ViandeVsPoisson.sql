/* Les plats à base de viande sont-ils plus commandés que les plats à base de poisson?*/

SELECT e1.Categorie, SUM(e1.Quantite) AS QuantiteVendue
FROM (
	SELECT P.Categorie, sum(QE.Quantite)AS Quantite
	FROM Plat P, QuantiteElem QE
	WHERE QE.IDElement=P.ID
	GROUP BY P.Categorie

UNION (

	SELECT P.Categorie, sum(QE.Quantite) AS Quantite
	FROM Plat P, Menu M, ContenuMenu CM, QuantiteElem QE
	WHERE QE.IDElement = M.ID
	AND P.ID = CM.IDPlat
	AND CM.IDMenu = M.ID
	GROUP BY P.Categorie	 )
) AS e1
WHERE e1.Categorie='Poisson'OR e1.Categorie='Viande'
GROUP BY e1.Categorie
ORDER BY SUM(e1.Quantite) DESC;



﻿
