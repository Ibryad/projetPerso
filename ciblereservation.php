<?php

$bdd = new PDO('mysql:host=localhost;dbname=cinéma;charset=utf8', 'root', '');

$req = $bdd->prepare('SELECT * FROM reservation WHERE tarif_appliquee = :tarif_appliquee AND date_res=:date_res');
$req->execute(array(	
    'tarif_appliquee'=>$_POST['tarif_appliquee'],
	'date_res'=>$_POST['date_res']
));
$res = $req->fetchall();
if($res){
	header('Location: reservation2.html');

}
else{
	$requete = $bdd->prepare('INSERT INTO reservation(tarif_appliquee,date_res) VALUES(:tarif_appliquee,:date_res)');
    $requete->execute(array( 
		'tarif_appliquee' => $_POST['tarif_appliquee'],
		'date_res' => $_POST['date_res']
));
	header('Location: action/action.html');

}
?>