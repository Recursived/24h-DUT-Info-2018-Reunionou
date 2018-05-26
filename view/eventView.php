<?php
$title = 'Index';

// Permet de creer la variable content
ob_start();
?>

	<div id=Header>
		<div id=Header-logo>
			<img src="public/img/logo.png">
		</div>
		<h1>Evenement en cours</h1>
		<div id=Unlog><a href=index.php?action=logout>Déconnexion</a></div>
	</div>
	
<div id=Map>
	Map
</div>

<div id=Response onclick="opening('From', 'Response')">
	Je participe
</div>

<div id=View>
	<div id=View-content>
		<p class=bold>Titre</p>
		<p>Desc</p>
		<p>Date</p>
		<p>Lieu</p>
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

<?php
$content = ob_get_clean();
require_once 'template.php';
?>