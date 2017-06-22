/*Classement des plats les plus commandés*/

SELECT e1.NomPlat, sum(e1.Quantite) AS QuantiteVendue
FROM (
	SELECT P.NomPlat, sum(QE.Quantite)AS Quantite
	FROM Plat P, QuantiteElem QE
	WHERE QE.IDElement=P.ID
	GROUP BY P.NomPlat

	UNION (

	SELECT P.NomPlat, sum(QE.Quantite) AS Quantite
	FROM Plat P, Menu M, ContenuMenu CM, QuantiteElem QE
	WHERE QE.IDElement = M.ID
	AND P.ID = CM.IDPlat
	AND CM.IDMenu = M.ID
	GROUP BY P.NomPlat	 )
) AS e1
GROUP BY e1.NomPlat
ORDER BY SUM(e1.Quantite) DESC




