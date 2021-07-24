<?php defined('BASEPATH') or exit('No direct script access allowed');

class Skor_model extends CI_Model
{
    private $_table = "tb_skor";

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

    public function getk1($id)
    {
        return $this->db->select('k1')->get($this->_table, ["id_anggota" => $id])->result();
    }

    public function getAll(){
        $this->db->order_by("skor", "DESC");
        return $this->db->get($this->_table)->result();
    }
    
    public function getRandom($jumlah_gen){
        return $this->db->order_by('RAND ()')->get($this->_table, $jumlah_gen)->result();
    }
    
    public function getSum(){   
        $kriteria = $this->db->select_sum('bobot')->get('tb_kriteria')->result();
        foreach ($kriteria as $a):
            $total=$a->bobot*5;
        endforeach;
        return $total;
    }
    
    public function update()
    {
        $data = array(
            'id_anggota'    => $this->input->post('id_anggota'),
            'k1'             => $this->input->post('1'),
            'k2'             => $this->input->post('2'),
            'k3'             => $this->input->post('3'),
            'k4'             => $this->input->post('4'),
            'k5'             => $this->input->post('5'),
            'k6'             => $this->input->post('6'),
            'k7'             => $this->input->post('7'),
            'k8'             => $this->input->post('8'),
            'k9'             => $this->input->post('9'),
            'k10'             => $this->input->post('10')
        );
        $this->db->where('id_anggota', $this->input->post('id_anggota'));
        return $this->db->update($this->_table, $data);
    }

    public function delete()
    {
        $id                    = $this->input->post('id_anggota');
        $this->db->where('id_anggota', $id);
        return $this->db->delete($this->_table);
    }
}
