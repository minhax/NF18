<html lang="fr">
    <head>
      <p> Insertion réussie </p>
    </head>
        <body>
        	<div>
            <h1> Insertion de la carte réussie<strong> </h1>
            <?php if (isset($_POST['Restaurant']) && isset($_POST['Date'])) {
        $Resto = $_POST['Restaurant'];
        $Date = $_POST['Date']; 
        ?>
                    <?php
                    /** Connexion **/
                    $connexion = new PDO('pgsql:host=tuxa.sme.utc;port=5432;dbname=nf17p122', 'TaeORGh5');
                    /** Préparation et exécution de la requête **/
                    $sql = "FAIRE LA REQUETE SQL DAJOUT";
                    $result = $connexion->prepare($sql);
                    $result->execute();
                    /** Traitement du résultat **/
                    if ($result) {
                      echo "'Nouvelle carte insérée";
                    }
                    else {
                      echo "Erreur lors de l'insertion";
                    }
                    /** Déconnexion **/
                    $connexion=null;
                    ?>
        </body>
</html>
