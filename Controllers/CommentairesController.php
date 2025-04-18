<?php

namespace actuconcoursjobs\Controllers;

use actuconcoursjobs\Models\CommentairesModel;
require('Models/CommentairesModel.php');

class CommentairesController extends Controller
{


 /**
     * Récupère tous les commentaire organisé par ID
     * @param $id_annonce
     * @return array
     */
    public function findAllCommentById($id_annonce, $jointureTable = '')
    {
           //on instancie le modele correspondant a la table 'utikisateurs'
        $commentairesModel = new CommentairesModel;
        $commentaires = $commentairesModel->findBy(['id_annonce' => $id_annonce], '', '', $jointureTable);
        $commentaires_by_id = [];
        foreach ($commentaires as $commentaire) {
            $commentaires_by_id[$commentaire->id] = $commentaire;
        }
        return $commentaires_by_id;
    }


    /**
     * Permet de récupérer les commentaires avec les enfants
     * @param $id_annonce
     * @param bool $unset_children Doit-t-on supprimer les commentaire qui sont des enfants des résultats ?
     * @return array
     */
    public function findAllCommentsWithChildren($id_annonce, $unset_children = true, $jointureTable = '')
    {
        // On a besoin de 2 variables
        // comments_by_id ne sera jamais modifié alors que comments
        $comments = $comments_by_id = $this->findAllCommentById($id_annonce,$jointureTable);
        foreach ($comments as $id => $comment) {
            if ($comment->parent_id != 0) {
                $comments_by_id[$comment->parent_id]->children[] = $comment;
                if ($unset_children) {
                    unset($comments[$id]);
                }
            }
        }
        return $comments;
    }

    /**
     * This method displays a page with all the offers
     *
     * @return object
     */
    public function annoncesAccueil($limite = '')
    {
        //on instancie le modele correspondant a la table 'utikisateurs'
        $CommentairesModel = new CommentairesModel;

        ///on  chercher toutes les modeles
      //  $annonces = $annoncesModel->findAll();
        $annonces =$CommentairesModel->findAll(" ORDER BY date_publication DESC".$limite); 
         
      /*  foreach($annonces as $annonceAccueil): 
         echo   $annonceAccueil->id_annonce ;
         echo $annonceAccueil->intitule;
          
           endforeach;*/
       // $this->render('../index',['annonces' => $annonces]);
         // var_dump($annonces);
       // $donnees = ['a', 'b'];
       // include_once ROOT.'/Views/annonces/index.php';
        
        return $annonces;
       // return compact('annonces');
    }

    /**
     * This method displays a page with a selected offer
     *
     * @param int $id
     * @return object
     */
    public function commentSelected($id)
    {
        //on instancie le modele correspondant a la table 'utikisateurs'
        $commentairesModel = new CommentairesModel;

        ///on  chercher le modele specified
        $annonce = $commentairesModel->findBy(['id' => $id]);

        $annonceSelected = $annonce[0]; //on recupere l'objet selectionne car ca retournr un tableau

        return $annonceSelected;
    }

    /**
     * This method displays a page with a selected offer
     *
     * @param int $id
     * @return object
     */
    public function deleteCommentWithChildren($idComment,$jointureTable = '')
    {
        //on instancie le modele correspondant a la table 'utikisateurs'
        $commentairesModel = new CommentairesModel;

        ///on  chercher le modele specified
        $commentaires = $commentairesModel->findBy(['id' => $idComment], '', '', $jointureTable);

        $commentaire = $commentaires[0]; //on recupere l'objet selectionne car ca retournr un tableau

        $comments = $this->findAllCommentsWithChildren($commentaire->id_annonce, $unset_children = true, $jointureTable = '');

        $ids = $this->getChildrenIds($comments[$commentaire->id]);
        $ids[] = $commentaire->id;

        // On supprime le commentaire et ses enfants
        return $commentairesModel->deleteChild('id', $ids);
        //->pdo->exec('DELETE FROM comments WHERE id IN (' . implode(',', $ids) . ')');
        return $commentaire;
    }


     /**
     * Permet de supprimer un commentaire et ces enfants
     * @param $id
     * @return int
     */
    /*
    public function deleteWithChildren($id)
    {
        // On récupère le commentaire à supprimer
        $comment = $this->find($id);
        $comments = $this->findAllWithChildren($comment->post_id, false);
        $ids = $this->getChildrenIds($comments[$comment->id]);
        $ids[] = $comment->id;

        // On supprime le commentaire et ses enfants
        return $this->pdo->exec('DELETE FROM comments WHERE id IN (' . implode(',', $ids) . ')');
    }
*/
    /**
     * Get all chidren ids of a comment
     * @param $comment
     * @return array
     */
    private function getChildrenIds($comment)
    {
        $ids = [];
        foreach ($comment->children as $child) {
            $ids[] = $child->id;
            if (isset($child->children)) {
                $ids = array_merge($ids, $this->getChildrenIds($child));
            }
        }
        return $ids;
    }

   

        /**
     * This method displays a page with all the offers
     *
     * @return object
     */
    public function annoncesParType($type, $limite = '')
    {
        //on instancie le modele correspondant a la table 'utikisateurs'
        $commentairesModel = new CommentairesModel;

        ///on  chercher toutes les modeles
        $annonces =$commentairesModel->findBy(['type' => $type], $limite," ORDER BY date_publication DESC"); 
         
      
        
        return $annonces;
       // return compact('annonces');
    }
    
     /**
     * This method displays a page with all the offers
     *
     * @return object
     */
    public function annoncesParAnnonceur($annonceur, $limite = '')
    {
        //on instancie le modele correspondant a la table 'utikisateurs'
        $commentairesModel = new CommentairesModel;

        ///on  chercher toutes les modeles
        $annonces =$commentairesModel->findBy(['refer_annonceur' => $annonceur],$limite," ORDER BY date_publication DESC"); 
         
      
        
        return $annonces;
       // return compact('annonces');
    }
    
}

?>