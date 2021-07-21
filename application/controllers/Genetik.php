<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Genetik extends CI_Controller
{

    private $target;
    private $jumlah_populasi;
    private $mutasi;

    public function __construct()
    {
        parent::__construct();
        $this->load->model("supplier_model");
        $this->load->model("bobot_model");
        $this->load->model('kriteria_model');
    }

    public function optimasi()
    {
        $jumlah_populasi    = $this->input->post('jumlah_populasi');
        $crossover          = $this->input->post('crossover');
        $mutasi             = $this->input->post('mutasi');
        $data['jp']         = $jumlah_populasi;
        $data['cr']         = $crossover;
        $data['mu']         = $mutasi;
        $data['gen']        = $this->bobot_model->getRandom($jumlah_populasi);
        $data['nav']        = 5;
        $data['title']      = 5;
        $data['a']          = $this->kriteria_model->getBobot(5);
        $data['b']          = $this->bobot_model->getk1(5);
        $data['z']          = $this->supplier_model->getId();
        // $data['id']     = $this->bobot_model->getId();

        // if(){
        $this->load->view('_partials/head', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('random', $data);
        $this->load->view('_partials/foot', $data);
        // }
    }

    public function genetika()
    {
        $data = [
            'jp' => $this->input->post('jp'),
            'mu' => $this->input->post('mu'),
            'cr' => $this->input->post('cr'),
        ];
    }

    public function seleksi()
    {
        // $populasi['']
    }

    public function crossover()
    {
    }

    public function skor()
    {
    }

    public function fitness()
    {
    }

    public function mutasi()
    {
    }

    public function eliminasi()
    {
    }
}
