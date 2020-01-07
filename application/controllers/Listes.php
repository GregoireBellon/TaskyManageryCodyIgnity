<?php
session_start();
	class Listes extends CI_Controller {

		public function show(){
			$this->load->model('Listes_model');
			$this->load->model('Users_model');

			$_SESSION['login'] = 'Greg'; // A supprimer quand le formulaire de connexion marchera

			$stmt = $this->Users_model->getUserId($_SESSION['login']); // On récupère l'id de l'utilisateur connecté
			$id = $stmt['id_user'];
			$data= $this->Listes_model->get_listes($id); // On récupère les listes qui sont stockées dans un tableau
			$data["msg_err"] = "Il n'y a aucune liste pour cet id";
			$this->load->view('pageListes', $data); // Le tableau est transmis lorsqu'on charge la vue
		}

		// Charge la page d'ajout d'une liste
		public function ajouter_liste(){
			$this->load->view('pageAjoutListe');
		}

		// Fonction pour créer une nouvelle liste
		public function nouvelle_liste(){
			$name = $_GET['nom_liste']; // Le nom vient du formulaire de création
			$this->load->model('Users_model');
			$id = $this->Users_model->getUserId($_SESSION['login']); // On récupère l'id de l'utilisateur
			$this->load->model('Listes_model');
			$this->Listes_model->add_list($name, $id); // On ajoute la liste
			$data= $this->Listes_model->get_listes($id); // On refait le tableau contenant les listes de l'utilisateur
			$data["msg_err"] = "Il n'y a aucune liste pour cet id";
			$this->load->view('pageListes', $data); // On recharge la vue avec le nouveau tableau
		}
	}

?>
