<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class DreamCruise extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mhome");
	}

	public function index(){
		//code here
	}
}
?>