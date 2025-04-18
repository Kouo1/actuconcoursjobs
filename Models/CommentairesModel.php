<?php
namespace actuconcoursjobs\Models;
require_once('Model.php');
require_once('Main/Db.php');

class CommentairesModel extends Model
{

     
    protected $id_annonce;
    protected $id;
    protected $contenu;
    protected $date_publication;
    protected $refer_utilisateur;
    protected $parent_id;

    

    public function __construct()
    {
        
     // $this->table = 'annonces';

     /**
      * pour recuperer le nom de la table automatiquement
      */
     $class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
     $this->table = strtolower(str_replace('Model', '', $class));
        
    }


    /**
     * Get the value of id_annonce
     */ 
    public function getId_annonce()
    {
        return $this->id_annonce;
    }

    /**
     * Set the value of id_annonce
     *
     * @return  self
     */ 
    public function setId_annonce($id_annonce)
    {
        $this->id_annonce = $id_annonce;

        return $this;
    }

    
    /**
     * Get the value of date_publication
     */ 
    public function getDate_publication()
    {
        return $this->date_publication;
    }

    /**
     * Set the value of date_publication
     *
     * @return  self
     */ 
    public function setDate_publication($date_publication)
    {
        $this->date_publication = $date_publication;

        return $this;
    }

    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of contenu
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get the value of refer_utilisateur
     */ 
    public function getRefer_utilisateur()
    {
        return $this->refer_utilisateur;
    }

    /**
     * Set the value of refer_utilisateur
     *
     * @return  self
     */ 
    public function setRefer_utilisateur($refer_utilisateur)
    {
        $this->refer_utilisateur = $refer_utilisateur;

        return $this;
    }

    /**
     * Get the value of parent_id
     */ 
    public function getParent_id()
    {
        return $this->parent_id;
    }

    /**
     * Set the value of parent_id
     *
     * @return  self
     */ 
    public function setParent_id($parent_id)
    {
        $this->parent_id = $parent_id;

        return $this;
    }

}
?>