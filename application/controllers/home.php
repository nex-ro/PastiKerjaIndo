<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;
class home extends RestController {
	public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model','user');
  }
	public function index_get()
	{
		$data['lowongan'] = $this->user->selectAll('lowongan');
		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/index',$data);
		$this->load->view('layout/footer');
	}
	public function job_get()
	{
		$data['lowongan'] = $this->user->selectAll('lowongan');
		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/job',$data);
		$this->load->view('layout/footer');
	}
	public function searchjob_get()
	{
		$data['lowongan'] = $this->user->selectAll('lowongan');echo $this->input->post('cari', true);
		$data['search'] = $this->user->search_lowongan('lowongan',$this->input->post('cari', true),$this->input->post('lokasi', true),$this->input->post('kategori', true));
		$this->load->view('layout/header');
		$this->load->view('view_halaman_awal/search_job',$data);
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
        if(!$this->session->userdata('email')){
            redirect('home');
        }
        $this->form_validation->set_rules('lowongan','lowongan','required|trim',[
          'required'=> 'Please enter the name of the job',
        ]);
        $this->form_validation->set_rules('requirement','requirement','required|trim',[
          'required'=> 'Please enter the requirement',
        ]);
		$this->form_validation->set_rules('lokasi','lokasi','required|trim',[
			'required'=> 'Please enter the Location',
		  ]);
		  $this->form_validation->set_rules('kategori','kategori','required|trim',[
			'required'=> 'Please enter the Category',
		  ]);
        if($this->form_validation->run() == false){
			$this->load->view('layout/header');
			$this->load->view('view_halaman_awal/buat_lowongan');
			$this->load->view('layout/footer');
        } else {
            $data = [
                'lowongan' => htmlspecialchars($this->input->post('lowongan', true)),
                'requirement' => htmlspecialchars($this->input->post('requirement', true)),
                'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
                'kategori' => htmlspecialchars($this->input->post('kategori'),true),
                'status' => htmlspecialchars($this->input->post('status'),true),
				'id_user' =>$this->session->userdata('id_user') ,
            ];
            $this->user->insert_global('lowongan',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Lowongan Terbuat</div>');
            redirect('home');        
        }
    }
	public function profil_get()
	{
		// $this->load->view('welcome_message');
		// $this->load->view('layout/header');
		$this->load->view('view_halaman_awal/profil');
		$this->load->view('layout/footer');
	}
	
	
}