<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OurShips extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();

	}

	public function index()
	{
		$this->load->view("v_ourShip");
	}

	public function costa()
	{
		$this->load->view("costaCruise/v_costaCruise");
	}
}

?>