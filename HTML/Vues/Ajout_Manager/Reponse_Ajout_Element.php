<p>Nom de l'element : <input name="nomElement" type="text" placeholder="Nom de la carte" size="15"
                <br/> </p>

<html lang="fr">
    <head>
      <p> Insertion réussie </p>
    </head>
        <body>
        	<div>
            <h1> Insertion de la carte réussie<strong> </h1>
            <?php
                 if (isset($_POST['Element'])) {
	                    $nom = $_POST['Element'];
	                    	if($nom == 'Menu') {
	          ?>
			                  <form action="Reponse_Ajout_Menu.php" method="post">
			                  <input name="idElement" type="hidden" value="<?php echo ($modif? $Menu['ID'] : '-1') ?>">
			                  <p>Nom du menu : <input name="nomMenu" type="text" placeholder="Nom du menu" size="15" </p>
			                  <p>Prix du menu : <input name="prixMenu" type="text" placeholder="Prix" size="15"</p>
			                  <p>Ajout à une carte? : <input name="AjoutCarte" type="text" size="25"</p>
			                  <input type="submit" value="Enregistrer">
			           		  </form>
	                    	}
	                    	<?php
	                    	elseif($nom =='Boisson'){
	                    	?>
	                    	
	                    	}
                } 
            <?php
                    $connexion = new PDO('pgsql:host=tuxa.sme.utc;port=5432;dbname=nf17p122', 'TaeORGh5');
                    $sql = "INSERT INTO Carte (Nom) VALUES
                     ( $nom);
                     INSERT INTO Periode (IDRestau, NomCarte,DateDebut,DateFin) VALUES
                     (";
                    $result = $connexion->prepare($sql);
                    $result->execute();
                    if ($result) {
                      echo "'Nouvelle carte insérée";
                    }
                    else {
                      echo "Erreur lors de l'insertion";
                    }
                    $connexion=null;
            ?>
        </body>
</html>
