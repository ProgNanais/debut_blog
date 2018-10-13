<?php
session_start();
?>

<!DOCTYPE html>
<html>
	
<?php include('../include/include_head.php'); ?>
	
	<body>
		<h1 style="text-align: center;">Page "informations.php"</h1>

		<ul style="list-style-type: none; display: flex; justify-content: space-around; margin: 2em 0 5em 0;">
			<li><a style="text-decoration: none;" href="../../index.php">Lien vers index.php</a></li>
			<li><a style="text-decoration: none;" href="informations.php">Lien vers informations.php</a></li>
			<li><a style="text-decoration: none;" href="mapage.php">Lien vers mapage.php</a></li>
			<li><a style="text-decoration: none;" href="monscript.php">Lien vers monscript.php</a></li>
		</ul>

		<?php
		if (isset($_SESSION['prenom']) AND isset($_SESSION['nom']) AND isset($_SESSION['age']))
		{
		?>

		<p style="margin-left: 2em;">
			Je me souviens de toi ! Tu t'appelles <?php echo htmlspecialchars($_SESSION['prenom']) . ' ' . htmlspecialchars($_SESSION['nom']); ?> !<br>
			Et ton âge humm... Tu as <?php echo htmlspecialchars($_SESSION['age']); ?> ans, c'est bien ça ? : -D
		</p>
        <form action="../minichat/minichat_post.php" method="post">
		<?php include('../minichat/minichat.php'); ?>

		<?php
		}
		else
		{
		?>

		<p>
			Salut !<br>
			Pour accéder au contenu, enregistre-toi sur <a href="../../index.php">la page d'accueil !</a>
		</p>

		<?php
		}
		include('../include/include_script.php');
		?>
		<p style="margin-top: 5em; text-align: center;"><a href="destruction.php">Me déconnecter</a></p>
		
	</body>
</html>