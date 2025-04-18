<?php
//session_start();
?>
<!--ce fichier commentaire.php effectut un appel recursif si il trouve des enfants-->
<div class="containerComment" id="comment-<?= $comment->id; ?>">
    <div class="row">
        <div class="leftComment">
            <img src="images/personnage.png" alt="comment" width="20">
        
        </div>

        
        <div class="rightComment1">
        <?= htmlentities($comment->nom).' , '.date('d-m-Y h:m:s',strtotime($comment->date_publication)); ?> 
        </div>
        <div class="rightComment">
        <p><?=nl2br(htmlentities($comment->contenu)); ?></p>
        <div class="text-right">

       <!-- $_SESSION['connectedUser']['email']-->
        <?php if(isset($_SESSION['connectedUser'])): ?><!-- Si l'utilisateur n'est pas connecté on supprimer le bouton supprimer-->
            <?php if($_SESSION['connectedUser']['email'] == $comment->refer_utilisateur ): ?> <!-- Le bouton supprimer apparait chez l'utilisateur qui l'a publiée-->
        <a href="deleteCommentaire.php?p=<?=$comment->id ?>" data-id="<?=$comment->id ?>" class="supprimerCommentaire">
         <input type="button" value="Supprimer"></a> 
           &nbsp &nbsp &nbsp &nbsp &nbsp
         <?php endif; ?>   
         <?php endif; ?>         
           <button class="reply" data-id="<?= $comment->id; ?>">Répondre</button>
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