<?php


class Listes_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_listes($id){

		$this->db->select('nom_liste');
		$this->db->from('Liste');
		$this->db->join('Privileges', 'Liste.id_liste = Privileges.id_liste');
		$this->db->join('Utilisateur', 'Utilisateur.id_user = Privileges.id_user');
		$this->db->where('Utilisateur.id_user', $id);
		$requete = $this->db->get();
		$data = array();
		for ($i = 0; $i < $requete->num_rows(); $i++){
			$nom = 'liste_'.$i;
			$ligne = $requete->row($i);
			$data[$nom] = $ligne->nom_liste;
		}
		return $data;
	}

	public function add_list($name){
		$data_liste = array(
			'nom_liste'=>$name
		);
		$this->db->insert('Liste', $data_liste);
		$this->db->select_max('id_liste');
		$this->db->from('Liste');
		$result = $this->db->get()->row();
		$last_id = $result->id_liste;
		$data_privi = array(
			'id_liste'=>$last_id,
			'id_user'=>1,
			'droit'=>'tout'
		);
		$this->db->insert('Privileges', $data_privi);
	}
}
