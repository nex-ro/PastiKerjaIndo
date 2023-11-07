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
    $this->load->view('layout/header_auth');
    $this->load->view('auth/login');
    $this->load->view('layout/footer_auth');
  }
  public function register_get()
  {
    $this->load->view('layout/header_auth');
    $this->load->view('auth/register');   
    $this->load->view('layout/footer_auth');

  }
}
