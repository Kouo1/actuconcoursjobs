<?php

namespace actuconcoursjobs;

session_start(); // Démarrage de la session
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


   <div id="bodyConnexion">
      <form method="POST" action="verificationConnexion.php">
         <span class="creer_compte_feedback"></span><br />
         <h4><?= CONNECTEZ_VOUS_SUR_ACTUCONCOURSJOBS ?>
            <a href="creerUtilisateur.php"> <?= JE_N_AI_PAS_DE_COMPTE ?> </a>
         </h4> <br />
         <span class="erreur"><?php if (isset($_GET['erreur'])) {
                                 echo ' L\'adresse email et/ou le mot de passe incorrect';
                              }
                              ?>
         </span>
         <label for="email"><?= EMAIL ?> <span class="requis">*</span></label>
         <input type="text" id="email" name="email" value="<?php if (isset($_GET['email'])) echo htmlentities($_GET['email']) ?>" size="20" maxlength="30" placeholder='<?= VOTRE_ADRESSE_EMAIL ?>' required />

         <br />
           <label for="mot_de_passe" > <?= MOT_DE_PASSE ?> <span class="requis">*</span></label>
         <input type="password"  id="mot_de_passe" name="mot_de_passe"  placeholder='<?= VOTRE_MOT_DE_PASSE ?>' required />
         <span class="erreur"> <?php if (isset($_GET['erreur']) && $_GET['erreur'] == 1) {
                                    //    echo 'mot de passe incorrect';
                                 }
                                 ?></span>
                                 
                                 <br>


         <div id="inputValider">

            <input type="submit" value="<?= ME_CONNECTER ?>" />
            <a href=""><?= MOT_DE_PASSE_OUBLIE ?></a>
         </div> <br />
         <br />
         <?=ENVOYEZ_VOS_OFFRES_SUR?> <a href="mailto:contact_info@actuconcoursjobs.com">contact_info@actuconcoursjobs.com</a>
           <?=POUR_UNE_PUBLICATION_GRATUITE_ET_RAPIDE?>
     
      </form>


</div>

   

   <?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
   </section>
</body>

</html>