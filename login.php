<?php

namespace actuconcoursjobs;

session_start(); // Dï¿½marrage de la session
?>
<!DOCTYPE html>

<?php
require_once("domaine/lang.php");
require_once("fonctions.php");
?>
<?php

use actuconcoursjobs\Controllers\AnnoncesController;

require('Controllers/Controller.php');
require('Controllers/AnnoncesController.php');
$controller = new AnnoncesController;
$annonces = $controller->annoncesAccueil();


require_once('entete.php');

?>
<title>
    connexion
</title>
<body>

   <?php require_once('menu.php');
   // unset($_SESSION['connectedUser']);
   ?>



   <!--     <div id="menu_gauche">
</div>-->
 <section class="annonces">


 <!--  <div id="bodyConnexion">-->
  <div class="container mt-5 pt-5">
      
          <div class="row">
              <div class="col-12 col-sm-8 col-md-6 m-auto">
                  <div class="card border-0 shadow">
                      
                      <div class="card-title text-center">
                                             <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
                        <h4><?= CONNECTEZ_VOUS_SUR_ACTUCONCOURSJOBS ?></h4>  
            <h4> <a href="creerUtilisateur.php"> <?= JE_N_AI_PAS_DE_COMPTE ?> </a>
         </h4>  
         <h4>
              <span class="creer_compte_feedback"></span>
         
         <span class="erreur"><?php if (isset($_GET['erreur'])) {
                                 echo ' L\'adresse email et/ou le mot de passe incorrect';
                              }
                              ?>
             </h4> 
                          </div>
                      <div class="card-body">
       
                          <form method="POST" action="verificationConnexion.php">
        
         </span>
         <label for="email" class="form-label"><?= EMAIL ?> <span class="requis">*</span></label>
         <div class="input-group mb-3">
             <span class="input-group-text" id="basic-addonmail"><i class="fas fa-envelope"></i></span>
         
         <input type="text" class="form-control" id="email" name="email" aria-label="Username" aria-describedby="basic-addonmail"  value="<?php if (isset($_GET['email'])) echo htmlentities($_GET['email']) ?>" size="20" maxlength="30" placeholder='<?= VOTRE_ADRESSE_EMAIL ?>' required />
           
           </div>
           <label for="mot_de_passe" class="form-label"> <?= MOT_DE_PASSE ?> <span class="requis">*</span></label>
            
             <div class="input-group mb-3">
         <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
         <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" aria-label="Username" aria-describedby="basic-addon1" placeholder='<?= VOTRE_MOT_DE_PASSE ?>' required />
         <span class="erreur"> <?php if (isset($_GET['erreur']) && $_GET['erreur'] == 1) {
                                    //    echo 'mot de passe incorrect';
                                 }
                                 ?></span>
                  </div>
                                 


        
        <div class="text-center mt-3">

            <input type="submit"  class="btn btn-primary" value="<?= ME_CONNECTER ?>" />
            <a href="mot_de_passe_oublie.php"  class="nav-link"><?= MOT_DE_PASSE_OUBLIE ?></a>
         
         
         <?=ENVOYEZ_VOS_OFFRES_SUR?> <a href="mailto:contact_info@actuconcoursjobs.com">contact_info@actuconcoursjobs.com</a>
           <?=POUR_UNE_PUBLICATION_GRATUITE_ET_RAPIDE?>
     </div>
       </form>
     </div>
     </div>
     </div>
     </div>
    


</div>

   </section>

   <?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
   
</body>

</html>