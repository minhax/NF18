<html lang="fr">
    <head>
      <title> Ajout d'une carte </title>
    </head>
        <body>
            <h1> Insertion de la carte reussie<strong> </h1>
            <?php
 $dbconn = pg_connect("host=tuxa.sme.utc dbname=dbnf17p122 user=nf17p122 password=TaeORGh5") or die('Connexion impossible : ' . pg_last_error());
                 if (null!== $_POST['nomCarte'] && null!== $_POST['DateDebut'] && null!==$_POST['DateFin'] && null!==$_POST['Resto']) {
                    $nom = $_POST['nomCarte'];
                    $DateDebut = $_POST['DateDebut'];
                    $DateFin = $_POST['DateFin'];
			$Resto=$_POST['Resto']; }

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

                    $query = "INSERT INTO Carte (Nom) VALUES
                     ($nom);
                     INSERT INTO Periode (IDRestau, NomCarte,DateDebut,DateFin) VALUES
                     ($IDResto,$nom, to_Date('$DateDebut';'YYY-MM-DD'), to_date('DateFin','YYYY-MM-DD'))";
                    $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
                    if ($result) {
                      echo "'Nouvelle carte inseree";
                    }
                    else {
                      echo "Erreur lors de l'insertion";
                    }
                   pg_free_result($result);
    			  pg_close($dbconn);
            ?>
        </body>
</html>
