<?php

class Home extends CI_Controller
{
          public function index()
          {
                    $this->load->view('frontend-templates/header');
                    $this->load->view('frontend-templates/home');
                    $this->load->view('frontend-templates/footer');
          
          }

}

?>