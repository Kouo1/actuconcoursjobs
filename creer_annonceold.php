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
    
     <script src="https://cdn.tiny.cloud/1/y3h1wfv41ogwxtdy12nfhsjrqkir2hbj0mzm2dsqzfl977l7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
 <script>
    tinymce.init({
      selector: '#descriptionAnnonce',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
     </head>
    <body>

        <?php require_once('menu.php');
        ?>



        <!--     <div id="menu_gauche">
            </div>-->

       <!--  <div id="bodyAnnonce">-->
        <div id="bodyRegister">
     
            <form method="POST" action="" id="formCreerAnnonce">
                <fieldset>
                <!-- partie de haut montrantt les numeros-->
                <header>
               </header>
                    <legend>Annonce</legend>
               
                    <div class="page" id="page1">
                    <b> <center>Details de l'entreprise</center> </b>
             
                    <span class="creer_annonce_feedback"></span><br />

                    <label for="nom_entreprise">Nom de l'entreprise <span class="requis">*</span></label>
                    <input type="text" id="nom_entreprise" name="nom_entreprise" value="" size="30" required />
                    <span class="nom_entreprise_feedback"></span>
                    <br /><br />

                    <label for="raison_sociale">Raison sociale<span class="requis">*</span></label>
                    <select id="raison_sociale" name="raison_sociale">
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

                    <br /><br/>
                    <label for="siege_sociale">Siege sociale <span class="requis">*</span> </label>
                    <input type="text" id="siege_sociale" name="siege_sociale" value="" size="30"  required />
                    <span class="raison_sociale_feedback"></span>
                    <br /><br />


                    <label for="site_internet">Site Internet </label>
                    <input type="text" id="site_internet" name="site_internet" value="" size="20" />
                    <span class="erreur"></span>
                    <br /><br /><br />

                    <label for="telephone">Téléphone <span class="requis">*</span> </label>
                    <input type="text" id="telephone" name="telephone" value="" size="20" required />
                    <span class="erreur"></span>
                    <br /><br /><br />

                    <label for="mail">Email <span class="requis"></span></label>
                    <input type="email" id="mail" name="mail" value="" size="30" />
                    <span class="email_feedback"></span>
                    <br /><br />


                    <label for="nombre_employe">Nombre d'employés </label>
                    <select  id="nombre_employe" name="nombre_employe">
                        <option value="petite">Moins de 10</option>
                        <option value="moyenne">Entre 10 et 50</option>
                        <option value="grande">Plus de 50</option>
                        
                        
                    </select>
                    
                    
                    <br /><br />
                    <br /><br />
                    
            
                    <button class="next" type="button">Suivant</button>  <!-- On met type='button' pour l'empecher 
                                                 de soumettre le formulaire-->
          </div>



         <div class="page" id="page2">
            <h1>Details de l'annonce</h1>
            
             
                      
                   <label for="intitule">Intitulé </label>
                    <input type="text" id="intitule" name="intitule" value="" size="20" placeholder="Titre de l'annonce" required />
                    <span class="intitule_feedback"></span>
                    <span class="erreur"></span>
                     <br /><br />

                    <label for="secteur_d_activite">Domaine professionnel </label>
                    <input list="secteur_d_activite" name="secteur_d_activite">
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
                    </datalist>
                    <br /><br>
                    <label for="typeAnnonce">Type de l'annonce </label>
                    <select  id="typeAnnonce" name="typeAnnonce" onchange="getddl()">
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
                    
                    <br/><br/>

                    <label for="sous_typeAnnonce" id="idsous_typeAnnonce" style="display:none">TYPE <?=EXAMENS?> </label>
                    <select  id="sous_typeAnnonce" name="sous_typeAnnonce" onchange="getddl()" style="display:none">
                        <option value="SELECTIONNER UN TYPE">SELECTIONNER UN TYPE</option>
                        <option value="GCE OL">GCE OL</option>
                        <option value="GCE AL">GCE AL</option>
                        <option value="BEPC">BEPC</option>
                        <option value="PROBATOIRE">PROBATOIRE</option>
                        <option value="BACCALAUREAT">BACCALAUREAT</option>
                    </select>
                    <labela  id="sous_typeAnnonceSelect"></labela>
                    <br/><br/>

                    <label for="annonceTypeContrat" id="idAnnonceContrat">Type du contrat </label>
                    <select id="annonceTypeContrat" name="annonceTypeContrat">
                        <option value="CDI">CDI</option>
                        <option value="CDD">CDD</option>
                    </select>
                    <br/><br/>
                    <label for="descriptionAnnonce">Description de l'annonce <span class="requis">*</span></label>
                    <br/><br/>
                     <textarea name="descriptionAnnonce" id="descriptionAnnonce" rows="10" cols="30" value="" ></textarea>
                     <span class="description_feedback"></span>
                     <span class="erreur"></span>
                    <br /><br/>

                    <label for="profile_rechercher" id="idprofile_rechercher">Profile recherché </label>
                    <br/>
                     <textarea name="profile_rechercher" id="profile_rechercher" rows="5" cols="20"  value="" /> </textarea>
                    <span class="profile_feedback"></span>
                    <span class="erreur"></span>
                    <br /><br>
                    <label for="competence_requise" id="idcompetence_requise">compétences requises </label>
                    <br/>
                    <textarea name="competence_requise" id="competence_requise" rows="5" cols="20"  value="" /> </textarea>
                    <span class="competence_feedback"></span>
                    <span class="erreur"></span>
                    <br /><br>

                    <label for="pays_annonce">Pays concerné par l'annonce </label>
                    <input type="text" id="pays_annonce" name="pays_annonce" value="" size="20" />
                    <span class="pays_annonce_feedback"></span>
                    <span class="erreur"></span>
                       <br/><br/>
                    <label for="region_annonce">Region concernée par l'annonce </label>
                    <input type="text" id="region_annonce" name="region_annonce" value="" size="20" />
                    <span class="region_annonce_feedback"></span>
                    <span class="erreur"></span>

                    <br /><br>
                    <label for="ville_annonce">Ville concernée par l'annonce </label>
                    <input type="text" id="ville_annonce" name="ville_annonce" value="" size="20" />
                    <span class="ville_annonce_feedback"></span>
                    <span class="erreur"></span>
                    <br /><br>

                    <label for="piece_a_fournir" id="idpiece_a_fournir">Piece a fournir par le (la) candidat(e) </label>
                    <textarea name="piece_a_fournir" id="piece_a_fournir" rows="5" cols="5"  value="" /> </textarea>
                    <span class="piece_a_fournir_feedback"></span>
                    <span class="erreur"></span>
                    <br/><br>

                    <label for="date_limite">Date limite de dépôt de candidature </label>
                    <input type="date" id="date_limite" name="date_limite" value="" size="20" />
                    <span class="erreur"></span>
                    <br /><br>

                    <label for="email_d_envoi_candidature" id="idemail_d_envoi_candidature">Email d'envoi de candidature </label>
                    <input type="email" id="email_d_envoi_candidature" name="email_d_envoi_candidature" value=""  />
                    <span class="erreur"></span>
                    <br /><br>

                    <label for="lien_pour_postuler" id="idlien_pour_postuler">Lien pour postuler </label>
                    <input type="text" id="lien_pour_postuler" name="lien_pour_postuler" value=""  />
                    <span class="erreur"></span>
                    <br /><br>
                    
                     <label for="annonceSalaire" id="idannonceSalaire">Salaire</label>
                    <select id="annonceSalaire" name="annonceSalary">
                        <option value="1">A Negocier</option>
                        <option value="2">Moins de 100 000 FCFA</option>
                        <option value="3">Entre de 100 000 FCFA et 500 000 FCFA</option>
                        <option value="4">Plus de 500 000 FCFA</option>
                    </select>
                    <br/><br/>
                    
                     <label for="lien_arrete" id="idlien_arrete">Lien pour l'arrêté </label>
                    <input type="text" id="lien_arrete" name="lien_arrete" value=""  />
                    <span class="erreur"></span>
                    <br/>
                    
                  <span class="creer_annonce_feedback"></span><br />
                    <button class="prev" type="button">Precedent</button>
                    &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp
                   <button type="submit">Terminer</button>  <!-- Button est du type submit par defaut-->
          
   
        </div>
                   
                </fieldset>


            </form>
        </div>

        <?php
        require_once('pied.php');
        require_once('scripts.php');
        ?>
    </body>

    </html>