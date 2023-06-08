<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_game extends CI_Model
{

    public $table = 'kode_pulsa';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {

        $this->db->where('kategori','game');
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
}