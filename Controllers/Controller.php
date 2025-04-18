<?php

namespace actuconcoursjobs\Controllers;

abstract class Controller
{
  protected $template ='default';
    /**
     * Cette fonction permet de faire le rendu des pages web
     *
     * @param string $fichier
     * @param array $data
     * @return void
     */
    public function render(string $fichier, array $data = [])
    {

        extract($data);//creer une variable correspondant a chaque etiquette
    
        //on ouvre le buffer
      ob_start();
        
      //echo 'file '.$fichier;
     
      //die();
      // on cree le chemin vers la vue
        //require_once(ROOT.'/Views/'.$fichier.'.php');
         $content = ob_get_clean();
        //require_once(ROOT.'/views/'.$this->template.'.php');
        

       /* require_once(ROOT.'/'.$fichier.'.php');
         $content = ob_get_clean();
        require_once(ROOT.'/default.php');*/
    }
    
}
?>