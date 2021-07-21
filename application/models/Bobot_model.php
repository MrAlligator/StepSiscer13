<?php defined('BASEPATH') or exit('No direct script access allowed');

class Bobot_model extends CI_Model
{
    private $_table = "tb_bobot";
    private $_tabel = "tb_supplier";
    public $id_anggota;
    public $k1;
    public $k2;
    public $k3;
    public $k4;
    public $k5;
    public $k6;
    public $k7;
    public $k8;
    public $k9;
    public $k10;
    public $id_bobot;

    public function getId($idang)
    {
        // $idang = $this->db->select('id_anggota')->get($this->_tabel);
        return $this->db->select('id_anggota')->get($this->_table, ["id_anggota" => $idang])->result();
    }

    public function getk1($id)
    {
        return $this->db->select('k1')->get($this->_table, ["id_anggota" => $id])->result();
    }

    public function getk2($id)
    {
        return $this->db->select('k2')->get($this->_table, ["id_anggota" => $id])->result();
    }

    public function getk3($id)
    {
        return $this->db->select('k3')->get($this->_table, ["id_anggota" => $id])->result();
    }

    public function getk4($id)
    {
        return $this->db->select('k4')->get($this->_table, ["id_anggota" => $id])->result();
    }

    public function getk5($id)
    {
        return $this->db->select('k5')->get($this->_table, ["id_anggota" => $id])->result();
    }

    public function getk6($id)
    {
        return $this->db->select('k6')->get($this->_table, ["id_anggota" => $id])->result();
    }

    public function getk7($id)
    {
        return $this->db->select('k7')->get($this->_table, ["id_anggota" => $id])->result();
    }

    public function getk8($id)
    {
        return $this->db->select('k8')->get($this->_table, ["id_anggota" => $id])->result();
    }

    public function getk9($id)
    {
        return $this->db->select('k9')->get($this->_table, ["id_anggota" => $id])->result();
    }

    public function getk10($id)
    {
        return $this->db->select('k10')->get($this->_table, ["id_anggota" => $id])->result();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getRandom($jumlah_populasi)
    {
        $this->db->limit($jumlah_populasi, 0);
        $this->db->order_by("RAND ()");
        return $this->db->get($this->_table)->result();
    }

    public function create()
    {
        $data = array(
            'id_anggota'    => $this->input->post('id_anggota'),
            'k1'             => $this->input->post('k1'),
            'k2'             => $this->input->post('k2'),
            'k3'             => $this->input->post('k3'),
            'k4'             => $this->input->post('k4'),
            'k5'             => $this->input->post('k5'),
            'k6'             => $this->input->post('k6'),
            'k7'             => $this->input->post('k7'),
            'k8'             => $this->input->post('k8'),
            'k9'             => $this->input->post('k9'),
            'k10'             => $this->input->post('k10')
        );
        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
            $k1 = $this->input->post('k1');
            $k2 = $this->input->post('k2');
            $k3 = $this->input->post('k3');
            $k4 = $this->input->post('k4');
            $k5 = $this->input->post('k5');
            $k6 = $this->input->post('k6');
            $k7 = $this->input->post('k7');
            $k8 = $this->input->post('k8');
            $k9 = $this->input->post('k9');
            $k10= $this->input->post('k10');
            $id_anggota = $this->input->post('id_anggota');

        $this->db->query("UPDATE tb_bobot SET
            k1 = $k1,     
            k2 = $k2,     
            k3 = $k3,     
            k4 = $k4,     
            k5 = $k5,     
            k6 = $k6,     
            k7 = $k7,     
            k8 = $k8,     
            k9 = $k9,     
            k10 = $k10     
            WHERE id_anggota = $id_anggota"
        );
        return "berhasil";
    }

    public function delete()
    {
        $id	= $this->input->post('id_anggota');
        $this->db->where('id_anggota', $id);
        return $this->db->delete($this->_table);
    }
}
