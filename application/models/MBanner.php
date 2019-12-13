<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class MBanner extends CI_Model
{
	
	public function insert($data)
  {
      $this->db->insert('tb_banner',$data);
      return TRUE;
  }



}
?>