<?php

require_once 'controller/BasicController.php';

try {
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'index') {
			index();
		} else {
			// Redirection index ou erreur 404
		}
	} else {
		index();
	}
} catch (Exception $e) {
	echo "Erreur : " . $e->getMessage();
}