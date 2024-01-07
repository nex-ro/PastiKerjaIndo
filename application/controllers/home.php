<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

use chriskacerguis\RestServer\RestController;

class home extends RestController
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');
		$this->load->library('session');
	}
	public function index_get()
	{
		$data['lowongan'] = $this->user->selectAll('lowongan');
		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/index', $data);
		$this->load->view('layout/footer');
	}
	public function job_get()
	{
		$data['lowongan'] = $this->user->selectAll('lowongan');
		$this->db->reset_query();
		$data['lokasi'] = $this->user->getWdistinct('lowongan','lokasi');
		$this->db->reset_query();
		$data['kategori'] = $this->user->getWdistinct('lowongan','kategori');
		$this->db->reset_query();
		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/job', $data);
		$this->load->view('layout/footer');
	}
	public function searchjob_get()
	{
		$data['lowongan'] = $this->user->selectAll('lowongan');

		$data['search'] = $this->user->search_lowongan('lowongan',$this->input->post('cari', true),$this->input->post('lokasi', true),$this->input->post('kategori', true));

		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/search_job', $data);
		$this->load->view('layout/footer');
	}
	public function company_get()
	{
		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/company');
		$this->load->view('layout/footer');
	}
	public function news_get()
	{
		// $this->load->view('welcome_message');
		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/news');
		$this->load->view('layout/footer');
	}
	public function newsOne_get()
	{
		// $this->load->view('welcome_message');
		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/news_one');
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

	function buatlowongan_get()
	{
		if (!$this->session->userdata('email')) {
			redirect('home');
		}
		$this->form_validation->set_rules('lowongan', 'lowongan', 'required|trim', [
			'required' => 'Please enter the name of the job',
		]);
		$this->form_validation->set_rules('requirement', 'requirement', 'required|trim', [
			'required' => 'Please enter the requirement',
		]);
		$this->form_validation->set_rules('lokasi', 'lokasi', 'required|trim', [
			'required' => 'Please enter the Location',
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header');
			$this->load->view('view_halaman_awal/buat_lowongan');
			$this->load->view('layout/footer');
		} else {
			$data = [
				'lowongan' => htmlspecialchars($this->input->post('lowongan', true)),
				'requirement' => htmlspecialchars($this->input->post('requirement', true)),
				'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
				'kategori' => htmlspecialchars($this->input->post('kategori'), true),
				'type' => htmlspecialchars($this->input->post('type'), true),
				'status' => htmlspecialchars($this->input->post('status'), true),
				'id_user' => $this->session->userdata('id_user'),
			];
			$this->user->insert_global('lowongan', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Lowongan Terbuat</div>');
			redirect('home');
		}
	}
	public function profil_get()
	{
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
		$this->load->view('view_halaman_awal/profil', $data);
		$this->load->view('layout/footer');
	}
	public function UpdatePersonalInfo_get()
	{
		echo"true";
		$data = [
			'profilePicture' => htmlspecialchars($this->input->post('profilePicture', true)),
			'nama' => htmlspecialchars($this->input->post('nama', true)),
			'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
			'noHp' => htmlspecialchars($this->input->post('noHp'), true),
		];
		$this->user->Update_user_data($data, $this->input->post('id_user'));
		redirect(site_url("home/profil"));
	}
	public function UpdateDesc_get()
	{
		$data = [
			'desc' => $this->input->post('desc'),
		];
		$this->user->Update_user_data($data, $this->input->post('id_user'));
		redirect(site_url("home/profil"));
	}
	public function UpdateEducation_get()
	{
		$data = [
			'profesi' => ($this->input->post('job')),
			'company' => ($this->input->post('company')),
			'durasi' => ($this->input->post('durasi')),
			'desc' => $this->input->post('desc'),
			'id_user' => $this->input->post('id_user'),
			
		];
		$this->user->insert_global("experience",$data );
		redirect(site_url("home/profil"));
	}
}
