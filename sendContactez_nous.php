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

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['mail'];
$demande = $_POST['demande'];



if(isset($_POST['nom']) && isset($_POST['mail']) 
&& isset($_POST['demande']))
{

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['mail'];
$aujourd_hui = date("Y-m-d H:i:s");


	$sender = $email;
//$recipient = 'kouo.sylvain@yahoo.com';
$recipient = 'contact_info@actuconcoursjobs.com';

$subject = "demande";
$message = $demande;
$headers = 'From:' . $sender;

 if(envoyerMail($sender, $recipient, $subject, $message, $headers))
{
	echo "yes";
}else{
	echo "no";
}


}

?>