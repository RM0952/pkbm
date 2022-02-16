<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Posts_model','pm');
        if(!$this->session->userdata('admin_pkbm')){
            redirect('backadmin/login');
        }
    }
	public function index(){
        $data['view'] = 'back/posts/index';
        $data['posts'] = $this->pm->getPosts()->result();
		$this->load->view('back/layouts',$data);
	}
    public function edit($id = false){
        if($id){
            if($this->input->method(TRUE) == "POST"){
                if($this->uploadImgPosts()){
                    $filename = $this->uploadImgPosts();
                    if($filename['result'] != 'failed'){
                        $dataInsert['image'] = $filename['file']['file_name'];
                    }
                }
                $dataInsert['title'] = $this->input->post('title');
                $dataInsert['id_kategori'] = $this->input->post('kategori');
                $dataInsert['description'] = $this->input->post('description');
                $dataInsert['meta_keyword'] = $this->input->post('meta_keyword');
                $dataInsert['meta_description'] = $this->input->post('meta_description');
                $dataInsert['alt_img'] = $this->input->post('alt_img');
                if($this->pm->updatePosts($id,$dataInsert)){
                    redirect('backadmin/posts');
                }
            }
            $data['view'] = 'back/posts/edit';
            $data['kategori'] = $this->db->get('kategori')->result();
            $data['data'] = $this->pm->getPosts($id)->row();
		    $this->load->view('back/layouts',$data);
            
        }else{
            show_404();
        }
    }
    public function tambah(){
        if($this->input->method(TRUE) == "POST"){
            // var_dump($this->uploadImgPosts());die();
            if($this->uploadImgPosts()){
                $filename = $this->uploadImgPosts();
                if($filename['result'] != 'failed'){
                    $dataInsert['image'] = $filename['file']['file_name'];
                }
            }
            $dataInsert['id_kategori'] = $this->input->post('kategori');
            $dataInsert['title'] = $this->input->post('title');
            $dataInsert['description'] = $this->input->post('description');
            $dataInsert['meta_keyword'] = $this->input->post('meta_keyword');
            $dataInsert['meta_description'] = $this->input->post('meta_description');
            $dataInsert['alt_img'] = $this->input->post('alt_img');
            $dataInsert['createdAt'] = date('Y-m-d H:i:s');
            if($this->pm->insertPosts($dataInsert)){
                redirect('backadmin/posts');
            }
            
        }
        $data['view'] = 'back/posts/tambah';
        // $data['data'] = $this->pm->getPosts($id)->row();
        $data['kategori'] = $this->db->get('kategori')->result();
		$this->load->view('back/layouts',$data);
    }
    public function hapus($id = false){
        if($id){
            if($this->pm->deletePosts($id)){
                redirect('backadmin/posts');
            }
        }else{
            show_404();
        }
    }
    public function uploadImgPosts(){
        $filename = 'pkbm_posts_'.time();
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
