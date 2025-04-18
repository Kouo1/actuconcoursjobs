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
<title>
    Offres d'Emplois, concours, bourses au cameroun
</title>
</head>



<body>
   <?php
   require_once('menu.php');
   require_once('corrousel.php');
   ?>
   <!-- <main>-->
   <?php
   // echo 'welcome';
   // var_dump($annonces);
   ?>
<!--<a href=https://refpa.top/L?tag=d_1084591m_97c_&site=1084591&ad=97><img src="https://1xpartners.com/img/AdAgent_1/349b47e0-4118-49b7-9efd-cfb5fcc7222a.gif" width=100%></a>-->

   <section class="annonces">

      <div class="sloganjobsaccueil">
         <!-- <img src="images/sloganjobs.jpg" alt="Trouvez le job de vos reves" width="100%"/>-->
         <h1><?=TROUVEZ_LE_JOB_DE_VOS_REVES?> </h1>
         <form action="afficherAnnonces.php" id="formEnSavoirPlus" method="GET">
         <input type="hidden" name="typeAnnonce" id="typeAnnonce" value="JOBS">
            <button type="submit"><?=EN_SAVOIR_PLUS?>--></button>
         </form>
      </div>
      <div class="sloganconcoursaccueil">
         <!-- <img src="images/sloganjobs.jpg" alt="Trouvez le job de vos reves" width="100%"/>-->
         <div class="left">
            <h1><?=LES_DERNIERS_CONCOURS_LANCES?> </h1>
            <form action="afficherAnnonces.php" id="formEnSavoirPlusC" method="GET">
            <input type="hidden" name="typeAnnonce" id="typeAnnonce" value="CONCOURS">
               <button type="submit"><?=EN_SAVOIR_PLUS?>--></button>
            </form>
         </div>
         <div class="right">
            <h1><?=OBTENEZ_UNE_BOURSE_ET_ETUDIEZ_A_L_ETRANGER?> </h1>
            <form action="afficherAnnonces.php" id="formEnSavoirPlusB" method="GET">
            <input type="hidden" name="typeAnnonce" id="typeAnnonce" value="BOURSE">
               <button type="submit"><?=EN_SAVOIR_PLUS?>--></button>
            </form>
         </div>



      </div>
        <br>
        
        <div class="downLR">
          <div class="downLeft">
      
         <div class="titre">
            <h1>Les récentes offres publiées sur la plateforme</h1>
         </div>

    <br>

         <?php
         // var_dump($annonces);
         $i = 1;
         foreach ($annoncesPage as $annonceAccueil) : ?>

            <div class="annonce">
               <div class="left">
                
                  <img src="<?=ROOT?>/images/<?=strtolower($annonceAccueil->type)?>.png" alt="<?=strtolower($annonceAccueil->type)?>">
               </div>
               <div class="right">
                   <div class="text-rightExpired">
                  <?=isPostExpired($annonceAccueil->date_limite)?>
                  </div>
                  
                  <?php $annonceIntitule = trim(strtolower(str_replace(" ", "-", trim(removeAccents($annonceAccueil->intitule)))));
				   // echo $annonceIntitule;
				    $annonceIntitule = str_replace(":", "-", $annonceIntitule);
				     $annonceIntitule = str_replace("/", "-", $annonceIntitule);
				     $annonceIntitule = str_replace("(", "-", $annonceIntitule);
				     $annonceIntitule = str_replace(")", "-", $annonceIntitule);
				     $annonceIntitule = str_replace("&", "-", $annonceIntitule);
				     
					;?>
                  <h2><?= $i++; ?><a href="annonce-<?=$annonceIntitule?>-<?=$annonceAccueil->id_annonce ?>"> <?= $annonceAccueil->intitule ?></a></h2>
            
                  <!--On appelle la methode 'lire' du controlleur 'Utilisateur' Eviter l'espace  -->
                  <p class="description">
                  
                     <?= couperTexte($annonceAccueil->description ,200) ?>
                  </p>

                  <p class="auteur">

                  </p>
               </div>
            </div>


         <?php endforeach;
         ?>
         
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

      </div>

      <div class="downRight">
      <h3> Recevez toutes les offres correspondant à votre domaine dans votre boîte mail.</h3>
      <form method="$_POST" id="formNotifications">
         <input type="email" id="mail" name="mail" placeholder="Votre email"><br/>
         <!--Nous ne partagerons jamais votre email avec qui que ce soit.--><br/>
         <span class="email_feedback"></span><br/>
         <input type="submit" value="S'ABONNER">
      </form>
      
     <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/h_Z8SRsZSe8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

   <!--  <a target="_blank"  href="https://www.amazon.fr/gp/search/ref=as_li_qf_sp_sr_il?ie=UTF8&tag=kps0f8-21&keywords=telephone&index=aps&camp=1642&creative=6746&linkCode=ur2&linkId=51a201ed1208e08ae9846d2c07ded725"><img border="0" src="//ws-eu.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=FR&ASIN=B08XJXNN9N&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=kps0f8-21" ></a>
      <a target="_blank"  href="https://www.amazon.fr/gp/search/ref=as_li_qf_sp_sr_il?ie=UTF8&tag=kps0f8-21&keywords=integral transforms in computational heat and fluid flow&index=aps&camp=1642&creative=6746&linkCode=ur2&linkId=2aeb4d08b3d9e4d41fb35ca989d73cf5"><img border="0" src="//ws-eu.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=FR&ASIN=B08R2C8FH9&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=kps0f8-21" ></a>
    <a target="_blank"  href="https://www.amazon.fr/gp/search/ref=as_li_qf_sp_sr_il?ie=UTF8&tag=kps0f8-21&keywords=ordinateur&index=aps&camp=1642&creative=6746&linkCode=ur2&linkId=9bb1273d857ad8fd44f171cef1c70f85"><img border="0" src="//ws-eu.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=FR&ASIN=B09145YJF1&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=kps0f8-21" ></a>
   <a href=https://refpa.top/L?tag=d_1084591m_97c_&site=1084591&ad=97><img src=https://1xpartners.com/img/AdAgent_1/f6d90315-e3ae-4b13-b275-971ed906f370.gif></a>-->
  <!-- <a href=https://refpa.top/L?tag=d_1084591m_97c_&site=1084591&ad=97><img src=https://1xpartners.com/img/AdAgent_1/80505630-3705-414f-82c9-c7ad49d72a1c.gif></a>-->
   
      </div>
            </div>


 <?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
   </section>
   <!-- </main>-->

</body>

</html>