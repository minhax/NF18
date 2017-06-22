/* Somme moyenne dépensée pour les desserts pour chaque commande */

SELECT e1.t, AVG(e1.PrixCommandeMoyen) AS DepenseMoyenneDessert
FROM (
	SELECT P.t, avg(QE.Quantite*Pr.Prix)AS PrixCommandeMoyen
	FROM Plat P, QuantiteElem QE, Prix Pr
	WHERE QE.IDElement=P.ID
	AND Pr.IDElement=P.ID
	GROUP BY P.t

UNION (

	SELECT P.t, avg(QE.Quantite*Pr.Prix) AS PrixCommandeMoyen
	FROM Plat P, Menu M, ContenuMenu CM, QuantiteElem QE, Prix Pr
	WHERE QE.IDElement = M.ID
	AND P.ID = CM.IDPlat
	AND CM.IDMenu = M.ID
	AND Pr.IDElement=P.ID
	GROUP BY P.t	 )
) AS e1
WHERE e1.t='Dessert'
GROUP BY e1.t
