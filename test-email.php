<?php


//on recupere l'email en minuscule
$email=strtolower(htmlspecialchars($_POST['']));

//test de la validite de la syntaxe
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    die("1");
 }

 //test du nom de domaine
 $nomdomaine = explode("@",$email);
if (!checkdnsrr ($nomdomaine[1], "MX")) //Mail exchange,la fonction  checkdnsrr permet de verifier l'existance du nom de domaine
 {
    die("2");//nom de domaime inconnu
 }