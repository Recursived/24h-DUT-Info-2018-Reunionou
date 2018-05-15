<?php

require_once 'model/Manager.php';

function index() {
	$manager = new Manager();
	$hello = $manager->sayHello();
	require_once 'view/indexView.php';
}