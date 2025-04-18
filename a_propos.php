<php namespace actuconcoursjobs;?>
<!DOCTYPE html>
<html>
<?php
session_start(); // Démarrage de la session

require_once("domaine/lang.php");
require_once("fonctions.php");
require_once('entete.php');
 
use actuconcoursjobs\Controllers\AnnoncesController;

require('Controllers/Controller.php');
require('Controllers/AnnoncesController.php');
$controller = new AnnoncesController;
$annonces = $controller->annoncesAccueil();



?>

<body>
   
      <?php  require_once('menu.php');
      require_once('corrousel.php');
      ?>
       
            <div class="container">
     
<h2><strong>À propos de Actuconcoursjobs</strong></h2>
<p>Actuconcoursjobs est une plateforme camerounaise qui présente les opportunités 
(Concours, bourses,jobs et examens) aux étudiants et chercheurs d’emplois</p>


Mission<br>
Actuconcoursjobs a pour mission d’accompagner les étudiants et chercheurs d’emplois dans le processus de 
recherche de bourse et d’emplois en leurs fournissant des informations fiables en temps réel.
</div>

               
          <?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
</body>
</html>