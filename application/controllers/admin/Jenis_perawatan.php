<?php

class Jenis_perawatan extends CI_Controller{
    public function index()
    {
        $this->load->model('jenis_model');
        $data['jenis_perawatan'] = $this->jenis_model->get_data('jenis_perawatan')->result();
        $this->load->view('backend-templates/header');
        $this->load->view('backend-templates/sidebar');
        $this->load->view('admin/jenis_perawatan',$data);
        $this->load->view('backend-templates/footer');
    }

    public function create()
    {
        $data['judul'] ='Form Daftar Jenis Perawatan Mobil';
        $this->load->view('backend-templates/header');
        $this->load->view('backend-templates/sidebar');
        $this->load->view('crud/jenis_perawatan/create',$data);
        $this->load->view('backend-templates/footer');
    }

    public function save()
    {
        $this->load->model('jenis_model','jprw1');
        $_jenis_perawatan = $this->input->post('jenis');
        $_idedit = $this->input->post('idedit');

        $data_jenis_perawatan[]=$_jenis_perawatan;

        if(isset($_idedit)){
            $data_jenis_perawatan[]=$_idedit;
            $this->jprw1->update($data_jenis_perawatan);
        }else{
            $this->jprw1->save($data_jenis_perawatan);
        }
        redirect(base_url().'admin/jenis_perawatan', 'refresh');

    }
}


?>