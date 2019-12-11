<?php

	class Listes extends CI_Controller {

		public function show(){
			$this->load->model('Listes_model');
			$data= $this->Listes_model->getListes(1);
			$this->load->view('pageListes', $data);
		}
	}

?>
