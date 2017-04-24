<!DOCTYPE html>
<html lang ="fr">
   <head>
     <title>Exo 6 URL PHP</title>
     <meta charset="utf-8">
  </head>

  <body>

<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean -->

<a href="/PHP/Exo6-php-Les-parametres-Url/index.php?nom=Jean&prenom=momo">Nom et Prénom</a>

<?php
echo (isset($_GET['prenom']) ? htmlentities($_GET['prenom']) : "Le prénom est introuvable");?>
<?php echo (isset($_GET['nom']) ? htmlentities($_GET['nom']) : "Le nom est introuvable");?>

<!-- Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean -->

<a href="/PHP/Exo6-php-Les-parametres-Url/index.php?age=25">Age</a>
<?php echo (isset($_GET['age']) ? htmlentities ($_GET['age']) : "L'age n'est pas défini"); ?>

<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016 -->

<?php echo (isset($_GET['dateDebut']) ? htmlentities ($_GET['dateDebut']) : "Date de début non défini"); ?>
<?php echo (isset($_GET['dateFin']) ?htmlentities ($_GET['dateFin']) : "Date de fin non défini"); ?>

<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?langage=PHP&serveur=LAMP -->

<?php echo (isset($_GET['langage']) ? htmlentities ($_GET['langage']) : "Language introuvable !"); ?>
<?php echo (isset($_GET['server']) ? htmlentities ($_GET['server']) : "Type de serveur introuvable !"); ?>

<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?semaine=12 -->

<?php echo (isset($_GET['semaine']) ? htmlentities ($_GET['semaine']) : "Semaine inexistante !"); ?>

<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?batiment=12&salle=101 -->

<?php echo (isset($_GET['batiment']) ? htmlentities ($_GET['batiment']) : "Batiment introuvable"); ?>
<?php echo (isset($_GET['salle']) ? htmlentities ($_GET['salle']) : "Salle introuvable"); ?>


  </body>

</html>
