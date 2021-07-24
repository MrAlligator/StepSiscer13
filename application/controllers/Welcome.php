<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("supplier_model");
		$this->load->model("bobot_model");
		$this->load->model("user_model");
		$this->load->model("skor_model");
		$this->load->model("kriteria_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['supplier']	= $this->supplier_model->getAll();
		$data['admin']	= $this->user_model->getAdmin();
		$data['user']	= $this->user_model->getUser();
		$data['title']	= 'Sistem Optimasi Bobot';
		$data['nav']	= '1';
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('_partials/foot', $data);
	}
	
	public function bobot_supplier($id){
		$data['title']		= 'Bobot Supplier';
		$data['nav']		= '3';
		$data['supplier']	= $this->db->get_where('tb_supplier', ['id_anggota' => $id])->row_array();
		$data['kriteria']	= $this->supplier_model->getKriteria();
		$data['bobot_supplier'] = $this->db->get_where('tb_bobot', ['id_anggota' => $id])->row_array();
		
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('bobot_supplier', $data);
		$this->load->view('_partials/foot', $data);
	}
	
	public function input_bobot()
	{
		$nama_anggota	= $this->input->post('nama_anggota');
		$id				= $this->input->post('id_anggota');
		$id_anggota		= $this->input->post('id_anggota');
		$data['nav']	= '3';
		$cek 			= $this->db->get_where('tb_bobot', ['id_anggota' => $id])->row_array();
		
		$this->db->query("INSERT INTO tb_skor (id_anggota, skor) VALUES ($id_anggota, 100)");
		
		if ($cek==0){
			if ($this->bobot_model->create()) {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data bobot ' . $nama_anggota . ' tersimpan</div>');
				redirect('welcome/bobot_supplier/'.$id);
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data bobot ' . $nama_anggota . ' gagal tersimpan</div>');
				redirect('welcome/bobot_supplier/'.$id);
			}
		}else{
			if ($this->bobot_model->update()) {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data bobot ' . $nama_anggota . ' telah diubah</div>');
				redirect('welcome/bobot_supplier/'.$id);
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data bobot ' . $nama_anggota . ' gagal diubah</div>');
				redirect('welcome/bobot_supplier/'.$id);
			}
		}
	}

	public function profil()
	{
		$data['title']	= 'User Profile';
		$data['nav']	= '2';
		$data['user'] 	= $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('profil', $data);
		$this->load->view('_partials/foot', $data);
	}

	public function admin()
	{
		$data['title']		= 'Data Admin';
		$data['nav']		= '6';
		$data['admin']		= $this->user_model->getAdmin();
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('admin', $data);
		$this->load->view('_partials/foot', $data);
	}

	public function user()
	{
		$data['title']		= 'Data User';
		$data['nav']		= '7';
		$data['user']		= $this->user_model->getUser();
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('user', $data);
		$this->load->view('_partials/foot', $data);
	}

	public function supplier()
	{
		$data['title']		= 'Data Supplier';
		$data['nav']		= '3';
		$data['supplier']	= $this->supplier_model->getAll();
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('supplier', $data);
		$this->load->view('_partials/foot', $data);
	}

	public function optimasi()
	{
		$data['title']		= 'Optimasi Bobot';
		$data['nav']		= '4';
		$data['supplier']	= $this->supplier_model->getAll();
		$data['kriteria']	= $this->supplier_model->getKriteria();
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('optimasi', $data);
		$this->load->view('_partials/foot', $data);
	}
	
	public function kriteria()
	{
		$data['title']		= 'Kriteria';
		$data['nav']		= '5';
		$data['kriteria']	= $this->supplier_model->getKriteria();
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('kriteria', $data);
		$this->load->view('_partials/foot', $data);
	}
	
	public function add_supplier()
	{
		$data['title'] = 'Tambah Data Supplier';
		$data['nav'] = '3';
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('add_supplier', $data);
		$this->load->view('_partials/foot', $data);
	}

	public function create_data_supplier()
	{
		$data['title']	= 'Tambah Data Supplier';
		$data['nav']	= '3';
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
		$data['title']		= 'Ubah Data Supplier';
		$data['nav']		= '3';
		$data['supplier']	= $this->db->get_where('tb_supplier', ['id_anggota' => $id])->row_array();
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('update_supplier', $data);
		$this->load->view('_partials/foot', $data);
	}

	public function delete_supplier()
	{
		$id					= $this->input->post('id_anggota');
		$data['nav'] 		= '3';
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
		$data['nav'] 		= '3';
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

	public function updatepass()
	{
		$data['title']	= 'Ubah Password';
		$data['nav']	= '2';
		$data['user'] 	= $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('oldpass', 'Old Password', 'required|trim');
		$this->form_validation->set_rules('newpass', 'New Password', 'required|trim|min_length[8]|matches[confirmpass]', [
			'matches' => 'Password tidak Sama!',
			'min_length' => 'Password tidak boleh kurang dari 8 karakter!'
		]);
		$this->form_validation->set_rules('confirmpass', 'New Password Confirmation', 'required|trim|min_length[8]|matches[newpass]', [
			'matches' => 'Password tidak Sama!',
			'min_length' => 'Password tidak boleh kurang dari 8 karakter!'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('_partials/head', $data);
			$this->load->view('_partials/sidebar', $data);
			$this->load->view('_partials/topbar', $data);
			$this->load->view('updatepass', $data);
			$this->load->view('_partials/foot', $data);
		} else {
			$current_password = $this->input->post('oldpass');
			$new_password = $this->input->post('newpass');
			if (!password_verify($current_password, $data['user']['password'])) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama Salah!</div>');
				redirect('welcome/updatepass');
			} else {
				if ($current_password == $new_password) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan Password lama!</div>');
					redirect('welcome/updatepass');
				} else {
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('tb_user');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diganti!</div>');
					redirect('welcome/profil');
				}
			}
		}
	}
	public function updatepict()
	{
		$data['title'] = 'Edit Picture';
		$data['nav'] = '2';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		if ($this->form_validation->run() == false) {
			$this->load->view('_partials/head', $data);
			$this->load->view('_partials/sidebar', $data);
			$this->load->view('_partials/topbar', $data);
			$this->load->view('updatepicture', $data);
			$this->load->view('_partials/foot', $data);
		} else {
			$name = $this->input->post('name');
			$email = $this->session->userdata('email');

			$upload_image = $_FILES['image']['name'];
			// var_dump($upload_image);
			// die;

			if ($upload_image) {
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']         = '2048';
				$config['upload_path']     = './assets/img/user/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $data['user']['foto_user'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/user/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->where('email', $email);
					$qq = $this->db->update('tb_user', array('foto_user' => $new_image));
					if ($qq) {
						echo $email;
					} else {
						$err = $this->db->error();
						echo $err['message'];
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
					redirect('welcome/updatepict');
				}
			}

			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('tb_user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
			redirect('welcome/profil');
		}
	}
	public function skor(){
		$bobot=$this->bobot_model->getAll();
			foreach ($bobot as $key):
				$id_anggota = $key->id_anggota;
				$skor =
					(intval($key->k1)*intval($this->input->post('bobot1')))+
					(intval($key->k2)*intval($this->input->post('bobot2')))+
					(intval($key->k3)*intval($this->input->post('bobot3')))+
					(intval($key->k4)*intval($this->input->post('bobot4')))+
					(intval($key->k5)*intval($this->input->post('bobot5')))+
					(intval($key->k6)*intval($this->input->post('bobot6')))+
					(intval($key->k7)*intval($this->input->post('bobot7')))+
					(intval($key->k8)*intval($this->input->post('bobot8')))+
					(intval($key->k9)*intval($this->input->post('bobot9')))+
					(intval($key->k10)*intval($this->input->post('bobot10')));

					$query = $this->db->query("SELECT * FROM tb_skor WHERE id_anggota = $id_anggota");
					if($query = 0){
						$this->db->query("INSERT INTO tb_skor (id_anggota, skor) VALUES ($id_anggota, $skor)");
						// $this->session->set_flashdata('message'.$id_anggota, '<div class="alert alert-success" role="alert">Data berhasil '.$id_anggota.' '.$skor.' diupdate</div>');
					}else{
						$this->db->query("UPDATE tb_skor SET skor = $skor WHERE id_anggota = $id_anggota");
						// $this->session->set_flashdata('message'.$id_anggota, '<div class="alert alert-danger" role="alert">Data berhasil '.$id_anggota.' '.$skor.' diupdate</div>');
					}
				endforeach;

		if($this->kriteria_model->update()){
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
			redirect('welcome/kriteria');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diupdate</div>');
			redirect('welcome/kriteria');
		}

	}
}
