<?php 
defined('BASEPATH') OR exit ('No direct script allowed');

/**
 * 
 */
class Blogs extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{
		//
	}

	public function add()
	{
		$this->load->view("admin/v_AddBlog");
	}
}
?>