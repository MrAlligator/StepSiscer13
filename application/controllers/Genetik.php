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
        $this->load->model("skor_model");
        $this->load->model('kriteria_model');
    }

    public function optimasi($jumlah_gen, $mutasi, $crossover){
        // $populasi = 4;
        // $data['gen']   = $this->bobot_model->getRandom($jumlah_gen);
        $data['skor']  = $this->skor_model->getRandom($jumlah_gen);
        $data['sum']  = $this->skor_model->getSum();
        $data['supplier']= $this->supplier_model->getAll();
		$data['title']	= 'Sistem Optimasi Bobot';
		$data['nav']	= '4';
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('random', $data);
		$this->load->view('_partials/foot', $data);
    }

    public function genetika()
    {
        $crossover          = $this->input->post('target');
        $jumlah_gen         = $this->input->post('jumlah_gen');
        $mutasi             = $this->input->post('mutasi');

        return $this->optimasi($jumlah_gen, $mutasi, $crossover);
    }

    public function seleksi()
    {
        // $populasi['']
    }

    public function crossover()
    {
    }

    public function skor(){
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
