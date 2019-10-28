<?php defined('BASEPATH') OR exit ('No direct script access allowed');


/**
 * 
 */
class MProducts extends CI_Model
{
	
	public function save($post)
	{
		//$code = $this->db->escape($post["code"]);
		$product_name = $this->db->escape($post["product_name"]);
		$product_code = $this->db->escape($post["product_code"]);

		$sql = $this->db->query("INSERT INTO tb_products VALUES (NULL, $product_name, $product_code, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)");

		if($sql){
			return true;
		}else{
		return false;
		}
	}
}
?>