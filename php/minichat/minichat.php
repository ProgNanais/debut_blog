<div id="chat" style="text-align:center;">
	
	<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (Excpetion $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
				
		$reponse = $bdd->query('SELECT ID, pseudo, message, DATE_FORMAT(date_creation, \'%d/%m/%Y %Hh%imin\') AS date FROM minichat ORDER BY ID DESC LIMIT 0,10');
		
		while ($donnees = $reponse->fetch()) {
	?>
	<div>
        <p><em><?php echo $donnees['date']; ?></em> - <strong><?php echo htmlspecialchars($donnees['pseudo']); ?></strong> :<br :>
		<?php echo htmlspecialchars($donnees['message']); ?>
	</div>
	<?php
		}
		$reponse->closeCursor();
	?>
<!--	<form action="php/minichat/minichat_post.php" method="post"> -->
		<p style="text-align:center;color:orange;" >Bonjour <?php echo htmlspecialchars($_SESSION['pseudo']); ?> veux-tu chatter avec les autres menmbres ?<p>
		<p>
			<textarea name="message" rows="1" cols="100" placeholder="Votre message ici..."></textarea>
		</p>
		<p>
			<input type="submit" value="Envoyer"/>
		</p>
	</form>
</div>