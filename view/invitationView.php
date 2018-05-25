<?php
$title = 'Index';

// Permet de creer la variable content
ob_start();
?>

<div id=Container>

	<div id=Form-col>
		<div id=Log-form>
			<form action=post>
				<p>Adresse mail</p>
				<input class=input type="mail" name="login" placeholder="ardresse@mail.xyz">
				<p>Lien</p>
				<input class=input type="password" name="pwd" placeholder="motdepasse">
				<input class=submit type="submit" value=Valider>
			</form>
		</div>

		<div id="Reg-button" class=button onclick="opening('Reg-form', 'Reg-button')">
			Inscription
		</div>
		<div id=Reg-form>
			<form action=post>
				<input class=input type="mail" name="login" placeholder="ardresse@mail.xyz">
				<input class=input type="password" name="pwd" placeholder="Mot de passe">
			</form>
		</div>

	</div>

</div>

<?php
$content = ob_get_clean();
require_once 'template.php';
?>