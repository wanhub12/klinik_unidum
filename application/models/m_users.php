<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_users extends CI_Model
{
  function tampil_data()
  {
    return $this->db->get('users');
  }
}
