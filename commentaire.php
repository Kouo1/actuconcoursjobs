<?php
//session_start();
?>
<!--ce fichier commentaire.php effectut un appel recursif si il trouve des enfants-->
<div class="containerComment" id="comment-<?= $comment->id; ?>">
    <div class="row">
        
        
        
        
        
        <div class="card mb-3 mt-5">
            <div class="row g-0 mt">
              <div class="col-md-4">
                <img src="<?=ROOT?>/images/personnage.png" alt="comment" class="img-fluid rounded-start">
              </div>
              
              <div class="col-md-8">
                <div class="card-header">
                    <h4 class="text-end"><?= htmlentities($comment->nom).' , '.date('d-m-Y',strtotime($comment->date_publication)); ?></h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="annonce-<?=$annonceIntitule?>-<?=$annonceAccueil->id_annonce ?>"> <?= $annonceAccueil->intitule ?></a></h5>
                  <p class="card-text"><small class="text-lowercase"><?=nl2br(htmlentities($comment->contenu)); ?></small></p>
                  
                  
                  <p class="card-text"><small>
                      
                      <?php if(isset($_SESSION['connectedUser'])): ?><!-- Si l'utilisateur n'est pas connecté on supprimer le bouton supprimer-->
            <?php if($_SESSION['connectedUser']['email'] == $comment->refer_utilisateur ): ?> <!-- Le bouton supprimer apparait chez l'utilisateur qui l'a publiée-->
        <a href="deleteCommentaire.php?p=<?=$comment->id ?>" data-id="<?=$comment->id ?>" class="supprimerCommentaire">
         <input type="button" value="Supprimer"></a> 
           &nbsp &nbsp &nbsp &nbsp &nbsp
         <?php endif; ?>   
         <?php endif; ?>         
           <button class="reply" data-id="<?= $comment->id; ?>">Répondre</button>
                  </small></p>
                </div>
              </div>
            </div>
          </div>
        
      
    </div>
</div>

<div style="margin-left: 50px;">
    <?php if(isset($comment->children)): ?>
        <?php foreach($comment->children as $comment): ?>
            <?php require('commentaire.php'); ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>