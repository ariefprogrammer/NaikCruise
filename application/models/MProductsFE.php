<?php defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class MProductsFE extends CI_Model
{
	
	public function bestSeller()
	{
		// $this->db->select('tb_products.*, tb_ships_list.*');
		// $this->db->from('tb_products');
		// $this->db->join('tb_ships_list', 'tb_products.id_ship_list = tb_ships_list.id_ship_list');
		// $this->db->where('id_status', 2);		
		// return $this->db->get()->result();
		// $sql = $this->db->query("SELECT * FROM tb_products WHERE id_status = 2 LIMIT 9");
		// return $sql->result();

		$sql = $this->db->query("SELECT tb_products.*, tb_ships_list.* FROM tb_products INNER JOIN tb_ships_list ON tb_products.id_ship_list=tb_ships_list.id_ship_list WHERE id_status=2 LIMIT 12;");
		return $sql->result();
	}

	public function getAll()
	{
		$this->db->select('tb_products.*, tb_ships_list.*');
		$this->db->from('tb_products');
		$this->db->join('tb_ships_list', 'tb_products.id_ship_list = tb_ships_list.id_ship_list');		
		return $this->db->get()->result();
	}
}


?>