<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();			
	}

	public function getNews ($id = FALSE){
		if ($id === FALSE) {
			$query = $this->db->get('news');
			return $query->result_array();		
		}

		$query = $this->db->get_where('news', array('id' => $id ));
		return $query->row_array();
	}


}

/* End of file news_models.html */
/* Location: ./application/models/news_models.html */