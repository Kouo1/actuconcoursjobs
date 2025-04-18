<php namespace actuconcoursjobs;?>
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

<body>
   
      <?php  require_once('menu.php');
      ?>
        
     
              
            <!--     <div id="menu_gauche">
            </div>-->
            <div class="container mt-10">
         <h1>Politique de confidentialité pour actuconcoursjobs.com</h1>

<p>Chez actuconcoursjobs.com, accessible depuis www.actuconcoursjobs.com, l'une de nos principales priorités est la confidentialité de nos visiteurs. Ce document de politique de confidentialité contient les types d'informations qui sont collectées et enregistrées par actuconcoursjobs.com et comment nous les utilisons.</p>

<p>Si vous avez des questions supplémentaires ou souhaitez plus d'informations sur notre politique de confidentialité, n'hésitez pas à nous contacter.</p>

<p>Cette politique de confidentialité s'applique uniquement à nos activités en ligne et est valable pour les visiteurs de notre site Web en ce qui concerne les informations qu'ils partagent et/ou collectent sur actuconcoursjobs.com. Cette politique ne s'applique pas aux informations collectées hors ligne ou via des canaux autres que ce site Web. Notre politique de confidentialité a été créée avec l'aide de
<a href="https://h-supertools.com/web/privacy-policy-generator/">Générateur de politique de confidentialité H-supertools</a>.</p>

<h2>Consentement</h2>

<p>En utilisant notre site Web, vous consentez par la présente à notre politique de confidentialité et acceptez ses conditions.</p>

<h2>Informations que nous collectons</h2>

<p>Les informations personnelles que vous êtes invité à fournir, et les raisons pour lesquelles vous êtes invité à les fournir, vous seront précisées au moment où nous vous demanderons de fournir vos informations personnelles.</p>
<p>Si vous nous contactez directement, nous pouvons recevoir des informations supplémentaires vous concernant telles que votre nom, votre adresse e-mail, votre numéro de téléphone, le contenu du message et/ou des pièces jointes que vous pouvez nous envoyer, et toute autre information que vous pouvez choisir de fournir .</p>
<p>Lorsque vous créez un compte, nous pouvons vous demander vos coordonnées, y compris des éléments tels que le nom, le nom de l'entreprise, l'adresse, l'adresse e-mail et le numéro de téléphone.</p>

<h2>Comment nous utilisons vos informations</h2>

<p>Nous utilisons les informations que nous collectons de différentes manières, notamment pour :</p>

<ul>
<li>Fournir, exploiter et maintenir notre site Web</li>
<li>Améliorer, personnaliser et développer notre site Web</li>
<li>Comprendre et analyser la façon dont vous utilisez notre site Web</li>
<li>Développer de nouveaux produits, services, fonctionnalités et fonctionnalités</li>
<li>Communiquer avec vous, directement ou par l'intermédiaire de l'un de nos partenaires, y compris pour le service client, pour vous fournir des mises à jour et d'autres informations relatives au site Web, et à des fins de marketing et de promotion</li>
<li>Vous envoyer des e-mails</li>
<li>Détecter et prévenir les fraudes</li>
</ul>

<h2>Fichiers journaux</h2>

<p>actuconcoursjobs.com suit une procédure standard d'utilisation des fichiers journaux. Ces fichiers enregistrent les visiteurs lorsqu'ils visitent des sites Web. Toutes les sociétés d'hébergement le font et font partie de l'analyse des services d'hébergement. Les informations collectées par les fichiers journaux incluent les adresses IP (protocole Internet), le type de navigateur, le fournisseur d'accès Internet (FAI), l'horodatage, les pages de renvoi/sortie et éventuellement le nombre de clics. Ceux-ci ne sont liés à aucune information personnellement identifiable. Le but de l'information est d'analyser les tendances, d'administrer le site, de suivre les mouvements des utilisateurs sur le site Web et de recueillir des informations démographiques.</p>

<h2>Cookies et balises Web</h2>

<p>Comme tout autre site Internet, actuconcoursjobs.com utilise des "cookies". Ces cookies sont utilisés pour stocker des informations, y compris les préférences des visiteurs et les pages du site Web auxquelles le visiteur a accédé ou visité. Les informations sont utilisées pour optimiser l'expérience des utilisateurs en personnalisant le contenu de notre page Web en fonction du type de navigateur des visiteurs et/ou d'autres informations.</p>

<h2>Cookie Google DoubleClick DART</h2>

<p>Google est l'un des fournisseurs tiers de notre site. Il utilise également des cookies, connus sous le nom de cookies DART, pour diffuser des annonces aux visiteurs de notre site en fonction de leur visite sur www.website.com et d'autres sites sur Internet. Cependant, les visiteurs peuvent choisir de refuser l'utilisation des cookies DART en visitant la politique de confidentialité du réseau publicitaire et de contenu Google à l'URL suivante - <a href="https://policies.google.com/technologies/ads">https:/ /policies.google.com/technologies/annonces</a></p>

<h2>Nos partenaires publicitaires</h2>

<p>Certains annonceurs sur notre site peuvent utiliser des cookies et des balises Web. Nos partenaires publicitaires sont listés ci-dessous. Chacun de nos partenaires publicitaires a sa propre politique de confidentialité pour ses politiques sur les données des utilisateurs. Pour un accès plus facile, nous avons établi un lien hypertexte vers leurs politiques de confidentialité ci-dessous.</p>

<ul>
    <li>
        <p>Google</p>
        <p><a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>
    </li>
</ul>


<h2>Politiques de confidentialité des partenaires publicitaires</h2>

<P>Vous pouvez consulter cette liste pour connaître la politique de confidentialité de chacun des partenaires publicitaires d'actuconcoursjobs.com.</p>

<p>Les serveurs publicitaires ou réseaux publicitaires tiers utilisent des technologies telles que les cookies, JavaScript ou les balises Web qui sont utilisées dans leurs publicités et liens respectifs qui apparaissent sur actuconcoursjobs.com, qui sont envoyés directement au navigateur des utilisateurs. Ils reçoivent automatiquement votre adresse IP lorsque cela se produit. Ces technologies sont utilisées pour mesurer l'efficacité de leurs campagnes publicitaires et/ou pour personnaliser le contenu publicitaire que vous voyez sur les sites Web que vous visitez.</p>

<p>Notez qu'actuconcoursjobs.com n'a aucun accès ni aucun contrôle sur ces cookies qui sont utilisés par des annonceurs tiers.</p>

<h2>Politiques de confidentialité des tiers</h2>

<p>La politique de confidentialité d'actuconcoursjobs.com ne s'applique pas aux autres annonceurs ou sites Web. Ainsi, nous vous conseillons de consulter les politiques de confidentialité respectives de ces serveurs publicitaires tiers pour des informations plus détaillées. Il peut inclure leurs pratiques et instructions sur la façon de se retirer de certaines options. </p>

<p>Vous pouvez choisir de désactiver les cookies via les options de votre navigateur. Pour connaître des informations plus détaillées sur la gestion des cookies avec des navigateurs Web spécifiques, vous pouvez les trouver sur les sites Web respectifs des navigateurs.</p>

<h2>Droits de confidentialité CCPA (Ne vendez pas mes informations personnelles)</h2>

<p>En vertu du CCPA, entre autres droits, les consommateurs californiens ont le droit de :</p>
<p>Demander à une entreprise qui collecte les données personnelles d'un consommateur de divulguer les catégories et les éléments spécifiques de données personnelles qu'une entreprise a collectés sur les consommateurs.</p>
<p>Demander à une entreprise de supprimer toutes les données personnelles sur le consommateur qu'une entreprise a collectées.</p>
<p>Demandez à une entreprise qui vend les données personnelles d'un consommateur de ne pas vendre les données personnelles du consommateur.</p>
<p>Si vous faites une demande, nous avons un mois pour vous répondre. Si vous souhaitez exercer l'un de ces droits, veuillez nous contacter.</p>


<h2>Droits de protection des données GDPR</h2>

<p>Nous souhaitons nous assurer que vous êtes pleinement conscient de tous vos droits en matière de protection des données. Chaque utilisateur a droit à ce qui suit :</p>
<p>Le droit d'accès - Vous avez le droit de demander des copies de vos données personnelles. Nous pouvons vous facturer une somme modique pour ce service.</p>
<p>Le droit de rectification - Vous avez le droit de nous demander de corriger toute information que vous jugez inexacte. Vous avez également le droit de nous demander de compléter les informations que vous jugez incomplètes.</p>
<p>Le droit à l'effacement - Vous avez le droit de nous demander d'effacer vos données personnelles, sous certaines conditions.</p>
<p>Le droit de restreindre le traitement - Vous avez le droit de nous demander de restreindre le traitement de vos données personnelles, sous certaines conditions.</p>
<p>Le droit de vous opposer au traitement - Vous avez le droit de vous opposer à notre traitement de vos données personnelles, sous certaines conditions.</p>
<p>Le droit à la portabilité des données - Vous avez le droit de demander que nous transférions les données que nous avons collectées à une autre organisation, ou directement à vous, sous certaines conditions.</p>
<p>Si vous faites une demande, nous avons un mois pour vous répondre. Si vous souhaitez exercer l'un de ces droits, veuillez nous contacter.</p>

<h2>Informations sur les enfants</h2>

<p>Une autre partie de notre priorité est d'ajouter une protection aux enfants lorsqu'ils utilisent Internet. Nous encourageons les parents et les tuteurs à observer, participer et/ou surveiller et guider leur activité en ligne.</p>

<p>actuconcoursjobs.com ne collecte sciemment aucune information personnelle identifiable d'enfants de moins de 13 ans. Si vous pensez que votre enfant a fourni ce type d'informations sur notre site Web, nous vous encourageons fortement à nous contacter immédiatement et nous ferons notre meilleurs efforts pour supprimer rapidement ces informations de nos dossiers.</p>
       </div>            
          <?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
</body>
</html>