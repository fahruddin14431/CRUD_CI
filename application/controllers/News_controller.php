<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_model');
	}

	public function index()
	{
		$data['data_dari_model']	= $this->data_model->ambil_data();
		$this->load->view('template',$data);
	}


	// public function get_news()
	// {
	// 	$data['judul'] = "judul berita from get news";
	// 	$data['isi'] = " Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	// 					 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	// 					 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	// 					 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	// 					 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	// 					 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

	// 	$this->load->view('template',$data);
	// }

}

/* End of file News_controller.php */
/* Location: ./application/controllers/News_controller.php */