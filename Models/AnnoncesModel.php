<?php
namespace actuconcoursjobs\Models;
require_once('Model.php');
require_once('Main/Db.php');

class AnnoncesModel extends Model
{
    protected $id_annonce;
    protected $intitule;
    protected $description;
    protected $entreprise;
    protected $pays;
    protected $region;
    protected $ville;
    protected $date_publication;
    protected $site_internet;
    protected $email;
    protected $telephone;
    protected $secteur_activite;
    protected $profil_rechercher;
    protected $competence_requise;
    protected $piece_a_fournir;
    protected $date_limite;
    protected $email_d_envoi_candidature;
    protected $environnement_travail;
    protected $statut;
    protected $type;
    protected $refer_annonceur;
    protected $lien_pour_postuler;
    protected $lien_arrete;
    protected $lien_image;
    protected $images_nom;
    protected $images_url;


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
     * Get the value of intitule
     */ 
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set the value of intitule
     *
     * @return  self
     */ 
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of entreprise
     */ 
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set the value of entreprise
     *
     * @return  self
     */ 
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get the value of pays
     */ 
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */ 
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get the value of region
     */ 
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set the value of region
     *
     * @return  self
     */ 
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

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
     * Get the value of site_internet
     */ 
    public function getSite_internet()
    {
        return $this->site_internet;
    }

    /**
     * Set the value of site_internet
     *
     * @return  self
     */ 
    public function setSite_internet($site_internet)
    {
        $this->site_internet = $site_internet;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of secteur_activite
     */ 
    public function getSecteur_activite()
    {
        return $this->secteur_activite;
    }

    /**
     * Set the value of secteur_activite
     *
     * @return  self
     */ 
    public function setSecteur_activite($secteur_activite)
    {
        $this->secteur_activite = $secteur_activite;

        return $this;
    }

    /**
     * Get the value of profil_rechercher
     */ 
    public function getProfil_rechercher()
    {
        return $this->profil_rechercher;
    }

    /**
     * Set the value of profil_rechercher
     *
     * @return  self
     */ 
    public function setProfil_rechercher($profil_rechercher)
    {
        $this->profil_rechercher = $profil_rechercher;

        return $this;
    }

    /**
     * Get the value of competence_requise
     */ 
    public function getCompetence_requise()
    {
        return $this->competence_requise;
    }

    /**
     * Set the value of competence_requise
     *
     * @return  self
     */ 
    public function setCompetence_requise($competence_requise)
    {
        $this->competence_requise = $competence_requise;

        return $this;
    }

    /**
     * Get the value of piece_a_fournir
     */ 
    public function getPiece_a_fournir()
    {
        return $this->piece_a_fournir;
    }

    /**
     * Set the value of piece_a_fournir
     *
     * @return  self
     */ 
    public function setPiece_a_fournir($piece_a_fournir)
    {
        $this->piece_a_fournir = $piece_a_fournir;

        return $this;
    }

    /**
     * Get the value of date_limite
     */ 
    public function getDate_limite()
    {
        return $this->date_limite;
    }

    /**
     * Set the value of date_limite
     *
     * @return  self
     */ 
    public function setDate_limite($date_limite)
    {
        $this->date_limite = $date_limite;

        return $this;
    }

    /**
     * Get the value of email_d_envoi_candidature
     */ 
    public function getEmail_d_envoi_candidature()
    {
        return $this->email_d_envoi_candidature;
    }

    /**
     * Set the value of email_d_envoi_candidature
     *
     * @return  self
     */ 
    public function setEmail_d_envoi_candidature($email_d_envoi_candidature)
    {
        $this->email_d_envoi_candidature = $email_d_envoi_candidature;

        return $this;
    }

    /**
     * Get the value of environnement_travail
     */ 
    public function getEnvironnement_travail()
    {
        return $this->environnement_travail;
    }

    /**
     * Set the value of environnement_travail
     *
     * @return  self
     */ 
    public function setEnvironnement_travail($environnement_travail)
    {
        $this->environnement_travail = $environnement_travail;

        return $this;
    }

    /**
     * Get the value of statut
     */ 
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     *
     * @return  self
     */ 
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    

    /**
     * Get the value of refer_annonceur
     */ 
    public function getRefer_annonceur()
    {
        return $this->refer_annonceur;
    }

    /**
     * Set the value of refer_annonceur
     *
     * @return  self
     */ 
    public function setRefer_annonceur($refer_annonceur)
    {
        $this->refer_annonceur = $refer_annonceur;

        return $this;
    }

    /**
     * Get the value of lien_pour_postuler
     */ 
    public function getLien_pour_postuler()
    {
        return $this->lien_pour_postuler;
    }

    /**
     * Set the value of lien_pour_postuler
     *
     * @return  self
     */ 
    public function setLien_pour_postuler($lien_pour_postuler)
    {
        $this->lien_pour_postuler = $lien_pour_postuler;

        return $this;
    }
    
    /**
     * Get the value of lien_arrete
     */ 
    public function getLien_arrete()
    {
        return $this->lien_arrete;
    }

    /**
     * Set the value of lien_arrete
     *
     * @return  self
     */ 
    public function setLien_arrete($lien_arrete)
    {
        $this->lien_arrete = $lien_arrete;

        return $this;
    }
    
        /**
     * Get the value of lien_image
     */ 
    public function getLien_image()
    {
        return $this->lien_image;
    }

    /**
     * Set the value of lien_image
     *
     * @return  self
     */ 
    public function setLien_image($lien_image)
    {
        $this->lien_image = $lien_image;

        return $this;
    }

    /**
     * Get the value of images_nom
     */ 
    public function getImages_nom()
    {
        return $this->images_nom;
    }

    /**
     * Set the value of images_nom
     *
     * @return  self
     */ 
    public function setImages_nom($images_nom)
    {
        $this->images_nom = $images_nom;

        return $this;
    }

    /**
     * Get the value of images_url
     */ 
    public function getImages_url()
    {
        return $this->images_url;
    }

    /**
     * Set the value of images_url
     *
     * @return  self
     */ 
    public function setImages_url($images_url)
    {
        $this->images_url = $images_url;

        return $this;
    }
}
?>