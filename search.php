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



if(isset($_GET['search-box']) && !empty($_GET['search-box'])) {
   
    $champ = mb_strtolower(strip_tags(trim(htmlspecialchars($_GET['search-box']))));
    $_SESSION['champRecherche'] = $champ;
   
        //on enleve les stopwords   
    $champClean = optimizeSearchString($champ);

    // on sépare les différents mots clés
    $keywords = explode(' ', $champClean);
    
    $like = "";
    foreach($keywords as $keyword) {
        
        if(strlen($keyword) >= 3) {
            // On concatène
            $like.= " description LIKE '%".$keyword."%' OR";
        }
    }
    // 0n retire le dernier OR qui n'a pas lieu d'être
    $like = substr($like, 0, strlen($like) - 3);
     if($like != "")
     {
    $_SESSION['cureentSearchValue'] = $like;
    $annonces = $controller->annoncesRechercher($like);
     }
     else
     {
        unset($_SESSION['cureentSearchValue']);
      $annonces = null;
     }
   
 
} else {
 $annonces = $controller->annoncesRechercher($_SESSION['cureentSearchValue']);
}


if($annonces != null)
{
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

// retrieve selected results from database and display them on page
$annoncesPage = $controller->annoncesRechercher($_SESSION['cureentSearchValue'], ' LIMIT ' . $this_page_first_result . ',' .  $results_per_page);
/*Pagination END*/
}
  else
  {
   $currentPage = 0;
   $numberOfPages = 0;
   $annoncesPage = [];
   $_SESSION['cureentSearchValue'] = "";
  }
?>
 
   <?php require_once('entete.php');?>
    <title><?=LES_RESULTATS_DE_LA_RECHERCHE?></title>
</head>
    

<body>
<?php

require_once('menu.php');
require_once('corrousel.php');
?>
<!-- <main> -->

<!--<section class="annonces">-->



        
       <!--Fin Pour rechercher -->
           <?php  if($_SESSION['cureentSearchValue'] != "")
           
              ?>
          

        <div class="container py-5">

       <div class="row justify-content-around">
      <h1> <?= $_SESSION['cureentSearchValue'] != "" ? LES_RESULTATS_DE_LA_RECHERCHE_POUR.' "'.$_SESSION['champRecherche'].'"' :  AUCUN_RESULTAT_TROUVE_POUR.' "'.$_SESSION['champRecherche'].'"' ?> </h1> 
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
				   //  echo couperTexte($annonceAccueil->description ,200) ;
				     //die();
				    // APPEL A CANDIDATURES INTERNES / EXTERNES POUR LE RECRUTEMENT D'UN.E EXPERT.E EN RESSOURCES HUMAINES JUNIOR TEMPORAIRE POUR LE...
				     $des=couperTexte(strip_tags($annonceAccueil->description) ,200);
				    // $des="APPEL A CANDIDATURES INTERNES / EXTERNES POUR LE RECRUTEMENT D'UN.E EXPERT.E EN RESSOURCES HUMAINES JUNIOR TEMPORAIRE POUR LE..."
;?>

        
        <div class="card mb-3">
            <div class="row g-0">
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

    </div>

    
    
    
    <!--Debut barre laterale doite -->
    <?php
    require_once('barre laterale_droite.php');
    ?>
    
    <!--End col4-->

      
     </div><!--End row-->
      
      <!-- display the link to the pages -->
      
      <?php 
  $loopCounter = ((($currentPage+2) <= $numberOfPages) ? ($currentPage +2 ) : $numberOfPages);
  $startCounter = ((($currentPage-2) >= 3) ? ($currentPage - 2 ) : 1);
?>
      
<hr/>
<nav aria-label="Page navigation">
  <ul class="pagination">
   <?php  if($_SESSION['cureentSearchValue'] != "")
   {
   ?>
    <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>"><a class="page-link" href="search.php?page=<?=$currentPage - 1 ?>&search-box<?=$_SESSION['cureentSearchValue']?>">Previous</a></li>

    <?php
   }
    if($startCounter > 1 )
{
  echo '<li class="page-item  disabled"> <a class="page-link">...</a></li>';
}
    
 for($page = $startCounter; $page <= $loopCounter; $page++)
 {
   ?>
   <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>"><a class="page-link" href="search.php?page=<?=$page?>&search-box<?=$_SESSION['cureentSearchValue']?>"><?=$page?></a></li>

 <?php
 }
 
 if($loopCounter < $numberOfPages)
   {
     echo '<li class="page-item  disabled"> <a class="page-link">...</a></li>';
   }
   
 ?>

<li class="page-item <?= ($currentPage == $numberOfPages) ? "disabled" : "" ?>"><a class="page-link" href="search.php?page=<?=$currentPage + 1 ?>&search-box<?=$_SESSION['cureentSearchValue']?>">Next</a></li>
  </ul>
</nav>
  <!-- display the link to the pages END -->


   
</section>
<!--</main>-->
<?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
 
</body>
</html>