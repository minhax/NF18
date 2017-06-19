<html lang="fr">
    <head>
      <p> Insertion réussie </p>
    </head>
        <body>
        	<div>
            <h1> Insertion de la commande <strong> </h1>
                    <?php
                    // on teste la déclaration de nos variables
      if (isset($_POST['Restaurant']) && isset($_POST['Date'])) {
        $Resto = $_POST['Restaurant'];
        $Date = $_POST['Date']; 
        /* Il faut trouver comment on peut récupérer le dernier identifiant de notre BDD et l'incrémenter de 1. Puis il faudra juste insert dans la table Commande */
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
                      echo "'Nouvelle commande insérée";
                    }
                    else {
                      echo "Erreur lors de l'insertion";
                    }
                    /** Déconnexion **/
                    $connexion=null;
                    ?>
        </body>
</html>
