# Conception du site

## Dans un premier temps, il faut établir la relation entre le client web et le serveur.
## On va envoyer des données au serveur via la requête POST. Utilisation d'un formulaire afin de proposer un interface ou l'utilisateur humain pourra saisir des données

```
<form metho="get" action="test.php">
	<p><label>Restaurant</label> <input type="text" name="nom"></p>
	<p><label>Prénom</label> <input type="text" name="prenom"></p>
	<p><label>Age</label> <input type="text" name="age"></p>
	<p><input type="submit"></p>
</form>
```


###Afin de mettre en ligne notre fichier HTML sur les serveurs UTC
- Déposer les fichiers dans le public.html
- http://tuxa.sme.utc/~nf17pXXX/monfichier.html
- Il faut les droits en lecture sur les fichiers (chmod 644) et sur les dossiers (chmod 755).

On va se connecter a PostgresSQL avec PDO en php
Cela nous permet de faciliter le travail sur les requêtes

```
$conn = new PDO('pgsql:host=hostname;port=5432;dbname=db', 'user', 'pass');
```

*Exécution des requêtes SQL*

```
$sql = "...";
$resultset = $connexion->prepare($sql);
$resultset->execute();
```
*Traitement des résultats de requête SQL*
```
while ($row = $resultset->fetch(PDO::FETCH_ASSOC)) {
	... $row['...'];
	}

```


On veut que le client ai accès en lecture seulement à certaines tables. Pour cela, il faut exécuter les requêtes SQL pour le serveur.

<?php

**Connexion**
```
$connexion = new PDO('pgsql:host=localhost;port=5432;dbname=test', 'test', 'test');
```

**Préparation et exécution de la requête**
```
$sql = "INSERT INTO medicament (nom) VALUES ('Nouveau')";
$result = $connexion->prepare($sql);
$result->execute();
```


**Traitement du résultat**
```
if ($result) {
  echo "'Nouveau' inséré";
}
else {
  echo "Erreur lors de l'insertion";
}
```
**Déconnexion**

```
$connexion=null;
?>
```
