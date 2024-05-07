<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Users extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if (empty($this->session->userdata('login'))) {
      redirect('auth');
    }
    $this->load->model('m_users');
  }

  public function index()
  {
    $data['title'] = "Manajemen Data Users";
    $data['users'] = $this->m_users->tampil_data()->result_array();
    $this->load->view('v_header');
    $this->load->view('Users/v_data', $data);
    $this->load->view('v_footer');
  }
}
