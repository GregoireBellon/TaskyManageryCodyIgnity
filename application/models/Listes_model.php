<?php

class Listes_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_listes($id){

		// Requête SQL pour récupérer uniquement les listes correspondant à l'id passé en paramètre
		$this->db->select('nom_liste');
		$this->db->from('Liste');
		$this->db->join('Privileges', 'Liste.id_liste = Privileges.id_liste');
		$this->db->join('Utilisateur', 'Utilisateur.id_user = Privileges.id_user');
		$this->db->where('Utilisateur.id_user', $id);
		$requete = $this->db->get();
		$data = array();

		// Chaque ligne renvoyée par la requête est mise dans une case du tableau
		// (une case contient une ligne complète avec toutes les infos sur la liste)
		for ($i = 0; $i < $requete->num_rows(); $i++){
			$nom = 'liste_'.$i;
			$ligne = $requete->row($i);
			$data[$nom] = $ligne->nom_liste;
		}
		return $data;
	}


	public function add_list($name, $id){

		// Premier array contenant les infos à entrer dans la BDD
		// Pour liste, seul le nom est nécessaire, le reste est entré automatiquement (id en auto_increment et date par défaut)
		$data_liste = array(
			'nom_liste'=>$name
		);
		// Insertion des données dans la table liste
		$this->db->insert('Liste', $data_liste);

		// Récupération de l'id de la liste qui vient d'être créée
		$this->db->select_max('id_liste');
		$this->db->from('Liste');
		$result = $this->db->get()->row();
		$last_id = $result->id_liste; // La variable last_id contient l'id de la liste venant d'être créée

		// Deuxième array qui contient les infos à entrer dans la table privileges
		$data_privi = array(
			'id_liste'=>$last_id,
			'id_user'=>$id,
			'droit'=>'tout'
		);

		// Ajout des données
		$this->db->insert('Privileges', $data_privi);
	}
}
