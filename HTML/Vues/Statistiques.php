<html lang="fr">
    <head>
      <p> Cartes </p>
    </head>
        <body>
        	<div> /**Div est un conteneur **/
            <h1> Statistiques <strong> </h1>
              <h2>Classement des plats les plus commandés<strong></h2>
                      <?php
                          /** Connexion **/
                          $connexion = new PDO('pgsql:host=localhost;port=5432;dbname=Hells Kitchen', 'Manager', 'public');
                          /** Préparation et exécution de la requête **/
                          $sql = "SELECT P.NomPlat, sum(QE.Quantite) AS quantite
                                  FROM Plat P, Menu M, ContenuMenu CM, QuantiteElem QE
                                  WHERE (QE.IDElement=P.ID
                                  AND CM.IDPlat=P.ID
                                  AND M.ID=CM.IDMenu)
                                  OR (QE.IDElement = M.ID
                                  AND P.ID = CM.IDPlat
                                  AND CM.IDMenu = M.ID)
                                  GROUP BY P.NomPlat
                                  ORDER BY SUM(QE.Quantite) DESC";
                          $resultset = $connexion->prepare($sql);
                          $resultset->execute();

                          /** Traitement du résultat **/
                          echo "Plats les plus commandés";
                          while ($row = $resultset->fetch(PDO::FETCH_ASSOC)) {
                          echo "'Nom du plat: '" . $row[P.NomPlat] . "'Quantitee de plat commandé: '" . $row['quantite']  ;
                          }
                          /** Déconnexion **/
                          $connexion=null;
                      ?>
                <h2> Les plats a base de viande sont-ils plus commandes que les plats à base de poisson?<strong> </h2>
                      <?php
                          /** Connexion **/
                          $connexion = new PDO('pgsql:host=localhost;port=5432;dbname=Hells Kitchen', 'Manager', 'public');

                          /** Préparation et exécution de la requête **/
                          $sql = "SELECT P.Categorie, COUNT(P.Categorie) AS Quantite  /**fonctionne?**/
                          FROM Plat P, Menu M, ContenuMenu CM, QuantiteElem QE
                          WHERE (QE.IDElement=P.ID
                          AND CM.IDPlat=P.ID
                          AND M.ID=CM.IDMenu
                          AND(P.Categorie='poisson'OR P.Categorie='viande'))
                          OR (QE.IDElement = M.ID
                          AND P.ID = CM.IDPlat
                          AND CM.IDMenu = M.ID
                          AND(P.Categorie='poisson'OR P.Categorie='viande'))
                          GROUP BY P.Categorie
                          ORDER BY SUM(QE.Quantite) DESC";
                          $resultset = $connexion->prepare($sql);
                          $resultset->execute();

                          /** Traitement du résultat **/
                          echo "<Plats>";
                          while ($row = $resultset->fetch(PDO::FETCH_ASSOC)) {
                          echo  "'Categorie: '" . $row['P.Categorie'] . "'Quantite:  '" . $row['Quantite'] ;
                          }
                          /** Déconnexion **/
                          $connexion=null;
                      ?>
                      <h2> Il y a t il plus de plats commandes a base de viande qu'a base de poisson? <strong> </h2>
                        <?php
                            /** Connexion **/
                            $connexion = new PDO('pgsql:host=localhost;port=5432;dbname=Hells Kitchen', 'Client', 'public');

                            /** Préparation et exécution de la requête **/
                            $sql = "SELECT P.Categorie, COUNT(P.NomPlat) AS quantite
                            FROM Plat P, QuantiteElem QE
                            WHERE (P.Categorie='poisson'OR P.Categorie='viande')
                            AND QE.IDElement=P.ID
                            GROUP BY P.Categorie
                            HAVING COUNT(QE.Quantite)>0";
                            $resultset = $connexion->prepare($sql);
                            $resultset->execute();

                            /** Traitement du résultat **/
                            echo "<Resultat>";
                            while ($row = $resultset->fetch(PDO::FETCH_ASSOC)) {
                            echo  "'Categorie: '" . $row['P.Categorie'] . "'Quantite:  '" . $row['quantite'] ;
                            }
                            /** Déconnexion **/
                            $connexion=null;
                        ?>
                        <h2> Somme moyenne depensee pour les desserts pour chaque commande <strong> </h2>
                          <?php
                              /** Connexion **/
                              $connexion = new PDO('pgsql:host=localhost;port=5432;dbname=Hells Kitchen', 'Client', 'public');

                              /** Préparation et exécution de la requête **/
                              $sql = "SELECT P.t AVG(SUM(PR.Prix)*QE.Quantite) AS moyenne
                                      FROM Plat P, Prix Pr, QuantiteElem QE
                                      WHERE P.t='Dessert'
                                      AND QE.IDElement=P.ID
                                      AND Pr.IDElement=P.ID
                                      GROUP BY P.t";
                              $resultset = $connexion->prepare($sql);
                              $resultset->execute();

                              /** Traitement du résultat **/
                              echo "<Resultat>";
                              while ($row = $resultset->fetch(PDO::FETCH_ASSOC)) {
                              echo  "'Dessert: '" . $row['P.t'] . "'Quantite:  '" . "'Somme moyenne des desserts: '" . $row['moyenne'] ;
                              }
                              /** Déconnexion **/
                              $connexion=null;
                          ?>
          </div>
        </body>
</html>
