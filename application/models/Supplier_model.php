<?php defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_model extends CI_Model
{
    private $_table = "tb_supplier";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}
