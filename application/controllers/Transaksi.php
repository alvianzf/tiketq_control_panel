<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('M_transaksi');
        $this->load->library('form_validation');
        if(empty($this->session->userdata('username'))){
        	redirect(base_url('login/logout'));
        }
    }
    public function index(){
        $transaksi = $this->M_transaksi->get_all();

        $data = array(
            'judul'=>'Data Transaksi',
            'transaksi'=>$transaksi,
            'isi'=>'admin/transaksi');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
   
}