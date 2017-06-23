<html>
    <head>
<meta charset='UTF-8'>
    </head>
        <body>
            <h1> Insertion de la commande <strong> </h1>
                    
                    <?php
                            /** Connexion **/
                    $dbconn = pg_connect("host=tuxa.sme.utc dbname=dbnf17p122 user=nf17p122 password=TaeORGh5") or die('Connexion impossible : ' . pg_last_error());

                    // on teste la déclaration de nos variables
      if (isset($_POST['Restaurant']) && isset($_POST['Date']) && isset($_POST['Prix'])) {
        $Date = $_POST['Date']; 
	$Resto=$_POST['Restaurant'];
                     //afin de récupérer l'identifiant du restaurant, il faudrait faire une requète SQL sur la table Restaurant, en demandant de rechercher l'ID correspondant au nom du restaurant renseigné par l'utilisateur. Ensuite, il suffit de l'insert dans notre relation commande.
                    /** Préparation et exécution de la requête **/
			$query1="SELECT R.ID 
			FROM Restaurant R
			WHERE R.Nom='$Resto'";
			$result1 = pg_query($query1) or die('Échec de la requête : ' . pg_last_error());
		while ($row1 = pg_fetch_array($result1, null, PGSQL_ASSOC)) {
			echo "\t<tr>\n";
			foreach ($row1 as $col_value1) {
			        echo "\t\t<td>$col_value1</td>\n";
			    }
			    echo "\t</tr>\n";
			}
		echo "</table>\n";
		$IDResto=$row1['R.ID'];

                    $query = "INSERT INTO Commande VALUES 
			(DEFAULT,$IDResto,to_date('$Date','YYYY-MM-DD'))";
                    $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
                    /** Traitement du résultat **/
                    if ($result) {
                      echo "'Nouvelle commande insere";
                    }
                    else {
                      echo "Erreur lors de l'insertion";
                    }


/// Affichage des résultats
		echo "<table>\n";
		while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
		    echo "\t<tr>\n";
		    foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		    }
		    echo "\t</tr>\n";
		}
		echo "</table>\n";
                    /** Déconnexion **/
	pg_free_result($result);
                    pg_close($dbconn);}
?>
        </body>
</html>
