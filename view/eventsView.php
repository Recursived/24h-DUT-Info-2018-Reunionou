<?php
$title = 'Index';

// Permet de creer la variable content
ob_start();
?>

<div id=Container>
	<div id=Header>
		<div id=Header-logo>
			<img src="public/img/logo.png">
		</div>
		<h1>Vue des evenements</h1>
		<div id=Unlog><a href=index.php?action=logout>Déconnexion</a></div>
	</div>
	<div id=Events>
		<a href=""><div id=Add-event>Ajouter un evenement</div></a>
		<div class="event"><a>Evenement 1</a></div>
		<div class="event"><a>Evenement 2</a></div>
		<div class="event"><a>Evenement 3</a></div>
	</div>
</div>

<?php
$content = ob_get_clean();
require_once 'template.php';
?>