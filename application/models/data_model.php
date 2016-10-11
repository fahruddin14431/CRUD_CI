<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {

	public function ambil_data()
		{
			$data  = array(
							'artikel1'=>array(	
									'judul' => "judul from model 1", 
									'isi' => "isi from model 1" 
								),
							'artikel2'=>array(	
									'judul' => "judul from model 2", 
									'isi' => "isi from model 2" 
								),
							'artikel3'=>array(	
									'judul' => "judul from model 3", 
									'isi' => "isi from model3" 
								),							
							);
			return $data;
		}	

}

/* End of file data_model.php */
/* Location: ./application/models/data_model.php */