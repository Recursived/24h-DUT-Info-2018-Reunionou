<?php
$title = 'Index';
$dataI = $dataInfo->fetch();

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
			<p class=bold><?= $dataI['0'] ?></p>
			<p><?= $dataI['1'] ?></p>
			<p><?= $dataI['2'] ?></p>
			<p><?= $dataI['3'] ?></p>
		</div>
		<div id=Participants>
			<h1>Participants</h1>
			<table>
				<?php while($data = $dataEvent->fetch()): ?>
				<tr>
					<td><?= $data['4'] ?> |</td>
					<td><?= $data['6'] ?></td>
				</tr>
			<?php endwhile; ?>
			</table>
			<p>Lien de partage : armandcolin.fr/24h/index.php?action=event&link=<?php $_GET['link'] ?></p>
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
			<input name="idEvent" value="<?php $manager=new EventManager(); echo $manager->getIdEventBySlug($_GET['link']) ?>" hidden>
			<input class=input type="text" name="com">
			<input type="submit" value="Valider">
		</form>
	</div>
</div>


<?php
$content = ob_get_clean();
require_once 'template.php';
?>