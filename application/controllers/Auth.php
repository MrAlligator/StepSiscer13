<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("user_model");
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => 'Email Tidak Valid',
            'required' => 'Email Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Kata Sandi Tidak Boleh Kosong!'
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('_partials/head', $data);
            $this->load->view('login');
            $this->load->view('_partials/footer');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
            // var_dump($user);
            // die;
            //jika user ada
            if ($user) {
                //user aktif
                if ($user['is_active'] == 1) {
                    //cek pass
                    if (password_verify($password, $user['password'])) {
                        $data = [
                            'email' => $user['email'],
                            'id_user' => $user['id_user'],
                            'name' => $user['name'],
                            'role_id' => $user['role_id']
                        ];
                        $this->session->set_userdata($data);
                        // var_dump($data);
                        // die;
                        redirect('welcome');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Diaktifkan</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Terdaftar</div>');
                redirect('auth');
            }
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome');
    }
    
    public function register()
	{
        $data['title'] = 'REGISTRASI';
        $this->load->view('_partials/head', $data);
        $this->load->view('register');
        $this->load->view('_partials/footer');

		$name	= $this->input->post('name');

		// $query = $this->user_model->create();
		// if($query){
		// 	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun '.$name.' tersimpan</div>');
		// 	redirect('welcome/supplier');
		// }else{
		// 	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun '.$name.' tidak tersimpan</div>');
		// 	redirect('welcome/supplier');
		// }	
	}
}
