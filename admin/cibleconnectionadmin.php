<?php
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=cinéma;charset=utf8','root','');


$req = $bdd->prepare('SELECT *FROM admin WHERE email = :Ryad@lprs.fr AND mdp = :Ryad');
$req->execute(array(

	'email'=>$_POST['email'],
	'mdp'=> $_POST['mdp']
));
$res = $req->fetch();
if($res){
	header('Location: admin/admin.html');
}
else{
	echo 'Identifiant ou mot de passe incorrect';

}
?>