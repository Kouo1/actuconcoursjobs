<?php
session_start();


use actuconcoursjobs\Controllers\UtilisateursController;

//echo "info ".$_POST['email'];
if(isset($_POST['email']) && isset($_POST['mot_de_passe']))
{
   $email = htmlspecialchars($_POST['email']);
   $password = htmlspecialchars($_POST['mot_de_passe']);

require('Controllers/Controller.php');
require('Controllers/UtilisateursController.php');


    
    if($email !== "" && $password !== "")
    {
      $controller = new UtilisateursController;
      $annonce = $controller->trouverUser($email);
      
        if(!empty($annonce)) // nom d'utilisateur et mot de passe correctes
        {
      
         if(password_verify($password,$annonce->mot_de_passe))
         {
           if($annonce->user_email_status == 'verified')
           {
           //On enregistre l'utilisateur en session,
          // $_SESSION['connectedUser'] = $annonce; //evitons de mettre les informations sensible comme le mot de passe dans la session
           $_SESSION['connectedUser'] = ['code' => $annonce->code, 'email'=> $annonce->email
           ,'nom' => $annonce->nom, 'prenom' => $annonce->prenom];
           
            echo "connected";
           }
           else
           {
             //redirection vers la page de verification de l'email
            $_SESSION['emailToVerify'] = ['email'=> $annonce->email];
           // header('Location: email_verify.php');
           echo "emailNotVerified";
           }
        }
        else
        {
        //  header('Location: login.php?erreur=1 & email='.$email); // mot de passe incorrect
        echo "emailOrPasswordIncorrect";
        }
    }
    else
    {
      // header('Location: login.php?erreur=2'); // cet adresse email n'est pas enregistrée
      echo "emailNotRegistered";
    }
   }
   /* else
     {
   header('Location: login.php');  // mot de passe et email adresse vide
     }*/
}
 else
  {
  // header('Location: login.php');
  echo "vide";
  }
?>