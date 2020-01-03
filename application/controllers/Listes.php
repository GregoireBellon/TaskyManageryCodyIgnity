<?php

	class Listes extends CI_Controller {

		public function show($id){
			$this->load->model('Listes_model');
			$data= $this->Listes_model->get_listes($id);
			$data["msg_err"] = "Il n'y a aucune liste pour cet id";
			$this->load->view('pageListes', $data);
		}

		public function ajouter_liste(){
			$this->load->view('pageAjoutListe');
		}

		public function nouvelle_liste(){
			$name = $_GET['nom_liste'];
			$this->load->model('Listes_model');
			$this->Listes_model->add_list($name);
			$data= $this->Listes_model->get_listes(1);
			$data["msg_err"] = "Il n'y a aucune liste pour cet id";
			$this->load->view('pageListes', $data);
		}
	}

?>
