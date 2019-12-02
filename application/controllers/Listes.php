<?php

	class Liste extends CI_Controller{

		public function index(){
			$data=array(
				'id' => 1
			);
			$this->load->view('pageListes', $data);
		}

		public function show ($id){

		}
	}

?>
