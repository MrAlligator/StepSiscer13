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
        $populasi = 4;
        $gen   = $this->bobot_model->getRandom($jumlah_gen);
        $bobot = $this->kriteria_model->getBobot1();

    }

    public function genetika()
    {
        $crossover          = $this->input->post('target');
        $jumlah_gen         = $this->input->post('jumlah_gen');
        $mutasi             = $this->input->post('mutasi');

        return $this->optimasi($crossover, $jumlah_gen, $mutasi);
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
