<html lang="fr">
    <head>
      <p> Insertion reussie </p>
    </head>
        <body>
        	<div>
            <h1> Boissons<strong> </h1>
            <?php //On teste si les données nomMenu et prixMenu ont bien étaient rentrées par l'utilisateur
                 if ($_POST['nomBoisson']!=null && $_POST['prixBoisson']!=null && $_POST['volume']!=null) {
                 	  $ID =$_POST['idBoisson'];
                    $nom = $_POST['nomBoisson'];
                    $prix = $_POST['prixBoisson'];
                    $volume = $_POST['volume'];
                    $Carte =$_POST['AjoutCarte']; 
                } 
             ?>
            <?php
                    $connexion = new PDO('pgsql:host=tuxa.sme.utc;port=5432;dbname=nf17p122', 'TaeORGh5');
                    //On insère dans la table Boisson les informations correspondantes (ID et nom)
                    $sql = "INSERT INTO Boisson (ID, NomBoisson,Volume) VALUES
                     ($ID,$nom,$volume);
                     INSERT INTO Prix (IDElement, NomCarte, Prix) VALUES
                     ($ID,$Carte, $prix)";

                    $result = $connexion->prepare($sql);
                    $result->execute();
                    if ($result) {
                      echo "'Nouvelle boisson inseree";
                    }
                    else {
                      echo "Erreur lors de l'insertion";
                    }
                    $connexion=null;
            ?>
        </body>
</html>
