<html lang="fr">
    <head>
        <?php
            require_once './src/view/header.php';
        ?>
    </head>
    <body>
	<?php require_once './src/view/menu.php'; ?>
	<div> /**Div est un conteneur **/
            <h1>Affichage des menus présents sur les cartes dans les restaurants</h1>
            <?php

                  /** Connexion **/
                  $connexion = new PDO('pgsql:host=localhost;port=5432;dbname=Hells Kitchen', 'Client', 'public');

                  /** Préparation et exécution de la requête **/
                  $sql = "SELECT R.Nom,C.Nom,M.ID,M.NomMenu,P.Prix
                  FROM Menu M,Prix P,Carte C, Restaurant R, Periode PE
                  Where M.ID = P.IDElement
                  AND PE.IDRestau = R.ID
                  AND P.NomCarte=C.Nom
                  group BY M.NomMenu,R.Nom,C.Nom,M.ID,M.NomMenu,P.Prix
                  ORDER BY R.Nom;";
                  $resultset = $connexion->prepare($sql);
                  $resultset->execute();

                  /** Traitement du résultat **/
                  echo "<catalogue>";
                  while ($row = $resultset->fetch(PDO::FETCH_ASSOC)) {
                  echo "<figurine designation='" . $row['designation'] . "' prix='" . $row['prix'] . "'/>";
                  }
                  echo "</catalogue>";

                  /** Déconnexion **/
                  $connexion=null;

                  ?>
</div>
    </body>
</html>
