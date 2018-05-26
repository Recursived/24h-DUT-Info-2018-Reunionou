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
	</div>
</div>
<?php while($data = $dataEvents->fetch()): ?>
	<?php print_r($data) ?>
<?php endwhile ?>
<?php
$content = ob_get_clean();
require_once 'template.php';
?>