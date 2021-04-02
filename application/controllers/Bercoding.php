<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bercoding extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'BerCODING ID';
        $this->load->view('templates/header_index', $data);
        $this->load->view('auth/index');
        $this->load->view('templates/footer');
    }

    public function about()
    {
        $data['title'] = 'Tentang Kami | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('about/about');
        $this->load->view('templates/footer');
    }

    public function dev()
    {
        $data['title'] = 'Web Development | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('about/web-dev');
        $this->load->view('templates/footer');
    }

    public function desk()
    {
        $data['title'] = 'Desktop App Development | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('about/desk-app');
        $this->load->view('templates/footer');
    }

    public function database()
    {
        $data['title'] = 'Database Management | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('about/database');
        $this->load->view('templates/footer');
    }

    public function framework()
    {
        $data['title'] = 'Framework | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('about/framework');
        $this->load->view('templates/footer');
    }

    public function portofolio()
    {
        $data['title'] = 'Portofolio | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('portofolio/all-portfolio');
        $this->load->view('templates/footer');
    }
    public function portofolio2()
    {
        $data['title'] = 'Portofolio | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('portofolio/portfolio-details');
        $this->load->view('templates/footer');
    }

    public function contact()
    {
        $data['title'] = 'Portofolio | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('contact/contact');
        $this->load->view('templates/footer');
    }

    public function login()
    {
        $this->load->model('m_bercode');
        $this->load->view('templates/login_header');
        $this->load->view('login/index');
        $this->load->view('templates/login_footer');
    }
}
