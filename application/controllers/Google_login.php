<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Google_login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    function login()
    {
        
    }
    function logout()
    {
        $this->session->unset_userdata('access_token');
        $this->session->unset_userdata('user_data');
        redirect('google_login/login');
    }
}
