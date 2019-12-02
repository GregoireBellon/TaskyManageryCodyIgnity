<?php


class SignIn extends CI_Controller
{
	public function verif($id_user)
	{
			$this->load->model('Users_model');
			$user = $this->users_model->get_user($id_user);
			$data['nom']=$user['nom_user'];
			$this->load->view('movie_review',$data);
	}

}
