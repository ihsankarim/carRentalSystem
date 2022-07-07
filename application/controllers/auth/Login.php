<?php

class Login extends CI_Controller {
          public function index()
          {
                    $data =  [];
                    // $this->load->view('frontend-templates/header');
                    // $this->load->view('auth/login',$data);
                    // $this->load->view('frontend-templates/footer');

                    $this->load->view('auth/header');
                    $this->load->view('auth/login',$data);
                    $this->load->view('auth/footer');
          }

          public function otentikasi() 
          {
                    $this->load->model("users_model","users");
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                    $row = $this->users->login($username,$password);
                    if(isset($row)){
                              $this->session->set_userdata('USERNAME',$row->username);
                              $this->session->set_userdata('ROLE',$row->role);
                              $this->session->set_userdata('USERS',$row);

                              redirect(base_url().'home');
                    } 
                    else{
                              redirect(base_url().'auth/login?status=f');
                    }
          
          }
          public function logout(){
                    $this->session->unset_userdata('USERNAME');
                    $this->session->unset_userdata('ROLE');$this->session->unset_userdata('USERS');
                    redirect(base_url().'auth/login','refresh');
          }
}


?>