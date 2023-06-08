<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Game extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('M_game');
        $this->load->model('M_pulsa');
        if(empty($this->session->userdata('username'))){
        	redirect(base_url('login/logout'));
        }
    }
    public function index(){
        $all_game = $this->M_game->get_all();
        $data = array(
            'judul'=>'Game',
            'kode_pulsa'=>$all_game,
            'isi'=>'admin/game/index');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    function proses_isi_game(){
        $url = 'https://portalpulsa.com/api/connect/';

       $header = array(
    'portal-userid: P163966',
    'portal-key: ed9ed3024c8d589c54bdb4c03c35e2b5', 
    'portal-secret: cff218abf8adaf112b80d694984464a667af9aad2a7ad3e3edf2b7811df85abe', );


        $data = array(
        'inquiry' => 'I', // konstan
        'code' => $this->input->post('code'), // kode produk
        'phone' => $this->input->post('no_hp'), // nohp pembeli
        'idcust' => '32045698701', // nomor meter atau id pln
        'trxid_api' => 'xxxx', 
        'no' =>$this->input->post('trx_ke'), 
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
    redirect(base_url('game'));
    }else{
        $hrg = $this->M_pulsa->get_harga($this->input->post('code'));

$data = array('kategori'=>$hrg->kategori,
    'no_hp'=>$this->input->post('no_hp'),'harga'=>$hrg->harga);  
$this->db->insert('transaksi',$data);
$this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      '.$row->message.'. dengan Harga Rp. '.number_format($hrg->harga).'</div>'
                   );
    redirect(base_url('game'));
    }
    }
   
}