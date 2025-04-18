<?php
 
//On vérifie si le cookie existe déjà
if(isset($HTTP_COOKIE_VARS['lang'])) {
 
        //Si oui, on créer une variable $lang avec pour valeur celle du cookie.
    $lang = $HTTP_COOKIE_VARS['lang'];
 
}
else {
    // si le cookie n'existe pas on tente de reconnaitre la langue par défaut du navigateur utilisé
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
}

//On définit la durée du cookie (avant son expiration)
$expire = 365*24*3600;
//Puis on créé le cookie
 setcookie("lang", $lang, time() + $expire); //bon
//setcookie("lang", $lang, time() + $expire, "/samesite=None","actuconcoursjobs.com",1);

switch($lang) {
    //Si lang=fr on inclut le fichier de langue française
    case 'fr':
        include('lang-fr.php');
    break;
    //Si lang=en on inclut le fichier de langue anglaise
    case 'en':
        include('lang-en.php');
    break;
    default:
        include('lang-fr.php');
}
 
?>