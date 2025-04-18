<?php
namespace actuconcoursjobs;
session_start();

require_once("domaine/lang.php");
require_once("fonctions.php");

use actuconcoursjobs\Controllers\UtilisateursController;
//use actuconcoursjobs\Controllers\MainController;
use actuconcoursjobs\Models\UtilisateursModel;


require('Controllers/Controller.php');
require('Controllers/UtilisateursController.php');
$controller = new UtilisateursController;
//$annonces = $controller->create();




if(isset($_POST['codeVerification']))
{
$codeVerification = $_POST['codeVerification'];

//$aujourd_hui = date("j/m/y");
$aujourd_hui = date("Y-m-d H:i:s");

//echo 'connected user '.$refer_annonceur;
//die();

//$pass = $_POST['secteur_d_activite'];
//kouo.sylvaint@yahoo.com
 //echo 
$annonce = $controller->trouverUser($_SESSION['emailToVerify']['email']);

  if(!empty($annonce)) // nom d'utilisateur et mot de passe correctes
  {
  //  var_dump($annonce);
//    var_dump($annonce->mot_de_passe);
   if($codeVerification == $annonce->user_otp)
   {
     //On enregistre l'eleve en session,
    // $_SESSION['connectedUser'] = $annonce; //evitons de mettre les informations sensible comme le mot de passe dans la session
     $_SESSION['connectedUser'] = ['code' => $annonce->code, 'email'=> $annonce->email
     ,'nom' => $annonce->nom, 'prenom' => $annonce->prenom];
      
     // header('Location: index.php');
     $model = new UtilisateursModel;
     $utilisateur = $model
        ->setCode($annonce->code)
        ->setUser_email_status("verified");

      $result = $utilisateur->update('code');

      if($result)
      {
          echo "updateSuccessfully";
      }
      else
      {
        echo "updateFailed";
      }
     
  }
  else
  {
  
    echo "inccorectCode";
  }
}

}
else{
	echo 'Veuillez remplir tous les champs';
}
?>