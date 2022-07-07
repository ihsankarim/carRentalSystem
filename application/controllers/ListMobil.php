<?php

class ListMobil extends CI_Controller{
          public function index()
          {
                    $this->load->model('mobil_model');
                    $data['mobil'] = $this->mobil_model->get_data('mobil');
                    $this->load->view('frontend-templates/header');
                    $this->load->view('sewa',$data);
                    $this->load->view('frontend-templates/footer');
          }
}


?>