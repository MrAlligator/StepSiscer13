<?php defined('BASEPATH') or exit('No direct script access allowed');

class Bobot_model extends CI_Model
{
    private $_table = "tb_bobot";
    public $id_anggota;
    public $id_bobot;
    
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getRandom($jumlah_populasi)
    {
        $this->db->limit($jumlah_populasi,0);
        $this->db->order_by("RAND ()");
        return $this->db->get($this->_table)->result();
    }
    
    public function create(){
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
            return $this->db->insert($this->_table,$data);
    }
    
    public function update(){
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
        $id					= $this->input->post('id_anggota');
        $this->db->where('id_anggota', $id);
        return $this->db->delete($this->_table);
    }
}
