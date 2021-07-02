<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Genetik extends CI_Controller{
    
    private $target;
    private $jumlah_populasi;
    private $mutasi;
    
    public function __construct(){
        parent::__construct();
    }

    public function optimasi($target,$jumlah_populasi,$mutasi){

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