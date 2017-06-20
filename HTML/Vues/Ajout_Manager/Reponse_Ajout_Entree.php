<html lang="fr">
    <head>
      <title> Insertion reussie </title>
    </head>
        <body>
        	<div>
            <h1> Entree<strong> </h1>
            <?php //On teste si les données nomMenu et prixMenu ont bien étaient rentrées par l'utilisateur
                 if ($_POST['nomEntree']!=null && $_POST['categorie']!=null && $_POST['prixEntree']!=null && $_POST['AjoutCarte']!=null) {
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
                      echo "'Nouvelle entree inseree";
                    }
                    else {
                      echo "Erreur lors de l'insertion";
                    }
                    $connexion=null;
            ?>
        </body>
</html>

