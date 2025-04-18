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

<body>

   <?php require_once('menu.php');
   // unset($_SESSION['connectedUser']);
   ?>



   <!--     <div id="menu_gauche">
</div>-->


   <div id="bodyConnexion">


      <form method="POST" action="" id="formVerificationCode">
         <span class="creer_compte_feedback"></span><br />
         <?=ENTREZ_LE_CODE_DE_VERIFICATION_RECU_PAR_EMAIL?>
         <br/><br/>
         <span class="emailVerification_feedback"></span>
          <br /><br/>
         <label for="codeVerification"><?=CODE_DE_VERIFICATION?> <span class="requis">*</span></label>
         <input type="text" id="codeVerification" name="codeVerification" value="<?php if (isset($_GET['codeVerification'])) echo htmlentities($_GET['codeVerification']) ?>" size="20" maxlength="30" placeholder='<?= CODE_DE_VERIFICATION ?>' required />
         <span class="codeVerification_feedback"></span>
         <br>


         <div id="inputValider">

            <input type="submit" id="bVerifier" value="<?= VERIFIER ?>" name="bVerifier" />
          
         </div> <br />
         <a href="updateVerificationCode.php">  <?= ME_RENVOYER_LE_CODE ?></a>
         <br />
      </form>




   </div>

   <?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
</body>

</html>

