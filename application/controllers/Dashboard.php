<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->model('M_pulsa');
        $this->load->model('M_penerbangan');
        $this->load->library('form_validation');
        if(empty($this->session->userdata('username'))){
        	redirect(base_url('login/logout'));
        }
    }
    public function index(){
    $api = $this->M_pulsa->api();
    $data = array(
    'inquiry' => 'S',);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $api['url']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $api['header']);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec($ch);
		$result = json_decode($result);
		if($result->result == "failed") {
		$balance ='Gagal Konek';
		}else{ 
		$balance = number_format($result->balance);
		}

		$kd_pulsa = $this->M_pulsa->get_all();
		$penerbangan = $this->M_penerbangan->get_all();
		$data = array(
			'judul'=>'Dashboard',
		'kode_pulsa'	 => '' . count($kd_pulsa) . '',
		'penerbangan'	 => '' . count($penerbangan) . '',
    'status'=>$result->message,
		'saldo'	 => 'Rp. '.$balance,
    	'isi'    => 'admin/dasbor/utama'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function harga(){
    
    $api = $this->M_pulsa->api();
$data = array(
'inquiry' => 'HARGA', // konstan
'code' => 'PLN', // pilihan: pln, pulsa, game
);
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api['url']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $api['header']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);

    	$data = array(
			'judul'=>'Dashboard',
			'harga'=>$result,
			'isi'    => 'admin/harga');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    function cekharga(){
    	$url = 'https://portalpulsa.com/api/connect/';
      $code = $this->input->post('code');
      $header = array(
          'portal-userid: P163966',
          'portal-key: ed9ed3024c8d589c54bdb4c03c35e2b5', 
          'portal-secret: cff218abf8adaf112b80d694984464a667af9aad2a7ad3e3edf2b7811df85abe', );
        
      $data = array(
      'inquiry' => 'HARGA', // konstan
      'code' => $code, // pilihan: pln, pulsa, game
      );

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      $harga = curl_exec($ch);
      $harga = str_replace("{", "", $harga);
                    $harga = str_replace("result", "", $harga);
                    $harga = str_replace("}", "", $harga);
                    $harga = str_replace("message", "", $harga);
                    $harga = str_replace("success", "", $harga);
                    $harga = str_replace(",", "", $harga);
                    $harga = str_replace("[", "", $harga);
                    $harga = str_replace("]", "", $harga);
                    $harga = str_replace('"": ""', '', $harga);
                    $harga = str_replace('"":', '', $harga);
                    $harga = str_replace('"provider": "PLN"', '', $harga);
                    $harga = str_replace('"provider_sub": "PLN"', '', $harga);
                    $harga = str_replace('"operator": "PLN"', '', $harga);
                    $harga = str_replace('"operator_sub": "PLN"', '', $harga);
                    $harga = str_replace('"provider": "AXIS"', '', $harga);
                    $harga = str_replace('"provider_sub": "REGULER"', '', $harga);
                    $harga = str_replace('"operator_sub": "AX"', '', $harga);
                    $harga = str_replace('"operator":', '', $harga);
                    $harga = str_replace('"code"', 'Kode', $harga);
                    $harga = str_replace('"description"', 'Deskripsi', $harga);
                    $harga = str_replace('"price"', 'Harga', $harga);
                     $harga = str_replace('""', '', $harga);
                    $harga = str_replace('"status"', 'Status', $harga);
                    $harga = str_replace('"operator_sub": "AIGO"', '', $harga);
                    

    	$data = array(
			'judul'=>'Data Harga '.$code,
			'harga'=>$harga,
			'isi'    => 'admin/harga');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function deposit(){

    	$data = array('judul'=>'Deposit Saldo',
    		'kode_pulsa'=>$this->M_pulsa->get_all(),
    		'isi'=>'admin/deposit');
    	$this->load->view('admin/layout/wrapper', $data, FALSE);	
    }
    public function proses_deposit(){
    	$url = 'https://portalpulsa.com/api/connect/';

$header = array(
    'portal-userid: P163966',
    'portal-key: ed9ed3024c8d589c54bdb4c03c35e2b5', 
    'portal-secret: cff218abf8adaf112b80d694984464a667af9aad2a7ad3e3edf2b7811df85abe', );
  	$bank = $this->input->post('bank');
	$nominal = $this->input->post('nominal');

$data = array(
'inquiry' => 'D', // konstan
'bank' => $bank, // bank tersedia: bca, bni, mandiri, bri, muamalat
'nominal' => $nominal, // jumlah request
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
$result = json_decode($result);
$this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      '.$result->message.'.
                     </div>'
                   );
redirect(base_url('dashboard/deposit'));
    }
    public function isi_pulsa(){

        $kode_pulsa= $this->M_pulsa->get_kode_pulsa();
    	$data = array('judul'=>'Pulsa',
    		'kode_pulsa'=>$this->M_pulsa->get_kode_pulsa(),
    		'isi'=>'admin/pulsa/isi_pulsa');
    $this->load->view('admin/layout/wrapper', $data, FALSE);	
    }

    public function proses_isi_pulsa(){

	$url = 'https://portalpulsa.com/api/connect/';

		$header = array(
    'portal-userid: P163966',
    'portal-key: ed9ed3024c8d589c54bdb4c03c35e2b5', 
    'portal-secret: cff218abf8adaf112b80d694984464a667af9aad2a7ad3e3edf2b7811df85abe', );

    $no_hp = $this->input->post('no_hp');
  $idcust = $this->input->post('idcust');
  $pulsa = $this->input->post('code');
$pulsa = $this->input->post('code');
$trx_ke = $this->input->post('trx_ke');
$trxid = $this->input->post('trxid');

	$data = array(
	'inquiry' => 'I', // konstan
	'code' => $pulsa, // kode produk
	'phone' => $no_hp, // nohp pembeli
	'idcust' => $idcust, 
	'trxid_api' => $trxid, 
	'no' => $trx_ke, // untuk isi lebih dari 1x dlm sehari, isi urutan 1,2,3,4,dst
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
	redirect(base_url('dashboard/isi_pulsa'));
	}else{
		$hrg = $this->M_pulsa->get_harga($pulsa);

$data = array('kategori'=>$hrg->kategori,
	'no_hp'=>$no_hp,'harga'=>$hrg->harga,
  'tanggal'=>date('d-m-Y'));	
$this->db->insert('transaksi',$data);
$this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      '.$row->message.'. dengan Harga Rp. '.number_format($hrg->harga).'</div>'
                   );
	redirect(base_url('dashboard/isi_pulsa'));
	}
    }
}