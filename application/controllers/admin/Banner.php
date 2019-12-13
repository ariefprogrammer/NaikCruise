<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Banner extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('MBanner');
	}

	public function index()
	{
		$this->load->view("");
	}

	public function add()
	{
		//this for view
		$this->load->view("admin/v_formBanner");
	}

	public function add_process()
	{
		$name   = $this->input->post('name');
      	$slug = $this->input->post('slug');

      // get foto
      	$config['upload_path'] = './images';
      	$config['allowed_types'] = 'jpg|png|jpeg|gif';
      	$config['max_size'] = '2048';  //2MB max
      	$config['file_name'] = $_FILES['fotopost']['name'];

     	$this->upload->initialize($config);

	    if (!empty($_FILES['fotopost']['name'])) {
	        if ( $this->upload->do_upload('fotopost') ) {
	            $foto = $this->upload->data();
              //array (field_db => variable )
	            $data = array(
	                          	'name'       => $name,
                            	'foto'       => $foto['file_name'],
	                          	'slug'     => $slug,
	                        );
							$this->MBanner->insert($data);
              redirect('');
	        }else {
              die("gagal upload");
	        }
	    }else {
	      echo "tidak masuk";
	    }

  	}
}


?>