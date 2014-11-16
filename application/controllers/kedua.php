<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kedua extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//memanggil model m_belajar
		$this->load->model('m_belajar');
	}

	public function index()
	{
		//memanggil method get_data() utk mengambil data
		$data['result'] = $this->m_belajar->get_data();

		//meload page kedua_view di parameter ke-1, dan memparsing $data ke view di parameter ke-2.. 
		$this->load->view('kedua_view',$data);	
	}

}

/* End of file kedua.php */
/* Location: ./application/controllers/kedua.php */