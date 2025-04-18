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


<div class="container mt-10">

       <div class="row justify-content-around">
        <h1><?=VOS_OFFRES_PUBLIEES_SUR_LA_PLATEFORME?>  <button type="button">ENVOYER</button></h1>    
       <div class="col-md-8">
       <!-- <div class="card mb-3" style="max-width: 540px;">-->
      <!-- <form method="POST" action="EnvoyerOffre.php">
           <input type="submit" value="send">-->
       <?php
         // var_dump($annonces);
         $i = 1;
         foreach ($annonces as $annonceAccueil) : ?>

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
                  <p class="card-text"><small class="btn btn-primary" ><a href="modifierAnnonce.php?id=<?=$annonceAccueil->id_annonce?>"><img src="<?=ROOT?>/images/edit.png" alt="Modifier" height="15" width="15"></a></small>
                    &nbsp &nbsp &nbsp &nbsp<small class="btn btn-primary" ><a href=""><img src="<?=ROOT?>/images/delete.png" alt="Supprimer" height="15" width="15"></a></small>
                  </p>
                  <p class="card-text">
                    <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="checkoffre" value="<?=$annonceAccueil->id_annonce ?>" id="<?=$annonceAccueil->id_annonce?>">
                    
                    </div>
                    </p>
                  
                </div>
              </div>
            </div>
          </div>
     
          <?php endforeach;
         ?>
         <!--</form>-->

    </div><!--End column-->
    
      <!--Debut barre laterale doite -->
    <?php
    require_once('barre laterale_droite.php');
    ?>

   <!-- <div class="col-md-4  text-center">-->
    </div><!--End row-->
    
    
    
    </div>


     

   
<!--</section>-->
<!--</main>-->
<?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
   
   	 <script>
	  $(document).ready(function(){
	     $("button").click(function(){
		 var selectedOffers = [];
		 var i=0;
		      $('input[name="checkoffre"]:checked').each(function(){ 
			   // alert('Selected Value: '+this.value);
			      // selectedOffers[i]=this.value;
				   //i++;
				   
				   selectedOffers.push(this.value);
			 });
			 
			// selectedOffers = selectedOffers.toString();
			  $.ajax({
			     url:"EnvoyerOffre.php",
				 type:"POST",
				 data:{selectedOffers:selectedOffers},
				 success:function(data){
				    $('#result').html(data);
				 }
			  });
			 /*for (i = 0; i < selectedOffers.length; ++i) {
               alert('Array Value: '+i+' '+selectedOffers[i]);
                }*/
	       });
	  });
	 </script>
 
</body>
</html>