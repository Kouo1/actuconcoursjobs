<?php
namespace actuconcoursjobs\Models;

use actuconcoursjobs\Models\Model;
require_once('Model.php');
require_once('Main/Db.php');
class UtilisateursModel extends Model
{
   // protected $code;
  //  protected $email;
  /*  private $code;
    private $nom;
    private $prenom;
    private $email;
    private $type;
    private $numero;
    private $pays_residence;*/

    /**
     * code de l'utilisateur
     *
     * @var int
     */
    protected $code;

    /**
     * nom de l'utilisateur
     *
     * @var string
     */
    protected $nom;

    /**
     * prenom user
     *
     * @var string
     */
    protected $prenom;

    /**
     * email user
     *
     * @var string
     */
    protected $email;

    /**
     * Type user
     *
     * @var string
     */
    protected $type;

    /**
     * numero user
     *
     * @var string
     */
    protected $numero;

    /**
     * pays residence user
     *
     * @var string
     */
    protected $pays_residence;

    /**
     * Le mot de passe de l'utilisateur
     *
     * @var string
     */
    protected $mot_de_passe;
    
    protected $user_activation_code;
    protected $user_email_status;
    protected $user_otp;
    protected $user_datetime;
    protected $domaineUser;
    protected $canBeNotify;
    
    public function __construct()
    {
        
        $this->table = 'utilisateurs';
        
    }
    

    /**
     * Get code de l'utilisateur
     *
     * @return  int
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set code de l'utilisateur
     *
     * @param  int  $code  code de l'utilisateur
     *
     * @return  self
     */ 
    public function setCode(int $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get nom de l'utilisateur
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nom de l'utilisateur
     *
     * @param  string  $nom  nom de l'utilisateur
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get prenom user
     *
     * @return  string
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set prenom user
     *
     * @param  string  $prenom  prenom user
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get email user
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email user
     *
     * @param  string  $email  email user
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get type user
     *
     * @return  boolean
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type user
     *
     * @param  string  $type  Type user
     *
     * @return  self
     */ 
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get numero user
     *
     * @return  string
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set numero user
     *
     * @param  string  $numero  numero user
     *
     * @return  self
     */ 
    public function setNumero(string $numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get pays residence user
     *
     * @return  string
     */ 
    public function getPays_residence()
    {
        return $this->pays_residence;
    }

    /**
     * Set pays residence user
     *
     * @param  string  $pays_residence  pays residence user
     *
     * @return  self
     */ 
    public function setPays_residence(string $pays_residence)
    {
        $this->pays_residence = $pays_residence;

        return $this;
    }

    /**
     * Get le mot de passe de l'utilisateur
     *
     * @return  string
     */ 
    public function getMot_de_passe()
    {
        return $this->mot_de_passe;
    }

    /**
     * Set le mot de passe de l'utilisateur
     *
     * @param  string  $mot_de_passe  Le mot de passe de l'utilisateur
     *
     * @return  self
     */ 
    public function setMot_de_passe(string $mot_de_passe)
    {
        $this->mot_de_passe = $mot_de_passe;

        return $this;
 
   }

       /**
     * Recuperer un user via son email
     *
     * @param string $email
     * @return mixed
     */
    public function findOneByEmail(string $email)
    {
        return $this->queryDB("SELECT * FROM {$this->table} WHERE email = ?", [$email])->fetch();
    }

    /**
     * This function create the session of the user
     *
     * @return void
     */
    public function setSession()
    {
       // $_SESSION['connectedUser'] = $this;
        $_SESSION['connectedUser'] =['code' => $this->code, 'email' => $this->email, 'nom' => $this->nom
     ,'prenom' => $this->prenom ];
    }
    
       /**
     * Get the value of user_activation_code
     */ 
    public function getUser_activation_code()
    {
        return $this->user_activation_code;
    }

    /**
     * Set the value of user_activation_code
     *
     * @return  self
     */ 
    public function setUser_activation_code($user_activation_code)
    {
        $this->user_activation_code = $user_activation_code;

        return $this;
    }

    /**
     * Get the value of user_email_status
     */ 
    public function getUser_email_status()
    {
        return $this->user_email_status;
    }

    /**
     * Set the value of user_email_status
     *
     * @return  self
     */ 
    public function setUser_email_status($user_email_status)
    {
        $this->user_email_status = $user_email_status;

        return $this;
    }

    /**
     * Get the value of user_otp
     */ 
    public function getUser_otp()
    {
        return $this->user_otp;
    }

    /**
     * Set the value of user_otp
     *
     * @return  self
     */ 
    public function setUser_otp($user_otp)
    {
        $this->user_otp = $user_otp;

        return $this;
    }

    /**
     * Get the value of user_datetime
     */ 
    public function getUser_datetime()
    {
        return $this->user_datetime;
    }

    /**
     * Set the value of user_datetime
     *
     * @return  self
     */ 
    public function setUser_datetime($user_datetime)
    {
        $this->user_datetime = $user_datetime;

        return $this;
    }
    
        /**
     * Get the value of domaineUser
     */ 
    public function getDomaineUser()
    {
        return $this->domaineUser;
    }

    /**
     * Set the value of domaineUser
     *
     * @return  self
     */ 
    public function setDomaineUser($domaineUser)
    {
        $this->domaineUser = $domaineUser;

        return $this;
    }

    /**
     * Get the value of canBeNotify
     */ 
    public function getCanBeNotify()
    {
        return $this->canBeNotify;
    }

    /**
     * Set the value of canBeNotify
     *
     * @return  self
     */ 
    public function setCanBeNotify($canBeNotify)
    {
        $this->canBeNotify = $canBeNotify;

        return $this;
    }
}