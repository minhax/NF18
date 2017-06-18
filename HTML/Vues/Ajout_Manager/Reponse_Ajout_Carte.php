<html lang="fr">
    <head>
      <p> Insertion réussie </p>
    </head>
        <body>
        	<div>
            <h1> Insertion de la carte réussie<strong> </h1>
                    <?php
                    /** Connexion **/
                    $connexion = new PDO('pgsql:host=localhost;port=5432;dbname=test', 'Ajout_carte', 'manager');
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
