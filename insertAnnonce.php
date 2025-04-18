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


require('Controllers/Controller.php');
require('Controllers/AnnoncesController.php');
$controller = new AnnoncesController;
//$annonces = $controller->create();




if(isset($_POST['nom_entreprise']) && isset($_POST['raison_sociale']) 
&& isset($_POST['intitule']) && isset($_POST['descriptionAnnonce']) && isset($_POST['pays_annonce'])
&& isset($_POST['region_annonce']) && isset($_POST['ville_annonce']))
{
$nomEntreprise = $_POST['nom_entreprise'];
$raison_sociale = $_POST['raison_sociale'];
$email = $_POST['mail'];
$intitule = $_POST['intitule'];
$descriptionAnnonce= $_POST['descriptionAnnonce'];
$pays_annonce = $_POST['pays_annonce'];
$region_annonce = $_POST['region_annonce'];
$ville_annonce = $_POST['ville_annonce'];
$date_publication = '';
$site_internet = $_POST['site_internet'];
$telephone = $_POST['telephone'];
$secteur_d_activite = $_POST['secteur_d_activite'];
$profile_rechercher = $_POST['profile_rechercher'];
$competence_requise = $_POST['competence_requise'];
$piece_a_fournir = $_POST['piece_a_fournir'];
$date_limite = $_POST['date_limite'];
$email_d_envoi_candidature = $_POST['email_d_envoi_candidature'];
$environnement_travail = '';
$statut = true;
$typeAnnonce = $_POST['typeAnnonce'];
$lien_pour_postuler = $_POST['lien_pour_postuler'];
$refer_annonceur = $_SESSION['connectedUser']['email'];
$lien_arrete = $_POST['lien_arrete'];
//$aujourd_hui = date("j/m/y");
$aujourd_hui = date("Y-m-d H:i:s");

if($typeAnnonce == "EXAMENS")
{
   // echo $typeAnnonce;
    $typeAnnonce = $_POST['sous_typeAnnonce'];
   // echo $typeAnnonce;
}

//echo 'connected user '.$refer_annonceur;
//die();

//$pass = $_POST['secteur_d_activite'];


$model = new AnnoncesModel;

	//	description	entreprise	pays	region	ville	date_publication	site_internet	email	telephone	
    //secteur_activite	profil_rechercher	competence_requise	piece_a_fournir	date_limite	email_d_envoi_candidature
    //	environnement_travail	statut	type

$utilisateur = $model
        ->setIntitule($intitule)
        ->setDescription($descriptionAnnonce)
        ->setEntreprise($nomEntreprise)
        ->setPays($pays_annonce)
        ->setRegion($region_annonce)
        ->setVille($ville_annonce)
        ->setDate_publication($aujourd_hui)
        ->setSite_internet($site_internet)
        ->setEmail($email)
        ->setTelephone($telephone)
        ->setSecteur_activite($secteur_d_activite)
        ->setProfil_rechercher($profile_rechercher)
        ->setCompetence_requise($competence_requise)
        ->setPiece_a_fournir($piece_a_fournir)
        ->setDate_limite($date_limite)
        ->setEmail_d_envoi_candidature($email_d_envoi_candidature)
		->setLien_pour_postuler($lien_pour_postuler)
		->setLien_arrete($lien_arrete)
        ->setEnvironnement_travail($environnement_travail)
		->setStatut(1)
        ->setType($typeAnnonce)
		->setRefer_annonceur($refer_annonceur); 
       // var_dump($utilisateur);
$model->create($utilisateur);

}
else{
	echo 'Veuillez remplir tous les champs';
}
?>