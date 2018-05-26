<?php
$title = 'Index';

// Permet de creer la variable content
ob_start();
?>

<link rel="stylesheet" href="public/css/style2.css">

<div id=Container>

	
	<div id=Form-col>
		
		<div class="wrapper">
						
		<form class="form" action=post>
		<h1>
			<div class="animate one">
			<span>I</span><span>n</span><span>v</span><span>i</span><span>t</span><span>a</span><span>t</span><span>i</span><span>o</span><span>n</span>
		</div>
		</h1>
		<input type="text" class="name field-in font" name="nameInvit" placeholder="Je suis..."/>
		  
		  <input type="text" class="email field-in font" name="linkInvit"  placeholder="Lien de l'invitation"/>
		  
		  <button class="submit2 font" name="submitInvit" value=Valider>Envoyer</button>
		</form>  	
		<div class="shadow"></div>
	  </div>


	</div>
	
	

</div>

<?php
$content = ob_get_clean();
require_once 'template.php';
?>