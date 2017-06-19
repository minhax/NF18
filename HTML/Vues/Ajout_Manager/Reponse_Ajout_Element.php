<html lang="fr">
    <head>
      <p> Insertion réussie </p>
    </head>
        <body>
        	<div>
            <h1> Insertion de la carte réussie<strong> </h1>
            <?php
                 if (isset($_POST['Element'])) {
	                    $nom = $_POST['Element'];
	                    	if($nom == 'Menu') {
	          ?>
			                  <form action="Reponse_Ajout_Menu.php" method="post">
			                  <input name="idMenu" type="hidden" value="<?php echo ($modif? $Menu['ID'] : '-1') ?>"> 
			                  <p>Nom du menu : <input name="nomMenu" type="text" placeholder="Nom du menu" size="15" </p>
			                  <p>Prix du menu : <input name="prixMenu" type="text" placeholder="Prix" size="15"</p>
			                  <p>Ajout à une carte? : <input name="AjoutCarte" type="text" size="25"</p>
			                  <input type="submit" value="Enregistrer">
			           		  </form>
	                    	}
	                    	<?php
	                    	elseif($nom =='Boisson'){
	                    	?>
	                    	<form action="Reponse_Ajout_Boisson.php" method="post">
			                  <input name="idBoisson" type="hidden" value="<?php echo ($modif? $Boisson['ID'] : '-1') ?>">
			                  <p>Nom de la boisson : <input name="nomBoisson" type="text" placeholder="Nom de la boisson" size="15" </p>
			                  <p>Volume : <input name="volume" type="text" placeholder="Prix" size="15"</p>
			                  <p>Prix de la boisson : <input name="prixBoisson" type="text" placeholder="Prix" size="15"</p>
			                  <p>Ajout à une carte? : <input name="AjoutCarte" type="text" size="25"</p>
			                  <input type="submit" value="Enregistrer">
			           		  </form>
	                    	}
	                    	<?php
	                    	elseif ($nom=='Plat Principal') {
	                    	?>
	                    		<form action="Reponse_Ajout_PP.php" method="post">
			                  <input name="idPP" type="hidden" value="<?php echo ($modif? $Plat['ID'] : '-1') ?>">
			                  <input name="type" type="hidden" value="<?php echo ($modif? $Plat['type'] : 'Plat Principal') ?>">
			                  <p>Nom du Plat Principal : <input name="nomPP" type="text" placeholder="Nom du PP" size="15" </p>
			                  <p>Catégorie : <input name="categorie" type="text" placeholder="categorie" size="15"</p>
			                  <p>Prix du plat : <input name="prixPP" type="text" placeholder="Prix" size="15"</p>
			                  <p>Ajout à une carte? : <input name="AjoutCarte" type="text" size="25"</p>
			                  <input type="submit" value="Enregistrer">
			           		  </form>
	                    	}
	                    	<?php
	                    	elseif ($nom=='Entree') {
	                    	?>
	                    		<form action="Reponse_Ajout_Entree.php" method="post">
			                  <input name="idEntree" type="hidden" value="<?php echo ($modif? $Plat['ID'] : '-1') ?>">
			                  <input name="type" type="hidden" value="<?php echo ($modif? $Plat['type'] : 'Entree') ?>">
			                  <p>Nom de l'entree : <input name="nomEntree" type="text" placeholder="Nom de l'entree" size="15" </p>
			                  <p>Catégorie : <input name="categorie" type="text" placeholder="categorie" size="15"</p>
			                  <p>Prix du plat : <input name="prixEntree" type="text" placeholder="Prix" size="15"</p>
			                  <p>Ajout à une carte? : <input name="AjoutCarte" type="text" size="25"</p>
			                  <input type="submit" value="Enregistrer">
			           		  </form>
	                    	}
	                    	<?php
	                    	elseif ($nom=='Dessert') {
	                    	?>
	                    		<form action="Reponse_Ajout_Entree.php" method="post">
			                  <input name="idDessert" type="hidden" value="<?php echo ($modif? $Plat['ID'] : '-1') ?>">
			                  <input name="type" type="hidden" value="<?php echo ($modif? $Plat['type'] : 'Dessert') ?>">
			                  <p>Nom du dessert : <input name="nomDessert" type="text" placeholder="Nom de l'entree" size="15" </p>
			                  <p>Catégorie : <input name="categorie" type="text" placeholder="categorie" size="15"</p>
			                  <p>Prix du plat : <input name="prixDessert" type="text" placeholder="Prix" size="15"</p>
			                  <p>Ajout à une carte? : <input name="AjoutCarte" type="text" size="25"</p>
			                  <input type="submit" value="Enregistrer">
			           		  </form>
	                    	}

                } 
        </body>
</html>
