<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

use chriskacerguis\RestServer\RestController;

class Company extends RestController
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Exp_model', 'exp');
    $this->load->model('User_model', 'user');
  }

  public function index_get()
  {
    $data['lowongan'] = $this->user->getWhereAll('lowongan', 'id_user',  $this->session->userdata('id_user'),);
    $this->load->view('layout/headerCompany');
    $this->load->view('company/listLowongan',$data);
    $this->load->view('layout/footerAdm');
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
      $this->load->view('layout/headerCompany');
      $this->load->view('company/vacany');
      $this->load->view('layout/footerAdm');
    } else {
      $data = [
        'lowongan' => htmlspecialchars($this->input->post('lowongan', true)),
        'requirement' => htmlspecialchars($this->input->post('requirement', true)),
        'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
        'kategori' => htmlspecialchars($this->input->post('kategori'), true),
        'status' => htmlspecialchars($this->input->post('status'), true),
        'id_user' => $this->session->userdata('id_user'),
        'type' => htmlspecialchars($this->input->post('type'), true),
        'salary' => htmlspecialchars($this->input->post('salary'), true),
        'desc' => htmlspecialchars($this->input->post('desc'), true),
      ];
      print_r($data);
      $this->user->insert_global('lowongan', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Lowongan Terbuat</div>');
      redirect('Company/buatLowongan');
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
  public function editLowongan_get(){
    $data = [
      'lowongan' => htmlspecialchars($this->input->post('lowongan', true)),
      'requirement' => htmlspecialchars($this->input->post('requirement', true)),
      'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
      'kategori' => htmlspecialchars($this->input->post('kategori'), true),
      'status' => htmlspecialchars($this->input->post('status'), true),
      'id_user' => $this->session->userdata('id_user'),
      'type' => htmlspecialchars($this->input->post('type'), true),
      'salary' => htmlspecialchars($this->input->post('salary'), true),
      'desc' => htmlspecialchars($this->input->post('desc'), true),
    ];
		$this->db->where('id_lowongan', $this->input->post('id_lowongan'));
		$this->db->update('lowongan', $data);
		redirect(site_url("Company"));
  }
  public function delateLowongan_get(){
    $id=$_GET['id'];
    $this->user->hapus_data('id_lowongan' ,$id,'lowongan');
    redirect(site_url("Company"));

  }


}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */