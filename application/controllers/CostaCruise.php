<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class CostaCruise extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("MCostaCruise");
	}

	public function index()
	{
		$data["allCosta"] = $this->MCostaCruise->getAll();
		$this->load->view("v_costaCruise", $data);
	}
}


?>