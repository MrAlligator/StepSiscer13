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
    
    public function create()
    {
        for( $i=1; $i<=10; $i++){
            $data = array(
                'id_anggota'        => $this->input->post('id_anggota'),
                'id_kriteria'       => $i,
                'bobot'             => $this->input->post('kriteria'.$i)
            );
            $this->db->insert($this->_table,$data);
        }
        return $this->db->get($this->_table)->result();
    }
    
    public function update(){
        $id		= $this->input->post('id_anggota');
        for($i=1; $i<=10; $i++){
            $data = array(
                'id_anggota'        => $this->input->post('id_anggota'),
                'id_kriteria'       => $i,
                'bobot'             => $this->input->post('kriteria'.$i)
            );
            $this->db->where('id_anggota', $id);
            $this->db->update($this->_table,$data);
        } 
    return $this->db->get($this->_table)->result();
    }
    
    public function delete()
    {
        $id					= $this->input->post('id_anggota');
        
        $this->db->where('id_anggota', $id);
        return $this->db->delete($this->_table);
    }
}
