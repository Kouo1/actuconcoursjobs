<?php

namespace actuconcoursjobs\Controllers;

use actuconcoursjobs\Main\Formulaire;
use actuconcoursjobs\Models\UtilisateursModel;
require('Models/UtilisateursModel.php');
class UtilisateursController extends Controller

{

  public function login()
  {
    //on verifi si le formulaire est complet
    if(Formulaire::validate($_POST,['email','password']))
    {
       //on instancie le modele correspondant a la table 'utikisateurs'
       $utilisateursModel = new UtilisateursModel;

       ///on  chercher toutes les modeles
     //  $utilisateurs = $utilisateursModel->findAll();
       $utilisateurA =$utilisateursModel->findOneByEmail(strip_tags($_POST['email']));
       if(!$utilisateurA)
       {
         $_SESSION['erreur']=' L\'adresse email et/ou le mot de passe incorrect';
         header('Location:utilisateurs/login');//on insere une redirection
         exit;
       }

       //il existe
       $u = $utilisateursModel->hydrate($utilisateurA);
       //on verifie le pass
       if(password_verify($_POST['password'], $u->getMot_de_passe()))
       
       {$u->setSession();

       header('Location:/');//on insere une redirection
       exit;
       }
       else {
        $_SESSION['erreur']=' L\'adresse email et/ou le mot de passe incorrect';
        header('Location:utilisateurs/login');//on insere une redirection
        exit;
       }
      }
  }
    /**
     * This method displays a page with all the users
     *
     * @return void
     */
    public function index()
    {
      //echo 'usersController';
        //on instancie le modele correspondant a la table 'utikisateurs'
        $utilisateursModel = new UtilisateursModel;

        ///on  chercher toutes les modeles
      //  $utilisateurs = $utilisateursModel->findAll();
        $utilisateurs =$utilisateursModel->findBy(['type' => 'Abonne']); 

        $this->render('utilisateurs/index',['utilisateurs' => $utilisateurs]);
      //  var_dump($utilisateurs);
       // $donnees = ['a', 'b'];
       // include_once ROOT.'/Views/utilisateurs/index.php';
    }

    /**
     * affiche un utilisateur
     *
     * @param int $code de l'utilisateur
     * @return void
     */
    public function lire($code)
      {
       // $this->loadModel('M_Articles');
        //on instancie le modele correspondant a la table 'utikisateurs'
        $utilisateursModel = new UtilisateursModel();
        $utilisateur = $utilisateursModel->findByCode($code);
        //  echo 'lire';
         // die();
        //on envoie a la vue
        //$this->render('utilisateurs/lire',compact('utilisateur'));
        $this->render('utilisateurs/lire',['utilisateur' => $utilisateur]);
        //$this->render(ROOT.'/utilisateurs/lire',compact('utilisateur'));
        
      }

      public function trouverUser($email)
      {
        $utilisateursModel = new UtilisateursModel();

        ///on  chercher le modele specified
        $utilisateur = $utilisateursModel->findBy(['email' => $email,'mot_de_passe']);
        
        $utiliateurSelected = [];
         if(count($utilisateur) > 0)
        $utiliateurSelected = $utilisateur[0]; //on recupere l'objet selectionne car ca retournr un tableau

        return $utiliateurSelected;
        
      }
      
      
      /**
     * This method displays a page with all the offers
     *
     * @return object
     */
    public function trouverUsers()
    {
        //on instancie le modele correspondant a la table 'utikisateurs'
        $utilisateursModel = new UtilisateursModel();

        ///on  chercher toutes les modeles
      //  $annonces = $annoncesModel->findAll();
       $utilisateurs = $utilisateursModel->findAll(" ORDER BY nom DESC"); 
         
      
        
        return $utilisateurs;
       // return compact('annonces');
    }



      public function loginForm()
      {
        $formulaire = new Formulaire;

        $formulaire->debutForm('get','login.php',['class' => 'form', 'id' => 'formulaire', 'data-form' => 27, 'brouette' => true])
                   ->ajoutLabelFor('email', 'E-mail:')
                   ->ajoutInput('email','email',['class' =>'form-control', 'id' =>'email'])
                   ->ajoutLabelFor('pass','Mot de passe :')
                   ->ajoutInput('password', 'password', ['id' => 'pass', 'class' => 'form-control'])
                   ->ajoutBouton('Me connecter', ['class' => 'btn btn-primary'])
                   ->finForm();

                //  var_dump($formulaire);
              //  echo $formulaire->create();
              $this->render('utilisateurs/login',['loginForm' => $formulaire->create()]);
      }

      /**
       * Inscription des users
       *
       * @return void
       */
      public function registerUser()
      {
        //on verifie si le formulaire est valide
        if(Formulaire::validate($_POST, ['email', 'password']))
        {
          //Le formulaire est valide
          //on nettoie l'email
          $email = strip_tags($_POST['email']);//on enleve les entites html
          //on chiffre le mot de passe
          $pass = password_hash($_POST['password'], PASSWORD_ARGON2I);

          //ON hydrate
          $user = new UtilisateursModel;
          $user->setEmail($email)
               ->setNom("digi")
               ->setMot_de_passe($pass);

                 //ON STOCKE L'USER DANS LA BD
               $user->create();
        }  
        $form = new Formulaire;
        $form->debutForm()
              ->ajoutLabelFor('email','Email')
              ->ajoutInput('email','email', ['id' =>'email', 'class' => 'form-control'])
              ->ajoutInput('password','password', ['id' =>'pass', 'class' => 'form-control'])
              ->ajoutBouton('M\'inscrire', ['class' => 'btn btn-primary'])
              ->finForm();

              //On envoi le formulaire a une vue
              $this->render('utilisateurs/inscription', ['registerForm' => $form->create()]);

      }

      public function logout()
      {
        unset($_SESSION['user']);
        header('Location: '.$_SERVER['HTTP_REPERER']);//on insere une redirection
        exit;
      }
    
}
?>