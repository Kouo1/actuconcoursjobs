<php namespace actuconcoursjobs;?>
<!DOCTYPE html>
<html>
<?php
session_start(); // D�marrage de la session

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
         <h1>Politique de confidentialit� pour actuconcoursjobs.com</h1>

<p>Chez actuconcoursjobs.com, accessible depuis www.actuconcoursjobs.com, l'une de nos principales priorit�s est la confidentialit� de nos visiteurs. Ce document de politique de confidentialit� contient les types d'informations qui sont collect�es et enregistr�es par actuconcoursjobs.com et comment nous les utilisons.</p>

<p>Si vous avez des questions suppl�mentaires ou souhaitez plus d'informations sur notre politique de confidentialit�, n'h�sitez pas � nous contacter.</p>

<p>Cette politique de confidentialit� s'applique uniquement � nos activit�s en ligne et est valable pour les visiteurs de notre site Web en ce qui concerne les informations qu'ils partagent et/ou collectent sur actuconcoursjobs.com. Cette politique ne s'applique pas aux informations collect�es hors ligne ou via des canaux autres que ce site Web. Notre politique de confidentialit� a �t� cr��e avec l'aide de
<a href="https://h-supertools.com/web/privacy-policy-generator/">G�n�rateur de politique de confidentialit� H-supertools</a>.</p>

<h2>Consentement</h2>

<p>En utilisant notre site Web, vous consentez par la pr�sente � notre politique de confidentialit� et acceptez ses conditions.</p>

<h2>Informations que nous collectons</h2>

<p>Les informations personnelles que vous �tes invit� � fournir, et les raisons pour lesquelles vous �tes invit� � les fournir, vous seront pr�cis�es au moment o� nous vous demanderons de fournir vos informations personnelles.</p>
<p>Si vous nous contactez directement, nous pouvons recevoir des informations suppl�mentaires vous concernant telles que votre nom, votre adresse e-mail, votre num�ro de t�l�phone, le contenu du message et/ou des pi�ces jointes que vous pouvez nous envoyer, et toute autre information que vous pouvez choisir de fournir .</p>
<p>Lorsque vous cr�ez un compte, nous pouvons vous demander vos coordonn�es, y compris des �l�ments tels que le nom, le nom de l'entreprise, l'adresse, l'adresse e-mail et le num�ro de t�l�phone.</p>

<h2>Comment nous utilisons vos informations</h2>

<p>Nous utilisons les informations que nous collectons de diff�rentes mani�res, notamment pour :</p>

<ul>
<li>Fournir, exploiter et maintenir notre site Web</li>
<li>Am�liorer, personnaliser et d�velopper notre site Web</li>
<li>Comprendre et analyser la fa�on dont vous utilisez notre site Web</li>
<li>D�velopper de nouveaux produits, services, fonctionnalit�s et fonctionnalit�s</li>
<li>Communiquer avec vous, directement ou par l'interm�diaire de l'un de nos partenaires, y compris pour le service client, pour vous fournir des mises � jour et d'autres informations relatives au site Web, et � des fins de marketing et de promotion</li>
<li>Vous envoyer des e-mails</li>
<li>D�tecter et pr�venir les fraudes</li>
</ul>

<h2>Fichiers journaux</h2>

<p>actuconcoursjobs.com suit une proc�dure standard d'utilisation des fichiers journaux. Ces fichiers enregistrent les visiteurs lorsqu'ils visitent des sites Web. Toutes les soci�t�s d'h�bergement le font et font partie de l'analyse des services d'h�bergement. Les informations collect�es par les fichiers journaux incluent les adresses IP (protocole Internet), le type de navigateur, le fournisseur d'acc�s Internet (FAI), l'horodatage, les pages de renvoi/sortie et �ventuellement le nombre de clics. Ceux-ci ne sont li�s � aucune information personnellement identifiable. Le but de l'information est d'analyser les tendances, d'administrer le site, de suivre les mouvements des utilisateurs sur le site Web et de recueillir des informations d�mographiques.</p>

<h2>Cookies et balises Web</h2>

<p>Comme tout autre site Internet, actuconcoursjobs.com utilise des "cookies". Ces cookies sont utilis�s pour stocker des informations, y compris les pr�f�rences des visiteurs et les pages du site Web auxquelles le visiteur a acc�d� ou visit�. Les informations sont utilis�es pour optimiser l'exp�rience des utilisateurs en personnalisant le contenu de notre page Web en fonction du type de navigateur des visiteurs et/ou d'autres informations.</p>

<h2>Cookie Google DoubleClick DART</h2>

<p>Google est l'un des fournisseurs tiers de notre site. Il utilise �galement des cookies, connus sous le nom de cookies DART, pour diffuser des annonces aux visiteurs de notre site en fonction de leur visite sur www.website.com et d'autres sites sur Internet. Cependant, les visiteurs peuvent choisir de refuser l'utilisation des cookies DART en visitant la politique de confidentialit� du r�seau publicitaire et de contenu Google � l'URL suivante - <a href="https://policies.google.com/technologies/ads">https:/ /policies.google.com/technologies/annonces</a></p>

<h2>Nos partenaires publicitaires</h2>

<p>Certains annonceurs sur notre site peuvent utiliser des cookies et des balises Web. Nos partenaires publicitaires sont list�s ci-dessous. Chacun de nos partenaires publicitaires a sa propre politique de confidentialit� pour ses politiques sur les donn�es des utilisateurs. Pour un acc�s plus facile, nous avons �tabli un lien hypertexte vers leurs politiques de confidentialit� ci-dessous.</p>

<ul>
    <li>
        <p>Google</p>
        <p><a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>
    </li>
</ul>


<h2>Politiques de confidentialit� des partenaires publicitaires</h2>

<P>Vous pouvez consulter cette liste pour conna�tre la politique de confidentialit� de chacun des partenaires publicitaires d'actuconcoursjobs.com.</p>

<p>Les serveurs publicitaires ou r�seaux publicitaires tiers utilisent des technologies telles que les cookies, JavaScript ou les balises Web qui sont utilis�es dans leurs publicit�s et liens respectifs qui apparaissent sur actuconcoursjobs.com, qui sont envoy�s directement au navigateur des utilisateurs. Ils re�oivent automatiquement votre adresse IP lorsque cela se produit. Ces technologies sont utilis�es pour mesurer l'efficacit� de leurs campagnes publicitaires et/ou pour personnaliser le contenu publicitaire que vous voyez sur les sites Web que vous visitez.</p>

<p>Notez qu'actuconcoursjobs.com n'a aucun acc�s ni aucun contr�le sur ces cookies qui sont utilis�s par des annonceurs tiers.</p>

<h2>Politiques de confidentialit� des tiers</h2>

<p>La politique de confidentialit� d'actuconcoursjobs.com ne s'applique pas aux autres annonceurs ou sites Web. Ainsi, nous vous conseillons de consulter les politiques de confidentialit� respectives de ces serveurs publicitaires tiers pour des informations plus d�taill�es. Il peut inclure leurs pratiques et instructions sur la fa�on de se retirer de certaines options. </p>

<p>Vous pouvez choisir de d�sactiver les cookies via les options de votre navigateur. Pour conna�tre des informations plus d�taill�es sur la gestion des cookies avec des navigateurs Web sp�cifiques, vous pouvez les trouver sur les sites Web respectifs des navigateurs.</p>

<h2>Droits de confidentialit� CCPA (Ne vendez pas mes informations personnelles)</h2>

<p>En vertu du CCPA, entre autres droits, les consommateurs californiens ont le droit de :</p>
<p>Demander � une entreprise qui collecte les donn�es personnelles d'un consommateur de divulguer les cat�gories et les �l�ments sp�cifiques de donn�es personnelles qu'une entreprise a collect�s sur les consommateurs.</p>
<p>Demander � une entreprise de supprimer toutes les donn�es personnelles sur le consommateur qu'une entreprise a collect�es.</p>
<p>Demandez � une entreprise qui vend les donn�es personnelles d'un consommateur de ne pas vendre les donn�es personnelles du consommateur.</p>
<p>Si vous faites une demande, nous avons un mois pour vous r�pondre. Si vous souhaitez exercer l'un de ces droits, veuillez nous contacter.</p>


<h2>Droits de protection des donn�es GDPR</h2>

<p>Nous souhaitons nous assurer que vous �tes pleinement conscient de tous vos droits en mati�re de protection des donn�es. Chaque utilisateur a droit � ce qui suit :</p>
<p>Le droit d'acc�s - Vous avez le droit de demander des copies de vos donn�es personnelles. Nous pouvons vous facturer une somme modique pour ce service.</p>
<p>Le droit de rectification - Vous avez le droit de nous demander de corriger toute information que vous jugez inexacte. Vous avez �galement le droit de nous demander de compl�ter les informations que vous jugez incompl�tes.</p>
<p>Le droit � l'effacement - Vous avez le droit de nous demander d'effacer vos donn�es personnelles, sous certaines conditions.</p>
<p>Le droit de restreindre le traitement - Vous avez le droit de nous demander de restreindre le traitement de vos donn�es personnelles, sous certaines conditions.</p>
<p>Le droit de vous opposer au traitement - Vous avez le droit de vous opposer � notre traitement de vos donn�es personnelles, sous certaines conditions.</p>
<p>Le droit � la portabilit� des donn�es - Vous avez le droit de demander que nous transf�rions les donn�es que nous avons collect�es � une autre organisation, ou directement � vous, sous certaines conditions.</p>
<p>Si vous faites une demande, nous avons un mois pour vous r�pondre. Si vous souhaitez exercer l'un de ces droits, veuillez nous contacter.</p>

<h2>Informations sur les enfants</h2>

<p>Une autre partie de notre priorit� est d'ajouter une protection aux enfants lorsqu'ils utilisent Internet. Nous encourageons les parents et les tuteurs � observer, participer et/ou surveiller et guider leur activit� en ligne.</p>

<p>actuconcoursjobs.com ne collecte sciemment aucune information personnelle identifiable d'enfants de moins de 13 ans. Si vous pensez que votre enfant a fourni ce type d'informations sur notre site Web, nous vous encourageons fortement � nous contacter imm�diatement et nous ferons notre meilleurs efforts pour supprimer rapidement ces informations de nos dossiers.</p>
       </div>            
          <?php
   require_once('pied.php');
   require_once('scripts.php');
   ?>
</body>
</html>