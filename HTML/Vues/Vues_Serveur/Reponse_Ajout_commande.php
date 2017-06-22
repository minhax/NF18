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
      if (isset($_POST['Restaurant']) && isset($_POST['Date'])) {
        $Resto = $_POST['Restaurant'];
        $Date = $_POST['Date']; 
                     
                    /** Préparation et exécution de la requête **/
                    $query = "INSERT INTO Commande VALUES (DEFAULT,to_date('$DateDebut','YYYY-MM-DD') ";
                    $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
                    /** Traitement du résultat **/
                    if ($result) {
                      echo "'Nouvelle commande insérée";
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
