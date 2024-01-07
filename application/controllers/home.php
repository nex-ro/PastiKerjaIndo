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
		$data['lokasi'] = $this->user->getWdistinct('lowongan', 'lokasi');
		$this->db->reset_query();
		$data['kategori'] = $this->user->getWdistinct('lowongan', 'kategori');
		$this->db->reset_query();
		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/job', $data);
		$this->load->view('layout/footer');
	}
	public function searchjob_get()
	{
		$data['lowongan'] = $this->user->selectAll('lowongan');

		$data['search'] = $this->user->search_lowongan('lowongan', $this->input->post('cari', true), $this->input->post('lokasi', true), $this->input->post('kategori', true));

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
		$data['carrier'] = $this->user->getWhereAll('experience', 'id_user', $this->session->userdata('id_user'));
		$data['pendidikan'] = $this->user->getWhereAll('pendidikan', 'id_user', $this->session->userdata('id_user'));
		$data['project'] = $this->user->getWhereAll('projects', 'id_user', $this->session->userdata('id_user'));

		$this->load->view('view_halaman_awal/profil', $data);
		$this->load->view('layout/footer');
	}
	public function UpdatePersonalInfo_get()
	{
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
	public function apply_get($lowongan)
	{
		if (!$this->session->userdata('id_user')) {
			redirect('home');
		}
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$applier_id = $this->session->userdata('id_user');
			$config['upload_path'] = 'assets/cv/';
			$config['allowed_types'] = 'pdf|doc|docx';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('cv')) {
				$cv_data = $this->upload->data();
				$cv_path = 'assets/cv/' . $cv_data['file_name'];
				$data = array(
					'id_lowongan' => $lowongan,
					'id_pengambil' => $applier_id,
					'cv' => $cv_path,
					'status' => "Pending"
				);
				$this->user->insert_global('apply', $data);
				redirect('home');
			}
		}
	}
	public function updateApplicationStatus()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$applicationId = $this->input->post('id_apply');
			$status = $this->input->post('status');
			$description = $this->input->post('description');
			$data = array(
				'status' => $status,
				'description' => $description
			);
			$this->db->where('id_apply', $applicationId);
			$this->db->update('apply', $data);
				$notifdata = array(
				'id_apply' => $applicationId,
				'status' => $status,
				'description' => $description
			);
			$this->db->insert('notif', $notifdata);
	
			echo "Application status updated successfully.";
		} else {
			show_404(); // Invalid request
		}
	}
}
