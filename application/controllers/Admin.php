<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = $this->db->get_where('account', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/dashboard_footer');
    }
}
