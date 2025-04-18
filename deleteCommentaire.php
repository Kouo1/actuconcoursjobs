<?php
namespace actuconcoursjobs;

require_once("domaine/lang.php");
require_once("fonctions.php");

use actuconcoursjobs\Controllers\CommentairesController;
use actuconcoursjobs\Models\CommentairesModel;

require_once('Controllers/Controller.php');
require_once('Controllers/CommentairesController.php');

$commentaireController = new CommentairesController;


       $id = $_GET['p'];
        $model = new CommentairesModel;
        
        $commentaireSelected = $commentaireController->commentSelected($id);
        $datePost = $commentaireSelected->date_publication;
       // var_dump($datePost);
        $nm = nombreMinutesEcoules($datePost);
        if($nm < 10)
        {
               //on supprime le commentaire, il faut monter tous les enfants
              $model->delete("id",$id);

            //on monte les enfants

            $commentaire = $model;
            $valeurs[] = $commentaireSelected->parent_id;
            $valeurs[] = $commentaireSelected->id;
          // var_dump($valeurs);
           
          $commentaire->updateCommentaire($valeurs);
            //fin monatage

            //supprimer enfants
         //   $jointureTable = " inner join utilisateurs on email=refer_utilisateur";
         //   $commentaireController->deleteCommentWithChildren($id,$jointureTable);
            //fin supprimer enfants
        $m = "CommentDeleted";
        echo $m;
       }
        else
        {
               $m = "ImpossibleToDelete";
              echo $m;
        }
        

