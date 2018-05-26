<?php

class Manager {
	
	/**
	 * Connect to the database
	 * @return PDO Object
	 */
	protected function dbConnect() {
		// require_once 'dblog.php';
		$host = "91.219.107.219";
		$user = "arman956025";
		$pwd = "ajwphgiygh";
		$db = "arman956025";
		$connect = 'mysql:host=' . $host . ';dbname=' . $db;
		$db = new PDO($connect, $user, $pwd);
		$db->exec('SET NAMES UTF8');
		return $db;
	}

	/**
	 * check if an user is logged in
	 * @param  array $session $_SESSION
	 * @return boolean
	 */
	public static function checkUserLoggedIn($session) {
		if (isset($session['id'])) {
			return true;
		} else {
			return false;
		}
	}

	public static function makeAlert($type, $msg) {
		$goodType = ['success', 'danger'];
		if (!in_array($type, $goodType)) {
			return NULL;
		}
		ob_start(); ?>
		<div class="alert alert-<?= $type ?> alert-dismissible fade show">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?= $msg ?>
		</div>
		<?php
		$alert = ob_get_clean();
		return $alert;
	}
}