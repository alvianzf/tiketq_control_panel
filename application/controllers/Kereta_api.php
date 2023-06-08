<?php
defined('BASEPATH') or exit('No direct script access allowed');
use GuzzleHttp\Client;
class Kereta_api extends CI_Controller
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
	header("Connection: Keep-alive"); 
	error_reporting (E_ALL ^ E_NOTICE);

    base_url('/vendor/autoload.php');
	$client = new GuzzleHttp\Client();
	$response = $client->request(
	    'POST',
	    'http://klikmbc.co.id/json/kereta/getlist-code',
	);
	$headers = $response->getHeaders();
	$body = $response->getBody()->getContents();
	$body_array = json_decode($body);
	 $data =array(
	 	 'judul'=>'DAFTAR KODE STASIUN & LOKASI',
        'isi'    => 'admin/kereta_api/tiket_utama',
        'data_tiket'=>$body_array);

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    function rute_kereta_api(){
    	header("Connection: Keep-alive"); 
	error_reporting (E_ALL ^ E_NOTICE);

    base_url('/vendor/autoload.php');
	$client = new GuzzleHttp\Client();
	$response = $client->request(
	    'POST',
	    'http://klikmbc.co.id/json/kereta/getlistroute',
	);
	$headers = $response->getHeaders();
	$body = $response->getBody()->getContents();
	$body_array = json_decode($body);
	$data=array();

	 $data =array(
	 	 'judul'=>'DAFTAR RUTE KERETA API',
        'isi'    => 'admin/kereta_api/rute_kereta_api',
        'data_tiket'=>$body_array);

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    function jadwal_kereta(){
    	header("Connection: Keep-alive"); 
	error_reporting (E_ALL ^ E_NOTICE);

    base_url('/vendor/autoload.php');
	$client = new GuzzleHttp\Client();
	$response = $client->request(
	    'POST',
	    'http://klikmbc.co.id/json/kereta/getlist-code',
	);
	$headers = $response->getHeaders();
	$body = $response->getBody()->getContents();
	$body_array = json_decode($body);

    	$data =array(
        'judul'=>'CARI JADWAL KERETA',
        'username'=>$this->session->userdata('username'),
        'password'=>$this->session->userdata('password'),
        'isi'    => 'admin/kereta_api/jadwal_kereta',
        'kode_stasiun'=>$body_array,
        );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    function tampilkan_jadwal(){
    	$username=$this->session->userdata('username');
        $password=$this->session->userdata('password');
        $from=$this->input->post('from');
        $to=$this->input->post('to');
        $date=$this->input->post('date');
        $adult=$this->input->post('adult');
        $infant=$this->input->post('infant');
        $show_seatavail=$this->input->post('show_seatavail');

    	header("Connection: Keep-alive"); 
	error_reporting (E_ALL ^ E_NOTICE);

    base_url('/vendor/autoload.php');
	$client = new GuzzleHttp\Client();
	$response = $client->request(
	    'POST',
	    'http://klikmbc.co.id/json/kereta/getschedule?username='.$username.'&password='.$password.'&from='.$from.'&to='.$to.'&date='.$date.'&adult='.$adult.'&infant='.$infant.'&show_seatavail='.$show_seatavail.'',
	);
	$headers = $response->getHeaders();
	$body = $response->getBody()->getContents();
	$body_array = json_decode($body);
var_dump($body_array);
    }
}