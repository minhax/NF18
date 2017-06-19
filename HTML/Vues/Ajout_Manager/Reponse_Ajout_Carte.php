<html lang="fr">
    <head>
      <p> Insertion réussie </p>
    </head>
        <body>
        	<div>
            <h1> Insertion de la carte réussie<strong> </h1>
            <?php
                 if (isset($_POST['nom']) && isset($_POST['DateDebut']) && isset($_POST['DateFin'])) {
                    $nom = $_POST['nom'];
                    $DateDebut = $_POST['DateDebut'];
                    $DateFin = $_POST['DateFin']; 
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
                      echo "'Nouvelle carte insérée";
                    }
                    else {
                      echo "Erreur lors de l'insertion";
                    }
                    $connexion=null;
            ?>
        </body>
</html>
