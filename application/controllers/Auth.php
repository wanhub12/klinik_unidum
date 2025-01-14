<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_login');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('v_login');
    }

    function login_aksi()
    {
        $user = $this->input->post('username', true);
        $pass = md5($this->input->post('password', true));

        // Rule validasi
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() != FALSE) {
            $where = array(
                'username' => $user,
                'password' => $pass
            );
            $cekLogin = $this->m_login->cek_login($where)->num_rows();

            if ($cekLogin > 0) {
                $sess_data = array(
                    'login' => 'OK',
                    'username' => $user
                );
                $this->session->set_userdata($sess_data);

                redirect('dashboard');
            } else {
                redirect('Auth');
            }
        } else {
            $this->load->view('v_login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth');
    }
}
