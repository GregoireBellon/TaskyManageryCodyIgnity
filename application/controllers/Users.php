<?php


class Users extends CI_Controller
{
	//aficher nom d'un utilisateur
	public function displayUserName($id_user)
	{
		$this->load->model('users_model');
		$user = $this->users_model->get_user($id_user);
		$data['nom']=$user['nom_user'];
		$this->load->view('users_review',$data);
	}

	public function getIdFromUserName($username)
	{
		$this->load->model('users_model');
		$user = $this->users_model->getUserId($username);
		$data['id_user'] = $user['id_user'];
		return $data['id_user'];

	}

	public function redirectLoginPage()
	{

		//si clic sur bouton de connexion, alors vérification du remplissage des variables login et password
		if(isset($_POST['connecbutton']))
		{
			//echo 'clic sur bouton connexion';
			if(isset($_POST['login']))
			{
				//echo 'login rempli';
				if(isset($_POST['password']))
				{
					//echo 'mdp rempli';
					$this->connection($_POST['login'],$_POST['password']);

				}
			}


		}
		//si clic sur bouton d'inscription alors afficher vue inscription
		if(isset($_POST['sign_button']))
		{
			//echo 'clic sur bouton inscription';
			//récupération mdp et login si inscription
			if(isset($_POST['login']))
			{
				$_COOKIE['login']= $_POST['login'];
			}
			if(isset($_POST['password']))
			{
				$_COOKIE['password']= $_POST['password'];
			}
			$this->load->view('signin');
		}
	}


	//verification des login /pwd du formulaire
	public function connection($login,$pwd){
		$this->load->model('users_model');
		$connexionTrue = $this->users_model->verif_connex($login,$pwd);
		//prévoir d'envoyer l'id de l'utilisateur pour pouvoir afficher ses listes

		if($connexionTrue)
		{
			//on place le login dans la variable session pour pouvoir l'utiliser ensuite
			$_SESSION['login']=$login;
			//echo 'connexion réussie';
			//header("Location : http://51.91.122.109/CodyIgnity/index.php/listes/show/".$_SESSION['login']);
			//echo 'connexion réussie'

		}
		else {
			//affichage erreurs ! à garder !
			error_reporting(E_ALL | E_WARNING | E_NOTICE);
			ini_set('display_errors', TRUE);


			flush();
			header("Location : http://51.91.122.109/CodyIgnity/index.php");
			//echo 'connexion échouée';
		}

	}
}
