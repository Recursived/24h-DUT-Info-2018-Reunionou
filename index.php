<?php

require_once 'controller/BasicController.php';

try {
	session_start();
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'index') {
			index();
		} elseif ($_GET['action'] == 'register') {
			register();
		} elseif ($_GET['action'] == 'addUser') {
			addUser();
		} elseif ($_GET['action'] == 'auth') {
			auth($_POST);
		} else {
			index();
		}
	} else {
		index();
	}
} catch (Exception $e) {
	echo "Erreur : " . $e->getMessage();
}