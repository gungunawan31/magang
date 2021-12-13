<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_project1 extends CI_Controller {

	public function index()
	{   
		$data['title'] = 'Data Perpindahan Bahan Nuklir';
		$data['batch1'] = $this->db->query("SELECT * FROM batch1")->result_array();
		$data['batch2'] = $this->db->query("SELECT * FROM batch2")->result_array();
		$data['batch3'] = $this->db->query("SELECT * FROM batch3")->result_array();
		$data['batch4'] = $this->db->query("SELECT * FROM batch4")->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/menu');
		$this->load->view('data_project1/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah_data()

	{  

		$this->form_validation->set_rules('lineno', 'Component', 'required');
		if( $this->form_validation->run() == false )
		{
			$data['title'] 	= 'Tambah Data';
			$this->load->view('template/header', $data);
			$this->load->view('template/menu');
			$this->load->view('data_project1/tambah_data', $data);
			$this->load->view('template/footer');
		} else {
			$data = [
					'lineno'	 		=> htmlspecialchars($this->input->post('lineno', true)),
					'kmp'	 		=> htmlspecialchars($this->input->post('kmp', true)),
					'tagno' 		=> htmlspecialchars($this->input->post('tagno', true)),
					'batch' 	=> htmlspecialchars($this->input->post('batch', true)),
					'item' 			=> htmlspecialchars($this->input->post('item', true)),
					'mdc' 		=> htmlspecialchars($this->input->post('mdc', true)),
					'lokasi' 		=> htmlspecialchars($this->input->post('lokasi', true)),
					'elementweight'				=> htmlspecialchars($this->input->post('elementweight', true)),
					'elementcode' 			=> htmlspecialchars($this->input->post('elementcode', true)),
					'u235' 	=> htmlspecialchars($this->input->post('u235', true)),
					'isotopeweight'			=> htmlspecialchars($this->input->post('isotopeweight', true)),
					'remarks'			=> htmlspecialchars($this->input->post('remarks', true))

			];
			
			$this->db->insert('batch1', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! kamu berhasil menambahkan data baru</div>');
			redirect('Data_project1/index');
		}

	}

	public function edit_data($id1)
	{   
		$this->form_validation->set_rules('lineno', 'Nama guru', 'required');

		if( $this->form_validation->run() == false )
		{

			$data['title'] 	= 'Edit Data';
			$data['batch1'] = $this->db->query("SELECT * FROM batch1 WHERE id1='$id1'")->row_array();
			$this->load->view('template/header', $data);
			$this->load->view('template/menu');
			$this->load->view('data_project1/edit_data', $data);
			$this->load->view('template/footer');

		} else {

			$lineno 			= htmlspecialchars($this->input->post('lineno', true));
			$kmp			= htmlspecialchars($this->input->post('kmp', true));
			$tagno			= htmlspecialchars($this->input->post('tagno', true));
			$batch 	= htmlspecialchars($this->input->post('batch', true));
			$item			= htmlspecialchars($this->input->post('item', true));
			$mdc		= htmlspecialchars($this->input->post('mdc', true));
			$lokasi			= htmlspecialchars($this->input->post('lokasi', true));
			$elementweight				= htmlspecialchars($this->input->post('elementweight', true));
			$elementcode			= htmlspecialchars($this->input->post('elementcode', true));
			$u235		= htmlspecialchars($this->input->post('u235', true));
			$isotopeweight			= htmlspecialchars($this->input->post('isotopeweight', true));
			$remarks			= htmlspecialchars($this->input->post('remarks', true));

			$this->db->set('lineno', $lineno);
			$this->db->set('kmp', $kmp);
			$this->db->set('tagno', $tagno);
			$this->db->set('batch', $batch);
			$this->db->set('item', $item);
			$this->db->set('mdc', $mdc);
			$this->db->set('lokasi', $lokasi);
			$this->db->set('elementweight', $elementweight);
			$this->db->set('elementcode', $elementcode);
			$this->db->set('u235', $u235);
			$this->db->set('isotopeweight', $isotopeweight);
			$this->db->set('remarks', $remarks);


			$this->db->where('id1', $id1);
			$this->db->update('batch1');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! kamu berhasil mengedit data</div>');
			redirect('Data_project1/index');
		}
	}

	public function pindah($id1)
	{

			$data = [
				'lineno' 		=> htmlspecialchars($this->input->post('lineno', true)),
				'kmp' 				=> htmlspecialchars($this->input->post('kmp', true)),
				'tagno' 		=> htmlspecialchars($this->input->post('tagno', true)),
				'batch' 				=> htmlspecialchars($this->input->post('batch', true)),
				'item' 		=> htmlspecialchars($this->input->post('item', true)),
				'mdc' 				=> htmlspecialchars($this->input->post('mdc', true)),
				'lokasi' 		=> htmlspecialchars($this->input->post('lokasi', true)),
				'elementweight' 				=> htmlspecialchars($this->input->post('elementweight', true)),
				'elementcode' 		=> htmlspecialchars($this->input->post('elementcode', true)),
				'u235' 				=> htmlspecialchars($this->input->post('u235', true)),
				'isotopeweight' 		=> htmlspecialchars($this->input->post('isotopeweight', true)),
				'remarks' 				=> htmlspecialchars($this->input->post('remarks', true))
			];

			// $data_1 = [
			// 	'id' 				=> htmlspecialchars($this->input->post('id', true)),
			// 	'nama_guru' 		=> htmlspecialchars($this->input->post('nama_guru', true))
		 	// ];

		 	if ($data == '')
		 	{
		 		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data belum lengkap</div>');
		 	}
		 	else 
		 	{
		 		$simpan = $this->db->insert('batch2', $data);

		 	
					
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! kamu berhasil menambahkan batch 2 baru</div>');
		 		}
			
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! kamu berhasil menambahkan batch 2 baru</div>');
			redirect('Data_project1/index');
		}

		public function pindah1($id2)
	{

			$data = [
				'lineno' 		=> htmlspecialchars($this->input->post('lineno', true)),
				'kmp' 				=> htmlspecialchars($this->input->post('kmp', true)),
				'tagno' 		=> htmlspecialchars($this->input->post('tagno', true)),
				'batch' 				=> htmlspecialchars($this->input->post('batch', true)),
				'item' 		=> htmlspecialchars($this->input->post('item', true)),
				'mdc' 				=> htmlspecialchars($this->input->post('mdc', true)),
				'lokasi' 		=> htmlspecialchars($this->input->post('lokasi', true)),
				'elementweight' 				=> htmlspecialchars($this->input->post('elementweight', true)),
				'elementcode' 		=> htmlspecialchars($this->input->post('elementcode', true)),
				'u235' 				=> htmlspecialchars($this->input->post('u235', true)),
				'isotopeweight' 		=> htmlspecialchars($this->input->post('isotopeweight', true)),
				'remarks' 				=> htmlspecialchars($this->input->post('remarks', true))
			];

			// $data_1 = [
			// 	'id' 				=> htmlspecialchars($this->input->post('id', true)),
			// 	'nama_guru' 		=> htmlspecialchars($this->input->post('nama_guru', true))
		 	// ];

		 	if ($data == '')
		 	{
		 		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data belum lengkap</div>');
		 	}
		 	else 
		 	{
		 		$simpan = $this->db->insert('batch3', $data);

		 	
					
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! kamu berhasil menambahkan batch4 baru</div>');
		 		}
			
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! kamu berhasil menambahkan siswa baru</div>');
			redirect('Data_project1/index');
		}

		public function pindah2($id3)
	{

			$data = [
				'lineno' 		=> htmlspecialchars($this->input->post('lineno', true)),
				'kmp' 				=> htmlspecialchars($this->input->post('kmp', true)),
				'tagno' 		=> htmlspecialchars($this->input->post('tagno', true)),
				'batch' 				=> htmlspecialchars($this->input->post('batch', true)),
				'item' 		=> htmlspecialchars($this->input->post('item', true)),
				'mdc' 				=> htmlspecialchars($this->input->post('mdc', true)),
				'lokasi' 		=> htmlspecialchars($this->input->post('lokasi', true)),
				'elementweight' 				=> htmlspecialchars($this->input->post('elementweight', true)),
				'elementcode' 		=> htmlspecialchars($this->input->post('elementcode', true)),
				'u235' 				=> htmlspecialchars($this->input->post('u235', true)),
				'isotopeweight' 		=> htmlspecialchars($this->input->post('isotopeweight', true)),
				'remarks' 				=> htmlspecialchars($this->input->post('remarks', true))
			];

			// $data_1 = [
			// 	'id' 				=> htmlspecialchars($this->input->post('id', true)),
			// 	'nama_guru' 		=> htmlspecialchars($this->input->post('nama_guru', true))
		 	// ];

		 	if ($data == '')
		 	{
		 		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data belum lengkap</div>');
		 	}
		 	else 
		 	{
		 		$simpan = $this->db->insert('batch4', $data);

		 	
					
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! kamu berhasil menambahkan siswa baru</div>');
		 		}
			
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! kamu berhasil menambahkan siswa baru</div>');
			redirect('Data_project1/index');
		}


	public function hapus_data($id1)
	{
		$this->Data_model->hapusdata($id1);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! kamu berhasil menghapus data</div>');
		redirect('Data_project1/index');
	}

	public function hapus_data1($id2)
	{
		$this->Data_model->hapusdata1($id2);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! kamu berhasil menghapus data</div>');
		redirect('Data_project1/index');
	}

	public function hapus_data2($id3)
	{
		$this->Data_model->hapusdata2($id3);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! kamu berhasil menghapus data</div>');
		redirect('Data_project1/index');
	}

	public function hapus_data3($id4)
	{
		$this->Data_model->hapusdata3($id4);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! kamu berhasil menghapus data</div>');
		redirect('Data_project1/index');
	}
}
