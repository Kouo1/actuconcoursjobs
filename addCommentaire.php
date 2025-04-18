<?php
namespace actuconcoursjobs;
session_start();
require_once("domaine/lang.php");
require_once("fonctions.php");

use actuconcoursjobs\Controllers\CommentairesController;
use actuconcoursjobs\Models\CommentairesModel;

require_once('Controllers/Controller.php');
require_once('Controllers/CommentairesController.php');

$commentaireController = new CommentairesController;

if(isset($_SESSION['connectedUser']))
        {
if (isset($_POST['contenu_commentaire']) && !empty($_POST['contenu_commentaire']) && $_POST['annonce_id']) {
     $parent_id = isset($_POST['parent_id']) ? $_POST['parent_id'] : 0;
     $depth = 0;
     if ($parent_id != 0) {
        $commentaire = $commentaireController->commentSelected(htmlspecialchars($_POST['parent_id']));

       /* $req = $app->pdo->prepare('SELECT id, depth FROM comments WHERE id = ?');
        $req->execute([$parent_id]);
        $comment = $req->fetch();*/
        if ($commentaire == null) {
         //   throw new Exception('Ce parent n\'existe pas');
        }
       // $depth = $commentaire->depth + 1;
     }
     $depth = 1;
     if($depth >= 3){
      //  $app->flash('danger', 'Vous ne pouvez pas répondre à une réponse d\'une réponse :(');
     } else {

        $contenu_commentaire = $_POST['contenu_commentaire'];
        $aujourd_hui = date("Y-m-d H:i:s");
        $annonce_id = $_POST['annonce_id'];
        $annonce_intitule = $_POST['annonce_intitule'];
        
        
          $annonceIntitule = trim(strtolower(str_replace(" ", "-", trim(removeAccents($annonce_intitule)))));
				   // echo $annonceIntitule;
				    $annonceIntitule = str_replace(":", "-", $annonceIntitule);
				     $annonceIntitule = str_replace("/", "-", $annonceIntitule);
				     $annonceIntitule = str_replace("(", "-", $annonceIntitule);
				     $annonceIntitule = str_replace(")", "-", $annonceIntitule);
				     $annonceIntitule = str_replace("&", "-", $annonceIntitule);
				     
				     $liendansEmail="annonce-".$annonceIntitule."-".$annonce_id;
				
                   
        
        
        $model = new CommentairesModel;

        $commenataireToCreate = $model
                ->setContenu($contenu_commentaire)
                ->setDate_publication($aujourd_hui)
                ->setRefer_utilisateur($_SESSION['connectedUser']['email'])
                ->setId_annonce($annonce_id)
                ->setParent_id($parent_id);
                
         //       var_dump(commenataireToCreate);
        $result = $model->create($commenataireToCreate);
        
        
     	$sender = 'contact_info@actuconcoursjobs.com';
$recipient = 'contact_info@actuconcoursjobs.com';

$subject = "Nouveau commentaire";
$message = $_SESSION['connectedUser']['email']. ' a commenté l\'offre :'.$annonce_intitule.'.   Cliquez sur le lien suivant pour acceder a la page: https://actuconcoursjobs.com/'.$liendansEmail;
$headers = 'From:' . $sender;

envoyerMail($sender, $recipient, $subject, $message, $headers);
    }

} else {

}

        }
        else
        {
           echo "UserNotConnected";
        }