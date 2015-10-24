<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// on charge la view qui contient le corps de la page
    	$data['contents'] = 'page_contenu_view';	

    	// on charge la page dans le template
		$this->load->view('template/template', $data, FALSE);

	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */