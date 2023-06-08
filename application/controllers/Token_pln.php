<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Token_pln extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('M_pulsa');
        $this->load->library('form_validation');
        if(empty($this->session->userdata('username'))){
        	redirect(base_url('login/logout'));
        }
    }
    public function index(){
        $data =array(
        'kode_pulsa'=>$this->M_pulsa->get_code_pln(),
            'judul'=>'Token PLN',
        'isi'    => 'admin/tokenpln/index'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    function isi_token(){
        $url = 'https://portalpulsa.com/api/connect/';

     
        $header = array(
    'portal-userid: P163966',
    'portal-key: ed9ed3024c8d589c54bdb4c03c35e2b5', 
    'portal-secret: cff218abf8adaf112b80d694984464a667af9aad2a7ad3e3edf2b7811df85abe', );

        $code = $this->input->post('code');
        $no_hp = $this->input->post('no_hp');
        $no_meteran = $this->input->post('no_meteran');
        $trx_ke = $this->input->post('trx_ke');
        $data = array(
        'inquiry' => 'PLN', 
        'code' => $code, // kode produk
        'phone' => $no_hp, // nohp pembeli
        'idcust' => $no_meteran, 
        'trxid_api' => 'xxxx', // Trxid / Reffid dari sisi client
        'no' => $trx_ke,
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);

        $row = json_decode($result);
            if ($row->result == 'failed') {

        $this->session->set_flashdata('msg',
                             '
                             <div class="alert alert-success alert-dismissible" role="alert">
                              '.$row->message.'.
                             </div>'
                           );
            redirect(base_url('token_pln'));
            }else{
                $hrg = $this->M_pulsa->get_harga($code);

        $data = array('kategori'=>$hrg->kategori,
            'no_hp'=>$no_hp,'harga'=>$hrg->harga);  
        $this->db->insert('transaksi',$data);
        $this->session->set_flashdata('msg',
                             '
                             <div class="alert alert-success alert-dismissible" role="alert">
                              '.$row->message.'.
                             </div>'
                           );
            redirect(base_url('token_pln'));
            }
        echo $result;
    }
}