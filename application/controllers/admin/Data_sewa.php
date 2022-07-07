<?php

class Data_sewa extends CI_Controller{

        public function index()
        {
          $this->load->model('sewa_model');
          $data['sewa'] = $this->sewa_model->get_data('sewa');
          $this->load->view('backend-templates/header');
          $this->load->view('backend-templates/sidebar');
          $this->load->view('admin/data_sewa',$data);
          $this->load->view('backend-templates/footer');
      }

      public function view()
      {
        $_id = $this->input->get('id');
        $this->load->model('sewa_model','sewa1');
        $data['sewa'] = $this->sewa1->findById($_id);

        $this->load->view('frontend-templates/header');
        $this->load->view('crud/data_sewa/view',$data);
        $this->load->view('frontend-templates/footer');
      }

      public function create()
      {
        $data['judul'] ='Form Data Sewa Mobil';
        $this->load->view('frontend-templates/header');
        $this->load->view('crud/data_sewa/create',$data);
        $this->load->view('frontend-templates/footer');
      }

    public function save()
    {
            $this->load->model("sewa_model","sewa1");
            $_id = $this->input->post('id');
            $_tanggal_mulai = $this->input->post('tanggal_mulai');
            $_tanggal_akhir = $this->input->post('tanggal_akhir');
            $_tujuan = $this->input->post('tujuan');
            $_noktp = $this->input->post('noktp');
            $_usersid = $this->input->post('users_id');
            $_mobilid = $this->input->post('mobil_id');
            $_idedit = $this->input->post('idedit');

            $data_sewa['tanggal_mulai']=$_tanggal_mulai;
            $data_sewa['tanggal_akhir']=$_tanggal_akhir;
            $data_sewa['tujuan']=$_tujuan;
            $data_sewa['noktp']=$_noktp;
            $data_sewa['users_id']=$_usersid;
            $data_sewa['mobil_id']=$_mobilid;


            if(isset($_idedit)){
                $where['id']=$_idedit;
                $this->sewa1->update($data_sewa, $where);
            }else{
                $this->sewa1->save($data_sewa);
            }
            redirect(base_url().'admin/data_sewa', 'refresh');
          }


    public function edit(){
      $_id = $this->input->get('id');
      $this->load->model("sewa_model","sewa1");
      $sewaedit = $this->sewa1->findById($_id);

      $data['judul']='Form Edit Data Sewa';
      $data['sewaedit']=$sewaedit;
      $this->load->view('backend-templates/header');
      $this->load->view('backend-templates/sidebar');
      $this->load->view('crud/data_sewa/update',$data);
      $this->load->view('backend-templates/footer');
    }

    public function delete(){
      $_id = $this->input->get('id');
      $this->load->model("sewa_model","sewa1");
      $this->sewa1->delete($_id);
      redirect(base_url().'admin/data_sewa', 'refresh');
  }

  




}


?>