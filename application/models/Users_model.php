<?php


class Users_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_user($id)
	{
		if($id !=FALSE)
		{
			$query = $this->db->get_where('Utilisateur', array('id_user'=> $id));
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}

		public function getUserId($login)
		{
			if($login !=FALSE)
			{
				$query = $this->db->get_where('Utilisateur', array('nom_user'=> $login));
				return $query->row_array();
			}
			else
			{
				return false;
			}
		}

	public function verif_connex($username,$pwd)
	{
		if($username!=FALSE)
		{
			$query = $this->db->get_where('Utilisateur', array('nom_user'=>$username));
			$result = $query->row_array();
			if($result['mdp_user']===$pwd)
			{
				return true;
			}
		}
		return false;
	}


}
