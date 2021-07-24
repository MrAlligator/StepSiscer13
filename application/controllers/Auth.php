<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("user_model");
    }

    public function index(){
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
                            'foto_user' => $user['foto_user'],
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

    public function logout(){
        $this->session->sess_destroy();
        redirect();
    }

    public function register(){
        $this->form_validation->set_rules('name', 'Nama', 'required|trim', [
            'required' => 'Nama Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
            'is_unique' => 'Email Telah Terdaftar',
            'required' => 'Email Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Kata Sandi tidak Sama!',
            'min_length' => 'Kata Sandi tidak boleh kurang dari 8 karakter!',
            'required' => 'Kata Sandi Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar Akun';
            $this->load->view('_partials/head', $data);
            $this->load->view('register');
            $this->load->view('_partials/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'foto_user' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun berhasil dibuat.</div>');
            redirect('auth');
        }
    }

    public function add_admin(){
    $data = [
        'name' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'foto_user' => 'default.jpg',
        'password' => password_hash('admin', PASSWORD_DEFAULT),
        'role_id' => 1,
        'is_active' => 1,
        'date_created' => time()
    ];

    $this->db->insert('tb_user', $data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun berhasil dibuat.</div>');
    redirect('welcome/admin');
    }

    public function delete_admin(){
        $this->db->where('id_user', $this->input->post('id_user'));
        $name = $this->input->post('name');
        $this->db->delete('tb_user');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun '.$name.' telah dihapus.</div>');
        redirect('welcome/admin');
    }

    public function delete_user(){
        $this->db->where('id_user', $this->input->post('id_user'));
        $name = $this->input->post('name');
        $this->db->delete('tb_user');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun '.$name.' telah dihapus.</div>');
        redirect('welcome/user');
    }

    public function upload_pic(){
    $config['upload_path']          = './assets/img/user/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10240;
    $config['max_width']            = 10240;
    $config['max_height']           = 7680;

    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('userfile')){
        redirect('welcome/updatepict');
    }else{
        $data = $this->upload->data();
        $foto_user = $data['file_name'];
        $this->db->set('foto_user', $foto_user)->where('id_user', $this->input->post('id_user'))->update('tb_user');
        redirect('welcome/updatepict');
    }
    }

}
