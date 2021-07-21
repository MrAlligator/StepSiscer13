<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Genetik extends CI_Controller{
    
    private $target;
    private $jumlah_populasi;
    private $mutasi;
    
    public function __construct(){
        parent::__construct();
        $this->load->model("supplier_model");
    }

    public function optimasi($target,$jumlah_populasi,$mutasi){
        $data['populasi']	= $this->supplier_model->getRandom($jumlah_populasi);
        $data['title']	= 'Sistem Optimasi Bobot';
        $data['nav']	= '4';
        $this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('random', $data);
		$this->load->view('_partials/foot', $data);

    }

    public function genetika(){
        $target             = $this->input->post('target');
        $jumlah_populasi	= $this->input->post('jumlah_populasi');
        $mutasi             = $this->input->post('mutasi');

        return $this->optimasi($target,$jumlah_populasi,$mutasi);
    }

    public function populasi(){

    }
    
    public function seleksi(){
        
    }
    
    public function crossover(){
        
    }
    

    public function fitness(){

    }

    public function mutasi(){

    }

    public function eliminasi(){

    }
}