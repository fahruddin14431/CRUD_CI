<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index()
	{	
		$data['konten'] = 'konten_berita_view';
		$data['header'] = 'Daftar Berita';
		$data['data'] 	= $this->berita_model->tampil_data_berita()->result_object();
		$this->load->view('berita_view',$data);
	}

	public function form_tambah_berita()
	{	
		// button pressed
		if($this->input->post('submit'))
		{
			// validation form
			$this->form_validation->set_rules('jud_ber', 'Judul Berita', 'trim|required');
			$this->form_validation->set_rules('isi_ber', 'Isi Berita', 'trim|required');

			if ($this->form_validation->run() === FALSE)
			{	
				// showing error validation
				$data['konten'] = 'tambah_berita_view';
				$data['header'] = 'Tambah Berita';
				$this->load->view('berita_view',$data);
			}
			else
			{	
				// get data from model
				$query = $this->berita_model->tambah_data_berita();

				if ($query) 
				{
					$this->session->set_flashdata('info','Berhasil tambah data');
					redirect('berita');
				}
			}
		}
		else
		{	
			$data['konten'] = 'tambah_berita_view';
			$data['header'] = 'Tambah Berita';
			$this->load->view('berita_view',$data);
		}
	}

	public function edit_data($id)
	{
		// button pressed
		if($this->input->post('submit'))
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

				// update data where id
				$this->db->where('id_berita', $id);
				$this->db->update('tb_berita', $object);

				$this->session->set_flashdata('info','Data berita berhasil diupdate');
				redirect('berita')			;
			}else{
				$data['konten'] = 'edit_berita_view';
				$data['header'] = 'Edit Berita';
				$data['data_berita'] = $this->db->get_where('tb_berita',array('id_berita'=>$id))->result_object();
				$this->load->view('berita_view',$data);
			}
	}

	

	public function hapus_data($id)
	{
		$query = $this->berita_model->hapus_data_berita($id);
		$this->session->set_flashdata('info','Data berita berhasil dihapus');
		redirect('berita');
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */