<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class MBlogFE extends CI_Model
{
	
	public function howToGetTicket()
	{
		$sql = $this->db->query("SELECT * FROM tb_blogs WHERE id_category = 1 ORDER BY id_category DESC LIMIT 1");
		return $sql->row();
	}

}
?>