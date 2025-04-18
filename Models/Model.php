<?php
namespace actuconcoursjobs\Models;
use actuconcoursjobs\Main\Db;
require_once('Main/Db.php');
class Model extends Db{
  //Table de la base de donnees
  protected $table;
  
  //Instance de la bd
  private $db;
  
  public function getRowsNumber($condition) {
       // $sql = "SELECT COUNT(*) FROM users";
        $query = $this->queryDB('SELECT COUNT(*) FROM '. $this->table. ' WHERE  '.$condition);
        //$stmt = $this->connect()->query($sql);
        $count = $query->fetchColumn();
        return $count;
    }

  public function findAll($ordre_Selection = '')
  {
   // die($this->table);
    $query = $this->queryDB('SELECT * FROM '. $this->table.''.$ordre_Selection);
    return $query->fetchAll();
  }
  /**
   * retourne une annonce
   *
   * @param array $criteres
   * @return object
   */
  public function findBy(array $criteres, $limite = '', $ordre_Selection = '', $jointureTable = '' , $conditionDate = '')
  {
    $champs = [];
    $valeurs = [];
    // on boucle pour eclater le tableau
    foreach($criteres as $champ =>$valeur)
    {
      //SELECT * FROM utilisateurs where email=? and code=?
      //bindValue(1, valeur)
      $champs[] = "$champ = ?";
      $valeurs[] = $valeur;
    }
    
    if($conditionDate != null)
    {
      $champs[] = "date_limite >=?";
      $aujourdhui = date("Y-m-d");
      $valeurs[] = $aujourdhui;
    }
    //on transforme le tableau champs en une chaine de carateres
    $liste_champs = implode(' AND ',$champs);
    //var_dump($champs);
    //var_dump($liste_champs);
    //var_dump($valeurs);

    //on execute la requete
    return $this->queryDB('SELECT * FROM '.$this->table.''.$jointureTable. ' WHERE '.$liste_champs.''.$ordre_Selection.''.$limite
    ,$valeurs)->fetchAll();
  }
  
  public function findForSearch(string $condition,$limite)
  {   
   // echo "SELECT * FROM ".$this->table. " WHERE  $condition";
    // die();
    return $this->queryDB("SELECT * FROM ".$this->table. " WHERE  ".$condition."".$limite)->fetchAll();
  }

   public function findSimilar(array $criteres, $typeAnnonce )
  {
    
    // on boucle pour eclater le tableau
    foreach($criteres as $champ =>$valeur)
    {
      //SELECT * FROM utilisateurs where email LIKE OR  and code=?
      //bindValue(1, valeur)
      $champs = $champ;
      $valeurs = $valeur;
    }
   // echo "SELECT * FROM ".$this->table. " WHERE ".$champs ." LIKE '%".$valeurs."%'";
    //on execute la requete
   // echo "SELECT * FROM ".$this->table. " WHERE type = $typeAnnonce AND ".$champs ." LIKE '%".$valeurs."%'";
    //die();
    return $this->queryDB("SELECT * FROM ".$this->table. " WHERE type = '$typeAnnonce' AND ".$champs ." LIKE '%".$valeurs."%'")->fetchAll();
  }

  public function findByCode(string $code)
  {
    return $this->queryDB("SELECT * FROM {$this->table} WHERE code = $code")->fetch();
  }

  public function create()
  {
    $champs = [];
    $inter = [];
    $valeurs = [];
     // on boucle pour eclater le tableau
     //$this represente le modele
     foreach($this as $champ =>$valeur)
    {
      //INSERT INTO utilisateurs (code,nom,prenom,email,type,numero,pays_residence) VALUES(?,?,?)
      if($valeur !== null && $champ != 'db' && $champ != 'table')
      
      {
        $champs[] = "$champ";
      $inter[] = "?";
      $valeurs[] = $valeur;
      }
  }
    //var_dump($champs);
    //on transforme le tableau champs en une chaine de carateres
    $liste_champs = implode(',  ',$champs);
    $liste_inter = implode(',  ',$inter);
    //echo $liste_champs; 
    //die($liste_inter);
    //code,nom,prenom,email,type,numero,pays_residence
    //on execute la requete
    return $this->queryDB('INSERT INTO '.$this->table.' ('.$liste_champs.')
     VALUES ('.$liste_inter.')', $valeurs);
  }
  public function update($champDeCondition)
  {
    $champs = [];
    $valeurs = [];
    // on boucle pour eclater le tableau
    foreach($this as $champ =>$valeur)
    {
      //UPDATE utilisateurs set nom = ?, prenom = ?, email = ?,type = ?, numero = ?, pays_residence = ? WHERE code=?) VALUES(?,?,?)
      if($valeur !== null && $champ != 'db' && $champ != 'table')
      
      {
        $champs[] = "$champ = ?";
       $valeurs[] = $valeur;
      }
  }

  $valeurs[] = $this->$champDeCondition;
   //$valeurs[] = $this->id_annonce;
  // echo ' id_code '.$this->id_annonce;
   //echo ' id_codec '.$this->code;
   //$valeurs[] = $this->code;
    //on transforme le tableau champs en une chaine de carateres
    $liste_champs = implode(',  ',$champs);
    //echo $liste_champs; 
   // die($liste_champs);
   
    //code,nom,prenom,email,type,numero,pays_residence
    //on execute la requete
    //echo 'requete '.'UPDATE '.$this->table.' SET '.$liste_champs.' WHERE id_amnnonce = ?', $valeurs;

    return $this->queryDB('UPDATE '.$this->table.' SET '.$liste_champs.' WHERE '.$champDeCondition.' = ?', $valeurs);

    // echo 'requete '.'UPDATE '.$this->table.' SET '.$liste_champs.' WHERE '.$champDeCondition.' = ?', $valeurs;
  }

    public function updateCommentaire($valeurs)
  {
    
       //on transforme le tableau champs en une chaine de carateres
    $liste_champs = "parent_id = ?";
    
    return $this->queryDB('UPDATE '.$this->table.' SET '.$liste_champs.' WHERE '.$liste_champs, $valeurs);

    // echo 'requete '.'UPDATE '.$this->table.' SET '.$liste_champs.' WHERE '.$champDeCondition.' = ?', $valeurs;
  }
  public function delete(string $champASupprimer, int $code)
  {
    return $this->queryDB("DELETE FROM {$this->table} WHERE $champASupprimer = ?", [$code]);
  }
  
  public function queryDB(string $sql, array $attributs = null)
  { 
    // on recupere l'instance de db
    $this->db = Db::getInstance();

    //on verifie si on a les attributs
    if($attributs !== null)
    {
      //requere prepare
   $query = $this->db->prepare($sql);
   $query->execute($attributs);
   return $query;
    }
    else{
      //Requete simple
      return $this->db->query($sql);
    }
     
  }
  public function hydrate($donnees)
  {
    foreach($donnees as $key => $value)
    {
      //on recupere le nom du setter coreespondant a la cle
      $setter = 'set'.ucfirst($key);

      //On verifie si le setter existe
      if(method_exists($this,$setter))
      {
        //on appelle le setter
        $this->$setter($value);
      }
    }
    return $this;
  }
}