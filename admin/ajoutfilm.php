<?php

$bdd=new PDO('mysql:host=localhost;dbname=cinéma;charset=utf8','root','');


$req = $bdd->prepare('INSERT INTO film (titre, annee_sortie, description) VALUES(:titre,:annee_sortie, :description)');
$req->execute(array(
	'titre'=>$_POST['titre'],
	'annee_sortie'=>$_POST['annee_sortie'],
	'description'=>$_POST['description']

));
$res = $req->fetchall();



?>
