<?php
class Homeuser extends CI_controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('user/homeuser', $data);
    }
}