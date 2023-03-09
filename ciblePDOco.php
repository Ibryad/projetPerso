<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=cinéma;charset=utf8', 'root', '');
$req = $bdd->prepare('SELECT * FROM client WHERE nom= :nom AND prenom= :prenom AND age = :age AND email = :email AND mdp = :mdp');
$req->execute(array(
	'nom'=>$_POST['nom'],
    'prenom'=>$_POST['prenom'],
	'age'=>$_POST['age'],
	'email'=>$_POST['email'],
    'mdp'=>$_POST['mdp'] 
));
$res = $req->fetchall();
if($res){
   echo 'compte existant, veuillez vous connecter';
   header("Location: ciblecocine.php");

}
else{
	$requete = $bdd->prepare('INSERT INTO client (nom, prenom,age,email,mdp) VALUES (:nom, :prenom,:age,:email,:mdp)');
    $requete->execute(array(
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'age' => $_POST['age'],
    'email' => $_POST['email'],
    'mdp' => $_POST['mdp']  
));
header("Location: indexconnecte.html");
}
?>