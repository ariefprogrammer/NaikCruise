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
		$data["allProducts"] = $this->MProducts->getAll();
		$this->load->view("admin/v_ListProducts", $data);
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
		$data["published"] = $this->MProducts->published();
		$this->load->view("admin/v_PublishedProducts", $data);
	}

	public function draft()
	{
		$data["draft"] = $this->MProducts->draft();
		$this->load->view("admin/v_DraftProducts", $data);
	}

	public function lihat($id)
	{
		$data["product"] = $this->MProducts->getById($id);
		$this->load->view("admin/v_DetailsProduct", $data);
	}

	public function update($id)
	{
		if (isset($_POST['update_product'])) {
			$this->MProducts->update($_POST, $id);
			redirect("admin/products");
		}
		$data["edit"] = $this->MProducts->getById($id);
		$this->load->view("admin/v_EditProduct", $data);
	}

	public function deleteList($id)
	{
		if ($this->MProducts->deleteList($id)) {
			redirect("admin/products");
		}
	}

	public function deletePublished($id)
	{
		if ($this->MProducts->deleteList($id)) {
			redirect("admin/products/published");
		}
	}

	public function deleteDraft($id)
	{
		if ($this->MProducts->deleteList($id)) {
			redirect("admin/products/draft");
		}
	}
}

?>