<?php
class Homeuser extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_data');
    }
    public function index()
    {
        if (isset($_SESSION['username'])) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['semuaperusahaan'] = $this->user_data->listperusahaan();
            $this->load->view('user/homeuser', $data);
        } else {
            redirect('login');
        }
    }

    public function detail($id)
    {
        $data['perusahaan'] = $this->user_data->perusahaan($id);
        $this->load->view('user/detail', $data);
    }
}
