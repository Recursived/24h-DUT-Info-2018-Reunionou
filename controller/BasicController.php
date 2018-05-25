<?php

require_once 'model/Manager.php';

function index() {
	if (Manager::checkUserLoggedIn($_SESSION)) {
		// TODO: information about user (like event)
		require_once 'view/indexView.php';
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