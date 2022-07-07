<?php

class data_users extends CI_Controller{
    public function index()
    {
        $data['users'] = $this->users_model->get_data('users');
        $this->load->view('backend-templates/header');
        $this->load->view('backend-templates/sidebar');
        $this->load->view('admin/data_users',$data);
        $this->load->view('backend-templates/footer');
    }

    public function view()
      {
        $_id = $this->input->get('id');
        $this->load->model('users_model','users1');
        $data['users'] = $this->users1->findById($_id);

        $this->load->view('backend-templates/header');
        $this->load->view('crud/data_users/view',$data);
        $this->load->view('backend-templates/footer');
      }

      public function create()
      {
        $data['judul'] ='Form Data users Mobil';
        $this->load->view('backend-templates/header');
        $this->load->view('crud/data_users/create',$data);
        $this->load->view('backend-templates/footer');
      }

    public function save()
    {
            $this->load->model("users_model","users1");
            $_id = $this->input->post('id');
            $_username = $this->input->post('username');
            $_password = $this->input->post('MD5(password)');
            $_email = $this->input->post('email');
            $_created_at = $this->input->post('created_at');
            $_last_login = $this->input->post('last_login');
            $_status = $this->input->post('status');
            $_role = $this->input->post('role');
            $_idedit = $this->input->post('idedit');

            $data_users['username']=$_username;
            $data_users['password']=$_password;
            $data_users['email']=$_email;
            $data_users['created_at']=$_created_at;
            $data_users['last_login']=$_last_login;
            $data_users['status']=$_status;
            $data_users['role']=$_role;


            if(isset($_idedit)){
                $where['id']=$_idedit;
                $this->users1->update($data_users, $where);
            }else{
                $this->user1->save($data_users);
            }
            redirect(base_url().'admin/data_users', 'refresh');
          }


    public function edit(){
      $_id = $this->input->get('id');
      $this->load->model("users_model","users1");
      $usersedit = $this->users1->findById($_id);

      $data['judul']='Form Edit Data Users';
      $data['usersedit']=$usersedit;
      $this->load->view('backend-templates/header');
      $this->load->view('backend-templates/sidebar');
      $this->load->view('crud/data_users/update',$data);
      $this->load->view('backend-templates/footer');
    }

    public function delete(){
      $_id = $this->input->get('id');
      $this->load->model("users_model","users1");
      $this->users1->delete($_id);
      redirect(base_url().'admin/data_users', 'refresh');
  }
}


?>