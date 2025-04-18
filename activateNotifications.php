<?php

namespace actuconcoursjobs;
session_start();

require_once("domaine/lang.php");
require_once("fonctions.php");
?>

<?php

use actuconcoursjobs\Controllers\UtilisateursController;
//use actuconcoursjobs\Controllers\MainController;
use actuconcoursjobs\Models\UtilisateursModel;


require('Controllers/Controller.php');
require('Controllers/UtilisateursController.php');
$controller = new UtilisateursController;


if(isset($_POST['mail']))
{
$email = $_POST['mail'];
$utilisateur = $controller->trouverUser($email);
if ($utilisateur != null)
{
    if($utilisateur->user_email_status == 'verified')
    {
       //update userNotifications
          if($utilisateur->canBeNotify == 'non')//notifications non activee
          {
       $model = new UtilisateursModel;
       $utilisateur = $model
          ->setCode($utilisateur->code)
          ->setCanBeNotify("oui");
  
        $result = $utilisateur->update('code'); //on active
  
        if($result)
        {
            echo "updateSuccessfully";
        }
        else
        {
          echo "updateFailed";
        }
          }

          else //notifications deja active
          {
              echo "notificationsAlreadyActivated";
          }
    }

    else
    {
        echo "emailNotVerified";
    }

}

else
{
 echo "emailNotExisting";
}



//verifier si la requete a fonctionnee
//echo 'rrrr '.$result;  
}
?>