<footer>
    
    <?php 
    $country = 'Cameroun';
    $condition = "pays='$country'";
    $countCameroun = $controller->getNunberOdRows($condition);
    
    $country = 'Canada';
    $condition = "pays='$country'";
    $countCanada = $controller->getNunberOdRows($condition);
    
     $country = 'Germany';
    $condition = "pays='$country'";
    $countGermany = $controller->getNunberOdRows($condition);
    
     $country = 'United Kingdom';
    $condition = "pays='$country'";
    $countUK = $controller->getNunberOdRows($condition);
    
     $country = 'United States of America';
    $condition = "pays='$country'";
    $countUSA = $controller->getNunberOdRows($condition);
    
      $country = 'South Africa';
    $condition = "pays='$country'";
    $countSA = $controller->getNunberOdRows($condition);
    
    $country = 'Zambia';
    $condition = "pays='$country'";
    $countZambia = $controller->getNunberOdRows($condition);
    
    $country = 'Switzerland';
    $condition = "pays='$country'";
    $countSL = $controller->getNunberOdRows($condition);
    
    $country = 'Spain';
    $condition = "pays='$country'";
    $countSpain = $controller->getNunberOdRows($condition);
    
    $country = 'Norway';
    $condition = "pays='$country'";
    $countNorway = $controller->getNunberOdRows($condition);
    
    $country = 'Netherlands';
    $condition = "pays='$country'";
    $countNetherlands = $controller->getNunberOdRows($condition);
    
     $country = 'Italy';
    $condition = "pays='$country'";
    $countItaly = $controller->getNunberOdRows($condition);
    
    $country = 'Hong Kong';
    $condition = "pays='$country'";
    $countHK = $controller->getNunberOdRows($condition);
    
    $country = 'France';
    $condition = "pays='$country'";
    $countFrance = $controller->getNunberOdRows($condition);
    
    $country = 'Belgium';
    $condition = "pays='$country'";
    $countBelgium = $controller->getNunberOdRows($condition);
    
    $country = 'Australia';
    $condition = "pays='$country'";
    $countAustralia = $controller->getNunberOdRows($condition);
    
    
    
    ?>
    <footer class="bg-dark text-white pt-5 pb-4">
    <div class="container text-center text-md-left">
	     <div class="row text-center text-md-left">
		       <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
			   <h5 class="text-uppercase mb-4 font-weight-bold text-warning">actuconcoursjobs.com</h5>
                  <p> <a href="conditions_utilisations_fr.php" target="_BLANK">Conditions d'utilisation</a> </p>
         
         
                   <p><a href="politique_confidentialite.php" target="_BLANK">Politique de confidentialité</a></p>
			   </div>
			   
			   <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
			   <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Jobs</h5>
			      <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=Australia" class="text-white" style="text-decoration:none;">Australia (<?=$countAustralia?>)</a></p>
                  <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=Belgium" class="text-white" style="text-decoration:none;">Belgium (<?=$countBelgium?>)</a></p>
                  <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=Canada" class="text-white" style="text-decoration:none;">Canada (<?=$countCanada?>)</a></p>
                  <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=Cameroun" class="text-white" style="text-decoration:none;">Cameroun (<?=$countCameroun?>)</a></p>
                  <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=France" class="text-white" style="text-decoration:none;">France (<?=$countFrance?>)</a></p>
				  <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=Germany" class="text-white" style="text-decoration:none;">Germany (<?=$countGermany?>)</a></p>
				  <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=Hong Kong" class="text-white" style="text-decoration:none;">Hong Kong (<?=$countHK?>)</a></p>
				  <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=Italy" class="text-white" style="text-decoration:none;">Italy (<?=$countItaly?>)</a></p>
				  <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=Netherlands" class="text-white" style="text-decoration:none;">Netherlands (<?=$countNetherlands?>)</a></p>
				  <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=Norway" class="text-white" style="text-decoration:none;">Norway (<?=$countNorway?>)</a></p>
				  <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=Spain" class="text-white" style="text-decoration:none;">Spain (<?=$countSpain?>)</a></p>
				  <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=South Africa" class="text-white" style="text-decoration:none;">South Africa (<?=$countSA?>)</a></p>
				  <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=Switzerland" class="text-white" style="text-decoration:none;">Switzerland (<?=$countSL?>)</a></p>
				  <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=United Kingdom" class="text-white" style="text-decoration:none;">United Kingdom (<?=$countUK?>)</a></p>
			      <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=United States of America" class="text-white" style="text-decoration:none;">United States of America (<?=$countUSA?>)</a></p>
			      <p><a href="afficherAnnonces.php?typeAnnonce=JOBS&pays=Zambia" class="text-white" style="text-decoration:none;">Zambia (<?=$countZambia?>)</a></p>
			      
			   
			   </div>
			   
			   <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
			   <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Liens Utiles</h5>
                  <p><a href="afficherAnnonces.php?typeAnnonce=CONCOURS" class="text-white" style="text-decoration:none;">Concours lances</a></p>
				  <p><a href="afficherAnnonces.php?typeAnnonce=BOURSE" class="text-white" style="text-decoration:none;">Bourses</a></p>
				  <p><a href="afficherAnnonces.php?typeAnnonce=STAGE" class="text-white" style="text-decoration:none;">Stages</a></p>
			      <p><a href="afficherAnnonces.php?typeAnnonce=RESULTAT" class="text-white" style="text-decoration:none;">Resultat concours</a></p>
			       <p><a href="afficherAnnonces.php?typeAnnonce=BEPC" class="text-white" style="text-decoration:none;">Epreuves BEPC</a></p>
			       <p><a href="afficherAnnonces.php?typeAnnonce=PROBATOIRE" class="text-white" style="text-decoration:none;">Epreuves PROBATOIRE</a></p>
			       <p><a href="afficherAnnonces.php?typeAnnonce=BACCALAUREAT" class="text-white" style="text-decoration:none;">Epreuves BACCALAUREAT</a></p>
			       <p><a href="afficherAnnonces.php?typeAnnonce=GCE OL" class="text-white" style="text-decoration:none;">GCE OL Past Questions</a></p>
			       <p><a href="afficherAnnonces.php?typeAnnonce=GCE AL" class="text-white" style="text-decoration:none;">GCE AL Past Questions</a></p>
			   </div>
			   
			    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
			   <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contacts</h5>
                  <p><i class="fas fa-home mr-3"></i>Douala,Cameroun</p>
				  <p><i class="fas fa-envelope mr-3"></i>contact_info@actuconcoursjobs.com</p>
				   <p><i class="fas fa-phone mr-3"></i>237 680770379</p>
				   <p><a href="contactez_nous.php" class="text-white" style="text-decoration:none;"><?=CONTACTEZ_NOUS?></a></p>
				  
			   </div>
			   
			   
			   
         </div>
		      <hr class="mr-4">
                <div class="row align-items-center">
				           <div class="col-md-7 col-lg-8">
				             <p> <h2>  &copy; 2021, by DigitalSolutions </h2></p>
				           </div>
						   
						   <div class="col-md-5 col-lg-4">
				                <div class="row text-center text-md-right">
								  <ul class="list-unstyled list-inline">
								     <li class="list-inline-item">
									 <a href="https://www.facebook.com/groups/846195042661993/" class="btn-floating btn-sm text-white" style="font-size:23px;">
									   <i class="fab fa-facebook"></i></a>
									 </li>
									 
									  <li class="list-inline-item">
									 <a href="https://wa.me/237658096189/?text=Salut à l’équipe actuconcoursjobs, j'ai une question concernant..." class="btn-floating btn-sm text-white" style="font-size:23px;">
									   <i class="fab fa-whatsapp"></i></a>
									 </li>
									 
									  <li class="list-inline-item">
									 <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;">
									   <i class="fab fa-telegram"></i></a>
									 </li>
								  </ul>
								</div>
				           </div>
				</div>
    </div>
    </footer>