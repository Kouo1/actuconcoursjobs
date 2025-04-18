<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KXD3Q5Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->	

<!--Start of Tawk.to Script -->
<!--Start pub popcash -->

<?php //require_once('pub_pc.php');
?>
<!--END pub popcash -->


 <!-- pub adcash -->               
<!--<script type="text/javascript" data-adel="atag" src="//acacdn.com/script/atg.js" czid="hhwwvmgh"></script>-->
<!--END pub adcash -->

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/610c1c30d6e7610a49aec98f/1fcbks8qu';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!--PropellerAds multitag -->
<!--<script>(function(s,u,z,p){s.src=u,s.setAttribute('data-zone',z),p.appendChild(s);})(document.createElement('script')
,'https://iclickcdn.com/tag.min.js',4861971,document.body||document.documentElement)</script>  -->


<!--<nav class="navbar navbar-expand-lg fixed-top navbar-expand-lg navbar-light bg-light">-->
   <nav class="navbar navbar-expand-lg fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">actuconcoursjobs.com</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link"><?=HOME;?></a>
    
    
    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?=ANNONCES?></a>
                        <div class="dropdown-menu">
                            <a href="afficherAnnonces.php?typeAnnonce=CONCOURS" class="dropdown-item"><?=CONCOURS;?></a>
                            <a href="afficherAnnonces.php?typeAnnonce=RESULTAT" class="dropdown-item"><?=RESULTAT;?></a>
                            <a href="afficherAnnonces.php?typeAnnonce=JOBS" class="dropdown-item"><?=EMPLOIS?></a>
							<a href="afficherAnnonces.php?typeAnnonce=BOURSE" class="dropdown-item"><?=BOURSES?></a>
                            <a href="afficherAnnonces.php?typeAnnonce=STAGE" class="dropdown-item"><?=STAGES?></a>
                            <a href="afficherAnnonces.php?typeAnnonce=APPEL A PROJETS" class="dropdown-item"><?=APPEL_A_PROJETS?></a>
							<a href="afficherAnnonces.php?typeAnnonce=COMMUNIQUE" class="dropdown-item"><?=COMMUNIQUE?></a>  
                        </div>
                    </div>
					
					
					
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?=EXAMENS?></a>
                        <div class="dropdown-menu">
                            <a href="afficherAnnonces.php?typeAnnonce=GCE OL" class="dropdown-item"><?=GCE_OL?></a>
                            <a href="afficherAnnonces.php?typeAnnonce=GCE AL" class="dropdown-item"><?=GCE_AL?></a>
                            <a href="afficherAnnonces.php?typeAnnonce=BEPC" class="dropdown-item"><?=BEPC?></a>
							 <a href="afficherAnnonces.php?typeAnnonce=PROBATOIRE" class="dropdown-item"><?=PROBATOIRE?></a>
                            <a href="afficherAnnonces.php?typeAnnonce=BACCALAUREAT" class="dropdown-item"><?=BACCALAUREAT?></a>    

                        </div>
                    </div>
                    
            
                    
					<a href="<?php 
                                       if(isset($_SESSION['connectedUser']))
                                              {
                                               echo 'creer_annonce.php';
                                              } 
                                              else
                                              {
                                               echo 'login.php';  
                                               }
                    ?>" class="nav-item nav-link"><?=PUBLIEZ_ANNONCE?></a>
                    
                    
                    
					
					 <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?=MON_COMPTE?></a>
                        <div class="dropdown-menu">
                             <?php if(isset($_SESSION['connectedUser']) && !empty($_SESSION['connectedUser']['email'])): ?>
                            <a href="publicationsUser.php" class="dropdown-item"><?=MES_PUBLICATIONS?></a>
                         <!--   <a href="#" class="dropdown-item"><=MES_PARAMETRES?></a>-->
                            <a href="logout.php" class="dropdown-item"><?=DECONNEXION .' ('.$_SESSION['connectedUser']['nom'].')'?></a>
							  <?php else:?> 
							  <a href="login.php" class="dropdown-item"><?=CONNEXION?></a>
							  <?php endif;?>
                        </div>
                    </div>
				
					
					<a href="contactez_nous.php" class="nav-item nav-link"><?=CONTACTEZ_NOUS?></a>
					<a href="a_propos.php" class="nav-item nav-link"><?=ABOUT?></a>
                </div>
               <!-- <form class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <button type="button" class="btn btn-secondary"><i class="bi-search"></i></button>
                    </div>
                </form>-->
                 <?php if(isset($_SESSION['connectedUser']) && !empty($_SESSION['connectedUser']['email'])): ?>
                <div class="navbar-nav">
                    <a href="logout.php" class="nav-item nav-link btn btn-danger"><?=DECONNEXION .' ('.$_SESSION['connectedUser']['nom'].')'?></a>
                 </div>
                      <?php else:?> 
                      <div class="navbar-nav">
                         <a href="creerUtilisateur.php" class="nav-item nav-link btn btn-primary"><?=S_INSCRIRE?></a>
                         </div>&ensp;<BR>
                      <div class="navbar-nav">
							  <a href="login.php" class="nav-item nav-link btn btn-primary"><?=CONNEXION?></a>
							 
						</div>
			 	   <?php endif;?>
                
            </div>
        </div>
    </nav>