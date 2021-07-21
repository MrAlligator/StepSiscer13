<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria_model extends CI_Model
{
    private $_table = "tb_kriteria";
    public $id_kriteria;
    public $kriteria;
    public $bobot;
    public $rincian;

    public function getBobot($id)
    {
        return $this->db->select('bobot')->get($this->_table, ["id_kriteria" => $id])->result();
    }
}
