<?php
class Register extends CI_Controller
{
          public function __construct()
          {
                    parent::__construct();
                    $this->load->model("users_model");
          }
          public function index()
          {
                    $this->load->view('auth/header');
                    $this->load->view('auth/register');
                    $this->load->view('auth/footer');
          }

          // public function save()
          // {
          //           $this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[users.username]');
		//           $this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
          //           $this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]');
		//           $this->form_validation->set_rules('role', 'role','trim|required|min_length[1]|max_length[255]');
		//           if ($this->form_validation->run()==true)
          //                     {
          //                     $username = $this->input->post('username');
          //                     $password = $this->input->post('password');
          //                     $email = $this->input->post('email');
          //                     $role = $this->input->post('role');
          //                     $this->users_model->save($username,$password,$email,$role);
          //                     $this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
          //                     redirect('auth/login');
          //           }
          //           else
          //           {
          //                $this->session->set_flashdata('error', validation_errors());
          //                redirect('auth/register');
          //           }


          // }
          public function save(){
                    $this->load->model("users_model","users");
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                    $email = $this->input->post('email');
                    $role = $this->input->post('role');

                    $row = $this->users_model->register($username,  $password,$email,$role);

                    if(isset($row))
                    {
                              $this->session->userdata('USERNAME',$row->username);
                              $this->session->userdata('ROLE',$row->role);
                              $this->session->userdata('USER',$row);

                              redirect(base_url().'auth/login');

                    }else{
                              echo "<small> Register Failed </small>";
                    }
                    // redirect(base_url().'auth/register/'."<h1>Register Berhasil</h1>");

                    


          }
}
?>