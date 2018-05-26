<?php

class EventManager extends Manager {

	public function setEvent($data)	{
		if (!Manager::checkUserLoggedIn($_SESSION)) {
			// header('Location: index.php');
		} else {
			$db = $this->dbConnect();
			if ($data['description'] == "") {
				$description = NULL;
			} else {
				$description = $data['description'];
			}
			$slug = sha1('title'.$_SESSION['nom']);
			$sql = 'INSERT INTO evenement (titre, description, date, lieu, lien, id_personne_utilisateur, id_utilisateur)
					VALUES (:titre, :description, :date, :lieu, :lien, :id1, :id2)';
			$req = $db->prepare($sql);
			$req->execute(array(
				':titre'       => $data['titre'],
				':description' => $description,
				':date'        => $data['date'],
				':lieu'        => $data['lieu'],
				':lien'        => $slug,
				':id1'         => $_SESSION['id'],
				':id2'         => $_SESSION['id']
			));
			header('Location: index.php');
		}
	}

	public function joinEvent($data) {
		$db = $this->dbConnect();
		if (!Manager::checkUserLoggedIn($_SESSION)) {
			$sql = 'INSERT INTO personne (nom) VALUES (:nom)';
			$req = $db->prepare($sql);
			$req->execute(array(
				':nom' => $data['nom']
			));
			$sql = 'SELECT id FROM personne ORDER BY id DESC LIMIT 1';
			$req = $db->query($sql);
			$dataT = $req->fetch();
			$idUser = $dataT['0'];
		} else {
			$idUser = $_SESSION['id'];
		}
		$sql = 'INSERT INTO participe VALUES (:idUser, :idEvent, :reponse, :comment)';
		$req = $db->prepare($sql);
		$req->execute(array(
			':idUser'  => $idUser,
			':idEvent' => $data['idEvent'],
			':reponse' => $data['reponse'],
			':comment' => $data['comment']
		));
	}

	public function getEvents($idUser) {
		$db = $this->dbConnect();
		$sql = 'SELECT * FROM evenement WHERE id_utilisateur = :idUser';
		$req = $db->prepare($sql);
		$req->execute(array(
			':idUser' => $idUser
		));
		return $req;
	}

	public function getEvent($link)	{
		$db = $this->dbConnect();
		$sql = 'SELECT E.titre, E.description, E.date, E.lieu, PE.nom, PA.reponse, PA.commentaire 
				FROM evenement E, participe PA, personne PE 
				WHERE E.lien = :link AND PA.id_evenement = E.id AND PE.id = PA.id';
		$req = $db->prepare($sql);
		$req->execute(array(
			':link' => htmlspecialchars($link)
		));
		return $req;
	}

	public function alreadyChecked($idEvent, $idUser) {
		$db = $this->dbConnect();
		$sql = 'SELECT * FROM participe';
		$req = $db->query($sql);
		$data = $req->fetch();
		if ($data) {
			return true;
		} else {
			return false;
		}
	}
}