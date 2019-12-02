<?php


class Listes_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function getListes($id){
		$requete = $this->db->get_where("Listes", array('id_liste'=>$id));
		return $requete->row_array();
	}
}
