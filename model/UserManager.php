<?php

require_once 'Manager.php';

class UserManager extends Manager {

	public function setUser($data) {
		$db = $this->dbConnect();
		$sql = 'INSERT INTO personne (nom) VALUES (:nom)';
		$req = $db->prepare($sql);
		$req->execute(array(
			':nom' => $data['nom']
		));
		$sql = 'INSERT INTO utilisateur (id_personne, id, login, pwd)
				VALUES ((SELECT id FROM personne ORDER BY id DESC LIMIT 1),
						(SELECT id FROM personne ORDER BY id DESC LIMIT 1),
				:login, :pwd)';
		$req = $db->prepare($sql);
		$req->execute(array(
			':login' => htmlspecialchars($data['login']),
			':pwd'   => sha1($data['pwd'])
		));
		header('Location: index.php');

	}

	/**
	 * Connect an user
	 * @param  String $pseudo pseudo typed
	 * @param  String $pwd    pwd type
	 * @return boolean        true if good combination else false
	 */
	public function connectUser($login, $pwd) {
		$db = $this->dbConnect();
		$sql = 'SELECT U.id, P.nom FROM utilisateur U, personne P WHERE U.login = :login AND U.pwd = :pwd AND U.id_personne = P.id';
		$req = $db->prepare($sql);
		$req->execute(array(
			':login' => htmlspecialchars($login),
			':pwd'    => htmlspecialchars(sha1($pwd))
		));
		$data = $req->fetch();
		if ($data) {
			$_SESSION['id'] = $data['0'];
			$_SESSION['nom'] = $data['1'];
			return true;
		} else {
			return false;
		}
	}
}