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



	   <nav class="navbar light-mode" role="navigation">
	   <div class="navbar_logo">actuconncoursjobs.com</div> 
	   
	   <ul class="navbar_links">
	       
	    <li class="navbar_link first"><a href="index.php"><?=HOME;?></a></li>    
	       <li class="navbar_link sous1">
                            <a href="#"><?=ANNONCES?></a>
                            <ul class="submenu">
        <li class="navbar_link second"><a href="afficherAnnonces.php?typeAnnonce=CONCOURS"><?=CONCOURS;?></a></li>
        <li class="navbar_link second"><a href="afficherAnnonces.php?typeAnnonce=RESULTAT"><?=RESULTAT;?></a></li>
        <li class="navbar_link third"><a href="afficherAnnonces.php?typeAnnonce=JOBS"><?=EMPLOIS?></a></li>
        <li class="navbar_link fourth"><a href="afficherAnnonces.php?typeAnnonce=BOURSE"><?=BOURSES?></a></li>
        <li class="navbar_link fifth"><a href="afficherAnnonces.php?typeAnnonce=STAGE"><?=STAGES?></a></li>
        <li class="navbar_link fifth"><a href="afficherAnnonces.php?typeAnnonce=APPEL A PROJETS"><?=APPEL_A_PROJETS?></a></li>
        <li class="navbar_link fifth"><a href="afficherAnnonces.php?typeAnnonce=COMMUNIQUE"><?=COMMUNIQUE?></a></li>
        
                       </ul>
                        </li>
         <li class="navbar_link sous1">
                            <a href="#"><?=EXAMENS?></a>
                            <ul class="submenu">
             <li class="navbar_link sixth"><a href="exams-GCE OL-questions"><?=GCE_OL?></a></li>
             <li class="navbar_link sixth"><a href="exams-GCE AL-questions"><?=GCE_AL?></a></li>
             <li class="navbar_link sixth"><a href="exams-BEPC-questions"><?=BEPC?></a></li>
             <li class="navbar_link sixth"><a href="exams-PROBATOIRE-questions"><?=PROBATOIRE?></a></li>
             <li class="navbar_link sixth"><a href="exams-BACCALAUREAT-questions"><?=BACCALAUREAT?></a></li>
                       </ul>
                        </li>
        <!--  <li class="navbar_link sixth"><a href="#"><?=TRAINING_SCHOOLS?></a></li> -->
      <!--  <li class="navbar_link seven"><a href="#"><=?UNIVERSITES?></a></li>
        <li class="navbar_link eight"><a href="#"><=?INSTITUS></a></li> -->
        <li class="navbar_link nine"><a href="<?php 
        if(isset($_SESSION['connectedUser']))
        {
            echo 'creer_annonce.php';
        } 
        else
        {
            echo 'login.php';  
        }
        ?>"><?=PUBLIEZ_ANNONCE?></a></li>
        
        <li class="navbar_link sous">
                            <a href="#"><?=MON_COMPTE?></a>
                            <ul class="submenu">
        
    <?php if(isset($_SESSION['connectedUser']) && !empty($_SESSION['connectedUser']['email'])): ?>
        <li class="navbar_link eight"><a href="publicationsUser.php"><?=MES_PUBLICATIONS?></a></li>
        <li><a href="#"><?=MES_PARAMETRES?> </a></li>
        <li class="navbar_link nine"><a href="logout.php"><?=DECONNEXION .' ('.$_SESSION['connectedUser']['nom'].')'?></a></li>
    <?php else:?>
        <li class="navbar_link nine"><a href="login.php"><?=CONNEXION?></a></li>
    <?php endif;?>
           
                </ul>
                        </li>
    
    <li class="navbar_link eight"><a href="contactez_nous.php"><?=CONTACTEZ_NOUS?></a></li>
    <li class="navbar_link eight"><a href="a_propos.php"><?=ABOUT?></a></li>
       
       </ul>
       <button class="burger" onclick="toggleMenu()">
           <span class="bar"></span>
       </button>
    </nav>