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
        $this->load->model('User_model', 'user');
    }
    function index_get()
    {
        include_once APPPATH . "libraries/vendor/autoload.php";
        $google_client = new Google_Client();
        $google_client->setClientId('223694650381-5m3v5m0kcp81nsuln02kljp0sfvknp45.apps.googleusercontent.com'); //Define your ClientID
        $google_client->setClientSecret('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'); //Define your Client Secret Key
        $google_client->setRedirectUri('http://localhost/pasti_kerja_indonesia/index.php/auth/Auth/loginApi'); //Define your Redirect Uri
        $google_client->addScope('email');
        $google_client->addScope('profile');
        $login_button = '<a href="' . $google_client->createAuthUrl() . '"> <divgi class="btn btn-google btn-user btn-block">
        <i class="fab fa-google fa-fw"></i> Login with Google
    </divgi></a>';
        $data['login_button'] = $login_button;
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'valid_email' => 'Email Not Valid',
            'required' => 'Email Must not be blank']);
        $this->form_validation->set_rules('pass', 'Password', 'trim|required',
            ['required' => 'Password must not be blank']);
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_auth');
            $this->load->view('auth/login', $data);
            $this->load->view('layout/footer_auth');
        } else {
            $this->cek_login();
        }
    }
    function loginApi_get()
    {
        include_once APPPATH . "libraries/vendor/autoload.php";

        $google_client = new Google_Client();

        $google_client->setClientId('223694650381-5m3v5m0kcp81nsuln02kljp0sfvknp45.apps.googleusercontent.com'); //Define your ClientID
        $google_client->setClientSecret('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'); //Define your Client Secret Key
        $google_client->setRedirectUri('http://localhost/pasti_kerja_indonesia/index.php/auth/Auth/loginApi'); //Define your Redirect Uri
        $google_client->addScope('email');
        $google_client->addScope('profile');
        if (isset($_GET["code"])) {
            $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
            if (!isset($token["error"])) {
                $google_client->setAccessToken($token['access_token']);
                $this->session->set_userdata('access_token', $token['access_token']);
                $google_service = new Google_Service_Oauth2($google_client);
                $data = $google_service->userinfo->get();
                if ($this->user->Is_already_register($data['email'])) {
                    //update data
                    $user_data = array(
                        // 'id_user' => $data['id_user'],
                        'nama' => $data['given_name'].$data['family_name'],
                        'email' => $data['email'],
                        'profilePicture' => $data['picture'],
                        'role' => "user",
                        'lokasi' => "Not Set",
                        'jenis_kelamin' => $data['gender']
                    );
                   
                    $user = $this->db->get_where('user', ['email' =>  $data['email']])->row_array();
                    $user_data['id_user'] = $user['id_user'];
                    $this->session->set_userdata($user_data);
                    $this->user->Update_user_data($user_data, $user['id_user']);
                } else {
                    $user = $this->db->get_where('user', ['email' =>  $data['email']])->row_array();
                    $user_data = array(
                        'id_user' => $user['id_user'],
                        'nama' => $data['given_name'].$data['family_name'],
                        'email' => $data['email'],
                        'profilePicture' => $data['picture'],
                        'role' => "user",
                        'lokasi' => "Not Set",
                    );
                    $this->session->set_userdata($user_data);
                    $this->user->Insert_user_data($user_data);
                }                
            }
        }
            redirect(site_url(""));
    }

    function register_get()
    {
        if ($this->session->userdata('email')) {
            redirect('home');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Please enter Your first Name',
        ]);
        $this->form_validation->set_rules('noHP', 'noHP', 'required|trim', [
            'required' => 'Please enter your phone number',
        ]);
        $this->form_validation->set_rules('lokasi', 'lokasi', 'required|trim', [
            'required' => 'Please enter your location',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email Have Registered!',
            'valid_email' => 'Must be a valid email',
            'required' => 'Email must not empty']);
        $this->form_validation->set_rules('pass', 'Password', 'required|trim|min_length[8]|matches[pass2]', [
            'matches' => 'Password Not same',
            'min_length' => 'Password to short',
            'required' => 'Password must not empty']);
        $this->form_validation->set_rules('pass2', 'Password', 'required|trim|min_length[8]|matches[pass]');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_auth');
            $this->load->view('auth/register');
            $this->load->view('layout/footer_auth');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                // 'id_user' => htmlspecialchars($this->input->post('email', true)),
                'noHp' => htmlspecialchars($this->input->post('noHP', true)),
                'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
                'profilePicture' => base_url('assets/img/').'pp.jpg',
                'role' =>  $this->input->post('role'),
                'lokasi'=>htmlspecialchars($this->input->post('lokasi', true)),
            ];
            print_r($data);
            $this->user->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun terdaftar, Silahkan Login!</div>');
            redirect('login');
        }
    }
    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('pass');
        if ($email == "ADMIN@ADMIN.com" && $password == "ADMINPKI") {
            // redirect("Admin");
            $data = [
                'email' => $email
            ];
            $this->session->set_userdata($data);
            redirect("Admin");
        }
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['pass'])) {
                $data = [
                    'nama' => $user['nama'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id_user' => $user['id_user'],
                ];
                if($user['role']=='user'){
                    $this->session->set_userdata($data);
                    redirect('Home');
                }
                else if($user['role']=='company'){
                    $this->session->set_userdata($data);
                    redirect('company');
                }
            }else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                redirect('login');
            }
        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email Not Found </div>');
            redirect("login");
        }
    }
    public function logout_get()
    {
        // $this->session->unset_userdata;
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Log out Success</div>');
        redirect('login');
    }

}
