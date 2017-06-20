<html lang="fr">
    <head>
      <p> Cartes </p>
    </head>
        <body>
        	<div>
            <h1> Bienvenue chez Hell's Kitchen <strong> </h1>
              <h2>Affichage des menus présents sur les cartes dans les restaurants<strong></h2>
                      <?php
                          /** Connexion **/
                          $connexion = new PDO('pgsql:host=tuxa.sme.utc;port=5432;dbname=nf17p122', 'TaeORGh5');

                          /** Préparation et exécution de la requête **/
                          $sql = "SELECT R.Nom,C.Nom,M.NomMenu,P.Prix
                                      FROM Menu M,Prix P,Carte C, Restaurant R, Periode PE
                                      Where M.ID = P.IDElement
                                      AND PE.IDRestau = R.ID
                                      AND P.NomCarte=C.Nom
                                      group BY M.NomMenu,R.Nom,C.Nom,M.ID,M.NomMenu,P.Prix
                                      ORDER BY R.Nom;";
                          $resultset = $connexion->prepare($sql);
                          $resultset->execute();

                          /** Traitement du résultat **/
                          echo "<Menus sur les cartes ainsi que leurs prix>";
                          while ($row = $resultset->fetch(PDO::FETCH_ASSOC)) {
                          echo  $row['C.Nom'] . "'Nom du menu: '" . $row['M.NomMenu'] ."'Prix: ' ". $row['P.Prix'] . "'/>";
                          }
                          /** Déconnexion **/
                          $connexion=null;
                      ?>
                <h2> Affichage des Plats à la carte:<strong> </h2>
                      <?php
                          /** Connexion **/
                          $connexion = new PDO('pgsql:host=tuxa.sme.utc;port=5432;dbname=nf17p122', 'TaeORGh5');

                          /** Préparation et exécution de la requête **/
                          $sql = "SELECT Carte.Nom,Plat.NomPlat,Prix.Prix
                                  FROM Plat,Prix,Carte
                                  WHERE Plat.ID=Prix.IDElement
                                  AND Carte.Nom=Prix.NomCarte
                                  ORDER BY Carte.Nom;";
                          $resultset = $connexion->prepare($sql);
                          $resultset->execute();

                          /** Traitement du résultat **/
                          echo "<Plats>";
                          while ($row = $resultset->fetch(PDO::FETCH_ASSOC)) {
                          echo  $row['Carte.Nom'] . "'Nom du plat:  '" . $row['Plat.NomPlat'] ."'Prix: ' ". $row['Prix.Prix'] . "'/>";
                          }
                          /** Déconnexion **/
                          $connexion=null;
                      ?>
                      <h2> Affichage des boissons <strong> </h2>
                        <?php
                            /** Connexion **/
                            $connexion = new PDO('pgsql:host=tuxa.sme.utc;port=5432;dbname=nf17p122', 'TaeORGh5');

                            /** Préparation et exécution de la requête **/
                            $sql = "SELECT C.Nom,B.NomBoisson,P.Prix
                                    FROM Boisson B,Prix P,Carte C
                                    WHERE B.ID=P.IDElement
                                    AND P.NomCarte=C.Nom
                                    ORDER BY C.Nom;";
                            $resultset = $connexion->prepare($sql);
                            $resultset->execute();

                            /** Traitement du résultat **/
                            echo "<Boissons>";
                            while ($row = $resultset->fetch(PDO::FETCH_ASSOC)) {
                            echo  $row['C.Nom'] . "'Nom de la boisson:  '" . $row['B.NomBoisson'] ."'Prix: ' ". $row['P.Prix'] . "'/>";
                            }
                            /** Déconnexion **/
                            $connexion=null;
                        ?>
          </div>
        </body>
</html>
