<?php defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_model extends CI_Model
{
    private $_table = "tb_supplier";
    public $id_anggota;
    public $nama_anggota;
    public $nama_perusahaan;
    public $alamat;
    
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function create()
    {
        $data = array(
        'nama_anggota'      => $this->input->post('nama_anggota'),
        'nama_perusahaan'   => $this->input->post('nama_perusahaan'),
        'alamat'            => $this->input->post('alamat')
        );
        return $this->db->insert($this->_table,$data);
    }

    public function update($id)
    {
        $data = array(
            'nama_anggota'      => $this->input->post('nama_anggota'),
            'nama_perusahaan'   => $this->input->post('nama_perusahaan'),
            'alamat'            => $this->input->post('alamat')
        );
        return $this->db->update($this->_table,$data,$id);
    }
    
    public function delete($id)
    {
        $this->db->where('id_anggota', $id);
        return $this->db->delete($this->_table);
    }
}
