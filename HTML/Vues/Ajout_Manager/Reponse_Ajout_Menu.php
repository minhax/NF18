<html lang="fr">
    <head>
      <p> Insertion réussie </p>
    </head>
        <body>
        	<div>
            <h1> Insertion du menu réussi<strong> </h1>
            <?php //On teste si les données nomMenu et prixMenu ont bien étaient rentrées par l'utilisateur
                 if (isset($_POST['nomMenu'] && $_POST['prixMenu'] && isset($_POST['AjoutCarte']) {
                 	$ID =$_POST['idElement'];
                    $menu = $_POST['nomMenu'];
                    $prix = $_POST['prixMenu'];
                    $DateFin = $_POST['DateFin'];
                    $Carte =$_POST['AjoutCarte']; 
                } 
             ?>
            <?php
                    $connexion = new PDO('pgsql:host=tuxa.sme.utc;port=5432;dbname=nf17p122', 'TaeORGh5');
                    //On insère dans la table Menu les informations correspondantes (ID et menu)
                    $sql = "INSERT INTO Menu (ID, NomMenu) VALUES
                     ($ID,$menu);
                     INSERT INTO Prix (IDElement, NomCarte, Prix) VALUES
                     ($ID,$Carte, $prix)";

                    $result = $connexion->prepare($sql);
                    $result->execute();
                    if ($result) {
                      echo "'Nouveau menu inséré";
                    }
                    else {
                      echo "Erreur lors de l'insertion";
                    }
                    $connexion=null;
            ?>
        </body>
</html>
