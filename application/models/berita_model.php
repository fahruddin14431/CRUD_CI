<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

	public function tampil_data_berita()
	{
		// get all data from database on tb_berita
		return $this->db->get('tb_berita');
	}

	function tambah_data_berita()
		{
				// get data
				$judul = $this->input->post('jud_ber');
				$isi = $this->input->post('isi_ber');
				$tanggal = $this->input->post('tgl');

				// set data to array
				$object = array(
								'judul_berita'=>$judul,
								'isi_berita'=>$isi,
								'tanggal'=>$tanggal
								);

				// insert array to database on tb_berita
				return $this->db->insert('tb_berita', $object);
		}	

		


		public function hapus_data_berita($id)
		{
			// deleting data from database on tb_berita
			return $this->db->delete('tb_berita',array('id_berita'=>$id));
		}

}

/* End of file berita_model.php */
/* Location: ./application/models/berita_model.php */