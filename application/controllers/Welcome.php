<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("supplier_model");
		$this->load->model("bobot_model");
	}
	
	public function index()
	{
		$data['title'] = 'Sistem Optimasi Bobot';
		$data['nav'] = '1';
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('blank', $data);
		$this->load->view('_partials/foot', $data);
	}
	
	public function hitung($id)
	{
		$data['title'] = 'Bobot Supplier';
		$data['supplier'] = $this->db->get_where('tb_supplier', ['id_anggota' => $id])->row_array();
		for( $i=1; $i<=10; $i++){
			$data['bobot_supplier'.$i] = $this->db->get_where('tb_bobot', ['id_anggota' => $id, 'id_kriteria'=>$i])->row_array();
		}
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('hitung', $data);
		$this->load->view('_partials/foot', $data);
	}
	
	public function bobot_supplier()
	{
		$nama_anggota	= $this->input->post('nama_anggota');
		$query			= $this->bobot_model->create();
		
		if ($query) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data bobot ' . $nama_anggota . ' tersimpan</div>');
			redirect('welcome/supplier');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data bobot' . $nama_anggota . ' gagal tersimpan</div>');
			redirect('welcome/supplier');
		}
	}
	
	public function profil()
	{
		$data['title'] = 'User Profile';
		$data['nav'] = '2';
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('profil', $data);
		$this->load->view('_partials/foot', $data);
	}
	
	public function supplier()
	{
		$data['title'] = 'Data Supplier';
		$data['nav'] = '3';
		$data['supplier'] = $this->supplier_model->getAll();
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('supplier', $data);
		$this->load->view('_partials/foot', $data);
	}

	public function optimasi()
	{
		$data['title'] = 'Optimasi Bobot';
		$data['nav'] = '4';
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('optimasi', $data);
		$this->load->view('_partials/foot', $data);
	}
	
	public function add_supplier()
	{
		$data['title'] = 'Tambah Data Supplier';
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('add_supplier', $data);
		$this->load->view('_partials/foot', $data);
	}

	public function create_data_supplier()
	{
		$data['title'] = 'Tambah Data Supplier';
		$nama_anggota	= $this->input->post('nama_anggota');
		$query = $this->supplier_model->create();

		if ($query) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ' . $nama_anggota . ' tersimpan</div>');
			redirect('welcome/supplier');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data ' . $nama_anggota . ' tidak tersimpan</div>');
			redirect('welcome/supplier');
		}
	}

	public function update_supplier($id)
	{
		$data['title'] = 'Ubah Data Supplier';
		$data['supplier'] = $this->db->get_where('tb_supplier', ['id_anggota' => $id])->row_array();
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('update_supplier', $data);
		$this->load->view('_partials/foot', $data);
	}

	public function delete_supplier()
	{
		$id					= $this->input->post('id_anggota');
		$nama_belum_ubah	= $this->input->post('nama_belum_ubah');
		$query = $this->supplier_model->delete();

		if ($query) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data' . $nama_belum_ubah . ' telah terhapus</div>');
			redirect('welcome/supplier');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data ' . $nama_belum_ubah . ' gagal terhapus</div>');
			redirect('welcome/supplier');
		}
	}

	public function edit_supplier()
	{
		$id					= $this->input->post('id_anggota');
		$nama_belum_ubah	= $this->input->post('nama_belum_ubah');
		$query = $this->supplier_model->update();

		if ($query) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ' . $nama_belum_ubah . ' telah diubah</div>');
			redirect('welcome/supplier');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data ' . $nama_belum_ubah . ' gagal diubah</div>');
			redirect('welcome/supplier');
		}
	}
}
