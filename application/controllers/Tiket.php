<?php
defined('BASEPATH') or exit('No direct script access allowed');
use GuzzleHttp\Client;
class Tiket extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        if(empty($this->session->userdata('username'))){
        	redirect(base_url('login/logout'));
        }
    }
    public function index(){
$username = $this->session->userdata('username');
$password=$this->session->userdata('password');
header("Connection: Keep-alive"); 
error_reporting (E_ALL ^ E_NOTICE);
base_url('/vendor/autoload.php');
$client = new GuzzleHttp\Client();
$response = $client->request(
    'POST',
    'http://klikmbc.co.id/json/ceksaldo?username='.$username.'&password='.$password.'',
);
$headers = $response->getHeaders();
$body = $response->getBody()->getContents();
$body_array = json_decode($body);
$data =array('status'=>$body_array->ipaddr,
        'info'=>$body_array->reason,
        'saldo'=>0,
        'judul'=>'DAFTAR KODE KOTA RUTE PENERBANGAN',
        'isi'    => 'admin/tiket/tiket_utama'
        );

    $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    public function cari_penerbangan(){
$data =array(
        'judul'=>'CARI PENERBANGAN',
        'isi'    => 'admin/tiket/cari_penerbangan'
        );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function proses_cari_penerbangan(){ 
$username = $this->session->userdata('username');
$password=$this->session->userdata('password');
header("Connection: Keep-alive"); 
error_reporting (E_ALL ^ E_NOTICE);
base_url('/vendor/autoload.php');
$client = new GuzzleHttp\Client();
$response = $client->request(
    'POST',
    'http://klikmbc.co.id/json/getflights-json?username='.$username.'&password='.$password.'&from='.$from.'&to='.$to.'&date='.$date.'',
);
$headers = $response->getHeaders();
$body = $response->getBody()->getContents();
$body_array = json_decode($body);
$data =array('status'=>$body_array->result,
    'info'=>$body_array->reason,
        'judul'=>'HASIL CARI PENERBANGAN',
        'isi'    => 'admin/tiket/hasil_pencarian_penerbangan'
        );
    $this->load->view('admin/layout/wrapper', $data, FALSE);

    }
    function ambil_tiket(){

$data =array(
        'judul'=>'Ambil E-TIKET',
        'isi'    => 'admin/tiket/ambil_tiket'
        );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    function cari_kode_booking(){

    $username = $this->session->userdata('username');
    $password=$this->session->userdata('password');
       $kodebooking= $this->input->post('kodebooking');
        header("Connection: Keep-alive"); 
    error_reporting (E_ALL ^ E_NOTICE);
    base_url('/vendor/autoload.php');
    $client = new GuzzleHttp\Client();
    $response = $client->request(
        'POST',
        'http://klikmbc.co.id/json/getetiket-json?username='.$username.'&password='.$password.'&kodebooking='.$kodebooking.'',
    );
    $headers = $response->getHeaders();
    $body = $response->getBody()->getContents();
    $body_array = json_decode($body);
echo $body_array->reason;

}

function reset_password(){

$data =array(
        'judul'=>'Reset Password',
        'isi'    => 'admin/tiket/reset_password'
        );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
}
function proses_reset_password(){

     $username = 'firlana89@gmail.com';
    $password='a8PPfVV3';
    $phone='089531941653';
     $agencode='JKT-813097';
    // $password=$this->session->userdata('password');
    
  header("Connection: Keep-alive"); 
    error_reporting (E_ALL ^ E_NOTICE);
    base_url('/vendor/autoload.php');
    $client = new GuzzleHttp\Client();
    $response = $client->request(
        'POST',
        'http://klikmbc.co.id/json/resetpassword?username='.$username.'&password='.$password.'&phone='.$phone.'&agencode='.$agencode.'&newpassword',
    );
    $headers = $response->getHeaders();
    $body = $response->getBody()->getContents();
    $body_array = json_decode($body);
        
        if ($body_array->result == "no") {
            $info = $body_array->reason;
            $isi = 'admin/invalid_login';
            $hidden = '';
        }

        $data =array(
         'judul'=>'Info',
        'isi'    => $isi,
        'hidden'=> $hidden,
        'info'=>$info,);

        $this->load->view('admin/layout/wrapper', $data, FALSE);
}
   
}