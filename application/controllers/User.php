<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['account'] = $this->db->get_where('account', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/dashboard_footer');
    }
}
