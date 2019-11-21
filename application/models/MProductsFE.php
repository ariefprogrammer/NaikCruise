<?php defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class MProductsFE extends CI_Model
{
	
	public function bestSeller()
	{
		$sql = $this->db->query("SELECT * FROM tb_products WHERE id_status = 2 LIMIT 9");
		return $sql->result();
	}

	public function getAll()
	{
		$sql = $this->db->query("SELECT *FROM tb_products");
		return $sql->result();
	}
}


?>