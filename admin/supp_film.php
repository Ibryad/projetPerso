<?php


$bdd = new PDO('mysql:host=localhost;dbname=cinéma;charset=utf8', 'root', '');

$req = $bdd->prepare('DELETE FROM film SET id_film  = :id_film  AND titre = :titre AND annee_sortie =:annee_sortie AND description =:description');
$req->execute(array(
    'id_film '=>$_POST['id_film '],
    'titre'=>$_POST['titre'],
	'annee_sortie'=>$_POST['annee_sortie'],
	'description'=>$_POST['description']
));

$res = $req->fetch();

?>