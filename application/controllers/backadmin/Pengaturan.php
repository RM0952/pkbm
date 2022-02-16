<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Pengaturan_model','km');
        if(!$this->session->userdata('admin_pkbm')){
            redirect('backadmin/login');
        }
    }
	public function index(){
        $data['view'] = 'back/config/index';
        $data['pengaturan'] = $this->km->getPengaturan()->row();
		$this->load->view('back/layouts',$data);
        if($this->input->method(TRUE) == "POST"){
            if($this->uploadImgPosts('logo')){
                $filename = $this->uploadImgPosts('logo');
                if($filename['result'] != 'failed'){
                    $dataUpdate['logo'] = $filename['file']['file_name'];
                }
            }
            if($this->uploadImgPosts('icon')){
                $filename = $this->uploadImgPosts('icon');
                if($filename['result'] != 'failed'){
                    $dataUpdate['icon'] = $filename['file']['file_name'];
                }
            }

            $dataUpdate['title'] = $this->input->post('title');
            $dataUpdate['embed_lokasi'] = $this->input->post('embed_lokasi');
            $dataUpdate['meta_keyword'] = $this->input->post('meta_keyword');
            $dataUpdate['meta_description'] = $this->input->post('meta_description');
            $dataUpdate['text_nav'] = $this->input->post('text_nav');
            if($this->km->updatePengaturan($dataUpdate)){
                redirect('backadmin/pengaturan');
            }
        }
	}
    public function uploadImgPosts($name){
        $filename = 'pkbm_posts_'.time();
        // var_dump($filename);
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|webp';
        $config['max_size']    = '2048';
        $config['overwrite'] = true;
        $config['file_name'] = $filename;
        $this->load->library('upload', $config);
        $this->upload->initialize($config); 
        if ($this->upload->do_upload($name)) { 
            // var_dump($this->upload->data());die();
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '', 'filename' => $filename);
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
}
