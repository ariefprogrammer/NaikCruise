<?php defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class MProductsFE extends CI_Model
{
	
	public function bestSeller()
	{
		$sql = $this->db->query("SELECT * FROM tb_products WHERE product_status = 'publish' LIMIT 9");
		return $sql->result();
	}
}


?>