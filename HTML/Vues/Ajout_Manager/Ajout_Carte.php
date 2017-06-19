<html>
  <head>
      <title>Ajout d'une Carte</title>
  </head>
  <body>
      <h1> Veuillez entrer les informations </h1>
        
        <form action="" method="get">
                <input name="action" type="hidden" value="enregistrerCarte">
                <input name="idCarte" type="hidden" value="<?php echo ($modif? $carte['idcarte'] : '-1') ?>">
                  <p>Nom de la Carte : <input name="nomCarte" type="text" placeholder="Nom de la carte" size="15" 
                  <?php
                      echo ($modif? 'value = "'.$carte['nomcarte'].'"' : '') 
                  ?><br/> </p>
                  <p>Date de début : <input name="dateDebut" type="text" placeholder="jj/mm/aaaa" size="15" 
                  <?php 
                     echo ($modif? 'value = "'.$carte['datedebut'].'"' : '')
                  ?><br/></p>
                  <p>Date de fin : <input name="dateFin" type="text" placeholder="jj/mm/aaaa" size="15"
                  <?php
                  echo ($modif? 'value = "'.$carte['datefin'].'"' : '')
                  ?><br/><p></p>
                <input type="submit" value="Enregistrer">
            </form>
  </body>
</html>
