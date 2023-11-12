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
	public function job_get()
	{
		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/job');
		$this->load->view('layout/footer');
	}
	public function company_get()
	{
		$this->load->view('layout/header');

		$this->load->view('layout/footer');
	}
	public function news_get()
	{
		// $this->load->view('welcome_message');
		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/news');
		$this->load->view('layout/footer');
	}
	public function newsDetail_get()
	{
		// $this->load->view('welcome_message');
		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/job');
		$this->load->view('layout/footer');
	}
	public function about_get()
	{
		// $this->load->view('welcome_message');
		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/about');
		$this->load->view('layout/footer');
	}
}
