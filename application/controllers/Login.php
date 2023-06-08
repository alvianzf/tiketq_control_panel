<?php
use GuzzleHttp\Client;
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
       
        $this->load->model('User_model');
    }

    public function index() {

        $tgl_sekarang = date("Y");
        $tgl_exp ="2024";
      if ($tgl_sekarang >=$tgl_exp) {
        echo'<script type="text/javascript" language="javascript">
                alert("Expired...!!!");
              </script>';
      }else{
        $data['title'] = "PT. Tiket";
        $this->load->view('auth/login',$data);}
    }
    public function auth(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $cek_user = $this->User_model->authUser($username, $password);

        if(!empty($cek_user)) {

                $data = array(
                'username' => $cek_user->username,
                'id' => $cek_user->id,
                'password' => $cek_user->password
                );
 
            $this->session->set_userdata($data);
            redirect(base_url('dashboard'));
        }else{ 

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username dan Password salah!</div>');
        redirect(base_url('login'));
        }
        
    }
    public function logout() {

        $this->session->sess_destroy();
        redirect(base_url('login'));
        }

    }

?>
