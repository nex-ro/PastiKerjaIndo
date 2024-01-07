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
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
		$this->load->view('layout/header',$data);
		$this->load->view('view_halaman_awal/index', $data);
		$this->load->view('layout/footer');
	}
	public function job_get()
	{
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
		$data['lowongan'] = $this->user->selectAll('lowongan');
		$this->db->reset_query();
		$data['lokasi'] = $this->user->getWdistinct('lowongan', 'lokasi');
		$this->db->reset_query();
		$data['kategori'] = $this->user->getWdistinct('lowongan', 'kategori');
		$this->db->reset_query();
		$this->load->view('layout/header',$data);
		$this->load->view('view_halaman_awal/job', $data);
		$this->load->view('layout/footer');
	}
	public function searchjob_get()
	{
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
		$data['lowongan'] = $this->user->selectAll('lowongan');
		$data['search'] = $this->user->search_lowongan('lowongan', $this->input->post('cari', true), $this->input->post('lokasi', true), $this->input->post('kategori', true));
		$data['lokasi'] = $this->user->getWdistinct('lowongan', 'lokasi');
		$this->db->reset_query();
		$data['kategori'] = $this->user->getWdistinct('lowongan', 'kategori');
		$this->db->reset_query();
		$this->load->view('layout/header',$data);
		$this->load->view('view_halaman_awal/search_job', $data);
		$this->load->view('layout/footer');
	}
	public function searchjoblokasi_get()
	{
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
		$data['lowongan'] = $this->user->selectAll('lowongan');
		$lokasi = $_GET['lokasi'];
		$data['search'] = $this->user->search_lowongan('lowongan', '', $lokasi, '');
		$data['lokasi'] = $this->user->getWdistinct('lowongan', 'lokasi');
		$this->db->reset_query();
		$data['kategori'] = $this->user->getWdistinct('lowongan', 'kategori');
		$this->db->reset_query();
		$this->load->view('layout/header',$data);
		$this->load->view('view_halaman_awal/search_job', $data);
		$this->load->view('layout/footer');
	}
	public function searchjobtype_get()
	{
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
		$data['lowongan'] = $this->user->selectAll('lowongan');
		$type = $_GET['type'];
		$data['search'] = $this->user->searchbytype('lowongan', $type);
		$data['lokasi'] = $this->user->getWdistinct('lowongan', 'lokasi');
		$this->db->reset_query();
		$data['kategori'] = $this->user->getWdistinct('lowongan', 'kategori');
		$this->db->reset_query();
		$this->load->view('layout/header',$data);
		$this->load->view('view_halaman_awal/search_job', $data);
		$this->load->view('layout/footer');
	}
	public function searchjobkategori_get()
	{
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
		$data['lowongan'] = $this->user->selectAll('lowongan');
		$kategori = $_GET['kategori'];
		$data['search'] = $this->user->search_lowongan('lowongan', '', '', $kategori);
		$data['lokasi'] = $this->user->getWdistinct('lowongan', 'lokasi');
		$this->db->reset_query();
		$data['kategori'] = $this->user->getWdistinct('lowongan', 'kategori');
		$this->db->reset_query();
		$this->load->view('layout/header',$data);
		$this->load->view('view_halaman_awal/search_job', $data);
		$this->load->view('layout/footer');
	}

	public function searchjobcompany_get()
	{
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
		$data['lowongan'] = $this->user->selectAll('lowongan');
		$id_user = $_GET['id'];
		$data['search'] = $this->user->search_lowongan_company('lowongan', $id_user);
		$data['lokasi'] = $this->user->getWdistinct('lowongan', 'lokasi');
		$this->db->reset_query();
		$data['kategori'] = $this->user->getWdistinct('lowongan', 'kategori');
		$this->db->reset_query();
		$this->load->view('layout/header',$data);
		$this->load->view('view_halaman_awal/search_job', $data);
		$this->load->view('layout/footer');
	}
	public function searchprofilecompany_get()
	{
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
		$data['company'] = $this->user->search_company('user', $this->input->post('search', true), '');
		$this->load->view('layout/header',$data);
		$this->load->view('view_halaman_awal/search_company', $data);
		$this->load->view('layout/footer');
	}
	public function company_get()
	{
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
		$data['company'] = $this->user->selectcompany('user');
		$this->load->view('layout/header',$data);
		$this->load->view('view_halaman_awal/company', $data);
		$this->load->view('layout/footer');
	}
	public function news_get()
	{
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
		// $this->load->view('welcome_message');
		$this->load->view('layout/header',$data);
		$this->load->view('view_halaman_awal/news');
		$this->load->view('layout/footer');
	}
	public function newsOne_get()
	{
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
		// $this->load->view('welcome_message');
		$this->load->view('layout/header',$data);
		$this->load->view('view_halaman_awal/news_one');
		$this->load->view('layout/footer');
	}
	public function newsDetail_get()
	{
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
		// $this->load->view('welcome_message');
		$this->load->view('layout/header',$data);
		$this->load->view('view_halaman_awal/job');
		$this->load->view('layout/footer');
	}
	public function about_get()
	{
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
		// $this->load->view('welcome_message');
		$this->load->view('layout/header',$data);
		$this->load->view('view_halaman_awal/about');
		$this->load->view('layout/footer');
	}

	function buatlowongan_get()
	{
		$data['personalInfo'] = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row_array();
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
			$this->load->view('layout/header',$data);
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
		$data['carrier'] = $this->user->getWhereAll('experience', 'id_user', $this->session->userdata('id_user'));
		$data['pendidikan'] = $this->user->getWhereAll('pendidikan', 'id_user', $this->session->userdata('id_user'));
		$data['project'] = $this->user->getWhereAll('projects', 'id_user', $this->session->userdata('id_user'));

		$this->load->view('view_halaman_awal/profil', $data);
		$this->load->view('layout/footer');
	}
	public function UpdatePersonalInfo_get() {
		$targetDirectory = './assets/profilepicture/';
		$targetFile = $targetDirectory . basename($_FILES["pp"]["name"]);
		
		if (!empty($_FILES["pp"]["name"])) {
			if (move_uploaded_file($_FILES["pp"]["tmp_name"], $targetFile)) {
				// File berhasil diunggah, tambahkan logika Anda di sini
				$data = [
					'profilePicture' => $targetFile, // Simpan path file ke dalam database
					'nama' => htmlspecialchars($this->input->post('nama', true)),
					'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
					'noHp' => htmlspecialchars($this->input->post('noHp'), true),
				];
				$this->user->Update_user_data($data, $this->input->post('id_user'));
				redirect(site_url("home/profil"));
			} else {
				$data = [
					'nama' => htmlspecialchars($this->input->post('nama', true)),
					'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
					'noHp' => htmlspecialchars($this->input->post('noHp'), true),
				];
				$this->user->Update_user_data($data, $this->input->post('id_user'));
				echo 'Tidak dapat menunnggah foto';
				redirect(site_url("home/profil"));
			}
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
				'noHp' => htmlspecialchars($this->input->post('noHp'), true),
			];
			$this->user->Update_user_data($data, $this->input->post('id_user'));
			echo $targetFile;
			// redirect(site_url("home/profil"));
		}
	}
	
	public function UpdateDesc_get()
	{
		
		$data = [
			'desc' => $this->input->post('desc'),
		];
		$this->user->Update_user_data($data, $this->input->post('id_user'));
		redirect(site_url("home/profil"));
	}
	public function UpdateCarrier_get()
	{
		$data = [
			'profesi' => ($this->input->post('job')),
			'company' => ($this->input->post('company')),
			'durasi' => ($this->input->post('durasi')),
			'desc_exp' => $this->input->post('desc'),
			'id_user' => $this->input->post('id_user'),
		];
		$this->user->insert_global("experience", $data);
		redirect(site_url("home/profil"));
	}
	public function EditCarrier_get()
	{
		$data = [
			'profesi' => ($this->input->post('job')),
			'company' => ($this->input->post('company')),
			'durasi' => ($this->input->post('durasi')),
			'desc_exp' => $this->input->post('desc'),
			'id_user' => $this->input->post('id_user'),

		];
		$this->db->where('id_exp', $this->input->post('id_exp'));
		$this->db->update('experience', $data);
		redirect(site_url("home/profil"));
	}
	public function editEdu_get()
	{
		$data = [
			'nama_pendidikan' => ($this->input->post('kampus')),
			'gelar' => ($this->input->post('gelar')),
			'status' => ($this->input->post('status')),
		];
		print_r($data);
		$this->db->where('id_pendidikan', $this->input->post('id_pendidikan'));
		$this->db->update('pendidikan', $data);
		redirect(site_url("home/profil"));
	}
	public function educationAdd_get()
	{
		$data = [
			'nama_pendidikan' => ($this->input->post('kampus')),
			'gelar' => ($this->input->post('gelar')),
			'status' => ($this->input->post('status')),
			'id_user' => ($this->input->post('id_user')),
		];
		$this->user->insert_global("pendidikan", $data);
		redirect(site_url("home/profil"));
	}
	public function ProjectAdd_get()
	{
		$data = [
			'nama_project' => ($this->input->post('nama')),
			'link_project' => ($this->input->post('link')),
			'desc' => ($this->input->post('desc')),
			'id_user' => ($this->input->post('id_user')),
		];
		$this->user->insert_global("projects", $data);
		redirect(site_url("home/profil"));
	}
	public function updtProject_get()
	{
		$data = [
			'nama_project' => ($this->input->post('nama')),
			'link_project' => ($this->input->post('link')),
			'desc' => ($this->input->post('desc')),
		];
		print_r($data);
		$this->db->where('id_project', $this->input->post('id_project'));
		$this->db->update('projects', $data);
		redirect(site_url("home/profil"));
	}
}
