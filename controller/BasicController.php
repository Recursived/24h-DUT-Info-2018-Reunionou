<?php

require_once 'model/Manager.php';
require_once 'model/UserManager.php';
require_once 'model/EventManager.php';

function index() {
	if (Manager::checkUserLoggedIn($_SESSION)) {
		$manager = new EventManager();
		$dataEvents = $manager->getEvents($_SESSION['id']);
		require_once 'view/eventsView.php';
	} else {
		require_once 'view/indexView.php';
	}
}

function register() {
	if (Mangager::checkUserLoggedIn($_SESSION)) {
		require_once 'view/indexView.php';
	} else {
		require_once 'view/registerView.php';
	}
}

function auth($data) {
	if (empty($data['login']) || empty($data['pwd'])) {
		header('Location: index.php');
	} else {
		$manager = new UserManager();
		$manager->connectUser($data['login'], $data['pwd']);
		header('Location: index.php');
	}
}

function setEvent($data) {
	if (empty($data['titre']) || empty($data['date']) || empty($data['lieu'])) {
		header('Location: index.php');
	} else {
		$manager = new EventManager();
		$manager->setEvent($data);
		header('Location: index.php');
	}
}

function invit() {
	require_once 'view/invitationView.php';
}

function addUser($data) {
	if (empty($data['login']) || empty($data['pwd']) || empty($data['nom'])) {
		require_once 'view/indexView.php';
	} else {
		$manager = new UserManager();
		$manager->setUser($data);
	}
}

function event($data) {
	require_once 'view/eventView.php';
}