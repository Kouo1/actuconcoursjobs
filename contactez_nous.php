<php namespace actuconcoursjobs;?>
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
   
      <?
      require_once('menu.php');
      require_once('corrousel.php');
      ?>
  <section class="annonces">


 <!--  <div id="bodyConnexion">-->
  <div class="container mt-5">
      
          <div class="row">
              <div class="col-12 col-sm-8 col-md-8 m-auto">
                  <div class="card border-0 shadow">
                      <div class="card-title text-center">
                            <h1>Contactez nous</h1>
                          </div>
                      
                       <div class="card-body">
            <form method="POST"  action="" id="formContact">
         <!--   <fieldset>-->
                  
                   <div class="mb-3">
                    <span class="contactez_feedback"></span><br/>
                    <label for="nom" class="form-label" >Nom </label>
                     <input type="text" class="form-control" id="nom" name="nom" value=""  placeholder="Entrez votre nom" required />
                     <span class="nom_feedback"></span>
                    </div>
                    <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom </label>
                     <input type="text" class="form-control" id="prenom" name="prenom" value="" placeholder="Entrez votre prenom"   />
                     <span class="erreur"></span>
                    </div>
                
                   <div class="mb-3">
                    <label for="mail" class="form-label">Email <span class="requis">*</span></label>
                    <input type="email" class="form-control" id="mail" name="mail" value=""  placeholder="Entrez votre adresse email" required />
                    <span class="email_feedback"></span>
                    </div>
                    
                    
                 <!--   <label for="numero">Numero </label>
                     <input type="text" id="numero" name="numero" value="" />
                     <span class="erreur"></span>
                    <br /><br>-->
                      <div class="mb-3">
                          <label for="demande" class="form-label">Demande <span class="requis">*</span></label>
                    <textarea name="demande" class="form-control" rows="10" cols="30" value="" placeholder="Saisissez votre demande" required></textarea>
                     <span class="demande_feedback"></span>
                    </div>
                     
                     
                      <span class="contactez_feedback"></span>
                     
                     
                      <input type="submit" class="btn btn-primary" value="ENVOYER"  />
                   
                     <br/>
                    
<!--</fieldset> --> 
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
</body>
</html>