/*Classement des plats les plus commandés*/

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


