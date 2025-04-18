    <!DOCTYPE html>
    <html>
    <?php
    session_start(); // Démarrage de la session

    require_once("domaine/lang.php");
     require_once("fonctions.php");
    require_once('entete.php');

    use actuconcoursjobs\Controllers\AnnoncesController;

    require('Controllers/Controller.php');
    require('Controllers/AnnoncesController.php');
    $controller = new AnnoncesController;
    $annonces = $controller->annoncesAccueil();



    ?>
  <script src="https://cdn.tiny.cloud/1/y3h1wfv41ogwxtdy12nfhsjrqkir2hbj0mzm2dsqzfl977l7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
 <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>

</head>
<body>
  <textarea>
    Welcome to TinyMCE!
  </textarea>
 
</body>
</html>