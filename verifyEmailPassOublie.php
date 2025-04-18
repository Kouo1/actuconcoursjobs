<?php
namespace actuconcoursjobs;
session_start(); // Démarrage de la session

require_once("domaine/lang.php");
require_once("fonctions.php");

use actuconcoursjobs\Controllers\UtilisateursController;
//use actuconcoursjobs\Controllers\MainController;
use actuconcoursjobs\Models\UtilisateursModel;


require('Controllers/Controller.php');
require('Controllers/UtilisateursController.php');
$controller = new UtilisateursController;
//$annonces = $controller->create();




if(isset($_POST['email']))
{
$emailEntered = $_POST['email'];

//$aujourd_hui = date("j/m/y");
$aujourd_hui = date("Y-m-d H:i:s");


$annonce = $controller->trouverUser($emailEntered);

  if(!empty($annonce)) // nom d'utilisateur et mot de passe correctes
      {
     // $liendansEmail="annonce-".$annonceIntitule."-".$annonce_id;
      
$sender = 'contact_info@actuconcoursjobs.com';
$recipient = $emailEntered;;

$subject = "Changez votre mot de passe";
$message = $emailEntered.' '.DEMANDE_REINITIALISATION_PASSWORD.': https://actuconcoursjobs.com/update_passwordo_form.php';
$headers = 'From:' . $sender;

envoyerMail($sender, $recipient, $subject, $message, $headers);

         $sender = 'contact_info@actuconcoursjobs.com';
         $_SESSION['emailToModifiedPassword']=$emailEntered;
   
   echo "emailSent";
           }
          else
          {
            unset($_SESSION['emailToModifiedPassword']);
            echo "noEmail"; 
          }

    }
else{
    unset($_SESSION['emailToModifiedPassword']);
	echo 'emptyEmail';
}
?>