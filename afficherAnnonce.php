<?php
namespace actuconcoursjobs;

session_start();
require_once("domaine/lang.php");
require_once("fonctions.php");
?>
<html>
<?php
//on definit une constante contenant le dossier racine du projet

use actuconcoursjobs\Controllers\AnnoncesController;

use actuconcoursjobs\Controllers\CommentairesController;

require_once('Controllers/Controller.php');
require_once('Controllers/AnnoncesController.php');
require_once('Controllers/CommentairesController.php');
$controller = new AnnoncesController;

$annonceSelected = $controller->annonceSelected(htmlspecialchars($_GET['id']));

$idAnnonceSelected = htmlspecialchars($_GET['id']);

//annonces similaires
$annoncesSimilaires = $controller->annoncesSimilaires($annonceSelected->secteur_activite, $annonceSelected->type);

//on supprime l'element en cours
//unset($annoncesSimilaires[array_search($annonceSelected,$annoncesSimilaires)]);
?>

   <?php require_once('entete.php');?>
    <title><?=$annonceSelected->intitule ?></title>
<head>
      <?php  require_once('pub.php');?>
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
 <!-- <a href=https://refpa.top/L?tag=d_1084591m_97c_&site=1084591&ad=97><img src="https://1xpartners.com/img/AdAgent_1/349b47e0-4118-49b7-9efd-cfb5fcc7222a.gif" width=100%></a>-->

<section class="annoncesB">
     <div class="container mt-5"><!--margin top:5-->
         
            <div class="row" >
               <div class="col-md-8">
   <!-- <div class="annonceA">-->
   <!-- <div class="titre">-->
     
   <!--<div class="monBlock">--><div class="card">
               
                
               
               <div class="card-header">
     <u><?=$annonceSelected->type ?> </u>

        <h1><?= $annonceSelected->intitule?></h1><br>
              </div>
    
    <div class="card-body">
        <?php if(trim($annonceSelected->pays) != null){ ?>
       <i> <b><?=PAYS ?>:</b> <?= $annonceSelected->pays?></i><br>
       
     <?php 
        }
     if(trim($annonceSelected->region) != null){ ?>
      <i><b><?=REGION?>:</b> <?= $annonceSelected->region?></i><br>
      <?php 
            }
            
            if(trim($annonceSelected->ville) != null){
     ?>
        <i><b><?=VILLE?>:</b> <?= $annonceSelected->ville?></i><br>
        
        <?php
           
            }
        if($annonceSelected->type == 'JOBS'){
        ?>
        
        <i><b>Employeur:</b> <?= $annonceSelected->entreprise?></i><br>
        <?php } ?>
        
       
    
<!--</div>-->


   <!--<div class="right">-->
       
       
       <?php if($annonceSelected->date_limite != '0000-00-00 00:00:00'){ ?>
        <p class="Date_limite">
       <br>
         
       <h4><?=DATE_LIMITE?>   <?= $formattedweddingdate =date('d-m-Y',strtotime($annonceSelected->date_limite)); ?> </h4>
        
       </p>
       <?php } ?>
       
       <p class="description">
       <br>
       <h4><?=DESCRIPTION_COMPLETE?></h4><br>
       <?=nl2br($annonceSelected->description)?>
       </p>

 
         <?php if($annonceSelected->type != 'CONCOURS'){
             //affichage des offres differentes du concours
        ?>
        
    <?php if(trim($annonceSelected->profil_rechercher) != null){ ?>
      <p class="Profile">
       <br><br>
         <h4><?=PROFIL_RECHERCHE?></h4> <br>
         <?=nl2br($annonceSelected->profil_rechercher)?>
          </p
          
     <?php } ?>
     
     <?php if(trim($annonceSelected->competence_requise) != null){ ?>
          
       <p class="Competence">
       <br><br>
         <h4><?=COMPETENCE_REQUISES?></h4> <br>
         <?=nl2br($annonceSelected->competence_requise)?>
          </p>
    <?php } ?>
    
    <?php if(trim($annonceSelected->piece_a_fournir) != null){ ?>      
          <p class="Competence">
       <br><br>
         <h4><?=COMPOSITION_DES_DOSSIERS_DE_CANDIDATURE?></h4> <br>
         <?=nl2br($annonceSelected->piece_a_fournir)?>
          </p>
          
    <?php } ?>
          

    <?php if(trim($annonceSelected->email_d_envoi_candidature) != null || trim($annonceSelected->lien_pour_postuler) ){ ?>
          <p class="postuler">
       <br><br>
         <h4><?=POSTULER?></h4> <br>
         <?php if($annonceSelected->email_d_envoi_candidature != null) { ?>
         <?=ENVOYEZ_VOTRE_DOSSIER_DE_CANDIDATURE  ?>  <?=A_L_ADRESSE_SUIVANTE?>
        <a href="mailto:<?=$annonceSelected->email_d_envoi_candidature?>"><?=$annonceSelected->email_d_envoi_candidature?></a>
        <?php }
          else 
          {
        ?>
         
        <a href="<?=$annonceSelected->lien_pour_postuler?>" class="btn btn-primary"><?=CLIQUEZ_ICI_POUR  ?></a> <?= POSTULER ?>
        <?php }
              }
        ?>
        
        <?php } 
         //fin different de concours
         else
         {
              if($annonceSelected->lien_arrete != null) {
        ?>
          
        <a href="<?=$annonceSelected->lien_arrete?>" class="btn btn-primary"><?=TELECHARGEZ_L_ARRETE ?></a>
        
        <?php
        
             }
             
             }
             
               if($annonceSelected->lien_image != null) {
               ?>
                 
               <img src="<?=$annonceSelected->lien_image?>"/>
               
               <?php
               
                    }
               ?>
                <?php //require('pub_320_50.php');?>
               
   <br/><br>      <h1><b><?=POUR_ETRE_INFORME_EN_REEL?> ,</b></h1>
                    <br/><br>
                    
               <a href="modifierAnnonce.php?id=<?=$annonceSelected->id_annonce?>"><img src="<?=ROOT?>/images/edit.png" alt="Modifier" height="15" width="15"></a></small>
                 
               <i class="fab fa-whatsapp fa-3x"><a href="https://t.me/+1fh6l3gls5I5ZjQ0" target="_blank"> <?=INTEGREZ_NOTRE_FORUM_TELEGRAM?></a></i><br><br>
               	 <i class="fab fa-telegram fa-3x"><a href="https://chat.whatsapp.com/KAHmPCUK5cEB8XpQCuJ0vM" target="_blank"> <?=INTEGREZ_NOTRE_FORUM_WHATSAPP?></a></i><br><br>
                 
                 
               
   <br/><br>
   <i >  <b> <?= PARTAGEZ_AVEC_VOS_PROCHES_SUR?>:</b> <br><br>
		<?php $annonceIntitule = trim(strtolower(str_replace(" ", "-", trim(removeAccents($annonceSelected->intitule)))));
				   // echo $annonceIntitule;
				    $annonceIntitule = str_replace(":", "-", $annonceIntitule);
				    $annonceIntitule = str_replace("/", "-", $annonceIntitule);
				     $annonceIntitule = str_replace("(", "-", $annonceIntitule);
				     $annonceIntitule = str_replace(")", "-", $annonceIntitule);
				      $annonceIntitule = str_replace("&", "-", $annonceIntitule);
				     
					;?>
		<a class="partage-whatsapp" href="https://api.whatsapp.com/send?text=https://actuconcoursjobs.com/annonce-<?=$annonceIntitule?>-<?=$annonceSelected->id_annonce ?>" target="_blank">
			 <!--<img src="?<=ROOT?>/images/whatsapp.png">-->  <i class="fab fa-whatsapp fa-3x"><!--<img src="<?=ROOT?>/images/whatsapp.png">-->
						</i> 
		</a>
			<a href="https://www.facebook.com" target="_blank"> 
						<i class="fab fa-facebook fa-3x"><!--<img src=?"<=ROOT?>/images/whatsapp.png">-->
						</i> 
						<!-- Intï¿½grez notre Groupe WHATSAPP et Restez informï¿½ -->
						</a>
     </i>
     <br>
    <!-- <b>Tutoriel de la semaine</b>-->
     
  <!--  Comment partager les donnï¿½es entre votre telephone Android et l'ordinateur en utilisant l'application Xender? 
  <iframe width="450" height="315" src="https://www.youtube.com/embed/ByCFqQ7m7nQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
    <!-- Comment ouvrir WhatsApp sur l'ordinateur?
    <iframe width="450" height="315" src="https://www.youtube.com/embed/SxIP8h06ZC8?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    -->
    <!-- </div> Fin ringt-->
     
    <!-- </div> Fin annonce -->
  <!-- <a target="_blank"  href="https://www.amazon.fr/gp/search/ref=as_li_qf_sp_sr_il?ie=UTF8&tag=kps0f8-21&keywords=telephone&index=aps&camp=1642&creative=6746&linkCode=ur2&linkId=51a201ed1208e08ae9846d2c07ded725"><img border="0" src="//ws-eu.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=FR&ASIN=B08XJXNN9N&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=kps0f8-21" ></a>
      <a target="_blank"  href="https://www.amazon.fr/gp/search/ref=as_li_qf_sp_sr_il?ie=UTF8&tag=kps0f8-21&keywords=integral transforms in computational heat and fluid flow&index=aps&camp=1642&creative=6746&linkCode=ur2&linkId=2aeb4d08b3d9e4d41fb35ca989d73cf5"><img border="0" src="//ws-eu.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=FR&ASIN=B08R2C8FH9&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=kps0f8-21" ></a>
    <a target="_blank"  href="https://www.amazon.fr/gp/search/ref=as_li_qf_sp_sr_il?ie=UTF8&tag=kps0f8-21&keywords=ordinateur&index=aps&camp=1642&creative=6746&linkCode=ur2&linkId=9bb1273d857ad8fd44f171cef1c70f85"><img border="0" src="//ws-eu.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=FR&ASIN=B09145YJF1&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=kps0f8-21" ></a>
        -->
          <!--Section Offres similaires -->
     <br><br><br>
     </div>
</div>
<!-- commentaire-->

<!--</div> end monblock-->
<hr>

<div class="sectionCommentaire">
<?php 
$commentaireController = new CommentairesController;
$jointureTable = " inner join utilisateurs on email=refer_utilisateur";
$commentaires = $commentaireController->findAllCommentsWithChildren(htmlspecialchars($_GET['id']),true,$jointureTable);

 //var_dump($commentaires);

foreach($commentaires as $comment): ?>
   <?php require('commentaire.php'); ?>
<?php endforeach; ?>

<?php require_once('addCommentaireForm.php');?>
</div>
<!--fin  commentaire-->        
    
 <div class="card mb-3 mt-5"><!--For pub-->
            <div class="row g-0 mt align-items-center">
              
              <div class="col mt-5">
             
                 <?php require('pub_bas_offre.php');?>
            
              </div>
              <div class="col mt-5">
             
                 <?php require('pub_bas_offre.php');?>
            
              </div>
            </div>
          </div><!--End For pub-->

       
       
          </div>  <!-- End column-->
            
            <div class="col-md-4">
                
                          <?php 
        require('pub_barre_laterale.php');
        ?>
               <div class="row justify-content-center">
                   <div class="col">
       <?php 
        $n = 0; $nb = 0;
        foreach ($annoncesSimilaires as $annonceAccueil) : 
           if($nb <=10)
             {
               $nb++;  
          if($annonceAccueil->id_annonce != $annonceSelected->id_annonce)
          {
             if($n == 0)
             {
               $n++;
               ?>
              <center> <b> <?=LES_OFFRES_SIMILAIRES?> </b> </center>
               <hr>
       <?php   }
        ?>


  <!-- <div class="annonceA">-->
      <p class="date"> </p>
      <h2> <a href="afficherAnnonce.php?id=<?= $annonceAccueil->id_annonce ?>"> <?= $annonceAccueil->intitule ?></a></h2>
      <!--On appelle la methode 'lire' du controlleur 'Utilisateur' Eviter l'espace  -->
      <p class="description">
      
      <?php
            if(trim($annonceAccueil->ville) != null){
     ?>
        <i><b><?=VILLE?>:</b> <?= $annonceAccueil->ville?></i><br>
        
        <?php
           
            }?>
        
      </p>

      <p class="auteur">

      </p>
      <hr>
   <!--</div>-->
   
<!--</div>-->


<?php 
          }
          }
endforeach;
?>
<!-- fin offres similaires-->
                    </div><!--En col si -->
                 </div><!--En row si -->
                 
                 <?php 
        require('pub_barre_laterale.php');
        ?>
             </div>  <!-- End column-->
        </div>  <!-- End row-->
                
    </div>  <!-- End container-->
</section>
<!--</main>-->
<?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
 
</body>
</html>