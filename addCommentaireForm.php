<form method="POST"  action="" id="formCommentaire" method="POST">
<input type="hidden" name="parent_id" value="0" id="parent_id">
<input type="hidden" name="annonce_intitule" value="<?=$annonceSelected->intitule ?>" id="annonce_intitule">
<input type="hidden" name="annonce_id" value="<?=$idAnnonceSelected ?>" id="annonce_id">

<span class="addComment_feedback"></span>
<h4>Poster un commentaire</h4>
<div class="texteCommentaire">
 <textarea name="contenu_commentaire" id="contenu_commentaire"   placeholder="Votre commentaire" required></textarea><br>
 </div>
 <button type="submit">Commenter</button>
</form>
<?php require_once('loginModale.php');?>