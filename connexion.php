<?php
include 'header.php';
require_once('bdd.php');
?>
		
		<h1>pour vous connecter</h1>
		<form method="post" action="bdd.php">
			<p><label for="pseudo">Pseudo</label> : <input type="text" name="UserName" /></p>
			<p><label for="password">Mot de passe</label> : <input type="password" name="Password" /></p>

			<p><input type="submit" name="valider" /></p>
		</form>
<?php
include 'footer.php';
?>