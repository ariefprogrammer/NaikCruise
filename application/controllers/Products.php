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
		$this->load->model("MProductsFE");

	}

	public function index()
	{
		$data["allProducts"] = $this->MProductsFE->getAll();
		$this->load->view("v_products", $data);

	}
}

?>