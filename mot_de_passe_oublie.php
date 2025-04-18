<?php namespace actuconcoursjobs;?>
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
      ?>
    
   <!--     <div id="menu_gauche">
</div>-->
 <section class="annoncesB py-5">


 <!--  <div id="bodyConnexion">-->
  <div class="container mt-5 pt-5">
      <!--id="formPassOublie"     action="verifyEmailPassOublie.php"-->
      <form method="POST" action="" id="formPassOublie">
          <div class="row">  <!-- debut row-->
              <div class="col-12 col-sm-8 col-md-6 m-auto">
                  <div class="card border-0 shadow">
                      
                      <div class="card-title text-center">
                        <h4><?= MOT_DE_PASSE_OUBLIE ?>?</h4>  
          
         <h4><span class="mot_de_passe_oublie_feedback"></span> </h4> 
                     </div>
                      <div class="card-body">
        
         <div class="mb-3">
         <label for="email" class="form-label"><?= EMAIL ?> <span class="requis">*</span></label>
         <input type="text" class="form-control" id="email" name="email"  value="" placeholder='<?= VOTRE_ADRESSE_EMAIL ?>' required />
           </div>
                             
        <div class="text-center mt-3">

            <input type="submit"  class="btn btn-primary" value="<?= VALIDER ?>" />
           
        </div>
       
     </div>
     
     </div>
   
     </div>
     </div><!-- end row-->
      </form>


</div>

   </section>

   <?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
   
</body>

</html>