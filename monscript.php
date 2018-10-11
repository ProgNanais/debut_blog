<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Script</title>
	</head>
	<body>
		<h1 style="text-decoration: underline; text-align: center; color: rgba(50,50,50,0.8);">Bienvenue sur la page des Sessions</h1>
		<h2 style="text-align: center;">Page "monscript.php"</h2>

		<ul style="list-style-type: none; display: flex; justify-content: space-around; margin: 2em 0 5em 0;">
			<li><a style="text-decoration: none;" href="index.php">Lien vers index.php</a></li>
			<li><a style="text-decoration: none;" href="informations.php">Lien vers informations.php</a></li>
			<li><a style="text-decoration: none;" href="mapage.php">Lien vers mapage.php</a></li>
			<li><a style="text-decoration: none;" href="monscript.php">Lien vers monscript.php</a></li>
		</ul>

		<?php
		if (isset($_SESSION['prenom']) AND isset($_SESSION['nom']) AND isset($_SESSION['age']))
		{
		?>

		<p>
			Hello <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !
			Tu as <?php echo $_SESSION['age']; ?> ans, non ?
		</p>
		
		<?php include('minichat.php'); ?>

		<?php
		}
		else
		{
		?>

		<p style="margin-left: 2em;">
			Salut !<br>
			Pour accéder au contenu, enregistre-toi sur <a href="index.php">la page d'accueil !</a>
		</p>

		<?php
		}
		?>

		<p style="margin-top: 5em; text-align: center;"><a href="destruction.php">Me déconnecter</a></p>
		
	</body>
</html>