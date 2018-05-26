<?php
$title = 'Index';

// Permet de creer la variable content
ob_start();
?>

	<div id=Header>
		<div id=Header-logo>
			<img src="public/img/logo.png">
		</div>
		<h1>Vue des evenements</h1>
		<div id=Unlog><a href=index.php?action=logout>Déconnexion</a></div>
	</div>
	<div id=Events>
		<a href=""><div id=Add-event>Ajouter un evenement</div></a>
		<?php while ($data = $dataEvents->fetch()): ?>
			<a href="index.php?action=event&link=<?= htmlspecialchars($data['5']) ?>">
				<div class="event">
					<?= htmlspecialchars($data['1']) ?>
				</div>
			</a>
		<?php endwhile ?>
	</div>
<?php
$content = ob_get_clean();
require_once 'template.php';
?>