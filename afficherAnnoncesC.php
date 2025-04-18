<?php
namespace actuconcoursjobs;?>
<?php
require_once("domaine/lang.php");
require_once("fonctions.php");
?>
<html>
<?php
//on definit une constante contenant le dossier racine du projet

use actuconcoursjobs\Controllers\AnnoncesController;

require_once('Controllers/Controller.php');
require_once('Controllers/AnnoncesController.php');
$controller = new AnnoncesController;
$annonceSelected = $controller->annonceSelected($_GET['id']);
?>
<head>
   <?php require_once('entete.php');?>
    <title><?=$annonceSelected->intitule ?></title>
</head>
 
<body>
<?php

require_once('menu.php');
require_once('corrousel.php');
?>
<!-- <main> -->
<?php
   // echo 'welcome';
   // var_dump($annonces);
?>


<section class="annonces">

<p> Concours d’entrée à l’Ecole Normale Supérieure d’Enseignement Technique (ENSET) du l’Université de Douala (premier et second cycle), au titre de l’année académique 2021-2022 
    <br>
    <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENSET_UD_2021_1ere%20annee%20du%202nd%20cycle_fr.pdf"> Télécharger l’arrêté </a>
    <br><br>
    
  Competitive examinations into the Advanced Teacher Training College for Technical Education (ENSET) of the University Douala (first et second cycle), for the 2021-2022 academic year.
   <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENSET_UD_2021_1ere%20annee%20du%202nd%20cycle_fr.pdf"> Download the order </a>
   <br> <br>
</p>

   <hr>
   
   <p> 
Competitive Common Entrance Examination for the recruitment of student-teachers of Technical Secondary Education into the Higher TechnicalTeachers’ 
Training College (HTTTC) of the University of Buea in Kumba (fisrt year of the fisrt cycle), for the 2021-2022 academic year
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENSET%20Kumba_UB_2021_1ere%20annee%20du%201er%20cycle_fr.pdf"> Download the order </a>
   <br>
   <br>
 Concours pour le recrutement des Elèves-Professeurs à l’Ecole Normale Supérieure d’Enseignement Technique (ENSET) de l’Université de Buéa à Kumba
 (1ere année du premier cycle),
 au titre de l’année académique 2021-2022.
  
   <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENSET%20Kumba_UB_2021_1ere%20annee%20du%202nd%20cycle_en.pdf"> Télécharger l’arrêté </a>
   <br>
   <br>
</p>
   <hr>
   
   <p> 
Competitive Common Entrance Examination for the recruitment of student-teachers of Technical Secondary Education into the Higher TechnicalTeachers’ 
Training College (HTTTC) of the University of Buea in Kumba (fisrt year of the second cycle), for the 2021-2022 academic year
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENSET%20Kumba_UB_2021_1ere%20annee%20du%202nd%20cycle_en.pdf"> Download the order </a>
   <br>
   <br>
 Concours pour le recrutement des Elèves-Professeurs à l’Ecole Normale Supérieure d’Enseignement Technique (ENSET) de l’Université de Buéa à Kumba
 (1ere année du second cycle),
 au titre de l’année académique 2021-2022.
  
   <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENSET%20Kumba_UB_2021_1ere%20annee%20du%201er%20cycle_fr.pdf"> Télécharger l’arrêté </a>
   <br>
   <br>
</p>
   <hr>
   
   <p> 
   
   
Concours d’entrée à l’Ecole Normale Supérieure d’Enseignement Technique (ENSET) de l’Université de Yaoundé I à Ebolowa (1ere année du premier cycle),
au titre de l’année académique 2021-2022

 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENSET%20Ebolowa_UYI_2021_1ere%20annee%20du%201er%20cycle_fr.pdf"> Télécharger l’arrêté </a>
   <br>
   <br>
 Competitive entrance examination into the Higher Technical Teachers’ Training College (HTTTC) of the University of Yaoundé I (fisrt year of the fisrt cycle), for the 2021-2022.
  
   <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENSET%20Ebolowa_UYI_2021_1ere%20annee%20du%201er%20cycle_en.pdf"> Download the order </a>
   <br>
   <br>
</p>
   <hr>
   
   <p> 
Concours d’entrée à l’Ecole Normale Supérieure d’Enseignement Technique (ENSET) de l’Université de Yaoundé I à Ebolowa,
au titre de l’année académique 2021-2022 (1ere année du second cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENSET%20Ebolowa_UYI_2021_1ere%20annee%20du%202nd%20cycle_fr.pdf"> Télécharger l’arrêté </a>
   <br>
   <br>
  Competitive entrance examination into the Higher Technical Teachers’ Training College (HTTTC) of the University of Yaoundé I
  , for the 2021-2022. (fisrt year of the second cycle)
   <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENSET%20Ebolowa_UYI_2021_1ere%20annee%20du%202nd%20cycle_en.pdf"> Download the order </a>
   <br>
   <br>
</p>

<hr>
   
   <p> 
Competitive Entrance Examination into the Higher Technical Teacher Training College (HTTTC) of the University of Bamenda at Bambili
, for the 2021-2022 academic year (fisrt year of the first cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENSET%20Bambili_UBa_2021_1ere%20annee%20du%201er%20cycle_en.pdf"> Download the order </a>
   <br>
   <br>
   
  
   <p> 
Concours d’entrée à l’Ecole Normale Supérieure d’Enseignement Technique (ENSET)
Bambili de l’Université de Bamenda, au titre de l’année académique 2021-2022. (1ere année du premier cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENSET%20Bambili_UBa_2021_1ere%20annee%20du%201er%20cycle_fr.pdf"> Télécharger l’arrêté </a>
   <br>
   <br>
   </p>
   
   <p> 
Competitive Entrance Examination into the Higher Technical Teacher Training College (HTTTC) of the University of Bamenda at Bambili
, for the 2021-2022 academic year (fisrt year of the second cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENSET%20Bambili_UBa_2021_1ere%20annee%20du%202nd%20cycle_en.pdf"> Download the order </a>
   <br>
   <br>
   
  
   <p> 
Concours d’entrée à l’Ecole Normale Supérieure d’Enseignement Technique (ENSET)
Bambili de l’Université de Bamenda, au titre de l’année académique 2021-2022. (1ere année du premier cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENSET%20Ebolowa_UYI_2021_1ere%20annee%20du%202nd%20cycle_fr.pdf"> Télécharger l’arrêté </a>
   <br>
   <br>
   </p>
   
   
   
   <hr>
   
   <p> 
Competitive entrance examination into the Higher Teacher Training College, University of Yaoundé I, for 2021-2022 academic year.
(fisrt year of the first cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENS_UYI_2021_1ere%20annee%20du%201er%20cycle_en.pdf"> Download the order </a>
   <br>
   <br>
   
  
   <p> 
   Concours d’entrée à l’Ecole Normale Supérieure de l’Université de Yaoundé I, au titre de l’année académique 2021-2022
(1ere année du premier cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENS_UYI_2021_1ere%20annee%20du%201er%20cycle_fr.pdf"> Télécharger l’arrêté </a>
   <br>
   <br>
   </p>
   
   <p> 
Competitive entrance examination into the Higher Teacher Training College, University of Yaoundé I, for 2021-2022 academic year.
 (fisrt year of the second cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENS_UYI_2021_1ere%20annee%20du%201er%20cycle_en.pdf"> Download the order </a>
   <br>
   <br>
   
  
   <p> 
Concours d’entrée à l’Ecole Normale Supérieure de l’Université de Yaoundé I, au titre de l’année académique 2021-2022 (1ere année du second cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENS_UYI_2021_1ere%20annee%20du%202nd%20cycle_fr.pdf"> Télécharger l’arrêté </a>
   <br>
   <br>
   </p>
   
   
   <hr>
   
   <p> 
Competitive entrance examination into the Higher Teachers’ College (ENS) of the University of Maroua for the 2021-2022 academic year.
(fisrt year of the first cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENS%20Maroua_UM_2021_1ere%20annee%20du%201er%20cycle_en.pdf"> Download the order </a>
   <br>
   <br>
   
  
   <p> 
  Concours d’entrée à l’Ecole Normale Supérieure de l’Université de Maroua, au titre de l’année académique 2021-2022
(1ere année du premier cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENS%20Maroua_UM_2021_1ere%20annee%20du%201er%20cycle_fr.pdf"> Télécharger l’arrêté </a>
   <br>
   <br>
   </p>
   
   <p> 
Competitive entrance examination into the Higher Teachers’ College (ENS) of the University of Maroua for the 2021-2022 academic year.
 (fisrt year of the second cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENS%20Bertoua_UN_2021_1ere%20annee%20du%202nd%20cycle_en.pdf"> Download the order </a>
   <br>
   <br>
   
  
   <p> 
Concours d’entrée à l’Ecole Normale Supérieure de l’Université de Maroua, au titre de l’année académique 2021-2022
(1ere année du second cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENS%20Maroua_UM_2021_1ere%20annee%20du%202nd%20cycle_fr.pdf"> Télécharger l’arrêté </a>
   <br>
   <br>
   </p>
   
   
   
   
   
   
   
   
   
   
   
   
   <hr>
   
   <p> 
   
   
   Competitive entrance examination into the Higher Teacher Training College of Bertoua for the 2021-2022 academic year.
(fisrt year of the first cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENS%20Bertoua_UN_2021_1ere%20annee%20du%201er%20cycle_en.pdf"> Download the order </a>
   <br>
   <br>
   
  
   <p> 
 Concours d’entrée à l’Ecole Normale Supérieure de Bertoua au titre de l’année académique 2021-2022
(1ere année du premier cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENS%20Bertoua_UN_2021_1ere%20annee%20du%201er%20cycle_fr.pdf"> Télécharger l’arrêté </a>
   <br>
   <br>
   </p>
   
   <p> 
Competitive entrance examination into the Higher Teacher Training College of Bertoua for the 2021-2022 academic year.
 (fisrt year of the second cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENS%20Bertoua_UN_2021_1ere%20annee%20du%202nd%20cycle_en.pdf"> Download the order </a>
   <br>
   <br>
   
  
   <p> 
Concours d’entrée à l’Ecole Normale Supérieure de Bertoua au titre de l’année académique 2021-2022 (1ere année du second cycle)
 <br>
   <a  href="https://www.minesup.gov.cm/site/2021/DAUQ/ENS%20Bertoua_UN_2021_1ere%20annee%20du%202nd%20cycle_fr.pdf"> Télécharger l’arrêté </a>
   <br>
   <br>
   </p>


   <hr>
</div>



   
</section>
<!--</main>-->
<?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
 
</body>
</html>
