<html lang="fr">
    <head>
      <p> Insertion reussie </p>
    </head>
        <body>
        	<div>
            <h1> Dessert<strong> </h1>
            <?php //On teste si les données nomMenu et prixMenu ont bien étaient rentrées par l'utilisateur
                 if ($_POST['nomDessert']!=null && $_POST['categorie']!=null && $_POST['prixDessert']!=null && $_POST['AjoutCarte']!=null) {
                 	  $ID =$_POST['idDessert'];
                    $type=$_POST['type'];
                    $nom = $_POST['nomDessert'];
                    $prix = $_POST['prixDessert'];
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
                      echo "'Nouveau dessert inséré";
                    }
                    else {
                      echo "Erreur lors de l'insertion";
                    }
                    $connexion=null;
            ?>
        </body>
</html>
