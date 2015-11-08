<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function view($page = 'home') {
		if (!file_exists('application/views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page);
		// Capitalize the first letter

		$this -> load -> view('template/header', $data);
		$this -> load -> view('pages/' . $page, $data);
		$this -> load -> view('template/footer', $data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */