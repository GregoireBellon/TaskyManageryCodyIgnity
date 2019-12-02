<?php


class Users extends CI_Controller
{
	public function verif($id_user)
	{
			$this->load->model('users_model');
			$user = $this->users_model->get_user($id_user);
			$data['nom']=$user['nom_user'];
			$this->load->view('users_review',$data);
	}

}
