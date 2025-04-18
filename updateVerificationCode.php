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

$user_activation_code = md5(rand());

  $user_otp = rand(100000, 999999);

$model = new UtilisateursModel;

$utilisateur = $model
        ->setEmail($_SESSION['emailToVerify']['email'])
        ->setUser_otp($user_otp);
       // var_dump($utilisateur);
$result = $utilisateur->update('email');


  $sender = 'contact_info@actuconcoursjobs.com';
//$recipient = 'kouo.sylvain@yahoo.com';
$recipient = $_SESSION['emailToVerify']['email'];

$subject = "Verification code for Verify Your Email Address";
$message = '
   For verify your email address, enter this verification code when prompted: '.$user_otp;
$headers = 'From:' . $sender;

envoyerMail($sender, $recipient, $subject, $message, $headers);

    header('Location: email_verify.php');

   

/*else{
	echo 'Veuillez remplir tous les champs';
}*/
?>