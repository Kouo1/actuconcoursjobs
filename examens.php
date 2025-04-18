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

require_once('Controllers/Controller.php');
require_once('Controllers/AnnoncesController.php');
$controller = new AnnoncesController;

$annonces = $controller->annoncesAccueil();

if(isset($_GET['typeAnnonce']) && !empty($_GET['typeAnnonce']) )
{ 
  //  echo 'eeee'. $_GET['typeAnnonce'];
   if(isset($_SESSION['currentTypeAnnonce']) && !empty($_SESSION['currentTypeAnnonce']))
    {
   if(htmlspecialchars($_GET['typeAnnonce']) != $_SESSION['currentTypeAnnonce'])
   {
   $_SESSION['currentTypeAnnonce'] = htmlspecialchars($_GET['typeAnnonce']);
   }
    }
    else{
      $_SESSION['currentTypeAnnonce'] = htmlspecialchars($_GET['typeAnnonce']);   
      //echo "ca n' existe pas s";
      //echo $_SESSION['currentTypeAnnonce'];
    }
}
$_SESSION['EXAMENS']=$_SESSION['currentTypeAnnonce'];

//$_SESSION['cureentSearchValue']='JOBS';

$critereTri = "";
 $conditionDate = "";
 
 
 $annonces = $controller->annoncesParType($_SESSION['currentTypeAnnonce'],'','','',$conditionDate);
//  var_dump($annonces);

require_once('entete.php');
?>

<body>

<?php require_once('menu.php');
require_once('corrousel.php');
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
<div class="tabs">
        <ul class="list">
            <li class="tab activeOnglet" data-target="#content1"><?=$_SESSION['currentTypeAnnonce']?></li>
           <!-- <li class="tab" data-target="#content2">GCE AL</li>-->
           <!-- <li class="tab" data-target="#content3">Onglet 2</li>-->
        </ul>
  <div class="contents">
            <div id="content1" class="content">
                <h2>past question <?=$_SESSION['currentTypeAnnonce']?></h2>
      <?php
   //  $_SESSION['EXAMENS']='GCE OL';
  //  $annoncesO = $controller->annoncesParType("GCE OL",'','','',$conditionDate);
        /*Pagination with ajax*/
    $nombreElements = count($annonces);
   // echo $nombreElements;

    //number of results per page
   $results_per_page = 10;
   //number of page
   $total_pages = ceil($nombreElements/$results_per_page);

       ?>

                <div id="target-content">loading...</div>
            
            <div class="clearfix">
                  
                  <ul class="pagination">
                       <?php 
                  if(!empty($total_pages)){
                     for($i=1; $i<=$total_pages; $i++){
                           if($i == 1){
                              ?>
                           <li class="pageitem active" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" data-id="<?php echo $i;?>" class="page-link" ><?php echo $i;?></a></li>
                                                
                           <?php 
                           }
                           else{
                              ?>
                           <li class="pageitem" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" class="page-link" data-id="<?php echo $i;?>"><?php echo $i;?></a></li>
                           <?php
                           }
                     }
                  }
                           ?>
                  </ul>
                  </ul>
               </div>


    </div>

            
        </div>

    </div>
    
      </div><!--End column-->

 <!--Debut barre laterale doite -->
    <?php
    require_once('barre laterale_droite.php');
    ?>

   <!-- <div class="col-md-4  text-center">
    </div><!--End row-->
    </div><!--End container-->

    <!-- End GCE -->

    <?php
   require_once('pied.php');
   require_once('scripts.php');
   
   ?>
   <script>
	$(document).ready(function() {
		$("#target-content").load("pagination.php?page=1");
		$(".page-link").click(function(){
			var id = $(this).attr("data-id");
			var select_id = $(this).parent().attr("id");
			$.ajax({
				url: "pagination.php",
				type: "GET",
				data: {
					page : id
				},
				cache: false,
				success: function(dataResult){
					$("#target-content").html(dataResult);
					$(".pageitem").removeClass("active");
					$("#"+select_id).addClass("active");
					
				}
			});
		});
    });

</script>
</body>
</html>