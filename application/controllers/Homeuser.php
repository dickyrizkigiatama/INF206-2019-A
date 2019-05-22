<<<<<<< HEAD
<?php
class Homeuser extends CI_controller
{
    public function index()
    {
        if(isset($_SESSION['username'])){
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $this->load->view('user/homeuser', $data);
        }
        else{
            redirect('login');
        }
    }
=======
<?php
class Homeuser extends CI_controller
{
    public function index()
    {
        if(isset($_SESSION['username'])){
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $this->load->view('user/homeuser', $data);
        }
        else{
            redirect('login');
        }
    }
>>>>>>> Anggi
}