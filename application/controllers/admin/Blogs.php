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
		$this->load->model('MBlog');
	}

	public function index()
	{
		$data["allBlogs"] = $this->MBlog->getAll();
		$this->load->view("admin/v_ListBlogs", $data);
	}

	public function add()
	{
		if (isset($_POST['submit_blog'])) {
			$this->MBlog->save($_POST);
			redirect('admin/');
		}
		$data["dd_status"] = $this->MBlog->dd_status();
		$data["dd_category"] = $this->MBlog->dd_category();
		$this->load->view("admin/v_AddBlog", $data);
	}

	public function update()
	{
		//
	}
}
?>