<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=cinéma;charset=utf8', 'root', '');

$req = $bdd->prepare('SELECT * FROM film WHERE  id_film=:id_film AND titre  = :titre  AND annee_sortie = :annee_sortie AND description =:description');
$req->execute(array(
	'id_film'=>$_SESSION['id_film'],
    'titre '=>$_POST['titre '],
   	'annee_sortie'=>$_POST['annee_sortie'],
    'description'=>$_POST['description']
	
));

$res = $req->fetchall();

?>