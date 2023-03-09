<?php

$bdd=new PDO('mysql:host=localhost;dbname=cinéma;charset=utf8','root','');


$req = $bdd->prepare('UPDATE film SET  titre = :titre, annee_sortie =:annee_sortie, description =:description ');
$req->execute(array(
	'titre'=>$_POST['titre'],
	'annee_sortie'=>$_POST[' annee_sortie'],
	'description'=>$_POST[' description']

));
$res = $req->fetchall();



?>