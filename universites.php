<?php

namespace actuconcoursjobs;

session_start();
require_once("domaine/lang.php");
require_once("fonctions.php");
require_once("testphpmail.php");
?>
<html>

<?php
//header('Content-Type: text/html; charset=iso-8859-1');//pour faire fonctionner les accents
//header('Content-Type: text/html; charset=iso-8859-1');//pour faire fonctionner les accents
//on definit une constante contenant le dossier racine du projet

use actuconcoursjobs\Controllers\AnnoncesController;
//use actuconcoursjobs\Controllers\MainController;
//use actuconcoursjobs\Models\UtilisateursModel;
use actuconcoursjobs\Models\AnnoncesModel;
//use actuconcoursjobs\Main\StartApp;

/**
 *nous utilisons un autoloader pour eviter une multitude require_once 
 */
//require_once 'Autoloader.php';

require('Controllers/Controller.php');
require('Controllers/AnnoncesController.php');
$controller = new AnnoncesController;
$annonces = $controller->annoncesAccueil();
//  var_dump($annonces);

 
/*Pagination*/
 $nombreElements = count($annonces);

 //number of results per page
 $results_per_page = 10;
 //number of page
 $numberOfPages = ceil($nombreElements/$results_per_page);

 //Determiner la page qui est entrain d'etre visite par l'utilisateur
 if(!isset($_GET['page']) || empty($_GET['page']))
 {
    $currentPage = 1;
 }
 else{
    $currentPage = (int) strip_tags($_GET['page']);
 }

 //determine the sql LIMIT starting number for the results on the displaying page
 $this_page_first_result = ($currentPage-1)*$results_per_page;

 //Retrieve selected results on the database and display them on the screen
 // retrieve selected results from database and display them on page
$annoncesPage = $controller->annoncesAccueil(' LIMIT ' . $this_page_first_result . ',' .  $results_per_page);
 
/*Pagination END*/

require_once('entete.php');
?>
<title>
    Offres d'Emplois, concours, bourses au cameroun
</title>
</head>



<body>
   <?php

   require_once('menu.php');
  // require_once('corrousel.php');
   ?>
   bonjour
 <?php
  // require_once('pied.php');
   require_once('scripts.php');
   ?>
  
   <!-- </main>-->

</body>

</html>