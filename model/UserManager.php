<?php

require_once 'Manager.php';

class UserManager extends Manager {

	public function setUser($data) {
		$db = $this->dbConnect();
		if (empty($data['login']) || empty($data['pwd']) || empty($data['nom'])) {
			require_once 'view/registerView.php';
		} else {
			$sql = 'INSERT INTO personne (nom) VALUES :nom';
			$req = $db->prepare($sql);
			$req->execute(array(
				':nom' => $data['nom']
			));
			$sql = 'INSERT INTO utilisateur (id_personne, login, pwd)
					VALUES ((SELECT id FROM personne ORDER BY id DESC LIMIT 1),
					:login, :pwd)';
			$req = $db->prepare($sql);
			$req->execute(array(
				':login' => $data['login'],
				':pwd' => sha1($data['pwd'])
			));
			header('Location: index.php');
		}
	}

	public function loginUser($data) {
		# code...
	}
}

$manager = new UserManager();
$_POST['login'] = "didier";
$_POST['nom'] = "charles";
$_POST['pwd'] = "banane";
$manager->setUser($_POST);