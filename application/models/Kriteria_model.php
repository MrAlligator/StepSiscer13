<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria_model extends CI_Model{
    private $_table = "tb_kriteria";
    public $id_kriteria;
    public $kriteria;
    public $bobot;
    public $rincian;

    public function update(){
        for ($i=1; $i < 11; $i++) { 
            $this->db->where('id_kriteria', $this->input->post('id'.$i));
            $this->db->update($this->_table, ['bobot'=>$this->input->post('bobot'.$i)]);
        }
        return "berhasil";
    }

    
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    public function getBobot1(){
        return $this->db->select('bobot')->get($this->_table, ["id_kriteria" => 1])->result();
    }
    public function getBobot2(){
        return $this->db->select('bobot')->get($this->_table, ["id_kriteria" => 2])->result();
    }
    public function getBobot3(){
        return $this->db->select('bobot')->get($this->_table, ["id_kriteria" => 3])->result();
    }
    public function getBobot4(){
        return $this->db->select('bobot')->get($this->_table, ["id_kriteria" => 4])->result();
    }
    public function getBobot5(){
        return $this->db->select('bobot')->get($this->_table, ["id_kriteria" => 5])->result();
    }
    public function getBobot6(){
        return $this->db->select('bobot')->get($this->_table, ["id_kriteria" => 6])->result();
    }
    public function getBobot7(){
        return $this->db->select('bobot')->get($this->_table, ["id_kriteria" => 7])->result();
    }
    public function getBobot8(){
        return $this->db->select('bobot')->get($this->_table, ["id_kriteria" => 8])->result();
    }
    public function getBobot9(){
        return $this->db->select('bobot')->get($this->_table, ["id_kriteria" => 9])->result();
    }
    public function getBobot10(){
        return $this->db->select('bobot')->get($this->_table, ["id_kriteria" => 10])->result();
    }
}
