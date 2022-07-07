<?php

// class Data_mobil extends CI_Controller
// {
//     public function index()
//     {
//         $this->load->model('mobil_model');
//         $data['mobil'] = $this->mobil_model->get_data('mobil')->result();
//         $this->load->view('backend-templates/header');
//         $this->load->view('backend-templates/sidebar');
//         $this->load->view('admin/data_mobil',$data);
//         $this->load->view('backend-templates/footer');
//     }
//     public function create()
//     {
//         $data['judul'] ='Form Data Mobil';
//         $this->load->view('backend-templates/header');
//         $this->load->view('backend-templates/sidebar');
//         $this->load->view('crud/data_mobil/create',$data);
//         $this->load->view('backend-templates/footer');
//     }

//     public function save()
//     {
//         $this->load->model('mobil_model','mbl1');
//         $_nopol = $this->input->post('nopol');
//         $_warna = $this->input->post('warna');
//         $_biaya = $this->input->post('biaya');
//         $_deskripsi = $this->input->post('deskripsi');
//         $_cc = $this->input->post('cc');
//         $_tahun = $this->input->post('tahun');
//         $_merkid = $this->input->post('merk_id');
//         $_idedit = $this->input->post('idedit');


//         $data_mbl[]=$_nopol;
//         $data_mbl[]=$_warna;
//         $data_mbl[]=$_biaya;
//         $data_mbl[]=$_deskripsi;
//         $data_mbl[]=$_cc;
//         $data_mbl[]=$_tahun;
//         $data_mbl[]=$_merkid;

//         if ($_FILES['foto']['name']) {
//             $config['upload_path']          = './foto/';
//             $config['allowed_types']        = 'gif|jpg|png';
//             $this->load->library('upload', $config);
//             if (!$this->upload->do_upload('foto')) {
//                 $error = array('error' => $this->upload->display_errors());
    
//                 // $this->load->view('upload_form', $error);
//             }
//             else {
//                 $data_mbl[]=$this->upload->data()['file_name'];
//                 $data = array('upload_data' => $this->upload->data());
    
//                 // $this->load->view('upload_success', $data);
//             }
//         }

//         if(isset($_idedit)){
//             $data_mbl[]=$_idedit;
//             $this->mbl1->update($data_mbl);
//         }else{
//             $this->mbl1->save($data_mbl);
//         }
//         redirect(base_url().'admin/data_mobil', 'refresh');

//     }
// }


?>


<?php

class Data_mobil extends CI_Controller{

        public function index()
        {
          $this->load->model('mobil_model');
          $data['mobil'] = $this->mobil_model->get_data('mobil');
          $this->load->view('backend-templates/header');
          $this->load->view('backend-templates/sidebar');
          $this->load->view('admin/data_mobil',$data);
          $this->load->view('backend-templates/footer');
      }

      public function view()
      {
        $_id = $this->input->get('id');
        $this->load->model('mobil_model','mbl1');
        $data['mobil'] = $this->mbl1->findById($_id);

        $this->load->view('frontend-templates/header');
        $this->load->view('crud/data_mobil/view',$data);
        $this->load->view('frontend-templates/footer');
      }

      public function create()
      {
        $data['judul'] ='Form Data mobil Mobil';
        $this->load->view('frontend-templates/header');
        $this->load->view('crud/data_mobil/create',$data);
        $this->load->view('frontend-templates/footer');
      }

    public function save()
    {
        $this->load->model('mobil_model','mbl1');
        $_nopol = $this->input->post('nopol');
        $_warna = $this->input->post('warna');
        $_biaya = $this->input->post('biaya');
        $_deskripsi = $this->input->post('deskripsi');
        $_cc = $this->input->post('cc');
        $_tahun = $this->input->post('tahun');
        $_merkid = $this->input->post('merk_id');
        $_foto = $this->input->post('foto');
        $_idedit = $this->input->post('idedit');

            $data_mbl['nopol']=$_nopol;
            $data_mbl['warna']=$_warna;
            $data_mbl['biaya_sewa']=$_biaya;
            $data_mbl['deskripsi']=$_deskripsi;
            $data_mbl['cc']=$_cc;
            $data_mbl['tahun']=$_tahun;
            $data_mbl['merk_id']=$_merkid;
            $data_mbl['foto']=$_foto;

            $this->load->model('sewa_model');

    
            if ($_FILES['foto']['name']) {
                $config['upload_path']          = './foto/';
                $config['allowed_types']        = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    $error = array('error' => $this->upload->display_errors());
        
                    // $this->load->view('upload_form', $error);
                }
                else {
                    $data_mbl['foto']=$this->upload->data()['file_name'];
                    $data = array('upload_data' => $this->upload->data());
        
                    // $this->load->view('upload_success', $data);
                }
            }
    
        //     if(isset($_idedit)){
        //         $data_mbl[]=$_idedit;
        //         $this->mbl1->update($data_mbl);
        //     }else{
        //         $this->mbl1->save($data_mbl);
        //     }
        //     redirect(base_url().'admin/data_mobil', 'refresh');
    
        // }
            if(isset($_idedit)){
                $where['id']=$_idedit;
                $this->mbl1->update($data_mbl, $where);
            }else{
                $this->mbl1->save($data_mbl);
            }
            redirect(base_url().'admin/data_mobil', 'refresh');
          }


    public function edit(){
      $_id = $this->input->get('id');
      $this->load->model("mobil_model","mbl1");
      $mobiledit = $this->mbl1->findById($_id);

      $data['judul']='Form Edit Data mobil';
      $data['mobiledit']=$mobiledit;
      $this->load->view('backend-templates/header');
      $this->load->view('backend-templates/sidebar');
      $this->load->view('crud/data_mobil/update',$data);
      $this->load->view('backend-templates/footer');
    }

    public function delete(){
      $_id = $this->input->get('id');
      $this->load->model("mobil_model","mbl1");
      $this->mbl1->delete($_id);
      redirect(base_url().'admin/data_mobil', 'refresh');
  }

  




}


?>