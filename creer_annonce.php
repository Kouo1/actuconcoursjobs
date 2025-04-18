<!--<php namespace actuconcoursjobs;?> empeche le textarea-->
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
    <!--Wait -->
   <!--   <script src="https://cdn.tiny.cloud/1/y3h1wfv41ogwxtdy12nfhsjrqkir2hbj0mzm2dsqzfl977l7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
 <script>
    tinymce.init({
      selector: '#descriptionAnnonce',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>-->
     <!--  free version
  <script src="https://cdn.tiny.cloud/1/y3h1wfv41ogwxtdy12nfhsjrqkir2hbj0mzm2dsqzfl977l7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#descriptionAnnonce',
      plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
      toolbar_mode: 'floating',
    });
  </script>-->
  
     </head>
    <body>

        <?php require_once('menu.php');
        ?>



        <!--     <div id="menu_gauche">
            </div>-->

       <!--  <div id="bodyAnnonce">-->
       <!-- <div id="bodyRegister">-->
         <section class="annoncesB py-5">
        <div class="container mt-5">
     
            <form method="POST" action="" id="formCreerAnnonce">
                <!-- partie de haut montrantt les numeros-->
                <header>
               </header>
                    
                    <div class="page" id="page1">
                    <b> <center>Details de l'entreprise</center> </b>
                    
                    <span class="creer_annonce_feedback"></span><br />
                      <div class="mb-3">
                    <label for="nom_entreprise" class="form-label">Nom de l'entreprise <span class="requis">*</span></label>
                    <input type="text" class="form-control" id="nom_entreprise" name="nom_entreprise" value="" size="30" required />
                    <span class="nom_entreprise_feedback"></span>
                     </div>
                     <div class="mb-3">
                    <label for="raison_sociale" class="form-label">Raison sociale<span class="requis">*</span></label>
                    <select id="raison_sociale" class="form-select" name="raison_sociale">
                        <option value="SA">SA</option>
                        <option value="SARL">SARL</option>
                        <option value="SAS">SAS</option>
                        <option value="ETS">ETS</option>
                        <option value="ONG">ONG</option>
                        <option value="COOPEC">COOPEC</option>
                        <option value="GIC">GIC</option>
                        <option value="Association">Association</option>
                        <option value="Institution/Ecole">Institution/Ecole</option>
                        <option value="Université/Centre de formation">Université/Centre de formation</option>
                        <option value="Service public">Service public</option>
                        <option value="Autre">Autre</option>
                    </select>

                    </div>
                    
                    <div class="mb-3">
                    <label for="siege_sociale" class="form-label">Siege sociale <span class="requis">*</span> </label>
                    <input type="text" class="form-control" id="siege_sociale" name="siege_sociale" value="" size="30"  required />
                    <span class="raison_sociale_feedback"></span>
                    </div>

                      <div class="mb-3">
                    <label for="site_internet" class="form-label">Site Internet </label>
                    <input type="text" class="form-control" id="site_internet" name="site_internet" value="" size="20" />
                    <span class="erreur"></span>
                    </div>

                     <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone <span class="requis">*</span> </label>
                    <input type="text" class="form-control" id="telephone" name="telephone" value="" size="20" required />
                    <span class="erreur"></span>
                    </div>

                     <div class="mb-3">
                    <label for="mail" class="form-label">Email <span class="requis"></span></label>
                    <input type="email" class="form-control" id="mail" name="mail" value="" size="30" />
                    <span class="email_feedback"></span>
                    </div>

                     <div class="mb-3">
                    <label for="nombre_employe" class="form-label">Nombre d'employés </label>
                    <select  id="nombre_employe" class="form-select" name="nombre_employe">
                        <option value="petite">Moins de 10</option>
                        <option value="moyenne">Entre 10 et 50</option>
                        <option value="grande">Plus de 50</option>
                    </select>
                    </div>
                    
                       
                    <button class="next btn btn-primary"  type="button">Suivant</button>  <!-- On met type='button' pour l'empecher 
                                                 de soumettre le formulaire-->
          </div>



         <div class="page" id="page2">
            <h1>Details de l'annonce</h1>
            
                      
                      <div class="mb-3">
                      
                   <label for="intitule" class="form-label">Intitulé </label>
                    <input type="text" class="form-control" id="intitule" name="intitule" value="" size="20" placeholder="Titre de l'annonce" required />
                    <span class="intitule_feedback"></span>
                    <span class="erreur"></span>
                     </div>

                   <div class="mb-3">
                    <label for="secteur_d_activite" class="form-label">Domaine professionnel </label>
                    <input list="secteur_d_activite" class="form-select" name="secteur_d_activite">
                    <datalist id="secteur_d_activite">
                        <option value="Aviculture">
                        <option value="Arts et spectacles">
                        <option value="Banque et Finance">
                        <option value="COMPTABILITÉ">
                        <option value="Communication et marketing">
                        <option value="Commerce">
                        <option value="Développeuse web"> 
                        <option value="Enseignement"> 
                            
                        <option value="Education">
                        <option value="Hotellerie et Restauration">
                        <option value="Habillement, textile et bien-être">
                            
                        <option value="Nouvelle Technologie">
                        <option value="SANTÉ">
                        <option value="Sécurité et droit"> 
                        <option value="Social"> 
                        <option value="Nature et environnement"> 
                        <option value="Management"> 
                        <option value="Réseau informatique">
                        <option value="Sécurité et droit"> 
                        <option value="SUIVI ET EVALUATION">
                        <option value="TRANSPORT">
                        <option value="TOURISME">
                        <option value="GENIE CIVIL">
                        <option value="GENIE INDUSTRIEL">
                        <option value="GENIE ELECTRIQUE">
                    </datalist>
                    </div>
                    
                    <div class="mb-3">
                    <label for="typeAnnonce" class="form-label">Type de l'annonce </label>
                    <select  id="typeAnnonce" class="form-select" name="typeAnnonce" onchange="getddl()">
                        <option value="SELECTIONNER UN TYPE">SELECTIONNER UN TYPE</option>
                        <option value="JOBS">JOBS</option>
                        <option value="FORMATION">FORMATION</option>
                        <option value="STAGE">STAGE</option>
                        <option value="BOURSE">BOURSE</option>
                        <option value="CONCOURS">CONCOURS</option>
                         <option value="RESULTAT">RESULTAT</option>
                         <option value="EXAMENS">EXAMENS</option>
                        <option value="APPEL A PROJETS">Appel à projets</option>
                        <option value="COMMUNIQUE">COMMUNIQUE</option>
                    </select>
                    <labela  id="typeAnnonceSelect"></labela>
                    </div>
                    
                    <div class="mb-3">
                    <label for="sous_typeAnnonce" class="form-label" id="idsous_typeAnnonce" style="display:none">TYPE <?=EXAMENS?> </label>
                    <select  id="sous_typeAnnonce" class="form-select" name="sous_typeAnnonce" onchange="getddl()" style="display:none">
                        <option value="SELECTIONNER UN TYPE">SELECTIONNER UN TYPE</option>
                        <option value="GCE OL">GCE OL</option>
                        <option value="GCE AL">GCE AL</option>
                        <option value="BEPC">BEPC</option>
                        <option value="PROBATOIRE">PROBATOIRE</option>
                        <option value="BACCALAUREAT">BACCALAUREAT</option>
                    </select>
                    <labela  id="sous_typeAnnonceSelect"></labela>
                    </div>

                    <div class="mb-3">
                    <label for="annonceTypeContrat" class="form-label" id="idAnnonceContrat">Type du contrat </label>
                    <select id="annonceTypeContrat" class="form-select" name="annonceTypeContrat">
                        <option value="CDI">CDI</option>
                        <option value="CDD">CDD</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <label for="descriptionAnnonce" class="form-label">Description de l'annonce <span class="requis">*</span></label>
                     <textarea name="descriptionAnnonce" class="summernote" id="descriptionAnnonce" rows="10" cols="30" value="" ></textarea>
                     <span class="description_feedback"></span>
                     <span class="erreur"></span>
                    </div>

                    <div class="mb-3">
                    <label for="profile_rechercher" class="form-label" id="idprofile_rechercher">Profile recherché </label>
                    
                     <textarea name="profile_rechercher" class="form-control" id="profile_rechercher" rows="5" cols="20"  value="" /> </textarea>
                    <span class="profile_feedback"></span>
                    <span class="erreur"></span>
                    </di>
                    
                    <div class="mb-3">
                    <label for="competence_requise" class="form-label" id="idcompetence_requise">compétences requises </label>
                    <textarea name="competence_requise" class="form-control" id="competence_requise" rows="5" cols="20"  value="" /> </textarea>
                    <span class="competence_feedback"></span>
                    <span class="erreur"></span>
                    </div>

                    <div class="mb-3">
                    <label for="pays_annonce" class="form-label">Pays concerné par l'annonce </label>
                    <input type="text" class="form-control" id="pays_annonce" name="pays_annonce" value="" size="20" />
                    <span class="pays_annonce_feedback"></span>
                    <span class="erreur"></span>
                       </div>
                       
                       <div class="mb-3">
                    <label for="region_annonce" class="form-label">Region concernée par l'annonce </label>
                    <input type="text" class="form-control" id="region_annonce" name="region_annonce" value="" size="20" />
                    <span class="region_annonce_feedback"></span>
                    <span class="erreur"></span>

                    </div>
                    
                    <div class="mb-3">
                    <label for="ville_annonce" class="form-label">Ville concernée par l'annonce </label>
                    <input type="text" class="form-control" id="ville_annonce" name="ville_annonce" value="" size="20" />
                    <span class="ville_annonce_feedback"></span>
                    <span class="erreur"></span>
                    </div>

                    <div class="mb-3">
                    <label for="piece_a_fournir" class="form-label" id="idpiece_a_fournir">Piece a fournir par le (la) candidat(e) </label>
                    <textarea name="piece_a_fournir" class="form-control" id="piece_a_fournir" rows="5" cols="5"  value="" /> </textarea>
                    <span class="piece_a_fournir_feedback"></span>
                    <span class="erreur"></span>
                    </div>
                     
                     <div class="mb-3">
                    <label for="date_limite" class="form-label">Date limite de dépôt de candidature </label>
                    <input type="date" class="form-control" id="date_limite" name="date_limite" value="" size="20" />
                    <span class="erreur"></span>
                    </div>

                    <div class="mb-3">
                    <label for="email_d_envoi_candidature" class="form-label" id="idemail_d_envoi_candidature">Email d'envoi de candidature </label>
                    <input type="email" class="form-control" id="email_d_envoi_candidature" name="email_d_envoi_candidature" value=""  />
                    <span class="erreur"></span>
                    </div>
                    
                    <div class="mb-3">
                    <label for="lien_pour_postuler" class="form-label" id="idlien_pour_postuler">Lien pour postuler </label>
                    <input type="text" class="form-control" id="lien_pour_postuler" name="lien_pour_postuler" value=""  />
                    <span class="erreur"></span>
                    </div>
                    
                    <div class="mb-3">
                     <label for="annonceSalaire" class="form-label" id="idannonceSalaire">Salaire</label>
                    <select id="annonceSalaire" class="form-select" name="annonceSalary">
                        <option value="1">A Negocier</option>
                        <option value="2">Moins de 100 000 FCFA</option>
                        <option value="3">Entre de 100 000 FCFA et 500 000 FCFA</option>
                        <option value="4">Plus de 500 000 FCFA</option>
                    </select>
                    </div>
                    
                    <div class="mb-3">
                     <label for="lien_arrete" class="form-label" id="idlien_arrete">Lien pour l'arrêté </label>
                    <input type="text" class="form-control" id="lien_arrete" name="lien_arrete" value=""  />
                    <span class="erreur"></span>
                    </div>
                    
                  <span class="creer_annonce_feedback"></span>
                  
                  <button class="prev btn btn-primary" type="button" >Precedent</button> &nbsp &nbsp &nbsp &nbsp 
                  <button type="submit" class="btn btn-primary">Terminer</button>  <!-- Button est du type submit par defaut-->
                  
                <!--  <div class="row justify-content-between">
                      <div class="col">
                       
                      </div>
                   <div class="col">
                   
                  </div>
                 </div>-->
                  
          
   
        </div>
                   
               


            </form>
        </div>
        </section>
        

        <?php
        require_once('pied.php');
        require_once('scripts.php');
        ?>
         <script>
    $(document).ready(function() {
        $('#descriptionAnnonce').summernote();
      });
    </script>
        </body>

    </html>