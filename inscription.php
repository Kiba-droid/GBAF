<?php
include 'header.php';
require_once('bdd.php');
?>

		<h1>pour vous inscrire</h1>
		<form method="post" action="bdd.php">
			<p>
				<p><label for="nom">Nom</label> : <input type="text" name="Name" /></p>
				<p><label for="prenom">Prénom</label> : <input type="text" name="LastName" /></p>
				<p><label for="pseudo">Pseudo</label> : <input type="text" name="UserName" /></p>
				<p><label for="motDePasse">Mot de passe</label> : <input type="password" name="Password" /></p>
				<p><label for="question">Question secrète</label> : <input type="text" name="Question" /></p>
				<p><label for="reponse">Réponse à la question secrète</label> : <input type="text" name="Answer" /></p>
			
				<p><input type="submit" name="valider" /></p>
			</p>
		</form>
<?php
include 'footer.php';
?>