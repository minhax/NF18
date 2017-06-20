/* Somme moyenne dépensée pour les desserts pour chaque commande*/
SELECT P.t, AVG(PR.Prix*QE.Quantite) 
AS DepenseMoyenneDessert

FROM Plat P, Prix Pr, QuantiteElem QE

WHERE P.t='Dessert'
AND QE.IDElement=P.ID

AND Pr.IDElement=P.ID
GROUP BY P.t


