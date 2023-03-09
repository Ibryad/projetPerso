<?php
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=cinéma;charset=utf8','root','');


$req = $bdd->prepare('UPDATE client SET nom=:nom, prenom=:prenom, age=:age, mdp=:mdp, email=:email Where id_client=:id');
$req->execute(array(
'nom'=>$_POST['nom'],
'prenom'=>$_POST['prenom'],
'age'=>$_POST['age'],
'email'=>$_POST['email'],
'mdp'=>$_POST['mdp'],
'id'=>$_SESSION['id']

));
$res = $req->fetchall();
echo 'modification effectuée';
header("Location:indexconnecte.php");

?>