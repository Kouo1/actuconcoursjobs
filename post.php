<?php

if(isset($_POST['mail']))
{
	$email = $_POST['mail'];
	//on teste si l'email est valide
	 if(filter_var($email,FILTER_VALIDATE_EMAIL))
	 {
		 echo 'e-mail valide';
	 }
	 else
		 {
		 echo 'e-mail invalide';
	 }
}


if(isset($_POST['nom']))
{
	$nom = $_POST['nom'];
	//on teste si l'email est valide
	 if(strlen($nom)>1)
	 {
		 echo 'nom valide';
	 }
	 else
		 {
		 echo 'nom invalide';
	 }
}
if(isset($_POST['mot_de_passeUtilisateur']))
{
	$pass = $_POST['mot_de_passeUtilisateur'];
	//on teste si l'email est valide
	 if(strlen($pass)>5)
	 {
		 echo 'mot de passe valide';
	 }
	 else
		 {
		 echo 'mot de passe invalide';
	 }
}

if(isset($_POST['mot_de_passeUtilisateur_c']))
{
	$pass = $_POST['mot_de_passeUtilisateur_c'];
	//on teste si l'email est valide
	 if(strlen($pass)>5)
	 {
		 echo 'mot de passe valide';
	 }
	 else
		 {
		 echo 'mot de passe invalide';
	 }
}
