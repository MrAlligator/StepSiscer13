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

    public function optimasi($jumlah_populasi, $mutasi, $crossover)
    {
        $data['gen']                = $this->bobot_model->getRandom($jumlah_populasi);
        $data['nav']                = 5;
        $data['title']                = 5;
        $data['a']      = $this->kriteria_model->getBobot(5);
        $data['b']      = $this->bobot_model->getk1(5);

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
        $crossover          = $this->input->post('target');
        $jumlah_populasi    = $this->input->post('jumlah_populasi');
        $mutasi             = $this->input->post('mutasi');

        return $this->optimasi($crossover, $jumlah_populasi, $mutasi);
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
