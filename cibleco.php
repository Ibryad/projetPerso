<?php

$bdd=new PDO('mysql:host=localhost;dbname=cinéma;charset=utf8','root','');


$req = $bdd->prepare('INSERT INTO pdo(login,mdp) VALUES(:login,:mdp)');
$req->execute(array(

'login'=>$_POST['login'],
'mdp'=> $_POST['mdp'],
));
$res = $req->fetchall();
echo 'Bienvenue';


?>