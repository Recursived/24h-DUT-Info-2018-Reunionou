<?php
$title = 'Index';

// Permet de creer la variable content
ob_start();
?>
<div class="container-fluid">
	<h1 class="text-center">Index</h1>
</div>

<?php
$content = ob_get_clean();
require_once 'template.php';
?>