<?php
namespace actuconcoursjobs\Controllers;

class MainController extends Controller
{
    public function index()
    {
      
        $this->template = 'default';
        //echo "la page d'accueil";
        $this->render('HomePage',[]);
      // $this->render('default',[]);
    }
}
?>