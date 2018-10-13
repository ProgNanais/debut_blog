<?php

session_start();

if (!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['age']) AND !empty($_POST['pseudo']))
{
	$_SESSION['prenom'] = $_POST['prenom'];
	$_SESSION['nom'] = $_POST['nom'];
	$_SESSION['age'] = $_POST['age'];
	$_SESSION['pseudo'] = $_POST['pseudo'];
}

?>

<!DOCTYPE html>
<html>
<?php include('php/include/include_head.php'); ?>

<body>
	<!-- header -->
	<header>
		<h1>Page d'Accueil</h1>
		<div class="separator"></div>
			<ul class="nav justify-content-end">
				<li class="nav-item"><a class="nav-link" href="index.php">Lien vers index.php</a></li>
				<li class="nav-item"><a class="nav-link" href="php/vues/informations.php">Lien vers informations.php</a></li>
				<li class="nav-item"><a class="nav-link" href="php/vues/mapage.php">Lien vers mapage.php</a></li>
				<li class="nav-item"><a class="nav-link" href="php/vues/monscript.php">Lien vers monscript.php</a></li>
			</ul>
	</header>

	<?php
		if (!isset($_SESSION['prenom']) AND !isset($_SESSION['nom']) AND !isset($_SESSION['age']))
		{
		?>
		
	<section class="formulaire">
	<h2>Veuillez vous enregistrer pour pouvoir accéder au contenu du site :</h2>
		<div class="container">

		
			<form method="post" action="index.php" class="form-group">
				<label>Votre prénom : </label>
					<input type="text" name="prenom" />

				<label>Votre nom :</label>	
					<input type="text" name="nom">	


				<label>Votre pseudo :</label>
					<input type="text" name="pseudo" />

				<label>Votre âge :</label>
					<input type="number" name="age">
					<input class="validateButton" type="submit" name="Valider">
			</form>
		</div>

	</section>

	<?php
		}
		else
		{
		?>

	<p>
		Salut
		<?php echo htmlspecialchars($_SESSION['pseudo']); ?> ! !
	</p>
	<p>
		Tu es à l'accueil de mon site ! Tu veux aller sur une autre page ?
	</p>
	<form action="php/minichat/minichat_post.php" method="post">
		<?php include('php/minichat/minichat.php'); ?>

		<p>Me déconnecter</a></p>
		<?php
		}
        include('php/include/include_script.php');
		?>
</body>

</html>