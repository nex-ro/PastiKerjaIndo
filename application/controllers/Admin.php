<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;

class Admin extends RestController {

	public function index_get()
	{
		$this->load->view('layout/header');
		$this->load->view('views/tes/about-us');
		$this->load->view('layout/footer');
	}
}