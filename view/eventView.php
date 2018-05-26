<?php
$title = 'Index';

// Permet de creer la variable content
ob_start();
?>
	<script type="text/javascript" src="public/js/map_visu.js"></script>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-2fi4ap5nYpsfbI4YHUCLj4zZjfX0vEE&callback=initMap"
    async defer></script>
	<div id=Header>
	<input type="hidden" id="coordsInput" value="(48.28064086716865, 4.871550789062439)">
		<div id=Header-logo>
			<img src="public/img/logo.png">
		</div>
		<h1>Evenement en cours</h1>
		<div id=Unlog><a href=index.php?action=logout>Déconnexion</a></div>
	</div>

<div id=View>
	<div id=View-content>
		<div id=Desc>
			<p class=bold>Titre</p>
			<p>Desc</p>
			<p>Date</p>
			<p>Lieu</p>
		</div>
		<div id=Participants>
			<h1>Participants</h1>
			<table>
				<tr>
					<td>Participant 1 |</td>
					<td>Oui |</td>
					<td>Comm</td>
				</tr>
				<tr>
					<td>Participant 2 |</td>
					<td>Oui |</td>
					<td>Comm</td>
				</tr>
				<tr>
					<td>Participant 3 |</td>
					<td>Oui |</td>
					<td>Comm</td>
				</tr>
			</table>
		</div>
	</div>

</div>

<div id=Map>
	Map
</div>

<div id=Response onclick="opening('Form', 'Response')">
	Je participe
</div>

<div id=Form>
	<div>
		<form method=post action=index.php?action=participate>
			<p>Votre commentaire</p>
			<input class=input type="text" name="com">
			<input type="submit" value="Valider">
		</form>
	</div>
</div>


<?php
$content = ob_get_clean();
require_once 'template.php';
?>