<<<<<<< HEAD
<?php
class Login extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_data');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/tampilanlogin');
        } else {
            $this->user_data->cekuser();
        }
    }
    public function daftar()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/tampilandaftar');
        } else {
            $this->user_data->inputdata();
            redirect('login');
        }
    }
}
=======
<?php
class Login extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_data');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/tampilanlogin');
        } else {
            $this->user_data->cekuser();
        }
    }
    public function daftar()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/tampilandaftar');
        } else {
            $this->user_data->inputdata();
            redirect('login');
        }
    }
    function logout(){
        $this->session->session_destroy();
        redirect('login');
    }
}
>>>>>>> Anggi
