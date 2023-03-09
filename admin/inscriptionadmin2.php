<?php

$bdd=new PDO('mysql:host=localhost;dbname=cinéma;charset=utf8','root','');


$req = $bdd->prepare('INSERT INTO admin(mail,mdp) VALUES(:mail,:mdp)');
$req->execute(array(
'mail'=>$_POST['mail'],
'mdp'=>$_POST['mdp'],


));
$res = $req->fetchall();



?>