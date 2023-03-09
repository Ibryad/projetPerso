<?php

$bdd=new PDO('mysql:host=localhost;dbname=cinéma;charset=utf8','root','');


$req = $bdd->prepare('INSERT INTO film (id_film, titre, annee_sortie, description) VALUES(id_film=:id_film AND titre=:titre AND anne_sortie=:anne_sortie AND description=:description)');
$req->execute(array(
'id_film'=>$_POST['id_film'],
'titre'=>$_POST['titre'],
'annee_sortie'=>$_POST['annee_sortie'],
'description'=>$_POST['description']

));
$res = $req->fetchall();



?>