<?php
namespace actuconcoursjobs;
session_start();

require_once("domaine/lang.php");
require_once("fonctions.php");
?>
<html>
<?php
//on definit une constante contenant le dossier racine du projet

use actuconcoursjobs\Controllers\AnnoncesController;

require_once('Controllers/Controller.php');
require_once('Controllers/AnnoncesController.php');
$controller = new AnnoncesController;
$annonces = $controller->annoncesParAnnonceur($_SESSION['connectedUser']['email']);

    require_once('entete.php');?>
    <title>Vos offres publiées</title>
</head>
    

<body>
<?php

require_once('menu.php');
require_once('corrousel.php');
?>
<!-- <main> -->
<?php
   // echo 'welcome';
   // var_dump($annonces);
?>


<section class="annonces">

<div class="annonce">
    

         <div class="titre">
            <!-- Pour rechercher -
            <div class="search">
<input type="search" id="search_annonce" placeholder="Rechercher une offre">
           </div>
           <div style="margin-top : 20px">
            <div id="result_search"></div>
            </div>
     <br/>  -->
       <!--Fin Pour rechercher -->
            <h1>Vos offres publiées sur la plateforme</h1>
         </div>



         <?php
         // var_dump($annonces);
         $i = 1;
         foreach ($annonces as $annonceAccueil) : ?>

            <div class="annonce">
               <div class="left">
               <img src="<?=ROOT?>/images/<?=strtolower($annonceAccueil->type)?>.png" alt="<?=strtolower($annonceAccueil->type)?>">
               </div>
               <div class="right">
                  <p class="date>"></p>
                  <?php $annonceIntitule = trim(strtolower(str_replace(" ", "-", trim(removeAccents($annonceAccueil->intitule)))));
				   // echo $annonceIntitule;
				    $annonceIntitule = str_replace(":", "-", $annonceIntitule);
				     $annonceIntitule = str_replace("/", "-", $annonceIntitule);
					;?>
                  <h2><a href="#"> <?= $annonceAccueil->intitule ?></a></h2>
                  <!--On appelle la methode 'lire' du controlleur 'Utilisateur' Eviter l'espace  -->
                  <p class="description">
                  
                  <?= couperTexte($annonceAccueil->description ,200) ?>
                  <br/>
                   <!--  <a href=""></a>&nbsp;&nbsp;&nbsp;-->
                   <a href="modifierAnnonce.php?id=<?=$annonceAccueil->id_annonce?>"><img src="<?=ROOT?>/images/edit.png" alt="Modifier" height="15" width="15"></a>&nbsp;&nbsp;&nbsp;
                       &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
                   <a href="">
                  <img src="<?=ROOT?>/images/delete.png" alt="Supprimer" height="15" width="15"></a>
                  </p>
                  
                    &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
                   <a href="EnvoyerOffre.php">
                   ENYOYER PAR MAIL</a>
                  </p>

                  <p class="auteur">
                      
                  </p>
               </div>
            </div>


         <?php endforeach;
         ?>
      </div>

   
</section>
<!--</main>-->
<?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
 
</body>
</html>