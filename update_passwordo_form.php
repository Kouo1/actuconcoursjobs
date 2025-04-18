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

   <?php require_once('menu.php');
   // unset($_SESSION['connectedUser']);
   ?>


 <section class="annonces">

  <div class="container mt-5 pt-5">
      
          <div class="row">
              <div class="col-12 col-sm-8 col-md-6 m-auto">
                  <div class="card border-0 shadow">
                      
                      <div class="card-title text-center">
                        <h4><?= ENTRER_LE_NOUVEAU_MOT_DE_PASSE ?></h4>  
          
         <h4> <span class="mot_de_passe_oublie_feedback"></span></h4> 
                          </div>
                      <div class="card-body">
       
                          <form method="POST" action="" id="formUpdate_password">
        
                    <label for="mot_de_passeUtilisateur" class="form-label"><?= MOT_DE_PASSE ?> </label>
                 <div class="input-group mb-3">
                    
                     <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                     <input type="password" id="mot_de_passeUtilisateur" name="mot_de_passeUtilisateur" class="form-control" placeholder="Mot de passe" aria-label="Username" aria-describedby="basic-addon1" required />
                     
                   <span class="password_feedback"></span>
                 </div><!--End pass-->
                    
                    <label for="mot_de_passeUtilisateur_c" class="form-label"><?=CONFIRMER_LE_MOT_DE_PASSE?></label>
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                     <input type="password" id="mot_de_passeUtilisateur_c" name="mot_de_passeUtilisateur_c" class="form-control" placeholder="Confirmer le mot de passe" aria-label="Username" aria-describedby="basic-addon1" required/>
                     <span class="password_feedback_c"></span>
                    </div><!--End pass con-->
                 
        
        <div class="text-center mt-3">

            <input type="submit"  class="btn btn-primary" value="<?= VALIDER ?>" />
           
     </div>
       </form>
     </div>
     </div>
     </div>
     </div>

</div>

   

   <?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
   </section>
</body>

</html>