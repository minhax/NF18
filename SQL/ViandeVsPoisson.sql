/*Les plats à base de viande sont-ils plus commandés que les plats à base de poisson?*/
SELECT P.Categorie, SUM(QE.Quantite)

FROM Plat P, Menu M, ContenuMenu CM, QuantiteElem QE

WHERE ((QE.IDElement=P.ID
AND CM.IDPlat=P.ID
AND M.ID=CM.IDMenu)

OR (QE.IDElement = M.ID
AND P.ID = CM.IDPlat
AND CM.IDMenu = M.ID))
AND(P.Categorie='Poisson'OR P.Categorie='Viande')

GROUP BY P.Categorie
ORDER BY SUM(QE.Quantite) DESC
