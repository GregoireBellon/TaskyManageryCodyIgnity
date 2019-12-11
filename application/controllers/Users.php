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

	public function connection($username,$pwd){
		$this->load->model('users_model');
		$connexionTrue = $this->users_model->verif_connex($username,$pwd);
		//prévoir d'envoyer l'id de l'utilisateur pour pourvoir afficher ses listes
		if($connexionTrue)
		{
			$this->load->view('pageListes');
		}
		else {
			//afficher erreurs
		}

	}

}
