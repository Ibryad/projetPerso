
<?php

$bdd=new PDO('mysql:host=localhost;dbname=cinéma;charset=utf8','root','');


$req = $bdd->prepare('INSERT INTO pdo(NOM,PRENOM,EMAIL) VALUES(:nom,:prenom,:email)');
$req->execute(array(
'nom'=>$_POST['nom'],
'prenom'=>$_POST['prenom'],
'email'=>$_POST['email'],

));
$res = $req->fetchall();
echo 'Félicitations vous êtes inscrit à notre site';



?>


