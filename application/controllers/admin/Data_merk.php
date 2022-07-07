<?php

class Data_merk extends CI_Controller{
    public function index()
    {
        $this->load->model('merk_model');
        $data['merk'] = $this->merk_model->get_data('merk')->result();
        $this->load->view('backend-templates/header');
        $this->load->view('backend-templates/sidebar');
        $this->load->view('admin/data_merk',$data);
        $this->load->view('backend-templates/footer');
    }

 
    public function create()
    {
        $data['judul'] ='Form Data Merk Mobil';
        $this->load->view('backend-templates/header');
        $this->load->view('backend-templates/sidebar');
        $this->load->view('crud/data_merk/create',$data);
        $this->load->view('backend-templates/footer');
    }

    public function save()
    {
        $this->load->model('merk_model','mrk1');
        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_produk = $this->input->post('produk');
        $_idedit = $this->input->post('idedit');

        $data_mrk['nama']=$_nama;
        $data_mrk['produk']=$_produk;


        if(isset($_idedit)){
            $where['id']=$_idedit;
            $this->mrk1->update($data_mrk, $where);
        }else{
            $this->mrk1->save($data_mrk);
        }
        redirect(base_url().'admin/data_merk', 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("merk_model","mrk1");
        $mrkedit = $this->mrk1->findById($_id);

        $data['judul'] ='Form Update Merk Mobil';
        $data['mrkedit']=$mrkedit;
        $this->load->view('backend-templates/header');
        $this->load->view('backend-templates/sidebar');
        $this->load->view('crud/data_merk/update',$data);
        $this->load->view('backend-templates/footer');

    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("merk_model","mrk1");
        $this->mrk1->delete($_id);
        redirect(base_url().'admin/data_merk', 'refresh');
    }

}


?>