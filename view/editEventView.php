<?php
$title = 'Index';

// Permet de creer la variable content
ob_start();
?>
	<script type="text/javascript" src="public/js/map_crea.js"></script>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-2fi4ap5nYpsfbI4YHUCLj4zZjfX0vEE&callback=initMap"
    async defer></script>
	<div id=Header>
	<input type="hidden" id="coordsInput" value="(48.28064086716865, 4.871550789062439)">
		<div id=Header-logo>
			<img src="public/img/logo.png">
		</div>
		<h1>Création evenement</h1>
		<div id=Unlog><a href=index.php?action=logout>Déconnexion</a></div>
	</div>

<div id=View>
	<div id=View-content>
		<form method=post action=index.php?action=>
			<p>Titre</p>
			<input class=input type="text" name="titre" required>
			<p>Description</p>
			<input class=input type="text" name="desc">
			<p>Date</p>
			<input class=input type="datetime" name="date" required>
			<p>Lieu</p>
			<input class=input id="addressInput" type="text" name="lieu" required>
			<input type="hidden" id="coordsInput" name="coords">
			<input type="submit" value="Valider">
		</form>

</div>

<div id=Map>
	Map
</div>


<?php
$content = ob_get_clean();
require_once 'template.php';
?>