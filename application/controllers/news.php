<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index()
	{
		$title = 'IPSSI NEWS';
		$data['news'] = $this->news_model->getNews();
		// on charge la view qui contient le corps de la page
    	$data['contents'] = 'page_contenu_view';	

    	// on charge la page dans le template
		$this->load->view("template/header",$data); 
		$this->load->view('news/list',$data);
		$this->load->view("template/footer"); 

	}


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */