<html>
  <head>
      <title>Client/Manager</title>
  </head>
    <body>
        <?php
      // on teste la déclaration de nos variables
      if (isset($_POST['nom']) && isset($_POST['fonction'])) {
  $fonction = $_POST['fonction']; 
        // on propose les choix en fction du poste
        if($fonction=="Manager" || $fonction=="manager"){
            echo "<p><a href='Vues/Espace_Manager.php'>Espace $fonction</a><br/></p>
              <p><a href='Vues/Statistiques.php'> Statistiques $fonction </a><br/></p>"; /*Fait!*/
        }
        elseif ($fonction=="Client" || $fonction =="client"){
          echo "<a href='Vues/Vues_Client/Carte_Client.php'>Visualisation des cartes</a><br/>"; /*RequetesSQLarefaire */
        }
  elseif ($fonction=="Serveur" || $fonction=="serveur"){
          echo "<a href='Vues/Vues_Serveur/Ajout_commande.php'>Ajout dune commande</a><br/>";
        }
      }
      ?>
    </body>
</html>

