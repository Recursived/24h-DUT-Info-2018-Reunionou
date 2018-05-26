<?php
$title = 'Index';

// Permet de creer la variable content
ob_start();
?>



<div id="Container">
	<div id="Index-head">
		<div id="Logo">
			<img src="public/img/logo.png">
		</div>
		<h1>Reunionou</h1>
	</div>

	

</div>

<?php
$content = ob_get_clean();
require_once 'template.php';
?>