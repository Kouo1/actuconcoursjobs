<?php
namespace actuconcoursjobs\Main;

class Formulaire
{
    private $formCode = '';

    /**
     * This function generate HTML document
     *
     * @return string
     */
    public function create()
    {
        return $this->formCode;
    }

    /**
     * Valide si les champs proposés sont remplies
     *
     * @param array $formulaire Tableau issu du formulaire($_POST, $_GET)
     * @param array $champs Tableau listant les champs obligatoires
     * @return bool
     */
    public static function validate(array $formulaire, array $champs)
    {
        //on parcourt les champs
        foreach($champs as $champ)
        {
            //Si le champ est absent ou vide dans le formulaire
            if(!isset($formulaire[$champ]) || empty($formulaire[$champ]))
            {
                //on  sort en retournant false
                return false;
            }
        }
        return true;
    }
    

    public function ajoutAttributs (array $attributs): string
    {
        $str = '';

        //on liste les attibuts "courts"
        $courts = ['checked', 'disabled', 'readonly','multiple'
        ,'required','autofocus','novalidate','formnovalidate'];

        //on boucle sur le tableau d'attributs
        foreach($attributs as $attribut => $valeur)
        {
            //si l'attribut est dans la liste des attributs courts
            if(in_array($attribut, $courts) && $valeur == true) // si l'attribut est a l'inyerieur et sa valeur est true
            {
              $str .= " $attribut";//ajoute l'attribut a notre chaine
            }
            else{
                //on ajoute attribut='valeur'
                $str .= " $attribut='$valeur'";
            }
        } 

        return $str;
    }
/**
 * Balise d'ouverture du formulaire
 *
 * @param string $methode Methode du formulaire (post ou get)
 * @param string $action Action du formulaire
 * @param array $attributs Attributs
 * @return Formulaire
 */
    public function debutForm(string $methode = 'post'
    , string $action = "#", $attributs = []):self
    {
        //We create the tag form
        $this->formCode .="<form action='$action' method='$methode'";
   
        //on ajoute les attributs éventuels
         
             $this->formCode .= $attributs ? $this->ajoutAttributs($attributs).'>' : '>';
         
        return $this;

    }

    /**
     * Balise de fermeture du formulaire
     *
     * @return Formulaire
     */
    public function finForm():self
    {
   $this->formCode .= '</form>';
   return $this;
    }

    /**
     * Ajout d'un label
     *
     * @param string $for
     * @param string $texte
     * @param array $attributs
     * @return self
     */
    public function ajoutLabelFor(string $for, string $texte, array $attributs = []):self
    {
        //on ouvre la balise
        $this->formCode .= "<label for='$for'";

        //on ajoute les attributs
        $this->formCode .= $attributs ? $this->ajoutAttributs($attributs) : '';

        //on ajoute le texte
        $this->formCode .=">$texte</label>";

        return $this;
    }

    public function ajoutInput(string $type, string $nom, array $attributs = []):self
    {
        //On ouvre la balise
        $this->formCode .= "<input type='$type' name='$nom'";

        //on ajoute les attributs
        $this->formCode .= $attributs ? $this->ajoutAttributs($attributs).'>' : '>';

        return $this;
    }


    public function ajoutTextarea(string $nom, string $valeur, array $attributs = []):self
    {
        //on ouvre la balise
        $this->formCode .= "<textarea name='$nom'";

        //on ajoute les attributs
        $this->formCode .= $attributs ? $this->ajoutAttributs($attributs) : '';

        //on ajoute le texte
        $this->formCode .=">$valeur</textarea>";

        return $this;
    }


    public function ajoutSelect(string $nom, array $options, array $attributs = []):self
    {
        //on crée le select
        $this->formCode .= "<select name='$nom'";

        //on ajoute les attributs
        $this->formCode .= $attributs ? $this->ajoutAttributs($attributs).'>' : '>';

        //on ajoute les options
        foreach($options as $valeur => $texte)
        {
            $this->formCode .= "<option value='$valeur'>$texte</option>";
        }

        //on ferme le select
        $this->formCode .= '</select>';
        return $this;
        
    }

    public function ajoutBouton(string $texte,  array $attributs = []):self
    {
        //on ouvre la balise
        $this->formCode .= '<button ';

        //on ajoute les attributs
        $this->formCode .= $attributs ? $this->ajoutAttributs($attributs) : '';

        //on ajoute le texte et on ferme
        
            $this->formCode .= ">$texte</button>";
        
        return $this;
        
    }
}
?>