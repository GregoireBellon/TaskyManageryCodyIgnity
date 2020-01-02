<?php

	class Listes extends CI_Controller {

		public function show($id){
			$this->load->model('Listes_model');
			$data= $this->Listes_model->getListes($id);
			$data["msg_err"] = "Il n'y a aucune liste pour cet id";
			$this->load->view('pageListes', $data);
		}
	}

?>
