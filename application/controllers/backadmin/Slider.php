<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Slider_model','sm');
        if(!$this->session->userdata('admin_pkbm')){
            redirect('backadmin/login');
        }
    }
	public function index(){
        $data['view'] = 'back/slider/index';
        $data['slider'] = $this->sm->getSlider()->result();
		$this->load->view('back/layouts',$data);
	}
    public function edit($id = false){
        if($id){
            if($this->input->method(TRUE) == "POST"){
                if($this->uploadImgSlider()){   
                    $filename = $this->uploadImgSlider();
                    // var_dump($filename);die();
                    $dataInsert['alt_img'] = $this->input->post('alt_img');
                    $dataInsert['img_name'] = $filename['file']['file_name'];
                    if($this->sm->updateSlider($id,$dataInsert)){
                        redirect('backadmin/slider');
                    }
                }else{
                    $dataInsert['alt_img'] = $this->input->post('alt_img');
                    if($this->sm->updateSlider($id,$dataInsert)){
                        redirect('backadmin/slider');
                    }
                }
            }
            $data['view'] = 'back/slider/edit';
            $data['data'] = $this->sm->getSlider($id)->row();
		    $this->load->view('back/layouts',$data);
            
        }else{
            show_404();
        }
    }
    public function tambah(){
        if($this->input->method(TRUE) == "POST"){
            if($this->uploadImgSlider()){
                $filename = $this->uploadImgSlider();
                $dataInsert['alt_img'] = $this->input->post('alt_img');
                $dataInsert['img_name'] = $filename['file']['file_name'];
                if($this->sm->insertSlider($dataInsert)){
                    redirect('backadmin/slider');
                }
            }else{
                $dataInsert['alt_img'] = $this->input->post('alt_img');
                if($this->sm->insertSlider($dataInsert)){
                    redirect('backadmin/slider');
                }
            }
        }
        $data['view'] = 'back/slider/tambah';
		$this->load->view('back/layouts',$data);
    }
    public function hapus($id = false){
        if($id){
            if($this->sm->deleteSlider($id)){
                redirect('backadmin/slider');
            }
        }else{
            show_404();
        }
    }
    public function uploadImgSlider(){
        $filename = 'pkbm_slider_'.time();
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|webp';
        $config['max_size']    = '2048';
        $config['overwrite'] = true;
        $config['file_name'] = $filename;
        $this->load->library('upload', $config);
        $this->upload->initialize($config); 
        if ($this->upload->do_upload('img_name')) { 
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '', 'filename' => $filename);
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
}
