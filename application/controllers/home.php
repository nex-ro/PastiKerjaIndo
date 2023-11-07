<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;

class home extends RestController {

	public function index_get()
	{
		// $this->load->view('welcome_message');
		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/index');
		$this->load->view('layout/footer');
	}
}
