<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;
class Admin extends RestController{

  public function __construct(){
    parent::__construct();
    $this->load->model('Exp_model','exp');
    $this->load->model('User_model','user');
  }

  public function index_get(){
    $data['lowongan'] = $this->user->selectAll('lowongan');
    $this->load->view('layout/headerAdm');
		$this->load->view('admin/lowongan',$data);
		$this->load->view('layout/footerAdm');
  }
  public function lowongan_get(){
    $data['lowongan'] = $this->user->selectAll('lowongan');
    $this->load->view('layout/headerAdm');
		$this->load->view('admin/lowongan',$data);
		$this->load->view('layout/footerAdm');
  }
  public function apply_get(){
    $data['apply'] = $this->user->selectAll('apply');
    $this->load->view('layout/headerAdm');
		$this->load->view('admin/apply',$data);
		$this->load->view('layout/footerAdm');
  }
}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */