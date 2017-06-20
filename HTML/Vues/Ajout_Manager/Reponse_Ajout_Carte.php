<html lang="fr">
    <head>
      <title> Ajout d'une carte </title>
    </head>
        <body>
            <h1> Insertion de la carte reussie<strong> </h1>
            <?php
                 if (null!== $_POST['nomCarte'] && null!== $_POST['DateDebut'] && null!==$_POST['DateFin']) {
                    $nom = $_POST['nomCarte'];
                    $DateDebut = $_POST['DateDebut'];
                    $DateFin = $_POST['DateFin']; }
             ?>
            <?php
                    $connexion = new PDO('pgsql:host=tuxa.sme.utc;port=5432;dbname=nf17p122', 'TaeORGh5');
                    $sql = "INSERT INTO Carte (Nom) VALUES
                     ( $nom);
                     INSERT INTO Periode (IDRestau, NomCarte,DateDebut,DateFin) VALUES
                     (";
                    $result = $connexion->prepare($sql);
                    $result->execute();
                    if ($result) {
                      echo "'Nouvelle carte inseree";
                    }
                    else {
                      echo "Erreur lors de l'insertion";
                    }
                    $connexion=null;
            ?>
        </body>
</html>
