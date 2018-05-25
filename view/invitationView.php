<?php
$title = 'Index';

// Permet de creer la variable content
ob_start();
?>

<link rel="stylesheet" href="public/css/style2.css">

<div id=Container>

	<div id=Form-col>
		
		<div id=Log-form class="opened">
			<form action=post>
				<p>Je suis...</p>
				<input class=input type="mail" name="login" placeholder="ardresse@mail.xyz">
				<p>Lien de l'invitation</p>
				<input class=input type="password" name="pwd" placeholder="motdepasse">
				<input class="submit button" type="submit" value=Valider>
			</form>
		</div>


	</div>

</div>

<?php
$content = ob_get_clean();
require_once 'template.php';
?>