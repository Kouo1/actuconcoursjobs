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

$results_per_page = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$this_page_first_result = ($page-1) * $results_per_page;  
  
//$sql = "SELECT * FROM annonces ORDER BY id_annonce ASC LIMIT $start_from, $limit";  
//$rs_result = mysqli_query($conn, $sql);  
$critereTri = "";
$jointureTable = '';
$conditionDate = "";
$annoncesPage = $controller->annoncesParType($_SESSION['EXAMENS'], ' LIMIT ' . $this_page_first_result . ',' .  $results_per_page, $critereTri,$jointureTable,$conditionDate);

        
        $i = 1;
        foreach ($annoncesPage as $annonceAccueil) : ?>

           <div class="annonce">
             
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
                 
                 <?=$annonceAccueil->description?>
                 <br/>
                  <!--  <a href=""></a>&nbsp;&nbsp;&nbsp;-->
                      &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
                  
                 </p>

              </div>
           </div>


         <?php endforeach;
         ?>