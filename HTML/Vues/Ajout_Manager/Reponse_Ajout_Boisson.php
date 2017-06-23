<html lang="fr">
    <head>
      <title> Insertion d'une boisson </title>
    </head>
        <body>
        	<div>
            <h1> Boissons<strong> </h1>
<?php
 $dbconn = pg_connect("host=tuxa.sme.utc dbname=dbnf17p122 user=nf17p122 password=TaeORGh5") or die('Connexion impossible : ' . pg_last_error());
             //On teste si les données nomMenu et prixMenu ont bien étaient rentrées par l'utilisateur
                 if ($_POST['nomBoisson']!=null && $_POST['prixBoisson']!=null && $_POST['volume']!=null) {
                 	  $ID =$_POST['idBoisson'];
                    $nom = $_POST['nomBoisson'];
                    $prix = $_POST['prixBoisson'];
                    $volume = $_POST['volume'];
                    $Carte =$_POST['AjoutCarte']; 
                } 
 
                  
                    //On insère dans la table Boisson les informations correspondantes (ID et nom)
                    $query = "INSERT INTO Boisson (ID, NomBoisson,Volume) VALUES
                     (DEFAULT,$nom,$volume);
                     INSERT INTO Prix (IDElement, NomCarte, Prix) VALUES
                     (DEFAULT,$Carte, $prix);";

                   $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
                    if ($result) {
                      echo "'Nouvelle boisson inseree";
                    }
                    else {
                      echo "Erreur lors de l'insertion";
                    }
///Affichage du résultat
echo "<table>\n";
			echo "<tr>
				<th>ID Boisson</th>
			       <th>Nom Boisson</th>
			       <th>Prix Boisson</th>
			       <th>Volume</th>
				<th>Carte</th>
			   </tr>";
while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
			echo "\t<tr>\n";
			foreach ($row as $col_value) {
			        echo "\t\t<td>$col_value</td>\n";
			    }
			    echo "\t</tr>\n";
			}
		echo "</table>\n";

echo $row['$ID'].$row['$nom'].$row['$prix'].$row['$volume'].$row['$Carte'];
                   pg_free_result($result);
    			  pg_close($dbconn);
            ?>
        </body>
</html>
