<?php

namespace actuconcoursjobs\Controllers;

use actuconcoursjobs\Models\AnnoncesModel;
require('Models/AnnoncesModel.php');

class AnnoncesController extends Controller
{
    /**
     * This method displays a page with all the users
     *
     * @return void
     */
    public function index()
    {
        //on instancie le modele correspondant a la table 'utikisateurs'
        $annoncesModel = new AnnoncesModel;

        ///on  chercher toutes les modeles
        $annonces =$annoncesModel->findBy(['type' => 'Abonne']); 

        $this->render('annonces/index',['annonces' => $annonces]);
      //  var_dump($annonces);
       // $donnees = ['a', 'b'];
       // include_once ROOT.'/Views/annonces/index.php';
    }

    /**
     * This method displays a page with all the offers
     *
     * @return object
     */
    public function annoncesAccueil($limite = '')
    {
        //on instancie le modele correspondant a la table 'utikisateurs'
        $annoncesModel = new AnnoncesModel;

        ///on  chercher toutes les modeles
      //  $annonces = $annoncesModel->findAll();
        $annonces =$annoncesModel->findAll(" ORDER BY date_publication DESC".$limite); 
         
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
    public function annonceSelected($id)
    {
        //on instancie le modele correspondant a la table 'utikisateurs'
        $annoncesModel = new AnnoncesModel;

        ///on  chercher le modele specified
        $annonce = $annoncesModel->findBy(['id_annonce' => $id]);

        $annonceSelected = $annonce[0]; //on recupere l'objet selectionne car ca retournr un tableau

        return $annonceSelected;
    }

    /**
     * affiche un annonce
     *
     * @param int $code de l'annonce
     * @return void
     */
    public function lire($code)
      {
       // $this->loadModel('M_Articles');
        //on instancie le modele correspondant a la table 'utikisateurs'
        $annoncesModel = new annoncesModel();
        $annonce = $annoncesModel->findByCode($code);
        
        //on envoie a la vue
        $this->render('annonces/lire',compact('annonce'));
        //$this->render(ROOT.'/annonces/lire',compact('annonce'));
        
      }

        /**
     * This method displays a page with all the offers
     *
     * @return object
     */
    public function annoncesParType($type, $limite = '', $critereTri = '', $jointureTable = '', $conditionDate = '')
    {
        //on instancie le modele correspondant a la table 'utikisateurs'
        $annoncesModel = new AnnoncesModel;

        ///on  chercher toutes les modeles
        $annonces =$annoncesModel->findBy(['type' => $type], $limite, $critereTri, $jointureTable, $conditionDate); 
         
      
        
        return $annonces;
       // return compact('annonces');
    }
    
    
         /**
     * This method displays a page with all the offers
     *
     * @return object
     */
    public function annoncesParTypeANDCountry($type,$country, $limite = '', $critereTri = '', $jointureTable = '', $conditionDate = '')
    {
        //on instancie le modele correspondant a la table 'utikisateurs'
        $annoncesModel = new AnnoncesModel;

        ///on  chercher toutes les modeles
        $annonces =$annoncesModel->findBy(['type' => $type,'pays' => $country], $limite, $critereTri, $jointureTable, $conditionDate); 
         
      
        
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
        $annoncesModel = new AnnoncesModel;

        ///on  chercher toutes les modeles
        $annonces =$annoncesModel->findBy(['refer_annonceur' => $annonceur],$limite," ORDER BY date_publication DESC"); 
         
      
        
        return $annonces;
       // return compact('annonces');
    }
    
      /**
     * This method displays a page with all the offers
     *
     * @return object
     */
    public function annoncesSimilaires($domaine, $typeAnnonce)
    {
        //on instancie le modele correspondant a la table 'utikisateurs'
        $annoncesModel = new AnnoncesModel;

        ///on  chercher toutes les modeles
        //$domaine = '%'.$domaine.'%';
        $annonces =$annoncesModel->findSimilar(['secteur_activite' => $domaine], $typeAnnonce); 
         
      
        
        return $annonces;
       // return compact('annonces');
    }
    
    /**
   * This method displays a page with all the offers
   *
   * @return object
   */
  public function annoncesRechercher($condition,$limite = '')
  {
      //on instancie le modele correspondant a la table 'utikisateurs'
      $annoncesModel = new AnnoncesModel;

      ///on  chercher toutes les modeles
      //$domaine = '%'.$domaine.'%';
      $annonces = $annoncesModel->findForSearch($condition,$limite); 
       
    
      
      return $annonces;
     // return compact('annonces');
  }
  
    /**
   * This method displays a page with all the offers
   *
   * @return object
   */
  public function getNunberOdRows($condition)
  {
      //on instancie le modele correspondant a la table 'utikisateurs'
      $annoncesModel = new AnnoncesModel;

      ///on  chercher toutes les modeles
      //$domaine = '%'.$domaine.'%';
      $count = $annoncesModel->getRowsNumber($condition); 
       
    
      
      return $count;
     // return compact('annonces');
  }
    
}

?>