<?php
$title = 'Index';

// Permet de creer la variable content
ob_start();
?>

<div id=Container>
	<div id=Index-head>
		<div id=Logo>
			<img src="">
		</div>
		<h1>Reunionou</h1>
	</div>

	<div id=Form-col>
		<div id="Log-button" class=button onclick="opening('Log-form', 'Log-button')">
			Connection
		</div>
		<div id=Log-form>
			<form action=post>
				<p>Adresse mail</p>
				<input class=input type="mail" name="login" placeholder="ardresse@mail.xyz">
				<p>Mot de passe</p>
				<input class=input type="password" name="pwd" placeholder="motdepasse">
				<input class="submit button" type="submit" value=Valider>
			</form>
		</div>

		<div id="Reg-button" class=button onclick="opening('Reg-form', 'Reg-button')">
			Inscription
		</div>
		<div id=Reg-form>
			<form action=post>
				<p>Nom d'utilisateur (celui qui sera visible)</p>
				<input class=input type="text" name="pwd" placeholder="motdepasse">
				<p>Adresse mail</p>
				<input class=input type="mail" name="login" placeholder="ardresse@mail.xyz">
				<p>Mot de passe</p>
				<input class=input type="password" name="pwd" placeholder="motdepasse">
				<p>Retapez votre mot de passe</p>
				<input class=input type="password" name="pwd" placeholder="motdepasse">
				<input class="submit button" type="submit" value=Valider>
			</form>
		</div>

		<div id=Invite>J'ai reçu une invitation</div>
	</div>

</div>

<?php
$content = ob_get_clean();
require_once 'template.php';
?>