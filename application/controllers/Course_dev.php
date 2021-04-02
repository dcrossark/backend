<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course_dev extends CI_Controller
{

    //CSS
    public function kursus_css()
    {
        $data['title'] = 'Kursus CSS | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('full-course/web-dev/CSS/kursus-css');
        $this->load->view('templates/footer');
    }

    public function pengenalan_css()
    {
        $data['title'] = 'Pengenalan CSS | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('full-course/web-dev/CSS/pengenalan-css');
        $this->load->view('templates/footer');
    }

    public function styling_button()
    {
        $data['title'] = 'Styling Button | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('full-course/web-dev/CSS/styling-button');
        $this->load->view('templates/footer');
    }
    public function styling_color()
    {
        $data['title'] = 'Styling Color | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('full-course/web-dev/CSS/styling-color');
        $this->load->view('templates/footer');
    }
    public function styling_font()
    {
        $data['title'] = 'Styling Font | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('full-course/web-dev/CSS/styling-font');
        $this->load->view('templates/footer');
    }
    public function styling_icon()
    {
        $data['title'] = 'Styling Icon | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('full-course/web-dev/CSS/styling-icon');
        $this->load->view('templates/footer');
    }
    public function styling_image()
    {
        $data['title'] = 'Styling Image | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('full-course/web-dev/CSS/styling-image');
        $this->load->view('templates/footer');
    }
    public function styling_link()
    {
        $data['title'] = 'Styling Link | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('full-course/web-dev/CSS/styling-link');
        $this->load->view('templates/footer');
    }
    public function styling_table()
    {
        $data['title'] = 'Styling Table | BerCODING ID';
        $this->load->view('templates/header2', $data);
        $this->load->view('full-course/web-dev/CSS/styling-table');
        $this->load->view('templates/footer');
    }

    //HTML
}
