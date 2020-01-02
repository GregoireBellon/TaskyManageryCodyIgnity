<?php


class Listes_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function getListes($id){

		$this->db->select('nom_liste');
		$this->db->from('Liste');
		$this->db->join('Privileges', 'Liste.id_liste = Privileges.id_liste');
		$this->db->join('Utilisateur', 'Utilisateur.id_user = Privileges.id_user');
		$requete = $this->db->get();
		for ($i = 0; i < $requete->num_rows(); $i++){
			$ligne = $requete->row_array($i);
			$data[$i] = $ligne['nom_liste'];
		}
		return $data;
	}
}
