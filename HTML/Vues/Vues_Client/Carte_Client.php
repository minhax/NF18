<html lang="fr">
    <head>
      <title> Cartes </title>
    </head>
        <body>
        	<div>
            <h1> Bienvenue chez Hell's Kitchen <strong> </h1>
              <h2>Carte et sa periode de disponibilite dans chaque restaurant<strong></h2>
                      <?php
                          /** Connexion **/
$dbconn = pg_connect("host=tuxa.sme.utc dbname=dbnf17p122 user=nf17p122 password=TaeORGh5") or die('Connexion impossible : ' . pg_last_error());
                          /** Préparation et exécution de la requête **/
                          $query = "SELECT R.Nom,C.Nom,PE.DateDebut, PE.DateFin
					FROM Carte C, Restaurant R, Periode PE
					WHERE PE.IDRestau = R.ID
					AND PE.NomCarte=C.Nom
					ORDER BY R.Nom;";
                          $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());

 
		echo "<table>\n";
			echo "<tr>
			       <th>Nom Restaurant</th>
			       <th>Nom Carte</th>
			       <th>Date Debut</th>
			       <th>Date Fin</th>
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

                          echo $row['R.Nom'] .$row['C.Nom'] . $row['PE.DateDebut'] . $row['PE.DateFin'] ;
                          /** Déconnexion **/
                         pg_free_result($result);
    			  pg_close($dbconn);
                      ?>
                <h2> Menus des Cartes<strong> </h2>
                      <?php
                          /** Connexion **/
                         $dbconn = pg_connect("host=tuxa.sme.utc dbname=dbnf17p122 user=nf17p122 password=TaeORGh5") or die('Connexion impossible : ' . pg_last_error());

                          /** Préparation et exécution de la requête **/
                          $query = "SELECT C.Nom,M.NomMenu,Pr.Prix
					FROM Carte C, Menu M, Prix Pr
					WHERE C.Nom=Pr.NomCarte
					AND Pr.IDElement=M.ID
					ORDER BY C.Nom;";
                          $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
	echo "<table>\n";
			echo "<tr>
			       <th>Nom Carte</th>
			       <th>Nom Menu</th>
			       <th>Prix</th>
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

                          echo  $row['C.Nom'] . $row['M.NomMenu'] . $row['Pr.Prix'];
                          
                          /** Déconnexion **/
                           pg_free_result($result);
    			  pg_close($dbconn);
                      ?>
                      <h2> Affichage des Plats sur les Cartes <strong> </h2>
                        <?php
                            /** Connexion **/
                            $dbconn = pg_connect("host=tuxa.sme.utc dbname=dbnf17p122 user=nf17p122 password=TaeORGh5") or die('Connexion impossible : ' . pg_last_error());

                            /** Préparation et exécution de la requête **/
                            $query = "SELECT C.Nom, P.NomPlat, Pr.Prix
					FROM Carte C, Plat P, Prix Pr
					WHERE C.Nom=Pr.NomCarte
					AND Pr.IDElement=P.ID
					ORDER BY C.Nom;";
                           $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());

		echo "<table>\n";
			echo "<tr>
			       <th>Nom Carte</th>
			       <th>Nom du plat</th>
				<th>Prix</th>
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

                            echo  $row['C.Nom'] . $row['P.NomPlat'] .$row['Pr.Prix'];
                            /** Déconnexion **/
                           pg_free_result($result);
    			  pg_close($dbconn);
                        ?>
 <h2> Cartes et boissons proposees <strong> </h2>
                        <?php
                            /** Connexion **/
                            $dbconn = pg_connect("host=tuxa.sme.utc dbname=dbnf17p122 user=nf17p122 password=TaeORGh5") or die('Connexion impossible : ' . pg_last_error());

                            /** Préparation et exécution de la requête **/
                            $query = "SELECT C.Nom, B.NomBoisson, Pr.Prix
FROM Carte C, Boisson B, Prix Pr
WHERE C.Nom=Pr.NomCarte
AND Pr.IDElement=B.ID
ORDER BY C.Nom;";
                             $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());

		echo "<table>\n";
			echo "<tr>
			       <th>Nom Carte</th>
			       <th>Nom de la boisson</th>
				<th>Prix</th>
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
                            echo  $row['C.Nom'] . $row['B.NomBoisson'] . $row['Pr.Prix'];
                            
                            /** Déconnexion **/
                             pg_free_result($result);
    			  pg_close($dbconn);
                        ?>
 <h2> Composants des menus <strong> </h2>
                        <?php
                            /** Connexion **/
                            $dbconn = pg_connect("host=tuxa.sme.utc dbname=dbnf17p122 user=nf17p122 password=TaeORGh5") or die('Connexion impossible : ' . pg_last_error());

                            /** Préparation et exécution de la requête **/
                            $query = "SELECT M.NomMenu, P.NomPlat
					FROM Menu M, Plat P, ContenuMenu CM
					WHERE CM.IDMenu=M.ID
					AND CM.IDPlat=P.ID

					ORDER BY M.NomMenu;";
                            $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
	echo "<table>\n";
			echo "<tr>
			       <th>Nom du menu</th>
			       <th>Nom du plat</th>
			       
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

                            echo $row['M.NomMenu'] . $row['P.NomPlat'];
                            
                            /** Déconnexion **/
                            pg_free_result($result);
    			  pg_close($dbconn);
                        ?>
          </div>
        </body>
</html>
