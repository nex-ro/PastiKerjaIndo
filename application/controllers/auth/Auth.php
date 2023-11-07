<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;

class Auth extends RestController
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model','user');
    $this->load->model('Exp_model','exp');
  }

  public function index_get()
  {
    $this->load->view('auth/login');
  }
  public function register_get()
  {
    $this->load->view('auth/register');
  }
}


/* End of file Halawal.php */
/* Location: ./application/controllers/Halawal.php */