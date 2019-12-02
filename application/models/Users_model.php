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


}
