<?php 
session_start();


If (isset($_POST['login']) && isset($_POST['pwd']){

Session_start ();

$_SESSION[‘login’] = $_POST[‘login’] ;

Echo “bonjour”. $_SESSION['login'];




else{
	echo "Identifiant ou mot de passe incorrect ";
    header('Location: ciblePDOco.php');

?>