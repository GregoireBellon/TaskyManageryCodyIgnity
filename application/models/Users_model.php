<?php


class Users_model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_user($id)
	{
		if($id !=FALSE)
		{
			$query = $this->db->get_where('Utilisateur', array('id'=> $id));
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}


}
