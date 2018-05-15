<?php

class Manager {
	
	/**
	 * Connect to the database
	 * @return PDO Object
	 */
	protected function dbConnect() {
		require_once 'dblog.php';
		$db = new PDO($connect, $user, $pwd);
		$db->exec('SET NAMES UTF8');
		return $db;
	}

	public function sayHello() {
		$db = $this->dbConnect();
		return "Hello";
	}
}