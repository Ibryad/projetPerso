<?php
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=cinéma;charset=utf8','root','');


$req = $bdd->prepare('SELECT *FROM client WHERE email = :email AND mdp = :mdp');
$req->execute(array(

	'email'=>$_POST['email'],
	'mdp'=> $_POST['mdp']
));
$res = $req->fetch();
if($res){
	$_SESSION['email'] = $res['email'];
    $_SESSION['id'] = $res['id_client'];
	

	header("Location: indexconnecte.php");
	
}else{
	header("Location: hadiths.html");
	echo 'Identifiant ou mot de passe incorrect';

}


?>