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

$pass = $_POST['mot_de_passeUtilisateur'];

if(isset($_POST['mot_de_passeUtilisateur'])
{
$model = new UtilisateursModel;

$utilisateur = $model
        ->setEmail($_SESSION['emailToModifiedPassword'])
        ->setMot_de_passe(password_hash($pass,PASSWORD_BCRYPT))
       // var_dump($utilisateur);
$result = $utilisateur->update('email');

$pass = $_POST['mot_de_passeUtilisateur'];

   

}else{
	echo 'Veuillez remplir tous les champs';
}
?>