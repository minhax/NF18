<html lang="fr">
    <head>
      <h1> Cartes </h1>
    </head>
        <body>
        	<div>
            <h2> Statistiques <strong> </h2>
              <h3>Classement des plats les plus commandes<strong></h3>
                      <?php
                          /** Connexion **/
                          $dbconn = pg_connect("host=tuxa.sme.utc dbname=dbnf17p122 user=nf17p122 password=TaeORGh5") or die('Connexion impossible : ' . pg_last_error());
                          /** Préparation et exécution de la requête **/
                          $query = "SELECT e1.NomPlat, sum(e1.Quantite) AS QuantiteVendue
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
                                        ORDER BY SUM(e1.Quantite) DESC";
                          $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
                          echo "<table>\n";
                          			echo "<tr>
                          			       <th>Nom Plat</th>
                          			       <th>Quantite d elements</th>
                          			   </tr>";
                          /** Traitement du résultat **/

                          while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                      			echo "\t<tr>\n";
                      			foreach ($row as $col_value) {
                      			        echo "\t\t<td>$col_value</td>\n";
                      			    }
                      			    echo "\t</tr>\n";
                      			}
                      		echo "</table>\n";
                          echo  $row['e1.NomPlat'] .  $row['QuantiteVendue']  ;
                          /** Déconnexion **/
                          pg_free_result($result);
      			  pg_close($dbconn);
                      ?>
                <h3> Les plats a base de viande sont-ils plus commandes que les plats à base de poisson?<strong> </h3>
                      <?php
                          /** Connexion **/
$dbconn = pg_connect("host=tuxa.sme.utc dbname=dbnf17p122 user=nf17p122 password=TaeORGh5") or die('Connexion impossible : ' . pg_last_error());
                          /** Préparation et exécution de la requête **/
                          $query = "SELECT e1.Categorie, SUM(e1.Quantite) AS QuantiteVendue
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
                                        ORDER BY SUM(e1.Quantite) DESC";
                        $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());

                        echo "<table>\n";
                        			echo "<tr>
                        			       <th>Categorie</th>
                        			       <th>Quantite</th>
                        			   </tr>";
                          /** Traitement du résultat **/
                          while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                              			echo "\t<tr>\n";
                              			foreach ($row as $col_value) {
                              			        echo "\t\t<td>$col_value</td>\n";
                              			    }
                              			    echo "\t</tr>\n";
                              			}
                              		echo "</table>\n";
                          echo   $row['e1.Categorie'] . $row['QuantiteVendue'] ;

                          /** Déconnexion **/
                          pg_free_result($result);
                          pg_close($dbconn);
                      ?>

                        <h3> Somme moyenne depensee pour les desserts pour chaque commande <strong> </h3>
                          <?php
                              /** Connexion **/
$dbconn = pg_connect("host=tuxa.sme.utc dbname=dbnf17p122 user=nf17p122 password=TaeORGh5") or die('Connexion impossible : ' . pg_last_error());
                              /** Préparation et exécution de la requête **/
                              $query = "SELECT e1.t, AVG(e1.PrixCommandeMoyen) AS DepenseMoyenneDessert
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
                                          ";
                             $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
                             echo "<table>\n";
                             			echo "<tr>
                             			       <th>Dessert</th>
                             			       <th>Depense Moyenne</th>
                             			   </tr>";
                              /** Traitement du résultat **/
                              while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                        			echo "\t<tr>\n";
                        			foreach ($row as $col_value) {
                        			        echo "\t\t<td>$col_value</td>\n";
                        			    }
                        			    echo "\t</tr>\n";
                        			}
                        		echo "</table>\n";

                              echo  $row['e1.t'] . $row['DepenseMoyenneDessert'] ;
                              }
                              /** Déconnexion **/
                              pg_free_result($result);
    			                    pg_close($dbconn);
                          ?>
          </div>
        </body>
</html>
