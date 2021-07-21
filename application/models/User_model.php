<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "tb_user";
    public $id_user;
    public $name;
    public $email;
    public $username;
    public $image = "default.jpg";
    public $password;
    public $role_id;
    public $is_active;
    public $date_created;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getAdmin()
    {
        $this->db->where('role_id', 1);
        return $this->db->get($this->_table)->result();
    }

    public function getUser()
    {
        $this->db->where('role_id', 2);
        return $this->db->get($this->_table)->result();
    }
}
