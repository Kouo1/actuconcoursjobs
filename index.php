<?php

namespace actuconcoursjobs;

session_start();
require_once("domaine/lang.php");
require_once("fonctions.php");
require_once("testphpmail.php");
// require_once("recherche_annonce.php");
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
<head>
<title>
   <?=OFFRE_D_EMPLOI_MOT_CONCOURS_BOURSES?>
</title>
<?php require('pub.php');?>

</head>



<body>
   <?php
   require_once('menu.php');
   require_once('corrousel.php');
    require_once('adsunit.php');
   ?>
   <!-- <main>-->
   <?php
   // echo 'welcome';
   // var_dump($annonces);
   ?>
<!--<a href=https://refpa.top/L?tag=d_1084591m_97c_&site=1084591&ad=97><img src="https://1xpartners.com/img/AdAgent_1/349b47e0-4118-49b7-9efd-cfb5fcc7222a.gif" width=100%></a>-->

  
  <!-- </section>
   <section class="main-page">-->
        
        
       <!-- <div class="downLR">-->
      <!-- <div class="container mt-10  mx-auto bg-warning w-75">-->
     <!-- <div class="main-contain py-5">-->
      <div class="container py-5">

       <div class="row justify-content-around">
       <h1><?=LES_OFFRES_PUBLIEES_SUR_LA_PLATEFORME?></h1>     
       <div class="col-md-8">
       <!-- <div class="card mb-3" style="max-width: 540px;">-->
       <?php
         // var_dump($annonces);
         $i = 1;
         foreach ($annoncesPage as $annonceAccueil) : ?>

<?php $annonceIntitule = trim(strtolower(str_replace(" ", "-", trim(removeAccents($annonceAccueil->intitule)))));
				   // echo $annonceIntitule;
				    $annonceIntitule = str_replace(":", "-", $annonceIntitule);
				     $annonceIntitule = str_replace("/", "-", $annonceIntitule);
				     $annonceIntitule = str_replace("(", "-", $annonceIntitule);
				     $annonceIntitule = str_replace(")", "-", $annonceIntitule);
				     $annonceIntitule = str_replace("&", "-", $annonceIntitule);
				   //  echo couperTexte($annonceAccueil->description ,200) ;
				     //die();
				    // APPEL A CANDIDATURES INTERNES / EXTERNES POUR LE RECRUTEMENT D'UN.E EXPERT.E EN RESSOURCES HUMAINES JUNIOR TEMPORAIRE POUR LE...
				     $des=couperTexte(strip_tags($annonceAccueil->description) ,200);
				    // $des="APPEL A CANDIDATURES INTERNES / EXTERNES POUR LE RECRUTEMENT D'UN.E EXPERT.E EN RESSOURCES HUMAINES JUNIOR TEMPORAIRE POUR LE..."
;?>

        
        <div class="card mb-3 mt-5">
            <div class="row g-0 mt">
              <div class="col-md-4">
                <img src="<?=ROOT?>/images/<?=strtolower($annonceAccueil->type)?>.png" alt="<?=strtolower($annonceAccueil->type)?>" class="img-fluid rounded-start h-100" alt="job"><!--h-100 demande a l'image d'occuper 100/100 de l'espace-->
              </div>
              
              <div class="col-md-8">
                <div class="card-header  text-danger ">
                    <h4 class="text-end"><?=isPostExpired($annonceAccueil->date_limite)?></h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="annonce-<?=$annonceIntitule?>-<?=$annonceAccueil->id_annonce ?>"> <?= $annonceAccueil->intitule ?></a></h5>
                  <p class="card-text"><small class="text-lowercase"><?=$des ?></small></p>
                  <p class="card-text"><small class="btn btn-primary" ><a href="annonce-<?=$annonceIntitule?>-<?=$annonceAccueil->id_annonce ?>" class="text-white"><?=VOIR_PLUS?>...</a></small></p>
                </div>
              </div>
            </div>
          </div>
     
          <?php endforeach;
         ?>
               <div class="card mb-3 mt-5"><!--For pub-->
            <div class="row g-0 mt align-items-center">
              
              <div class="col mt-5">
             
                 <?php require('pub_bas_offre.php');?>
            
              </div>
              <div class="col mt-5">
             
                 <?php require('pub_bas_offre.php');?>
            
              </div>
            </div>
          </div><!--End For pub-->

    </div>

     <!--Debut barre laterale doite -->
    <?php
    require_once('barre laterale_droite.php');
    ?>

   <!-- <div class="col-md-4  text-center">-->
      
     </div><!--End row-->
   

    <br>

         
         <!-- display the link to the pages -->

<?php 
  $loopCounter = ((($currentPage+2) <= $numberOfPages) ? ($currentPage +2 ) : $numberOfPages);
  $startCounter = ((($currentPage-2) >= 3) ? ($currentPage - 2 ) : 1);
?>
<hr/>
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>"><a class="page-link" href="index.php?page=<?=$currentPage - 1 ?>"><<</a></li>

    <?php
    
    if($startCounter > 1 )
{
  echo '<li class="page-item  disabled"> <a class="page-link">...</a></li>';
}
    
 for($page = $startCounter; $page <= $loopCounter; $page++)
 {
   ?>
   <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>"><a class="page-link" href="index.php?page=<?=$page?>"><?=$page?></a></li>

 <?php
 }
 
 if($loopCounter < $numberOfPages)
   {
     echo '<li class="page-item  disabled"> <a class="page-link">...</a></li>';
     ?>
     <li class="page-item <?= ($currentPage == $numberOfPages) ? "active" : "" ?>"><a class="page-link" href="index.php?page=<?=$numberOfPages?>"><?=$numberOfPages?></a></li>
     <?php
   }
 ?>

<li class="page-item <?= ($currentPage == $numberOfPages) ? "disabled" : "" ?>"><a class="page-link" href="index.php?page=<?=$currentPage + 1 ?>">>></a></li>
  </ul>
</nav>
  <!-- display the link to the pages END -->

  

       </div> <!-- end container-->
       
       <!-- </div>--> <!-- end main contain-->
 <?php
   require_once('pied.php');
   require_once('scripts.php');
   
   require('pub_pied.php');
   ?>
    
  
   <!-- </main>-->

</body>

</html>