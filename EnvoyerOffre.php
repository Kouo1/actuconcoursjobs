<?php

namespace actuconcoursjobs;
session_start();

require_once("domaine/lang.php");
require_once("fonctions.php");
?>
<html>

<?php

use actuconcoursjobs\Controllers\AnnoncesController;
//use actuconcoursjobs\Controllers\MainController;
use actuconcoursjobs\Models\AnnoncesModel;

use actuconcoursjobs\Controllers\UtilisateursController;
//use actuconcoursjobs\Controllers\MainController;
use actuconcoursjobs\Models\UtilisateursModel;


require('Controllers/Controller.php');
require('Controllers/AnnoncesController.php');
require('Controllers/UtilisateursController.php');
$controller = new AnnoncesController;
//$annonces = $controller->create();


$controllerUser = new UtilisateursController;
$utilisateurs = $controllerUser->trouverUsers();




if(isset($_POST['selectedOffers']))
{
$selectedOffers = $_POST['selectedOffers']; 

$nom = 'actuconcoursjobs.com';
$sender = 'contact_info@actuconcoursjobs.com';
$recipient = 'kouo.sylvain@yahoo.com';

$subject = ANNONCES.' '.SUR.' actuconcoursjobs.com';
//$message = 'Offres  https://actuconcoursjobs.com/'.$selectedOffers[0];
$headers = 'From:' . $sender;

//envoyerMail($sender, $recipient, $subject, $message, $headers);




/////voici la version Mine
$headers = "MIME-Version: 1.0\r\n";

//////ici on détermine le mail en format text
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

$headers .= "From: $nom <$sender>\r\nReply-to : $nom <$sender>\nX-Mailer:PHP";
// dans le From tu mets l'expéditeur du mail

/*$sujet="";
$subject="$sujet";
$destinataire="ici tu mets l'adresse du destinataire du mail";

$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];

$corps="vous venez de vous inscrire chez noursys pour confirmé votre inscription veuillez clické sur le lien ci deçu :
<a href = 'http://localhost/wamp/reg.php?no=$a&pr=$b&ma=$c' >je confirme mon inscription </a>
";*/
//$d="annonce";
//$tiret="-";
$message = ANNONCES." ".SUR." actuconcoursjobs.com: <br/><br/>";
for ($x = 0; $x < count($selectedOffers); $x++) {
    $idAnnonce = $selectedOffers[$x];
  $annonceSelected = $controller->annonceSelected($idAnnonce);
  
  $annonceIntitule = trim(strtolower(str_replace(" ", "-", trim(removeAccents($annonceSelected->intitule)))));
				   // echo $annonceIntitule;
				     $annonceIntitule = str_replace(":", "-", $annonceIntitule);
				     $annonceIntitule = str_replace("/", "-", $annonceIntitule);
				     $annonceIntitule = str_replace("(", "-", $annonceIntitule);
				     $annonceIntitule = str_replace(")", "-", $annonceIntitule);
				     $annonceIntitule = str_replace("&", "-", $annonceIntitule);
				     $num=$x+1;
				  // $message ="<a href=annonce-$annonceIntitule.$annonceSelected->id_annonce>$annonceSelected->intitule</a>";
				 
			//	 $message = "Ofrres sur actuconcoursjobs.com:  <a href = 'https://actuconcoursjobs.com/$selectedOffers[0]'>ici</a><br/>";
			//	$message .='<a href=$d."".$tiret."".$annonceIntitule."".$tiret."".$annonceAccueil->id_annonce'>$annonceAccueil->intitule</a>';
			$id=$annonceSelected->id_annonce;
			$intitu=$annonceSelected->intitule;
			 $message .= "<a href = 'https://actuconcoursjobs.com/annonce-$annonceIntitule-$id'>$num-$intitu</a><br/><br/>";
				
}
//bon  $message = "Ofrres sur actuconcoursjobs.com:  <a href = 'https://actuconcoursjobs.com/$idAnnonce'>ici</a>";
//$nb=count($utilisateurs);
 //$message .= "<a href = 'https://actuconcoursjobs.com/annonce-$annonceIntitule-$id'>$num-$intitu</a><br/><br/>";
//envoyerMail($sender, $recipient, $subject, $message, $headers);
 foreach ($utilisateurs as $utilisateur) : 
     $recipient = $utilisateur->email;
envoyerMail($sender, $recipient, $subject, $message, $headers);

 endforeach;
         
/*if (mail($destinataire,$subject,$message,$headers))
echo " Email Envoyer";}
else
{
echo " Une Erreure c'est produite ";
}*/










}
else{
	echo 'Veuillez remplir tous les champs';
}
?>