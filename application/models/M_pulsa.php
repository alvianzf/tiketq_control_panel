<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_pulsa extends CI_Model
{

    public $table = 'kode_pulsa';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function api(){
        $url = 'https://portalpulsa.com/api/connect/';

$header = array(
    'portal-userid: P163966',
    'portal-key: ed9ed3024c8d589c54bdb4c03c35e2b5', 
    'portal-secret: cff218abf8adaf112b80d694984464a667af9aad2a7ad3e3edf2b7811df85abe', );
$data = array(
    'inquiry' => 'S', 
    'url'=>$url,'header'=>$header
    );
return $data;
    }   
    // get all
    function get_code_pln()
    {

        $this->db->where('kategori','pln');
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
     function get_all()
    {

     $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_kode_pulsa(){
       $this->db->where('kategori','pulsa');
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();   
    }
    public function get_harga($code)
    {
        $this->db->where('kode', $code);
        $result = $this->db->get('kode_pulsa')->row(); 
        return $result;
    }
    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Testimoni_model.php */
/* Location: ./application/models/Testimoni_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-06-24 19:34:19 */
/* http://harviacode.com */