<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_penerbangan extends CI_Model
{

    public $table = 'tb_pesawat';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
}