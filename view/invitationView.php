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
		
		<div class="wrapper">
						<form class="form" method="post" action="http://localhost/IHM/index.php">
						  <input type="text" class="name field-in font" name="mailnom" placeholder="Je suis..."/>
						  
						  <input type="email" class="email field-in font" name="mail"  placeholder="Lien de l'invitation"/>
						  
						  
						  
						  <button class="submit2 font" name="mailsub" value="1" >Envoyer</button>
						</form>  	
						<div class="shadow"></div>
					  </div>


	</div>

</div>

<?php
$content = ob_get_clean();
require_once 'template.php';
?>