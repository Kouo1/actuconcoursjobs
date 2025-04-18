<form method="POST" action="verificationConnexionModale.php" id="formPopupGlobale">
<div class="popup">
	    <div class="close-btn">&times;</div>
		<div class="formPopup">
		  <h2><?= CONNECTEZ_VOUS_SUR_ACTUCONCOURSJOBS ?></h2>
		  <div class="formPopup-element">
		  <a href="creerUtilisateur.php"> <?= JE_N_AI_PAS_DE_COMPTE ?> </a>
		  </div>
		  <span class="connexion_feedback"></span><br />
		  <div class="formPopup-element">
		          <label for="email"><?= EMAIL ?></label>
                  <input type="email" name="email" id="email" placeholder="<?= VOTRE_ADRESSE_EMAIL ?>" required>
		  </div>
		  
		  <div class="formPopup-element">
		   <label for="mot_de_passe"><?= MOT_DE_PASSE ?></label>
                  <input type="password" name="mot_de_passe"  id="mot_de_passe" placeholder="<?= VOTRE_MOT_DE_PASSE ?>" required>
		  </div>
		  
		<!--  <div class="formPopup-element">
		          <label for="remember-me">Remember me</label>
                  <input type="checkbox"  id="remember-me">
		  </div>
-->
		
		<div class="formPopup-element">
                 <button type="submit"><?= ME_CONNECTER ?></button>
		  </div>
		  <div class="formPopup-element">
              <a href="#"><?= MOT_DE_PASSE_OUBLIE ?></a>
		  </div>
		</div>
	    
	  </div>
	 </form>