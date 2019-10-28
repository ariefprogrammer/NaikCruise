<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Products extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MProducts');
		//$this->load->model('MProducts');
	}

	public function index()
	{
		$this->load->view("admin/v_ListProducts");
	}

	public function add()
	{
		if(isset($_POST['submit_product'])){
			$this->MProducts->save($_POST);
			redirect("admin/products");
		}
		$this->load->view("admin/v_AddProduct");
	}

	public function published()
	{
		$this->load->view("admin/v_PublishedProducts");
	}

	public function draft()
	{
		$this->load->view("admin/v_DraftProducts");
	}
}

?>