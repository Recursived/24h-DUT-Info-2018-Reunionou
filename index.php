<?php

require_once 'controller/BasicController.php';

try {
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'index') {
			index();
		} elseif ($_GET['action'] == 'register') {
			register();
		} else {
			index();
		}
	} else {
		index();
	}
} catch (Exception $e) {
	echo "Erreur : " . $e->getMessage();
}