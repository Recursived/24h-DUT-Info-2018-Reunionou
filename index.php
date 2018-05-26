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
			addUser($_POST);
		} elseif ($_GET['action'] == 'auth') {
			auth($_POST);
		} elseif ($_GET['action'] == 'addEvent') {
			setEvent($_POST);
		} elseif ($_GET['action'] == 'invit') {
			invit();
		} elseif ($_GET['action'] == 'event') {
			event($_POST);
		} elseif ($_GET['action'] == 'participate') {
			joinEvent($_POST);
		} elseif ($_GET['action'] == 'logout') {
			logout();
		} else {
			index(); 
		}
	} else {
		index();
	}
} catch (Exception $e) {
	echo "Erreur : " . $e->getMessage();
}