<?php
session_start();

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Excpetion $e)
{
	die('Erreur : ' . $e->getMessage());
}

$pseudo = $_SESSION['pseudo'];
$message = $_POST['message'];

if (isset($message) AND $message != '') {
	$req = $bdd->prepare('INSERT INTO minichat(pseudo, message, date_creation) VALUES(:pseudo, :message, NOW())');
	$req->execute(array(
		'pseudo' => $pseudo,
		'message' => $message
	));

	echo 'Le message a bien été envoyé !';
}
else {
	echo 'Vous ne pouvez envoyer un message vide :-)';
}

header('Location:../../index.php');








	
	
	
	
	