<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function registration()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[account.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('Password', 'required|trim|min_length[3]|max_length[12]', [
            'min_length' => 'Password too short!',
            'max_length' => 'Password too long!'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/login_header');
            $this->load->view('login/index');
            $this->load->view('templates/login_footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'level' => 'user',
            ];

            $this->db->insert('account', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-primary" role="alert">
            Congratulation ! Your account has been created.
            </div>'
            );
            redirect('bercoding/login');
        }
    }

    public function masuk()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/login_header');
            $this->load->view('login');
            $this->load->view('templates/login_footer');
        } else {
            $this->_login();
        }
    }



    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('account', ['username' => $username])->row_array();

        if ($user) {

            if ($password == $user['password']) {
                //if (password_verify($password, $user['password'])) {
                $data = [
                    'username'  => $user['username'],
                    'level'     => $user['level']
                ];
                $this->session->set_userdata($data);
                if ($user['level'] == 'admin') {
                    redirect('admin');
                } else {
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">Password Salah!</div>'
                );
                redirect('bercoding/login');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Your account is not registered yet!</div>'
            );
            redirect('bercoding/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('level');

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert">You have been logged out!</div>'
        );
        redirect('bercoding');
    }
}
