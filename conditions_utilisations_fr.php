<!--<php namespace actuconcoursjobs;?>-->
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
       require_once('corrousel.php');
      ?>
      <section class="sections">
       
    <div class="container mt-10">
<h2><strong>Conditions d'utilisation</strong></h2>

<p>Bienvenue sur actuconcoursjobs.com !</p>

<p>Ces termes et conditions décrivent les règles et règlements d'utilisation du site Web d'actuconcoursjobs.com, situé à https://www.actuconcoursjobs.com.</p>

<p>En accédant à ce site Web, nous supposons que vous acceptez ces termes et conditions. Ne continuez pas à utiliser actuconcoursjobs.com si vous n'acceptez pas de prendre toutes les conditions énoncées sur cette page.</p>

<p>La terminologie suivante s'applique aux présentes conditions générales, à la déclaration de confidentialité et à l'avis de non-responsabilité ainsi qu'à tous les accords : "Client", "Vous" et "Votre" font référence à vous, la personne qui se connecte sur ce site Web et qui se conforme aux conditions générales de la Société. conditions. « La Société », « Nous-mêmes », « Nous », « Notre » et « Nous » font référence à notre Société. « Partie », « Parties » ou « Nous » désignent à la fois le Client et nous-mêmes. Tous les termes se réfèrent à l'offre, à l'acceptation et à la considération du paiement nécessaire pour entreprendre le processus de notre assistance au Client de la manière la plus appropriée dans le but exprès de répondre aux besoins du Client en ce qui concerne la fourniture des services déclarés de la Société, conformément à et sous réserve de la législation en vigueur aux Pays-Bas. Toute utilisation de la terminologie ci-dessus ou d'autres mots au singulier, au pluriel, en majuscules et/ou il/elle ou ils, sont considérés comme interchangeables et donc comme faisant référence à ceux-ci.</p>

<h3><strong>Cookies</strong></h3>

<p>Nous utilisons des cookies. En accédant à actuconcoursjobs.com, vous acceptez l'utilisation de cookies en accord avec la politique de confidentialité d'actuconcoursjobs.com. </p>



<p>La plupart des sites Web interactifs utilisent des cookies pour nous permettre de récupérer les détails de l'utilisateur pour chaque visite. Les cookies sont utilisés par notre site Web pour activer la fonctionnalité de certaines zones afin de faciliter la tâche des personnes visitant notre site Web. Certains de nos partenaires affiliés/publicitaires peuvent également utiliser des cookies.</p>

<h3><strong>Licence</strong></h3>

<p>Sauf indication contraire, actuconcoursjobs.com et/ou ses concédants détiennent les droits de propriété intellectuelle pour tout le matériel sur actuconcoursjobs.com. Tous les droits de propriété intellectuelle sont réservés. Vous pouvez y accéder depuis actuconcoursjobs.com pour votre usage personnel sous réserve des restrictions définies dans les présentes conditions générales.</p>

<p>Vous ne devez pas :</p>
<ul>
    <li>Republier le matériel d'actuconcoursjobs.com</li>
    <li>Vendre, louer ou sous-licencier du matériel d'actuconcoursjobs.com</li>
    <li>Reproduire, dupliquer ou copier le matériel d'actuconcoursjobs.com</li>
    <li>Redistribuer le contenu d'actuconcoursjobs.com</li>
</ul>

<p>Cet Accord prend effet à la date des présentes. Nos conditions générales ont été créées à l'aide du <a href="https://h-supertools.com/web/terms-and-conditions-generator/">générateur de conditions générales H-supertools</a>. </p>

<p> Certaines parties de ce site Web offrent aux utilisateurs la possibilité de publier et d'échanger des opinions et des informations dans certaines zones du site Web. actuconcoursjobs.com ne filtre, n'édite, ne publie ni ne révise les Commentaires avant leur présence sur le site. Les commentaires ne reflètent pas les points de vue et opinions d'actuconcoursjobs.com, de ses agents et/ou affiliés. Les commentaires reflètent les points de vue et opinions de la personne qui publie ses points de vue et opinions. Dans la mesure permise par les lois applicables, actuconcoursjobs.com ne sera pas responsable des Commentaires ou de toute responsabilité, dommages ou dépenses causés et/ou subis à la suite de toute utilisation et/ou publication et/ou apparition des Commentaires. sur ce site.</p>

<p>actuconcoursjobs.com se réserve le droit de surveiller tous les commentaires et de supprimer tout commentaire pouvant être considéré comme inapproprié, offensant ou entraînant une violation des présentes conditions générales.</p>

<p>Vous garantissez et déclarez que :</p>



<ul>
    <li>Vous avez le droit de publier les Commentaires sur notre site Web et disposez de toutes les licences et autorisations nécessaires pour le faire ;</li>
    <li>Les commentaires n'envahissent aucun droit de propriété intellectuelle, y compris, sans s'y limiter, les droits d'auteur, les brevets ou les marques de commerce d'un tiers ;</li>
    <li>Les commentaires ne contiennent aucun contenu diffamatoire, calomnieux, offensant, indécent ou autrement illégal qui constitue une atteinte à la vie privée</li>
    <li>Les commentaires ne seront pas utilisés pour solliciter ou promouvoir des activités commerciales ou personnalisées ou présenter des activités commerciales ou des activités illégales.</li>
</ul>

<p>Par la présente, vous accordez à actuconcoursjobs.com une licence non exclusive pour utiliser, reproduire, modifier et autoriser d'autres personnes à utiliser, reproduire et modifier n'importe lequel de vos commentaires sous toutes formes, formats ou supports.</p>

<h3><strong>Lien hypertexte vers notre contenu</strong></h3>

<p>Les organisations suivantes peuvent créer un lien vers notre site Web sans autorisation écrite préalable :</p>

<ul>
    <li>Agences gouvernementales ;</li>
    <li>Moteurs de recherche ;</li>
    <li>Organismes de presse ;</li>
    <li>Les distributeurs d'annuaires en ligne peuvent créer un lien vers notre site Web de la même manière qu'ils créent un lien hypertexte vers les sites Web d'autres entreprises répertoriées ; et</li>
    <li>Entreprises accréditées à l'échelle du système, à l'exception des organisations à but non lucratif, des centres commerciaux caritatifs et des groupes de collecte de fonds caritatifs qui ne peuvent pas créer de lien hypertexte vers notre site Web.</li>
</ul>

<p>Ces organisations peuvent créer un lien vers notre page d'accueil, vers des publications ou vers d'autres informations du site Web tant que le lien : (a) n'est en aucun cas trompeur ; (b) n'implique pas faussement le parrainage, l'approbation ou l'approbation de la partie de liaison et de ses produits et/ou services ; et (c) s'inscrit dans le contexte du site de la partie de liaison.</p>

<p>Nous pouvons examiner et approuver d'autres demandes de lien provenant des types d'organisations suivants :</p>

<ul>
    <li>des sources d'informations sur les consommateurs et/ou les entreprises bien connues ;</li>
    <li>les sites communautaires dot.com ;</li>
    <li>associations ou autres groupes représentant des organisations caritatives ;</li>
    <li>distributeurs d'annuaires en ligne ;</li>
    <li>portails Internet ;</li>
    <li>des cabinets comptables, juridiques et de conseil ; et</li>
    <li>établissements d'enseignement et associations professionnelles</li>
</ul>



impliquent uniquement le parrainage, l'approbation ou l'approbation de la partie de liaison et de ses produits ou services ; et (c) s'inscrit dans le contexte du site de la partie de liaison.</p>

<p>Si vous êtes l'une des organisations énumérées au paragraphe 2 ci-dessus et que vous êtes intéressé à établir un lien vers notre site Web, vous devez nous en informer en envoyant un courriel à actuconcoursjobs.com. Veuillez inclure votre nom, le nom de votre organisation, vos coordonnées ainsi que l'URL de votre site, une liste de toutes les URL à partir desquelles vous avez l'intention de créer un lien vers notre site Web et une liste des URL de notre site vers lesquelles vous souhaitez lien. Attendre 2-3 semaines pour une réponse.</p>

<p>Les organisations approuvées peuvent créer un lien hypertexte vers notre site Web comme suit :</p>

<ul>
    <li>Par l'utilisation de notre dénomination sociale ; ou</li>
    <li>En utilisant le localisateur de ressources uniforme auquel il est lié ; ou</li>
    <li>Par l'utilisation de toute autre description de notre site Web lié qui a du sens dans le contexte et le format du contenu sur le site de la partie de liaison.</li>
</ul>

<p>Aucune utilisation du logo d'actuconcoursjobs.com ou d'autres illustrations ne sera autorisée pour le lien en l'absence d'un accord de licence de marque.</p>

<h3><strong>iFrames</strong></h3>

<p>Sans approbation préalable et autorisation écrite, vous ne pouvez pas créer de cadres autour de nos pages Web qui modifient de quelque manière que ce soit la présentation visuelle ou l'apparence de notre site Web.</p>

<h3><strong>Responsabilité relative au contenu</strong></h3>

<p>Nous ne serons pas tenus responsables du contenu qui apparaît sur votre site Web. Vous acceptez de nous protéger et de nous défendre contre toutes les réclamations qui surgissent sur votre site Web. Aucun lien ne doit apparaître sur un site Web pouvant être interprété comme diffamatoire, obscène ou criminel, ou qui enfreint, viole ou préconise la violation ou toute autre violation des droits de tiers.</p>

<h3><strong>Votre confidentialité</strong></h3>

<p>Veuillez lire la politique de confidentialité</p>

<h3><strong>Réservation des droits</strong></h3>

<p>Nous nous réservons le droit de vous demander de supprimer tous les liens ou tout lien particulier vers notre site Web. Vous acceptez de supprimer immédiatement tous les liens vers notre site Web sur demande. Nous nous réservons également le droit de modifier ces termes et conditions et sa politique de liaison à tout moment. En vous connectant continuellement à notre site Web, vous acceptez d'être lié et de suivre ces conditions générales de liaison.</p>

<h3><strong>Suppression de liens de notre site Web</strong></h3>




<p>Si vous trouvez un lien sur notre site Web qui est offensant pour quelque raison que ce soit, vous êtes libre de nous contacter et de nous en informer à tout moment. Nous examinerons les demandes de suppression de liens, mais nous ne sommes pas obligés de vous répondre directement.</p>

<p>Nous ne garantissons pas que les informations sur ce site Web sont correctes, nous ne garantissons pas leur exhaustivité ou leur exactitude ; nous ne promettons pas non plus de garantir que le site Web reste disponible ou que le contenu du site Web est tenu à jour.</p>

<h3><strong>Avertissement</strong></h3>

<p>Dans la mesure maximale permise par la loi applicable, nous excluons toutes les représentations, garanties et conditions relatives à notre site Web et à l'utilisation de ce site Web. Rien dans cette clause de non-responsabilité :</p>

<ul>
    <li>limiter ou exclure notre ou votre responsabilité en cas de décès ou de blessure ;</li>
    <li>limiter ou exclure notre ou votre responsabilité en cas de fraude ou de déclaration frauduleuse ;</li>
    <li>limiter l'une de nos ou vos responsabilités d'une manière qui n'est pas autorisée par la loi applicable ; ou</li>
    <li>exclure l'une de nos ou vos responsabilités qui ne peuvent être exclues en vertu de la loi applicable.</li>
</ul>

<p>Les limitations et interdictions de responsabilité définies dans cette section et ailleurs dans cette clause de non-responsabilité : (a) sont soumises au paragraphe précédent ; et (b) régissent toutes les responsabilités découlant de la clause de non-responsabilité, y compris les responsabilités contractuelles, délictuelles et pour manquement à une obligation légale.</p>

<p>Tant que le site Web et les informations et services sur le site Web sont fournis gratuitement, nous ne serons pas responsables de toute perte ou dommage de quelque nature que ce soit.</p>                   
     </div>
     </section>
          <?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
</body>
</html>