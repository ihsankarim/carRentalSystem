<?php

class Data_perawatan extends CI_Controller{
    public function index()
    {
        $this->load->model('perawatan_model');
        $data['perawatan'] = $this->perawatan_model->get_data('perawatan')->result();
        $this->load->view('backend-templates/header');
        $this->load->view('backend-templates/sidebar');
        $this->load->view('admin/data_perawatan',$data);
        $this->load->view('backend-templates/footer');
    }

 
    public function create()
    {
        $data['judul'] ='Form Data Perawatan';
        $this->load->view('backend-templates/header');
        $this->load->view('backend-templates/sidebar');
        $this->load->view('crud/data_perawatan/create',$data);
        $this->load->view('backend-templates/footer');
    }

    public function save()
    {
        $this->load->model('perawatan_model','prw1');
        $_id = $this->input->post('id');
        $_tanggal = $this->input->post('tanggal');
        $_biaya = $this->input->post('biaya');
        $_km = $this->input->post('km_mobil');
        $_deskripsi = $this->input->post('deskripsi');
        $_idmobil = $this->input->post('mobil_id');
        $_jpid = $this->input->post('jenis_perawatan_id');
        $_idedit = $this->input->post('idedit');

        $data_prw['tanggal']=$_tanggal;
        $data_prw['biaya']=$_biaya;
        $data_prw['km_mobil']=$_km;
        $data_prw['deskripsi']=$_deskripsi;
        $data_prw['mobil_id']=$_idmobil;
        $data_prw['jenis_perawatan_id']=$_jpid;


        if(isset($_idedit)){
            $where['id']=$_idedit;
            $this->prw1->update($data_prw, $where);
        }else{
            $this->prw1->save($data_prw);
        }
        redirect(base_url().'admin/data_perawatan', 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("perawatan_model","prw1");
        $prwedit = $this->prw1->findById($_id);

        $data['judul'] ='Form Update Perawatan';
        $data['prwedit']=$prwedit;
        $this->load->view('backend-templates/header');
        $this->load->view('backend-templates/sidebar');
        $this->load->view('crud/data_perawatan/update',$data);
        $this->load->view('backend-templates/footer');


        // redirect(base_url().'admin/data_perawatan', 'refresh');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("perawatan_model","prw1");
        $this->prw1->delete($_id);
        redirect(base_url().'admin/data_perawatan', 'refresh');
    }

}


?>