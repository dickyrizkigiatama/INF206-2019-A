<?php

class user_data extends CI_Model
{
    public function inputdata()
    {
        $data = array(
            'username' => $this->input->post('username', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role' => 'user'
        );
        $this->db->insert('user', $data);
    }

    public function cekuser()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($user['role'] == "user") {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    redirect('homeuser');
                }
                else{
                    redirect('login');
                }   
            }
            elseif ($user['role'] == "admin"){
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    redirect('homeuser');
                }
                else{
                    redirect('login');
                }
            }else{
                redirect('login');
            }
            
        } else {
            redirect('login');
        }
    }
}
