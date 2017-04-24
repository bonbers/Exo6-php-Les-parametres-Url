<!DOCTYPE html>
<html lang ="fr">
   <head>
     <title>Exo 6 URL PHP</title>
     <meta charset="utf-8">
  </head>

  <body>

<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean -->


<a href="/PHP/Exo6-php-Les-parametres-Url/index.php?nom=Nemare&amp;prenom=Jean">Test Nom Prenom !</a>
<p>Bonjour <?php echo $_GET['prenom']; ?> !</p>
<p>Bonjour <?php echo $_GET['prenom'] . ' ' . $_GET['nom']; ?> !</p>

<!-- Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean -->

<a href="/PHP/Exo6-php-Les-parametres-Url/index.php?nom=Nemare&amp;prenom=Jean&amp;age=25">Test Age Nom Prenom !</a>
<a href="/PHP/Exo6-php-Les-parametres-Url/index.php?nom=Nemare&amp;prenom=Jean">Test Nom Prenom sans age !</a>
<p>Bonjour <?php echo $_GET['prenom'] . ' ' . $_GET['nom'] . ' ' . $_GET['age']; ?></p>
<p>test push</p>
  </body>

</html>
