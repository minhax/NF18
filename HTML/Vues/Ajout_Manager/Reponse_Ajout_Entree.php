<html lang="fr">
    <head>
      <p> Insertion réussie </p>
    </head>
        <body>
        	<div>
            <h1> Entree<strong> </h1>
            <?php //On teste si les données nomMenu et prixMenu ont bien étaient rentrées par l'utilisateur
                 if (isset($_POST['nomEntree'] && $_POST['categorie'] && $_POST['prixEntree'] && $_POST['AjoutCarte'])) {
                 	  $ID =$_POST['idEntree'];
                    $type=$_POST['type'];
                    $nom = $_POST['nomEntree'];
                    $prix = $_POST['prixEntree'];
                    $categorie = $_POST['categorie'];
                    $Carte =$_POST['AjoutCarte']; 
                } 
             ?>
            <?php
                    $connexion = new PDO('pgsql:host=tuxa.sme.utc;port=5432;dbname=nf17p122', 'TaeORGh5');
                    $sql = "INSERT INTO Plat (ID, NomPlat,Categorie, t) VALUES
                     ($ID,$nom,$categorie,$type);
                     INSERT INTO Prix (IDElement, NomCarte, Prix) VALUES
                     ($ID,$Carte, $prix)";
                    $result = $connexion->prepare($sql);
                    $result->execute();
                    if ($result) {
                      echo "'Nouvelle entree insérée";
                    }
                    else {
                      echo "Erreur lors de l'insertion";
                    }
                    $connexion=null;
            ?>
        </body>
</html>
