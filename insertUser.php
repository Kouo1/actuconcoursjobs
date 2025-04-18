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

$nom = '';
$prenom = '';
$email = '';
$type = '';
$numero = '680770379';
$paysresidence = '';
$pass = '';

/*
if(isset($_POST['mail']))
{
	$email = $_POST['mail'];
	//on teste si l'email est valide
	 if(filter_var($email,FILTER_VALIDATE_EMAIL))
	 {
		 echo 'e-mail valide';
	 }
	 else
		 {
		 echo 'e-mail invalide';
	 }
}


if(isset($_POST['nom']))
{
	$nom = $_POST['nom'];
	//on teste si l'email est valide
	 if(strlen($nom)>1)
	 {
		 echo 'nom valide';
	 }
	 else
		 {
		 echo 'nom invalide';
	 }
}
if(isset($_POST['mot_de_passeUtilisateur']))
{
	$pass = $_POST['mot_de_passeUtilisateur'];
	//on teste si l'email est valide
	 if(strlen($pass)>5)
	 {
		 echo 'mot de passe valide';
	 }
	 else
		 {
		 echo 'mot de passe invalide';
	 }
}

if(isset($_POST['mot_de_passeUtilisateur_c']))
{
	$pass = $_POST['mot_de_passeUtilisateur_c'];
	//on teste si l'email est valide
	 if(strlen($pass)>5)
	 {
		 echo 'mot de passe valide';
	 }
	 else
		 {
		 echo 'mot de passe invalide';
	 }
}*/

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['mail'];
$type = $_POST['candidatOuEmployeur'];
$numero = $_POST['numero'];
$paysresidence = $_POST['paysUtilisateur'];
$pass = $_POST['mot_de_passeUtilisateur'];


if(isset($_POST['nom']) && isset($_POST['mail'])  && isset($_POST['candidatOuEmployeur']) 
&& isset($_POST['numero']) && isset($_POST['mot_de_passeUtilisateur']) && isset($_POST['mot_de_passeUtilisateur_c'])
 && isset($_POST['domaineUser']) && !empty($_POST['domaineUser']) )
{

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['mail'];
$type = $_POST['candidatOuEmployeur'];
$numero = $_POST['numero'];
$paysresidence = $_POST['paysUtilisateur'];
$pass = $_POST['mot_de_passeUtilisateur'];
$aujourd_hui = date("Y-m-d H:i:s");

$col1Array = $_POST['domaineUser'];
 //var_dump($col1Array);
 foreach($col1Array as $selectedValue)
 {
	// echo $selectedValue."<br/>";
	 $domaineUser .= $selectedValue.',';
 }
// echo $domaineUser.'<br>';
 if(strlen(trim($domaineUser)) > 0)
 {
     
   //  $domaineUser = substr($domaineUser,-1);
   //on enleve la derniere virgule (,)
     $domaineUser = substr($domaineUser, 0, strlen($domaineUser) - 1);
 }
//die($domaineUser);
$user_activation_code = md5(rand());

  $user_otp = rand(100000, 999999);


$model = new UtilisateursModel;

$utilisateur = $model
        ->setNom($nom)
        ->setPrenom($prenom)
        ->setEmail($email)
        ->setType($type)
        ->setNumero($numero)
        ->setPays_residence($paysresidence)
        ->setMot_de_passe(password_hash($pass,PASSWORD_BCRYPT))
        ->setUser_activation_code($user_activation_code)
        ->setUser_email_status('not verified')
        ->setDomaineUser($domaineUser)
        ->setUser_otp($user_otp)
        ->setUser_datetime($aujourd_hui);
       // var_dump($utilisateur);
$result = $model->create($utilisateur);

//verifier si la requete a fonctionnee
//echo 'rrrr '.$result;

if ($result) {
	$_SESSION['emailToVerify'] = ['email'=> $email];
	
	$sender = 'contact_info@actuconcoursjobs.com';
$recipient = $email;

$subject = "Verification code for Verify Your Email Address";
$message = '
   For verify your email address, enter this verification code when prompted:'.$user_otp;
$headers = 'From:' . $sender;

envoyerMail($sender, $recipient, $subject, $message, $headers);


	$sender = 'contact_info@actuconcoursjobs.com';
$recipient = 'contact_info@actuconcoursjobs.com';

$subject = "Nouveau compte crée";
$message = '
  Un nouveau compte vient d\'etre crée sur actuconcoursjobs:'.$email;
$headers = 'From:' . $sender;

envoyerMail($sender, $recipient, $subject, $message, $headers);

	echo "yes";
}else{
	echo "no";
}


}
else{
	echo 'Veuillez remplir tous les champs';
}
?>