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


if(isset($_GET['typeAnnonce']) && !empty($_GET['typeAnnonce']) )
{ 
  //  echo 'eeee'. $_GET['typeAnnonce'];
   if(isset($_SESSION['currentTypeAnnonce']) && !empty($_SESSION['currentTypeAnnonce']))
    {
   if(htmlspecialchars($_GET['typeAnnonce']) != $_SESSION['currentTypeAnnonce'])
   {
   $_SESSION['currentTypeAnnonce'] = htmlspecialchars($_GET['typeAnnonce']);
   }
    }
    else{
      $_SESSION['currentTypeAnnonce'] = htmlspecialchars($_GET['typeAnnonce']);   
      //echo "ca n' existe pas s";
      //echo $_SESSION['currentTypeAnnonce'];
    }
}

 if(isset($_GET['tri']))
 {
   $_SESSION['cureentSearchCritere'] = htmlspecialchars($_GET['tri']);
   
 }
 
 $critereTri = "";
 $conditionDate = "";
 if(isset($_SESSION['cureentSearchCritere']) && $_SESSION['cureentSearchCritere'] == "Date d'expiration" )
 {
   $critereTri = " ORDER BY date_limite";
   $conditionDate = "date_limite";
 }else{
   $critereTri = " ORDER BY date_publication DESC";
   $conditionDate = "";
   
 }
 $isCountry = false;
if(isset($_GET['pays']))
{
    $isCountry = true;
$annonces = $controller->annoncesParTypeANDCountry($_SESSION['currentTypeAnnonce'],htmlspecialchars($_GET['pays']),'','','',$conditionDate);
//var_dump($annonces);
}
else
$annonces = $controller->annoncesParType($_SESSION['currentTypeAnnonce'],'','','',$conditionDate);


/*Pagination*/
$nombreElements = count($annonces);
//echo "nb".$nombreElements;
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
$jointureTable = '';

if(isset($_GET['pays']))
{
    $isCountry = true;
//$annonces = $controller->annoncesParTypeANDCountry($_SESSION['currentTypeAnnonce'],htmlspecialchars($_GET['pays']),'','','',$conditionDate);
$annoncesPage = $controller->annoncesParTypeANDCountry($_SESSION['currentTypeAnnonce'],htmlspecialchars($_GET['pays']), ' LIMIT ' . $this_page_first_result . ',' .  $results_per_page, $critereTri,$jointureTable,$conditionDate);
//var_dump($annonces);
}
else
$annoncesPage = $controller->annoncesParType($_SESSION['currentTypeAnnonce'], ' LIMIT ' . $this_page_first_result . ',' .  $results_per_page, $critereTri,$jointureTable,$conditionDate);
/*Pagination END*/


//$annonces = $controller->annoncesParType(htmlspecialchars($_GET['typeAnnonce']));
?>
 
   <?php require_once('entete.php');?>
    <title><?=LES_RECENTES_OFFRES_DE.' '. $_SESSION['currentTypeAnnonce'].' '.PUBLIES_SUR_LA_PLATEFORME ?></title>
<head>
      <?php  require('pub.php');?>
     
 </head>
    

<body>
<?php
require_once('menu.php');
require_once('corrousel.php');
 require('adsunit.php');
?>
<!-- <main> -->
<?php
   // echo 'welcome';
   // var_dump($annonces);
?>

 <!-- <a href=https://refpa.top/L?tag=d_1084591m_97c_&site=1084591&ad=97><img src="https://1xpartners.com/img/AdAgent_1/349b47e0-4118-49b7-9efd-cfb5fcc7222a.gif" width=100%></a>-->
<!--<section class="annonces">-->

         
               <div class="container mt-5">

       <div class="row d-flex  justify-content-between">
      <!--<h1><=LES_RECENTES_OFFRES_DE.' '. $_SESSION['currentTypeAnnonce'].' '.PUBLIES_SUR_LA_PLATEFORME ?> </h1>  -->
      
           <h1>  <?=$isCountry? titreAnnonce($_SESSION['currentTypeAnnonce']).','.htmlspecialchars($_GET['pays']): titreAnnonce($_SESSION['currentTypeAnnonce'])?></h1>
       <select id="selectTri" onchange="getConditionTri()" required>
            <option value="Date de publication" <?php if(isset($_SESSION['cureentSearchCritere']) && $_SESSION['cureentSearchCritere']=="Date de publication") echo "selected";?>>Tri par Date de publication</option>
            <option value="Date d'expiration" <?php if(isset($_SESSION['cureentSearchCritere']) && $_SESSION['cureentSearchCritere']=="Date d'expiration") echo "selected"?>>Tri par Date d'expiration</option>
         </select>
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
           <div class="card mb-3 mt-5"><!--For pub-->
            <div class="row g-0 mt align-items-center">
              
              <div class="col mt-5">
             
                 <?php require('pub_bas_offre.php');
                  require('adsunit.php');
                 ?>
                 
            
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

   <!-- <div class="col-md-4  text-center">
         <div class="row">
         <div class="col">
          <div class="col-md-3">
            <div class="card" style="min-width:20rem ; max-width: 23rem;">
            <div class="card-header  text-bg-success">
                  <h1 class="text-center">Joignez nous sur whatsapp</h1>
           </div>
           
            <img src="<?=ROOT?>/images/whatsapp.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Recevez toutes les offres dans le groupe whatsapp</p>
              <a href="https://chat.whatsapp.com/KAHmPCUK5cEB8XpQCuJ0vM" target="_blank" class="btn btn-success">Cliquez ici pour integrer le groupe</a>
            </div>
        </div>

        </div>
         </div>
         <div class="col">
         <h3> Recevez toutes les offres correspondant à votre domaine dans votre boîte mail.</h3>
      <form method="$_POST" id="formNotifications">
         <input type="email" id="mail" name="mail" placeholder="Votre email"><br/>
         <br/>
         <span class="email_feedback"></span><br/>
         <input type="submit" value="S'ABONNER">
      </form>
         </div>
        </div>
    </div>--><!--End col4-->

      
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
    <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>"><a class="page-link" href="afficherAnnonces.php?page=<?=$currentPage - 1 ?>">Previous</a></li>

    <?php
    
    if($startCounter > 1 )
{
  echo '<li class="page-item  disabled"> <a class="page-link">...</a></li>';
}
    
 for($page = $startCounter; $page <= $loopCounter; $page++)
 {
   ?>
   <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>"><a class="page-link" href="afficherAnnonces.php?page=<?=$page?>"><?=$page?></a></li>

 <?php
 }
 
 /*if($loopCounter < $numberOfPages)
   {
     echo '<li class="page-item  disabled"> <a class="page-link">...</a></li>';
   }*/
   
    if($loopCounter < $numberOfPages)
   {
     echo '<li class="page-item  disabled"> <a class="page-link">...</a></li>';
     ?>
     <li class="page-item <?= ($currentPage == $numberOfPages) ? "active" : "" ?>"><a class="page-link" href="afficherAnnonces.php?page=<?=$numberOfPages?>"><?=$numberOfPages?></a></li>
     <?php
   }
   
 ?>

<li class="page-item <?= ($currentPage == $numberOfPages) ? "disabled" : "" ?>"><a class="page-link" href="afficherAnnonces.php?page=<?=$currentPage + 1 ?>">Next</a></li>
  </ul>
</nav>
  <!-- display the link to the pages END -->


   </div>
<!--</section>-->
<!--</main>-->
<?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
 
</body>
</html>