<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class MBlog extends CI_Model
{
	
	public function dd_status()
	{
		$sql = $this->db->query("SELECT * FROM tb_status");
		return $sql->result();
	}

	public function dd_category()
	{
		$sql = $this->db->query("SELECT * FROM tb_categories");
		return $sql->result();
	}

	public function save($post)
	{
		$title_blog = $this->db->escape($post["title_blog"]);
		$content_blog = $this->db->escape($post["content_blog"]);
		$id_category = $this->db->escape($post["id_category"]);
		$id_status = $this->db->escape($post["id_status"]);

		$sql = $this->db->query("INSERT INTO tb_blogs VALUES (NULL, $title_blog, $content_blog, $id_category, $id_status)");

		if($sql){
			return true;
		}else{
		return false;
		}
	}

	public function getAll()
	{
		$this->db->select('tb_blogs.*, tb_status.*, tb_categories.*');
		$this->db->from('tb_blogs');
		$this->db->join('tb_status', 'tb_blogs.id_status = tb_status.id_status');
		$this->db->join('tb_categories', 'tb_blogs.id_category = tb_categories.id_category');		
		return $this->db->get()->result();
	}

}

?>