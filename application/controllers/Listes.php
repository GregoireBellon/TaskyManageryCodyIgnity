<?php

	class Listes extends CI_Controller {

		public function show(){
			$this->load->model('Listes_model.php');
			$data=array(
				'nom_liste' => "Nom_Defaut",
				'droit' => "défaut"
			);
			$listes = $this->Listes_model->getListes(1);
			$data['nom_liste'] = $listes['nom_liste'];
			$this->load->view('pageListes.php', $data);
		}
	}

?>
