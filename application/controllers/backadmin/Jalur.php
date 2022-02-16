<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jalur extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Jalur_model','jm');
        if(!$this->session->userdata('admin_pkbm')){
            redirect('backadmin/login');
        }
    }
    public function editColor(){
        if($this->input->method(TRUE) == "POST"){
            $update['bg_color'] = $this->input->post('bg_color');
            $update['font_color'] = $this->input->post('font_color');
            $this->db->where('tipe_jenjang',$this->input->post('jenjang'));
            if($this->db->update('jalur_jenjang',$update)){
                redirect('backadmin/jalur');
            }
        }

    }
	public function index(){
        $data['view'] = 'back/jalur/index';
        $data['sd'] = $this->jm->getJalur(false,'sd');
        $data['warnasd'] = $this->jm->getJalur(false,'sd',true);
        $data['smp'] = $this->jm->getJalur(false,'smp');
        $data['warnasmp'] = $this->jm->getJalur(false,'smp',true);
        $data['smk'] = $this->jm->getJalur(false,'smk');
        $data['warnasmk'] = $this->jm->getJalur(false,'smk',true);
        $data['sma'] = $this->jm->getJalur(false,'sma');
        $data['warnasma'] = $this->jm->getJalur(false,'sma',true);
        if($this->input->method(TRUE) == "POST"){
            $insert['jalur_jenjang'] = $this->input->post('jalur_jenjang');
            $insert['tipe_jenjang'] = $this->input->post('tipe_jenjang');
            if($this->jm->insertJalur($insert)){
                redirect('backadmin/jalur');
            }
        }
		$this->load->view('back/layouts',$data);
	}
    public function edit($id = false){
        if($id){
            if($this->input->method(TRUE) == "POST"){
                // var_dump($filename);die();
                $dataInsert['title'] = $this->input->post('title');
                $dataInsert['description'] = $this->input->post('description');
                $dataInsert['image'] = $filename['file']['file_name'];
                $daaInsert['createdAt'] = date('Y-m-d H:i:s');
                if($this->jm->updateJalur($id,$dataInsert)){
                    redirect('backadmin/jalur');
                }
            }
            $data['view'] = 'back/jalur/edit';
            $data['data'] = $this->jm->getJalur($id)->row();
            $this->load->view('back/layouts',$data);
            
        }else{
            show_404();
        }
    }
    public function tambah(){
        if($this->input->method(TRUE) == "POST"){
            // var_dump($this->uploadImgJalur());die();
            if($this->uploadImgJalur()){
                $filename = $this->uploadImgJalur();
                $dataInsert['title'] = $this->input->post('title');
                $dataInsert['description'] = $this->input->post('description');
                $dataInsert['image'] = $filename['file']['file_name'];
                $dataInsert['createdAt'] = date('Y-m-d H:i:s');
                if($this->jm->insertJalur($dataInsert)){
                    redirect('backadmin/jalur');
                }
            }else{
                $dataInsert['title'] = $this->input->post('title');
                $dataInsert['description'] = $this->input->post('description');
                // $dataInsert['image'] = $this->input->post('image');
                $dataInsert['createdAt'] = date('Y-m-d H:i:s');
                if($this->jm->insertJalur($dataInsert)){
                    redirect('backadmin/jalur');
                }
            }
        }
        $data['view'] = 'back/jalur/tambah';
        // $data['data'] = $this->jm->getJalur($id)->row();
		$this->load->view('back/layouts',$data);
    }
    public function hapus($id = false){
        if($id){
            if($this->jm->deleteJalur($id)){
                redirect('backadmin/jalur');
            }
        }else{
            show_404();
        }
    }
    public function uploadImgJalur(){
        $filename = 'pkbm_jalur_'.time();
        // var_dump($filename);
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|webp';
        $config['max_size']    = '2048';
        $config['overwrite'] = true;
        $config['file_name'] = $filename;
        $this->load->library('upload', $config);
        $this->upload->initialize($config); 
        if ($this->upload->do_upload('image')) { 
            // var_dump($this->upload->data());die();
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '', 'filename' => $filename);
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
}
