<html>
  <head>
      <title>Client/Manager</title>
  </head>
  <body>
        <?php
      // on teste la déclaration de nos variables
      if (isset($_POST['nom']) && isset($_POST['fonction'])) {
      	// on propose les choix en fction du poste
        if($_POST['fonction']="Manager" || $_POST['fonction'] =="manager"){
          <p><a href="Vues/REMPLIRAVECVUEMANAGER">Gestion du personnel</a><br /></p>
            <p><a href="Vues/REMPLIRAVECVUEMANAGER">Edition des cartes</a><br /></p>
              <p><a href="Vues/Statistiques.php"> Statistiques</a><br /></p>
        }
        elseif ($_POST['fonction']="Client" || $_POST['fonction'] =="client"){
          <a href="Vues/Vues_Carte_Client.php">Visualisation des cartes</a><br />
        }
      }
      ?>
  </body>
</html>
