<?php
session_start();
require_once 'Manager.php';

class EventManager extends Manager {
	
	public function setEvent($data)	{
		if (!Manager::checkUserLoggedIn($_SESSION)) {
			// header('Location: index.php');
		} else {
			if (empty($data['titre']) || empty($data['date']) || empty($data['lieu'])) {
				// header('Location: index.php');
			} else {
				$db = $this->dbConnect();
				if ($data['description'] == "") {
					$description = NULL;
				} else {
					$description = $data['description'];
				}
				echo "banane";
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
			}
		}
		
	}
}