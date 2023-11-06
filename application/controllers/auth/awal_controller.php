<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;

class awal_controller extends RestController
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model','user');
    $this->load->model('Exp_model','exp');
  }

  public function index_get()
  {
    $this->load->view('layout/header');
    $this->load->view('view_halaman_awal/index');
    $this->load->view('layout/footer');
  }
  public function login_get(){
    $this->load->view('layout/header_auth');
    $this->load->view('auth/login');
    
  }
  

}


/* End of file Halawal.php */
/* Location: ./application/controllers/Halawal.php */